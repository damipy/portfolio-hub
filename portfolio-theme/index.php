<?php get_header(); ?>
<main class="site-main">
    <section class="hero">
        <h1>Welcome to My Creative Space</h1>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content(); // Displays Greeting Block
            }
        }
        ?>
    </section>
    <section class="projects">
        <h2>Projects</h2>
        <div class="project-grid">
            <div class="project-card" data-modal="modal1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project1.jpg" alt="Project 1">
                <h3>Project 1</h3>
            </div>
            <div class="project-card" data-modal="modal2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project2.jpg" alt="Project 2">
                <h3>Project 2</h3>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>