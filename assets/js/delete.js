const deleteBtn = document.querySelector('#deleteBtn');
const deleteDialog = document.querySelector('#deleteForm');
const cancelBtn = document.querySelector('#cancel-btn-vr');

const openDialog = () => {
	deleteDialog.showModal();
};

const closeDialog = (e) => {
	if(!e.target.closest('div')) {
		e.target.close();
	}
};

cancelBtn.addEventListener('click', () => {
	deleteDialog.close();
});
deleteBtn.addEventListener('click', openDialog);
deleteDialog.addEventListener('click', closeDialog);