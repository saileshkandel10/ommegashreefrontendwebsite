@extends('layouts.app')
@section('title','Our Expertise | Om Megashree Pharmaceuticals')
@section('content')
@php
$expertise=[
    ['t'=>'Cardio & Diabetic Formulations','d'=>'Specialized formulations for cardiovascular and diabetic care, manufactured to international quality standards.'],
    ['t'=>'Neuropsychiatric Products','d'=>'Advanced neurocysticercosis and neuropsychiatric medicines developed through rigorous research and development.'],
    ['t'=>'Quality Assurance & Control','d'=>'cGMP-compliant QA and QC systems ensuring product safety, efficacy, and reliability at every step.'],
    ['t'=>'Research & Development','d'=>'Dedicated R&D driving pioneering advancements, process optimization, and new product development.'],
    ['t'=>'Distribution Network','d'=>'Wide-reaching distribution network ensuring timely availability of medicines across Nepal.'],
    ['t'=>'Customer Support','d'=>'Responsive customer support and service to healthcare partners and patients.'],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; About &nbsp;/&nbsp; Our Expertise</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">OUR EXPERTISE</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Our Expertise and Services</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Specialized drug formulations, regulatory compliance, R&D, quality assurance, quality control, and a strong distribution network across Nepal.</p>
  </div>

  <!-- expertise grid -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">WHAT WE DO BEST</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Our areas of expertise</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
      @foreach ($expertise as $e)
      <div class="card" style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:32px;display:flex;flex-direction:column;gap:14px">
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35">{{ $e['t'] }}</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">{{ $e['d'] }}</div>
        <div style="margin-top:auto;display:inline-block;background:#F9EBEF;color:#BE3057;font-weight:600;font-size:13px;padding:6px 16px;border-radius:999px">Learn more</div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
