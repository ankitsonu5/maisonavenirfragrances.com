<x-app-layout :title="'Contact Maison de l’Avenir | Fragrance Inquiries & Feedback'" :description="'Have a question about our luxury fragrances or feedback on a purchase? Reach out to Maison de l’Avenir for prompt assistance and personalized support.'">

    <div class="custom-banner">
        <img class="dd" src="{{ asset('website/assets/images/Contact Us.jpg') }}" alt="Contact Us"/>
        <img class="md" src="{{ asset('website/assets/images/Contact Us_Mobile.jpg') }}" alt="Contact Us"/>

    </div>
    <div class="container  my-4">
        <form method="post" action="{{ route('contact.store') }}">
            @csrf
            <div class="row px-3">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                </div>
                <div class="col-md-6 mb-3">

                    <input type="text" class="form-control" placeholder="Your Company Name" name="company_name">
                </div>
            </div>
            <div class="row  px-3">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Your Contact Number" name="contact_number"
                        required>
                </div>
                <div class="col-md-6 mb-3">

                    <input type="email" class="form-control" placeholder="Your Contact Email Address" name="email"
                        required>
                </div>
            </div>
            <div class="row  px-3">
                <div class="col-md-6 mb-3">
                    <select class="form-control" name="country" required>
                        <option value="">Select Country</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <textarea class="form-control" name="enquiry" placeholder="Your Enquiry" rows="2"
                        required></textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn-contact">Submit</button>
            </div>
        </form>
    </div>

    <div class="container">


        <div class="profile-card">
            <!-- Place <div> tag where you want the feed to appear -->
            <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank"
                    class="crt-logo crt-tag">Powered by Curator.io</a></div>

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




</x-app-layout>
