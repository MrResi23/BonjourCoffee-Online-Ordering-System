<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class MenuController extends Controller
{
    //To store ID in menu table and return menu details in 'cart' page
    public function actionedit($id)
    {
        // Add Validation

        if($id==1){

            $order=new Order; //Create new row in order table
            $order->menu_id=1; //Insert menu_id = 1
            $order->save();

            //Select each field base on ID 1 from menu table
            $menuID=DB::table('menus')->latest('id')->select('id')->where('id',1)->first();
            $drinkName=DB::table('menus')->latest('id')->select('drink_name')->where('id',1)->first();
            $description=DB::table('menus')->latest('id')->select('description')->where('id',1)->first();
            $price=DB::table('menus')->latest('id')->select('price')->where('id',1)->first();
            $type=DB::table('menus')->latest('id')->select('type')->where('id',1)->first();

            //Direct to 'cart' page with all variables
             return view('cart',['menuID'=>$menuID,'drinkName'=>$drinkName,'description'=>$description,'price'=>$price,'type'=>$type]) ;

        }else if($id==2){

            $order=new Order;
            $order->menu_id=2;
            $order->save();

            $menuID=DB::table('menus')->latest('id')->select('id')->where('id',2)->first();
            $drinkName=DB::table('menus')->latest('id')->select('drink_name')->where('id',2)->first();
            $description=DB::table('menus')->latest('id')->select('description')->where('id',2)->first();
            $price=DB::table('menus')->latest('id')->select('price')->where('id',2)->first();
            $type=DB::table('menus')->latest('id')->select('type')->where('id',2)->first();

             return view('cart',['menuID'=>$menuID,'drinkName'=>$drinkName,'description'=>$description,'price'=>$price,'type'=>$type]) ;

        }else if($id==3){

            $order=new Order;
            $order->menu_id=3;
            $order->save();

            $menuID=DB::table('menus')->latest('id')->select('id')->where('id',3)->first();
            $drinkName=DB::table('menus')->latest('id')->select('drink_name')->where('id',3)->first();
            $description=DB::table('menus')->latest('id')->select('description')->where('id',3)->first();
            $price=DB::table('menus')->latest('id')->select('price')->where('id',3)->first();
            $type=DB::table('menus')->latest('id')->select('type')->where('id',3)->first();

             return view('cart',['menuID'=>$menuID,'drinkName'=>$drinkName,'description'=>$description,'price'=>$price,'type'=>$type]) ;

        }else if($id==4){

            $order=new Order;
            $order->menu_id=4;
            $order->save();

            $menuID=DB::table('menus')->latest('id')->select('id')->where('id',4)->first();
            $drinkName=DB::table('menus')->latest('id')->select('drink_name')->where('id',4)->first();
            $description=DB::table('menus')->latest('id')->select('description')->where('id',4)->first();
            $price=DB::table('menus')->latest('id')->select('price')->where('id',4)->first();
            $type=DB::table('menus')->latest('id')->select('type')->where('id',4)->first();

             return view('cart',['menuID'=>$menuID,'drinkName'=>$drinkName,'description'=>$description,'price'=>$price,'type'=>$type]) ;
        }
    }
}
