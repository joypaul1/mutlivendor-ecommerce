<li class="{{ strpos($routeName, 'seller.transaction.') === 0 || strpos($routeName, 'seller.withdrawal.') === 0 ? 'active open' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-usd"></i>
        <span class="menu-text">
           Transaction
        </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <!-- <ul class="submenu">
        <li class="{{ strpos($routeName, 'seller.transaction.') === 0 ? 'open' : ''}}">
            <a href="{{ route('seller.transaction.index') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                All Transactions
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ strpos($routeName, 'seller.withdrawal.') === 0 ? 'open' : ''}}">
            <a href="{{ route('seller.withdrawal.index') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                Withdraw Requests
            </a>
            <b class="arrow"></b>
        </li>
    </ul> -->
</li>
