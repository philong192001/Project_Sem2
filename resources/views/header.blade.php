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
                            <small >
                                1
                            </small>
                        </span>
                    <a class="nav-link drop-btn" href="{{ route('show-cart') }}">
                    	<div class="dropdown-content">
                    		<a href="cc">cc</a>
                    	</div>
                        
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>