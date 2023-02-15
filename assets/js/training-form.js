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