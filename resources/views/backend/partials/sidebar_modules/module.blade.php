<li class="{{ strpos($routeName, 'backend.module') === 0 ? 'active open' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-user-md"></i>
        <span class="menu-text">
           Module
        </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ $routeName === 'backend.module' ? 'open' : ''}}">
            <a href="{{ route('backend.module.index') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                All Module
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ $routeName === 'backend.module' ? 'open' : ''}}">
            <a href="{{ route('backend.module.create') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                Add Module
            </a>
            <b class="arrow"></b>
        </li>

</ul>

</li>
