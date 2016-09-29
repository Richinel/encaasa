var main = function() {
    $(".menu_btn").click(function() {
        $('.mobile_menu').toggle('slideToggle', 'easeOutQuart', 600);
    });

    $(".direct_help").click(function(){
        $(".pn_panel").fadeToggle(500);
    });

    $(".mb_button").click(function(){
        $(".pn_panel").fadeToggle(500);
    });


    $('.phone_body').hover(
       function(){ $('.phone_content').addClass('hover') },
       function(){ $('.phone_content').removeClass('hover') }
    );


    $(".dh_help_footer").click(function(){
        $(".pn_panel").fadeToggle(500);
    });

    $(".sv_rm").click(function(){
        $(".pn_panel2").fadeToggle(500);
    });

    $(".close").click(function(){
        $(".pn_panel").fadeOut(500);
        $(".pn_panel2").fadeOut(500);
    });

    $.each($('div'), function(i, el){
		$(el).css({'opacity':0});
		    
		setTimeout(function(){
		    $(el).animate({
		    	'opacity':1.0
		    }, 450);
		},200 + ( i * 50 ));
	});

    $(function() {
        $( "#accordion").accordion({
            collapsible: true,
            active: 'none',
            heightStyle: "content"
        });
    });
};

$(document).ready(main);


