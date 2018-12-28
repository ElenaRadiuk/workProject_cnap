( function( $ ) {

	$( document ).ready(function( $ ) {

		// Implement go to top.
		var $scroll_obj = $( '#btn-scrollup' );
		if ( $scroll_obj.length > 0 ) {

			$( window ).scroll( function() {
				if ( $( this ).scrollTop() > 100 ) {
					$scroll_obj.fadeIn();
				} else {
					$scroll_obj.fadeOut();
				}
			});

			$scroll_obj.click( function() {
				$( 'html, body' ).animate( { scrollTop: 0 }, 600 );
				return false;
			});
		}

        //page services - go to top
        $(".tabs .sector").on("click","a", function (event) {
            event.preventDefault();

            var id  = $(this).attr('href'),
                top = $(id).offset().top;


            if (top>300) {
                // console.log(top);
                $('html, body').animate( { scrollTop: 0 }, 800 );
            }
        });



        $(".tabs-mobile .tabs__caption").click(function (event) {
            event.preventDefault();

            var id  = $(this).siblings();
            console.log(id);
            var top = $(id).offset().top;
            console.log(top);
            console.log(id.height());


                // console.log(top);
                $('html, body').animate( { scrollTop: top }, 800 );
                // $('html, body').animate( {scrollTop: $('#div1')[0].scrollHeight - $('#div1')[0].clientHeight} ,800 );
                // $('html, body').animate({ scrollTop: $(id).height()}, 800);


        });



        $('ul.tabs__caption').each(function() {
            $(this).find('li').each(function(i) {
                $(this).click(function(){
                    $(this).addClass('active').siblings().removeClass('active')
                        .closest('div.tabs').find('div.tabs__content').removeClass('active').eq(i).addClass('active');
                });
            });
        });

        //go to the desired tab from the main page
        var tabsMobile = $('.tabs-mobile');
        var tabsDesktop = $('.tabs');

        var hash = document.location.hash;
        var tabs = $('li.sector');
        var tabsItemMob = $('.accordion_item');
        var allcontent = $('.tabs .tabs__content');
        // console.log(tabs);
        // console.log(allcontent);


        if(hash && (tabsDesktop.css('display')=='block')){

            // console.log('start');
            // console.log(hash);
            var name = hash.slice(1);
            window.location.hash = '';
            // console.log(name);
            tabs.each(function(i, tab){
                if($(tab).data('name') == name){
                    $(tab).addClass('active');
                }else{
                    $(tab).removeClass('active');
                }
            });

            allcontent.each(function(i, content){
                if($(content).attr('id') == name){
                    $(content).addClass('active');
                    // var topD = $(content).offset().top;
                    // console.log(topD);
                    // if (top>500) {
                    //     $('html, body').animate({scrollTop: topD}, 800);
                    // }
                }else{
                    $(content).removeClass('active');
                }
            });
            // console.log('finish dsk');

        } else if(hash && (tabsMobile.css('display')=='block')){
            // console.log('mob');
            var name = hash.slice(1);
            window.location.hash = '';
            // console.log(name);
            // tabActivate(name);
            tabsItemMob.each(function(i, tab){
                if($(tab).data('name') == name){

                    var topM = $(tab).offset().top;
                    // console.log(top);
                    $('html, body').animate( { scrollTop: topM }, 800 );
                    $(tab).addClass('active');
                    $(tab).find("div.tabs__content").slideToggle(350);
                }else{
                    $(tab).removeClass('active');
                    $(tab).find("div.tabs__content").slideUp(350);
                }
            });

        }





		//mob

        // $("div.tabs__caption").on("click", function() {
        //     o = $(this).parents(".accordion_item"), n = o.find("div.tabs__content"),
        //         o.hasClass("active") ? (o.removeClass("active"),
        //             n.slideUp()) : (o.addClass("active"), n.stop(!0, !0).slideDown(),
        //             o.siblings(".active").removeClass("active").children(
        //                 "div.tabs__content").stop(!0, !0).slideUp())
        // });

        // $("div.tabs__caption").on("click", function() {
        //     o = $(this).parents(".accordion_item"), n = o.find("div.tabs__content"),
        //         o.hasClass("active") ? (o.removeClass("active"),
        //             n.hide()) : (o.addClass("active"), n.show(),
        //             o.siblings(".active").removeClass("active").children(
        //                 "div.tabs__content").hide())
        // });

        var o, n;
        $("div.tabs__caption").on("click", function() {
            o = $(this).parents(".accordion_item"), n = o.find("div.tabs__content"),
                o.hasClass("active") ? (o.removeClass("active"),
                    n.slideUp(350)) : (o.addClass("active"), n.slideToggle(350),
                    o.siblings(".active").removeClass("active").children(
                        "div.tabs__content").slideUp(350))
        });



        //inner accordion
        $('.toggle').click(function(e) {
            e.preventDefault();

            var $this = $(this);

            if ($this.next().hasClass('show')) {
                $this.next().removeClass('show');
                $this.next().slideUp(350);
            } else {
                $this.parent().parent().find('li .inner').removeClass('show');
                $this.parent().parent().find('li .inner').slideUp(350);
                $this.next().toggleClass('show');
                $this.next().slideToggle(350);
            }
        });

	});


} )( jQuery );

