</div>
<!-- Container End -->


<footer class="main-footer" role="contentinfo">
    <div class="row">
        <div class="large-12 columns">
            <?php wp_nav_menu(array( 'theme_location'=>'footer', 'container' => false, 'menu_class' => 'inline-list')); ?>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <p>&copy;
                <?php echo date( 'Y'); ?>
                <?php bloginfo( 'name'); ?>.
                <p align="right">Made by Group 4.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
    (function ($) {
        $(document).foundation();
    })(jQuery);
</script>

</body>

</html>
