<!doctype html>
<html lang="en">

    <head>

      {{-- Meta Section  --}}
       @include('backend.admin.layout.partials.meta')

        <title>Dashboard | Admin Mushahedur</title>
        <!-- App favicon -->
        {{-- Style Section Section  --}}
       @include('backend.admin.layout.partials.style')
        
    </head>

    
    <body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- ========== Header Section Start ========== -->
           @include('backend.admin.layout.partials.header')
            
           
            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.admin.layout.partials.left-sidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                      {{-- Main containt Section --}}
                      @yield('contain')

                      <!-- ========== Footer Section Start ========== -->
                      @include('backend.admin.layout.partials.footer')
                      <!-- Left Sidebar End -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <!-- Right Sidebar -->
            @include('backend.admin.layout.partials.footer')
        <!-- /Right-bar -->

       

    <!-- ========== JS Section Start ========== -->
    @include('backend.admin.layout.partials.script')

    </body>

</html>