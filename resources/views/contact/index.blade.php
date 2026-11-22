@extends('layouts.app')
@section('title','Contact | Om Megashree Pharmaceuticals')
@section('content')
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Contact</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">CONTACT</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Get in touch</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Questions about our products, partnerships or careers? Send us a message and our team will reply.</p>
  </div>

  <div style="display:flex;flex-wrap:wrap;gap:32px;padding:56px 80px 40px;align-items:stretch">
    <!-- contact details -->
    <div style="flex:1 1 360px;min-width:0;background:#2B6684;border-radius:28px;padding:44px;display:flex;flex-direction:column;gap:28px">
      <div style="font-family:Sora;font-weight:700;font-size:28px;color:#fff">Contact details</div>
      <div style="display:flex;gap:16px;align-items:flex-start"><div style="width:44px;height:44px;flex:none;border-radius:12px;background:#fff;color:#BE3057;display:flex;align-items:center;justify-content:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle></svg></div><div><div style="font-size:13px;font-weight:600;color:#FFD3DE;letter-spacing:1px">PHONE</div><div style="font-size:16px;line-height:1.6;color:#fff;margin-top:4px"><a href="tel:+977015244310" style="color:#fff">01-5244310</a></div></div></div>
      <div style="display:flex;gap:16px;align-items:flex-start"><div style="width:44px;height:44px;flex:none;border-radius:12px;background:#fff;color:#BE3057;display:flex;align-items:center;justify-content:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle></svg></div><div><div style="font-size:13px;font-weight:600;color:#FFD3DE;letter-spacing:1px">EMAIL</div><div style="font-size:16px;line-height:1.6;color:#fff;margin-top:4px"><a href="mailto:info@ommegashreepharmaceuticals.com" style="color:#fff">info@ommegashreepharmaceuticals.com</a></div></div></div>
      <div style="display:flex;gap:16px;align-items:flex-start"><div style="width:44px;height:44px;flex:none;border-radius:12px;background:#fff;color:#BE3057;display:flex;align-items:center;justify-content:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle></svg></div><div><div style="font-size:13px;font-weight:600;color:#FFD3DE;letter-spacing:1px">HEAD OFFICE</div><div style="font-size:16px;line-height:1.6;color:#fff;margin-top:4px">Kathmandu Metropolitan City-10, Lakhe Chaur Marg (House No. 480), New Baneshwor, Kathmandu, Nepal</div></div></div>
      <div style="display:flex;gap:16px;align-items:flex-start"><div style="width:44px;height:44px;flex:none;border-radius:12px;background:#fff;color:#BE3057;display:flex;align-items:center;justify-content:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle></svg></div><div><div style="font-size:13px;font-weight:600;color:#FFD3DE;letter-spacing:1px">FACTORY</div><div style="font-size:16px;line-height:1.6;color:#fff;margin-top:4px">Bharatpur-29, Jugedi, Chitwan, Nepal</div></div></div>
      <div style="border-top:1px solid rgba(255,255,255,.25);padding-top:22px"><div style="font-size:13px;font-weight:600;color:#FFD3DE;letter-spacing:1px;margin-bottom:12px">FOLLOW US</div><div style="display:flex;gap:10px;flex-wrap:wrap"><a href="#" style="border:1px solid #fff;color:#fff;border-radius:999px;padding:8px 16px;font-size:13px;font-weight:600">Facebook</a><a href="#" style="border:1px solid #fff;color:#fff;border-radius:999px;padding:8px 16px;font-size:13px;font-weight:600">LinkedIn</a><a href="#" style="border:1px solid #fff;color:#fff;border-radius:999px;padding:8px 16px;font-size:13px;font-weight:600">Instagram</a><a href="#" style="border:1px solid #fff;color:#fff;border-radius:999px;padding:8px 16px;font-size:13px;font-weight:600">YouTube</a></div></div>
    </div>

    <!-- contact form -->
    <div style="flex:1.4 1 520px;min-width:0;background:#fff;border:1px solid #EBDDE1;border-radius:28px;padding:44px">
      <div style="grid-column:span 2;font-family:Sora;font-weight:700;font-size:28px;color:#2E2627">Send us a message</div>
      <form method="POST" action="/enquiry" style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:20px">
        @csrf
        <div style="grid-column:span 2"><div class="form-label">Full name</div><input type="text" name="name" class="form-input" required></div>
        <div style="grid-column:span 2"><div class="form-label">Email</div><input type="email" name="email" class="form-input" required></div>
        <div><div class="form-label">Phone</div><input type="text" name="phone" class="form-input"></div>
        <div><div class="form-label">Enquiry type</div><select name="enquiry_type" class="form-input"><option>General enquiry</option><option>Product information</option><option>Partnership</option><option>Career</option></select></div>
        <div style="grid-column:span 2"><div class="form-label">Subject</div><input type="text" name="subject" class="form-input"></div>
        <div style="grid-column:span 2"><div class="form-label">Message</div><textarea name="message" rows="5" class="form-input" style="height:140px;resize:vertical;padding:14px 16px"></textarea></div>
        <div style="grid-column:span 2;display:flex;flex-wrap:wrap;gap:16px;justify-content:space-between;align-items:center"><button type="submit" class="btn-primary">Send message</button></div>
      </form>
    </div>
  </div>

  <!-- maps -->
  <div style="padding:0 80px 72px;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:32px">
    <div style="background:#fff;border:1px solid #EBDDE1;border-radius:28px;overflow:hidden"><img src="/images/professional/office.jpg" alt="Head Office location" style="width:100%;height:260px;object-fit:cover"><div style="padding:24px 28px;display:flex;justify-content:space-between;align-items:center;gap:12px"><div><div style="font-family:Sora;font-weight:600;font-size:18px">Head Office</div><div style="font-size:14px;color:#5A4E50;margin-top:4px">New Baneshwor, Kathmandu</div></div><a href="#" style="color:#BE3057;font-weight:600;font-size:14px">Open in Maps →</a></div></div>
    <div style="background:#fff;border:1px solid #EBDDE1;border-radius:28px;overflow:hidden"><img src="/images/professional/factory.jpg" alt="Factory location" style="width:100%;height:260px;object-fit:cover"><div style="padding:24px 28px;display:flex;justify-content:space-between;align-items:center;gap:12px"><div><div style="font-family:Sora;font-weight:600;font-size:18px">Factory</div><div style="font-size:14px;color:#5A4E50;margin-top:4px">Bharatpur-29, Jugedi, Chitwan</div></div><a href="#" style="color:#BE3057;font-weight:600;font-size:14px">Open in Maps →</a></div></div>
  </div>
</div>
@endsection
