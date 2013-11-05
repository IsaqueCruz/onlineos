<?php 

echo js_head();
echo js_form_validate();
?>
    $('#osForm').find('input[type=text]:not(".notInclude"), select').wrap("<div style='position: relative; width: 100%;'>");

    $('#userRealName_label').labelOver('over-register');
    //$('#userRealName_label').click();
    $('#email_label').labelOver('over-register');
    //$('#email_label').click();
    $('#cemail_label').labelOver('over-register');
    //$('#cemail_label').click();
    $('#estado_label').labelOver('over-register');
    //$('#estado_label').click();
    $('#cidade_label').labelOver('over-register');
    $('#idsetor_label').labelOver('over-register');
    //$('#idsetor_label').click();
    $('#username_label').labelOver('over-register');
    setTimeout(function(){$('#cidade_label').click();},50);
    setTimeout(function(){$('#username_label').click();},100);
<?php echo js_footer();

if(!is_logged_in()){
?>
<style type="text/css">
    @-moz-document url-prefix()
    {
        #reg_box .ui-autocomplete-input {
            width: 352px !important;
        }
        #cadastrar input {
            left: -1px !important;
        }
    }
</style>
<?php } ?>

    <div class="body" id="reg_box" >
        <?php if(!is_logged_in()){?><h4><g:message code="cadastre.sua.empresa" /><br/><g:message code="gratis" /></h4><?php } ?>
		<form id="osForm" name="osForm" controller="user" action="save" onsubmit="return false;">
		<![if IE]>
			<div class="dialog" style="text-align:left; margin-left:0px; padding-left: 0px;">
		<![endif]>
		<![if !IE]>
			<div class="dialog" style="text-align:left; padding-left: 0px;">
		<![endif]>
				<label title="${message(code:"usernametip")}" id="username_label" for="username"><?php echo get_lang($lang, 'company_user');?></label>
				<input type="text" class="inputtext" id="username" name="username"  size="38" value=""/>

                <label title="${message(code:"userrealnametip")}" id="userRealName_label" for="userRealName"><?php echo get_lang($lang, 'corporate_name');?></label>
                <input type="text" class="inputtext" id="userRealName" name="userRealName"  size="38" value=""/>

                <label title="${message(code:"emailusertip")}" id="email_label" for="email"><?php echo get_lang($lang, 'email');?></label>
				<input type="text" class="inputtext" id="email" name="email" value="" size="38" />

				<label title="${message(code:"emailuserconfirmtip")}" id="cemail_label" for="cemail"><?php echo get_lang($lang, 'confirm_email');?></label>
                <input type="text" class="inputtext" id="cemail" name="cemail" value="" size="38" />

                <label for="estado_autocomplete" id="estado_label"><?php echo get_lang($lang, 'state');?></label>
                
				<select name="estado" id="estado" from="${os.Estado.list()}" optionKey="id" value="${idestado}" noSelection="['':'Selecione um Estado']" />

                <label for="cidadeid_autocomplete" id="cidade_label"><?php echo get_lang($lang, 'city');?></label>
				<div id="showCidade">
                        <select name="cidadeid" from="${list}" optionKey="id" value="${person?.cidade?.id}" />
				</div>

				<label for="idsetor_autocomplete" id="idsetor_label"><?php echo get_lang($lang, 'activity');?></label>
				<select name="idsetor" id="idsetor" from="${os.Setor.list()}" optionKey="id" value="${person?.idsetor}" noSelection="['':'Selecione um Setor']" />

				<?php if($_SESSION['nivel_acesso'] == ACESSO_ADMIN) {?>
				<g:ifAnyGranted role="ROLE_ADMIN">
                        <g:isNotLoggedIn>
						    <label for="captcha"><img style="top:-10px; position:relative;" width="92" src="${createLink(controller:'captcha', action:'index')}" /></label>
						    <input class="inputtext" type="text" id="captcha" name="captcha" value=""/>
					    </g:isNotLoggedIn>
						<label for="emailShow"><g:message code="mostrar.email" /></label>
						<g:checkBox name="emailShow" value="${person?.emailShow}"/>
						<label for="enabled"><g:message code="habilitar" /></label>
						<g:checkBox name="enabled" value="${person?.enabled}" ></g:checkBox>
						<g:message code="atribuir.regras" />
                        <g:each in="${authorityList}">
                            ${it.authority.encodeAsHTML()}
                            <g:checkBox name="${it.authority}"/>
                        </g:each>
				<?php } ?>
                        <div id='cadastrar'>
                                <div style="width: 320px; position:absolute; padding-top: 7px;" class="h4"><?php echo get_lang($lang, 'continue_registration');?></div> <input class="small blue awesome" type="submit" value="          " />
                        </div>

			<![if !IE]>
			</div>
			<![endif]>
			<input type="hidden" name="idusuario_" value="0" />
			<input type="hidden" name="passwd" value="passwd" />
		<form>
	