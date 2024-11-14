<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class referralcontroller extends Sximo  {
	
	protected $table = 'referral';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT referral.* FROM referral  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE referral.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
