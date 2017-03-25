@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 points">
        <img src="{{ $company_logo }}" alt="">
        <h1 class="points__name">{{ $company_name }}</h1>

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

        <div class="points-list">
          @foreach ($points as $point)
            <a href="{{ route('point_detail', ['id' => $point->id]) }}" class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Торговая точка</h3>
              </div>
              <div class="panel-body">
                <span class="points-list__address">{{ $point->address }}</span>
                <span class="points-list__pos"><b>POS: </b>{{ $point->getTerminalIds() }}</span>
              </div>
            </a>
            @endforeach
            <a href="{{ route('point_add') }}" class="panel panel-info">
              <div class="panel-body">
                <span class="glyphicon glyphicon-plus"></span>
                <span class="points-list__new">Добавить точку</span>
              </div>
            </a>
        </div>
      </div>
    </div>
  </div>
@endsection
