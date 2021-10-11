<li class="{{ strpos($routeName, 'backend.submodule') === 0 ? 'active open' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-user-md"></i>
        <span class="menu-text">
           Sub Module
        </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ $routeName === 'backend.submodule' ? 'open' : ''}}">
            <a href="{{ route('backend.submodule.index') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                All Sub-Module
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ $routeName === 'backend.submodule' ? 'open' : ''}}">
            <a href="{{ route('backend.submodule.create') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                Add Sub-Module
            </a>
            <b class="arrow"></b>
        </li>

    </ul>
</li>
