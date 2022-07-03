<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <title>Signin | Astro Pandit - Admin panel</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,maximum-scale=1"
    />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/site.min.css')}}" />
  </head>
  <body class="layout-row">
  @php

        if( isset( $_COOKIE['email']  ) ){
            $c_email = $_COOKIE["email"];
        } else{
            $c_email = "";
        }

        if( isset( $_COOKIE['password']  ) ){
        $c_pass = $_COOKIE["password"];
        } else{
            $c_pass = "";
        }

        if( isset( $_COOKIE['remember']  ) ){
        $c_rem = $_COOKIE["remember"];
        } else{
            $c_rem = "";
        }
        
    @endphp
    <div class="flex">
      <div class="w-xl w-auto-sm mx-auto py-5">
        <div class="p-4 d-flex flex-column h-100">
          <a href="index.html" class="navbar-brand align-self-center"
            ><svg
              width="32"
              height="32"
              viewBox="0 0 512 512"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
            >
              <g class="loading-spin" style="transform-origin: 256px 256px">
                <path
                  d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"
                ></path>
              </g>
            </svg>
            <span class="hidden-folded d-inline l-s-n-1x align-self-center"
              >Astro Pandit</span
            ></a
          >
        </div>
        <div class="card">
          <div id="content-body">
            <div class="p-3 p-md-5">
              <h5>Welcome back</h5>
              <p class="text-danger">{{Session::get('error-message')}}</p>
                    <p class="text-success">{{Session::get('success-message')}}</p>
              <p>
                <small class="text-muted">Login to manage your account</small>
              </p>
              <form data-toggle="validator" role="form" method="post" action="{{url('admin-panel/validateLogin')}}"
              >
              @csrf
                <div class="form-group">
                  <label>Email</label
                  ><input
                    type="email" name="email"
                    class="form-control" value="{{$c_email}}"
                    placeholder="Enter email"
                  />
                </div>
                <div class="form-group">
                  <label>Password</label
                  ><input
                    type="password" name="password" value="{{$c_pass}}"
                    class="form-control"
                    placeholder="Password"
                  />
                  <div class="my-3 text-right">
                    <a href="forgot-password.html" class="text-muted"
                      >Forgot password?</a
                    >
                  </div>
                </div>
                <div class="checkbox mb-3">
                  <label class="ui-check"
                    ><input type="checkbox" name="remember" id="remember" {{ $c_rem?'checked' : '' }}/><i></i> Remember me</label
                  >
                </div>
                <button type="submit" class="btn btn-primary  btn-block">
                  Sign in
                </button>
                <!-- <div>
                  Do not have an account?
                  <a href="signup.1.html" class="text-primary">Sign up</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
        <div class="text-center text-muted">&copy; Copyright. Astro Pandit</div>
      </div>
    </div>
    <script src="{{ asset('admin/assets/js/site.min.js')}}"></script>
  </body>
 
</html>
