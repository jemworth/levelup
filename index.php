<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/pace.css">
    <script data-pace-options='{ "ajax": false }' src="//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>New Leads Pipeline</title>
    <!-- CSS -->
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css">
    <link href="node_modules/nestable2/jquery.nestable.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom-style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="header-light sidebar-dark sidebar-expand" ng-app="myApp">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <img class="logo-expand" alt="" src="assets/demo/logo-expand.png">
                    <img class="logo-collapse" alt="" src="assets/demo/logo-collapse.png">
                    <!-- <p>OSCAR</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon">menu</i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            <form class="navbar-search d-none d-sm-block" role="search"><i class="material-icons list-icon">search</i> 
                <input type="text" class="search-query" placeholder="Search anything..."> <a href="javascript:void(0);" class="remove-focus"><i class="material-icons">clear</i></a>
            </form>
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Button: Create New -->
            <div class="btn-list dropdown d-none d-md-flex"><a href="javascript:void(0);" class="btn btn-primary dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon fs-24">playlist_add</i> Create New</a>
                <div class="dropdown-menu dropdown-left animated flipInY"><span class="dropdown-header">Create new ...</span>  <a class="dropdown-item" href="#">Projects</a>  <a class="dropdown-item" href="#">User Profile</a>  <a class="dropdown-item" href="#"><span class="badge badge-pill badge-primary float-right">7</span> To-do Item</a> 
                    <a
                    class="dropdown-item" href="#"><span class="badge badge-pill badge-color-scheme float-right">23</span> Mail</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="material-icons list-icon icon-muted pull-right">settings</i> <strong>Settings</strong></a>
                </div>
            </div>
            <!-- /.btn-list -->
            <!-- Right Menu -->
            <ul class="nav navbar-nav d-none d-lg-block">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">mail_outline</i> <span class="badge badge-border bg-primary">3</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card dropdown-card-dark animated flipInY">
                        <div class="card">
                            <header class="card-header">New messages <span class="mr-l-10 badge badge-border badge-border-inverted bg-primary">3</span>
                            </header>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="assets/demo/users/user6.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Emily Lee</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Hi John!</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="assets/demo/users/user2.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Christopher Palmer</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Like the illustration and the indicator style. Best of luck ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="assets/demo/users/user6.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Emily Lee</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Hi John!</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="assets/demo/users/user2.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Christopher Palmer</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Like the illustration and the indicator style. Best of luck ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"><a href="#" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">event_available</i> <span class="badge badge-border bg-primary">9</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card dropdown-card-dark animated flipInY">
                        <div class="card">
                            <header class="card-header">New notifications <span class="mr-l-10 badge badge-border badge-border-inverted bg-primary">4</span>
                            </header>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="media-heading">To Do</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Meeting with Nathan McCullum on Friday 8 AM ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li><a href="javascript:void(0);" class="right-sidebar-toggle ripple"><i class="material-icons list-icon">comment</i></a>
                </li>
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><span class="avatar thumb-sm"><img src="assets/demo/users/user-image.png" class="rounded-circle" alt=""> <i class="material-icons list-icon">expand_more</i></span></a>
                    <div
                    class="dropdown-menu dropdown-left dropdown-card dropdown-card-wide dropdown-card-dark text-inverse">
                        <div class="card">
                            <header class="card-heading-extra">
                                <div class="row">
                                    <div class="col-8">
                                        <h3 class="mr-b-10 sub-heading-font-family fw-300">Scott Adams</h3><span class="user--online">Available <i class="material-icons list-icon">expand_more</i></span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end"><a href="logout.html" class="mr-t-10"><i class="material-icons list-icon">power_settings_new</i> Logout</a>
                                    </div>
                                    <!-- /.col-4 -->
                                </div>
                                <!-- /.row -->
                            </header>
                            <section class="card-header text-inverse">New notifications <span class="badge badge-border badge-border-inverted bg-danger mr-l-10">4</span>
                            </section>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects and finally added a case study for thus great project ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="media-heading">To Do</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Meeting with Nathan McCullum on Friday 8 AM to discuss about an ongoing project ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                            </ul>
                        </div>
    </div>
    </li>
    </ul>
    <!-- /.navbar-right -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled clearfix">
            <!-- User Details -->
            <div class="side-user">
                <a class="col-sm-12 media clearfix" href="javascript:void(0);">
                    <figure class="media-left media-middle user--online thumb-sm mr-r-10 mr-b-0">
                        <img src="assets/demo/users/user-image.png" class="media-object rounded-circle" alt="">
                    </figure>
                    <div class="media-body hide-menu">
                        <h4 class="media-heading mr-b-5 text-uppercase">Scott Adams</h4><span class="user-type fs-12">Edit Profile (...)</span>
                    </div>
                </a>
                <div class="clearfix"></div>
                <ul class="nav in side-menu">
                    <li><a href="page-profile.html"><i class="list-icon material-icons">face</i> My Profile</a>
                    </li>
                    <li><a href="app-inbox.html"><i class="list-icon material-icons">mail_outline</i> Inbox</a>
                    </li>
                    <li><a href="page-lock-screen.html"><i class="list-icon material-icons">settings</i> Lock Screen</a>
                    </li>
                    <li><a href="page-login.html"><i class="list-icon material-icons">settings_power</i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.side-user -->
            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">network_check</i> <span class="hide-menu">Dashboard <span class="badge badge-border badge-border-inverted bg-primary pull-right">5</span></span></a>
                        <ul
                        class="list-unstyled sub-menu">
                            <li><a href="../default/index.html">Default</a>
                            </li>
                            <li><a href="../collapse-nav/index.html">Collapsed Nav</a>
                            </li>
                            <li><a href="../horizontal-nav-icons/index.html">Horizontal Nav Icons</a>
                            </li>
                            <li><a href="../horizontal-nav/index.html">Horizontal Nav</a>
                            </li>
                            <li><a href="../ecommerce/index.html">Ecommerce</a>
                            </li>
                            <li><a href="../real-estate/index.html">Real Estate</a>
                            </li>
                            <li><a href="../university/index.html">University</a>
                            </li>
                </ul>
                </li>
                <li class="menu-item-has-children active"><a href="javascript:void(0);" class="ripple"><span class="color-color-scheme"><i class="list-icon material-icons">mail_outline</i> <span class="hide-menu">Apps</span></span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="app-calender.html">Calender</a>
                        </li>
                        <li><a href="app-chat.html">Chat</a>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);">Inbox</a>
                            <ul class="list-unstyled sub-menu">
                                <li><a href="app-inbox.html">Inbox</a>
                                </li>
                                <li><a href="app-inbox-single.html">Inbox single</a>
                                </li>
                                <li><a href="app-inbox-compose.html">Compose mail</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);">Contacts</a>
                            <ul class="list-unstyled sub-menu">
                                <li><a href="app-contacts.html">Contacts List</a>
                                </li>
                                <li><a href="app-contacts-alt.html">Contacts List Alt</a>
                                </li>
                                <li><a href="app-contacts-details.html">Contact Details</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">playlist_add</i> <span class="hide-menu">Tables</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="tables-basic.html">Basic Tables</a>
                        </li>
                        <li><a href="tables-data-table.html">Data Table</a>
                        </li>
                        <li><a href="tables-bootstrap.html">Bootstrap Tables</a>
                        </li>
                        <li><a href="tables-responsive.html">Responsive Tables</a>
                        </li>
                        <li><a href="tables-editable.html">Editable Tables</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">lightbulb_outline</i> <span class="hide-menu">UI Elements <span class="badge badge-border badge-border-inverted bg-primary pull-right">9</span></span></a>
                    <ul
                    class="list-unstyled sub-menu">
                        <li><a href="ui-typography.html">Typography</a>
                        </li>
                        <li><a href="ui-buttons.html">Buttons</a>
                        </li>
                        <li><a href="ui-cards.html">Cards</a>
                        </li>
                        <li><a href="ui-tabs.html">Tabs</a>
                        </li>
                        <li><a href="ui-panels.html">Panels</a>
                        </li>
                        <li><a href="ui-accordions.html">Accordions</a>
                        </li>
                        <li><a href="ui-modals.html">Modals</a>
                        </li>
                        <li><a href="ui-icon-boxes.html">Icon Boxes</a>
                        </li>
                        <li><a href="ui-lists.html">Lists &amp; Media Object</a>
                        </li>
                        <li><a href="ui-user-cards.html">User Cards</a>
                        </li>
                        <li><a href="ui-grid.html">Grid</a>
                        </li>
                        <li><a href="ui-progress.html">Progress Bars</a>
                        </li>
                        <li><a href="ui-notifications.html">Notifications &amp; Alerts</a>
                        </li>
                        <li><a href="ui-pagination.html">Pagination</a>
                        </li>
                        <li><a href="ui-media.html">Media</a>
                        </li>
                        <li><a href="ui-carousel.html">Carousel</a>
                        </li>
                        <li><a href="ui-bootstrap.html">Bootstrap Elements</a>
                        </li>
                        </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">developer_board</i> <span class="hide-menu">Forms</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="form-elements.html">Elements</a>
                        </li>
                        <li><a href="form-material.html">Material Design</a>
                        </li>
                        <li><a href="form-validation.html">Form Validation</a>
                        </li>
                        <li><a href="form-dropzone.html">File Upload</a>
                        </li>
                        <li><a href="form-pickers.html">Picker</a>
                        </li>
                        <li><a href="form-select.html">Select and Multiselect</a>
                        </li>
                        <li><a href="form-tags-categories.html">Tags and Categories</a>
                        </li>
                        <li><a href="form-addons.html">Addons</a>
                        </li>
                        <li><a href="form-editors.html">Editors</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">tune</i> <span class="hide-menu">Charts</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="charts-flot.html">Flot Charts</a>
                        </li>
                        <li><a href="charts-morris.html">Morris Charts</a>
                        </li>
                        <li><a href="charts-js.html">Chart-js</a>
                        </li>
                        <li><a href="charts-sparkline.html">Sparkline Charts</a>
                        </li>
                        <li><a href="charts-knob.html">Knob Charts</a>
                        </li>
                    </ul>
                </li>
                <li class="list-divider"></li>
                <li><a href="#" class="ripple"><i class="list-icon material-icons">notifications_none</i> <span class="hide-menu">Updates</span></a>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">widgets</i> <span class="hide-menu">Widgets</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="widgets.html">Content Widgets</a>
                        </li>
                        <li><a href="widgets-statistics.html">Statistics Widgets</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">add_location</i> <span class="hide-menu">Maps</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="maps-google.html">Google Maps</a>
                        </li>
                        <li><a href="maps-vector.html">Vector Maps</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">lightbulb_outline</i> <span class="hide-menu">Icons</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="icons-material-design.html">Material Design</a>
                        </li>
                        <li><a href="icons-font-awesome.html">Font Awesome</a>
                        </li>
                        <li><a href="icons-mono-social.html">Social Icons</a>
                        </li>
                        <li><a href="icons-weather.html">Weather Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">folder_open</i> <span class="hide-menu">Sample Pages <span class="badge badge-border badge-border-inverted bg-info pull-right">3</span></span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="page-blank.html">Blank Page</a>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);">Email Templates</a>
                            <ul class="list-unstyled sub-menu">
                                <li><a href="email-templates/basic.html">Basic</a>
                                </li>
                                <li><a href="email-templates/billing.html">Billing</a>
                                </li>
                                <li><a href="email-templates/friend-request.html">Friend Request</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="page-lightbox.html">Lightbox Popup</a>
                        </li>
                        <li><a href="page-sitemap.html">Sitemap</a>
                        </li>
                        <li><a href="page-search-results.html">Search Results</a>
                        </li>
                        <li><a href="page-custom-scroll.html">Custom Scroll</a>
                        </li>
                        <li><a href="page-utility-classes.html">Utility Classes</a>
                        </li>
                        <li><a href="page-animations.html">Animations</a>
                        </li>
                        <li><a href="page-faq.html">FAQ</a>
                        </li>
                        <li><a href="page-pricing-table.html">Pricing</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">card_travel</i> <span class="hide-menu">Profile Pages</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="page-profile.html">Profile</a>
                        </li>
                        <li><a href="page-login.html">Login Page</a>
                        </li>
                        <li><a href="page-login2.html">Login Page 2</a>
                        </li>
                        <li><a href="page-register.html">Sign Up</a>
                        </li>
                        <li><a href="page-register2.html">Sign Up 2</a>
                        </li>
                        <li><a href="page-register-3-step.html">3 Step Sign Up</a>
                        </li>
                        <li><a href="page-forgot-pwd.html">Forgot Password</a>
                        </li>
                        <li><a href="page-email-confirm.html">Confirm Email</a>
                        </li>
                        <li><a href="page-lock-screen.html">Lock Screen</a>
                        </li>
                        <li><a href="page-timeline.html">Timeline</a>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);">Error Pages</a>
                            <ul class="list-unstyled sub-menu">
                                <li><a href="page-error-403.html">Error 403</a>
                                </li>
                                <li><a href="page-error-404.html">Error 404</a>
                                </li>
                                <li><a href="page-error-500.html">Error 500</a>
                                </li>
                                <li><a href="page-error-503.html">Error 503</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">shopping_cart</i> <span class="hide-menu">E-Commerce</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="ecommerce-products.html">Products</a>
                        </li>
                        <li><a href="ecommerce-horizontal-products.html">Horizontal Products</a>
                        </li>
                        <li><a href="ecommerce-invoice.html">Invoice</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">filter_list</i> <span class="hide-menu">Multi-level Menu</span></a>
                    <ul class="list-unstyled sub-menu">
                        <li><a href="index.html">Second Level Item</a>
                        </li>
                        <li><a href="index.html">Second Level Item</a>
                        </li>
                        <li class="menu-item-has-children"><a href="index.html">Third Level</a>
                            <ul class="list-unstyled sub-menu">
                                <li><a href="index.html">Third Level Item</a>
                                </li>
                                <li><a href="index.html">Third Level Item</a>
                                </li>
                                <li><a href="index.html">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="page-login.html"><i class="list-icon material-icons">settings_power</i> <span class="hide-menu">Log Out</span></a>
                </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->

        <div class="pipeline-lead-popup popup_overlay">
            <div class="pipeline-lead-list popup__inner__view" ng-controller="pipelineCtrl" ng-init="get_pipelines()">
                <div class="aside__top"><h2 class="aside__head">Leads</h2></div>
                <div class="aside__body">
                    <div class="aside__common-settings">
                        <div class="aside__common-settings-list">
                            <ul class="aside__list">
                                <li class="aside__list-item"  ng-repeat="x in pipelines | orderBy:'name'" ng-class="{aside__list_item_selected : activeMenu === x}">
                                    <a href="#!PipeLine/{{x.id}}" class="aside__list-item-link"  ng-click="setActive(x)">{{x.name}}</a>
                                </li>
                                <li class="aside__list-item">
                                    <a href="#" class="aside__list-item-link">All leads <span class="material-icons">menu</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.aside__body -->
                <div class="aside__footer" ng-controller="addPipelintCtrl">
                    <div class="aside__footer-inner aside__footer--add" ng-click="toggleAddPipleLineForm()" ng-show="showAddPipleLine">
                        <span class="aside_footer-text h-text-overflow">Add pipeline</span>
                        <div class="aside__button"><span class="material-icons">add</span></div>
                    </div>
                    <div class="aside__footer-inner aside__footer--check" ng-show="showPipeLineForm">
                        <form name="addPipline">
                        <input type="text" class="aside__list-text-input h-text-overflow" name="pipelineName" placeholder="New pipeline name" ng-model = "pipelineName" required>
                        <span ng-show="addPipline.pipelineName.$touched && addPipline.pipelineName.$invalid" class="angular-error">Pipeline name is required.</span>
                        <input type="hidden" name="agentID" ng-init="agentID='<?php echo 3887; ?>'" >
                        <div class="aside__button">
                            <span class="material-icons check__list" ng-disabled="addPipline.pipelineName.$dirty && addPipline.pipelineName.$invalid"  ng-click="savePipeline()">check</span>
                        </div>
                    </form>
                    </div>
                </div>
                <!-- /.aside__footer -->
            </div>
            <!-- /.pipeline-lead-list -->
        </div>
        <!-- /.pipeline-lead-popup -->



        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left" ng-controller="pipelineColViewSearch">
                    <h5 class="mr-0 mr-r-5">New leads Pipeline</h5>
                    <div class="sort-icons d-inline-block mx-4">
                        <a href="javascript:void(0)" ng-class="{sort_active : activeMenuForView === 'list'}" class="row-sort material-icons" ng-click="pipelineView('list')">reorder</a>
                        <a href="javascript:void(0)" ng-class="{sort_active : activeMenuForView === 'column'}" class="column-sort material-icons" ng-click="pipelineView('column')">sort</a>
                    </div>
                    <!-- Search Form -->
                    <form class="pipeline-search d-inline-block" role="search"><i class="material-icons list-icon">search</i> 
                        <input type="text" class="search-pipeline" placeholder="Search and filter">
                    </form>
                    <!-- /.navbar-search -->
                </div>
                <div ng-controller="pipelineColSetting">
                    <!-- /.page-title-left -->
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <p class="ml-0 text-muted d-inline-block">4 leads: $10,700</p>
                         <div class="mx-1">...</div>
                         <div> 
                            <a href="javascript:void(0)" class="set_pipeline_col_id block-setting material-icons ml-1" ng-click="get_pipeline_cols()" id="1">settings</a>
                            <a href="#" class="btn btn-outline-primary ml-1 btn-sm btn-rounded ripple">New Lead</a>
                         </div>
                    </div>
                    <!-- /.page-title-right -->
                    <!--popup_overlay -->
                    <div class="pipeline-setting-popup popup_overlay">
                        <div class="pipeline-setting-inner popup__inner__view">
                            <div class="aside__top">
                                <h2 class="aside__head">Pipeline Setting</h2>
                            </div>
                            <div class="aside__body">
                                <div class="aside__common-settings">
                                    <div class="setting_inner">
                                        <div class="setting__inner_heading">
                                            <div class="si__heading_text h-text-overflow" ng-show="showpipelineTitleANdOperation">{{pipline_name}}</div>
                                            <div ng-hide="showPipelineTitleForm">
                                                <form name="updateColName" class="update-pipeline-title">
                                                    <input type="text" class="si__heading_text-input h-text-overflow" value="{{pipline_name}}" id="Pipeline-title" required />
                                                    <span id="angular_error_pipeline_title" ng-hide="showPipeLineTitleError">Name is required.</span>
                                                    <div class="si__heading_events d-flex ml-2 float-right">
                                                        <a href="javascript:void(0);" ng-click="update_pipeline_title()" class="btn-pl-title-done">
                                                        <i class="material-icons">check</i></a>
                                                        <a href="javascript:void(0);" class="btn-pl-title-delete text-danger"><i class="material-icons">delete</i></a>
                                                    </div> 
                                                </form>
                                             </div>
                                                <div class="si__heading_events" ng-show="showpipelineTitleANdOperation">
                                                <a href="javascript:void(0);" ng-click="edit_pipeline_title()" class="btn-pl-edit"><i class="material-icons">edit</i></a>
                                                <a href="javascript:void(0);" class="btn-pl-add btn btn-sm ml-2 btn-primary" ng-click="showAddColForm(1)"><i class="material-icons">add</i> Add</a>
                                            </div>
                                        </div>
                                        <!-- /.setting__inner_heading -->
                                    <div class="pills-input" ng-show="showAddPipeLineCol">
                                        <form name="addPipeLineCol" ng-submit="savePipelineCol()">
                                            <div class="form-group">
                                                <input type="text" class="form-control pipeline-input-text" name="pipelineColName" ng-model = "pipelineColName" required><span ng-show="addPipeLineCol.pipelineColName.$touched && addPipeLineCol.pipelineColName.$invalid" class="angular-error">Name is required.</span>
                                            </div>
                                            <button class="btn btn-sm btn-save-pipeline"  ng-disabled="addPipeLineCol.pipelineColName.$dirty && addPipeLineCol.pipelineColName.$invalid">Save</button>
                                            <button ng-click="showAddColForm(0)" class="btn btn-link btn-cancel-pipeline">Cancel</button>
                                            <input type="text" class="flat" id="piplineColorCode">
                                        </form>
                                    </div>
                                    <div class="setting__inner_pills">
                                        <ol class="list-group pipeline-colunms" ui-sortable="sortableColOptions" id="colunm_list">
                                                <li class="list-group-item text-inverse" ng-repeat="pCol in pipeline_setting_cols" id="{{pCol.id}}" style="background-color:#{{pCol.column_color}};">
                                                    <div id="showColName_{{pCol.id}}" class="d-flex align-content-center" >
                                                        <div class="mr-auto pills-title">{{pCol.column_name}}</div>
                                                        <div> 
                                                            <a href="javascript:void(0);" ng-click="editPipelinCol(pCol.id)"><i class="material-icons pipe-si-edit list-icon">edit</i></a>  
                                                            <a href="javascript:void(0);">
                                                            <i class="material-icons list-icon  pipe-si-delete text-danger">delete</i>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <div id="showEditColName_{{pCol.id}}" style="display:none;">
                                                        <form name="myForm_{{pCol.id}}" ng-submit="submit_pipeline_col_form(pCol.id)">
                                                        <input type="text" name="p_column_name" value="{{pCol.column_name}}" id="p_column_name_{{pCol.id}}" required>
                                                        <span id="angular_error_{{pCol.id}}" ng-hide="true" class="">Name is required.</span>
                                                        <input type="hidden" name="pipeline_col_id" id="p_pipline_id_{{pCol.id}}" value="{{pCol.id}}">
                                                            <div class="pt-2"> 
                                                            <button class="btn btn-success btn-xs" type="submit">Submit</button>
                                                            <button ng-click="editPipelinCancel(pCol.id)" class="btn btn-xs" type="button">Cancel</button>
                                                            <input type="text" class="flat" id="p_pipline_color_{{pCol.id}}">
                                                            </form> 
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <!-- /.setting__inner_pills -->
                                    </div>
                                    <!-- /.setting_inner -->
                                </div>
                            </div>
                            <!-- /.aside__body -->

                        </div>
                        <!-- /.pipeline-lead-list -->
                    </div>
                    <!-- /.pipeline-lead-popup -->
                </div>
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="pipeline-list widget-list">
                <div class="row">
                    <div class="col-md-12 widget-holder">
                        <ng-view></ng-view>
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
        <aside class="right-sidebar scrollbar-enabled">
            <div class="sidebar-chat" data-plugin="chat-sidebar">
                <div class="sidebar-chat-info">
                    <h3>Chat</h3>
                    <p class="text-muted">You can chat with your family and friends in this space.</p>
                </div>
                <div class="chat-list">
                    <h6 class="sidebar-chat-subtitle">Online</h6>
                    <div class="list-group row">
                        <a href="javascript:void(0)" class="list-group-item user--online thumb-xs" data-chat-user="Julein Renvoye">
                            <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt=""> <span class="name">Julien Renvoye</span>  <span class="username">@jrenvoye</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--online thumb-xs" data-chat-user="Eddie Lebanovkiy">
                            <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt=""> <span class="name">Eddie Lebanovskiy</span>  <span class="username">@elebano</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--away thumb-xs" data-chat-user="Cameron Moll">
                            <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> <span class="name">Cameron Moll</span>  <span class="username">@cammoll</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--busy thumb-xs" data-chat-user="Bill S Kenny">
                            <img src="assets/demo/users/user7.jpg" class="rounded-circle" alt=""> <span class="name">Bill S Kenny</span>  <span class="username">@billsk</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--busy thumb-xs" data-chat-user="Trent Walton">
                            <img src="assets/demo/users/user6.jpg" class="rounded-circle" alt=""> <span class="name">Trent Walton</span>  <span class="username">@trentwalton</span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.chat-list -->
                <div class="chat-list">
                    <h6 class="sidebar-chat-subtitle">Offline</h6>
                    <div class="list-group row">
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Julien Renvoye">
                            <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt=""> <span class="name">Julien Renvoye</span>  <span class="username">@jrenvoye</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Eddie Lebaovskiy">
                            <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt=""> <span class="name">Eddie Lebanovskiy</span>  <span class="username">@elebano</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Cameron Moll">
                            <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> <span class="name">Cameron Moll</span>  <span class="username">@cammoll</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Bill S Kenny">
                            <img src="assets/demo/users/user7.jpg" class="rounded-circle" alt=""> <span class="name">Bill S Kenny</span>  <span class="username">@billsk</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Trent Walton">
                            <img src="assets/demo/users/user6.jpg" class="rounded-circle" alt=""> <span class="name">Trent Walton</span>  <span class="username">@trentwalton</span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.chat-list -->
            </div>
            <!-- /.sidebar-chat -->
        </aside>
        <!-- CHAT PANEL -->
        <div class="chat-panel" hidden>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <button type="button" class="minimize" aria-label="Minimize"><span aria-hidden="true"><i class="material-icons">expand_more</i></span>
                    </button> <span class="user-name">John Doe</span>
                </div>
                <!-- /.card-header -->
                <div class="card-block custom-scroll">
                    <div class="messages custom-scroll-content scrollbar-enabled">
                        <div class="current-user-message">
                            <img class="user-image" width="30" height="30" src="assets/demo/users/user1.jpg" alt="">
                            <div class="message">
                                <p>Lorem ipsum dolor sit amet?</p><small>10:00 am</small>
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.current-user-message -->
                        <div class="other-user-message">
                            <img class="user-image" width="30" height="30" src="assets/demo/users/user2.jpg" alt="">
                            <div class="message">
                                <p>Etiam rhoncus. Maecenas tempus, tellus eget condi mentum rhoncus</p><small>10:00 am</small>
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.other-user-message -->
                        <div class="current-user-message">
                            <img class="user-image" width="30" height="30" src="assets/demo/users/user1.jpg" alt="">
                            <div class="message">
                                <img src="assets/demo/chat-message.jpg" alt=""> <small>10:00 am</small>
                            </div>
                            <!-- .,message -->
                        </div>
                        <!-- /.current-user-message -->
                        <div class="current-user-message">
                            <img class="user-image" width="30" height="30" src="assets/demo/users/user1.jpg" alt="">
                            <div class="message">
                                <p>Maecenas nec odio et ante tincidunt tempus.</p><small>10:00 am</small>
                            </div>
                            <!-- .,message -->
                        </div>
                        <!-- /.current-user-message -->
                        <div class="other-user-message">
                            <img class="user-image" width="30" height="30" src="assets/demo/users/user2.jpg" alt="">
                            <div class="message">
                                <p>Donec sodales :)</p><small>10:00 am</small>
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.other-user-message -->
                    </div>
                    <!-- /.messages -->
                    <form action="javascript:void(0)" method="post">
                        <textarea name="message" style="resize: none" placeholder="Type message and hit enter"></textarea>
                        <ul class="list-unstyled list-inline chat-extra-buttons">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="material-icons">insert_emoticon</i></a>
                            </li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="material-icons">attach_file</i></a>
                            </li>
                        </ul>
                        <button class="btn btn-color-scheme btn-circle submit-btn" type="submit"><i class="material-icons">send</i>
                        </button>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer text-center clearfix">2017 © Oscar Admin brought to you by UnifatoThemes</footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-resource.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-sortable/0.15.0/sortable.min.js"></script>
     <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-cookies.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.77/jquery.form-validator.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.js"></script>
    <script src="node_modules/nestable2/jquery.nestable.js"></script>
   
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/custom-JS.js"></script>
    
    <script src="assets/js/pipeline.js"></script>
</body>

</html>