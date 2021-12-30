<?php

namespace App\Http\Controllers;

use App\Http\Resources\PermissionsResource;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        return PermissionsResource::collection(Permission::all());
    }
}
