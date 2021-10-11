<li class="{{ strpos($routeName, 'backend.report.') === 0 ? 'open active' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-pie-chart"></i>
        <span class="menu-text">
            Report
        </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ strpos($routeName, 'backend.report.sales') === 0 ? 'open' : ''}}">
            <a href="">
                <i class="menu-icon fa fa-caret-right"></i>
                Sales
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ $routeName == 'backend.report.due.seller' ? 'open' : ''}}">
            <a href="">
                <i class="menu-icon fa fa-caret-right"></i>
                Seller Dues
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ $routeName == 'backend.report.due.agent' ? 'open' : ''}}">
            <a href="">
                <i class="menu-icon fa fa-caret-right"></i>
                Agent Dues
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ $routeName == 'backend.report.deliveries' ? 'open' : ''}}">
            <a href="">
                <i class="menu-icon fa fa-caret-right"></i>
                Deliveries
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
</li>
