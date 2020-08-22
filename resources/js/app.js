require("./bootstrap");
import "./animations";

window.Vue = require("vue");

import vueSmoothScroll from 'vue2-smooth-scroll'
Vue.use(vueSmoothScroll)

Vue.component("contact-form", require("./components/ContactForm.vue").default);
Vue.component("newslatter", require("./components/Newslatter.vue").default);
Vue.component("nav-bar", require("./components/NavBar.vue").default);

const navBar = new Vue({
  el: "#navBar",
});
const contactForm = new Vue({
  el: "#contactForm",
});
const newslatter = new Vue({
  el: "#newslatter",
});
