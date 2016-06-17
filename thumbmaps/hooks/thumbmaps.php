<?php defined('SYSPATH') or die('No direct script access.');
// Start wildlife category block
class thumbmaps { // CHANGE THIS FOR OTHER BLOCKS
	public function __construct()
	{
		// Array of block params
		$block = array(
			"classname" => "thumbmaps", // Must match class name aboce
			"name" => "Thumbmaps",
			"description" => "Show Thumb Maps"
		);
		// register block with core, this makes it available to users 
		blocks::register($block);
	}
	public function block($id = null)
	{
		if($id==null){
			// Load the reports block view
			$content = new View('thumbmaps'); // CHANGE THIS IF YOU WANT A DIFFERENT VIEW
			
			// Get Reports
			$content->incidents = ORM::factory('incident')
				->where('incident_active', '1')
				->limit('10')
				->orderby('incident_date', 'desc')
				->find_all();
				
			$content->settings = ORM::factory('thumbmaps_settings')
				->find_all();
			
			echo $content;
			
		}else{
		
			// Load the reports block view
			$content = new View('thumbmaps_url'); // CHANGE THIS IF YOU WANT A DIFFERENT VIEW
			
			// Get Reports
			$content->incidents = ORM::factory('incident')
				->where('id', $id)
				->find_all();
				
			$content->settings = ORM::factory('thumbmaps_settings')
				->find_all();
			
			echo $content;
			
		}
	}
}
new thumbmaps;