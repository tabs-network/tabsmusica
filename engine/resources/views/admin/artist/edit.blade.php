@extends('admin._inc.main')

@section('title', 'Edit Artist')

@section('content')
<div class="content">
    <form action="{{ route('admin.artist.update', $artist->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-lg-3">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Image</h3>
                    </div>
                    <img src="{{ url('assets/artist/500x500/'.$artist->image) }}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-9">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Edit Artist</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control shadow-none" name="name" value="{{ $artist->name }}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control shadow-none" name="description" rows="5">{{ $artist->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image <span class="font-size-sm">(1080x1080px : jpg/png)</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input js-custom-file-input-enabled" name="image">
                                <label class="custom-file-label" for="example-file-input-custom" style="overflow-x: hidden;"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Meta Config</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text" class="form-control shadow-none" maxlength="70" name="meta_title" value="{{ $artist->meta_title }}">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea class="form-control shadow-none" maxlength="300" name="meta_description" rows="5">{{ $artist->meta_description }}</textarea>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" name="edit_brand" value="1" class="btn btn-primary shadow-none">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection