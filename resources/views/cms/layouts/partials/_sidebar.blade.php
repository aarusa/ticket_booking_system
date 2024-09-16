<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">           
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/airline') }}" target="_blank">
                <span class="menu-title">Airlines</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/flight_schedule') }}" target="_blank">
                <span class="menu-title">Flight Schedule</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/customers') }}" target="_blank">
                <span class="menu-title">Customers</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/ticket') }}" target="_blank">
                <span class="menu-title">Ticket</span>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/admin_users') }}" target="_blank">
                <span class="menu-title">Admin Users</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
          </ul>
</nav>