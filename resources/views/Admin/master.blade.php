<!doctype html>
<html lang="en">

@include('Admin.Includes.head')


<body>

<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    @include('Admin.Includes.nev')
    @include('Admin.Includes.UIdesign')
    <div class="app-main">
        @include('Admin.Includes.Sidebar.mainsidebar')
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('body')



            </div>
        </div>
    </div>
</div>
@include('Admin.Includes.Sidebar.serviceStatus')
<div class="app-drawer-overlay d-none animated fadeIn"></div>
@include('Admin.Includes.footer')

@include('Admin.Includes.js')





</body>
</html>