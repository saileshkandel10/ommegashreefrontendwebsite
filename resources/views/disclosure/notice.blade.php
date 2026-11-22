@extends('layouts.app')
@section('title','Notice | Om Megashree Pharmaceuticals')
@section('content')
@php
$notices = [
    [
        'title' => 'OMPL AGM Notice',
        'date' => 'Nov 21, 2026',
        'excerpt' => 'Annual General Meeting notice of Om Megashree Pharmaceuticals Ltd.',
        'url' => 'https://ommegashreepharmaceuticals.com/ompl-agm-notice/',
        'file' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2026/11/OMPL-AGM-Notice-pdf.jpg',
    ],
    [
        'title' => 'EGM Suchana',
        'date' => 'Jun 28, 2026',
        'excerpt' => 'Extraordinary General Meeting notice.',
        'url' => 'https://ommegashreepharmaceuticals.com/egm-suchana/',
        'file' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2026/06/Nepal-Samachar-Patra-Publication-12th-Ashar-2083-1.pdf',
    ],
    [
        'title' => '10th AGM Notice',
        'date' => 'Jan 1, 2026',
        'excerpt' => 'Om Megashree Pharmaceuticals Ltd. Product Rate List and 10th Annual General Meeting notice.',
        'url' => 'https://ommegashreepharmaceuticals.com/10th-agm-notice/',
    ],
    [
        'title' => 'Om Megashree Pharmaceuticals Ltd. Product Rate List',
        'date' => 'Aug 18, 2025',
        'excerpt' => 'Current product rate list of Om Megashree Pharmaceuticals Ltd.',
        'url' => 'https://ommegashreepharmaceuticals.com/om-megashree-pharmaceuticals-ltd-2/',
    ],
    [
        'title' => 'OMPL-Nirbachan Talika',
        'date' => 'Jun 10, 2025',
        'excerpt' => 'OMPL election list / candidate list.',
        'url' => 'https://ommegashreepharmaceuticals.com/ompl-nirbachan-talika/',
    ],
    [
        'title' => 'AGM NOTICE',
        'date' => 'May 22, 2025',
        'excerpt' => 'Annual General Meeting notice.',
        'url' => 'https://ommegashreepharmaceuticals.com/agm-notice-2/',
    ],
    [
        'title' => 'Om Megashree Pharmaceuticals Ltd.',
        'date' => 'Mar 4, 2025',
        'excerpt' => 'Company announcement.',
        'url' => 'https://ommegashreepharmaceuticals.com/om-megashree-pharmaceuticals-ltd/',
    ],
    [
        'title' => 'Foreign Employment prospectus of OM Megashree Pharmaceuticals Ltd',
        'date' => 'Feb 3, 2025',
        'excerpt' => 'Prospectus for foreign employment opportunities.',
        'url' => 'https://ommegashreepharmaceuticals.com/foreign-employment-prospectus-of-om-megashree-pharmaceuticals-ltd/',
        'file' => 'https://ommegashreepharmaceuticals.com/wp-content/uploads/2025/02/Foerign-Employment-prospectus-of-OM-Megashree-Pharmaceuticals-Ltd-2.pdf',
    ],
    [
        'title' => 'ISSUE OPEN NOTICE OF OM MEGASHREE PHARMACEUTICALS LTD',
        'date' => 'Feb 3, 2025',
        'excerpt' => 'Issue open notice for IPO shares.',
        'url' => 'https://ommegashreepharmaceuticals.com/issue-open-notice-of-om-megashree-pharmaceuticals-ltd/',
    ],
    [
        'title' => 'Announcement Om Megashree Pharmaceuticals',
        'date' => 'Jan 23, 2025',
        'excerpt' => 'Company announcement.',
        'url' => 'https://ommegashreepharmaceuticals.com/announcement-om-megashree-pharmaceuticals/',
    ],
    [
        'title' => 'Important Notice: Right Share Purchase Opportunity for Shareholders',
        'date' => 'Oct 30, 2023',
        'excerpt' => 'Right share purchase opportunity for shareholders.',
        'url' => 'https://ommegashreepharmaceuticals.com/financial-notice/',
    ],
    [
        'title' => 'AGM Notice',
        'date' => 'Sep 20, 2023',
        'excerpt' => 'Annual General Meeting notice.',
        'url' => 'https://ommegashreepharmaceuticals.com/agm-notice/',
    ],
    [
        'title' => 'Annual General Meeting Rescheduled: New Date Confirmed for April 8th, 2023',
        'date' => 'Apr 4, 2023',
        'excerpt' => 'AGM rescheduled to April 8, 2023.',
        'url' => 'https://ommegashreepharmaceuticals.com/annual-general-meeting-rescheduled-new-date-confirmed-for-april-8th-2023/',
    ],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Disclosure &nbsp;/&nbsp; Notice</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">NOTICE</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">Notice</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">AGM notices, shareholder communications and corporate notices of Om Megashree Pharmaceuticals.</p>
  </div>

  <!-- notice list -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">LATEST NOTICES</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Corporate notices</h2>
    <div style="display:flex;flex-direction:column;gap:16px">
      @foreach ($notices as $n)
      <a href="{{ $n['url'] }}" target="_blank" style="display:flex;gap:24px;align-items:flex-start;background:#fff;border:1px solid #EBDDE1;border-radius:22px;padding:24px 28px;text-decoration:none">
        <div style="flex:none;width:120px">
          <div style="font-family:Sora;font-weight:700;font-size:22px;color:#BE3057">{{ $n['date'] }}</div>
        </div>
        <div style="flex:1;display:flex;flex-direction:column;gap:8px">
          <div style="font-family:Sora;font-weight:600;font-size:19px;color:#2E2627;line-height:1.35">{{ $n['title'] }}</div>
          <div style="font-size:14px;line-height:1.6;color:#5A4E50">{{ $n['excerpt'] }}</div>
          <div style="margin-top:auto;color:#BE3057;font-weight:600;font-size:14px">Read notice →</div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection
