@extends('layouts.app')

@section('content')

@include('layouts.header')
<Main>
    <!--Splash banner-->

    <div class="splash-banner">
        <div class="text-block">
            <h2>Inspire Norfolk</h2>
            <h3>Apprenticeships in Norfolk</h3>
            <hr>
            <h4>Looking for an Apprentice?</h4>
            <p>We work with small businesses to create apprenticeship positions, and work with young people to get them in to the perfect opportunity.</p>
            <a>Contact Us Today</a>
        </div>
        <div>
            <h3>2</h3>
        </div>
        <div>
            <h3>3</h3>
        </div>
        <div>
            <h3>4</h3>
        </div>
        <div>
            <h3>5</h3>
        </div>
        <div>
            <h3>6</h3>
        </div>
    </div>

    <!-- <div class=" slider splash-banner">
        
    </div> -->

    <!--About section-->
    <section class="about">
        <h2>Set up in 2012 Inspire Norfolk supports businesses to recruit apprentices</h2>
        <p>We really de-mystify the process by identifying suitable roles within your team, creating job descriptions, identifying appropriate frameworks and sourcing funding.</p>
        <p>We are there for a business every step of the way right up to the time they appoint a young person and beyond. Our aim is that all apprentices we place will eventually move into a full time position within the company once their apprenticeship is complete.</p>
        <p>We also work with young people themselves, mainly those who are struggling, for a variety of reasons, to find work. We will take time to get to know them and discuss their goals, likes and dislikes and create a bespoke package of support to ensure they find the right opportunity to ensure they have a positive experience and move into an appropriate apprenticeship.</p>
        <!--Suggested changes to grammar: 
        <p>We are there for a business every step of the way right up to the time they appoint a young person and beyond. Our aim is that all apprentices we place will eventually move into a full-time position within the company once their apprenticeship is complete.</p>
        <p>We also work with young people themselves, mainly those who are struggling, for a variety of reasons, to find work. We will take time to get to know them and discuss their goals, likes, and dislikes, and create a bespoke package of support to ensure they find the right opportunity to ensure they have a positive experience and move into an appropriate apprenticeship.</p>
        -->
    </section>

    <!--Our Services section-->
    <section class="our-services">
        <div class="header-text">
            <h2>Our Services</h2>
            <p>At Inspire Norfolk we have numerous different types of apprentice opportunities, meaning we can guarantee you get the apprenticeship qualifications you want in the right industry. Find out further details below.</p>
        </div>
        <hr>
        <div class="flex-container">
            <!--Apprenticeship Recruitment card-->
            <div class="card">
                <img src="images\card placeholders/gratisography-346H.jpg" class=card-banner alt="People doing stuff">
                <div class="text-container">
                    <h2>Apprenticeship Recruitment</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    <img src="https://img.icons8.com/ios/100/000000/handshake.png" class=icon alt="Shaking hands icon">
                </div>
            </div>
            <!--International Work Placements card-->
            <div class="card">
                <img src="images\card placeholders/not-such-a-long-name.jpg" class=card-banner alt="Man with globe">
                <div class="text-container">
                    <h2>International Work Placements</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    <img src="https://img.icons8.com/android/96/000000/globe.png" class=icon alt="Globe icon">
                </div>
            </div>
            <!--Bespoke Apprenticeship Support-->
            <div class="card">
                <img src="images\card placeholders/gratisography-188H.jpg" class=card-banner alt="People shaking hands">
                <div class="text-container">
                    <h2>Bespoke Apprenticeship Support</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    <img src="https://img.icons8.com/ios-glyphs/90/000000/group.png" class=icon alt="People icon">
                </div>
            </div>
        </div> 
    </section>

    <section class="about">
        <h2>Working in a partnership with Norfolk County Council since 2002</h2>
        <p>We support international students coming to Norwich on work placements. These placements are with a variety of local companies across a range of sectors including retain, business, the trades, and architectural services. Each year this project grows and will in the future include our young people going out to France and Norway, so watch this space.</p>
    </section>

    <section class="get-in-touch">

        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <a href=#>
            <p>Get In Touch</p>
        </a>
    </section>

</Main>
@include ('layouts.footer')


@endsection


