@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h4>Brands</h4>
                    <h6>Manage Car Brands</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.brands.create') }}" class="btn btn-primary">
                        <i class="ti ti-plus me-1"></i>
                        Add Brand
                    </a>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Card -->
            <div class="card">

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle" id="brandTable">

                            <thead class="table-light">

                                <tr>

                                    <th width="70">#</th>

                                    <th width="90">Logo</th>

                                    <th>Brand Name</th>

                                    <th>Status</th>

                                    <th>Created</th>

                                    <th width="150" class="text-center">Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse($brands as $brand)

                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>

                                            @if($brand->logo)

                                                <img src="{{ asset($brand->logo) }}" class="rounded border"
                                                    style="width:60px;height:60px;object-fit:contain;background:#fff;padding:5px;">

                                            @else

                                                <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                                    style="width:60px;height:60px;">

                                                    <i class="ti ti-photo text-muted"></i>

                                                </div>

                                            @endif

                                        </td>

                                        <td>

                                            <strong>{{ $brand->name }}</strong>

                                        </td>

                                        <td>

                                            @if($brand->status)

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

                                            {{ $brand->created_at->format('d M Y') }}

                                        </td>

                                        <td class="text-center">

                                            <a href="{{ route('admin.brands.edit', $brand->id) }}"
                                                class="btn btn-sm btn-primary">

                                                <i class="ti ti-edit"></i>

                                            </a>

                                            <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST"
                                                class="d-inline delete-form">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger">

                                                    <i class="ti ti-trash"></i>

                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="6" class="text-center">

                                            No Brands Found

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

        $(function () {

            $('#brandTable').DataTable({

                pageLength: 10,

                responsive: true,

                ordering: true,

                language: {
                    search: "Search Brand:",
                    searchPlaceholder: "Enter brand name..."
                }

            });

        });


        $('.delete-form').submit(function (e) {

            e.preventDefault();

            let form = this;

            Swal.fire({

                title: 'Delete Brand?',

                text: 'This action cannot be undone.',

                icon: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#d33',

                confirmButtonText: 'Yes Delete'

            }).then((result) => {

                if (result.isConfirmed) {

                    form.submit();

                }

            });

        });

    </script>

@endpush