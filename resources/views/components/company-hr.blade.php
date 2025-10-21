<div class="col-md-6">
    <x-input-label for="companie_id" :value="__('Company')" />
    {!! Company('companie_id', $row->admission['companie_id'] ?? null) !!}
    <x-input-error :messages="$errors->get('companie_id')" class="mt-2" />
</div>


<div class="col-md-6">
    <x-input-label for="humanresource_id " :value="__('Human Resource')" />
    <select disabled name="humanresource_id" class="form-control" id="humanresource_id">

    </select>
    <x-input-error :messages="$errors->get('humanresource_id')" class="mt-2" />
</div>

@push('script')
    <script>
        $('#company').change(function() {
            var selectedIds = $(this).val();
            console.log(selectedIds);
            if (selectedIds) {
                $.ajax({
                    type: "POST",
                    url: "/admin/company_hr",
                    data: {
                        selectedIds: selectedIds,
                        _token: csrfToken
                    },
                    success: function(response) {

                        if (response.data.length > 0) {
                            $('#humanresource_id').prop('disabled', false);

                            response.data.forEach(function(resource) {
                                $('#humanresource_id').append($('<option>', {
                                    value: resource.id,
                                    text: resource.name
                                }));
                            });
                        } else {
                            $('#humanresource_id').empty();
                            $('#humanresource_id').prop('disabled', true);

                        }
                    },
                    error: function(xhr, status, error) {
                        showmessage(response.message, 'error')
                    }
                });
            }
        });
        $('#company').change()
    </script>
@endpush
