@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Список предложений</div>

                    <div class="panel-body">
                    <table class="table">
                        <thead><tr>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Cashback</th>
                            <th>Дата создания</th>
                        </tr> </thead>

                    <tbody>

                    @foreach ($offers as $offer)
                    <tr>
                        <td>{{ $offer->name }}</td>
                        <td>{{ $offer->description }}</td>
                        <td>{{ $offer->cashback }}%</td>
                        <td>{{ $offer->created_at }}</td>
                    </tr>
                    @endforeach
                    </tbody> </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
