<header class="container-fluid no-padding header-section header-section1">

    <!-- SidePanel -->
    <div id="slidepanel">

        <!-- Top Header -->
        <div class="container-fluid no-padding top-header">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 social-block">
                        <ul>
                            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 logo-block">
                        <a href="index-2.html"><img src="{{asset('/')}}assets/images/logo.png" alt="logo" /></a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 login-n-switch">

                        <div class="search"><a href="javascript:void(0);" id="search" title="Search"><i class="icon icon-Search"></i></a></div>
                        <div class="menu-switch"><a href="javascript:void(0);"><i class="fa fa-bars"></i></a></div>
                    </div>
                </div>
                <!-- Search Box -->
                <div class="search-box">
                    <span><i class="icon_close"></i></span>
                    <form><input type="text" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
                </div><!-- Search Box /- -->
            </div><!-- Container /- -->
        </div><!-- Top Header /- -->

    </div><!-- SidePanel /- -->

    <div class="container-fluid no-padding menu-block">
        <!-- Container -->
        <div class="container">
            <!-- nav -->
            <nav class="navbar navbar-default ow-navigation">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index-2.html" class="navbar-brand"><img src="{{asset('/')}}assets/images/logo.png" alt="logo" /></a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav menu-open">
                        <li class="{{ Route::is('/') ? 'active' : '' }}">
                            <a href="{{route('/')}}" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">হোম</a>
                            <i class="ddl-switch fa fa-angle-down"></i>

                        </li>
                        <li class="dropdown ">
                            <a href="#" title="Pages" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">ব্লগ ক্যাটাগরি</a>
                            <i class="ddl-switch fa fa-angle-down"></i>
                            <ul class="dropdown-menu">
                                @foreach($categories as $category)
                                <li><a href="{{route('category-blogs',['id'=>$category->id])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{Route::is('contact') ? 'active' : ''}}"><a href="{{route('contact')}}" title="Technology">কন্টাক্ট</a></li>
                        <li><a href="sports.html" title="Sports">এবাউট আস</a></li>
                        <li class="{{Route::is('login') ? 'active' : ''}}"><a href="{{route('login')}}" title="Lifestyle">লগ ইন</a></li>


                    </ul>
                </div><!--/.nav-collapse -->
                <div id="loginpanel" class="desktop-hide">
                    <div class="right" id="toggle">
                        <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
                        <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
                    </div>
                </div>
            </nav><!-- nav /- -->
        </div><!-- Container /- -->
    </div>
</header>