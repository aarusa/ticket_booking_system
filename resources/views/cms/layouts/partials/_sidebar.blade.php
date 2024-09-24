<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">           
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/airlines') }}" target="_self">
                <span class="menu-title">Airports</span>
                <i class="mdi mdi-airplane menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/schedule') }}" target="_self">
                <span class="menu-title">Flight Schedule</span>
                <i class="mdi mdi-airplane-clock menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/bookings') }}" target="_self">
                <span class="menu-title">Bookings</span>
                <i class="mdi mdi-calendar-month menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/users') }}" target="_self">
                <span class="menu-title">Users</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
          </ul>
</nav>