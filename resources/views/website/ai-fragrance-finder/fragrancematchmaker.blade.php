<div class="container">

    <a href="{{ route('fragrancematchmaker') }}">
        <p class="idealperfume">Discover your ideal perfume, based on what you currently like</p>
        <div class="imagesrial">
            <!-- For Desktop -->
            <img src="{{ asset('ai-fragrance-finderassets/assets/SecondScreen/imagesrial.png') }}" alt="for-yourself"
                class="d-none d-md-block">
            <center>
                <div class="row justify-content-md-center">
                    <div class="col-12 mb-5">
                        <div class="tryour mobile-view">
                            <img src="{{ asset('ai-fragrance-finderassets/assets/SecondScreen/tryour.png') }}"
                                alt="for-yourself" class="">
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- For Mobile -->
                        <img src="{{ asset('ai-fragrance-finderassets/assets/SecondScreen/Group 3802.png') }}"
                            alt="for-yourself" class="d-block d-md-none">
                    </div>
                </div>

            </center>

        </div>
        <div class="tryour desktop-view">
            <img src="{{ asset('ai-fragrance-finderassets/assets/SecondScreen/tryour.png') }}" alt="for-yourself"
                class="">
        </div>
    </a>
</div>
