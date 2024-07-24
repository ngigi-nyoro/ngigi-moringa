<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ngigi_Moringa
 */

get_header();
?>

	<main id="primary" class="site-main">
	    
	    <?php if ( is_front_page() || is_home() ) : ?>
	        <div class="awards-section">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-4">
	                        <h1 class="awards-section-title">Our Accolades</h1>
	                    </div>
	                    <div class="col-md-8">
	                        <div class="row">
	                            <div class="col-md-4 text-center">
	                                <img class="award-image" src="<?php echo get_template_directory_uri().'/images/v11_42.png'; ?>" alt="">
	                                <div class="award-description">Moringa Named as World Technology Pioneers in 2021</div>
	                            </div>
	                            <div class="col-md-4 text-center">
	                                <img class="award-image" src="<?php echo get_template_directory_uri().'/images/v11_43.png'; ?>" alt="">
	                                <div class="award-description">Most Preferred Corporate Training Institution 2021</div>
	                            </div>
	                            <div class="col-md-4 text-center">
	                                <img class="award-image" src="<?php echo get_template_directory_uri().'/images/v11_44.png'; ?>" alt="">
	                                <div class="award-description">Moringa listed among the most promising EdTech startups from Sub-Saharan Africa by HolonIQ</div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	        <div class="welcome-section">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-6">
	                        <?php if( get_field('welcome_section_image') ): ?>
    	                        <img class="welcome-image" src="<?php the_field('welcome_section_image'); ?>">
    	                        
    	                   <?php endif; ?>
	                    </div>
	                    <div class="col-md-6">
	                        <?php if( get_field('welcome_section_title') ): ?>
	                            <h1 class="welcome-title"><?php the_field('welcome_section_title'); ?></h1>
	                        <?php endif; ?>
	                        <div class="welcome-description">
	                            <?php the_field('welcome_section_description'); ?>
	                        </div>
	                        <?php if( get_field('welcome_button_caption') &&  get_field('welcome_button_url')): ?>
    	                        <div class="welcome-btn">
        	                       <a class="btn-1" href="<?php the_field('welcome_button_url'); ?>"><?php the_field('welcome_button_caption'); ?></a>
        	                   </div>
        	                <?php endif; ?>
	                    </div>
	                </div>
	           </div>
	       </div>
	       
	       <div class="quick-facts-section">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-3 quick-fact-outer text-center">
	                        <div class="quick-fact-value">4000+</div>
	                        <div class="quick-fact-description">Enrolled Students</div>
	                    </div>
	                    <div class="col-md-3 quick-fact-outer text-center">
	                        <div class="quick-fact-value">3000+</div>
	                        <div class="quick-fact-description">Graduates</div>
	                    </div>
	                    <div class="col-md-3 quick-fact-outer text-center">
	                        <div class="quick-fact-value">300+</div>
	                        <div class="quick-fact-description">Employer Partners</div>
	                    </div>
	                    <div class="col-md-3 quick-fact-outer text-center">
	                        <div class="quick-fact-value">85%</div>
	                        <div class="quick-fact-description">Employment Rate</div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	        <div class="courses-section">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-6">
	                        <h1 class="courses-section-title">Market-aligned Courses Curated for Your Career Success</h1>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-4">
	                        <div class="course-outer">
	                            <div class="course-inner-image">
	                                <img src="<?php echo get_template_directory_uri().'/images/v11_79.png'; ?>" alt="">
	                            </div>
	                            <div class="course-inner-details">
	                                <h3><a href="#">Software Engineering Online</a></h3>
	                                <p>Are you passionate about studying software engineering but want to avoid the hassle that comes with a daily commute? Enroll now to study from home and become a Moringa Certified Software Engineer!</p>
	                            </div>
	                            <div class="course-bottom">
	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <a class="btn-lnk" href="#">Apply Now</a>
	                                    </div>
	                                    <div class="col-md-6 text-end">
	                                        <a class="btn-1 sm" href="#">Explore Course</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="course-outer">
	                            <div class="course-inner-image">
	                                <img src="<?php echo get_template_directory_uri().'/images/v11_92.png'; ?>" alt="">
	                            </div>
	                            <div class="course-inner-details">
	                                <h3><a href="#">Data Science Online</a></h3>
	                                <p>Future Proof Your Career with Market-Relevant Skills in Data Science. Master Data Analysis, Python, Machine Learning, and AI in 25 weeks </p>
	                            </div>
	                            <div class="course-bottom">
	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <a class="btn-lnk" href="#">Apply Now</a>
	                                    </div>
	                                    <div class="col-md-6 text-end">
	                                        <a class="btn-1 sm" href="#">Explore Course</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="course-outer">
	                            <div class="course-inner-image">
	                                <img src="<?php echo get_template_directory_uri().'/images/v11_102.png'; ?>" alt="">
	                            </div>
	                            <div class="course-inner-details">
	                                <h3><a href="#">Mobile App Development</a></h3>
	                                <p>Whether you’re a student, aspiring developer, or industry professional, our comprehensive and up-to-date curriculum is your gateway to creating innovative and impactful mobile experiences.</p>
	                            </div>
	                            <div class="course-bottom">
	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <a class="btn-lnk" href="#">Apply Now</a>
	                                    </div>
	                                    <div class="col-md-6 text-end">
	                                        <a class="btn-1 sm" href="#">Explore Course</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            
	        </div>
	        
	        <div class="testimonials-section">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12">
	                        <h1 class="testimonials-section-title">What Our Students Say About Us</h1>
	                    </div>
	                </div>
	                
	            </div>
	       </div>
	       
	       <div class="partners-section">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-6">
	                        <h1 class="section-title">Our Career Day events and recruitment drives have helped over 85% of our core graduates find meaningful employment within 6-months post-graduation</h1>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="row">
	                            <div class="col-md-4 partner text-center">
	                                <img src="<?php echo get_template_directory_uri().'/images/v16_143.png'; ?>" alt="">
	                            </div>
	                            <div class="col-md-4 partner text-center">
	                                <img src="<?php echo get_template_directory_uri().'/images/v16_144.png'; ?>" alt="">
	                            </div>
	                            <div class="col-md-4 partner text-center">
	                                <img src="<?php echo get_template_directory_uri().'/images/v16_145.png'; ?>" alt="">
	                            </div>
	                            <div class="col-md-4 partner text-center">
	                                <img src="<?php echo get_template_directory_uri().'/images/v16_146.png'; ?>" alt="">
	                            </div>
	                            <div class="col-md-4 partner text-center">
	                                <img src="<?php echo get_template_directory_uri().'/images/v16_147.png'; ?>" alt="">
	                            </div>
	                            <div class="col-md-4 partner text-center">
	                                <img src="<?php echo get_template_directory_uri().'/images/v16_148.png'; ?>" alt="">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                
	            </div>
	       </div>
	       
	       <div class="cta-section">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-6 pl-0 ps-0">
	                        <div class = "cta-left">
	                            <h1 class="section-title">Improving access to quality education through financial aid</h1>
	                            <p>We believe that quality education should be accessible to all who want to learn regardless of their financial circumstances. Your Moringa education will now be made affordable and accessible through a number of Student Financing options such as Loans and Partial Scholarships.</p>
	                            <a class="btn-1" href="#">Learn More</a>
	                        </div>
	                    </div>
	                    
	                </div>
	            </div>
	        </div>
	        
	        <div class="blog-section">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12">
	                        <h1 class="section-title">From The Moringa World</h1>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-4">
	                        <div class="blog-outer">
	                            <div class="blog-inner-image">
	                                <img src="<?php echo get_template_directory_uri().'/images/v18_166.png'; ?>" alt="">
	                            </div>
	                            <div class="blog-inner-details">
	                                <div class="blog-category">
	                                    <span>Software Development</span>
	                                </div>
	                                <h3><a href="#">Exploring Events and Event Listeners in SQLAlchemy ORM</a></h3>
	                            </div>
	                            <div class="blog-bottom">
	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <span><i class="fas fa-calendar-alt"></i> </span>20 July, 2024
	                                    </div>
	                                    <div class="col-md-6 text-right text-end">
	                                        <a class="btn-lnk" href="#">Read More</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="blog-outer">
	                            <div class="blog-inner-image">
	                                <img src="<?php echo get_template_directory_uri().'/images/v18_211.png'; ?>" alt="">
	                            </div>
	                            <div class="blog-inner-details">
	                                <div class="blog-category">
	                                    <span>Opinion Pieces</span>
	                                </div>
	                                <h3><a href="#">Mastering the Art of Problem-Solving: A Guide for Aspiring Developers</a></h3>
	                            </div>
	                            <div class="blog-bottom">
	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <span><i class="fas fa-calendar-alt"></i> </span>20 July, 2024
	                                    </div>
	                                    <div class="col-md-6 text-right text-end">
	                                        <a class="btn-lnk" href="#">Read More</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="blog-outer">
	                            <div class="blog-inner-image">
	                                <img src="<?php echo get_template_directory_uri().'/images/v18_226.png'; ?>" alt="">
	                            </div>
	                            <div class="blog-inner-details">
	                                <div class="blog-category">
	                                    <span>Software Development</span>
	                                </div>
	                                <h3><a href="#">SQLAlchemy Object Relational Mapper (ORM) State Management</a></h3>
	                            </div>
	                            <div class="blog-bottom">
	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <span><i class="fas fa-calendar-alt"></i> </span>20 July, 2024
	                                    </div>
	                                    <div class="col-md-6 text-right text-end">
	                                        <a class="btn-lnk" href="#">Read More</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    
	                </div>
	            </div>
	        </div>
	   <?php elseif (get_the_title() == 'Course Detail'): ?>
	        <?php if( get_field('top_cta_text') ): ?>
    	        <div class="course-top-cta-section">
    	            <div class="container">
    	                <div class="row">
    	                    <div class="col-md-12 text-center">
    	                        <span class="top-cta-text"><?php the_field('top_cta_text'); ?></span>
    	                        <?php if (get_field('top_cta_button_caption') && get_field('top_cta_button_url')): ?>
    	                            <a class="btn-1 btn-outline" href="<?php the_field('top_cta_button_url'); ?>"><?php the_field('top_cta_button_caption'); ?></a>
    	                        <?php endif; ?>
    	                    </div>
    	                    
    	                </div>
    	            </div>
    	        </div>
    	        <div class="course-details">
    	            <div class="container">
    	                <div class="row">
        	                <div class="col-md-8">
        	                    <div class="course-overview">
                	                <div class="">
                	                    <div class="">
                	                        <h1 class="section-title">Course Overview</h1>
                	                        <div class="course-overview-inner">
                	                            <?php the_field('course_overview'); ?>
                	                            
                	                            <div class="accordion" id="accordionOverview">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    Why study Software Engineering?
                                                                </button>
                                                            </h2>
                                                        </div>
                                                
                                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOverview">
                                                            <div class="card-body">
                                                                <ol>
                                                                    <li>
                                                                        <b>Practical Hands-on Learning</b><br>
                                                                        Get job-ready with practical, hands-on learning. You’ll learn the in-demand market languages and skills, labs, and real-world portfolio development.
                                                                    </li>
                                                                    <li>
                                                                        <b>Technical Mentorship Schedule</b><br>
                                                                        1:1s with your instructor to work on technical concepts, plan out your pacing or check-in about your program milestones.
                                                                    </li>
                                                                    <li>
                                                                        <b>Learn in Community</b><br>
                                                                        You may be learning online, but you’re not alone. You can schedule 1:1s with your instructor for added guidance 3. 1:1
                                                                    </li>
                                                                    <li>
                                                                        <b>Career Coaching and Graduate Support</b><br>
                                                                        Receive career coaching and job-hunting support for up to 12 months post graduation
                                                                    </li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                   Who is this Course for?
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOverview">
                                                            <div class="card-body">
                                                                ---
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingThree">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    What’s included?
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOverview">
                                                            <div class="card-body">
                                                                ---
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                	                        </div>
                	                    </div>
                	                </div>
                	            </div>
                	            
                	            <div class="course-overview">
                	                <div class="">
                	                    <div class="">
                	                        <h1 class="section-title">Curriculum</h1>
                	                        <div class="course-overview-inner">
                	                            <?php the_field('curriculum'); ?>
                	                            
                	                            <div class="accordion" id="accordionCurriculum">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    Phase 0: Introduction/ Prework - HTML CSS GIT
                                                                </button>
                                                            </h2>
                                                        </div>
                                                
                                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCurriculum">
                                                            <div class="card-body">
                                                                <p><b>HTML</b></p>
                                                                <p>Students master the basic building blocks of how the web is rendered and become fluent in the language that makes the web beautiful. They additionally learn how to conceive of and build UIs for web apps by writing well-structured HTML and CSS</p>
                                                                <p><b>Git</b></p>
                                                                <p></p>Students explore version control using git commands including cloning, branching, merging, rolling back commits, forking, and submitting pull requests.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                   Phase 1: Front-End Development
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionCurriculum">
                                                            <div class="card-body">
                                                                ---
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingThree">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    Soft Skills
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionCurriculum">
                                                            <div class="card-body">
                                                                ---
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingFour">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    Phase 2: Front-End Web Applications
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionCurriculum">
                                                            <div class="card-body">
                                                                ---
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingFive">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                    Soft Skills
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionCurriculum">
                                                            <div class="card-body">
                                                                ---
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingSix">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                    Phase 3: Back-End Development
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionCurriculum">
                                                            <div class="card-body">
                                                                ---
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingSeven">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                                    Soft Skills
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionCurriculum">
                                                            <div class="card-body">
                                                                ---
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingEight">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                                    Phase 4: Back-End Web APIs
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionCurriculum">
                                                            <div class="card-body">
                                                                ---
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingNine">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                                    Phase 5: Final Project
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionCurriculum">
                                                            <div class="card-body">
                                                                ---
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                	                        </div>
                	                    </div>
                	                </div>
                	            </div>
                	            
                	           
                	            
                	            
                	            
                	            
                	            
        	                </div>
        	                <div class="col-md-4">
        	                    <div class="course-overview">
                	                <div class="">
                	                    <div class="">
                	                        <h1 class="section-title">Course Details</h1>
                	                        <div class="course-overview-inner">
                	                            <p>Find out the pacing options available, price, and more information about this course;</p>
                	                            
                	                            <?php if( get_field('curriculum_developer')): ?>
                	                                <p><b>Curriculum developed by;</b><br><?php the_field('curriculum_developer'); ?></p>
                	                            <?php endif; ?>
                	                            <?php if( get_field('course_start_date')): ?>
                	                                <p><b>Start date;</b><br><?php the_field('course_start_date'); ?></p>
                	                            <?php endif; ?>
                	                            <?php if( get_field('course_duration')): ?>
                	                                <p><b>Course duration;</b><br><?php the_field('course_duration'); ?></p>
                	                            <?php endif; ?>
                	                            <?php if( get_field('course_price')): ?>
                	                                <p><b>Course price;</b><br><?php the_field('course_price'); ?></p>
                	                            <?php endif; ?>
                	                            
                	                           
                	                           <?php if( get_field('course_brochure') &&  get_field('course_brochure')): ?>
                    	                            <p>Installment plans are available on <a href="<?php the_field('cta_course_brochure'); ?>" target="_blank">the installment plans document</a></p>
                    	                        <?php endif; ?>
                	                            
                	                       </div>
                	                   </div>
                	               </div>
                	           </div>
        	                </div>
        	                
        	           </div>
    	                
    	                
    	                
    	            </div>
        	        
        	   </div>
    	    <?php endif; ?>
	   
	        <!--<h1>Course Details</h1>-->
	        
	    <?php else: ?>
	       <?php
    		while ( have_posts() ) :
    			the_post();
    
    			get_template_part( 'template-parts/content', 'page' );
    
    			// If comments are open or we have at least one comment, load up the comment template.
    			if ( comments_open() || get_comments_number() ) :
    				comments_template();
    			endif;
    
    		endwhile; // End of the loop.
    		?>
	    <?php endif; ?>

		

	</main><!-- #main -->

<?php
    if ( is_front_page() || is_home() || get_the_title() == 'Course Detail'){
        
    } else {
        get_sidebar();
    }
get_footer();
