<div class="col-md-4">
    {!! Form::label('name', 'Name *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-4">
    {!! Form::label('slug', 'Slug *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) !!}
    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-4">
    {!! Form::label('title', 'Title *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
    @error('title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-12">
    {!! Form::label('description', 'Description *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-4">
    <x-input-label for="image" :value="__('Image')" />
    {!! Form::file('image', ['class' => 'form-control']) !!}
    {!! Form::hidden('old_image', @$row->image) !!}
    @if (@$row->image && File::exists('storage/' . $module . '/' . @$row->image))
        {{ Html::image(asset('storage/' . $module . '/' . @$row->image), null, ['title' => @$row->image, 'width' => '300px']) }}
    @endif
    <x-input-error :messages="$errors->get('image')" class="mt-2" />
</div>

<div class="col-md-4">
    {!! Form::label('status', 'Status *', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::select('status', ['1' => 'Enabled', '0' => 'Disabled'], $row->status ?? null, ['class' => 'form-control']) !!}
    @error('status')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-4">
    {!! Form::label('meta_title', 'Meta Title', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control', 'id' => 'meta_title']) !!}
    @error('meta_title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-4">
    {!! Form::label('meta_description', 'Meta Description', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('meta_description', null, ['class' => 'form-control', 'id' => 'meta_description']) !!}
    @error('meta_description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-4">
    {!! Form::label('meta_keywords', 'Meta Keywords', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('meta_keywords', null, ['class' => 'form-control', 'id' => 'meta_keywords']) !!}
    @error('meta_keywords')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-4">
    {!! Form::label('tags', 'Tags', ['class' => 'col-form-label text-capitalize label-align']) !!}
    {!! Form::text('tags', null, ['class' => 'form-control', 'id' => 'tags']) !!}
    @error('tags')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
