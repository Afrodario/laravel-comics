@extends('layouts.base')

@section('pageTitle', $fumetto['title'])

@section('mainContent')
<div class="jumbotron">
</div>

<div class="current-comic-card">
    <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
    <h1>{{$fumetto['title']}}</h1>
    <div class="comic-price">
        U.S. Price: {{$fumetto['price']}}
    </div>
    <p>{{$fumetto['description']}}</p>
</div>

<div class="current-comic-info">

    <div class="current-comic-desc flex">

        
        <div class="comic-talents flex flex-col">
            <h3>Talents</h3>
            <div class="comic-art flex">
                <div>Art by:</div>
                <div>
                    <p>
                        @foreach($fumetto['artists'] as $artist)
                        {{$artist}}
                        @endforeach
                    </p>
                </div>
            </div>

            <div class="comic-authors flex">
                <div>Written by:</div>
                <div>
                    <p>
                        @foreach($fumetto['artists'] as $writer)
                        {{$writer}}
                        @endforeach
                    </p>
                </div>
            </div>

        </div>

        <div class="comic-specs flex flex-col">
            <h3>Specs</h3>
            <p>Series: {{$fumetto['series']}}</p>
            <p>U.S. Price: {{$fumetto['price']}}</p>
            <p>On Sale Date: {{$fumetto['sale_date']}}</p>
        </div>

    </div>

</div>

@endsection