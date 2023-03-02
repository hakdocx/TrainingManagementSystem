
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <title>Document</title>
   <style> 
        body {
            margin: 0;
            padding: 0;
            background: #fffcfa;
        }

        *   {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            /*font-weight: bold;*/
        }

        .first-class {
            color: #681a1a;
            font-weight: bold;
            margin-top: 150px;
            margin-bottom: 5px;
            text-align: center;
            cursor: pointer;
        }

        .first-class h1{
            font-size: 50px;
            letter-spacing: 2px;
            
        }

        .first-class h4{
            font-size: 25px;
            letter-spacing: 2px;
        }

        /* .homebutton{
            float: right ;
            margin-top: -45px;
            margin-right: 30px;
        }

        .homebutton a {
            text-decoration: none;
            color: #ffe000;
        }*/

        table{
             margin: auto;
             padding: 0px;
             border: none;
        }

        .first, .second, .third, .fourth{
            background-color: #681a1a;
            font-size: 20px;
            font-weight: normal;
            color: yellow;
            text-align: center;
            height: 60px;
            width: 360px;
            margin-inline: 55px auto;
            margin-bottom: 40px;
            border: none;
            border-radius: 25px;
            box-shadow: 1px 2px 7px #666;
            padding-left: 40px;
        }

        .first:hover, .second:hover, .third:hover, .fourth:hover {
            background-color: transparent;
            color: #681a1a;
            border: 1px solid #681a1a;
            opacity: 90%;
            font-weight: bold;
          /*transform: scale(1.05);*/
        }

        .Icon-inside, .Icon-inside1, .Icon-inside2, .Icon-inside3  {
            position: relative;
        }


        .Icon-inside i {
            position: absolute;
            left: 177px;
            top: 54px;
            padding: 11px 20px;
            color: yellow;
            opacity: 90%;
        }

        .Icon-inside1 i {
            position: absolute;
            left: 543px;
            top: 53px;
            padding: 11px 20px;
            color: yellow;
            opacity: 90%;
        }

        .Icon-inside2 i {
            position: absolute;
            left: 970px;
            top: 52px;
            padding: 11px 20px;
            color: yellow;
            opacity: 90%;
        }

        .Icon-inside3 i {
            position: absolute;
            left: 535px;
            top: 4px;
            padding: 11px 20px;
            color: yellow;
            opacity: 90%;
        }

</style>

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
            <h1>WELCOME!</h1> <br>
            <h4><i>Select the information you need.</i></h4> 
            <br> 
            <table>
                <tr>
                    <div class="Icon-inside">
                        <i class="fa fa-book fa-2x" aria-hidden="true"></i>
                        <td><a href="rank_per_title.php"><button class="first">Rank per Title</button></a></td></div>
                    
                    <div class="Icon-inside1"> 
                        <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
                        <td><a href="course_per_date.php"><button class="second">Inclusive Dates per Title</button></a></td></div>
                    
                    <div class="Icon-inside2"> 
                        <i class="fa fa-group fa-2x" aria-hidden="true"></i>
                        <td><a href="course_per_date.php"><button class="second">Participants per Title</button></a></td></div>
                </tr>
                <br> <br>
            </table>

            <div class="Icon-inside3"> 
                        <i class="fa fa-group fa-2x" aria-hidden="true"></i>
                        <td class="yow"><a href="instructor_per_course.php"><button class="fourth">Pool Instructors per Title</button></a></td></div>
            <br>
        </div>
    </body>
</html>


