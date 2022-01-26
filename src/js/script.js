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
/*
  const interactiveCanvas = () => {
    const canvas = document.querySelector('.dots-canvas');
    const ctx = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = 200;
    let particleArray = [];

    const mouse = {
      x: null,
      y: null,
      radius: 150
    };

    canvas.addEventListener('mousemove', function(event) {
      mouse.x = event.x;
      mouse.y = event.y;
      console.log(mouse.x, mouse.y);
    });

    ctx.fillStyle = '#d88dff';
    ctx.font = '30px Bodoni URW';
    ctx.fillText('Bodoni', 20, 20);
    ctx.strokeStyle = 'white';
    ctx.strokeRect(0, 0, 150, 100);
    const textCoordinates = ctx.getImageData(0, 0, 150, 100);

    class Particle {
      constructor(x, y) {
        this.x = x;
        this.y = y;
        this.size = 1;
        this.baseX = this.x;
        this.baseY = this.y;
        this.density = (Math.random() * 30) + 1;
      }
      draw() {
        ctx.fillStyle = '#d88dff';
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.closePath();
        ctx.fill();
      }
      update() {
        const dx = mouse.x - this.x;
        const dy = mouse.y - this.y;
        const distance = Math.sqrt(dx * dx + dy * dy);
        const forceDirectionX = dx / distance;
        const forceDirectionY = dy / distance;
        const maxDistance = mouse.radius;
        const force = (maxDistance - distance) / maxDistance;
        const directionX = forceDirectionX * force * this.density;
        const directionY = forceDirectionY * force * this.density;
        if (distance < mouse.radius) {
          this.x -= directionX;
          this.y -= directionY;
        } else {
          if (this.x !== this.baseX) {
            const dx = this.x - this.baseX;
            this.x -= dx / 10;
          }
          if (this.x !== this.baseY) {
            const dy = this.y - this.baseY;
            this.y -= dy / 10;
          }
        }
      }
    }

    function init() {
      particleArray = [];
      for (let y = 0, y2 = textCoordinates.height;y < y2;y ++) {
        for (let x = 0, x2 = textCoordinates.width;x < x2;x ++) {
          if (textCoordinates.data[(y * 4 * textCoordinates.width) + (x * 4) + 3] > 128) {
            const positionX = x;
            const positionY = y;
            particleArray.push(new Particle(positionX * 10, positionY * 10));
          }
        }
      }
    }
    init();
    console.log(particleArray);

    function animate() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      for (let i = 0;i < particleArray.length;i ++) {
        particleArray[i].draw();
        particleArray[i].update();
      }
      requestAnimationFrame(animate);
    }
    animate();
  };
  interactiveCanvas();
*/
};
