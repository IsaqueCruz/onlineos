<div class="grid_3 header_box margin_left_main" id="header_profile"
	style="">
	<div class="grid_1 picture" style="">
		<img width="70" height="70" src="<?php echo PATH_IMG?>profile.png" />
	</div>
	<div class="grid_2 desc" style="">

		<span class="empreendimento tip tipNoBorderBottom"
			title="${message(code:'login.name')}">Username</span>&nbsp; <a
			href="#"> <img width="15" height="15"
			src="<?php echo PATH_IMG?>sair.png"
			alt="<?php echo get_lang($lang, 'logout')?>" border="0" />
		</a> <br /> <a class="tip tipNoBorderBottom"
			title="<?php echo get_lang($lang, 'title_edit_profile')?>"
			update="output" controller="user" action="edit">
			<?php echo get_lang($lang, 'edit_profile');?>
		</a> <br /> <span class="empreendimento tip tipNoBorderBottom"
			title="${message(code:'nome.do.usuario')}">
			<?php echo substr("Nome do usuario",0,20); 
			if(strlen("nome do usuario") > 20){
			?>			
			<a href='#' class='tip'
			title='Nome completo com mais de 20 caracteres'>...</a>
			<?php } ?>
		</span><br /> <span class="tip tipNoBorderBottom"
			title="${message(code:'nivel.de.acesso')}">
			<?php echo is_responsible() ? get_lang($lang, 'responsible') :
			is_company() ? get_lang($lang, 'company') : get_lang($lang, 'user') ?></span>
	</div>
</div>
<div class="grid_5 header_box" id="header_dicas" style="">

	<div class="grid_1 picture" style=""></div>
	<div class="grid_3 desc" style="">
		<div id="testimonials_bubble">
			<div id="testimonials_container">
				<span id="testimonials_txt"></span> <span id="testimonials_name"></span>
				<span id="testimonials_department"></span>
			</div>
		</div>
	</div>
	<div id="setasDicas">
		<img id="imageR" src="<?php echo PATH_IMG?>set_g_dir.png"
			alt="${message(code: 'direita', default: 'direita')}" border="0" /> <img
			id="imageL" src="<?php echo PATH_IMG?>set_g_esq.png"
			alt="${message(code: 'esquerda', default: 'esquerda')}" border="0" />
	</div>
</div>
<div class="grid_3 header_box" id="header_legenda" style="">
	<span><?php echo get_lang($lang, 'legend')?></span>
	<ul>
		<li><a href="#" style="color: #ffffff;" action="list" controller="OS"
			params="[status_os:Status_.findById(1)]"> <img
				src="<?php echo PATH_IMG?>naoiniciada.png"
				alt="${message(code: 'home.alt.logo', default: 'Sistema de OS')}"
				border="0" /> <span><g:message code="nao.iniciada" /></span>
				<?php if(is_user()){				
          		 	//Exectar essa query ${os.OS.executeQuery("select count(*) from OS where idstatus_os = 1 and idusuario = "+loggedInUserInfo(field: 'id').toLong())}
				}else if(is_company())	{			
						if(is_responsible())
            				echo "[0]";//[${os.OS.listOSAssociadasAoClienteNaoIniciada(loggedInUserInfo(field: 'idtecnico')?.toLong()).size()}]
			          	else 
			          		echo "NAO INICIADA [1]";//${os.OS.listOSAssociadasAoClienteNaoIniciada(loggedInUserInfo(field: 'id').toLong()).size()}]
				} else if(is_admin()){				
          				//${os.OS.executeQuery("select count(*) from OS where idstatus_os = 1")}
          		}
          ?>
			</a></li>
		<li><a href="#" style="color: #ffffff;" action="list" controller="OS"
			params="[status_os:Status_.findById(1)]"> <img
				src="<?php echo PATH_IMG?>andamento.png"
				alt="${message(code: 'home.alt.logo', default: 'Sistema de OS')}"
				border="0" /> <span><g:message code="nao.iniciada" /></span>
				<?php //mesma lógica acima
          			echo "Andamento [3]";
          		?>
			</a></li>
		<li><a href="#" style="color: #ffffff;" action="list" controller="OS"
			params="[status_os:Status_.findById(1)]"> <img
				src="<?php echo PATH_IMG?>aguardando.png"
				alt="${message(code: 'home.alt.logo', default: 'Sistema de OS')}"
				border="0" /> <span><g:message code="nao.iniciada" /></span>
				<?php //mesma lógica acima
          			echo "Aguardando [3]";
          		?>
			</a></li>
		<li><a href="#" style="color: #ffffff;" action="list" controller="OS"
			params="[status_os:Status_.findById(1)]"> <img
				src="<?php echo PATH_IMG?>finalizada.png"
				alt="${message(code: 'home.alt.logo', default: 'Sistema de OS')}"
				border="0" /> <span><g:message code="nao.iniciada" /></span>
				<?php //mesma lógica acima
          			echo "Finalizada [8]";
          		?>
			</a></li>
	</ul>

</div>