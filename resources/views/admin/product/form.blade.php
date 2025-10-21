<div class="container">
    <div class="row">
        <b>SEO</b>
        {{-- Meta Title --}}
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('meta_title', 'Meta Title', ['class' => 'col-form-label text-capitalize label-align']) !!}
                {!! Form::text('meta_title', null, ['class' => 'form-control', 'id' => 'meta_title']) !!}
            </div>
        </div>

        {{-- Meta Description --}}
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('meta_description', 'Meta Description', [
                    'class' => 'col-form-label text-capitalize label-align',
                ]) !!}
                {!! Form::text('meta_description', null, ['class' => 'form-control', 'id' => 'meta_description']) !!}
            </div>
        </div>

        {{-- H1 Tag --}}
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('hone', 'H1 Tag', ['class' => 'col-form-label text-capitalize label-align']) !!}
                {!! Form::text('hone', null, ['class' => 'form-control', 'id' => 'hone']) !!}
            </div>
        </div>
        <br>
        <br>


        <b class="mt-3">Produt Detail</b>
        {{-- Collection Name --}}
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('name', 'Select collection', [
                    'class' => 'col-form-label text-capitalize
                                                                label-align',
                ]) !!}
                {!! collectionDropdown('collection_id', $row->collection_id, ['class' => 'form-control'], false) !!}
            </div>
        </div>
        {{-- Name --}}
        <div class="col-md-6">
            {!! Form::label('name', 'Product Name', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        {{-- price --}}
        <div class="col-md-6">
            {!! Form::label(
                'price',
                'Enter Product Price
            ',
                [
                    'class' => 'col-form-label text-capitalize
                                                label-align',
                ],
            ) !!}
            {!! Form::text('price', null, ['class' => 'form-control', 'id' => 'price']) !!}
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
         {{-- price --}}
         <div class="col-md-6">
            {!! Form::label(
                'fragrance',
                'Enter Product fragrance
            ',
                [
                    'class' => 'col-form-label text-capitalize
                                                label-align',
                ],
            ) !!}
            {!! Form::text('fragrance', null, ['class' => 'form-control', 'id' => 'fragrance']) !!}
            @error('fragrance')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        {{-- short_description --}}
        <div class="col-md-6">
            {!! Form::label('short_description', 'Short Description', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::textarea('short_description', null, ['class' => 'form-control', 'id' => 'short_description']) !!}
            @error('short_description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        {{-- description --}}
        <div class="col-md-6">
            {!! Form::label('description', 'Long Description', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        {{-- Card Image --}}

        <div class="col-md-6">
            {!! Form::label('card_image', 'Product listing page image ', ['class' => 'col-form-label text-capitalize label-align']) !!}
            {!! Form::file('card_image', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_card_image', @$row->card_image) !!}
            @if (@$row->card_image && File::exists('storage/' . $module . '/' . @$row->card_image))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->card_image), null, [
                    'title' => @$row->card_image,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('card_image')" class="mt-2" />
        </div>



        {{-- Fragrance Icon --}}
        <div class="col-md-6">
            {!! Form::label('pakking_image', ' Home page card image', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::file('pakking_image', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_pakking_image', @$row->pakking_image) !!}
            @if (@$row->pakking_image && File::exists('storage/' . $module . '/' . @$row->pakking_image))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->pakking_image), null, [
                    'title' => @$row->pakking_image,
                    'width' => '90px',
                    'class' => 'bg-dark',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('pakking_image')" class="mt-2" />
        </div>
        <hr>

        {{-- Name --}}
        <div class="col-md-12 mb-3">
            {!! Form::label('ai_text', 'Ai Text', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::text('ai_text', null, ['class' => 'form-control', 'id' => 'ai_text']) !!}
            @error('ai_text')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <hr>

        {{--
        <div class="col-md-4">
            {!! Form::label('aqua', 'Top Icone Yellow Color ', [
            'class' => 'col-form-label text-capitalize
            label-align',
            ]) !!}
            {!! Form::file('aqua', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_aqua', @$row->aqua) !!}
            @if (@$row->aqua && File::exists('storage/' . $module . '/' . @$row->aqua))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->aqua), null, [
            'title' => @$row->aqua,
            'width' => '90px',
            ]) }}
            @endif
            <x-input-error :messages="$errors->get('aqua')" class="mt-2" />
        </div>

        <div class="col-md-4">
            {!! Form::label('woody', 'heart icone Yellow Color', [
            'class' => 'col-form-label text-capitalize
            label-align',
            ]) !!}
            {!! Form::file('woody', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_woody', @$row->woody) !!}
            @if (@$row->woody && File::exists('storage/' . $module . '/' . @$row->woody))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->woody), null, [
            'title' => @$row->woody,
            'width' => '90px',
            ]) }}
            @endif
            <x-input-error :messages="$errors->get('woody')" class="mt-2" />
        </div>

        <div class="col-md-4">
            {!! Form::label('floral', 'Base icone Yellow Color', [
            'class' => 'col-form-label text-capitalize
            label-align',
            ]) !!}
            {!! Form::file('floral', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_floral', @$row->floral) !!}
            @if (@$row->floral && File::exists('storage/' . $module . '/' . @$row->floral))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->floral), null, [
            'title' => @$row->floral,
            'width' => '90px',
            ]) }}
            @endif
            <x-input-error :messages="$errors->get('floral')" class="mt-2" />
        </div> --}}


        {{--
        <hr>




        <div class="col-md-4">
            {!! Form::label('top_white_icone', 'Top Icon White Color', ['class' => 'col-form-label text-capitalize
            label-align']) !!}
            {!! Form::file('top_white_icone', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_top_white_icone', @$row->top_white_icone) !!}
            @if (@$row->top_white_icone && File::exists('storage/' . $module . '/' . @$row->top_white_icone))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->top_white_icone), null, ['title' =>
            @$row->top_white_icone,
            'width' => '90px']) }}
            @endif
            <x-input-error :messages="$errors->get('top_white_icone')" class="mt-2" />
        </div>

        <div class="col-md-4">
            {!! Form::label('heart_white_icone', 'Heart Icone White Color', ['class' => 'col-form-label text-capitalize
            label-align'])
            !!}
            {!! Form::file('heart_white_icone', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_heart_white_icone', @$row->heart_white_icone) !!}
            @if (@$row->heart_white_icone && File::exists('storage/' . $module . '/' . @$row->heart_white_icone))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->heart_white_icone), null, ['title' =>
            @$row->heart_white_icone, 'width' => '90px']) }}
            @endif
            <x-input-error :messages="$errors->get('heart_white_icone')" class="mt-2" />
        </div>

        <div class="col-md-4">
            {!! Form::label('base_icone', 'base Icone White Color', ['class' => 'col-form-label text-capitalize
            label-align'])
            !!}
            {!! Form::file('base_white_icone', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_base_white_icone', @$row->base_white_icone) !!}
            @if (@$row->base_white_icone && File::exists('storage/' . $module . '/' . @$row->base_white_icone))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->base_white_icone), null, ['title' =>
            @$row->base_white_icone, 'width' => '90px']) }}
            @endif
            <x-input-error :messages="$errors->get('base_white_icone')" class="mt-2" />
        </div> --}}





        {{--
        <div class="col-md-4">
            {!! Form::label('top_icone', 'Top Icon Black Color', [
            'class' => 'col-form-label text-capitalize
            label-align',
            ]) !!}
            {!! Form::file('top_icone', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_top_icone', @$row->top_icone) !!}
            @if (@$row->top_icone && File::exists('storage/' . $module . '/' . @$row->top_icone))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->top_icone), null, [
            'title' => @$row->top_icone,
            'width' => '90px',
            ]) }}
            @endif
            <x-input-error :messages="$errors->get('top_icone')" class="mt-2" />
        </div>

        <div class="col-md-4">
            {!! Form::label('heart_icone', 'Heart Icone Black Color', [
            'class' => 'col-form-label text-capitalize
            label-align',
            ]) !!}
            {!! Form::file('heart_icone', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_heart_icone', @$row->heart_icone) !!}
            @if (@$row->heart_icone && File::exists('storage/' . $module . '/' . @$row->heart_icone))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->heart_icone), null, [
            'title' => @$row->heart_icone,
            'width' => '90px',
            ]) }}
            @endif
            <x-input-error :messages="$errors->get('heart_icone')" class="mt-2" />
        </div>

        <div class="col-md-4">
            {!! Form::label('base_icone', 'base Icone Black Color', [
            'class' => 'col-form-label text-capitalize
            label-align',
            ]) !!}
            {!! Form::file('base_icone', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_base_icone', @$row->base_icone) !!}
            @if (@$row->base_icone && File::exists('storage/' . $module . '/' . @$row->base_icone))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->base_icone), null, [
            'title' => @$row->base_icone,
            'width' => '90px',
            ]) }}
            @endif
            <x-input-error :messages="$errors->get('base_icone')" class="mt-2" />
        </div> --}}





        {{-- Maine Image --}}
        <div class="col-md-3">
            {!! Form::label('maine_image', ' Product detailed page gallery image  1', ['class' => 'col-form-label text-capitalize label-align']) !!}
            {!! Form::file('maine_image', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_maine_image', @$row->maine_image) !!}
            @if (@$row->maine_image && File::exists('storage/' . $module . '/' . @$row->maine_image))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->maine_image), null, [
                    'title' => @$row->maine_image,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('maine_image')" class="mt-2" />
        </div>

        {{-- Left Image --}}
        <div class="col-md-3">
            {!! Form::label('left_image', 'Product detailed page gallery image  2', ['class' => 'col-form-label text-capitalize label-align']) !!}
            {!! Form::file('left_image', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_left_image', @$row->left_image) !!}
            @if (@$row->left_image && File::exists('storage/' . $module . '/' . @$row->left_image))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->left_image), null, [
                    'title' => @$row->left_image,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('left_image')" class="mt-2" />
        </div>

        {{-- Right Up Image --}}
        <div class="col-md-3">
            {!! Form::label('right_up_image', 'Product detailed page gallery image  3', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::file('right_up_image', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_right_up_image', @$row->right_up_image) !!}
            @if (@$row->right_up_image && File::exists('storage/' . $module . '/' . @$row->right_up_image))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->right_up_image), null, [
                    'title' => @$row->right_up_image,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('right_up_image')" class="mt-2" />
        </div>

        {{-- Right Down Image --}}
        <div class="col-md-3">
            {!! Form::label('right_dowen_image', 'Product detailed page gallery image  4', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::file('right_dowen_image', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_right_dowen_image', @$row->right_dowen_image) !!}
            @if (@$row->right_dowen_image && File::exists('storage/' . $module . '/' . @$row->right_dowen_image))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->right_dowen_image), null, [
                    'title' => @$row->right_dowen_image,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('right_dowen_image')" class="mt-2" />
        </div>
        <hr>
        {{-- Fragrance Icon --}}
        {{-- <div class="col-md-3">
            {!! Form::label('fragrance_icone', 'Fragrance Icon', [
            'class' => 'col-form-label text-capitalize
            label-align',
            ]) !!}
            {!! Form::file('fragrance_icone', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_fragrance_icone', @$row->fragrance_icone) !!}
            @if (@$row->fragrance_icone && File::exists('storage/' . $module . '/' . @$row->fragrance_icone))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->fragrance_icone), null, [
            'title' => @$row->fragrance_icone,
            'width' => '90px',
            'class' => 'bg-dark',
            ]) }}
            @endif
            <x-input-error :messages="$errors->get('fragrance_icone')" class="mt-2" />
        </div> --}}

        {{-- Fragrance Title --}}
        <div class="col-md-4">
            {!! Form::label('fragrance_title', 'Fragrance Title', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::text('fragrance_title', null, ['class' => 'form-control', 'id' => 'fragrance_title']) !!}
            @error('fragrance_title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        {{-- Fragrance Banner --}}
        <div class="col-md-4">
            {!! Form::label('fragrance_banner', 'Fragrance Banner', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::file('fragrance_banner', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_fragrance_banner', @$row->fragrance_banner) !!}
            @if (@$row->fragrance_banner && File::exists('storage/' . $module . '/' . @$row->fragrance_banner))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->fragrance_banner), null, [
                    'title' => @$row->fragrance_banner,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('fragrance_banner')" class="mt-2" />
        </div>

        {{-- Fragrance Banner Title --}}
        <div class="col-md-4">
            {!! Form::label('fragrance_banner_title', 'Fragrance Banner Title', [
                'class' => 'col-form-label
                                                text-capitalize label-align',
            ]) !!}

            {{-- {!! Form::text('fragrance_banner_title', null, ['class' => 'form-control', 'id' =>
            'fragrance_banner_title']) !!} --}}


            {!! Form::file('fragrance_banner_title', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_fragrance_banner_title', @$row->fragrance_banner_title) !!}
            @if (@$row->fragrance_banner_title && File::exists('storage/' . $module . '/' . @$row->fragrance_banner_title))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->fragrance_banner_title), null, [
                    'title' => @$row->fragrance_banner_title,
                    'width' => '90px',
                ]) }}
            @endif



            @error('fragrance_banner_title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <hr>
        {{-- Top Note Icon --}}
        {{-- <div class="col-md-3">
            {!! Form::label('topnote_icone', 'Top Note Icon', ['class' => 'col-form-label text-capitalize label-align'])
            !!}
            {!! Form::file('topnote_icone', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_topnote_icone', @$row->topnote_icone) !!}
            @if (@$row->topnote_icone && File::exists('storage/' . $module . '/' . @$row->topnote_icone))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->topnote_icone), null, [
            'title' => @$row->topnote_icone,
            'width' => '90px',
            'class' => 'bg-dark',
            ]) }}
            @endif
            <x-input-error :messages="$errors->get('topnote_icone')" class="mt-2" />
        </div> --}}

        {{-- Top Note Title --}}
        <div class="col-md-4">
            {!! Form::label('topnote_title', 'Top Note Title', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::text('topnote_title', null, ['class' => 'form-control', 'id' => 'topnote_title']) !!}
            @error('topnote_title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        {{-- Top Note Banner --}}
        <div class="col-md-4">
            {!! Form::label('topnote_banner', 'Top Note Banner', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::file('topnote_banner', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_topnote_banner', @$row->topnote_banner) !!}
            @if (@$row->topnote_banner && File::exists('storage/' . $module . '/' . @$row->topnote_banner))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->topnote_banner), null, [
                    'title' => @$row->topnote_banner,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('topnote_banner')" class="mt-2" />
        </div>

        {{-- Top Note Banner Title --}}
        <div class="col-md-4 mb-2">
            {!! Form::label('topnote_banner_title', 'Top Note Banner Mobile', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {{-- {!! Form::text('topnote_banner_title', null, ['class' => 'form-control', 'id' =>
            'topnote_banner_title'])
            !!} --}}



            {!! Form::file('topnote_banner_title', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_topnote_banner_title', @$row->topnote_banner_title) !!}
            @if (@$row->topnote_banner_title && File::exists('storage/' . $module . '/' . @$row->topnote_banner_title))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->topnote_banner_title), null, [
                    'title' => @$row->topnote_banner_title,
                    'width' => '90px',
                ]) }}
            @endif




            @error('topnote_banner_title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <hr>
        {{-- Heart Note Icon --}}
        {{-- <div class="col-md-4">
            {!! Form::label('heartnote_icone', 'Heart Note Icon', [
            'class' => 'col-form-label text-capitalize
            label-align',
            ]) !!}
            {!! Form::file('heartnote_icone', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_heartnote_icone', @$row->heartnote_icone) !!}
            @if (@$row->heartnote_icone && File::exists('storage/' . $module . '/' . @$row->heartnote_icone))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->heartnote_icone), null, [
            'title' => @$row->heartnote_icone,
            'width' => '90px',
            'class' => 'bg-dark',
            ]) }}
            @endif
            <x-input-error :messages="$errors->get('heartnote_icone')" class="mt-2" />
        </div> --}}

        {{-- Heart Note Title --}}
        <div class="col-md-4">
            {!! Form::label('heartnote_title', 'Heart Note Title', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::text('heartnote_title', null, ['class' => 'form-control', 'id' => 'heartnote_title']) !!}
            @error('heartnote_title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        {{-- Heart Note Banner --}}
        <div class="col-md-4">
            {!! Form::label('heartnote_banner', 'Heart Note Banner', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::file('heartnote_banner', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_heartnote_banner', @$row->heartnote_banner) !!}
            @if (@$row->heartnote_banner && File::exists('storage/' . $module . '/' . @$row->heartnote_banner))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->heartnote_banner), null, [
                    'title' => @$row->heartnote_banner,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('heartnote_banner')" class="mt-2" />
        </div>

        {{-- Heart Note Banner Title --}}
        <div class="col-md-4">
            {!! Form::label('heartnote_banner_title', 'Heart Note Banner Mobile', [
                'class' => 'col-form-label
                                                text-capitalize label-align',
            ]) !!}



            {!! Form::file('heartnote_banner_title', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_heartnote_banner_title', @$row->heartnote_banner_title) !!}
            @if (@$row->heartnote_banner_title && File::exists('storage/' . $module . '/' . @$row->heartnote_banner_title))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->heartnote_banner_title), null, [
                    'title' => @$row->heartnote_banner_title,
                    'width' => '90px',
                ]) }}
            @endif





            {{-- {!! Form::text('heartnote_banner_title', null, ['class' => 'form-control', 'id' =>
            'heartnote_banner_title']) !!} --}}
            @error('heartnote_banner_title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <hr>
        {{-- Base Note Icon --}}
        {{-- <div class="col-md-4">
            {!! Form::label('basenote_icone', 'Base Note Icon', [
            'class' => 'col-form-label text-capitalize
            label-align',
            ]) !!}
            {!! Form::file('basenote_icone', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_basenote_icone', @$row->basenote_icone) !!}
            @if (@$row->basenote_icone && File::exists('storage/' . $module . '/' . @$row->basenote_icone))
            {{ Html::image(asset('storage/' . $module . '/' . @$row->basenote_icone), null, [
            'title' => @$row->basenote_icone,
            'width' => '90px',
            'class' => 'bg-dark',
            ]) }}
            @endif
            <x-input-error :messages="$errors->get('basenote_icone')" class="mt-2" />
        </div> --}}

        {{-- Base Note Title --}}
        <div class="col-md-4">
            {!! Form::label('basenote_title', 'Base Note Title', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::text('basenote_title', null, ['class' => 'form-control', 'id' => 'basenote_title']) !!}
            @error('basenote_title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        {{-- Base Note Banner --}}
        <div class="col-md-4">
            {!! Form::label('basenote_banner', 'Base Note Banner', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::file('basenote_banner', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_basenote_banner', @$row->basenote_banner) !!}
            @if (@$row->basenote_banner && File::exists('storage/' . $module . '/' . @$row->basenote_banner))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->basenote_banner), null, [
                    'title' => @$row->basenote_banner,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('basenote_banner')" class="mt-2" />
        </div>

        {{-- Base Note Banner Title --}}
        <div class="col-md-4 mb-2">
            {!! Form::label('basenote_banner_title', 'Base Note Banner Mobile', [
                'class' => 'col-form-label
                                                text-capitalize label-align',
            ]) !!}

            {{-- {!! Form::text('basenote_banner_title', null, ['class' => 'form-control', 'id' =>
            'basenote_banner_title'])
            !!} --}}



            {!! Form::file('basenote_banner_title', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_basenote_banner_title', @$row->basenote_banner_title) !!}
            @if (@$row->basenote_banner_title && File::exists('storage/' . $module . '/' . @$row->basenote_banner_title))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->basenote_banner_title), null, [
                    'title' => @$row->basenote_banner_title,
                    'width' => '90px',
                ]) }}
            @endif




            @error('basenote_banner_title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <hr>






        <div class="col-md-4 mb-2">
            {!! Form::label('vegan', 'Vegan', ['class' => 'col-form-label text-capitalize label-align']) !!}
            {!! Form::text('vegan', null, ['class' => 'form-control', 'id' => 'vegan']) !!}
            @error('vegan')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-4">
            {!! Form::label('natural_oils', 'Natural Oils', ['class' => 'col-form-label text-capitalize label-align']) !!}
            {!! Form::text('natural_oils', null, ['class' => 'form-control', 'id' => 'natural_oils']) !!}
            @error('natural_oils')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-4">
            {!! Form::label('essential_oils', 'Essential Oils', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::text('essential_oils', null, ['class' => 'form-control', 'id' => 'essential_oils']) !!}
            @error('essential_oils')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <hr>



        <div class="col-md-6">
            {!! Form::label('insidethefragran', 'Natural Oils', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::textarea('insidethefragran', null, [
                'class' => 'form-control',
                'id' => 'insidethefragran',
                'rows' => '3',
            ]) !!}
            @error('insidethefragran')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <div class="col-md-6">
            {!! Form::label('essential_oil', 'Essential Oils', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::textarea('essential_oil', null, ['class' => 'form-control', 'id' => 'essential_oil', 'rows' => '3']) !!}
            @error('essential_oil')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>



        <div class="col-md-3">
            {!! Form::label('keywords', 'Product Keywords', ['class' => 'col-form-label text-capitalize label-align']) !!}
            {!! Form::text('keywords', null, ['class' => 'form-control', 'id' => 'keywords']) !!}
            @error('keywords')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>



        <div class="col-md-3">
            {!! Form::label('fragrance_family', 'fragrance family', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::text('fragrance_family', null, ['class' => 'form-control', 'id' => 'fragrance_family']) !!}
            @error('fragrance_family')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>



        <div class="col-md-3">
            {!! Form::label('buy_url', ' Amazon URL ', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::text('buy_url', null, ['class' => 'form-control', 'id' => 'buy_url']) !!}
            @error('buy_url')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <div class="col-md-3">
            {!! Form::label('uk_buy_url', 'All Beauty UK URL ', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::text('uk_buy_url', null, ['class' => 'form-control', 'id' => 'uk_buy_url']) !!}
            @error('uk_buy_url')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>



        {{--
        <div class="col-md-3">
            {!! Form::label('best_time_to_use', 'Best Time To Use', [
            'class' => 'col-form-label text-capitalize
            label-align',
            ]) !!}
            {!! Form::text('best_time_to_use', null, ['class' => 'form-control', 'id' => 'best_time_to_use']) !!}
            @error('best_time_to_use')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div> --}}




        {{-- Status --}}
        <div class="col-md-4">
            {!! Form::label('status', 'Status *', ['class' => 'col-form-label text-capitalize label-align']) !!}
            <div class="form-check">
                {!! Form::radio('status', '1', isset($row) && $row->status == '1', ['class' => 'form-check-input', 'id' => 'status_enabled']) !!}
                {!! Form::label('status_enabled', 'Enabled', ['class' => 'form-check-label']) !!}
            </div>
            <div class="form-check">
                {!! Form::radio('status', '0', isset($row) && $row->status == '0', ['class' => 'form-check-input', 'id' => 'status_disabled']) !!}
                {!! Form::label('status_disabled', 'Disabled', ['class' => 'form-check-label']) !!}
            </div>
            @error('status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>






        {{-- primary_image --}}
        <div class="col-md-4">
            {!! Form::label('primary_image', 'AI Fragrance Finder Result Image', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::file('primary_image', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_primary_image', @$row->primary_image) !!}
            @if (@$row->primary_image && File::exists('storage/' . $module . '/' . @$row->primary_image))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->primary_image), null, [
                    'title' => @$row->primary_image,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('primary_image')" class="mt-2" />
        </div>


        {{-- primary_imagetwo --}}
        {{-- <div class="col-md-4">
            {!! Form::label('primary_imagetwo', 'Primary Image Two', [
                'class' => 'col-form-label text-capitalize label-align',
            ]) !!}
            {!! Form::file('primary_imagetwo', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_primary_imagetwo', @$row->primary_imagetwo) !!}
            @if (@$row->primary_imagetwo && File::exists('storage/' . $module . '/' . @$row->primary_imagetwo))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->primary_imagetwo), null, [
                    'title' => @$row->primary_imagetwo,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('primary_imagetwo')" class="mt-2" />
        </div> --}}

        {{-- primary_imagethree --}}
        {{-- <div class="col-md-4">
            {!! Form::label('primary_imagethree', 'Primary Image Three', [
                'class' => 'col-form-label text-capitalize label-align',
            ]) !!}
            {!! Form::file('primary_imagethree', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_primary_imagethree', @$row->primary_imagethree) !!}
            @if (@$row->primary_imagethree && File::exists('storage/' . $module . '/' . @$row->primary_imagethree))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->primary_imagethree), null, [
                    'title' => @$row->primary_imagethree,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('primary_imagethree')" class="mt-2" />
        </div> --}}





        {{-- secondary_image --}}
        <div class="col-md-4">
            {!! Form::label('secondary_image', 'AI Fragrance Finder layer with image ', [
                'class' => 'col-form-label text-capitalize
                                                label-align',
            ]) !!}
            {!! Form::file('secondary_image', ['class' => 'form-control']) !!}
            {!! Form::hidden('old_secondary_image', @$row->secondary_image) !!}
            @if (@$row->secondary_image && File::exists('storage/' . $module . '/' . @$row->secondary_image))
                {{ Html::image(asset('storage/' . $module . '/' . @$row->secondary_image), null, [
                    'title' => @$row->secondary_image,
                    'width' => '90px',
                ]) }}
            @endif
            <x-input-error :messages="$errors->get('secondary_image')" class="mt-2" />
        </div>


    </div>
</div>
