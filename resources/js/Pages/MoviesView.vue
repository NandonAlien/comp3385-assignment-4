<script setup>
import { ref, onMounted} from "vue";

let movies = ref([]);

onMounted(()=>{

movies=fetchMovies();
});

function fetchMovies(){
    fetch("/api/v1/movie", {
 method: 'GET',
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
<template  >
<section class="movies" ref="movies">
<div class="card" v-for="(movie,index) in  movies" :key="index">
   <img class="card-img-top" src="movie.poster_path"  >Image</img>
   <div class="card-body">
    <h3 class="card-title">{{ movie.title }}</h3>
    <p class="card-text">{{ movie.description }}</p>
    </div>
    <div class="card-footer"></div>
</div>
</section>
</template>