<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset ('assets/images/logo-mini.svg') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset ('assets/images/faces/face15.jpg') }}" alt="">
                        <span class="count bg-danger"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <div class="preview-item-content">
                                <button class="btn btn-outline-danger border border-0" type="submit">Logout</button>

                            </div>
                        </form>

                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>

        @foreach($items as $item)
        <li class="nav-item menu-items">
            <a href="{{ route($item['route']) }}" class="nav-link
            {{--  {{ $item['route']==$active ? 'active':'' }}  --}}
            ">
                <span class="menu-icon">
                    <i class="{{ $item['icon'] }}"></i>
                </span>

                <span class="menu-title">{{ $item['name'] }}</span>

            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">



                </ul>
            </div>

        </li>
        @endforeach
    </ul>
</nav>
