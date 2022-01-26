import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);
import {UniversalTilt} from 'universal-tilt.js';

export const init = () => {
  console.log('start executing this JavaScript');

  gsap.to('.parallax-bg', {scrollTrigger: {
    scrub: true
  }, y: (i, target) => - ScrollTrigger.maxScroll(window) * target.dataset.speed, ease: 'none'});

  document.querySelectorAll('.circle-text').forEach(p => p.hidden = true);
  document.querySelectorAll('.line-text').forEach(p => p.hidden = true);

  const characteristics = () => {

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

    c1.addEventListener('mouseover', adaptl1);
    function adaptl1 () {
      l1.style.opacity = '100%';
      l2.style.opacity = '0%';
      l3.style.opacity = '0%';
      l4.style.opacity = '0%';
      l5.style.opacity = '0%';
    }

    c2.addEventListener('mouseover', adaptl2);
    function adaptl2 () {
      l1.style.opacity = '0%';
      l2.style.opacity = '100%';
      l3.style.opacity = '0%';
      l4.style.opacity = '0%';
      l5.style.opacity = '0%';
    }

    c3.addEventListener('mouseover', adaptl3);
    function adaptl3 () {
      l1.style.opacity = '0%';
      l2.style.opacity = '0%';
      l3.style.opacity = '100%';
      l4.style.opacity = '0%';
      l5.style.opacity = '0%';
    }

    c4.addEventListener('mouseover', adaptl4);
    function adaptl4 () {
      l1.style.opacity = '0%';
      l2.style.opacity = '0%';
      l3.style.opacity = '0%';
      l4.style.opacity = '100%';
      l5.style.opacity = '0%';
    }

    c5.addEventListener('mouseover', adaptl5);
    function adaptl5 () {
      l1.style.opacity = '0%';
      l2.style.opacity = '0%';
      l3.style.opacity = '0%';
      l4.style.opacity = '0%';
      l5.style.opacity = '100%';
    }
  };
  characteristics();

  const doubleEffect = () => {
    const title1 = document.querySelector('.title-1');
    const title2 = document.querySelector('.title-2');
    const {innerWidth, innerHeight} = window;

    const offset = 2;
    const xmf = 0.009;
    const ymf = 0.02;

    document.addEventListener('mousemove', e => {
      const {x, y} = e;

      const updateX = (0 - offset - (innerWidth / 2 - x)) * xmf;
      const updateY = (0 - offset - (innerHeight / 2 - y)) * ymf;

      const updateX2 = (0 + offset + (innerWidth / 2 - x)) * xmf;
      const updateY2 = (0 + offset + (innerHeight / 2 - y)) * ymf;

      title1.style.transform = `translate(${updateX}px, ${updateY}px)`;
      title2.style.transform = `translate(${updateX2}px, ${updateY2}px)`;
    });
  };
  doubleEffect();

};
