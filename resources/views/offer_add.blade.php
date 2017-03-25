@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавление предложения</div>

                    <div class="panel-body">

                    <form action="{{ route('offer_add') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Название</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" id="task-name" class="form-control"required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Название</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" id="task-name" class="form-control"required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Описание</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="description" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Cashback, %</label>
                            <div class="col-sm-8">
                                <input type="number" name="cashback" id="task-name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
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
