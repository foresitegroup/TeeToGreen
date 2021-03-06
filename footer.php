  <div class="site-width prefooter">
    <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo-footer.png" alt="Tee To Green" id="logo-footer"></a>

    <div id="footer-menu"><?php include "menu.php"; ?></div>

    <div class="social">
      <a href="https://www.facebook.com/teetogreenwisconsin/" class="facebook"><i class="fa fa-facebook"></i></a>
      <a href="https://twitter.com/TeeToGreen_WI" class="twitter"><i class="fa fa-twitter"></i></a>
      <a href="https://www.instagram.com/teetogreenwi/" class="instagram"><i class="fa fa-instagram"></i></a>
    </div>
  </div>

  <div class="footer">
    <div class="site-width">
      <div class="footer-left">
        <div class="copyright">&copy; <?php echo date("Y"); ?> Tee To Green</div>
        
        <div class="footer-event">
          Tee To Green <i class="fa fa-circle-o"></i>
          <?php echo date("F j<\s\u\p>S</\s\u\p> Y", $GLOBALS['EventDate']); ?> <i class="fa fa-circle-o"></i>
          <?php echo $GLOBALS['EventLoc']; ?>
        </div>
      </div>

      <div class="backtotop">
        <a href="#">
          <span class="btt-text">Back To Top</span>
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-angle-up fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  </body>
</html>