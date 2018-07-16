@extends('layouts.app')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            Заказы
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Имя</th>
                <th>Адрес</th>
                <th>Телефон</th>
                <th>Заказ</th>
                </thead>
                <tbody>
                @if($orders->count() > 0)
                    @foreach($orders as $order)
                            <tr>
                                <td>
                                    {{$order->name}}
                                </td>
                                <td>
                                    {{$order->address}}
                                </td>
                                <td>
                                    {{$order->phone}}
                                </td>
                                <td>
                                    {{$order->content}}
                                </td>
                                <td>
                                    @foreach($order->products as $p)
                                        @if(Auth::user()->admin)
                                            {{$p->name}}({{$p->restaurant->name}})
                                        @else
                                            @if($p->restaurant_id === Auth::user()->restaurant_id)
                                                {{$p->name}}({{$p->restaurant->name}})
                                            @endif
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('order.destroy',['id' => $order->id])}}"
                                       class="btn btn-xs btn-danger">
                                        Удалить
                                    </a>
                                </td>
                            </tr>
                        {{Cart::restore($order->id)}}
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection