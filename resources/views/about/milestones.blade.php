@extends('layouts.app')
@section('title','Milestones | Om Megashree Pharmaceuticals')
@section('content')
@php
$milestones=[
    ['y'=>'2017','t'=>'Company established','d'=>'Om Megashree Pharmaceuticals founded as a private limited company.'],
    ['y'=>'2020','t'=>'ISO certification','d'=>'Achieved ISO certification milestone for quality management systems.'],
    ['y'=>'2022','t'=>'Facility completed','d'=>'Manufacturing facility construction completed; 70+ product licenses secured.'],
    ['y'=>'2023','t'=>'DDA approval','d'=>'Commercial operations approved by the Department of Drug Administration.'],
    ['y'=>'March 2024','t'=>'Grand market launch','d'=>'Official grand market launch of the product portfolio.'],
    ['y'=>'2024','t'=>'40+ products launched','d'=>'40+ marketing-licensed products launched across therapeutic segments.'],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; About &nbsp;/&nbsp; Milestones</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">MILESTONES</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Milestones and Achievements</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">A journey of growth and quality, from establishment to becoming a trusted name in Nepali pharmaceuticals.</p>
  </div>

  <!-- timeline -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">OUR JOURNEY</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Key milestones</h2>
    <div style="display:flex;flex-direction:column;gap:24px">
      @foreach ($milestones as $i => $m)
      <div style="display:flex;gap:28px;align-items:flex-start;position:relative;padding-left:24px">
        <div style="position:absolute;left:0;top:4px;width:16px;height:16px;border-radius:50%;background:#BE3057;border:3px solid #FBF8F9"></div>
        <div style="position:absolute;left:0;top:22px;width:2px;height:calc(100% + 20px);background:#EBDDE1"></div>
        <div style="flex:none;width:120px"><div style="font-family:Sora;font-weight:700;font-size:22px;color:#BE3057">{{ $m['y'] }}</div></div>
        <div style="flex:1;background:#fff;border:1px solid #EBDDE1;border-radius:22px;padding:28px;display:flex;flex-direction:column;gap:10px">
          <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627">{{ $m['t'] }}</div>
          <div style="font-size:15px;line-height:1.7;color:#5A4E50">{{ $m['d'] }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
