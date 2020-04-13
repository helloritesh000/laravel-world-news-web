@extends ('layouts.generic')

@section('content')
<div class="col-sm-12 aniview" data-av-animation="slideInDown">
    <div class="contact_us_top text-center">
    <h2> Follow Us</h2>
    <div class="col-md-12 contact_icon">
              <ul class="social-network social-circle">
                  <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
              </ul>
          </div>
    </div>
 </div>
 <div class="col-sm-12 aniview" data-av-animation="slideInLeft">

   <div class="col-sm-4">
     <div class="contact_us_1 text-center">
       <p><a href="#"><i class="fa fa-phone"></i></a></p>
       <h4>Contact Us Here</h4>
       <h5>Here you can reach us</h5>
     </div>
   </div>
   <div class="col-sm-4">
     <div class="contact_us_1 text-center">
       <p><a href="#"><i class="fa fa-map-marker"></i></a></p>
       <h4>Find Us On Map</h4>
       <h5> we are here</h5>
     </div>
   </div>
   <div class="col-sm-4">
     <div class="contact_us_1 text-center">
       <p><a href="#"><i class="fa fa-envelope"></i></a></p>
       <h4>Subscribe Here</h4>
       <h5> you can subscribe us</h5>
     </div>
   </div>
 </div>
 <div class="col-sm-12 form_main aniview" data-av-animation="slideInRight">
    <form method="post" action="{{ route('contact')}}">
        {{csrf_field()}}
        <div class="col-sm-6"> <input class="form-control" name="name" placeholder="Name" type=" text"></div>
		 <div class="col-sm-6"> <input class="form-control" name="email" placeholder="Email" type=" text"></div>
		 <div class="col-sm-6"> <input class="form-control" name="phone" placeholder="Phone" type=" text"></div>
		 <div class="col-sm-6"> <input class="form-control" name="city" placeholder="City" type=" text"></div>
		 <div class="col-sm-12">
		 <textarea class="form-control text_1"  name="message" placeholder="Message"></textarea>
		 </div>
        <div class="col-sm-12 text-right">
            <input type="submit" class="btn btn-desault" value="Send Message!" />
        </div>
    </form>
 </div>
 @endsection
