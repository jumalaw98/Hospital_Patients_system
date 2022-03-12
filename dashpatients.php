<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient System</title>
    <link rel="stylesheet" href="css/dashstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-secondary">
                <ul class="nav flex-column">
                    <li class="nav-item stylenav ">
                        <a aria-current="page" class="nav-link active" href="index.html">
                            <img src="img/jlchms.logo.png" alt="">
                            <span class="h4 text-white">  </span>
                        </a>
                    </li>
                    <hr>

                    <li class="nav-item stylenav">
                        <a class="nav-link" href="#">
                            <i class="fa fa-dashboard fa-lg text-white"></i>
                            <span class="text-white">Dashboard</span>

                        </a>
                    </li>
                    <hr>
                    <li class="nav-item stylenav">
                        <a class="nav-link" href="doctors.php">
                            <i class="fa fa-calendar-check-o"></i>
                            <span class="text-white">Doctors </span>


                        </a>
                    </li>
                    <li class="nav-item stylenav">
                        <a class="nav-link" href="patients.php">
                            <i class="fa fa-wheelchair"></i>
                            <span class="text-white">Patients</span>

                        </a>
                    </li>
                    <hr>
                    <li class="nav-item stylenav">
                        <a class="nav-link" href="dashboard/appointments.php">
                            <i class="fa fa-calendar"></i>
                            <span class="text-white">Appointment </span>
                        </a>
                    </li>
                    <li class="nav-item stylenav">
                        <a class="nav-link" href="dashboard/departments.php">
                            <i class="fa fa-hospital-o"></i>
                            <span class="text-white">Departments</span>
                        </a>
                    </li>
                    <hr>
                    <li class="nav-item stylenav">
                        <a class="nav-link" href="#">
                            <i class="fa fa-user"></i>
                            <span class="text-white">Employees</span>
                        </a>
                    </li>
                    <li class="nav-item stylenav">
                        <a class="nav-link" href="#">
                            <i class="fa fa-wrench fa-lg text-white"></i>
                            <span class="text-white">Multilevel</span>
                        </a>
                    </li>

                    <li class="nav-item stylenav">
                        <a class="nav-link" href="logout.php">
<!--                            <i class="fa fa-wrench fa-lg text-white"></i>-->
                            <span class="text-white">logout</span>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="col-9 bg-light">
                <div class="row bg-white p-2">

                    <div class="col-7">
                        <nav class="navbar navbar-light">
                            <div class="container-fluid">
<!--                                <form class="d-flex">-->
<!--                                    <input class="col-8 form-control me-2" type="search" placeholder="Search for ... " aria-label="Search">-->
<!--                                    <button class="btn btn-outline-primary" type="submit">Search</button>-->
<!--                                </form>-->
                            </div>
                        </nav>

                    </div>
                    <div class="col-5">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <i class="fa fa-bell fa-lg"></i>
                                                <span class="badge rounded-pill bg-danger ">3+</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <i class="fa fa-envelope fa-lg"></i>
                                                <span class="badge rounded-pill bg-danger">8+</span>

                                            </a>
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    <ul class="list-group">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            No Response?
                                                            <span class="badge bg-primary rounded-pill">14</span>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            Hi
                                                            <span class="badge bg-primary rounded-pill">2</span>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            Okay
                                                            <span class="badge bg-primary rounded-pill">1</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                            user |
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#">
                                                <img class="rounded-circle" src="images/female.svg" alt="Loading" height="50" width="50">
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>


                    </div>


                </div>

                <div class="row m-2">

                    <div class="col">
                        <div class="card">
                            <div class="card-body border-left-primary">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="text-primary">Doctors Appointment</div>
                                        <div class="grey">5</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-calendar-o fa-2x grey "></i>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body border-left-success">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="text-success">Employees</div>
                                        <div class="grey">5</div>
                                    </div>
                                    <div class="col">
<!--                                        <div class="progress">-->
<!--                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>-->
<!--                                        </div>-->
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-reorder fa-2x grey "></i>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body border-left-warning">
                                <div class="row align-items-center">
                                    <a class="twitter-timeline" href="https://twitter.com/jumalaw98?ref_src=twsrc%5Etfw">Tweets by jumalaw98</a>
                                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <form action="">
                            <div class="form-header">
                                <h4>Make Appointment</h4>
                            </div>
                            <div>
                                <input type="text" placeholder="Name of the doctor">


                            </div>


                        </form>


                    </div>


                </div>






                <footer class="row bg-white">
                    <div class="text-center p-2">
                        <small class="grey">&copy; JlC Medical Services </small>
                    </div>
                </footer>
            </div>

        </div>


    </div>

    </div>


</body>

</html>