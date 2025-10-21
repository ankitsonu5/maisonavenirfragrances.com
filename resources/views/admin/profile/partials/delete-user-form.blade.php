{{-- <section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('admin.profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section> --}}






<div class="x_panel">
    <div class="x_title">
        <h2>Delete Account <small><br>Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account,<br> please download any data or information that you wish to retain.</small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                    <a class="dropdown-item" href="#">Settings 2</a>
                </div>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br>
        <form class="form-label-left input_mask">

            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="tel" class="form-control" id="inputSuccess5" placeholder="Phone">
                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Default Input</label>
                <div class="col-md-9 col-sm-9 ">
                    <input type="text" class="form-control" placeholder="Default Input">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Disabled Input </label>
                <div class="col-md-9 col-sm-9 ">
                    <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Read-Only Input</label>
                <div class="col-md-9 col-sm-9 ">
                    <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                    <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="date" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                    <script>
                        function timeFunctionLong(input) {
                            setTimeout(function() {
                                input.type = 'text';
                            }, 60000);
                        }
                    </script>
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group row">
                <div class="col-md-9 col-sm-9  offset-md-3">
                    <button type="button" class="btn btn-primary">Cancel</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>




