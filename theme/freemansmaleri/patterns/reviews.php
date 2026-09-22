<?php
/**
 * Title: Omdömen
 * Slug: freemansmaleri/reviews
 * Categories: freemansmaleri-sections
 * Description: Google-betyget stort, tre omdömen bredvid. Texterna är platshållare och byts mot företagets riktiga omdömen.
 */
$reviews = (array) fr_lead( 'omdomen_lista', array() );
?>
<!-- wp:group {"align":"full","className":"fr-sec-reviews","backgroundColor":"sand","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull fr-sec-reviews has-sand-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:group {"className":"fr-rating","layout":{"type":"default"}} -->
<div class="wp-block-group fr-rating"><!-- wp:paragraph {"className":"fr-rating-num"} -->
<p class="fr-rating-num"><?php echo esc_html( fr_lead( 'betyg' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fr-stars fr-stars-lg"} -->
<p class="fr-stars fr-stars-lg"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color"><?php echo esc_html( fr_lead( 'omdomen' ) ); ?> omdömen på Google</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( fr_lead( 'google_url', '#' ) ); ?>" rel="nofollow">Läs alla omdömen på Google →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><?php
foreach ( $reviews as $r ) :
	?><!-- wp:group {"className":"fr-review","layout":{"type":"default"}} -->
<div class="wp-block-group fr-review"><!-- wp:paragraph {"className":"fr-stars"} -->
<p class="fr-stars"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $r[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fr-review-by","fontSize":"small","textColor":"ink-soft"} -->
<p class="fr-review-by has-ink-soft-color has-text-color"><strong><?php echo esc_html( $r[1] ); ?></strong> · <?php echo esc_html( $r[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
