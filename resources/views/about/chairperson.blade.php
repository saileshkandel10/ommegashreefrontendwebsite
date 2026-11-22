@extends('layouts.app')
@section('title','Chairperson Message')
@section('content')
<div style="width:100%;max-width:1440px;margin:0 auto;background:#FAF8F9">
<div style="background:#F8E9EF;padding:56px 80px 48px">
  <div style="font-size:14px;color:#77717A;margin-bottom:20px"><a href="/" style="color:#B72E5B;font-weight:600">Home</a> &nbsp;/&nbsp; About &nbsp;/&nbsp; Chairperson's Message</div>
  <div style="color:#B72E5B;font-weight:600;font-size:14px;letter-spacing:1.5px">CHAIRPERSON'S MESSAGE</div>
  <h1 style="font-family:'Noto Sans Devanagari';font-weight:700;font-size:60px;line-height:1.25;margin:8px 0 0;color:#252329">अध्यक्षको सन्देश</h1>
</div>
<div style="display:flex;flex-wrap:wrap;gap:48px;padding:56px 80px 72px;align-items:flex-start">
  <div style="flex:0 1 340px;min-width:280px;position:sticky;top:24px;display:flex;flex-direction:column;gap:24px">
    <div style="background:#fff;border:1px solid #EAE5E8;border-radius:28px;padding:32px;text-align:center">
      <img src="/images/chairperson.png" alt="Dr.(h.c) Arjun Kumar Shrestha" style="width:220px;height:220px;border-radius:50%;object-fit:cover;margin:0 auto 24px;display:block">
      <div style="font-family:Sora;font-weight:700;font-size:22px;line-height:1.25;color:#252329">Dr.(h.c) Arjun Kumar Shrestha</div>
      <div style="display:inline-block;margin-top:12px;background:#F8E9EF;color:#B72E5B;font-weight:600;font-size:13px;padding:6px 16px;border-radius:999px">Chairman</div>
      <div style="text-align:left;margin-top:24px;border-top:1px solid #EAE5E8;padding-top:20px;font-size:14px;line-height:1.6;color:#77717A">
        <div style="margin-bottom:12px"><div style="font-weight:600;color:#252329">Company</div>Om Megashree Pharmaceuticals Ltd.</div>
        <div><div style="font-weight:600;color:#252329">Roots</div>Parbat and Myagdi, Nepal</div>
      </div>
    </div>
    <div style="background:#fff;border:1px solid #EAE5E8;border-radius:24px;padding:12px">
      <div style="font-family:Sora;font-weight:600;font-size:13px;letter-spacing:1px;color:#77717A;padding:12px 16px 8px">ABOUT</div>
      @foreach (["Chairperson's Message","Our Vision and Mission","Board of Directors","Who We Are","Our Expertise","Milestones","Quality Policy"] as $i => $name)
      <a href="#" style="display:block;padding:12px 16px;border-radius:14px;font-size:15px;font-weight:500;color:{{ $i===0?'#fff':'#252329' }};background:{{ $i===0?'#B72E5B':'transparent' }}">{{ $name }}</a>
      @endforeach
    </div>
  </div>
  <div style="flex:1 1 640px;min-width:0;display:flex;flex-direction:column;gap:32px">
    <div style="background:#B72E5B;border-radius:28px;padding:48px 56px;color:#fff">
      <div style="font-family:Sora;font-weight:700;font-size:64px;line-height:.6;color:#F8E9EF">"</div>
      <div style="font-family:'Noto Sans Devanagari';font-weight:700;font-size:34px;line-height:1.5;margin:8px 0 20px">स्वास्थ्य र राष्ट्रका लागि एक सङ्कल्प</div>
      <div style="font-size:15px;color:#fff">Dr.(h.c) Arjun Kumar Shrestha, Chairman</div>
    </div>
    <div style="background:#fff;border:1px solid #EAE5E8;border-radius:28px;padding:48px 56px;font-family:'Noto Sans Devanagari';font-size:19px;line-height:2.1;color:#252329">
      <p style="margin:0 0 24px;max-width:760px">स्वास्थ्य र राष्ट्रका लागि एक सङ्कल्प भन्ने मूल नाराका साथ स्थापित ओम मेगाश्री फर्मास्युटिकल्स सामूहिक लगानी भएको बृहत् योजनासहितको उद्योग हो । मेरो व्यावसायिक यात्राको प्रारम्भ नै औषधि व्यवसायबाट भयो । यसमा मसँगै अधिकांश प्रबन्धकको पनि लामो समयसम्मको औषधि व्यवसायका अनुभव जोडिएका छन् । पर्वत र म्याग्दीको भूमिबाट विस्तारित औषधि व्यवसायले जन्माएको ओम मेगाश्री फर्मास्युटिकल्स मेरो जीवनको स्वप्न योजना हो; जसलाई मैले डोका र डोलाबाट प्राप्त आशीर्वादका रूपमा लिएको छु ।</p>
      <p style="margin:0 0 24px;max-width:760px">मानव जीवनसँग प्रत्यक्ष सरोकार राख्ने औषधिमा आम समुदायको चासो र लगानी प्रवर्धनमा अग्रणी भूमिका निर्वाह गर्दै गुणस्तरीय औषधिमा जनताको प्रत्यक्ष पहुँच स्थापित गर्नु तथा निर्यातको ठोस कार्ययोजनासहित अगाडि बढ्नुलाई हामीले हाम्रो प्रमुख दायित्व ठानेका छौँ । हामी उक्त दायित्वलाई मूर्त रूप दिन मन, वचन र कर्मले समर्पित छौँ ।</p>
      <div style="margin-top:40px;padding-top:28px;border-top:1px solid #EAE5E8;display:flex;align-items:center;gap:20px;flex-wrap:wrap">
        <div style="width:160px;height:56px;border:1.5px dashed #B72E5B;border-radius:12px;display:flex;align-items:center;justify-content:center;color:#B72E5B;font-size:12px">Arjun Kumar Shrestha</div>
        <div style="font-family:Sora"><div style="font-weight:700;font-size:17px">Dr.(h.c) Arjun Kumar Shrestha</div><div style="font-size:14px;color:#B72E5B;font-weight:600">Chairman</div></div>
      </div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:20px">
      @foreach ([['1','गुणस्तरीय औषधिमा पहुँच','Access to quality medicine for all'],['2','निर्यातको ठोस कार्ययोजना','A concrete plan for exports'],['3','मन, वचन र कर्मले समर्पित','Dedicated in thought, word and deed']] as $p)
      <div style="background:#fff;border:1px solid #EAE5E8;border-radius:22px;padding:28px"><div style="width:40px;height:40px;border-radius:12px;background:#F8E9EF;color:#B72E5B;font-family:Sora;font-weight:700;display:flex;align-items:center;justify-content:center;margin-bottom:18px">{{ $p[0] }}</div><div style="font-family:'Noto Sans Devanagari';font-weight:700;font-size:19px;line-height:1.6;color:#252329">{{ $p[1] }}</div><div style="font-size:14px;color:#77717A;margin-top:6px">{{ $p[2] }}</div></div>
      @endforeach
    </div>
    <a href="/our-vision-and-mission" style="display:flex;justify-content:space-between;align-items:center;background:#306B83;color:#fff;border-radius:22px;padding:28px 36px"><div><div style="font-size:13px;color:#F8E9EF;font-weight:600;letter-spacing:1px">NEXT</div><div style="font-family:Sora;font-weight:600;font-size:22px;margin-top:4px">Our Vision and Mission</div></div><div style="width:48px;height:48px;border-radius:50%;background:#fff;color:#B72E5B;display:flex;align-items:center;justify-content:center;font-size:22px">→</div></a>
  </div>
</div>
</div>
@endsection