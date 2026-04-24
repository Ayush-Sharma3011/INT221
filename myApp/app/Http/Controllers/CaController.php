<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaController extends Controller
{
    // Clothes data
    private function getClothes()
    {
        return [
            1 => [
                'id' => 1,
                'name' => 'T-shirt',
                'price' => 500,
                'description' => 'Comfortable and breathable T-shirt made from premium cotton. Perfect for casual wear.'
            ],
            2 => [
                'id' => 2,
                'name' => 'Jeans',
                'price' => 1200,
                'description' => 'Classic blue jeans with excellent durability. Suitable for everyday use.'
            ],
            3 => [
                'id' => 3,
                'name' => 'Sweater',
                'price' => 800,
                'description' => 'Warm and cozy sweater perfect for winters. Made from soft wool blend.'
            ],
            4 => [
                'id' => 4,
                'name' => 'Jacket',
                'price' => 3000,
                'description' => 'Stylish and warm jacket with multiple pockets. Ideal for outdoor activities.'
            ],
            5 => [
                'id' => 5,
                'name' => 'Dress',
                'price' => 1500,
                'description' => 'Elegant and comfortable dress suitable for various occasions.'
            ]
        ];
    }

    // Show all clothes
    public function index()
    {
        $clothes = $this->getClothes();
        return view('caviews.clothlist', compact('clothes'));
    }

    // Show single cloth details
    public function show($id)
    {
        $clothes = $this->getClothes();
        
        if (!isset($clothes[$id])) {
            abort(404, 'Cloth not found');
        }
        
        $cloth = $clothes[$id];
        return view('caviews.clothdetail', compact('cloth'));
    }
}