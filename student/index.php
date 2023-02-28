<!DOCTYPE html>
<html>
<head>
    <?php  session_start(); ?>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<title>STUDENT CENTER</title>

	<link rel = "preconnect" href="https://fonts.googleapis.com">
    <link rel = "preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .rectangle {
            position: absolute;
            width: 420px;
            height: 233.33px;
            left: 79px;
            top: 191px;
            background-color: #681A1A;
        }
        .rectangle2 {
            position: absolute;
            width: 420px;
            height: 233.33px;
            left: 511px;
            top: 191px;
            background-color: #681A1A;

        }

        .rectangle3 {
            position: absolute;
            width: 420px;
            height: 233.33px;
            left: 942px;
            top: 191px;
            background-color: #681A1A;
        }
        
        .unicalendar{
            position: absolute;
            width: 221px;
            height: 86px;
            left: 179px;
            top: 265px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 35px;
            line-height: 43px;
            display: flex;
            align-items: center;
            text-align: center;

            color: #FFFFFF;

            mix-blend-mode: normal;
        }
        .executivememo{
            position: absolute;
            width: 206px;
            height: 86px;
            left: 608px;
            top: 265px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 35px;
            line-height: 43px;
            display: flex;
            align-items: center;
            text-align: center;

            color: #FFFFFF;

            mix-blend-mode: normal;
        }
        .registration{
            position: absolute;
            width: 274px;
            height: 43px;
            left: 1015px;
            top: 287px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 35px;
            line-height: 43px;
            /* identical to box height */

            display: flex;
            align-items: center;
            text-align: center;

            color: #FFFFFF;

            mix-blend-mode: normal;
        }
        .jumpto{
            position: absolute;
            width: 176px;
            height: 43px;
            left: 632px;
            top: 512px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 35px;
            line-height: 43px;
            /* identical to box height */

            display: flex;
            align-items: center;
            text-align: center;

            color: #000000;

            mix-blend-mode: normal;
        }
        </style>
    </head>
    <body>
	    <!--     <nav class = "navbar navbar-expand-lg navbar-dark fixed-top" style = "background-color: #681A1A;">
        <a class = "navbar-brand" href=#>Web Development</a>
        <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#portfolio-nav" aria-controls = "portfolio-nav" aria-expanded = "false" aria-label = "Toggle navigation">
            <span class = "navbar-toggler-icon"></span>
        </button>
		
        <div class = "collapse navbar-collapse" id = "portfolio-nav">
            <ul class="nav navbar-nav mr-auto">
                <li class ="nav-item">
                    <a class="nav-link" href="homepage.php">HOME</a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="studentlandingpage.php">STUDENT</a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="#">COURSE</a>
                </li>
                <li class = " nav-item">
                    <a class="nav-link" href="#">INSTRUCTORS</a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
                        GENERATE REPORT
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">By Number of Participants per Course</a><li>
                            <a class="dropdown-item" href="#">By Course conducted by Date Range</a><li>
                            <a class="dropdown-item" href="#">By Participants of the Course</a></li>
                            <a class="dropdown-item" href="#">By Pool Instructors per Course</a></li>
    </ul>
                </li>
            </ul>

            <ul class = "nav navbar-nav ms-auto">
                <li>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PROFILE
                    </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item">User Name</a></li>
                            <li><a class="dropdown-item">User Type</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Log In/Out</a></li>
                        </ul>
                </li> 
            </ul>
        </div>
	</nav> -->
    <?php 
    require '../templates/navigation.php';
    ?>
    <div class="rectangle"></div>
    <div class="rectangle2"></div>
    <div class="rectangle3"></div>
    <div class="unicalendar">UNIVERSITY CALENDAR</div>
    <div class="executivememo">EXECUTIVE MEMO</div>
    <div class="registration">REGISTRATION</div>
    <div class="jumpto">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            JUMP TO:
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addparticipants.php">ADD PARTICIPANT</a></li>
            <li><a class="dropdown-item" href="search-database-rev-2.php">SEARCH DATABASE</a></li>
        </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </body>
</html>    