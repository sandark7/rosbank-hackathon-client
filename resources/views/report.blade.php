@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Отчеты по торговым точкам</h4>
                    </div>

                    <div class="panel-body">
                        <p>Количество использованных офферов</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Адрес</th>
                                    <th>Количество</th>
                                    <th>Сумма, Р</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach ($points as $point)
                                <tr>
                                    <td>{{ $point->address }}</td>
                                    <td>{{ $point->getOffersNum() }}</td>
                                    <td>{{ $point->getOffersMoney() }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
