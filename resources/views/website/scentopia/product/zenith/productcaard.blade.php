 <div class="container text-center my-5">
     <div class="thrdstepcontsec">
         <div class="row owl-carousel owl-theme owl-carousel-0">

             <!-- Card 1 - Aurora Opulence -->
             <div class="sglethrdstepcontpart">
                 <div class="thrdstepthumbsec">
                     <a onclick="handleClick(event)" href="{{ route('scentopia.product.zenith.aurora-opulence') }}">
                         <img src="/website/scentopia/product/zenith/Aurora Opulence.png"
                             alt="Aurora Opulence - Radiant Elegance of the Northern Skies">
                     </a>
                 </div>
                 <p>
                     Inspired by the celestial beauty of the aurora, this scent radiates luxury and ethereal charm.
                 </p>
                 <a onclick="handleClick(event)" href="{{ route('scentopia.product.zenith.aurora-opulence') }}"
                     class="viewproductbut">
                     <img src="/website/scentopia/explore.png" alt="Explore Aurora Opulence">
                 </a>
             </div>

             <!-- Card 2 - Midnight Solstice -->
             <div class="sglethrdstepcontpart">
                 <div class="thrdstepthumbsec">
                     <a onclick="handleClick(event)" href="{{ route('scentopia.product.zenith.midnight-solstice') }}">
                         <img src="/website/scentopia/product/zenith/Midnight Solstice.png"
                             alt="Midnight Solstice - Mystical Twilight Aroma">
                     </a>
                 </div>
                 <p>
                     A deep, enigmatic fragrance capturing the quiet mystery of the longest night of the year.
                 </p>
                 <a onclick="handleClick(event)" href="{{ route('scentopia.product.zenith.midnight-solstice') }}"
                     class="viewproductbut">
                     <img src="/website/scentopia/explore.png" alt="Explore Midnight Solstice">
                 </a>
             </div>

             <!-- Card 3 - Opulent Odyssey -->
             <div class="sglethrdstepcontpart">
                 <div class="thrdstepthumbsec">
                     <a onclick="handleClick(event)" href="{{ route('scentopia.product.zenith.opulent-odyssey') }}">
                         <img src="/website/scentopia/product/zenith/Opulent Odyssey.png"
                             alt="Opulent Odyssey - A Journey Through Luxury">
                     </a>
                 </div>
                 <p>
                     Embark on a sensory journey through exotic lands and luxurious depths with every spray.
                 </p>
                 <a onclick="handleClick(event)" href="{{ route('scentopia.product.zenith.opulent-odyssey') }}"
                     class="viewproductbut">
                     <img src="/website/scentopia/explore.png" alt="Explore Opulent Odyssey">
                 </a>
             </div>



         </div>
     </div>
 </div>


 <script src="{{ asset('website/assets/vendors/jquery.min.js') }}"></script>
 <script src="{{ asset('website/assets/owlcarousel/js/owl.carousel.js') }}"></script>
 <script>
     $(document).ready(function() {
         $('.owl-carousel').owlCarousel({
             loop: true,
             nav: false,
             margin: 50,
             autoplay: false,

             lazyLoad: true,
             autoplayTimeout: 10000,
             autoplayHoverPause: true,
             responsive: {
                 0: {
                     items: 1
                 },
                 600: {
                     items: 1
                 },
                 960: {
                     items: 3
                 },
                 1200: {
                     items: 3
                 }
             }
         });
     });
 </script>
