@extends('layouts.base')

@section('pageTitle', 'Home')

@section('mainContent')
<section class="main-top">
    <div class="jumbotron">
    </div>
    <div class="container flex">
      <h2 class="label">CURRENT SERIES</h2>

      @foreach ($fumetti as $key => $fumetto)
        <div class="comic-card flex">
            <img src="{{$fumetto['thumb']}}" alt="">
            <a href="{{ route ( 'comic', ['comic_id' => $key] ) }}">
              <h3 class="comic-title">{{$fumetto['series']}}</h3>
            </a>
            
        </div>
      @endforeach



      <button class="more-comics">LOAD MORE</button>
    </div>
  </section>
  
  <section class="main-bottom flex">
    <div class="container flex gallery">
      <div class="card flex">
        <img src="">
        <span>item.text</span>
      </div>
    </div>
  </section>
@endsection