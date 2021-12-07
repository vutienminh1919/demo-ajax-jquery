<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/admindek-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 03:06:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <title>Admindek | Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description"
          content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs."/>
    <meta name="keywords"
          content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib"/>
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('files/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('files/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/icon/feather/css/feather.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/font-awesome-n.min.css')}}">
    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{asset('files/bower_components/chartist/css/chartist.css')}}" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/widget.css')}}">
</head>

<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-bar"></div>
</div>
<!-- [ Pre-loader ] end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <!-- [ Header ] start -->
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a href="index-2.html">
                        <img class="img-fluid" src="{{asset('files/assets/images/logo.png')}}" alt="Theme-Logo"/>
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu icon-toggle-right"></i>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                        <span class="input-group-prepend search-close">
										<i class="feather icon-x input-group-text"></i>
									</span>
                                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Enter Keyword">
                                    <span class="input-group-append search-btn">
										<i class="feather icon-search input-group-text"></i>
									</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-red">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn"
                                    data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('files/assets/images/avatar-4.jpg')}}"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('files/assets/images/avatar-3.jpg')}}"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('files/assets/images/avatar-4.jpg')}}"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    <span class="badge bg-c-green">3</span>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
                </li>
                </ul>
            </div>
    </div>
    </nav>
    <!-- [ chat user list ] start -->
    <div id="sidebar" class="users p-chat-user showChat">
        <div class="had-container">
            <div class="p-fixed users-main">
                <div class="user-box">
                    <div class="chat-search-box">
                        <a class="back_friendlist">
                            <i class="feather icon-x"></i>
                        </a>
                        <div class="right-icon-control">
                            <div class="input-group input-group-button">
                                <input type="text" id="search-friends" name="footer-email" class="form-control"
                                       placeholder="Search Friend">
                                <div class="input-group-append">
                                    <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                            class="feather icon-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-friend-list">
                        <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online"
                             data-username="Josephin Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-radius img-radius" src="{{asset('files/assets/images/avatar-3.jpg')}}"
                                     alt="Generic placeholder image ">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="chat-header">Josephin Doe</div>
                            </div>
                        </div>
                        <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online"
                             data-username="Lary Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-radius" src="{{asset('files/assets/images/avatar-2.jp')}}g"
                                     alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Lary Doe</div>
                            </div>
                        </div>
                        <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online"
                             data-username="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-radius" src="{{asset('files/assets/images/avatar-4.jpg')}}"
                                     alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Alice</div>
                            </div>
                        </div>
                        <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline"
                             data-username="Alia">
                            <a class="media-left" href="#!">
                                <img class="media-object img-radius" src="{{asset('files/assets/images/avatar-3.jpg')}}"
                                     alt="Generic placeholder image">
                                <div class="live-status bg-default"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline"
                             data-username="Suzen">
                            <a class="media-left" href="#!">
                                <img class="media-object img-radius" src="{{asset('files/assets/images/avatar-2.jpg')}}"
                                     alt="Generic placeholder image">
                                <div class="live-status bg-default"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ chat user list ] end -->

    <!-- [ chat message ] start -->
    <div class="showChat_inner">
        <div class="media chat-inner-header">
            <a class="back_chatBox">
                <i class="feather icon-x"></i> Josephin Doe
            </a>
        </div>
        <div class="main-friend-chat">
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-radius img-radius m-t-5" src="{{asset('files/assets/images/avatar-2.jpg')}}"
                         alt="Generic placeholder image">
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    </div>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">Ohh! very nice</p>
                    </div>
                    <p class="chat-time">8:22 a.m.</p>
                </div>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-radius img-radius m-t-5" src="{{asset('files/assets/images/avatar-2.jpg')}}"
                         alt="Generic placeholder image">
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">can you come with me?</p>
                    </div>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
        </div>
        <div class="chat-reply-box">
            <div class="right-icon-control">
                <div class="input-group input-group-button">
                    <input type="text" class="form-control" placeholder="Write hear . . ">
                    <div class="input-group-append">
                        <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                class="feather icon-message-circle"></i></button>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- [ chat message ] end -->


    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <!-- [ navigation menu ] start -->
            <nav class="pcoded-navbar">
                <div class="nav-list">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigation-label">Information of User:</div>
                        <img style="margin-left: 50px;width: 100px" src="{{\Illuminate\Support\Facades\Auth::user()->avatar ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqchnDJ6zreYOFN7Sag4iGQPEhjseY59SfQ-mf9bN2GpE8fcPXGGO3QC0YLVId0xw2zFU&usqp=CAU'}}" class="img-radius"
                             alt="User-Profile-Image">
                        <div class="pcoded-navigation-label">Name: {{\Illuminate\Support\Facades\Auth::user()->name ?? ''}}</div>

                        <div>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="{{route('admin.login')}}">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- [ navigation menu ] end -->
            <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->

                <!-- [ breadcrumb ] end -->
                <div class="pcoded-inner-content">
                    <div class="main-body">
@yield('content')
                    </div>
                </div>
            </div>
            <!-- [ style Customizer ] start -->
            <div id="styleSelector">
            </div>
            <!-- [ style Customizer ] end -->
        </div>
    </div>
</div>
</div>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->

<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('files/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- waves js -->
<script src="{{asset('files/assets/pages/waves/js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- Float Chart js -->
<script src="{{asset('files/assets/pages/chart/float/jquery.flot.js')}}"></script>
<script src="{{asset('files/assets/pages/chart/float/jquery.flot.categories.js')}}"></script>
<script src="{{asset('files/assets/pages/chart/float/curvedLines.js')}}"></script>
<script src="{{asset('files/assets/pages/chart/float/jquery.flot.tooltip.min.js')}}"></script>
<!-- Chartlist charts -->
<script src="{{asset('files/bower_components/chartist/js/chartist.js')}}"></script>
<!-- amchart js -->
<script src="{{asset('files/assets/pages/widget/amchart/amcharts.js')}}"></script>
<script src="{{asset('files/assets/pages/widget/amchart/serial.js')}}"></script>
<script src="{{asset('files/assets/pages/widget/amchart/light.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('files/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('files/assets/js/vertical/vertical-layout.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/pages/dashboard/custom-dashboard.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/js/script.min.js')}}"></script>
</body>


<!-- Mirrored from demo.dashboardpack.com/admindek-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 03:09:28 GMT -->
</html>
