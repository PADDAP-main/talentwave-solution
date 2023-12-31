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

<h1><?= $dayTerm; ?>, <?= $userFirstName; ?></h1>

<section>
    <div class="grid grid-col-2">
        <div class="bg-primary-color content-block">
            <img src="<?= $imageBasePath . '/star-start.svg'; ?>" alt="Star start"/>
        </div>
        <div class="bg-white content-block">
            <img src="<?= $imageBasePath . '/pencil.svg'; ?>" alt="Pencil"/>
            <span class="primary-button top-right send-mail-bttn" data-type="Meer informatie over Talentwave Solution">Meer informatie</span>
        </div>
    </div>
</section>
<section>
    <div class="grid grid-col-3 fixed-height-items-container">
        <div class="bg-white content-block">
            <h2><img src="<?= $imageBasePath . '/upgrade-website.svg'; ?>" alt="Upgrade your website"/> Upgrade je
                Website</h2>
            <div class="sub-content-container">
                <div class="sub-content-block">
                    <h3><span>🔗</span>Koppeling ATS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button" data-type="Meer informatie koppeling ATS">Meer informatie</span>
                </div>
                <div class="sub-content-block">
                    <h3><span>📌</span>Koppeling vacaturebank</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button"
                          data-type="Meer informatie koppeling vacaturebank">Meer informatie</span>
                </div>
                <div class="sub-content-block">
                    <h3><span>➕</span>Onbeperkt extra pagina’s aanmaken</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button" data-type="Meer informatie onbeperkt extra pagina’s aanmaken">Meer informatie</span>
                </div>
                <div class="sub-content-block">
                    <h3><span>➕</span>Onbeperkt extra pagina’s aanmaken</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button" data-type="Meer informatie onbeperkt extra pagina’s aanmaken">Meer informatie</span>
                </div>
                <div class="sub-content-block">
                    <h3><span>➕</span>Onbeperkt extra pagina’s aanmaken</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button" data-type="Meer informatie onbeperkt extra pagina’s aanmaken">Meer informatie</span>
                </div>
            </div>
        </div>
        <div class="bg-white content-block">
            <h2><img src="<?= $imageBasePath . '/upgrade-content.svg'; ?>" alt="Upgrade your content"/> Upgrade je
                Content</h2>
            <div class="sub-content-container">
                <div class="sub-content-block">
                    <h3><span>📝</span>Teksten laten schrijven</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button"
                          data-type="Meer informatie teksten laten schrijven">Meer informatie</span>
                </div>
                <div class="sub-content-block">
                    <h3><span>📸</span>Foto’s/video’s laten maken</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button" data-type="Meer informatie foto’s/video’s laten maken">Meer informatie</span>
                </div>
                <div class="sub-content-block">
                    <h3><span>🤖</span>AI content generation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button"
                          data-type="Meer informatie AI content generation">Meer informatie</span>
                </div>
            </div>
        </div>
        <div class="bg-white content-block">
            <h2><img src="<?= $imageBasePath . '/upgrade-marketing.svg'; ?>" alt="Upgrade your marketing"/> Upgrade je
                Marketing</h2>
            <div class="sub-content-container">
                <div class="sub-content-block">
                    <h3><span><img src="<?= $imageBasePath . '/meta.svg'; ?>" alt="Meta"/></span>Meta advertenties</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button" data-type="Meer informatie meta advertenties">Meer informatie</span>
                </div>
                <div class="sub-content-block">
                    <h3><span class="is-image"><img src="<?= $imageBasePath . '/google.svg'; ?>" alt="Google"/></span>Google
                        advertenties</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button"
                          data-type="Meer informatie google advertenties">Meer informatie</span>
                </div>
                <div class="sub-content-block">
                    <h3><span class="is-image"><img src="<?= $imageBasePath . '/growgo.svg'; ?>" alt="growgo"/></span>growgo
                        platform</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span class="secondary-button" data-type="Meer informatie koppeling ATS">Meer informatie</span>
                </div>
            </div>
        </div>
    </div>
</section>