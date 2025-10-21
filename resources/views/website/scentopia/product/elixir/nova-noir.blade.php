<x-app-layout :title="'Nova Noir | Oriental Woody Fragrance - Maison de l Avenir'" :description="'Experience Nova Noir&apos;s captivating Oriental Woody scent with 48-hour longevity. Premium unisex fragrance featuring apple, cinnamon, jasmine & vanilla. Shop now.'">

    <!-- Video Section -->
    <div class="video-container ripple">
        <video id="bgVideo" autoplay muted>
            <source src="/website/scentopia/video/elixir/Nova_Noir.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Content (Initially Hidden) -->
    <div class="content  ripple" id="content" style="display: none;">
        <div class="container">
            <div class="parent-container">
                <div class="backbutton"> <a onclick="handleClick(event)"
                        href="{{ route('scentopia.product.elixir.index') }}" class="know-more-btn-scentopia ">
                        <div>Back</div>
                    </a></div>
            </div>
            <div class="product-descriptionsentopia ">

                <div class="row justify-content-between icon-grid">


                    <div class="col-md-4   mb-2 mb-md-0 col-12">
                        <img src="/website/scentopia/product/elixir/Nova Noir.svg">
                    </div>
                    <div class="col-md-4  mb-5 mb-md-0 col-12">
                        <p>
                            Inspired by the mysteries of the night sky, this opulent fragrance blends sweet apple, warm
                            cinnamon, and alluring tonka.
                        </p>
                        <div class="know-more">
                            <a href="https://www.maisonavenirfragrances.com/our-fragrance/detail/nova-noir"
                                class="know-more-btn-scentopia ">
                                <div>Know More</div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center icon-grid">
                <div class=" col-md-2   col-4">
                    <div class="icone-box" onclick="openPopup(0)">
                        <img src="/website/scentopia/icone/Top Note.png" class="icone-image" alt="">
                        <p>Top Note</p>
                    </div>
                </div>
                <div class=" col-md-2   col-4">
                    <div class="icone-box" onclick="openPopup(1)">
                        <img src="/website/scentopia/icone/Heart Note.png" class="icone-image" alt="">
                        <p>Middle Note</p>
                    </div>
                </div>
                <div class=" col-md-2   col-4">
                    <div class="icone-box" onclick="openPopup(2)"><img src="/website/scentopia/icone/Base Note.png"
                            class="icone-image" alt="">
                        <p>Base Note</p>
                    </div>
                </div>
                <div class=" col-md-2   col-4">
                    <div class="icone-box" onclick="openPopup(4)"><img src="/website/scentopia/icone/Natural Oils.png"
                            class="icone-image" alt="">
                        <p>Natural Oils</p>
                    </div>
                </div>

                <div class=" col-md-2   col-4">
                    <div class="icone-box" onclick="openPopup(3)"><img src="/website/scentopia/icone/Essential Oils.png"
                            class="icone-image" alt="">
                        <p>Essential Oils</p>
                    </div>
                </div>
                <div class=" col-md-2   col-4">
                    <div class="icone-box" onclick="openPopup(5)"><img
                            src="/website/scentopia/icone/Fragrance Accords.png" class="icone-image" alt="">
                        <p>Fragrance Accords</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Custom Popup Modal -->
    <div class="popup-overlay   mb-5 " id="popupOverlay">
        <video id="popupVideo" autoplay muted playsinline class="background-video">
            <source src="{{ asset('Leaf v1.mp4') }}" type='video/mp4;'>
            Your browser does not support the video tag.
        </video>


        <div class="popup d-flex   justify-content-center align-items-center " id="popup">

            <p class="close" onclick="closePopup()">×</p>
            <div class="popup-content">

                <div class="row">
                    <div class="col-md-5 d-flex  justify-content-center align-items-center "> <!-- 50% Image -->
                        <div class="popup-icon ">
                            <img id="popupImage" src="" alt="Popup Image">
                        </div>
                    </div>
                    <div class="col-md-7"> <!-- 50% Text -->
                        <!-- 50% Text -->
                        <div class="popup-text">
                            <h2 id="popupTitle"></h2>
                            <div class="d-flex" id="description"></div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="navigation">
                <button onclick="prevItem()"> <img src="/website/scentopia/icone/icons8-left-50.png">
                </button>
                <button onclick="nextItem()"> <img src="/website/scentopia/icone/icons8-right-50.png">
                </button>
            </div>

        </div>

    </div>


    <div class=" ripple secand-section ">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-12 col-12 ">
                    <h1 class="page-heading text-center">Moods and Occasions</h1>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row text-center mb-lg-4 d-none d-lg-flex">
                <div class="col-md-5 col-6">
                    <h2 class="section-title">Moods</h2>
                </div>
                <div class="col-md-2 d-flex justify-content-center">

                </div>
                <div class="col-md-5 col-6">
                    <h2 class="section-title">Occasions</h2>
                </div>
            </div>

            <div class="row align-items-stretch">
                <!-- Moods Section -->
                <div class="col-md-5 d-flex justify-content-between">
                    <div class="content-block">
                        <img src="https://www.maisonavenirfragrances.com/storage/mood/Sensual-674e8f1fabb2a.png"
                            alt="Patchouli Oil" class="icon-bubble">
                        <div><strong>Contains Patchouli Oil</strong></div>
                        <small>
                            <span style="color:#cab651">Mood Impact:</span><br>
                            Sensual And Soothing
                        </small>
                    </div>
                    <div class="content-block">
                        <img src="https://www.maisonavenirfragrances.com/storage/mood/Relaxed-674e904067978.png"
                            alt="Orange Oil" class="icon-bubble">
                        <div><strong>Contains Orange Oil</strong></div>
                        <small>
                            <span style="color:#cab651">Mood Impact:</span><br>
                            Relieves Stress, Boosts Mood
                        </small>
                    </div>
                </div>

                <!-- Divider -->
                <div class="col-md-2 d-flex justify-content-center">
                    <div class="divider"></div>
                </div>

                <!-- Occasions Section -->
                <div class="col-md-5 d-flex justify-content-between">
                    <div class="content-block">
                        <img src="https://www.maisonavenirfragrances.com/storage/occasion/Formal-Event-674ee852435ec.png"
                            alt="Formal Events" class="icon-bubble">
                        <div><strong>For Moments That Matter</strong></div>
                        <small>Perfect For Formal Events</small>
                    </div>

                    <div class="content-block">
                        <img src="https://www.maisonavenirfragrances.com/storage/occasion/Social-Gatherings-674ee99d03b54.png"
                            alt="Social Gathering" class="icon-bubble">
                        <div><strong>Celebrate In Style</strong></div>
                        <small>Perfect For Social Gathering</small>
                    </div>
                </div>
            </div>





        </div>



        <div class="container    my-4">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 col-12 ">
                    <h1 class="page-heading text-center  mb-5">Main Accords</h1>
                </div>

            </div>

            <div class="row align-items-stretch">
                <!-- Moods Section -->
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="chart-container mb-3">
                        <canvas id="fragranceChart"></canvas>
                    </div>
                    <div class="text-center px-3">
                        <p class="text-light">
                            <strong>Sweet</strong> 14.93% |
                            <strong>Woody</strong> 13.43% |
                            <strong>Warm Spicy</strong> 12.69% |
                            <strong>Vanilla</strong> 11.19% |
                            <strong>Fruity</strong> 10.45% |
                            <strong>Amber</strong> 9.70% |
                            <strong>Cinnamon</strong> 8.96% |
                            <strong>Powdery</strong> 7.46% |
                            <strong>Alcohol</strong> 5.97% |
                            <strong>Aromatic</strong> 5.22%
                        </p>

                    </div>
                </div>




                <!-- Divider -->
                <div class="col-md-2 d-flex justify-content-center">
                    <div class="divider"></div>
                </div>

                <div class="col-md-4 d-flex  justify-content-center align-items-center">
                    <div class="gender-box">
                        <!-- Desktop ke liye: d-none (hide by default), d-md-block (medium and above show) -->
                        <img src="/website/scentopia/icone/Unisex.png" alt="Unisex" class="d-none d-md-block" />

                        <!-- Mobile ke liye: d-block (show by default), d-md-none (medium and above hide) -->
                        <img src="/website/scentopia/icone/Unisex-mobile.png" alt="Unisex Mobile"
                            class="d-block d-md-none mt-5" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mouse"></div>


    @include('website.scentopia.product.elixir.productcaard')






    <div class="container mb-120">
        <p class="sub-title mobil-subtitle my-5 text-center fs-3-2">
            Let our AI Fragrance Finder and <br>
            Fragrance Matchmaker hook you up
        </p>

        <div class=" my-5">
            <div class="  navgationbox  ">
                <div class=" mx-5 mb-4 ">
                    <a href="{{ route('aifragrancefinder') }}"> <img
                            src="{{ asset('website/assets/images/Ai-FF_Mobile.png') }}"
                            class=" cardboximg   img-fluid" alt="AI Fragrance Finder"></a>

                </div>
                <div class="  mx-5 mb-4 ">
                    <a href="{{ route('fragrancematchmaker') }}"> <img
                            src="{{ asset('website/assets/images/FMM_Desktop.png') }}" class=" cardboximg img-fluid"
                            alt="Fragrance Matchmaker"> </a>

                </div>
            </div>
        </div>
    </div>

    <div class="container">


        <div class="profile-card">
            <!-- Place <div> tag where you want the feed to appear -->
            <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank"
                    class="crt-logo crt-tag">Powered by Curator.io</a></div>

            <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
            <script type="text/javascript">
                /* curator-feed-default-feed-layout */
                (function() {
                    var i, e, d = document,
                        s = "script";
                    i = d.createElement("script");
                    i.async = 1;
                    i.charset = "UTF-8";
                    i.src = "https://cdn.curator.io/published/2470dd23-133f-4f26-97b3-f259119c2763.js";
                    e = d.getElementsByTagName(s)[0];
                    e.parentNode.insertBefore(i, e);
                })();
            </script>
        </div>

    </div>


    <script>
        // JavaScript code to handle video end event
        document.addEventListener("DOMContentLoaded", function() {
            const video = document.getElementById("bgVideo");
            const content = document.getElementById("content");

            // Hide content initially
            content.style.display = "none";

            // Show content only when the video ends with animation
            video.onended = function() {
                content.style.display = "flex";
                setTimeout(() => {
                    content.classList.add("show"); // Add animation class
                }, 100); // Delay ensures smooth transition



            };


        });

        document.addEventListener("DOMContentLoaded", function() {
            const popupOverlay = document.getElementById("popupOverlay");
            const popup = document.getElementById("popup");
            const popupTitle = document.getElementById("popupTitle");
            const popupImage = document.getElementById("popupImage");
            const popupDescription = document.getElementById("description");

            let currentIndex = 0;

            const items = [{
                    title: "Top Note",
                    image: "/website/scentopia/icone/Top Note.png",
                    desc: [
                        "Apple",
                        "Cinnamon",
                        "Liquor",
                        "Lemon",
                        "Lavender",
                        "Bergamot",
                        "Fruity Accords"
                    ]
                },
                {
                    title: "Middle Note",
                    image: "/website/scentopia/icone/Heart Note.png",
                    desc: [
                        "Tonka",
                        "Oak",
                        "Jasmine",
                        "Green Notes"
                    ]
                },
                {
                    title: "Base Note",
                    image: "/website/scentopia/icone/Base Note.png",
                    desc: [
                        "Praline",
                        "Vanilla",
                        "Sandalwood",
                        "Amber",
                        "Musk",
                        "Patchouli"
                    ]
                },
                {
                    title: "Essential Oils",
                    image: "/website/scentopia/icone/Essential Oils.png",
                    desc: [
                        "Copaiba Balsam Oil",
                        "Eugenol",
                        "Lemon Oil Italian Finest",
                        "Labdanum Resinoid",
                        "Bergamot Oil"
                    ]
                },
                {
                    title: "Natural Oils",
                    image: "/website/scentopia/icone/Natural Oils.png",
                    desc: [
                        "Orange Oil",
                        "Sage Clary Oil",
                        "Myrrh Oil",
                        "Patchouli Oil"
                    ]
                },
                {
                    title: "Fragrance Accords",
                    image: "/website/scentopia/icone/Fragrance Accords.png",
                    desc: [
                        "Gourmand",

                    ]
                }
            ];

            function updatePopup() {
                popupTitle.innerText = items[currentIndex].title;
                popupImage.src = items[currentIndex].image;

                // Clear existing description
                popupDescription.innerHTML = "";

                // Create a new list and append all items dynamically
                const ul = document.createElement("ul");
                items[currentIndex].desc.forEach(point => {
                    const li = document.createElement("li");
                    li.innerText = point;
                    li.classList.add("mb-2"); // Maintain spacing
                    ul.appendChild(li);
                });

                popupDescription.appendChild(ul);
            }

            window.openPopup = function(index) {
                currentIndex = index;
                updatePopup();
                const popupOverlay = document.getElementById("popupOverlay");
                const popup = document.getElementById("popup");
                const video = document.getElementById("popupVideo");

                popupOverlay.style.display = "flex";

                popup.style.display = "block";
                popup.classList.add("show");




                // popup.style.display = "none"; // Hide popup initially
                // video.style.display = "block"; // Show video

                // // Play video from start
                // video.currentTime = 0;
                // video.play();

                // // When video ends, hide video and show popup
                // video.onended = function() {
                //     video.style.display = "none";
                //     popup.style.display = "block";
                //     popup.classList.add("show");
                // };

                // Optional: If you want to skip after 5 seconds automatically
                // setTimeout(() => {
                //     video.pause();
                //     video.style.display = "none";
                //     popup.style.display = "block";
                //     popup.classList.add("show");
                // }, 5000);
            };


            window.closePopup = function() {
                popup.classList.add("hide"); // Start hide animation
                setTimeout(() => {
                    popupOverlay.style.display = "none"; // Hide after animation completes
                    popup.classList.remove("hide"); // Reset for next time
                }, 300);
            };

            window.nextItem = function() {
                currentIndex = (currentIndex + 1) % items.length;
                updatePopup();
            };

            window.prevItem = function() {
                currentIndex = (currentIndex - 1 + items.length) % items.length;
                updatePopup();
            };
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
            });
        });
    </script>

    <script>
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const ctx = document.getElementById('fragranceChart').getContext('2d');

                    new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            labels: [
                                'Sweet', 'Woody', 'Warm Spicy', 'Vanilla', 'Fruity',
                                'Amber', 'Cinnamon', 'Powdery', 'Alcohol', 'Aromatic'
                            ],
                            datasets: [{
                                label: 'Fragrance Notes',
                                data: [
                                    14.93, 13.43, 12.69, 11.19, 10.45,
                                    9.70, 8.96, 7.46, 5.97, 5.22
                                ],
                                backgroundColor: [
                                    '#e63946', '#6d4c41', '#bf360c', '#fcecc9',
                                    '#f08080', '#d2691e', '#cd853f', '#f5f5dc',
                                    '#f0e68c', '#a2d5c6'
                                ],
                                borderColor: 'transparent'
                            }]
                        },
                        options: {
                            responsive: true,
                            animation: {
                                duration: 5000,
                                easing: 'easeOutQuart'
                            },
                            plugins: {
                                datalabels: {
                                    color: '#000',
                                    font: {
                                        weight: 'bold',
                                        size: 13
                                    },
                                    formatter: (value, context) => {
                                        const label = context.chart.data.labels[context
                                            .dataIndex];
                                        return `${label}: ${value}%`;
                                    }
                                },
                                tooltip: {
                                    enabled: true,
                                    backgroundColor: '#222',
                                    titleColor: '#fff',
                                    bodyColor: '#ffd700',
                                    callbacks: {
                                        label: function(context) {
                                            const label = context.label || '';
                                            const value = context.raw || 0;
                                            return `${label}: ${value}%`;
                                        }
                                    }
                                },
                                legend: {
                                    display: false
                                }
                            },
                            scales: {
                                r: {
                                    ticks: {
                                        display: false
                                    },
                                    grid: {
                                        color: '#555'
                                    },
                                    angleLines: {
                                        color: '#777'
                                    },
                                    pointLabels: {
                                        color: '#fff',
                                        font: {
                                            size: 14
                                        }
                                    }
                                }
                            }
                        }
                    });

                    observer.unobserve(entry.target);
                }
            });
        }, {
            root: null,
            rootMargin: '-150px 0px' // 👈 Trigger when 150px before coming into view
        });

        observer.observe(document.getElementById('fragranceChart'));
    </script>


    @include('website.scentopia.music')

    <div id="lottie-bg"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.0/lottie.min.js"></script>
    <script>
        lottie.loadAnimation({
            container: document.getElementById('lottie-bg'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'animation.json' // Your lottie file path
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".mouse"), {
            max: 20,
            speed: 600,
            scale: 1.05,
            glare: true,
            "max-glare": 0.2
        });
    </script>

</x-app-layout>
