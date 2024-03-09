{{-- QUESTO è IL FILE CON INCLUDES --}}
<main>
    <div class="container card-container">
        <div class="comics-container">
            <a href='{{route('comic')}}'>
                @foreach ($comics as $comic )
                <img src="{{$comic['thumb']}}" alt="">
                <h4>{{$comic['title']}}</h4>
                @endforeach
            </a>
        </div>
    </div>
</main>

