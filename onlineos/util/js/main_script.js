jQuery(document).ready(function($){

jQuery.fn.exists = function(){return jQuery(this).length > 0;}	

	$.ajax({complete: function(){
			//alert('ok'); Quando eu tirava essa função o ajax parava de funcionar		
        }
       });
	
	/*Função que exibe notificações dinâmicas do lado direito da tela, exibe por 3 segundos e depois some*/
	function messageNotification(str){

	var notSameText = ($('.jGrowl-message').html() == null || ($('.jGrowl-message:contains('+str+')').length == 0))

	 if(notSameText && str.indexOf("Requested URL not found") == -1) {
	            $.jGrowl(str,{
	                    header: '<g:message code="message.notification" />',
						glue: 'before',
						speed: 2000,
						easing: 'easeInOutExpo',
						life: 3000,
						animateOpen: {
							height: "show",
							width: "show"
						},
						animateClose: {
							height: "hide",
							width: "show"
						}
					});
	        }
	}
    
        //jQuery.support.cors = true;
        function handleError(XMLHttpRequest, textStatus, e) {
            var x = XMLHttpRequest;
            if(x.status==0){
                <%//messageNotification('<g:message code="you.are.offline" />');%>
            }else if(x.status==404){
                messageNotification('<g:message code="requested.url.not.found" />');
            }else if(x.status==500){
                messageNotification('<g:message code="internal.server.error" />');
            }else if(e=='parsererror'){
                messageNotification('<g:message code="error.parsing.json.request.failed" />');
            }else if(e=='timeout'){
                messageNotification('<g:message code="request.time.out" />');
            }else {
                //alert(e);
                //messageNotification('<g:message code="unknow.error" />\n'+x.responseText);
            }
        }

        $.ajaxSetup({ error:handleError});


    $('#menuHorizontal a').each(function(){
        $(this).attr('onclick',"jQuery.ajax({type:'POST', url:'"+$(this).attr('href')+"',success:function(data,textStatus){jQuery('#output').html(data);},error:function(XMLHttpRequest,textStatus,errorThrown){}});return false;");
    });

    $('#header_profile a').each(function(){
       $(this).attr('onclick',"jQuery.ajax({type:'POST', url:'"+$(this).attr('href')+"',success:function(data,textStatus){jQuery('#output').html(data);},error:function(XMLHttpRequest,textStatus,errorThrown){}});return false;");
    });
    
    $("#carregar").bind("ajaxComplete", function(transport) {
        //if(!$('#tabs li:eq(2) a').hasClass("current") || $('#tabs li:eq(2) a').hasClass("clicou"))
            $(this).fadeOut();})
            .bind("ajaxStop", function() {
		    $(this).fadeOut();})
		    .bind("ajaxError", function() {
		    $(this).fadeOut();})
		    .bind("ajaxSend", function() {
		    $(this).fadeIn();})
		    .bind("complete", function() {
		    $(this).fadeIn();});

        /*ToolTip*/
        if($(".tip").length)
		    $(".tip").tipTip({maxWidth: "auto",defaultPosition: "top", edgeOffset: 5});        
        
        
		if($('span[class^=ui-selectmenu]').length)
            $('span[class^=ui-selectmenu]').css('font-size','20px');

        if($('input[name^="date"]').length)
		    $('input[name^="date"]').attr('readonly', 'true');

        /*
         * Pensar numa forma de fazer isso dinamico ou criar um para cada lingua, assim como o datepicker
         */
        if($('input[name^="date"]').length)
            $('input[name^="date"]').datetimepicker({
                     timeText: '<g:message code="horario" />',
                     hourText: '<g:message code="hora" />',
                     minuteText: '<g:message code="minuto" />',
                     currentText: '<g:message code="data.atual" />',
                     closeText: '<g:message code="close" />',
                     minDate: 0
            });            
            
        if(langJS == 'PT'){//Ou um integer, sei lá
			// CONFIGURAÇÃO DO DATEPICKER DO JQUERYUI PARA PT-BR
			$.datepicker.setDefaults({dateFormat: '${message(code:'dtFormatCalendar')}',
	                          dayNames: ['${message(code:'domingo')}','${message(code:'segunda')}','${message(code:'terca')}','${message(code:'quarta')}','${message(code:'quinta')}','${message(code:'sexta')}','${message(code:'sabado')}','${message(code:'domingo')}'],
	                          dayNamesMin: ['${message(code:'domingoabrev')}','${message(code:'segundaabrev')}','${message(code:'tercaabrev')}','${message(code:'quartaabrev')}','${message(code:'quintaabrev')}','${message(code:'sextaabrev')}','${message(code:'sabadoabrev')}','${message(code:'domingoAbrev')}'],
	                          dayNamesShort: ['${message(code:'domingoabrev2')}','${message(code:'segundaabrev2')}','${message(code:'tercaabrev2')}','${message(code:'quartaabrev2')}','${message(code:'quintaabrev2')}','${message(code:'segundaabrev2')}','${message(code:'sabadoabrev2')}','${message(code:'domingoAbrev2')}'],
	                          monthNames: ['${message(code:'janeiro')}','${message(code:'fevereiro')}','${message(code:'março')}','${message(code:'abril')}','${message(code:'maio')}','${message(code:'junho')}','${message(code:'julho')}','${message(code:'agosto')}','${message(code:'setembro')}', '${message(code:'outubro')}','${message(code:'novembro')}','${message(code:'dezembro')}'],
	                          monthNamesShort: ['${message(code:'janeiroabrev')}','${message(code:'fevereiroabrev')}','${message(code:'marcoabrev')}','${message(code:'abrilabrev')}','${message(code:'maioabrev')}','${message(code:'junhoabrev')}','${message(code:'julhoabrev')}','${message(code:'agostoabrev')}','${message(code:'setembroabrev')}', '${message(code:'outubroabrev')}','${message(code:'novembroabrev')}','${message(code:'dezembroabrev')}'],
	                          nextText: '${message(code:'proximo')}',
	                          prevText: '${message(code:'anterior')}'
	        });
        }
        
        if($('span').length)
            $('span').each(function(){
            if($(this).hasClass('ui-selectmenu-status'))
                $(this).after('<br/><br/><br/>');
            });        

        $('#carregar').height($(window).height() < 768 ? 768+200 : $(window).height()+320);       

        function resizeLoading() {
            $('#carregar').height($(window).height() < 768 ? 768+200 : $(window).height()+320);
        };

        var resizeTimer;
        $(window).resize(function() {
            if($(window).width() > 800)
                $('#footer').css("style","width:"+$(window).width()+"px");
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(resizeLoading, 100);
        });
        
        //Caso o sistema não encontre a imagem, colocar uma imagem padrao
        $('img').error(function(){
         $(this).attr('src', 'util/img/no_image.png');
        });

        $('#j_username_label').labelOver('over-login');
        $('#j_password_label').labelOver('over-login');

	});

/* Desabilitar botão direito
function click() {
    if (event.button==2||event.button==3) {
        oncontextmenu='return false';
    }
}
document.onmousedown=click
document.oncontextmenu = new Function("return false;")
*/

  function f_filterResults(n_win, n_docel, n_body) {
        var n_result = n_win ? n_win : 0;
        if (n_docel && (!n_result || (n_result > n_docel)))
            n_result = n_docel;
        return n_body && (!n_result || (n_result > n_body)) ? n_body : n_result;
    }
  function f_clientHeight() {
        return f_filterResults (
            window.innerHeight ? window.innerHeight : 0,
            document.documentElement ? document.documentElement.clientHeight : 0,
            document.body ? document.body.clientHeight : 0
        );
    }
    function verificaBrowser()
    {
        var browserName = navigator.appName;

        if (browserName == "Microsoft Internet Explorer")
        {
            if(location.href.indexOf("/installnewbrowser.php") < 0) {
            	alert( "Seu navegador não suporta o conteúdo deste site" );
            	location.href("installnewbrowser.php");
            }
        }
    }

    verificaBrowser();
