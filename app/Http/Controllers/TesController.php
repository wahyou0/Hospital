<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class TesController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index',compact('products'));
    }

    
    public function createStepOne(Request $request)
    {
        $product = $request->session()->get('product');

        return view('products.create-step-one',compact('product'));
    }

   
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:products',
            'amount' => 'required|numeric',
            'description' => 'required',
        ]);

        if(empty($request->session()->get('product'))){
            $product = new Product();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect('products/create-step-two');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $product = $request->session()->get('product');

        return view('products.create-step-two',compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
    	$validatedData = $request->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);

        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);

        return redirect('products/create-step-three');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $product = $request->session()->get('product');

        return view('products.create-step-three',compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
    	$product = $request->session()->get('product');
        // dd($product);
        $product->save();

        $request->session()->forget('product');

        return redirect('products');
    }

    public function coba()
    {
        $now = Carbon::now();
        $thnbln = $now->year . $now->month;
        // dd($thnbln);
        $cek = Product::count();

        if ($cek == 0){
            $urut = 1001;
            $nomer = $thnbln . $urut;
        } else {
            $ambil = Product::all()->last();
            $urut = $ambil->stock + 1;
            $nomer = $thnbln . $urut;
        }

        $urut = (int)substr($ambil->stock, -16) + 1;
        $nomer ='NT' . $thnbln . $urut;

        dd($urut);
    }
}
