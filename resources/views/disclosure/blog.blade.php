@extends('layouts.app')
@section('title','Blog | Om Megashree Pharmaceuticals')
@section('content')
@php
$blogPosts = [
    [
        'title' => 'World Hypertension Day: Empowering Health through Medication and Prevention',
        'date' => 'Aug 4, 2023',
        'category' => 'Blog',
        'excerpt' => 'World Hypertension Day is a global initiative aimed at raising awareness about hypertension and promoting healthy lifestyles. Hypertension, commonly known as high blood pressure, is a prevalent health condition affecting millions of people worldwide. Hypertension has been the leading cause of death worldwide since 1990.',
        'content' => 'World Hypertension Day is a global initiative aimed at raising awareness about hypertension and promoting healthy lifestyles. Hypertension, commonly known as high blood pressure, is a prevalent health condition affecting millions of people worldwide. Hypertension has been the leading cause of death worldwide since 1990, according to a global health survey report. In this article, we will explore the importance of medication in managing hypertension, the right way to take medication, and effective preventive measures to keep blood pressure under control.

The Role of Medication in Managing Hypertension: Medication plays a crucial role in the treatment and management of hypertension. Antihypertensive medications help to regulate blood pressure and reduce the risk of associated complications such as heart disease, stroke, and kidney problems.

The Right Way to Take Medication: To ensure the efficacy of hypertension medication, follow these essential guidelines:
- Timing and consistency: Take your medication at the same time each day to maintain consistent blood pressure control.
- Follow instructions: Read the medication label carefully and follow any specific instructions provided.
- Avoid self-medication: Never self-prescribe or adjust the dosage without consulting your healthcare provider.

Preventive Measures for Hypertension:
- Adopt a balanced diet rich in fruits, vegetables, whole grains, lean proteins, and low-fat dairy products.
- Engage in regular exercise for at least 150 minutes per week.
- Maintain a healthy body weight.
- Limit alcohol and avoid tobacco products.
- Manage stress through deep breathing exercises, meditation, or yoga.',
        'url' => 'https://ommegashreepharmaceuticals.com/world-hypertension-day-empowering-health-through-medication-and-prevention-2/',
        'image' => null,
    ],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Disclosure &nbsp;/&nbsp; Blog</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">BLOG</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Blog</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Company stories, health insights and product updates from Om Megashree Pharmaceuticals.</p>
  </div>

  <!-- blog grid -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">LATEST POSTS</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">From our blog</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
      @foreach ($blogPosts as $post)
      <a href="{{ $post['url'] }}" target="_blank" style="display:block;background:#fff;border:1px solid #EBDDE1;border-radius:24px;overflow:hidden;text-decoration:none">
        <img src="/images/professional/blog.jpg" alt="Blog post" style="width:100%;height:100%;object-fit:cover" onerror="this.src='/images/professional/blog.jpg'">
        <div style="padding:24px">
          <div style="font-size:12px;font-weight:600;color:#BE3057;letter-spacing:1px;margin-bottom:6px">{{ $post['category'] }} &middot; {{ $post['date'] }}</div>
          <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35;margin-bottom:10px">{{ $post['title'] }}</div>
          <div style="font-size:14px;line-height:1.7;color:#5A4E50">{{ $post['excerpt'] }}</div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection
