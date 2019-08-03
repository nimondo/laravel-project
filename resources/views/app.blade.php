<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('include.head')

    <body>
      
        <!--  loader  -->
        <div id="myloader">
            <span class="loader">
                <div class="inner-loader"></div>
            </span>
        </div>
        
        <!--  Main Wrap  -->
        <div id="main-wrap" class="full-width">

            @include('include.header')
            
            @yield('content')

            @include('include.footer')

        </div>
        <!--  Main Wrap  -->
        
        @include('include.script')

    </body>
</html>