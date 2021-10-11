
        <li class="{{ strpos($routeName, 'backend.customer') === 0 ? 'active open' : ''}}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user-plus"></i>
                <span class="menu-text">
                   Customer
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ $routeName === 'backend.customer.index' ? 'open' : ''}}">
                    <a href="{{ route('backend.customer.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        All Customer
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ $routeName === 'backend.customer.subscribe' ? 'open' : ''}}">
                    <a href="{{ route('backend.customer.subscribe') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Subscribe
                    </a>
                    <b class="arrow"></b>
                </li>


            </ul>

        </li>
