<div class="sidebar">

          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg"
                class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
          </div>



          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                   Manage User
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('user.view') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> View User</p>
                    </a>
                  </li>
                </ul>
              </li>
               <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                  <p>
                   Manage Profile
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('profile.view') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> View Profile</p>
                    </a>
                  </li>
                </ul>
              </li>
               <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-key"></i>
                  <p>
                    Password Manages
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('profile.passwordview') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Changes Password</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Employees Manages
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('add.employees') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Add New</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('view.employees') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> All Employees</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="dropdown-item nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-copy"></i>
                  <p>
                   Logout
                  </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
            </ul>
          </nav>

        </div>
