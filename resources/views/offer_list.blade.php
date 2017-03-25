@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Панель управления</div>

                    <div class="panel-body">
                        Список предложений
                    </div>

                    @foreach ($offers as $offer)
                        <p>Название {{ $offer->name }}</p>
                        <p>Описание {{ $offer->description }}</p>
                        <p>Кешбек {{ $offer->cashback }}</p>
                        <p><img src="{{ $offer->logo }}" ></p>
                        <p>Дата создания {{ $offer->created_at }}</p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
