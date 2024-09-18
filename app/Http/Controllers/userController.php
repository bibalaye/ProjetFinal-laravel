<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function Listuser(){
        $users = User::paginate(8);
        return view('admin.listesUser', ['var_users' => $users]);
    }
    public function modifierrole(Request $request)
    {
        $id_user = $request->route('id');
        $user = user::where('id', $id_user)
            ->get();
         $role=role::all();   
        return view('admin.modifier_role', ['var_user' => $user, 'var_role' => $role]);
    }
    public function updaterole(Request $request){
        $id_user = $request->iduser;
        $user = user::find($id_user);
        $user->role_id = $request->user_role_id;
        $user->save();
        return redirect('/user')->with('messagesuccess',"le role de l'utilisateur a eté modifier.");
    }
    public function supprimer_user(Request $request)
    {
        $id_user = $request->id;
        $user = user::find($id_user);
        $user->delete();
        return redirect('/user')->with('messagesuccess',"Suppression de l'utilisateur a reussie.");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
