<link rel="stylesheet" href='<?PHP echo url::site() ?>plugins/thumbmaps/css/thumbmaps.css' />
<div class="thumbmaps">
	<?PHP
		foreach ($settings as $setting){
			$API = $setting->thumbmaps_google_api;
		}
	?>
	
	<?php
	foreach ($incidents as $incident)
	{
		$incident_lat = $incident->location->latitude;
		$incident_lon = $incident->location->longitude;
	?>
	<div class="thumbmap">
		<div><img style="width:100px; height:100px;" src="<?php echo Kohana::config('core.site_protocol'); ?>://maps.google.com/maps/api/staticmap?center=<?php echo $incident_lat.",".$incident_lon; ?>&zoom=9&markers=size:mid|color:green|<?php echo $incident_lat.",".$incident_lon; ?>|<?php echo $incident_lat.",".$incident_lon; ?>&size=100x100&style=visibility:off&style=feature:water|element:geometry|visibility:on|invert_lightness:true|hue:0x0088ff|saturation:-39&style=feature:administrative.country|visibility:on|hue:0xffa200|saturation:64&style=feature:administrative|element:labels|visibility:on|saturation:-15|hue:0x000000|lightness:58&style=feature:administrative.province|element:geometry|visibility:on|saturation:76|hue:0xddff00&style=feature:poi|element:geometry|visibility:on|hue:0x00bbff&style=feature:road|visibility:simplified|lightness:-4&style=feature:landscape.natural|visibility:on|hue:0xffc300|invert_lightness:true|lightness:87&key=<?PHP echo $API; ?>" /></div>
		<div><a href="<?php echo url::site() . 'reports/view/' . $incident->id; ?>"><?php echo html::specialchars($incident->incident_title) ?></a></div>
	</div>
	<?php
	}
	?>
</div>
