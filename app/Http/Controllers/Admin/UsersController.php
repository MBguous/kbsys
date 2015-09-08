<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use DB;

class UsersController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return Response
   */
   public function index()
   {
      $users = User::all();
      return view('admin.users.index', compact('users'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
   public function create()
   {
      $roles = Role::lists('name', 'id');
      return view('admin.users.create', compact('roles'));
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
   public function store(UserRequest $request)
   {
      // Run transactions. If either fails the transaction will roll back.
      DB::beginTransaction();

      try {
         $user = User::create($request->all());

         // Attach role to the new user.
         $user->assignRole($request->input('role_list'));
      } 
      catch (\Exception $e) {
         DB::rollback();
         throw $e;
      }

      DB::commit();
      return redirect()->route('admin.users.index')->with('status', 'User registered.');  

   }

   /**
   * Display the specified resource.
   *
   * @param  int  $username
   * @return Response
   */
   public function show($username)
   {
      $user = User::findOrFail($username);
      return view('admin.users.show', compact('user'));
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $username
   * @return Response
   */
   public function edit($username)
   {
      $user = User::find($username);
      $roles = Role::lists('name', 'id');
      return view('admin.users.edit', compact('user', 'roles'));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  Request  $request
   * @param  int  $username
   * @return Response
   */
   public function update(Request $request, $username)
   {
      $user = User::findOrFail($username);
      $this->validate($request, [
         'username' => 'required|max:20|unique:users,username,'.$user->username.',username',
         'name'     => 'required|max:35',
         'email'     => 'required|email|max:60|unique:users,email,'.$user->username.',username',
         'telephone1'   => 'required|max:10',
         'address'  => 'required|max:40',
         ]);

      $user->update($request->all());
      $user->syncRole($request->input('role_list'));

      return redirect()->route('admin.users.index')->with('status', 'User record updated!');
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
   public function destroy($username)
   {
      User::destroy($username);
      return redirect()->route('admin.users.index')->with('status', 'User removed!');
   }
}
