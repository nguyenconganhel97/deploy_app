// app.js

require("./bootstrap");
import Vue from "vue";
import VueAxios from "vue-axios";
import * as axios from "axios";
import App from "./App.vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

import HomeComponent from "./components/HomeComponent.vue";
import CreateComponent from "./components/CreateComponent.vue";

const routes = [
    {
        name: "home",
        path: "/",
        component: HomeComponent,
    },
    {
        name: "create",
        path: "/create",
        component: CreateComponent,
    },
];

const router = new VueRouter({
    mode: "history",
    routes: routes,
});

new Vue({
    router,
    render: (h) => h(App),
}).$mount("#app");
