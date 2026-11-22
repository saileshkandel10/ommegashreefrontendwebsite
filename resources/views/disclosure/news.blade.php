@extends('layouts.app')
@section('title','News | Om Megashree Pharmaceuticals')
@section('content')
@php
$news = [
    [
        'title' => 'युरोपको नागरिकता त्यागेर नेपाल फर्किएका अर्जुन श्रेष्ठको संकल्प : औषधिमा आत्मनिर्भर नेपाल बनाउन डेढ अर्बको लगानी',
        'date' => 'May 26, 2026',
        'excerpt' => 'Arjun Shrestha, who renounced European citizenship and returned to Nepal, is committed to making Nepal self-reliant in medicine with an investment of 1.5 billion.',
        'url' => 'https://ommegashreepharmaceuticals.com/%e0%a4%af%e0%a5%81%e0%a4%b0%e0%a5%8b%e0%a4%aa%e0%a4%95%e0%a5%8b-%e0%a4%a8%e0%a4%be%e0%a4%97%e0%a4%b0%e0%a4%bf%e0%a4%95%e0%a4%a4%e0%a4%be-%e0%a4%a4%e0%a5%8d%e0%a4%af%e0%a4%be%e0%a4%97%e0%a5%87%e0%a4%b0/',
    ],
    [
        'title' => 'बुटवलमा मुटु र फोक्सो शल्यचिकित्साको नयाँ युग: विशेषज्ञ चिकित्सकबीच अनुभव साटासाट',
        'date' => 'Apr 14, 2026',
        'excerpt' => 'A new era of heart and lung surgery in Butwal: exchange of experience among specialist doctors.',
        'url' => 'https://ommegashreepharmaceuticals.com/%e0%a4%ac%e0%a5%81%e0%a4%9f%e0%a4%b5%e0%a4%b2%e0%a4%ae%e0%a4%be-%e0%a4%ae%e0%a5%81%e0%a4%9f%e0%a5%81-%e0%a4%b0-%e0%a4%ab%e0%a5%8b%e0%a4%95%e0%a5%8d%e0%a4%b8%e0%a5%8b-%e0%a4%b6%e0%a4%b2%e0%a5%8d/',
    ],
    [
        'title' => 'मुटु तथा फोक्सो शल्यचिकित्सामा नयाँ प्रविधिबारे अन्तरक्रिया',
        'date' => 'Apr 14, 2026',
        'excerpt' => 'Interaction on new technology in heart and lung surgery.',
        'url' => 'https://ommegashreepharmaceuticals.com/%e0%a4%ae%e0%a5%81%e0%a4%9f%e0%a5%81-%e0%a4%a4%e0%a4%a5%e0%a4%be-%e0%a4%ab%e0%a5%8b%e0%a4%95%e0%a5%8d%e0%a4%b8%e0%a5%8b-%e0%a4%b6%e0%a4%b2%e0%a5%8d%e0%a4%af%e0%a4%9a%e0%a4%bf%e0%a4%95%e0%a4%bf/',
    ],
    [
        'title' => 'ओम मेगाश्री फर्मास्युटिकल्सद्वारा साधारण सभा आह्वान',
        'date' => 'Apr 14, 2026',
        'excerpt' => 'Notice of annual general meeting issued by Om Megashree Pharmaceuticals.',
        'url' => 'https://ommegashreepharmaceuticals.com/%e0%a4%93%e0%a4%ae-%e0%a4%ae%e0%a5%87%e0%a4%97%e0%a4%be%e0%a4%b6%e0%a5%8d%e0%a4%b0%e0%a5%80-%e0%a4%ab%e0%a4%b0%e0%a5%8d%e0%a4%ae%e0%a4%be%e0%a4%b8%e0%a5%8d%e0%a4%af%e0%a5%81%e0%a4%9f%e0%a4%bf-9/',
    ],
    [
        'title' => 'ओम मेगाश्रीले आफ्नै उद्योगमा जडान गर्यो ३५० किलोवाटको सौर्य विद्युत्',
        'date' => 'Jul 14, 2025',
        'excerpt' => 'Om Megashree has installed a 350 kilowatt solar power plant at its own industry.',
        'url' => 'https://ommegashreepharmaceuticals.com/%e0%a4%93%e0%a4%ae-%e0%a4%ae%e0%a5%87%e0%a4%97%e0%a4%be%e0%a4%b6%e0%a5%8d%e0%a4%b0%e0%a5%80%e0%a4%b2%e0%a5%87-%e0%a4%86%e0%a4%ab%e0%a5%8d%e0%a4%a8%e0%a5%88-%e0%a4%89%e0%a4%a6%e0%a5%8d%e0%a4%af/',
    ],
    [
        'title' => 'ओम मेगाश्रीको साधारणसभा सम्पन्न, दुई संचालक निर्विरोध निर्वाचित',
        'date' => 'Jun 22, 2025',
        'excerpt' => 'Om Megashree annual general meeting concluded, two directors elected unopposed.',
        'url' => 'https://ommegashreepharmaceuticals.com/%e0%a4%93%e0%a4%ae-%e0%a4%ae%e0%a5%87%e0%a4%97%e0%a4%be%e0%a4%b6%e0%a5%8d%e0%a4%b0%e0%a5%80%e0%a4%95%e0%a5%8b-%e0%a4%b8%e0%a4%be%e0%a4%a7%e0%a4%be%e0%a4%b0%e0%a4%a3%e0%a4%b8%e0%a4%ad%e0%a4%be/',
    ],
    [
        'title' => 'Nirbachan Information',
        'date' => 'Jun 10, 2025',
        'excerpt' => 'Election information and full list of candidates for Om Megashree Pharmaceuticals.',
        'url' => 'https://ommegashreepharmaceuticals.com/nirbachan-information/',
    ],
    [
        'title' => 'अन्तिम दिनसम्म ओम मेगाश्री फर्मास्युटिकल्सको आइपिओेमा कति पर्यो आवेदन?',
        'date' => 'Mar 17, 2025',
        'excerpt' => 'How many applications were received for the IPO of Om Megashree Pharmaceuticals by the last day?',
        'url' => 'https://ommegashreepharmaceuticals.com/%e0%a4%85%e0%a4%a8%e0%a5%8d%e0%a4%a4%e0%a4%bf%e0%a4%ae-%e0%a4%a6%e0%a4%bf%e0%a4%a8%e0%a4%b8%e0%a4%ae%e0%a5%8d%e0%a4%ae-%e0%a4%93%e0%a4%ae-%e0%a4%ae%e0%a5%87%e0%a4%97%e0%a4%be%e0%a4%b6%e0%a5%8d/',
    ],
    [
        'title' => 'औषधि उत्पादक कम्पनी ओम मेगाश्री फर्मासुटिकल्सको आईपीओ आजदेखि',
        'date' => 'Mar 11, 2025',
        'excerpt' => 'Om Megashree Pharmaceuticals IPO open from today.',
        'url' => 'https://ommegashreepharmaceuticals.com/%e0%a4%94%e0%a4%b7%e0%a4%a7%e0%a4%bf-%e0%a4%89%e0%a4%a4%e0%a5%8d%e0%a4%aa%e0%a4%be%e0%a4%a6%e0%a4%95-%e0%a4%95%e0%a4%ae%e0%a5%8d%e0%a4%aa%e0%a4%a8%e0%a5%80-%e0%a4%93%e0%a4%ae-%e0%a4%ae%e0%a5%87/',
    ],
    [
        'title' => 'ओम मेगाश्री फर्मास्युटिकल्सले फागुन २७ गतेदेखि सर्वसाधारणमा आइपिओ बिक्री गर्ने',
        'date' => 'Mar 6, 2025',
        'excerpt' => 'Om Megashree Pharmaceuticals to sell IPO to the general public from Falgun 27.',
        'url' => 'https://ommegashreepharmaceuticals.com/%e0%a4%93%e0%a4%ae-%e0%a4%ae%e0%a5%87%e0%a4%97%e0%a4%be%e0%a4%b6%e0%a5%8d%e0%a4%b0%e0%a5%80-%e0%a4%ab%e0%a4%b0%e0%a5%8d%e0%a4%ae%e0%a4%be%e0%a4%b8%e0%a5%8d%e0%a4%af%e0%a5%81%e0%a4%9f%e0%a4%bf-8/',
    ],
    [
        'title' => 'ओम मेगाश्री फर्मास्यूटिकल्सको आईपीओ बिक्री खुला, ककसले दिन पाउँछन् आवेदन?',
        'date' => 'Feb 3, 2025',
        'excerpt' => 'Om Megashree Pharmaceuticals IPO sale open, who can apply?',
        'url' => 'https://ommegashreepharmaceuticals.com/%e0%a4%93%e0%a4%ae-%e0%a4%ae%e0%a5%87%e0%a4%97%e0%a4%be%e0%a4%b6%e0%a5%8d%e0%a4%b0%e0%a5%80-%e0%a4%ab%e0%a4%b0%e0%a5%8d%e0%a4%ae%e0%a4%be%e0%a4%b8%e0%a5%8d%e0%a4%af%e0%a5%82%e0%a4%9f%e0%a4%bf-2/',
    ],
];
@endphp
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FBF8F9">
  <!-- page header -->
  <div style="background:#F9EBEF;padding:56px 80px 48px">
    <div style="font-size:14px;color:#5A4E50;margin-bottom:20px"><a href="/" style="color:#BE3057;font-weight:600">Home</a> &nbsp;/&nbsp; Disclosure &nbsp;/&nbsp; News</div>
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px">NEWS</div>
    <h1 style="font-family:Sora;font-weight:700;font-size:56px;line-height:1.15;margin:10px 0 14px;color:#2E2627;letter-spacing:-1px">News</h1>
    <p style="font-size:18px;line-height:1.6;color:#5A4E50;margin:0;max-width:640px">Latest company announcements and media coverage of Om Megashree Pharmaceuticals.</p>
  </div>

  <!-- news grid -->
  <div style="padding:0 80px 72px">
    <div style="color:#BE3057;font-weight:600;font-size:14px;letter-spacing:1.5px;margin-bottom:12px">LATEST NEWS</div>
    <h2 style="font-family:Sora;font-size:36px;margin:0 0 28px;color:#2E2627">Recent news</h2>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px">
      @foreach ($news as $n)
      <a href="{{ $n['url'] }}" target="_blank" style="display:block;background:#fff;border:1px solid #EBDDE1;border-radius:24px;overflow:hidden;text-decoration:none">
        <img src="/images/professional/news.jpg" alt="News post" style="width:100%;height:100%;object-fit:cover" onerror="this.src='/images/professional/news.jpg'">
        <div style="padding:24px">
          <div style="font-size:12px;font-weight:600;color:#BE3057;letter-spacing:1px;margin-bottom:6px">News &middot; {{ $n['date'] }}</div>
          <div style="font-family:Sora;font-weight:600;font-size:20px;color:#2E2627;line-height:1.35;margin-bottom:10px">{{ $n['title'] }}</div>
          <div style="font-size:14px;line-height:1.7;color:#5A4E50">{{ $n['excerpt'] }}</div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection
