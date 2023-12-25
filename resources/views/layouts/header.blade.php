<nav class="navbar sticky-top navbar-expand-lg navbar-light py-4 shadow-sm bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <h2 class="text-primary">Tiki</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav06"
            aria-controls="nav06" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav06">
            <ul class="navbar-nav mt-3 mt-lg-0 mb-3 mb-lg-0 ms-lg-3">
                <li class="nav-item me-4"><a class="nav-link" href="{{route('trips.index')}}">Trips</a></li>
                <li class="nav-item me-4"><a class="nav-link" href="{{route('locations.index')}}">Locations</a></li>
                <li class="nav-item me-4"><a class="nav-link" href="{{route('seat-allocations.index')}}">Seats</a></li>
            </ul>
        </div>
        <div class="d-none d-lg-flex" action="">
            <div class="input-group">
                <ul class="navbar-nav mt-3 mt-lg-0 mb-3 mb-lg-0 ms-lg-3">
                    @if(Auth::check())
                    <li class="nav-item me-4"><a class="nav-link" href="{{route('dashboard')}}">Deshboard</a></li>
                    <li class="nav-item me-4"><a class="nav-link" href="{{route('profile.edit')}}">Profile</a></li>
                    <li class="nav-item me-4">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                Log Out
                            </a>
                        </form>
                    </li>
                    @else
                    <li class="nav-item me-4">
                        <a class="nav-link" href="{{route('register')}}">Sign Up</a>
                    </li>
                    <li class="nav-item me-4">
                        
                    <a class="nav-link" href="{{route('login')}}">Log In</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>