<?php

namespace App\Http\Controllers;
use App\Models\ShopList;
use Illuminate\Http\Request;

class ShopListController extends Controller
{
    public function index(){
        return view('welcome',['List'=> ShopList::all()]);
    }

    public function saveList(Request $req){
        $obj = new ShopList();
        $obj->List = $req->lists;
        $obj-> save();
        return redirect('/');
    }
    public function delete($id){

        $data = ShopList::find($id);
        $data->delete();
        return redirect('/');
    }
    public function edit($id){
        
        $data = ShopList::find($id);
        return view('edit',['value'=> $data]);

    }
    public function update(Request $req){
        $obj = Shoplist::find($req->id);
        $obj->List = $req->edited;
        $obj->save();
        return redirect('/');

    }
}
