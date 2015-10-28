<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Bet extends CI_Model {

		public function grab_random_quote(){
			$entire_quotes = $this->db->query("SELECT * FROM quotes")->result_array();
			$count = COUNT($entire_quotes);
			$random_quote_num = rand(1, $count);
			$query2 = "SELECT author, quote FROM quotes WHERE id = ?";
			return $this->db->query($query2, $random_quote_num)->row_array();
		}
	}
?>