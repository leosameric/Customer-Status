<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CustomerStatus;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Get cutsomer
     */
    public function getCustomerStatus() 
    {
        $customers = \App\Customer::orderBy('Name')->get();
        $result = [];
        // Loop through all customers
        foreach($customers as $customer) 
        {
            $customerstatus = $customer->customerstatus()->get()->first();   
            $result[$customer->Name]['customerstatus'] = $customerstatus->Code;
            
            $orders = $customer->order()->get();
            $completeOrder = 0;
            $oneYearOrder = 0;
            $totalOrder = 0;
            // Loop through Orders
            foreach($orders as $order)
            {
                if ($order->OrderStatus == "completed" && 
                    strtotime($order->CreatedDateTime) >= strtotime('-3 MONTHS') &&
                    $order->OrderTotal > 200 
                ) {
                    $completeOrder++; // Order placed within 3 months and total amout is greater than 200
                } else if ( strtotime($order->CreatedDateTime) >= strtotime('-1 YEARS') ) {
                    $oneYearOrder++; // Order placed 
                }
                $totalOrder++;
            }

            $result[$customer->Name]['completedOrder'] = $completeOrder;
            $result[$customer->Name]['oneYearOrder'] = $oneYearOrder;
            $result[$customer->Name]['totalOrder'] = $totalOrder;
        }
        $color = $this->getColor($result);
        return view('customer')->with('customers', $color);
    }

    /**
     * Get Color label for customers
     * 
     * @param  array  $result
     * @return  array  $result
     */
    private function getColor($result)
    {
        foreach ($result as $customer_name => $customer) {
            $color = ''; 
            if($customer['customerstatus'] == 'RE') { // Removed Customer
                $color = 'red';
            } else if ($customer['completedOrder'] > 0) {
                $color = 'green';
            } else if ( $customer['oneYearOrder'] == 0 ) {
                $color = 'orange';
            }
            $result[$customer_name]['color'] = $color;
        }
        return $result;
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
