
/* JavaScript for Compro theme */

(function ($) {
  Drupal.behaviors.comproTheme = {
    attach: function (context, settings) {
      if (context === document) {
        // Give external links target="_blank"
        var $a = $('a');
        $a.each(function (i) {
          if (this.href.length && this.hostname !== window.location.hostname) {
            $(this).attr('target', '_blank');
          }
        });

        // Menu functionality
        $mainMenu = $('.menu--main');

        // Wrap dropdown for desktop
        $mainMenu.find('> .menu > .menu-item > .menu').wrapInner("<div class='dropdown-wrapper'></div>"); //@fixme: can this be done backend?

        $dropMenu = $('.dropdown-wrapper');

        // Handle hamburger clicks.
        $('.hamburger').on('click', function () {
          $(this).toggleClass('is-active');
          $(this).parents('header').toggleClass('is-active');

          if ($(this).parents('header').hasClass('menu-open')) {
            $(this).parents('header').removeClass('menu-open menu-child-open');
          }

        });

        // Open/Close drop menu
        $mainMenu.find('> .menu > li > span').on('click', function () {
          $mainMenu.parents('header').toggleClass('menu-open');
          $mainMenu.parents('header').toggleClass('menu-child-open');
          $dropMenu.find('> li').removeClass('menu-open');
          $dropMenu.find('> li:first-child').addClass('menu-open');
          $(this).toggleClass('menu-open');
        });

        // Open/Close sub-levels of drop menu
        $dropMenu.find('> li > span').on('click', function () {
          $(this).parent('li').siblings('.menu-open').removeClass('menu-open');
          $(this).parent('li').addClass('menu-open');
          $(this).parents('header').toggleClass('menu-child-open');
          $mainMenu.find('> .menu > .menu-item > .menu')
              .height($(this).next().find('ul.menu').outerHeight());
        });
      }
    }
  };

})(jQuery);
