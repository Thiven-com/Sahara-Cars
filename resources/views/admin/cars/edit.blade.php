@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h4>Edit Car</h4>
                    <h6>Update Vehicle Details</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">
                        <i class="ti ti-arrow-left me-1"></i> Back
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

            <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">

                    <!-- Left Column -->

                    <div class="col-lg-8">

                        <!-- Basic Information -->

                        <div class="card">

                            <div class="card-header">
                                <h5 class="mb-0">Basic Information</h5>
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

                                                                                <option value="{{ $brand->id }}" {{ old('brand_id', $car->brand_id) == $brand->id ?
                                                'selected' : '' }}>

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

                                                                                <option value="{{ $category->id }}" {{ old('category_id', $car->
                                                category_id) == $category->id ? 'selected' : '' }}>

                                                                                    {{ $category->name }}

                                                                                </option>

                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Model
                                        </label>

                                        <input type="text" name="model" class="form-control"
                                            value="{{ old('model', $car->model) }}">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Year
                                        </label>

                                        <input type="number" name="year" class="form-control"
                                            value="{{ old('year', $car->year) }}">

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
                                            value="{{ old('price', $car->price) }}">

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

                                            <option value="">Select</option>

                                            <option value="Petrol" {{ old('fuel_type', $car->
        fuel_type) == 'Petrol' ? 'selected' : '' }}>
                                                Petrol
                                            </option>

                                            <option value="Diesel" {{ old('fuel_type', $car->
        fuel_type) == 'Diesel' ? 'selected' : '' }}>
                                                Diesel
                                            </option>

                                            <option value="CNG" {{ old('fuel_type', $car->fuel_type) == 'CNG' ? 'selected' : '' }}>
                                                CNG
                                            </option>

                                            <option value="Electric" {{ old('fuel_type', $car->
        fuel_type) == 'Electric' ? 'selected' : '' }}>
                                                Electric
                                            </option>

                                            <option value="Hybrid" {{ old('fuel_type', $car->
        fuel_type) == 'Hybrid' ? 'selected' : '' }}>
                                                Hybrid
                                            </option>

                                        </select>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Transmission
                                        </label>

                                        <select name="transmission" class="form-select">

                                            <option value="">Select</option>

                                            <option value="Manual" {{ old('transmission', $car->
        transmission) == 'Manual' ? 'selected' : '' }}>
                                                Manual
                                            </option>

                                            <option value="Automatic" {{ old('transmission', $car->
        transmission) == 'Automatic' ? 'selected' : '' }}>
                                                Automatic
                                            </option>

                                            <option value="CVT" {{ old('transmission', $car->
        transmission) == 'CVT' ? 'selected' : '' }}>
                                                CVT
                                            </option>

                                        </select>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Kilometers Driven
                                        </label>

                                        <input type="number" name="kilometers" class="form-control"
                                            value="{{ old('kilometers', $car->kilometers) }}">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Registration Number
                                        </label>

                                        <input type="text" name="registration_no" class="form-control"
                                            value="{{ old('registration_no', $car->registration_no) }}">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Ownership
                                        </label>

                                        <select name="ownership" class="form-select">

                                            <option value="">Select</option>

                                            <option value="1st Owner" {{ old('ownership', $car->ownership) == '1st
                                                    Owner' ? 'selected' : '' }}>
                                                1st Owner
                                            </option>

                                            <option value="2nd Owner" {{ old('ownership', $car->ownership) == '2nd
                                                    Owner' ? 'selected' : '' }}>
                                                2nd Owner
                                            </option>

                                            <option value="3rd Owner" {{ old('ownership', $car->ownership) == '3rd
                                                    Owner' ? 'selected' : '' }}>
                                                3rd Owner
                                            </option>

                                            <option value="4th Owner" {{ old('ownership', $car->ownership) == '4th
                                                    Owner' ? 'selected' : '' }}>
                                                4th Owner
                                            </option>

                                        </select>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Insurance
                                        </label>

                                        <input type="text" name="insurance" class="form-control"
                                            value="{{ old('insurance', $car->insurance) }}">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Insurance Valid Till
                                        </label>

                                        <input type="date" name="insurance_valid_till" class="form-control"
                                            value="{{ old('insurance_valid_till', $car->insurance_valid_till) }}">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="form-label">
                                            Service History
                                        </label>

                                        <input type="text" name="service_history" class="form-control"
                                            value="{{ old('service_history', $car->service_history) }}">

                                    </div>

                                    <div class="col-md-12">

                                        <label class="form-label">
                                            Accident History
                                        </label>

                                        <input type="text" name="accident_history" class="form-control"
                                            value="{{ old('accident_history', $car->accident_history) }}">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- Right Column -->

                    <div class="col-lg-4">

                        <!-- Thumbnail -->

                        <div class="card">

                            <div class="card-header">
                                <h5 class="mb-0">Thumbnail Image</h5>
                            </div>

                            <div class="card-body text-center">

                                <img src="{{ $car->thumbnail ? asset($car->thumbnail) : 'https://placehold.co/300x220?text=No+Image' }}"
                                    id="thumbnailPreview" class="img-fluid rounded border mb-3"
                                    style="height:220px;width:100%;object-fit:cover;">

                                <input type="file" name="thumbnail" id="thumbnail" class="form-control"
                                    accept=".jpg,.jpeg,.png,.webp">

                                <small class="text-muted mt-2 d-block">
                                    Leave empty to keep the existing image.
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

                                    <input class="form-check-input" type="checkbox" name="featured" value="1" {{
        old('featured', $car->featured) ? 'checked' : '' }}>

                                    <label class="form-check-label">
                                        Featured Car
                                    </label>

                                </div>

                                <div class="form-check form-switch">

                                    <input class="form-check-input" type="checkbox" name="status" value="1" {{
        old('status', $car->status) ? 'checked' : '' }}>

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
                        <h5 class="mb-0">Technical Specifications</h5>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            @php
                                $specs = [
                                    'engine' => 'Engine',
                                    'power' => 'Power',
                                    'torque' => 'Torque',
                                    'fuel_tank' => 'Fuel Tank',
                                    'mileage' => 'Mileage',
                                    'drive_type' => 'Drive Type',
                                    'color' => 'Color',
                                    'seating_capacity' => 'Seating Capacity',
                                    'body_type' => 'Body Type',
                                    'ground_clearance' => 'Ground Clearance',
                                    'boot_space' => 'Boot Space',
                                    'top_speed' => 'Top Speed',
                                    'airbags' => 'Airbags',
                                ];
                            @endphp

                            @foreach($specs as $field => $label)

                                <div class="col-md-4 mb-3">

                                    <label class="form-label">{{ $label }}</label>

                                    <input type="text" name="{{ $field }}" class="form-control"
                                        value="{{ old($field, $car->$field) }}">

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>

                <!-- Features -->

                <div class="card mt-3">

                    <div class="card-header">
                        <h5 class="mb-0">Car Features</h5>
                    </div>

                    <div class="card-body">

                        @php
                            $selectedFeatures = old(
                                'features',
                                $car->features->pluck('id')->toArray()
                            );
                        @endphp

                        <div class="row">

                            @foreach($features as $feature)

                                                <div class="col-lg-3 col-md-4 col-6 mb-3">

                                                    <div class="form-check">

                                                        <input class="form-check-input" type="checkbox" name="features[]"
                                                            id="feature{{ $feature->id }}" value="{{ $feature->id }}" {{
                                in_array($feature->id, $selectedFeatures) ? 'checked' : '' }}>

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

                <!-- Existing Gallery -->

                <div class="card mt-3">

                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h5 class="mb-0">Existing Gallery</h5>

                        <span class="badge bg-primary">
                            {{ $car->galleries->count() }} Images
                        </span>

                    </div>

                    <div class="card-body">

                        <div class="row">

                            @forelse($car->galleries as $gallery)

                                <div class="col-lg-3 col-md-4 col-6 mb-4">

                                    <div class="card shadow-sm">

                                        <img src="{{ asset($gallery->image) }}" class="card-img-top"
                                            style="height:180px;object-fit:cover;">

                                        <div class="card-body p-2">

                                            {{-- <form action="{{ route('admin.cars.gallery.delete', $gallery->id) }}"
                                                method="POST" onsubmit="return confirm('Delete this image?')">

                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger btn-sm w-100">

                                                    <i class="ti ti-trash me-1"></i>

                                                    Delete

                                                </button>

                                            </form> --}}
                                            <a href="{{ route('admin.cars.gallery.delete', $gallery->id) }}"
                                                class="btn btn-danger btn-sm" onclick="return confirm('Delete this image?')">
                                                Delete
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            @empty

                                <div class="col-12">

                                    <div class="alert alert-warning mb-0">

                                        No gallery images uploaded.

                                    </div>

                                </div>

                            @endforelse

                        </div>

                    </div>

                </div>

                <!-- Upload New Gallery -->

                <div class="card mt-3">

                    <div class="card-header">
                        <h5 class="mb-0">Add More Gallery Images</h5>
                    </div>

                    <div class="card-body">

                        <input type="file" name="gallery[]" id="gallery" class="form-control" accept=".jpg,.jpeg,.png,.webp"
                            multiple>

                        <small class="text-muted">
                            Newly selected images will be added to the existing gallery.
                        </small>

                        <div id="galleryPreview" class="row mt-4"></div>

                    </div>

                </div>
                <!-- Vehicle Overview -->

                <div class="card mt-3">

                    <div class="card-header">
                        <h5 class="mb-0">Vehicle Overview</h5>
                    </div>

                    <div class="card-body">

                        <textarea name="overview" rows="5" class="form-control"
                            placeholder="Short overview about this vehicle...">{{ old('overview', $car->overview) }}</textarea>

                    </div>

                </div>

                <!-- Description -->

                <div class="card mt-3">

                    <div class="card-header">
                        <h5 class="mb-0">Description</h5>
                    </div>

                    <div class="card-body">

                        <textarea name="description" id="description" class="form-control"
                            rows="10">{{ old('description', $car->description) }}</textarea>

                    </div>

                </div>

                <!-- Buttons -->

                <div class="text-end mt-4 mb-5">

                    <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">

                        <i class="ti ti-arrow-left me-1"></i>

                        Cancel

                    </a>

                    <button type="submit" class="btn btn-primary">

                        <i class="ti ti-device-floppy me-1"></i>

                        Update Car

                    </button>

                </div>

            </form>

        </div>
    </div>

@endsection

@push('scripts')

    <script>

        $(document).ready(function () {

            $('.select2').select2({
                width: '100%'
            });

        });

    </script>

    <script>

        $('#thumbnail').on('change', function () {

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

                    $('#galleryPreview').append(`

                        <div class="col-lg-3 col-md-4 col-6 mb-3">

                            <div class="card">

                                <img src="${e.target.result}"
                                     class="card-img-top"
                                     style="height:180px;object-fit:cover;">

                            </div>

                        </div>

                    `);

                };

                reader.readAsDataURL(files[i]);

            }

        });

    </script>

    @if(config('app.editor') == 'summernote')

        <script>

            $(function () {

                $('#description').summernote({

                    height: 350

                });

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