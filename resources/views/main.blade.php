<!DOCTYPE html>
<html lang="en">

    @include('partials._head')

    <body>
        @include('partials._navBar')

        <div class="container">
			@include('partials._messages')

            @yield('content')
			
			@include('partials._footer')
        </div>

        @include('partials._bootStrapScripts')

        @yield('scripts')
    </body>
</html>