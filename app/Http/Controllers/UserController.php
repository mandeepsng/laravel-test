<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, SubscriptionPlan};
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    
    public function index()
    {
        return view('admin.user.list');
        
    }



    public function userjson(Request $request)
    {
        // dd($request->all());

        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = User::select('count(*) as allcount')->count();

        $newCounting = User::select('count(*) as allcount');

        $newrecords = User::orderBy($columnName,$columnSortOrder);

        if($searchValue){
            $newCounting->orWhere('sku', "LIKE", "%".$searchValue."%");
            $newrecords->orWhere('sku', "LIKE", "%".$searchValue."%");
        }

        // $searchFields = $request->only('name', 'email');
        // foreach ($searchFields as $key => $value) {
        //     if(!empty($request->get($key))){
        //         $newCounting->where($key, 'like', '%' .$value . '%');
        //         $newrecords->where($key, 'like', '%' .$value . '%');
        //     };
        // }

        foreach($columnName_arr as $allColumn){
            if(isset($allColumn['search']['value'])){
                $newCounting->where($allColumn['data'], 'like', '%' .$allColumn['search']['value'] . '%');
                $newrecords->where($allColumn['data'], 'like', '%' .$allColumn['search']['value'] . '%');
            }
        }

        $totalRecordswithFilter = $newCounting->count();
        $records = $newrecords->select('users.*')
        ->skip($start)
        ->take($rowperpage)
        ->get();


        $data_arr = array();
        $sno = $start+1;
        foreach($records as $record){
            $sku = $record->sku;
            $id = $record->id;

            $role = null;
            if(!empty($record->getRoleNames())){
                foreach($record->getRoleNames() as $v){
                    $role = "<label class='badge badge-success btn-custom'>$v</label>";
                }
            }
          
            // dd($record);

            $data_arr[] = array(
                "id" => $record->id,
                "email" => $record->email,
                "name" => $record->name,
                "role" => $role,
                "avatar" => "/assets/images/avatar/avatar-1.jpg",
                "action" => '<div class="actions text-end"><a class="btn btn-secondary" href="/admin/inventory/'.$id.'"><i class="fa fa-cogs"></i> Inventory </a> </div>',
                    "search_keyword" => NULL
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

    // public function edit($id)
    // {
    //     $user = User::find($id); 

    //     return view('admin.user.edit', compact('user'));
    // }




    // public function index()
    // {
    //     $users = User::all(); // Fetch all users
    //     return view('users.index', compact('users')); // Pass users to a view
    // }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.user.create', compact('roles')); // Return a form view for creating a user
    }

    /**
     * Store a newly created user in the database.
     */
    public function store(Request $request)
    {

        // dd('sdfdf');

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            // 'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            // 'password' => bcrypt($validatedData['password']),
        ]);

        $user->assignRole($request->input('roles'));

        
        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    /**
     * Display the specified user.
     */
    public function show(User $user)
    {
        return view('admin.user.show', compact('user')); // Show a single user
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();


        // dd($userRole);
    
        return view('admin.user.edit',compact('user','roles','userRole'));

        // return view('admin.user.edit', compact('user')); // Return a form view for editing
    }

    /**
     * Update the specified user in the database.
     */
    public function update(Request $request, User $user)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($validatedData);

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified user from the database.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'User deleted successfully!'
        ], 200);

        // return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }


    public function home_user()
    {
        // Get all subscription plans
        $plans = SubscriptionPlan::pluck('name', 'stripe_price_id')->all();

        // Get the current subscription
        $subscription = Auth::user()->subscription('default');

        // Handle the case where the user does not have an active subscription
        if ($subscription) {
            // Map the subscription's Stripe price ID to a plan name
            $planName = $plans[$subscription->stripe_price] ?? 'Unknown Plan';

                // Retrieve subscription dates
            $trialEndsAt = $subscription->trial_ends_at; // Trial end date
            $endsAt = $subscription->ends_at; // End date if canceled
        } else {
            $planName = 'No Active Plan';
            $trialEndsAt = null;
            $endsAt = null;
        }

        return view('admin.dashboard.home', compact('plans', 'subscription', 'planName',  'trialEndsAt', 'endsAt'));
    }



    public function edit_profile()
    {
        $user = Auth::user();
        // dd($user);
        return view('admin.profile.edit', compact('user'));
    }


}
