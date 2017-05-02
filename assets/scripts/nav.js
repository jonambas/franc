import $ from 'jquery';

export default {
  init() {
    this.cacheDom();
    this.bindEvents();
  },

  cacheDom() {
    this.$hamburger = $('.navigation__hamburgerWrapper');
    this.$menu = $('.navigation__menu');
    this.$closeLink = $('.navigation__closeLink');
  },

  bindEvents() {
    this.$hamburger.on('click', (e) => {
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
}
