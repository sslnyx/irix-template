<div class="side-menu sidebar-inverse">

    {{-- <h1>custom</h1> --}}
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header" style="background-image:url({{ Voyager::image( Voyager::setting('admin.bg_image'), voyager_asset('images/bg.jpg') ) }}); background-size: cover; background-position: 0px;position:relative;">
                <div class="dimmer" style='background: linear-gradient(275deg,#242c32,rgba(36,44,50,.95) 34%,rgba(36,44,50,.7));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#c92d353d",endColorstr="#802d353d",GradientType=1);
    opacity: 1;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border-radius: 0;'></div>
               
                <a class="navbar-brand" href="{{ route('voyager.dashboard') }}">
                    <div class="logo-icon-container">
                        <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                        @if($admin_logo_img == '')
                            <img src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
                        @else
                            <img src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon">
                        @endif
                    </div>
                    <div class="title" style="font-weight:bold;">{{Voyager::setting('admin.title', 'VOYAGER')}}</div>
                </a>
            </div><!-- .navbar-header -->

        </div>
        <div id="adminmenu">
            <admin-menu :items="{{ menu('admin', '_json') }}"></admin-menu>
        </div>
    </nav>
</div>
