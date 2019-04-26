<?php


namespace Inc\Api\Callbacks;


use Inc\Controllers\Controller;

class AdminCallbacks extends Controller
{
	public function adminDashboard()
	{
		return require_once( "$this->plugin_path/templates/admin.php" );
	}
	public function adminCpt()
	{
		return require_once( "$this->plugin_path/templates/cpt.php" );
	}
	public function adminTaxonomy()
	{
		return require_once( "$this->plugin_path/templates/taxonomy.php" );
	}
	public function adminWidget()
	{
		return require_once( "$this->plugin_path/templates/widget.php" );
	}
//	public function luckOptionsGroup( $input )
//	{
//		return $input;
//	}
//
//	public function luckAdminSection(  ) {
//		echo 'Something!';
//	}
	public function luckTextExample(  ) {

		$value = esc_attr( get_option( 'text_example' ) );
		echo ' <input type="text" class="regular-text" name="text_example" value="' .
		     $value . '"placeholder="Write Something here" ';
	}
	public function luckFirstName(  ) {

		$value = esc_attr( get_option( 'first_name' ) );
		echo ' <input type="text" class="regular-text" name="first_name" value="' .
		     $value . '"placeholder="Put dat first name here do !" ';
	}

}