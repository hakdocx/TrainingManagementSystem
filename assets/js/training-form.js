const trainingBtn = document.querySelector('#create-training-button');
const trainingDialog = document.querySelector('#training-form');

const openDialog = () => {
	trainingDialog.showModal();
};

const closeDialog = (e) => {
	if(!e.target.closest('div')) {
		e.target.close();
	}
};


trainingBtn.addEventListener('click', openDialog);
trainingDialog.addEventListener('click', closeDialog);

function myFunction() {
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById("myInput");
	filter = input.value.toUpperCase();
	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
	  td = tr[i].getElementsByTagName("td")[1];
	  if (td) {
		txtValue = td.textContent || td.innerText;
		if (txtValue.toUpperCase().indexOf(filter) > -1) {
		  tr[i].style.display = "";
		} else {
		  tr[i].style.display = "none";
		}
	  }       
	}
  }