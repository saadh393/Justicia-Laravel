<?php namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Models\Sximo\Menu;

class DashboardController extends Controller {

	public function __construct()
	{
		parent::__construct();
		
        $this->data = array(
            'pageTitle' =>  $this->config['cnf_appname'],
            'pageNote'  =>  'Welcome to Dashboard',
            
        );			
	}

	public function index( Request $request )
	{
		$model = Menu::all();
	
		$transformedData = [];

		foreach ($model as $page) {
			if($page['menu_name'] == "Articles" || $page['menu_name'] == "Single Componenets"){
				continue;
			}
			$transformedData[] = [
				'module' => $page['module'],
				'menuName' => $page['menu_name'],
				'menuIcons' => $page['menu_icons']
			];
		};

		
		return view('dashboard.index',[
			'pageTitle' =>  'Navigation',
            'pageNote'  =>  'Manage All Side/Top Menu',
			'menu' => $transformedData]
		);
	}	


	


}