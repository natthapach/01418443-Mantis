<head>
    <title>
        @yield("title")
    </title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack("js")

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack("css")
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mantis</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="/users">Show all <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="/users/create">Create <span class="sr-only">(current)</span></a>
                    </div>
                    
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="/projects">Show all<span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="/projects/create">Create <span class="sr-only">(current)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="/categories">Show all<span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="/categories/create">Create <span class="sr-only">(current)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Issues
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="/issues">Show all<span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="/issues/create">Create <span class="sr-only">(current)</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    @yield("content")
</body>
</html>