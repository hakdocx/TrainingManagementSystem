<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Course</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/update_course_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous"
    >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body style="font-family: Montserrat; background-color:#fffcfa">
    <div class="container pt-5" style="background-color:#fffcfa">
      <h1 style="color:#681a1a">
        <strong>Update Course</strong>
      </h1>
      <div class="row mt-4">
        <div class="col me-5">
          <div class="row-box">
            <label style='font-size: 17px;' for='course-title'>Course Title <label class="asterisk"> *</label></label>
            <input style='font-size: 17px;' type="text" name="course_title" id='course-title' required>
          </div>
          <div class="row-box">
            <label style='font-size: 17px;' for='number-of-days'>Number of Days to Complete <label class="asterisk"> *</label></label>
            <input style='font-size: 17px;' type="number" name="number_of_days" id='number-of-days' required>
          </div>
          <div class="row-box">
            <label style='font-size: 17px;' for='implementation'>Implementation <label class="asterisk"> *</label></label>
            <textarea style='font-size: 17px;' name="implementation" id='implementation' rows="3" required></textarea>
          </div>
          <div class="row-box">
            <label style='font-size: 17px;' for='mtap-course'>MTAP Course <label class="asterisk"> *</label></label>
            <textarea style='font-size: 17px;' name="mtap_course" id='mtap-course' rows="3" required></textarea>
          </div>
          <div class="row-box">
            <label style='font-size: 17px;'>Prerequisite Course <label class="asterisk"> *</label></label>
            <div class="row">
              <div class="input-group">
                <span class="input-group-append">
                  <span class="btn" id="search-icon">
                        <i class="fa fa-search"></i>
                  </span>
                </span>
                <input type="text" id="search-input" placeholder="Search for course">
                <button type="button" class="add-btn" style="margin-left: 10px; border-radius: 10px;">ADD</button>
              </div>
            </div>
          </div>
          <div class="row-box mt-3" style="background-color:#e8dad9; border-radius: 10px; padding: 10px; padding-left: 15px;text-align:left;">
              <h5>Content here.</h5>
          </div>
        </div>

        <div class="col">
          <div class="row-box">
            <label style='font-size: 17px;'>Instructors <label class="asterisk"> *</label></label>
            <div class="row">
              <div class="input-group">
                <span class="input-group-append">
                  <span class="btn" id="search-icon">
                        <i class="fa fa-search"></i>
                  </span>
                </span>
                <input type="text" id="search-input" placeholder="Search for instructor">
                <button type="button" class="add-btn" style="margin-left: 10px; border-radius: 10px;">ADD</button>
              </div>
            </div>
          </div>
          <div class="row-box mt-3" style="background-color:#e8dad9; border-radius: 10px; padding: 15px; text-align:left;">
              <h5>Content here.</h5>
          </div>
          <div class="row-box mt-3" style="background-color:#e8dad9; border-radius: 10px; padding: 15px; text-align:left;">
              <h5>Content here.</h5>
          </div>
          <div class="row-box mt-3" style="background-color:#e8dad9; border-radius: 10px; padding: 15px; text-align:left;">
              <h5>Content here.</h5>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>