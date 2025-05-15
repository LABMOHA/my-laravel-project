<nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item mobile-aside-button">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a>
    </div>
    <div class="navbar-brand is-right">
      <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
        <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
      </a>
    </div>
    <div class="navbar-menu" id="navbar-menu">
      <div class="navbar-end">
        
        <div class="navbar-item dropdown has-divider has-user-avatar">
          <a class="navbar-link" href="">
            <div class="user-avatar">
              <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
            </div>
            <div class="is-user-name"><span>My Profile</span></div>
                  </a>
          
        </div>
        


        <form action="{{route('_admin.quiter')}}" method="post" class="inline">
            @csrf
            <button type="submit" class="navbar-item desktop-icon-only"><span class="icon"><i class="mdi mdi-logout"></i></span>
                <span>Log out</span></button>
        </form>

        {{-- <a title="Log out" class="navbar-item desktop-icon-only" href="#">
          <span class="icon"><i class="mdi mdi-logout"></i></span>
          <span>Log out</span>
        </a> --}}
      </div>
    </div>
  </nav>