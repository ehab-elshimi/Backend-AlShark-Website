
// footer slick slider
$('.multiple-items').slick({
    infinite: true,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1924,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,

            }
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },



    ]
});

