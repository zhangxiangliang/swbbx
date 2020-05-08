const Macy = require('macy');
const $ = require('jquery');

window.masonry = function init(name = '.masonry', breakAtOne = 3, breakAtTwo = 3, breakAtThere = 1, breakAtFour = 1) {
  if ($(name).length) {
    new Macy({
      container: name,
      trueOrder: false,
      waitForImages: false,
      useOwnImageLoader: false,
      debug: true,
      mobileFirst: true,
      columns: 3,
      margin: {
        y: 16,
        x: '2%',
      },
      breakAt: {
        1200: breakAtOne,
        940: breakAtTwo,
        520: breakAtThere,
        400: breakAtFour
      },
    });
  }
}

masonry();
$('.collapse').on('shown.bs.collapse', function (event) {
  masonry(`.masonry-${event.target.id}`);
});
