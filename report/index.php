<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

   <style> 
    *{
        font-family: 'Montserrat', sans-serif;
        margin: 0;
/*        font-weight: bold;*/
        }

    header{
        background-color: #681a1a;
        background-size: cover;
        height: 60px;
        
        }

    header h1 {
        font-size: 20px;
        padding: 20px;
        color: #ffe000;

        }

    .homebutton{
    float: right ;
    margin-top: -45px;
    margin-right: 30px;
    }

    .homebutton a {
    text-decoration: none;
    color: #ffe000;
    }

    
    .first {
        background-color: #681a1a;
        color: wheat;
       text-align: center;
       height: 50px;
       width: 220px;
       margin: center;
       margin-right: 50px;
       border-radius: 25px;
       box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8)  ;
    }
    .second {
        background-color: #681a1a;
        color: wheat;
        text-align: center;
        height: 50px;
       width: 220px;
       margin: center;
       margin-right: 50px;
       border-radius: 25px;
       box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8)  ;
       
    }
    .third {
        background-color: #681a1a;
        color: wheat;
        text-align: center;
        height: 50px;
        width: 220px;
        margin: center;
        margin-right: 50px;
        border-radius: 25px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8)  ;
        
    }
    .fourth {
        background-color: #681a1a;
        color: wheat;
        text-align: center;
        height: 50px;
       width: 220px;
       margin: center;
       margin-right: 50px;
       border-radius: 25px;
       box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8)  ;
    }

    .first-class {
    color: gray;
    margin-top: 100px;
    margin-bottom: 5px;
    font-size: 17px;
    font-weight: 300;
    text-align: center;
    font-weight: bold;
    letter-spacing: 5px;
    font-family: Montserrat;
    float: center;
    }

    .first:hover {
            opacity: 0.5;
        }
    .first:active {
            background-color: rgb(140, 42, 165);
        }
 

    .second:hover {
            opacity: 0.5;
        }
     .second:active {
            background-color: rgb(140, 42, 165);
        }
    .third:hover {
            opacity: 0.5;
        }
    .third:active {
            background-color: rgb(140, 42, 165);
        }

    .fourth:hover {
            opacity: 0.5;
        }
    .fourth:active {
            background-color: rgb(140, 42, 165);
        }

    .fix-me{
        position: fixed;
        top: 70px;
        left: 10px;
    }
    .custom-shape-divider-bottom-1676706408 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-1676706408 svg {
    position: relative;
    display: block;
    width: calc(118% + 1.3px);
    height: 112px;
    transform: rotateY(180deg);
    }

    .custom-shape-divider-bottom-1676706408 .shape-fill {
    fill: #681A1A;
    }

   


    </style>

    <title>Document</title>

</head>
<body> 
    <body>
    <?php
        require '../templates/connection.php';
        // require '../templates/header.php';
        require '../templates/navigation.php';
    ?>
        
        
        
        <!-- <header>
              <strong><h1>REPORT MANAGEMENT</h1> </strong>
              <div class="homebutton">
                <a href="main.html"><span class="material-symbols-outlined">home</span></a>
              </div>
          </header> -->

          <br><br><br><a href = "../user/homepage.php" class = "text-decoration-none" style = "font-size:15px; color: #681a1a; margin-left: 10px">&#8592; Back to View</a>  
        
            <div class="first-class">
                <table>
               <tr> <br>
                <h1 class="fc-h1>">Generate Report</h1> <br> 
                <h4 class="fc-h4"> SELECT THE INFORMATION YOU NEED </h4> </tr> <br> <br> <br> <br>
                <tr> <a href="rank_per_title.php" style="text-decoration:none;"> <image src="../assets/images/military_tech.png" height="40px" width="40px" style="margin-right: 10px;"></image> <button class="first"> Rank per title </button>  </a>
            </tr>
           
                <tr> 
                    <a href="course_per_date.php" style="text-decoration:none;"> <image src="../assets/images/event_available.png" height="40px" width="40px" style="margin-right: 10px;"></image><button class="second"> Inclusive Dates per title </button>  </a> 
                </tr>

            <tr> 
                <a href="participants_per_course.php" style="text-decoration:none;"> <image src="../assets/images/groups.png" height="40px" width="40px" style="margin-right: 10px;"></image><button class="third"> Participants per title </button>  </a> 
            </tr>
                <br> <br>
            <tr> 
                <a href="instructor_per_course.php" style="text-decoration:none;">  <image src="../assets/images/badge.png" height="40px" width="40px" style="margin-right: 10px;"> </image><button class="fourth"> Pool Instructors per title </button>  </a> 
            </tr>
                </table>
<br> <br>
        </div>
    


</body>
<footer>
      <div class="custom-shape-divider-bottom-1676706408">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
          <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
          <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
          </svg>
      </div>
</footer>
</html>


