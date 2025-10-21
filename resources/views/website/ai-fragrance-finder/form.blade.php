<x-app-layout>
    <style>
        .home .div {
            background-image: url('/website/assets/img/bg.png') !important;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    
    <div class="container   my-5">


        <div>
            <div class="main-item">
                <div class="form-heading">
                    <h1>How Would You Like to Choose <br> Your Fragrance?</h1>
                </div>
                <div class="landing_page-container">

                    <div class="dropdown-content-container">
                        <a href="{{ route('AIFragranceFinder.choose.fragrance') }}" class="dropbtn">
                            <img src="{{ asset('ai-fragrance-finderassets/assets/SecondScreen/fragrance notes, ingredients, families.png') }}"
                                alt="for-yourself" class="ing-img">
                            <div class="fy toggle-border">Based on <br> Fragrance Type
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-content1-container">
                        <a href="{{ route('AIFragranceFinder.choosemood') }}" class="dropbtn1">
                            <img src="{{ asset('ai-fragrance-finderassets/assets/SecondScreen/mood or occasion.png') }}"
                                alt="for-yourself" class="ing-img">
                            <div class="fg toggle-border"> Based on Your Mood <br> and Occasion</div>
                        </a>

                    </div>

                    <div class="dropdown-content1-container">
                        <a href="{{ route('fragrancematchmaker') }}" class="dropbtn1">
                            <img src="{{ asset('ai-fragrance-finderassets/assets/SecondScreen/aifregrance.png') }}"
                                alt="for-yourself" class="ing-img">
                            <div class="fg toggle-border">Based on Another <br> Fragrance You Like</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lines"></div>
            @include('website.ai-fragrance-finder.fragrancematchmaker')
        </div>
    </div>

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

</x-app-layout>