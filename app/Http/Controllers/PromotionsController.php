<?php

namespace App\Http\Controllers;

use App\Models\learner;
use Illuminate\Http\Request;
use App\Models\Promotion;


class PromotionsController extends Controller
{
    public function get_promotion_id($id){
        $promotion_id = $id;
        return view('apperAddPage', compact('promotion_id'));
    }

    public function select_promotion(){
        $promotion = Promotion::all();
        $apper = learner::all();
        return view('index', compact('promotion','apper'));
    }

    public function addPromotion(Request $request) {
        $promotion = new Promotion();
        $promotion->Promo_name = $request->input('name');
        $promotion->save();
        return redirect('');
    }

    public function editPromotion($id) {
        $promotion = Promotion::find($id);
        return view('editPromotionPage', compact('promotion'));
    }

    public function updatePromotion(Request $request ,$id) {
        $promotion = Promotion::find($id);
        $promotion->Promo_name = $request->input('name');
        $promotion->update();
        return redirect('');
    }

    public function deletePromotion($id){
        $promotion = Promotion::find($id);
        $promotion->delete();
        return redirect('');
    }

    public function search($name=null){ 
        if($name == null){
            $data =Promotion::all();
            return view('index_search',compact('data'));        }
        else {
            $data =Promotion::where('name', 'like','%'.$name.'%')->get();
            return view('index_search',compact('data'));
        }
    }
}
