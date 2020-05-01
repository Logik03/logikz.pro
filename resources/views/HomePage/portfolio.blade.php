@extends('master')

@section('title', 'Portfolio')

@section('content')

    <!--
    *** REFERENCES IMAGE ***
    _________________________________________________________
    -->
    <section id="references">
        <div class="container">
            <div class="col-sm-12">
                <div class="mb-5 text-center">
                    <h2 data-animate="fadeInUp" class="title">Projects</h2>
                    <p data-animate="fadeInUp" class="lead">I have worked on dozens of projects so I have picked only the latest for you.</p>
                </div>
                <ul id="filter" data-animate="fadeInUp">
                    <li class="active"><a href="#" data-filter="all">All</a></li>
                    <li><a href="#" data-filter="webdesign">Webdesign</a></li>
                    <li><a href="#" data-filter="seo">SEO</a></li>
                    <li><a href="#" data-filter="marketing">Marketing</a></li>
                    <li><a href="#" data-filter="other">Other</a></li>
                </ul>
                <div id="detail">
                    <div class="row">
                        <div class="col-lg-10 mx-auto"><span class="close">×</span>
                            <div id="detail-slider" class="owl-carousel owl-theme"></div>
                            <div class="text-center">
                                <h1 id="detail-title" class="title"></h1>
                            </div>
                            <div id="detail-content"></div>
                        </div>
                    </div>
                </div>
                <!-- Reference detail-->
                <div id="references-masonry" data-animate="fadeInUp">
                    <div class="row">
                        <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="distribution/img/portfolio-1.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Project name</h3>
                                            <p>Short project description goes here...</p>
                                        </div>
                                    </div></a>
                                <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="distribution/img/portfolio-2.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Project name 2</h3>
                                            <p>Short project description goes here...</p>
                                        </div>
                                    </div></a>
                                <div data-images="distribution/img/main-slider3.jpg,img/main-slider1.jpg" class="sr-only reference-description">
                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="distribution/img/portfolio-3.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Project name 3</h3>
                                            <p>Short project description goes here...</p>
                                        </div>
                                    </div></a>
                                <div data-images="distribution/img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="distribution/img/portfolio-4.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Project name 4</h3>
                                            <p>Short project description goes here...</p>
                                        </div>
                                    </div></a>
                                <div data-images="distribution/img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="distribution/img/portfolio-5.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Project name 5</h3>
                                            <p>Short project description goes here...</p>
                                        </div>
                                    </div></a>
                                <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="other" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="distribution/img/portfolio-6.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Project name 6</h3>
                                            <p>Short project description goes here...</p>
                                        </div>
                                    </div></a>
                                <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="distribution/img/portfolio-7.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Project name</h3>
                                            <p>Short project description goes here...</p>
                                        </div>
                                    </div></a>
                                <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="distribution/img/portfolio-8.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Project name</h3>
                                            <p>Short project description goes here...</p>
                                        </div>
                                    </div></a>
                                <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customers-->
    <section id="customers" class="customers-section bg-gray">
        <div class="container">
            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="customer"><img src="distribution/img/customers/logo-1.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="customer"><img src="distribution/img/customers/logo-2.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="customer"><img src="distribution/img/customers/logo-3.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="customer"><img src="distribution/img/customers/logo-4.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="customer"><img src="distribution/img/customers/logo-5.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="customer"><img src="distribution/img/customers/logo-6.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
