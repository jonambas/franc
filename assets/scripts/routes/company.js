import Slider from '../slider';

export default {
  init() {
    const lead = new Slider;
    const client = new Slider;

    lead.init('leadershipSlider');
    client.init('clientSlider');
  },
  finalize() {
  },
};
