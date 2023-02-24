<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Student;
use App\Models\User;
use App\Models\Admin;
use Database\Factories\OrderFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            "name"=>"admin",
            "email"=>"admin@localhost",
            "password"=> bcrypt("admin")
        ]);
        Admin::create([
            "user_id"=>$admin->id,
            "role"=>"ADMIN"
        ]);
        Student::factory(100)->create();
//        \App\Models\User::factory(10)->create();
        //OrderFactory::factory(50)->create();
       //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //Category::factory(100)->create();
//        Product::factory(1000)->create();
//        Order::factory(50)->create();
//        for($i=1;$i<=50;$i++){
//            $random = random_int(1,10);
//            $products=Product::all()->random($random);
//            $grand_total=0;
//            foreach ($products as $p){
//                $qty = random_int(1,10);
//                $grand_total+=$qty*$p->price;
//                DB::table("order_products")->insert([
//                    "order_id"=>$i,
//                    "product_id"=>$p->id,
//                    "qty"=>$qty,
//                    "price"=>$p->price
//                ]);
//            }
//            Order::find($i)->update(["grand_total"=>$grand_total]);
//        }
//
    }
}
