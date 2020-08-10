 

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>
   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="{{ route('show-home') }}" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="{{ route('show-menu') }}" class="nav-link">Menu</a></li>
         <li class="nav-item"><a href="{{ route('show-services') }}" class="nav-link">Services</a></li>
         <li class="nav-item"><a href="{{ route('show-blog') }}" class="nav-link">Blog</a></li>
         <li class="nav-item"><a href="{{ route('show-about') }}" class="nav-link">About</a></li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
             <a class="dropdown-item" href="{{ route('show-shop') }}">Shop</a>
             <a class="dropdown-item" href="{{ route('show-cart') }}">Cart</a>
             <a class="dropdown-item" href="{{ route('show-checkout') }}">Checkout</a>
         </div>
     </li>



     <li class="nav-item cart dropdown">
        <a class="nav-link drop-btn" >
           <span class="icon icon-shopping_cart"></span>
           <span class="bag d-flex justify-content-center align-items-center">
            @if (Session::has("Cart") != null)
                <span class="sa" id="total-quanty-show">{{ Session::get("Cart")->totalQuanty }}</span>
            @else
                <span class="sa" id="total-quanty-show">0</span>
            @endif
        </span>
    </a>

    <div class="dropdown-content">
      <div class="cart-hover">
        <div id="change-item-cart">


           @if (Session::has("Cart") != null)

           <div class="select-items">
            <table>
                <tbody>
                    @foreach(Session::get('Cart')->products as  $item)
                    <tr>
                        <td class="si-pic"><img src="{{ $item['productInfo']->link_image }}" alt=""></td>
                        <td class="si-text">
                            <div class="product-selected">
                                <p>₫ {{ number_format($item['productInfo']->price) }} x {{ $item['quanty'] }}</p>
                                <h6>{{ $item['productInfo']->name_product }}</h6>
                            </div>
                        </td>
                        <td class="si-close">
                            <i class="icon-close"  data-id="{{ $item['productInfo']->id }}"></i>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="select-total">
            <span>Total : </span>
            <h5>₫ {{number_format(Session::get('Cart')->totalPrice)}}</h5>
            <input hidden id="total-quanty-cart" type="number" value="{{Session::get('Cart')->totalQuanty}}">
        </div>

        @endif



    </div>
    <div class="select-button">
        <a href="{{ route('show-cart') }}" class="primary-btn view-card">VIEW CARD</a>
        <a href="{{ route('show-checkout') }}" class="primary-btn checkout-btn">CHECK OUT</a>
    </div>
</div>
</div>


</li>


</ul>
</div>
</div>
</nav>