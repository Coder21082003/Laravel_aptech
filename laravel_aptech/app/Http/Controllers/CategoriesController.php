<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
        
    }

    //Hien thi danh sach chuyen muc (phuong thuc GET)
    public function index() {
        return view('clients/category/list');
    }
    //Lay ra 1 chuyen muc theo id (phuong thuc GET)
    public function getCategory($id) {
        return view('clients/category/edit');
    }

    //Cap nhat 1 chuyen muc (Phuong thuc POST)
    public function updateCategory($id){
        return 'Submit sua chuyen muc: '.$id;
    }

    //Show form them du lieu (Phuong thuc GET)
    public function addCategory(){
        return view('clients/category/add');
    }

    //Them du lieu vao chuyen muc(Phuong thuc POST)
    public function handelAddCategory(){
        return ('Submit them chuyen muc');
    }

    //Xoa du lieu  (phuong thuc Delete)
    public function deleteCategory($id) {
        return 'Submit xoa chuyen muc'.$id;
    }
}
