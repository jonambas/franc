import $ from 'jquery';

export default {
  init(namespace) {
    this.index = 0;
    this.length = 0;
    this.namespace = namespace;

    this.cacheDom();
    this.bindEvents();

    this.goTo(0);
  },

  cacheDom() {
    this.next = $(`.${this.namespace}__next`);
    this.prev = $(`.${this.namespace}__prev`);
    this.slides = $(`.${this.namespace}__slide`);
    this.length = this.slides.length - 1;
  },

  bindEvents() {
    this.next.on('click', (e) => {
      e.preventDefault();
      this.goTo(this.index + 1)
    });

    this.prev.on('click', (e) => {
      e.preventDefault();
      this.goTo(this.index - 1)
    });
  },

  goTo(i) {
    $(`.${this.namespace}__slide.is-visible`).removeClass('is-visible');
    this.index = i;
    $(this.slides[this.index]).addClass('is-visible');

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
  },
}
