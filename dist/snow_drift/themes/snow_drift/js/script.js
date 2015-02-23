(function(w, d, $) { 'use strict';

  function Nav() {
    var self = this;
    this.$el = $('#snow-drift-nav');

    this.list = {};
    this.list.$el = this.$el.find('ul.nav');

    this.button = {};
    this.button.template = d.getElementById('snow-drift-nav-template').innerHTML;
    this.button.$el = $(this.button.template);

    this.button.$el.on('click', function() {
      var navClass = 'show-nav';
      var state = 'show';
      var $button = self.button.$el;
      var $nav = self.$el;
      var $els = $('#snow-drift-body-wrapper');
      var docCookies = SnowDrift.docCookies;
      var clearTimeout = w.clearTimeout;

      if (docCookies.getItem('snowDriftOpenNav')) {
        $els.addClass(navClass);
        $button.addClass(navClass);
        state = 'hide';
        var timeout = w.setTimeout(function() {
          $els.removeClass(navClass);
          $button.removeClass(navClass);
          docCookies.removeItem('snowDriftOpenNav', '/');
          state = 'show';
        }, 3000);
      }

      $nav.on('mouseenter focus click keydown', function() {
        clearTimeout(timeout);
      });

      return function() {
        clearTimeout(timeout);
        if (state === 'show') {
          $els.addClass(navClass);
          $button.addClass(navClass);
          docCookies.setItem('snowDriftOpenNav', 'Fri, 31 Dec  9999', '/');
          state = 'hide';
        } else {
          $els.removeClass(navClass);
          $button.removeClass(navClass);
          docCookies.removeItem('snowDriftOpenNav', '/');
          state = 'show';
        }
      };
    }());

    this.$el.after(this.button.$el);

  }

  w.SnowDrift.nav = new Nav();
}(window, document, $));
