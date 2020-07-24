@extends('master')

@section('content')



<!-- Contact-->
<section id="contact" data-animate="bounceIn" class="contact-section contact">
    <div class="container">
        <header class="text-center">
            <h2 class="title">Contact me</h2>
        </header>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                @if (session('alert'))
                    <p class="alert alert-success" id="alert">{{ session('alert') }}</p>
                @endif
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class="text-center alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
                    <!--div id="pageLoader">
                        <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
                    </div-->



                <form id="contact-form" method="post" action="{{route('contact.send')}}">
                    @csrf
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Your firstname *" required="required" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="surname" placeholder="Your lastname *" required="required" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" placeholder="Your email *" required="required" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone_number" placeholder="Your phone" required="required" class="form-control @error('phone_number') is-invalid @enderror">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Message for me *" rows="4" required="required" class="form-control textarea @error('message') is-invalid @enderror"></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="row">
    <div class="col-lg-6">
        <div id="map"></div>
    </div>
    <div class="col-lg-6">
        <div class="heading">
            <h3>Location</h3>
            <div class="rating">
                <i class="fa fa-star icon"></i>
                <i class="fa fa-star icon"></i>
                <i class="fa fa-star icon"></i>
                <i class="fa fa-star icon"></i>
                <i class="fa fa-star-o icon"></i>
            </div>
        </div>
        <div class="info">
            <p>59 Hillview Estate,</p>
            <p>Lifecamp, FCT, ABUJA.</p>
        </div>
        <div class="gallery">
            <h4>Office</h4>
            <div class="row">
                <div class="col-md-4">
                    <a href="distribution/img/office.jpg"><img class="img-fluid image" src="distribution/img/office.jpg" alt="10"></a>
                </div>
                <div class="col-md-4">
                    <a href="distribution/img/office2.jpg"><img class="img-fluid image" src="distribution/img/office2.jpg"></a>
                </div>
                <div class="col-md-4">
                    <a href="distribution/img/office3.png"><img class="img-fluid image" src="distribution/img/office3.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        setTimeout(function() {
          $('#alert').fadeOut('fast');
      }, 15000);
    </script> 
@endsection
