@extends('layouts.app')
@section('title','Careers | Om Megashree Pharmaceuticals')
@section('content')
@php
$values = [
    ['n'=>'1','t'=>'Integrity','d'=>'Upholding honesty, ethics and accountability, we are a trusted, principled organization.'],
    ['n'=>'2','t'=>'Innovation','d'=>'Fostering creativity, adaptation and originality, we drive pioneering advancements.'],
    ['n'=>'3','t'=>'Quality','d'=>'Our commitment to excellence, precision, and meticulousness ensures superior standards.'],
    ['n'=>'4','t'=>'Collaboration','d'=>'We thrive through teamwork, partnerships, collective efforts, achieving shared goals.'],
    ['n'=>'5','t'=>'Growth','d'=>'We seek expansion, development, and prosperity through continuous improvement.'],
    ['n'=>'6','t'=>'Organization as the Family','d'=>'Our unity and support create a sense of belonging, fostering resilience and shared success.'],
];
$jobs = [
    ['t'=>'Production Officer','d'=>'Production','l'=>'Chitwan'],
    ['t'=>'Quality Control Analyst','d'=>'Quality Control','l'=>'Chitwan'],
    ['t'=>'Medical Representative','d'=>'Sales and Marketing','l'=>'Kathmandu'],
    ['t'=>'Research Associate','d'=>'Research and Development','l'=>'Chitwan'],
];
$steps = [
    ['n'=>'1','t'=>'Apply online','d'=>'Send your details and CV.'],
    ['n'=>'2','t'=>'Screening','d'=>'Our HR team reviews every application.'],
    ['n'=>'3','t'=>'Interview','d'=>'Meet the hiring team.'],
    ['n'=>'4','t'=>'Offer','d'=>'Welcome to Om Megashree.'],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 56px;display:flex;flex-wrap:wrap;gap:40px;justify-content:space-between;align-items:center">
    <div style="max-width:760px">
      <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Careers</div>
      <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">CAREERS</div>
      <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.12;margin:10px 0 16px;color:#2E2627;letter-spacing:-1px">Build the future of Nepali medicine with us.</h1>
      <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0 0 28px">Join a dedicated team of 100+, working to bring quality medicine to more people across Nepal.</p>
      <div style="display:flex;gap:14px;flex-wrap:wrap"><a href="#" style="background:#BE3057;color:#fff;padding:15px 30px;border-radius:999px;font-weight:600">View open roles</a><a href="#apply" style="border:1.5px solid #BE3057;color:#BE3057;padding:14px 30px;border-radius:999px;font-weight:600">Send your CV</a></div>
    </div>
    <img src="/images/professional/team.jpg" alt="Team at Chitwan factory" style="width:100%;height:100%;object-fit:cover;border-radius:28px">
  </div>

  <!-- values -->
  <div style="padding:72px 80px 24px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">LIFE AT OM MEGASHREE</div>
    <h2 style="font-family:Sora;font-size:36px;margin:10px 0 28px;color:#2E2627">What we value</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:20px">
      @foreach ($values as $v)
      <div class="card" style="background:#fff;border:1px solid #EBDDE1;border-radius:22px;padding:28px"><div style="width:40px;height:40px;border-radius:12px;background:#F9EBEF;color:#BE3057;font-family:Sora;font-weight:700;display:flex;align-items:center;justify-content:center;margin-bottom:18px">{{ $v['n'] }}</div><div style="font-family:Sora;font-weight:600;font-size:20px;margin-bottom:8px">{{ $v['t'] }}</div><div style="font-size:15px;line-height:1.65;color:#5A4E50">{{ $v['d'] }}</div></div>
      @endforeach
    </div>
  </div>

  <!-- open roles -->
  <div style="padding:56px 80px 24px">
    <div style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:end;gap:16px;margin-bottom:24px"><div><div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">OPEN ROLES</div><h2 style="font-family:Sora;font-size:36px;margin:10px 0 0;color:#2E2627">Find your role</h2></div><div style="font-size:13px;color:#5A4E50">Sample listings. Real roles come from the CMS.</div></div>
    <div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:24px">
      <span style="background:#BE3057;color:#fff;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:600">All departments</span>
      <span style="background:#fff;border:1px solid #EBDDE1;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">Research and Development</span>
      <span style="background:#fff;border:1px solid #EBDDE1;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">Quality Control</span>
      <span style="background:#fff;border:1px solid #EBDDE1;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">Quality Assurance</span>
      <span style="background:#fff;border:1px solid #EBDDE1;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">Production</span>
      <span style="background:#fff;border:1px solid #EBDDE1;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">Sales and Marketing</span>
    </div>
    <div style="display:flex;flex-direction:column;gap:14px">
      @foreach ($jobs as $j)
      <a href="#" class="card" style="display:flex;flex-wrap:wrap;gap:16px;justify-content:space-between;align-items:center;background:#fff;border:1px solid #EBDDE1;border-radius:20px;padding:24px 32px"><div><div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627">{{ $j['t'] }}</div><div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:10px"><span style="background:#F9EBEF;color:#BE3057;font-weight:600;font-size:13px;padding:5px 14px;border-radius:999px">{{ $j['d'] }}</span><span style="background:#E6F0F5;color:#2B6684;font-weight:600;font-size:13px;padding:5px 14px;border-radius:999px">{{ $j['l'] }}</span><span style="background:#FBF8F9;border:1px solid #EBDDE1;color:#5A4E50;font-size:13px;padding:4px 14px;border-radius:999px">Full time</span></div></div><div style="color:#BE3057;font-weight:600;font-size:15px">View and apply →</div></a>
      @endforeach
    </div>
  </div>

  <!-- process -->
  <div style="padding:56px 80px 24px">
    <h2 style="font-family:Sora;font-size:32px;margin:0 0 24px;color:#2E2627">How hiring works</h2>
    <div style="display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:20px">
      @foreach ($steps as $s)
      <div style="background:#2B6684;color:#fff;border-radius:22px;padding:28px"><div style="width:40px;height:40px;border-radius:50%;background:#fff;color:#BE3057;font-family:Sora;font-weight:700;display:flex;align-items:center;justify-content:center;margin-bottom:16px">{{ $s['n'] }}</div><div style="font-family:Sora;font-weight:600;font-size:19px;margin-bottom:6px">{{ $s['t'] }}</div><div style="font-size:14px;line-height:1.6;color:#E6F0F5">{{ $s['d'] }}</div></div>
      @endforeach
    </div>
  </div>

  <!-- apply -->
  <div id="apply" style="margin:56px 80px 72px;display:flex;flex-wrap:wrap;gap:40px;align-items:flex-start">
    <div style="flex:1 1 340px;min-width:0"><div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">APPLY</div><h2 style="font-family:Sora;font-size:36px;line-height:1.2;margin:10px 0 16px;color:#2E2627">Do not see your role? Send us your CV.</h2><p style="font-size:16px;line-height:1.7;color:#5A4E50;margin:0 0 20px">Tell us about yourself and we will keep your details for future openings.</p><div style="font-size:14px;color:#5A4E50;line-height:1.9">CV formats: PDF, DOC, DOCX<br>Maximum size: 5 MB<br>Questions: info@ommegashreepharmaceuticals.com</div></div>
    <div style="flex:1 1 560px;min-width:0;background:#fff;border:1px solid #EBDDE1;border-radius:28px;padding:40px;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:20px">
      <div><div style="font-size:13px;font-weight:600;margin-bottom:8px">Full name</div><div style="height:46px;border:1px solid #EBDDE1;border-radius:12px;background:#FBF8F9;display:flex;align-items:center;padding:0 16px;font-size:14px;color:#5A4E50;box-sizing:border-box">Your name</div></div>
      <div><div style="font-size:13px;font-weight:600;margin-bottom:8px">Email</div><div style="height:46px;border:1px solid #EBDDE1;border-radius:12px;background:#FBF8F9;display:flex;align-items:center;padding:0 16px;font-size:14px;color:#5A4E50;box-sizing:border-box">you@example.com</div></div>
      <div><div style="font-size:13px;font-weight:600;margin-bottom:8px">Phone</div><div style="height:46px;border:1px solid #EBDDE1;border-radius:12px;background:#FBF8F9;display:flex;align-items:center;padding:0 16px;font-size:14px;color:#5A4E50;box-sizing:border-box">98XXXXXXXX</div></div>
      <div><div style="font-size:13px;font-weight:600;margin-bottom:8px">Position</div><div style="height:46px;border:1px solid #EBDDE1;border-radius:12px;background:#FBF8F9;display:flex;align-items:center;padding:0 16px;font-size:14px;color:#5A4E50;box-sizing:border-box">General application</div></div>
      <div style="grid-column:span 2"><div style="font-size:13px;font-weight:600;margin-bottom:8px">CV</div><div style="border:1.5px dashed #BE3057;border-radius:14px;background:#F9EBEF;padding:22px;text-align:center;font-size:14px;color:#BE3057;font-weight:600">Drop your CV here or browse</div></div>
      <div style="grid-column:span 2"><div><div style="font-size:13px;font-weight:600;margin-bottom:8px">Message (optional)</div><div style="height:96px;border:1px solid #EBDDE1;border-radius:12px;background:#FBF8F9;display:flex;align-items:center;padding:0 16px;font-size:14px;color:#5A4E50;box-sizing:border-box">Tell us about your experience</div></div></div>
      <div style="grid-column:span 2;display:flex;flex-wrap:wrap;gap:16px;justify-content:space-between;align-items:center"><div style="font-size:12px;color:#5A4E50;border:1px solid #EBDDE1;border-radius:10px;padding:12px 18px">[Turnstile spam check]</div><a href="#" style="background:#BE3057;color:#fff;padding:15px 34px;border-radius:999px;font-weight:600;font-size:15px">Submit application</a></div>
    </div>
  </div>
</div>
@endsection
