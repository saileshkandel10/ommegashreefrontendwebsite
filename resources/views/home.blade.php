@extends('layouts.app')
@section('title','Om Megashree Pharmaceuticals Home')
@section('content')
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FAF8F9">
<!-- hero -->
<div class="hero-section" style="display:flex;flex-wrap:wrap;gap:48px;padding:88px 80px;background:linear-gradient(180deg,#F8E9EF,#FFFFFF);align-items:center">
  <div class="hero-text" style="flex:1 1 520px;min-width:0">
    <div style="display:inline-block;background:#fff;border:1px solid #EAE5E8;border-radius:999px;padding:8px 16px;font-size:13px;font-weight:600;color:#B72E5B">Nepal's 1st IPO-listed pharmaceuticals company</div>
    <h1 style="font-family:Sora;font-size:60px;line-height:1.08;margin:24px 0 16px;color:#252329;letter-spacing:-1px">Quality medicine, made in Nepal for Nepal.</h1>
    <div style="font-family:'Noto Sans Devanagari';font-size:22px;color:#B72E5B;margin-bottom:20px">स्वास्थ्य र राष्ट्रका लागि एक सङ्कल्प</div>
    <p style="font-size:18px;line-height:1.6;color:#77717A;margin:0 0 36px;max-width:560px">Innovative healthcare solutions, from cardiac and anti-diabetic care to everyday medicines, manufactured to international quality standards.</p>
    <div style="display:flex;gap:14px;flex-wrap:wrap"><a href="/products" style="background:#B72E5B;color:#fff;padding:16px 30px;border-radius:999px;font-weight:600">Explore Products</a><a href="#" style="border:1.5px solid #B72E5B;color:#B72E5B;padding:16px 30px;border-radius:999px;font-weight:600">Watch Our Story</a></div>
  </div>
  <div class="hero-image" style="flex:1 1 440px;min-width:0;position:relative">
    <img src="/images/professional/hero-pharma.jpg" alt="Om Megashree Pharmaceuticals hero" style="width:100%;height:100%;object-fit:cover;border-radius:28px">
    <div style="position:absolute;left:-28px;bottom:36px;background:#fff;border-radius:18px;padding:18px 22px;box-shadow:0 14px 34px rgba(8,48,46,.18)"><div style="font-family:Sora;font-weight:700;font-size:30px;color:#B72E5B">70+</div><div style="font-size:13px;color:#77717A">Product licenses</div></div>
  </div>
</div>
<!-- trust strip -->
<div style="display:flex;flex-wrap:wrap;gap:20px;padding:0 80px 72px">
  @foreach ([['GMP','cGMP compliant','European standards'],['ISO','ISO certified','Quality management'],['70+','Product licenses','Approved formulations'],['8+','Years of experience','Since 2075 BS']] as $t)
  <div style="flex:1 1 240px;background:#fff;border:1px solid #EAE5E8;border-radius:18px;padding:22px 24px;display:flex;gap:16px;align-items:center"><div style="width:44px;height:44px;border-radius:12px;background:#F8E9EF;color:#B72E5B;display:flex;align-items:center;justify-content:center;font-family:Sora;font-weight:700;font-size:13px">{{ $t[0] }}</div><div><div style="font-weight:600">{{ $t[1] }}</div><div style="font-size:13px;color:#77717A">{{ $t[2] }}</div></div></div>
  @endforeach
</div>
<!-- about -->
<div style="display:flex;flex-wrap:wrap;gap:64px;padding:72px 80px;align-items:center;background:#fff">
  <div style="flex:1 1 480px;min-width:0;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px">
    <img src="/images/professional/laboratory.jpg" alt="Laboratory" style="width:100%;height:100%;object-fit:cover;border-radius:20px">
    <img src="/images/professional/production.jpg" alt="Production" style="width:100%;height:100%;object-fit:cover;border-radius:20px">
    <img src="/images/professional/packaging.jpg" alt="Packaging" style="width:100%;height:100%;object-fit:cover;border-radius:20px">
  </div>
  <div style="flex:1 1 480px;min-width:0">
    <div style="color:#B72E5B;font-weight:600;font-size:14px;letter-spacing:1.5px">ABOUT US</div>
    <h2 style="font-family:Sora;font-size:40px;line-height:1.15;margin:12px 0 18px;color:#252329">Ahead together.</h2>
    <p style="font-size:17px;line-height:1.7;color:#77717A;margin:0 0 14px">We strive to make quality medicine accessible to more people. Established in 2075 BS in Jugedi, Bharatpur, Chitwan, we launched operations in Falgun 2080 BS.</p>
    <p style="font-size:17px;line-height:1.7;color:#77717A;margin:0 0 28px">Our team of experts works tirelessly to bring the latest in medical progress to patients across Nepal.</p>
    <a href="/about" style="color:#B72E5B;font-weight:600">Read our story →</a>
  </div>
</div>
<!-- products -->
<div style="padding:88px 80px">
  <div style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:end;gap:16px;margin-bottom:36px"><div><div style="color:#B72E5B;font-weight:600;font-size:14px;letter-spacing:1.5px">PRODUCTS</div><h2 style="font-family:Sora;font-size:40px;margin:10px 0 0;color:#252329">Leading products</h2></div><a href="/products" style="color:#B72E5B;font-weight:600">View all products →</a></div>
  <div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:32px"><span style="background:#B72E5B;color:#fff;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:600">All</span><span style="background:#fff;border:1px solid #EAE5E8;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">Cardiac</span><span style="background:#fff;border:1px solid #EAE5E8;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">Anti-Diabetic</span><span style="background:#fff;border:1px solid #EAE5E8;padding:10px 20px;border-radius:999px;font-size:14px;font-weight:500">General</span></div>
  <div style="display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:24px">
    @foreach ([['CARDIAC','Emflo 10','Tablet'],['CARDIAC','Rosu 10','Tablet'],['CARDIAC','Emflo 25','Tablet'],['CARDIAC','Rosu 5','Tablet']] as $p)
    <a href="/products/{{ \Illuminate\Support\Str::slug($p[1]) }}" style="display:block;background:#fff;border:1px solid #EAE5E8;border-radius:20px;overflow:hidden">
      <img src="{{ asset('images/products/' . \Illuminate\Support\Str::slug($p[1]) . '.jpg') }}" alt="{{ $p[1] }} pack shot" style="width:100%;height:100%;object-fit:cover" onerror="this.src='/images/professional/packaging.jpg'">
      <div style="padding:20px"><div style="font-size:12px;font-weight:600;color:#B72E5B">{{ $p[0] }}</div><div style="font-family:Sora;font-weight:600;font-size:20px;margin:6px 0 4px">{{ $p[1] }}</div><div style="font-size:14px;color:#77717A">{{ $p[2] }}</div></div>
    </a>
    @endforeach
  </div>
</div>
<!-- GMP -->
<div style="background:#306B83;color:#fff;padding:88px 80px;display:flex;flex-wrap:wrap;gap:64px;align-items:center">
  <div style="flex:1 1 440px;min-width:0">
    <div style="color:#F8E9EF;font-weight:600;font-size:14px;letter-spacing:1.5px">GMP</div>
    <h2 style="font-family:Sora;font-size:40px;line-height:1.15;margin:12px 0 18px">Good Manufacturing Practice, at every step.</h2>
    <p style="font-size:17px;line-height:1.7;color:#E6F0F5;margin:0">A Nepalese pharmaceutical company with a vision to be a global organization, working to cGMP guidelines and European standards.</p>
  </div>
  <div style="flex:1 1 520px;min-width:0;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:14px">
    @foreach (['Quality Management','Sanitation and Hygiene','Building and Facilities','Equipment','Raw Materials','Personnel','Validation and Qualification','Complaints'] as $g)
    <div style="background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);border-radius:14px;padding:18px 20px;display:flex;gap:12px;align-items:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F8E9EF" stroke-width="2.4" aria-hidden="true"><path d="M5 12l5 5 9-10"></path></svg><span style="font-size:15px;font-weight:500">{{ $g }}</span></div>
    @endforeach
  </div>
</div>
<!-- stats + video -->
<div style="padding:88px 80px;display:flex;flex-wrap:wrap;gap:48px;align-items:center">
  <div style="flex:1 1 520px;min-width:0;height:340px;border-radius:24px;background:#306B83;display:flex;align-items:center;justify-content:center"><a href="#" aria-label="Play company video" style="width:84px;height:84px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center"><svg width="28" height="28" viewBox="0 0 24 24" fill="#B72E5B" aria-hidden="true"><path d="M8 5v14l11-7z"></path></svg></a></div>
  <div style="flex:1 1 440px;min-width:0">
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 12px;color:#252329">Company at a glance</h2>
    <p style="font-size:16px;line-height:1.7;color:#77717A;margin:0 0 28px">See how a Chitwan factory became one of Nepal's modern pharmaceutical manufacturers.</p>
    <div style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px">
      @foreach ([['8+','Years of experience'],['100+','Dedicated team'],['70+','Product licenses'],['ISO','Certified']] as $s)
      <div style="background:#fff;border:1px solid #EAE5E8;border-radius:16px;padding:20px"><div style="font-family:Sora;font-weight:700;font-size:34px;color:#B72E5B">{{ $s[0] }}</div><div style="font-size:14px;color:#77717A">{{ $s[1] }}</div></div>
      @endforeach
    </div>
  </div>
</div>
<!-- news -->
<div style="padding:0 80px 88px">
  <div style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:end;gap:16px;margin-bottom:32px"><div><div style="color:#B72E5B;font-weight:600;font-size:14px;letter-spacing:1.5px">DISCLOSURE</div><h2 style="font-family:Sora;font-size:40px;margin:10px 0 0;color:#252329">Notices, news and stories</h2></div><a href="#" style="color:#B72E5B;font-weight:600">All updates →</a></div>
  <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
    @foreach ([['NOTICE','OMPL AGM Notice'],['NOTICE','EGM Suchana'],['STORY','औषधिमा आत्मनिर्भर नेपाल: अर्जुन श्रेष्ठको संकल्प']] as $n)
    <a href="#" style="display:block;background:#fff;border:1px solid #EAE5E8;border-radius:20px;padding:28px"><span style="background:#F8E9EF;color:#B72E5B;font-size:12px;font-weight:600;padding:6px 12px;border-radius:999px">{{ $n[0] }}</span><div style="font-family:Sora;font-weight:600;font-size:20px;line-height:1.35;margin:18px 0 10px">{{ $n[1] }}</div><div style="font-size:14px;color:#B72E5B;font-weight:600">Read more →</div></a>
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
    .hero-section{flex-direction:column!important;align-items:stretch!important;padding:40px 20px!important;gap:30px!important}
    .hero-text,.hero-image{flex:1 1 100%!important;min-width:100%!important}
    .hero-image{height:auto!important;max-height:300px!important}
    .hero-image img{height:auto!important}
    .hero-image > div{position:relative!important;left:auto!important;bottom:auto!important;width:100%!important;text-align:center;margin-top:12px!important}
    h1{font-size:32px!important;line-height:1.2!important}
    [style*="padding:88px 80px"]{padding-left:20px!important;padding-right:20px!important}
    [style*="margin:0 80px 88px"]{margin-left:0!important;margin-right:0!important}
    [style*="padding:72px 80px"]{padding-left:20px!important;padding-right:20px!important}
  }
</style>

</div>
@endsection