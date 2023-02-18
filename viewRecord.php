<?php 
	require 'templates/connection.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Course</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous"
    >
  </head>

  <body style = "font-family: Montserrat; overflow-x:hidden; background-color:#fffcfa;">
    <div class = "box">
      <div class="row pt-5 pb-3" style="background-color: #681a1a; color: white; padding-left:100px">
          <h1>
            View Course
          </h1>
          <h6>
            # Days
          </h6>
      </div>      
      <div class="container mt-2 p-3" style="background-color: #fffcfa;">
        <div class="row">
          <div class="col-7 me-4" style="background-color: #fffcfa;">
            <div class="row mb-4 p-3 shadow border-0">
              <h4>
                <strong>IMPLEMENTATION</strong>
              </h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
            
            <div class="row mb-4 p-3 shadow border-0">
              <h4>
                <strong>MTAP COURSE</strong>
              </h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>

            <div class="row mb-4 p-3 shadow border-0">
              <h4>
                <strong>PREREQUISITES</strong>
              </h4>
              <p>
                Content here.
              </p>
            </div>

            <div class="row mt-5">
              <div class="col-2 me-4 p-0">
                <button type="button" class="update-btn" style="
                        border: 2px solid #681a1a;
                        background-color: #fffcfa;
                        text-align: center;
                        color: #681a1a;
                        padding: 10px;
                        padding-left: 30px;
                        padding-right: 30px;
                        border-radius: 10px;
                        font-weight: bold;
                        "
                >UPDATE</button>
              </div>
              <div class="col-2 p-0">
                <button type="button" class="del-btn"
                        style="
                        border: 2px solid #681a1a;
                        background-color: #681a1a;
                        text-align: center;
                        color:white;
                        padding: 10px;
                        padding-left: 30px;
                        padding-right: 30px;
                        border-radius: 10px;
                        font-weight:bold;
                        "
                >DELETE</button>
              </div>
            </div>
          </div>
          <div class="col" style="background-color: #fffcfa;">
            <div class="row shadow border-0 p-3">
              <h4>
                <strong>INSTRUCTORS</strong>
              </h4>
              <p>
                Content here.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
