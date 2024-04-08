<script setup>
import { ref, onMounted} from "vue";

let movies = ref([]);

function fetchMovies(){
    fetch("/api/v1/movies", {
 method: 'GET',
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

onMounted(()=>{

    movies.value=fetchMovies();
});


}

</script>
<template>
    <div v-for="(movie) in movies ">
        <div v-bind:movie="movie" v-bind:key="movie" v-bind:src="movie">
            {{ movie.value }}
        </div>

    </div>
</template>