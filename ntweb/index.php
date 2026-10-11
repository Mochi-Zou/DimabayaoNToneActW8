<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spiderman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <style>
      .error {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
      }
      input.error {
        border-color: #dc3545;
      }
    </style>
  </head>
  <body>

    <div class="login-card">
      <h1 class="login-title">Spiderman
      </h1>
      
      <form id="loginForm">
        <div class="mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>

        <div class="mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3 options-row">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
          <a href="#" class="forgot-link">Forgot password?</a>
        </div>

        <button type="submit" class="btn btn-login w-100">Login</button>

        <div class="text-center mt-3 register-text">
          <span>Don't have an account? </span>
          <a href="register.php" class="register-link">Register</a>
        </div>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#loginForm").validate({
                rules:{
                    username:{
                        required: true,
                        minlength: 7,
                        maxlength: 10
                    },
                    password:{
                        required: true,
                        minlength: 6
                    }
                },
                messages:{
                    username:{
                        required: "Please enter your username",
                        minlength: "Username must be at least 7 characters long",
                        maxlength: "Username cannot exceed 10 characters"
                    },
                    password:{
                        required: "Please enter your password",
                        minlength: "Password must be at least 6 characters long"
                    }
                },
                submitHandler: function(form) {
                    window.location.href = 'landingpage.php';
                }
            });
        });
    </script>
  </body>
</html>