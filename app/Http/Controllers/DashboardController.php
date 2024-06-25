<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller{
    public static function index(){
        return view('dashboard');
    }

    public function delete($table, $id){
        $param = ['is_deleted' => 1];
        DB::table($table)->where('id', $id)->update($param);
        return redirect()->back()->with('status', 'Bill Deleted successfully');
    }
}
