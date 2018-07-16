@extends('layouts.app')

@section('content')
    @extends('admin.errors')
    <div class="panel panel-default">

        <div class="panel-body">
            <form action="{{route('ad.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="activity">Активность</label>
                    <select name="activity" id="activity">
                        <option value="1">Активировать</option>
                        <option value="0">Деактивировать</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="img">Featured image</label>
                    <input type="file" name="img" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection