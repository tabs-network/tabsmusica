@extends('admin._inc.main')

@section('title', 'Artist')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="{{ route('admin.artist.create') }}">
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
                    <div class="font-size-h2 text-dark">{{ $count }}</div>
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
            <h3 class="block-title">Artist</h3>
        </div>
        <div class="block-content">
            <form action="{{ route('admin.artist.search') }}" method="GET">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-alt" name="key" placeholder="Search Artist" value="{{ request('key') }}">
                        <div class="input-group-append">
                            <span class="input-group-text bg-body border-0">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
    
            <!-- All Products Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-vcenter">
                    <thead>
                        <tr>
                            <th>Artist</th>
                            <th class="text-center" width="50">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artist as $v)
                            <tr>
                                <td class="font-size-sm">
                                    <p class="font-w600 mb-1">
                                        <a href="{{ route('admin.artist.chord.index', $v->id) }}">{{ $v->name }}</a>
                                    </p>
                                </td>
                                <td class="text-center font-size-sm">
                                    <div class="dropdown dropleft">
                                        <button type="button" class="btn btn-primary btn-sm shadow-none"
                                            data-toggle="dropdown">
                                            <i class="si si-settings"></i>
                                        </button>
                                        <div class="dropdown-menu font-size-sm">
                                            <a class="dropdown-item" href="{{ route('admin.artist.edit', $v->id) }}"><i
                                                    class="fa fa-fw fa-edit mr-1"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('admin.artist.chord.index', $v->id) }}"><i
                                                    class="fa fa-fw fa-eye mr-1"></i> Show</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('admin.artist.destroy', $v->id) }}"><i
                                                    class="fa fa-fw fa-trash mr-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END All Products Table -->
    
            <!-- Pagination -->
            <nav aria-label="Photos Search Navigation">  
                <ul class="pagination pagination-sm justify-content-end mt-2">
                    {{ $artist->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection