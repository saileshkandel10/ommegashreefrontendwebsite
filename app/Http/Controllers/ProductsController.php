<?php
namespace App\Http\Controllers;
use Illuminate\Support\Str;
class ProductsController extends Controller {
    protected $prods = [
        ['n'=>'Emflo 10','c'=>'CARDIAC','f'=>'Tablet','img'=>'emflo-10.jpg','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'Rosu 10','c'=>'CARDIAC','f'=>'Tablet','img'=>'rosu-10.jpg','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'Emflo 25','c'=>'CARDIAC','f'=>'Tablet','img'=>'emflo-25.jpg','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'Rosu 5','c'=>'CARDIAC','f'=>'Tablet','img'=>'rosu-5.jpg','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'ALIP','c'=>'CARDIAC','f'=>'Tablet','img'=>'alip.jpg','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'AMLOKIN','c'=>'CARDIAC','f'=>'Tablet','img'=>'amlokin.jpg','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'CARVE','c'=>'CARDIAC','f'=>'Tablet','img'=>'carve.png','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'LOPACE','c'=>'CARDIAC','f'=>'Tablet','img'=>'lopace.jpg','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'ROSUCARD','c'=>'CARDIAC','f'=>'Tablet','img'=>'rosucard.jpg','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'TELEMAX','c'=>'CARDIAC','f'=>'Tablet','img'=>'telemax.jpg','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'TICABIT','c'=>'CARDIAC','f'=>'Tablet','img'=>'ticabit.png','d'=>'Supports healthy heart function and circulation.'],
        ['n'=>'LINAGIT 5','c'=>'ANTI-DIABETIC','f'=>'Tablet','img'=>'linagit.jpg','d'=>'Support for blood sugar management.'],
        ['n'=>'MEGAMET','c'=>'ANTI-DIABETIC','f'=>'Tablet','img'=>'megamet.jpg','d'=>'Support for blood sugar management.'],
        ['n'=>'AZOBACT','c'=>'GENERAL','f'=>'Tablet','img'=>'azobact.jpg','d'=>'Everyday medicine for common conditions.'],
        ['n'=>'HYOTIK','c'=>'GENERAL','f'=>'Tablet','img'=>'hyotik.jpg','d'=>'Everyday medicine for common conditions.'],
        ['n'=>'LEVOGIT','c'=>'GENERAL','f'=>'Tablet','img'=>'levogit.jpg','d'=>'Everyday medicine for common conditions.'],
        ['n'=>'MONLET','c'=>'GENERAL','f'=>'Tablet','img'=>'monlet.jpg','d'=>'Everyday medicine for common conditions.'],
        ['n'=>'NAPRO','c'=>'GENERAL','f'=>'Tablet','img'=>'napro.jpg','d'=>'Everyday medicine for common conditions.'],
        ['n'=>'PARAFAST','c'=>'GENERAL','f'=>'Tablet','img'=>'parafast.png','d'=>'Everyday medicine for common conditions.'],
    ];
    protected $cats = [
        'cardiac-products'=>['n'=>'Cardiac Products','d'=>'Care for the heart and circulation.','c'=>'CARDIAC'],
        'anti-diabetic-products'=>['n'=>'Anti-Diabetic Products','d'=>'Support for blood sugar management.','c'=>'ANTI-DIABETIC'],
        'general-products'=>['n'=>'General Products','d'=>'Everyday medicines for common conditions.','c'=>'GENERAL'],
    ];
    public function index() { return view('products.index', ['prods'=>$this->prods,'cats'=>$this->cats]); }
    public function show($slug) {
        $product = null;
        foreach ($this->prods as $p) { if (Str::slug($p['n']) === $slug) { $product = $p; break; } }
        if (!$product) { abort(404); }
        return view('products.show', compact('product','slug'));
    }
    public function category($slug) {
        if (!isset($this->cats[$slug])) { abort(404); }
        $cat = $this->cats[$slug];
        $prods = array_values(array_filter($this->prods, fn($p)=>$p['c']===$cat['c']));
        return view('products.category', compact('slug','cat','prods'));
    }
}
