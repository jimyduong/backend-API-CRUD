<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = New Customer();
        $customer->name = "Nguyen Van Anh";
        $customer->email = "vananh@gmail.com";
        $customer->address = "Ha Noi";
        $customer->save();

        $customer = New Customer();
        $customer->name = "Luong My Linh";
        $customer->email = "mylinh@gmail.com";
        $customer->address = "Cao Bang";
        $customer->save();
    }
}
