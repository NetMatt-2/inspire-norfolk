@extends('layouts.other-pages')

@section('content')

@include ('layouts.header')

<main>
<h1>Testimonials</h1>
    <div class="testimonial">
        <img src=# alt="video/mugshot here?">
        <div class="tesimonial-text">
            <h3>Joe Bloggs from Norfolk</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="quote">
            <p>Lorem ipsum dolor sit amet</p>
        </div>
    </div>

</main>

@include ('layouts.footer')

@endsection