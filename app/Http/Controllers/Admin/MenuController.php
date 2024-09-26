<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\StoreMenuRequest;
use App\Http\Requests\Menu\UpdateMenuRequest;
use App\Models\Menu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MenuController extends Controller
{


    public function index()
    {

        $menus = Menu::with('model', 'menus.model')->withCount('menus')->whereNull('menu_id')->orderBy('position')->get();
        return view('admin.menu.index', compact('menus'));
    }


    public function create()
    {
        $mainMenus = Menu::with('menus')->whereNull('menu_id')->get();

        return view('admin.menu.create', compact('mainMenus'));
    }


    public function store(StoreMenuRequest $request)
    {

        Menu::create($request->validated() + $this->checkMenuType($request));
        toast('Menu Added Successfully', 'success');
        return back();
    }

    public function edit(Menu $menu)
    {
        $mainMenus = Menu::with('menus')->whereNull('menu_id')->get();
        $options = $mainMenus->pluck('title', 'id')->toArray();
        $options = ['' => 'Choose'] + $options;
        return view('admin.menu.edit', compact('mainMenus', 'menu','options'));
    }

    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update($request->validated() + $this->checkMenuType($request));

        toast('Menu Updated Successfully', 'success');

        return redirect(route('admin.menu.index'));
    }

    public function destroy(Menu $menu): RedirectResponse
    {
        $menu->menus()->delete();
        $menu->delete();

        toast('Menu Deleted Successfully', 'success');

        return back();
    }
    public function updateStatus(Menu $menu): RedirectResponse
    {

        $menu->update([
            'status' => !$menu->status
        ]);

        toast('Status Updated Successfully', 'success');

        return back();
    }



    public function checkMenuType($request): array
    {
        $menuType = null;
        if ($request->input('menu_type') == "officeDetail") {
            $menuType = OfficeDetail::class;
        } elseif ($request->input('menu_type') == "category") {
            $menuType = DocumentCategory::class;
        }elseif($request->input('menu_type') == "subordinate"){
            $menuType=Subordinate::class;
        }

        return [
            'model_type' => $menuType,
            'model_id' => $request->input('model_id') ?? null,
            'type' => $request->input('menu_type') ?? null
        ];
    }

    public function check()
    {
        return view('admin.menu.check');
    }
}
