$(window).scroll(function(){
    var wScroll = $ (this).scrollTop();

    $('.jumbotron img').css({
        'transform' : 'translate(0px,'+wScroll/6+'%)'
    });

    $('.jumbotron h1').css({
        'transform' : 'translate(0px,'+wScroll/3+'%)'
    }); 

    $('.jumbotron h1').css({
        'transform' : 'translate(0px,'+wScroll/1.5+'%)'
    }); 
    // about
    if(wScroll > $('.pkanan').offset().top - 450) {
        $('.pkanan').each(function(i) {
            setTimeout(function() {
                $('.pkanan').eq(i).addClass('pmuncul');
            }, 300);
        }); 
    }

    if(wScroll > $('.pkiri').offset().top - 450) {
        $('.pkiri').each(function(i) {
            setTimeout(function() {
                $('.pkiri').eq(i).addClass('pmuncul');
            }, 300);
        }); 
    }

    // paradiseCat
    if(wScroll > $('.paradiseCat').offset().top - 350) {
        $('.paradiseCat .img-thumbnail').each(function(i) {
            setTimeout(function() {
                $('.paradiseCat .img-thumbnail').eq(i).addClass('muncul');
            }, 300 * (i+1));
        }); 
    }

    if(wScroll > $('.paradiseCat').offset().top - 50) {
        $('.paradiseCat .img-thumbnail-1').each(function(i) {
            setTimeout(function() {
                $('.paradiseCat .img-thumbnail-1').eq(i).addClass('muncul');
            }, 300 * (i+1));
        }); 
    }
});