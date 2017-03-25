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
                </div>
            </div>
        </div>
    </div>
@endsection
