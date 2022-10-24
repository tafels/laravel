<html lang="uk-UA">
<head>
    <title>Інтернет магазин - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<div class="header">
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark" aria-label="Sixth navbar example">
        <div class="container-fluid">
{{--            <a class="navbar-brand" href="{{ route('index')}}">Expand at xl</a>--}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample06">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
{{--                        <a class="nav-link" href="{{ route('categories')}}">Категорії</a>--}}
                    </li>
                    <li class="nav-item">
{{--                        <a class="nav-link" href="{{ route('basket')}}">Кошик</a>--}}
                    </li>
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="dropdown06">--}}
{{--                            <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
                <form>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
</div>
<div class="container">
    @yield('content')
</div>
<div class="footer"></div>
</html>
