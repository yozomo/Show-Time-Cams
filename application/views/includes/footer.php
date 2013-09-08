</div>
    <div id="footer">
        <div class="container">
            <p>Something else.....</p>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.6.2.min.js"></scri
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.h5validate.js"></script>
    
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    <pre><small>
        <?php print_r($this->session->all_userdata()); ?>
    </small></pre>
    </body>
</html>