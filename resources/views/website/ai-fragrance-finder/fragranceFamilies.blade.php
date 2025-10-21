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

    <div class="container my-5">


        {{-- <nav class="breadcrumb-container" aria-label="breadcrumb">
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
                <li class="breadcrumb-separator">/</li>
                <li class="breadcrumb-item " aria-current="page"><a
                        href="{{ route('AIFragranceFinder.ingredients') }}">Ingredients</a></li>
                <li class="breadcrumb-item " aria-current="page"><a
                        href="{{ route('fragranceAccords.show') }}">Accord</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Family</li>
            </ol>
        </nav> --}}
        <div class="ingredients">

            <div class="row">
                <div class="col-md-9">
                    <div class="ingredient-headding">
                        <h1 class="ingredientheading  justify-content-center d-flex align-items-start">Choose The
                            Fragrance Family <i class="info-icon mt-1 fas fa-info-circle" data-bs-toggle="modal"
                                data-bs-target="#accordModal"></i>
                        </h1>
                        <x-startover :maxNumber="2" />
                    </div>
                </div>
                <div class="col-md-3 myselection">
                    <div class=" ingredient-headding">
                        <h1 class="ingredientheading">My Selection</h1>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-9">

                    <form action="{{ route('fragranceFamilies.store') }}" method="POST" id="ingredientsForm">
                        @csrf
                        <div class="row">
                            @foreach ($fragranceFamilies as $family)
                            <div class="col-md-3 col-4">
                                <div class="box ingredient-box" data-id="{{ $family->id }}">
                                    <img src="{{ asset('storage/fragrancefamily/' . $family->image) }}"
                                        alt="{{ $family->name }}" class="item-image">
                                    <p class="ingredient-name">{{ $family->name }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Hidden Input to Store Selected Ingredient IDs -->
                        <input type="hidden" name="fragrance_family_id" id="selecteditem">
                        <div class="d-flex justify-content-center mt-3 mx-5">
                            <a href="{{ route('fragranceAccords.show') }}" class="back-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223" />
                                </svg>
                                Back
                            </a>

                            <button type="submit" disabled id="submitbutton" class="next-btn mx-2">Next</button>



                            <a href="{{ route('AIFragranceFinder.form') }}"
                                class="back-btn  ">
                                <div>Skip</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </a>
                        </div>
                    </form>
                </div>

                <div class="col-md-3 selectedbox ">
                    <div>



                        <div class="row">
                            <div class="col-md-6">
                                <p class="itemname">Ingredients</p>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('session.resate', ['session' => 'ingredient_ids']) }}"
                                    class="back-btn">
                                    Reset </a>
                            </div>
                        </div>


                        <div class="previous-container">
                            @foreach ($ingredients as $ingredient)
                            <div class="selected-item">
                                <img src="{{ asset('storage/ingredients/' . $ingredient->image) }}"
                                    alt="{{ $ingredient->name }}">
                                <p>{{ $ingredient->name }}</p>
                            </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <p class="itemname">Accords</p>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('session.resate', ['session' => 'fragrance_accord_id']) }}"
                                    class="back-btn">
                                    Reset </a>
                            </div>
                        </div>


                        <div class="previous-container">
                            @foreach ($fragranceaccord as $accord)
                            <div class="selected-item">
                                <img src="{{ asset('storage/fragranceaccord/' . $accord->image) }}"
                                    alt="{{ $accord->name }}">
                                <p>{{ $accord->name }}</p>
                            </div>
                            @endforeach
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <p class="itemname">Fragrance Family</p>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('session.resate', ['session' => 'fragrancefamilyids']) }}"
                                    class="back-btn">
                                    Reset </a>
                            </div>
                        </div>
                        <div class="selected-image-container"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lines"></div>


        <!-- Fixed Button -->
        <div class="fixed-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling">
            <p> My Selection</p>
        </div>
        <!-- Offcanvas Component -->
        <div class="offcanvas offcanvas-start custom-offcanvas" data-bs-scroll="true" data-bs-backdrop="false"
            tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-light custom-close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="ingredient-headding">

                    <h1 class="ingredientheading">My Selection</h1>
                    <p class="itemname">Ingredients</p>

                    <div class="previous-container">
                        @foreach ($ingredients as $ingredient)
                        <div class="selected-item">
                            <img src="{{ asset('storage/ingredients/' . $ingredient->image) }}"
                                alt="${ingredient.name}">
                            <p>{{ $ingredient->name }}</p>
                        </div>
                        @endforeach
                    </div>

                    <p class="itemname">Accords</p>
                    <div class="previous-container">
                        @foreach ($fragranceaccord as $accord)
                        <div class="selected-item">
                            <img src="{{ asset('storage/fragranceaccord/' . $accord->image) }}"
                                alt="{{ $accord->name }}">
                            <p>{{ $accord->name }}</p>
                        </div>
                        @endforeach
                    </div>
                    <p class="itemname">Fragrance Family</p>
                    <div class="selected-image-container"></div>
                </div>
            </div>
        </div>


        <!-- Bootstrap 5 Modal -->
        <div class="modal fade" id="accordModal" tabindex="-1" aria-labelledby="accordModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <h5 class="modal-title mx-auto mb-0" id="accordModalLabel">Fragrance Family</h5>
                        <button type="button" class="btn-close position-absolute end-0 mt-3 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <div class="modal-body">
                        <div class="row">
                            @foreach ($fragranceFamilies as $family)
                            <!-- Accord Item -->
                            <div class="col-md-4 col-6 d-flex align-items-center my-md-3 mt-sm-3">
                                <img src="{{ asset('storage/fragrancefamily/' . $family->image) }}" class="accord-icon"
                                    alt="Oriental">
                                <div>
                                    <p class="item-name">{{ $family->name }}</h4>
                                    <p class="item-description"> {{ $family->description }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('website.ai-fragrance-finder.fragrancematchmaker')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const ingredientBoxes = document.querySelectorAll('.ingredient-box');
                const selectedImageContainers = document.querySelectorAll('.selected-image-container');
                const hiddenInput = document.getElementById('selecteditem');
                const submitButton = document.getElementById('submitbutton');
                let selectedIngredients = [];

                // Function to update the selected images and input field in all containers
                const updateSelectedIngredients = () => {
                    selectedImageContainers.forEach(container => {
                        container.innerHTML = selectedIngredients.map(ingredient => `
                            <div class="selected-item">
                                <img src="${ingredient.image}" alt="${ingredient.name}">
                                <p>${ingredient.name}</p>
                            </div>
                        `).join('');
                    });

                    hiddenInput.value = selectedIngredients.map(ingredient => ingredient.id).join(',');

                    // Enable or disable the submit button based on the ingredient count
                    submitButton.disabled = !(selectedIngredients.length >= 1 && selectedIngredients.length <= 2);
                };

                // Add click event to each ingredient box
                ingredientBoxes.forEach(box => {
                    box.addEventListener('click', function() {
                        const ingredientId = box.getAttribute('data-id');
                        const imageElement = box.querySelector('.item-image');
                        const imageSrc = imageElement.src;
                        const imageName = box.querySelector('.ingredient-name').textContent;

                        const isSelected = selectedIngredients.some(ingredient => ingredient.id ===
                            ingredientId);

                        if (!isSelected && selectedIngredients.length < 2) {
                            // Add the ingredient if not already selected and limit not exceeded
                            selectedIngredients.push({
                                id: ingredientId,
                                image: imageSrc,
                                name: imageName
                            });
                            box.classList.add('selected');
                            imageElement.style.border =
                                '2px solid #e0b500'; // Add border to the selected image
                        } else if (isSelected) {
                            // Remove the ingredient if already selected
                            selectedIngredients = selectedIngredients.filter(ingredient => ingredient
                                .id !== ingredientId);
                            box.classList.remove('selected');
                            imageElement.style.border =
                                'none'; // Remove border from the deselected image
                        }

                        // Update UI in all containers
                        updateSelectedIngredients();
                    });
                });
            });
        </script>

    </div>
</x-app-layout>