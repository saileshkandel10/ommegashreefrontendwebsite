@extends('layouts.app')
@section('title','Om Megashree Pharmaceuticals Home')
@section('content')
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">

<!-- hero slider -->
<div style="position:relative;width:100%;height:720px;overflow:hidden;color:#fff">
<div id="slider-track" style="position:absolute;inset:0;display:flex;transition:transform .7s ease;width:500%">
<div style="flex:none;width:20%;position:relative;background:url('/images/slider/1.jpg') center center/cover no-repeat"></div>
<div style="flex:none;width:20%;position:relative;background:url('/images/slider/2.jpg') center center/cover no-repeat"></div>
<div style="flex:none;width:20%;position:relative;background:url('/images/slider/3.jpg') center center/cover no-repeat"></div>
<div style="flex:none;width:20%;position:relative;background:url('/images/slider/4.jpg') center center/cover no-repeat"></div>
<div style="flex:none;width:20%;position:relative;background:url('/images/slider/5.jpg') center center/cover no-repeat"></div>
</div>
<div style="position:absolute;inset:0;background:rgba(46,38,39,.28)"></div>
<div style="position:absolute;top:28px;right:80px;background:#fff;border-radius:999px;padding:8px 18px;font-family:Sora;font-weight:600;font-size:14px;color:#2E2627"><span id="slide-num" style="color:#BE3057">01</span> / 05</div>
<div style="position:relative;height:100%;padding:0 140px 120px;display:flex;flex-direction:column;justify-content:center;box-sizing:border-box;max-width:960px;z-index:10">
<div style="display:inline-flex;align-self:flex-start;background:#fff;border-radius:999px;padding:9px 18px;font-size:13px;font-weight:600;color:#BE3057;letter-spacing:.3px">Nepal's 1st IPO-listed pharmaceuticals company</div>
<h1 style="font-family:Sora;font-size:64px;line-height:1.08;margin:26px 0 16px;color:#fff;letter-spacing:-1.2px">Quality medicine, made in Nepal for Nepal.</h1>
<div style="font-family:'Noto Sans Devanagari';font-weight:500;font-size:24px;color:#FFD3DE;margin-bottom:18px;min-height:38px">स्वास्थ्य र राष्ट्रका लागि एक सङ्कल्प</div>
<p style="font-size:19px;line-height:1.65;color:#fff;margin:0 0 36px;max-width:600px;min-height:94px">Innovative healthcare solutions, from cardiac and anti-diabetic care to everyday medicines, made to cGMP guidelines and European standards.</p>
<div style="display:flex;gap:14px;flex-wrap:wrap"><a href="/products" style="background:#BE3057;color:#fff;padding:17px 34px;border-radius:999px;font-weight:600">Explore Products</a><a href="#" style="border:1.5px solid #fff;color:#fff;padding:16px 34px;border-radius:999px;font-weight:600">Watch Our Story</a></div>
</div>
<a href="#" id="slide-prev" aria-label="Previous slide" style="position:absolute;left:28px;top:50%;margin-top:-28px;width:56px;height:56px;border:1.5px solid #fff;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;z-index:10"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M15 5l-7 7 7 7"></path></svg></a>
<a href="#" id="slide-next" aria-label="Next slide" style="position:absolute;right:28px;top:50%;margin-top:-28px;width:56px;height:56px;background:#BE3057;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;z-index:10"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M9 5l7 7-7 7"></path></svg></a>
<div style="position:absolute;right:140px;bottom:150px;background:#fff;border-radius:20px;padding:18px 26px;z-index:10"><div style="font-family:Sora;font-weight:700;font-size:32px;color:#BE3057">70+</div><div style="font-size:13px;color:#5A4E50">Product licenses</div></div>
<div style="position:absolute;left:0;right:0;bottom:0;padding:0 80px 32px;display:grid;grid-template-columns:repeat(5,minmax(0,1fr));gap:20px;z-index:10">
<div class="slide-dot active" data-index="0"><div style="height:4px;border-radius:4px;background:rgba(255,255,255,.35);overflow:hidden"><div class="bar on" style="background:#fff;width:100%"></div></div><div style="display:flex;gap:12px;align-items:baseline;margin-top:14px"><span style="font-family:Sora;font-weight:700;font-size:14px;color:#FFD3DE">01</span><span style="font-size:15px;font-weight:600;line-height:1.4;color:#fff">Our promise</span></div></div>
<div class="slide-dot" data-index="1"><div style="height:4px;border-radius:4px;background:rgba(255,255,255,.35);overflow:hidden"><div class="bar" style="background:#fff"></div></div><div style="display:flex;gap:12px;align-items:baseline;margin-top:14px"><span style="font-family:Sora;font-weight:700;font-size:14px;color:#FFD3DE">02</span><span style="font-size:15px;font-weight:600;line-height:1.4;color:#fff">Grand Opening</span></div></div>
<div class="slide-dot" data-index="2"><div style="height:4px;border-radius:4px;background:rgba(255,255,255,.35);overflow:hidden"><div class="bar" style="background:#fff"></div></div><div style="display:flex;gap:12px;align-items:baseline;margin-top:14px"><span style="font-family:Sora;font-weight:700;font-size:14px;color:#FFD3DE">03</span><span style="font-size:15px;font-weight:600;line-height:1.4;color:#fff">Inauguration, 7th Falgun 2080</span></div></div>
<div class="slide-dot" data-index="3"><div style="height:4px;border-radius:4px;background:rgba(255,255,255,.35);overflow:hidden"><div class="bar" style="background:#fff"></div></div><div style="display:flex;gap:12px;align-items:baseline;margin-top:14px"><span style="font-family:Sora;font-weight:700;font-size:14px;color:#FFD3DE">04</span><span style="font-size:15px;font-weight:600;line-height:1.4;color:#fff">Dematerialization Agreement</span></div></div>
<div class="slide-dot" data-index="4"><div style="height:4px;border-radius:4px;background:rgba(255,255,255,.35);overflow:hidden"><div class="bar" style="background:#fff"></div></div><div style="display:flex;gap:12px;align-items:baseline;margin-top:14px"><span style="font-family:Sora;font-weight:700;font-size:14px;color:#FFD3DE">05</span><span style="font-size:15px;font-weight:600;line-height:1.4;color:#fff">9th AGM: New Board</span></div></div>
</div>
</div>

<div style="height:56px"></div>

<!-- trust strip -->
<div style="display:flex;flex-wrap:wrap;gap:20px;padding:0 80px 72px">
@foreach ([['GMP','cGMP compliant','European standards'],['ISO','ISO certified','Quality management'],['70+','Product licenses','Approved formulations'],['8+','Years of experience','Since 2075 BS']] as $t)
<div style="flex:1 1 240px;background:#fff;border:1px solid #EBDDE1;border-radius:18px;padding:22px 24px;display:flex;gap:16px;align-items:center"><div style="width:44px;height:44px;border-radius:12px;background:#F9EBEF;color:#BE3057;display:flex;align-items:center;justify-content:center;font-family:Sora;font-weight:700;font-size:13px">{{ $t[0] }}</div><div><div style="font-weight:600">{{ $t[1] }}</div><div style="font-size:13px;color:#5A4E50">{{ $t[2] }}</div></div></div>
@endforeach
</div>

<!-- about -->
<div style="display:flex;flex-wrap:wrap;gap:64px;padding:72px 80px;align-items:center;background:#fff">
<div style="flex:1 1 480px;min-width:0;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px">
<div style="height:300px;border-radius:20px;background:url('/images/professional/unnamed.webp') center center/cover no-repeat;grid-row:span 2;display:flex;align-items:flex-end;padding:16px;box-sizing:border-box;font-size:12px;color:#2E2627">Laboratory</div>
<div style="height:142px;border-radius:20px;background:url('/images/professional/unnamed.webp') center center/cover no-repeat;display:flex;align-items:flex-end;padding:16px;box-sizing:border-box;font-size:12px;color:#2E2627">Production</div>
<div style="height:142px;border-radius:20px;background:url('/images/professional/unnamed.webp') center center/cover no-repeat;display:flex;align-items:flex-end;padding:16px;box-sizing:border-box;font-size:12px;color:#2E2627">Packaging</div>
</div>
<div style="flex:1 1 480px;min-width:0">
<div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">ABOUT US</div>
<h2 style="font-family:Sora;font-size:40px;line-height:1.15;margin:12px 0 18px;color:#2E2627">Ahead together.</h2>
<p style="font-size:17px;line-height:1.7;color:#5A4E50;margin:0 0 14px">We strive to make quality medicine accessible to more people. Established in 2075 BS in Jugedi, Bharatpur, Chitwan, we launched operations in Falgun 2080 BS.</p>
<p style="font-size:17px;line-height:1.7;color:#5A4E50;margin:0 0 28px">Our team of experts works tirelessly to bring the latest in medical progress to patients across Nepal.</p>
<a href="/about" style="color:#BE3057;font-weight:600">Read our story →</a>
</div>
</div>

<!-- departments -->
<div style="padding:0 80px 88px">
<div style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:end;gap:16px;margin-bottom:28px"><div><div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">DEPARTMENTS</div><h2 style="font-family:Sora;font-size:40px;margin:10px 0 0;color:#2E2627">The teams behind every tablet</h2></div><a href="/departments" style="color:#BE3057;font-weight:600">All departments →</a></div>
<div style="display:grid;grid-template-columns:repeat(5,minmax(0,1fr));gap:20px">
@foreach (['Research and Development','Quality Control','Quality Assurance','Production','Sales and Marketing'] as $i => $d)
<?php $n = $i + 1; ?>
<a href="/departments/{{ \Illuminate\Support\Str::slug($d) }}" class="card" style="display:flex;flex-direction:column;justify-content:space-between;min-height:200px;background:#fff;border:1px solid #EBDDE1;border-radius:22px;padding:26px"><div style="width:42px;height:42px;border-radius:12px;background:#F9EBEF;color:#BE3057;font-family:Sora;font-weight:700;display:flex;align-items:center;justify-content:center">{{ $n }}</div><div><div style="font-family:Sora;font-weight:600;font-size:19px;line-height:1.3;color:#2E2627;margin-bottom:10px">{{ $d }}</div><div style="color:#BE3057;font-weight:600;font-size:14px">Learn more →</div></div></a>
@endforeach
</div>
</div>

<!-- categories + products -->
<div style="padding:88px 80px">
<div style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:end;gap:16px;margin-bottom:36px"><div><div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">PRODUCTS</div><h2 style="font-family:Sora;font-size:40px;margin:10px 0 0;color:#2E2627">Leading products</h2></div><a href="/products" style="color:#BE3057;font-weight:600">View all products →</a></div>
<div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:32px"><span style="background:#BE3057;color:#fff;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:600">All</span><span style="background:#fff;border:1px solid #EBDDE1;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">Cardiac</span><span style="background:#fff;border:1px solid #EBDDE1;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">Anti-Diabetic</span><span style="background:#fff;border:1px solid #EBDDE1;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">General</span></div>
<div style="display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:24px">
@foreach ([['CARDIAC','Emflo 10','Tablet'],['CARDIAC','Rosu 10','Tablet'],['CARDIAC','Emflo 25','Tablet'],['CARDIAC','Rosu 5','Tablet']] as $p)
<a href="/products/{{ \Illuminate\Support\Str::slug($p[1]) }}" class="card" style="display:block;background:#fff;border:1px solid #EBDDE1;border-radius:20px;overflow:hidden"><div style="height:200px;background:#F9EBEF;display:flex;align-items:center;justify-content:center;font-size:12px;color:#5A4E50">{{ $p[1] }}</div><div style="padding:20px"><div style="font-size:12px;font-weight:600;color:#BE3057">{{ $p[0] }}</div><div style="font-family:Sora;font-weight:600;font-size:20px;margin:6px 0 4px">{{ $p[1] }}</div><div style="font-size:14px;color:#5A4E50">{{ $p[2] }}</div></div></a>
@endforeach
</div>
</div>

<!-- GMP -->
<div style="background:#2B6684;color:#fff;padding:88px 80px;display:flex;flex-wrap:wrap;gap:64px;align-items:center">
<div style="flex:1 1 440px;min-width:0">
<div style="color:#FFD3DE;font-weight:600;font-size:14px;letter-spacing:1.5px">GMP</div>
<h2 style="font-family:Sora;font-size:40px;line-height:1.15;margin:12px 0 18px">Good Manufacturing Practice, at every step.</h2>
<p style="font-size:17px;line-height:1.7;color:#E6F0F5;margin:0">A Nepalese pharmaceutical company with a vision to be a global organization, working to cGMP guidelines and European standards.</p>
</div>
<div style="flex:1 1 520px;min-width:0;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:14px">
@foreach (['Quality Management','Sanitation and Hygiene','Building and Facilities','Equipment','Raw Materials','Personnel','Validation and Qualification','Complaints'] as $g)
<div style="background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);border-radius:14px;padding:18px 20px;display:flex;gap:12px;align-items:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FFD3DE" stroke-width="2.4" aria-hidden="true"><path d="M5 12l5 5 9-10"></path></svg><span style="font-size:15px;font-weight:500">{{ $g }}</span></div>
@endforeach
</div>
</div>

<!-- stats + video -->
<div style="padding:88px 80px;display:flex;flex-wrap:wrap;gap:48px;align-items:center">
<div style="flex:1 1 520px;min-width:0;height:340px;border-radius:24px;background:#2B6684;display:flex;align-items:center;justify-content:center"><a href="https://www.youtube.com/watch?v=AHQopkn2v1A&t=7s" aria-label="Play company video" style="width:84px;height:84px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center"><svg width="28" height="28" viewBox="0 0 24 24" fill="#BE3057" aria-hidden="true"><path d="M8 5v14l11-7z"></path></svg></a></div>
<div style="flex:1 1 440px;min-width:0">
<h2 style="font-family:Sora;font-size:36px;margin:0 0 12px;color:#2E2627">Company at a glance</h2>
<p style="font-size:16px;line-height:1.7;color:#5A4E50;margin:0 0 28px">See how a Chitwan factory became one of Nepal's modern pharmaceutical manufacturers.</p>
<div style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px">
@foreach ([['8+','Years of experience'],['100+','Dedicated team'],['70+','Product licenses'],['ISO','Certified']] as $s)
<div style="background:#fff;border:1px solid #EBDDE1;border-radius:16px;padding:20px"><div style="font-family:Sora;font-weight:700;font-size:34px;color:#BE3057">{{ $s[0] }}</div><div style="font-size:14px;color:#5A4E50">{{ $s[1] }}</div></div>
@endforeach
</div>
</div>
</div>

<!-- gallery -->
<div style="padding:0 80px 88px">
<div style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:end;gap:16px;margin-bottom:28px"><div><div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">GALLERY</div><h2 style="font-family:Sora;font-size:40px;margin:10px 0 0;color:#2E2627">Inside Om Megashree</h2></div><a href="/disclosure/gallery" style="color:#BE3057;font-weight:600">View full gallery →</a></div>
<div style="display:grid;grid-template-columns:repeat(4,minmax(0,1fr));grid-template-rows:repeat(2,230px);gap:16px">
<div style="grid-column:span 2;grid-row:span 2;border-radius:24px;background:url('/images/professional/unnamed.webp') center center/cover no-repeat;display:flex;align-items:flex-end;padding:20px;color:#E6F0F5;font-size:12px">Factory exterior</div>
<div style="border-radius:24px;background:url('/images/professional/unnamed.webp') center center/cover no-repeat;display:flex;align-items:flex-end;padding:16px;font-size:12px;color:#2E2627">Production line</div>
<div style="border-radius:24px;background:url('/images/professional/unnamed.webp') center center/cover no-repeat;display:flex;align-items:flex-end;padding:16px;font-size:12px;color:#2E2627">Laboratory</div>
<div style="border-radius:24px;background:url('/images/professional/unnamed.webp') center center/cover no-repeat;display:flex;align-items:flex-end;padding:16px;font-size:12px;color:#2E2627">Packaging</div>
<div style="border-radius:24px;background:url('/images/professional/unnamed.webp') center center/cover no-repeat;display:flex;align-items:flex-end;padding:16px;font-size:12px;color:#2E2627">Inauguration</div>
</div>
</div>

<!-- shareholders -->
<div style="margin:0 80px 88px;background:#F9EBEF;border-radius:28px;padding:48px 56px;display:flex;flex-wrap:wrap;gap:40px;align-items:center;justify-content:space-between">
<div style="flex:1 1 380px;min-width:0"><div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">SHAREHOLDER CORNER</div><h2 style="font-family:Sora;font-size:32px;line-height:1.25;margin:10px 0 12px;color:#2E2627">Information for our investors</h2><p style="font-size:16px;line-height:1.7;color:#5A4E50;margin:0">Nepal's 1st IPO-listed pharmaceuticals company. Find AGM and EGM notices, dematerialization details and downloads in one place.</p></div>
<div style="flex:1 1 440px;min-width:0;display:flex;gap:14px;flex-wrap:wrap">
<a href="/disclosure/notice" style="flex:1 1 130px;text-align:center;background:#BE3057;color:#fff;padding:16px;border-radius:16px;font-weight:600;font-size:14px">AGM / EGM Notices</a>
<a href="#" style="flex:1 1 130px;text-align:center;background:#2B6684;color:#fff;padding:16px;border-radius:16px;font-weight:600;font-size:14px">Dematerialization</a>
<a href="/disclosure/downloads" style="flex:1 1 130px;text-align:center;background:#fff;border:1.5px solid #BE3057;color:#BE3057;padding:15px;border-radius:16px;font-weight:600;font-size:14px">Downloads</a>
</div>
</div>

<!-- news -->
<div style="padding:0 80px 88px">
<div style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:end;gap:16px;margin-bottom:32px"><div><div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">DISCLOSURE</div><h2 style="font-family:Sora;font-size:40px;margin:10px 0 0;color:#2E2627">Notices, news and stories</h2></div><a href="/disclosure/blog" style="color:#BE3057;font-weight:600">All updates →</a></div>
<div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
@foreach ([['NOTICE','OMPL AGM Notice'],['NOTICE','EGM Suchana'],['STORY','औषधिमा आत्मनिर्भर नेपाल: अर्जुन श्रेष्ठको संकल्प']] as $n)
<a href="#" class="card" style="display:block;background:#fff;border:1px solid #EBDDE1;border-radius:20px;padding:28px"><span style="background:#F9EBEF;color:#BE3057;font-size:12px;font-weight:600;padding:6px 12px;border-radius:999px">{{ $n[0] }}</span><div style="font-family:Sora;font-weight:600;font-size:20px;line-height:1.35;margin:18px 0 10px">{{ $n[1] }}</div><div style="font-size:14px;color:#BE3057;font-weight:600">Read more →</div></a>
@endforeach
</div>
</div>

<!-- careers CTA -->
<div style="margin:0 80px 88px;background:#BE3057;color:#fff;border-radius:28px;padding:56px;display:flex;flex-wrap:wrap;gap:24px;justify-content:space-between;align-items:center">
<div><h2 style="font-family:Sora;font-size:34px;margin:0 0 10px">Build the future of Nepali medicine with us.</h2><div style="color:#fff;font-size:16px">A dedicated team of 100+, and growing.</div></div>
<a href="/career" style="background:#fff;color:#2E2627;padding:16px 30px;border-radius:999px;font-weight:600">View open roles</a>
</div>

<style>
  @media (max-width:768px){
    body > div:first-child{padding:8px 20px!important}
    header{padding:0 20px!important}
    .hero-section{flex-direction:column!important;align-items:stretch!important;padding:40px 20px!important;gap:30px!important}
    .hero-text,.hero-image{flex:1 1 100%!important;min-width:100%!important}
    .hero-image{height:auto!important;max-height:300px!important}
    .hero-image img{height:auto!important}
    .hero-image > div{position:relative!important;left:auto!important;bottom:auto!important;width:100%!important;text-align:center;margin-top:12px!important}
    h1{font-size:32px!important;line-height:1.2!important}
    [style*="padding:88px 80px"]{padding-left:20px!important;padding-right:20px!important}
    [style*="margin:0 80px 88px"]{margin-left:0!important;margin-right:0!important}
    [style*="padding:72px 80px"]{padding-left:20px!important;padding-right:20px!important}
    [style*="padding:0 80px 72px"],[style*="padding:0 80px 88px"],[style*="padding:0 80px"]{padding-left:20px!important;padding-right:20px!important}
    [style*="grid-template-columns:repeat(5,"],[style*="grid-template-columns:repeat(4,"],[style*="grid-template-columns:repeat(3,"],[style*="grid-template-columns:repeat(2,"]{grid-template-columns:1fr!important}
    [style*="grid-template-rows:repeat(2,230px)"]{grid-template-rows:repeat(4,200px)!important}
    [style*="grid-column:span 2;grid-row:span 2"]{grid-column:span 1!important;grid-row:span 1!important}
  }
</style>
<script>
  var slideIndex=0;var totalSlides=5;var track=document.getElementById('slider-track');var slideNum=document.getElementById('slide-num');var dots=document.querySelectorAll('.slide-dot');var timer=null;
  function updateSlider(){track.style.transform='translateX(-'+(slideIndex*20)+'%)';slideNum.textContent=(slideIndex+1).toString().padStart(2,'0');dots.forEach(function(d,i){d.classList.toggle('active',i===slideIndex);var bar=d.querySelector('.bar');if(bar){bar.style.width=i===slideIndex?'100%':'0';}});}
  function nextSlide(){slideIndex=(slideIndex+1)%totalSlides;updateSlider();resetTimer();}
  function prevSlide(){slideIndex=(slideIndex-1+totalSlides)%totalSlides;updateSlider();resetTimer();}
  function goToSlide(i){slideIndex=i;updateSlider();resetTimer();}
  function resetTimer(){if(timer){clearInterval(timer);}timer=setInterval(nextSlide,5000);}
  document.getElementById('slide-next').onclick=function(e){e.preventDefault();nextSlide();};
  document.getElementById('slide-prev').onclick=function(e){e.preventDefault();prevSlide();};
  dots.forEach(function(d){d.onclick=function(){goToSlide(parseInt(d.getAttribute('data-index')));};});
  resetTimer();
</script>

</div>
@endsection
