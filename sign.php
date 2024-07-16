<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
 
      .bg-color{
          background-color: #007BFF;
          font-family: Arial, Helvetica, sans-serif;
      }
      .btn-rounded{
          border-radius: 30px;
      }

    </style>
</head>
<body class="bg-color">
    <section class="container mt-5">
        <div class="row justify-content-md-center">
            <form class="col-md-6 col-sm-12 bg-white p-5 rounded shadow" action="connection.php" method="POST">
                <div class="col-12 text-center">
                    <h3 class="text-primary"><strong>Register Form</strong></h3>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms">
                    <label class="form-check-label" for="terms">I agree terms and conditions.</label>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary btn-rounded w-75">Register Now</button>
                </div>
                
              
            </form>
        </div>
    </section>
</body>
</html>