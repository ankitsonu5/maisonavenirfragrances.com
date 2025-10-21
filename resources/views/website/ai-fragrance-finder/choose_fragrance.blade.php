<x-app-layout>
    <style>
        .home .div {
            background-image: url('/website/assets/img/bg.png') !important;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
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

    <div class="container my-5  ">
        {{-- <nav class="breadcrumb-container " aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="20" viewBox="0 0 47 20">
                        <g id="Group_3812" data-name="Group 3812" transform="translate(1484 -146)">
                            <rect id="Rectangle_2140" data-name="Rectangle 2140" width="47" height="20" rx="5"
                                transform="translate(-1484 146)" fill="#707070" />
                            <circle id="Ellipse_14" data-name="Ellipse 14" cx="2" cy="2" r="2"
                                transform="translate(-1470 154)" fill="#e0b500" />
                            <circle id="Ellipse_15" data-name="Ellipse 15" cx="2" cy="2" r="2"
                                transform="translate(-1462 154)" fill="#e0b500" />
                            <circle id="Ellipse_16" data-name="Ellipse 16" cx="2" cy="2" r="2"
                                transform="translate(-1454 154)" fill="#e0b500" />
                        </g>
                    </svg>
                </li>
            </ol>
        </nav> --}}
        <div class="main-item extramargin ">
            <div class="form-heading mb-0 mb-md-5 ">
                <h1>Choose Your <br> Fragrance By</h1>
            </div>

            <?php
            // Retrieve session values for fragrance family, ingredient, and fragrance accord IDs
            $fragrancefamilyids = session('fragrancefamilyids', []); // default to empty array
            $ingredient_ids = session('ingredient_ids', []); // default to empty array
            $fragrance_accord_id = session('fragrance_accord_id');
            ?>

                <div class="row text-center gy-4">
                    <!-- Ingredients Section -->
                    <div class="col-md-4 mb-5 hover-container">
                        <a href="{{ route('AIFragranceFinder.ingredients') }}" class="frag-links" id="link-1">
                            <img src="{{ asset('ai-fragrance-finderassets/assets/ThreeOptions/Ingredients.png') }}"
                                alt="fragrance notes, ingredients, families"
                                class="ing-img {{ $ingredient_ids ? 'blur-img' : '' }}" id="img1">
                            <div class="fy toggle-border">Ingredients</div>
                        </a>
                        <div class="hover-text">Single materials in a perfume, like rose or vanilla.</div>
                    </div>

                    <!-- Accords Section -->
                    <div class="col-md-4 mb-5 hover-container">
                        <a href="{{ route('fragranceAccords.show') }}" class="frag-links" id="link-2">
                            <img src="{{ asset('ai-fragrance-finderassets/assets/ThreeOptions/Accords.png') }}"
                                alt="mood_or_occasion" class="ing-img {{ $fragrance_accord_id ? 'blur-img' : '' }}"
                                id="img2">
                            <div class="fy toggle-border">Accords</div>
                        </a>
                        <div class="hover-text">A mix of ingredients creating one scent, like amber or citrus.</div>
                    </div>
                    <!-- Fragrance Families Section -->
                    <div class="col-md-4 mb-5 hover-container">
                        <a href="{{ route('fragranceFamilies.show') }}" class="frag-links" id="link-3">
                            <img src="{{ asset('ai-fragrance-finderassets/assets/ThreeOptions/FragranceFamily.png') }}"
                                alt="another_fragrance" class="ing-img {{ $fragrancefamilyids ? 'blur-img' : '' }}"
                                id="img3">
                            <div class="fy toggle-border">Fragrance Families</div>
                        </a>
                        <div class="hover-text">Perfumes grouped by key scent traits, such as floral, woody, or
                            oriental.
                        </div>
                    </div>
                </div>




        </div>
    </div>
</x-app-layout>
