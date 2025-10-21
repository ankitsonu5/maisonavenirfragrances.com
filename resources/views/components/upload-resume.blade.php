<a data-bs-toggle="modal" data-bs-target="#exampleModal"
    class="   btn btn-light rounded carousel-content-btn1  position-relative animated tada infinite">
    <i class="fas fa-file-upload  "></i> Upload Resume
</a>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row">
                    <!-- Image Side -->
                    <div class="col-md-6">
                        <img src="{{ asset('website/img/drop.webp') }}" class="h-100 img-fluid" alt="Image">
                    </div>
                    <!-- Form Side -->
                    <div class="col-md-6">
                        <form method="post" action="{{ route('UploadResume') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name *</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Enter your name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Enter your email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile No *</label>
                                <input type="tel" name="mobile" class="form-control" id="mobile"
                                    placeholder="Enter your mobile number">
                                @error('mobile')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Current Location *</label>
                                <input type="text" name="location" class="form-control" id="location"
                                    placeholder="Tell us about your current location">
                                @error('location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="experience" class="form-label">Total Experience *</label>
                                <select class="form-select" name="experience" id="experience">
                                    <option value="" disabled selected>Select your experience</option>
                                    <option value="Less than 1 year">Less than 1 year</option>
                                    <option value="1-3 years">1-3 years</option>
                                    <option value="3-5 years">3-5 years</option>
                                    <option value="5+ years">5+ years</option>
                                </select>
                                @error('experience')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="resume" class="form-label">Attach Resume *</label>
                                <input type="file" name="resume" class="form-control" id="resume"
                                    accept=".doc, .docx, .pdf, .rtf">
                                <div id="resumePreview" class="mt-2"></div>
                                @error('resume')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" name="agreement" class="form-check-input" id="agreement">
                                <label class="form-check-label" for="agreement">I agree to the Terms and
                                    Conditions</label>
                                @error('agreement')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div id="submitMessage" class="mb-3"></div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if (!Session::has('resumeupload'))
    <script>
        // Function to show the modal
        function showModal() {
            // Show the modal
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
        }
        // Call showModal function after 5 seconds (5000 milliseconds)
        setTimeout(showModal, 5000);
    </script>
@endif
