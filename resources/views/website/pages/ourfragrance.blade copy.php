
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" href="{{ asset('website/assets/css/test.css')}}" />

  </style>
  <!-- Owl Stylesheets -->
  <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('website/assets/owlcarousel/css/owl.theme.default.min.css')}}">
</head>

<body>
  <div class="home">
    <div class="div">
      @include('website.layouts.navigation')

      @foreach ($data as $list)
      <div class="container  mt-50">
        <header class="header-bar">
          <div class="header-title">
            {{ $list->name }}
          </div>
        </header>
        <div class="row owl-carousel  owl-theme">
          @foreach ($list->products as $row)
          <div class="card card-custom" style="border-color:{{ $list->colorcode }} ">
            <img src="{{ asset('storage/product/' . $row->card_image) }}" alt="Electra Elixir">
            <h5 class="productname"> {{ $row->name }}</h5>
            <p class="keywords"> {{ $row->keywords }}</p>
            <p class="shortdescription">{{ Str::words($row->short_description, 10, '...') }}</p>
            <div class="icon-container">
              <div>
                <img class="icone" src="{{ asset('storage/product/' . $row->aqua) }}" alt="Aqua Icon">
                <p>Top</p>
              </div>
              <div>
                <img class="icone" src="{{ asset('storage/product/' . $row->woody) }}" alt="Woody Icon">
                <p>Heart</p>
              </div>
              <div>
                <img class="icone" src="{{ asset('storage/product/' . $row->floral) }}" alt="Floral Icon">
                <p>Base</p>
              </div>
            </div>
            <p class="fragrance">{{ $row->fragrance_family }}</p>
            <div class="button-wrapper">
              <a href="{{ route('fragrancedetail',$row->slug) }}" class="know-more-btn  cardbtn">Know More</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      @endforeach

      <div class="container my-5">
        <div class="aiimg">
          <img src="{{ asset('website/assets/img/fragrance.png')}}" alt="" srcset="">
        </div>
        <div class="button-wrapper w-100">
          <a href="ai-fragrance-finder" class="find-button">Find your fragrance</a>
        </div>
      </div>


      <footer class="footer">
        <div class="row  ">
          <div class="col-md-3  footer-item ">
            <div class="group-37">
              <div class="overlap-group-5">
                <img class="path-24"
                  src="https://cdn.animaapp.com/projects/66a25bce01fc51e85ac99e37/releases/66a25c9b9c10ec57227fb8ca/img/path-2-15@1x.png">
                <div class="group-38"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3  footer-item  ">
            <h5>Explore Maison</h5>
            <ul>
              <li><a href="about-us">Our Story</a></li>
              <li><a href="our-fragrance">Our Fragrances</a></li>
              <li><a href="ai-fragrance-finder">Ai Fragrance Finder</a></li>
              <li><a href="fragrance-matchmaker">Fragrance Matchmaker</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item ">
            <h5>Follow Us</h5>
            <ul>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">YouTube</a></li>
              <li><a href="#">TikTok</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item ">
            <h5>Contact Us</h5>
            <address>
                Scion International LLC PO <br> Box number - 5551 Dubai, U.A.E
                <br> <a href="tel:+97165332755" class="contact-btn">Call Us</a>
                +97165332755<br>
                <a href="mailto:info@scionintl.com">info@scionintl.com</a>
            </address>
          </div>
        </div>
        <p class="text-center copyright">© 2024 Maison. All Rights Reserved.</p>
      </footer>

    </div>



    <script src="{{ asset('website/assets/vendors/jquery.min.js')}}"></script>
    <script src="{{ asset('website/assets/owlcarousel/js/owl.carousel.js')}}"></script>
    <script>
      $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
          loop: true,
          nav: true,
          margin: 50,

          autoplay: false,
          lazyLoad: true,
          autoplayTimeout: 1000,
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
        // owl.on('mousewheel', '.owl-stage', function(e) {
        //   if (e.deltaY > 0) {
        //     owl.trigger('next.owl');
        //   } else {
        //     owl.trigger('prev.owl');
        //   }
        //   e.preventDefault();
        // });
        // owl.on('mousewheel', '.owl-stage', function(e) {
        //   if (e.deltaY > 0) {
        //     owl.trigger('next.owl');
        //   } else {
        //     owl.trigger('prev.owl');
        //   }
        //   e.preventDefault();
        // });
      });
    </script>

    <script>
      document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('open');
      });
      document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('menu').classList.remove('open');
      });
    </script>
</body>

</html>
