import $ from 'jquery';
import { TweenMax, Power2 } from 'gsap';

export default class Slider {
  init(namespace) {
    this.index = 0;
    this.length = 0;
    this.namespace = namespace;

    this.cacheDom();
    this.bindEvents();

    this.goTo(0);
  }

  cacheDom() {
    this.next = $(`.${this.namespace}__next`);
    this.prev = $(`.${this.namespace}__prev`);
    this.slides = $(`.${this.namespace}__slide`);
    this.length = this.slides.length - 1;
  }

  bindEvents() {
    this.next.on('click', (e) => {
      e.preventDefault();
      this.goTo(this.index + 1, 'next')
    });

    this.prev.on('click', (e) => {
      e.preventDefault();
      this.goTo(this.index - 1, 'prev')
    });
  }

  goTo(i, dir = 'next') {
    const prevSlide = $(`.${this.namespace}__slide.is-visible`);

    $(`.${this.namespace}__slide.is-visible`).removeClass('is-visible');
    this.index = i;
    $(this.slides[this.index]).addClass('is-visible');

    const nextSlide = $(`.${this.namespace}__slide.is-visible`);
    const x = dir === 'next' ? 15 : -15;

    TweenMax.set(nextSlide, { x, opacity: 0 });
    TweenMax.set(prevSlide, { x:0, opacity:1 });

    TweenMax.to(nextSlide, 0.6, { x:0, opacity:1, ease:Power2.easeOut});
    TweenMax.to(prevSlide, 0.5, { x:-x, opacity:0, ease:Power2.easeOut});

    if (this.index === this.length) {
      this.next.addClass('is-disabled');
    } else {
      this.next.removeClass('is-disabled');
    }

    if (this.index === 0) {
      this.prev.addClass('is-disabled');
    } else {
      this.prev.removeClass('is-disabled');
    }
  }
}
