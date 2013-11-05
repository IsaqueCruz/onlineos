<?php 
	/*
	 * Precisamos definir como vai ficar a seleção de língua,
	 * deixei abaixo algumas coisas que poderemos precisar
	 * não precisa ser desse jeito e nem ser aqui, as queries ficarão em funções 
	 * dentro do mysqli_connect.php ou outro php de banco.
	 * 
    require_once('mysqli_connect.php');
    
    $translate = SELECT * FROM words WHERE lang_id = $_SESSION['lang_id');
    mysqli_free_result($r);
    echo $words['title');
    menu languages | SELECT lang_id, desc | echo $words['language']
    if(isset($_SESSION['user_id']){ta logado}else{login})
    
    */
$_SESSION['user_id'] = $_GET['login'];

	require 'util/includes/head.php';
     ?>
<html>
<body>
	<div id="debug" style="display: none"></div>
	<?php /* Habilitar quando o ajax estiver funcionando
	<div id="carregar">
		<div class="message">
			<?php echo get_lang($lang, 'aguarde');?>
			<br /> <img src="util/img/indicator.gif"
				alt="<?php echo get_lang($lang, 'loading');?>..." border="0" />
		</div>
	</div>
	*/
		if(is_logged_in()){
			echo "<div id=\"contact\"></div>		
				  <div id=\"backMenu\"></div>";
		}	
	?>
	<div id="main" style='width: 100%;'><!-- pode estar fechando no footer, verificar -->
		<div class="container_12">
			<div id="grid_body" class="grid_12">
				<div class="grid_3" style='MARGIN: 0PX;' id="divLogo">
					<a href="<?php echo BASE_URL; ?>">
						<img src="<?php echo PATH_IMG.'logo.png';?>"
							alt="<?php echo get_lang($lang, 'logo_alt');?>"
							border="0" />
					</a>
					<?php if(!is_logged_in()) {?>
						<div class="divLogin grid_5" style='MARGIN: 0PX;'>
							<form action='system/views/login/login.php'
								class="clearfix" method='POST' id='loginForm'>
								<div class="grid_2">
									<label for='j_username' id="j_username_label" class="grey"><?php echo get_lang($lang, 'company');?></label>
									<input type='text' tabindex="1" maxlength="40" class='text_'
										name='j_username' id='j_username'
										value='' /> <label
										class="labelRemember gray" for='remember_me'><input
										type='checkbox' style='border: 0px;'
										name='_spring_security_remember_me' id='remember_me'>
									<?php if(has_cookie()) {echo "checked='checked'";} echo get_lang($lang, 'stay_connected');?></label>
								</div>
								<div class="grid_2">
									<label for='j_password' id="j_password_label" class="grey"><?php echo get_lang($lang, 'password')?></label> <input
										type='password' tabindex="2" maxlength="60" class='text_'
										name='j_password' id='j_password' /> <a href="recuperar_senha.php"
										class='chk gray notAjax' id='esqueci'><?php echo get_lang($lang, 'forgot_password')?></a>
								</div>
								<div class="grid_1">
									<input class="small blue awesome" style='text-align: left;'
										type="submit" value="         " />
								</div>
							</form>
						</div>
					<?php }?>
				</div>
				<?php if(is_logged_in()) {?>
					<div class="grid_3" style='MARGIN: 0PX;' id="flags">
						<?php /*
						<g:link class="notAjax tip tipNoBorderBottom"
							title="${message(code:'english')}"
							controller="${(params.controller?:session['controller']?:session['controller_flag'])?:"
							default"}" action="${params.action?:session['action']}"
							params="[lang:'en_CA']">
							<img src="${resource(dir:'images', file:'bandeiraUSA.gif')}"
								alt="">
						</g:link>
						<g:link class="notAjax tip tipNoBorderBottom"
							title="${message(code:'portugues')}"
							controller="${(params.controller?:session['controller']?:session['controller_flag'])?:"
							default"}" action="${params.action?:session['action']}"
							params="[lang:'pt_BR']">
							<img src="${resource(dir:'images', file:'bandeiraBRA.gif')}"
								alt="">
						</g:link>
						<g:link class="notAjax tip tipNoBorderBottom"
							title="${message(code:'espanhol')}"
							controller="${(params.controller?:session['controller']?:session['controller_flag'])?:"
							default"}" action="${params.action?:session['action']}"
							params="[lang:'es']">
							<img src="${resource(dir:'images', file:'bandeiraESP.gif')}"
								alt="">
						</g:link>
						*/?>
					</div>
					<div class="grid_6" id="menuHorizontal">
						<ul>
							<li style="white-space: nowrap;"><a id="comofunciona"
								href="<? echo BASE_URL; ?>/comofunciona.php"
								target="_parent" class="notAjax"><?php echo get_lang($lang, 'how_it_works');?></a></li>
							<li style="white-space: nowrap;"><a id="porqueonlineos"
								href="<? echo BASE_URL; ?>/porqueonlineos.php"
								target="_parent" class="notAjax"><?php echo get_lang($lang, 'why_using');?></a></li>
							<li style="white-space: nowrap;"><a id="linkduvida"
								href="<? echo BASE_URL; ?>/duvidas.php" target="_parent"
								class="notAjax"><?php echo get_lang($lang, 'frequent_questions');?></a></li>
							<li style="white-space: nowrap;"><a id="linkcontato"
								href="<? echo BASE_URL; ?>/contato.php" target="_parent"
								class="notAjax"><?php echo get_lang($lang, 'contact');?></a></li>
						</ul>
					</div>
				<?php } ?>
			</div>
			<div class="grid_12" id='body'>
				<?php if(!is_logged_in()) {
					require 'system/views/login/auth.php';
				} else {
					if(is_logged_in() && DELICIOUS) {
						require 'system/views/layouts/delicious.php';
					}else{
						//require 'system/views/layouts/new.php';
						require 'system/views/layouts/main.php';
					}
				} ?>
			</div>
		</div>
		<!--<div id="degrade">&nbsp;</div>-->
		<?php if(is_logged_in()){?>
			<div id="footer" style="position: relative; top: 10px;">		
		<?php } else {?>
			<div id="footer" style="position: relative; top: 58px;">		
		<?php } 
			include 'util/includes/footer.php';
		?>
	</div>
	<div style="clear: both;"></div>
	</div>
</body>
</html>