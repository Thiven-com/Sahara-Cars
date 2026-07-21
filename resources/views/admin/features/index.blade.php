@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h4>Features</h4>
                    <h6>Manage Features</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.features.create') }}" class="btn btn-primary">
                        <i class="ti ti-plus me-1"></i>
                        Add Feature
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
                                    <th>Name</th>

                                    <th>Status</th>

                                    <th>Created</th>

                                    <th width="150" class="text-center">Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse($features as $feature)

                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <strong>{{ $feature->name }}</strong>
                                        </td>
                                        <td>
                                            @if($feature->status)
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
                                            {{ $feature->created_at->format('d M Y') }}
                                        </td>

                                        <td class="text-center">

                                            <a href="{{ route('admin.features.edit', $feature->id) }}"
                                                class="btn btn-sm btn-primary">

                                                <i class="ti ti-edit"></i>

                                            </a>

                                            <form action="{{ route('admin.features.destroy', $feature->id) }}" method="POST"
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