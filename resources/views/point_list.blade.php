@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Список точек</div>

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
                                    <td>{{ $point->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody> </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
