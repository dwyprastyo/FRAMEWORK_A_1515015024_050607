<?php

namespace App\Http\Controllers;

use App\dosen;

class RelationshipRebornController extends Controller
{
	public function ujiHas()
	{
	return Dosen::has('dosen_matakuliah')->get();
	}

	public function ujiDoesntHave()
	{
		return Dosen::doesntHave('dosen_matakuliah')->get();
	}
}