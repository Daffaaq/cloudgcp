<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Google\Cloud\Storage\StorageClient;

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
            // config with gcp
            $googleConfigFile = file_get_contents(config_path('key.json'));
            $storage = new StorageClient([
                'keyFile' => json_decode($googleConfigFile, true)
            ]);
            $storageBucketName = config('googlecloud.storage_bucket');
            $bucket = $storage->bucket($storageBucketName);
            if ($menu->image&&file_exists(storage_path('app/public/'.$menu->image))) {
                \Storage::delete('public/'.$menu->image);
                $bucket->object($menu->foto)->delete();
            }
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/storage/images/menu', $filenameSimpan);
            $savepath = '/storage/images/menu' . $filenameSimpan;


            // save on bucket
            $fileSource = fopen(storage_path('app/public/storage/' . $savepath), 'r');

            $bucket->upload($fileSource, [
                'predefinedAcl' => 'publicRead',
                'name' => $savepath
            ]);
        } else {
            // tidak ada file yang diupload
            $savepath = $menu->image;
            // $image_name = $request->file('image')->store('images/menu', 'public');
            // $menu->image = $image_name;
        }

        $menu->image = $savepath;
        //save
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
        // config with gcp
        $googleConfigFile = file_get_contents(config_path('key.json'));
        $storage = new StorageClient([
            'keyFile' => json_decode($googleConfigFile, true)
        ]);
        $storageBucketName = config('googlecloud.storage_bucket');
        $bucket = $storage->bucket($storageBucketName);

        Menu::find($id)->delete();
        // delete on bucket
        $object = $bucket->object($image);
        $object->delete();
        return redirect()->route('daftar_menu.index');

    }
}
