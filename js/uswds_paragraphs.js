/**
 * @file
 * JS
 */

(function ($) {

  /**
   * Close sibling details
   */
  Backdrop.behaviors.detailsSiblingCloser = {
    attach: function (context, settings) {
      const summaries = document.querySelectorAll('div.aplenty-accordion-single summary');

      summaries.forEach((summary) => {
        summary.addEventListener('click', closeOpenedDetails);
      });

      function closeOpenedDetails() {
        summaries.forEach((summary) => {
          let detail = summary.parentNode;
            if (detail != this.parentNode) {
              detail.removeAttribute('open');
            }
          });
      }
    }
  };
})(jQuery);
