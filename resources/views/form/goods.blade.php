@extends('layout.form-layout')
@section('card-title')
    <h2 class="card-title text-muted">Consumer Goods</h2>
@endsection
@section('input-value')
    <input type="hidden" value="{{ base64_encode(4) }}" name="jenis_cicilan">
@endsection
