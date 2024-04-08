@extends('layouts/app')

@section('title')
    DC COMICS
@endsection

@section('content')

    <main>
        <div id="bg-main"></div>

        <div id="comics">

            <div class="container">
                <h2>current series</h2>

                <div class="comic-item">
                    Comic Item
                </div>

                <button>LOAD MORE</button>
                
            </div>

        </div>

        <div id="app-features">

            <div class="container">
              <div class="single-feature">
                    <div class="img-container">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                    </div>
                
                    <h3>DIGITAL COMICS</h3>
              </div>

              <div class="single-feature">
                    <div class="img-container">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Digital Merchandising">
                    </div>
                
                    <h3>DC MERCHANDISING</h3>
              </div>

                <div class="single-feature">
                    <div class="img-container">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Comic Shop Locator">
                    </div>
            
                    <h3>COMIC SHOP LOCATOR</h3>
                </div>
                
                <div class="single-feature">
                    <div class="img-container">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC Power Visa">
                    </div>
            
                    <h3>DC POWER VISA</h3>
                </div>
            </div>
            
          </div>


    </main>

@endsection