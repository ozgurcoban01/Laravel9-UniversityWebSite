
<!-- Sub Header -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">


                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('index')}}" class="logo">
                        Edu Meeting
                    </a>

                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('ourteachers')}}">Teachers</a></li>
                        <li class="has-sub">
                            <a href="{{asset('assets')}}/javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                                <li><a href="{{route('references')}}">References</a></li>
                            </ul>
                        </li>


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
