@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Brand</h4>
                    <h6>Create New Car Brand</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.brands.index') }}" class="btn btn-secondary">
                        <i class="ti ti-arrow-left me-1"></i>
                        Back
                    </a>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Please fix the following errors:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-lg-8">

                        <div class="card">

                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    Brand Details
                                </h5>
                            </div>

                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label">
                                        Brand Name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="name" class="form-control" placeholder="Enter Brand Name"
                                        value="{{ old('name') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Status
                                    </label>

                                    <select name="status" class="form-select">

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

                    <div class="col-lg-4">

                        <div class="card">

                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    Brand Logo
                                </h5>
                            </div>

                            <div class="card-body text-center">

                                <img id="previewImage" src="https://placehold.co/220x220?text=Brand+Logo"
                                    class="img-fluid rounded border mb-3"
                                    style="height:220px;width:220px;object-fit:contain;background:#fafafa;">

                                <input type="file" class="form-control" name="logo" id="logo"
                                    accept=".jpg,.jpeg,.png,.webp">

                                <small class="text-muted mt-2 d-block">
                                    JPG, PNG or WEBP
                                </small>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="card-body text-end">

                        <a href="{{ route('admin.brands.index') }}" class="btn btn-light">

                            Cancel

                        </a>

                        <button class="btn btn-primary">

                            <i class="ti ti-device-floppy me-1"></i>

                            Save Brand

                        </button>

                    </div>

                </div>

            </form>

        </div>
    </div>

@endsection

@push('scripts')

    <script>

        document.getElementById('logo').addEventListener('change', function (e) {

            const file = e.target.files[0];

            if (file) {

                const reader = new FileReader();

                reader.onload = function (event) {

                    document.getElementById('previewImage').src = event.target.result;

                }

                reader.readAsDataURL(file);

            }

        });

    </script>

@endpush