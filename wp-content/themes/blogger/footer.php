<?php
/**
 * Default Footer Template
 * 
 * 
 * @package blogger
 */
?>

<footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                     <p><?php echo get_theme_mod( 'blogger_setting' ); ?></p>
                </div>
            </footer>
        </main>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>