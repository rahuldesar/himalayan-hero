$(document).ready(function () {
        $('.banner').owlCarousel({
            loop: true,
        margin:10,
    navText: [
			"<i class='fa fa-chevron-left'></i>",
			"<i class='fa fa-chevron-right'></i>"
    ],
			responsive:{
            0: {
            nav: false,
        dots: false,
        items: 1
    },
				600: {
            nav: true,
        dots: false,
        items: 1
    },
				800: {
            nav: true,
        dots: false,
        items:1
    },
				1050: {
            nav: true,
        dots: false,
        items: 1
    }
}
})
            $('.owl-testimonial').owlCarousel({
                loop: true,
            margin:10,
            nav:true,
            navText: [
                                "",
                                ""
                                ],
					responsive:{
                0: {
                items: 1
    },
							600:{
                items: 1
    },
							1000:{
                items: 1
    }
}
})

    
            $('.popular-big-slider').owlCarousel({
                loop: true,
            margin:10,
            nav:true,
            dots:false,
            navText: [
					"<i class='fa fa-chevron-left'></i>",
					"<i class='fa fa-chevron-right'></i>"
            ],
			    responsive:{
                0: {
                items: 1
        },
			        600:{
                items: 1
        },
			        1000:{
                items: 1
        }
    }
})

            $('.mini-slider').owlCarousel({
                loop: true,
            margin:50,
            navText: [
							"<i class='fa fa-chevron-left'></i>",
							"<i class='fa fa-chevron-right'></i>"
    ],
					responsive:{
                0: {
                nav: false,
            dots:true,
            items:1
        },
							600:{
                nav: false,
            dots:true,
            items:2
        },
							800:{
                nav: false,
            dots:true,
            items:3
        },
							1050:{
                nav: true,
            dots:false,
            items:4
        }
}
})
            $('.get-activity').owlCarousel({
                loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: false,
            dots: false,
            navText: ["", ""],
				responsive: {
                0: {
                items: 1
        },
					600: {
                items: 3
        },
					1100: {
                items: 5
        }
    }
})


});
