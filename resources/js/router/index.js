import { createRouter, createWebHistory } from 'vue-router';
import AboutView from "../Pages/AboutView.vue";
import HomeView from "../Pages/HomeView.vue";
import AddMovieView from "../Pages/AddMovieView.vue";
import MovieView from "../Pages/MovieView.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            component: HomeView
        },
        {
            path: '/about',
            component: AboutView
        },
        {
            path: '/movie/create',
            component: AddMovieView
        },
        {
            path: '/movie',
            component: MovieView
        },
        {
            path: '/LoginView',
            component: LoginView
        }
    ]
})

export default router;
