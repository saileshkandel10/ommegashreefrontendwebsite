@extends('layouts.app')
@section('title','Disclosure | Om Megashree Pharmaceuticals')
@section('content')
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Disclosure</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">DISCLOSURE</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Disclosure</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Important company information including blog, news, notices, gallery and downloads.</p>
  </div>

  <!-- disclosure sections -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">DISCLOSURE SECTIONS</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Explore disclosures</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
      <a href="/disclosure/blog" style="display:block;background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:36px;text-decoration:none">
        <div style="width:48px;height:48px;border-radius:14px;background:#F9EBEF;color:#BE3057;display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px">B</div>
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35;margin-bottom:10px">Blog</div>
        <div style="font-size:14px;line-height:1.6;color:#5A4E50">Company stories, health insights and product updates.</div>
        <div style="margin-top:auto;color:#BE3057;font-weight:600;font-size:14px">Read blog →</div>
      </a>
      <a href="/disclosure/news" style="display:block;background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:36px;text-decoration:none">
        <div style="width:48px;height:48px;border-radius:14px;background:#F9EBEF;color:#BE3057;display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px">N</div>
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35;margin-bottom:10px">News</div>
        <div style="font-size:14px;line-height:1.6;color:#5A4E50">Latest company announcements and media coverage.</div>
        <div style="margin-top:auto;color:#BE3057;font-weight:600;font-size:14px">Read news →</div>
      </a>
      <a href="/disclosure/notice" style="display:block;background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:36px;text-decoration:none">
        <div style="width:48px;height:48px;border-radius:14px;background:#F9EBEF;color:#BE3057;display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px">!</div>
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35;margin-bottom:10px">Notice</div>
        <div style="font-size:14px;line-height:1.6;color:#5A4E50">AGM notices, shareholder communications and corporate notices.</div>
        <div style="margin-top:auto;color:#BE3057;font-weight:600;font-size:14px">Read notices →</div>
      </a>
      <a href="/disclosure/gallery" style="display:block;background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:36px;text-decoration:none">
        <div style="width:48px;height:48px;border-radius:14px;background:#F9EBEF;color:#BE3057;display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px">🖼</div>
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35;margin-bottom:10px">Gallery</div>
        <div style="font-size:14px;line-height:1.6;color:#5A4E50">Company events, awards and facility photographs.</div>
        <div style="margin-top:auto;color:#BE3057;font-weight:600;font-size:14px">View gallery →</div>
      </a>
      <a href="/disclosure/downloads" style="display:block;background:#fff;border:1px solid #EBDDE1;border-radius:24px;padding:36px;text-decoration:none">
        <div style="width:48px;height:48px;border-radius:14px;background:#F9EBEF;color:#BE3057;display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px">⬇</div>
        <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35;margin-bottom:10px">Downloads</div>
        <div style="font-size:14px;line-height:1.6;color:#5A4E50">Reports, prospectus, bulletins and financial documents.</div>
        <div style="margin-top:auto;color:#BE3057;font-weight:600;font-size:14px">Download →</div>
      </a>
    </div>
  </div>
</div>
@endsection
