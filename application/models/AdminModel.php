<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	public function dashboard($role) {

		$queryMenu = "SELECT `menu`.`id`, `menu`.`menu`, `menu_name`, `url_menu`, `menu_icon`, `treeview_icon`, `drop_icon`
		FROM `menu` JOIN `user_access`
		  ON `menu`.`menu` = `user_access`.`menu`
	   WHERE `user_access`.`user_level` = $role
	   ORDER BY `user_access`.`id` ASC
	";
	return $this->db->query($queryMenu)->result_array();
	}
}