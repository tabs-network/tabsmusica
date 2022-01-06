@extends('admin._inc.main')

@section('title', 'Edit Chord')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <form action="{{ route('admin.artist.chord.update', $chord->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Edit Chord</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control shadow-none" name="title" placeholder="Input Title" value="{{ $chord->title }}">
                        </div>
                        <div class="form-group">
                            <label>Artist</label>
                            <input type="text" class="form-control shadow-none" name="artist_id" placeholder="Input Title" value="{{ $chord->artist->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Chord</label>
                            <textarea class="form-control shadow-none" name="content" id="editor1" rows="5" placeholder="Input Chord">{{ $chord->content }}</textarea>
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
                            <input type="text" class="form-control shadow-none" maxlength="70" name="meta_title" placeholder="Input Meta Title" value="{{ $chord->meta_title }}">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea class="form-control shadow-none" maxlength="300" name="meta_description" rows="5" placeholder="Input Meta Description">{{ $chord->meta_description }}</textarea>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary shadow-none">Edit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection