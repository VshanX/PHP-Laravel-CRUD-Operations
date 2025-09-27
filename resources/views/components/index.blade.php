<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="main-container">
            <h1 class="page-title">
                <i class="bi bi-people-fill me-3"></i>
                User Management
            </h1>
            
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            
            <!-- Create User Button -->
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <div>
                    <p class="text-muted mb-0">Manage your users efficiently...</p>
                </div>
                <a href="{{ route('userCreate') }}" class="btn btn-add-user">
                    <i class="bi bi-plus-circle me-2"></i>Add New User
                </a>
            </div>

            <!-- Users Table -->
            <div class="table-responsive">
                <table class="table modern-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tasks as $task)
                        <tr>
                            <td><span class="badge bg-light text-dark">#{{ $task->id }}</span></td>
                            <td><strong>{{ $task->name }}</strong></td>
                            <td>{{ $task->age }} years</td>
                            <td>
                                <a href="{{ route('userUpdate', $task->id) }}" class="btn btn-action btn-edit">
                                    <i class="bi bi-pencil me-1"></i>Edit
                                </a>
                                <a href="{{ route('userDestroy', $task->id) }}" class="btn btn-action btn-delete" 
                                   onclick="return confirm('Are you sure you want to delete this user?')">
                                    <i class="bi bi-trash me-1"></i>Delete
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="empty-state">
                                <i class="bi bi-inbox display-4 text-muted mb-3"></i>
                                <br>
                                No users found. <a href="{{ route('userCreate') }}">Create your first user</a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>