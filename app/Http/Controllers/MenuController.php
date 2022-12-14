<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menus = Menu::all();
        return view('menu.daftar_menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        return view('menu.daftar_menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $menus = new Menu;
        $menus->name = $request->get('name');
        $menus->price = $request->get('price');
        $menus->desc = $request->get('desc');

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images/menu', 'public');
            $menus->image = $image_name;
        }
        $menus->save();

        return redirect()->route('daftar_menu.index');
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
        $menu = Menu::find($id);
        return view('menu.daftar_menu.edit', compact('menu'));
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
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $menu = Menu::find($id);
        $menu->name = $request->get('name');
        $menu->price = $request->get('price');
        $menu->desc = $request->get('desc');
        if ($request->file('image')) {
            if ($menu->image&&file_exists(storage_path('app/public/'.$menu->image))) {
                \Storage::delete('public/'.$menu->image);
            }
            $image_name = $request->file('image')->store('images/menu', 'public');
            $menu->image = $image_name;
        }
        $menu->save();

        return redirect()->route('daftar_menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();
        return redirect()->route('daftar_menu.index');

    }
}
