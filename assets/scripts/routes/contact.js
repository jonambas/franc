/* eslint-disable */
import $ from 'jquery';

export default {
  init() {
    this.cacheDom();
    this.bindEvents();
  },

  cacheDom() {
    this.input = $('.contact__fieldset input');
    this.label = $('.contact__label');
  },

  bindEvents() {
    this.input.blur((e) => {
      if (e.target.value || $(this).is(":focus")) {
        this.label.addClass('is-active');
      } else {
        this.label.removeClass('is-active');
      }
    });
  },

  finalize() {
  },
};
