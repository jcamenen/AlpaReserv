<?php

class Reservation_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	function readReservations()
	{
		$q = $this->db->get('reservation');
		if($q->num_rows()>0)
		{
			return $q->result();
		}
	}
}
?>