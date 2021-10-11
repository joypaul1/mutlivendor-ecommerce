<div id="sidebar" class="sidebar responsive ace-save-state menu-min">
    @php
        $routeName = request()->route()->getName();
    @endphp

    <ul class="nav nav-list">
        {{-- Dashboard --}}
        @include('seller.partials.sidebar_modules.dashboard')

        {{-- Profile --}}
        @include('seller.partials.sidebar_modules.profile')

        {{-- Order --}}
        @include('seller.partials.sidebar_modules.order')

        {{-- Order --}}
        @include('seller.partials.sidebar_modules.transaction')

        {{-- Product --}}
        @include('seller.partials.sidebar_modules.product')

        {{-- Product --}}
        @include('seller.partials.sidebar_modules.campaign')
    </ul>

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
