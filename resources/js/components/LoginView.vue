<script setup>

function Login(){
let Form = document.getElementById('Form');
let form_data = new FormData(Form);

fetch("/api/v1/login", {
 method: 'POST',
 body: form_data,
 headers: {
    'Authorization': `Bearer your-jwt-access-token`,
     'Accept': 'application/json'
 
 }
})
.then(function (response) {
 return response.json();
})
.then(function (data) {
localStorage.setItem('JWT',data.access_token);
 console.log(data);
})
.catch(function (error){ 
console.log(error);
});
}
</script>


<template>

<form @submit.prevent= 'Login' id = 'Form'>
<div class="form-group mb-3">
<label for="email" class="form-label">Email Address</label>
<input type="text" name="email" class="form-control" />
<label for="password" class="form-label">Password</label>
<input type="text" name="password" class="form-control" />
<button  class="btn btn-Primary" type="submit"> Log in</button>
</div>
</form>

</template>