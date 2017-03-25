@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавление точки</div>

                    <div class="panel-body">

                        <form action="{{ route('point_add') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Адрес</label>
                                <div class="col-sm-8">
                                    <input type="text" name="address" id="task-name" class="form-control"required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">POS</label>
                                <div class="col-sm-8">
                                    <input type="number" name="terminal_id[]" id="terminal_id_1" class="form-control" required>
                                    <input type="number" name="terminal_id[]" id="terminal_id_2" class="form-control" >
                                    <input type="number" name="terminal_id[]" id="terminal_id_3" class="form-control" >
                                    <button type="submit" class="btn btn-success">
                                        Добавить POS
                                    </button>
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
