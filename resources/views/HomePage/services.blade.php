@extends('master')

@section('title', 'Services')

@section('content')

    <!-- Service-->
    <section id="services" class="bg-gradient services-section">
        <div class="container">
            <header class="text-center">
                <h2 data-animate="fadeInDown" class="title">Services</h2>
            </header>
            <div class="row services text-center">
                <div data-animate="fadeInUp" class="col-lg-4">
                    <div class="icon"><i class="fa fa-search"></i></div>
                    <h3 class="heading mb-3 text-400">Consulting</h3>
                    <p class="text-left description">On on produce colonel pointed. Just four sold need over how any. In to september suspicion determine he prevailed admitting. On adapted an as affixed limited on. Giving cousin warmly things no spring mr be abroad. Relation breeding be as repeated strictly followed margaret. One gravity son brought shyness waiting regular led ham.</p>
                </div>
                <div data-animate="fadeInUp" class="col-lg-4">
                    <div class="icon"><i class="fa fa-cogs"></i></div>
                    <h3 class="heading mb-3 text-400">Software Development</h3>
                    <p class="text-left description">Manor we shall merit by chief wound no or would. Oh towards between subject passage sending mention or it. Sight happy do burst fruit to woody begin at. Assurance perpetual he in oh determine as.</p>
                </div>
                <div data-animate="fadeInUp" class="col-lg-4">
                    <div class="icon"><i class="fa fa-tachometer"></i></div>
                    <h3 class="heading mb-3 text-400">PHP webdevelopment</h3>
                    <p class="text-left description">Rooms oh fully taken by worse do. Points afraid but may end law lasted. Was out laughter raptures returned outweigh. Luckily cheered colonel me do we attacks on highest enabled. Tried law yet style child. Bore of true of no be deal.</p>
                </div>
            </div>
            <hr data-animate="fadeInUp">
            <div data-animate="fadeInUp" class="text-center">
                <p class="lead">Would you like to know more or just discuss something?</p>
                <p><a href="mailto:bestpaulpipeloluwa@gmail.com" class="btn btn-outline-light link-scroll">Say Hello</a></p>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section id="testimonials" class="testimonials-section bg-gray">
        <div class="container">
            <header class="text-center mb-2">
                <h2 data-animate="fadeInUp" class="title">My customers said<br><span>about me</span></h2>
                <p data-animate="fadeInUp" class="lead">I am always glad to hear that my customers leave satisfied. Some of them shared with you their insights on our cooperation.</p>
            </header>
            <ul data-animate="fadeInUp" class="owl-carousel owl-theme testimonials equalize-height">
                <li class="item">
                    <div class="testimonial full-height">
                        <div class="text">
                            <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                        </div>
                        <div class="bottom">
                            <div class="icon"><i class="fa fa-quote-left"></i></div>
                            <div class="name-picture"><img alt="" src="{{asset('distribution/img/person-1.jpg')}}>
                                <h5>John McIntyre</h5>
                                <p>CEO, TransTech</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                                <div class="testimonial full-height">
                                    <div class="text">
                                        <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What is happened to me? &quot; he thought. It was not a dream.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="name-picture"><img alt="" src="distribution/img/person-2.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div>
                </li>
                <li class="item">
                    <div class="testimonial full-height">
                        <div class="text">
                            <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                        </div>
                        <div class="bottom">
                            <div class="icon"><i class="fa fa-quote-left"></i></div>
                            <div class="name-picture"><img alt="" src="distribution/img/person-3.jpg">
                                <h5>John McIntyre</h5>
                                <p>CEO, TransTech</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="testimonial full-height">
                        <div class="text">
                            <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                        </div>
                        <div class="bottom">
                            <div class="icon"><i class="fa fa-quote-left"></i></div>
                            <div class="name-picture"><img alt="" src="distribution/img/person-4.jpg">
                                <h5>John McIntyre</h5>
                                <p>CEO, TransTech</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="testimonial full-height">
                        <div class="text">
                            <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                        </div>
                        <div class="bottom">
                            <div class="icon"><i class="fa fa-quote-left"></i></div>
                            <div class="name-picture"><img alt="" src="distribution/img/person-4.jpg">
                                <h5>John McIntyre</h5>
                                <p>CEO, TransTech</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Statistics-->
    <section id="statistics" data-dir="up" style="background: url(&quot;distribution/img/parallax.jpg&quot;);" class="statistics-section text-white parallax parallax">
        <div class="container">
            <div class="row showcase text-center">
                <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-align-justify"></i></div>
                        <h5 class="text-400 mt-4 text-uppercase"><span class="counter">120</span><br>Websites</h5>
                    </div>
                </div>
                <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <h5 class="text-400 mt-4 text-uppercase"><span class="counter">50</span><br>Satisfied Clients</h5>
                    </div>
                </div>
                <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-copy"></i></div>
                        <h5 class="text-400 mt-4 text-uppercase"><span class="counter">320</span><br>Projects</h5>
                    </div>
                </div>
                <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-font"></i></div>
                        <h5 class="text-400 mt-4 text-uppercase"><span class="counter">333</span><br>Magazines and Brochures</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="dark-mask"></div>
    </section>


@endsection
