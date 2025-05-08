@extends('admin.admin_dashboard')
@section('admin')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Firebase Users</h5>
                    <a href="{{ route('firebase.users.sync') }}" class="btn btn-primary">
                        <i class="fas fa-sync-alt"></i> Sync from Firebase
                    </a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Firebase UID</th>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Verified</th>
                                    <th>Last Sign In</th>
                                    <th>Synced At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td class="text-truncate" style="max-width: 150px;">{{ $user->firebase_uid }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->display_name ?? '-' }}</td>
                                        <td>
                                            @if($user->email_verified)
                                                <span class="badge badge-success">Yes</span>
                                            @else
                                                <span class="badge badge-warning">No</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->last_sign_in_at ? $user->last_sign_in_at->format('Y-m-d H:i') : 'Never' }}</td>
                                        <td>{{ $user->updated_at->format('Y-m-d H:i') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No users found. Try syncing from Firebase.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection