<script setup>
import { ref, onMounted} from "vue";

const movies = ref([]);
let x = (movies.value!=null);
onMounted(()=>{
fetchMovies();

});

function fetchMovies() {
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
        movies.value = data;
    })
    .catch(function (error) {
        console.log(error);
    });
}

</script>
<template  >
<div ref="movies"></div>
<div class="card" v-if="x" v-for="movie in  movies.value" :key="movie.id">
   <img class="card-img-top" :src="'storage/images/'+asset(movie.poster_path)"  >Image</img>
   <div class="card-body">
    <h3 class="card-title">{{ movie.title }}</h3>
    <p class="card-text">{{ movie.description }}</p>
    </div>
    <div class="card-footer"></div>
</div>
<p>x</p>

</template>