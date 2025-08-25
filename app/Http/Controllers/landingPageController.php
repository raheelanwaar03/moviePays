<?php

namespace App\Http\Controllers;

use App\Models\admin\AdminProductModel;
use App\Models\ShareProduct;
use App\Models\Vistor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class landingPageController extends Controller
{
    public function home()
    {
        return view('LandingPage.welcome');
    }

    public function contact()
    {
        return view('LandingPage.contact');
    }

    public function about()
    {
        return view('LandingPage.aboutUs');
    }

    public function affilate()
    {
        return view('LandingPage.affliatePage');
    }

    public function productPage($referal = 'default')
    {
        // return $referal;

        if ($referal != 'default') {
            if (!auth()->user()) {
                return redirect()->route('register', $referal)->with('error', 'Please make your account to see Products');
            }
        } else {
            $productShare = new ShareProduct();
            $productShare->shareby = $referal;
            $productShare->username = auth()->user()->username;
            $productShare->save();
        }

        $products = AdminProductModel::where('product_level',auth()->user()->level)->paginate(9);
        return view('LandingPage.product', compact('products', 'referal'));
    }
}
