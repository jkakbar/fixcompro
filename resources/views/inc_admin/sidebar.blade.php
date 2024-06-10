<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard.index')}}">
      <div class="sidebar-brand-icon">
          <i class="fas fa-code"></i>
      </div>
      <div class="sidebar-brand-text mx-3">JK Compro</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
      <a class="nav-link" href="{{route('admin.dashboard.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Interface
  </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('home.index')}}" target="blank">
          <i class="fas fa-fw fa-home"></i>
          <span>Home Page</span></a>
  </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.profile.index')}}">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span></a>
  </li>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
          aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Components:</h6>
              <a class="collapse-item" href="{{route('admin.education.index')}}">Education</a>
              <a class="collapse-item" href="{{route('admin.experience.index')}}">Experience</a>
              <a class="collapse-item" href="{{route('admin.project.index')}}">Project</a>
              <a class="collapse-item" href="{{route('admin.skills.index')}}">Skills</a>
              <a class="collapse-item" href="{{route('admin.setting.index')}}">Setting</a>
          </div>
      </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Addons
  </div>

  <!-- Nav Item - User -->
  <li class="nav-item">
      <a class="nav-link" href="{{route('admin.user.index')}}">
          <i class="fas fa-fw fa-users"></i>
          <span>User</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">



</ul>