<div class="table-actions d-flex align-items-center gap-3 fs-6">
    @can($module . '-show')
        <a href="{{ route('admin.' . $module . '.show', $list) }}" class="text-primary" data-bs-toggle="tooltip"
            data-bs-placement="bottom" aria-label="Views" data-bs-original-title="Views"><i class="bi bi-eye-fill"></i></a>
        @endcan @can($module . '-edit')
        <a href="{{ route('admin.' . $module . '.edit', $list) }}" class="text-primary" data-bs-toggle="tooltip"
            data-bs-placement="bottom" aria-label="Edit" data-bs-original-title="Edit"><i class="bi bi-pencil-fill"></i></a>
    @endcan
    @can($module . '-delete')
        {!! Form::open([
            'method' => 'delete',
            'route' => ['admin.' . $module . '.destroy', $list->id],
            'enctype' => 'multipart/form-data',
            'id' => 'form',
            'files' => true,
        ]) !!}

        <a type="submit" onclick="confirmDelete(this);" class="text-danger" data-bs-toggle="tooltip"
            data-bs-placement="bottom" aria-label="Delete" data-bs-original-title="Delete"><i
                class="bi text-danger bi-trash-fill"></i></a>
        {!! Form::close() !!}
    @endcan
</div>
