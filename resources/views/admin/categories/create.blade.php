@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Category</h4>
                    <h6>Create New Car Category</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
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

            <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <!-- Left Side -->

                    <div class="col-lg-8">

                        <div class="card">

                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    Category Details
                                </h5>
                            </div>

                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label">
                                        Category Name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"
                                        placeholder="Enter Category Name" required>
                                </div>

                                {{-- <div class="mb-3">
                                    <label class="form-label">
                                        Slug
                                    </label>

                                    <input type="text" class="form-control" id="slug" readonly>
                                </div> --}}

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

                    <!-- Right Side -->

                    <div class="col-lg-4">

                        <div class="card">

                            <div class="card-header">

                                <h5 class="card-title mb-0">
                                    Category Image
                                </h5>

                            </div>

                            <div class="card-body text-center">

                                <img src="https://placehold.co/220x220?text=Category" id="previewImage"
                                    class="img-fluid rounded border mb-3"
                                    style="width:220px;height:220px;object-fit:cover;">

                                <input type="file" name="image" id="image" class="form-control"
                                    accept=".jpg,.jpeg,.png,.webp">

                                <small class="text-muted d-block mt-2">
                                    JPG, PNG, WEBP (Max 2MB)
                                </small>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="card-body text-end">

                        <a href="{{ route('admin.categories.index') }}" class="btn btn-light">

                            Cancel

                        </a>

                        <button type="submit" class="btn btn-primary">

                            <i class="ti ti-device-floppy me-1"></i>

                            Save Category

                        </button>

                    </div>

                </div>

            </form>

        </div>
    </div>

@endsection


@push('scripts')

    <script>

        // Image Preview

        document.getElementById('image').addEventListener('change', function (e) {

            let file = e.target.files[0];

            if (file) {

                let reader = new FileReader();

                reader.onload = function (event) {

                    document.getElementById('previewImage').src = event.target.result;

                }

                reader.readAsDataURL(file);

            }

        });


        // Auto Slug

        $('#name').keyup(function () {

            let slug = $(this).val()
                .toLowerCase()
                .replace(/ /g, '-')
                .replace(/[^\w-]+/g, '');

            $('#slug').val(slug);

        });

    </script>

@endpush