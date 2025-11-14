
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="{{ route('admin.dashboard') }}" class=" p-5 text-primary">
          <img src="{{ asset('images/logo/logo-dark.png') }}" class="img-fluid logo-lg" alt="Adilisha STEM Lab">
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <li class="pc-item">
            <a href="{{ route('admin.dashboard') }}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
              <span class="pc-mtext">Dashboard</span>
            </a>
          </li>

          <li class="pc-item pc-caption">
            <label>Settings</label>
            <i class="ti ti-dashboard"></i>
          </li>
          <li class="pc-item">
            <a href="{{ route('subjects.index') }}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-book"></i></span>
              <span class="pc-mtext">Subjects</span>
            </a>
          </li>
          <li class="pc-item">
                <a href="{{ route('admin.models.3d.index') }}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-package"></i></span>
              <span class="pc-mtext">3D Models</span>
            </a>
          </li>
           <li class="pc-item">
            <a href="#" class="pc-link">
              <span class="pc-micon"><i class="ti ti-link"></i></span>
              <span class="pc-mtext">Experiments</span>
            </a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
