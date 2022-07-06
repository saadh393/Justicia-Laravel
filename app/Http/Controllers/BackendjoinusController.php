<?php namespace App\Http\Controllers;

use App\Models\Backendjoinus;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ; 
use App\JoinUsForm;

class BackendjoinusController extends Controller {

	protected $layout = "layouts.main";
	protected $data = array();	
	public $module = 'backendjoinus';
	static $per_page	= '10';

	public function __construct()
	{
		parent::__construct();
		$this->model = new Backendjoinus();
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = array();
	
		$this->data = array_merge(array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'=> 'backendjoinus',
			'return'	=> self::returnUrl()
			
		),$this->data);

		
	}

	public function index( Request $request )
	{
		$this->data['joinsData'] = JoinUsForm::all();
		return view('backendjoinus.index',$this->data);
	}
	function show(Request $request, $id = null)
	{
		return view('backendjoinus.view',$this->data);
	}	
	public function create( $id = null)
	{		
		return view('backendjoinus.form',$this->data);	
	}	
	public function edit( $id = null)
	{		
		return view('backendjoinus.form',$this->data);	
	}	
	function store( Request $request)
	{		
	
	}
	public function delete( $id)
	{
		$member = Backendjoinus::find($id);
		$member->delete();
		return response()->json([
			'success' => 'Record Has been Deleted'
		]);

	}



}