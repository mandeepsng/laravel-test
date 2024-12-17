<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {
        $permissions = Permission::orderBy('id', 'DESC')->paginate(5);
        return view('admin.permissions.index', compact('permissions'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
        ]);

        Permission::create(['name' => $request->input('name')]);

        return redirect()->route('permissions.index')
            ->with('message', 'Permission created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $permission = Permission::find($id);
        return view('admin.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        $permission = Permission::find($id);
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name,' . $id,
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->save();

        return redirect()->route('permissions.index')
            ->with('message', 'Permission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        Permission::find($id)->delete();
        return redirect()->route('permissions.index')
            ->with('message', 'Permission deleted successfully');
    }

    public function permissionjson(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column'];
        $columnName = $columnName_arr[$columnIndex]['data'];
        $columnSortOrder = $order_arr[0]['dir'];
        $searchValue = $search_arr['value'];

        $totalRecords = Permission::select('count(*) as allcount')->count();
        $newCounting = Permission::select('count(*) as allcount');
        $newrecords = Permission::orderBy($columnName, $columnSortOrder);

        if ($searchValue) {
            $newCounting->orWhere('name', "LIKE", "%" . $searchValue . "%");
            $newrecords->orWhere('name', "LIKE", "%" . $searchValue . "%");
        }

        foreach ($columnName_arr as $allColumn) {
            if (isset($allColumn['search']['value'])) {
                $newCounting->where($allColumn['data'], 'like', '%' . $allColumn['search']['value'] . '%');
                $newrecords->where($allColumn['data'], 'like', '%' . $allColumn['search']['value'] . '%');
            }
        }

        $totalRecordswithFilter = $newCounting->count();
        $records = $newrecords->select('permissions.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $sno = $start + 1;
        foreach ($records as $record) {
            $data_arr[] = array(
                "id" => $record->id,
                "name" => $record->name,
                "action" => '<div class="actions text-end"><a class="btn btn-secondary" href="/admin/permissions/' . $record->id . '"><i class="fa fa-cogs"></i> Edit </a> </div>',
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );
        return json_encode($response);
    }
}