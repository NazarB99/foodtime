@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Добавить ресторан
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Название</th>
                <th>Изменить</th>
                <th>Удалить</th>
                </thead>
                <tbody>
                @if($restaurants->count() > 0)
                    @foreach($restaurants as $restaurant)
                        <tr>
                            <td>
                                {{$restaurant->name}}
                            </td>
                            <td>
                                <a href="{{route('restaurants.admin.edit',['id' => $restaurant->id])}}"
                                   class="btn btn-xs btn-info">
                                    Изменить
                                </a>
                            </td>
                            <td>
                                <a href="{{route('restaurants.admin.delete',['id' => $restaurant->id])}}"
                                   class="btn btn-xs btn-danger">
                                    Удалить
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection