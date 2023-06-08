<nav class="navbar" style="position:fixed; z-index: 50000; width: 100%">
    <div class="logo">
        <img class="img-fluid" src="{{ asset('all/images/mainLogo.png') }}" alt=""
            style='width: 50px; height: 50px; margin-top: 10px'>
    </div>
    <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <div class="menu" style="z-index: 12000">
            <li><a href="{{ route('app.home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('investments') }}">Investment Plan</a></li>
            <li><a href="{{ route('user.contact') }}">Contact</a></li>
            <li><a href="{{ route('user.login') }}">Login</a></li>
            <li><a href="{{ route('user.register') }}">Register</a></li>

            {{-- <li class="services">
          <a href="/">Services</a>

          <!-- DROPDOWN MENU -->
          <ul class="dropdown" style="z-index: 1000">
            <li><a href="/">Dropdown 1 </a></li>
            <li><a href="/">Dropdown 2</a></li>
            <li><a href="/">Dropdown 2</a></li>
            <li><a href="/">Dropdown 3</a></li>
            <li><a href="/">Dropdown 4</a></li>
          </ul>

        </li> --}}
        </div>
    </ul>
</nav>
