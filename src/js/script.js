import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);
//const UniversalTilt = require('universal-tilt.js');

export const init = () => {
  console.log('start executing this JavaScript');
  /*
  const elems = document.querySelectorAll('.tilt');
  const universalTilt = new UniversalTilt(elems, {
    base: 'window'
  });
  universalTilt();
  */
  gsap.to('.parallax-bg', {scrollTrigger: {
    scrub: true
  }, y: (i, target) => - ScrollTrigger.maxScroll(window) * target.dataset.speed, ease: 'none'});

  const c1 = document.querySelector('.circle1');
  const l1 = document.querySelector('.line1');
  const c2 = document.querySelector('.circle2');
  const l2 = document.querySelector('.line2');
  const c3 = document.querySelector('.circle3');
  const l3 = document.querySelector('.line3');
  const c4 = document.querySelector('.circle4');
  const l4 = document.querySelector('.line4');
  const c5 = document.querySelector('.circle5');
  const l5 = document.querySelector('.line5');

  c1.addEventListener('click', adaptl1);
  function adaptl1 () {
    l1.style.opacity = '100%';
    l2.style.opacity = '0%';
    l3.style.opacity = '0%';
    l4.style.opacity = '0%';
    l5.style.opacity = '0%';
  }

  c2.addEventListener('click', adaptl2);
  function adaptl2 () {
    l2.style.opacity = '100%';
    l1.style.opacity = '0%';
    l3.style.opacity = '0%';
    l4.style.opacity = '0%';
    l5.style.opacity = '0%';
  }

  c3.addEventListener('click', adaptl3);
  function adaptl3 () {
    l3.style.opacity = '100%';
    l1.style.opacity = '0%';
    l2.style.opacity = '0%';
    l4.style.opacity = '0%';
    l5.style.opacity = '0%';
  }

  c4.addEventListener('click', adaptl4);
  function adaptl4 () {
    l4.style.opacity = '100%';
    l1.style.opacity = '0%';
    l2.style.opacity = '0%';
    l3.style.opacity = '0%';
    l5.style.opacity = '0%';
  }

  c5.addEventListener('click', adaptl5);
  function adaptl5 () {
    l5.style.opacity = '100%';
    l1.style.opacity = '0%';
    l2.style.opacity = '0%';
    l3.style.opacity = '0%';
    l4.style.opacity = '0%';
  }

};
