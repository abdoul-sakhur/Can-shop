<?php

namespace App\Http\Controllers;

use App\Models\Category;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $categoryVet = Category::find(1);
        $vetement = $categoryVet->products()->count();
        $categoryAc = Category::find(3);
        $Accessoires = $categoryAc->products()->count();
        $categoryCh = Category::find(2);
        $chaussures = $categoryCh->products()->count();

        // dd($product);

        return view('admin.dashboard', [
            'vetement' => $vetement,
            'accessoire' => $Accessoires,
            'chaussure' => $chaussures,
        ]);
    }
}
