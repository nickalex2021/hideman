@extends('Admin.Commont.commont')
@section('content')
<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html">
                                <img class="logo_icon img-responsive" src="{{URL::asset('images/Admin/Index/logo_icon.png')}}" alt="#" />
                            </a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive" src="{{URL::asset('images/Admin/Index/user_img.jpg')}}" alt="#" /></div>
                            <div class="user_info">
                                @if(session()->has('user'))
                                    <h6>{{session()->get('user')}}</h6>
                                @else '游客'
                                @endif
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i>
                                <span>风格</span></a>
                            <ul class="collapse list-unstyled" id="dashboard">
                                <li>
                                    <a href="{{route('dashboard',$type=1)}}">> <span>默认</span></a>
                                </li>
                                <li>
                                    <a href="{{route('dashboard',$type=2)}}">> <span>其他</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('blogs.index')}}">
                                <i class="fa fa-clock-o orange_color"></i>
                                <span>文章管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <i class="fa fa-diamond purple_color"></i>
                                <span>用户管理</span>
                            </a>
                            <ul class="collapse list-unstyled" id="element">
                                <li><a href="{{route('updatePwd')}}">> <span>修改密码</span></a></li>
                                <li><a href="{{route('users.index')}}">> <span>用户列表</span></a></li>
                                <li><a href="icons.html">> <span>Icons</span></a></li>
                                <li><a href="invoice.html">> <span>Invoice</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('category.index')}}">
                                <i class="fa fa-clock-o orange_color"></i>
                                <span>分类管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <i class="fa fa-paper-plane red_color"></i>
                                <span>投诉建议</span></a>
                        </li>
                        <li>
                            <a href="tables.html">
                                <i class="fa fa-table purple_color2"></i>
                                <span>数据表管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('config.index')}}">
                                <i class="fa fa-cog yellow_color"></i>
                                <span>系统设置</span>
                            </a>
                        </li>
                        <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                        <li>
                            <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                            <ul class="collapse list-unstyled" id="apps">
                                <li><a href="email.html">> <span>Email</span></a></li>
                                <li><a href="calendar.html">> <span>Calendar</span></a></li>
                                <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                            <ul class="collapse list-unstyled" id="additional_page">
                                <li>
                                    <a href="profile.html">> <span>Profile</span></a>
                                </li>
                                <li>
                                    <a href="project.html">> <span>Projects</span></a>
                                </li>
                                <li>
                                    <a href="login.html">> <span>Login</span></a>
                                </li>
                                <li>
                                    <a href="404_error.html">> <span>404 Error</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                        <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="index.html"><img class="img-responsive" src="{{URL::asset('images/Admin/Index/logo.png')}}" alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li>
                                            <a class="dropdown-item" href="{{route('superLogout')}}">
                                                <i class="fa fa-sign-out"></i>
                                                <span class="badge">退出</span>
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                                    <ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                <img class="img-responsive rounded-circle" src="{{URL::asset('images/Admin/Index/user_img.jpg')}}" alt="#" />
                                                @if(session()->has('user'))
                                                    <span class="name_user">{{session()->get('user')}}</span>
                                                @else '游客' @endif
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                                <a class="dropdown-item" href="settings.html">Settings</a>
                                                <a class="dropdown-item" href="help.html">Help</a>
                                                <a class="dropdown-item" href="{{route('superLogout')}}"><span>退出</span> <i class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                @yield('inner_content')
            </div>
        </div>
    </div>
</body>
@endsection
