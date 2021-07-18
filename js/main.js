const inputs = document.querySelectorAll('.input');

function focusFunc(){
	let parent = this.parentNode.parentNode;
	parent.classList.add('focus');
}


function blurFunc(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove('focus');
	}
}

inputs.forEach(input =>{
	input.addEventListener('focus',focusFunc);
	input.addEventListener('blur',blurFunc);

})


const userId = document.getElementById("username");
const name = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");

const database = firebase.database();
const rootRef = database.ref('accounts');

addBtn.addEventListener('click', (e) => {
	e.preventDefault();
	rootRef.child(userId.value).set({
		name=name.value,
		email=email.value,
		password=password
	});
});