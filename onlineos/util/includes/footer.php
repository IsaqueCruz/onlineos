<?php /*
<div style="position:relative; background: transparent; clear:both;text-align: center;" id="menuHorizontalFooter">
                    <ul>
                        <li><g:remoteLink style="float: none;" action="comoFunciona" controller="link" update="grid_body">${message(code: 'home.menu.howto', default: 'Como funciona')}</g:remoteLink></li>
                        <li><g:remoteLink style="float: none;" action="licencas" controller="link" update="output">${message(code: 'home.menu.license', default: 'Licenças')}</g:remoteLink></li>
                        <li><g:remoteLink style="float: none;" controller="link" action="duvidas" update="output">${message(code: 'home.menu.doubt', default: 'Dúvidas')}</g:remoteLink></li>
                        <li><g:remoteLink style="float: none;" controller="link" action="contatos">${message(code: 'home.menu.contact', default: 'Contatos')}</g:remoteLink></li>
					</ul><br/>
</div>

<g:isLoggedIn>
<div style="z-index: 9; color: rgb(102, 102, 102); font-size:10px; position:relative; background: transparent; clear:both; text-align: center; padding-top: 5px;">
</g:isLoggedIn>
<g:isNotLoggedIn>
<div style="z-index: 9; font-size:10px; position:relative; background: transparent; clear:both; text-align: center; padding-top: 5px;">
</g:isNotLoggedIn>
    <g:message code="desenvolvido.por" />: <a class="notAjax" href="http://www.icruz.com.br" target="_blank">Icruz Design &amp; Tecnologia</a>
</div>

<div id="footerNew" class="large">
  <div class="container">
    <div class="left">
        <h3>Outros sistemas</h3>
      <ul class="switcher">
    <li class="activeden"><a href="http://activeden.net" title="Flash and Unity 3D"><span>ActiveDen</span></a></li>
    <li class="audiojungle"><a href="http://audiojungle.net" title="Stock Music and Audio"><span>AudioJungle</span></a></li>
    <li class="themeforest"><a href="http://themeforest.net" title="Website Templates"><span>ThemeForest</span></a></li>
    <li class="videohive"><a href="http://videohive.net" title="Motion Graphics"><span>VideoHive</span></a></li>
    <li class="graphicriver"><a href="http://graphicriver.net" title="Graphics, Vectors and Print"><span>GraphicRiver</span></a></li>
    <li class="three_d_ocean"><a href="http://3docean.net" title="3D Models and Materials"><span>3DOcean</span></a></li>
    <li class="codecanyon"><a href="http://codecanyon.net" title="Code, Plugins and Mobile"><span>CodeCanyon</span></a></li>
    <li class="tutsmarketplace"><a href="http://marketplace.tutsplus.com" title="Tutorials and Screencasts"><span>Tuts+ Marketplace</span></a></li>
    <li class="photodune"><a href="http://photodune.net" title="Stock Photography"><span>PhotoDune</span></a></li>
</ul>
    </div>
    <div class="middle vert_sprite">
      <div class="top">
        <div class="content-left">
          <div class="follow-us">
  <h3><g:message code="follow.us" /></h3>
  <a href="http://blog.onlineos.com.br/" class="icon blog"><g:message code="subscribe.to.blog" /></a>
  <br>
  <a href="http://twitter.com/onlineos" class="icon twitter"><g:message code="follow.us.on.twitter" /></a>
  <br>
  <a href="http://www.facebook.com/onlineos" class="icon facebook"><g:message code="be.a.fan.on.facebook" /></a>
  <br>
  <a href="/page/file_updates/#rss" class="icon rss"><g:message code="rss.feed" /></a>
</div>
        </div>
        <div class="content-right">
          <div class="help-and-support">
  <h3><g:message code="help.and.support" /></h3>
  <a href="http://wiki.onlineos.com.br"><g:message code="wiki" /></a>
  <br>
  <a href="/support"><g:message code="contact.support" /></a>
  <br>
  <a href="http://www.onlineos.com.br"><g:message code="about.onlineos" /></a>
</div>
        </div>
        <div class="clear"></div>
      </div>
      <div>
        <div class="content-left">
          <div class="newsletter">


  <%/* <h3>Monthly Newsletter</h3>
  <form action="http://Envato.us1.list-manage.com/subscribe/post?u=01a7104df9f31fd41e34ccbed&amp;id=6f890803c2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
    <input type="text" value="First Name" name="FNAME" id="mce-FNAME" class="fname">
    <input type="text" value="Last Name" name="LNAME" id="mce-LNAME" class="lname">
    <input type="text" value="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn-icon submit">Subscribe</button>
    <br>
    <a href="http://wiki.envato.com/community/newsletter-community/the-envato-newsletter" class="prominent" target="_new">Check out the archive</a>
  </form>
</div>
        </div>
        <div class="content-right">
          <div class="stats">
  <g:message code="usuarios.cadastrados" />
  <p class="file-count">
      ${UserService.newInstance().countUsers().toString().padLeft(9,"0")}
  </p>

  <g:message code="empresas.cadastradas" />
  <p class="file-count">
      ${UserService.newInstance().countEmpresas().toString().padLeft(9,"0")}
  </p>
</div>        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="right vert_sprite">

  <div class="top">
    <div class="external-site">
        <h3>Last tweets</h3>
  <a href="http://net.tutsplus.com" target="_new">
    <img alt="Nettuts" src="http://0.envato-static.com/images/common/icons-buttons/footer/tuts/nettuts.png?1311219807">
  </a>
  <div>Web development tutorials, from beginner to advanced.</div>
  <a href="http://net.tutsplus.com" class="prominent" target="_new">CHECK OUT NETTUTS+</a>
</div>
  </div>
  <div class="bottom">
    <div class="external-site">
  <a href="http://mobile.tutsplus.com/" target="_new">
    <img alt="Mobiletuts" src="http://1.envato-static.com/images/common/icons-buttons/footer/tuts/mobiletuts.png?1311219807">
  </a>
  <div>iPhone, Android, Windows and BlackBerry mobile development tutorials.</div>
  <a href="http://mobile.tutsplus.com/" class="prominent" target="_new">CHECK OUT MOBILETUTS+</a>
</div>
  </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
 */?>
<div id="copyright">
  <div class="container">
    <div class="powered-by-icruz">
      <a class="notAjax" href="<?php echo DEVELOPER_COMPANY;?>" target="_blank"><?php echo get_lang($lang, 'powered_by')?></a>&nbsp;&nbsp;&nbsp;
    </div>
    <div class="copyright">
      <p>
        <span>COPYRIGHT © <?php echo date("Y")?> <a class="notAjax" href="<?php echo DEVELOPER_COMPANY_URL?>" target="_blank"><?php echo DEVELOPER_COMPANY_NAME?></a></span>|
        <span class="menu"><a id="comofunciona" href="<?echo BASE_URL?>comofunciona.php" ><?php echo get_lang($lang, 'how_it_works');?></a></span>|
        <span class="menu"><a id="porqueonlineos" href="<?echo BASE_URL?>porqueonlineos.php" ><?php echo get_lang($lang, 'why_using');?></a></span>|
        <span class="menu"><a id="linkduvida" href="<?echo BASE_URL?>duvidas.php"  ><?php echo get_lang($lang, 'frequent_questions');?></a></span>|
        <span class="menu"><a id="linkcontato" href="<?echo BASE_URL?>contato.php" ><?php echo get_lang($lang, 'contact');?></a></span>
      </p>
      <p class="trademarks"><?php echo get_lang($lang, 'trademarks');?></p>
    </div>
  </div>
</div>

<div id="ajax-feedback" class="ajax-feedback" style="display:none;">
    <span><img alt="Loader" height="22" src="http://2.envato-static.com/images/common/loader.gif?1311219808" width="126">Request processing...</span>
</div>
