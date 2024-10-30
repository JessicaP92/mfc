function handleLogin(){
event.preventDefault();

const username = document.getElementById('input-username').value;
const password = document.getElementById(' input-password').value;

console.log(' Username:' , username)
console.log('Password:' , password)

alert('Login com:' , username, password)

document.getElementById('login-form').addEventListener('submit') , handleLogin)
}

