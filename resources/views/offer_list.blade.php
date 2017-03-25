@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Список предложений</h4>
                    </div>

                    <div class="flash-message" id="alert">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                                    <a href="#"
                                       onclick="javascript:document.getElementById('alert').style.display='none'; return false"
                                       class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                </p>
                            @endif
                        @endforeach
                    </div>

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
                        <td>{{ $offer->created_at->formatLocalized('%d %B %Y') }}</td>
                    </tr>
                    @endforeach
                    </tbody> </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
