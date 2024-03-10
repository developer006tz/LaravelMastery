<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    @include('layout.assets.headerassets')
</head>
<body>
    <div class="main-wrapper">
        {{-- this is header  --}}
        @include('layout.header')
        {{-- this is sidebar  --}}
        @include('layout.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">

                @include('layout.includes.breadcumb')
                @include('layout.includes.alerts')
                @yield('content')

            </div>
            @include('layout.footer')
        </div>
    </div>

 @include('layout.assets.footerassets')
</body>

</html>
