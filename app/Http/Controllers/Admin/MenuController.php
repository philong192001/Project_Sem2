<?php

namespace App\Http\Controllers\Admin;

use App\Components\MenuRecusive;
use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    private $menuRecusive;
    private $menu;

    public function __construct(MenuRecusive $menuRecusive, Menu $menu)
    {
        $this->menuRecusive = $menuRecusive;
        $this->menu         = $menu;

    }
    public function index()
    {
        $menus = $this->menu->paginate(5);
        //dd('list menus');
        return view('admin.menus.index', compact('menus'));
    }
    public function create()
    {
        $optionSelect = $this->menuRecusive->MenuRecusiveAdd();
        //dd($test);
        return view('admin.menus.add', compact('optionSelect'));
    }
    public function store(Request $request)
    {
        $this->menu->create([
            'name'      => $request->name,
            'parent_id' => $request->parent_id,
            'slug'      => Str::slug($request->name)
        ]);
        return redirect()->route('menu.index');
    }
    public function edit(Request $request, $id)
    {
        $MenuEdit     = $this->menu->find($id);
        $optionSelect = $this->menuRecusive->MenuRecusiveEdit($MenuEdit->parent_id);
        return view('admin.menus.edit', compact('optionSelect','MenuEdit'));
    }
    public function update(Request $request, $id)
    {
        $this->menu->find($id)->update([
            'name'      => $request->name,
            'parent_id' => $request->parent_id,
            'slug'      => Str::slug($request->name)
        ]);
        return redirect()->route('menu.index');
    }
    public function delete(Request $request,$id)
    {
    	$this->menu->find($id)->delete();
    	return redirect()->route('menu.index');
    }
}
