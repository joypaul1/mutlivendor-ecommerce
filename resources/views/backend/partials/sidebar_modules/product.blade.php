<li class="{{ strpos($routeName, 'backend.product') === 0 ? 'open active' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-sitemap"></i>
        <span class="menu-text">
                    Product
                </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ strpos($routeName, 'backend.product.items.') === 0 ? 'open' : ''}}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>
                    Items
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu nav-show" style="display: block;">

                    <li class="{{ strpos($routeName, 'backend.product.items.unpublished.') === 0 ? 'open' : ''}}" >
                        <a href="{{route('backend.product.items.unpublished.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Unpublished
                        </a>
                        <b class="arrow"></b>
                    </li>


                    <li class="{{ strpos($routeName, 'backend.product.items.published.') === 0 ? 'open' : ''}}">
                        <a href="{{ route('backend.product.items.published.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Published
                        </a>
                    </li>

            </ul>
        </li>

        <li class="{{ strpos($routeName, 'backend.product.tags.') === 0 ? 'open' : ''}}">
            <a href="{{ route('backend.product.tags.index') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                Tags
            </a>
            <b class="arrow"></b>
        </li>

        <li class="{{ strpos($routeName, 'backend.product.colors.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.product.colors.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Colors
            </a>
            <b class="arrow"></b>
        </li>

        <li class="{{ strpos($routeName, 'backend.product.sizes.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.product.sizes.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Sizes
            </a>
            <b class="arrow"></b>
        </li>

        <li class="{{ strpos($routeName, 'backend.product.units.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.product.units.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Units
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ strpos($routeName, 'backend.product.brands.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.product.brands.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Brands
            </a>
            <b class="arrow"></b>
        </li>


        <li class="{{ strpos($routeName, 'backend.product.origins.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.product.origins.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Origins
            </a>
            <b class="arrow"></b>
        </li>

        <li class="{{ strpos($routeName, 'backend.product.collections.') === 0 ? 'open' : ''}}">
            <a href="{{ route('backend.product.collections.index') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                Collections
            </a>
            <b class="arrow"></b>
        </li>

        <li class="{{ strpos($routeName, 'backend.product.categories.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.product.categories.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Categories
            </a>
            <b class="arrow"></b>
        </li>

        <li class="{{ strpos($routeName, 'backend.product.sub_categories.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.product.sub_categories.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Sub Categories
            </a>
            <b class="arrow"></b>
        </li>

         <li class="{{ strpos($routeName, 'backend.product.child_categories.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.product.child_categories.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Child Categories
            </a>
            <b class="arrow"></b>
        </li>

        <li class="{{ strpos($routeName, 'backend.product.warranty-types.') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.product.warranty-types.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Warranty Types
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
</li>
