@extends('layouts.app')
@section('title','Quality Policy | Om Megashree Pharmaceuticals')
@section('content')
@php
$quality=[
    ['t'=>'Product Safety','d'=>'Ensuring every medicine is safe, effective, and reliable for patients across Nepal.'],
    ['t'=>'cGMP Compliance','d'=>'Manufacturing to current Good Manufacturing Practice and European standards at every step.'],
    ['t'=>'Continuous Improvement','d'=>'Ongoing research, training, and process optimization to raise quality benchmarks.'],
];
$society=[
    ['t'=>'Renewable Energy','d'=>'Solar and renewable energy adoption to reduce environmental impact.'],
    ['t'=>'Community Health','d'=>'Health camps and outreach programs serving local communities.'],
    ['t'=>'Environmental Stewardship','d'=>'Tree plantation, ethical governance, and responsible manufacturing practices.'],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; About &nbsp;/&nbsp; Quality Policy</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">QUALITY POLICY</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Commitment to Quality and Society</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Quality is the foundation of our operations. We are committed to product safety, efficacy, reliability, and continuous improvement.</p>
  </div>

  <!-- quality -->
  <div style="padding:0 80px 56px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">OUR QUALITY COMMITMENT</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Quality as a foundation</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
      @foreach ($quality as $q)
      <div class="card" style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:32px;display:flex;flex-direction:column;gap:14px">
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35">{{ $q['t'] }}</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">{{ $q['d'] }}</div>
      </div>
      @endforeach
    </div>
  </div>

  <!-- society -->
  <div style="background:#F9EBEF;padding:56px 80px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">OUR SOCIETY COMMITMENT</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Giving back to society</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
      @foreach ($society as $s)
      <div style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:32px;display:flex;flex-direction:column;gap:14px">
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35">{{ $s['t'] }}</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">{{ $s['d'] }}</div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
