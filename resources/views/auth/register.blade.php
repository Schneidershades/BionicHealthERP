<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Bionic Health ERP - Register with us </title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
       <div class="card-authentication2 mx-auto my-3 animated slideInLeft">
        <div class="card-group">
            <div class="card mb-0">
               <div class="bg-signup2"></div>
                <div class="card-img-overlay rounded-left my-5">
                 <h2 class="text-white">Welcome Back</h2>
                 <h1 class="text-white">Bionic Health ERP </h1>
                 <p class="card-text text-white pt-3">This is an Erntreprise Resource Planning Syetem that is best fit for data Health Management Organisation & Health Care Centers to improve digitally on data processing on all aspects of the health organization .</p>
             </div>
            </div>

            <div class="card mb-0">
                <div class="card-body">
                    <div class="card-content p-3">
                     <div class="text-center">
                        <img src="assets/images/logo-icon.png"/>
                      </div>
                     <div class="card-title text-uppercase text-center py-2">Sign Up</div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                              <label for="exampleInputName" class="sr-only">Health Institute Name</label>
                              <input type="text" id="exampleInputName" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Health Institute Name">
                              <div class="form-control-position">
                                  <i class="icon-user"></i>
                              </div>
                           </div>
                          </div>
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                              <label for="exampleInputEmailId" class="sr-only">Health Institute Email</label>
                              <input type="text" id="exampleInputEmailId"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Health Institute Email">
                              <div class="form-control-position">
                                  <i class="icon-envelope-open"></i>
                              </div>
                           </div>
                          </div>
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                              <label for="exampleInputPassword" class="sr-only">Password</label>
                              <input type="text" id="exampleInputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                              <div class="form-control-position">
                                  <i class="icon-lock"></i>
                              </div>
                           </div>
                          </div>
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                              <label for="exampleInputRetryPassword" class="sr-only">Retry Password</label>
                              <input type="password" id="exampleInputRetryPassword"  class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                              <div class="form-control-position">
                                  <i class="icon-lock"></i>
                              </div>
                           </div>
                          </div>

                          <div class="form-group mb-0">
                           <div class="demo-checkbox">
                            <input type="checkbox" id="user-checkbox" class="filled-in chk-col-danger" checked="" />
                            <label for="user-checkbox">I Accept terms & conditions</label>
                          </div>
                         </div>

                         <button type="submit" class="btn btn-danger shadow-danger btn-block waves-effect waves-light">Sign Up</button>
                         <div class="text-center pt-3">
                             <hr>
                             <p class="text-muted">Already have an account? <a href="{{ route('login') }}"> Sign In here</a></p>
                         </div>
                    </form>
                 </div>
                </div>
            </div>
         </div>
        </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    </div><!--wrapper-->
    
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
    
</body>

</html>

