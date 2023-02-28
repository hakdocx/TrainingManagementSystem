
<nav class = "navbar navbar-expand-lg navbar-dark fixed-top" style = "background-color: #681A1A;">

        <a class = "navbar-brand" href="../user/homepage.php">Web Development</a>
        <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#portfolio-nav" aria-controls = "portfolio-nav" aria-expanded = "false" aria-label = "Toggle navigation">
            <span class = "navbar-toggler-icon"></span>
        </button>
		
        <div class = "collapse navbar-collapse" id = "portfolio-nav">
            <ul class="nav navbar-nav me-auto">
                <li class ="nav-item">
                    <a class="nav-link" href="../user/homepage.php">HOME</a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="../student/index.php">STUDENT</a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="../course/index.php">COURSE</a>
                </li>
                <li class = " nav-item">
                    <a class="nav-link" href="../instructor/index.php">INSTRUCTORS</a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link" href="../report/index.php">
                        GENERATE REPORT
                    </a>
                    <!-- <a class="nav-link dropdown-toggle" href="../report/index.php" id="navbarDropdownMenuLink" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GENERATE REPORT
                    </a> -->
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../report/rank_per_title.php">By Number of Participants per Course</a>
                            <a class="dropdown-item" href="../report/course_per_date.php">By Course conducted by Date Range</a>
                            <a class="dropdown-item" href="../report/participants_per_course.php">By Participants of the Course</a>
                            <a class="dropdown-item" href="../report/instructor_per_course.php">By Pool Instructors per Course</a>
                        </div> -->
                </li>
            </ul>
            
            <ul class="nav navbar-nav ms-auto">
            <?php if(!isset($_SESSION['username'])){ ?>
               <!--  <div class = "collapse navbar-collapse" id = "portfolio-nav">
                    <ul class="nav navbar-nav mr-auto"> -->
                        <li class = "nav-item"><a class="nav-link"href="../Access-Level.php">Login</a></li>
                        <li class = "nav-item"><a class="nav-link" href="../user/Registration-Form.php">Register</a></li>
                    <!-- </ul>
                </div> -->
            <?php }else{ ?>  
                <!-- <div class = "collapse navbar-collapse" id = "portfolio-nav">
                    <ul class="nav navbar-nav mr-auto"> -->
                        <li class = "nav-item"><a class="nav-link"> <?php echo ucfirst($_SESSION['firstname']);  ?> (<?php echo $_SESSION['user_type']?>)</a>    </li>
                        <li class = "nav-item"><a class="nav-link" href="../user/logoutProcess.php">Log Out</a> </li>
                   <!--  </ul>
                </div>  -->
            <?php } ?>  
            </ul>
              
        </div>
	</nav>