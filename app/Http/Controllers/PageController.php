<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\slide;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = slide::all();
        $newProduct = products::where('new',1)->paginate(8);
        $topProduct = products::where('promotion_price','<>',0)->paginate(4);							


        return view('page.trangchu', compact('slide','newProduct','topProduct'));

    }

    public function getDetail(Request $request)
    {
        $sanpham = products::where('id',$request->id)->first();
        $splienquan = products::where('id','<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comment = products::where('id',$request->id)->get();							
        return view('page.chitiet_sanpham', compact('sanpham','splienquan','comment'));


    }

    




}