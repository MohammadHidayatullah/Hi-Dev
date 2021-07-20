    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li class="active">
              <a class="" href="{{ url('dashboard') }}">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
            </li>
            {{-- <li >
                <a class="" href="index.html">
                  <i class="icon_profile"></i>
                  <span>Profile</span>
                </a>
            </li> --}}
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <span>WEBINAR</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="{{ url('webinar') }}">DAFTAR WEBINAR</a></li>
                <li><a class="" href="{{ url('webinar/create') }}">TAMBAH WEBINAR</a></li>
              </ul>
            </li>

            <li class="sub-menu">
              <a href="javascript:;" class="">
                <span>LOKER</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="{{ url('loker') }}">DAFTAR LOKER</a></li>
                <li><a class="" href="{{ url('loker/create') }}">TAMBAH LOKER</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </aside>
      <!--sidebar end-->
