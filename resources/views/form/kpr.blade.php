@extends('layout.form-layout')
@section('card-title')
    <h2 class="card-title text-muted">KPR</h2>
@endsection
@section('input-value')
    <input type="hidden" value="{{ base64_encode(3) }}" name="jenis_cicilan">
@endsection
