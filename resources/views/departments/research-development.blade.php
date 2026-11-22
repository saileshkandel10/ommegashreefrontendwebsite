@extends('layouts.app')
@section('title','Research & Development | Om Megashree Pharmaceuticals')
@section('content')
@php
$focus=[
    ['t'=>'Formulation Development','d'=>'Pre-formulation work, formulation optimization, batch scale-up development — tablets, capsules, bi-layer tablets, ODTs, sachets, ointments and ophthalmic preparations.'],
    ['t'=>'Analytical Development','d'=>'Analytical method development, stability studies, technology transfer, validation and continuous product improvement.'],
    ['t'=>'R&D Focus','d'=>'Scientific innovation, development efficiency, patient-centred solutions, therapeutic focus, regulatory expertise and responsible research.'],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Departments &nbsp;/&nbsp; Research & Development</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">RESEARCH & DEVELOPMENT</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Research & Development</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Innovation through research — R&D is a key part of product innovation and pharmaceutical development at Om Megashree Pharmaceuticals.</p>
  </div>
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">OUR FOCUS</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Driving pharmaceutical innovation</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
      @foreach ($focus as $f)
      <div style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:32px;display:flex;flex-direction:column;gap:14px">
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35">{{ $f['t'] }}</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">{{ $f['d'] }}</div>
      </div>
      @endforeach
    </div>
  </div>
  <div style="margin:0 80px 72px;background:#BE3057;color:#fff;border-radius:28px;padding:48px 56px;display:flex;flex-wrap:wrap;gap:24px;justify-content:space-between;align-items:center">
    <div><h2 style="font-family:Sora;font-size:30px;margin:0 0 10px">Explore our products</h2><div style="font-size:16px;color:#fff">Discover the formulations developed by our R&D team.</div></div>
    <a href="/products" style="background:#fff;color:#BE3057;padding:15px 30px;border-radius:999px;font-weight:600;font-size:14px">View Products</a>
  </div>
</div>
@endsection
