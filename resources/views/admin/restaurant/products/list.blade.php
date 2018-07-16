@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Список
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Название</th>
                <th>Изменить</th>
                <th>Удалить</th>
                </thead>
                <tbody>
                @if($products->count() > 0)
                    @foreach($products as $product)
                        <tr>
                            <td>
                                {{$product->name}}
                            </td>
                            <td>
                                <a href="{{route('restaurants.edit.product',['id' => $product->id])}}"
                                   class="btn btn-xs btn-info">
                                    Изменить
                                </a>
                            </td>
                            <td>
                                <a href="{{route('restaurants.delete.product',['id' => $product->id])}}"
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