
@extends('layouts/main-layout')

@section('content')
<main class="comics">

  <div class="container">
    <div class="row">

      @foreach ($comics as $item)
        <div class="col-2 card">

          <div class="card-inner">
            <img src="{{$item['thumb']}}" alt="fnf">
            {{$item['title']}}
          </div>
        </div>
      @endforeach

    </div>
  </div>
</main>
@endsection