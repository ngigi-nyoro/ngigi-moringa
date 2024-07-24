<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ngigi_Moringa
 */

?>

	<footer id="colophon" class="site-footer">
	    
	    <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-logo">
                            <?php if( get_field('footer_logo',2) ): ?>
                                <img src="<?php the_field('footer_logo',2); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="footer-text">
                            <?php if( get_field('footer_text',2) ): ?>
                               <?php the_field('footer_text',2); ?>
                            <?php endif; ?>
                        </div>
                        <div class="footer-socials">
                            <?php if( get_field('facebook_url',2) ): ?>
                                <a href="<?php the_field('facebook_url',2); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                            <?php endif; ?>
                            <?php if( get_field('x_url',2) ): ?>
                                <a href="<?php the_field('x_url',2); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                            <?php endif; ?>
                            <?php if( get_field('instagram_url',2) ): ?>
                                <a href="<?php the_field('instagram_url',2); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                            <?php endif; ?>
                            <?php if( get_field('linkedin_url',2) ): ?>
                                <a href="<?php the_field('linkedin_url',2); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <?php endif; ?>
                            <?php if( get_field('youtube_url',2) ): ?>
                                <a href="<?php the_field('youtube_url',2); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="footer-quick-links">
                            <h4><span>Quick</span> Links</h4>
                            <div>
                                <ul>
                                    <li><a href="#">Courses</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                                
                                     
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-contact-us">
                            <h4><span>Contact</span> Us</h4>
                            <div>
                                <ul>
                                    <li>Ngong Lane, Ngong Lane Plaza, 1st Floor, Nairobi Kenya</li>
                                    <li><i class="fas fa-phone"></i> <a href="#">+254 711 082 146</a> (General Enquiries)</li>
                                    <li><i class="fas fa-phone"></i> <a href="#">+254712 293 878</a> (WhatsApp)</li>
                                    <li><i class="fas fa-phone"></i> <a href="#">+254 738 368 319</a> (Corporate Enquiries)</li>
                                    <li><i class="fas fa-envelope"></i> <a href="#">contact@moringaschool.com</a></li>
                                    <li><i class="fas fa-envelope"></i> <a href="#">admissions@moringaschool.com</a></li>
                                    <li><i class="fas fa-envelope"></i> <a href="#">corporate@moringaschool.com</a></li>
                                    <li><i class="fas fa-envelope"></i> P.O Box 28860 - 00100, Nairobi</li>
                                    
                                </ul>
                                
                                     
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.70876274214!2d36.6888634674671!3d-1.2579099629991732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a6bf7445dc1%3A0x940b62a3c8efde4c!2sMoringa%20School!5e0!3m2!1sen!2ske!4v1721775508945!5m2!1sen!2ske" width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                
            </div>
       </div>
       <div class="footer-copyright">
            <span><?php the_field('copyright_text',2); ?></span>
        </div>
	    
		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ngigi-moringa' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ngigi-moringa' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ngigi-moringa' ), 'ngigi-moringa', '<a href="https://ngiginyoro.co.ke">Ngigi Nyoro</a>' );
				?>
		</div>--><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
