<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">

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
    <a href="home.php">
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
          <ul class="navbar-nav">
            <li class="nav-item ">

              <form action="searchpagese.php" method="POST" class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search by Title or Author" aria-label="Search" name="search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="search" name="submit-search">Search</button>
              </form>
    

    </ul>
    <div class="dropdown">
      <button type="button" class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
        Select course
      </button>
      <div class="dropdown-menu">
        <li class="nav-item">
          <form class="dropdown-item" action="homecs.php">
            <input type="submit" value="Computer science" class="btn btn-dark">
          </form>
          <form class="dropdown-item" action="homect.php">
            <input type="submit" value="Computer technology" class="btn btn-dark">
          </form>
          <form class="dropdown-item" action="homese.php">
            <input type="submit" value="Software engineering" class="btn btn-dark">
          </form>
          <form class="dropdown-item" action="homecis.php">
            <input type="submit" value="Computer information science" class="btn btn-dark">
          </form>
          <form class="dropdown-item" action="viewall.php">
            <input type="submit" value="All books" class="btn btn-dark">
          </form>
        </li>
      </div>
    </div>
    <li class="nav-item">
      <form class="nav-link" action="signin.php">
        <input type="submit" value="log out" class="btn btn-outline-primary">
      </form>
    </li>

    </ul>
  </div>
  </div>

  </nav>

  </div>