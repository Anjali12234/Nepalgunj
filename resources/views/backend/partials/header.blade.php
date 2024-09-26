<div class="header">
    <div class="header-left">
        <div class="menu-icon bi bi-list"></div>
        <div
            class="search-toggle-icon bi bi-search"
            data-toggle="header_search"
        ></div>
        <div class="header-search">
            <form>
                <div class="form-group mb-0">
                    <i class="dw dw-search2 search-icon"></i>
                    <input
                        type="text"
                        class="form-control search-input"
                        placeholder="Search Here"
                    />
                    <div class="dropdown">
                        <a
                            class="dropdown-toggle no-arrow"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <i class="ion-arrow-down-c"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label"
                                    >From</label
                                >
                                <div class="col-sm-12 col-md-10">
                                    <input
                                        class="form-control form-control-sm form-control-line"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                <div class="col-sm-12 col-md-10">
                                    <input
                                        class="form-control form-control-sm form-control-line"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label"
                                    >Subject</label
                                >
                                <div class="col-sm-12 col-md-10">
                                    <input
                                        class="form-control form-control-sm form-control-line"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a
                    class="dropdown-toggle no-arrow"
                    href="javascript:;"
                    data-toggle="right-sidebar"
                >
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false" id="noti-tour">
                    <i @class([
                        'ring-bell' => count(auth()->user()->unreadNotifications ?? []) > 0,
                        'dw dw-notification',
                        'noti-icon',
                    ])></i>
                    <span
                        class="badge {{ count(auth()->user()->unreadNotifications ?? []) > 0 ? 'bg-danger d-block' : 'd-none' }} rounded-circle noti-icon-badge text-white"
                        style="height: 15px; width: 15px; padding:2px;">
                        {{ count(auth()->user()->unreadNotifications ?? []) }}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                           @forelse (auth()->user()->unreadNotifications as $notification)

                            <li class="row flex">
                                <a href="#">
                                    {{-- <img src="{{ asset('assets/backend/vendors/images/img.jpg')}}" alt="" /> --}}
                                    <img src="{{ asset('assets/backend/vendors/images/logo.png') }}" alt="" />
                                    <h3>{{ $notification->data['username'] }}</h3>
                                    <p>
                                        register in system
                                    </p>
                                </a>
                                <a class="float-right" href="{{ route('admin.markasread',$notification->id) }}"> <i class="icon-copy bi bi-x"></i></a>
                            </li>
                            @empty
                            <li>
                                <p>
                                    No records
                                </p>
                            </li>
                        @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a
                    class="dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                >
                    <span class="user-icon" >
                        <img class="pt-3" src="{{ asset('assets/backend/vendors/images/logo.png') }}" height="100" width="100" alt="" />

                        {{-- <img src="{{ asset('assets/backend/vendors/images/photo1.jpg')}}" alt="" /> --}}
                    </span>
                    <span class="user-name">{{ Auth::user()->name }}</span>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                >
                    <a class="dropdown-item" href="profile.html"
                        ><i class="dw dw-user1"></i> Profile</a
                    >
                    <a class="dropdown-item" href="profile.html"
                        ><i class="dw dw-settings2"></i> Setting</a
                    >
                    <a class="dropdown-item" href="faq.html"
                        ><i class="dw dw-help"></i> Help</a
                    >
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="dw dw-logout"></i> Log Out
                        </button>
                    </form>


                </div>
            </div>
        </div>
        <div class="github-link">
            <a href="https://github.com/dropways/deskapp" target="_blank"
                ><img src="{{ asset('assets/backend/vendors/images/github.svg')}}" alt=""
            /></a>
        </div>
    </div>
</div>
