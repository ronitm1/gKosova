@extends('layouts.admin')

@section('content')

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">  {{__('Register')}}
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your Personal Info-s to register</p>
                </div>

                <div class="card-body">
                  <form role="form" method="POST" action="{{ route('register')}}">

                    @csrf  
                  <!--   NAME -->
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">{{__('name')}}</label>
                      <input for="name" id="name" name="name" type="text" class="form-control" value="{{old('name')}}" required autocomplete="name" autofocus>
                    </div>




                 <!--   SURNAME-->
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">{{__('surname')}}</label>
                        <input for="surname" id="surname" name="surname" type="text" class="form-control" value="{{old('surname')}}" required>

                   @error('surname')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                    @enderror
                </div>



                       <!--   USERNAME   -->
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">{{__('username')}}</label>
                        <input for="username" id="username" name="username" type="text" class="form-control" value="{{old('username')}}" required>           
                    
                 @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                      @enderror
                   </div>


            <!--  EMAIL  -->
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">{{__('email')}}</label>
                      <input for="email" id="email" name="email" type="email" class="form-control" {{old('email')}} required autocomplete="email">

                   @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>


             <!--   PASSWORD  -->
                    <div class="input-group input-group-outline mb-3">
                              <label class="form-label">{{__('password')}}</label>
                 <input for="password" type="password" class="form-control" name="password" required autocomplete="new-password">


                      @error('password')
                          <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                    </div>
                      
                    <!--   password_confirmation  -->

                    <div class="input-group input-group-outline mb-3">
                         <label class="form-label">{{__('password_confirmation')}}</label>
                         <input for="password_confirmation" id="password_confirmation" name="confirm_password" type="password" class="form-control" required>
                    </div>


                    @error('confirm_password')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                   @enderror

                 <!--  PHONE  -->
             <div class="input-group input-group-outline mb-3">
                    <label class="form-label">{{__('phone')}} </label>
                    <input for="phone" id="phone" type="tel" class="form-control" @error('phone') is-invalid @enderror name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                       
                   @error('phone')
                      <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                 </div>



                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    
                    <div class="text-center">
                      <button id="button" type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                        {{__('register')}}</button>
                       
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="{{route('login')}}">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>


@endsection
