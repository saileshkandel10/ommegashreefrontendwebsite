@extends('layouts.app')
@section('title','Department')
@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
  <h1 class="text-3xl font-bold text-[#B72E5B]">{{ ucwords(str_replace('-',' ',$slug)) }}</h1>
  <p class="mt-4 text-[#77717A]">Department overview.</p>
</div>
@endsection