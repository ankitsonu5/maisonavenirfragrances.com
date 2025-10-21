<x-app-layout :title="'Vortex Echo | Aromatic Spicy Cologne - Maison de l Avenir'" :description="'Discover Vortex Echo&apos;s dynamic Aromatic Spicy blend with lemon, patchouli & cardamom. Premium unisex fragrance with exceptional longevity. Shop now.'">


    <!-- Video Section -->
    <div class="video-container ripple">
        <video id="bgVideo" autoplay muted>
            <source src="/website/scentopia/video/aura/Vortex_Echo.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Content (Initially Hidden) -->
    <div class="content  ripple" id="content" style="display: none;">
        <div class="container">
            <div class="parent-container">
                <div class="backbutton"> <a onclick="handleClick(event)"
                        href="{{ route('scentopia.product.aura.index') }}" class="know-more-btn-scentopia ">
                        <div>Back</div>
                    </a></div>
            </div>
            <div class="product-descriptionsentopia ">
                <div class="row justify-content-between icon-grid">
                    <div class="col-md-4   mb-2 mb-md-0 col-12">
                        <img src="/website/scentopia/product/aura/Vortex Echo.svg">

                    </div>
                    <div class="col-md-4  mb-5 mb-md-0 col-12">
                        <p>
                            Savor a journey from zesty Lemon to earthy Patchouli, spiced with Clove Leaf and Cardamom
                            for a tantalizing experience.
                        </p>
                        <div class="know-more">
                            <a href="https://www.maisonavenirfragrances.com/our-fragrance/detail/vortex-echo"
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
                        <img src="https://www.maisonavenirfragrances.com/storage/mood/Energetic-674e8f399e8c2.png"
                            alt="Orange Flower Oil" class="icon-bubble">
                        <div><strong>Contains Orange Flower Oil</strong></div>
                        <small>
                            <span style="color:#cab651">Mood Impact:</span><br>
                            Refreshing And Invigorating
                        </small>
                    </div>
                    <div class="content-block">
                        <img src="https://www.maisonavenirfragrances.com/storage/mood/Happy-674e901726d98.png"
                            alt="Lemon Oil" class="icon-bubble">
                        <div><strong>Contains Lemon Oil</strong></div>
                        <small>
                            <span style="color:#cab651">Mood Impact:</span><br>
                            Revitalizing And Cooling
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
                        <div><strong>Make A Bold Statement</strong></div>
                        <small>Perfect For Formal Events</small>
                    </div>

                    <div class="content-block">
                        <img src="https://www.maisonavenirfragrances.com/storage/occasion/Weekend-Outing-674ee8d899888.png"
                            alt="Night Out With Friends" class="icon-bubble">
                        <div><strong>Keep The Energy Alive</strong></div>
                        <small>Perfect For A Night Out With Friends</small>
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
                            <strong>Aromatic</strong> 17.70% |
                            <strong>Soft floral</strong> 15.93% |
                            <strong>Warm Spicy</strong> 15.04% |
                            <strong>Woody</strong> 14.16% |
                            <strong>Citrus</strong> 13.27% |
                            <strong>Herbal</strong> 12.39% |
                            <strong>Fresh Spicy</strong> 11.50%
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
                        <img src="/website/scentopia/icone/uniseximage-2.png" alt="Unisex"
                            class="d-none d-md-block" />

                        <!-- Mobile ke liye: d-block (show by default), d-md-none (medium and above hide) -->
                        <img src="/website/scentopia/icone/uniseximage-2-mobile.png" alt="Unisex Mobile"
                            class="d-block d-md-none mt-5" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mouse"></div>

    @include('website.scentopia.product.aura.productcaard')







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
                        "Lavender",
                        "Pink Pepper",
                        "Clary",
                        "Sage",
                        "Lemon",
                        "Bergamot"
                    ]
                },
                {
                    title: "Middle Note",
                    image: "/website/scentopia/icone/Heart Note.png",
                    desc: [
                        "Clove Leaf",
                        "Cassia",
                        "Coriander",
                        "Cardamom",
                        "Sage",
                        "Thyme"
                    ]
                },
                {
                    title: "Base Note",
                    image: "/website/scentopia/icone/Base Note.png",
                    desc: [
                        "Patchouli",
                        "Amber",
                        "Leather",
                        "Vanilla",
                        "Tobacco",
                        "Vetiver"
                    ]
                },
                {
                    title: "Essential Oils",
                    image: "/website/scentopia/icone/Essential Oils.png",
                    desc: [
                        "Clove Oil",
                        "Eugenol",
                        "Orange Flower",
                        "Vanilla Resin Absolute",
                        "Italian Finest Lemon Oil"
                    ]
                },
                {
                    title: "Natural Oils",
                    image: "/website/scentopia/icone/Natural Oils.png",
                    desc: [
                        "Egyptian Geranium",
                        "Patchouli",
                        "Virginian Cedarwood",
                        "Black Pepper"
                    ]
                },
                {
                    title: "Fragrance Accords",
                    image: "/website/scentopia/icone/Fragrance Accords.png",
                    desc: [
                        "Aromatic",

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
                                'Aromatic', 'Soft floral', 'Warm Spicy', 'Woody', 'Citrus',
                                'Herbal', 'Fresh Spicy'
                            ],
                            datasets: [{
                                label: 'Fragrance Notes',
                                data: [
                                    17.70, 15.93, 15.04, 14.16, 13.27, 12.39, 11.50
                                ],
                                backgroundColor: [
                                    '#2d9b8f', '#e89f89', '#d63c1a', '#7b5b2a',
                                    '#f7f54a', '#c1ece4', '#a8e6a3'
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
