import $ from 'jquery';
import Player from '@vimeo/player';
import fitvids from 'fitvids';

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
    fitvids('.home__brandVideo');
  },

  cacheDom() {
    this.loader = $('.home__loader');

    this.homeVideo = $('.home__bgVideo');
    this.poster = $('.home__bgPoster');
    this.brandVideo = $('.home__brandVideo');
    this.brandVideoWrapper = $('.home__brandVideoWrapper');

    this.playButton = $('.home__playLink');
    this.closeButton = $('.home__closeLink');

    this.brandPlayer = new Player(this.brandVideoWrapper.find('iframe'));
    this.bgPlayer = new Player(this.homeVideo.find('iframe'));
    this.bgPlayer.setVolume(0);
    this.bgPlayer.play();
    this.window = $(window);
  },

  bindEvents() {
    this.window.on('resize', () => this._sizeVideo());
    this.playButton.on('click', (e) => this._playVideo(e))
    this.closeButton.on('click', (e) => this._hideVideo(e))
    this.bgPlayer.on('timeupdate', (data) => this._hidePoster(data));
    $( window ).on('load', () => this._hideLoader());
  },

  _hideLoader() {
    setTimeout(() => {
        this.loader.addClass('is-hidden');
    }, 1000);
  },

  _hidePoster(data) {
    if (data.seconds > 0) {
      this.poster.addClass('is-hidden');
      this.bgPlayer.off('timeupdate');
    }
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

  _playVideo(e) {
    e.preventDefault();
    this.brandVideoWrapper.addClass('is-open');
    this.brandPlayer.setCurrentTime(0);
    this.brandPlayer.play();
  },

  _hideVideo(e) {
    e.preventDefault();
    this.brandVideoWrapper.removeClass('is-open');
    this.brandPlayer.pause();
  },
}
