@extends('admin._inc.main')

@section('title', 'Artist')

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
            <li class="nav-main-item">
                <a class="nav-main-link active" href="{{ route('admin.artist.chord.index', $artist->id) }}">
                    <i class="nav-main-link-icon fa fa-home"></i>
                    <span class="nav-main-link-name text-uppercase">CHORD</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link active" href="#">
                    <i class="nav-main-link-icon fa fa-home"></i>
                    <span class="nav-main-link-name text-uppercase">VIDEO</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Navigation -->
</div>

<div class="content">
    <div class="text-center mb-4">
        <img src="{{ url('assets/artist/500x500/'.$artist->image) }}" alt="Image" class="rounded-circle" width="200" height="200">
        <h3 class="my-2 text-uppercase">{{ $artist->name }}</h3>
    </div>

    <div class="row">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="{{ route('admin.artist.chord.create', $artist->id) }}">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-success">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-success mb-0">
                        Add New
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="#">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-dark">56</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-muted mb-0">
                        Artist
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">CHORD</h3>
        </div>
        <div class="block-content">
            <form action="#" method="GET">
                <div class="form-group">
                    <div class="input-group">
                        {{-- @if (request()->routeIs('admin.product.search'))
                        <input type="text" class="form-control form-control-alt" name="key" placeholder="Search product/sku" value="{{ request()->key }}">
                        @else
                        <input type="text" class="form-control form-control-alt" name="key" placeholder="Search product/sku">
                        @endif --}}
                        <input type="text" class="form-control form-control-alt" name="key" placeholder="Search Chord">
                        <div class="input-group-append">
                            <span class="input-group-text bg-body border-0">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered table-vcenter">
                    <thead>
                        <tr>
                            <th>Artist</th>
                            <th class="text-center" width="50">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($chord as $v)
                            <tr>
                                <td class="font-size-sm">
                                    <p class="font-w600 mb-1">
                                        <a href="{{ route('admin.artist.chord.edit', $v->id) }}">{{ $v->title }}</a>
                                    </p>
                                </td>
                                <td class="text-center font-size-sm">
                                    <div class="dropdown dropleft">
                                        <button type="button" class="btn btn-primary btn-sm shadow-none" data-toggle="dropdown">
                                            <i class="si si-settings"></i>
                                        </button>
                                        <div class="dropdown-menu font-size-sm">
                                            <a class="dropdown-item" href="{{ route('admin.artist.chord.edit', $v->id) }}"><i class="fa fa-fw fa-edit mr-1"></i> Edit</a>
                                            <a class="dropdown-item" href=""><i class="fa fa-fw fa-trash mr-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <nav aria-label="Photos Search Navigation">  
                <ul class="pagination pagination-sm justify-content-end mt-2">
                    {{ $chord->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection