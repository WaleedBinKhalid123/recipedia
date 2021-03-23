@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header" style="padding: 30px;"><strong style="font-weight: bold; font-size: 20px;">{{ __('Search Dishes') }}</strong></div>
            <div class="mt-5">
                <form action="{{ route('dishes') }}">
                    <div class="row" id="ingredients">

                    </div>
                    <button class="btn btn-success" id="addBtn">Add More</button>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
        @if(isset($dishes))
            <div class="col-md-12 mt-5">
{{--                <table class="table table-hover">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th scope="col"><strong>Dish Name</strong></th>--}}
{{--                        <th scope="col"><strong>Matching Status</strong></th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($dishes as $dish)--}}
{{--                        <tr>--}}
{{--                            <th scope="row"><a href="{{ route('dish.show', $dish['name']) }}" style="color: black; text-decoration: none">{{$dish['name']}}</a></th>--}}
{{--                            <th scope="row"><span class="badge badge-primary">{{$dish['status']}}</span></th>--}}
{{--                            <th scope="row"><img src="{{asset($dish['path'])}}"></th>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">--}}
                @foreach($dishes as $dish)
                    <div class="row mt-5">
                        <img height="150px" width="150px"  src="{{url($dish['path'])}}" alt="" style="border-radius: 10px">
                        <a href="{{ route('dish.show', $dish['name']) }}" style="color: black; text-decoration: none">
                            <h5 class="card-title text-center font-weight-bold text-uppercase ml-5 mt-4">
                                {{$dish['name']}}
                            </h5>
                        </a>
                        <p><span class="badge badge-primary ml-3 mt-4">{{$dish['status']}}</span></p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
    <script>
        $('#addBtn').click(function (e){
            e.preventDefault();
           $('#ingredients:last').append('<div class="col col-md-3" >\n' +
               '    <div class="form-group" >\n' +
               '         <input type="text" class="form-control" placeholder="Enter Ingredient" name="ingredients[]" required>\n' +
               '    </div>\n' +
               '</div>');
        });
    </script>
@endsection
