@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-header">{{ __('Add Ingredients') }}</div>
                <div class="mt-5">
                    <form action="{{ route('ingredients.store') }}">
                        <div id="addIngredients">

                        </div>
                        <button class="btn btn-success" id="addBtn">Add More</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#addBtn').click(function (e){
            e.preventDefault();
            $('#addIngredients:last').append('<div class="form-group" >\n' +
                '    <div class="row">\n' +
                '        <div class="col col-md-4">\n' +
                '            <input type="text" class="form-control" placeholder="Enter Name" name="name[]" required>\n' +
                '        </div>\n' +
                '        <div class="col col-md-4">\n' +
                '            <input type="text" class="form-control" placeholder="Enter Quantity" name="quantity[]" required>\n' +
                '        </div>\n' +
                '        <div class="col col-md-4">\n' +
                '            <input type="text" class="form-control" placeholder="Enter Unit" name="unit[]" required>\n' +
                '        </div>\n' +
                '    </div>\n' +
                '</div>');
        });
    </script>
@endsection




