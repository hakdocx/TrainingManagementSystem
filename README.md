# Webdevelopment Project

## Project Description
Web Development Project is a web-based application that utilize the use of PHP, HTML, CSS, and JavaScript. This project is a School Management System that is used to manage the courses, students, instructors, registered course and student registered in course of the school. 
This project is a requirement for the completion of the course Web Development.

## Project Requirements
Quick link: [Project_Requirements.md link](https://github.com/Arc-Data/TrainingManagementSystem/blob/report_mgmt/Requirements.md)

## Set-up
Download the file Database_design_v_1.3 or the latest version, then open your phpMyAdmin and create a database called `Project` then import the downloaded sql file to your database. After that you should be able to open a connection with your database.

## Project Overview:
- user_mgmt                         - User Management Module
    - clear.php
    - code.php
    - index.php
    - setPrerequisite.php
    - updateCourse.php
    - viewRecord.php
- report                            - Report Management Group
    - main.php                      - Main Page of the Report Management Module
    - hhth.html         
    - rankPerTitle.php              - First Requirement Number of participants per course
    - coursePerDate.php             - Second Requirement Course conducted by date range
    - participantsPerCourse.php     - Third Requirement Participants of the course
    - instructorPerCourse.php       - Fourth Requirement Pool Instructors per course
- instructor                        - Instructor Management Module
    - add.php                       - Add Instructor
    - instructor_index.php          - Main Page of the Instructor Management Module
    - search.php                    - Search Instructor
    - style.css                     - CSS Style for the Instructor Management Module
    - UpdateAddData.php             - Update Instructor
    - UpdateForm.php                - Update Instructor
- assets                            - This folder contains the files for the front-end.
    - css
        - registration_course_style.css
        - style.css
        - update_css_style.css
        - view_record_style.css
    - js
        - delete.js
        - message.js
        - training-form.
    - images                        - This folder contains the images used in the project.
    - popup
- templates                         - This folder contains the files for the database connection.
    - connection.php                - This file contains the database connection.
    - header.php                    - This file contains the header of the page.
    - nav.php                       - This file contains the navigation bar of the page.
- SQL                       	    - this folder contains versions of the database
- .gitignore                        - This file contains the files that are not to be uploaded to the repository.
- README.md
- Requirements.md                    - This file contains the requirements of the project.


## Project Structure
```bash
Course-Management-System
├── assets                              <- The top-level README for developers/collaborators using this project.
│   ├── css                             <-
│   │   ├── style.css                   <-
│   │   └── update_css_style.css        <-
│   └── js                              <-
│       ├── delete.js                   <-
│       └── training-form.js            <-
├── templates                           <-
│   ├── connection.php                  <-
│   └── header.php                      <-
├── user_mgmt                           <-
├── .gitignore                          <-
├── code.php                            <-
├── index.php                           <-
├── README.md                           <-
├── updateCourse.php                    <-
└── viewRecord.php                      <-
```

## Contributions
WHOLE SECTION BSIT 3-1N SY 2020-2024

## Collaborators
- [Arc-Data](https://github.com/Arc-Data)
- [Ron](https://github.com/Arc-Data)
- [Luis Arambulo](https://github.com/luwesaram)
