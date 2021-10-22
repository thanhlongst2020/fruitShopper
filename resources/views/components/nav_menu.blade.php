<nav>
    <a href="{{route('home.index')}}" class="logo_name">Traidung</a>
    <ul>
        <li><a href="{{route('home.index')}}">Home</a></li>
        <li class="dropdown">
            <a  href="{{route('products.index')}}" class="dropbtn">Products</a>
            <div class="dropdown-content">
                <a style="padding-left: 5px" href="{{route('products.index')}}" >All</a>
                @foreach($categorys as $category )
                    <a style="padding-left: 5px" href="#">{{$category->name}}</a>
                @endforeach
            </div>
        </li>
        <li><a href="Fruits_store/about.html">About</a></li>
        <li><a href="Fruits_store/contact.html">Contact</a></li>
    </ul>
    <ul class="nav__list">
        <div class="cart__icon">
            <i class="fas fa-shopping-cart"></i>
            <span class="item__total">0</span>
        </div>
    </ul>
</nav>
