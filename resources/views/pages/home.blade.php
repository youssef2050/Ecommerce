@extends('layouts.app')
@section('content')
@include('layouts.slider')
@include('layouts.card')
    <div class="row">
    @foreach ($prodecits as $prodect)
      <div class="col-md-4 col-sm-6 col-lg-3">
          <div class="card">
              <div class="card-body">
                  <img  width="100%" height="75%" src="{{$prodect->image}}" alt="50% OFF WINTER SALE">
                    <p>{{$prodect->name}}</p>
                    <p>{{$prodect->prise-($prodect->prise*$prodect->discount)}}$</p>
                    <p><abbr>{{$prodect->prise}}$</abbr></p>
              </div>
          </div>
      </div>
</div>
@endforeach
</div>

@endsection
