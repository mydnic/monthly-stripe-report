<nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item is-hidden-tablet" href="/">
                <img src="/img/logo.svg" alt="Stripe Accounting Logo" height="28">
            </a>
            <div class="navbar-burger burger" data-target="mainNav">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="mainNav" class="navbar-menu">
            <div class="navbar-start">

            </div>

            <div class="navbar-end">
                @auth
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">
                            {{ auth()->user()->name }}
                        </a>

                        <div class="navbar-dropdown is-right">
                            <a class="navbar-item" href="{{ route('stripe-account.index') }}">
                                Mes comptes Stripe
                            </a>
                            <hr class="dropdown-divider">
                            <a class="navbar-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @else
                    <a class="navbar-item" href="{{ route('login') }}">
                        @lang('auth.login')
                    </a>
                    <a class="navbar-item" href="{{ route('register') }}">
                        @lang('auth.register')
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
