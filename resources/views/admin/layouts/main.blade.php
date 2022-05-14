@include('admin.layouts.header')

<div class="page">
    <div class="page-main">

        @include('admin.layouts.sidebar')
        
        @yield('content')
        
    </div><!-- end app-content-->
</div>

</div>


</div>

@include('admin.layouts.footer')

@stack('script')