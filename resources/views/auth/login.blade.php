<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('meta_description', config('app.name'))">
        <meta name="author" content="@yield('meta_author', config('app.name'))">
        <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon"> <!-- Favicon-->
        <title>RSUPD - Login</title>
        <link href="{{asset('css/reset.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/themes.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/typography.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/shCore.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/jquery.jqplot.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/jquery-ui-1.8.18.custom.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/data-table.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/form.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/ui-elements.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/wizard.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/sprite.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/gradient.css')}}" rel="stylesheet" type="text/css">

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
        <script type="text/javascript">
        $(function(){
            $(window).resize(function(){
                $('.login_container').css({
                    position:'absolute',
                    left: ($(window).width() - $('.login_container').outerWidth())/2,
                    top: ($(window).height() - $('.login_container').outerHeight())/2
                });
            });
            // To initially run the function:
            $(window).resize();
        });
        </script>
    </head>
    <body id="theme-default" class="full_block">
        <div id="login_page">
            <div class="login_container">
                <div class="login_header blue_lgel">
                    <ul class="login_branding">
                        <li>
                        <div class="logo_small">
                            <img src="{{asset('storage/'.$logoweb->value)}}" width="120" height="35" alt="bingo">
                        </div>
                        <span>Rumah Sakit Pilihan Utama di Hati Masyarakat</span>
                        </li>
                        <li class="right go_to"><a href="" title="Go to Main Site" class="home">Go To Main Site</a></li>
                    </ul>
                </div>
                <div class="block_container blue_d">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="block_form">
                            <ul>
                                <li class="login_user">
                                    <input id="email" name="email" value="{{ old('email') }}" type="text" placeholder="Email" required>
                                </li>
                                <li class="login_pass">
                                    <input id="password" name="password" type="password" placeholder="Password" required>
                                </li>
                            </ul>
                            <input class="login_btn blue_lgel" value="Login" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                var errorEmail = '@error("email"){{ $message }}@enderror';
                var errorPassword = '@error("password"){{ $message }}@enderror';

                if(errorEmail){
                    var noty_id = noty({
                        layout : 'top',
                        text: errorEmail,
                        modal : true,
                        type : 'error', 
                    });
                }else{
                    if(errorPassword){
                        var noty_id = noty({
                            layout : 'top',
                            text: errorPassword,
                            modal : true,
                            type : 'error', 
                        });
                    }
                }
            });
        </script>
    </body>
</html>