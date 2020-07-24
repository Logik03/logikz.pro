@extends('master')

@section('title', 'Home')

@section('content')

    <!-- Intro Image-->
    <section id="intro" style="background: url(distribution/img/new2020.jpg) center center no-repeat; background-size: cover;" class="intro-section pb-2">
        <div class="container text-center">
            <div data-animate="fadeInDown" class="logo"><img src="distribution/img/logo-big.png" alt="logo" width="130"></div>
            <h1 data-animate="fadeInDown" class="text-shadow mb-5">Hello, Hallo,  नमस्ते!</h1>
            <p data-animate="slideInUp" class="h3 text-shadow text-400">I grind HTML,CSS and JAVASCRIPT and then weld them with PHP/Nodejs into beautiful and efficient Applications. i'm a full-stack developer specializing in web applications and PWAs. take a look around!</p>
            <p><a href="{{route('portfolio')}}" class="btn btn-outline-light link-scroll">view my work</a></p>
        </div>
    </section>
    <!-- About-->
    <section id="about" class="about-section">
        <div class="container">
            <header class="text-center">
                <h2 data-animate="bounceIn" class="title">About me</h2>
            </header>

            <div class="row">
                <div data-animate="fadeInUp" class="col-lg-6">
                    <p>I am a <strong> full-stack web developer/Hybrid mobile app developer</strong>.I enjoy turning <strong>complex problems into simple, beautiful and intuitive solutions</strong>. I'm a developer with <strong>3 years of professional experience</strong>.</p>
                    <p>I'm interested in all kinds of visual communication, but my major focus is on <strong>designing web,mobile & tablet interfaces and their back-end functionalities</strong>.</p>
                    <p>When I'm not <strong> coding,tweeting or reading</strong>, you'll find me <strong>discussing music, sports & fashion.</strong>.Feel free to take a look at my latest projects on the web portfolio page.</p>
                </div>
                <div data-animate="fadeInUp" class="col-lg-6">
                    <div class="skill-item">
                        <div class="progress-title">LARAVEL/PHP</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill1"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="progress-title">jquery/Ajax</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill2"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">MySQL/MongoDB</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill2"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">Adonis/Nodejs</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 40%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill3"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">Restful Api's</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill4"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">IONIC 4</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill5"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">Angular/Javascript</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 45%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
