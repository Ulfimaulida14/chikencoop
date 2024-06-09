<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smart Coop - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header, .card-footer {
            border-radius: 15px 15px 0 0;
            background-color: #007bff;
            color: white;
        }
        .card-footer {
            border-radius: 0 0 15px 15px;
        }
        .btn-primary {
            border-radius: 25px;
        }
        .form-control {
            border-radius: 10px;
        }
        .form-check-label {
            padding-left: 1.25rem;
        }
    </style>
</head>
<body>
    <div class="col-md-4">
        <div class="card login-card">
            <div class="card-header text-center">
                <h3>Smart Coop - Login</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/auth/login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="text-white">Forgot password?</a><br>
                <span>Don't have an account? <a href="#" class="text-white">Sign up</a></span>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
