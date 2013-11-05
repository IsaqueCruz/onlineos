<div class="container_12" style="">
                  <?php include 'cabecalho.php';?>
                  <a type="hidden" id="carregaHistorico"></a>
	<div
		class="grid_3 header_box margin_left_main top_middle middle_min_height"
		id="menu_lateral_esquerdo" style="">
		<div id="featurelist-slider">
			<div id="feature_list">
				<ul id="tabs">
					<li
						onmouseover="document.getElementById('iconRecurso').style.visibility='visible'"
						onmouseout="document.getElementById('iconRecurso').style.visibility='hidden'">
						<a href="#" class="notAjax" style="z-index: 0"
						class="menuVertical">
							<div class="menu_verical_font">
								<?php echo get_lang($lang, 'resource')?>
							</div>
							<div id="iconRecurso" style="visibility: hidden;"
								class="iconsMenu">								
								<img id="linkrecurso" class="tip tipNoBorderBottom"
									title="${message(code:'cadastrar')}"
									onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
									src="<?php echo PATH_IMG; ?>cadastrar.png"
									alt="${message(code: 'cadastrar', default: 'Cadastrar')}"
									border="0" /> <img class="tip tipNoBorderBottom"
									title="${message(code:'listar')}"
									onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
									src="<?php echo PATH_IMG; ?>listar.png"
									alt="${message(code: 'lista', default: 'Lista')}" border="0" />
							</div>
					</a>
					</li>
					<li style="position: relative;"><a href="#" class="menuVertical"
							id="linkos" controller="OS" action="create" update="output">
							<div class="menu_verical_font">
								<?php echo get_lang($lang, 'new_order')?>
							</div>
							<span class="menu_verical_font_sub"><?php echo get_lang($lang, 'create')?></span>
							<div class="iconsMenu"
								style="position: absolute; top: 55px; left: 22px; display: none">
								<img src="<?php echo PATH_IMG; ?>os.png"
									alt="${message(code: 'cadastrar', default: 'Cadastrar')}"
									border="0" />
							</div>
						</a></li>					
						<li class="tip"
							title="${message(code:'clique.para.ver.as.ordens.de.servico.de.seus.clientes')}">
							<a href="#" class="menuVertical" id="linkhistorico"
								controller="OS" action="historico" update="output">
								<div class="menu_verical_font">
									<?php echo get_lang($lang, 'history')?>
								</div>
								<span class="menu_verical_font_sub"><?php echo get_lang($lang, 'requested')?></span>
							</a>
						</li>
					<?php if(!is_user()) {?>
						<li
							onmouseover="document.getElementById('iconTec').style.visibility='visible'"
							onmouseout="document.getElementById('iconTec').style.visibility='hidden'">
							<a href="#" class="notAjax" style="z-index: 0"
							class="menuVertical">
								<div class="menu_verical_font">
									<?php echo get_lang($lang, 'responsible')?>
								</div>
								<div id="iconTec" style="visibility: hidden;" class="iconsMenu">
									 <img
										id="linktecnico" class="tip tipNoBorderBottom"
										title="${message(code:'cadastrar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>cadastrar.png"
										alt="${message(code: 'cadastrar', default: 'Cadastrar')}"
										border="0" /> <img class="tip tipNoBorderBottom"
										title="${message(code:'listar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>listar.png"
										alt="${message(code: 'lista', default: 'Lista')}" border="0" />
								</div>
						</a>
						</li>					
						<li
							onmouseover="document.getElementById('iconServ').style.visibility='visible'"
							onmouseout="document.getElementById('iconServ').style.visibility='hidden'">
							<a href="#" class="notAjax" style="z-index: 0"
							class="menuVertical">
								<div class="menu_verical_font">
									<?php echo get_lang($lang, 'service')?>
								</div>
								<div id="iconServ" style="visibility: hidden;" class="iconsMenu">
									 <img
										id="linkservico" class="tip tipNoBorderBottom"
										title="${message(code:'cadastrar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>cadastrar.png"
										alt="${message(code: 'cadastrar', default: 'Cadastrar')}"
										border="0" /> <img class="tip tipNoBorderBottom"
										title="${message(code:'listar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>listar.png"
										alt="${message(code: 'lista', default: 'Lista')}" border="0" />
								</div>
						</a>
						</li>
						<li
							onmouseover="document.getElementById('iconTipo').style.visibility='visible'"
							onmouseout="document.getElementById('iconTipo').style.visibility='hidden'">
							<a href="#" class="notAjax" style="z-index: 0"
							class="menuVertical">
								<div class="menu_verical_font">
									<?php echo get_lang($lang, 'type')?>
								</div>
								<div id="iconTipo" style="visibility: hidden;" class="iconsMenu">
								 <img
										id="linktipo" class="tip tipNoBorderBottom"
										title="${message(code:'cadastrar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>cadastrar.png"
										alt="${message(code: 'cadastrar', default: 'Cadastrar')}"
										border="0" /> <img class="tip tipNoBorderBottom"
										title="${message(code:'listar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>listar.png"
										alt="${message(code: 'lista', default: 'Lista')}" border="0" />
								</div>
						</a>
						</li>
						<li
							onmouseover="document.getElementById('iconStatus').style.visibility='visible'"
							onmouseout="document.getElementById('iconStatus').style.visibility='hidden'">
							<a href="#" class="notAjax" style="z-index: 0"
							class="menuVertical">
								<div class="menu_verical_font">
									<?php echo get_lang($lang, 'status')?>
								</div>
								<div id="iconStatus" style="visibility: hidden;"
									class="iconsMenu"><img
										id="linkstatus" class="tip tipNoBorderBottom"
										title="${message(code:'cadastrar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>cadastrar.png"
										alt="${message(code: 'cadastrar', default: 'Cadastrar')}"
										border="0" /> <img class="tip tipNoBorderBottom"
										title="${message(code:'listar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>listar.png"
										alt="${message(code: 'lista', default: 'Lista')}" border="0" />
								</div>
						</a>
						</li>
						<li
							onmouseover="document.getElementById('iconUser').style.visibility='visible'"
							onmouseout="document.getElementById('iconUser').style.visibility='hidden'">
							<a href="#" class="notAjax" style="z-index: 0"
							class="menuVertical">
								<div class="menu_verical_font">
									<?php echo get_lang($lang, 'user')?>
								</div>
								<div id="iconUser" style="visibility: hidden;" class="iconsMenu">
									<img
										class="tip tipNoBorderBottom"
										title="${message(code:'cadastrar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>cadastrar.png"
										alt="${message(code: 'cadastrar', default: 'Cadastrar')}"
										border="0" /> <img class="tip tipNoBorderBottom"
										title="${message(code:'listar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>listar.png"
										alt="${message(code: 'lista', default: 'Lista')}" border="0" />
								</div>
						</a>
						</li>
						<li
							onmouseover="document.getElementById('iconShop').style.visibility='visible'"
							onmouseout="document.getElementById('iconShop').style.visibility='hidden'">
							<a href="#" class="notAjax" style="z-index: 0"
							class="menuVertical">
								<div class="menu_verical_font">
									<?php echo get_lang($lang, 'shop')?>
								</div>
								<div id="iconShop" style="visibility: hidden;" class="iconsMenu"> <img
										id="linkstatus" class="tip tipNoBorderBottom"
										title="${message(code:'cadastrar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>cadastrar.png"
										alt="${message(code: 'cadastrar', default: 'Cadastrar')}"
										border="0" /> <img class="tip tipNoBorderBottom"
										title="${message(code:'listar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>listar.png"
										alt="${message(code: 'lista', default: 'Lista')}" border="0" />
								</div>
						</a>
						</li>
					<?php } else {?>					
						<li
							onmouseover="document.getElementById('iconShop').style.visibility='visible'"
							onmouseout="document.getElementById('iconShop').style.visibility='hidden'">
							<a href="#" class="notAjax" style="z-index: 0"
							class="menuVertical">
								<div class="menu_verical_font">
									<?php echo get_lang($lang, 'shop')?>
								</div>
								<div id="iconShop" style="visibility: hidden;" class="iconsMenu">
									 <img id="linkstatus"
										class="tip tipNoBorderBottom"
										title="${message(code:'minhas.compras')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>minhascompras.png"
										alt="${message(code: 'minhas.compras', default: 'Minhas Compras')}"
										border="0" /> <img class="tip tipNoBorderBottom"
										title="${message(code:'listar')}"
										onclick="jQuery.ajax({type:'POST', url:'${link}',success:function(data,textStatus){jQuery('#output').html(data);}});return false;"
										src="<?php echo PATH_IMG; ?>listar.png"
										alt="${message(code: 'lista', default: 'Lista')}" border="0" />
								</div>
						</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<div id="middle_box"
		class="grid_9 header_box top_middle middle_min_height conteudo_centro"
		style="">
		<div id="output"></div>
	</div>
	<div id="fim" style="clear: both;"></div>
</div>
