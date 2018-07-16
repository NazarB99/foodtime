@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Изменение продукта : {{$product->name}}
        </div>

        <div class="panel-body">
            <form action="{{route('restaurants.update.product',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label for="ingredients">Состав</label>
                    <textarea name="ingredients" class="form-control" id="ingredients">{{$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category"></label>
                    <select class="form-control" name="category" id="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Подтвердить изменения</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection