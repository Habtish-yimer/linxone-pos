<?php

$config = array();                     // Khai bao mang chua config cua module
$config['mod_name'] = 'pos';     // Ten cua module hien thi o danh sach cac module
$config['mod_ui_name'] = 'POS';  // Tên của module được hiển thị trên menu chính của hệ thống.
$config['mod_description'] = '';  // Mô tả về module này.
$config['mod_permission_define'][] = 'Manager table'; //Tên quyền tự định nghĩa thứ 1
$config['mod_permission_define'][] = 'Manager menu'; //Tên quyền tự định nghĩa thứ 2
$config['mod_permission_define'][] = 'Manager deposit'; //Tên quyền tự định nghĩa thứ 2
// $config['mod_permission_define'][] = 'Use payment deposit'; //Tên quyền tự định nghĩa thứ 2
$config['mod_permission_define'][] = 'Manage session'; //Tên quyền tự định nghĩa thứ 2
?>

