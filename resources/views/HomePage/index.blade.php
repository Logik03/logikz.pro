@extends('master')

@section('title', 'Home')

@section('content')

    <!-- Intro Image-->
    <section id="intro" style="background: url(distribution/img/picture.png) center center no-repeat; background-size: cover;" class="intro-section pb-2">
        <div class="container text-center">

            <h1 data-animate="fadeInDown" class="text-shadow mb-5">Hello!</h1>
            <p data-animate="slideInUp" class="h3 text-shadow text-400">I’m Bestpaul, A full-stack software Engineer specializing in Laravel, Nodejs, and PWAs(Ionic). Please take a look around!</p>
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
                    <p>An sincerity so extremity he additions. Her yet <strong>there truth merit</strong>. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly. Off can admiration prosperous now devonshire diminution law.</p>
                    <p>Received overcame oh sensible so at an. Formed do change merely to county it. <strong>Am separate contempt</strong> domestic to to oh. On relation my so addition branched. Put hearing cottage she norland letters equally prepare too. Replied exposed savings he no viewing as up. Soon body add him hill. No father living really people estate if. Mistake do produce beloved demesne if am pursuit.</p>
                    <p>An sincerity so extremity he additions. Her yet <strong>there truth merit</strong>. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly. Off can admiration prosperous now devonshire diminution law.</p>
                </div>
                <div data-animate="fadeInUp" class="col-lg-6">
                    <div class="skill-item">
                        <div class="progress-title">LARAVEL/PHP</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill1"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">MySQL</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill2"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">AdonisJS/Nodejs</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 20%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill3"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">Restful Api's</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 60%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill4"></div>
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
                            <div role="progressbar" style="width: 30%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill5"></div>
                        </div>
                    </div>
                </div>
                <div data-animate="fadeInUp" class="col-sm-6 mx-auto mt-5"><img src="distribution/img/best (2).jpg" alt="This is me - IT worker" class="image rounded-circle img-fluid"></div>
            </div>
        </div>
    </section>







@endsection
