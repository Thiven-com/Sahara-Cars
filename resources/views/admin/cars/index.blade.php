@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->

            <div class="page-header">

                <div class="page-title">

                    <h4>Cars</h4>

                    <h6>Manage Vehicles</h6>

                </div>

                <div class="page-btn">

                    <a href="{{ route('admin.cars.create') }}" class="btn btn-primary">

                        <i class="ti ti-plus me-1"></i>

                        Add New Car

                    </a>

                </div>

            </div>

            @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show">

                    {{ session('success') }}

                    <button class="btn-close" data-bs-dismiss="alert"></button>

                </div>

            @endif

            @if(session('error'))

                <div class="alert alert-danger alert-dismissible fade show">

                    {{ session('error') }}

                    <button class="btn-close" data-bs-dismiss="alert"></button>

                </div>

            @endif

            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="mb-0">

                        Car List

                    </h5>

                    <span class="badge bg-primary">

                        Total :
                        {{ $cars->count() }}

                    </span>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover align-middle" id="carTable">

                            <thead class="table-light">

                                <tr>

                                    <th width="60">
                                        #
                                    </th>

                                    <th width="120">
                                        Image
                                    </th>

                                    <th>
                                        Vehicle
                                    </th>

                                    <th>
                                        Brand
                                    </th>

                                    <th>
                                        Category
                                    </th>

                                    <th>
                                        Year
                                    </th>

                                    <th>
                                        Price
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                    <th>
                                        Featured
                                    </th>

                                    <th width="180">
                                        Action
                                    </th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse($cars as $car)

                                    <tr>

                                        <td>

                                            {{ $loop->iteration }}

                                        </td>

                                        <td>

                                            @if($car->thumbnail)

                                                <img src="{{ asset($car->thumbnail) }}" class="rounded border" width="100"
                                                    height="70" style="object-fit:cover;">

                                            @else

                                                <img src="https://placehold.co/100x70?text=No+Image" class="rounded border">

                                            @endif

                                        </td>

                                        <td>

                                            <strong>

                                                {{ $car->model }}

                                            </strong>

                                            <br>

                                            <small class="text-muted">

                                                {{ $car->registration_no }}

                                            </small>

                                        </td>

                                        <td>

                                            <span class="badge bg-info">

                                                {{ optional($car->brand)->name }}

                                            </span>

                                        </td>

                                        <td>

                                            <span class="badge bg-secondary">

                                                {{ optional($car->category)->name }}

                                            </span>

                                        </td>

                                        <td>

                                            {{ $car->year }}

                                        </td>

                                        <td>

                                            <strong>

                                                ₹ {{ number_format($car->price) }}

                                            </strong>

                                        </td>

                                        <td>

                                            @if($car->status)

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

                                            @if($car->featured)

                                                <span class="badge bg-warning text-dark">

                                                    Featured

                                                </span>

                                            @else

                                                <span class="badge bg-light text-dark border">

                                                    Normal

                                                </span>

                                            @endif

                                        </td>

                                        <td>
                                            <div class="d-flex gap-1">

                                                <!-- Edit -->

                                                <a href="{{ route('admin.cars.edit', $car->id) }}"
                                                    class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Edit">

                                                    <i class="ti ti-edit"></i>

                                                </a>

                                                <!-- Status Toggle -->

                                                <a href="{{ route('admin.cars.status', $car->id) }}"
                                                    class="btn btn-sm {{ $car->status ? 'btn-success' : 'btn-secondary' }}"
                                                    data-bs-toggle="tooltip"
                                                    title="{{ $car->status ? 'Deactivate' : 'Activate' }}"
                                                    onclick="return confirm('Change vehicle status?')">

                                                    @if($car->status)

                                                        <i class="ti ti-check"></i>

                                                    @else

                                                        <i class="ti ti-x"></i>

                                                    @endif

                                                </a>

                                                <!-- Featured Toggle -->

                                                <a href="{{ route('admin.cars.featured', $car->id) }}"
                                                    class="btn btn-sm {{ $car->featured ? 'btn-warning' : 'btn-outline-warning' }}"
                                                    data-bs-toggle="tooltip" title="Toggle Featured"
                                                    onclick="return confirm('Change featured status?')">

                                                    <i class="ti ti-star"></i>

                                                </a>

                                                <!-- Delete -->

                                                <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST"
                                                    class="delete-form d-inline">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                                        title="Delete">

                                                        <i class="ti ti-trash"></i>

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="10" class="text-center py-5">

                                            <img src="https://placehold.co/180x120?text=No+Cars" class="mb-3 rounded">

                                            <h6 class="mb-1">

                                                No Cars Found

                                            </h6>

                                            <p class="text-muted mb-3">

                                                Start by adding your first vehicle.

                                            </p>

                                            <a href="{{ route('admin.cars.create') }}" class="btn btn-primary">

                                                <i class="ti ti-plus me-1"></i>

                                                Add Car

                                            </a>

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    @if(method_exists($cars, 'links'))

                        <div class="mt-4">

                            {{ $cars->links('pagination::bootstrap-5') }}

                        </div>

                    @endif

                </div>

            </div>

        </div>

    </div>

@endsection

@push('scripts')

    <script>

        $(document).ready(function () {

            $('#carTable').DataTable({

                responsive: true,

                autoWidth: false,

                pageLength: 10,

                order: [[0, 'desc']],

                columnDefs: [
                    {
                        orderable: false,
                        targets: [1, 9]
                    }
                ],

                language: {
                    search: "Search:",
                    lengthMenu: "Show _MENU_ cars",
                    emptyTable: "No cars available"
                }

            });

        });

    </script>
    <script>

        $(document).ready(function () {

            /*
            |--------------------------------------------------------------------------
            | Bootstrap Tooltip
            |--------------------------------------------------------------------------
            */

            $('[data-bs-toggle="tooltip"]').each(function () {

                new bootstrap.Tooltip(this);

            });

        });

    </script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        $(document).on('submit', '.delete-form', function (e) {

            e.preventDefault();

            let form = this;

            Swal.fire({

                title: 'Delete Car?',

                text: "This action cannot be undone.",

                icon: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#dc3545',

                cancelButtonColor: '#6c757d',

                confirmButtonText: 'Yes, Delete',

                cancelButtonText: 'Cancel'

            }).then((result) => {

                if (result.isConfirmed) {

                    form.submit();

                }

            });

        });

    </script>

    <style>
        #carTable tbody tr {

            transition: .25s;

        }

        #carTable tbody tr:hover {

            background: #f8fafc;

        }

        #carTable td {

            vertical-align: middle;

        }

        #carTable img {

            transition: .3s;

            cursor: pointer;

        }

        #carTable img:hover {

            transform: scale(1.08);

        }

        .action-btn {

            width: 36px;

            height: 36px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 8px;

        }

        .badge {

            font-size: 12px;

            padding: 7px 10px;

        }

        .card {

            border: none;

            box-shadow: 0 2px 10px rgba(0, 0, 0, .06);

        }

        .table thead th {

            background: #f8f9fa;

            font-weight: 600;

            white-space: nowrap;

        }

        .dataTables_filter input {

            border-radius: 8px !important;

        }

        .dataTables_length select {

            border-radius: 8px !important;

        }
    </style>

@endpush