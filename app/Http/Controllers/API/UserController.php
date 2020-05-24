<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            User::paginate(5),
            200
        );
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(
            User::create($request->all()),
            201
        );
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $user = User::find($id);
        return is_null($user)
        ? response()->json('', 204)
        : response()->json($user, 200);
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(['error' => 'Resource Not Found'], 404);
        }
        $user->fill($request->all())->save();
        return response()->json($user, 200);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return User::destroy($id) === 0
        ? response()->json(['error' => 'Resource Not Found'], 404)
        : response()->json([], 204);
    }

    /**
     * Display the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticated()
    {
        return response()->json(
            auth('api')->user(),
            200
        );
    }
}
