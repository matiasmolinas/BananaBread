<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Band_model extends CI_Model {

	public function get_by_id($band_id, $return_media = FALSE)
	{
		$this->db->where('band_id', $band_id);
		$this->get($return_media);
	}

	public function get_by_gid($gid, $return_media = FALSE)
	{
		$this->db->where('gid', $gid);
		$this->get($return_media);
	}

	protected function get($return_media = FALSE)
	{
		$band = $this->db->get('band')->row();

		if ($return_media)
		{
			$band->media = $this->db->where('band_id', $band_id)->get('media')->result();
		}

		return $band;
	}

}

/* End of file band_model.php */
/* Location: ./application/models/band_model.php */
