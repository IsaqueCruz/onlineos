<?php
/*Verifica se o usuário está logado no sistema*/
function is_logged_in(){	
	return isset($_SESSION['user_id']);
}

/* Recupera o nível de acesso do usuário*/
function get_access_level(){
	return $_SESSION['access_level'];
}

function is_admin(){
	return get_access_level() == ACCESS_ADMIN;
}

function is_user(){
	return get_access_level() == ACCESS_USER;
}

function is_responsible(){
	return get_access_level() == ACCESS_RESPONSIBLE;
}

function is_company(){
	return get_access_level() == ACCESS_COMPANY;
}

/*Como já estou criando o sistema multi-lingua sem ainda ter cadastrados as chaves no banco, é bom ter um 
 * retorno de string para preencher os locais em que deveria existir um texto, fica mais fácil assim
 * visualizarmos o que está faltando ser cadastrado no banco, de repente criar uma constante com todas as 
 * chaves existentes e fazer um for e verificar se existe no banco pode ser uma outra solução
 * mas por enquanto fica essa aqui*/
function get_lang($lang, $key){	
	return isset($lang[$key]) ? $lang[$key] : "Undefined";	
}


/*Criar função que verifica se tem cookie remember-me*/
function has_cookie(){
	return false;
}

/*Verifica se o usuario está tentando acessar uma pagina que ele não tem acesso ou que apenas
 * deveria ser encaminhado via sistema*/
function can_see($page){
	/*$is_permitted = false;//Verificar no banco passando a pagina
	if(!$is_permitted || !is_logged_in())
		if(PROD){			
			header("Location: index.php");
			exit();
		} else
			return true;*/
}

###########################################################################
# As funções js abaixo estão aqui para não precisar um include de php/js em cada pagina que os utilizaremos
###########################################################################
function js_head(){
	echo "<script type='text/javascript'>
	
	jQuery(document).ready(function($){		
		$.ajax({complete: function(){}});";
}

function js_footer(){
	js_links_put_ajax();
	js_enable_disable_lateral_menu();
	js_combobox_jquery();
	echo "})(jQuery);
	</script>";
}

function js_combobox_jquery(){
	echo "$(function() {
	    $('select').combobox();
	});";
}


function js_links_put_ajax(){
	echo "$('a:not(\".ui-slider-handle, .notAjax\")').each(function(){
    if(!$(this).hasClass('notAjax'))
        $(this).attr('onclick',\"jQuery.ajax({type:'POST', url:'\"+$(this).attr('href')+\"',success:function(data,textStatus){jQuery('#output').html(data);}});return false;\");
	});
	$('#menuHorizontal a, .copyright .menu a').each(function(){
    $(this).attr('onclick',\"jQuery.ajax({type:'POST', url:'\"+$(this).attr('href')+\"',success:function(data,textStatus){jQuery('.iframeClass').hide();jQuery('#body').html(data);}});return false;\");
	});";
}

function js_enable_disable_lateral_menu(){
	echo "$('a:not(\".notMenu\"),a:not([href=\"javascript:void(0)\"])').mouseup(function() {

    if($(this).attr(\"href\").indexOf(\"javascript\") < 0 && !$(this).hasClass(\"nyroModal\")){

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
        if(strLnk.indexOf('venda')!=-1 || strLnk.indexOf('transacao')!=-1){

            if($('#tabs li:eq(8)').length>0)
                $('#tabs li:eq(8) a').addClass('current');
            else
                $('#tabs li:eq(3) a').addClass('current');
        }
    }

});";
}

/*Retorna o popup com as mensagem de erro/info nas tentativas/visualizações do CRUD*/
function js_display_error_message(){
	$message = "";
	
	if(isset($_SESSION['error'])){
		
		$message = "<script type='text/javascript'>";
		
			foreach ($_SESSION['error'] as $error_msg) {
			
				$message .= " 
				$.jGrowl('$error_msg',{
					header: '".get_lang($lang, 'display_message_title')."',
						glue: 'before',
							speed: 2000,
							easing: 'easeInOutExpo',
						life: 10000,
							animateOpen: {
							height: 'show',
							width: 'show'
							},
						animateClose: {
							height: 'hide',
								width: 'show'
							}
					});";
				}
		$message .= "</script>";
	}
	
	/*Mensagens do sistema*/
	if(isset($_SESSION['info'])){
	
		$errors_message = "<script type='text/javascript'>";
	
		foreach ($_SESSION['info'] as $info) {
				
			$message .= "
			$.jGrowl('$info',{
			header: '".get_lang($lang, 'display_message_title')."',
						glue: 'before',
							speed: 2000,
							easing: 'easeInOutExpo',
						life: 10000,
							animateOpen: {
							height: 'show',
							width: 'show'
							},
						animateClose: {
							height: 'hide',
								width: 'show'
							}
					});";
		}		
	}
	unset($_SESSION['info']);
	unset($_SESSION['error']);


return $message .= "</script>";

}

/* Todos os php que tem formulários tem validação js*/
function js_form_validate(){
	echo "
	var options = {
		beforeSubmit: function() {
			return $('#osForm').validate().form();
		},
		target: '#output'
	};
	$('#osForm').ajaxForm(options);
	
	$.validator.addMethod(\"nowhitespace\", function(value, element) {
		return this.optional(element) || /^\S+$/i.test(value);
	}, ".get_lang($lang, "no.white.space.please").");
	
		$('input#titulo').attr('maxlength', 25);
		$('input#numero').attr('maxlength', 25);
		$('input#nome').attr('maxlength', 40);
		$('input#descricao').attr('maxlength', 50);
		$('textarea#descricao').attr('maxlength', 200);
		$('input#serie').attr('maxlength', 40);
		$('input#modelo').attr('maxlength', 50);
		$('input#email').attr('maxlength', 60);
		$('input#cemail').attr('maxlength', 60);
		$('input#email2').attr('maxlength', 60);
		$('input#cemail2').attr('maxlength', 60);
		$('#obs').attr('maxlength', 254);
		$('#passwd').attr('maxlength', 60);
		$('#passwd').attr('maxlength', 60);
	
		$().ready(function() {
			// validate signup form on keyup and submit
			$('#osForm').validate({
				rules: {
					titulo: {required: true, minlength:5, maxlength:25},
					nome: {required: true, minlength:4, maxlength:40},
					username: {required: true, minlength:3, maxlength:35, nowhitespace: true},
					userRealName: {required: true, minlength:3, maxlength:60},
					tecnicoid: 'required',
					descricao: {required: true,minlength: 2,maxlength:200},
					obs: {required: true,minlength: 5,maxlength:254},
					serie: {required: true,minlength: 2,maxlength:40},
					passwd: {required: true,minlength: 6,maxlength:60},
					modelo: {required: true,minlength: 2,maxlength:50},
					date_previsao: 'required',
					data_previsao: 'required',
					idos_autocomplete: 'required',
					estado: 'required',
					cidade: 'required',
					cidadeid: 'required',
					cidadeid_autocomplete: 'required',
					cidade_autocomplete: 'required',
					idsetor: 'required',
					serie: 'required',
					modelo: 'required',
					clienteid: 'required',
					email: {required:true, email:true, maxlength:60},
					cemail: {required:true, equalTo: '#email'},
					email2: {required:true, email:true, maxlength:60},
					cemail2: {equalTo: '#email2'},
					telefone: {required:true, minlength: 14, maxlength:15}
				},
				messages: {
					titulo: '".get_lang($lang, "please.enter.your.title")."',
					nome: '".get_lang($lang, "please.enter.your.name")."',
					estado: '".get_lang($lang, "select.your.state")."',
					cidade: '".get_lang($lang, "select.your.city")."',
					cidadeid: '".get_lang($lang, "select.your.city")."',
					cidadeid_autocomplete: '".get_lang($lang, "select.your.city")."',
					cidade_autocomplete: '".get_lang($lang, "select.your.city")."',
					idsetor: '".get_lang($lang, "please.select.the.sector")."',
					clienteid: '".get_lang($lang, "please.select.the.user")."',
					<g:isLoggedIn>
					username: {
						required: '".get_lang($lang, "please.enter.a.username")."',
						minlength: jQuery.format(".get_lang($lang, "your.username.must.consist.of.at.least.x.characters").")
					},
					userRealName: {
						required: '".get_lang($lang, "please.enter.your.real.name")."',
						minlength: jQuery.format(".get_lang($lang, "your.user.real.name.must.consist.of.at.least.x.characters").")
					},
					</g:isLoggedIn>
					<g:isNotLoggedIn>
					username: {
						required: '".get_lang($lang, "please.enter.your.company.login.name")."'
					},
					userRealName: {
						required: '".get_lang($lang, "please.enter.your.company.name")."'
					},
					</g:isNotLoggedIn>
	
					tecnicoid: {
						required: jQuery.format(".get_lang($lang, "please.select.the.x")."', ".get_lang($lang, "responsible").")
					},
					descricao: {
						required: '".get_lang($lang, "please.enter.the.text")."',
						minlength: jQuery.format(".get_lang($lang, "your.text.must.consist.of.at.least.x.characters").")
					},
					obs: {
						required: '".get_lang($lang, "please.enter.the.text")."',
						minlength: jQuery.format(".get_lang($lang, "your.text.must.consist.of.at.least.x.characters").")
					},
					password: {
						required: '".get_lang($lang, "please.provide.a.password")."',
						minlength: jQuery.format(".get_lang($lang, "your.password.must.be.at.least.x.characters.long").")
					},
					confirm_password: {
						required: '".get_lang($lang, "please.provide.a.password")."',
						minlength: jQuery.format(".get_lang($lang, "your.password.must.be.at.least.x.characters.long")."),
						equalTo: '".get_lang($lang, "please.enter.the.same.password.as.above")."'
					},
					serie: {
						required: '".get_lang($lang, "please.enter.a.serial.number")."'
					},
					modelo: {
						required: '".get_lang($lang, "please.enter.the.model")."'
					},
					date_previsao: {
						required: '".get_lang($lang, "please.choose.a.scheduled.date")."'
					},
					data_previsao: {
						required: '".get_lang($lang, "please.choose.a.scheduled.date")."'
					},
					idos_autocomplete: {
						required: '".get_lang($lang, "select.the.service.order")."'
					},
					email: '".get_lang($lang, "please.enter.a.valid.e.mail.address")."',
					minlength: jQuery.format(".get_lang($lang, "this.text.must.consist.of.at.least.x.characters")."),
					agree: 'Please accept our policy'
				},
				invalidHandler:function(form, validator) { return false;
	
				},
				submitHandler:function(form) {
					jQuery(form).ajaxSubmit({target: '#output'});
				}
			});
		});";
}