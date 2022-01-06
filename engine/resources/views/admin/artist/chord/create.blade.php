@extends('admin._inc.main')

@section('title', 'Create Artist')

@section('content')

<div class="content">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <form action="{{ route('admin.artist.chord.store', $artist->id) }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Create Chord</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control shadow-none" name="title" placeholder="Input Title" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label>Artist</label>
                            <input type="text" class="form-control shadow-none" name="artist" placeholder="Input Title" value="{{ $artist->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Chord</label>
                            <textarea class="form-control shadow-none" name="content" id="editor1" rows="5" placeholder="Input Chord">{{ old('content') }}</textarea>
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
                            <button type="submit" class="btn btn-primary shadow-none">Input</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection