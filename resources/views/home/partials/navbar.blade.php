<nav class="navbar navbar-expand-lg">
    <a class=" navbar-brand" href="#">
        <img src="{{asset('assets/images/image.png')}}" alt="" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            @if (!session('user'))
            <li>
                <a href="{{ route('login') }}" class="nav-link">Login</a>
            </li>
            @else
            <li>
                <a href="{{ route('logout') }}" class="nav-link">Logout</a>
            </li>
            @endif

            {{-- <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li> --}}
        </ul>
    </div>
</nav>
