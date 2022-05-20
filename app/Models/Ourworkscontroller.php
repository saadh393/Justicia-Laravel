<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourworkscontroller extends Sximo  {
	
	protected $table = 'recentworks';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT recentworks.* FROM recentworks  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE recentworks.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
