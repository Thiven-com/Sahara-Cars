@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">

    <div class="content">

        <div class="page-header">

            <div class="page-title">

                <h4>Contacts</h4>

                <h6>Manage Contact Enquiries</h6>

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

                        <thead class="table-light">

                            <tr>

                                <th>#</th>

                                <th>Name</th>

                                <th>Mobile</th>

                                <th>Email</th>


                                <th>Message</th>

                                <th>Date</th>

                                <th class="text-center">Action</th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($contacts as $contact)

                                <tr>

                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $contact->name }}</td>

                                    <td>{{ $contact->mobile }}</td>

                                    <td>{{ $contact->email }}</td>


                                    <td>{{ Str::limit($contact->message,40) }}</td>

                                    <td>{{ $contact->created_at->format('d M Y') }}</td>

                                    <td class="text-center">

                                        <a href="{{ route('admin.contacts.show',$contact->id) }}"
                                            class="btn btn-sm btn-info">

                                            <i class="ti ti-eye"></i>

                                        </a>

                                        <form action="{{ route('admin.contacts.destroy',$contact->id) }}"
                                            method="POST"
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

                                    <td colspan="8" class="text-center">

                                        No Contacts Found

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

$(function(){

    $('#contactTable').DataTable({

        responsive:true,

        pageLength:10,

        language:{
            search:"Search:",
            searchPlaceholder:"Name / Mobile / Email"
        }

    });

    $('.delete-form').submit(function(e){

        e.preventDefault();

        let form=this;

        Swal.fire({

            title:'Delete Contact?',

            text:'This action cannot be undone.',

            icon:'warning',

            showCancelButton:true,

            confirmButtonColor:'#d33',

            confirmButtonText:'Yes, Delete'

        }).then((result)=>{

            if(result.isConfirmed){

                form.submit();

            }

        });

    });

});

</script>

@endpush