@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="offer panel panel-default">
                    <div class="panel-heading">Новое кэшбек-предложение</div>

                    <div class="panel-body">
                        <div class="offer-description">
                            <b>Сегмент: «Потенциальные»</b>
                            <span>Похожи на ваших клиентов по профилю и географии покупок, но у вас еще не покупали.</span>
                        </div>

                        <form action="{{ route('offer_add') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Торговая точка</label>
                                <div class="col-sm-5">
                                    <input type="text" name="" disabled id="task-name" class="form-control"
                                           value="{{ $point->address }}">

                                    <input type="hidden" name="point_id" value="{{ $point->id }}">
                                    <input type="hidden" name="point_address" value="{{ $point->address }}">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Дата с</label>
                                <div class="col-sm-4">
                                    <input type="text" name="date_from" id="task-name" class="form-control" required
                                           placeholder="гггг-мм-дд" value="@php print date('Y-m-d'); @endphp">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Дата до</label>
                                <div class="col-sm-4">
                                    <input type="text" name="date_to" id="task-name" class="form-control" required
                                           placeholder="гггг-мм-дд" value="@php print date('Y-m-d', strtotime('+1 month')); @endphp">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Получатели</label>
                                <div class="col-sm-4">
                                    <input type="number" max="{{ $point->getRecipientNum($target_id) }}"
                                           name="recipient_num" id="task-name" class="form-control"
                                           required value="{{ $point->getRecipientNum($target_id) }}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Название</label>
                                <div class="col-sm-4">
                                    <input type="text" name="name" id="task-name" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Описание</label>
                                <div class="col-sm-4">
                                    <textarea class="form-control" rows="3" name="description" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Cashback, %</label>
                                <div class="col-sm-4">
                                    <input type="text" max="99" maxlength="2" name="cashback" id="task-name"
                                           class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-4">
                                    <button type="submit" class="btn btn-success">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
