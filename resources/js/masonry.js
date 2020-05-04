const Macy = require('macy');
const $ = require('jquery');

window.masonry = function init(name = '.masonry', number = 3) {
  if ($(name).length) {
    new Macy({
      container: name,
      trueOrder: false,
      waitForImages: false,
      useOwnImageLoader: false,
      debug: true,
      mobileFirst: true,
      columns: 1,
      margin: {
        y: 16,
        x: '2%',
      },
      breakAt: {
        1200: number,
        940: number,
        520: 1,
        400: 1
      },
    });
  }
}

masonry();
$('.collapse').on('show.bs.collapse', function (event) {
  masonry();
  masonry(`.masonry-${event.target.id}`);
});
