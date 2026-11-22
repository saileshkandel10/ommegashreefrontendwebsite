@extends('layouts.app')
@section('title','Board of Directors | Om Megashree Pharmaceuticals')
@section('content')
@php
$photos=['KP'=>'kamal.jpg','AK'=>'arjun.jpg','JT'=>'jeni.jpg','CA'=>'chirag.jpg','RS'=>'rubina.jpg','SP'=>'sanjeev.jpg'];
$dirs=[
    ['i'=>'KP','n'=>'Mr. Kamal Panthi','r'=>'Director','t'=>'','td'=>'none','bg'=>'#2B6684'],
    ['i'=>'AK','n'=>'Mr. Arjun Prasad Kafle','r'=>'Director','t'=>'','td'=>'none','bg'=>'#BE3057'],
    ['i'=>'JT','n'=>'Mrs. Jeni Thapa','r'=>'Director','t'=>'','td'=>'none','bg'=>'#2B6684'],
    ['i'=>'CA','n'=>'Mr. Chirag Agrawal','r'=>'Director','t'=>'Public','td'=>'inline-block','bg'=>'#BE3057'],
    ['i'=>'RS','n'=>'Mrs. Rubina Shrestha','r'=>'Director','t'=>'Public','td'=>'inline-block','bg'=>'#2B6684'],
    ['i'=>'SP','n'=>'Dr. Sanjeev Pradhan','r'=>'Director','t'=>'Independent','td'=>'inline-block','bg'=>'#BE3057'],
];
$about=["Chairperson's Message","Our Vision and Mission","Board of Directors","Who We Are","Our Expertise","Milestones","Quality Policy"];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; About &nbsp;/&nbsp; Board of Directors</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">LEADERSHIP</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 0;color:#2E2627;letter-spacing:-1px">Board of Directors</h1>
  </div>
  <div style="display:flex;flex-wrap:wrap;gap:48px;padding:56px 80px 72px;align-items:flex-start">
    <!-- sidebar -->
    <div style="flex:0 1 340px;min-width:280px;position:sticky;top:24px;display:flex;flex-direction:column;gap:24px">
      <div style="background:#BE3057;border-radius:28px;padding:32px;color:#fff"><div style="font-family:Sora;font-weight:700;font-size:44px;line-height:1">7</div><div style="font-family:Sora;font-weight:600;font-size:18px;margin:6px 0 16px">Board members</div><div style="font-size:14px;line-height:1.8;color:#fff">1 Chairman<br>3 Directors<br>2 Public Directors<br>1 Independent Director</div></div>
      <div style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:12px">
        <div style="font-family:Sora;font-weight:600;font-size:13px;letter-spacing:1px;color:#5A4E50;padding:12px 16px 8px">ABOUT</div>
        @foreach ($about as $i => $name)
        <a href="#" style="display:block;padding:12px 16px;border-radius:14px;font-size:15px;font-weight:500;color:{{ $i===2?'#fff':'#2E2627' }};background:{{ $i===2?'#BE3057':'transparent' }}">{{ $name }}</a>
        @endforeach
      </div>
    </div>

    <!-- content -->
    <div style="flex:1 1 640px;min-width:0;display:flex;flex-direction:column;gap:32px">
      <div style="background:#2B6684;border-radius:28px;padding:40px;display:flex;flex-wrap:wrap;gap:40px;align-items:center;color:#fff">
        <div style="width:240px;height:280px;border-radius:22px;overflow:hidden"><img src="/images/chairman.jpg" alt="Dr.(h.c) Arjun Kumar Shrestha" style="width:100%;height:100%;object-fit:cover"></div>
        <div style="flex:1 1 300px;min-width:0">
          <div style="display:inline-block;background:#fff;color:#BE3057;font-weight:600;font-size:13px;padding:6px 16px;border-radius:999px">Chairman</div>
          <div style="font-family:Sora;font-weight:700;font-size:34px;line-height:1.2;margin:16px 0 14px">Dr.(h.c) Arjun Kumar Shrestha</div>
          <a href="/chairpersons-message" style="color:#FFD3DE;font-weight:600;font-size:15px">Read the Chairperson's message →</a>
        </div>
      </div>
      <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
        @foreach ($dirs as $d)
        <div class="card" style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:24px">
          <div style="height:200px;border-radius:18px;overflow:hidden"><img src="/images/{{ $photos[$d['i']] }}" alt="{{ $d['n'] }}" style="width:100%;height:100%;object-fit:cover"></div>
          <div style="font-family:Sora;font-weight:600;font-size:19px;line-height:1.3;margin:20px 0 8px;color:#2E2627">{{ $d['n'] }}</div>
          <div style="display:flex;gap:8px;flex-wrap:wrap"><span style="background:#F9EBEF;color:#BE3057;font-weight:600;font-size:13px;padding:5px 14px;border-radius:999px">{{ $d['r'] }}</span>@if($d['t'])<span style="background:#E6F0F5;color:#2B6684;font-weight:600;font-size:13px;padding:5px 14px;border-radius:999px;display:{{ $d['td'] }}">{{ $d['t'] }}</span>@endif</div>
        </div>
        @endforeach
      </div>
      <div style="background:#F9EBEF;border-radius:24px;padding:36px 40px;display:flex;flex-wrap:wrap;gap:20px;justify-content:space-between;align-items:center"><div style="font-family:Sora;font-weight:600;font-size:20px;line-height:1.4;max-width:620px">We are a Nepalese pharmaceuticals company with GMP guidelines and European standards.</div><a href="/about" style="background:#BE3057;color:#fff;padding:14px 28px;border-radius:999px;font-weight:600;font-size:14px">More about us</a></div>
      <a href="/who-we-are" style="display:flex;justify-content:space-between;align-items:center;background:#2B6684;color:#fff;border-radius:22px;padding:28px 36px"><div><div style="font-size:13px;color:#FFD3DE;font-weight:600;letter-spacing:1px">NEXT</div><div style="font-family:Sora;font-weight:600;font-size:22px;margin-top:4px">Who We Are</div></div><div style="width:48px;height:48px;border-radius:50%;background:#fff;color:#BE3057;display:flex;align-items:center;justify-content:center;font-size:22px">→</div></a>
    </div>
  </div>
</div>
@endsection
