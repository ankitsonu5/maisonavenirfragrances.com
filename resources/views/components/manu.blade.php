<div id="menu" class="home-menu">
  <div class="group-2781">
    <a id="close-menu">
      <div class="group-2780">
        <div class="overlap-group-8">
          <img class="line-13" src="{{ asset('website/assets/img/close.png')}}" alt="Line 13">
        </div>
      </div>
    </a>
    <a href="about">
      <div class="link theseasons-bold-white-30px">Our Story</div>
    </a>
    <a href="our-fragrance">
      <div class="link theseasons-bold-white-30px">Our Fragrances</div>
    </a>
    <a href="ai-fragrance-finder">
      <div class="link theseasons-bold-white-30px">Ai Fragrance Finder</div>
    </a>
    <a href="fragrancematchmaker">
      <div class="link theseasons-bold-white-30px">Fragrance Matchmaker</div>
    </a>
    <a href="contact-us">
      <div class="link theseasons-bold-white-30px">Contact Us</div>
    </a>
    <div class="group-2837">
      <div class="group-container-1">
        <div class="group-2225">
          <div class="group-23"><img class="path-67" src="{{ asset('website/assets/img/path-67@1x.png')}}"
              alt="Path 67"></div>
          <div class="group-25-2">
            <div class="paish social-media th-container-3">
              <img class="path-63" src="{{ asset('website/assets/img/facebook-app-symbol.png')}}" alt="Path 63">
              <img class="path-64" src="{{ asset('website/assets/img/tik-tok.png')}}" alt="Path 64">
              <img class="path-65" src="{{ asset('website/assets/img/youtube.png')}}" alt="Path 65">
              <img class="path-65" src="{{ asset('website/assets/img/instagram.png')}}" alt="Path 65">
            </div>
          </div>
          <div class="group-26"><img class="path-61" src="{{ asset('website/assets/img/path-61@1x.png')}}"
              alt="Path 61"></div>
        </div>
        <div class="group-2836"></div>
      </div>
    </div>
  </div>
</div>
<!-- //  manu end  -->


<script>
  document.getElementById('menu-toggle').addEventListener('click', function() {
    document.getElementById('menu').classList.toggle('open');
  });
  document.getElementById('close-menu').addEventListener('click', function() {
    document.getElementById('menu').classList.remove('open');
  });
</script>