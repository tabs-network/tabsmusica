@extends('admin._inc.main')

@section('title', 'Dashboard')

@section('content')

<div class="bg-white p-3 push">
    <!-- Toggle Navigation -->
    <div class="d-lg-none">
        <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
        <button type="button" class="btn btn-block btn-light d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#horizontal-navigation-hover-centered" data-class="d-none">
            Menu - Hover Centered
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- END Toggle Navigation -->

    <!-- Navigation -->
    <div id="horizontal-navigation-hover-centered" class="d-none d-lg-block mt-2 mt-lg-0">
        <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-horizontal-center">
            @foreach($settingMetaTag as $v)
            <li class="nav-main-item">
                <a class="nav-main-link active" href="{{ route('admin.settingMetaTag.edit', $v->id) }}">
                    <i class="nav-main-link-icon fa fa-home"></i>
                    <span class="nav-main-link-name text-uppercase">{{ $v->page }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <!-- END Navigation -->

</div>

<div class="content">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Meta Tag {{ $data->page }}</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.settingMetaTag.update', $data->id) }}" method="post">
                    @csrf
                    @method('put')
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text" class="form-control shadow-none" maxlength="70" name="meta_title" value="{{ $data->meta_title }}">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea class="form-control shadow-none" maxlength="300" name="meta_description" rows="5">{{ $data->meta_description }}</textarea>
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