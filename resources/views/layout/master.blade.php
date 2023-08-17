<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Basic Layout-@yield('title', 'website')</title>
</head>

<body>
    <header class="bg-dark text-light text-center py-2">
        <h1>Header</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h2 class="navbar-brand">Navbar</>
        </h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li><a href="/"> Home</a></li> &nbsp; &nbsp;
                <li><a href="/post">Post</a></li> &nbsp; &nbsp;
                <li><a href="/contant">contant</a></li> &nbsp; &nbsp;


            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 p-4">
                <article>
                    @yield('test')
                </article>
            </main>
            <aside class="col-md-3 bg-light p-4">
                <h2>Sidebar</h2>
                @section('sidebar')
                    <ul class="list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><a href="/post">Post</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/loop">loop</a></li>
                        <li><a href="/conditional">condition</a></li>
                    </ul>
                @show

            </aside>


        </div>
    </div>

    <footer class="bg-dark text-light text-center py-2 mt-5">
        @yield('footer')
        <p>Footer &copy; 2023</p>
    </footer>

    >
</body>

</html>
