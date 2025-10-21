<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">User System Tracking Details</h4>
            <table class="table">
                <tr>
                    <th>IP Address:</th>
                    <td>{{ $tracking->ip_address }}</td>
                </tr>
                <tr>
                    <th>Browser:</th>
                    <td>{{ $tracking->browser }}</td>
                </tr>
                <tr>
                    <th>Platform:</th>
                    <td>{{ $tracking->platform }}</td>
                </tr>
                <tr>
                    <th>Device:</th>
                    <td>{{ $tracking->device }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $tracking->email ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>City:</th>
                    <td>{{ $tracking->city ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>State:</th>
                    <td>{{ $tracking->state ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Country:</th>
                    <td>{{ $tracking->country ?? 'N/A' }}</td>
                </tr>
            </table>

            <h4 class="mt-4">Product Ranks</h4>
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Preferences</th>
                        <th>Rank 1 Product</th>
                        <th>Rank 2 Product</th>
                        <th>Rank 3 Product</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tracking->userSystemProductRanks as $rank)
                        <tr>
                            <!-- Serial Number -->
                            <td>{{ $loop->iteration }}</td>

                            <!-- Preferences -->
                            <td>
                                @php
                                    $preferences = json_decode($rank->preferences, true);
                                @endphp
                                @if (is_array($preferences))
                                    <table class="table table-bordered">
                                        @foreach ($preferences as $key => $value)
                                            <tr>
                                                <th>{{ ucfirst(str_replace('_', ' ', $key)) }}</th>
                                                <td>{{ is_array($value) ? implode(', ', $value) : $value }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @else
                                    <p>No preferences available</p>
                                @endif
                            </td>

                            <!-- Rank 1 Product -->
                            <td>
                                <strong>{{ $rank->rankOneProduct->name ?? 'N/A' }}</strong><br>
                                Price: {{ $rank->rankOneProduct->price ?? 'N/A' }}<br>
                            </td>

                            <!-- Rank 2 Product -->
                            <td>
                                <strong>{{ $rank->rankTwoProduct->name ?? 'N/A' }}</strong><br>
                                Price: {{ $rank->rankTwoProduct->price ?? 'N/A' }}<br>
                            </td>

                            <!-- Rank 3 Product -->
                            <td>
                                <strong>{{ $rank->rankThreeProduct->name ?? 'N/A' }}</strong><br>
                                Price: {{ $rank->rankThreeProduct->price ?? 'N/A' }}<br>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No Product Ranks Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>



        </div>
    </div>
</x-admin-layout>
