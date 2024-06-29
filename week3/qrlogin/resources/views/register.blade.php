<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required>
            @error('username')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" required>
            @error('firstname')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" required>
            @error('lastname')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>
