<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$this->response->removeHeader('Cache-Control');
		header('Last-Modified: '. gmdate('D, d M Y H:i:s') . ' GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		header('Pragma: no-cache');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM news ORDER BY created_at ASC LIMIT 3");
		$results = $query->getResult()->length();
		$data = [
			'news' => $results
		];

		echo view('kepala');
		echo view('laman_utama', $data);
		echo view('kaki');
	}

	//--------------------------------------------------------------------

}
