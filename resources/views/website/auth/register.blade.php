<x-guest-layout>
    <section class="bg-light p-3 p-md-4 p-xl-5 full-height">

        <div class="row justify-content-center">
            <div class="col-12 col-xxl-11">
                <div class="card border-light-subtle shadow-sm card-custom">
                    <div class="row g-0">

                        <div class="col-12 col-md-12 d-flex align-items-center justify-content-center">
                            <div class="col-12 col-lg-11 col-xl-10">
                                <div class="card-body p-3 p-md-4 p-xl-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <div class="text-center mb-4">
                                                    <a href="{{ route('index') }}">
                                                        <img src="{{ asset('website/assets/images/logo.png') }}"
                                                            alt="BootstrapBrain Logo">
                                                    </a>
                                                </div>
                                                <h4 class="text-center">Create an account
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex gap-3 flex-column">
                                                <a href="{{route('login.google')}}" class="btn btn-lg btn-outline-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                                    </svg>
                                                    <span class="ms-2 fs-6">Register in with Google</span>
                                                </a>
                                            </div>
                                            <p class="text-center mt-4 mb-4">Or Register in with</p>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row gy-3">
                                            <div class="col-12">
                                                <div class="form-floating mb-2">
                                                    <input type="text" class="form-control" value="{{ old('name') }}"
                                                        name="name" id="name" placeholder="Enter Your Name">
                                                    <label for="email" class="form-label">Name</label>
                                                    @error('name')
                                                    <p style="color:red">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-2">
                                                    <input type="email" value="{{ old('email') }} " class="form-control"
                                                        name="email" id="email" placeholder="name@example.com">
                                                    <label for="email" class="form-label">Email</label>
                                                    @error('email')
                                                    <p style="color:red">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-2">
                                                    <input type="password" class="form-control" name="password"
                                                        id="password" value="" placeholder="Password">
                                                    <label for="password" class="form-label">Password</label>
                                                    @error('password')
                                                    <p style="color:red">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-2">
                                                    <input type="password_confirmation" class="form-control"
                                                        name="password_confirmation" id="password_confirmation" value=""
                                                        placeholder="Password Confirmation">
                                                    <label for="password_confirmation" class="form-label">Password
                                                        Confirmation</label>
                                                    @error('password_confirmation')
                                                    <p style="color:red">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        name="agree" id="agree">
                                                    <label class="form-check-label text-secondary" for="remember">
                                                        I agree to terms & conditions and privacy policy
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-dark btn-lg" type="submit">Register in
                                                        now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-5">
                                                <p> Have already
                                                    an account? <a href="{{ route('login') }}"
                                                        class="link-dark fw-bold text-decoration-none"> Login here </a>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>