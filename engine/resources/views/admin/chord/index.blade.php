@extends('admin._inc.main')

@section('title', 'Chord Artist')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="{{ route('admin.chord.create') }}">
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
                        Chord
                    </p>
                </div>
            </a>
        </div>
    </div>

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Chord</h3>
            <div class="block-options">
                <div class="dropdown">
                    <button type="button" class="btn-block-option" id="dropdown-ecom-filters"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filters <i class="fa fa-angle-down ml-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            New
                            <span class="badge badge-success badge-pill">260</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            Out of Stock
                            <span class="badge badge-danger badge-pill">24</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            All
                            <span class="badge badge-primary badge-pill">14503</span>
                        </a>
                    </div>
                </div>
            </div>
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
    
            <!-- All Products Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-vcenter">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th width="200">Artist</th>
                            <th class="text-center" width="50">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chord as $v)
                            <tr>
                                <td class="font-size-sm">
                                    <p class="font-w600 mb-1">
                                        <a href="{{ route('admin.chord.edit', $v->id) }}">{{ $v->title }}</a>
                                    </p>
                                </td>
                                <td class="font-size-sm">
                                    {{ $v->artist->name }}
                                </td>
                                <td class="text-center font-size-sm">
                                    <div class="dropdown dropleft">
                                        <button type="button" class="btn btn-primary btn-sm shadow-none"
                                            data-toggle="dropdown">
                                            <i class="si si-settings"></i>
                                        </button>
                                        <div class="dropdown-menu font-size-sm">
                                            <a class="dropdown-item" href="{{ route('admin.chord.edit', $v->id) }}"><i
                                                    class="fa fa-fw fa-edit mr-1"></i> Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i
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
                    {{ $chord->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection