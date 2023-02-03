@push('page-style')
  <link rel="stylesheet" type="text/css" href="/assets/vendor/datatables/dataTables.bootstrap5.min.css"/>
  <link rel="stylesheet" type="text/css" href="/assets/vendor/datatables/dataTables.dateTime.min.css"/>
@endpush
@extends('layout.main')
@section('contents')
  <section class="section">
    <div class="row">
      <div class="col">
        <div class="card pibk">
          <div class="card-body">
            <div class="row text-center my-3">
              <div class="col">
                <h4>Form Barang 203129</h4>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col-4">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail Kantor</h6>
                        <hr>
                        <div class="mb-2">
                          <label for="inputNomorBarang" class="form-label">Nomor Barang</label>
                          <input type="text" class="form-control" id="inputNomorBarang" name="inputNomorBarang">
                        </div>
                        <div class="mb-2">
                          <label for="selectKantorSerah" class="form-label">Kantor Serah</label>
                          <select class="form-select" id="selectKantorSerah">
                            <option value="10000">10000 - Jakarta Pusat</option>
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="mb-2">
                          <label for="selectKantorPabean" class="form-label">Kantor Pabean</label>
                          <input type="text" class="form-control" id="selectKantorPabean">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail Pelabuhan</h6>
                        <hr>
                        <div class="mb-2">
                          <label for="selectPelabuhanMuat" class="form-label">Pelabuhan Muat</label>
                          <select class="form-select" id="selectPelabuhanMuat" name="selectPelabuhanMuat">
                            <option value="IDPSB">IDPSB - Jakarta / Pos Pasar Baru (ptt)</option>
                            <option value="asdf">asdf</option>
                            <option value="ddd">ddd</option>
                          </select>
                        </div>
                        <div class="mb-2">
                          <label for="selectPelabuhanBongkar" class="form-label">Pelabuhan Bongkar</label>
                          <select class="form-select" id="selectPelabuhanBongkar" name="selectPelabuhanBongkar">
                            <option value="IDPSB">IDPSB - Jakarta / Pos Pasar Baru (ptt)</option>
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="mb-2">
                          <label for="selectGudang" class="form-label">Gudang</label>
                          <select class="form-select" id="selectGudang" name="selectGudang">
                            <option value="POSS">POSS - TPS POS INDONESIA</option>
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail Pengangkut</h6>
                        <hr>
                        <div class="mb-2">
                          <label for="selectJenisAngkutan" class="form-label">Jenis Angkutan</label>
                          <select class="form-select" id="selectJenisAngkutan" name="selectJenisAngkutan">
                            <option value="3">3 - Darat</option>
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="mb-2">
                          <label for="inputNamaPengangkut" class="form-label">Nama Pengangkut</label>
                          <input type="text" class="form-control" id="inputNamaPengangkut"
                            name="inputNamaPengangkut">
                        </div>
                        <div class="mb-2">
                          <label for="inputNomorAngkutan" class="form-label">Nomor Angkutan/Penerbangan</label>
                          <input type="text" class="form-control" id="inputNomorAngkutan"
                            name="inputNomorAngkutan">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail BC 1.1</h6>
                        <hr>
                        <div class="row">
                          <div class="col-4">
                            <div class="col-border">
                              <div class="mb-2">
                                <label for="inputNoBC" class="form-label">Nomor BC 1.1</label>
                                <input type="text" class="form-control" id="inputNoBC" name="inputNoBC">
                              </div>
                              <div class="mb-2">
                                <label for="inputTglBC" class="form-label">Tanggal BC 1.1</label>
                                <input type="date" placeholder="yyyy/mm/dd" class="form-control"
                                  id="inputTglBC" name="inputTglBC">
                              </div>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="col-border">
                              <div class="mb-2">
                                <label for="inputNoPOSBC" class="form-label">Nomor POS BC 1.1</label>
                                <input type="text" class="form-control" id="inputNoPOSBC" name="inputNoPOSBC">
                              </div>
                              <div class="mb-2">
                                <label for="inputNoSubPOSBC" class="form-label">Nomor SubPOS BC 1.1</label>
                                <input type="text" class="form-control" id="inputNoSubPOSBC"
                                  name="inputNoSubPOSBC">
                              </div>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="col-border">
                              <div class="mb-2">
                                <label for="inputNoSub2POSBC" class="form-label">Nomor Sub SubPOS BC 1.1</label>
                                <input type="text" class="form-control" id="inputNoSub2POSBC"
                                  name="inputNoSub2POSBC">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col-6">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail Pemberitahu</h6>
                        <hr>
                        <div class="mb-2">
                          <label for="selectJenisIDPemberitahu" class="form-label">Jenis ID Pemberitahu</label>
                          <select class="form-select" id="selectJenisIDPemberitahu"
                            name="selectJenisIDPemberitahu">
                            <option value="">5 - NPWP 15 Digit</option>
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="mb-2">
                          <label for="inputNoIDPemberitahu" class="form-label">No. ID Pemberitahu</label>
                          <input type="text" class="form-control" id="inputNoIDPemberitahu"
                            name="inputNoIDPemberitahu">
                        </div>
                        <div class="mb-2">
                          <label for="inputNamaPemberitahu" class="form-label">Nama Pemberitahu</label>
                          <input type="text" class="form-control" id="inputNamaPemberitahu"
                            name="inputNamaPemberitahu">
                        </div>
                        <div class="mb-2">
                          <label for="inputAlamatPemberitahu" class="form-label">Alamat Pemberitahu</label>
                          <input type="text" class="form-control" id="inputAlamatPemberitahu"
                            name="inputAlamatPemberitahu">
                        </div>
                        <div class="mb-2">
                          <label for="inputNoIzinPemberitahu" class="form-label">No. Izin Pemberitahu</label>
                          <input type="text" class="form-control" id="inputNoIzinPemberitahu"
                            name="inputNoIzinPemberitahu">
                        </div>
                        <div class="mb-2">
                          <label for="inputTglIzinPemberitahu" class="form-label">Tanggal Izin Pemberitahu</label>
                          <input type="date" class="form-control" id="inputTglIzinPemberitahu"
                            name="inputTglIzinPemberitahu">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail Master/House</h6>
                        <hr>
                        <div class="mb-2">
                          <label for="inputNoMasterBLAWB" class="form-label">No. Master BLAWB</label>
                          <input type="text" class="form-control" id="inputNoMasterBLAWB"
                            name="inputNoMasterBLAWB">
                        </div>
                        <div class="mb-2">
                          <label for="inputTglMasterBLAWB" class="form-label">Tanggal Master BLAWB</label>
                          <input type="text" class="form-control" id="inputTglMasterBLAWB"
                            name="inputTglMasterBLAWB">
                        </div>
                        <div class="mb-2">
                          <label for="inputNoHouseBLAWB" class="form-label">Nomor House BLAWB</label>
                          <input type="text" class="form-control" id="inputNoHouseBLAWB"
                            name="inputNoHouseBLAWB">
                        </div>
                        <div class="mb-2">
                          <label for="inputTglHouseBLAWB" class="form-label">Tanggal House BLAWB</label>
                          <input type="text" class="form-control" id="inputTglHouseBLAWB"
                            name="inputTglHouseBLAWB">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail Pengirim</h6>
                        <hr>
                        <div class="mb-2">
                          <label for="inputNamaPengirim" class="form-label">Nama Pengirim</label>
                          <input type="text" class="form-control" id="inputNamaPengirim"
                            name="inputNamaPengirim">
                        </div>
                        <div class="mb-2">
                          <label for="inputAlamatPengirim" class="form-label">Alamat Pengirim</label>
                          <input type="text" class="form-control" id="inputAlamatPengirim"
                            name="inputAlamatPengirim">
                        </div>
                        <div class="mb-2">
                          <label for="inputAsalNegara" class="form-label">Asal Negara</label>
                          <input type="text" class="form-control" id="inputAsalNegara" name="inputAsalNegara">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail Penerima</h6>
                        <hr>
                        <div class="mb-2">
                          <label for="selectJenisIDPenerima" class="form-label">Jenis ID Penerima</label>
                          <select class="form-select" id="selectJenisIDPenerima" name="selectJenisIDPenerima">
                            <option value="5">5 - NPWP 15 Digit</option>
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                        </div>
                        <div class="mb-2">
                          <label for="inputNoIDPenerima" class="form-label">No. ID Penerima</label>
                          <input type="text" class="form-control" id="inputNoIDPenerima"
                            name="inputNoIDPenerima">
                        </div>
                        <div class="mb-2">
                          <label for="inputNamaPenerima" class="form-label">Nama Penerima</label>
                          <input type="text" class="form-control" id="inputNamaPenerima"
                            name="inputNamaPenerima">
                        </div>
                        <div class="mb-2">
                          <label for="inputAlamatPenerima" class="form-label">Alamat Penerima</label>
                          <input type="text" class="form-control" id="inputAlamatPenerima"
                            name="inputAlamatPenerima">
                        </div>
                        <div class="mb-2">
                          <label for="inputNoTeleponPenerima" class="form-label">No. Telepon Penerima</label>
                          <input type="text" class="form-control" id="inputNoTeleponPenerima"
                            name="inputNoTeleponPenerima">
                        </div>
                        <div class="mb-2">
                          <label for="inputNegaraTujuan" class="form-label">Negara Tujuan</label>
                          <input type="text" class="form-control" id="inputNegaraTujuan"
                            name="inputNegaraTujuan">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col-4">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail Kiriman</h6>
                        <hr>
                        <div class="mb-2">
                          <label for="inputSeriBarang" class="form-label">Seri Barang</label>
                          <input type="text" class="form-control" id="inputSeriBarang" name="inputSeriBarang">
                        </div>
                        <div class="mb-2">
                          <label for="inputHSCODE" class="form-label">HSCODE</label>
                          <input type="text" class="form-control" id="inputHSCODE" name="inputHSCODE">
                        </div>
                        <div class="mb-2">
                          <label for="inputUraianBarang" class="form-label">Uraian Barang</label>
                          <input type="text" class="form-control" id="inputUraianBarang"
                            name="inputUraianBarang">
                        </div>
                        <div class="mb-2">
                          <label for="inputNegaraKirim" class="form-label">Negara Kirim</label>
                          <input type="text" class="form-control" id="inputNegaraKirim"
                            name="inputNegaraKirim">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card card-form ">
                      <div class="card-body">
                        <h6 class="card-title">Detail Kemasan</h6>
                        <hr>
                        <div class="mt-3 mb-3">
                          <div class="row">
                            <label for="inputJumlahKemasan" class="form-label">Kemasan</label>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <input type="text" class="form-control" id="inputJumlahKemasan"
                                name="inputJumlahKemasan">
                            </div>
                            <div class="col-9">
                              <select class="form-select" id="selectJenisKemasan" name="selectJenisKemasan">
                                <option value="Package" selected>Package</option>
                                <option value=""></option>
                                <option value=""></option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="mb-2">
                          <div class="row">
                            <label for="inputJumlahSatuan" class="form-label">Satuan</label>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <input type="text" class="form-control" id="inputJumlahSatuan"
                                name="inputJumlahSatuan">
                            </div>
                            <div class="col-9">
                              <select class="form-select" id="selectJenisSatuan" name="selectJenisSatuan">
                                <option value="Pieces" selected>Pieces</option>
                                <option value=""></option>
                                <option value=""></option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail Nilai/Berat</h6>
                        <hr>
                        <div class="mb-2">
                          <label for="inputFobBarang" class="form-label">Fob Barang</label>
                          <input type="text" class="form-control" id="inputFobBarang" name="inputFobBarang">
                        </div>
                        <div class="mb-2">
                          <label for="inputAsuransiBarang" class="form-label">Asuransi Barang</label>
                          <input type="text" class="form-control" id="inputAsuransiBarang"
                            name="inputAsuransiBarang">
                        </div>
                        <div class="mb-2">
                          <label for="inputNettoBarang" class="form-label">Netto Barang</label>
                          <input type="text" class="form-control" id="inputNettoBarang"
                            name="inputNettoBarang">
                        </div>
                        <div class="mb-2">
                          <label for="inputFreightBarang" class="form-label">Freight Barang</label>
                          <input type="text" class="form-control" id="inputFreightBarang"
                            name="inputFreightBarang">
                        </div>
                        <div class="mb-2">
                          <label for="inputCIFBarang" class="form-label">CIF Barang</label>
                          <input type="text" class="form-control" id="inputCIFBarang" name="inputCIFBarang">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="card card-form">
                      <div class="card-body">
                        <h6 class="card-title">Detail Tarif/Bea</h6>
                        <hr>
                        <div class="row">
                          <div class="col-3">
                            <div class="col-border">
                              <div class="mb-2">
                                <label for="inputJenisTarifBM" class="form-label">Jenis Tarif BM</label>
                                <input type="text" class="form-control" id="inputJenisTarifBM"
                                  name="inputJenisTarifBM">
                              </div>
                              <div class="mb-2">
                                <label for="inputTarifBM" class="form-label">Tarif BM</label>
                                <input type="text" class="form-control" id="inputTarifBM" name="inputTarifBM">
                              </div>
                              <div class="mb-2">
                                <label for="inputNilaiBM" class="form-label">Nilai BM</label>
                                <input type="text" class="form-control" id="inputNilaiBM" name="inputNilaiBM">
                              </div>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="col-border">
                              <div class="mb-2">
                                <label for="inputJenisTarifBMAD" class="form-label">Jenis Tarif BMAD</label>
                                <input type="text" class="form-control" id="inputJenisTarifBMAD"
                                  name="inputJenisTarifBMAD">
                              </div>
                              <div class="mb-2">
                                <label for="inputTarifBMAD" class="form-label">Tarif BMAD</label>
                                <input type="text" class="form-control" id="inputTarifBMAD"
                                  name="inputTarifBMAD">
                              </div>
                              <div class="mb-2">
                                <label for="inputNilaiBMAD" class="form-label">Nilai BMAD</label>
                                <input type="text" class="form-control" id="inputNilaiBMAD"
                                  name="inputNilaiBMAD">
                              </div>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="col-border">
                              <div class="mb-2">
                                <label for="inputJenisTarifBMTP" class="form-label">Jenis Tarif BMTP</label>
                                <input type="text" class="form-control" id="inputJenisTarifBMTP"
                                  name="inputJenisTarifBMTP">
                              </div>
                              <div class="mb-2">
                                <label for="inputTarifBMTP" class="form-label">Tarif BMTP</label>
                                <input type="text" class="form-control" id="inputTarifBMTP"
                                  name="inputTarifBMTP">
                              </div>
                              <div class="mb-2">
                                <label for="inputNilaiBMTP" class="form-label">Nilai BMTP</label>
                                <input type="text" class="form-control" id="inputNilaiBMTP"
                                  name="inputNilaiBMTP">
                              </div>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="col-border">
                              <div class="mb-2">
                                <label for="inputTarifPPN" class="form-label">Tarif PPN</label>
                                <input type="text" class="form-control" id="inputTarifPPN"
                                  name="inputTarifPPN">
                              </div>
                              <div class="mb-2">
                                <label for="inputNilaiPPNBarang" class="form-label">Nilai PPN Barang</label>
                                <input type="text" class="form-control" id="inputNilaiPPNBarang"
                                  name="inputNilaiPPNBarang">
                              </div>
                              <div class="mb-2">
                                <label for="inputTarifPPNBM" class="form-label">Tarif PPNBM</label>
                                <input type="text" class="form-control" id="inputTarifPPNBM"
                                  name="inputTarifPPNBM">
                              </div>
                              <div class="mb-2">
                                <label for="inputNilaiPPNBMBarang" class="form-label">Nilai PPNBM Barang</label>
                                <input type="text" class="form-control" id="inputNilaiPPNBMBarang"
                                  name="inputNilaiPPNBMBarang">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
    $(document).ready(function () {
      $("#btnBrowseData").click(function (e) { 
        e.preventDefault();

        $(".table-responsive").show();

        $.ajax({
          type: "post",
          url: "{{ route('getData') }}",
          data: {
            tglAwal: $("#selectTglFrom").val(),
            tglAkhir: $("#selectTglTo").val(),
            "_token": "{{ csrf_token() }}"
          },
          dataType: "json",
          success: function (response) {
            if(response.status == 1) {
              Swal.fire({
                title: 'Success!',
                text: 'Data ditemukan',
                icon: 'success'
              });
              $('#table-data tbody').html(response.data);
              // $("#table-data").DataTable();
            } else {
              Swal.fire({
                title: 'Not found!',
                text: response.data,
                icon: 'error'
              });
              // $("#table-data").DataTable();
            }
          },
          complete: function(response) {
            $("#table-data").DataTable();
          },
          error: function(xhr, status, error) {
            Swal.fire({
              title: 'Connection Error!',
              text: xhr.responseText,
              icon: 'error'
            });
          }
        });
      });
    });
  </script>
@endpush