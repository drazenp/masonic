<?php
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #page div.
 *
 * @package ThemeGrill
 * @subpackage Masonic
 * @since 1.0
 */
?>

</div><!-- #page -->
<footer class="footer-background">
   <div class="footer-content wrapper clear">
      <div class="clear">
         <?php if (is_active_sidebar('footer-sidebar-one')) { ?>
            <div class="tg-one-third">
               <?php
               dynamic_sidebar('footer-sidebar-one');
               ?>
            </div>
         <?php } ?>
         <?php if (is_active_sidebar('footer-sidebar-two')) { ?>
            <div class="tg-one-third">
               <?php
               dynamic_sidebar('footer-sidebar-two');
               ?>
            </div>
         <?php } ?>
         <?php if (is_active_sidebar('footer-sidebar-three')) { ?>
            <div class="tg-one-third last">
               <?php
               dynamic_sidebar('footer-sidebar-three');
               ?>
            </div>
         <?php } ?>
      </div>
      <div class="copyright clear">
         <div class="copyright-header"><?php echo bloginfo('name'); ?>
         <a href="#" class="popoutLink" id="copyrightLink"><span>Copyright © 2018</span></a>
        </div>
      </div>
   </div>
   <span class="popupContent" id="copyrightPopup">
     <h4>Copyright</h4>
      <p>All content on this web site is the property of Remote Pal.</p>
      <p>Theme: Masonic by <a href="http://themegrill.com/themes/masonic" target="_blank" title="ThemeGrill" rel="author"><span>ThemeGrill</span></a></p>
      <p>Header vector created by <a href="https://www.freepik.com/free-photos-vectors/background">Freepik</a></p>
    </span>
   <div class="angled-background"></div>
</footer>

<?php wp_footer(); ?>

</body>
</html>