<x-admin-layout>

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 card p-3  ">
                @include('admin.profile.partials.update-profile-information-form')
            </div>
            <div class="col-md-12 card p-3  ">
                @include('admin.profile.partials.update-password-form')
            </div>
        </div>
    </div>
</x-admin-layout>
