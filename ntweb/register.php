<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="register.css" rel="stylesheet">
    <style>
      .error {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
        display: block;
      }
      input.error {
        border-color: #dc3545;
      }
    </style>
  </head>
  <body>

    <div class="login-card">
      <h1 class="login-title">Register</h1>
      
      <form id="registerForm">
        <div class="mb-3 input-wrapper">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
          <i class="bi bi-person icon"></i>
        </div>

        <div class="mb-3 input-wrapper">
          <input type="email" name="email" class="form-control" placeholder="Email Address" required>
          <i class="bi bi-envelope icon"></i>
        </div>

        <div class="mb-3 input-wrapper">
          <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
          <i class="bi bi-telephone icon"></i>
        </div>

        <div class="mb-3 input-wrapper">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          <i class="bi bi-lock icon"></i>
        </div>

        <div class="mb-3 input-wrapper">
          <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
          <i class="bi bi-shield-lock icon"></i>
        </div>

        <button type="submit" class="btn btn-login w-100">Register</button>

        <div class="text-center mt-3 register-text">
          <span>Already have an account? </span>
          <a href="index.php" class="register-link">Login Here</a>
        </div>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#registerForm").validate({
                rules:{
                    username:{
                        required: true,
                        minlength: 7,
                        maxlength: 10
                    },
                    email:{
                        required: true,
                        email: true
                    },
                    phone:{
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 11
                    },
                    password:{
                        required: true,
                        minlength: 6
                    },
                    confirm_password:{
                        required: true,
                        equalTo: "#password"
                    }
                },
                messages:{
                    username:{
                        required: "Please enter your username",
                        minlength: "Username must be at least 7 characters long",
                        maxlength: "Username cannot exceed 10 characters"
                    },
                    email:{
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    phone:{
                        required: "Please enter your phone number",
                        digits: "Please enter only numbers",
                        minlength: "Phone number must be at least 10 digits",
                        maxlength: "Phone number cannot exceed 11 digits"
                    },
                    password:{
                        required: "Please enter your password",
                        minlength: "Password must be at least 6 characters long"
                    },
                    confirm_password:{
                        required: "Please confirm your password",
                        equalTo: "Passwords do not match"
                    }
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element.closest('.input-wrapper'));
                },
            });
        });
    </script>
  </body>
</html>