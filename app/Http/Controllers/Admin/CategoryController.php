<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    return view('admin.category.index');
    }
    public function add()
    {
        return view('admin.category.add');
    } 
    public function insert(Request $request)
    {
       $category =new Category();
       
    } 
    public function storagesysunits(){
        return view('layouts.storagesys&units');
    }
    public function sofasarmchairs(){
        return view('layouts.sofas&armchairs');
    }   
    public function tableschairs(){
        return view('layouts.tables&chairs');
    }
}
