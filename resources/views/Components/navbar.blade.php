<nav class="navbar navbar-expand-lg bg-light px-5 sticky-top">
    <div class="container-fluid">
        <div class="logo_and_sidebar d-flex align-items-center">

            <a class="navbar-brand" href="{{ url('/') }}">
                <!-- Logo -->
                <h2>Home</h2>
            </a>

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                    @if (auth()->user()->type == 'client')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('notifications.index') }}">Notifications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tickets.create') }}">Ticket Submission</a>
                        </li>

                    @elseif (auth()->user()->type == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/users') }}">User Management</a>
                        </li>
                    @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tickets.index') }}">Ticket Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                @endauth


            </ul>
        </div>
    </div>
</nav>

