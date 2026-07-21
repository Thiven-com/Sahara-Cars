@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">

        <div class="content">

            <div class="page-header">

                <div class="page-title">

                    <h4>Enquiries</h4>

                    <h6>Manage Enquiries</h6>

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

                        <table class="table table-hover align-middle" id="contactTable">

                            <thead>

                                <tr>

                                    <th>#</th>

                                    <th>Name</th>

                                    <th>Mobile</th>

                                    <th>Email</th>

                                    <th>Car</th>

                                    <th>Purchase Time</th>

                                    <th>Enquiry Type</th>

                                    <th>Date</th>

                                    <th class="text-center">Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach($enquiries as $enquiry)

                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $enquiry->name }}</td>

                                        <td>{{ $enquiry->mobile }}</td>

                                        <td>{{ $enquiry->email }}</td>

                                        <td>{{ optional($enquiry->car)->model }}</td>

                                        <td>{{ $enquiry->purchase_time }}</td>

                                        <td>{{ $enquiry->enquiry_type }}</td>

                                        <td>{{ $enquiry->created_at->format('d M Y') }}</td>

                                        <td class="text-center">

                                            <a href="{{ route('admin.enquiries.show', $enquiry->id) }}"
                                                class="btn btn-sm btn-info">

                                                <i class="ti ti-eye"></i>

                                            </a>

                                            <form action="{{ route('admin.enquiries.destroy', $enquiry->id) }}" method="POST"
                                                class="d-inline delete-form">

                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-sm btn-danger">

                                                    <i class="ti ti-trash"></i>

                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                @endforeach

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

            $('#contactTable').DataTable({

                responsive: true,

                pageLength: 10,

                language: {
                    search: "Search:",
                    searchPlaceholder: "Name / Mobile / Email"
                }

            });

            $('.delete-form').submit(function (e) {

                e.preventDefault();

                let form = this;

                Swal.fire({

                    title: 'Delete Contact?',

                    text: 'This action cannot be undone.',

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

        });

    </script>

@endpush