<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Atribute;
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
        //dd(implode(',',$categories[0]->atributes->pluck('name')->toArray()));
        $atributes = Atribute::all();
        return view('backend.categories.list',compact('categories','atributes'));
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
        $atributes = $request->input('atributes');
        $category->atributes()->attach($atributes);
        return redirect()->back();
    }
    public function updatecategories(Request $request){
        //dd($request->all());
        $category = Category::find($request->category_id);
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
        $category->parent_id = $request->input('parent_id') == 'null' ? null: $request->input('parent_id') ;
        $category->save();
        $atributes = $request->input('atributes');
        $category->atributes()->sync($atributes);
        return redirect()->back();
    }

    public function listatributes(){
        $atributes = Atribute::all();
        return view('backend.atributes.list',compact('atributes'));
    }
    public function saveatributes(Request $request){
        // dd($request->all());
        $atribute = Atribute::updateOrCreate(['name'=> $request->atribute_name,
            'element'=> $request->element],['description'=> $request->description,'status' => $request->status]);
        if($request->options) {
            foreach(explode(',',$request->options) as $option){
                $atribute->options()->sync([
                    'name' => explode(':',option)[0],
                    'description' => explode(':',option)[1]
                ]);
            }
        } 
        return redirect()->back();
    }

    public function deleteatributes(Request $request){
        $atribute = Atribute::find($request->atribute_id);
        $atribute->categories()->detach();
        //remove all product variants of this atribute
        $atribute->delete();
        return redirect()->back();
    }
}
