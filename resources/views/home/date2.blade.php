<section class="apply-now" id="apply">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h3>For all FAQ</h3>
                            <p>If You Have More Questions Maybe You Can Find From Here</p>
                            <div class="main-button-red">
                                <div class=""><a href="{{route('faqs')}}">All FAQs</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h3>For Your Question</h3>
                            <p>You Can Contact With Us</p>
                            <div class="main-button-yellow">
                                <div class=""><a href="{{route('contact')}}">Ask to Us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordions is-first-expanded">
                    @foreach($faq as $rs)
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>{{$rs->question}}</span>
                                <span class="icon">
                                   <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">{!! $rs->answer !!}</div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
