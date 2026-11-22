@extends('layouts.app')
@section('title','Who We Are | Om Megashree Pharmaceuticals')
@section('content')
@php
$features=[
    ['t'=>'Established','d'=>'Founded as a private limited company in 2017; converted to a public limited company in July 2022.','img'=>'chairperson.png'],
    ['t'=>'Manufacturing Plant','d'=>'Ultra-modern facility at Jugedi-29, Chitwan, Nepal across 22,044 sq ft with sophisticated instruments and machinery.','img'=>'chairman.jpg'],
    ['t'=>'Therapeutic Range','d'=>'Cardio-diabetic, neuropsychiatric and specialized medicines as tablets, capsules, dry syrups, creams, ointments and eye/ear drops.','img'=>'arjun.jpg'],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; About &nbsp;/&nbsp; Who We Are</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">WHO WE ARE</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Who We Are</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Om Megashree Pharmaceuticals Limited is a Nepalese pharmaceutical company dedicated to bringing quality medicine to more people across Nepal.</p>
  </div>

  <!-- intro -->
  <div style="padding:0 80px 56px">
    <div style="font-size:18px;line-height:1.7;color:#5A4E50;max-width:720px">Established in 2017 as a private limited company and converted to a public limited company in July 2022, Om Megashree Pharmaceuticals Limited operates an ultra-modern manufacturing plant at Jugedi-29, Chitwan, Nepal. The facility spans 22,044 sq ft and houses sophisticated instruments and machinery for manufacturing a wide range of therapeutic dosage forms for human and veterinary care.</div>
    <div style="font-size:18px;line-height:1.7;color:#5A4E50;max-width:720px;margin-top:24px">Our current product range covers cardio-diabetic, neuropsychiatric and other specialized groups of medicines in dosage forms including tablets, capsules, dry syrups, creams, ointments and eye/ear drops.</div>
  </div>

  <!-- features -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">OUR FOUNDATION</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Built on purpose</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
      @foreach ($features as $f)
      <div style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:32px;display:flex;flex-direction:column;gap:16px">
        <div style="width:56px;height:56px;border-radius:16px;background:#F9EBEF;color:#BE3057;display:flex;align-items:center;justify-content:center;font-family:Sora;font-weight:700;font-size:22px">{{ $loop->index + 1 }}</div>
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627">{{ $f['t'] }}</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">{{ $f['d'] }}</div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
