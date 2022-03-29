<header>
    <div class="container">
        <nav class="flex">
            <a href="{{route('home')}}">
                <img src="{{asset('images/dc-logo.png')}}" alt="DC Logo">
            </a>
            <ul class="flex">
                <li>
                    <a href="#">Characters</a>
                </li>
                <li class="{{Request::route()->getName() == 'home' ? 'active':''}}">
                    <a href="{{route('home')}}">Comics</a>
                </li>
                <li>
                    <a href="#">Movies</a>
                </li>
                <li>
                    <a href="#">Tv</a>
                </li>
                <li>
                    <a href="#">Games</a>
                </li>
                <li>
                    <a href="#">Collectibles</a>
                </li>
                <li>
                    <a href="#">Videos</a>
                </li>
                <li>
                    <a href="#">Fans</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Shop</a>
                </li>
            </ul>
        </nav>
    </div>
</header>