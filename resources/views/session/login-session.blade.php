@extends('layouts.user_type.guest')

@section('content')
<style>
  body {
    background-image: url("assets/img/flatlay.jpeg");
    background-repeat: no-repeat;
    background-size:cover
  }
</style>
<body>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="d-none d-md-block">
              <div class="row mt-4">
                <div class="col-md-6">
                  <div class="d-flex h-100">
                    <div class="card-body">
                      <form role="form" method="POST" action="/session">
                        @csrf
                        <label>Email</label>
                          <div class="mb-2">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="riskirianputra@gmail.com" aria-label="Email" aria-describedby="email-addon">
                              @error('email')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                              @enderror
                          </div>
                     
                          <label for="basic-url" class="form-label">Password</label>
                              <div class="input-group mb-3">                               
                                <input type="password" class="form-control" id="myInput" aria-describedby="basic-addon3" value="jambu123" name="password">                              
                                <button class="input-group-text btn btn-outline-transparent" type="button" id="button-addon2"><i class="far fa-eye-slash" id="togglePassword"   onclick="myFunction()"></i></button>
                              </div>
                        
                          <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../assets/img/efektifpro.png" width="100%" />
                </div>
              </div>
            </div>
            <div class="d-sm-block d-md-none">
              <div class="row mt-4">
                <div class="col-md-6 mb-3">
                  <img src="../assets/img/efektifpro.png" width="100%" />
                </div>
                  <div class="col-md-6">
                    <div class="d-flex h-100">
                      <div class="card-body">
                        <form role="form" method="POST" action="/session">
                          @csrf
                          <label>Email</label>
                            <div class="mb-3">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="riskiriansadsadputra@gmail.com" aria-label="Email" aria-describedby="email-addon">
                                @error('email')
                                  <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                          <label>Password</label>
                            <div class="mb-3">
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="jambu123" aria-label="Password" aria-describedby="password-addon">
                              <button class="btn btn-outline-dark" type="button" id="button-addon2"><i class="far fa-eye-slash" id="togglePassword"   onclick="myFunction1()"></i></button>                               
                            </div>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
@endsection

<script>

    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function myFunction1() {
        var x = document.getElementById("myInput1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
   
</script>