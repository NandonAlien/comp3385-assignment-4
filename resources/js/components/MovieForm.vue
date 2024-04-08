<script setup>

function saveMovie(){
let movieForm = document.getElementById('movieForm');
let form_data = new FormData(movieForm);

fetch("/api/v1/movies", {
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
 console.log(data);
})
.catch(function (error){ 
console.log(error);
});
}
</script>


<template>

<form @submit.prevent= 'saveMovie' id = 'movieForm'  enctype="multipart/form-data">
<div class="form-group mb-3">
<label for="title" class="form-label">Movie Title</label>
<input type="text" name="title" class="form-control" />
<label for="description" class="form-label">Description</label>
<input type="text" name="description" class="form-control" />
</div>
</form>

</template>