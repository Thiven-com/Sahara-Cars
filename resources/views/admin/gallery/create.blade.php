@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">

        <div class="content">

            <div class="page-header">

                <div class="page-title">

                    <h4>Add Gallery Image</h4>

                    <h6>Create New Gallery Image</h6>

                </div>

            </div>

            <div class="card">

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label>Title</label>

                                <input type="text" name="title" class="form-control">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Sort Order</label>

                                <input type="number" name="sort_order" value="0" class="form-control">

                            </div>


                            <div class="col-md-6 mb-3">

                                <label>Image</label>

                                <input type="file" name="image" class="form-control" accept="image/*" required>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Status</label>

                                <select name="status" class="form-select">

                                    <option value="1">Active</option>

                                    <option value="0">Inactive</option>

                                </select>

                            </div>

                            <div class="col-12">

                                <button class="btn btn-primary">

                                    <i class="ti ti-device-floppy me-1"></i>

                                    Save Gallery

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