@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
           Список ресторанов 
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Изображение</th>
                <th>Изменить</th>
                <th>Активность</th>
                <th>Удалить</th>
                </thead>
                <tbody>
                @if($ads->count() > 0)
                    @foreach($ads as $ad)
                        <tr>
                            <td>
                                <img height="50" width="100"  src="{{asset($ad->img)}}">
                            </td>
                            <td>
                                <a href="{{route('ad.edit',['id' => $ad->id])}}"
                                   class="btn btn-xs btn-info">
                                    Изменить
                                </a>
                            </td>
                            <td>
                                @if($ad->active)
                                    Активно
                                @else
                                    Не активно
                                @endif
                            </td>
                            <td>
                                <a href="{{route('ad.delete',['id' => $ad->id])}}"
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