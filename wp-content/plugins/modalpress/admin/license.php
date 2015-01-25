<?php
$modalpress_license = new modalpress_license;

add_action('admin_menu' , array($modalpress_license, 'menu'));
class modalpress_license{
	
	function menu(){
		
	add_submenu_page('edit.php?post_type=modalpress', 'License', 'License', 'edit_posts', 'license', array($this,'page'));	
	}
	
	function page(){
		global $modalpress;
		if($_POST['save-license'] != ''){
			
				update_option('modalpress_license_key', $_POST['modalpress_license_key']);
				$modalpress->deactivate_license();
				$modalpress->activate_license();
				echo 'Updated license key';
		}
		
		echo '<h2>Thank you for purchasing ModalPress</h2>
				<p>Please enter your license below to receive automatic updates, updates are included for the first year free of charge!</p>
				
				<form action="edit.php?post_type=modalpress&page=license" method="post">
				License Key: <input type="text" style="width:500px" value="'.get_option('modalpress_license_key').'" name="modalpress_license_key"> <input type="submit" name="save-license" value="Save">
				</form>';
		
		
	}
	
	
	
}

?>