<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('app.home');
        // return ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required|min:4|confirmed',
        ]);
        $user = User::create([
            'name'     => $request->input('name'),
            'email'    => $request->input('email'),
            'username'    => $request->input('username'),
            'password'    => md5($request->input('password')),
            'password_confirmation'    => md5($request->input('password_confirmation')),
        ]);
        return response([
            'users' => $user
        ], 200);
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $name = $request->input('name');
         $user_name = $request->input('username');
         $email =  $request->input('email');
         $pass =  $request->input('password');

         DB::update('update users set name = ?, username = ?, email = ?, password = ?, password_confirmation = ? where id = ?',
         [$name,$user_name, $email,md5($pass), md5($pass),$id]);
         var_dump("cap nhat thanh cong");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //func delete
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(" successfully deleted ");
    }

    /**
    * @param string $email
    * @param string $password
    */
    //function login
    public function login(Request $req){
        //Thực hiện lấy request và truy vấn cho đăng nhập, trả về json
        $query = User::whereRaw('BINARY email = ? AND BINARY password = ?',[$req->email
        ,md5($req->password)])->get();
       return $query;
    }
}

