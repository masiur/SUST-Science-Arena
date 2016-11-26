<!DOCTYPE html>
<html class="no-js">
@include('pages.header')

<body>
    <!-- <div class="preloader">
        <div class="preloader_image"></div>
    </div> -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">
            {{-- @include('pages.topline') --}}      	
        	@include('pages.navBar')

        	@yield('content')

        	@include('pages.footer')
        	@include('pages.copyright')

        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->


@include('pages.script')

</body>
</html>