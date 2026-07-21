@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h4>Enquiry Details</h4>
                <h6>View Customer Enquiry</h6>
            </div>

            <div class="page-btn">
                <a href="{{ route('admin.enquiries.index') }}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left me-1"></i> Back
                </a>
            </div>
        </div>

        <div class="card">

            <div class="card-body">

                <table class="table table-bordered">

                    <tr>
                        <th width="220">Name</th>
                        <td>{{ $enquiry->name }}</td>
                    </tr>

                    <tr>
                        <th>Mobile</th>
                        <td>{{ $enquiry->mobile }}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{ $enquiry->email }}</td>
                    </tr>

                    <tr>
                        <th>Interested Car</th>
                        <td>{{ optional($enquiry->car)->model ?? '-' }}</td>
                    </tr>

                    <tr>
                        <th>Purchase Time</th>
                        <td>{{ $enquiry->purchase_time ?? '-' }}</td>
                    </tr>

                    <tr>
                        <th>Enquiry Type</th>
                        <td>{{ $enquiry->enquiry_type ?? '-' }}</td>
                    </tr>

                    <tr>
                        <th>Message</th>
                        <td>{{ $enquiry->message ?? '-' }}</td>
                    </tr>

                    <tr>
                        <th>Submitted On</th>
                        <td>{{ $enquiry->created_at->format('d M Y h:i A') }}</td>
                    </tr>

                </table>

            </div>

        </div>

    </div>
</div>

@endsection