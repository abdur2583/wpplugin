function philosophy_gmap_sc($attributes){
	$default = array(
		'place' => 'Dhaka',
		'width' => '600',
		'height' => '500',
		'zoom' => '15',
         
	);

	

	$param = shortcode_atts( $default, $attributes );
    $map = <<<EOD

    <div>
        
        <div style="width: 100%">
            <iframe width="{$param['width']}" height="{$param['height']}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={$param['place']}&amp;t=&amp;z={$param['zoom']}&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe> 
        </div>
    </div>

    EOD;
	return $map;
}
add_shortcode( 'gmap', 'philosophy_gmap_sc' );
