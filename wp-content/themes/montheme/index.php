<!-- About me -->
<?php get_header(); ?>
<div class="container pt-5">
    <div class="row pt-5">
        <div class="col-lg-4 col-md-4 col-sm-12 pt-5" style="font-size: 40px">
            <p class="p-0 m-0">Hi,</p>
            <p class="p-0 m-0">I'm Hugo ,</p>
            <p class="p-0 m-0">web developper.</p>
            <div class="ps-5 fs-5 mt-2">
                <a href="#contact" class="bg-primary text-white button__link-contact p-2 rounded-3">
                    Contact me
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="pt-5 pb-5" id="about_me">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-lg-7 col-md-5 col-12 me-5">
                <h2 class="pb-3">About me</h2>
                <h3>Hugo Boyer</h3>
                <p>
                    Passionate about computers, I decided to launch myself into a training on the digital, it allowed me to discover the web development.
                </p>
                <p>I started online courses in self-taught on the net to learn about the learning of site creation and computer programming,
                    Currently a student at the school EPITECH I am training at the Webacadémie to obtain the title of web developer over a period of 2 years and am looking for a work experience.
                </p>
                <p>Discover my CV below</p>
                <div class=" text-center bg-primary p-2 col-lg-2 col-md-6 col-12 rounded-3 ">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/picture/CV_EPITECH.pdf" download class="text-white button__link-contact">CV</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 image"><img src="<?php echo get_template_directory_uri(); ?>/assets/picture/portfolio_porfil.jpg" class="portfolio_picture-profil portfolio__pictureheight" alt="image_profil" /></div>
        </div>
    </div>
</div>
<section class="pt-5 bg-dark text-white d-flex justify-content-center">
    <div class="container">
        <div class="row pb-5 pt-5">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                <div>
                    <h2 class="portfolio__skills-h2">Skills</h2>
                    <p>
                        Language and tool seen during my training<br />
                        and used on different projects<br />
                    </p>
                </div>
            </div>
            <?php $skills = new WP_Query(array(
                'post_type' => 'skills',
                'posts_per_page' => 100,
            )); ?>
            <?php if ($skills->have_posts()) : ?>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div>
                        <div class="row">
                            <h5 class="pb-3">Developpement Skills</h5>
                            <?php while ($skills->have_posts()) : $skill = $skills->the_post(); ?>
                                <div class="col-lg-4 col-md-4 col-6 mb-4">
                                    <div class="d-flex align-items-center portfolio_item-title">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                    <?php $outils = new WP_Query(array(
                        'post_type' => 'outils',
                        'posts_per_page' => 100,
                    )); ?>
                    <?php if ($outils->have_posts()) : ?>
                        <div>
                            <h5 class="mb-3 text-white pb-3 pt-3">Outil Skills</h5>
                            <div class="row">
                                <?php while ($outils->have_posts()) : $outil = $outils->the_post(); ?>
                                    <div class="col-lg-4 col-md-4 col-6 mb-4">
                                        <div class="portfolio_item-title">
                                            <?php the_title(); ?>

                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
        </div>
    </div>
</section>
<section class="pt-5 bg-dark text-white d-flex justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="row pb-5 pt-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div>
                            <h2 class="portfolio__skills-h2">Languages</h2>
                            <div class="row pt-5 d-flex d-flex justify-content-around">
                                <p class="col-lg-5 col-md-5 col-5 ul__item-language  text-center border rounded-4"> French</p>
                                <p class="col-lg-5 col-md-5 col-5 ul__item-language text-center border rounded-4">English</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row pb-5 pt-5">
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                        <div>
                            <h2 class="portfolio__skills-h2">Diploma</h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 pb-4 ps-5">
                            <div class="row">
                                <a><img src="<?php echo get_template_directory_uri(); ?>/assets/picture/diplôme/portfolio_logo-diplome.jpg" class="rounded-circle border" alt="image_diplome" title="diplome: Simplon Artis du numérique" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="projects">
    <div class="container pt-5 pb-5">
        <h2 class="section_text-center mb-5">Project</h2>
        <?php if (have_posts()) : ?>
            <div class="row pt-5">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <figure class="project-item">
                            <?php the_post_thumbnail('project-item-size', ['class' => 'img-fluid']); ?>
                            <figcaption class="project-item-legend">
                                <p class="project-item-legend-title"><?php the_title(); ?></p>
                                <a href="<?php the_permalink(); ?>" data-bs-toggle="modal" data-bs-target="#project-<?php the_ID() ?>" class="btn btn-primary">Preview</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div id="project-<?php the_ID() ?>" class="modal fade text-dark" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><?php the_title(); ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        <?php else : ?>
            <p>Aucun ptojet n'a été trouvé.</p>
        <?php endif; ?>
    </div>
</section>
<section class="" id="hobbies">
    <div class="container text-center pb-5 pt-5 ">
        <h2 class="text-dark">HOBBIES</h2>
        <div class="row">
            <div class="col-lg-2 p-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/picture/portfolio_piano.jpg" class="col-12 block__hobbies-img block__picture-piano" alt="image_piano" />
            </div>
            <div class="col-lg-10 col-12">
                <div class="row">
                    <div class="col-lg-8 p-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/picture/portfolio_games.png" class=" block__hobbies-img" alt="image_game" />
                    </div>
                    <div class="col-lg-4 p-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/picture/portfolio_pc_hobbies.jpg" class=" block__hobbies-img" alt="image_pc" />
                    </div>
                    <div class="col-lg-12 p-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/picture/portfolio_peinture.jpg" class=" block__hobbies-img " alt="image_peinture" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

<!-- <?php the_post_thumbnail('project-item-skills-size', ['class' => 'img-fluid']); ?> -->