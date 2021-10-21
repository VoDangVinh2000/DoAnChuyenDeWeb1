
import { createWebHistory, createRouter } from "vue-router";
import Register from "../views/Register.vue";
import Login from "../views/Login.vue";
import Home from "../views/Home.vue";
import EditUser from "../views/EditUser.vue";
const routes = [
    {
        name: "regsiter",
        path: "/register",
        component: Register,
    },
    {
        //tạo router /login
        name: "login",
        path: "/login",
        component: Login,
    },
    {
        name : "home",
        path : "/home",
        component : Home
    },
     {
        name : "edit",
        path : "/edit/:id",
        component : EditUser
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
