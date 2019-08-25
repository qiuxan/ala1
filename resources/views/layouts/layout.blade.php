<!DOCTYPE html>
<html lang="en">
    @include('layouts._head')

<body>
 <div class="container">

     @include('layouts._header')


@include('layouts._nav')

@yield('content')

@include('layouts._footer')

</div>
 {{--.container--}}




</body>
</html>