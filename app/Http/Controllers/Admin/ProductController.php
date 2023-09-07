<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('created_at', 'desc')->paginate(50);
        $category = Category::all();
        return view('admin.product.index', compact('product', 'category'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function insert(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|numeric',
                'image' => 'image|mimes:jpeg,png,jpg',

            ],
            [
                'name.required' => "กรุณากรอกชื่อสินค้า",
                'description.required' => "กรุณากรอกรายละเอียดสินค้า",
                'price.required' => "กรุณากรอกราคาสินค้า",
                'price.numeric' => "กรอกได้เฉพาะตัวเลขเท่านั้น",
                'image.image' => "กรุณาเลือกเฉพาะภาพ",
                'image.mimes' => "ภาพต้องเป็นไฟล์นามสกุล jpeg,png,jpg ได้เท่านั้น ",
            ]
        );
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/backend/images/', $filename);
            Image::make(public_path() . '/backend/images/' . $filename);
            $product->image = $filename;
        } else {
            $product->image = 'nopic.jpg';
        }
        $product->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect('admin/product/index');
    }

    public function delete($product_id)
    {
        $product = Product::find($product_id);
        if ($product->image != 'nopic.jpg') {
            File::delete(public_path() . '/backend/images/' . $product->image);
        }
        $product->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect('admin/product/index');
    }

    public function edit($product_id)
    {
        $product = Product::find($product_id);
        $category = Category::all();
        return view('admin.product.edit', compact('product','category'));
    }

    public function update(Request $request, $product_id)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|numeric',
                'image' => 'image|mimes:jpeg,png,jpg',

            ],
            [
                'name.required' => "กรุณากรอกชื่อสินค้า",
                'description.required' => "กรุณากรอกรายละเอียดสินค้า",
                'price.required' => "กรุณากรอกราคาสินค้า",
                'price.numeric' => "กรอกได้เฉพาะตัวเลขเท่านั้น",
                'image.image' => "กรุณาเลือกเฉพาะภาพ",
                'image.mimes' => "ภาพต้องเป็นไฟล์นามสกุล jpeg,png,jpg ได้เท่านั้น ",
            ]
        );
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            if ($product->image != 'nopic.jpg') {
                File::delete(public_path() . '/backend/images/' . $product->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/backend/images/', $filename);
            Image::make(public_path() . '/backend/images/' . $filename);
            $product->image = $filename;
        }
        $product->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect('admin/product/index');
    }
}
