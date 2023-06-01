<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\slide;
use App\Models\comments;
use App\Models\type_products;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = slide::all();
        $newProduct = products::where('new',1)->paginate(8);
        // sản phẩm khuyến mãi
        $topProduct = products::where('promotion_price','<>',0)->paginate(4);							
        return view('page.trangchu', compact('slide','newProduct','topProduct'));
    }

    public function getDetail(Request $request)
    {
        $sanpham = products::where('id',$request->id)->first();
        $splienquan = products::where('id','<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comments = comments::where('id_product',$request->id)->get();							
        return view('page.chitiet_sanpham', compact('sanpham','splienquan','comments'));
    }

    public function getLoaiSp($type){
       
        $type_product = type_products::all(); // show ra tên loại sp

        // lấy sp theo loại
        $sp_theoloai = products::where('id_type',$type)->limit(3)->get();

       // Lay san pham hien thi Khac <> loai			
        $sp_khac = products::where('id_type','<>',$type)->paginate(3);

        // Lay san pham hien thi theoloai typeproduct  cho menu ben trai	
        // $loai = type_products::all();	

        // Lay ten Loai san pham moi khi chung ta chon danh muc loai san pham(phan menu ben trai)							
        $loai_sp = type_products::where('id',$type)->first();							
					
        return view('page.loai_sanpham', compact('type_product','sp_theoloai','sp_khac','loai_sp'));
    }


    // public function detChitiet(){
    //     return view('page.chitiet_sanpham');
    // }

    // public function getLienhe(){
    //     return view('page.lienhe');
    // }
    

    // public function getAbout(){
    //     return view('page.chitiet_sanpham');
    // }
    
    




}