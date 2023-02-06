@extends('layout.main')
@section('contents')
  <section class="section">
    <div class="row">
      <div class="col">
        <form id="form-pibk" type="post">
          <div class="card pibk">
            <div class="card-body">
              <h5 class="card-title text-end"><i class="ri-file-paper-2-line me-2"></i>Form pengisian dokumen PIBK</h5>
              <hr>
              <div class="row justify-content-center px-5 py-3 text-center box-style" id="steps">
                <div class="col-sm col-xl-3 p-0 d-flex align-items-center justify-content-center step active">
                  <span>Entry Header PIBK</span>
                  <span class="step-icon">
                    <i class="bi bi-check-circle-fill"></i>
                  </span>
                </div>
                {{-- <div class="col-1 p-0 bi bi-dot d-flex align-items-center justify-content-center" style="width: 1rem"></div> --}}
                <div class="col-sm col-xl-3 p-0 d-flex align-items-center justify-content-center step">
                  <span>Entry Attribute PIBK</span>
                  <span class="step-icon">
                    <i class="bi bi-check-circle-fill"></i>
                  </span>
                </div>
                {{-- <div class="col-1 p-0 bi bi-dot d-flex align-items-center justify-content-center" style="width: 1rem"></div> --}}
                <div class="col-sm col-xl-3 p-0 d-flex align-items-center justify-content-center step">
                  <span>Entry Barang PIBK</span>
                  <span class="step-icon">
                    <i class="bi bi-check-circle-fill"></i>
                  </span>
                </div>
                {{-- <div class="col-1 p-0 bi bi-dot d-flex align-items-center justify-content-center" style="width: 1rem"></div> --}}
                <div class="col-sm col-xl-3 p-0 d-flex align-items-center justify-content-center step">
                  <span>Konfirmasi</span>
                  <span class="step-icon">
                    <i class="bi bi-check-circle-fill"></i>
                  </span>
                </div>
              </div>
              <fieldset>
                <div class="row">
                  <div class="col">
                    <div class="row my-3 justify-content-between">
                      <div class="col-6">
                        <h6 class="fw-bold">Entry Header PIBK</h6>
                      </div>
                      <div class="col-6 text-end">
                        <small>Detail Header</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md col-xl-4">
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
                      <div class="col-md col-xl-4">
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
                      <div class="col-md col-xl-4">
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
                              <div class="col-12 col-md-4 mb-3 mb-md-0">
                                <div class="col-border">
                                  <div class="mb-2">
                                    <label for="inputNoBC" class="form-label">Nomor BC 1.1</label>
                                    <input type="text" class="form-control" id="inputNoBC" name="inputNoBC">
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputTglBC" class="form-label">Tanggal BC 1.1</label>
                                    <input type="text" class="form-control" id="inputTglBC" name="inputTglBC" placeholder="yyyy-mm-dd" autocomplete="off">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-md-4 mb-3 mb-md-0">
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
                              <div class="col-12 col-md-4 mb-3 mb-md-0">
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
                    <div class="row text-center">
                      <div class="col">
                        <button type="button" class="btn btn-next btn-style" id="btnNextHeader">Selanjutnya<i
                            type="button" class="bi bi-arrow-right ms-2"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="row">
                  <div class="col">
                    <div class="row my-3 justify-content-between">
                      <div class="col-6">
                        <h6 class="fw-bold">Entry Attribute PIBK</h6>
                      </div>
                      <div class="col-6 text-end">
                        <small>Detail Attribute Header</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm col-xl-6">
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
                              <input type="text" class="form-control" id="inputTglIzinPemberitahu"
                                name="inputTglIzinPemberitahu" placeholder="yyyy-mm-dd" autocomplete="off">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm col-xl-6">
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
                                name="inputTglMasterBLAWB" placeholder="yyyy-mm-dd" autocomplete="off">
                            </div>
                            <div class="mb-2">
                              <label for="inputNoHouseBLAWB" class="form-label">Nomor House BLAWB</label>
                              <input type="text" class="form-control" id="inputNoHouseBLAWB"
                                name="inputNoHouseBLAWB">
                            </div>
                            <div class="mb-2">
                              <label for="inputTglHouseBLAWB" class="form-label">Tanggal House BLAWB</label>
                              <input type="text" class="form-control" id="inputTglHouseBLAWB"
                                name="inputTglHouseBLAWB" placeholder="yyyy-mm-dd" autocomplete="off">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm col-xl-6">
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
                      <div class="col-sm col-xl-6">
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
                    <div class="row text-center">
                      <div class="col">
                        <button type="button" class="btn btn-previous"><i
                            class="bi bi-arrow-left me-2"></i>Sebelumnya</button>
                        <button type="button" class="btn btn-next btn-style" id="btnNextAttribute">Selanjutnya<i
                            class="bi bi-arrow-right ms-2"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="row">
                  <div class="col">
                    <div class="row my-3 justify-content-between">
                      <div class="col-6">
                        <h6 class="fw-bold">Entry Barang PIBK</h6>
                      </div>
                      <div class="col-6 text-end">
                        <small>Detail Barang</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md col-xl-4">
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
                      <div class="col-md col-xl-4">
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
                      <div class="col-md col-xl-4">
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
                              <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
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
                              <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
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
                              <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
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
                              <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
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
                    <div class="row justify-content-between box-style py-2">
                      <div class="col-6"><button type="button" class="btn" id="btn-delete"><i
                            class="bi bi-backspace-fill me-2"></i>Delete Item</button></div>
                      <div class="col-6 text-end"><button type="button" class="btn" id="btn-add"><i
                            class="bi bi-save-fill me-2"></i>Add Item</button></div>
                    </div>
                    <div class="table-responsive box-style my-3">
                      <table class="table table-striped mb-0" id="table-barang">
                        <thead class="fw-semibold text-center">
                          <tr>
                            <td><input type="checkbox" id="selectAll"></td>
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
                          <tr>
                            <td><input type="checkbox" class="selectRow"></td>
                            <td>1</td>
                            <td>1</td>
                            <td>320120320</td>
                            <td>Bambu runcing</td>
                            <td>RU</td>
                            <td>1</td>
                            <td>Package</td>
                            <td>1</td>
                            <td>Pieces</td>
                            <td>100</td>
                            <td>10</td>
                            <td>1</td>
                            <td>10</td>
                            <td>120</td>
                            <td>1</td>
                            <td>11</td>
                            <td>20</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>11</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                          </tr>
                          <tr>
                            <td><input type="checkbox" class="selectRow"></td>
                            <td>2</td>
                            <td>1</td>
                            <td>320120320</td>
                            <td>Piring cantik</td>
                            <td>BR</td>
                            <td>12</td>
                            <td>Package</td>
                            <td>7</td>
                            <td>Pieces</td>
                            <td>100</td>
                            <td>10</td>
                            <td>1</td>
                            <td>10</td>
                            <td>120</td>
                            <td>1</td>
                            <td>11</td>
                            <td>20</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>11</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row text-center">
                      <div class="col">
                        <button type="button" class="btn btn-previous"><i
                            class="bi bi-arrow-left me-2"></i>Sebelumnya</button>
                        <button type="button" class="btn btn-next btn-style" id="btnNextBarang">Selanjutnya<i
                            class="bi bi-arrow-right ms-2"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="row">
                  <div class="col">
                    <div class="card mt-4 final-form">
                      <div class="card-body">
                        <div class="row text-center my-3">
                          <div class="col">
                            <h5 class="fw-semibold">Form Barang 12345678</h5>
                          </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                          <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                            <div class="row mb-2">
                              <h6 class="form-title">Detail Kantor</h6>
                            </div>
                            <div class="row mb-2">
                              <label for="readNomorBarang" class="col-form-label col-md-5 col-xxl-4">Nomor
                                Barang</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNomorBarang"
                                  name="readNomorBarang">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readKantorSerah" class="col-form-label col-md-5 col-xxl-4">Kantor
                                Serah</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readKantorSerah"
                                  name="readKantorSerah">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readKantorPabean" class="col-form-label col-md-5 col-xxl-4">Kantor
                                Pabean</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readKantorPabean"
                                  name="readKantorPabean">
                              </div>
                            </div>
                          </div>
                          <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                            <div class="row mb-2">
                              <h6 class="form-title">Detail Pelabuhan</h6>
                            </div>
                            <div class="row mb-2">
                              <label for="readPelabuhanMuat" class="col-form-label col-md-5 col-xxl-4">Pelabuhan
                                Muat</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly class="form-control" id="readPelabuhanMuat"
                                  name="readPelabuhanMuat">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readPelabuhanBongkar" class="col-form-label col-md-5 col-xxl-4">Pelabuhan
                                Bongkar</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly class="form-control" id="readPelabuhanBongkar"
                                  name="readPelabuhanBongkar">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readGudang" class="col-form-label col-md-5 col-xxl-4">Gudang</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly class="form-control" id="readGudang" name="readGudang">
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
                              <label for="readJenisAngkutan" class="col-form-label col-md-5 col-xxl-4">Jenis
                                Angkutan</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly class="form-control" id="readJenisAngkutan"
                                  name="readJenisAngkutan">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNamaPengangkut" class="col-form-label col-md-5 col-xxl-4">Nama
                                Pengangkut</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNamaPengangkut"
                                  name="readNamaPengangkut">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNomorAngkutan" class="col-form-label col-md-5 col-xxl-4">Nomor
                                Angkutan/Penerbangan</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNomorAngkutan"
                                  name="readNomorAngkutan">
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
                                <input disabled readonly type="text" class="form-control" id="readNoBC"
                                  name="readNoBC">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTglBC" class="col-form-label col-md-5 col-xxl-4">Tanggal BC 1.1</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTglBC"
                                  name="readTglBC">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNoPOSBC" class="col-form-label col-md-5 col-xxl-4">Nomor POS BC
                                1.1</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNoPOSBC"
                                  name="readNoPOSBC">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNoSubPOSBC" class="col-form-label col-md-5 col-xxl-4">Nomor SubPOS BC
                                1.1</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNoSubPOSBC"
                                  name="readNoSubPOSBC">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNoSub2POSBC" class="col-form-label col-md-5 col-xxl-4">Nomor Sub SubPOS BC
                                1.1</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNoSub2POSBC"
                                  name="readNoSub2POSBC">
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
                                <input disabled readonly class="form-control" id="readJenisIDPemberitahu"
                                  name="readJenisIDPemberitahu">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNoIDPemberitahu" class="col-form-label col-md-5 col-xxl-4">No. ID
                                Pemberitahu</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNoIDPemberitahu"
                                  name="readNoIDPemberitahu">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNamaPemberitahu" class="col-form-label col-md-5 col-xxl-4">Nama
                                Pemberitahu</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNamaPemberitahu"
                                  name="readNamaPemberitahu">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readAlamatPemberitahu" class="col-form-label col-md-5 col-xxl-4">Alamat
                                Pemberitahu</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readAlamatPemberitahu"
                                  name="readAlamatPemberitahu">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNoIzinPemberitahu" class="col-form-label col-md-5 col-xxl-4">No. Izin
                                Pemberitahu</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNoIzinPemberitahu"
                                  name="readNoIzinPemberitahu">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTglIzinPemberitahu" class="col-form-label col-md-5 col-xxl-4">Tanggal Izin
                                Pemberitahu</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control"
                                  id="readTglIzinPemberitahu" name="readTglIzinPemberitahu">
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
                                <input disabled readonly class="form-control" id="readJenisIDPenerima"
                                  name="readJenisIDPenerima">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNoIDPenerima" class="col-form-label col-md-5 col-xxl-4">No. ID
                                Penerima</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNoIDPenerima"
                                  name="readNoIDPenerima">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNamaPenerima" class="col-form-label col-md-5 col-xxl-4">Nama
                                Penerima</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNamaPenerima"
                                  name="readNamaPenerima">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readAlamatPenerima" class="col-form-label col-md-5 col-xxl-4">Alamat
                                Penerima</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readAlamatPenerima"
                                  name="readAlamatPenerima">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNoTeleponPenerima" class="col-form-label col-md-5 col-xxl-4">No. Telepon
                                Penerima</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNoTeleponPenerima"
                                  name="readNoTeleponPenerima">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNegaraTujuan" class="col-form-label col-md-5 col-xxl-4">Negara
                                Tujuan</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNegaraTujuan"
                                  name="readNegaraTujuan">
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
                                <input disabled readonly type="text" class="form-control" id="readNamaPengirim"
                                  name="readNamaPengirim">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readAlamatPengirim" class="col-form-label col-md-5 col-xxl-4">Alamat
                                Pengirim</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readAlamatPengirim"
                                  name="readAlamatPengirim">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readAsalNegara" class="col-form-label col-md-5 col-xxl-4">Asal Negara</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readAsalNegara"
                                  name="readAsalNegara">
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
                                <input disabled readonly type="text" class="form-control" id="readNoMasterBLAWB"
                                  name="readNoMasterBLAWB">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTglMasterBLAWB" class="col-form-label col-md-5 col-xxl-4">Tanggal Master
                                BLAWB</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTglMasterBLAWB"
                                  name="readTglMasterBLAWB">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNoHouseBLAWB" class="col-form-label col-md-5 col-xxl-4">Nomor House
                                BLAWB</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNoHouseBLAWB"
                                  name="readNoHouseBLAWB">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTglHouseBLAWB" class="col-form-label col-md-5 col-xxl-4">Tanggal House
                                BLAWB</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTglHouseBLAWB"
                                  name="readTglHouseBLAWB">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                          <div class="col-md col-lg-6">
                            <h6 class="form-title text-center">Detail Barang</h6>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="table-responsive box-style my-2">
                              <table class="table table-striped mb-0" id="table-barang-final">
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
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row text-center">
                  <div class="row">
                    <div class="col">
                      <button type="button" class="btn btn-previous"><i
                          class="bi bi-arrow-left me-2"></i>Sebelumnya</button>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <button type="button" class="btn btn-style" id="btn-save"><i
                          class="ri-save-2-line me-1"></i>Simpan Data</button>
                      <button type="button" class="btn btn-send" id="btn-send"><i
                          class="ri-send-plane-fill me-1"></i>Kirim Data</button>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <script>
    function scroll_to_class(element_class, removed_height) {
      var scroll_to = $(element_class).offset().top - removed_height;
      if ($(window).scrollTop() != scroll_to) {
        $('html, body').stop().animate({
          scrollTop: scroll_to
        }, 0);
      }
    }

    $(document).ready(function() {
      $('#inputTglBC').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
      });
      
      $('#inputTglIzinPemberitahu').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
      });

      $('#inputTglMasterBLAWB').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
      });

      $('#inputTglHouseBLAWB').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
      });

      $("#form-pibk fieldset:first").fadeIn('slow')

      $('#form-pibk input[type="text"], #form-pibk input[type="date"], #form-pibk select').on('focus', function() {
        $(this).removeClass('input-error');
      });

      $("#form-pibk .btn-next").click(function(e) {
        e.preventDefault();

        let parent_fieldset = $(this).parents('fieldset')
        let next_step = true
        let current_active_step = $(this).parents('#form-pibk').find('.step.active')

        // parent_fieldset.find('input[type="text"], input[type="date"], select').each(function() {
        //   if( $(this).val() == "" ) {
        //     $(this).addClass('input-error');
        //     next_step = false;
        //   }
        //   else {
        //     $(this).removeClass('input-error');
        //   }
        // });

        if (next_step) {
          let data = setObject(getTableBarangObject())
          let body = {
            data: data,
            "_token": "{{ csrf_token() }}"
          }
          saveObject(body)
          parent_fieldset.fadeOut(400, function() {
            current_active_step.removeClass('active').addClass('activated').next().addClass('active')
            $(this).next().fadeIn()
            scroll_to_class($('#form-pibk'), 20)
          });
        }
      });

      $("#form-pibk .btn-previous").click(function(e) {
        e.preventDefault();

        let current_active_step = $(this).parents('#form-pibk').find('.step.active')

        $(this).parents('fieldset').fadeOut(400, function() {
          current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
          $(this).prev().fadeIn();
          scroll_to_class($('#form-pibk'), 20);
        })
      });

      $('#btn-save').on('click', function(e) {
        e.preventDefault();

        // $(this).find('input[type="text"], input[type="date"], select').each(function() {
        //   if ($(this).val() == "") {
        //     e.preventDefault();
        //     $(this).addClass('input-error');
        //   } else {
        //     $(this).removeClass('input-error');
        //   }
        // });
      });

      $('#btn-send').on('click', function(e) {
        e.preventDefault();

        // $(this).find('input[type="text"], input[type="date"], select').each(function() {
        //   if ($(this).val() == "") {
        //     e.preventDefault();
        //     $(this).addClass('input-error');
        //   } else {
        //     $(this).removeClass('input-error');
        //   }
        // });
      });

      $("#selectAll").click(function() {
        $(".selectRow").prop("checked", $(this).prop("checked"));
      });

      $(".selectRow").click(function() {
        if (!$(this).prop("checked")) {
          $("#selectAll").prop("checked", false);
        }

        if ($(this).prop("checked")) {
          let row = $(this).parent().parent();
          let content = row.find("td:eq(1)").text();
        }
      });

      $("#btn-add").click(function(e) {
        e.preventDefault();
        let rowCount = $("#table-barang tbody tr").length;

        let inputSeriBarang = $('#inputSeriBarang').val();
        let inputHSCODE = $('#inputHSCODE').val();
        let inputUraianBarang = $('#inputUraianBarang').val();
        let inputNegaraKirim = $('#inputNegaraKirim').val();
        let inputJumlahKemasan = $('#inputJumlahKemasan').val();
        let selectJenisKemasan = $('#selectJenisKemasan').val();
        let inputJumlahSatuan = $('#inputJumlahSatuan').val();
        let selectJenisSatuan = $('#selectJenisSatuan').val();
        let inputFobBarang = $('#inputFobBarang').val();
        let inputAsuransiBarang = $('#inputAsuransiBarang').val();
        let inputNettoBarang = $('#inputNettoBarang').val();
        let inputFreightBarang = $('#inputFreightBarang').val();
        let inputCIFBarang = $('#inputCIFBarang').val();
        let inputJenisTarifBM = $('#inputJenisTarifBM').val();
        let inputTarifBM = $('#inputTarifBM').val();
        let inputNilaiBM = $('#inputNilaiBM').val();
        let inputJenisTarifBMAD = $('#inputJenisTarifBMAD').val();
        let inputTarifBMAD = $('#inputTarifBMAD').val();
        let inputNilaiBMAD = $('#inputNilaiBMAD').val();
        let inputJenisTarifBMTP = $('#inputJenisTarifBMTP').val();
        let inputTarifBMTP = $('#inputTarifBMTP').val();
        let inputNilaiBMTP = $('#inputNilaiBMTP').val();
        let inputTarifPPN = $('#inputTarifPPN').val();
        let inputNilaiPPNBarang = $('#inputNilaiPPNBarang').val();
        let inputTarifPPNBM = $('#inputTarifPPNBM').val();
        let inputNilaiPPNBMBarang = $('#inputNilaiPPNBMBarang').val();

        let newRow = $('<tr>')
        newRow.append('<td><input type="checkbox" class="selectRow"></td>');
        newRow.append(`<td>${rowCount + 1}</td>`);
        newRow.append('<td>' + inputSeriBarang + '</td>');
        newRow.append('<td>' + inputHSCODE + '</td>');
        newRow.append('<td>' + inputUraianBarang + '</td>');
        newRow.append('<td>' + inputNegaraKirim + '</td>');
        newRow.append('<td>' + inputJumlahKemasan + '</td>');
        newRow.append('<td>' + selectJenisKemasan + '</td>');
        newRow.append('<td>' + inputJumlahSatuan + '</td>');
        newRow.append('<td>' + selectJenisSatuan + '</td>');
        newRow.append('<td>' + inputFobBarang + '</td>');
        newRow.append('<td>' + inputAsuransiBarang + '</td>');
        newRow.append('<td>' + inputNettoBarang + '</td>');
        newRow.append('<td>' + inputFreightBarang + '</td>');
        newRow.append('<td>' + inputCIFBarang + '</td>');
        newRow.append('<td>' + inputJenisTarifBM + '</td>');
        newRow.append('<td>' + inputTarifBM + '</td>');
        newRow.append('<td>' + inputNilaiBM + '</td>');
        newRow.append('<td>' + inputJenisTarifBMAD + '</td>');
        newRow.append('<td>' + inputTarifBMAD + '</td>');
        newRow.append('<td>' + inputNilaiBMAD + '</td>');
        newRow.append('<td>' + inputJenisTarifBMTP + '</td>');
        newRow.append('<td>' + inputTarifBMTP + '</td>');
        newRow.append('<td>' + inputNilaiBMTP + '</td>');
        newRow.append('<td>' + inputTarifPPN + '</td>');
        newRow.append('<td>' + inputNilaiPPNBarang + '</td>');
        newRow.append('<td>' + inputTarifPPNBM + '</td>');
        newRow.append('<td>' + inputNilaiPPNBMBarang + '</td>');
        newRow.append('</tr>')

        $("#table-barang tbody").append(newRow);

        // Swal.fire({
        //   title: 'Success!',
        //   text: 'Insert success',
        //   icon: 'success'
        // });
      })

      $("#btn-delete").click(function(e) {
        e.preventDefault();

        let checkedRows = $('#table-barang input:checked.selectRow').parent().parent()
        checkedRows.remove();
        updateIndex()
      });

      function updateIndex() {
        $('#table-barang tbody tr').each(function(index) {
          $(this).find('td:eq(1)').text(index + 1);
        })
      }

      function getTableBarangObject() {
        let table = [];
        $("#table-barang tbody tr").each(function() {
          let row = {};
          $(this).find("td").each(function(index) {
            switch (index) {
              case 0:
                break;
              case 1:
                break;
              case 2:
                row.seriBarang = $(this).text();
                break;
              case 3:
                row.hsCode = $(this).text();
                break;
              case 4:
                row.uraianBarang = $(this).text();
                break;
              case 5:
                break;
              case 6:
                row.jumlahKemasan = $(this).text();
                break;
              case 7:
                row.jenisKemasan = $(this).text();
                break;
              case 8:
                row.jumlahSatuan = $(this).text();
                break;
              case 9:
                row.kodeSatuan = $(this).text();
                break;
              case 10:
                row.fobBarang = $(this).text();
                break;
              case 11:
                row.asuransiBarang = $(this).text();
                break;
              case 12:
                row.nettoBarang = $(this).text();
                break;
              case 13:
                row.freightBarang = $(this).text();
                break;
              case 14:
                row.cifBarang = $(this).text();
                break;
              case 15:
                row.jenisTarifBm = $(this).text();
                break;
              case 16:
                row.tarifBm = $(this).text();
                break;
              case 17:
                row.nilaiBm = $(this).text();
                break;
              case 18:
                row.jenisTarifBmad = $(this).text();
                break;
              case 19:
                row.tarifBmad = $(this).text();
                break;
              case 20:
                row.nilaiBmad = $(this).text();
                break;
              case 21:
                row.jenisTarifBmtp = $(this).text();
                break;
              case 22:
                row.tarifBmtp = $(this).text();
                break;
              case 23:
                row.nilaiBmtp = $(this).text();
                break;
              case 24:
                row.tarifPpn = $(this).text();
                break;
              case 25:
                row.nilaiPpn = $(this).text();
                break;
              case 26:
                row.tarifPpnbm = $(this).text();
                break;
              case 27:
                row.nilaiPpnbm = $(this).text();
                break;
            }
          });
          table.push(row);
        });

        return table;
      }

      function setConfirmationForm() {
        $("#readNomorBarang").val($('#inputNomorBarang').val());
        $("#readKantorSerah").val($("select option[value='" + $('#selectKantorSerah').val() + "']").text());
        $("#readKantorPabean").val($('#inputKantorPabean').val());
        $("#readPelabuhanMuat").val($("select option[value='" + $('#selectPelabuhanMuat').val() + "']").text());
        $("#readPelabuhanBongkar").val($("select option[value='" + $('#selectPelabuhanBongkar').val() + "']").text());
        $("#readGudang").val($("select option[value='" + $('#selectGudang').val() + "']").text());
        $("#readJenisAngkutan").val($("select option[value='" + $('#selectJenisAngkutan').val() + "']").text());
        $("#readNamaPengangkut").val($('#inputNamaPengangkut').val());
        $("#readNomorAngkutan").val($('#inputNomorAngkutan').val());
        $("#readNoBC").val($('#inputNoBC').val());
        $("#readTglBC").val($('#inputTglBC').val());
        $("#readNoPOSBC").val($('#inputNoPOSBC').val());
        $("#readNoSubPOSBC").val($('#inputNoSubPOSBC').val());
        $("#readNoSub2POSBC").val($('#inputNoSub2POSBC').val());
        $("#readJenisIDPemberitahu").val($("select option[value='" + $('#selectJenisIDPemberitahu').val() + "']").text());
        $("#readNoIDPemberitahu").val($('#inputNoIDPemberitahu').val());
        $("#readNamaPemberitahu").val($('#inputNamaPemberitahu').val());
        $("#readAlamatPemberitahu").val($('#inputAlamatPemberitahu').val());
        $("#readNoIzinPemberitahu").val($('#inputNoIzinPemberitahu').val());
        $("#readTglIzinPemberitahu").val($('#inputTglIzinPemberitahu').val());
        $("#readJenisIDPenerima").val($("select option[value='" + $('#selectJenisIDPenerima').val() + "']").text());
        $("#readNoIDPenerima").val($('#inputNoIDPenerima').val());
        $("#readNamaPenerima").val($('#inputNamaPenerima').val());
        $("#readAlamatPenerima").val($('#inputAlamatPenerima').val());
        $("#readNoTeleponPenerima").val($('#inputNoTeleponPenerima').val());
        $("#readNegaraTujuan").val($('#inputNegaraTujuan').val());
        $("#readNamaPengirim").val($('#inputNamaPengirim').val());
        $("#readAlamatPengirim").val($('#inputAlamatPengirim').val());
        $("#readAsalNegara").val($('#inputAsalNegara').val());
        $("#readNoMasterBLAWB").val($('#inputNoMasterBLAWB').val());
        $("#readTglMasterBLAWB").val($('#inputTglMasterBLAWB').val());
        $("#readNoHouseBLAWB").val($('#inputNoHouseBLAWB').val());
        $("#readTglHouseBLAWB").val($('#inputTglHouseBLAWB').val());
        $("#table-barang-final").html($("#table-barang").html());
        $("#table-barang-final tr").each(function(){
          $(this).find("td:first").remove();
        });
      }

      function setObject(table) {
        body = {
          "bruto": "1",
          "ndpbm": "15000",
          "netto": "2",
          "barang": table,
          "posBC11": $("input[name=inputNoPOSBC]").val(),
          "totalBm": "5600000",
          "cifTotal": "0",
          "fobTotal": "0",
          "jenisAju": "2",
          "totalPph": "2940000",
          "totalPpn": "4312000",
          "nomorBC11": $("input[name=inputNoBC]").val(),
          "totalBmad": "5600000",
          "totalBmtp": "0",
          "kodeGudang": $("#selectGudang").val(),
          "kodeKantor": $("#selectKantorSerah").val(),
          "kodeValuta": "USD",
          "nomorHouse": $("input[name=inputNoHouseBLAWB]").val(),
          "totalPpnbm": "0",
          "kodePelMuat": $("#selectPelabuhanMuat").val(),
          "nomorBarang": $("input[name=inputNomorBarang]").val(),
          "nomorFlight": $("input[name=inputNomorAngkutan]").val(),
          "nomorMaster": $("input[name=inputNoMasterBLAWB]").val(),
          "npwpBilling": "010016202093000",
          "tanggalBC11": $("input[name=inputTglBC]").val(),
          "freightTotal": "0",
          "namaPenerima": $("input[name=inputNamaPenerima]").val(),
          "namaPengirim": $("input[name=inputNamaPengirim]").val(),
          "nomorInvoice": "001",
          "nomorKantong": "ID2113926731280",
          "tanggalHouse": $("input[name=inputTglHouseBLAWB]").val(),
          "totalTagihan": "18452000",
          "asuransiTotal": "0",
          "kodeJenisPibk": "2",
          "tanggalMaster": $("input[name=inputTglMasterBLAWB]").val(),
          "alamatPenerima": $("input[name=inputAlamatPenerima]").val(),
          "alamatPengirim": $("input[name=inputAlamatPengirim]").val(),
          "kodeNegaraAsal": $("input[name=inputAsalNegara]").val(),
          "kodePelBongkar": $("#selectPelabuhanBongkar").val(),
          "namaPengangkut": $("input[name=inputNamaPengangkut]").val(),
          "nomorIdentitas": "010016202093000",
          "tanggalInvoice": "2022-07-01",
          "kodeJenisAngkut": $("#selectJenisAngkutan").val(),
          "kodeMarketplace": "-",
          "namaMarketplace": "-",
          "npwpPemberitahu": $("input[name=inputNoIDPemberitahu]").val(),
          "nomorTelpPenerima": $("input[name=inputNoTeleponPenerima]").val(),
          "kodeJenisIdentitas": "5",
          "kodeNegaraPengirim": $("input[name=inputAsalNegara]").val(),
        }

        return body;
      }

      function saveObject(data) {
        $.ajax({
          type: "post",
          url: "{{ route('saveObject') }}",
          data: data,
          dataType: "json",
          success: function(response) {
            console.log(response);
            console.log('object saved');
            setConfirmationForm();
          },
          error: function(xhr, status, error) {
            alert(xhr.responseText)
          }
        });
      }

      function getInitialJson() {
        $.ajax({
          type: "post",
          url: "",
          data: "",
          dataType: "json",
          success: function(response) {

          },
          error: function(xhr, status, error) {
            alert(xhr.responseText)
          }
        });
      }
    });
  </script>
@endsection
