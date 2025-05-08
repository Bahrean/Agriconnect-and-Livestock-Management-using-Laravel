@extends('admin.admin_dashboard')
@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Market Prices from Firebase</div>

                <div class="card-body">
                    @if($agriexpert)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agriexpert as $firebaseKey => $email)
                                    <tr>
                                        <td>{{ $email['name'] ?? 'N/A' }}</td>
                                        <td>{{ $email['email'] ?? 'N/A' }}</td>
                                        <td>{{ $email['message'] ?? 'N/A' }}</td>
                                        <td>{{ $email['created_at'] ?? 'N/A' }}</td>
                                        <td>
                                            <a href="{{ route('agriexpert.edit', $firebaseKey) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('agriexpert.destroy', $firebaseKey) }}" method="POST" style="display: inline;">
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