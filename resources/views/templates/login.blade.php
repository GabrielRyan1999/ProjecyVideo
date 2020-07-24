<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="{{asset ('assets/images/logo.png')}}" type="image" />
    <title>SMA Kolese DeBritto Yogyakarta </title>

    <!-- Bootstrap -->
    <link href="{{asset ('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset ('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset ('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset ('assets/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset ('assets/css/custom.min.css') }}" rel="stylesheet">
  </head>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <h1>Login</h1>
              <div>
              @if(\Session::has('alert'))
              <div class="alert alert-danger">
              <div>{{Session::get('alert')}}</div>
              </div>
              @endif
              @if(\Session::has('alert-success'))
              <div class="alert alert-success">
                <div>{{Session::get('alert-success')}}</div>
              </div>
              @endif
              <form action="{{ url('/loginPost')}}" method="post">
              {{csrf_field() }}
                <input type="email" class="form-control" placeholder="Username" id="email" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Login</button>
              </div>
            </form>
              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">Belum Punya Akun?
                  <a href="#signup" class="to_register"> Buat Akun </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>SMA Kolese DeBritto Yogyakarta</h1>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            
              <h1>Buat Akun</h1>
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/registerPost') }}" method="post">
                {{ csrf_field() }}
              <div>
                <input type="text" class="form-control" placeholder="Nama" id="name" name="name"/>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="email" id="email" name="email"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" />
              </div>
              <div>
              <input type="password" class="form-control" placeholder="Confirm Password" id="confirmation" name="confirmation">
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Sudah Punya Akun ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>SMA Kolese DeBritto Yogyakarta</h1>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>