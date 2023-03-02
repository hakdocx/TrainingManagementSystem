const btn = document.querySelector('#add_class_btn');
const dialog = document.querySelector('#dialog');

const openDialog = () => {
	dialog.showModal();
};

const closeDialog = (e) => {
	if(!e.target.closest('div')) {
		e.target.close();
	}
};

btn.addEventListener('click', openDialog);
dialog.addEventListener('click', closeDialog);