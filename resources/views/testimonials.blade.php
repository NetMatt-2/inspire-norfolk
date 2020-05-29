@extends('layouts.app')

@section('content')

@include ('layouts.header')

<main>
        <h1 class=tes-h1>Testimonials</h1>

        <section class=testimonial id="Joe Bloggs">
            <div class=vid-ctnr>
                <div class="vid-wrapper">
                    <iframe
                        width="560"
                        height="315"
                        src="https://www.youtube.com/embed/ScMzIvxBSi4"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        >
                    </iframe>
                </div>
                <div class=vid-placeholder>
                    JOE BLOGGS' STORY
                </div>
            </div>
            <div class=img-ctnr>
                <img src="data:image/jpeg;base64,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" alt="video/mugshot here?">
            </div>
            <div class=testimonial-text>
                <h3>Joe Bloggs from Norwich</h3>
                <p>Joe Bloggs lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class=quote>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </section>

        <section class=testimonial id="Jane Doe">
            <div class=vid-ctnr>
                <div class="vid-wrapper">
                    <iframe
                        width="560"
                        height="315"
                        src="https://www.youtube.com/embed/ScMzIvxBSi4"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        >
                    </iframe>
                </div>
                <div class=vid-placeholder>
                    JANE DOE'S STORY
                </div>
            </div>
            <div class=img-ctnr>
                <img src="https://www.npg.org.uk/assets/images/whatson/display/264_ThomasRuff.jpg" alt="video/mugshot here?">
            </div>
            <div class=testimonial-text>
                <h3>Jane Doe from Ipswich</h3>
                <p>Jane Doe lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class=quote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </section>

    </main>

@include ('layouts.footer')

@endsection