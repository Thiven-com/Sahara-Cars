@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h4>Gallery</h4>
                <h6>Manage Gallery Images</h6>
            </div>

            <div class="page-btn">
                <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">
                    <i class="ti ti-plus me-1"></i>
                    Add Image
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle" id="galleryTable">

                        <thead class="table-light">

                        <tr>

                            <th width="60">#</th>
                            <th width="90">Image</th>
                            <th>Title</th>
                            <th>Sort Order</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th width="150" class="text-center">Action</th>

                        </tr>

                        </thead>

                        <tbody>

                        @forelse($galleries as $gallery)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>

                                    <img src="{{ asset($gallery->image) }}"
                                         class="rounded border"
                                         style="width:70px;height:70px;object-fit:cover;">

                                </td>

                                <td>{{ $gallery->title ?: '-' }}</td>

                                <td>{{ $gallery->sort_order }}</td>

                                <td>

                                    @if($gallery->status)

                                        <span class="badge bg-success">Active</span>

                                    @else

                                        <span class="badge bg-danger">Inactive</span>

                                    @endif

                                </td>

                                <td>{{ $gallery->created_at->format('d M Y') }}</td>

                                <td class="text-center">

                                    <a href="{{ route('admin.gallery.edit',$gallery->id) }}"
                                       class="btn btn-sm btn-primary">

                                        <i class="ti ti-edit"></i>

                                    </a>

                                    <form action="{{ route('admin.gallery.destroy',$gallery->id) }}"
                                          method="POST"
                                          class="d-inline delete-form">

                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-danger">

                                            <i class="ti ti-trash"></i>

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="7" class="text-center">

                                    No Gallery Images Found

                                </td>

                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection

@push('scripts')

<script>

$(function(){

    $('#galleryTable').DataTable();

    $('.delete-form').submit(function(e){

        e.preventDefault();

        let form=this;

        Swal.fire({

            title:'Delete Image?',

            text:'This image will be deleted.',

            icon:'warning',

            showCancelButton:true,

            confirmButtonColor:'#d33'

        }).then((result)=>{

            if(result.isConfirmed){

                form.submit();

            }

        });

    });

});

</script>

@endpush