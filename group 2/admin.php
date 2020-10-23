<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="firstpage_des.css">
</head>

<body>
    <div class="session">
        <?php
        session_start();
        echo "Hello  Admin";
        ?>
    </div>
    <div class="jumbotron text-center text-primary">
        <h2>
            Computer Science
        </h2>
        <hr>
        <h2>
            Membership Site
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
            <ul class="navbar-nav navbar-right">

                <div class="dropdown">
                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
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
    <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
            <li data-target="#video-carousel-example2" data-slide-to="1"></li>
            <li data-target="#video-carousel-example2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <video class="video-fluid" autoplay loop muted>
                        <source src="1.mp4" />
                    </video>
                    <div class="mask rgba-indigo-light"></div>
                </div>
                <div class="carousel-caption">
                    <div class="animated fadeInDown">
                        <h1 class="h3-responsive">Quote for today:
                            <p>The best programs are written so that computing machines can perform them quickly and so that human beings can understand them clearly. A programmer is ideally an essayist who works with traditional aesthetic and literary forms as well as mathematical concepts, to communicate the way that an algorithm works and to convince a reader that the results will be correct.</p>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view">
                    <video class="video-fluid" autoplay loop muted>
                        <source src="2.mp4" />
                    </video>
                    <div class="mask rgba-purple-slight"></div>
                </div>
                <div class="carousel-caption">
                    <div class="animated fadeInDown">
                        <h2 class="h3-responsive">Quote for today:
                            <p>“A computer is like a violin. You can imagine a novice trying ﬁrst a phonograph and then a violin. The latter, he says, sounds terrible. That is the argument we have heard from our humanists and most of our computer scientists. Computer programs are good, they say, for particular purposes, but they aren’t ﬂexible. Neither is a violin, or a typewriter, until you learn how to use it.”
                            </p>
                            ― Marvin Minsky</h2>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view">
                    <video class="video-fluid" autoplay loop muted>
                        <source src="5.mp4" type="video/mp4" />
                    </video>
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <div class="animated fadeInDown">
                        <h1 class="h3-responsive">Quote for today:
                            <p>The secret of living a life of excellence is merely a matter of thinking thoughts of excellence. Really, it's a matter of programming our minds with the kind of information that will set us free. </p>
                            ― Charles R. Swindoll </h1>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <footer class="bg-dark">© 2019 CSMC</footer>
    ?>
</body>

</html>