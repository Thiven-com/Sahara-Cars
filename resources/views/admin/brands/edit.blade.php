@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h4>Edit Brand</h4>
                    <h6>Update Brand Details</h6>
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

            <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

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

                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $brand->name) }}" placeholder="Enter Brand Name" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        Status
                                    </label>

                                    <select name="status" class="form-select">

                                        <option value="1" {{ $brand->status ? 'selected' : '' }}>
                                            Active
                                        </option>

                                        <option value="0" {{ !$brand->status ? 'selected' : '' }}>
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

                                @if($brand->logo)
                                    <img id="previewImage" src="{{ asset($brand->logo) }}" class="img-fluid rounded border mb-3"
                                        style="width:220px;height:220px;object-fit:contain;background:#fafafa;">
                                @else
                                    <img id="previewImage" src="https://placehold.co/220x220?text=Brand+Logo"
                                        class="img-fluid rounded border mb-3"
                                        style="width:220px;height:220px;object-fit:contain;background:#fafafa;">
                                @endif

                                <input type="file" name="logo" id="logo" class="form-control"
                                    accept=".jpg,.jpeg,.png,.webp">

                                <small class="text-muted d-block mt-2">
                                    Leave empty to keep existing logo.
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

                        <button type="submit" class="btn btn-primary">

                            <i class="ti ti-device-floppy me-1"></i>

                            Update Brand

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

            let file = e.target.files[0];

            if (file) {

                let reader = new FileReader();

                reader.onload = function (event) {

                    document.getElementById('previewImage').src = event.target.result;

                }

                reader.readAsDataURL(file);

            }

        });
    </script>

@endpush