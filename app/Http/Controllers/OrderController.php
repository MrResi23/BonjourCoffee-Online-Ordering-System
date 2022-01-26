<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrderController extends Controller
{

    //To store quantity, calculate price and return details in 'paymentDetails' page
    public function want (Request $request){

        //To get menu id of latest order
        $latest= DB::table('orders')->latest('id')->select('menu_id')->first();
        $la=print_r($latest); //For datatype purpose

        //To get order id of latest order
        $my= DB::table('orders')->latest('id')->select('id')->first();
        $mylatest=print_r($my);

        $order=new Order;
        $order->menu_id=$la;
        $order->quantity=$request->quantity; //Insert user input get from 'cart' page
        $order->save();

        //To get quantity of latest order
        $quantity= DB::table('orders')->latest('id')->select('quantity')->first();
        $quant=print_r($quantity);

        //Declare price for each drink
        if($la==1){

            $price=DB::table('menus')->latest('id')->select('price')->where('id',1)->first();
            $priceee=print_r($price);

        }
        else if($la==2){

            $price=DB::table('menus')->latest('id')->select('price')->where('id',2)->first();
            $priceee=print_r($price);

        }
        else if ($la==3){

            $price=DB::table('menus')->latest('id')->select('price')->where('id',3)->first();
            $priceee=print_r($price);

        }
        else if ($la==4){

            $price=DB::table('menus')->latest('id')->select('price')->where('id',4)->first();
            $priceee=print_r($price);

        }

        ob_clean(); //To clear all printed data

        //Insert into 'total_price' column
        $order->total_price=$order-> $priceee*$quant;
        $order->update(); //update order table

        //Call 'showit' function
        return $this->showit();
    }

    //To display payment details in 'paymentDetails' page
    public function showit(){

        //Select each field base on latest id from order table

        $orderID=DB::table('orders')->latest('id')->select('id')->first();
        $menuID=DB::table('orders')->latest('id')->select('menu_id')->first();
        $quantity=DB::table('orders')->latest('id')->select('quantity')->first();
        $totalPrice=DB::table('orders')->latest('id')->select('total_price')->first();

        return view('paymentDetails',['orderID'=>$orderID,'menuID'=>$menuID,'quantity'=>$quantity,'totalPrice'=>$totalPrice]) ;
    }
}
