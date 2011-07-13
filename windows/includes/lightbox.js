$(document).ready(function() {
	/*$('.lightbox').click(function(){
		$('.backdrop, .box').animate({'opacity':'.50'}, 300, 'linear');
		$('.box').animate({'opacity':'1.00'}, 300, 'linear');
		$('.backdrop, .box').css('display', 'block');
	});*/
	
	$('.romList').click(function() {

		var gameClicked = this.id;
		
		$.ajax({
		type:"GET",
		url:'includes/functions.php',
		error:
			function(){
				//do something depressing
			},
		success:
			function(data){
				$.get("includes/test.php?id="+gameClicked, function(data){
					alert(data)
				});
			}
		});
    });
});
	
	/*jQuery('<div>', {
		id: 'mame',
	}).appendTo('body');
	
	$('#mame').load('mame.html');
	
	$('.close').click(function(){
		close_box();
	});

	$('.backdrop').click(function(){
		close_box();
	});
	
	$('.backdrop, .box1').animate({'opacity':'.50'}, 300, 'linear');
				$('.box1').animate({'opacity':'1.00'}, 300, 'linear');
				//$('.backdrop, .box1').css('display', 'block');
	
	$('.close').click(function(){
		close_box();
	});

	$('.backdrop').click(function(){
		close_box();
	});*/
	
	/*function close_box() {
		/*$('.backdrop, .box').animate({'opacity':'0'}, 300, 'linear', function() {
			$('.backdrop, .box').css('display', 'none');
		});
		alert(something);
		
		$(something).remove();
	}*/