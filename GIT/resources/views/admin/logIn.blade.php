<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
  main .card {
  background-color: #3475;
}

body {
  background: #fe8c00; /* fallback for old browsers */
  background: -webkit-linear-gradient(
    to right,
    rgba(83, 83, 255, 1),
    rgba(54,171,226,0.5)
  ); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(
    to right,
    rgba(83, 83, 255, 1),
    rgba(54,171,226,0.5)
  ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  color: white;
}

h3 {
  font-family: Times New Roman;
  font-weight: bold;
}
hr {
  border-bottom: solid white 1px;
}

.btn {
  background: #0f2027; /* fallback for old browsers */
  background: -webkit-linear-gradient(
    to right,
    rgba(54,171,226,0.5),
    rgba(83, 83, 255, 1)
  ); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(
    to right,
    rgba(54,171,226,0.5),
    rgba(83, 83, 255, 1)
  ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
 
input {
  background-color: #3475 !important;
  color: white !important;
}

::placeholder {
  color: white !important;
}

    </style>
  </head>
  <body>
    <main class="container my-5">
        <div class="row">
          <section class="col-md-6 my-5 offset-md-3">
              @if (session()->has('Status'))
                <div class="alert alert-success">
                    {{session()->get('Status')}}
                </div>
              @endif
              @if ($errors->any())

                  <div class="alert alert-danger">

                      <ul>

                          @foreach ($errors->all() as $error)

                              <li>{{ $error }}</li>

                          @endforeach

                      </ul>

                  </div>

              @endif

            <div class="card shadow p-5">
              <form method="POST" action="{{route('login')}}">

                <h3 class="text-center text-uppercase mb-4">Login</h3>
                <hr>
                @csrf
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" placeholder="Email" class="form-control">
                </div>

                <label for="Password">Password</label>
                <div class="input-group mb-3">
                  <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" aria-label="Enter Password" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <span class="input-group-text text-primary" id="basic-addon2"><i class="fas fa-eye" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>

                <button class="btn btn-block btn-secondary rounded-pill mt-3">Login</button>

              </form>
            </div>
          </section>
        </div>
      </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
  $("#basic-addon2").click(function () {
    let passwordField = $("#password");
    let passwordFieldAttr = passwordField.attr("type");

    if (passwordFieldAttr == "password") {
      passwordField.attr("type", "text");
      $(this).html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
    } else {
      passwordField.attr("type", "password");
      $(this).html('<i class="fa fa-eye" aria-hidden="true"></i>');
    }
  });
});

    </script>
  </body>
</html>
