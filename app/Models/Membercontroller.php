<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class membercontroller extends Sximo  {
	
	protected $table = 'teammember';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT teammember.* FROM teammember ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE teammember.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
