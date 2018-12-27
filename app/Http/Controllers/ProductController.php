<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function handleCommands(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } 

        $file = $request->file('file');
        $csvData = file_get_contents($file);
        $rows = array_map('str_getcsv', explode("\r\n", $csvData));

        $header = array_shift($rows);

        array_pop($rows);

        foreach ($rows as $row) {
            $row = array_combine($header, $row);

            $id = $row['id'];
            $command = $row['command'];
            $value = $row['value'];

            $product = Product::find($id);

            switch($command) {
                case "Agregar":
                $product->fill(['stock' => $product['stock'] + $value])->save();
                break;
                case "Restar":
                $product->fill(['stock' => $product['stock'] - $value])->save();
                break;
                case "Activar":
                $product->fill(['status' => 'ACTIVE'])->save();
                break;
                case "Desactivar":
                $product->fill(['status' => 'DISABLE'])->save();
                break;
            }
        }
        return redirect()->route('inicio')->with('message', 'Los comandos han sido ejecutados');;
    }
}
