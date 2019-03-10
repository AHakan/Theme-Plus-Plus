    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar_alt">
        <?php dynamic_sidebar( 'sidebar-alt-1' ); ?>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar_alt">
        <?php dynamic_sidebar( 'sidebar-alt-2' ); ?>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar_alt">
        <?php dynamic_sidebar( 'sidebar-alt-3' ); ?>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar_alt">
        <?php dynamic_sidebar( 'sidebar-alt-4' ); ?>
      </div>


    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footerlink">
      <p><?php echo of_get_option("footer_yazi"); ?> Tema <a href="http://ahmethcelik.com">AHC</a> Tarafından Yapılmıştır.</p>

    </div>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/js.js"></script>
<?php wp_footer(); ?>
</body>
</html>
