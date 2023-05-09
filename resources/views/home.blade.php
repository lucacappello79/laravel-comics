
@extends('layouts/main-layout')

@section('content')
<main class="comics">

  <div class="container">
    <div class="row">

      @foreach ($ as $item)
        <div class="col-3 card">

          <div class="card-inner">
            <img src="{{$item['src']}}" alt="fnf">
            {{$item['titolo']}}
          </div>
        </div>
      @endforeach

    </div>
  </div>
</main>
@endsection