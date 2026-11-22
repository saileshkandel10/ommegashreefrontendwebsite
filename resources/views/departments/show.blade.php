@extends('layouts.app')
@section('title','{{ ucwords(str_replace("-"," ",$slug)) }} | Om Megashree Pharmaceuticals')
@section('content')
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Departments &nbsp;/&nbsp; {{ ucwords(str_replace("-"," ",$slug)) }}</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">{{ ucwords(str_replace("-"," ",$slug)) }}</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">{{ ucwords(str_replace("-"," ",$slug)) }}</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Department overview and capabilities of Om Megashree Pharmaceuticals.</p>
  </div>

  <!-- department content -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">DEPARTMENT OVERVIEW</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">{{ ucwords(str_replace("-"," ",$slug)) }}</h2>
    <div style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:40px">
      <p style="font-size:16px;line-height:1.8;color:#5A4E50;margin:0 0 20px">The {{ ucwords(str_replace("-"," ",$slug)) }} department at Om Megashree Pharmaceuticals plays a vital role in our commitment to quality healthcare manufacturing.</p>
      <p style="font-size:16px;line-height:1.8;color:#5A4E50;margin:0">Our team of experts works with modern equipment and processes to deliver consistent results that meet cGMP and European standards.</p>
    </div>
  </div>

  <!-- CTA -->
  <div style="margin:0 80px 72px;background:#BE3057;color:#fff;border-radius:28px;padding:48px 56px;display:flex;flex-wrap:wrap;gap:24px;justify-content:space-between;align-items:center">
    <div>
      <h2 style="font-family:Sora;font-size:30px;margin:0 0 10px">Explore our products</h2>
      <div style="font-size:16px;color:#fff">Discover the medicines we manufacture.</div>
    </div>
    <a href="/products" style="background:#fff;color:#BE3057;padding:15px 30px;border-radius:999px;font-weight:600;font-size:14px">View Products</a>
  </div>
</div>
@endsection
