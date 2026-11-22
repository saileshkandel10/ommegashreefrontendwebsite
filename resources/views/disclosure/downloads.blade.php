@extends('layouts.app')
@section('title','Downloads | Om Megashree Pharmaceuticals')
@section('content')
@php
$downloads = [
    ['title' => 'OMPL Third Quarter Report 2082 2083', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2026/05/OMPL-Third-Quarter-Report-2082-83.pdf', 'type' => 'PDF'],
    ['title' => 'OMPL Second Quarter Report 2082 2083', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2026/05/Report-1.pdf', 'type' => 'PDF'],
    ['title' => 'OMPL First Quarter Report 2082 2083', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2026/05/Next-Report-1.pdf', 'type' => 'PDF'],
    ['title' => 'वार्षिक प्रतिवेदन 2081-82 Bharshik Pratibedn', 'url' => 'https://drive.google.com/file/d/1OMvx8Yscj5VNdrTWcyUcKzgEq3_6R0lP/view', 'type' => 'PDF'],
    ['title' => '10th AGM Notice', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/12/download-1.pdf', 'type' => 'PDF'],
    ['title' => 'Statement of Financial Position – Q.E. on 32nd Ashad 2082', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/08/imageedit_10_6351446784.jpg', 'type' => 'Image'],
    ['title' => 'Barshik Pratibedan Aa.Ba. 2080-81', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/barsik-pratibedan_final.indd_.pdf', 'type' => 'PDF'],
    ['title' => 'Statement of Financial Position – Quarter Ended 31st Chaitra, 2081', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/05/1747108021_May_13_page-0008-scaled.jpg', 'type' => 'Image'],
    ['title' => 'Om Megashree Pharmaceuticals Bulletin 2081', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/04/butetin_chaitra_2081.pdf', 'type' => 'PDF'],
    ['title' => 'Announcement: Om Megashree Pharmaceuticals', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/01/Announcement_Om-Meghashree-Pharmasuticals-1.pdf', 'type' => 'PDF'],
    ['title' => 'Om Megashree Pharmaceuticals Bulletin 2080', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2024/12/bulletein.pdf', 'type' => 'PDF'],
    ['title' => 'Om Megashree Pharmaceuticals Prospectus-2081', 'url' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/03/Om-Megashree-Book-Public-Final-2.pdf', 'type' => 'PDF'],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Disclosure &nbsp;/&nbsp; Downloads</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">DOWNLOADS</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Downloads</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Reports, prospectus, bulletins and financial documents of Om Megashree Pharmaceuticals.</p>
  </div>

  <!-- downloads list -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">AVAILABLE DOCUMENTS</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Downloads</h2>
    <div style="display:flex;flex-direction:column;gap:14px">
      @foreach ($downloads as $d)
      <a href="{{ $d['url'] }}" target="_blank" style="display:flex;gap:24px;align-items:center;background:#fff;border:1px solid #EBDDE1;border-radius:20px;padding:20px 28px;text-decoration:none">
        <div style="flex:none;width:160px">
          <div style="font-family:Sora;font-weight:600;font-size:17px;color:#2E2627">{{ $d['title'] }}</div>
          <div style="font-size:12px;color:#BE3057;font-weight:600;margin-top:4px">{{ $d['type'] }} &middot; Download</div>
        </div>
        <div style="flex:1;display:flex;justify-content:flex-end">
          <span style="background:#F9EBEF;color:#BE3057;font-weight:600;font-size:13px;padding:6px 16px;border-radius:999px">Open →</span>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection
