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

  let tl1 = gsap.timeline({
    scrollTrigger: {
        triger: '#projects',
        start: "top top"
    }
});
tl1.from(".box", {
    y: -50,
    delay: 1,
    opacity: 0,
    duration: .8,
    stagger: .2
});
