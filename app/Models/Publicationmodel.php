<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class publicationmodel extends Sximo  {
	
	protected $table = 'publications';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT publications.* FROM publications  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE publications.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
