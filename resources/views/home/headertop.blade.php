<div class="header_top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="info_wrapper">
                    <div class="contact_info">
                        <ul class="list-unstyled">
                            <li><i class="flaticon-phone-receiver"></i>+90 545 281 22 15</li>
                            <li><i class="flaticon-mail-black-envelope-symbol"></i>cobanozgur55@gmail.com</li>
                        </ul>
                    </div>
                    <div class="login_info">

                            @auth()
                            <ul class="d-flex">
                                    <li class="nav-item"><a href="/userpanel" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>{{Auth::user()->name}}</a></li>
                                    <li class="nav-item"><a href="/logoutuser" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Logout</a></li>
                                </ul>
                              <a href="/admin/user" title="" class="apply_btn">Admin Panel</a>
                            @endauth
                            @guest()
                                <ul class="d-flex">
                                 <li class="nav-item"><a href="/loginuser" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Log in</a></li>
                                  <li class="nav-item"><a href="/registeruser" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Register</a></li>
                                </ul>
                            @endguest


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

