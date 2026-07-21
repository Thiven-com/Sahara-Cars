@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h4>Add New Car</h4>
                    <h6>Create New Vehicle</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">
                        <i class="ti ti-arrow-left me-1"></i>
                        Back
                    </a>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Please fix the following errors:</strong>

                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <!-- Left -->

                    <div class="col-lg-8">

                        <!-- Basic Information -->

                        <div class="card">

                            <div class="card-header">

                                <h5 class="mb-0">
                                    Basic Information
                                </h5>

                            </div>

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Brand
                                        </label>

                                        <select name="brand_id" class="form-select select2" required>

                                            <option value="">
                                                Select Brand
                                            </option>

                                            @foreach($brands as $brand)

                                                <option value="{{ $brand->id }}">

                                                    {{ $brand->name }}

                                                </option>

                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Category
                                        </label>

                                        <select name="category_id" class="form-select select2" required>

                                            <option value="">
                                                Select Category
                                            </option>

                                            @foreach($categories as $category)

                                                <option value="{{ $category->id }}">

                                                    {{ $category->name }}

                                                </option>

                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Model
                                        </label>

                                        <input type="text" name="model" class="form-control" value="{{ old('model') }}"
                                            placeholder="BMW X5">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Year
                                        </label>

                                        <input type="number" name="year" class="form-control" value="{{ old('year') }}"
                                            placeholder="2024">

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Pricing -->

                        <div class="card mt-3">

                            <div class="card-header">

                                <h5 class="mb-0">
                                    Pricing
                                </h5>

                            </div>

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <label class="form-label">

                                            Price

                                        </label>

                                        <input type="number" step="0.01" name="price" class="form-control"
                                            value="{{ old('price') }}" placeholder="2500000">

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Vehicle Information -->

                        <div class="card mt-3">

                            <div class="card-header">

                                <h5 class="mb-0">

                                    Vehicle Information

                                </h5>

                            </div>

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Fuel Type

                                        </label>

                                        <select name="fuel_type" class="form-select">

                                            <option value="">
                                                Select
                                            </option>

                                            <option>Petrol</option>

                                            <option>Diesel</option>

                                            <option>CNG</option>

                                            <option>Electric</option>

                                            <option>Hybrid</option>

                                        </select>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Transmission

                                        </label>

                                        <select name="transmission" class="form-select">

                                            <option value="">
                                                Select
                                            </option>

                                            <option>Manual</option>

                                            <option>Automatic</option>

                                            <option>CVT</option>

                                        </select>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Kilometers Driven

                                        </label>

                                        <input type="number" name="kilometers" class="form-control"
                                            value="{{ old('kilometers') }}">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Registration Number

                                        </label>

                                        <input type="text" name="registration_no" class="form-control"
                                            value="{{ old('registration_no') }}">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Ownership

                                        </label>

                                        <select name="ownership" class="form-select">

                                            <option value="">
                                                Select
                                            </option>

                                            <option>1st Owner</option>

                                            <option>2nd Owner</option>

                                            <option>3rd Owner</option>

                                            <option>4th Owner</option>

                                        </select>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Insurance

                                        </label>

                                        <input type="text" name="insurance" class="form-control"
                                            value="{{ old('insurance') }}" placeholder="Comprehensive">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Insurance Valid Till

                                        </label>

                                        <input type="date" name="insurance_valid_till" class="form-control">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">

                                            Service History

                                        </label>

                                        <input type="text" name="service_history" class="form-control"
                                            placeholder="Available">

                                    </div>

                                    <div class="col-md-12">

                                        <label class="form-label">

                                            Accident History

                                        </label>

                                        <input type="text" name="accident_history" class="form-control"
                                            placeholder="No Major Accident">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- Right Side -->

                    <div class="col-lg-4">

                        <!-- Thumbnail -->

                        <div class="card">

                            <div class="card-header">
                                <h5 class="mb-0">Thumbnail Image</h5>
                            </div>

                            <div class="card-body text-center">

                                <img src="https://placehold.co/300x220?text=Thumbnail" id="thumbnailPreview"
                                    class="img-fluid rounded border mb-3" style="height:220px;width:100%;object-fit:cover;">

                                <input type="file" name="thumbnail" id="thumbnail" class="form-control"
                                    accept=".jpg,.jpeg,.png,.webp">

                                <small class="text-muted mt-2 d-block">
                                    JPG, PNG, WEBP
                                </small>

                            </div>

                        </div>

                        <!-- Status -->

                        <div class="card mt-3">

                            <div class="card-header">
                                <h5 class="mb-0">Status</h5>
                            </div>

                            <div class="card-body">

                                <div class="form-check form-switch mb-3">

                                    <input class="form-check-input" type="checkbox" name="featured" value="1">

                                    <label class="form-check-label">

                                        Featured Car

                                    </label>

                                </div>

                                <div class="form-check form-switch">

                                    <input class="form-check-input" type="checkbox" name="status" value="1" checked>

                                    <label class="form-check-label">

                                        Active

                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Technical Specifications -->

                <div class="card mt-3">

                    <div class="card-header">

                        <h5 class="mb-0">

                            Technical Specifications

                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-4 mb-3">

                                <label>Engine</label>

                                <input type="text" name="engine" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Power</label>

                                <input type="text" name="power" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Torque</label>

                                <input type="text" name="torque" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Fuel Tank</label>

                                <input type="text" name="fuel_tank" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Mileage</label>

                                <input type="text" name="mileage" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Drive Type</label>

                                <input type="text" name="drive_type" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Color</label>

                                <input type="text" name="color" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Seating Capacity</label>

                                <input type="text" name="seating_capacity" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Body Type</label>

                                <input type="text" name="body_type" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Ground Clearance</label>

                                <input type="text" name="ground_clearance" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Boot Space</label>

                                <input type="text" name="boot_space" class="form-control">

                            </div>

                            <div class="col-md-4 mb-3">

                                <label>Top Speed</label>

                                <input type="text" name="top_speed" class="form-control">

                            </div>

                            <div class="col-md-4">

                                <label>Airbags</label>

                                <input type="text" name="airbags" class="form-control">

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Features -->

                <div class="card mt-3">

                    <div class="card-header">

                        <h5 class="mb-0">

                            Car Features

                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="row">

                            @foreach($features as $feature)

                                <div class="col-lg-3 col-md-4 col-6 mb-3">

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" name="features[]"
                                            value="{{ $feature->id }}" id="feature{{ $feature->id }}">

                                        <label class="form-check-label" for="feature{{ $feature->id }}">

                                            @if($feature->icon)

                                                <i class="{{ $feature->icon }} me-1"></i>

                                            @endif

                                            {{ $feature->name }}

                                        </label>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>

                <!-- Gallery -->

                <div class="card mt-3">

                    <div class="card-header">

                        <h5 class="mb-0">

                            Gallery Images

                        </h5>

                    </div>

                    <div class="card-body">

                        <input type="file" name="gallery[]" id="gallery" class="form-control" multiple
                            accept=".jpg,.jpeg,.png,.webp">

                        <div id="galleryPreview" class="row mt-3"></div>

                    </div>

                </div>
                <!-- Vehicle Overview -->

                <div class="card mt-3">

                    <div class="card-header">

                        <h5 class="mb-0">
                            Vehicle Overview
                        </h5>

                    </div>

                    <div class="card-body">

                        <textarea name="overview" rows="5" class="form-control"
                            placeholder="Short overview about the vehicle...">{{ old('overview') }}</textarea>

                    </div>

                </div>

                <!-- Description -->

                <div class="card mt-3">

                    <div class="card-header">

                        <h5 class="mb-0">
                            Description
                        </h5>

                    </div>

                    <div class="card-body">

                        <textarea name="description" id="description" rows="8"
                            class="form-control">{{ old('description') }}</textarea>

                    </div>

                </div>

                <!-- Submit -->

                <div class="text-end mt-4 mb-5">

                    <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">

                        Cancel

                    </a>

                    <button type="submit" class="btn btn-primary">

                        <i class="ti ti-device-floppy me-1"></i>

                        Save Car

                    </button>

                </div>

            </form>

        </div>
    </div>

@endsection

@push('scripts')

    <script>

        $(function () {

            $('.select2').select2({
                width: '100%'
            });

        });

    </script>

    <script>

        $('#thumbnail').change(function () {

            let file = this.files[0];

            if (!file) return;

            let reader = new FileReader();

            reader.onload = function (e) {

                $('#thumbnailPreview').attr('src', e.target.result);

            }

            reader.readAsDataURL(file);

        });

    </script>

    <script>

        $('#gallery').on('change', function () {

            $('#galleryPreview').html('');

            let files = this.files;

            for (let i = 0; i < files.length; i++) {

                let reader = new FileReader();

                reader.onload = function (e) {

                    $('#galleryPreview').append(

                        `<div class="col-md-3 mb-3">

                        <img src="${e.target.result}"

                        class="img-fluid rounded border"

                        style="height:180px;width:100%;object-fit:cover;">

                    </div>`

                    );

                }

                reader.readAsDataURL(files[i]);

            }

        });

    </script>

    @if(config('app.editor') == 'summernote')

        <script>

            $('#description').summernote({

                height: 350

            });

        </script>

    @else

        <script>

            ClassicEditor
                .create(document.querySelector('#description'))
                .catch(error => {
                    console.error(error);
                });

        </script>

    @endif

@endpush