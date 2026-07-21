@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Feature</h4>
                    <h6>Create New Car Feature</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.features.index') }}" class="btn btn-secondary">
                        <i class="ti ti-arrow-left me-1"></i>
                        Back
                    </a>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Please fix the following errors:</strong>

                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <button class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('admin.features.store') }}" method="POST">

                @csrf

                <div class="row">

                    <!-- Left Side -->

                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    Feature Details
                                </h5>
                            </div>

                            <div class="card-body">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Feature Name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="name" class="form-control" placeholder="Ex : Sunroof"
                                        value="{{ old('name') }}" required>

                                </div>

                                <div class="mb-3">

                                    <label class="form-label">
                                        Status
                                    </label>

                                    <select class="form-select" name="status">

                                        <option value="1" selected>
                                            Active
                                        </option>

                                        <option value="0">
                                            Inactive
                                        </option>

                                    </select>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

                <div class="card">

                    <div class="card-body text-end">

                        <a href="{{ route('admin.features.index') }}" class="btn btn-light">

                            Cancel

                        </a>

                        <button type="submit" class="btn btn-primary">

                            <i class="ti ti-device-floppy me-1"></i>

                            Save Feature

                        </button>

                    </div>

                </div>

            </form>

        </div>
    </div>

@endsection


@push('scripts')

    <script>

        $('#icon').keyup(function () {

            let icon = $(this).val().trim();

            if (icon == '') {

                icon = 'ti ti-star';

            }

            $('#previewIcon')
                .attr('class', icon)
                .css('font-size', '70px');

        });

    </script>

@endpush