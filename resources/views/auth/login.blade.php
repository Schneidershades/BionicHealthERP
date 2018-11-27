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
         <div class="card-title text-uppercase text-center py-2">Login</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputEmailId" class="sr-only">Health Institute Email</label>
                  <input type="text" id="exampleInputEmailId"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Health Institute Email">
                  <div class="form-control-position">
                      <i class="icon-envelope-open"></i>
                  </div>
                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
               </div>
              </div>
              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputPassword" class="sr-only">Password</label>
                  <input type="text" id="exampleInputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
                  @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
               </div>
              </div>

             <button type="submit" class="btn btn-danger shadow-danger btn-block waves-effect waves-light">Sign Up</button>
             <div class="text-center pt-3">
                 <hr>
                 <p class="text-muted">Don't  have an account? <a href="{{ route('register') }}"> Signup here</a></p>
             </div>
        </form>
     </div>
    </div>
</div>
@endsection