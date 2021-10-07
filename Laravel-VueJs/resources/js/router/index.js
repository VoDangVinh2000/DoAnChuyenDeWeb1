
import { createWebHistory, createRouter } from "vue-router";
import Register from "../views/Register.vue";
import Login from "../views/Login.vue";
import Home from "../views/Home.vue";
const routes = [
    {
        name: "regsiter",
        path: "/register",
        component: Register,
    },
    {
        name: "login",
        path: "/login",
        component: Login,
    },
    {
        name : "home",
        path : "/home",
        component : Home
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
