@extends("layouts.plantilla")

@section("header")
  <h1> Estoy en header </h1>
@endsection

@section("body")
  <h2> Estoy en el body </h2>
  @if(count($persons))
    <div class ="table">

      @foreach($persons as $per)
        <div>
          {{$per}}
        </div>
      @endforeach
    </div>
  @endif
@endsection

@section("footer")
  <h3> Estoy en el footer</h3>
@endsection