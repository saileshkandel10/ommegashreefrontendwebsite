@extends('layouts.app')
@php
$prods = [
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
$product = null;
foreach ($prods as $p) {
    if (\Illuminate\Support\Str::slug($p['n']) === $slug) { $product = $p; break; }
}
if (!$product) { abort(404); }
$pageTitle = $product['n'] . ' | Om Megashree Pharmaceuticals';
@endphp
@section('title', $pageTitle)
@section('content')
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <div style="padding:56px 80px 24px;display:flex;flex-wrap:wrap;gap:40px;align-items:flex-start">
    <div style="flex:1 1 520px;min-width:0">
      <div style="height:420px;border-radius:24px;overflow:hidden;background:#F9EBEF"><img src="/images/products/{{ $product['img'] }}" alt="{{ $product['n'] }}" style="width:100%;height:100%;object-fit:cover;display:block"></div>
    </div>
    <div style="flex:1 1 560px;min-width:0">
      <a href="/products" style="font-size:13px;color:#BE3057;font-weight:600;letter-spacing:1px;display:inline-block;margin-bottom:12px">← Back to products</a>
      <div style="font-size:12px;font-weight:600;color:#BE3057;letter-spacing:1px">{{ $product['c'] }}</div>
      <h1 style="font-family:Sora;font-weight:700;font-size:48px;line-height:1.15;margin:12px 0 14px;color:#2E2627;letter-spacing:-1px">{{ $product['n'] }}</h1>
      <div style="font-size:16px;color:#5A4E50;margin-bottom:24px">{{ $product['f'] }} &middot; Prescription medicine</div>
      <div style="font-size:16px;line-height:1.7;color:#5A4E50;max-width:560px">{{ $product['d'] }}</div>
      <div style="margin-top:28px;padding:22px;border-radius:16px;background:#fff;border:1px solid #EBDDE1"><div style="font-size:13px;font-weight:600;color:#BE3057;letter-spacing:1px">Manufactured in Nepal</div><div style="font-size:15px;color:#2E2627;margin-top:6px">Om Megashree Pharmaceuticals Ltd., Chitwan — cGMP compliant, European standards.</div></div>
    </div>
  </div>

  <div id="enquire" style="padding:56px 80px 72px">
    <div style="font-size:14px;color:#BE3057;font-weight:600;letter-spacing:1.5px">ENQUIRE</div>
    <h2 style="font-family:Sora;font-weight:700;font-size:32px;margin:10px 0 24px;color:#2E2627">Request a quote for {{ $product['n'] }}</h2>
    <form method="POST" action="/enquiry" style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:20px;max-width:720px">
      @csrf
      <input type="hidden" name="product" value="{{ $product['n'] }}">
      <div style="grid-column:span 2"><label style="font-size:13px;font-weight:600;display:block;margin-bottom:6px;color:#5A4E50">Full name</label><input type="text" name="name" placeholder="Your name" required style="width:100%;height:46px;border:1px solid #EBDDE1;border-radius:12px;padding:0 16px;font-size:14px;box-sizing:border-box"></div>
      <div style="grid-column:span 2"><label style="font-size:13px;font-weight:600;display:block;margin-bottom:6px;color:#5A4E50">Email</label><input type="email" name="email" placeholder="you@example.com" required style="width:100%;height:46px;border:1px solid #EBDDE1;border-radius:12px;padding:0 16px;font-size:14px;box-sizing:border-box"></div>
      <div><label style="font-size:13px;font-weight:600;display:block;margin-bottom:6px;color:#5A4E50">Phone</label><input type="text" name="phone" placeholder="98XXXXXXXX" style="width:100%;height:46px;border:1px solid #EBDDE1;border-radius:12px;padding:0 16px;font-size:14px;box-sizing:border-box"></div>
      <div><label style="font-size:13px;font-weight:600;display:block;margin-bottom:6px;color:#5A4E50">Organization / Company</label><input type="text" name="organization" placeholder="Hospital / Pharmacy / Clinic" style="width:100%;height:46px;border:1px solid #EBDDE1;border-radius:12px;padding:0 16px;font-size:14px;box-sizing:border-box"></div>
      <div style="grid-column:span 2"><label style="font-size:13px;font-weight:600;display:block;margin-bottom:6px;color:#5A4E50">Message</label><textarea name="message" placeholder="Tell us your requirement" required style="width:100%;height:120px;border:1px solid #EBDDE1;border-radius:12px;padding:12px 16px;font-size:14px;box-sizing:border-box"></textarea></div>
      <div style="grid-column:span 2"><button type="submit" style="background:#BE3057;color:#fff;padding:15px 30px;border:none;border-radius:999px;font-weight:600;font-size:14px;cursor:pointer">Send enquiry</button></div>
    </form>
  </div>
</div>
@endsection
