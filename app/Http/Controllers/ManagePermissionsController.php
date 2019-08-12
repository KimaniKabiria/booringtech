<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use Session;

class ManagePermissionsController extends Controller
{

    public function index()
    {
      $permissions = Permission::all();
      return view('manage.permissions.index')->withPermissions($permissions);
    }

    public function create()
    {
      return view('manage.permissions.create');
    }

    public function store(Request $request)
    {
      if ($request->permission_type == 'basic') {
        $this->validateWith([
          'display_name' => 'required|max:255',
          'name' => 'required|max:255|alphadash|unique:permissions,name',
          'description' => 'sometimes|max:255'
        ]);

        $permission = new Permission();
        $permission->name = $request->name;
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        $permission->save();

        Session::flash('success', 'Permission has been successfully added');
        return redirect()->route('permissions.index');

      } elseif ($request->permission_type == 'crud') {
        $this->validateWith([
          'resource' => 'required|min:3|max:100|alpha'
        ]);

        $crud = explode(',', $request->crud_selected);
        if (count($crud) > 0) {
          foreach ($crud as $x) {
            $slug = strtolower($x) . '-' . strtolower($request->resource);
            $display_name = ucwords($x . " " . $request->resource);
            $description = "Allows a user to " . strtoupper($x) . ' a ' . ucwords($request->resource);

            $permission = new Permission();
            $permission->name = $slug;
            $permission->display_name = $display_name;
            $permission->description = $description;
            $permission->save();
          }
          Session::flash('success', 'Permissions were all successfully added');
          return redirect()->route('permissions.index');
        }
      } else {
        return redirect()->route('permissions.create')->withInput();
      }
    }

    public function show($id)
    {
      $permission = Permission::findOrFail($id);
      return view('manage.permissions.show')->withPermission($permission);
    }

    public function edit($id)
    {
      $permission = Permission::findOrFail($id);
      return view('manage.permissions.edit')->withPermission($permission);
    }

    public function update(Request $request, $id)
    {
      $this->validateWith([
        'display_name' => 'required|max:255',
        'description' => 'sometimes|max:255'
      ]);
      $permission = Permission::findOrFail($id);
      $permission->display_name = $request->display_name;
      $permission->description = $request->description;
      $permission->save();

      Session::flash('success', 'Updated the '. $permission->display_name . ' permission.');
      return redirect()->route('permissions.show', $id);
    }

    public function destroy($id)
    {
        //
    }
}
