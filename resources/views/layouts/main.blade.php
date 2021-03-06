<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    </head>
    <body>
        <div class="fullHeight overflowHidden appContainer">
            <nav class="navBar fullHeight">
                <div class="userLink flexColCenterAll">
                    <div class="userIcon">
                        <img src="{{ asset('img/userIcon.svg') }}"/>
                    </div>
                    <p class="bold">
                        Hi Cunt!
                    </p>
                </div>
                    <ul>
                        @foreach(['breakfast', 'lunch', 'dinner', 'snack'] as $item)
                        <a href={{$item}}>
                            <li
                                class="{{ ($activeRoute ?? "") ==$item ? " flexColCenterAll selected" : "flexColCenterAll" }}">
                                <span id="test" class="icon-{{$item}} svgNavFont"></span>

                                <p>
                                    {{ ucfirst($item) }}
                                </p>
                            </li>
                        </a>

                        @endforeach
                    </ul>
                <div class="helpLink selected flexCenterAll">?</div>
            </nav>
            <main id="mainScrollContainer" class="overflowAuto">
                @yield('content')
            </main>
        </div>
    </body>
</html>
