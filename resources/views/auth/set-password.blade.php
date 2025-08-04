<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Set Your Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
        <h4 class="mb-4 text-center">Set Your Password</h4>

        <div class="alert alert-warning d-flex align-items-center" role="alert">
            <strong class="me-2">⚠️</strong>
            <div>
                You're signed in using Google for the first time. Please set your password to enable email login.
            </div>
        </div>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('password.set') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label"><b>Email</b></label>
                <input type="email" id="email" class="form-control" name="email"
                    value="{{ old('email', Auth::user()->email) }}" readonly>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label"><b>New Password</b></label>
                <input type="password" id="password" class="form-control" name="password" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label"><b>Confirm Password</b></label>
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                    required>
            </div>

            <button type="submit" class="btn btn-primary w-100"
                style="background-color: #ff9500; border-color: #ff9500;"
                onmouseover="this.style.backgroundColor='#e6850e'"
                onmouseout="this.style.backgroundColor='#ff9500'"><b>Set
                    Password</b></button>
        </form>
    </div>

</body>

</html>