<?php

namespace App\Http\Controllers;

use App\Models\promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function RedirectPage(){
        return redirect('list');
    }
    public function select() {
        $promotion = Promotion::all();
        return view('welcome', compact('promotion'));
    }
    public function insert(Request $request){
        $promotion = new promotion();
        $promotion->name = $request->name;
        $promotion->save();
        return redirect('list');
    }
    public function delete($id) {
        $promotion = Promotion::find($id);
        $promotion->delete();
        return redirect()->back();
    }

    public function edit($id){
        $promotion = Promotion::find($id);
        return view('edit', compact('promotion'));
    }

    public function update(Request $request ,$id) {
        $promotion = Promotion::find($id);
        $promotion->name = $request->input('name');
        $promotion->update();
        return redirect('list');
    }


    public function search($name=null){ 
        if($name == null){
            $data =promotion::all();
            return view('index_search',compact('data'));        }
        else {
            $data =promotion::where('name', 'like','%'.$name.'%')->get();
            return view('index_search',compact('data'));
        }
    }

}
