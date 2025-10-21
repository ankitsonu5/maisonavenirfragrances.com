<x-app-layout :title="'FAQ | Maison de l\'Avenir Fragrances'"
    :description="'Learn more about Maison de l’Avenir fragrances and get answers to common questions.'">

    @push('application')



    <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What makes Maison de l’Avenir fragrances unique?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our fragrances are crafted using AI-powered research and the finest natural ingredients, ensuring a unique and luxurious experience."
          }
        },
        {
          "@type": "Question",
          "name": "Are Maison de l’Avenir products cruelty-free?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, all Maison de l’Avenir products are 100% cruelty-free and crafted with care."
          }
        },
        {
          "@type": "Question",
          "name": " Do Maison de l’Avenir fragrances cater to specific moods or occasions?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our AI-powered tools, like the Fragrance Finder and Matchmaker, help you select scents tailored to your mood, personality, or special occasion."
          }
        },
        {
          "@type": "Question",
          "name": "Where can I buy Maison de l’Avenir fragrances?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our fragrances are available for purchase on our official website at www.maisonavenirfragrances.com and through select retail partners, including All Beauty in the UK and Amazon USA."
          }
        },
        {
          "@type": "Question",
          "name": "How can I find the perfect fragrance for me?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our AI-powered Fragrance Matchmaker helps you discover scents that align with your personality, mood, and occasion. Try it today on our website."
          }
        },
        {
          "@type": "Question",
          "name": "What is the inspiration behind Maison de l’Avenir?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maison de l’Avenir combines the opulence of the East and the elegance of the West, blending traditional perfumery techniques with cutting-edge AI innovation to craft timeless fragrances."
          }
        },
        {
          "@type": "Question",
          "name": "What collections does Maison de l’Avenir offer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We offer several luxurious collections, including Elixir, Supernova, Zenith, and Aura, each crafted to provide a unique sensory experience."
          }
        },
        {
          "@type": "Question",
          "name": "How long do Maison de l’Avenir fragrances last?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our fragrances are meticulously crafted using high-quality ingredients, ensuring a long-lasting scent that evolves beautifully over time."
          }
        },
        {
          "@type": "Question",
          "name": ". Can I find unisex fragrances in your collection?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, all Maison de l’Avenir fragrances are unisex, designed to appeal to all genders with their sophisticated and versatile fragrances."
          }
        }
      ]
    }
    </script>

    @endpush
    <div class="banner wow animate__fadeIn" data-wow-delay="0.3s">
        <img style="width:1920px" class="dd" src="{{ asset('website/assets/images/FAQ Banner.jpg') }}" />
        <img class="md" src="{{ asset('website/assets/images/FAQ Banner_Mobile.jpg') }}" alt="FAQ" />
    </div>

    <div class="container sesabout">
        <div class="row ourlegacy">
            <div class="col-md-12 col-sm-12 order-md-1 sm-center mypd wow animate__fadeInLeft" data-wow-delay="0.4s">
                <div class="accordion" id="accordionFAQ">
                    <!-- Accordion Item 1 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq1">
                            <h2> How do I choose the right perfume?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq1" class="accordion-body">
                            <p class="faq-para">
                                Maison de l’Avenir enhances the omni-channel consumer journey with its innovative <a
                                    href="{{ route('aifragrancefinder') }}"> <span class="underline-bold"> AI
                                        Fragrance Finder,</span> </a> available on its website. This tool analyzes
                                individual
                                preferences
                                and
                                guides users to the perfect perfumes, ensuring a seamless match with their tastes.
                                Selecting
                                the ideal scent is a deeply personal journey, and Maison de l’Avenir aims to tailor
                                recommendations through AI.</p>

                            <p class="faq-para"> You can also visit retailers which stock Maison de l’Avenir to
                                smell the perfumes.</p>

                            <p class="faq-para"> When shopping online, it’s important to check the <span
                                    class="faq-bold">ingredients of the
                                    perfumes</span> and the olfactory profile and fragrance pyramid of the perfume.</p>

                            <p class="faq-para"> At Maison de
                                l’Avenir, each perfume is crafted using a range of high-quality essential, natural, and
                                aromatherapy oils, creating unique, long-lasting, sustainable, and mood-enhancing
                                scents.</p>
                        </div>
                    </div>
                    <!-- Accordion Item 2 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq2">
                            <h2> What is the difference between perfume, scent, and fragrance?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq2" class="accordion-body">
                            <p class="faq-para"> The terms "perfume," "scent," and "fragrance" are often used
                                interchangeably, but they have
                                distinct meanings:</p>
                            <div class="faq-text-left">
                                <ul>
                                    <li class="faq-para"><span class="faq-bold"> Perfume</span> refers to a
                                        concentrated blend of essential oils, aroma
                                        compounds, and solvents designed for long-lasting wear. Perfumes are categorized
                                        by
                                        concentration, such as parfum, eau de parfum, and eau de toilette.</li>
                                    <li class="faq-para"><span class="faq-bold"> Scent</span> is a
                                        broader term
                                        that refers to any smell, whether natural or artificial.</li>
                                    <li class="faq-para"><span class="faq-bold">Fragrance</span> describes a
                                        carefully
                                        formulated blend of aromatic compounds, often found in perfumes, candles, and
                                        personal care
                                        products.</li>

                                </ul>
                            </div>
                            <p class="faq-para"> Maison de l'Avenir meticulously crafts each unisex perfume with the
                                finest
                                Natural, Essential and Aromatherapy oils to ensure purity, potency, and longevity,
                                offering
                                an elevated experience in the world of fragrance. </p>
                        </div>
                    </div>
                    <!-- Accordion Item 3 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq3">
                            <h2> What are unisex perfumes?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq3" class="accordion-body">

                            <p class="faq-para"> <span class="faq-bold">Unisex perfumes</span> are generally designed as
                                <span class="faq-bold"> perfumes for men and women,</span> crafted to appeal to
                                people of any gender and moving beyond traditional fragrance stereotypes. Maison de
                                l'Avenir
                                offers an exquisite range of <span class="faq-bold">unisex fragrances</span> that
                                celebrate individuality while embodying
                                the sophistication and depth of niche perfumery. For Maison de l'Avenir, fragrance is
                                more
                                than just a scent—it’s an art form that transcends gender boundaries. The <span
                                    class="faq-bold"> unisex perfumes</span>
                                seamlessly blend traditional craftsmanship with cutting-edge AI technology, empowering
                                personal expression in a way that is both timeless and innovative.
                            </p>
                        </div>
                    </div>
                    <!-- Accordion Item 4 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq4">
                            <h2> What are niche perfumes?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq4" class="accordion-body">
                            <p class="faq-para">
                                <span class="faq-bold"> Niche perfumes</span> are defined by their artistry, unique
                                compositions, and focus on quality over
                                mass appeal. Uncompromising in quality and limited in production, Maison de l'Avenir
                                blends
                                tradition with cutting-edge AI technology, crafting exquisite <span class="faq-bold">
                                    niche perfumes</span> from the
                                world’s finest natural and essential oils. The brand’s dedication to superior
                                ingredients
                                ensures lasting scents and an elevated olfactory experience. Every bottle is a true work
                                of
                                art, uniting timeless heritage with modern innovation for a sensory journey that lingers
                                long after the first impression.
                            </p>
                        </div>
                    </div>
                    <!-- Accordion Item 5 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq5">
                            <h2> What are seasonal scents? And which seasonal scent smells better?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq5" class="accordion-body">
                            <p class="faq-para"> <span class="faq-bold">Seasonal scents</span> capture the essence of
                                each time of year, with certain scents being best
                                suited for specific seasons. Maison de l'Avenir offers a range of <span
                                    class="faq-bold"> seasonal unisex perfumes</span>
                                designed to embody the atmosphere of each season: </p>
                            <p class="faq-para"> <a
                                    href="https://www.maisonavenirfragrances.com/our-fragrance/detail/nova-noir"><span
                                        class="underline-bold"> Nova Noir</span> </a>
                                (Fall, Winter): A
                                sophisticated
                                and opulent scent with rich notes, perfect scent for cooler months and formal evening
                                occasions. It enhances the warmth of the season with deep, velvety undertones. </p>
                            <p class="faq-para"> <a
                                    href="https://www.maisonavenirfragrances.com/our-fragrance/detail/oud-intense">
                                    <span class="underline-bold"> Oud Intense</span></a>
                                (Year-round): This floral oriental fragrance with captivating oud notes is ideal for
                                romantic evenings and special events, creating a luxurious and sensual aura. </p>
                            <p class="faq-para"> <a
                                    href="https://www.maisonavenirfragrances.com/our-fragrance/detail/nebula-nectar">
                                    <span class="underline-bold"> Nebula Nectar</span> </a>
                                (Spring, Summer): A refined and elegant fragrance with a fresh, vibrant character,
                                making it
                                a perfect perfume for weekend outings and social gatherings.</p>
                            <p class="faq-para">
                                <a href="https://www.maisonavenirfragrances.com/our-fragrance/detail/electra-elixir">
                                    <span class="underline-bold">
                                        Electra Elixir</span> </a> (Year-round):
                                With its floral chypre composition, this fragrance is versatile across all seasons,
                                offering
                                a timeless elegance that transitions effortlessly from day to night.
                            </p>
                            <p class="faq-para"> To find your
                                <span class="faq-bold">perfect
                                    seasonal scent,</span> try <a href="{{ route('aifragrancefinder') }}"> <span
                                        class="underline-bold">AI Fragrance Finder</span> </a>

                                by
                                Maison de l'Avenir, which personalizes your
                                selection based on your preferences and the time of year.
                            </p>
                        </div>
                    </div>
                    <!-- Accordion Item 6 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq6">
                            <h2> Are there any seasonal perfumes for special occasions?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq6" class="accordion-body">
                            <p class="faq-para"> Absolutely. Special moments deserve special scents. Maison de
                                l'Avenir offers <span class="faq-bold"> best perfumes
                                    for men and women</span>crafted to leave an unforgettable impression, perfect for
                                weddings,
                                anniversaries, and other milestone celebrations. The<span class="faq-bold"> niche
                                    perfumes</span> transcend the occasion,
                                adding a luxurious touch to every cherished memory:
                            </p>
                            <p class="faq-para"> <a
                                    href="https://www.maisonavenirfragrances.com/our-fragrance/detail/oud-opulence">
                                    <span class="underline-bold">Opulent Odyssey</span> :
                                </a> An oriental woody
                                fragrance with luxurious notes, ideal for formal gatherings and milestone celebrations,
                                creating a sense of grandeur and sophistication.

                            </p>
                            <p class="faq-para"> <a
                                    href="https://www.maisonavenirfragrances.com/our-fragrance/detail/aurora-opulence">
                                    <span class="underline-bold">Aurora Opulence</span>: </a> A bright and
                                radiant
                                floral fragrance, perfect for daytime events such as brunches, garden weddings, or
                                anniversary luncheons. Its fresh, uplifting notes exude elegance and charm, making it
                                ideal
                                for celebrating under the sun.

                            </p>
                            <p class="faq-para"> <a
                                    href="https://www.maisonavenirfragrances.com/our-fragrance/detail/midnight-solstice">
                                    <span class="underline-bold"> Midnight Solstice</span>: </a> Inspired by
                                moonlit dunes, this fragrance
                                blends velvety musk with sensual woods, perfect perfume for intimate evening events and
                                unforgettable nights.

                            </p>
                            <p class="faq-para"> For a personalized recommendation, explore <span
                                    class="underline-bold"><a href="{{ route('aifragrancefinder') }}">AI Fragrance
                                        Finder</a></span>-a
                                cutting-edge tool that guides you in selecting the perfect scent for any special moment.
                                Maison de l'Avenir elevates every occasion with an exquisite scent, ensuring
                                your memories
                                are imbued with luxury.
                            </p>
                        </div>
                    </div>
                    <!-- Accordion Item 7 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq7">
                            <h2> What is the right spot to apply perfume?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq7" class="accordion-body">

                            <p class="faq-para"> Perfume lasts longer when applied to pulse points, such as the wrists,
                                behind the ears, the
                                inside of elbows, and the nape of the neck. These areas generate more heat, helping the
                                fragrance release slowly over time. For a longer-lasting scent experience, try applying
                                6-7
                                sprays of <span class="faq-bold">unisex perfumes</span> from Maison de
                                l'Avenir to these spots. </p>
                        </div>
                    </div>
                    <!-- Accordion Item 8 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq8">
                            <h2> How to apply perfume?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq8" class="accordion-body">

                            <p class="faq-para"> For maximum fragrance impact, hold the perfume bottle 20–25 cm away
                                from your skin and spray
                                lightly on your pulse points. Avoid rubbing the fragrance into your skin, as this can
                                break
                                down the scent molecules. Instead, gently tap or let it air-dry to preserve the
                                fragrance.
                                This technique works particularly well with <span class="faq-bold">unisex
                                    perfumes</span> from Maison de l'Avenir,
                                designed for lasting intensity in the<span class="faq-bold"> world of fragrance.</span>
                            </p>
                        </div>
                    </div>
                    <!-- Accordion Item 9 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq9">
                            <h2> How long does the perfume last?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq9" class="accordion-body">

                            <p class="faq-para"> Perfume longevity depends on its concentration, type and quality of
                                ingredients used in
                                making, maceration process followed and individual skin chemistry. Typically, perfumes
                                last
                                longer when applied to pulse points or layered with a moisturizer Maison de
                                l'Avenir<span class="faq-bold"> unisex
                                    perfumes</span> are crafted to last between 36 and 48 hours, offering a premium
                                experience that
                                extends beyond regular scents. It is the<span class="faq-bold"> best place to buy
                                    fragrances</span> that last longer and
                                leave a lasting impression. </p>
                        </div>
                    </div>
                    <!-- Accordion Item 10 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq10">
                            <h2> Why do some fragrances last longer than others?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq10" class="accordion-body">

                            <p class="faq-para"> Fragrance longevity is influenced by more than just concentration. The
                                quality of
                                ingredients, the harmony of fragrance notes, and individual skin chemistry all play
                                vital
                                roles. At Maison de l'Avenir,<span class="faq-bold"> the perfumes for men and
                                    women</span> are infused with the finest
                                natural and essential oils to enrich their depth and longevity, while maintaining a
                                luxurious feel. The meticulous maceration process allows the oils to harmonize
                                perfectly,
                                ensuring a lasting, unforgettable scent. It’s this dedication to craftsmanship that
                                makes
                                every <span class="faq-bold">niche perfume</span> from Maison de l'Avenir </i> linger
                                elegantly. </p>
                        </div>
                    </div>
                    <!-- Accordion Item 11 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq11">
                            <h2> Are there any tricks to make the perfume last longer?</h2>
                            <span class="accordion-icon">-</span>
                        </div>
                        <div id="faq11" class="accordion-body ">

                            <p class="faq-para"> To enhance the longevity of your fragrance, apply it to moisturized
                                skin or on your clothing
                                for a subtle, prolonged experience. Maison de l'Avenir’s<span class="faq-bold">
                                    niche perfumes,</span> with their expertly
                                crafted notes, perform beautifully on both skin and fabric, ensuring your scent remains
                                captivating throughout the day. </p>
                        </div>
                    </div>
                    <!-- Accordion Item 12 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq12">
                            <h2> Why can't I smell my own perfume after some time?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq12" class="accordion-body">
                            <p class="faq-para"> Over time, our noses become desensitized to familiar smells, including
                                our own perfume. This
                                phenomenon, called olfactory fatigue, explains why you might stop noticing your
                                fragrance
                                while others can still smell it. With the distinctive<span class="faq-bold"> unisex
                                    perfumes</span> from Maison de
                                l'Avenir, others will surely notice and compliment your scent, even when you
                                can’t.</p>
                        </div>
                    </div>
                    <!-- Accordion Item 13 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq13">
                            <h2> What can I do if I am allergic to perfume?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq13" class="accordion-body">

                            <p class="faq-para"> If you experience allergic reactions to perfume, consider applying it
                                to your clothing
                                instead of directly on your skin. It's also wise to review the<span class="faq-bold">
                                    ingredients of the perfumes</span>
                                to identify and avoid potential allergens. Many brands, including Maison de
                                l'Avenir, adhere
                                to rigorous quality standards and regulations in the country of sale, ensuring safer
                                formulations. If you're unsure about a fragrance, seek out sample sizes to test the
                                scent
                                before committing to a full-size bottle. This allows you to assess any reactions in a
                                controlled way, helping you find a fragrance that works for you without causing
                                irritation. </p>
                        </div>
                    </div>
                    <!-- Accordion Item 14 -->
                    <div class="accordion-item">
                        <div class="accordion-header" data-target="faq14">
                            <h2> What are the common ingredients in Maison de l'Avenir perfumes?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq14" class="accordion-body">

                            <p class="faq-para"> Our perfumes contain a variety of Natural ingredients, including
                                essential oils like
                                sandalwood, basil, lemon, and patchouli and natural oils like Australian sandalwood and
                                Egyptian jasmine. They also include a lot of mood-enhancing aromatherapy ingredients
                                like
                                lavender and orange. These oils contribute to the perfume’s complexity, longevity and
                                depth.
                                The<span class="faq-bold"> ingredients of the perfumes</span> Maison de
                                l'Avenir are carefully selected to ensure a
                                rich, luxurious scent with every application.</p>
                        </div>
                    </div>
                    <!-- Accordion Item 15 -->
                    <div class="accordion-item" style="border: 0px">
                        <div class="accordion-header" data-target="faq15">
                            <h2> What do you mean by top, heart, and base notes?</h2>
                            <span class="accordion-icon">+</span>
                        </div>
                        <div id="faq15" class="accordion-body">
                            <p class="faq-para"> Notes are the different scents that make up a perfume, creating its
                                unique profile. Perfume
                                is composed of three layers of notes:</p>


                            <div class="faq-text-left">
                                <ul>
                                    <li class="faq-para"><span class="faq-bold"> Top notes:</span> The bright,
                                        immediate impression upon
                                        application, often light and fresh.</li>
                                    <li class="faq-para"><span class="faq-bold"> Heart notes</span> or <span
                                            class="faq-bold"> Middle notes:
                                        </span>The core of the scent that
                                        emerges next, adding depth with floral, Spicy, oriental or fruity elements.</li>
                                    <li class="faq-para"><span class="faq-bold"> Base notes:</span> The
                                        lasting foundation, rich and deep, often woody or musky.</li>

                                </ul>
                            </div>
                            <p class="faq-para"> Finding the right balance of notes
                                is essential to creating a memorable fragrance. Maison de l'Avenir's <span
                                    class="faq-bold"> unisex perfumes</span> are
                                designed with perfectly harmonized layers of top, heart, and base notes, offering a
                                complete
                                scent experience in the <span class="faq-bold">world of fragrance.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionHeaders = document.querySelectorAll('.accordion-header');

            // Automatically open the first accordion item
            if (accordionHeaders.length > 0) {
                const firstHeader = accordionHeaders[0];
                const firstBody = document.getElementById(firstHeader.getAttribute('data-target'));
                const firstIcon = firstHeader.querySelector('.accordion-icon');

                firstBody.classList.add('show');
                firstIcon.textContent = '-';
            }

            accordionHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const targetId = header.getAttribute('data-target');
                    const body = document.getElementById(targetId);
                    const icon = header.querySelector('.accordion-icon');

                    // Toggle the accordion body visibility
                    if (body.classList.contains('show')) {
                        body.classList.remove('show');
                        icon.textContent = '+';
                    } else {
                        // Close all open accordion items
                        document.querySelectorAll('.accordion-body').forEach(b => b.classList
                            .remove('show'));
                        document.querySelectorAll('.accordion-icon').forEach(i => i.textContent =
                            '+');

                        // Open the clicked accordion item
                        body.classList.add('show');
                        icon.textContent = '-';
                    }
                });
            });
        });
    </script>


</x-app-layout>
