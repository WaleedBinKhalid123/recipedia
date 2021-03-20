@extends('layouts.app')

@section('content')
    @if(isset($dish) && isset($ingredientIds))
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-7" style="background-color: navajowhite; padding: 50px; border-radius: 40px;">
                    <div><h2>{{ $dish->name }}</h2></div>
                    <div><h4>{{ $dish->quote }}</h4></div>
                    <div class="mt-5">
                        <ul>
                        @foreach($ingredientIds as $ingredientId)
                            <li>
                                {{$ingredientId->quote}}
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div style="float: right;margin-right: 20vw; margin-top: 10px; margin-bottom: 20px;">
                <a href="{{ route('back.to.dish') }}"><button class="btn btn-danger">Back</button></a>
                <a href="{{ route('dish.select', [$dish->name]) }}"><button class="btn btn-success">Choose</button></a>
            </div>
        </div>
    @endif

@endsection
