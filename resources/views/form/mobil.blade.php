@extends('layout.form-layout')
@section('card-title')
    <h2 class="card-title text-muted">Mobil</h2>
@endsection
@section('input-value')
    <input type="hidden" value="{{ base64_encode(1) }}" name="jenis_cicilan">
@endsection
