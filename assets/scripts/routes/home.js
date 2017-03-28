import $ from 'jquery';

export default {
  init() {
    video.init();
  },
  finalize() {
  },
};

const video = {
  init() {
    this.cacheDom();
    this.bindEvents();

    this._sizeVideo();
  },

  cacheDom() {
    this.homeVideo = $('.home__bgVideo');
    this.window = $(window);
  },

  bindEvents() {
    this.window.on('resize', () => this._sizeVideo());
  },

  _sizeVideo() {
    const vh = this.window.height();
    const vw = this.window.width();

    if (vw / vh > 1.77777778) {
      const videoHeight = vw * 0.5625;
      this.homeVideo.css({'height': videoHeight, 'width': 'auto'});
    } else {
      const videoWidth = vh * 1.77777778;
      this.homeVideo.css({'width': videoWidth, 'height': 'auto'});
    }
  },
}
