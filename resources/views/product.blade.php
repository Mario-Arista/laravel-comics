@extends('layouts/app')

@section('title')
    SINGLE PRODUCT
@endsection

@section('content')

    <main>

        <div id="bg-main"></div>
        <div class="bg-blue">
            <div class="container">
                <div class="gallery-cont">
                    <img class="img-gallery" src="{{ $SingleComicZero['thumb'] }}" alt="">
                    <div class="text-center">GALLERY</div>
                </div>
            </div>

        </div>

        <div id="single-comic">

            <div class="container">

                <div class="left-part">
                    <div class="info-single-comic">
                        <h2 class="title-single">{{ $SingleComicZero['title'] }}</h2>
                        <div class="green-cont">
                            <div class="first-part">
                                <div>
                                    <span class="with-opacity ps-2">U.S. Price:</span>
                                    <span>{{ $SingleComicZero['price'] }}</span>
                                </div>
                                <div class="with-opacity pe-2">
                                    AVAILABLE
                                </div>
                            </div>
                            <div class="second-part">
                                <div>
                                    Check Availability &#10507;
                                </div>
                            </div>

                        </div>
                        <p>{{ $SingleComicZero['description'] }}</p>
                    </div>
                </div>

                <div class="right-part">
                    <div class="banner">
                        <img class="img-gallery" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv">
                    </div>
                </div>

            </div>

        </div>

        <div class="info-table">

            <div class="container">

                <div class="first-table">
                    <h3>Talent</h3>
                    <table class="table">
                        <tbody>
                          <tr>
                            <td>Art by:</td>
                            <td class="my-blue-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis quod incidunt maxime ea ullam. Fuga, unde, maxime, dolorem nulla quis esse asperiores exercitationem perferendis consequatur consectetur ipsam dolore pariatur possimus.</td>
                          </tr>
                          <tr>
                            <td>Written by:</td>
                            <td class="my-blue-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis quod incidunt maxime ea ullam. Fuga, unde, maxime, dolorem nulla quis esse asperiores exercitationem perferendis consequatur consectetur ipsam dolore pariatur possimus.</td>
                          </tr>

                        </tbody>
                    </table>
                </div>

                <div class="second-table">
                    <h3>Specs</h3>
                    <table class="table">
                        <tbody>
                          <tr>
                            <td>Series:</td>
                            <td>{{ $SingleComicZero['series'] }}</td>
                          </tr>
                          <tr>
                            <td>U.S. Price:</td>
                            <td>{{ $SingleComicZero['price'] }}</td>
                          </tr>
                          <tr>
                            <td>On Sale Date:</td>
                            <td>{{ $SingleComicZero['sale_date'] }}</td>
                          </tr>

                        </tbody>
                    </table>
                </div>




            </div>
        </div>

        <div id="app-features-white">

            <div class="container">
                
                <div class="single-feature">
                    <h3>DIGITAL COMICS</h3>

                    <div class="img-container">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                    </div>
                
                </div>
                
                <div class="single-feature">
                    <h3>DC MERCHANDISING</h3>

                    <div class="img-container">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Digital Merchandising">
                    </div>
                
                </div>

                <div class="single-feature">
                    <h3>SUBSCRIPTIONS</h3>

                    <div class="img-container">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Digital Merchandising">
                    </div>
                
                </div>

                <div class="single-feature">

                    <h3>COMIC SHOP LOCATOR</h3>

                    <div class="img-container">
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator">
                    </div>
            
                </div>
                
                <div class="single-feature">
                    
                    <h3>DC POWER VISA</h3>

                    <div class="img-container">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC Power Visa">
                    </div>
                </div>

            </div>
            
        </div>

    </main>

@endsection