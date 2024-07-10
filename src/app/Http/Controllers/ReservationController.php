<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Shop;

class ReservationController extends Controller
{
    public function home1(){
        return view('home.home1');
    }

    public function home2(){
        return view('home.home2');
    }

    public function home(){
        $shops = Shop::get();
        return view('index', compact("shops"));
    }

    public function mypage(){
        $shops = Shop::get();
        return view('mypage', compact("shops"));
    }

    public function detail(Request $request){
        $shopid = (int)$request->shopid;

        $shop = Shop::find($shopid);
        
        return view('detail', compact("shop"), compact("shopid"));
    }

    public function reservation(Request $request){
        $user_id = Auth::user()->id;
        $shopname = 'aaa';
        $date = $request->only(['date']);
        $time = $request->only(['time']);
        $number = $request->only(['number']);
        \DB::table('Reservation')->insert([
            'user_id' => $user_id,
            'shop_name' => $shopname,
            '$date' => $date,
            'time' => $time,
            'reservation_number' => $number,
        ]);
        return view('thanks');
    }
}
