@extends('layouts.app')
@section('title','Departments')
@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
  <h1 class="text-3xl font-bold text-[#B72E5B]">Our Departments</h1>
  <p class="mt-4 text-[#77717A]">Discover the teams and expertise that support our commitment to quality healthcare.</p>
  <div class="grid md:grid-cols-3 gap-6 mt-8">
    @foreach (['research-development','quality-control','quality-assurance','production','sales-marketing'] as $s)
      <a href="/departments/{{ $s }}" class="bg-white rounded-2xl p-5 shadow block">
        <div class="font-semibold text-[#252329]">{{ ucwords(str_replace('-',' ',$s)) }}</div>
      </a>
    @endforeach
  </div>
</div>
@endsection