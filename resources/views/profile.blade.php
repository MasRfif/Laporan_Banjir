@extends('layouts.app')
@section('title', 'Profil Petugas')
@section('content')
<div class="card shadow-sm"><div class="card-header">Profil Petugas</div><div class="card-body">
<p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
<p><strong>Email:</strong> {{ Auth::user()->email }}</p>
<p class="mb-0"><strong>Akun dibuat:</strong> {{ Auth::user()->created_at->diffForHumans() }}</p>
</div></div>
@endsection
