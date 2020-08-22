require("./bootstrap");

import { gsap } from "gsap";
import { CSSRulePlugin } from "gsap/CSSRulePlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(CSSRulePlugin, ScrollTrigger);

var rule = CSSRulePlugin.getRule("h1::before");

var tl = gsap.timeline({
  defaults: { duration: 1 },
});
tl.from(".anim1", { y: -50, stagger: 0.6, opacity: 0 })
  .to(rule, { duration: 1.2, cssRule: { scaleY: 0 } }, "-=2.2")
  .from("img", { y: 30, opacity: 0 }, "-=.5");

import AOS from "aos";
import "aos/dist/aos.css";
AOS.init();

window.Vue = require("vue");

import vueSmoothScroll from "vue2-smooth-scroll";
Vue.use(vueSmoothScroll);

Vue.component("contact-form", require("./components/ContactForm.vue").default);
Vue.component("newslatter", require("./components/Newslatter.vue").default);
Vue.component("nav-bar", require("./components/NavBar.vue").default);
Vue.component("nav-bar-nav", require("./components/NavBarNav.vue").default);

const navBar = new Vue({
  el: "#navBar",
});
const contactForm = new Vue({
  el: "#contactForm",
});
const newslatter = new Vue({
  el: "#newslatter",
});
