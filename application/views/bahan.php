<!-- Query Menu -->
<?php
  $role_id = $this->session->userdata('role_id');
  $queryMenu = "
      SELECT `user_menu`.`id`,`menu`
      FROM `user_menu` JOIN `user_access_menu`
      ON `user_menu`.`id` = `user_access_menu`.`menu_id`
      WHERE `user_access_menu`.`role_id` = $role_id
      ORDER BY `user_access_menu`.`menu_id` ASC
  ";
  $menu =$this->db->query($queryMenu)->result_array();
?>
<?php
  $menuId = $m['id'];
  $querySubMenu = " SELEC * FROM
                    `user_sub_menu` JOIN `user_menu`
                     ON `user_sub_menu`.`menu` = `user_menu`.`id`
                     WHERE `user_sub_menu`.`menu_id` = $menuId
                     AND `user_sub_menu`.`is_active` = 1";
  $subMenu  = $this->db->query($querySubMenu)->result_array();


?>
