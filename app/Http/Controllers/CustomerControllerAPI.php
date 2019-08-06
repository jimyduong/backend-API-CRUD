<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerControllerAPI extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return response()->json($customer);
    }

    public function create(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();

        return response()->json(["status" => "success",
            'value' => $customer]);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();

        return response()->json(["status" => "success",
            'value' => $customer]);
    }

    public function delete($id)
    {
        Customer::findOrFail($id)->delete();
        return response()->json(['status' => 'Delete success']);
    }

    public function detail($id)
    {
        $customer = Customer::findOrFail($id);
        return response()->json($customer);
    }
}
