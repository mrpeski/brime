@extends('blocks')
@section('content')
<div class="row">
            <div class="container-fluid">
                <div id="slides">
                    <img src="{{asset('imgs/bg.jpg')}}">
                    <img src="{{asset('imgs/2.jpg')}}">      
                </div>
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                            <div class="amadeus">
                                <iframe src="https://www.epower.amadeus.com/discovery/#Page=Flight&SwitchAdvancedSearch=false" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>  
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
            </div>  
        </div>


        <div class="row">
            <main class="col-lg-9">
                <h1>Vacation Packages</h1>
                <div class="row">
                    @foreach( $listing as $card ) 
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="cardh"></div>
                            <div class="cardimg">
                            @if( $card->photos->count() )
                                <img src="/{{ $card->photos->first()->thumbnail_path }}"></div>
                            @endif
                            <div class="cardb"> 
                                <div class="pull-left">
                                    <a href="/packages/{{$card->id}}"><h4 class="">{{ $card->country }}</h4></a>
                                    <p class="small">{{ '$' . money_format($card->price, 1) }}</p>
                                </div>
                                <a href="/packages/{{$card->id}}" class="btn btn-primary pull-right">Browse</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                <div class="col-lg-12">
                    <a href="#" class="pull-right">More Packages >></a>
                </div>

                <div class="col-lg-12">
                    <div class="list">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Get Cheap Exclusive Deals via Email</h4>
                            </div>
                            <div class="col-lg-6">
                                <form action="" method="POST" class="form-horizontal email" role="form">
                                <h5 class="">Register for our monthly Newsletter</h5>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="email" id="inputEmail" class="form-control" value="" placeholder="Email" required="required">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-primary wide">Submit</button>
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="linkpack">
                    <h2>Cheap Flights to International Cities</h2>
                    <ul class="nav">
                        <div class="row">
                            <div class="col-lg-3">
                                <h4>Africa</h4>
                                <li><a href="#">Accra</a></li>
                                <li><a href="#">Lagos</a></li>
                                <li><a href="#">Johannebourg</a></li>
                                <li><a href="#">Maisamara</a></li>
                                <li><a href="#">Cairo</a></li>
                            </div>                      
                            <div class="col-lg-3">
                                <h4>Europe</h4>
                                <li><a href="#">Accra</a></li>
                                <li><a href="#">Lagos</a></li>
                                <li><a href="#">Johannebourg</a></li>
                                <li><a href="#">Maisamara</a></li>
                                <li><a href="#">Cairo</a></li>
                            </div>
                            <div class="col-lg-3">
                                <h4>North America</h4>
                                <li><a href="#">Accra</a></li>
                                <li><a href="#">Lagos</a></li>
                                <li><a href="#">Johannebourg</a></li>
                                <li><a href="#">Maisamara</a></li>
                                <li><a href="#">Cairo</a></li>
                            </div>                      
                            <div class="col-lg-3">
                                <h4>South America</h4>
                                <li><a href="#">Accra</a></li>
                                <li><a href="#">Lagos</a></li>
                                <li><a href="#">Johannebourg</a></li>
                                <li><a href="#">Maisamara</a></li>
                                <li><a href="#">Cairo</a></li>
                            </div>
                        </div>
                    </ul>
                    <h2>Cheap Hotels Top Cities</h2>
                    <ul class="nav">
                        <div class="row">
                            <div class="col-lg-3">
                                <h4>Africa</h4>
                                <li><a href="#">Accra</a></li>
                                <li><a href="#">Lagos</a></li>
                                <li><a href="#">Johannebourg</a></li>
                                <li><a href="#">Maisamara</a></li>
                                <li><a href="#">Cairo</a></li>
                            </div>                      
                            <div class="col-lg-3">
                                <h4>Europe</h4>
                                <li><a href="#">Accra</a></li>
                                <li><a href="#">Lagos</a></li>
                                <li><a href="#">Johannebourg</a></li>
                                <li><a href="#">Maisamara</a></li>
                                <li><a href="#">Cairo</a></li>
                            </div>
                            <div class="col-lg-3">
                                <h4>North America</h4>
                                <li><a href="#">Accra</a></li>
                                <li><a href="#">Lagos</a></li>
                                <li><a href="#">Johannebourg</a></li>
                                <li><a href="#">Maisamara</a></li>
                                <li><a href="#">Cairo</a></li>
                            </div>                      
                            <div class="col-lg-3">
                                <h4>South America</h4>
                                <li><a href="#">Accra</a></li>
                                <li><a href="#">Lagos</a></li>
                                <li><a href="#">Johannebourg</a></li>
                                <li><a href="#">Maisamara</a></li>
                                <li><a href="#">Cairo</a></li>
                            </div>
                        </div>
                    </ul>
                </div>
            </main>

            <aside class="col-lg-3">
                <div class="topad">
<!--                                 <div>Weather</div>
-->                            <div>
                         @if(! $weather == null)
                        <h3>{{ $city }} <img src="{{ $icon_url }}" alt=""></h3>
                        <h4>{{ $temp }} &deg;C</h4>
                        <span>{{ $weather->description }}</span>
                        @endif
                    </div>
                </div>
            </aside>        
        </div>
    </div>
        <div class="container-fluid">
            <div class="social">
                <a href="#"><span class="milk fb">Facebook</span></a>
                <a href="#"><span class="milk tw">Twitter</span></a>
                <a href="#"><span class="milk in">LinkedIn</span></a>
                <a href="#"><span class="milk sk">Skype</span></a>
                <a href="#"><span class="milk pi">Pinterest</span></a>
                <a href="#"><span class="milk yo">Youtube</span></a>
                <a href="#"><span class="milk tr">Trip Advisor</span></a>
                <a href="#"><span class="milk wh">Whatsapp</span></a>
                <a href="#"><span class="milk sn">Snapchat</span></a>
            </div>
        </div>
@stop

@section('scripts')
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="{{ asset('js/libs/slidejs/jquery.slides.min.js') }}"></script>
<script>
    $(function(){
      $("#slides").slidesjs({
      width: 1680,
      height: 390,
      navigation: {
          active: false,
          effect: "fade" },
      play: {
          active: false,
          effect: "fade",
          interval: 8000,
          auto: true,
          swap: false,
          pauseOnHover: true,
          restartDelay: 250
    },
      pagination: {
          active: false,
          //effect: "fade"
      },
      effect: {
        fade: {
            speed: 1000,
            crossfade: true
        }
      }
    });
  });
  </script>
  @stop