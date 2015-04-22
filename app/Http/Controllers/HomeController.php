<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	
	
	
	/*public function users()
	{
		
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    header('Content-Type: application/json');

    $request = json_decode(file_get_contents('php://input'));

    $result = new DataSourceResult('mysql:host=localhost;dbname=fedena','root','');

    $type = $_GET['type'];

    $columns = array('id', 'username', 'first_name', 'last_name', 'admin');

    switch($type) {
        case 'create':
            $result = $result->create('users', $columns, $request->models, 'id');
            break;
        case 'read':
            $result = $result->read('users', $columns, $request);
			
            break;
        case 'update':
            $result = $result->update('users', $columns, $request->models, 'id');
            break;
        case 'destroy':
            $result = $result->destroy('users', $request->models, 'id');
            break;
    }

    echo json_encode($result,JSON_NUMERIC_CHECK);

    exit;
}

//require_once '../include/header.php';

$transport = new \Kendo\Data\DataSourceTransport();

$create = new \Kendo\Data\DataSourceTransportCreate();

$create->url(url('/').'/users?type=create')
     ->contentType('application/json')
     ->type('POST');

$read = new \Kendo\Data\DataSourceTransportRead();

$read->url(url('/').'/users?type=read')
     ->contentType('application/json')
     ->type('POST');

$update = new \Kendo\Data\DataSourceTransportUpdate();

$update->url(url('/').'/users?type=update')
     ->contentType('application/json')
     ->type('POST');

$destroy = new \Kendo\Data\DataSourceTransportDestroy();

$destroy->url(url('/').'/users?type=destroy')
     ->contentType('application/json')
     ->type('POST');

$transport->create($create)
          ->read($read)
          ->update($update)
          ->destroy($destroy)
          ->parameterMap('function(data) {
			  data._token = "'.csrf_token().'";
              return kendo.stringify(data);
          }');

$model = new \Kendo\Data\DataSourceSchemaModel();

$productIDField = new \Kendo\Data\DataSourceSchemaModelField('id');
$productIDField->type('number')
               ->editable(false)
               ->nullable(true);

$productNameField = new \Kendo\Data\DataSourceSchemaModelField('username');
$productNameField->type('string')
                 ->validation(array('required' => true));


$unitPriceValidation = new \Kendo\Data\DataSourceSchemaModelFieldValidation();
$unitPriceValidation->required(true)
                    ->min(1);

$unitPriceField = new \Kendo\Data\DataSourceSchemaModelField('first_name');
$unitPriceField->type('string')
               ->validation($unitPriceValidation);

$unitsInStockField = new \Kendo\Data\DataSourceSchemaModelField('last_name');
$unitsInStockField->type('string');

$discontinuedField = new \Kendo\Data\DataSourceSchemaModelField('admin');
$discontinuedField->type('boolean');

$model->id('id')
    ->addField($productIDField)
    ->addField($productNameField)
    ->addField($unitPriceField)
    ->addField($unitsInStockField)
    ->addField($discontinuedField);

$schema = new \Kendo\Data\DataSourceSchema();
$schema->data('data')
       ->errors('errors')
       ->model($model)
       ->total('total');

$dataSource = new \Kendo\Data\DataSource();

$dataSource->transport($transport)
           ->batch(true)
           ->pageSize(30)
           ->schema($schema);

$grid = new \Kendo\UI\Grid('grid');

$productName = new \Kendo\UI\GridColumn();
$productName->field('username')
            ->title('User Name');

$unitPrice = new \Kendo\UI\GridColumn();
$unitPrice->field('first_name')
          ->width(150)
          ->title('First Name');

$unitsInStock = new \Kendo\UI\GridColumn();
$unitsInStock->field('last_name')
          ->width(150)
          ->title('Last Name');

$discontinued = new \Kendo\UI\GridColumn();
$discontinued->field('admin')
          ->width(100);

$command = new \Kendo\UI\GridColumn();
$command->addCommandItem('destroy')
        ->title('&nbsp;')
        ->width(110);

$grid->addColumn($productName, $unitPrice, $unitsInStock, $discontinued, $command)
     ->dataSource($dataSource)
     ->addToolbarItem(new \Kendo\UI\GridToolbarItem('create'),
        new \Kendo\UI\GridToolbarItem('save'), new \Kendo\UI\GridToolbarItem('cancel'))
     ->height(400)
     ->navigatable(true)
     ->editable(true)
     ->pageable(true);

		return view('users')->with('grid',$grid);

	}*/
        


}
