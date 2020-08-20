require("./bootstrap");
import './animations';

window.Vue = require("vue");

Vue.component("contact-form", require("./components/ContactForm.vue").default);
Vue.component("newslatter", require("./components/Newslatter.vue").default);

const app = new Vue({
    el: "#app",
});
const app2 = new Vue({
    el: "#app2",
});

