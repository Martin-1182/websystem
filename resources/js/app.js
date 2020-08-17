require("./bootstrap");

window.Vue = require("vue");

Vue.component("contact-form", require("./components/ContactForm.vue").default);
Vue.component(
    "page-navigation",
    require("./components/PageNavigation.vue").default
);
Vue.component("newslatter", require("./components/Newslatter.vue").default);
import "vue-navigation-bar/dist/vue-navigation-bar.css";

const app = new Vue({
    el: "#app",
});