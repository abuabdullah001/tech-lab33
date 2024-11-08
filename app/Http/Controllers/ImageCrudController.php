<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageCrud;
use File;

class ImageCrudController extends Controller
{

    public function products_index(){
        $cruds=ImageCrud::all();
        return view('product.index',compact('cruds'));
    }

    public function products_create(){
        return view('product.create');
    }


    public function products_store(Request $request){



     $request->validate([
      'name'=>'required',
      'image'=>'required|mimes:png,jpg',
     ]);






    $imageName='';
    if($image=$request->file('image')){
        $imageName=time().'-'.uniqid().'-'.$image->getClientOriginalExtension();
        $image->move('images/products',$imageName);
    }



    ImageCrud::create([
      'name'=>$request->name,
      'image'=>$imageName,
    ]);



    return redirect()->route('product.index')->with('success', 'Product created successfully.');

}



    public function products_edit($id){

        $cruds=ImageCrud::findorFail($id);
        return view('product.edit',compact('cruds'));
    }






    public function products_update(Request $request,$id){

        $crud=ImageCrud::findOrFail($id);
        $deleteOldImage='images/products/'.$crud->image;
        $request->validate([
        'name'=>'required',

        ]);



       $imageName='';
       $deleteOldImage='images/products/'.$crud->image;
       if($image=$request->file('image')){
           if(file_exists($deleteOldImage)){
            File::delete($deleteOldImage);
           }
           $imageName=time().'-'.uniqid().'-'.$image->getClientOriginalExtension();
           $image->move('images/products',$imageName);
       }
       else{
        $imageName=$crud->image;
       }




       ImageCrud::find($id)->update([
         'name'=>$request->name,
         'image'=>$imageName,
       ]);



       return redirect()->back()->with('success', 'Product created successfully.');

   }



   public function product_delete($id){


    $var=ImageCrud::find($id);

    $var->delete();

    return redirect()->back()->with('success', 'Product deleted successfully.');

   }



}
