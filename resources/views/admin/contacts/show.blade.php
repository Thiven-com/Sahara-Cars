@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">

    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h4>Contact Details</h4>
                <h6>View Contact Enquiry</h6>
            </div>

            <div class="page-btn">
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i> Back
                </a>
            </div>
        </div>

        <div class="card">

            <div class="card-body">

                <table class="table table-bordered">

                    <tr>
                        <th width="200">Name</th>
                        <td>{{ $contact->name }}</td>
                    </tr>

                    <tr>
                        <th>Mobile</th>
                        <td>{{ $contact->mobile }}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{ $contact->email }}</td>
                    </tr>

                    <tr>
                        <th>Message</th>
                        <td>{{ $contact->message }}</td>
                    </tr>

                    <tr>
                        <th>Submitted On</th>
                        <td>{{ $contact->created_at->format('d M Y h:i A') }}</td>
                    </tr>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection