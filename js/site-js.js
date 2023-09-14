jQuery(function ($) {

$( ".burger" ).click(function() {
  $(this).siblings('.mobile-menu').slideToggle();
   $(this).siblings('.mobile-menu').toggleClass('mobile-active');
  $(this).toggleClass('menu-active');
})


if ($('.scroll').length) {
$('.scroll').on('click', function () {
    window.scrollTo({
        top: 880,
        behavior: 'smooth',
    })

})
}





// projects Slider
    $('.my-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,             
        dots: true,
        arrows: true,
        adaptiveHeight: true,
        prevArrow: '<div class="slick-prev"><i aria-hidden="true" class="fas fa-arrow-left"></i></div>',
        nextArrow: '<div class="slick-next"><i aria-hidden="true" class="fas fa-arrow-right"></i></div>',
               responsive: [
            {
                breakpoint: 979,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 479,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });


    // // // testimonials Slider
    // $('.testimonial-slider').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     infinite: true,             
    //     dots: true,
    //     arrows: true,
    //     adaptiveHeight: true,
    //     speed: 500,
    //     fade: false,
    //     cssEase: 'linear',
        // prevArrow: '<div class="slick-prev"><i aria-hidden="true" class="fas fa-arrow-left"></i></div>',
        // nextArrow: '<div class="slick-next"><i aria-hidden="true" class="fas fa-arrow-right"></i></div>',
    // });



    const testimonialSliders = document.querySelectorAll('.testimonial-slider')
    if (testimonialSliders)
        testimonialSliders.forEach((slider) => {
            $(slider).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                // default slick speed is 300
                const currentHeight = slick.$slides[currentSlide].firstElementChild.clientHeight
                const nextHeight = slick.$slides[nextSlide].firstElementChild.clientHeight

                // if the current slide is bigger than the next slide, the navigation may overlap.
                // if we only set it to animate after the slides finish transitioning, the reverse may happen
                // by comparing the heights and setting different timeouts we can avoid this
                setTimeout(() => {
                    $(slider).find('.slick-track').animate({
                        height: slick.$slides[nextSlide].firstElementChild.clientHeight,
                    }, 250)
                }, currentHeight > nextHeight ? 300 : 0)
            })

            $(slider).slick({
                autoplay: false,
                infinite: true,
                adaptiveHeight: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                // fade: false,
                swipe: true,
                prevArrow: '<div class="slick-prev"><i aria-hidden="true" class="fas fa-arrow-left"></i></div>',
                nextArrow: '<div class="slick-next"><i aria-hidden="true" class="fas fa-arrow-right"></i></div>',
                autoplaySpeed: 10000,

                //   centerMode: true,
                //   centerPadding: '60px',
             


            })

        })



    
//testttttttttt



// / Calculate the heighest slide and set a top/bottom margin for other children.
// As variableHeight is not supported yet: https://github.com/kenwheeler/slick/issues/1803
// var maxHeight = -1;
// $('.testimonial-slider .slick-slide').each(function() {
//   if ($(this).height() > maxHeight) {
//     maxHeight = $(this).height();
//   }
// });
// $('.testimonial-slider .slick-slide').each(function() {
//   if ($(this).height() < maxHeight) {
//     $(this).css('margin', Math.ceil((maxHeight-$(this).height())/2) + 'px 0');
//   }
// });



























// content image img slider
    $('.image-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,   
        dots: true,
        arrows: true,
        prevArrow: '<div class="slick-prev"><i aria-hidden="true" class="fas fa-arrow-left"></i></div>',
        nextArrow: '<div class="slick-next"><i aria-hidden="true" class="fas fa-arrow-right"></i></div>',
    });


// Slideout
        $('[data-group]').each(function() {
            var $allTarget = $(this).find('[data-target]'); 
            var $allClick = $(this).find('[data-click]');
            var activeClass = 'active'; // if want for stylying


            $($allClick).unbind().click(function() {

                //close opened siblings             
                $('[data-group]').not($(this).parent()).attr('data-status', 'closed')     
                $('[data-status=\'closed\']').children('.content-hidden').slideUp(250)


                 // target hidden content
                 $($allTarget).slideToggle();
                 $($allTarget).parent().attr('data-status',$(self).parent().attr('data-status') === 'opened' ? 'closed' : 'opened',)
                });         
        })
    


// Scroll active links
$('section').each(function() {
    var height = $(this).height();
    var offsetTop = $(this).offset().top;
    var menuHeight = $('.site-header').innerHeight();
    var id = $(this).attr('id');
    var $itemMenu = $('.desktop-menu a[href="#' + id + '"]'); 

    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if(offsetTop - menuHeight < scrollTop && offsetTop + height - menuHeight > scrollTop) {
            $itemMenu.addClass('active');
        } else {
            $itemMenu.removeClass('active');
        }
    });

});



// to Show hidden content in section
$('.projects-slider').each(function() {
    var height = $(this).height();
    var offsetTop = $(this).offset().top;
    var menuHeight = $('.site-header').innerHeight();
    var id = $(this).attr('id');
    var $this = $('.projects-slider');  

    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if(offsetTop - menuHeight < scrollTop && offsetTop + height - menuHeight > scrollTop) {
            $this.addClass('show_hidden_content');
        } else {
            $this.removeClass('show_hidden_content');
        }

    });

});


// Skills bubble
$('.skills-bar').each(function() {
    $(this).hover(function() {
        $(this).find('#talk-bubble').toggleClass('active')
    })
})

})



// // Hover zoom vanilla js
// const box = document.getElementById("box");
// const img = document.getElementById("image");

// box.addEventListener("mousemove", (e) => {

//     const x = e.clientX - e.target.offsetLeft;
//     const y = e.clientY - e.target.offsetTop;

//     console.log(x, y);

//     img.style.transformOrigin = `${x}px ${y}px`;
//     img.style.transform = "scale(1.5)";

// });

// box.addEventListener("mouseleave", (e) => {
// img.style.transformOrigin = "center center";
// img.style.transform = "scale(1)";

// });


// display text
    const myDiv = document.getElementById('inner-text');
    // Split the text into individual characters
    const text = 'Gabriel Sciacca Dias';
    const characters = text.split('');
        // Loop through the characters and add each one to the <div>
        characters.forEach((character, index) => {
      // Use setTimeout to add each character with a delay
      setTimeout(() => {
        myDiv.innerHTML += character;
      }, index * 100); // The delay is 100ms * the index of the character
});