@extends('admin._inc.main')

@section('title', 'Dashboard')

@section('content')

<div class="content">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Setting Website {{ $data->page }}</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.settingWeb.update', $data->id) }}" method="post">
                    @csrf
                    @method('put')
                        <div class="form-group">
                            <label>Website Name</label>
                            <input type="text" class="form-control shadow-none" maxlength="70" name="website_name" value="{{ $data->website_name }}">
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control shadow-none" maxlength="70" name="instagram" value="{{ $data->instagram }}">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control shadow-none" maxlength="70" name="twitter" value="{{ $data->twitter }}">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control shadow-none" maxlength="70" name="facebook" value="{{ $data->facebook }}">
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary shadow-none">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection