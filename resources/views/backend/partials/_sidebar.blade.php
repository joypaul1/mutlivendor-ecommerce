<div id="sidebar" class="sidebar responsive ace-save-state menu-min">
    @php
        $routeName = request()->route()->getName();
    @endphp

    <ul class="nav nav-list">
        {{-- Dashboard --}}
        @include('backend.partials.sidebar_modules.dashboard')

        {{-- Order --}}
        @include('backend.partials.sidebar_modules.order')

        {{-- Transaction --}}
        @include('backend.partials.sidebar_modules.transaction')

        {{-- Report --}}
        @include('backend.partials.sidebar_modules.report')

        {{-- Product --}}
        @include('backend.partials.sidebar_modules.product')

        {{-- e_config --}}
        @include('backend.partials.sidebar_modules.e_config')

        {{-- seller --}}
        @include('backend.partials.sidebar_modules.seller')

        {{-- agent --}}
        @include('backend.partials.sidebar_modules.agent')

        {{-- Customer --}}
        @include('backend.partials.sidebar_modules.customer')

        {{-- Admin --}}
        @include('backend.partials.sidebar_modules.admin')

        {{-- blog --}}
        @include('backend.partials.sidebar_modules.blog')

        {{-- Campaign --}}
        @include('backend.partials.sidebar_modules.campaign')

        {{-- coommnet --}}
        @include('backend.partials.sidebar_modules.comment')

        {{-- social link Config --}}
        @include('backend.partials.sidebar_modules.sociallink')

        {{-- Site Config --}}
        @include('backend.partials.sidebar_modules.site_config')

        {{-- SMS & Email Config --}}
        @include('backend.partials.sidebar_modules.sms_email')

        {{-- area-division --}}
        @include('backend.partials.sidebar_modules.area_division')

        {{-- modules--}}
        @include('backend.partials.sidebar_modules.module')

        {{-- submodules--}}
        @include('backend.partials.sidebar_modules.submodules')


        {{-- permission--}}
        @include('backend.partials.sidebar_modules.permission')



    </ul>

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
