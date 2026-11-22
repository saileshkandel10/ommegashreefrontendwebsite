@extends('layouts.app')
@section('title','Admin Login')
@section('content')
<div class="max-w-md mx-auto mt-20 bg-white p-8 rounded-2xl shadow">
  <h1 class="text-2xl font-bold text-[#B72E5B] mb-6">Admin Login</h1>
  <form method="POST" action="/admin/login" class="space-y-4">
    @csrf
    <input name="email" type="email" placeholder="Email" class="w-full px-4 py-3 rounded-xl border border-[#EAE5E8]">
    <input name="password" type="password" placeholder="Password" class="w-full px-4 py-3 rounded-xl border border-[#EAE5E8]">
    <button type="submit" class="w-full bg-[#B72E5B] text-white py-3 rounded-full font-semibold">Login</button>
  </form>
</div>
@endsection