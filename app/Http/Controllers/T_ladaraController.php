<?php

namespace App\Http\Controllers;

use App\Models\T_ladara;
use Illuminate\Http\Request;

class T_ladaraController extends Controller
{
    public function index()
    {
        // Lấy danh sách các bản ghi từ model
        $t_lazadaxuan = T_lazada::all();

        // Trả về view hoặc JSON response
        return view('t_lazadaxuan.index', compact('t_lazadaxuan'));
    }

    public function store(Request $request)
    {
        // Xử lý logic để lưu dữ liệu từ request vào model
        T_ladara::create($request->all());

          // Chuyển hướng hoặc trả về JSON response
          return redirect()->route('t_ladaraxuan.index')->with('success', 'T_ladara created successfully');
        }
 
        // Các phương thức khác như show(), edit(), update(), destroy()...
 
    }