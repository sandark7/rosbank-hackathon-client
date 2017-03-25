@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Торговая точка</h4>
                    </div>

                    <div class="panel-body">
                        <p>Адрес: {{ $point->address }}</p>
                        <p>Терминалы: {{ $point->getTerminalIds() }}</p>
                    </div>

                    <div class="panel-body">
                        <p>Анализ торговой точки не проводился</p>
                        <p><a href="#" onclick="javascript:document.getElementById('popup').style.display='block'"
                              class="btn btn-success pull-right">Проанализировать</a></p>
                        <div id="popup" style="display: none; border: 2px solid green;">
                            Попап с процессом подсчета характеристик
                            <br>
                            <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                            </ul>
                            <a href="#"
                               onclick="javascript:document.getElementById('popup').style.display='none'">Закрыть</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <p>Аналитика торговой точки от {{ $point->analytic_date }}</p>
                        <p><a href="#" onclick="javascript:document.getElementById('popup').style.display='block'"
                              class="btn btn-success pull-right">Проанализировать еще раз</a></p>

                        <table class="table">
                            <thead><tr>
                                <th>Параметр</th>
                                <th>Значение</th>

                            </tr> </thead>

                            <tbody>
                                <tr>
                                    <td>Средний чек</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Средний чек</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Средний чек</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Средний чек</td>
                                    <td>10</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                    <div class="panel-body">
                        <p>Сделать предложение</p>
                        <p>
                            <select name="offer">
                                <option></option>
                            </select>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
