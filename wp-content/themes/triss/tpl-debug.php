<?php
/*
Template Name: Debug Template
*/
get_header();
?>

<?php

$product_style_templates = cs_get_option( 'dt-woo-product-style-templates' );
$product_style_templates = (is_array($product_style_templates) && !empty($product_style_templates)) ? $product_style_templates[0] : false;

echo '<pre>';
print_r($product_style_templates);
echo '</pre>';


$data = '';
foreach($product_style_templates as $key => $product_style_template) {
	if(is_array($product_style_template)) {
		$data .= '$settings["'.$key.'"]="Array";'."<br>";
	} else {
		$data .= '$settings["'.$key.'"]="'.$product_style_template.'";'."<br>";
	}
}

echo '<pre>';
print_r($data);
echo '</pre>';

?>

<?php get_footer(); ?>