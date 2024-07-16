
<! DOCTYPE html>  
<html lang="en" >  
<head>  
  <meta charset="UTF-8">  
  <title>  Login Form   
</title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
</head>  
<style>  
body {  
  background-color: #007BFF; 
  font-family: 'Muli', sans-serif;  
}  
h1 {  
  color: #fff;  
  padding-bottom: 2rem;  
  font-weight: bold;  
}  
a {  
  color: #333;  
}  
a:hover {  
  color: #E8D426;  
  text-decoration: none;  
}  
.form-control:focus {  
    color: #000;  
    background-color: #fff;  
    border: 2px solid #E8D426;  
    outline: 0;  
    box-shadow: none;  
}  
.btn {  
  background-color: #007BFF; 
  border: #E8D426;  
}  
.btn:hover {  
  background-color: #007BFF;
  border: #E8D426;  
}  
</style>  
<body>  
<div class="pt-5">  
  <h1 class="text-center">AUTHENTICATION</h1>  
<div class="container">  
                <div class="row">  
                    <div class="col-md-5 mx-auto">  
                        <div class="card card-body">  
 <form id="submitForm" action="newlog(bca).php" method="post" >  

                   <div class="form-group required">  
              <lSabel for="username"> Enter your UserName </lSabel>  
             <input type="text" class="form-control text-lowercase" id="username" name="username" >  
               </div>                      
       <div class="form-group required">  
    <label class="d-flex flex-row align-items-center" > Enter your Password   
     <a class="ml-auto border-link small-xl" href="#"> Forget Password? </a> </label>  
<input type="password" class="form-control"  name="password" >  
       </div>  
     <div class="form-group mt-4 mb-4">  
        <div class="custom-control custom-checkbox">  
            <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" data-parsley-multiple="remember-me">  
   <label clss="custom-control-label" for="remember-me"> Remember me? </label>  
                </div>  
              </div>  
         <div class="form-group pt-1">  
      <button class="btn btn-primary btn-block" type="submit"> Log In </button>  
                  </div>  
               </form>  
             <p class="small-xl pt-3 text-center">  
       <span class="text-muted"> Don't have an account? </span>  
        <a href="sign.php"> Sign up </a>  
                        </p>  
                        </div>  
                    </div>  
                </div>  
            </div>  
</div>  
</body>  
</html>  