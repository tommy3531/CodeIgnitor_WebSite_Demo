
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
<?php if ($this->session->userdata('logged_in')): ?>

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

<?php
//var_dump($legs);
    foreach($legs['roles'] as $leg)

    if((isset($leg['term']) && isset($leg['committee']) && isset($leg['committee_id']) && isset($leg['position']))){

            echo "<br />";
            echo "Term: ";
            echo $leg['term'];
            echo "<br />";
            echo "Committee: ";
            echo $leg['committee'];
            echo "<br />";
            echo "Committee_ID: ";
            echo $leg['committee_id'];
            echo "<br />";
            echo "Position: ";
            echo $leg['position'];
            echo "<br />";
            echo "<br />";
    }
?>



<?php endif; ?>