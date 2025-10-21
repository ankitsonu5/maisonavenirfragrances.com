{{-- Select Mood --}}
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('mood_id', 'Mood Select', ['class' => 'col-form-label text-capitalize
        label-align']) !!}
        {!! moodDropdown('mood_id', $row->mood_id , ['class' => 'form-control'], false) !!}
        <x-input-error :messages="$errors->get('mood_id')" class="mt-2" />

    </div>
</div>



{{-- Occasion Mood --}}
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Occasion Select', ['class' => 'col-form-label text-capitalize
        label-align']) !!}
        {!! occasionDropdown('occasion_id', $row->occasion_id , ['class' => 'form-control'], false) !!}
        <x-input-error :messages="$errors->get('occasion_id')" class="mt-2" />
    </div>
</div>