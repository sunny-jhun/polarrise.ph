<?php

namespace App\Http\Controllers\Admin\Inventory;

// use App\StockMove;
use App\Product;
use App\UnitMeasure;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{

    public function index(){
    	return view('inventory.admin-inventory');
    }

    public function showStockMoves() {
    	$stock_moves = Stockmove::all();

    	return view("inventory.admin-inventory", compact("stock_moves"));
    }

    public function show() {
        $products = Product::all();
         $suppliers = Supplier::all();

        return view("inventory.admin-inventory", compact("products", "suppliers"));
    }
   
   public function destroy($id)
    {
        
        $stock_moves = Stockmove::find($id);
		$stock_moves->delete();
        return redirect()->action('Admin\Inventory\InventoryController@index');

    }
    public function ajax_destroy($id){

        $stock_moves = Stockmove::find($id);
        $stock_moves->delete();

       return redirect()->action('Admin\Inventory\InventoryController@index');
    }

    


    
}
