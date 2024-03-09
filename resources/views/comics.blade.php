@extends('layout.main')

@section('title', 'Comics')

@section('main-content')
<section id="films">
    <div class="container">
        <div class="label">CURRENT SERIES</div>
        <div class="row border">
        @foreach ($comics as $comic)        
        <div class="col border">
            <div class="card border">
                <figure>
                    <img src="{{$comic['thumb']}}" alt="">
                </figure>
                <figcaption>{{$comic['title']}}</figcaption>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</section>
@endsection