<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
{{--        <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">--}}
        <div>
            <p class="app-sidebar__user-name">{{ Auth::user()->name}}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ url('/' . $page='admin ') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item "href="{{ url('/' . $page='admin/about') }}"><i class="app-menu__icon fa fa-user-circle"></i><span class="app-menu__label">About</span></a></li>
        <li><a class="app-menu__item "href="{{ url('/' . $page='admin/services') }}"><i class=" app-menu__icon fa fa-cog "></i><span class="app-menu__label">Services</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/category') }}"><i class="app-menu__icon fa fa-files-o "></i><span class="app-menu__label">Category</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/projects') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Projects</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/img') }}"><i class="app-menu__icon fa fa-file-image-o"></i><span class="app-menu__label">Images</span></a></li>

        <li><a class="app-menu__item "href="{{ url('/' . $page='admin/slider') }}"><i class=" app-menu__icon fa fa-sliders"></i><span class="app-menu__label">Slider</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/packages') }}"><i class="app-menu__icon fa fa-arrow-circle-left"></i><span class="app-menu__label">Packages</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/team') }}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Team</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/features') }}"><i class="app-menu__icon fa fa-star "></i><span class="app-menu__label">Features</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/testimonials') }}"><i class="app-menu__icon fa fa-commenting"></i><span class="app-menu__label">Testimonials</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/blogs') }}"><i class="app-menu__icon fa fa-database"></i><span class="app-menu__label">Blogs</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/requests') }}"><i class="app-menu__icon fa fa-telegram"></i><span class="app-menu__label">Requests</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/counter') }}"><i class="app-menu__icon fa fa-plus-square"></i><span class="app-menu__label">Counter</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/video') }}"><i class="app-menu__icon fa fa-play"></i><span class="app-menu__label">Video</span></a></li>




    </ul>

</aside>
