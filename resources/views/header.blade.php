<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            Coffee
            <small>
                Blend
            </small>
        </a>
        <button aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#ftco-nav" data-toggle="collapse" type="button">
            <span class="oi oi-menu">
            </span>
            Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('show-home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show-menu') }}">
                        Menu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show-services') }}">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show-blog') }}">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show-about') }}">
                        About
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="" id="dropdown04">
                        Shop
                    </a>
                    <div aria-labelledby="dropdown04" class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('show-shop') }}">
                            Shop
                        </a>
                        <a class="dropdown-item" href="product-single.html">
                            Single Product
                        </a>
                        <a class="dropdown-item" href="{{ route('show-cart') }}">
                            Cart
                        </a>
                        <a class="dropdown-item" href="{{ route('show-checkout') }}">
                            Checkout
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show-contact') }}">
                        Contact
                    </a>
                </li>
                <li class="nav-item cart dropdown">
                    <span class="icon icon-shopping_cart">
                    </span>
                    <span class="bag d-flex justify-content-center align-items-center">
                        <small>
                            1
                        </small>
                    </span>
                    <a class="nav-link drop-btn" href="{{ route('show-cart') }}">
                        <div class="dropdown-content">
                            <a href="cc">
                                cc
                            </a>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <a class="navbar-brand" href="index.html">
            Coffee
            <small>
                Blend
            </small>
        </a>
        <button aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#ftco-nav" data-toggle="collapse" type="button">
            <span class="oi oi-menu">
            </span>
            Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('show-home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show-menu') }}">
                        Menu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show-services') }}">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show-blog') }}">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show-about') }}">
                        About
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="" id="dropdown04">
                        Shop
                    </a>
                    <div aria-labelledby="dropdown04" class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('show-shop') }}">
                            Shop
                        </a>
                        <a class="dropdown-item" href="{{ route('show-cart') }}">
                            Cart
                        </a>
                        <a class="dropdown-item" href="{{ route('show-checkout') }}">
                            Checkout
                        </a>
                    </div>
                </li>
                <li class="nav-item cart dropdown">
                    <a class="nav-link drop-btn">
                        <span class="icon icon-shopping_cart">
                        </span>
                        <span class="bag d-flex justify-content-center align-items-center">
                            @if (Session::has("Cart") != null)
                            <span class="sa" id="total-quanty-show">
                                {{ Session::get("Cart")->totalQuanty }}
                            </span>
                            @else
                            <span class="sa" id="total-quanty-show">
                                0
                            </span>
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
                                                <td class="si-pic">
                                                    <img alt="" src="{{ $item['productInfo']->link_image }}"/>
                                                </td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>
                                                            ₫ {{ number_format($item['productInfo']->price) }} x {{ $item['quanty'] }}
                                                        </p>
                                                        <h6>
                                                            {{ $item['productInfo']->name_product }}
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="icon-close" data-id="{{ $item['productInfo']->id }}">
                                                    </i>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>
                                        Total :
                                    </span>
                                    <h5>
                                        ₫ {{number_format(Session::get('Cart')->totalPrice)}}
                                    </h5>
                                    <input hidden="" id="total-quanty-cart" type="number" value="{{Session::get('Cart')->totalQuanty}}">
                                    </input>
                                </div>
                                @endif
                            </div>
                            <div class="select-button">
                                <a class="primary-btn view-card" href="{{ route('show-cart') }}">
                                    VIEW CARD
                                </a>
                                <a class="primary-btn checkout-btn" href="{{ route('show-checkout') }}">
                                    CHECK OUT
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>