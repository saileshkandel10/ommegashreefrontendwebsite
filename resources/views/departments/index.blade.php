@extends('layouts.app')
@section('title','Departments | Om Megashree Pharmaceuticals')
@section('content')
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Departments</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">DEPARTMENTS</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Our Departments</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Discover the teams and expertise that support our commitment to quality healthcare.</p>
  </div>

  <!-- departments grid -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">OUR DEPARTMENTS</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Explore our teams</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px">
      @php
      $depts=[
        ['key'=>'research-development','n'=>'Research & Development','d'=>'Innovation through pharmaceutical R&D and product development.'],
        ['key'=>'quality-control','n'=>'Quality Control','d'=>'Product testing, analysis, validation and quality assurance.'],
        ['key'=>'quality-assurance','n'=>'Quality Assurance','d'=>'QA systems, SOPs, compliance and continuous improvement.'],
        ['key'=>'production','n'=>'Production','d'=>'Manufacturing excellence at our Chitwan facility.'],
        ['key'=>'sales-marketing','n'=>'Sales & Marketing','d'=>'Commercial operations, distribution and market reach.'],
      ];
      @endphp
      @foreach($depts as $d)
      <a href="/departments/{{ $d['key'] }}" style="display:block;background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:32px;text-decoration:none;display:flex;flex-direction:column;gap:14px">
        <div style="font-family:Sora;font-weight:600;font-size:22px;color:#2E2627;line-height:1.35">{{ $d['n'] }}</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">{{ $d['d'] }}</div>
        <div style="margin-top:auto;color:#BE3057;font-weight:600;font-size:14px">Explore →</div>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection
