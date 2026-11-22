@extends('layouts.app')
@section('title','About | Om Megashree Pharmaceuticals')
@section('content')
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; About</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">ABOUT US</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">About Om Megashree Pharmaceuticals</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">A Nepalese pharmaceutical company dedicated to bringing quality medicine to more people across Nepal, with cGMP-compliant manufacturing and European standards.</p>
  </div>

  <!-- hero banner -->
  <div style="padding:0 80px 56px">
    <img src="/images/professional/laboratory.jpg" alt="Om Megashree Pharmaceuticals facility" style="width:100%;height:420px;object-fit:cover;border-radius:28px">
  </div>

  <!-- company overview -->
  <div style="padding:0 80px 72px;background:#fff">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">OUR STORY</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 24px;color:#2E2627">Built on purpose, driven by care</h2>
    <div style="display:flex;gap:48px;flex-wrap:wrap">
      <div style="flex:1 1 520px;min-width:280px">
        <p style="font-size:16px;line-height:1.8;color:#5A4E50;margin:0 0 18px">Om Megashree Pharmaceuticals Limited is a Nepalese pharmaceutical company founded in 2075 BS in Jugedi, Bharatpur, Chitwan, with operations launched in Falgun 2080 BS. We are committed to making quality medicine accessible to more people across Nepal.</p>
        <p style="font-size:16px;line-height:1.8;color:#5A4E50;margin:0">Our ultra-modern manufacturing facility spans 22,044 sq ft and houses sophisticated instruments and machinery for producing cardio-diabetic, neuropsychiatric and specialized medicines across tablets, capsules, dry syrups, creams, ointments and eye/ear drops.</p>
      </div>
      <div style="flex:0 0 320px;min-width:260px;display:flex;flex-direction:column;gap:20px">
        <div style="background:#F8E9EF;border-radius:24px;padding:28px">
          <div style="font-size:13px;color:#BE3057;font-weight:600;letter-spacing:1px">ESTABLISHED</div>
          <div style="font-family:Sora;font-weight:700;font-size:32px;color:#2E2627;margin-top:6px">2075 BS</div>
          <div style="font-size:13px;color:#77717A;margin-top:4px">Founded in Jugedi, Chitwan</div>
        </div>
        <div style="background:#F8E9EF;border-radius:24px;padding:28px">
          <div style="font-size:13px;color:#BE3057;font-weight:600;letter-spacing:1px">OPERATIONS</div>
          <div style="font-family:Sora;font-weight:700;font-size:32px;color:#2E2627;margin-top:6px">Falgun 2080</div>
          <div style="font-size:13px;color:#77717A;margin-top:4px">Manufacturing launched</div>
        </div>
        <div style="background:#F8E9EF;border-radius:24px;padding:28px">
          <div style="font-size:13px;color:#BE3057;font-weight:600;letter-spacing:1px">FACILITY</div>
          <div style="font-family:Sora;font-weight:700;font-size:32px;color:#2E2627;margin-top:6px">22,044</div>
          <div style="font-size:13px;color:#77717A;margin-top:4px">Sq ft manufacturing plant</div>
        </div>
      </div>
    </div>
  </div>

  <!-- what we do -->
  <div style="padding:0 80px 72px;background:#FBF8F9">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">WHAT WE DO</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 32px;color:#2E2627">Our capabilities</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
      <div style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:32px;display:flex;flex-direction:column;gap:14px">
        <div style="width:56px;height:56px;border-radius:16px;background:#F9EBEF;color:#BE3057;display:flex;align-items:center;justify-content:center;font-family:Sora;font-weight:700;font-size:22px">1</div>
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35">Cardio &amp; Diabetic</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">Specialized cardiovascular and diabetic formulations made to international quality standards.</div>
      </div>
      <div style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:32px;display:flex;flex-direction:column;gap:14px">
        <div style="width:56px;height:56px;border-radius:16px;background:#F9EBEF;color:#BE3057;display:flex;align-items:center;justify-content:center;font-family:Sora;font-weight:700;font-size:22px">2</div>
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35">Neuropsychiatric</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">Advanced neuropsychiatric medicines developed through rigorous research and development.</div>
      </div>
      <div style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:32px;display:flex;flex-direction:column;gap:14px">
        <div style="width:56px;height:56px;border-radius:16px;background:#F9EBEF;color:#BE3057;display:flex;align-items:center;justify-content:center;font-family:Sora;font-weight:700;font-size:22px">3</div>
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35">Quality Assurance</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">cGMP-compliant QA and QC systems ensuring safety, efficacy and reliability at every step.</div>
      </div>
    </div>
  </div>

  <!-- explore more -->
  <div style="padding:0 80px 88px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">EXPLORE MORE</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 32px;color:#2E2627">Learn more about us</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
      <a href="/who-we-are" style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:36px 32px;display:flex;flex-direction:column;gap:14px;text-decoration:none;transition:all 0.2s">
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35">Who We Are</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">Our history, values and the team behind Om Megashree.</div>
        <div style="margin-top:auto;color:#BE3057;font-weight:600;font-size:14px">Read more →</div>
      </a>
      <a href="/our-expertise-and-services" style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:36px 32px;display:flex;flex-direction:column;gap:14px;text-decoration:none">
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35">Our Expertise</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">Therapeutic areas, manufacturing capabilities and quality systems.</div>
        <div style="margin-top:auto;color:#BE3057;font-weight:600;font-size:14px">Read more →</div>
      </a>
      <a href="/about/board-of-directors" style="background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:36px 32px;display:flex;flex-direction:column;gap:14px;text-decoration:none">
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35">Board of Directors</div>
        <div style="font-size:15px;line-height:1.7;color:#5A4E50">Leadership guiding our vision and corporate governance.</div>
        <div style="margin-top:auto;color:#BE3057;font-weight:600;font-size:14px">Read more →</div>
      </a>
    </div>
  </div>
</div>
@endsection
