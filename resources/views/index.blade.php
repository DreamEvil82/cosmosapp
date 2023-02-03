<!doctype html>
<html lang="en">

<head>
  <title>Cosmos App</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-dark">
  <main class="d-flex justify-content-center">
    <div class="outline mt-5">
        <div class="heading-desc text-white text-center">
            <h1>Cosmos Application</h1>
            <p class="text-grey-900">Welcome, please log in to your dashboard</p>
        </div>
        <div class="loginbox mt-5 rounded-2 border border-2 border-dark p-5 text-start bg-white">
            <form class="mt-2" action="users" method="POST">
              @csrf
                    <label for="Email">Email</label>
                    <input type="email" name="Email" placeholder="Enter your email" class="form-control">

                    <label class="mt-3" for="Password">Pasword</label>
                    <input type="password" name="password" placeholder="Enter your password" class="form-control">

                    <input type="submit" class="mt-3 text-white btn btn-info w-100" value="Signin">
            </form>
            
        </div>
        
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>