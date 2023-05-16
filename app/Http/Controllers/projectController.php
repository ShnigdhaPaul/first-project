<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class projectController extends Controller
{
    public function index()
    {

        $typ= Type::all();
       
        return view('index', compact('typ'));

       //$product=Product::find(3);
       //$typ=$product->type;
       //return view('index', compact('typ'));
       
       
       
        /*$deletedProduct= Product::find(6);
        
        $deletedProduct->delete();
        $products = 'deleted';
        return view('index', compact('products'));*/

//destroy for multiple
        //$updateProduct= Product::find(4);
        //$updateProduct->name= "Lenevo";
        //$updateProduct->save();
        //$products = 'updated';
        // $insertProduct= Product::create([
            //'name'=> "Television",
            //'price'=> "1200"

        //after insert go to model for fiilable

        //get()=see the data
        //
        //count()= count how many of this price present
        //sum()=summation of it 
        //only products in index.blade.php

// findorFail(2) second id. cz if it doesnot exit simply say not found. 
       // $products= Product::all();
        //return view('index', compact('products'));

        //  $product= Product::first();
        //return view('index', compact('product'));
    }

    public function create()
    {
      return view('create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'name'=> ['required', 'min:3']
      ]);
      Type::create([
        'name'=>$request->input('name')
      ]);
      return redirect()-> route('index')->with('msg', "Inserted DOne");
    }
    public function about()
    {
        
        return view('about', ['name' => "Shnigdha"],['id'=> "19-39319-1"]);
        
    } 
}
