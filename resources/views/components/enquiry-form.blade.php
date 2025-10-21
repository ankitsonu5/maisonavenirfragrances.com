<div>
    <style>
        .modal-content {
            color: #fff;
            background-color: rgba(0, 0, 0, 1);
            border: 1px solid white;
            /* Transparent black background */
        }

        .modal-header {
            border: none;
        }

        .btn-close {
            color: #fff;
            /* font-size: 1.5rem; */
            background-color: hsl(0, 0%, 100%);
            border: none;
            border-radius: 50%;
            padding: 5px;
            position: relative;
            top: 10px;
            left: 10px;
            cursor: pointer;

        }


        .modal-body {
            padding: 25px auto;

        }

        /* .modal-title {
            font-size: 2rem;
            font-weight: bold;

        } */
        .enquiry-form-title {
            font-family: var(--font-family-theseasons-regular);
            color: #E0B500;
            font-size: 40px;

        }

        .form-control {
            background-color: transparent;
            border: 1px solid white;
        }

        .form-control::placeholder {
            color: white;
        }

        .form-control:focus,
        .form-control:active {
            box-shadow: none;
            background-color: transparent;
        }

        .gender {
            border: 1px solid white;
            padding: 10px;
            color: white;
            border-radius: 6px
        }

        .gender label {
            margin-left: 30px;
        }

        .gender input[type="radio"] {
            background-color: transparent;
            border: 1px solid white;

            display: inline-block;
        }

        .gender input[type="radio"]:focus,
        .gender input[type="radio"]:active {
            box-shadow: none;
            background-color: transparent;
        }
    </style>


    <!-- Modal Structure -->
    <div class="modal fade" id="mouseExitModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" data-bs-dismiss="modal" class="btn-close">
                </button>
                <div class="modal-body">
                    <p class="enquiry-form-title text-center">Sign up for a More <br> Personalized Fragrance
                        Experience</p>

                    <form method="post" m id="enquiryForm" action="{{ route('enquiry-form.store') }}">
                        @csrf
                        <div class="row px-3">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Your Name:" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">

                                <input type="email" class="form-control" placeholder="Email id:" name="email" required>
                            </div>
                        </div>
                        <div class="row  px-3">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Phone number:"
                                    name="contact_number" required>
                            </div>
                            <div class="col-md-6 mb-3">

                                <input type="number" class="form-control" placeholder="Age" name="age" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="gender">
                                    Gender:
                                    <label>
                                        <input type="radio" class="form-check-input" name="gender" value="male">
                                        Male
                                    </label>
                                    <label>
                                        <input type="radio" class="form-check-input" name="gender" value="female">
                                        Female
                                    </label>
                                    <label>
                                        <input type="radio" class="form-check-input" name="gender"
                                            value="prefer_not_to_say"> Prefer not to say
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="text-center">
                            <button id="submitButton" type="submit" class="btn-contact">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Custom Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const modal = new bootstrap.Modal(document.getElementById('mouseExitModal'));
        const storageKey = 'exitModalLastShown';
        const cooldownMinutes = 10;
        const now = new Date().getTime();

        const lastShown = localStorage.getItem(storageKey);

        // Check if it's first time or after 10 minutes
        if (!lastShown || now - lastShown > cooldownMinutes * 60 * 1000) {
            setTimeout(() => {
                modal.show();
                localStorage.setItem(storageKey, now.toString());
            }, 5000); // Show modal after 5 seconds
        }
    });
    </script>
</div>