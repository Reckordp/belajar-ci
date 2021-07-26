<?php namespace App\Controllers;

/**
 * 
 */
class Blog extends BaseController
{
	
	public function show($judul)
	{
		$judul = str_replace('-', ' ', $judul);
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM news WHERE judul='$judul' LIMIT 1");
		$results = $query->getResult();

		if (sizeof($results) < 1) {
			return view('html/production');
		}

		$blog_data = [
			'data' => $results
		];

		echo view('kepala');
		echo view('blog/show', $blog_data);
		echo view('kaki');
	}
}

