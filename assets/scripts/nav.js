import $ from 'jquery';
import { TweenMax, Power2 } from 'gsap';

export default {
  init() {
    this.cacheDom();
    this.bindEvents();
  },

  cacheDom() {
    this.$hamburger = $('.navigation__hamburgerWrapper');
    this.$menu = $('.navigation__menu');
    this.$closeLink = $('.navigation__closeLink');
    this.$menuItems = $('.navigation__menu li');
  },

  bindEvents() {
    this.$hamburger.on('click', (e) => {
      this.staggerItems();
      this.toggleMenu(e);
    });

    this.$closeLink.on('click', (e) => {
      this.toggleMenu(e);
    });
  },

  toggleMenu(e) {
    e.preventDefault();
    this.$menu.toggleClass('is-open');
  },

  staggerItems() {
    TweenMax.set(this.$menuItems, { opacity:0, y:-15 });
    TweenMax.staggerTo(this.$menuItems, 0.5, { opacity:1, y:0, delay: 0.1, ease:Power2.easeOut}, 0.05);
  },
}
