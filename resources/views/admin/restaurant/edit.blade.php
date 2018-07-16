@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Updating a restaurant : {{$restaurant->title}}
        </div>

        <div class="panel-body">
            <form action="{{route('restaurants.admin.update',['id'=>$restaurant->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$restaurant->name}}">
                </div>
                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="categories">Select categories</label>
                    @foreach($categories as $category)
                        <div class="checkbox">
                            <label><input name="categories[]" type="checkbox" value="{{$category->id}}"
                                          @foreach($restaurant->restaurant_categories as $c)
                                          @if($c->id == $category->id)
                                          checked
                                        @endif
                                        @endforeach
                                >{{$category->name}}</label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="specefications">Select specefications</label>
                    @foreach($specefications as $specefication)
                        <div class="checkbox">
                            <label><input name="specefications[]" type="checkbox" value="{{$specefication->id}}"
                                          @foreach($restaurant->specefications as $c)
                                          @if($c->id == $specefication->id)
                                          checked
                                        @endif
                                        @endforeach
                                >{{$specefication->name}}</label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection