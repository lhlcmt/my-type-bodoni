import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

export const init = () => {
  console.log('start executing this JavaScript');

  gsap.to('.parallax-bg', {scrollTrigger: {
    scrub: true
  }, y: (i, target) => - ScrollTrigger.maxScroll(window) * target.dataset.speed, ease: 'none'});

};
