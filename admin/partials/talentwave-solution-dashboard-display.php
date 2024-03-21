<?php

/**
 * Provide a dashboard area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://paddap.nl
 * @since      1.0.0
 *
 * @package    Talentwave_Solution
 * @subpackage Talentwave_Solution/admin/partials
 */

$imageBasePath = '/wp-content/plugins/talentwave-solution/admin/assets';
$userFirstName = get_user_meta( get_current_user_id(), 'first_name', true );

$hour    = date( 'H', time() );
$dayTerm = ( $hour > 17 ) ? "Goedenavond" : ( ( $hour >= 12 ) ? "Goedemiddag" : "Goedemorgen" );
$userId  = get_current_user_id();
?>

<style>
	<?php include plugin_dir_path( dirname( __FILE__ ) ) . '/css/talentwave-solution-dashboard.css'; ?>
</style>

<input type="hidden" value="<?= $userId; ?>" id="currentUserId"/>

<section class="dashboard-top">
	<h1 class="title"><?= $dayTerm; ?>, <?= $userFirstName; ?></h1>
	<div class="grid grid-col-2">
		<div class="bg-white content-block">
			<div class="content-block-title-container">
				<img src="<?= $imageBasePath . '/star-start.svg'; ?>" alt="Star start"/>
				<h2>Welkom in het Talentwave Solution dashboard</h2>
			</div>
			<div class="content-block-content-grid">
				<a href="/wp-admin/admin.php?page=cfdb7-list.php&fid=57" class="content-grid-block">
					<h3 class="content-grid-block-title">Application form</h3>
					<p class="content-grid-block-text">1.000</p>
				</a>
				<a href="/wp-admin/admin.php?page=cfdb7-list.php&fid=138" class="content-grid-block">
					<h3 class="content-grid-block-title">Contact</h3>
					<p class="content-grid-block-text">50</p>
				</a>
				<a href="/wp-admin/admin.php?page=cfdb7-list.php&fid=151" class="content-grid-block">
					<h3 class="content-grid-block-title">Open application</h3>
					<p class="content-grid-block-text">06</p>
				</a>
				<a href="/wp-admin/admin.php?page=cfdb7-list.php&fid=221" class="content-grid-block">
					<h3 class="content-grid-block-title">Samenwerking</h3>
					<p class="content-grid-block-text">70</p>
				</a>
			</div>
		</div>

		<div class="bg-primary-color content-block">
			<div class="content-block-title-container">
				<img src="<?= $imageBasePath . '/pencil.svg'; ?>" alt="Pencil"/>
				<h2 class="content-block-title">Acties</h2>
			</div>
			<div class="content-block-content-container">
				<a class="content-block-link" href="/wp-admin/edit.php?post_type=page">
					<span>Bewerk de website</span>
					<span><i class="fa-solid fa-arrow-right"></i></span>
				</a>
				<a class="content-block-link" href="/wp-admin/edit.php?post_type=content">
					<span>Voeg artikel toe</span>
					<span><i class="fa-solid fa-arrow-right"></i></span>
				</a>
				<a class="content-block-link" href="#">
					<span>download de Talentwave Solution handleiding</span>
					<span><i class="fa-solid fa-arrow-right"></i></span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="dashboard-bottom">
	<div class="grid grid-col-3 fixed-height-items-container">
		<div class="bg-white content-block">
			<h2><img src="<?= $imageBasePath . '/upgrade-website.svg'; ?>" alt="Upgrade your website"/> Upgrade je
				Website</h2>
			<div class="sub-content-container">
				<a href="#" class="sub-content-block" data-type="Meer informatie koppeling ATS">
					<h3><span>🔗</span>Koppeling ATS</h3>
					<p>Jouw ATS volledig gesynchroniseerd met Talentwave Solution.</p>
				</a>
				<div class="sub-content-block" data-type="Meer informatie koppeling vacaturebank">
					<h3><span>📌</span>Koppeling vacaturebank</h3>
					<p>Alle vacatures automatisch op jouw favoriete vacaturebanken.</p>
				</div>
				<div class="sub-content-block" data-type="Meer informatie onbeperkt extra pagina’s aanmaken">
					<h3><span>➕</span>Onbeperkt extra pagina’s aanmaken</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="sub-content-block" data-type="Meer informatie onbeperkt extra pagina’s aanmaken">
					<h3><span>➕</span>Onbeperkt extra pagina’s aanmaken</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="sub-content-block" data-type="Meer informatie onbeperkt extra pagina’s aanmaken">
					<h3><span>➕</span>Onbeperkt extra pagina’s aanmaken</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
		<div class="bg-white content-block">
			<h2><img src="<?= $imageBasePath . '/upgrade-content.svg'; ?>" alt="Upgrade your content"/> Upgrade je
				Content</h2>
			<div class="sub-content-container">
				<a href="#" class="sub-content-block" data-type="Meer informatie teksten laten schrijven">
					<h3><span>📝</span>Teksten laten schrijven</h3>
					<p>Laat web- of vacatureteksten schrijven door een copywriter.</p>
				</a>
				<a href="#" class="sub-content-block" data-type="Meer informatie foto’s/video’s laten maken">
					<h3><span>📸</span>Foto’s/video’s laten maken</h3>
					<p>Laat professionele recruitment foto’s of video’s maken.</p>
				</a>
				<a href="#" class="sub-content-block" data-type="Meer informatie AI content generation">
					<h3><span>🤖</span>AI content generation</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</a>
			</div>
		</div>
		<div class="bg-white content-block">
			<h2><img src="<?= $imageBasePath . '/upgrade-marketing.svg'; ?>" alt="Upgrade your marketing"/> Upgrade je
				Marketing</h2>
			<div class="sub-content-container">
				<a href="#" class="sub-content-block" data-type="Meer informatie meta advertenties">
					<h3><span><img src="<?= $imageBasePath . '/meta.svg'; ?>" alt="Meta"/></span>Meta advertenties</h3>
					<p>Laat (job)marketing campagnes opzetten voor meer leads en kandidaten.</p>
				</a>
				<a href="#" class="sub-content-block" data-type="Meer informatie google advertenties">
					<h3><span class="is-image"><img src="<?= $imageBasePath . '/google.svg'; ?>" alt="Google"/></span>Google
						advertenties</h3>
					<p>Leads en kandidaten via LinkedIn op de automatische piloot.</p>
				</a>
				<a href="#" class="sub-content-block" data-type="Meer informatie koppeling ATS">
					<h3><span class="is-image"><img src="<?= $imageBasePath . '/growgo.svg'; ?>" alt="growgo"/></span>growgo
						platform</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</a>
			</div>
		</div>
	</div>
</section>

<script>
	<?php include plugin_dir_path( dirname( __FILE__ ) ) . '/js/talentwave-solution-dashboard.js'; ?>
</script>