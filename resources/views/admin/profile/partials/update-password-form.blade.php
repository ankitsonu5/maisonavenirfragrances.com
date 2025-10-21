
<div class="x_panel">
    <div class="x_title">
        <h4>Update Password <small><br>Ensure your account is using a long, random password to stay secure.</small></h4>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br>
        <form method="post" action="{{ route('admin.password.update') }}" class="form-label-left input_mask">
            @csrf
            @method('put')
            <div class="col-md-12 col-sm-12  form-group has-feedback">
                <input type="text" class="form-control  mb-2" name="current_password"  placeholder="Current Password">
                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                    @error('current_password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

            </div>

            <div class="col-md-12 col-sm-12  form-group has-feedback">
                <input type="text" class="form-control mb-2 " name="password"  placeholder="password">
                <i class="fa fa-unlock-alt	 form-control-feedback left" aria-hidden="true"></i>
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-md-12 col-sm-12  form-group has-feedback">
                <input type="text" class="form-control mb-2 "  name="password_confirmation" placeholder="password confirmation">
                <i class="	fa fa-lock	 form-control-feedback left" aria-hidden="true"></i>
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group row">
                <div class="col-md-12 col-sm-12 ">
                    <a href="{{ route('admin.dashboard') }}" class="btn  text-light btn-primary">Cancel</a>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
