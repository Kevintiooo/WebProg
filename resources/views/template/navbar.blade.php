
@guest
<link rel="stylesheet" href="{{url('/css/home.css')}}">
<header>
    <nav class="navbar navbar-light px-5" id="nav">
        <div class="container-fluid">
        <a class="navbar-brand" href="/" id="brand"><u>MAIBOUTIQUE</u></a>
        <form class="d-flex">
            <a href = "/SignIn" id="SignInLink">Sign in</a>
        </form>
        </div>
    </nav>
</header>
@endguest


@auth
@if (Auth::user()->role_id == 1)
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">MAI BOUTIQUE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/homepage">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Search">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Profile">Profile</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-primary mx-2"><a href="/Add"id="links">Add Item</a></button>
                    <button class="btn btn-outline-primary"><a href ="/SignOut" id="links" style="text-decoration: none;">Sign Out</a></button>
                </form>
            </div>
        </div>
    </nav>
@elseif (Auth::user()->role_id == 2)
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">MAI BOUTIQUE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/homepage">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Search">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/myCart">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/History">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Profile">Profile</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-primary"><a href ="/SignOut" id="links">Sign Out</a></button>
                </form>
            </div>
        </div>
    </nav>

@endif
@endauth
