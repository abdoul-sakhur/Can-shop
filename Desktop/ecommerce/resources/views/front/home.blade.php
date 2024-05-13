@extends('front.base')
@section('title','Accueil')
@section('content')
    <!-- Feadtued Categories -->
    <style>
    swiper-container {
        width: 100%;
        height: 100%;
      }
  
      swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: start;
        align-items: center;
      }
  .categories{
  margin-left: 0;
  }
      swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      #testi_img{
        margin:0 auto;
      }
    </style>
    <div class="categories">

        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="4"
        space-between="30" >
      
   @foreach ($sliders as $slider )
   <swiper-slide> 
    <div class="col-3">
        <img width="200px" height="200px" src=" {{$slider->getImageUrl()}}">

    </div>

</swiper-slide>
   @endforeach
      </swiper-container>
    </div>

    <!-- Featured Products -->

    <div class="small-container">
        <h2 class="title">Produits</h2>
        <div class="row">
            @foreach ($products as $product )
                @include('front.frontComponents.cards')
            @endforeach
        </div>
        <h2 class="title"> Produits populaires</h2>
        <div class="row">
            @foreach ($randomProducts as $product )
            @include('front.frontComponents.cards')
        @endforeach
        </div>
        <div class="row">
           
        </div>
    </div>

    <!-- Offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="frontend/images/gourde.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Disponible exclusivement sur CAN-SHOP</p>
                    <h1>Gourde etanches 4L</h1>
                    <small>Emportez votre gourde partout, que ce soit à la salle de sport, en randonnée, ou même à la plage.<br></small>
                    <a href="{{route('home')}}" class="btn">Acheter maintenant &#8594;</a>
                </div>
            </div>
        </div>
    </div>
<div class="comment_container">
    <div class="row">
        <form action="{{route('commenter')}}" method="POST" class="form">
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
            </ul>
        
            @endif
        @csrf
        @method('post')
        <label for="comment">Commentaire</label>
        <textarea name="comments" id="comment" cols="30" rows="10"></textarea>
        <label for="note">Notez-nous sur une echelle de 1 a 5</label>
        <input type="number" min="1" max="5" id="note" name="notes">
        <button class="btn">Commenter</button>
        </form>
      
    </div>
</div>
    <!-- Testimonial -->
    <div class="testimonial">
        {{-- <div class="small-container">
            <div class="row">
                @foreach ($users as $user )
                  @if ($user->comments)
                  @foreach ($user->comments as $comme)
                  <div class="col-3">
                      <i class="fa fa-quote-left"></i>
                      <p>{{ $comme->comments }}</p>
                      <div class="rating">
                        @for ($i=0; $i<$comme->notes; $i++)
                        <i class="fa fa-star"></i>
                        @endfor
                      </div>
                      <img src="frontend/images/user-1.png">
                      <h3>{{ $user->name }}</h3>
                  </div>
              @endforeach
                @else
                <P>pas de commentaires</P> 
           
               @endif

                @endforeach
 
            </div>

            
        </div> --}}

        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="4"
        space-between="30" >
      
   @foreach ($users as $user )
   @if ($user->comments)
   @foreach ($user->comments as $comme)
   <swiper-slide> 

    <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p>{{ $comme->comments }}</p>
        <div class="rating">
          @for ($i=0; $i<$comme->notes; $i++)
          <i class="fa fa-star"></i>
          @endfor
        </div>
        <img id="testi_img" src="frontend/images/user-1.png">
        <h3>{{ $user->name }}</h3>
    </div>
</swiper-slide>
   @endforeach

   @else
   <P>pas de commentaires</P> 

  @endif

   @endforeach
      </swiper-container>
      
    </div>
    </div>

    @endsection