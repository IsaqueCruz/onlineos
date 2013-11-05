$('document').ready(function(){
	$(".hide").hide();

	$(".fotos-bistro .list-recados").scrollable({ 
		vertical: true, 
		next: ".fotos-bistro .next-01",
		prev: ".fotos-bistro .prev-01"
	});
	
	$(".fotos-cafe .list-recados").scrollable({ 
		vertical: true, 
		next: ".fotos-cafe .next-01",
		prev: ".fotos-cafe .prev-01"
	});
	
	$("#content-horizontal").scrollable({
		mousewheel: true,
		circular: true,
		speed: 1500
	}).navigator();
		
	$(".list-recados").scrollable({ 
		vertical: true, 
		next: ".next-01",
		prev: ".prev-01"
	});
	
	
	$(".abrir-mapa-bistro").click(function(){
		$("#setor-bistro .mapa").show(500);
		$("#setor-cafe .mapa").hide(500);
		$(".fotos-cafe").hide(500);
	});
	
	$(".abrir-mapa-cafe").click(function(){
		$("#setor-cafe .mapa").show(500);
		$("#setor-bistro .mapa").hide(500);
		$(".fotos-bistro").hide(500);
	});
	
	$(".abrir-galeria-bistro").click(function(){
		$(".fotos-bistro").show(500);
		$(".fotos-cafe").hide(500);
		$("#setor-cafe .mapa").hide(500);
	});
	
	$(".abrir-galeria-cafe").click(function(){
		$(".fotos-cafe").show(500);
		$(".fotos-bistro").hide(500);
		$("#setor-bistro .mapa").hide(500);
	});
	
	$(".next").mouseover(function(){
		$(this).animate({
			left: '+=20'
		});
		$(this).animate({
			left: '-=20'
		});
	});
	
	$(".prev").mouseover(function(){
		$(this).animate({
			left: '-=20'
		});
		$(this).animate({
			left: '+=20'
		});
	});
	
	$(".next,.prev,.navi li, .bt-voltar").click(function(){
		$(".hide").hide(500);
	});
	
	$(".navi li,.bt-voltar").click(function(){
		$(".next,.prev").css("display","block");
		$(".sumir").css("display","block")
	});


$('a:not(".ui-slider-handle, .notAjax")').each(function(){
    if(!$(this).hasClass('notAjax'))
        $(this).attr('onclick',"jQuery.ajax({type:'POST', url:'"+$(this).attr('href')+"',success:function(data,textStatus){jQuery('#output').html(data);}});return false;");
});

$('#menuHorizontal a, .copyright .menu a').each(function(){
    $(this).attr('onclick',"jQuery.ajax({type:'POST', url:'"+$(this).attr('href')+"',success:function(data,textStatus){jQuery('#body').html(data);}});return false;");
});

$('a:not(".notMenu"),a:not([href="javascript:void(0)"])').mouseup(function() {

    if($(this).attr("href").indexOf("javascript") < 0 && !$(this).hasClass("nyroModal")){

        if($('.current') && !($(this).hasClass('ui-slider-handle') || $(this).hasClass('ui-slider-range')))
                $('.current').removeClass('current');

        if(!$(this).hasClass('menuVertical') && !($(this).hasClass('ui-slider-handle') || $(this).hasClass('ui-slider-range'))){
            if($('.current'))
                $('.current').removeClass('current');
        }

        var strLnk = $(this).attr('href');

        if(strLnk.indexOf('dominio=')!=-1)
            strLnk = strLnk.split('dominio')[0]

        if(strLnk.indexOf('tecnico')!=-1){
            $('#tabs li:eq(3) a').addClass('current');
        }else
        if(strLnk.indexOf('recurso')!=-1){
            $('#tabs li:eq(0) a').addClass('current');
        }else
        if(strLnk.indexOf('servico')!=-1){
            $('#tabs li:eq(4) a').addClass('current');
        }else
        if(strLnk.indexOf('tipo')!=-1){
            $('#tabs li:eq(5) a').addClass('current');
        }else
        if(strLnk.indexOf('/status')!=-1){
            $('#tabs li:eq(6) a').addClass('current');
        }else
        if(strLnk.indexOf('OS')!=-1){
            $('#tabs li:eq(2) a').addClass('current');
            $('#tabs li:eq(2) a').addClass('clicou');
        }else
        if(strLnk.indexOf('venda')!=-1){
            $('#tabs li:eq(8) a').addClass('current');
        }
    }

});

    setTimeout(function (){ $("#item1").trigger('click');}, 500);

    $('a .tutorial').each(function(){
    $(this).attr('onclick',$(this).attr('href'));
    });

});
