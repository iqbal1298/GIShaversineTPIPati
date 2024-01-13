<?php

class M_tpi extends CI_Model {

	public function getTpi()
	{
		$query = "SELECT `tbl_kapal`.*, `tbl_tpi`.`tpi`
					FROM `tbl_kapal` JOIN `tbl_tpi`
					ON `tbl_kapal` = `tbl_tpi`.`id`
		";
	}
	}