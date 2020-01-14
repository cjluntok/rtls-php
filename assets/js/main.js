$(document).ready(function() {

        window.onscroll = function() {
            const section = document.querySelector('#page-nav-container');

            if (this.scrollY <= 40) {
                $(section).removeClass("fixed");
            } else {
                $(section).addClass("fixed");
            }

        }
        
        var backtotop = $('#backtotop');

        $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            backtotop.addClass('show');
        } else {
            backtotop.removeClass('show');
        }
        });

        backtotop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '200');
        });

        
        const $dropdown = $(".dropdown");
        const $dropdownToggle = $(".dropdown-toggle");
        const $dropdownMenu = $(".dropdown-menu");
        const showClass = "show";
        
        $(window).on("load resize", function() {
          if (this.matchMedia("(min-width: 768px)").matches) {
            $dropdown.hover(
              function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
              },
              function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
              }
            );
          } else {
            $dropdown.off("mouseenter mouseleave");
          }
        });

});