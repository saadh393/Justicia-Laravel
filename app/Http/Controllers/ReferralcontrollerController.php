<?php namespace App\Http\Controllers;

use App\Models\Referralcontroller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ; 


class ReferralcontrollerController extends Controller {

	protected $layout = "layouts.main";
	protected $data = array();	
	public $module = 'referralcontroller';
	static $per_page	= '10';

	public function __construct()
	{
		parent::__construct();
		$this->model = new Referralcontroller();
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = array();
	
		$this->data = array_merge(array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'=> 'referralcontroller',
			'return'	=> self::returnUrl()
			
		),$this->data);

		
	}

	public function index( Request $request )
	{		
		return view('referralcontroller.index',$this->data);
	}
	function show(Request $request, $id = null)
	{
		return view('referralcontroller.view',$this->data);
	}	
	public function create( $id = null)
	{		
		return view('referralcontroller.form',$this->data);	
	}	
	public function edit( $id = null)
	{		
		return view('referralcontroller.form',$this->data);	
	}	
	function store( Request $request)
	{		
	
	}
	public function destroy( Request $request)
	{
		
		
	}			


}