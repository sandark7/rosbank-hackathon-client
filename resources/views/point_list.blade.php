@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Список точек</h4>
                        <a href="{{ route('point_add') }}" class="btn btn-success pull-right">Создать</a>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead><tr>
                                <th>Адрес</th>
                                <th>ID терминала(ов)</th>
                                <th>Дата создания</th>
                            </tr> </thead>

                            <tbody>

                            @foreach ($points as $point)
                                <tr>
                                    <td><a href="{{ route('point_detail', ['id' => $point->id]) }}">{{ $point->address }}</a></td>
                                    <td>{{ $point->getTerminalIds() }}</td>
                                    <td>{{ $point->created_at->format('jS F Y') }}</td>
                                </tr>
                            @endforeach
                            </tbody> </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
