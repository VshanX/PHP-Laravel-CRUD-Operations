<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User - User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="page-title">
                <i class="bi bi-person-plus-fill me-3"></i>
                Add New User
            </h1>
            
            <form action="{{ route('userStore') }}" method="POST">
                @csrf
                
                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="form-label">
                        Full Name
                    </label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required 
                           placeholder="Enter user's full name">
                    @error('name')
                        <div class="text-danger">
                            <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Age Field -->
                <div class="mb-4">
                    <label for="age" class="form-label">
                        Age
                    </label>
                    <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" min="1" max="120" required 
                           placeholder="Enter user's age">
                    @error('age')
                        <div class="text-danger">
                            <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-5">
                    <a href="{{ route('index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-2"></i>Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle me-2"></i>Create User
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
