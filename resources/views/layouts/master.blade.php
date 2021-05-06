<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @include('layouts.partials.__style')
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 border border-warning">
                <div class="card border-primary">

                    <div class="card-body">
                        <h4 class="card-title">{{config('app.name')}}</h4>
                        <p class="card-text">{{Str::upper(Auth::user()->name ?? '')}}</p>
                    </div>
                </div>
                @include('layouts.partials.__sidebar')
            </div>
            <div class="col-lg-9 border border-warning">
                <!-- Nav tabs -->
                @include('layouts.partials.__navbar')

                @yield('content')
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('layouts.partials.__script')
</body>

</html>
