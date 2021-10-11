<li class="{{ strpos($routeName, 'backend.order.') === 0 ? 'open active' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-cart-arrow-down"></i>
        <span class="menu-text">
                    Order
                </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <!-- <ul class="submenu">
        <li class="{{ strpos($routeName, 'backend.order.pending.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.order.pending.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Pending
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ strpos($routeName, 'backend.order.waiting.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.order.waiting.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Waiting
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ strpos($routeName, 'backend.order.on-delivery.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.order.on-delivery.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                On Delivery
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ strpos($routeName, 'backend.order.not-delivered.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.order.not-delivered.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Not Delivered
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ strpos($routeName, 'backend.order.delivered.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.order.delivered.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Delivered
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ strpos($routeName, 'backend.order.cancelled.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.order.cancelled.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Cancelled
            </a>
            <b class="arrow"></b>
        </li>
    </ul> -->
</li>
