  <!-- ****** FOOTER ****** --> 
</div>
    <div class="footer ">
        <div class="container text-center">
            <h4 id="titelFooter">Get Connected</h4>
             <ul class="social-icons list-inline">
                 <?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">'
							) );
						?>          
            </ul>
        </div><!--//container-->
    </div><!--//footer-->
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- HOOK VOOR SCRIPTS -->   
    <!-- NET VOOR DE BODY-CLOSING TAG -->         
    <?php wp_footer(); ?>
    </div>
</body>
</html> 