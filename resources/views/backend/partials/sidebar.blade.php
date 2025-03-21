<div class="left-side-bar">
    <div class="brand-logo bg-white border-neutral-600">
        <a href="{{ route('admin.dashboard') }}">
            {{-- <h5>{{ setting()?->name_ne }}</h5> --}}
            <img src="{{ setting()->logo1 ?? '' }}" alt="" />

        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{route('admin.dashboard')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.setting.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">System Setting</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.mainCategory.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-table"></span><span class="mtext">Main Category</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span><span class="mtext">Sub Category</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.healthCare.index') }}">Health Category </a>
                        </li>
                        <li><a href="{{ route('admin.propertyCategory.index') }}">Property Category</a></li>
                        <li><a href="{{ route('admin.educationCategory.index') }}">Education Category</a></li>
                        <li><a href="{{ route('admin.hospitalityCategory.index') }}">Hospitality Category</a></li>
                        <li><a href="{{ route('admin.jobCategory.index') }}">Job Category</a></li>
                        <li><a href="{{ route('admin.entertainmentCategory.index') }}">Entertainment Category</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span><span class="mtext">All Ad List</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.healthCareList') }}">Health List </a>
                        </li>
                        <li><a href="{{ route('admin.propertyList') }}">Property List</a></li>
                        <li><a href="{{ route('admin.educationList') }}">Education List</a></li>
                        <li><a href="{{ route('admin.entertainmentList') }}">Entertainment List</a></li>
                        <li><a href="{{ route('admin.hospitalityList') }}">Hospitality List</a></li>
                        <li><a href="{{ route('admin.jobList') }}">Job List</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">News </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.newsCategory.index') }}">News Category</a>
                        </li>
                        <li><a href="{{ route('admin.newsList.index') }}">News List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span><span class="mtext">Registered User</span>
                    </a>
                    <ul class="submenu">
                        <li><a
                                href="
                            {{ route('admin.registeredUser.index') }}
                             ">User</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.menu.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Menu</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span><span class="mtext">Setting</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.program.index') }}">Program</a>
                        </li>
                       
                    </ul>
                </li>



            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
