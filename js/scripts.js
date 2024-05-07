window.onload = function() {
    var slider = tns({
        container: '.reviews',
        items: 1,
        slideBy: 'page',
        arrowKeys: true,
        loop: true,
        // autoplay: true,
        // autoplayPosition: 'bottom',
        navPosition: 'bottom',
        autoplayText: [
            "▶",
            "❚❚"
          ],
        mouseDrag: true,
      });
}
