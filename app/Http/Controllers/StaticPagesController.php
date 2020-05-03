<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Menu;

class StaticPagesController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function menu() {
        $menus = Menu::all();
        return view('main-pages.menu')->with('menus', $menus);
    }
    public function contact() {
        return view('main-pages/contact');
    }
    public function customerStore(){
        request()->validate([
            'date' => ['required', 'string'],
            'time' => ['required', 'string'],
            'guests' => ['required', 'string'],
            'fname' => ['required', 'string'],
            'email' => ['required', 'string'],
        ]);
        $customer = new Customer();
        $customer->date = request('date');
        $customer->time = request('time');
        $customer->guests = request('guests');
        $customer->fname = request('fname');
        $customer->email = request('email');
        $customer->save();
        return redirect('/thankyou');
    }
}
