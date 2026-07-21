@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">

        <div class="content">

            <div class="page-header">

                <div class="page-title">

                    <h4>Edit Gallery</h4>

                    <h6>Update Gallery Image</h6>

                </div>

            </div>

            <div class="card">

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.gallery.update', $gallery->id) }}"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label>Title</label>

                                <input type="text" name="title" value="{{ $gallery->title }}" class="form-control">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Sort Order</label>

                                <input type="number" name="sort_order" value="{{ $gallery->sort_order }}"
                                    class="form-control">

                            </div>

                           

                            <div class="col-md-6 mb-3">

                                <label>Current Image</label>

                                <br>

                                <img src="{{ asset($gallery->image) }}" style="width:150px" class="rounded border">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Replace Image</label>

                                <input type="file" name="image" class="form-control" accept="image/*">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Status</label>

                                <select name="status" class="form-select">

                                    <option value="1" {{ $gallery->status ? 'selected' : '' }}>
                                        Active
                                    </option>

                                    <option value="0" {{ !$gallery->status ? 'selected' : '' }}>
                                        Inactive
                                    </option>

                                </select>

                            </div>

                            <div class="col-12">

                                <button class="btn btn-primary">

                                    <i class="ti ti-device-floppy me-1"></i>

                                    Update Gallery

                                </button>

                                <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">

                                    Cancel

                                </a>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection