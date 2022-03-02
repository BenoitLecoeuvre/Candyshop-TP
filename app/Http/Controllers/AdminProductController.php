<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index() {
        return view("admin.admin-list");
    }

    public function create() {
        return view("admin.create");
    }

    public function edit() {
        return view("admin.edit");
    }

    public function delete() {
        return view("admin.delete");
    }
}
