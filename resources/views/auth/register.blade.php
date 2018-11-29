@extends('auth.layouts.auth')



@section('auth_content')
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
              <!-- <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputName" class="sr-only">Health Institute Name</label>
                  <input type="text" id="exampleInputName" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Health Institute Name">
                  <div class="form-control-position">
                      <i class="icon-user"></i>
                  </div>
               </div>
              </div> -->

              <div class="form-group" data-select2-id="18">
                 <label >Health Institution name</label>
                <select class="form-control single-select">
                    <option>Kwarati Dispensary</option>
                    <option>Natural Health Care Herbal Hospital</option>
                    <option>Stannes Anglican Hospital</option>
                    <option>Joy Clinic And Maternity</option>
                    <option>Pwalamoliye Primary Health Center</option>
                    <option>Jiga Birni Health Facility</option>
                    <option>Dlri Tumba</option>
                    <option>Zenith Hospital And Maternity</option>
                </select>
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

@endsection

@section('auth_stylesheets')
  <!--Select Plugins-->
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
@endsection

@section('auth_scripts')
<!--Select Plugins Js-->
<script src="assets/plugins/select2/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
      $('.single-select').select2();
  });
</script>
@endsection