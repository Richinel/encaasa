var main = function() {
    $(".menu_btn").click(function() {
        $('.mobile_menu').toggle('slideToggle', 'easeOutQuart', 600);
    });

    $(".direct_help").click(function(){
        $(".pn_panel").fadeToggle(175);
    });

    $(".ci_btn").click(function(){
        $(".ci_panel").fadeToggle(175);
    });

    $(".dh_btn").click(function(){
        $(".pn_panel").fadeToggle(175);
    });


    $('.phone_body').hover(
       function(){ $('.phone_content').addClass('hover') },
       function(){ $('.phone_content').removeClass('hover') }
    );


    $(".dh_help_footer").click(function(){
        $(".pn_panel").fadeToggle(175);
    });

    $(".ci_footer").click(function(){
        $(".ci_panel").fadeToggle(175);
    });

    $(".sv_rm").click(function(){
        $(".pn_panel2").fadeToggle(175);
    });

    $(".close").click(function(){
        $(".pn_panel").fadeOut(175);
        $(".pn_panel2").fadeOut(175);
        $(".ci_panel").fadeOut(175);
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


