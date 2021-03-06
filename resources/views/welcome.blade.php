<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=860">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('assets/app.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body class="landing">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-header pull-right">
          <a class="navbar-brand " href="{{ url('/') }}">
            <svg class="logo" xmlns="http://www.w3.org/2000/svg" width="235" height="44" viewBox="0 0 235 44">
              <g fill="none">
                <path fill="#282423" d="M204.55 21.25h-13.92v-8.68h-3.93v21.27h3.93v-9.09h13.92v9.09h3.95V12.57h-3.95zM.61 22.26h42.76v21.38H.61zM57.39 12.56v21.26h3.94v-7.14h9.24c4.65 0 7.57-2.52 7.57-6.89 0-4.2-2.91-7.23-7.57-7.23H57.39m16.73 7.29a3.16 3.16 0 0 1-3.32 3.32h-9.47v-7.09h9.24a3.47 3.47 0 0 1 3.55 3.76m18.62-7.93c-6.77 0-12.38 4.59-12.38 11.26S86 34.42 92.74 34.42c6.74 0 12.33-4.51 12.33-11.25s-5.52-11.26-12.33-11.26m0 18.91c-5.06 0-8.3-3.26-8.3-7.65 0-4.39 3.37-7.63 8.3-7.63 4.93 0 8.26 3.35 8.26 7.63 0 4.28-3.2 7.65-8.25 7.65m28.83-.12c-5.22 0-8.49-3.16-8.49-7.55s3.24-7.55 8.43-7.55a12.14 12.14 0 0 1 7.68 2.62l2.1-3.13a15.75 15.75 0 0 0-9.9-3.17c-7 0-12.47 4.58-12.47 11.23s5.36 11.25 12.47 11.25a16.16 16.16 0 0 0 10.06-3.12l-2.1-3.12a12.46 12.46 0 0 1-7.79 2.55m47.61-18.14l-10.35 21.27h4.25l2.45-5.16H177l2.44 5.16h4.25l-10.38-21.27h-4.13zm-2 12.64l4.11-8.62 4.09 8.62h-8.2zM233.81 12.57h-4.85l-10.69 9.92v-9.92h-3.94v21.27h3.94V23.52l10.69 10.32h5.3L222.81 22.8zM149.09 20.46h-9.24V16h15.22v-3.36h-19.15v21.25h13.18c4.64 0 7.84-2.52 7.84-6.72 0-4.36-3.2-6.71-7.84-6.71m.23 9.93h-9.47V24h9.47c2.47 0 3.87 1.31 3.87 3.2 0 2.11-1.11 3.21-3.87 3.21"/>
                <path fill="#DF0032" d="M43.36 22.69v-.43H.61V.88h42.75z"/>
                <path fill="#2B1917" d="M.61 22.26h42.76v.43H.61z"/>
                <path fill="#FFF" d="M8.07 20.96h27.82v2.59H8.07z"/>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </nav>
    <div class="landing-content">
      <div class="landing-content-title">
        <span>Cashback</span>
        <span class="is-red">Target</span>
      </div>
      <span class="landing-content-subtitle">Персональный кэшбек для ваших клиентов.</span>
      <div class="landing-content-text">
        <span>Всего за 5 минут вы узнаете покупательский профиль</span>
        <span>своих клиентов и сможете донести до них</span>
        <span>индивидуальные предложения.</span>
      </div>
      <a href="{{ route('point_list') }}" class="btn btn-success">Войти</a>
    </div>
    <script src="{{ asset('assets/vendors.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/app.js') }}" type="text/javascript"></script>
  </body>
</html>
