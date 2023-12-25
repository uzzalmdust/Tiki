<footer class="py-5">
            <div class="container text-center pb-5 border-bottom">
                <a class="d-inline-block mx-auto mb-4" href="{{route('home')}}">
                    <h3 class="text-Primary">Tiki</h3>
                </a>
                <ul class="d-flex flex-wrap justify-content-center align-items-center list-unstyled mb-4">
                <li class="nav-item me-4"><a class="nav-link" href="{{route('trips.index')}}">Trips</a></li>
                        <li class="nav-item me-4"><a class="nav-link" href="{{route('locations.index')}}">Locations</a></li>
                        <li class="nav-item me-4"><a class="nav-link" href="{{route('seat-allocations.index')}}">Seats</a></li>
                       
                </ul>
                <div>
                    <a class="d-inline-block me-4" href="#">
                        <img src="{{ asset('bootstrap5-plain-assets/socials/facebook.svg') }}">
                    </a>
                    <a class="d-inline-block me-4" href="#">
                        <img src="{{ asset('bootstrap5-plain-assets/socials/twitter.svg') }}">
                    </a>
                    <a class="d-inline-block me-4" href="#">
                        <img src="{{ asset('bootstrap5-plain-assets/socials/github.svg') }}">
                    </a>
                    <a class="d-inline-block me-4" href="#">
                        <img src="{{ asset('bootstrap5-plain-assets/socials/instagram.svg') }}">
                    </a>
                    <a class="d-inline-block" href="#">
                        <img src="{{ asset('bootstrap5-plain-assets/socials/linkedin.svg') }}">
                    </a>
                </div>
            </div>
            <div class="mb-5"></div>
            <div class="container">
                <p class="text-center">All rights reserved © Wireframes Corporation 2021</p>
            </div>
        </footer>