@extends('admin._inc.main')

@section('title', 'Create Artist')

@section('content')

<div class="content">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <form action="{{ route('admin.artist.store') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Create Artist</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control shadow-none" name="name" placeholder="Input Name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control shadow-none" name="description" rows="5" placeholder="Input Description">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image <span class="font-size-sm">(1080x1080px : jpg,png)</span></label>
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
                            <input type="text" class="form-control shadow-none" maxlength="70" name="meta_title" placeholder="Input Meta Title" value="{{ old('meta_title') }}">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea class="form-control shadow-none" maxlength="300" name="meta_description" rows="5" placeholder="Input Meta Description">{{ old('meta_description') }}</textarea>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Input</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection