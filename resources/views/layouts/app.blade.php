<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title','Om Megashree Pharmaceuticals')</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Sora:wght@600;700&family=Noto+Sans+Devanagari:wght@500&display=swap" rel="stylesheet">
@vite(['resources/css/app.css','resources/js/app.js'])
<style>
  a{text-decoration:none}
  a:hover{text-decoration:none}
  .dropdown:hover .dropdown-menu{display:block}
  .dropdown-menu{display:none}
  .card-hover{transition:transform .2s,box-shadow .2s,border-color .2s}
  .card-hover:hover{transform:translateY(-4px);box-shadow:0 12px 28px rgba(0,0,0,.06);border-color:#BE3057}
  .btn-primary{background:#BE3057;color:#fff;padding:12px 28px;border-radius:999px;font-weight:600;font-size:14px;text-decoration:none;display:inline-block;border:none;cursor:pointer}
  .btn-outline{border:1.5px solid #BE3057;color:#BE3057;padding:11px 28px;border-radius:999px;font-weight:600;font-size:14px;text-decoration:none;display:inline-block;background:transparent}
  .btn-outline:hover{background:#BE3057;color:#fff}
  .form-input{width:100%;height:46px;border:1px solid #EBDDE1;border-radius:12px;padding:0 16px;font-size:14px;box-sizing:border-box;background:#FBF8F9;color:#5A4E50}
  .form-input:focus{border-color:#BE3057;outline:none}
  .form-label{font-size:13px;font-weight:600;display:block;margin-bottom:6px;color:#5A4E50}
  img{max-width:100%;height:auto;display:block}
  .container{width:100%;max-width:1440px;margin:0 auto;padding:0 20px;box-sizing:border-box}
  header .menu-toggle{display:none}
  .desktop-nav{display:flex}
  @media (max-width:768px){
    body{font-size:14px}
    header{padding:0 20px!important;height:auto!important}
    header .menu-toggle{display:flex!important}
    header .desktop-nav{display:none!important;position:absolute!important;top:80px;left:0;right:0;background:#fff;flex-direction:column;padding:20px;border-bottom:1px solid #EBDDE1;gap:0;z-index:60;width:100%}
    header .desktop-nav.open{display:flex!important}
    header .desktop-nav a,header .desktop-nav .dropdown>a{padding:12px 0;border-bottom:1px solid #F3F3F5;font-size:16px;display:block;width:100%}
    .desktop-contact{display:none!important}
    .desktop-nav .dropdown-menu{position:static!important;box-shadow:none!important;border:none!important;padding:0!important;width:100%!important;min-width:auto!important;background:#FBF8F9}
    .desktop-nav .dropdown-menu a{padding:10px 20px!important;font-size:14px!important;color:#5A4E50}
    .desktop-nav .dropdown-menu.show{display:block}
    h1{font-size:34px!important;line-height:1.2!important}
    h2{font-size:26px!important;line-height:1.3!important}
    .page-header,.section-header{padding:40px 20px!important}
    .container{padding:0 20px}
    .grid-4,.products-grid,.expertise-grid,.values-grid{grid-template-columns:1fr!important}
    .timeline-item:last-child .timeline-line{display:none}
    footer{padding:40px 20px!important;display:flex;flex-direction:column!important;gap:24px!important}
    footer>div{flex-direction:column!important;gap:24px!important}
    footer>div>div{min-width:auto!important}
    .hero-image{height:auto!important;max-height:300px!important}
    .page-img{height:auto!important}
    .two-col,.three-col{flex-direction:column!important}
    .card-stack{margin-bottom:24px}
    .brand-text{font-size:16px!important}
    /* Override all inline paddings/margins */
    [style*="padding:56px 80px"],[style*="padding:56px 80px 48px"],[style*="padding:0 80px"],[style*="padding:72px 80px"],[style*="padding:88px 80px"],[style*="padding:44px"],[style*="padding:36px"],[style*="padding:56px 80px 56px"],[style*="padding:40px 80px"],[style*="padding:0 80px 40px"],[style*="padding:0 80px 72px"],[style*="padding:0 80px 88px"]{padding-left:20px!important;padding-right:20px!important}
    [style*="margin:0 80px"],[style*="margin:56px 80px"],[style*="margin:0 80px 72px"],[style*="margin:0 80px 88px"],[style*="margin:56px 80px 24px"],[style*="margin:72px 80px 24px"]{margin-left:0!important;margin-right:0!important}
    /* Grid overrides */
    [style*="grid-template-columns:repeat(3,"],[style*="grid-template-columns:repeat(4,"],[style*="grid-template-columns:repeat(2,"]{grid-template-columns:1fr!important}
    /* Flex direction overrides */
    [style*="flex-direction:row"],[style*="flex-wrap:wrap"][style*="gap:48px"],[style*="gap:64px"]{flex-direction:column!important}
    /* Image height overrides */
    [style*="height:420px"],[style*="height:440px"],[style*="height:260px"],[style*="height:280px"],[style*="height:340px"],[style*="height:220px"],[style*="height:200px"]{height:auto!important;max-height:250px!important}
    /* Sticky sidebar override */
    [style*="position:sticky;top:24px"]{position:static!important}
  }
  @media (max-width:480px){
    h1{font-size:28px!important}
    h2{font-size:22px!important}
    header{height:auto;padding:12px 20px}
    .menu-toggle{margin-left:auto}
    [style*="padding:56px 80px"],[style*="padding:56px 80px 48px"],[style*="padding:0 80px"],[style*="padding:72px 80px"],[style*="padding:88px 80px"],[style*="padding:44px"],[style*="padding:36px"],[style*="padding:56px 80px 56px"],[style*="padding:40px 80px"],[style*="padding:0 80px 40px"],[style*="padding:0 80px 72px"],[style*="padding:0 80px 88px"]{padding-left:16px!important;padding-right:16px!important}
    [style*="margin:0 80px"],[style*="margin:56px 80px"],[style*="margin:0 80px 72px"],[style*="margin:0 80px 88px"],[style*="margin:56px 80px 24px"],[style*="margin:72px 80px 24px"]{margin-left:0!important;margin-right:0!important}
    [style*="grid-template-columns:repeat(3,"],[style*="grid-template-columns:repeat(4,"],[style*="grid-template-columns:repeat(2,"]{grid-template-columns:1fr!important}
    [style*="flex-direction:row"],[style*="gap:48px"],[style*="gap:64px"]{flex-direction:column!important}
    [style*="height:420px"],[style*="height:440px"],[style*="height:260px"],[style*="height:280px"],[style*="height:340px"],[style*="height:220px"],[style*="height:200px"]{height:auto!important;max-height:200px!important}
    [style*="position:sticky;top:24px"]{position:static!important}
  }
</style>
</head>
<body style="margin:0;font-family:Inter,system-ui,sans-serif;color:#2E2627;background:#FBF8F9">
<div style="background:#2B6684;color:#fff;font-size:13px;padding:10px 20px;display:flex;flex-wrap:wrap;gap:16px;justify-content:space-between;align-items:center">
  <div style="display:flex;gap:28px;flex-wrap:wrap;color:#fff"><a href="tel:+977015244310" style="color:#fff">01-5244310</a><a href="mailto:info@ommegashree.com" style="color:#fff">info@ommegashree.com</a></div>
  <div style="display:flex;gap:24px;align-items:center;color:#fff"><a href="https://nepal.pharmasoftwares.com/" style="color:#fff">SFA Login</a><a href="#" style="color:#fff">EN / नेपाली</a></div>
</div>
<header style="background:#fff;padding:0 20px;height:80px;display:flex;align-items:center;justify-content:space-between;gap:24px;flex-wrap:wrap;border-bottom:1px solid #EBDDE1;position:sticky;top:0;z-index:40;position:relative">
  <a href="/" style="display:flex;align-items:center"><img src="/images/logo.png" alt="Om Megashree Pharmaceuticals" style="height:50px;width:auto;display:block"></a>
  <button class="menu-toggle" style="background:none;border:none;color:#2E2627;font-size:24px;cursor:pointer">☰</button>
  <nav class="desktop-nav" style="gap:28px;font-size:15px;font-weight:500;flex-wrap:wrap;color:#2E2627">
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
  <button class="close-menu" style="display:none;background:none;border:none;color:#2E2627;font-size:24px;cursor:pointer;position:absolute;top:12px;right:16px">✕</button>
  <div class="desktop-contact" style="display:flex;gap:12px;align-items:center"><a href="/contact" style="background:#BE3057;color:#fff;padding:13px 24px;border-radius:999px;font-weight:600;font-size:14px">Get in Touch</a></div>
</header>
<main>@yield('content')</main>
<!-- shared footer -->
<div style="background:#2B6684;color:#E6F0F5;padding:64px 80px 32px">
<div style="display:flex;flex-wrap:wrap;gap:48px;justify-content:space-between">
<div style="flex:1 1 260px"><div style="font-family:Sora;font-weight:700;font-size:20px;color:#fff;margin-bottom:12px">Om Megashree Pharmaceuticals Ltd.</div><div style="font-size:14px;line-height:1.7">स्वास्थ्य र राष्ट्रका लागि एक सङ्कल्प</div></div>
<div style="flex:1 1 200px;font-size:14px;line-height:2"><div style="color:#fff;font-weight:600">Head Office</div>Lakhe Chaur Marg (House No. 480), New Baneshwor, Kathmandu-10<br><a href="#" style="color:#FFD3DE">Open in Maps</a></div>
<div style="flex:1 1 200px;font-size:14px;line-height:2"><div style="color:#fff;font-weight:600">Factory</div>Bharatpur-29, Jugedi, Chitwan, Nepal</div>
<div style="flex:1 1 200px;font-size:14px;line-height:2"><div style="color:#fff;font-weight:600">Contact</div>01-5244310<br>info@ommegashree.com</div>
<div style="flex:1 1 160px;font-size:14px;line-height:2"><div style="color:#fff;font-weight:600">Follow</div>Facebook · LinkedIn<br>Instagram · YouTube</div>
</div>
<div style="border-top:1px solid rgba(255,255,255,.14);margin-top:40px;padding-top:20px;font-size:13px">Copyright ©2026 ommegashreepharmaceuticals.com</div>
</div>
<script>
  var toggle=document.querySelector('.menu-toggle');var closeBtn=document.querySelector('.close-menu');var nav=document.querySelector('.desktop-nav');if(toggle){toggle.onclick=function(){nav.classList.toggle('open');toggle.style.display=nav.classList.contains('open')?'none':'flex';closeBtn.style.display=nav.classList.contains('open')?'block':'none';}}if(closeBtn){closeBtn.onclick=function(){nav.classList.remove('open');toggle.style.display='flex';closeBtn.style.display='none';}}
  var dropdowns=document.querySelectorAll('.desktop-nav .dropdown > a');dropdowns.forEach(function(d){d.onclick=function(e){if(window.innerWidth<=768){e.preventDefault();var menu=d.nextElementSibling;if(menu&&menu.classList.contains('dropdown-menu')){menu.classList.toggle('show');}}}});
</script>
</body>
</html>
