<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class pagescontroller extends Sximo  {
	
	protected $table = 'pages';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT pages.* FROM pages  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE pages.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
