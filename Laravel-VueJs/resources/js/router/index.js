// import Register from "../components/Register";
import { createWebHistory, createRouter } from "vue-router";
import Register from "../views/Register.vue";
const routes = [
    {
        name: "regsiter",
        path: "/register",
        component: Register,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
