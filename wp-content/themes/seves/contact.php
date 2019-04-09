<?php
    /*
    Template Name: Contact
    */
 	the_post();
	get_header();
	$imageSingle = get_field('img_article');
	$urlBackground  = wp_get_attachment_image_src($imageSingle, '')[0];

    if(isset($_POST['form_submit'])
    && (!empty($_POST['firstname']))
    && (!empty($_POST['secondname']))
    && (!empty($_POST['email']))
    && (!empty($_POST['message'])) ):

    $firstname = htmlentities($_POST['firstname']);
    $secondname = htmlentities($_POST['secondname']);
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);

    $messageSend = '
        Bonjour, vous avez reçu un message de '. $firstname .' '. $secondname .'

        Message : '. $message .'

        Adresse Email : '. $email .'

     ';

    mail('bryan.vidal@hetic.net', 'Nouveau message via asso-seves.org', $messageSend);
    endif;
?>
	<div class="container-img-single">
		<div class="img-background-single" style="background-image: url('<?php echo $urlBackground; ?>')"></div>
		<div class="background-left"></div>

		<div class="progressBarre">
			<div class="progressCurrent"></div>
			<div class="top-text">
				<?php echo get_the_title(); ?>
			</div>
			<div class="top-text bottom">
				<?php
				$next_post = get_next_post();
				if (!empty( $next_post )): ?>
				  <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="container-site">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="title-page">
                    <?php echo get_field('titre_soutenir'); ?>
                </h1>
                <div class="text-soutenir">
                    <?php echo get_field('contenu_soutenir'); ?>
                </div>
            </div>
        </div>

		<div class="container-single">
            <div class="row">
				<div class="col-sm-12 col-lg-12 ">
                    <h1 class="title-page">
                        <?php echo get_the_title(); ?>
                    </h1>

                    <form class="contactForm form" action="#" method="post">
                        <div class="col-sm-12">
                            <div class="description">
                                <?php echo get_the_content(); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="firstname" placeholder="Votre nom *">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="secondname" placeholder="Votre prénom *">
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="email" placeholder="Votre email *">
                        </div>
                        <div class="col-sm-8">
                            <textarea name="message" placeholder="Votre message"></textarea>
                        </div>
                        <div class="col-sm-8">
                            <input type="submit" name="form_submit" value="Envoyer votre message">
                        </div>
                    </form>
				</div>
            </div>
		</div>

			<?php
    			$next_post = get_next_post();
    			if (!empty( $next_post )): ?>
    			  <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next-article"><span class="sup-title">Article Suivant</span><div class="article-next-text"><?php echo $next_post->post_title; ?></div></a>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
