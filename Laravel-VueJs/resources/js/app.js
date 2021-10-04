require("./bootstrap");
import { createApp } from "vue";
import router from "./router";

const app = createApp({});
app.component("register-views", require("./views/Register.vue").default);
app.component("login-views", require("./views/Login.vue").default);
app.component("header-views", require("./components/header.vue").default);
app.component("footer-views", require("./components/footer.vue").default);
app.component("home-views", require("./views/Home.vue").default);
app.use(router);
app.mount("#app");
export default app;
