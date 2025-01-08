<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('//i0.wp.com/gapki.id/en/dir-site/uploads/2022/08/oilpalm_palmoil_staticflickr.com_.jpg?w=1009&ssl=1') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            background: rgba(34, 83, 52, 0.85);
            color: #fff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            border: 1px solid #285840;
        }

        .login-title {
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: bold;
            font-size: 1.7rem;
            color: #a8d5ba;
        }
        .form-label {
            font-weight: bold;
            color: #d1e7d3;
        }

        .form-control {
            background: #f5f5f5;
            border: 1px solid #285840;
            border-radius: 8px;
        }

        .form-control:focus {
            border-color: #60a87d;
            box-shadow: 0 0 5px rgba(96, 168, 125, 0.5);
        }

        .btn-primary {
            background: #60a87d;
            border: none;
            font-weight: bold;
        }

        .btn-primary:hover {
            background: #4e9468;
        }

        ul {
            padding: 0;
            margin-top: 1rem;
            color: #f0b97a;
            list-style-type: square;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2 class="login-title">Login</h2>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" value="{{ old('email') }}" required autofocus autocomplete="email">
                @error('email')
                    <div class="text-danger mt-1" style="font-size: 0.875rem;">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password Anda" required autocomplete="current-password">
                @error('password')
                    <div class="text-danger mt-1" style="font-size: 0.875rem;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>
