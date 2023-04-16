<?php

namespace App\Http\Controllers;


class ModuleAdminController extends Controller
{
    public function index()
    {
        return view('admin.module.index');
    }
}
