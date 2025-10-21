<?php

namespace App\Http\Controllers;

use App\Models\Admin\Collection;
use App\Models\Admin\Mood;
use App\Models\Admin\Occasion;
use App\Models\Admin\Product;
use App\Models\Admin\Service;
use App\Models\Blog;
use App\Models\MoodOccasion;
use Illuminate\Http\Request;

use Stevebauman\Location\Facades\Location;

class ScentopiaController extends Controller
{



    public function index()
    {
        return view('website.scentopia.index');
    }




    public function product()
    {
        return view('website.scentopia.product');
    }


    // Collection Index Pages
    public function aura()
    {
        return view('website.scentopia.product.aura.index');
    }
    public function elixir()
    {
        return view('website.scentopia.product.elixir.index');
    }
    public function supernova()
    {
        return view('website.scentopia.product.supernova.index');
    }
    public function zenith()
    {
        return view('website.scentopia.product.zenith.index');
    }


    // AURA
    public function eternalOud()
    {
        return view('website.scentopia.product.aura.eternal-oud');
    }
    public function etherealEmbrace()
    {
        return view('website.scentopia.product.aura.ethereal-embrace');
    }
    public function jardinDeJade()
    {
        return view('website.scentopia.product.aura.jardin-de-jade');
    }
    public function noirIntense()
    {
        return view('website.scentopia.product.aura.noir-intense');
    }
    public function vortexEcho()
    {
        return view('website.scentopia.product.aura.vortex-echo');
    }

    // ELIXIR
    public function electraelixir()
    {
        return view('website.scentopia.product.elixir.electraelixir');
    }
    public function nebulaNectar()
    {
        return view('website.scentopia.product.elixir.nebula-nectar');
    }
    public function novaNoir()
    {
        return view('website.scentopia.product.elixir.nova-noir');
    }
    public function oudIntense()
    {
        return view('website.scentopia.product.elixir.oud-intense');
    }

    // SUPERNOVA
    public function avenirTriumph()
    {
        return view('website.scentopia.product.supernova.avenir-triumph');
    }
    public function majesticMillenium()
    {
        return view('website.scentopia.product.supernova.majestic-millenium');
    }
    public function oudOpulence()
    {
        return view('website.scentopia.product.supernova.oud-opulence');
    }

    // ZENITH
    public function auroraOpulence()
    {
        return view('website.scentopia.product.zenith.aurora-opulence');
    }
    public function midnightSolstice()
    {
        return view('website.scentopia.product.zenith.midnight-solstice');
    }
    public function opulentOdyssey()
    {
        return view('website.scentopia.product.zenith.opulent-odyssey');
    }
}
