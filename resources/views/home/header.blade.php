<!-- Sub Header -->
<div class="sub-header">
{{--    <div style="position: absolute" class="hamburger-menu">--}}
{{--        <input id="menu__toggle" type="checkbox" />--}}
{{--        <label class="menu__btn" for="menu__toggle">--}}
{{--            <div class="line">--}}
{{--                <span class="line"></span>--}}
{{--            </div>--}}
{{--        </label>--}}

{{--        <ul class="menu__box">--}}
{{--            <li><a class="menu__item" href="#">Home</a></li>--}}
{{--            <li><a class="menu__item" href="#">About</a></li>--}}
{{--            <li><a class="menu__item" href="#">Team</a></li>--}}
{{--            <li><a class="menu__item" href="#">Contact</a></li>--}}
{{--            <li><a class="menu__item" href="#">Twitter</a></li>--}}

{{--        </ul>--}}
{{--    </div>--}}
{{----------------------------}}

    <div>
        <div class="menu-wrap">
            <input type="checkbox" class="toggler">
            <div class="hamburger"><div></div></div>
            <div class="menu">
                <div>
                    <div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a href="{{asset('assets')}}/#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{asset('assets')}}/#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{asset('assets')}}/#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="{{asset('assets')}}/#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">


                    <!-- ***** Logo Start ***** -->
                    <a href="{{asset('assets')}}/index.html" class="logo">
                        Edu Meeting
                    </a>

                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{asset('assets')}}/#top" class="active">Home</a></li>
                        <li><a href="{{asset('assets')}}/meetings.html">Meetings</a></li>
                        <li class="scroll-to-section"><a href="{{asset('assets')}}/#apply">Apply Now</a></li>
                        <li class="has-sub">
                            <a href="{{asset('assets')}}/javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="{{asset('assets')}}/meetings.html">Upcoming Meetings</a></li>
                                <li><a href="{{asset('assets')}}/meeting-details.html">Meeting Details</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="{{asset('assets')}}/#courses">Courses</a></li>
                        <li class="scroll-to-section"><a href="{{asset('assets')}}/#contact">Contact Us</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
