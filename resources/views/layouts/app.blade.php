<!doctype html>
<html lang="en">

<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        @include('layouts.components.nav')
        @include('layouts.components.sidebar')
        <!--begin::App Main-->
        <main class="app-main">
            @include('layouts.components.content-header')
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                    @include('layouts.components.badge')
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
    </div>
    <!--end::App Content-->
    </main>
    <!--end::App Main-->
    @include('layouts.components.footer')
    </div>
    <!--end::App Wrapper-->
    @include('layouts.components.scripts')
</body>
<!--end::Body-->

</html>
