@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Панель управления</div>

                    <div class="panel-body">
                        Добавление предложения
                    </div>

                    <form action="{{ route('offer_add') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Название</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control"required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Описание</label>
                            <div class="col-sm-6">
                                <textarea name="description" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Кешбек, %</label>
                            <div class="col-sm-6">
                                <input type="text" name="cashback" id="task-name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Добавить
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
