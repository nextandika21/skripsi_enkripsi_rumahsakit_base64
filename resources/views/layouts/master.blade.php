<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('meta_description', config('app.name'))">
        <meta name="author" content="@yield('meta_author', config('app.name'))">
        <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon"> <!-- Favicon-->
        <title>{{ config('app.name') }} - @yield('title')</title>

        <link href="{{asset('css/reset.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/themes.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/typography.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/shCore.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/jquery.jqplot.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/jquery-ui-1.8.18.custom.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/data-table.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/form.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/ui-elements.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/wizard.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/sprite.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('css/gradient.css')}}" rel="stylesheet" type="text/css" media="screen">

        <!-- Jquery -->
        <script src="{{asset('js/jquery-1.7.1.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui-1.8.18.custom.min.js')}}"></script>
        <script src="{{asset('js/jquery.ui.touch-punch.js')}}"></script>
        <script src="{{asset('js/chosen.jquery.js')}}"></script>
        <script src="{{asset('js/uniform.jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap-dropdown.js')}}"></script>
        <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
        <script src="{{asset('js/sticky.full.js')}}"></script>
        <script src="{{asset('js/jquery.noty.js')}}"></script>
        <script src="{{asset('js/selectToUISlider.jQuery.js')}}"></script>
        <script src="{{asset('js/fg.menu.js')}}"></script>
        <script src="{{asset('js/jquery.tagsinput.js')}}"></script>
        <script src="{{asset('js/jquery.cleditor.js')}}"></script>
        <script src="{{asset('js/jquery.tipsy.js')}}"></script>
        <script src="{{asset('js/jquery.peity.js')}}"></script>
        <script src="{{asset('js/jquery.simplemodal.js')}}"></script>
        <script src="{{asset('js/jquery.jBreadCrumb.1.1.js')}}"></script>
        <script src="{{asset('js/jquery.colorbox-min.js')}}"></script>
        <script src="{{asset('js/jquery.idTabs.min.js')}}"></script>
        <script src="{{asset('js/jquery.multiFieldExtender.min.js')}}"></script>
        <script src="{{asset('js/jquery.confirm.js')}}"></script>
        <script src="{{asset('js/elfinder.min.js')}}"></script>
        <script src="{{asset('js/accordion.jquery.js')}}"></script>
        <script src="{{asset('js/autogrow.jquery.js')}}"></script>
        <script src="{{asset('js/check-all.jquery.js')}}"></script>
        <script src="{{asset('js/data-table.jquery.js')}}"></script>
        <script src="{{asset('js/ZeroClipboard.js')}}"></script>
        <script src="{{asset('js/TableTools.min.js')}}"></script>
        <script src="{{asset('js/jeditable.jquery.js')}}"></script>
        <script src="{{asset('js/duallist.jquery.js')}}"></script>
        <script src="{{asset('js/easing.jquery.js')}}"></script>
        <script src="{{asset('js/full-calendar.jquery.js')}}"></script>
        <script src="{{asset('js/input-limiter.jquery.js')}}"></script>
        <script src="{{asset('js/inputmask.jquery.js')}}"></script>
        <script src="{{asset('js/iphone-style-checkbox.jquery.js')}}"></script>
        <script src="{{asset('js/meta-data.jquery.js')}}"></script>
        <script src="{{asset('js/quicksand.jquery.js')}}"></script>
        <script src="{{asset('js/raty.jquery.js')}}"></script>
        <script src="{{asset('js/smart-wizard.jquery.js')}}"></script>
        <script src="{{asset('js/stepy.jquery.js')}}"></script>
        <script src="{{asset('js/treeview.jquery.js')}}"></script>
        <script src="{{asset('js/ui-accordion.jquery.js')}}"></script>
        <script src="{{asset('js/vaidation.jquery.js')}}"></script>
        <script src="{{asset('js/mosaic.1.0.1.min.js')}}"></script>
        <script src="{{asset('js/jquery.collapse.js')}}"></script>
        <script src="{{asset('js/jquery.cookie.js')}}"></script>
        <script src="{{asset('js/jquery.autocomplete.min.js')}}"></script>
        <script src="{{asset('js/localdata.js')}}"></script>
        <script src="{{asset('js/excanvas.min.js')}}"></script>
        <script src="{{asset('js/jquery.jqplot.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.dateAxisRenderer.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.cursor.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.logAxisRenderer.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.canvasTextRenderer.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.canvasAxisTickRenderer.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.highlighter.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.pieRenderer.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.barRenderer.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.categoryAxisRenderer.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.pointLabels.min.js')}}"></script>
        <script src="{{asset('js/chart-plugins/jqplot.meterGaugeRenderer.min.js')}}"></script>
        <script src="{{asset('js/custom-scripts.js')}}"></script>
    </head>
    <body id="theme-default" class="full_block">
        <div id="left_bar">
            <div id="primary_nav" class="g_blue">
                <ul>
                    <li><a href="/console/dashboard" title="Dashboard"><span class="icon_block m_dashboard">Dashboard</span></a></li>
                    <li><a href="/console/user" title="User"><span class="icon_block m_users">User</span></a></li>
                    <li><a href="/console/patient" title="Patient"><span class="icon_block p_book">Patient</span></a></li>
                    <li><a href="/console/setting" title="Setting"><span class="icon_block m_settings">Setting</span></a></li>
                </ul>
            </div>
            <div id="start_menu">
                <ul>
                    <li class="jtop_menu">
                    <div class="icon_block black_gel">
                        <span class="start_icon">Quick Menu</span>
                    </div>
                    <ul class="black_gel">
                        <li><a href="/console/dashboard"><span class="list-icon graph_b">&nbsp;</span>Dashboard<span class="mnu_tline">Tagline</span></a></li>
                        <li><a href="/console/user"><span class="list-icon users_b">&nbsp;</span>User<span class="mnu_tline">Tagline</span></a></li>
                        <li><a href="/console/patient"><span class="list-icon book_b">&nbsp;</span>Patient<span class="mnu_tline">Tagline</span></a></li>
                        <li><a href="/console/setting"><span class="list-icon settings_b">&nbsp;</span>Setting<span class="mnu_tline">Tagline</span></a></li>
                    </ul>
                    </li>
                </ul>
            </div>
            <div id="sidebar">
                <div id="secondary_nav">
                    <ul id="sidenav" class="accordion_mnu collapsible">
                        <li>
                            <a href="/console/dashboard"><span class="nav_icon computer_imac"></span> Dashboard</a>
                        </li>
                        <li>
                            <a href="/console/user"><span class="nav_icon user"></span> User</a>
                        </li>
                        <li>
                            <a href="/console/patient"><span class="nav_icon book"></span> Patient</a>
                        </li>
                        <li>
                            <a href="/console/setting"><span class="nav_icon cog"></span> Setting</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="container">
            <div id="header" class="blue_lin">
                <div class="header_left">
                    <div class="logo">
                        <img src="{{asset('storage/setting/logo.png')}}" width="200" height="60" alt="RSUD Pesanggrahan">
                    </div>
                    <div id="responsive_mnu">
                        <a href="#responsive_menu" class="fg-button" id="hierarchybreadcrumb"><span class="responsive_icon"></span>Menu</a>
                        <div id="responsive_menu" class="hidden">
                            <ul>
                                <li><a href="/console/dashboard"> Dashboard</a></li>
                                <li><a href="/console/user"> User</a></li>
                                <li><a href="/console/patient"> Patient</a></li>
                                <li><a href="/console/setting"> Setting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header_right">
                    <div id="user_nav">
                        <ul>
                            <li class="user_thumb"><a href="#"><span class="icon">
                                @if(Auth::user()->photo == null)
                                    <img src="{{asset('images/user_thumb.png')}}" width="30" height="30" alt="{{Auth::user()->name}}"></span></a>
                                @else
                                    <img src="{{asset('storage/'.Auth::user()->photo)}}" width="30" height="30" alt="{{Auth::user()->name}}"></span></a>
                                @endif
                            </li>
                            <li class="user_info"><span class="user_name">{{Auth::user()->name}}</span><span><a href="/console/user/profile/{{Auth::user()->id}}">Profile</a> &#124; <a href="/console/user/changepassword/{{Auth::user()->id}}">Change Password</a></span></li>
                            <li class="logout"><a href="#"><span class="icon"></span>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page_title">
                <span class="title_icon"><span class="computer_imac"></span></span>
                <h3>@yield('title')</h3>
                <div class="top_search">
                    <form action="#" method="post">
                        <ul id="search_box">
                            <li>
                            <input name="" type="text" class="search_input" id="suggest1" placeholder="Search...">
                            </li>
                            <li>
                            <input name="" type="submit" value="" class="search_btn">
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
            <div class="switch_bar">
                <ul>
                    <li>
                        <a href="/console/dashboard">
                            <span class="stats_icon current_work_sl"></span>
                            <span class="label">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/console/user">
                            <span class="stats_icon user_sl"></span>
                            <span class="label">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="/console/patient">
                            <span class="stats_icon administrative_docs_sl"></span>
                            <span class="label">Patient</span>
                        </a>
                    </li>
                    <li>
                        <a href="/console/setting">
                            <span class="stats_icon config_sl"></span>
                            <span class="label">Setting</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="content">
                <div class="grid_container">
                    @yield('content')
                </div>
                <span class="clear"></span>
            </div>
        </div>

        @yield('scripts')
    </body>

    <script>
        $(window).load(function() {
            $('.loader').fadeOut("slow");
        });

        $('.logout').click(function(){
            $.confirm({
                'title'		: 'Keluar',
                'message'	: 'Apakah anda yakin ingin keluar ?',
                'buttons'	: {
                    'Ya'	: {
                        'class'	: 'yes',
                        'action': 
                        function(){
                            $.ajax
                            ({
                                type: 'POST',
                                url: "{{route('logout')}}",
                                dataType: 'json',
                                data: '',
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                success: function(response)
                                {
                                    window.location = '/login';
                                }
                            });
                        }
                    },
                    'Tidak'	: {
                        'class'	: 'no',
                    }
                }
            });
        });
    </script>
</html>