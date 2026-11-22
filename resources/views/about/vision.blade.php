@extends('layouts.app')
@section('title','Our Vision and Mission')
@section('content')
@php
$aboutRoutes=['/chairpersons-message','/our-vision-and-mission','/board-of-directors','/who-we-are','/our-expertise-and-services','/milestones-and-achievements','/commitment-to-quality-and-society'];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FAF8F9">
<div style="background:#F8E9EF;padding:56px 80px 48px">
  <div style="font-size:14px;color:#77717A;margin-bottom:20px"><a href="/" style="color:#B72E5B;font-weight:600">Home</a> &nbsp;/&nbsp; About &nbsp;/&nbsp; Our Vision and Mission</div>
  <div style="color:#B72E5B;font-weight:600;font-size:14px;letter-spacing:1.5px">ABOUT US</div>
  <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 0;color:#252329;letter-spacing:-1px">Our Vision and Mission</h1>
</div>
<div style="display:flex;flex-wrap:wrap;gap:48px;padding:56px 80px 72px;align-items:flex-start">
  <div style="flex:0 1 340px;min-width:280px;position:sticky;top:24px;display:flex;flex-direction:column;gap:24px">
    <div style="background:#B72E5B;border-radius:28px;padding:32px;color:#fff"><div style="font-family:Sora;font-weight:700;font-size:26px;line-height:1.25">your health,<br>our concern</div><div style="font-size:14px;margin-top:14px;color:#fff">The feeling we bring to patients, even in the toughest situations.</div></div>
    <div style="background:#fff;border:1px solid #EAE5E8;border-radius:24px;padding:12px">
      <div style="font-family:Sora;font-weight:600;font-size:13px;letter-spacing:1px;color:#77717A;padding:12px 16px 8px">ABOUT</div>
      @foreach (["Chairperson's Message","Our Vision and Mission","Board of Directors","Who We Are","Our Expertise","Milestones","Quality Policy"] as $i => $name)
      <a href="{{ $aboutRoutes[$i] }}" style="display:block;padding:12px 16px;border-radius:14px;font-size:15px;font-weight:500;color:{{ $i===1?'#fff':'#252329' }};background:{{ $i===1?'#B72E5B':'transparent' }}">{{ $name }}</a>
      @endforeach
    </div>
  </div>
  <div style="flex:1 1 640px;min-width:0;display:flex;flex-direction:column;gap:28px">
    <img src="/images/professional/laboratory.jpg" alt="Team and factory" style="width:100%;height:100%;object-fit:cover;border-radius:28px">
    <div style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:24px">
      <div style="background:#B72E5B;color:#fff;border-radius:28px;padding:44px">
        <div style="width:52px;height:52px;border-radius:14px;background:#fff;color:#B72E5B;display:flex;align-items:center;justify-content:center;margin-bottom:24px"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"></path><circle cx="12" cy="12" r="3"></circle></svg></div>
        <div style="font-family:Sora;font-weight:700;font-size:28px;margin-bottom:14px">Our Vision</div>
        <p style="font-size:17px;line-height:1.75;margin:0">We aim to become a global pharmaceutical company by virtue of innovation, quality, competence, with collaboration on skills and technology thus, assuring quality medicines at affordable price globally.</p>
      </div>
      <div style="background:#306B83;color:#fff;border-radius:28px;padding:44px">
        <div style="width:52px;height:52px;border-radius:14px;background:#fff;color:#306B83;display:flex;align-items:center;justify-content:center;margin-bottom:24px"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="4"></circle></svg></div>
        <div style="font-family:Sora;font-weight:700;font-size:28px;margin-bottom:14px">Our Mission</div>
        <p style="font-size:17px;line-height:1.75;margin:0">We are committed to provide total customer satisfaction by exceeding their expectations on quality products by introducing medicines on maximum possible forms and sectors to prevent, alleviate and cure diseases with our excellence in technology and innovation, emanating the sensation of "your health, our concern" even in the toughest situations.</p>
      </div>
    </div>
    <div style="margin-top:24px"><div style="color:#B72E5B;font-weight:600;font-size:14px;letter-spacing:1.5px">WHAT GUIDES US</div><h2 style="font-family:Sora;font-size:36px;margin:10px 0 0;color:#252329">Core values</h2></div>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:20px">
      @foreach ([['1','Integrity','Upholding honesty, ethics and accountability, we are a trusted, principled organization.'],['2','Innovation','Fostering creativity, adaptation and originality, we drive pioneering advancements.'],['3','Quality','Our commitment to excellence, precision, and meticulousness ensures superior standards.'],['4','Collaboration','We thrive through teamwork, partnerships, collective efforts, achieving shared goals.'],['5','Growth','We seek expansion, development, and prosperity through continuous improvement.'],['6','Organization as the Family','Our unity and support create a sense of belonging, fostering resilience and shared success.']] as $v)
      <div style="background:#fff;border:1px solid #EAE5E8;border-radius:22px;padding:28px"><div style="width:40px;height:40px;border-radius:12px;background:#F8E9EF;color:#B72E5B;font-family:Sora;font-weight:700;display:flex;align-items:center;justify-content:center;margin-bottom:18px">{{ $v[0] }}</div><div style="font-family:Sora;font-weight:600;font-size:20px;margin-bottom:8px">{{ $v[1] }}</div><div style="font-size:15px;line-height:1.65;color:#77717A">{{ $v[2] }}</div></div>
      @endforeach
    </div>
    <div style="background:#F8E9EF;border-radius:24px;padding:36px 40px;display:flex;flex-wrap:wrap;gap:20px;justify-content:space-between;align-items:center;margin-top:8px"><div style="font-family:Sora;font-weight:600;font-size:20px;line-height:1.4;max-width:620px">We are a Nepalese pharmaceuticals company with GMP guidelines and European standards.</div><a href="/about" style="background:#B72E5B;color:#fff;padding:14px 28px;border-radius:999px;font-weight:600;font-size:14px">More about us</a></div>
    <a href="/board-of-directors" style="display:flex;justify-content:space-between;align-items:center;background:#306B83;color:#fff;border-radius:22px;padding:28px 36px"><div><div style="font-size:13px;color:#F8E9EF;font-weight:600;letter-spacing:1px">NEXT</div><div style="font-family:Sora;font-weight:600;font-size:22px;margin-top:4px">Board of Directors</div></div><div style="width:48px;height:48px;border-radius:50%;background:#fff;color:#B72E5B;display:flex;align-items:center;justify-content:center;font-size:22px">→</div></a>
  </div>
</div>
</div>
@endsection