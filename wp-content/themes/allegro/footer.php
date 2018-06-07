		<div id="footer-sidebar" class="secondary" style="border-top:2px solid #2d2d2d;">
			<div id="footer-sidebar1">
				<?php
					if(is_active_sidebar('footer-sidebar-1')){
						dynamic_sidebar('footer-sidebar-1');
					}
				?>	
			</div>
		</div>

		<footer class=" initial-hidden">
		  <div class="container">
		    <section class="widget nav_menu-2 widget_nav_menu">
		      <div class="menu-main-menu-container">
		        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
		      </div>
		    </section>

		    <div class="copyright">
                      Rua Alegre 1127 – São Caetano do Sul – SP – Cep: 09550 250</br>
                      Telefone: +55 (11) 4227 4252 | Whatsapp: +55 (11) 99915 5719 | E-mail: contato@allegrobuffet.com.br</br>
		      ©Copyright 2018 Allegro Buffet - Powered By <a href="http://www.edev.com.br">e.Dev Solutions</a>&nbsp;-&nbsp;<div id="backtop">VOLTAR PARA O TOPO</div>
		    </div>
		  </div>
		</footer>
	</div>

	<script type='text/javascript' src='<?php echo get_home_url(); ?>/wp-content/themes/allegro/assets/js/main.js'></script> 
	<script type='text/javascript' src='<?php echo get_home_url(); ?>/wp-includes/js/wp-embed.min.js'></script>
	
</body>
</html>