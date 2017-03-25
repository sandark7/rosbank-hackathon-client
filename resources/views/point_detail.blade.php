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
            <button id="popupOpen" class="btn btn-success pull-right" data-toggle="modal" data-target="#popup">Проанализировать</button>
            <div id="popup" class="modal" tabindex="-1" role="dialog" aria-labelledby="popupLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="popupLabel">Анализ покупок</h4>
                  </div>
                  <div class="modal-body">
                    <div id="step_1" class="step">
                      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                      <svg class="spinner">
                        <use xlink:href="#icon-spin"></use>
                      </svg>
                      <span class="step__text">Ищу покупки в этой точке</span>
                      <span class="step__count">({{ $steps['step_1'] }})</span>
                    </div>
                    <div id="step_2" class="step is-hidden">
                      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                      <svg class="spinner">
                        <use xlink:href="#icon-spin"></use>
                      </svg>
                      <span class="step__text">Ищу аккаунты клиентов</span>
                      <span class="step__count">({{ $steps['step_2'] }})</span>
                    </div>
                    <div id="step_3" class="step is-hidden">
                      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                      <svg class="spinner">
                        <use xlink:href="#icon-spin"></use>
                      </svg>
                      <span class="step__text">Анализирую все их покупки</span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button id="cancelPopup" type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
                    <button id="closePopup" type="button" class="btn btn-success is-hidden" data-dismiss="modal">Готово</button>
                  </div>
                </div>
              </div>
            </div>

          <div class="panel-body">
            <p>Аналитика торговой точки от {{ $point->analytic_date }}</p>

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
