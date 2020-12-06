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

    /**
     * @ROUTE : /home
     * @TYPE : UI
     */
    public function index()
    {
        $this->view->render('home-page', [
            'title' => 'Home | CRUD-HELIFOX'
        ]);
    }
    
    /**
     * @ROUTE : /get-product-list
     * @TYPE : JSON
     */
    public function getProductList()
    {
        $resp = $this->hm->selectAll('vue_products', 'OBJECT_CON');
        $products = [];

        foreach($resp as $_r):
            $products[] = [
                'id' =>  $_r->id,
                'name' =>  $_r->name,
                'description' =>  $_r->description,
                'image' =>  $_r->image . '?text=' . $this->faker->jobTitle,
            ];
        endforeach;
        
        shuffle($products);
        echo json_encode([
            'products' => $products,
        ]);
    }
    
    /**
     * @ROUTE : /product
     * @TYPE : UI
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

        $this->view->render('single-product', [
            'title' => $resp->name . ' | CRUD-HELIFOX',
            'id' => $resp->id,
        ]);
    }

    /**
     * @ROUTE : /get-single-product
     * @TYPE : JSON
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
            'faker' => $faker,
            'image' =>  $resp->image . '?text=' . $this->faker->jobTitle,
        ]);
    }

    /**
     * @ROUTE : /get-related-products
     * @TYPE : JSON
     */
    public function getRelatedProducts()
    {
        $resp = $this->hm->selectAll('vue_products', 'OBJECT_CON');
        $products = [];

        foreach($resp as $_r):
            $products[] = [
                'id' =>  $_r->id,
                'name' =>  $_r->name,
                'description' =>  $_r->description,
                'image' =>  $_r->image . '?text=' . $this->faker->jobTitle,
            ];
        endforeach;

        shuffle($products);
        $products = array_slice($products, 0, 4);
        echo json_encode([
            'products' => $products,
        ]);
    }

    /**
     * @ROUTE : /contact-us
     * @TYPE : UI
     */
    public function contactUs()
    {
        $this->view->render('contact-us', [
            'title' => 'Contact Us | CRUD HELIFOX'
        ]);
    }

    /**
     * @ROUTE : /form-submission
     * @TYPE : JSON
     */
    public function contactFormSubmission()
    {
        if ($_POST) {

            $iid = $this->hm->insert('contacts', [
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'message' => $_POST['message'],
            ]);

            echo json_encode([
                'HTTP' => 'valid',
                'iid' => $iid
            ]);

            return;
        }

        echo json_encode([
            'HTTP' => 'Invalid',
        ]);
    }

    /**
     * @ROUTE : /get-contacts
     * @TYPE : JSON
     */
    public function getContactList()
    {
        $resp = $this->hm->selectAll('contacts', 'OBJECT_CON');
        $contacts = [];

        foreach($resp as $_r):
            $contacts[] = [
                'name' =>  $_r->name,
                'phone' =>  $_r->phone,
                'email' =>  $_r->email,
                'message' =>  $_r->message,
            ];
        endforeach;
        
        shuffle($contacts);
        echo json_encode([
            'contacts' => $contacts,
        ]);
    }

    /**
     * 404 UI
     */
    public function __404()
    {
        $this->view->render('error/index');
    }
    
    /**
     * @ROUTE : /populate-db
     * @TYPE : EXEC
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
