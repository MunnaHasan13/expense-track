
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div class="card shadow">
              <div class="card-body">
                <h3 class="card-title text-center mb-4"> Sign Up </h3>
                <form action="{{ route('register') }}" method="POST">
                  @csrf
                  <!-- Name Input -->
                  <div class="mb-3">
                    <label for="name" class="form-label"> Name </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                  </div>
                  <!-- Email Input -->
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                  </div>
                  <!-- Password Input -->
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                  </div> 
                  <!-- Confirm Password Input -->
                  <div class="mb-3">
                    <label for="password-confirm" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirm password" required>
                  </div>
                  <!-- Submit Button -->
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary"> Register </button>
                  </div>
                  <!-- Login Link -->
                  <div class="text-center mt-3">
                    <p>Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login here</a></p>
                  </div>

                  <!-- validation errors -->
                  @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error )
                                    <li class="my-2">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                  @endif
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
