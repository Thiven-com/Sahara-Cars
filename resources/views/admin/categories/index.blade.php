@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h4>Categories</h4>
                    <h6>Manage Car Categories</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
                        <i class="ti ti-plus me-1"></i>
                        Add Category
                    </a>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card">

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle" id="categoryTable">

                            <thead class="table-light">

                                <tr>
                                    <th width="60">#</th>
                                    <th width="90">Image</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th width="150" class="text-center">Action</th>
                                </tr>

                            </thead>

                            <tbody>

                                @forelse($categories as $category)

                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>

                                            @if($category->image)

                                                <img src="{{ asset($category->image) }}" class="rounded border"
                                                    style="width:65px;height:65px;object-fit:cover;">

                                            @else

                                                <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                                    style="width:65px;height:65px;">

                                                    <i class="ti ti-photo text-muted"></i>

                                                </div>

                                            @endif

                                        </td>

                                        <td>

                                            <strong>{{ $category->name }}</strong>

                                        </td>

                                        <td>

                                            @if($category->status)

                                                <span class="badge bg-success">

                                                    Active

                                                </span>

                                            @else

                                                <span class="badge bg-danger">

                                                    Inactive

                                                </span>

                                            @endif

                                        </td>

                                        <td>

                                            {{ $category->created_at->format('d M Y') }}

                                        </td>

                                        <td class="text-center">

                                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                class="btn btn-sm btn-primary">

                                                <i class="ti ti-edit"></i>

                                            </a>

                                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                                class="d-inline delete-form">

                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-sm btn-danger">

                                                    <i class="ti ti-trash"></i>

                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="7" class="text-center py-4">

                                            No Categories Found

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection

@push('scripts')

    <script>

        $(document).ready(function () {

            $('#categoryTable').DataTable({

                responsive: true,

                pageLength: 10,

                language: {

                    search: "Search Category:",

                    searchPlaceholder: "Category Name"

                }

            });

        });


        $('.delete-form').submit(function (e) {

            e.preventDefault();

            let form = this;

            Swal.fire({

                title: 'Delete Category?',

                text: 'This record will be deleted permanently.',

                icon: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#d33',

                confirmButtonText: 'Yes, Delete'

            }).then((result) => {

                if (result.isConfirmed) {

                    form.submit();

                }

            });

        });

    </script>

@endpush