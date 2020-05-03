<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $menus = Menu::orderBy('category', 'asc')->paginate(5);
        return view('admin.menu')->with('menus', $menus);
    }

    public function create()
    {
        return view('admin.menu-create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => ['required','string'],
            'name' => ['required','string'],
            'price' => ['required','string'],
            'img' => ['required','string'],
            'desc' => ['required','string']
        ]);
        $menu = new Menu;
        $menu->category = $request->input('category');
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->img = $request->input('img');
        $menu->desc = $request->input('desc');
        $menu->save();
        return redirect('/admin/menu');
    }

    public function edit($id)
    {   
        $menu = Menu::find($id);
        return view('admin.menu-edit')->with('menu', $menu);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category' => ['required','string'],
            'name' => ['required','string'],
            'price' => ['required','string'],
            'img' => ['required','string'],
            'desc' => ['required','string']
        ]);
        $menu = Menu::find($id);
        $menu->category = $request->input('category');
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->img = $request->input('img');
        $menu->desc = $request->input('desc');
        $menu->save();
        return redirect('/admin/menu/');
    }

    public function delete($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/admin/menu');
    }
}
