@push('page-style')
  <link rel="stylesheet" type="text/css" href="/assets/vendor/datatables/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="/assets/vendor/datatables/dataTables.dateTime.min.css" />
@endpush
@extends('layout.main')
@section('contents')
  <section class="section">
    <div class="row">
      <div class="col">
        <div class="card pibk">
          <div class="card-body">
            <div class="card mt-4 final-form">
              <div class="card-body">
                <fieldset disabled>
                  <div class="row text-center my-3">
                    <div class="col">
                      <h5 class="fw-semibold">PIBK {{ $data["nomorBarang"] }}</h5>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                      <div class="row mb-2">
                        <h6 class="form-title">Detail Kantor</h6>
                      </div>
                      <div class="row mb-2">
                        <label for="readNomorBarang" class="col-form-label col-md-5 col-xxl-4">Nomor Barang</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNomorBarang" name="readNomorBarang" value="{{ $data["nomorBarang"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readKantorSerah" class="col-form-label col-md-5 col-xxl-4">Kantor Serah</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readKantorSerah" name="readKantorSerah" value="{{ $data["kodeKantor"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readKantorPabean" class="col-form-label col-md-5 col-xxl-4">Kantor Pabean</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readKantorPabean" name="readKantorPabean">
                        </div>
                      </div>
                    </div>
                    <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                      <div class="row mb-2">
                        <h6 class="form-title">Detail Pelabuhan</h6>
                      </div>
                      <div class="row mb-2">
                        <label for="readPelabuhanMuat" class="col-form-label col-md-5 col-xxl-4">Pelabuhan Muat</label>
                        <div class="col-md-7 col-xxl-8">
                          <input class="form-control" id="readPelabuhanMuat" name="readPelabuhanMuat" value="{{ $data["kodePelMuat"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readPelabuhanBongkar" class="col-form-label col-md-5 col-xxl-4">Pelabuhan
                          Bongkar</label>
                        <div class="col-md-7 col-xxl-8">
                          <input class="form-control" id="readPelabuhanBongkar" name="readPelabuhanBongkar" value="{{ $data["kodePelBongkar"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readGudang" class="col-form-label col-md-5 col-xxl-4">Gudang</label>
                        <div class="col-md-7 col-xxl-8">
                          <input class="form-control" id="readGudang" name="readGudang" value="{{ $data["kodeGudang"] }}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-1">
                    <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                      <div class="row mb-2">
                        <h6 class="form-title" class="form-title">Detail Pengangkut</h6>
                      </div>
                      <div class="row mb-2">
                        <label for="readJenisAngkutan" class="col-form-label col-md-5 col-xxl-4">Jenis Angkutan</label>
                        <div class="col-md-7 col-xxl-8">
                          <input class="form-control" id="readJenisAngkutan" name="readJenisAngkutan" value="{{ $data["kodeJenisAngkut"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNamaPengangkut" class="col-form-label col-md-5 col-xxl-4">Nama Pengangkut</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNamaPengangkut" name="readNamaPengangkut" value="{{ $data["namaPengangkut"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNomorAngkutan" class="col-form-label col-md-5 col-xxl-4">Nomor
                          Angkutan/Penerbangan</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNomorAngkutan"
                            name="readNomorAngkutan" value="{{ $data["nomorFlight"] }}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                      <div class="row mb-2">
                        <h6 class="form-title">Detail BC 1.1</h6>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoBC" class="col-form-label col-md-5 col-xxl-4">Nomor BC 1.1</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoBC" name="readNoBC" value="{{ $data["nomorBC11"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTglBC" class="col-form-label col-md-5 col-xxl-4">Tanggal BC 1.1</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTglBC"
                            name="readTglBC" value="{{ $data["tanggalBC11"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoPOSBC" class="col-form-label col-md-5 col-xxl-4">Nomor POS BC 1.1</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoPOSBC" name="readNoPOSBC" value="{{ $data["posBC11"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoSubPOSBC" class="col-form-label col-md-5 col-xxl-4">Nomor SubPOS BC
                          1.1</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoSubPOSBC" name="readNoSubPOSBC" value="">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoSub2POSBC" class="col-form-label col-md-5 col-xxl-4">Nomor Sub SubPOS BC
                          1.1</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoSub2POSBC" name="readNoSub2POSBC">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                      <div class="row mb-2">
                        <h6 class="form-title">Detail Pemberitahu</h6>
                      </div>
                      <div class="row mb-2">
                        <label for="readJenisIDPemberitahu" class="col-form-label col-md-5 col-xxl-4">Jenis ID
                          Pemberitahu</label>
                        <div class="col-md-7 col-xxl-8">
                          <input class="form-control" id="readJenisIDPemberitahu" name="readJenisIDPemberitahu">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoIDPemberitahu" class="col-form-label col-md-5 col-xxl-4">No. ID
                          Pemberitahu</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoIDPemberitahu"
                            name="readNoIDPemberitahu" value="{{ $data["npwpPemberitahu"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNamaPemberitahu" class="col-form-label col-md-5 col-xxl-4">Nama
                          Pemberitahu</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNamaPemberitahu"
                            name="readNamaPemberitahu">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readAlamatPemberitahu" class="col-form-label col-md-5 col-xxl-4">Alamat
                          Pemberitahu</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readAlamatPemberitahu"
                            name="readAlamatPemberitahu">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoIzinPemberitahu" class="col-form-label col-md-5 col-xxl-4">No. Izin
                          Pemberitahu</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoIzinPemberitahu"
                            name="readNoIzinPemberitahu">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTglIzinPemberitahu" class="col-form-label col-md-5 col-xxl-4">Tanggal Izin
                          Pemberitahu</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTglIzinPemberitahu"
                            name="readTglIzinPemberitahu">
                        </div>
                      </div>
                    </div>
                    <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                      <div class="row mb-2">
                        <h6 class="form-title">Detail Penerima</h6>
                      </div>
                      <div class="row mb-2">
                        <label for="readJenisIDPenerima" class="col-form-label col-md-5 col-xxl-4">Jenis ID
                          Penerima</label>
                        <div class="col-md-7 col-xxl-8">
                          <input class="form-control" id="readJenisIDPenerima" name="readJenisIDPenerima">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoIDPenerima" class="col-form-label col-md-5 col-xxl-4">No. ID
                          Penerima</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoIDPenerima" name="readNoIDPenerima">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNamaPenerima" class="col-form-label col-md-5 col-xxl-4">Nama
                          Penerima</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNamaPenerima" name="readNamaPenerima" value="{{ $data["namaPenerima"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readAlamatPenerima" class="col-form-label col-md-5 col-xxl-4">Alamat
                          Penerima</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readAlamatPenerima"
                            name="readAlamatPenerima" value="{{ $data["alamatPenerima"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoTeleponPenerima" class="col-form-label col-md-5 col-xxl-4">No. Telepon
                          Penerima</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoTeleponPenerima"
                            name="readNoTeleponPenerima" value="{{ $data["nomorTelpPenerima"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNegaraTujuan" class="col-form-label col-md-5 col-xxl-4">Negara
                          Tujuan</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNegaraTujuan" name="readNegaraTujuan">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-1">
                    <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                      <div class="row mb-2">
                        <h6 class="form-title">Detail Pengirim</h6>
                      </div>
                      <div class="row mb-2">
                        <label for="readNamaPengirim" class="col-form-label col-md-5 col-xxl-4">Nama
                          Pengirim</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNamaPengirim" name="readNamaPengirim" value="{{ $data["namaPengirim"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readAlamatPengirim" class="col-form-label col-md-5 col-xxl-4">Alamat
                          Pengirim</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readAlamatPengirim"
                            name="readAlamatPengirim" value="{{ $data["alamatPengirim"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readAsalNegara" class="col-form-label col-md-5 col-xxl-4">Asal Negara</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readAsalNegara" name="readAsalNegara" value="{{ $data["kodeNegaraAsal"] }}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                      <div class="row mb-2">
                        <h6 class="form-title">Detail Master/House</h6>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoMasterBLAWB" class="col-form-label col-md-5 col-xxl-4">No. Master
                          BLAWB</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoMasterBLAWB"
                            name="readNoMasterBLAWB" value="{{ $data["nomorMaster"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTglMasterBLAWB" class="col-form-label col-md-5 col-xxl-4">Tanggal Master
                          BLAWB</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTglMasterBLAWB"
                            name="readTglMasterBLAWB" value="{{ $data["tanggalMaster"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoHouseBLAWB" class="col-form-label col-md-5 col-xxl-4">Nomor House
                          BLAWB</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoHouseBLAWB" name="readNoHouseBLAWB" value="{{ $data["nomorHouse"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTglHouseBLAWB" class="col-form-label col-md-5 col-xxl-4">Tanggal House
                          BLAWB</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTglHouseBLAWB"
                            name="readTglHouseBLAWB" value="{{ $data["tanggalHouse"] }}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row justify-content-center">
                    <div class="col-6">
                      <h6 class="form-title text-center">Detail Barang</h6>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="table-responsive box-style my-2">
                        <table class="table table-striped mb-0" id="table-barang">
                          <thead class="fw-semibold text-center">
                            <tr>
                              <td>No</td>
                              <td>Seri</td>
                              <td>HSCODE</td>
                              <td>Uraian Barang</td>
                              <td>Negara Kirim</td>
                              <td>Jumlah Kemasan</td>
                              <td>Jenis Kemasan</td>
                              <td>Jumlah Satuan</td>
                              <td>Jenis Satuan</td>
                              <td>Fob Barang</td>
                              <td>Asuransi Barang</td>
                              <td>Netto Barang</td>
                              <td>Freight Barang</td>
                              <td>CIF Barang</td>
                              <td>Jenis Tarif BM</td>
                              <td>Tarif BM</td>
                              <td>Nilai BM</td>
                              <td>Jenis Tarif BMAD</td>
                              <td>Tarif BMAD</td>
                              <td>Nilai BMAD</td>
                              <td>Jenis Tarif BMTP</td>
                              <td>Tarif BMTP</td>
                              <td>Nilai BMTP</td>
                              <td>Tarif PPn</td>
                              <td>Nilai PPN Barang</td>
                              <td>Tarif PPNBm</td>
                              <td>Nilai PPNBm Barang</td>
                            </tr>
                          </thead>
                          <tbody class="text-center">
                            <?php $i = 1; ?>
                            @foreach ($data["barang"] as $barang)
                              <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $barang["seriBarang"] }}</td>
                                <td>{{ $barang["hsCode"] }}</td>
                                <td>{{ $barang["uraianBarang"] }}</td>
                                <td>{{ $data["kodeNegaraAsal"] }}</td>
                                <td>{{ $barang["jumlahKemasan"] }}</td>
                                <td>{{ $barang["jenisKemasan"] }}</td>
                                <td>{{ $barang["jumlahSatuan"] }}</td>
                                <td>{{ $barang["kodeSatuan"] }}</td>
                                <td>{{ $barang["fobBarang"] }}</td>
                                <td>{{ $barang["asuransiBarang"] }}</td>
                                <td>{{ $barang["nettoBarang"] }}</td>
                                <td>{{ $barang["freightBarang"] }}</td>
                                <td>{{ $barang["cifBarang"] }}</td>
                                <td>{{ $barang["jenisTarifBm"] }}</td>
                                <td>{{ $barang["tarifBm"] }}</td>
                                <td>{{ $barang["nilaiBm"] }}</td>
                                <td>{{ $barang["jenisTarifBmad"] }}</td>
                                <td>{{ $barang["tarifBmad"] }}</td>
                                <td>{{ $barang["nilaiBmad"] }}</td>
                                <td>{{ $barang["jenisTarifBmtp"] }}</td>
                                <td>{{ $barang["tarifBmtp"] }}</td>
                                <td>{{ $barang["nilaiBmtp"] }}</td>
                                <td>{{ $barang["tarifPpn"] }}</td>
                                <td>{{ $barang["nilaiPpn"] }}</td>
                                <td>{{ $barang["tarifPpnbm"] }}</td>
                                <td>{{ $barang["nilaiPpnbm"] }}</td>
                              </tr>
                              <?php $i++; ?>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="row mt-2 justify-content-center">
                  <div class="col text-center">
                    <a type="button" class="btn btn-style fw-bold" onclick="history.back()"><i
                      class="bi bi-arrow-left me-2"></i>Kembali</a>
                      <a type="button" class="btn btn-send fw-bold" href="send/{{ $data["nomorBarang"] }}"><i
                        class="ri-send-plane-fill me-1"></i>Kirim Data</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('page-script')
  <script type="text/javascript" src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="/assets/vendor/datatables/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" src="/assets/vendor/datatables/dataTables.dateTime.min.js"></script>
  <script>
    $(document).ready(function() {
    });
  </script>
@endpush
