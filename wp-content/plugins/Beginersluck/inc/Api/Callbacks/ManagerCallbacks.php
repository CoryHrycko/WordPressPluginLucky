<?php


namespace Inc\Api\Callbacks;


use Inc\Controllers\Controller;

class ManagerCallbacks extends Controller
{

	public function checkboxSanitize( $input )
	{

		$output = array();

		foreach ( $this->managers as $key => $value ) {
			$output[$key] = isset($input[$key]) ? true : false;
		}
		return $output;

//		return filter_var($input, FILTER_SANITIZE_NUMBER_INT);
//		return( isset($input) ? true : false);
	}

	public function adminSectionManager() {

		echo 'Manager the stuff by clicking them checkboxes doe. The list is provided:';
	}

	public function checkboxField( $args )
	{

		$name = $args['label_for'];
		$classes = $args['class'];
		$option_name = $args['option_name'];
		$checkbox = get_option( $option_name );


		$checked = isset($checkbox[$name]) ? ($checkbox[$name] ? true : false) : false;

		//html to be moved to its own file to be accessed for now it is echoed here for each check box.

		echo '<div class="' . $classes . '">
				<input type="checkbox" id="' . $name . '" name="'
		            . $option_name . '[' . $name . ']" value="1" class="" '. ( $checked ? 'checked' : ''). '>
					<label for="' . $name . '">
						<div></div>
					</label>
			</div>';
	}
}