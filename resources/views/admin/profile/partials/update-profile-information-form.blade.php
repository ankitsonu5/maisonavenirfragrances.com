<div class="x_panel">
    <div class="x_title">
        <h4>Profile Information <small><br>Update your account's profile information and email address.</small></h4>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br>

        <form method="post" action="{{ route('admin.profile.update') }}"class="form-label-left input_mask">
            @csrf
            @method('patch')
            <div class="col-md-12 col-sm-12  form-group has-feedback">
                <input type="text" class="form-control mb-2" name="name" value="{{ $user->name }}">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <div class="col-md-12 col-sm-12  form-group has-feedback">
                <input readonly type="email" name="email" class="form-control  mb-2" id="inputSuccess4"
                    value="{{ $user->email }}">
                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <div class="col-md-12 col-sm-12  form-group has-feedback">
                <input type="text" class="form-control mb-2" name="designation" value="{{ $user->designation }}">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>
            <x-input-error :messages="$errors->get('designation')" class="mt-2" />



            <div class="ln_solid"></div>
            <div class="">

            </div>
            <div class="form-group row">
                <div class="col-md-12 col-sm-12  offset-md-12">

                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>

        </form>


    </div>
</div>
