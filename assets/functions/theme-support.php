<?php
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	// Adding post format support
	/* add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); */
	
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	if ( ! isset( $content_width ) ) {
		$content_width = 1200; // Default Foundation width
	}		
	
} /* end theme support */



// Salesforce lead assignment (gravity forms)
add_action('gf_salesforce_connection', 'gf_salesforce_set_default_assignement_rule');
function gf_salesforce_set_default_assignement_rule($client) {
// Two Options for Setting Assignment Rule
// 1. Pass in AssignmentRule ID and "false" to use a specific assignment rule.
// 2. Pass in null and true to trigger the DEFAULT AssignementRule
  $header = new \AssignmentRuleHeader('01QU0000000UCq5', false);
  $client->setAssignmentRuleHeader($header);
  return $client;
}

add_action('gf_salesforce_connection', 'gf_salesforce_set_email_assignement_rule');
function gf_salesforce_set_email_assignement_rule($client) {
  $email_rule = new \EmailHeader(false, false, true);
  $client->setEmailHeader($email_rule);
  return $client;
}