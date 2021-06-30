<!-- Navbar -->
<div class="header-container">
    <div class="container">
        <div class="cart-container">
            <div class="order">
                <p>Free Shipping on All orders Over $75!</p>
            </div>
            <ul>
                <li>
                    <a href="{{route('profile.show' , Auth::user()->id)}}" class="active"><img src="{{asset('uploads/users/' . Auth::user()->image)}}" alt="" style="max-width: 20%"> My Account</a>
                </li>
                <li><a href="">Wishlist</a></li>
                <li><a href="">Currency:USD</a></li>
                <li>
                    <a href="{{route('cart.show')}}" class="active"><i class="fas fa-cart-plus"></i> My Cart ({{session()->has('cart') ? session()->get('cart')->totalQty : '0'}})</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<form action="{{route('search')}}" method="GET" class="navbar-search__form">
    <div class="d-flex justify-content-center px-5">
        <div class="search"> <input type="text" name="search" class="search-input" placeholder="Search "> <button class="search-icon"> <i class="fa fa-search"></i> </button> </div>
    </div>
    </form>
<section>
    <div class="fashion">
        <div class="container">
            <div class="overlay"></div>
            <nav> 
                <div class="icon">
                    <h1>Fashion</h1>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Women</a></li>
                    <li><a href="">Men</a></li>
                    <li><a href="">Footwear</a></li>
                    <li><a href="">Accessories</a></li>
                    <li><a href="">Sales</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </nav>
            <div class="icons menu-icon">
                <i class="fas fa-bars"></i>
            </div>
            <div class="icons close-icon">
                <i class="far fa-times-circle"></i>
            </div>
        </div>
    </div>
</section>
<!-- End Navbar -->