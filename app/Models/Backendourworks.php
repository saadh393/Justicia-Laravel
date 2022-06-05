<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class backendourworks extends Sximo  {
	
	protected $table = 'our_works';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT our_works.* FROM our_works  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE our_works.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
