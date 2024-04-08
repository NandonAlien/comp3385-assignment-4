<script setup>

function Login(){


fetch("/api/v1/login", {
 method: 'POST',
 headers: {
 'Accept': 'application/json'
 }
})
.then(function (response) {
 return response.json();
})
.then(function (data) {
 console.log(data);
})
.catch(function (error){ 
console.log(error);
});
}
</script>


<template>

<form @submit.prevent= 'Login' id = 'Login'  enctype="multipart/form-data">
<div class="form-group mb-3">
<label for="email" class="form-label">Email Address</label>
<input type="text" name="email" class="form-control" />
<label for="password" class="form-label">Description</label>
<input type="text" name="password" class="form-control" />
</div>
</form>

</template>