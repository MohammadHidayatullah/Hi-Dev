<!-- ***** Header Area Start ***** -->

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                        <a class="navbar-brand scroll-to-section" href="#">
                          <img src="{{ asset ('frontend/assets/images/logoiklanku.png') }}" width="120" height="70" style="margin-top: 11px" alt="">
                        </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ url('home') }}" >Home</a></li>
                        <li class="scroll-to-section"><a href="{{ url('listwebinar') }}">Webinar</a></li>
                        <li class="scroll-to-section"><a href="{{ url('listloker') }}">Loker</a></li>
                        <li class="scroll-to-section"><a href="{{ url('home') }}">Location</a></li>
                        @if (Auth::user())
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"><i class="icon_key_alt"></i>
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </li>
                        @else
                        <button class="btn btn-light" type="submit"><a href="{{ url('login') }}">Login</a></li>
                        @endif
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
