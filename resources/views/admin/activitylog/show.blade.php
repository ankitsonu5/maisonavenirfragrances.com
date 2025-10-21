<x-admin-layout>

    <div class="container mt-3">
        <div class="card shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-secondary">Activity Log</h3>
                    <a href="{{ route('admin.' . $module . '.index') }}" class="btn btn-dark">
                        <i class="bx bx-undo"></i> Back to Activity Log
                    </a>
                </div>

                <div class="border-top pt-3">
                    <h4 class="mb-3">Activity Log Details</h4>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <th>Causer Model</th>
                                    <td>
                                        <p class="badge text-bg-primary fs-6"> {{ $activityLog->causer_type }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Causer</th>
                                    <td>{{ optional($activityLog->causer)->name }}</td>
                                </tr>
                                <tr>
                                    <th>Event</th>
                                    <td>{{ $activityLog->description }}</td>
                                </tr>
                                <tr>
                                    <th>Subject Model</th>
                                    <td>
                                        <p class="badge text-bg-primary fs-6">{{ $activityLog->subject_type }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>{{ optional($activityLog->subject)->title }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ $activityLog->created_at->format('d M Y') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5>Changes:</h5>
                    <div class="table-responsive">
                        <table class="table table table-bordered mb-0 align-middle">
                            <thead class="table-secondary">
                                <tr>
                                    <th> <b>Key</b></th>
                                    <th> <b>Previous Value</b></th>
                                    <th> <b>New Value</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $attributes = $activityLog->properties['attributes'] ?? [];
                                $oldValues = $activityLog->properties['old'] ?? [];
                                @endphp

                                @foreach ($attributes as $key => $value)
                                <tr>
                                    <td> <b> {{ $key }}</b></td>
                                    <td class="text-danger"> {!! $oldValues[$key] ?? '' !!}</td>
                                    <td class="text-success">{!! $value !!}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
