jQuery(document).ready(function($) {

	var my_nav = $('.navbar-sticky');
	// grab the initial top offset of the navigation
	var sticky_navigation_offset_top = my_nav.offset().top;

	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top

		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) {
			my_nav.addClass( 'stick' );
		} else {
			my_nav.removeClass( 'stick' );
		}
	};

	var initio_parallax_animation = function() {
		$('.parallax').each( function(i, obj) {
			var speed = $(this).attr('parallax-speed');
			if( speed ) {
				var background_pos = '-' + (window.pageYOffset / speed) + "px";
				$(this).css( 'background-position', 'center ' + background_pos );
			}
		});
	}

	// run our function on load
	sticky_navigation();

	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_navigation();
		 initio_parallax_animation();
	});

	// back to top button
    $(window).scroll(function () {
       if ($(this).scrollTop() > 50) {
           $('#back-to-top').fadeIn();
       } else {
           $('#back-to-top').fadeOut();
       }
   });

   ! function(d) {
    var c = "portfilter";
    var b = function(e) {
        this.$element = d(e);
        this.stuff = d("[data-tag]");
        this.target = this.$element.data("target") || ""
    };
    b.prototype.filter = function(g) {
        var e = [],
            f = this.target;
        this.stuff.fadeOut("fast").promise().done(function() {
            d(this).each(function() {
                if (d(this).data("tag") == f || f == "all") {
                    e.push(this)
                }
            });
            d(e).show()
        })
    };
    var a = d.fn[c];
    d.fn[c] = function(e) {
        return this.each(function() {
            var g = d(this),
                f = g.data(c);
            if (!f) {
                g.data(c, (f = new b(this)))
            }
            if (e == "filter") {
                f.filter()
            }
        })
    };
    d.fn[c].defaults = {};
    d.fn[c].Constructor = b;
    d.fn[c].noConflict = function() {
        d.fn[c] = a;
        return this
    };
    d(document).on("click.portfilter.data-api", "[data-toggle^=portfilter]", function(f) {
        d(this).portfilter("filter")
    })
}(window.jQuery);

});
