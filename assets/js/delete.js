const deleteBtn = document.querySelector('#deleteBtn');
const deleteDialog = document.querySelector('#deleteForm');

const openDialog = () => {
	deleteDialog.showModal();
};

const closeDialog = (e) => {
	if(!e.target.closest('div')) {
		e.target.close();
	}
};

deleteBtn.addEventListener('click', openDialog);
deleteDialog.addEventListener('click', closeDialog);