jQuery(window).load(function(){
    var totalHeight  = jQuery('.container-site').innerHeight();
    var windowHeight = jQuery(window).innerHeight();
    var scrollHeight = totalHeight - windowHeight;

    jQuery('html,body').animate({
            scrollTop: 0
    }, 100);

    // function nextPage() {
    //     var linkNextPage = jQuery('.next-article').attr('href');
    //     if(typeof linkNextPage != 'undefined'){
    //         linkChange = setTimeout(function(){
    //             document.location.href=linkNextPage;
    //         }, 1000);
    //     }
    // }
    // function removeNextPage() {
    //     clearTimeout(linkChange);
    // }

    if(scrollHeight > 0){
        jQuery('.progressBarre').fadeIn();
    }

    jQuery(window).scroll(function(){
        var currentScroll = jQuery(window).scrollTop();
        var pourcent =  currentScroll * 100 / scrollHeight;
        jQuery('.progressCurrent').height(pourcent + '%');

        if(currentScroll == scrollHeight){
            //nextPage();
            jQuery('.next-article').addClass('visible');
        }else{
            //removeNextPage();
            jQuery('.next-article').removeClass('visible');
        }
    });

    jQuery('.next-article').mouseenter(function(){
        jQuery('.container-single').addClass('content-hidden');
        removeNextPage();
    });
    jQuery('.next-article').mouseleave(function(){
        jQuery('.container-single').removeClass('content-hidden');
    });

    //Menu
    jQuery('.menu').click(function(){
        jQuery('.menu-items').toggleClass('is-visible');
        jQuery('body').toggleClass('nav-open');
    });
})
