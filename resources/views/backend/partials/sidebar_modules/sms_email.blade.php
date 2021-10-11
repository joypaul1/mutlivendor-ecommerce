
        <li class="{{ strpos($routeName, 'backend.sms_config') === 0 || strpos($routeName, 'backend.email_config') === 0 ? 'active open' : ''}}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-envelope-square"></i>
                <span class="menu-text">
                   SMS & Email
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ $routeName === 'backend.sms_config.get' ? 'open' : ''}}">
                    <a href="{{ route('backend.sms_config.get') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        SMS Config
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ $routeName === 'backend.email_config.get' ? 'open' : ''}}">
                    <a href="{{ route('backend.email_config.get') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                       Email Config
                    </a>
                    <b class="arrow"></b>
                </li>

            </ul>

        </li>
