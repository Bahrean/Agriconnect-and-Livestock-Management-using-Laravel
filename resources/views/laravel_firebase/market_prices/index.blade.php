@extends('admin.admin_dashboard')
@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Market Prices from Firebase</div>

                <div class="card-body">
                    @if($marketPrices)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Market Location</th>
                                    <th>Date Recorded</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($marketPrices as $firebaseKey => $price)
                                    <tr>
                                        <td>{{ $price['item_name'] ?? 'N/A' }}</td>
                                        <td>{{ isset($price['price']) ? number_format($price['price'], 2) : 'N/A' }}</td>
                                        <td>{{ $price['market_location'] ?? 'N/A' }}</td>
                                        <td>{{ $price['date_recorded'] ?? 'N/A' }}</td>
                                        <td>{{ $price['created_at'] ?? 'N/A' }}</td>
                                        <td>
                                            <a href="{{ route('market-price.edit', $firebaseKey) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('market-price.destroy', $firebaseKey) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No market prices found in Firebase.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection