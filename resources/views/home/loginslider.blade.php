<section class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
        <div class="l-modal__shadow js-modal-hide"></div>
        <div style="height: 100%;width: 100%" class="login_popup login_modal_body">
            <div class="Popup_title d-flex justify-content-between">
                <h2 class="hidden">&nbsp;</h2>
                <!-- Nav tabs -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Register</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Login-->
                            <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                @include('auth.login')
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <form action="#" class="register">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                @include('auth.register')
                                            </div>
                                        </div>

                                </form>
                            </div><!--/.Panel 2-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>  <!-- End Login Signup Option -->
