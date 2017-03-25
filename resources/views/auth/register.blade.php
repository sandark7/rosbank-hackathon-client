@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Регистрация</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">ФИО</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Электронная почта</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">Телефон</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone"
                                           value="{{ old('phone') }}" required>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Пароль</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required minlength="6">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Подтверждение пароля</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required minlength="6">
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('company_type') ? ' has-error' : '' }}">
                                <label for="company_type" class="col-md-4 control-label">Тип компании</label>

                                <div class="col-md-6">
                                    <select class="selectpicker show-tick form-control" title="Выберите из списка" name="company_type" required>
                                        <option>ООО</option>
                                        <option>ОАО</option>
                                        <option>ЗАО</option>
                                        <option>ИП</option>
                                        <option>Другая</option>
                                    </select>

                                    @if ($errors->has('company_type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('company_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                                <label for="company_name" class="col-md-4 control-label">Название компании</label>

                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control" name="company_name"
                                           value="{{ old('company_name') }}" required autofocus>

                                    @if ($errors->has('company_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('company_scope') ? ' has-error' : '' }}">
                                <label for="company_scope" class="col-md-4 control-label">Вид основной деятельности</label>

                                <div class="col-md-6">
                                    <select class="selectpicker show-tick form-control" title="Выберите из списка" name="company_scope" required>
                                        <option value="3677">Транспорт</option>
                                        <option value="3678">Финансы и страхование</option>
                                        <option value="3834">Производство</option>
                                        <option value="3827">Недвижимость</option>
                                        <option value="3828">Розничная торговля</option>
                                        <option value="3829">Строительство</option>
                                        <option value="3830">Оптовая торговля</option>
                                        <option value="3831">Отдых и развлечения</option>
                                        <option value="3832">Услуги</option>
                                        <option value="3833">Здравоохранение и предоставление социальных услуг</option>
                                        <option value="3679">Прочие</option>
                                    </select>

                                    @if ($errors->has('company_scope'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('company_scope') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                <label for="text" class="col-md-4 control-label">Дополнительная информация</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" rows="3" id="text" name="text">{{ old('text') }}</textarea>

                                    @if ($errors->has('text'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                                <label for="region" class="col-md-4 control-label">Регион</label>

                                <div class="col-md-6">
                                    <select class="selectpicker show-tick form-control" name="region" required>
                                        <option value="4387" fo="3598">Алтайский край</option>
                                        <option value="4378" fo="3597">Амурская область</option>
                                        <option value="4369" fo="3596">Архангельская область</option>
                                        <option value="4363" fo="3595">Астраханская область</option>
                                        <option value="4350" fo="3594">Белгородская область</option>
                                        <option value="4351" fo="3594">Брянская область</option>
                                        <option value="4357" fo="3594">Владимирская область</option>
                                        <option value="4364" fo="3595">Волгоградская область</option>
                                        <option value="4370" fo="3596">Вологодская область</option>
                                        <option value="4356" fo="3594">Воронежская область</option>
                                        <option value="4379" fo="3597">Еврейская автономная область</option>
                                        <option value="4388" fo="3598">Забайкальский край</option>
                                        <option value="4358" fo="3594">Ивановская область</option>
                                        <option value="4389" fo="3598">Иркутская область</option>
                                        <option value="4371" fo="3596">Калининградская область</option>
                                        <option value="4352" fo="3594">Калужская область</option>
                                        <option value="4380" fo="3597">Камчатский край</option>
                                        <option value="4390" fo="3598">Кемеровская область</option>
                                        <option value="4403" fo="3600">Кировская область</option>
                                        <option value="4353" fo="3594">Костромская область</option>
                                        <option value="4365" fo="3595">Краснодарский край</option>
                                        <option value="4391" fo="3598">Красноярский край</option>
                                        <option value="4398" fo="3599">Курганская область</option>
                                        <option value="4354" fo="3594">Курская область</option>
                                        <option value="4355" fo="3594">Липецкая область</option>
                                        <option value="4381" fo="3597">Магаданская область</option>
                                        <option value="4362" selected="" fo="3594">Москва и Московская область</option>
                                        <option value="4372" fo="3596">Мурманская область</option>

                                    </select>

                                    @if ($errors->has('region'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('office') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Офис</label>

                                <div class="col-md-6">
                                    <select class="selectpicker show-tick form-control" title="Выберите из списка" name="office" required>
                                        <option value="Алексеевский" id="8708" title="2019" data-lng="37.639333084653"
                                                data-lat="55.814355697765" data-metro="метро Алексеевская, ВДНХ">
                                            "Алексеевский" (Москва,
                                            Мира, 124)
                                        </option>

                                        <option value="Алтуфьевский" id="8713" title="2020" data-lng="37.585467"
                                                data-lat="55.861415" data-metro="">"Алтуфьевский" (Москва,
                                            Алтуфьевское, 22 Б)
                                        </option>

                                        <option value="Арбатский" id="8701" title="2021" data-lng="37.598137777771"
                                                data-lat="55.753566011571"
                                                data-metro="метро Александровский сад, Арбатская, Библиотека им.Ленина, Боровицкая">
                                            "Арбатский" (Москва,
                                            Поварская, 10)
                                        </option>

                                        <option value="Бабушкинский" id="9762" title="1501" data-lng="37.659256"
                                                data-lat="55.870837" data-metro="метро Бабушкинская">"Бабушкинский"
                                            (Москва,
                                            Менжинского, 38, 2)
                                        </option>

                                        <option value="Бибирево" id="9794" title="1504" data-lng="37.603316"
                                                data-lat="55.886973" data-metro="метро Бибирево">"Бибирево" (Москва,
                                            Пришвина, 17)
                                        </option>

                                    </select>

                                    @if ($errors->has('office'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('office') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('accept') ? ' has-error' : '' }}">
                                <div class="col-sm-offset-4 col-md-6">
                                    <div class="checkbox">
                                        <label class="fz14">
                                            <input id="company_name" type="checkbox" name="accept" value="1" required autofocus>
                                                Я согласен с обработкой моих персональных данных
                                        </label>
                                    </div>

                                    @if ($errors->has('accept'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('accept') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Зарегистрироваться
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
