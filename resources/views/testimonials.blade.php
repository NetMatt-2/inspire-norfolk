@extends('layouts.app')

@section('content')

@include ('layouts.header')

<main>
        <h1>Testimonials</h1>

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
                <img src="https://www.jnjphotography.com.au/wp-content/uploads/2019/11/Passport-116.jpg" alt="video/mugshot here?">
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
                <img src="https://st3.depositphotos.com/6462898/18271/i/450/depositphotos_182710514-stock-photo-passport-picture-asian-young-woman.jpg" alt="video/mugshot here?">
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