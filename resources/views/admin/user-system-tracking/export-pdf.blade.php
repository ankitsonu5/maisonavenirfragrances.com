<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>User System Tracking Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
            margin-bottom: 15px;
        }

        th,
        td {
            border: 1px solid #444;
            padding: 6px 8px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        /* Zebra striping for rows */
        tbody tr:nth-child(even) {
            background-color: #fafafa;
        }

        /* Nested table styling */
        .nested-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
            font-size: 12px;
            background-color: #fff;
        }

        .nested-table th,
        .nested-table td {
            border: 1px solid #ccc;
            padding: 4px 6px;
        }

        .nested-table th {
            background-color: #f1f1f1;
            font-weight: normal;
            color: #333;
        }
    </style>

</head>

<body>
    <h2>User System Tracking Report</h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>IP Address</th>
                <th>Browser</th>
                <th>Platform</th>

                <th>Location</th>
                <th>Products & Preferences</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $tracking)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tracking->ip_address }}</td>
                    <td>{{ $tracking->browser }} {{ $tracking->browser_version }}</td>
                    <td>{{ $tracking->platform }} {{ $tracking->platform_version }}</td>

                    <td>{{ $tracking->city }}, {{ $tracking->state }}, {{ $tracking->country }}</td>
                    <td>
                        @foreach ($tracking->userSystemProductRanks as $rank)
                            <strong>Instance #{{ $loop->iteration }}</strong>
                            <table class="nested-table" border="1" width="100%">
                                <tr>
                                    <th>Preferences</th>
                                    <td>
                                        @php
                                            $preferences = json_decode($rank->preferences, true);
                                        @endphp
                                        @if (is_array($preferences))
                                            @foreach ($preferences as $key => $value)
                                                {{ ucfirst(str_replace('_', ' ', $key)) }}:
                                                {{ is_array($value) ? implode(', ', $value) : $value }}<br>
                                            @endforeach
                                        @else
                                            No preferences
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Rank 1 Product</th>
                                    <td>{{ $rank->rankOneProduct->name ?? 'N/A' }} -
                                        {{ $rank->rankOneProduct->price ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Rank 2 Product</th>
                                    <td>{{ $rank->rankTwoProduct->name ?? 'N/A' }} -
                                        {{ $rank->rankTwoProduct->price ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Rank 3 Product</th>
                                    <td>{{ $rank->rankThreeProduct->name ?? 'N/A' }} -
                                        {{ $rank->rankThreeProduct->price ?? '' }}</td>
                                </tr>
                            </table>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
