<!DOCTYPE html>
<html lang="en">

<head>
 {{--Incldue All meta link --}}
 @include('backend.user.layout.partials.meta')

  {{-- extends all title --}}
  <title> @yield('title') |Online Bookstore</title>

  {{-- Incldue all style css --}}
  @include('backend.user.layout.partials.style')

</head>

<body>
	<div class="wrapper">

    {{-- left-sidebar Section include --}}
    @include('backend.user.layout.partials.left-sidebar')

		<div class="main">
      {{-- Nav section include --}}
      @include('backend.user.layout.partials.nav')

      {{-- extends all content --}}
      @yield('content')
{{-- JavaScript section include --}}
  @include('backend.user.layout.partials.script')

</body>

</html>