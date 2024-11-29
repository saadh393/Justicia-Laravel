<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class workcategoriescontroller extends Sximo  {
	
	protected $table = 'work_categories';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT work_categories.* FROM work_categories  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE work_categories.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
