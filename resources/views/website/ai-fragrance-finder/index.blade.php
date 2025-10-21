<x-app-layout>
    <style>
        .home .div {
            background-image: url('/website/assets/img/bg.png') !important;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .heading {
            text-align: center;
        }

        .maincontent {
            min-height: 80vh;
            display: flex;
            align-items: center;
            /* Center vertically */
            justify-content: center;
            /* Center horizontally */
            text-align: center;
            flex-direction: column;
            /* Stack items vertically */
        }
    </style>
   
    <script type="text/javascript">
        function loadGoogleTranslate() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', // Default page language (English)
                includedLanguages: 'en,es,de,fr,ar', // Allowed languages: English, Spanish, German, French
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_element');
        }
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

    <div class="container maincontent my-4">
        <div>
            <div class="heading" style="margin-top: 100px;">Is The Fragrance For You,
                <br>Or A Gift For Someone Else?
            </div>
        </div>
        <div style="margin-bottom: 100px;" class="landing_page-container">
            <div class="dropdown-content-container"><a href="{{ route('AIFragranceFinder.form') }}" class="dropbtn"><img
                        src="{{ asset('ai-fragrance-finderassets/assets/FirstScreen/FOR YOURSELF.png') }}"
                        alt="for-yourself" class="ing-img">
                    <div class="fy toggle-border">For Yourself</div>
                </a>
                {{-- <div id="myDropdown" class="dropdown-content"><a
                        href="{{ route('AIFragranceFinder.form') }}">Layered</a>
                    <div class="splitter">|</div><a href="{{ route('AIFragranceFinder.form') }}">Stick To One</a>
                </div> --}}
            </div>
            <div class="dropdown-content1-container"><a href="{{ route('AIFragranceFinder.form') }}"
                    class="dropbtn1"><img
                        src="{{ asset('ai-fragrance-finderassets/assets/FirstScreen/FOR GIFTING.png') }}"
                        alt="for-yourself" class="ing-img">
                    <div class="fg toggle-border">For Gifting</div>
                </a>
                {{-- <div id="myDropdown1" class="dropdown-content1"><a
                        href="{{ route('AIFragranceFinder.form') }}">Layered</a>
                    <div class="splitter">|</div><a href="{{ route('AIFragranceFinder.form') }}">Stick To One</a>
                </div> --}}
            </div>
        </div>
    </div>


</x-app-layout>