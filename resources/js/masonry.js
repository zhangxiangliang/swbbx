const Macy = require('macy');
const $ = require('jquery');

function init() {
  if ($('.masonry').length) {
    new Macy({
      container: '.masonry',
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
        1200: 3,
        940: 3,
        520: 1,
        400: 1
      },
    });
  }
}

init();
$('.collapse').on('show.bs.collapse', init)
