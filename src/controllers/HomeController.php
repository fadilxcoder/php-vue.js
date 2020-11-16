<?php

use \Library\Controller as Controller;
use \Models\Home as Home;
use Tracy\Debugger as Debugger;
use Faker\Factory as Factory;

class HomeController extends Controller{

    private $faker;

    public function __construct()
    {
        parent::__construct();
        // Debugger::enable(Debugger::DEVELOPMENT);
        $this->faker = Factory::create();
        $this->model->call('Home');
        $this->hm = new Home;
    }

    /*
    *
    *    E.g of method of Controller Home
    *
    *    function index()
    *    {
    *       $this->view->render('helifox-landing-page', [                           --- Rendering view by using templating engine
    *           'msg'           => '#MVC Framework',                                --- Sending variable of type String : msg
    *           'list_user'     => $this->hm->selectAll('tbl_name', 'OBJECT_CON')   --- Calling select method from model : list_user
    *       ]);
    *    }
    *
    */

    public function index()
    {
        $this->view->render('home-page', [
            'msg' => '#MVC Framework'
        ]);
    }
    
    public function getProductList()
    {
        echo json_encode([
            'products' => $this->hm->selectAll('products', 'OBJECT_CON')
        ]);
    }

    public function __404()
    {
        $this->view->render('error/index');
    }
    
    public function populateDatabase()
    {
        for($i=0 ; $i < 25 ; $i++):
        
        /*    
            $this->hm->insert('products', [
                'name' => $this->faker->name,
                'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'image' => 'http://placehold.it/750x500',
            ])
            ;
        */
        endfor;
    }
}
