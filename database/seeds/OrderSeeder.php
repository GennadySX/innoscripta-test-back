<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $order = new \App\Order();
        $order->fill([
            'user_id'=>null,
            'fullName'=> 'Jack Daniel',
            'phone' => '+1 245 244 5250',
            'address' => 'Kazan, Russia',
            'order' => '[{"item":{"id":7,"name":"Stephanie","composition":"Nam est in voluptas rerum id. Est odit sit consectetur iure. Velit voluptates sint soluta distinctio.","image":"/uploads/pizza_1.png","description":"Quis dolores voluptas facere omnis.","lang_box":[],"type":[{"id":22,"pizza_id":7,"name":"Small","cost":34.94},{"id":23,"pizza_id":7,"name":"Middle","cost":16.82},{"id":24,"pizza_id":7,"name":"Large","cost":18.46}]},"type":{"id":22,"pizza_id":7,"name":"Small","cost":34.94},"addition":[],"count":2,"sum":34.94,"index":0},{"item":{"id":5,"name":"Modesto","composition":"Vel iste debitis soluta dicta dolores. Voluptatem rem dignissimos animi deleniti ut animi. Id quasi ut ad quas ut voluptatibus voluptatem voluptatem.","image":"/uploads/pizza_1.png","description":"Nam excepturi inventore in aliquid dolorem ut.","lang_box":[],"type":[{"id":16,"pizza_id":5,"name":"Small","cost":12.29},{"id":17,"pizza_id":5,"name":"Middle","cost":32.16},{"id":18,"pizza_id":5,"name":"Large","cost":30.77}]},"type":{"id":16,"pizza_id":5,"name":"Small","cost":12.29},"addition":[],"count":1,"sum":12.29},{"item":{"id":1,"name":"Mexicano","composition":"Ham, tomato, cheese, dough, mayonnaise","image":"/uploads/pizza_1.png","description":"this is delicious!","lang_box":[{"id":1,"model_type":"App\\Pizza","model_id":1,"column_name":"name","language_id":2,"value":"Mexicano`s","language":{"id":2,"name":"Spanish","lang_code":"sp"}}],"type":[{"id":4,"pizza_id":1,"name":"Small","cost":21.36},{"id":5,"pizza_id":1,"name":"Middle","cost":29.64},{"id":6,"pizza_id":1,"name":"Large","cost":30.15}]},"type":{"id":4,"pizza_id":1,"name":"Small","cost":21.36},"addition":[{"id":2,"name":"Tomato sauce ","description":"blah blah","image":"/uploads/sauce.jpg","cost":7.22},{"id":1,"name":"Pickle","description":"blah blah","image":"/uploads/cucumber.jpg","cost":5.22},{"id":3,"name":"Fries","description":"blah blah","image":"/uploads/fries.png","cost":3.22}],"count":1,"sum":37.019999999999996}]'
        ])->save();
    }
}
