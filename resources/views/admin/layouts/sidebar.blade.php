<!--aside open-->
<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="index.html">
            <img src="{{ asset('assets/images/logo-1.png') }}" class="header-brand-img desktop-lgo" alt="southall-logo" width="15%">
            <img src="{{ asset('assets/images/logo-1.png') }}" class="header-brand-img dark-logo" alt="southall-logo" width="15%">
            <img src="{{ asset('assets/images/logo-1.png') }}" class="header-brand-img mobile-logo" alt="southall-logo" width="80%">
            <img src="{{ asset('assets/images/logo-1.png') }}" class="header-brand-img darkmobile-logo" alt="southall-logo" width="15%">
        </a>
    </div>
    <div class="app-sidebar3">
        <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    <img src="{{ asset('storage/images/users/' . Auth::user()->photo) }}" alt="user-img" class="avatar-xxl rounded-circle mb-1">
                </div>
                <div class="user-info">
                    <h5 class=" mb-2">{{ Auth::user()->name }}</h5>
                    {{-- <span class="text-muted app-sidebar__user-name text-sm">App Developer</span> --}}
                </div>
            </div>
        </div>
        
        <ul class="side-menu">
            <li class="side-item side-item-category mt-4">Dashboards</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">Teams</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu" style="display: none;">
                    <li><a href="{{ route('teams.create') }}" class="slide-item">Add New Team</a></li>
                    <li><a href="{{ route('teams.index') }}" class="slide-item">All Teams</a></li>
                </ul>
            </li>
            
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">Players</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('players.create') }}" class="slide-item">Add New Player</a></li>
                    <li><a href="{{ route('players.index') }}" class="slide-item">All Players</a></li>
                </ul>
            </li>
            
            {{-- <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">News</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('news.create') }}" class="slide-item">Add New News</a></li>
                    <li><a href="{{ route('news.index') }}" class="slide-item">All News</a></li>
                    <li><a href="{{ route('teams.create') }}" class="slide-item">Add News</a></li>
                    <li><a href="{{ route('teams.index') }}" class="slide-item">All News</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">Affiliates & Partners</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('teams.create') }}" class="slide-item">Add New/a></li>
                    <li><a href="{{ route('teams.index') }}" class="slide-item">All Affiliates & Partners</a></li>
                </ul>
            </li>
            
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">Gallery</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('gallery.create') }}" class="slide-item">Add New</a></li>
                    <li><a href="{{ route('gallery.index') }}" class="slide-item">All Gallery</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">Team Sponsors</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('teams.create') }}" class="slide-item">Add New Team Sponsor/a></li>
                    <li><a href="{{ route('teams.index') }}" class="slide-item">All Team Sponsors</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">Fixtures</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('teams.create') }}" class="slide-item">Add New Fixture/a></li>
                    <li><a href="{{ route('teams.index') }}" class="slide-item">All Fixtures</a></li>
                </ul>
            </li>
            
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">Result</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('teams.create') }}" class="slide-item">Add New Result/a></li>
                    <li><a href="{{ route('teams.index') }}" class="slide-item">All Result</a></li>
                </ul>
            </li> --}}

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">Blog</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.blogs.create') }}" class="slide-item">Add New Blog</a></li>
                    <li><a href="{{ route('admin.blogs.index') }}" class="slide-item">All Blogs</a></li>
                </ul>
            </li>
            
        </ul>
    </div>
</aside>
<!--aside closed-->