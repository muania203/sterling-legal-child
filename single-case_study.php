<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>

        <main style="max-width:1000px;margin:50px auto;padding:30px;font-family:Arial,sans-serif;color:#101D35;">
            <h1 style="font-size:36px;"><?php the_title(); ?></h1>

            <div style="margin-top:25px;line-height:1.8;color:#555;">
                <?php the_content(); ?>
            </div>

            <section style="margin-top:30px;padding:25px;background:#F7F7F5;border-radius:8px;">
                <h2>Case Study Details</h2>

                <h3>Client Name</h3>
                <p><?php echo esc_html( get_field('client_name') ?: 'Not provided' ); ?></p>

                <h3>Case Overview</h3>
                <p><?php echo esc_html( get_field('case_overview') ?: 'Not provided' ); ?></p>

                <h3>Case Outcome</h3>
                <p><?php echo esc_html( get_field('case_outcome') ?: 'Not provided' ); ?></p>
            </section>
        </main>

        <?php
    endwhile;
endif;

get_footer();