<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class backendjoinus extends Sximo  {
	
	protected $table = 'table_joinus';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT table_joinus.* FROM table_joinus  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE table_joinus.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
