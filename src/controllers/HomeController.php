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
        Debugger::enable(Debugger::DEVELOPMENT);
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

    /**
     * @ROUTE : /home
     */
    public function index()
    {
        $this->view->render('home-page', [
            'title' => 'Home | CRUD-HELIFOX'
        ]);
    }
    
    /**
     * @ROUTE : /get-product-list
     */
    public function getProductList()
    {
        echo json_encode([
            'products' => $this->hm->selectAll('vue_products', 'OBJECT_CON')
        ]);
    }
    
    /**
     * @ROUTE : /product
     */
    public function singleProduct()
    {
        $resp = $this->hm->first(
            [
                'tbl' => 'vue_products',
                'column' => 'id',
                'value' => $_GET['id'],
                'type' => 'object',
            ]
        );

        $faker = [
            'pt_1' => $this->faker->ipv4,
            'pt_2' => $this->faker->timezone,
            'pt_3' => $this->faker->iban(null),
            'pt_4' => $this->faker->creditCardType,
            'title' => $this->faker->company,
        ];

        $this->view->render('single-product', [
            'title' => $resp->name . ' | CRUD-HELIFOX',
            'response' => $resp,
            'faker' => $faker
        ]);
    }

    /**
     * @ROUTE : /get-single-product
     */
    public function getSingleProduct()
    {
        $resp = $this->hm->first(
            [
                'tbl' => 'vue_products',
                'column' => 'id',
                'value' => $_GET['id'],
                'type' => 'object',
            ]
        );

        $faker = [
            'pt_1' => $this->faker->ipv4,
            'pt_2' => $this->faker->timezone,
            'pt_3' => $this->faker->iban(null),
            'pt_4' => $this->faker->creditCardType,
            'title' => $this->faker->company,
        ];

        echo json_encode([
            'title' => $resp->name . ' | CRUD-HELIFOX',
            'response' => $resp,
            'faker' => $faker
        ]);
    }

    public function __404()
    {
        $this->view->render('error/index');
    }
    
    /**
     * @ROUTE : /populate-db
     */
    public function populateDatabase()
    {
        for($i=0 ; $i < 25 ; $i++):
        /*
            $this->hm->insert('vue_products', [
                'name' => $this->faker->name,
                'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'image' => 'http://placehold.it/750x500',
            ])
            ;
        */
        endfor;
    }
}
