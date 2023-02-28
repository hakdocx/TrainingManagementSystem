
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
    cursor: pointer;
    
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


   


    </style>

    <title>Document</title>

</head>
<body> 
    <body>
    <?php
        session_start();

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


        
            <div class="first-class">
                <table>
               <tr> 
                <h1 class="fc-h1>">W E L C O M E !!</h1> <br> <br>
                <h4 class="fc-h4"> SELECT THE INFORMATION YOU NEED </h4> </tr> <br> <br> <br> <br>
                 <br>
                <tr> <a href="rank_per_title.php"> <image src="../assets/images/book.png" height="30px" width="40px"></image> <button class="first"> Rank per title </button>  </a>
            </tr>
           
                <tr> 
                    <a href="course_per_date.php"> <image src="../assets/images/yeye.png" height="30px" width="40px"></image><button class="second"> Inclusive Dates per title </button>  </a> 
                </tr>

            <tr> 
                <a href="participants_per_course.php"> <image src="../assets/images/poo.png" height="30px" width="40px"></image><button class="third"> Participants per title </button>  </a> 
            </tr>
                <br> <br>
            <tr> 
                <a href="instructor_per_course.php">  <image src="../assets/images/poooo.png" height="30px" width="40px"> </image><button class="fourth"> Pool Instructors per title </button>  </a> 
            </tr>
                </table>
<br> <br>
        </div>

</body>
</html>


