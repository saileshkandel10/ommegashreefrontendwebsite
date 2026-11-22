@extends('layouts.app')
@section('title','Gallery | Om Megashree Pharmaceuticals')
@section('content')
@php
$gallery = [
    ['title' => '8T5A6146', 'img' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/8T5A6146-400x284.jpg', 'full' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/8T5A6146-scaled.jpg'],
    ['title' => '8T5A6054', 'img' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/8T5A6054-400x284.jpg', 'full' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/8T5A6054-scaled.jpg'],
    ['title' => '8T5A6145', 'img' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/8T5A6145-400x284.jpg', 'full' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/8T5A6145-scaled.jpg'],
    ['title' => 'Dematerialization Agreement', 'img' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/WhatsApp-Image-2025-06-15-at-17.13.09_4d630e36-400x284.jpg', 'full' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/WhatsApp-Image-2025-06-15-at-17.13.09_4d630e36.jpg'],
    ['title' => 'अभिनन्दन पत्र', 'img' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/WhatsApp-Image-2025-06-15-at-17.12.56_be87aab2-400x284.jpg', 'full' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/WhatsApp-Image-2025-06-15-at-17.12.56_be87aab2-scaled.jpg'],
    ['title' => 'विजनेस आउटलुक बेस्ट अवार्ड', 'img' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/WhatsApp-Image-2025-06-15-at-17.27.07_bfc04c45-400x284.jpg', 'full' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/WhatsApp-Image-2025-06-15-at-17.27.07_bfc04c45-scaled.jpg'],
    ['title' => 'Facebook Event Photo', 'img' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/492135656_1133875962086542_6057072584702179088_n-400x284.jpg', 'full' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/492135656_1133875962086542_6057072584702179088_n.jpg'],
    ['title' => 'बैङ्किङ समाचार अवार्ड - स्वदेशमै सम्भव छ', 'img' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/504446060_1167357782071693_4406952210066119062_n-400x284.jpg', 'full' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/504446060_1167357782071693_4406952210066119062_n.jpg'],
    ['title' => 'बैङ्किङ समाचार अवार्ड - स्वदेशमै सम्भव छ', 'img' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/504352410_1167357528738385_8451592288666954690_n-400x284.jpg', 'full' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/06/504352410_1167357528738385_8451592288666954690_n.jpg'],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Disclosure &nbsp;/&nbsp; Gallery</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">GALLERY</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Gallery</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Company events, awards and facility photographs from Om Megashree Pharmaceuticals.</p>
  </div>

  <!-- gallery grid -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">GALLERY IMAGES</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Company gallery</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:20px">
      @foreach ($gallery as $g)
      <a href="{{ $g['full'] }}" target="_blank" style="display:block;border-radius:22px;overflow:hidden;border:1px solid #EBDDE1;background:#fff;text-decoration:none">
        <img src="{{ $g['img'] }}" alt="{{ $g['title'] }}" style="width:100%;height:200px;object-fit:cover;display:block">
        <div style="padding:16px">
          <div style="font-family:Sora;font-weight:600;font-size:17px;color:#2E2627">{{ $g['title'] }}</div>
          <div style="color:#BE3057;font-weight:600;font-size:13px;margin-top:6px">View full image →</div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection
