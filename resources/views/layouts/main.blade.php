<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Southall Athletic | Home</title>
    
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/images/favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="{{ asset('public/css/akslider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/donate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/theme.css') }}" rel="stylesheet" type="text/css" />
    <script type='text/javascript' src='../../ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>

    <link rel="stylesheet" href="https://uicdn.toast.com/chart/latest/toastui-chart.min.css" />
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
</head>

<body class="tm-isblog">

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    
    
    <div class="over-wrap">
        
        <!-- Header's upper row START-->
        <div class="toolbar-wrap">
            <div class="uk-container uk-container-center">
                <div class="tm-toolbar uk-clearfix uk-hidden-small">
                    
                    
                    <div class="uk-float-right">
                        <div class="uk-panel">
                            <div class="social-top">
                                <a href="https://www.instagram.com/southall_athletic/?hl=en" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                <a href="https://www.facebook.com/SouthallAthletic/" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                <a href="https://twitter.com/southall_afc" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                <a href="https://www.linkedin.com/company/southall-afc/"><span class="uk-icon-small uk-icon-hover uk-icon-linkedin"></span></a>
                                <!-- <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a> -->
                                <a href="https://www.youtube.com/channel/UC5puOkk0k-yIfngkssGtzWA" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                <!-- <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a> -->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Header's upper row END-->
        
        <!-- Header START-->
        <div class="tm-menu-box">

            <div style="height: 70px;" class="uk-sticky-placeholder">
                <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
                    <div class="uk-width-auto hdr-bg">
                        <a class="tm-logo hdr-logo uk-float-left" href="index.html">
                            <img src="{{ asset('public/images/logo-img.png') }}" alt="logo" title="logo">
                            <span>Southall<br> <span>Athletic</span></span>
                        </a>

                        <ul class="uk-navbar-nav uk-hidden-small">
                            <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('home') }}">Home</a></li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('about-us') }}">About Us</a></li>
                            
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="teams.html">Teams</a></li>
                            
                            <li><a href="news.html">News</a>
                            <li><a href="offline.html">Social media</a>
                            <li><a href="sponsors.html">Sponsors</a>
                            
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="gallery.html">Gallery</a></li>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-1">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li><a href="results.html">Results</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                        </ul>
                        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                    </div>
                </nav>
            </div>

        </div>
        <!-- Header END-->

        @yield('content')

        <!-- Footer START -->
        <div class="bottom-wrapper">
            <div class="tm-bottom-f-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1">
                            <div class="uk-panel">
                                <a class="hdr-logo uk-float-left" href="index.html">
                                    <img src="{{ asset('public/images/logo-img.png') }}" alt="logo" title="logo">
                                    <span>Southall<br> <span>Athletic</span></span>
                                </a>
                                <!-- <div class="footer-logo">
                                    <a href="../index.html"><img src="images/footer-logo-img.png" alt=""><span>Southall</span> Athletic</a>
                                </div> -->
                                <div class="footer-socials">
                                    <div class="social-top">
                                        <a href="https://www.instagram.com/southall_athletic/?hl=en" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                        <a href="https://www.facebook.com/SouthallAthletic/" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                        <a href="https://twitter.com/southall_afc" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                        <a href="https://www.linkedin.com/company/southall-afc/"><span class="uk-icon-small uk-icon-hover uk-icon-linkedin"></span></a>
                                        <a href="https://www.youtube.com/channel/UC5puOkk0k-yIfngkssGtzWA" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                    </div>
                                </div>
                                <div class="clear"></div>

                                <p class="footer-about-text">
                                    Southall Athletic F.C. was started primarily due to the lack of 11-a-side football opportunities within the community, this coincided with the figures released by the FA on how underrepresented the South-East Asian community was in football. 
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="tm-bottom-g-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-g" class="tm-bottom-f footer-wrapper-2">
                        <div class="foot-menu-wrap">
                            <ul class="nav menu " style="padding-left: 0;">
                                <li class="item-165"><a href="about.html">About Us</a>
                                </li>
                                <li class="item-166"><a href="offline.html">Social Media</a>
                                </li>
                                <li class="item-167"><a href="gallery.html">Gallery</a>
                                </li>
                                <li class="item-168"><a href="news.html">News</a>
                                </li>
                                <li class="item-169"><a href="offline.html">Teams</a>
                                </li>
                            </ul>
                        </div>

                        <div class="uk-width-1-1 uk-width-large-1-2">
                            <div  class="uk-panel">
                                <div class="acymailing_module" id="acymailing_module_formAcymailing54111">
                                    <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">
                                        <form id="formAcymailing54111" method="post" name="formAcymailing54111">
                                            <div class="acymailing_module_form">
                                                <div class="mail-title">Newsletters</div>
                                                <!-- <div class="acymailing_introtext">Suspendisse sodales, magna at dignissim cursus, velit ex porttitor eros.</div> -->
                                                <div class="clear"></div>
                                                <div class="space"></div>
                                                <table class="acymailing_form">
                                                    <tbody>
                                                        <tr>
                                                            <td class="acyfield_email acy_requiredField">
                                                                <span class="mail-wrap">
								                                    <input id="user_email_formAcymailing54111" onfocus="if(this.value == 'Enter your email') this.value = '';" onblur="if(this.value=='') this.value='Enter your email';" class="inputbox" name="user[email]" style="width:80%" value="Enter your email" title="Enter your email" type="text">
                                                            </span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="acysubbuttons">
                                                                <span class="submit-wrap">
                                                                    <span class="submit-wrapper">
                                                                        <input class="button subbutton btn btn-primary" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing54111'); }catch(err){alert('The form could not be submitted '+err);return false;}" type="submit">
                                                                    </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <footer id="tm-footer" class="tm-footer">

                <div class="uk-panel">
                    <div class="uk-container uk-container-center">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="footer-wrap" style="display: flex; justify-content: center;">
                                    
                                    <div class="copyrights">Copyright © 2022 <a href="../index.html">Southall Athletic</a>. All Rights Reserved.</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- Footer END -->

        <!-- Mobile Menu Sidebar START-->
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li class="uk-parent uk-active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    
                    <li class="uk-parent"><a href="teams.html">Teams</a></li>

                    <li><a href="news.html">News</a></li>

                    <li class="uk-parent"><a href="offline.html">Social Media</a></li>
                    <li class="uk-parent"><a href="offline.html">Sponsors</a></li>
                    <li class="uk-parent"><a href="gallery.html">gallery</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </div>

        </div>
        <!-- Mobile Menu Sidebar END-->

    </div>

    

    <script type="text/javascript" src="{{ asset('public/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/uikit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/SimpleCounter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/grid.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/slideshow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/slideset.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/components/lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/isotope.pkgd.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/theme.js') }}"></script>
    <script type="text/javascript">
        new SimpleCounter("countdown4", 1476154800, {
        'continue': 0,
        format: '{D} {H} {M} {S}',
        lang: {
            d: {
                single: 'day',
                plural: 'days'
            }, //days
            h: {
                single: 'hr',
                plural: 'hrs'
            }, //hours
            m: {
                single: 'min',
                plural: 'min'
            }, //minutes
            s: {
                single: 'sec',
                plural: 'sec'
            } //seconds
        },
        formats: {
            full: "<span class='countdown_number' style='color:  '>{number} </span> <span class='countdown_word' style='color:  '>{word}</span> <span class='countdown_separator'>:</span>", //Format for full units representation
            shrt: "<span class='countdown_number' style='color:  '>{number} </span>" //Format for short unit representation
        }
    });
    </script>

    @stack('script')

</body>
</html>