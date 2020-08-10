@extends('master')
@section('content')
<section class="home-slider owl-carousel">

  <div class="slider-item" style="background-image: url({{ asset('img/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
    <div class="row slider-text justify-content-center align-items-center">

      <div class="col-md-7 col-sm-12 text-center ftco-animate">
       <h1 class="mb-3 mt-5 bread">Product Detail</h1>
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Product Detail</span></p>
     </div>

   </div>
 </div>
</div>
</section>

<section class="ftco-section">
 <div class="container">
  <div class="row">

   <div class="col-lg-6 mb-5 ftco-animate">
    <a href="" class="image-popup"><img src="{{ $product->link_image }}" class="img-fluid" alt="Colorlib Template"></a>
  </div>
  <div class="col-lg-6 product-details pl-md-5 ftco-animate">
    <h3>{{ $product->name_product }}</h3>
    <p class="price"><span>$4.90</span></p>
    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.
    </p>
    <div class="row mt-4">

  <div class="w-100"></div>
  <div class="input-group col-md-6 d-flex mb-3">
   <span class="input-group-btn mr-2">
    <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
      <i class="icon-minus"></i>
    </button>
  </span>
  <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
  <span class="input-group-btn ml-2">
    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
      <i class="icon-plus"></i>
    </button>
  </span>
</div>
</div>
<p><a  class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
</div>
</div>
</div>
</section>

<section class="ftco-section">
 <div class="container">
  <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section ftco-animate text-center">
     <span class="subheading">Discover</span>
     <h2 class="mb-4">Related products</h2>
     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
   </div>
 </div>
 <div class="row">
  @foreach ($products as $item)
  <div class="col-md-3">
    <div class="menu-entry">
      <a href="#" class="img" style="background-image: url({{ $item->link_image }});"></a>
      <div class="text text-center pt-4">
        <h3><a href="">{{ $item->name_product }}</a></h3>
        <p>{{ $item->content }}</p>
        <p class="price"><span>${{ $item->price }}</span></p>   
        <p><a onclick="AddCart({{ $item->id }})"  href=" javascrip:" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
      </div>
    </div>
  </div>
  @endforeach

</div>
</div>
</section>
@endsection