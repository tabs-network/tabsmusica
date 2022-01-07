<div class="content-header bg-white-5">
    <a class="font-w600 text-dual" href="index.html">
        <span class="smini-visible">
            <i class="fa fa-circle-notch text-primary"></i>
        </span>
        <span class="smini-hide font-size-h5 tracking-wider">
            TA<span class="font-w400">BS</span>
        </span>
    </a>
    <div>
        <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close"
            href="javascript:void(0)">
            <i class="fa fa-fw fa-times"></i>
        </a>
    </div>
</div>
<div class="js-sidebar-scroll">
    <div class="content-side">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link {{ (request()->routeIs('admin.dashboard.*') ? 'active' : '') }}" href="{{ route('admin.dashboard.index') }}">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ (request()->routeIs('admin.artist.*') ? 'active' : '') }}" href="{{ route('admin.artist.index') }}">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Artist</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ (request()->routeIs('admin.chord.*') ? 'active' : '') }}" href="{{ route('admin.chord.index') }}">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Chord</span>
                </a>
            </li>
            <li class="nav-main-item {{ (request()->routeIs('admin.setting*') ? 'open' : '') }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                    aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-energy"></i>
                    <span class="nav-main-link-name">Setting</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (request()->routeIs('admin.settingMetaTag.*') ? 'active' : '') }}" href="{{ route('admin.settingMetaTag.edit', 1) }}">
                            <span class="nav-main-link-name">Setting Meta Tag</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (request()->routeIs('admin.settingWeb.*') ? 'active' : '') }}" href="{{ route('admin.settingWeb.edit', 1) }}">
                            <span class="nav-main-link-name">Setting Web</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>