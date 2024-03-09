<header class="container">
    <img src="{{asset('img/dc-logo.png')}}" alt="">
    <ul>
        @foreach ($links as $link)
            <li>{{$link}}</li>
        @endforeach  
    </ul>
</header>