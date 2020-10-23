<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="firstpage_des.css">
</head>

<body>

  <div class="jumbotron text-center text-primary">
    <h2>
      Babcock University
    </h2>
    <hr>
    <h2>
      Online Booksite
    </h2>
  </div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <form class="nav-link" action="admin1.php">
            <input type="submit" value="Home" class="btn btn-outline-primary disable">
          </form>
        </li>
        <li class="nav-item">
          <form class="nav-link" action="aboutadmin.php">
            <input type="submit" value="About us" class="btn btn-outline-primary">
          </form>
        </li>
        <li class="nav-item">
          <form class="nav-link" action="contactadmin.php">
            <input type="submit" value="Contact" class="btn btn-outline-primary">
          </form>
        </li>
      </ul>
    
      <ul class="navbar-nav">
        <li class="nav-item ">
          <form class="nav-link" action="admin1.php">
            <input type="submit" value="Getting Started " class="btn btn-outline-primary disable">
          </form>
</ul>
</li>

      <ul class="navbar-nav navbar-right">


        <div class="dropdown">
          <button type="button" class="btn btn-outline-primary dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown">
            Admin
          </button>
          <div class="dropdown-menu">
            <li class="nav-item">
              <form class="dropdown-item" action="data_in_admin.php">
                <input type="submit" value="View users" class="btn btn-dark">
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
            </li>
          </div>
        </div>

        <li class="nav-item">
          <form class="nav-link" action="firstpage.php">
            <input type="submit" value="Log out" class="btn btn-outline-primary">
          </form>
        </li>


      </ul>
    </div>

  </nav>
  