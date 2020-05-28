<!--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Form</title>

    <link rel="stylesheet" href="../CSS/contact.css">


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>


</head>

-->

@extends ('layouts.app')

@section('content')

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@include ('layouts.header')

    <Main>
        <form id="contact-form" action="{{ route('contact-form-submit') }}">
            <h2>Contact us today</h2> 

            <div class="form-group name">
                <label for="name">Your name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="e.g. John Smith">
            </div>
            <div class="form-group email">
                <label for="email">Your email address:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com">
            </div>
            <div class="form-group phone">
                <label for="phone">Your contact telephone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="e.g. 01234 567890">
            </div>
            <div class="form-group message">
                <label for="message">How can we help you?</label>
                <textarea class="form-control" id="message" rows="8" placeholder="Your message to us :)"></textarea>
            </div>

            <div class="GDPR">
                <p>Inspire Norfolk uses your data in the following ways:</p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                    <li style="font-weight: bold;">We will never give out your contact details without your express permission.</li>
                </ul>
                <p>Please read the <a href=#>GDPR privacy notice</a> and tick the box to consent to your data being used in this way.</p>
                <div class=checkbox>
                    <input type="checkbox">
                    <div class=checkmark></div>
                </div>
                <p>I consent to my data being used in this way.</p>
            </div>
            <div class="recaptcha">
                <div class="g-recaptcha" data-theme="dark" data-sitekey="your_site_key"></div>
                <br/>
                <input type="submit" value="Submit">
            </div>

            <div class=ctnr-btn>
                <button class=btn-submit-form type="submit" form="contact-form">Send message</button>
            </div>
        </form>

        <div id="mapid" class="map">
            <script>
                var mymap = L.map('mapid').setView([52.63, 1.297], 13);
                L.tileLayer(
                    'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        maxZoom: 18,
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1,
                        accessToken: 'pk.eyJ1IjoibmV0bWF0dC0yIiwiYSI6ImNrYXBieGFmczB5c24ycnBmNWk5ZmFmdTgifQ.A5_-ID8okeM5sd4h-px6-w'
                    }
                )
                .addTo(mymap);
            </script>
        </div>
        <div class="map-label">We can be found in the Norwich area...</div> 
    </Main>

    @include ('layouts.footer')

@endsection