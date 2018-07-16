@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new post
        </div>

        <div class="panel-body">
            <form action="{{route('restaurant.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tags">Выбирите категории ресторана</label>
                    @foreach($categories as $category)
                        <div class="checkbox">
                            <label><input name="categories[]" type="checkbox" value="{{$category->id}}">{{ $category->name}}</label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="tags">Выбирите спецефикации ресторана</label>
                    @foreach($specefications as $specefication)
                        <div class="checkbox">
                            <label><input name="specefications[]" type="checkbox" value="{{$specefication->id}}">{{ $specefication->name}}</label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="header">Header</label>
                    <input type="file" name="header" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control"
                           autocomplete="off" placeholder="Телефон" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/inputmask.js')}}"></script>
    <script>
        $(":input").inputmask();

        $("#phone").inputmask({"mask": "+999 99 99 99 99"});
    </script>
@endsection