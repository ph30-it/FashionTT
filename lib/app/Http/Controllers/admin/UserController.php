<?php
namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::with('role')->paginate(10);
        return view('backend.user.list', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roleId = Role::pluck('id','name');
        return view('backend.user.create', compact('roleId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        $data = $request->all();
        User::create($data);
        return redirect()->route('user-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(User $category)
    {
        //
    }


    public function edit( $id)
    {
        //
        $user = User::with('role')->find($id);
        $roleId = Role::pluck('id','name');
        return view('backend.user.edit', compact('user', 'roleId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
        $user = User::find($id);
        $data = $request->all();
        $user->update($data);
        return redirect()->route('user-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('user-list');
    }
}