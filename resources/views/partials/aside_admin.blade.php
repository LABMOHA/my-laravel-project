<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div>
         Mein<b class="font-black"> Admin</b>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li class=" {{ request()->is('admin') ? 'active' : '' }}">
          <a href="{{route('_admin.index')}}">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">My Tables</p>
      <ul class="menu-list">
        <li class="--set-active-tables-html  {{ request()->is('admin/jobs') ? 'active' : '' }}">
          <a href="{{route('_admin.jobs')}}">
            <span class="icon"><i class="mdi mdi-briefcase"></i></span>
            <span class="menu-item-label">Jobs</span>
          </a>
        </li>
        {{-- <li class="--set-active-forms-html">
          <a href="forms.html">
            <span class="icon"><i class="mdi mdi-domain"></i></span>
            <span class="menu-item-label">Company</span>
          </a>
        </li> --}}
        <li class="--set-active-profile-html   {{ request()->is('admin/users') ? 'active' : '' }}">
          <a href="{{route('_admin.users')}}">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label">Users</span>
          </a>
        </li>
        
        {{-- <li>
          <a class="dropdown">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Submenus</span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
          </a>
          <ul>
            <li>
              <a href="#void">
                <span>Sub-item One</span>
              </a>
            </li>
            <li>
              <a href="#void">
                <span>Sub-item Two</span>
              </a>
            </li>
          </ul>
        </li> --}}
      </ul>
      
      
    </div>
  </aside>