$(document).ready(function() {
	

	/* 전체메뉴 */
	$('.allmenu_open').click(function() {
		$('body').addClass("fixed");
		$('#allMenu').removeClass("fixed").show();
		anioption = {
			time: 0.8,
			easing: 'easeOutCubic'
		};
		$('#allMenu').animate({
			"right": "0"
		}, anioption);
		$('.dim').fadeIn();
		return false;
	});
	$('.allmenu_close').click(function() {
		anioption = {
			time: 0.6,
			easing: 'easeOutCubic'
		};
		$('#allMenu').animate({
			"right": "-100%"
		}, anioption);
		$('body').removeClass("fixed");
		$('.dim').fadeOut();
		return false;
	});
	$('.dim').click(function() {
		anioption = {
			time: 0.6,
			easing: 'easeOutCubic'
		};
		$('#allMenu').animate({
			"right": "-100%"
		}, anioption);
		$('body').removeClass("fixed");
		$('.dim').fadeOut();
	});

	/* 전체메뉴 2뎁스*/
	$("#anb .anb-menu").click(function() {
		if($(this).hasClass('active')){
			$(this).removeClass('active').next('div').slideUp('fast');
			$(this).find('.arrow').html('펼치기');
		}else{
			$(this).addClass('active').next('div').slideDown('fast');
			$(this).find('.arrow').html('접기');
		}
		return false;
	});

	$(".header-lang button").on('click', function() {
		$(this).parent().toggleClass('on').find('.list').slideToggle('fast');
		return false;
	});

	
	$(".allmenu-lang button").on('', function() {
		$(this).parent().toggleClass('on').find('.list').slideToggle('fast');
		return false;
	});

	// animate
	animate();
	$(window).scroll(animate);
	$(window).resize(animate);
	function animate(){
		$('.motion').each(function(index){
			var scrollPos = $(window).scrollTop()+($(window).height()/1.3);
			if(scrollPos > $(this).offset().top){
				$(this).addClass('animate');
			}
		});
	};

	setHelp();
	$(window).scroll(setHelp);
	function setHelp(){
		if($(window).scrollTop() > 240){
			$('.footer-help').addClass('active');
		} else {
			$('.footer-help').removeClass('active');
		}
	}

});	