<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

        small {
            display: block;
            line-height: 1.428571429;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container-fixed">
        <nav class="navbar navbar-default">
            <div class="container-fixed">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">HackWeek</a>
                </div>
                <!-- TODO: Use javascript to show links -->
                <!-- If the session is display the home, logout and members Area link -->
                <?php if($this->session->userdata('logged_in')): ?>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>index.php/home/index">Home<span class="sr-only">(current)</span></a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/users/logout">Logout</a>
                            <li><a href="<?php echo base_url(); ?>index.php/members/index">Members Area</a>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>index.php/users/register">Register<span class="sr-only">(current)</span></a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/home/index">Home</a>
                            <li><a href="<?php echo base_url(); ?>index.php/users/index">Login</a>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Link</a></li>
                            <li class="dropdown">
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                <?php endif; ?>
                <!-- Else display teh register, home and login link -->

            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <h1>Missouri Legislator House and Sentate 2016</h1>
    <div class="container">
        <div class="row">
            <?php foreach($legs as $leg): ;?>
            <div class="col-xs-4">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="<?php echo $leg['photo_url']; ?>" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <h4><?php echo $leg['first_name']; ?> <?php echo $leg['last_name']; ?></h4>
                            <?php $u = isset($leg['party']) ? $leg['party'] : NULL; ?>
                            <?php if(empty($u) == NULL): ?>
                                <h1>NULL</h1>
                                <small><cite title="Null"> <i class="glyphicon glyphicon-flag"></i></cite></small>
                                <small><cite title="Null"> <i class="glyphicon glyphicon-map-marker"></i></cite></small>

                            <?php else: ?>
                                <h3>NOT NULL</h3>
                                <small><cite title="<?php echo $leg['party']; ?>">Party: <?php echo $leg['party']; ?> <i class="glyphicon glyphicon-flag"></i></cite></small>
                                <small><cite title="<?php echo $leg['party']; ?>">State: <?php echo $leg['state']; ?> District: <?php echo $leg['district']; ?> <i class="glyphicon glyphicon-map-marker"></i></cite></small>
                            <?php endif; ?>
                            <p>
                                <i class="glyphicon glyphicon-phone"></i>
                                <br />
                                <i class="glyphicon glyphicon-globe"></i><a href="<?php echo $leg['url']; ?>">WebSite</a>
                                <br />
                                <i class="glyphicon glyphicon-search"></i><a href="<?php echo base_url(); ?>index.php/Legislator/detail/<?php echo $leg['leg_id']; ?>"><?php echo $leg['leg_id']; ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>

