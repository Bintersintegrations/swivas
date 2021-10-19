<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryManagementController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function listcategories(){
        $categories = Category::all();
        //dd(implode(',',$categories[0]->attributes->pluck('name')->toArray()));
        $attributes = Attribute::all();
        return view('backend.items.categories',compact('categories','attributes'));
    }
    public function savecategories(Request $request){
        //dd($request->all());
        //if category is not grandparent, meaning we want to create a parent or a child
        $parent_id = $request->input('parent_id');
        if($parent_id == 'null'){
            $grand_id = null;
            $parent_id = null;
        }     
        else{
            $parent = Category::find($request->parent_id);
            if($parent->parent_id){ //meaning the parent has a parent too
                $grand_id = $parent->parent_id;
                $parent_id = $parent->id;
            }
            else {
                $grand_id = null;
                $parent_id = $parent->id;
            }
        }
        $fileName = '';
        if($request->has('image')){
            $ext = $request->file('image')->getClientOriginalExtension();
            $fileName = Auth::id().rand().time().'.'.$ext;
            $request->file('image')->storeAs('public/categories',$fileName);
        }
        $category = Category::create(['name'=> $request->category_name,'image'=> $fileName,'grand_id'=> $grand_id,'parent_id'=> $parent_id]);
        $attributes = $request->input('attributes');
        $category->attributes()->attach($attributes);
        return redirect()->back();
    }
    public function updatecategories(Request $request){
        //dd($request->all());
        $category = Category::find($request->category_id);
        $parent_id = $request->input('parent_id');
        if($parent_id == 'null'){
            $grand_id = null;
            $parent_id = null;
        }     
        else{
            $parent = Category::find($request->parent_id);
            if($parent->parent_id){ //meaning the parent has a parent too
                $grand_id = $parent->parent_id;
                $parent_id = $parent->id;
            }
            else {
                $grand_id = null;
                $parent_id = $parent->id;
            }
        }
        if($request->has('image')){
            if($category->image){
                Storage::delete('public/categories/'.$category->image);
            }
            $ext = $request->file('image')->getClientOriginalExtension();
            $fileName = Auth::id().rand().time().'.'.$ext;
            $request->file('image')->storeAs('public/categories',$fileName);
            $category->image = $fileName;
        }
        if($request->filled('category_name')) $category->name = $request->category_name;
        $category->parent_id = $parent_id;
        $category->grand_id = $grand_id;
        $category->save();
        $attributes = $request->input('attributes');
        $category->attributes()->sync($attributes);
        return redirect()->back();
    }

    public function listattributes(){
        $attributes = Attribute::all();
        return view('backend.items.attributes',compact('attributes'));
    }
    public function saveattributes(Request $request){
        // dd($request->all());
        $attribute = Attribute::create(['name'=> $request->attribute_name,
            'label'=> $request->label,'description'=> $request->description,'options'=> explode(',',$request->options)]);
        return redirect()->back();
    }
    public function deleteattributes(Request $request){
        $attribute = Attribute::find($request->attribute_id);
        $attribute->categories()->detach();
        //remove all product variants of this attribute
        $attribute->delete();
        return redirect()->back();
    }
}
