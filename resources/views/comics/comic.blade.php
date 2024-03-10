@extends('layout.main')
@section('title', $comic['title'])

@section('main-content')
<section id="single-comic" class="container">
   <div class="row">
      <div class="col-70">

         <ul>
            <li>{{$comic['title']}}</li>
            <li>{{$comic['price']}}</li>
            <li>{{$comic['description']}}</li>
            <li>{{implode(',' ,$comic['artists'])}}</li>
            <li>{{implode(',' ,$comic['writers'])}}</li>
            <li>{{$comic['sale_date']}}</li>
            <li>{{$comic['series']}}</li>
         </ul>
      </div>
      <div class="col-30">
         <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
      </div>
   </div>
</section>
@endsection