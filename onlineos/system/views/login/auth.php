<?php 
    /*println "session"+session
    if(person == null)
        person = session["cadastrando"]*/

/*Caso o usuario tente cadastrar e retorne erro, o usuario vira preenchido os campos ja digitados
 * 
 * $_SESSION['erro'] Armazenará os erros encontrados no cadastro
 * 
 * */

echo js_display_error_message();
?>

<div class="grid_12" id="body">
	<div class="grid_6" id="grid_left" style='min-height: 400px;'>

		<div id="descricao1" class="descricaoHome">
			<?php
				echo get_lang($lang, 'desc_home_1');
			?>						
		</div>
		<div id="descricao2" class="descricaoHome">
			<?php
				echo get_lang($lang, 'desc_home_2');
			?>
			<div
				style="background-color: #ffffff; width: 100%; position: relative; top: 20px; padding: 4px;">
				<iframe style="width: 100%; height: 25px;"
					src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Onlineos/219155028204053&layout=standard&show_faces=false&action=like&width=380&colorscheme=light&height=25&locale=pt_BR"
					scrolling="no" frameborder="0"
					style="border:none; overflow:hidden; width:250px; height:25px;"
					allowTransparency="true"></iframe>
			</div>
			<div
				onclick="jQuery.ajax({type:'POST', url:'/duvidas.gsp',success:function(data,textStatus){jQuery('#body').html(data);}});return false;"
				style="background-color: #fff; width: 100%; color: #0076A3; cursor: pointer; position: relative; top: 22px; padding: 4px; height: 55px">
				<img style="position: relative; top: 3px;"
					src="<?php echo PATH_IMG;?>tutorial.png"
					alt="<?php echo get_lang($lang, 'manual');?>" border="0"
					style="background: transparent !important;" />&nbsp;&nbsp;&nbsp;
				<div
					style="position: relative; top: 0px; width: 355px; float: right; vertical-align: middle; line-height: 55px;">
					<?php echo get_lang($lang, 'como_funciona_clique')?><br />
				</div>
			</div>
		</div>
	</div>
	<div class="grid_6" id="grid_right" style='min-height: 400px;'>
		<div id="output">
			<?php require 'system/views/user/register.php';?>
		</div>
	</div>
	<div style='clear: both;'></div>
</div>