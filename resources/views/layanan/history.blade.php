@extends('layouts.admin')
@section('content')

  <section class="section">
    <div class="section-header">
      <h1>History Pesan</h1>
    </div>
<div class="section-body">
  <div class="card">
    <div class="card-body">
      <p>{{$pesan}}</p>
    </div>
  </div>
</div>
  </section>
@endsection