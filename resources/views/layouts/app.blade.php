<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title','Om Megashree Pharmaceuticals')</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Sora:wght@600;700&family=Noto+Sans+Devanagari:wght@500&display=swap" rel="stylesheet">
@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body style="margin:0;font-family:Inter,system-ui,sans-serif;color:#2E2627;background:#FBF8F9">
<div style="background:#2B6684;color:#fff;font-size:13px;padding:10px 80px;display:flex;flex-wrap:wrap;gap:16px;justify-content:space-between;align-items:center">
  <div style="display:flex;gap:28px;flex-wrap:wrap;color:#fff"><a href="tel:+977015244310" style="color:#fff">01-5244310</a><a href="mailto:info@ommegashreepharmaceuticals.com" style="color:#fff">info@ommegashreepharmaceuticals.com</a></div>
  <div style="display:flex;gap:24px;align-items:center;color:#fff"><a href="https://nepal.pharmasoftwares.com/" style="color:#fff">SFA Login</a><a href="#" style="color:#fff">EN / नेपाली</a></div>
</div>
<header style="background:#fff;padding:0 80px;height:80px;display:flex;align-items:center;justify-content:space-between;gap:24px;flex-wrap:wrap;border-bottom:1px solid #EBDDE1;position:sticky;top:0;z-index:40">
  <a href="/" style="display:flex;align-items:center"><img src="/images/logo.png" alt="Om Megashree Pharmaceuticals" style="height:60px;width:auto;display:block"></a>
  <nav style="display:flex;gap:28px;font-size:15px;font-weight:500;flex-wrap:wrap;color:#2E2627">
  <a href="/" style="color:#2E2627">Home</a>
  <div class="dropdown" style="position:relative">
    <a href="/about" style="color:#2E2627">About</a>
    <div class="dropdown-menu" style="position:absolute;top:100%;left:0;background:#fff;box-shadow:0 4px 12px rgba(0,0,0,.1);border-radius:8px;padding:8px 0;min-width:220px;z-index:50">
      <a href="/chairpersons-message" style="display:block;padding:8px 16px;color:#2E2627">Chairperson's Message</a>
      <a href="/our-vision-and-mission" style="display:block;padding:8px 16px;color:#2E2627">Our Vision and Mission</a>
      <a href="/board-of-directors" style="display:block;padding:8px 16px;color:#2E2627">Board of Directors</a>
      <a href="/who-we-are" style="display:block;padding:8px 16px;color:#2E2627">Who We Are</a>
      <a href="/our-expertise-and-services" style="display:block;padding:8px 16px;color:#2E2627">Our Expertise</a>
      <a href="/milestones-and-achievements" style="display:block;padding:8px 16px;color:#2E2627">Milestones</a>
      <a href="/commitment-to-quality-and-society" style="display:block;padding:8px 16px;color:#2E2627">Quality Policy</a>
    </div>
  </div>
  <div class="dropdown" style="position:relative">
    <a href="/departments" style="color:#2E2627">Departments</a>
    <div class="dropdown-menu" style="position:absolute;top:100%;left:0;background:#fff;box-shadow:0 4px 12px rgba(0,0,0,.1);border-radius:8px;padding:8px 0;min-width:220px;z-index:50">
      <a href="/research-development" style="display:block;padding:8px 16px;color:#2E2627">Research & Development</a>
      <a href="/quality-control" style="display:block;padding:8px 16px;color:#2E2627">Quality Control</a>
      <a href="/quality-assurance" style="display:block;padding:8px 16px;color:#2E2627">Quality Assurance</a>
      <a href="/production" style="display:block;padding:8px 16px;color:#2E2627">Production</a>
      <a href="/sales-marketing" style="display:block;padding:8px 16px;color:#2E2627">Sales & Marketing</a>
    </div>
  </div>
  <a href="/products" style="color:#2E2627">Products</a>
  <a href="/career" style="color:#2E2627">Career</a>
  <div class="dropdown" style="position:relative">
    <a href="/disclosure" style="color:#2E2627">Disclosure</a>
    <div class="dropdown-menu" style="position:absolute;top:100%;left:0;background:#fff;box-shadow:0 4px 12px rgba(0,0,0,.1);border-radius:8px;padding:8px 0;min-width:220px;z-index:50">
      <a href="/disclosure/blog" style="display:block;padding:8px 16px;color:#2E2627">Blog</a>
      <a href="/disclosure/news" style="display:block;padding:8px 16px;color:#2E2627">News</a>
      <a href="/disclosure/notice" style="display:block;padding:8px 16px;color:#2E2627">Notice</a>
      <a href="/disclosure/gallery" style="display:block;padding:8px 16px;color:#2E2627">Gallery</a>
      <a href="/disclosure/downloads" style="display:block;padding:8px 16px;color:#2E2627">Downloads</a>
    </div>
  </div>
  <a href="/contact" style="color:#2E2627">Contact</a>
</nav>
  <div style="display:flex;gap:12px;align-items:center"><a href="/contact" style="background:#BE3057;color:#fff;padding:13px 24px;border-radius:999px;font-weight:600;font-size:14px">Get in Touch</a></div>
</header>
<main>@yield('content')</main>
<!-- shared footer -->
<div style="background:#2B6684;color:#E6F0F5;padding:64px 80px 32px">
<div style="display:flex;flex-wrap:wrap;gap:48px;justify-content:space-between">
<div style="flex:1 1 260px"><div style="font-family:Sora;font-weight:700;font-size:20px;color:#fff;margin-bottom:12px">Om Megashree Pharmaceuticals Ltd.</div><div style="font-size:14px;line-height:1.7">स्वास्थ्य र राष्ट्रका लागि एक सङ्कल्प</div></div>
<div style="flex:1 1 200px;font-size:14px;line-height:2"><div style="color:#fff;font-weight:600">Head Office</div>Lakhe Chaur Marg (House No. 480), New Baneshwor, Kathmandu-10<br><a href="#" style="color:#FFD3DE">Open in Maps</a></div>
<div style="flex:1 1 200px;font-size:14px;line-height:2"><div style="color:#fff;font-weight:600">Factory</div>Bharatpur-29, Jugedi, Chitwan, Nepal</div>
<div style="flex:1 1 200px;font-size:14px;line-height:2"><div style="color:#fff;font-weight:600">Contact</div>01-5244310<br>info@ommegashreepharmaceuticals.com</div>
<div style="flex:1 1 160px;font-size:14px;line-height:2"><div style="color:#fff;font-weight:600">Follow</div>Facebook · LinkedIn<br>Instagram · YouTube</div>
</div>
<div style="border-top:1px solid rgba(255,255,255,.14);margin-top:40px;padding-top:20px;font-size:13px">Copyright ©2026 ommegashreepharmaceuticals.com</div>
</div>
</body>
</html>
