let popUp = document.querySelector('.alert');

const collapsePopUp = () => {
	popUp.style.display = "none";
};

if(popUp) {
	setTimeout(collapsePopUp, 8000);
}
