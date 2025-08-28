<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RegisterUser;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRegisterUserRequest;
use App\Http\Resources\RegisterUserResource;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registerUsers = RegisterUser::all();
        return RegisterUserResource::collection($registerUsers);
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
    public function store(StoreRegisterUserRequest $request)
    {
        $registerUser = RegisterUser::create($request->validated());
        $registerUser->address()->attach($request->addresses_ids);
        return new RegisterUserResource($registerUser);
    }

    /**
     * Display the specified resource.
     */
    public function show(RegisterUser $registerUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegisterUser $registerUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRegisterUserRequest $request, RegisterUser $registerUser)
    {
        $registerUser->update($request->validated());
        $registerUser->address()->sync($request->addresses_ids); 
        return new RegisterUserResource($registerUser);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegisterUser $registerUser)
    {
        $registerUser->delete();
        return response(null, 204);
    }
}
