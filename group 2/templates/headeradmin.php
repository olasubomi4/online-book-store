<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="C:/subomi/mysite/bootstrap-4.4.1-dist/css/bootstrap.min.css">

  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="firstpage_des.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="jumbotron text-center ">
    <a href="adminhome.php">
      <img src="logo.png" width="90px" height="80px">
    </a>
    <h2>
      CACVICS INCORPORATION
    </h2>
    <hr>
    <h2>
      Online Booksite
    </h2>
  </div>
  <div class="free">


    <nav class="navbar navbar-expand-sm">
      <div class="container-fluid">

        <ul class="navbar-nav">


        </ul>

        <div class="row">


          <ul class="navbar-nav navbar-right">
            <div class="btnn-css">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                  Admin
                </button>
                <div class="dropdown-menu">
                  <li class="nav-item">
                    <form class="dropdown-item" action="data_in_admin.php">
                      <input type="submit" value="View userns" class="btn btn-dark">
                    </form>

                    <form class="dropdown-item" action="add.php">
                      <input type="submit" value="Add user" class="btn btn-dark">
                    </form>
                    <form class="dropdown-item" action="update.php">
                      <input type="submit" value="Update user" class="btn btn-dark">

                    </form>
                    <form class="dropdown-item" action="delete.php">
                      <input type="submit" value="Delete user" class="btn btn-dark">

                    </form>
                    <form class="dropdown-item" action="normaluser.php">
                      <input type="submit" value="Add book" class="btn btn-dark">
                    </form>
                    <form class="dropdown-item" action="admindelete.php">
                      <input type="submit" value="Delete book" class="btn btn-dark">
                    </form>
                    <form class="dropdown-item" action="downloads.php">
                      <input type="submit" value="Number of downloads" class="btn btn-dark">
                    </form>
                    <form class="dropdown-item" action="adminviewall.php">
                      <input type="submit" value="All books" class="btn btn-dark">
                    </form>
                  </li>
                </div>
              </div>
            </div>

            <li class="nav-item">
              <form class="nav-link" action="signin.php">
                <input type="submit" value="Log out" class="btn btn-outline-primary">
              </form>
            </li>

          </ul>
        </div>
      </div>

    </nav>

  </div>