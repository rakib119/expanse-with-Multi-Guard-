<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <a class="navbar-brand" href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}"
                alt=""></a>
        <div class="ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top flex-row ">
                <li class="nav-item dropdown notification order-4 ">
                    <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                        <li>
                            <div class="notification-title"> Notification</div>
                            <div class="notification-list">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        <div class="notification-info">
                                            <div class="notification-list-user-img') }}"><img
                                                    src="{{ asset('assets/images/avatar-2.jpg') }}"
                                                    alt="" class="avatar-xs rounded-circle"></div>
                                            <div class="notification-list-user-block"><span
                                                    class="notification-list-user-name">Jeremy
                                                    Rakestraw</span>accepted your invitation to join the team.
                                                <div class="notification-date">2 min ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list-footer"> <a href="#">View all notifications</a></div>
                        </li>
                    </ul>
                </li>
                @auth
                    <li class="nav-item dropdown nav-user order-lg-4 ">
                        <a class="nav-link nav-user-img') }}" href="#" id="navbarDropdownMenuLink2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="{{ asset('assets/images/avatar-1.jpg') }}" alt=""
                                class="avatar-xs rounded-circle"></a>

                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                            aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">{{ auth()->user()->name }}</h5>
                            </div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                            {{-- <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a> --}}
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
</div>
