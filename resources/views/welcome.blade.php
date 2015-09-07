@extends('app')
@include('header')
@section('content')



  <div class="banner">
  <div class="overlay"></div>
    <div class="banner-content col-md-4 col-md-offset-4">
       <h1 class="title">LEVEL LOUNGE</h1>
       <h2 class="description">Watch Your Favourite Artists</h2>
    </div>
  </div>



<div class="container-fluid video">
    
{{--     @include('partials/event') --}}



    <div class="container content video-wrap">
    <h1 class="title">FEATURED</h1>

     <div class="featured">
        <div class="row featured-videos">
              <div class="col-md-4">
               <div class="content-box">
                <div class="video-thumb" style="background-image: url('/images/boiler-room-1.jpg');">
                
                </div>
                 <h4>Paleman Boiler Room</h4>
                 <p>Gun fingers ready, Swamp 81 massif in full effect. Paleman gives us an hour of the hard stuff live from our original warehouse.</p>
                 </div>
              </div>


              <div class="col-md-4">
               <div class="content-box">
                 <div class="video-thumb" style="background-image: url('/images/boiler-room-2.jpg');"></div>
                  <h4>Kink Boiler Room Moscow Live Set</h4>
                  <p>Woosh. Once more, Strahil Velchev reaffirms his position up there as one of dance music's preeminent live forces. Sweeping effortlessly</p>
               </div>
              </div>

              <div class="col-md-4">
               <div class="content-box">
                 <div class="video-thumb" style="background-image: url('/images/boiler-room-3.jpg');"></div>
                  <h4>Skream b2b Disclosure 70 min</h4>
                  <p>Just a bunch of dance music heavyweights getting their party on in a hotel suite. No big deal!</p>
               </div>
              </div>
              </div>

       <div class="row featured-videos">

             <div class="col-md-4">
               <div class="content-box">
                 <div class="video-thumb" style="background-image: url('/images/boiler-room-4.jpg');"></div>
                  <h4>SBTRKT Boiler Room Mix</h4>
                  <p>An up close and personal set from the man in the mask himself. SBTRKT with an amazing mix, and light show.. shazam!</p>
               </div>
              </div>

              <div class="col-md-4">
               <div class="content-box">
                 <div class="video-thumb" style="background-image: url('/images/boiler-room-5.jpg');"></div>
                  <h4>Chet Faker Boiler Room Melbourne Daytime</h4>
                  <p>Welp, this is pretty much perfect. Chet Faker doing his do with a sublime Boiler Room debut in the dazzling sunlight!</p>
               </div>
              </div>

             <div class="col-md-4">
               <div class="content-box">
                 <div class="video-thumb" style="background-image: url('/images/boiler-room-6.jpg');"></div>
                  <h4>Maya Jane Coles Boiler Room DJ Set</h4>
                  <p>Welp, this is pretty much perfect. Chet Faker doing his do with a sublime Boiler Room debut in the dazzling sunlight!</p>
               </div>
              </div>

            </div>
            
        
           </div>
           </div>
</div>

@stop
