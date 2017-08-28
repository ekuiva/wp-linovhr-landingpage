// Owlcarosoul Homepage
var url = window.location.pathname;
$('.slider').owlCarousel({
    margin:10,
    nav:true,
    navText: ["<img src='" + url + "assets/images/left.png'>", "<img src='" + url + "assets/images/right.png'>"],
    responsive:{
        0:{
            items: 1,
            nav: false
        },
        800: {
            items: 1,
            nav: false
        },
        1000:{
            items:1
        }
    }
});
