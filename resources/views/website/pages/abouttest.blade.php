<x-app-layout :title="'About Us | Fragrance Brand Maison de l’Avenir'"
    :description="'Discover Maison de l’Avenir, where tradition meets innovation. Explore our AI-crafted, cruelty-free fragrances blending Eastern opulence and Western elegance.'">

    @push('application')

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Maison de l’Avenir",
          "alternateName": "Fine Niche Fragrances",
          "url": "https://maisonavenirfragrances.com/",
          "logo": "https://maisonavenirfragrances.com/website/assets/images/logo1.png",
          "sameAs": [
            "https://www.facebook.com/maisonavenirfragrance",
            "https://www.instagram.com/maisonavenirfragrances/",
            "https://www.tiktok.com/@maisonavenirfragrances",
            "https://ae.linkedin.com/in/maison-de-l-avenir-fragrances"
          ]
        }
    </script>

    @endpush
    <h1 class="d-none">Crafting Timeless Fragrances, Inspired by Innovation and Artistry</h1>
    <div class="containerabout">

        <!-- Left Image Section -->
        <div class="left-section">
            <!-- Desktop Images -->
            <img src="{{ asset('website/assets/about/1.png') }}" class="image desktop active" id="image-1"
                alt="Our Story">
            <img src="{{ asset('website/assets/about/Bottle_Collection_GIF_V4.gif') }}" class="image desktop"
                id="image-2" alt="Our Philosophy">
            <img src="{{ asset('website/assets/about/Crafted_With_Ai_GIF_V5.gif') }}" class="image desktop" id="image-3"
                alt="Crafted with AI">

            <img src="{{ asset('website/assets/about/4.png') }}" class="image desktop" id="image-4"
                alt="Fusion of East and West">
            <img src="{{ asset('website/assets/about/5.png') }}" class="image desktop" id="image-5"
                alt="Craftsmanship & Artistry">

            <!-- Mobile Images -->
            <img src="{{ asset('website/assets/about/mobile/1.png') }}" class="image mobile active" id="image-1-mobile"
                alt="Our Story">
            <img src="{{ asset('website/assets/about/mobile/Bottle_Collection_GIF_Mobile_Version3.gif') }}"
                class="image mobile" id="image-2-mobile" alt="Our Philosophy">
            <img src="{{ asset('website/assets/about/mobile/Crafted-With-Ai-Mobile-Version3.gif') }}"
                class="image mobile" id="image-3-mobile" alt="Crafted with AI">
            <img src="{{ asset('website/assets/about/mobile/4.png') }}" class="image mobile" id="image-4-mobile"
                alt="Fusion of East and West">
            <img src="{{ asset('website/assets/about/mobile/5.png') }}" class="image mobile" id="image-5-mobile"
                alt="Craftsmanship & Artistry">
        </div>

        <!-- Dot Navigation -->
        <div class="dot-navigation">
            <div class="line"></div>
            <div class="dot active" data-target="1"></div>
            <div class="dot" data-target="2"></div>
            <div class="dot" data-target="3"></div>
            <div class="dot" data-target="4"></div>
            <div class="dot" data-target="5"></div>
            <div class="line"></div>
        </div>

        <!-- Right Text Section -->
        <div class="right-section">
            <div class="text-item active" data-target="1">Our Story</div>
            <div class="text-content active" id="content-1">
                <p> Maison de l’Avenir (House of the Future) is a visionary Fine Niche Fragrance brand, founded in
                    2024 by
                    Sunit Sheth. It seamlessly blends a timeless fragrance heritage with cutting-edge innovation, to
                    deliver
                    exceptional fragrances and value to customers. As a third-generation member of a family-owned
                    fragrance
                    house with a 50-year legacy, Sunit Sheth infuses a legacy of craftsmanship, quality, and creativity
                    into
                    every scent.
                </p>
                <p class="mt-4">
                    His ambition? To reimagine perfumery for the modern era, by deeply embedding pioneering AI
                    technology into the DNA of the brand, crafting fragrances that captivate today’s discerning
                    fragrance
                    connoisseurs while anticipating their desires of tomorrow.
                </p>
            </div>

            <div class="text-item" data-target="2">Our Philosophy</div>
            <div class="text-content" id="content-2">
                <p> At Maison de l’Avenir, fragrance is more than a scent; it is an art form that transcends boundaries.
                    We
                    create unisex fragrances that empower personal expression, blending traditional craft with the
                    latest AI
                    technology. This dedication to elevating the art of perfumery ensures that every fragrance is a
                    testament to our rich heritage and commitment to quality. </p>
            </div>

            <div class="text-item" data-target="3">Crafted with AI</div>
            <div class="text-content" id="content-3">

                <p>

                    At Maison de l’Avenir, we seamlessly blend the artistry of fragrance creation with the innovation
                    and
                    endless potential of AI technology, offering a truly innovative and personalized olfactory
                    experience to
                    the fragrance connoisseur of today.
                </p>
                <p class="mt-4">

                    Our approach to being the first brand to use AI to craft our
                    fragrances is deeply rooted in understanding and analysing human sentiment. We have used proprietary
                    tools to analyse millions of pieces of image, text, video content across various platforms of the
                    internet.

                    Taking what humans are speaking about in relation to fragrance, their desires, and how
                    they
                    wish to use them, we have generated a robust data set of customer insights that we brought into the
                    crafting of each olfactory profile of our fragrances, including the notes, ingredients, essential &
                    natural oils to include. An example of this approach at its best is Maison de l’Avenir Oud Intense.
                    We
                    found that there is a big trend of people talking about ‘Oud’ fragrances. We also found that people
                    were
                    saying that they don’t want the very strong, pungent, traditional Oud as you find it in the Middle
                    East,
                    but a sweeter, softer Oud fragrance. This insight was brought into developing Oud Intense as a
                    floral-oriental fragrance composition, with exquisite Oud heart notes, blending with sweeter more
                    floral
                    notes.
                </p>
                <p class="mt-4">


                    In a similar manner to this we have used AI, along with our 50-year heritage of making
                    fragrances
                    across 80 countries, to help us craft, insight-based, rich and long-lasting fragrances. Our
                    AI-driven
                    approach supports us in refining and perfecting each scent, ensuring that every fragrance meets the
                    high
                    expectations of those who seek an exclusive, luxurious, and long-lasting experience. Through this
                    synergy of tradition and technology, we are crafting fragrances that honor the past while shaping
                    the
                    future of perfumery.
                </p>
                <p class="mt-4">

                    We have also created and patented a proprietary AI Fragrance Finder engine,
                    that
                    forms the backbone for data collection for the whole brand. The AI Fragrance Finder breaks fragrance
                    personalisation into a simple, clear step to step, human-sentiment focused journey to provide our
                    customers with the perfect scent for different moods and occasions.
                </p>
                <p class="mt-4">
                    It asks our customers to enter
                    either the Fragrance Notes, Ingredients, Families, they like, or the Mood and Occasion they will be
                    using the fragrance. Based on these inputs it will propose personalised, customised recommendations
                    for
                    people.
                    The data collected through this process, will help us build an engaged community of
                    customers
                    who will be able to play a role in bringing direct insights into our ongoing product development
                    cycle.
                </p>
            </div>

            <div class="text-item" data-target="4">Fusion of East and West</div>
            <div class="text-content" id="content-4">
                <p> Drawing inspiration from our deeply rooted fragrance legacy that spans the Middle East and the West for
                    50 years, Maison de l’Avenir celebrates the opulence and luxury of Eastern ingredients such as Oud,
                    Amber, Sandalwood, and Musk, while embracing the timeless sophistication and elegance of Western
                    perfumery. Each of our fifteen meticulously crafted fragrances reflects this harmonious blend,
                    capturing
                    the essence of both traditions. Our commitment to excellence ensures that every scent offers an
                    olfactory experience that transcends cultural boundaries, steeped in tradition yet shaped by
                    innovation.
                </p>
            </div>

            <div class="text-item" data-target="5">Craftsmanship and Artistry</div>
            <div class="text-content" id="content-5">
                <p> Uncompromising in quality and limited in production, Maison de l’Avenir stands at the intersection
                    of
                    tradition and technology. Each fragrance is meticulously crafted using the world’s finest natural
                    and
                    essential oils and aromatherapy ingredients chosen for their purity, potency and mood-enhancing
                    capabilities. This dedication to superior ingredients ensures exceptional fragrance longevity and an
                    elevated olfactory experience. Every bottle of Maison de l’Avenir is a true work of art- an opulent,
                    AI-crafted composition that honors the past while shaping the future of perfumery. Step into a world
                    where timeless heritage and innovation unite, delivering a sensory experience that lingers long
                    after
                    the first impression.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="profile-card">
            <!-- Place <div> tag where you want the feed to appear -->
            <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank"
                    class="crt-logo crt-tag"></a></div>

            <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
            <script type="text/javascript">
                /* curator-feed-default-feed-layout */
                (function () {
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
    <!-- JavaScript for Interaction -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const textItems = document.querySelectorAll('.text-item');
            const desktopImages = document.querySelectorAll('.image.desktop');
            const mobileImages = document.querySelectorAll('.image.mobile');
            const textContents = document.querySelectorAll('.text-content');
            const dots = document.querySelectorAll('.dot');

            function toggleSection(target) {
                const textItem = document.querySelector(`.text-item[data-target="${target}"]`);
                const textContent = document.getElementById(`content-${target}`);

                // Toggle active class for text and content
                if (textItem.classList.contains('active')) {
                    textItem.classList.remove('active');
                    textContent.classList.remove('active');
                } else {
                    deactivateAll();
                    textItem.classList.add('active');
                    textContent.classList.add('active');
                    document.getElementById(`image-${target}`).classList.add('active'); // For desktop
                    document.getElementById(`image-${target}-mobile`).classList.add('active'); // For mobile
                    document.querySelector(`.dot[data-target="${target}"]`).classList.add('active');
                }
            }

            function deactivateAll() {
                textItems.forEach(el => el.classList.remove('active'));
                desktopImages.forEach(img => img.classList.remove('active'));
                mobileImages.forEach(img => img.classList.remove('active'));
                textContents.forEach(text => text.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
            }

            // Add event listeners for text items and dots
            textItems.forEach(item => {
                item.addEventListener('click', () => toggleSection(item.dataset.target));
            });

            dots.forEach(dot => {
                dot.addEventListener('click', () => toggleSection(dot.dataset.target));
            });
        });
    </script>


</x-app-layout>
