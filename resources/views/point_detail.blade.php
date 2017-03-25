@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
          <div class="header">
            <ol class="breadcrumb">
              <li><a href="{{ route('point_list') }}">{{ $company_name }}</a></li>
              <li class="active">{{ $point->address }}</li>
            </ol>
            <span class="header__title">Профиль покупателя</span>
          </div>
          <div class="start">
            <div>
              <span>Запустите анализ транзакций,  чтобы собрать покупательский профиль</span>
              <button id="popupOpen" class="btn btn-success" data-toggle="modal" data-target="#popup">Запустить анализ</button>
            </div>
          </div>
          <div class="finish is-hidden">
            <svg class=finish-profile>
              <use xlink:href="#icon-profile"></use>
            </svg>
            <div class="finish-info">
              <span class="finish-info__updated">Обновлено сегодня</span>
              <table class="table">
              <thead><tr>
                  <th>Параметры</th>
                  <th>В магазине</th>
                  <th>В категории</th>
              </tr> </thead>

              <tbody class="text-left">
                <tr>
                    <td>Средний чек</td>
                    <td><b>{{ $bigdata['average_check']['my'] }} ₽</b></td>
                    <td><b>{{ $bigdata['average_check']['others'] }} ₽</b></td>
                </tr>
                <tr>
                    <td>Транзакций в месяц</td>
                    <td><b>{{ $bigdata['transactions']['my'] }}</b></td>
                    <td><b>{{ $bigdata['transactions']['others'] }}</b></td>
                </tr>
                <tr>
                    <td>Траты в месяц</td>
                    <td><b>{{ $bigdata['spending']['my'] }} ₽</b></td>
                    <td><b>{{ $bigdata['spending']['others'] }} ₽</b></td>
                </tr>
              </tbody> </table>
              <div class="panels">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Потенциальные</h3>
                </div>
                <div class="panel-body">
                  <div class="finish-number">
                    <span class="finish-number__count">{{ $bigdata['potential'] }}</span>
                    <span class="finish-number__man">Чел.</span>
                  </div>
                  <a href="#" class="btn btn-success">Создать кэшбэк</a>
                </div>
              </div>
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Уснувшие</h3>
                </div>
                <div class="panel-body">
                  <div class="finish-number">
                    <span class="finish-number__count">{{ $bigdata['sleep'] }}</span>
                    <span class="finish-number__man">Чел.</span>
                  </div>
                  <a href="#" class="btn btn-info">Создать кэшбэк</a>
                </div>
              </div>
              <div class="panel panel-warning">
                <div class="panel-heading">
                  <h3 class="panel-title">Разовые</h3>
                </div>
                <div class="panel-body">
                  <div class="finish-number">
                    <span class="finish-number__count">{{ $bigdata['first'] }}</span>
                    <span class="finish-number__man">Чел.</span>
                  </div>
                  <a href="#" class="btn btn-warning">Создать кэшбэк</a>
                </div>
              </div>
            </div>
            </div>

          </div>
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
        </div>
      </div>
    </div>
  </div>
@endsection
