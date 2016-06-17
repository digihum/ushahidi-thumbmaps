<?PHP
	foreach ($settings as $setting){
		$API = $setting->thumbmaps_google_api;
	}
	
	foreach ($incidents as $incident)
	{
		echo Kohana::config('core.site_protocol');
		echo "://maps.google.com/maps/api/staticmap?center=";
		echo $incident->location->latitude.",".$incident->location->longitude;
		echo "&zoom=9&markers=size:mid|color:green|" . $incident->location->latitude.",".$incident->location->longitude . "|" . $incident->location->latitude.",".$incident->location->longitude;
		echo "&size=95x69&style=visibility:off&style=feature:water|element:geometry|visibility:on|invert_lightness:true|hue:0x0088ff|saturation:-39";
		echo "&style=feature:administrative.country|visibility:on|hue:0xffa200|saturation:64&style=feature:administrative|element:labels|visibility:on|saturation:-15|";
		echo "hue:0x000000|lightness:58&style=feature:administrative.province|element:geometry|visibility:on|saturation:76|hue:0xddff00&style=feature:poi|element:geometry|";
		echo "visibility:on|hue:0x00bbff&style=feature:road|visibility:simplified|lightness:-4&style=feature:landscape.natural|visibility:on|hue:0xffc300|invert_lightness:true";
		echo "|lightness:87&key=" . $API; 
	}
	