@extends('layouts.app')
@section('content')
    <div class="container">
        @if(isset($msg))
            <div style="background-color: #8bc4ea; color: white; padding: 20px;">
                <strong>{{$msg}}</strong>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-header">{{ __('My Ingredients') }}</div>
            </div>
            @if(isset($myIngredients))
                <div class="col-md-12 mt-5">
                    <a href="{{ route('ingredient.add') }}"><button class="btn btn-secondary mb-2" style="float: right">+</button></a>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col"><strong>Ingredient Name</strong></th>
                            <th scope="col"><strong>Quantity</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($myIngredients as $myIngredient)
                            <tr>
                                <th scope="row">{{$myIngredient['name']}}</th>
                                <th scope="row"><span class="badge badge-primary">{{$myIngredient['quantity']}} {{$myIngredient['unit']}}</span></th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
