<li class="{{ strpos($routeName, 'backend.transaction.') === 0 || strpos($routeName, 'backend.withdrawal.') === 0 ? 'open active' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-usd"></i>
        <span class="menu-text">
                    Transaction
                </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ $routeName == 'backend.transaction.index' ? 'open' : ''}}">
            <a href="">
                <i class="menu-icon fa fa-caret-right"></i>
                All Transactions
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ strpos($routeName, 'backend.withdrawal.') === 0 ? 'open' : ''}}">
            <a href="">
                <i class="menu-icon fa fa-caret-right"></i>
                Withdraw Requests
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
</li>
