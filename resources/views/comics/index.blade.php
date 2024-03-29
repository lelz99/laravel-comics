@extends('layout.main')
@section('title', 'Comics')

@section('main-content')
<section id="films">
    <div class="container">
        <div class="label">CURRENT SERIES</div>
        <div class="row border">
            @foreach ($comics as $index => $comic)        
            <div class="col border">
                <a href="{{route('show', $index)}}">
                    <div class="card border">
                        <figure>
                            <img src="{{$comic['thumb']}}" alt="">
                        </figure>
                        <figcaption>{{$comic['title']}}</figcaption>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection 