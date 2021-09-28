require("./bootstrap");
import { createApp } from "vue";
import router from "./router";
let app = createApp({});
app.component("register-views", require("./views/Register.vue").default);
app.use(router);
app.mount("#app");
export default app;
