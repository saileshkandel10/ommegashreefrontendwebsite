@extends('layouts.app')
@php
$pageTitle = $cat['n'] . ' | Om Megashree Pharmaceuticals';
$slug = fn($n)=>Illuminate\Support\Str::slug($n);
@endphp
@section('title', $pageTitle)
@section('content')
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; <a href="/products" style="color:#BE3057;font-weight:600">Products</a> &nbsp;/&nbsp; {{ $cat['n'] }}</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">{{ $cat['n'] }}</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">{{ $cat['n'] }}</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">{{ $cat['d'] }}</p>
  </div>

  <!-- toolbar -->
  <div style="padding:40px 80px 0;display:flex;flex-wrap:wrap;gap:20px;justify-content:space-between;align-items:center">
    <div style="display:flex;gap:10px;flex-wrap:wrap">
      <a href="/products" style="background:#fff;border:1px solid #EBDDE1;padding:11px 22px;border-radius:999px;font-size:14px;font-weight:500">All</a>
      <a href="/product-category/cardiac-products" style="{{ $cat['c']==='CARDIAC'?'background:#BE3057;color:#fff':'background:#fff;border:1px solid #EBDDE1;color:#5A4E50' }};padding:11px 22px;border-radius:999px;font-size:14px;font-weight:600">Cardiac</a>
      <a href="/product-category/anti-diabetic-products" style="{{ $cat['c']==='ANTI-DIABETIC'?'background:#BE3057;color:#fff':'background:#fff;border:1px solid #EBDDE1;color:#5A4E50' }};padding:11px 22px;border-radius:999px;font-size:14px;font-weight:600">Anti-Diabetic</a>
      <a href="/product-category/general-products" style="{{ $cat['c']==='GENERAL'?'background:#BE3057;color:#fff':'background:#fff;border:1px solid #EBDDE1;color:#5A4E50' }};padding:11px 22px;border-radius:999px;font-size:14px;font-weight:600">General</a>
    </div>
    <div style="display:flex;gap:12px;flex-wrap:wrap;align-items:center">
      <div style="display:flex;align-items:center;gap:10px;background:#fff;border:1px solid #EBDDE1;border-radius:12px;padding:0 16px;height:46px;min-width:260px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5A4E50" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="7"></circle><path d="M21 21l-5-5"></path></svg><span style="font-size:14px;color:#5A4E50">Search products</span></div>
      <div style="display:flex;align-items:center;gap:8px;background:#fff;border:1px solid #EBDDE1;border-radius:12px;padding:0 16px;height:46px;font-size:14px;font-weight:500">Sort: A to Z <span style="color:#BE3057">▾</span></div>
    </div>
  </div>
  <div style="padding:20px 80px 0;font-size:14px;color:#5A4E50">Showing {{ count($prods) }} products</div>

  <!-- grid -->
  <div style="padding:20px 80px 72px;display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px">
    @foreach($prods as $p)
    <div class="card card-hover" style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;overflow:hidden">
      <div style="height:220px;background:#F9EBEF"><img src="/images/products/{{ $p['img'] }}" alt="{{ $p['n'] }}" style="width:100%;height:100%;object-fit:cover;display:block"></div>
      <div style="padding:24px">
        <div style="font-size:12px;font-weight:600;color:#BE3057;letter-spacing:1px">{{ $p['c'] }}</div>
        <div style="font-family:Sora;font-weight:700;font-size:24px;margin:8px 0 4px;color:#2E2627">{{ $p['n'] }}</div>
        <div style="font-size:14px;color:#5A4E50;margin-bottom:22px">{{ $p['f'] }}</div>
        <div style="display:flex;gap:10px">
          <a href="/products/{{ $slug($p['n']) }}" style="flex:1;text-align:center;border:1.5px solid #BE3057;color:#BE3057;padding:11px 0;border-radius:999px;font-weight:600;font-size:14px">Details</a>
          <a href="#" class="btn" style="flex:1;text-align:center;background:#BE3057;color:#fff;padding:12px 0;border-radius:999px;font-weight:600;font-size:14px">Get quote</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <!-- quote band -->
  <div style="margin:0 80px 72px;background:#BE3057;color:#fff;border-radius:28px;padding:48px 56px;display:flex;flex-wrap:wrap;gap:24px;justify-content:space-between;align-items:center">
    <div><h2 style="font-family:Sora;font-size:30px;margin:0 0 10px">Need a product list or a quote?</h2><div style="font-size:16px;color:#fff">Talk to our sales team or download the product catalog.</div></div>
    <div style="display:flex;gap:12px;flex-wrap:wrap"><a href="#" class="btn" style="background:#fff;color:#BE3057;padding:15px 28px;border-radius:999px;font-weight:600;font-size:14px">Request a quote</a><a href="#" style="border:1.5px solid #fff;color:#fff;padding:14px 28px;border-radius:999px;font-weight:600;font-size:14px">Download catalog</a></div>
  </div>
</div>
@endsection
