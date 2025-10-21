<div class="col-md-6">
    {!! Form::label('title', 'Blog Title
', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
    @error('title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-6">
    {!! Form::label('image', 'Blog Thumbnail
 *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image', @$row->image) !!}
    @if (@$row->image && File::exists('storage/' . $module . '/' . @$row->image))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image), null, ['class' => 'bg-dark', 'title' => @$row->image, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image')" class="mt-2" />
</div>
<div class="col-md-12">
    {!! Form::label('description', 'Description', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control editor', 'id' => 'description']) !!}
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>





<div class="col-md-12">
    {!! Form::label('section_one', 'Section One', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('section_one', null, ['class' => 'form-control editor', 'id' => 'section_one']) !!}
    @error('section_one')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

{{-- <div class="col-md-6">
    {!! Form::label('image_one', 'Image One *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_one', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_one', @$row->image_one) !!}
    @if (@$row->image_one && File::exists('storage/' . $module . '/' . @$row->image_one))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_one), null, ['class' => 'bg-dark', 'title' => @$row->image_one, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image_one')" class="mt-2" />
</div> --}}

<div class="col-md-12">
    {!! Form::label('section_two', 'Section Two', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('section_two', null, ['class' => 'form-control editor', 'id' => 'section_two']) !!}
    @error('section_two')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

{{-- <div class="col-md-6">
    {!! Form::label('image_two', 'Image Two *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_two', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_two', @$row->image_two) !!}
    @if (@$row->image_two && File::exists('storage/' . $module . '/' . @$row->image_two))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_two), null, ['class' => 'bg-dark', 'title' => @$row->image_two, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image_two')" class="mt-2" />
</div> --}}

<div class="col-md-12">
    {!! Form::label('section_three', 'Section Three', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('section_three', null, ['class' => 'form-control editor', 'id' => 'section_three']) !!}
    @error('section_three')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

{{-- <div class="col-md-6">
    {!! Form::label('image_three', 'Image Three *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_three', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_three', @$row->image_three) !!}
    @if (@$row->image_three && File::exists('storage/' . $module . '/' . @$row->image_three))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_three), null, ['class' => 'bg-dark', 'title' => @$row->image_three, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image_three')" class="mt-2" />
</div> --}}

<div class="col-md-12">
    {!! Form::label('section_four', 'Section Four', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('section_four', null, ['class' => 'form-control editor', 'id' => 'section_four']) !!}
    @error('section_four')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

{{-- <div class="col-md-6">
    {!! Form::label('image_four', 'Image Four *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_four', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_four', @$row->image_four) !!}
    @if (@$row->image_four && File::exists('storage/' . $module . '/' . @$row->image_four))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_four), null, ['class' => 'bg-dark', 'title' => @$row->image_four, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image_four')" class="mt-2" />
</div> --}}

<div class="col-md-12">
    {!! Form::label('section_five', 'Section Five', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('section_five', null, ['class' => 'form-control editor', 'id' => 'section_five']) !!}
    @error('section_five')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

{{-- <div class="col-md-6">
    {!! Form::label('image_five', 'Image Five *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_five', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_five', @$row->image_five) !!}
    @if (@$row->image_five && File::exists('storage/' . $module . '/' . @$row->image_five))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_five), null, ['class' => 'bg-dark', 'title' => @$row->image_five, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image_five')" class="mt-2" />
</div> --}}

<div class="col-md-12">
    {!! Form::label('section_six', 'Section Six', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('section_six', null, ['class' => 'form-control editor', 'id' => 'section_six']) !!}
    @error('section_six')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

{{-- <div class="col-md-6">
    {!! Form::label('image_six', 'Image Six *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_six', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_six', @$row->image_six) !!}
    @if (@$row->image_six && File::exists('storage/' . $module . '/' . @$row->image_six))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_six), null, ['class' => 'bg-dark', 'title' => @$row->image_six, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image_six')" class="mt-2" />
</div> --}}

<div class="col-md-12">
    {!! Form::label('section_seven', 'Section Seven', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('section_seven', null, ['class' => 'form-control editor', 'id' => 'section_seven']) !!}
    @error('section_seven')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

{{-- <div class="col-md-6">
    {!! Form::label('image_seven', 'Image Seven *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_seven', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_seven', @$row->image_seven) !!}
    @if (@$row->image_seven && File::exists('storage/' . $module . '/' . @$row->image_seven))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_seven), null, ['class' => 'bg-dark', 'title' => @$row->image_seven, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image_seven')" class="mt-2" />
</div> --}}

<div class="col-md-12">
    {!! Form::label('section_eight', 'Section Eight', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('section_eight', null, ['class' => 'form-control editor', 'id' => 'section_eight']) !!}
    @error('section_eight')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

{{-- <div class="col-md-6">
    {!! Form::label('image_eight', 'Image Eight *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_eight', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_eight', @$row->image_eight) !!}
    @if (@$row->image_eight && File::exists('storage/' . $module . '/' . @$row->image_eight))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_eight), null, ['class' => 'bg-dark', 'title' => @$row->image_eight, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image_eight')" class="mt-2" />
</div> --}}

<div class="col-md-12">
    {!! Form::label('section_nine', 'Section Nine', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('section_nine', null, ['class' => 'form-control editor', 'id' => 'section_nine']) !!}
    @error('section_nine')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

{{-- <div class="col-md-6">
    {!! Form::label('image_nine', 'Image Nine *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_nine', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_nine', @$row->image_nine) !!}
    @if (@$row->image_nine && File::exists('storage/' . $module . '/' . @$row->image_nine))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_nine), null, ['class' => 'bg-dark', 'title' => @$row->image_nine, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image_nine')" class="mt-2" />
</div> --}}

<div class="col-md-12">
    {!! Form::label('section_ten', 'Section Ten', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('section_ten', null, ['class' => 'form-control editor', 'id' => 'section_ten']) !!}
    @error('section_ten')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

{{-- <div class="col-md-6">
    {!! Form::label('image_ten', 'Image Ten *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::file('image_ten', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image_ten', @$row->image_ten) !!}
    @if (@$row->image_ten && File::exists('storage/' . $module . '/' . @$row->image_ten))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image_ten), null, ['class' => 'bg-dark', 'title' => @$row->image_ten, 'width' => '150px']) }}
    @endif
    <x-input-error :messages="$errors->get('image_ten')" class="mt-2" />
</div> --}}




<div class="col-md-4">
    {!! Form::label('status', 'status *', [
        'class' => 'col-form-label text-capitalize label-align',
    ]) !!}
    {!! Form::select('status', ['1' => 'Enabled', '0' => 'Disabled'], $row->status, [
        'class' => '  form-control  ',
    ]) !!}
</div>
