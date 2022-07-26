@extends('layouts.admin')
@section('content')

  <section class="section">
    <div class="section-header">
      <h1>Pesan</h1>
    </div>
<div class="section-body">
  <div class="card">
    <div class="card-body">
      <form method="post">
        <input type="hidden" name="csrf_token" value="b18c6347018dae743609a832581279e0"/>
                 <div class="form-group">
                    <label>Layanan *</label>
                      <select class="form-control" name="service" id="service">
                        <option value="">Pilih kategori dahulu...</option>
                      </select>
                 </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>Harga/K</label>
                       <div class="input-group">
                          <div class="input-group-addon">
                            <span class="input-group-text">Rp</span>
                          </div>
                          <span class="form-control" id="price">0</span>
                        </div>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Min. Pesan</label>
                      <span class="form-control" id="min">0</span>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Maks. Pesan</label>
                      <span class="form-control" id="max">0</span>
                  </div>
                </div>
               <div class="form-group">
                <label>Target *</label>
                  <input type="text" class="form-control" name="target" value="">
               </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Jumlah Pesan *</label>
                    <input type="number" class="form-control" name="quantity" id="quantity">
                </div>
                <div class="form-group col-md-6">
                  <label>Total Harga</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span class="input-group-text">Rp</span>
                      </div>
                        <span class="form-control" id="total-price">0</span>
                    </div>
                </div>
              </div>
              <button type="reset" class="btn btn-danger">Reset</button>
              <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
</div>
  </section>
@endsection