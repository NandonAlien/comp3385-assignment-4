import { createRouter, createWebHistory } from 'vue-router';
import AboutView from "../Pages/AboutView.vue";
import HomeView from "../Pages/HomeView.vue";
import AddMovieView from "../Pages/AddMovieView.vue";
import MoviesView from "../Pages/MoviesView.vue";
import LoginView from "../components/LoginView.vue";
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
            component: MoviesView
        },
        {
            path: '/login',
            component: LoginView
        }
    ]
})

export default router;
