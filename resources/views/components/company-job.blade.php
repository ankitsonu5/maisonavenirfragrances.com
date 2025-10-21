{{-- Use This Componant <x-company-job /> --}}


<div class="col-md-6">
    <x-input-label for="companie_id" :value="__('Company')" />
    {!! Company('companie_id', $row->admission['companie_id'] ?? null) !!}
    <x-input-error :messages="$errors->get('companie_id')" class="mt-2" />
</div>



<div class="col-md-6">
    <x-input-label for="job_id" :value="__('Job')" />
    <select disabled name="job_id" class="form-control" id="job_id">
    </select>
    <x-input-error :messages="$errors->get('job_id')" class="mt-2" />
</div>
@push('script')
    <script>
        $('#company').change(function() {
            var selectedIds = $(this).val();

            if (selectedIds) {
                $.ajax({
                    type: "POST",
                    url: "/admin/company_job",
                    data: {
                        selectedIds: selectedIds,
                        _token: csrfToken
                    },
                    success: function(response) {

                        if (response.data.length > 0) {
                            $('#job_id').prop('disabled', false);

                            response.data.forEach(function(resource) {
                                console.log(resource.designation);
                                $('#job_id').append($('<option>', {
                                    value: resource.id,
                                    text: resource.designation
                                }));
                            });
                        } else {
                            var Toast = Swal.mixin({
                                toast: true,
                                type: "error",
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 5000
                            });
                            Toast.fire({
                                icon: 'error',
                                title: 'No Any Job'
                            })
                            $('#job_id').empty();
                            $('#job_id').prop('disabled', true);

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
