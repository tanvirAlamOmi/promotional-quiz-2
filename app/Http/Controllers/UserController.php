<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Mail;

class UserController extends Controller
{
    public function userListDataTable()
    {
        // if ($req->ajax()) {
			$data = User::All();
			return Datatables::of($data) 
			->make(true);
			return $data;
		// } 
    }
}
