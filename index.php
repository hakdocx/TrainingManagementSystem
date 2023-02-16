<?php 

	require 'templates/connection.php'

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Training Management System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src = "assets/js/training-form.js" defer></script>
</head>
<body>
   
	<dialog id = 'training-form'>
		<form method = "POST" action = 'index.php'>
			<div class="form-container">
				<h2> ADD TRAINING FORM </h2>
				<br>
				<div class = "form-row">
					<label style='font-size: 17px;' for = 'course-title'>Course Title*</label>
					<input style='font-size: 17px;' type="text" name="course-title" id ='course-title' required>
				</div>
				<div class = "form-row">
					<label style='font-size: 17px;' for = 'number-of-days'>Number of Days*</label>
					<input style='font-size: 17px;' type="number" name="number-of-days" id ='number-of-days' required>
				</div>
				<div class = "form-row">
					<label style='font-size: 17px;' for = 'mtap-course'>MTAP Course*</label>
					<input style='font-size: 17px;' type="text" name="mtap-course" id ='mtap-course' required>
				</div>
				<div class = "form-row">
					<label style='font-size: 17px;' for = 'mtap-course'>Implementation*</label>
					<input style='font-size: 17px;' type="text" name="implementation" id ='implementation' required>
				</div>
				<div class = "form-row">
					
				</div>
				<br><br>
				<center>
				<button style='font-size: 15px; background-color: #45b6fe;  border-radius: 5px; width: 15%;' type = "submit">Submit</button> </center>
			</div>
		</form>
	</dialog>

	<div class="container py-5">
	
  <div class="row py-5">
    <div class="col-lg-10 mx-auto">
	<h1> Course Management </h1>
	<br>
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive">
            <table id="myTable" style="width:100%" class="table table-striped table-bordered">
			<button id = 'create-training-button' class= 'button1'>Create Training</button>
			<input type="text" id="myInput" onkeyup="myFunction()" class='fa fa-search' placeholder="Search.. " >
		
              <thead>
                <tr>
					
                  <th>Course Id</th>
				  <th>Course Title</th>
                  <th>Number of Days</th>
                  <th>MTAP Course</th>
                  <th>Pre_requisite Course</th>
                  <th>Years Certified / Imple</th>
				  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>300001</td>
                  <td>Programming 2</td>
                  <td>0</td>
                  <td></td>
                  <td>300001</td>
                  <td>2021/07/25</td>
				  <td><a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a></td>
                </tr>
				<tr>
                  <td>300002</td>
                  <td>Programming 5</td>
                  <td>0</td>
                  <td></td>
                  <td>300001</td>
                  <td>2021/07/25</td>
				  <td><a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a></td>
                </tr>
				<tr>
                  <td>300003</td>
                  <td>RESEARCH 1</td>
                  <td>1</td>
                  <td></td>
                  <td>300001</td>
                  <td>2021/07/25</td>
				  <td><a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a></td>
                </tr>
				<tr>
                  <td>300004</td>
                  <td>ELECTIVE 10</td>
                  <td>8</td>
                  <td></td>
                  <td>300001</td>
                  <td>2021/07/25</td>
				  <td><a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a></td>
                </tr>
				<tr>
                  <td>300005</td>
                  <td>ART APPRECIATION</td>
                  <td>2</td>
                  <td></td>
                  <td>300001</td>
                  <td>2021/07/25</td>
				  <td><a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a></td>
                </tr>
				<tr>
                  <td>300006</td>
                  <td>DATA BASE MANAGEMENT</td>
                  <td>5</td>
                  <td></td>
                  <td>300001</td>
                  <td>2021/07/25</td>
				  <td><a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a></td>
                </tr>
				<tr>
                  <td>300007</td>
                  <td>NSTP 2</td>
                  <td>10</td>
                  <td></td>
                  <td>300001</td>
                  <td>2021/07/25</td>
				  <td><a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a></td>
                </tr>
                
				
               
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
	
<style>
body {
  min-height: 100vh;
}

#myInput {
  float: right;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 89.5%;
  border-radius: 10px;
  font-size: 15px;
  padding: 10px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 5px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 15px;
}

.button1 {
   float: left;
   background-color: #45b6fe;
   border-radius: 10px;
   width: 10%;
   border: 1px solid black;
   margin-bottom: 5px;
   padding: 1px 10px 0px 10px;
}

.button1 {
  color: black;
  border: 1px solid #ddd;
  background-image: -webkit-linear-gradient(30deg, #1e97f3 50%, transparent 50%);
  background-image: linear-gradient(30deg, #1e97f3 50%, transparent 50%);
  background-size: 500px;
  background-repeat: no-repeat;
  background-position: 0%;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out;
}
.button1:hover {
  background-position: 100%;
  color: black;
}

.form-container {
width: 500px;
height: 420px;
border-radius: 10px;

}

dialog::backdrop {
	backdrop-filter: blur(5px);
}

</style>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td1 = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[2];
    td3 = tr[i].getElementsByTagName("td")[3];
    td4 = tr[i].getElementsByTagName("td")[4];
    td5 = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else if (td1) {
        txtValue = td1.textContent || td1.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else if (td2) {
          txtValue = td2.textContent || td2.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else if (td3) {
            txtValue = td3.textContent || td3.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else if (td4) {
              txtValue = td4.textContent || td4.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else if (td5) {
                txtValue = td5.textContent || td5.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }    
            }    
          }    
        }    
      }    
    }       
  }
}


</script>
</body>
</html>