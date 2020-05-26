@extends('layouts.app')

@section('content')

@include ('layouts.header')
<body>
<main>
<h1>testimonials</h1>
    <div class=testimonial>
        <img src=# alt="video/mugshot here?">
        <div class=tesimonial-text>
            <h3>Joe Bloggs from Norfolk</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
        </div>
        <div class=quote>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
    </div>

</main>
</body>
@include ('layouts.footer')

@endsection