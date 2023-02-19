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
                              <div class="input-group">
                                <input type="text" class="form-control" id="inputNomorBarang" name="inputNomorBarang" @isset($data)
                                  value="{{ $data["nomorBarang"] }}" readonly
                                @endisset>
                                @if (!isset($data))
                                  <button type="button" id="btnSubmitId" class="btn btn-outline-secondary" style="border: 1px solid #ced4da;">Submit</button>
                                @endif
                              </div>
                            </div>
                            <div class="mb-2">
                              <label for="selectKantorSerah" class="form-label">Kantor Serah</label>
                              <select class="form-select" id="selectKantorSerah" @disabled(!isset($data))>
                                <option value="XX" selected>[ Pilih Kantor Serah ]</option>
                                @isset($data)
                                  <option value="10000" @selected($data["kodeKantor"] == "10000")>10000 - JAKARTA PUSAT</option>
                                  <option value="11000" @selected($data["kodeKantor"] == "11000")>11000 - JAKARTA BARAT</option>
                                  <option value="12000" @selected($data["kodeKantor"] == "12000")>12000 - JAKARTA SELATAN</option>
                                  <option value="13000" @selected($data["kodeKantor"] == "13000")>13000 - JAKARTA TIMUR</option>
                                  <option value="14000" @selected($data["kodeKantor"] == "14000")>14000 - JAKARTA UTARA</option>
                                  <option value="15000" @selected($data["kodeKantor"] == "15000")>15000 - TANGERANG</option>
                                  <option value="15400" @selected($data["kodeKantor"] == "15400")>15400 - CIPUTAT</option>
                                  <option value="16000" @selected($data["kodeKantor"] == "16000")>16000 - BOGOR</option>
                                  <option value="16400" @selected($data["kodeKantor"] == "16400")>16400 - DEPOK</option>
                                  <option value="16900" @selected($data["kodeKantor"] == "16900")>16900 - CIBINONG</option>
                                  <option value="17000" @selected($data["kodeKantor"] == "17000")>17000 - BEKASI</option>
                                  <option value="17500" @selected($data["kodeKantor"] == "17500")>17500 - CIKARANG</option>
                                  <option value="20600" @selected($data["kodeKantor"] == "20600")>20600 - TEBINGTINGGIDELI</option>
                                  <option value="20700" @selected($data["kodeKantor"] == "20700")>20700 - BINJAI</option>
                                  <option value="20900" @selected($data["kodeKantor"] == "20900")>20900 - MPC MEDAN</option>
                                  <option value="20900L1" @selected($data["kodeKantor"] == "20900L1")>20900L1 - DC MEDAN KOTA</option>
                                  <option value="20900L2" @selected($data["kodeKantor"] == "20900L2")>20900L2 - DC MEDAN JOHOR</option>
                                  <option value="20900L3" @selected($data["kodeKantor"] == "20900L3")>20900L3 - DC MEDAN DENAI</option>
                                  <option value="20900L4" @selected($data["kodeKantor"] == "20900L4")>20900L4 - DC MEDAN PAYAGELI</option>
                                  <option value="20900L5" @selected($data["kodeKantor"] == "20900L5")>20900L5 - DC MEDANLABUHANDELI</option>
                                  <option value="20900L6" @selected($data["kodeKantor"] == "20900L6")>20900L6 - DC TAJUNGMORAWA</option>
                                  <option value="20900L7" @selected($data["kodeKantor"] == "20900L7")>20900L7 - DC MEDAN TIMUR</option>
                                  <option value="20900L8" @selected($data["kodeKantor"] == "20900L8")>20900L8 - DC MEDAN SELATAN</option>
                                  <option value="20900L9" @selected($data["kodeKantor"] == "20900L9")>20900L9 - DC MEDAN UTARA</option>
                                  <option value="20900LA" @selected($data["kodeKantor"] == "20900LA")>20900LA - DC MEDAN TIMBANGDELI</option>
                                  <option value="21100" @selected($data["kodeKantor"] == "21100")>21100 - PEMATANGSIANTAR</option>
                                  <option value="21200" @selected($data["kodeKantor"] == "21200")>21200 - KISARAN</option>
                                  <option value="21400" @selected($data["kodeKantor"] == "21400")>21400 - RANTAUPRAPAT</option>
                                  <option value="22100" @selected($data["kodeKantor"] == "22100")>22100 - KABANJAHE</option>
                                  <option value="22300" @selected($data["kodeKantor"] == "22300")>22300 - BALIGE</option>
                                  <option value="22400" @selected($data["kodeKantor"] == "22400")>22400 - TARUTUNG</option>
                                  <option value="22500" @selected($data["kodeKantor"] == "22500")>22500 - SIBOLGA</option>
                                  <option value="22700" @selected($data["kodeKantor"] == "22700")>22700 - PADANGSIDEMPUAN</option>
                                  <option value="22800" @selected($data["kodeKantor"] == "22800")>22800 - GUNUNGSITOLI</option>
                                  <option value="23000" @selected($data["kodeKantor"] == "23000")>23000 - BANDA ACEH</option>
                                  <option value="23600" @selected($data["kodeKantor"] == "23600")>23600 - MEULABOH</option>
                                  <option value="23700" @selected($data["kodeKantor"] == "23700")>23700 - TAPAKTUAN</option>
                                  <option value="24100" @selected($data["kodeKantor"] == "24100")>24100 - SIGLI</option>
                                  <option value="24300" @selected($data["kodeKantor"] == "24300")>24300 - LHOKSEUMAWE</option>
                                  <option value="24400" @selected($data["kodeKantor"] == "24400")>24400 - LANGSA</option>
                                  <option value="24600" @selected($data["kodeKantor"] == "24600")>24600 - KUTACANE</option>
                                  <option value="25000" @selected($data["kodeKantor"] == "25000")>25000 - PADANG</option>
                                  <option value="25500" @selected($data["kodeKantor"] == "25500")>25500 - PARIAMAN</option>
                                  <option value="25600" @selected($data["kodeKantor"] == "25600")>25600 - PAINAN</option>
                                  <option value="26100" @selected($data["kodeKantor"] == "26100")>26100 - BUKITTINGGI</option>
                                  <option value="26200" @selected($data["kodeKantor"] == "26200")>26200 - PAYAKUMBUH</option>
                                  <option value="26300" @selected($data["kodeKantor"] == "26300")>26300 - LUBUKSIKAPING</option>
                                  <option value="27100" @selected($data["kodeKantor"] == "27100")>27100 - PADANGPANJANG</option>
                                  <option value="27300" @selected($data["kodeKantor"] == "27300")>27300 - SOLOK</option>
                                  <option value="27400" @selected($data["kodeKantor"] == "27400")>27400 - SAWAHLUNTO</option>
                                  <option value="28000" @selected($data["kodeKantor"] == "28000")>28000 - PEKANBARU</option>
                                  <option value="28500" @selected($data["kodeKantor"] == "28500")>28500 - BANGKINANG</option>
                                  <option value="28800" @selected($data["kodeKantor"] == "28800")>28800 - DUMAI</option>
                                  <option value="29100" @selected($data["kodeKantor"] == "29100")>29100 - TANJUNGPINANG</option>
                                  <option value="29200" @selected($data["kodeKantor"] == "29200")>29200 - TEMBILAHAN</option>
                                  <option value="29300" @selected($data["kodeKantor"] == "29300")>29300 - RENGAT</option>
                                  <option value="30000" @selected($data["kodeKantor"] == "30000")>30000 - PALEMBANG</option>
                                  <option value="31100" @selected($data["kodeKantor"] == "31100")>31100 - PRABUMULIH</option>
                                  <option value="31300" @selected($data["kodeKantor"] == "31300")>31300 - MUARAENIM</option>
                                  <option value="31400" @selected($data["kodeKantor"] == "31400")>31400 - LAHAT</option>
                                  <option value="31600" @selected($data["kodeKantor"] == "31600")>31600 - LUBUKLINGGAU</option>
                                  <option value="32100" @selected($data["kodeKantor"] == "32100")>32100 - BATURAJA</option>
                                  <option value="33100" @selected($data["kodeKantor"] == "33100")>33100 - PANGKALPINANG</option>
                                  <option value="33400" @selected($data["kodeKantor"] == "33400")>33400 - TANJUNGPANDAN</option>
                                  <option value="34100" @selected($data["kodeKantor"] == "34100")>34100 - METRO</option>
                                  <option value="34500" @selected($data["kodeKantor"] == "34500")>34500 - KOTABUMI</option>
                                  <option value="35000" @selected($data["kodeKantor"] == "35000")>35000 - BANDARLAMPUNG</option>
                                  <option value="36000" @selected($data["kodeKantor"] == "36000")>36000 - JAMBI</option>
                                  <option value="37100" @selected($data["kodeKantor"] == "37100")>37100 - SUNGAIPENUH</option>
                                  <option value="37200" @selected($data["kodeKantor"] == "37200")>37200 - MUARABUNGO</option>
                                  <option value="38000" @selected($data["kodeKantor"] == "38000")>38000 - BENGKULU</option>
                                  <option value="39100" @selected($data["kodeKantor"] == "39100")>39100 - CURUP</option>
                                  <option value="40100" @selected($data["kodeKantor"] == "40100")>40100 - UJUNGBERUNG</option>
                                  <option value="40400" @selected($data["kodeKantor"] == "40400")>40400 - MPC BANDUNG</option>
                                  <option value="40500" @selected($data["kodeKantor"] == "40500")>40500 - CIMAHI</option>
                                  <option value="40900" @selected($data["kodeKantor"] == "40900")>40900 - SOREANG</option>
                                  <option value="41100" @selected($data["kodeKantor"] == "41100")>41100 - PURWAKARTA</option>
                                  <option value="41200" @selected($data["kodeKantor"] == "41200")>41200 - SUBANG</option>
                                  <option value="41300" @selected($data["kodeKantor"] == "41300")>41300 - KARAWANG</option>
                                  <option value="42100" @selected($data["kodeKantor"] == "42100")>42100 - SERANG</option>
                                  <option value="42200" @selected($data["kodeKantor"] == "42200")>42200 - PANDEGLANG</option>
                                  <option value="42300" @selected($data["kodeKantor"] == "42300")>42300 - RANGKASBITUNG</option>
                                  <option value="42400" @selected($data["kodeKantor"] == "42400")>42400 - CILEGON</option>
                                  <option value="43100" @selected($data["kodeKantor"] == "43100")>43100 - SUKABUMI</option>
                                  <option value="43200" @selected($data["kodeKantor"] == "43200")>43200 - CIANJUR</option>
                                  <option value="44100" @selected($data["kodeKantor"] == "44100")>44100 - GARUT</option>
                                  <option value="45100" @selected($data["kodeKantor"] == "45100")>45100 - CIREBON</option>
                                  <option value="45200" @selected($data["kodeKantor"] == "45200")>45200 - INDRAMAYU</option>
                                  <option value="45300" @selected($data["kodeKantor"] == "45300")>45300 - SUMEDANG</option>
                                  <option value="45400" @selected($data["kodeKantor"] == "45400")>45400 - MAJALENGKA</option>
                                  <option value="45500" @selected($data["kodeKantor"] == "45500")>45500 - KUNINGAN</option>
                                  <option value="46100" @selected($data["kodeKantor"] == "46100")>46100 - TASIKMALAYA</option>
                                  <option value="46200" @selected($data["kodeKantor"] == "46200")>46200 - CIAMIS</option>
                                  <option value="46300" @selected($data["kodeKantor"] == "46300")>46300 - BANJAR</option>
                                  <option value="50400" @selected($data["kodeKantor"] == "50400")>50400 - MPC SEMARANG</option>
                                  <option value="50500" @selected($data["kodeKantor"] == "50500")>50500 - UNGARAN</option>
                                  <option value="50700" @selected($data["kodeKantor"] == "50700")>50700 - SALATIGA</option>
                                  <option value="51100" @selected($data["kodeKantor"] == "51100")>51100 - PEKALONGAN</option>
                                  <option value="51300" @selected($data["kodeKantor"] == "51300")>51300 - KENDAL</option>
                                  <option value="52100" @selected($data["kodeKantor"] == "52100")>52100 - TEGAL</option>
                                  <option value="52200" @selected($data["kodeKantor"] == "52200")>52200 - BREBES</option>
                                  <option value="52300" @selected($data["kodeKantor"] == "52300")>52300 - PEMALANG</option>
                                  <option value="53100" @selected($data["kodeKantor"] == "53100")>53100 - PURWOKERTO</option>
                                  <option value="53200" @selected($data["kodeKantor"] == "53200")>53200 - CILACAP</option>
                                  <option value="53300" @selected($data["kodeKantor"] == "53300")>53300 - PURBALINGGA</option>
                                  <option value="53400" @selected($data["kodeKantor"] == "53400")>53400 - BANJARNEGARA</option>
                                  <option value="54100" @selected($data["kodeKantor"] == "54100")>54100 - PURWOREJO</option>
                                  <option value="54300" @selected($data["kodeKantor"] == "54300")>54300 - KEBUMEN</option>
                                  <option value="55400" @selected($data["kodeKantor"] == "55400")>55400 - MPC YOGYAKARTA</option>
                                  <option value="55600" @selected($data["kodeKantor"] == "55600")>55600 - WATES</option>
                                  <option value="55700" @selected($data["kodeKantor"] == "55700")>55700 - BANTUL</option>
                                  <option value="55800" @selected($data["kodeKantor"] == "55800")>55800 - WONOSARI</option>
                                  <option value="56100" @selected($data["kodeKantor"] == "56100")>56100 - MAGELANG</option>
                                  <option value="56200" @selected($data["kodeKantor"] == "56200")>56200 - TEMANGGUNG</option>
                                  <option value="56300" @selected($data["kodeKantor"] == "56300")>56300 - WONOSOBO</option>
                                  <option value="57100" @selected($data["kodeKantor"] == "57100")>57100 - SOLO</option>
                                  <option value="57200" @selected($data["kodeKantor"] == "57200")>57200 - SRAGEN</option>
                                  <option value="57300" @selected($data["kodeKantor"] == "57300")>57300 - BOYOLALI</option>
                                  <option value="57400" @selected($data["kodeKantor"] == "57400")>57400 - KLATEN</option>
                                  <option value="57500" @selected($data["kodeKantor"] == "57500")>57500 - SUKOHARJO</option>
                                  <option value="57600" @selected($data["kodeKantor"] == "57600")>57600 - WONOGIRI</option>
                                  <option value="57700" @selected($data["kodeKantor"] == "57700")>57700 - KARANGANYAR</option>
                                  <option value="58100" @selected($data["kodeKantor"] == "58100")>58100 - PURWODADIGROBOGAN</option>
                                  <option value="58200" @selected($data["kodeKantor"] == "58200")>58200 - BLORA</option>
                                  <option value="59100" @selected($data["kodeKantor"] == "59100")>59100 - PATI</option>
                                  <option value="59300" @selected($data["kodeKantor"] == "59300")>59300 - KUDUS</option>
                                  <option value="59400" @selected($data["kodeKantor"] == "59400")>59400 - JEPARA</option>
                                  <option value="78000" @selected($data["kodeKantor"] == "78000")>78000 - PONTIANAK</option>
                                  <option value="78500" @selected($data["kodeKantor"] == "78500")>78500 - SANGGAU</option>
                                  <option value="78600" @selected($data["kodeKantor"] == "78600")>78600 - SINTANG</option>
                                  <option value="78800" @selected($data["kodeKantor"] == "78800")>78800 - KETAPANG</option>
                                  <option value="79100" @selected($data["kodeKantor"] == "79100")>79100 - SINGKAWANG</option>
                                  <option value="90400" @selected($data["kodeKantor"] == "90400")>90400 - MPC MAKASAR</option>
                                  <option value="91100" @selected($data["kodeKantor"] == "91100")>91100 - KP Parepare</option>
                                  <option value="91500" @selected($data["kodeKantor"] == "91500")>91500 - MAMUJU</option>
                                  <option value="91900" @selected($data["kodeKantor"] == "91900")>91900 - PALOPO</option>
                                  <option value="92500" @selected($data["kodeKantor"] == "92500")>92500 - BULUKUMBA</option>
                                  <option value="92700" @selected($data["kodeKantor"] == "92700")>92700 - WATAMPONE</option>
                                  <option value="93000" @selected($data["kodeKantor"] == "93000")>93000 - KENDARI</option>
                                  <option value="93700" @selected($data["kodeKantor"] == "93700")>93700 - BAUBAU</option>
                                  <option value="94000" @selected($data["kodeKantor"] == "94000")>94000 - PALU</option>
                                  <option value="94700" @selected($data["kodeKantor"] == "94700")>94700 - LUWUK</option>
                                  <option value="95000" @selected($data["kodeKantor"] == "95000")>95000 - MANADO</option>
                                  <option value="95700" @selected($data["kodeKantor"] == "95700")>95700 - KOTAMOBAGU</option>
                                  <option value="96100" @selected($data["kodeKantor"] == "96100")>96100 - GORONTALO</option>
                                  <option value="97000" @selected($data["kodeKantor"] == "97000")>97000 - AMBON</option>
                                  <option value="97600" @selected($data["kodeKantor"] == "97600")>97600 - TUAL</option>
                                  <option value="97700" @selected($data["kodeKantor"] == "97700")>97700 - TERNATE</option>
                                  <option value="98100" @selected($data["kodeKantor"] == "98100")>98100 - BIAK</option>
                                  <option value="98300" @selected($data["kodeKantor"] == "98300")>98300 - MANOKWARI</option>
                                  <option value="98400" @selected($data["kodeKantor"] == "98400")>98400 - SORONG</option>
                                  <option value="98800" @selected($data["kodeKantor"] == "98800")>98800 - NABIRE</option>
                                  <option value="99000" @selected($data["kodeKantor"] == "99000")>99000 - JAYAPURA</option>
                                  <option value="99600" @selected($data["kodeKantor"] == "99600")>99600 - MERAUKE</option>
                                  <option value="99900" @selected($data["kodeKantor"] == "99900")>99900 - TIMIKA</option>
                                @endisset
                              </select>
                            </div>
                            <div class="mb-2">
                              <label for="inputKantorPabean" class="form-label">Kantor Pabean</label>
                              <input type="text" class="form-control" id="inputKantorPabean" name="inputKantorPabean" readonly @isset($data)
                                value="{{ $data["kodeKantor"] }}"
                              @endisset>
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
                              <select class="form-select" id="selectPelabuhanMuat" name="selectPelabuhanMuat" @disabled(!isset($data))>
                                <option value="XX" selected>[ Pilih Pelabuhan Muat ]</option>  
                                @isset($data)
                                  <option value="IDPSB" @selected($data["kodePelMuat"] == "IDPSB")>Jakarta / Pos Pasar Baru</option>
                                  <option value="IDCGK" @selected($data["kodePelMuat"] == "IDCGK")>Cengkareng / Soetta</option>
                                  <option value="IDSUB" @selected($data["kodePelMuat"] == "IDSUB")>Surabaya / Juanda</option>
                                  <option value="IDDPS" @selected($data["kodePelMuat"] == "IDDPS")>Denpasar / Ngurah Rai</option>
                                  <option value="IDTPP" @selected($data["kodePelMuat"] == "IDTPP")>Jakarta / Tanjung Priok</option>
                                @endisset
                              </select>
                            </div>
                            <div class="mb-2">
                              <label for="selectPelabuhanBongkar" class="form-label">Pelabuhan Bongkar</label>
                              <select class="form-select" id="selectPelabuhanBongkar" name="selectPelabuhanBongkar" @disabled(!isset($data))>
                                <option value="XX" selected>[ Pilih Pelabuhan Bongkar ]</option>
                                @isset($data)
                                  <option value="IDPSB" @selected($data["kodePelBongkar"] == "IDPSB")>Jakarta / Pos Pasar Baru</option>
                                  <option value="IDCGK" @selected($data["kodePelBongkar"] == "IDCGK")>Cengkareng / Soetta</option>
                                  <option value="IDSUB" @selected($data["kodePelBongkar"] == "IDSUB")>Surabaya / Juanda</option>
                                  <option value="IDDPS" @selected($data["kodePelBongkar"] == "IDDPS")>Denpasar / Ngurah Rai</option>
                                  <option value="IDTPP" @selected($data["kodePelBongkar"] == "IDTPP")>Jakarta / Tanjung Priok</option>
                                @endisset
                              </select>
                            </div>
                            <div class="mb-2">
                              <label for="selectGudang" class="form-label">Gudang</label>
                              <select class="form-select" id="selectGudang" name="selectGudang" @disabled(!isset($data))>
                                <option value="XX" selected>[ Pilih Gudang ]</option>
                                @isset($data)
                                  <option value="GD01" @selected($data["kodeGudang"] == "GD01")>Gudang TPS Spp Jakarta</option>
                                  <option value="GD02" @selected($data["kodeGudang"] == "GD02")>Gudang TPS e-Commerce</option>
                                  <option value="GPOS" @selected($data["kodeGudang"] == "GPOS")>Gudang TPS Spp Surabaya</option>
                                  <option value="IPOS" @selected($data["kodeGudang"] == "IPOS")>Gudang TPS Spp Denpasar</option>
                                @endisset
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
                              <select class="form-select" id="selectJenisAngkutan" name="selectJenisAngkutan" @disabled(!isset($data))>
                                <option value="XX" selected>[ Pilih Jenis Angkutan ]</option>
                                @isset($data)
                                  <option value="1" @selected($data["kodeJenisAngkut"] == "1")>1 - Laut</option>
                                  <option value="2" @selected($data["kodeJenisAngkut"] == "2")>2 - Kereta Api</option>
                                  <option value="3" @selected($data["kodeJenisAngkut"] == "3")>3 - Darat</option>
                                  <option value="4" @selected($data["kodeJenisAngkut"] == "4")>4 - Udara</option>
                                  <option value="5" @selected($data["kodeJenisAngkut"] == "5")>5 - Pos</option>
                                  <option value="6" @selected($data["kodeJenisAngkut"] == "6")>6 - Multi Moda</option>
                                  <option value="7" @selected($data["kodeJenisAngkut"] == "7")>7 - Instalasi</option>
                                  <option value="8" @selected($data["kodeJenisAngkut"] == "8")>8 - Perairan</option>
                                  <option value="9" @selected($data["kodeJenisAngkut"] == "9")>9 - Lainnya</option>
                                @endisset
                              </select>
                            </div>
                            <div class="mb-2">
                              <label for="inputNamaPengangkut" class="form-label">Nama Pengangkut</label>
                              <input type="text" class="form-control" id="inputNamaPengangkut"
                                name="inputNamaPengangkut" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["namaPengangkut"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNomorAngkutan" class="form-label">Nomor Angkutan/Penerbangan</label>
                              <input type="text" class="form-control" id="inputNomorAngkutan"
                                name="inputNomorAngkutan" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["nomorFlight"] }}"
                                @endisset>
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
                                    <input type="text" class="form-control" id="inputNoBC" name="inputNoBC" @disabled(!isset($data)) @isset($data)
                                      value="{{ $data["nomorBC11"] }}"
                                    @endisset>
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputTglBC" class="form-label">Tanggal BC 1.1</label>
                                    <input type="text" class="form-control" id="inputTglBC" name="inputTglBC" placeholder="yyyy-mm-dd" autocomplete="off" @disabled(!isset($data)) @isset($data)
                                      value="{{ $data["tanggalBC11"] }}"
                                    @endisset>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-md-4 mb-3 mb-md-0">
                                <div class="col-border">
                                  <div class="mb-2">
                                    <label for="inputNoPOSBC" class="form-label">Nomor POS BC 1.1</label>
                                    <input type="text" class="form-control" id="inputNoPOSBC" name="inputNoPOSBC" maxlength="4" @disabled(!isset($data)) @isset($data)
                                      value="{{ substr($data["posBC11"], 0, 4) }}"
                                    @endisset>
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputNoSubPOSBC" class="form-label">Nomor SubPOS BC 1.1</label>
                                    <input type="text" class="form-control" id="inputNoSubPOSBC" name="inputNoSubPOSBC" maxlength="4" @disabled(!isset($data)) @isset($data)
                                      value="{{ substr($data["posBC11"], 4, 4) }}"
                                    @endisset>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-md-4 mb-3 mb-md-0">
                                <div class="col-border">
                                  <div class="mb-2">
                                    <label for="inputNoSub2POSBC" class="form-label">Nomor Sub SubPOS BC 1.1</label>
                                    <input type="text" class="form-control" id="inputNoSub2POSBC" name="inputNoSub2POSBC" maxlength="4" @disabled(!isset($data)) @isset($data)
                                      value="{{ substr($data["posBC11"], 8, 4) }}"
                                    @endisset>
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
                        <button type="button" class="btn btn-next btn-style" id="btnNextHeader" @disabled(!isset($data))>Selanjutnya<i
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
                                name="selectJenisIDPemberitahu" @disabled(!isset($data))>
                                <option value="XX">[ Pilih Jenis Identitas ]</option>
                                @isset($data)
                                  <option value="0">0 - NPWP 12 DIGIT</option>
                                  <option value="1">1 - NPWP 10 DIGIT</option>
                                  <option value="2">2 - PASPOR</option>
                                  <option value="3">3 - KTP</option>
                                  <option value="4">4 - LAINNYA</option>
                                  <option value="5" selected>5 - NPWP 15 DIGIT</option>
                                @endisset
                              </select>
                            </div>
                            <div class="mb-2">
                              <label for="inputNoIDPemberitahu" class="form-label">No. ID Pemberitahu</label>
                              <input type="text" class="form-control" id="inputNoIDPemberitahu"
                                name="inputNoIDPemberitahu" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["npwpPemberitahu"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNamaPemberitahu" class="form-label">Nama Pemberitahu</label>
                              <input type="text" class="form-control" id="inputNamaPemberitahu"
                                name="inputNamaPemberitahu" @disabled(!isset($data)) @isset($data)
                                value=""
                              @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputAlamatPemberitahu" class="form-label">Alamat Pemberitahu</label>
                              <input type="text" class="form-control" id="inputAlamatPemberitahu"
                                name="inputAlamatPemberitahu" @disabled(!isset($data)) @isset($data)
                                value=""
                              @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNoIzinPemberitahu" class="form-label">No. Izin Pemberitahu</label>
                              <input type="text" class="form-control" id="inputNoIzinPemberitahu"
                                name="inputNoIzinPemberitahu" @disabled(!isset($data)) @isset($data)
                                value=""
                              @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTglIzinPemberitahu" class="form-label">Tanggal Izin Pemberitahu</label>
                              <input type="text" class="form-control" id="inputTglIzinPemberitahu"
                                name="inputTglIzinPemberitahu" placeholder="yyyy-mm-dd" autocomplete="off"  @disabled(!isset($data)) @isset($data)
                                value=""
                              @endisset>
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
                              <select class="form-select" id="selectJenisIDPenerima" name="selectJenisIDPenerima" @disabled(!isset($data))>
                                <option value="XX">[ Pilih Jenis Identitas ]</option>
                                @isset($data)
                                  <option value="0" @selected($data["kodeJenisIdentitas"] == "0")>0 - NPWP 12 DIGIT</option>
                                  <option value="1" @selected($data["kodeJenisIdentitas"] == "1")>1 - NPWP 10 DIGIT</option>
                                  <option value="2" @selected($data["kodeJenisIdentitas"] == "2")>2 - PASPOR</option>
                                  <option value="3" @selected($data["kodeJenisIdentitas"] == "3")>3 - KTP</option>
                                  <option value="4" @selected($data["kodeJenisIdentitas"] == "4")>4 - LAINNYA</option>
                                  <option value="5" @selected($data["kodeJenisIdentitas"] == "5")>5 - NPWP 15 DIGIT</option>
                                @endisset
                              </select>
                            </div>
                            <div class="mb-2">
                              <label for="inputNoIDPenerima" class="form-label">No. ID Penerima</label>
                              <input type="text" class="form-control" id="inputNoIDPenerima"
                                name="inputNoIDPenerima" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["nomorIdentitas"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNamaPenerima" class="form-label">Nama Penerima</label>
                              <input type="text" class="form-control" id="inputNamaPenerima"
                                name="inputNamaPenerima" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["namaPenerima"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputAlamatPenerima" class="form-label">Alamat Penerima</label>
                              <input type="text" class="form-control" id="inputAlamatPenerima"
                                name="inputAlamatPenerima" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["alamatPenerima"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNoTeleponPenerima" class="form-label">No. Telepon Penerima</label>
                              <input type="text" class="form-control" id="inputNoTeleponPenerima"
                                name="inputNoTeleponPenerima" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["nomorTelpPenerima"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNegaraTujuan" class="form-label">Negara Tujuan</label>
                              <input type="text" class="form-control" id="inputNegaraTujuan"
                                name="inputNegaraTujuan" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["kodeNegaraTujuan"] }}"
                                @endisset>
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
                                name="inputNamaPengirim" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["namaPengirim"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputAlamatPengirim" class="form-label">Alamat Pengirim</label>
                              <input type="text" class="form-control" id="inputAlamatPengirim"
                                name="inputAlamatPengirim" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["alamatPengirim"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputAsalNegara" class="form-label">Asal Negara</label>
                              <input type="text" class="form-control" id="inputAsalNegara" name="inputAsalNegara" maxlength="13" @isset($data)
                                value="{{ substr($data["nomorBarang"], -2) }}"
                              @endisset>
                            </div>
                          </div>
                        </div>
                        <div class="card card-form">
                          <div class="card-body">
                            <h6 class="card-title">Detail Marketplace</h6>
                            <hr>
                            <div class="mb-2">
                              <label for="inputKodeMarketplace" class="form-label">Kode Marketplace</label>
                              <input type="text" class="form-control" id="inputKodeMarketplace"
                                name="inputKodeMarketplace" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["kodeMarketplace"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNamaMarketplace" class="form-label">Nama Marketplace</label>
                              <input type="text" class="form-control" id="inputNamaMarketplace"
                                name="inputNamaMarketplace" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["namaMarketplace"] }}"
                                @endisset>
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
                                name="inputNoMasterBLAWB" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["nomorMaster"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTglMasterBLAWB" class="form-label">Tanggal Master BLAWB</label>
                              <input type="text" class="form-control" id="inputTglMasterBLAWB"
                                name="inputTglMasterBLAWB" placeholder="yyyy-mm-dd" autocomplete="off" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["tanggalMaster"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNoHouseBLAWB" class="form-label">Nomor House BLAWB</label>
                              <input type="text" class="form-control" id="inputNoHouseBLAWB"
                                name="inputNoHouseBLAWB" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["nomorHouse"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTglHouseBLAWB" class="form-label">Tanggal House BLAWB</label>
                              <input type="text" class="form-control" id="inputTglHouseBLAWB"
                                name="inputTglHouseBLAWB" placeholder="yyyy-mm-dd" autocomplete="off" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["tanggalHouse"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNoKantong" class="form-label">Nomor Kantong</label>
                              <input type="text" class="form-control" id="inputNoKantong"
                                name="inputNoKantong" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["nomorKantong"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNoInvoice" class="form-label">Nomor Invoice</label>
                              <input type="text" class="form-control" id="inputNoInvoice"
                                name="inputNoInvoice" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["nomorInvoice"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTglInvoice" class="form-label">Tanggal Invoice</label>
                              <input type="text" class="form-control" id="inputTglInvoice"
                                name="inputTglInvoice" @disabled(!isset($data)) @isset($data)
                                  value="{{ $data["tanggalInvoice"] }}"
                                @endisset>
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
                      <div class="col-md col-xl-6">
                        <div class="card card-form">
                          <div class="card-body">
                            <h6 class="card-title">Detail Kiriman</h6>
                            <hr>
                            <div class="mb-2">
                              <label for="inputSeriBarang" class="form-label">Seri Barang</label>
                              <input type="text" class="form-control form-barang" id="inputSeriBarang" name="inputSeriBarang">
                            </div>
                            <div class="mb-2">
                              <label for="inputHSCODE" class="form-label">HSCODE</label>
                              <input type="text" class="form-control form-barang" id="inputHSCODE" name="inputHSCODE">
                            </div>
                            <div class="mb-2">
                              <label for="inputUraianBarang" class="form-label">Uraian Barang</label>
                              <input type="text" class="form-control form-barang" id="inputUraianBarang"
                                name="inputUraianBarang">
                            </div>
                            <div class="mb-2">
                              <label for="inputNegaraKirim" class="form-label">Negara Kirim</label>
                              <input type="text" class="form-control form-barang" id="inputNegaraKirim"
                                name="inputNegaraKirim">
                            </div>
                          </div>
                        </div>
                        <div class="card card-form">
                          <div class="card-body">
                            <h6 class="card-title">Detail Nilai Tukar</h6>
                            <hr>
                            <div class="mb-2">
                              <label for="selectKodeValuta" class="form-label">Mata Uang</label>
                              <select class="form-select" id="selectKodeValuta" name="selectKodeValuta">
                                @isset($data)
                                  <option value='AUD' @selected($data["kodeValuta"] == "AUD")>AUD - AUSTRALIAN DOLLAR</option>
                                  <option value='BND' @selected($data["kodeValuta"] == "BND")>BND - BRUNEI DOLLAR</option>
                                  <option value='CAD' @selected($data["kodeValuta"] == "CAD")>CAD - CANADIAN DOLLAR</option>
                                  <option value='CHF' @selected($data["kodeValuta"] == "CHF")>CHF - SWISS FRANC</option>
                                  <option value='CNY' @selected($data["kodeValuta"] == "CNY")>CNY - CHINA YUAN</option>
                                  <option value='DKK' @selected($data["kodeValuta"] == "DKK")>DKK - DANISH KRONE</option>
                                  <option value='EUR' @selected($data["kodeValuta"] == "EUR")>EUR - EURO</option>
                                  <option value='GBP' @selected($data["kodeValuta"] == "GBP")>GBP - BRITISH POUND</option>
                                  <option value='HKD' @selected($data["kodeValuta"] == "HKD")>HKD - HONGKONG DOLLAR</option>
                                  <option value='INR' @selected($data["kodeValuta"] == "INR")>INR - INDIA RUPEE</option>
                                  <option value='JPY' @selected($data["kodeValuta"] == "JPY")>JPY - JAPANESE YEN</option>
                                  <option value='KRW' @selected($data["kodeValuta"] == "KRW")>KRW - KOREAN WON</option>
                                  <option value='KWD' @selected($data["kodeValuta"] == "KWD")>KWD - KUWAITI DINAR</option>
                                  <option value='MYR' @selected($data["kodeValuta"] == "MYR")>MYR - MALAYSIAN RINGGIT</option>
                                  <option value='NOK' @selected($data["kodeValuta"] == "NOK")>NOK - NORWEGIAN KRONE</option>
                                  <option value='NZD' @selected($data["kodeValuta"] == "NZD")>NZD - NEW ZEALAND DOLLAR</option>
                                  <option value='PGK' @selected($data["kodeValuta"] == "PGK")>PGK - PAPUA N.G. KINA</option>
                                  <option value='PHP' @selected($data["kodeValuta"] == "PHP")>PHP - PHILIPPINES PESO</option>
                                  <option value='SAR' @selected($data["kodeValuta"] == "SAR")>SAR - SAUDI ARABIAN RIYAL</option>
                                  <option value='SEK' @selected($data["kodeValuta"] == "SEK")>SEK - SWEDISH KRONA</option>
                                  <option value='SGD' @selected($data["kodeValuta"] == "SGD")>SGD - SINGAPORE DOLLAR</option>
                                  <option value='THB' @selected($data["kodeValuta"] == "THB")>THB - THAI BATH</option>
                                  <option value='TWD' @selected($data["kodeValuta"] == "TWD")>TWD - TAIWAN DOLLAR</option>
                                  <option value='USD' @selected($data["kodeValuta"] == "USD")>USD - US DOLLAR </option>
                                @endisset
                              </select>
                            </div>
                            <div class="mb-2">
                              <label for="inputNilaiTukar" class="form-label">Nilai Tukar</label>
                              <input type="text" class="form-control" id="inputNilaiTukar"
                                name="inputNilaiTukar" @isset($data)
                                  value="{{ $data["ndpbm"] }}"
                                @endisset>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md col-xl-6">
                        <div class="card card-form">
                          <div class="card-body">
                            <h6 class="card-title">Detail Nilai/Berat</h6>
                            <hr>
                            
                            <div class="mb-2">
                              <label for="inputBrutoBarang" class="form-label">Total Bruto Barang</label>
                              <input type="text" class="form-control" id="inputBrutoBarang"
                                name="inputBrutoBarang" @isset($data)
                                  value="{{ $data["bruto"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputNettoBarang" class="form-label">Netto Barang</label>
                              <input type="text" class="form-control form-barang" id="inputNettoBarang"
                                name="inputNettoBarang">
                            </div>
                            <div class="mb-2">
                              <label for="inputFobBarang" class="form-label">Fob Barang</label>
                              <input type="text" class="form-control form-barang" id="inputFobBarang" name="inputFobBarang">
                            </div>
                            <div class="mb-2">
                              <label for="inputAsuransiBarang" class="form-label">Asuransi Barang</label>
                              <input type="text" class="form-control form-barang" id="inputAsuransiBarang"
                                name="inputAsuransiBarang">
                            </div>
                            <div class="mb-2">
                              <label for="inputFreightBarang" class="form-label">Freight Barang</label>
                              <input type="text" class="form-control form-barang" id="inputFreightBarang"
                                name="inputFreightBarang">
                            </div>
                            <div class="mb-2">
                              <label for="inputCIFBarang" class="form-label">CIF Barang</label>
                              <input type="text" class="form-control form-barang" id="inputCIFBarang" name="inputCIFBarang">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md col-xl-6">
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
                                  <input type="text" class="form-control form-barang" id="inputJumlahKemasan"
                                    name="inputJumlahKemasan">
                                </div>
                                <div class="col-9">
                                  <select class="form-select form-barang" id="selectJenisKemasan" name="selectJenisKemasan">
                                    <option value="PK" selected>Package</option>
                                    <option value="BX">Box</option>
                                    <option value="BG">Bag</option>
                                    <option value="EN">Envelope</option>
                                    <option value="UN">Tanpa Kemasan</option>
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
                                  <input type="text" class="form-control form-barang" id="inputJumlahSatuan"
                                    name="inputJumlahSatuan">
                                </div>
                                <div class="col-9">
                                  <select class="form-select form-barang" id="selectJenisSatuan" name="selectJenisSatuan">
                                    <option value="PCE" selected>Pieces</option>
                                    <option value="KGM">Kilogram</option>
                                    <option value="DZN">Dozen</option>
                                    <option value="YRD">Yard</option>
                                    <option value="MTR">Meter</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="mb-2">
                              <label for="inputHargaSatuan" class="form-label">Harga Satuan</label>
                              <input type="text" class="form-control form-barang" id="inputHargaSatuan" name="inputHargaSatuan">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md col-xl-6">
                        <div class="card card-form ">
                          <div class="card-body">
                            <h6 class="card-title">Detail SKEP</h6>
                            <hr>
                            <div class="mb-2">
                              <label for="inputNomorSkep" class="form-label">Nomor Skep</label>
                              <input type="text" class="form-control form-barang" id="inputNomorSkep" name="inputNomorSkep">
                            </div>
                            <div class="mb-2">
                              <label for="inputTglSkep" class="form-label">Tanggal Skep</label>
                              <input type="text" class="form-control form-barang" id="inputTglSkep" name="inputTglSkep">
                            </div>
                            <div class="mb-2">
                              <label for="inputImei1" class="form-label">IMEI 1</label>
                              <input type="text" class="form-control form-barang" id="inputImei1" name="inputImei1">
                            </div>
                            <div class="mb-2">
                              <label for="inputImei2" class="form-label">IMEI 2</label>
                              <input type="text" class="form-control form-barang" id="inputImei2" name="inputImei2">
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
                              <div class="col-12 col-md-4 mb-3 mb-lg-0">
                                <div class="col-border">
                                  <div class="mb-2">
                                    <label for="inputJenisTarifBM" class="form-label">Jenis Tarif BM</label>
                                    <input type="text" class="form-control form-barang" id="inputJenisTarifBM"
                                      name="inputJenisTarifBM">
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputTarifBM" class="form-label">Tarif BM</label>
                                    <input type="text" class="form-control form-barang" id="inputTarifBM" name="inputTarifBM">
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputNilaiBM" class="form-label">Nilai BM</label>
                                    <input type="text" class="form-control form-barang" id="inputNilaiBM" name="inputNilaiBM">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-md-4 mb-3 mb-lg-0">
                                <div class="col-border">
                                  <div class="mb-2">
                                    <label for="inputJenisTarifBMAD" class="form-label">Jenis Tarif BMAD</label>
                                    <input type="text" class="form-control form-barang" id="inputJenisTarifBMAD"
                                      name="inputJenisTarifBMAD">
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputTarifBMAD" class="form-label">Tarif BMAD</label>
                                    <input type="text" class="form-control form-barang" id="inputTarifBMAD"
                                      name="inputTarifBMAD">
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputNilaiBMAD" class="form-label">Nilai BMAD</label>
                                    <input type="text" class="form-control form-barang" id="inputNilaiBMAD"
                                      name="inputNilaiBMAD">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-md-4 mb-3 mb-lg-0">
                                <div class="col-border">
                                  <div class="mb-2">
                                    <label for="inputJenisTarifBMTP" class="form-label">Jenis Tarif BMTP</label>
                                    <input type="text" class="form-control form-barang" id="inputJenisTarifBMTP"
                                      name="inputJenisTarifBMTP">
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputTarifBMTP" class="form-label">Tarif BMTP</label>
                                    <input type="text" class="form-control form-barang" id="inputTarifBMTP"
                                      name="inputTarifBMTP">
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputNilaiBMTP" class="form-label">Nilai BMTP</label>
                                    <input type="text" class="form-control form-barang" id="inputNilaiBMTP"
                                      name="inputNilaiBMTP">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col-12 col-md-4 mb-3 mb-lg-0">
                                <div class="col-border">
                                  <div class="mb-2">
                                    <label for="inputTarifPPN" class="form-label">Tarif PPN</label>
                                    <input type="text" class="form-control form-barang" id="inputTarifPPN"
                                      name="inputTarifPPN">
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputNilaiPPNBarang" class="form-label">Nilai PPN Barang</label>
                                    <input type="text" class="form-control form-barang" id="inputNilaiPPNBarang"
                                      name="inputNilaiPPNBarang">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-md-4 mb-3 mb-lg-0">
                                <div class="col-border">
                                  <div class="mb-2">
                                    <label for="inputTarifPPNBM" class="form-label">Tarif PPNBM</label>
                                    <input type="text" class="form-control form-barang" id="inputTarifPPNBM"
                                      name="inputTarifPPNBM">
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputNilaiPPNBMBarang" class="form-label">Nilai PPNBM Barang</label>
                                    <input type="text" class="form-control form-barang" id="inputNilaiPPNBMBarang"
                                      name="inputNilaiPPNBMBarang">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-md-4 mb-3 mb-lg-0">
                                <div class="col-border">
                                  <div class="mb-2">
                                    <label for="inputTarifPPh" class="form-label">Tarif PPh</label>
                                    <input type="text" class="form-control form-barang" id="inputTarifPPh"
                                      name="inputTarifPPh">
                                  </div>
                                  <div class="mb-2">
                                    <label for="inputNilaiPphBarang" class="form-label">Nilai PPh Barang</label>
                                    <input type="text" class="form-control form-barang" id="inputNilaiPphBarang"
                                      name="inputNilaiPphBarang">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between box-style py-2">
                      <div class="col-4 text-start"><button type="button" class="btn" id="btn-delete"><i
                            class="bi bi-backspace-fill me-2"></i>Delete Item</button></div>
                      <div class="col-4 text-center"><button style="display: none;" type="button" class="btn btn-outline-secondary" id="btn-save-item"><i
                        class="bi bi-save-fill me-2"></i>Save Item</button></div>
                      <div class="col-4 text-end"><button type="button" class="btn" id="btn-add"><i
                            class="bi bi-plus-square-fill me-2"></i>Add Item</button></div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="table-responsive box-style my-3">
                          <table class="table table-striped mb-0" id="table-barang">
                            <thead class="fw-semibold text-center">
                              <tr>
                                <td><input type="checkbox" id="selectAll"></td>
                                <td>Edit Item</td>
                                <td>No</td>
                                <td>Seri</td>
                                <td>HSCODE</td>
                                <td>Uraian Barang</td>
                                <td>Negara Kirim</td>
                                <td>Netto Barang</td>
                                <td>Fob Barang</td>
                                <td>Asuransi Barang</td>
                                <td>Freight Barang</td>
                                <td>CIF Barang</td>
                                <td>Jumlah Kemasan</td>
                                <td>Jenis Kemasan</td>
                                <td>Jumlah Satuan</td>
                                <td>Jenis Satuan</td>
                                <td>Harga Satuan</td>
                                <td>Nomor SKEP</td>
                                <td>Tanggal SKEP</td>
                                <td>IMEI 1</td>
                                <td>IMEI 2</td>
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
                                <td>Tarif PPh</td>
                                <td>Nilai PPh Barang</td>
                              </tr>
                            </thead>
                            <tbody class="text-center">
                              @isset($data)
                                @php
                                  $x = 1;
                                @endphp
                                @foreach ($data["barang"] as $data_barang)
                                  <tr>
                                    <td><input type="checkbox" class="selectRow"></td>
                                    <td><button type="button" class="btn btn-sm btn-outline-secondary btn-edit" data-id="">Edit</button></td>
                                    <td>{{ $x++ }}</td>
                                    <td>{{ $data_barang["seriBarang"] }}</td>
                                    <td>{{ $data_barang["hsCode"] }}</td>
                                    <td>{{ $data_barang["uraianBarang"] }}</td>
                                    <td>{{ $data_barang["kodeNegaraAsal"] }}</td>
                                    <td>{{ $data_barang["fobBarang"] }}</td>
                                    <td>{{ $data_barang["asuransiBarang"] }}</td>
                                    <td>{{ $data_barang["nettoBarang"] }}</td>
                                    <td>{{ $data_barang["freightBarang"] }}</td>
                                    <td>{{ $data_barang["cifBarang"] }}</td>
                                    <td>{{ $data_barang["jumlahKemasan"] }}</td>
                                    <td>{{ $data_barang["jenisKemasan"] }}</td>
                                    <td>{{ $data_barang["jumlahSatuan"] }}</td>
                                    <td>{{ $data_barang["kodeSatuan"] }}</td>
                                    <td>{{ $data_barang["hargaSatuan"] }}</td>
                                    <td>{{ $data_barang["nomorSkep"] }}</td>
                                    <td>{{ $data_barang["tglSkep"] }}</td>
                                    <td>{{ $data_barang["nomorImei1"] }}</td>
                                    <td>{{ $data_barang["nomorImei2"] }}</td>
                                    <td>{{ $data_barang["jenisTarifBm"] }}</td>
                                    <td>{{ $data_barang["tarifBm"] }}</td>
                                    <td>{{ $data_barang["nilaiBm"] }}</td>
                                    <td>{{ $data_barang["jenisTarifBmad"] }}</td>
                                    <td>{{ $data_barang["tarifBmad"] }}</td>
                                    <td>{{ $data_barang["nilaiBmad"] }}</td>
                                    <td>{{ $data_barang["jenisTarifBmtp"] }}</td>
                                    <td>{{ $data_barang["tarifBmtp"] }}</td>
                                    <td>{{ $data_barang["nilaiBmtp"] }}</td>
                                    <td>{{ $data_barang["tarifPpn"] }}</td>
                                    <td>{{ $data_barang["nilaiPpn"] }}</td>
                                    <td>{{ $data_barang["tarifPpnbm"] }}</td>
                                    <td>{{ $data_barang["nilaiPpnbm"] }}</td>
                                    <td>{{ $data_barang["tarifPph"] }}</td>
                                    <td>{{ $data_barang["nilaiPph"] }}</td>
                                  </tr>
                                @endforeach
                              @endisset
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-md col-xl-6">
                        <div class="card card-form">
                          <div class="card-body">
                            <h6 class="card-title">Detail Total Nilai/Berat</h6>
                            <hr>
                            <div class="mb-2">
                              <label for="inputTotalFobBarang" class="form-label">Total Fob Barang</label>
                              <input type="text" class="form-control" id="inputTotalFobBarang" name="inputTotalFobBarang" disabled readonly @isset($data)
                                  value="{{ $data["fobTotal"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTotalAsuransiBarang" class="form-label">Total Asuransi Barang</label>
                              <input type="text" class="form-control" id="inputTotalAsuransiBarang"
                                name="inputTotalAsuransiBarang" disabled readonly @isset($data)
                                  value="{{ $data["asuransiTotal"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTotalNettoBarang" class="form-label">Total Netto Barang</label>
                              <input type="text" class="form-control" id="inputTotalNettoBarang"
                                name="inputTotalNettoBarang" disabled readonly @isset($data)
                                  value="{{ $data["netto"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTotalFreightBarang" class="form-label">Total Freight Barang</label>
                              <input type="text" class="form-control" id="inputTotalFreightBarang"
                                name="inputTotalFreightBarang" disabled readonly @isset($data)
                                  value="{{ $data["freightTotal"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTotalCIFBarang" class="form-label">Total CIF Barang</label>
                              <input type="text" class="form-control" id="inputTotalCIFBarang" name="inputTotalCIFBarang" disabled readonly @isset($data)
                                  value="{{ $data["cifTotal"] }}"
                                @endisset>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md col-xl-6">
                        <div class="card card-form">
                          <div class="card-body">
                            <h6 class="card-title">Detail Total Tarif/Bea</h6>
                            <hr>
                            <div class="mb-2">
                              <label for="inputTotalBm" class="form-label">Total BM</label>
                              <input type="text" class="form-control" id="inputTotalBm" name="inputTotalBm" disabled readonly @isset($data)
                                  value="{{ $data["totalBm"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTotalBmad" class="form-label">Total BMAD</label>
                              <input type="text" class="form-control" id="inputTotalBmad" name="inputTotalBmad" disabled readonly @isset($data)
                                  value="{{ $data["totalBmad"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTotalBmtp" class="form-label">Total BMTP</label>
                              <input type="text" class="form-control" id="inputTotalBmtp" name="inputTotalBmtp" disabled readonly @isset($data)
                                  value="{{ $data["totalBmtp"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTotalPpn" class="form-label">Total PPn</label>
                              <input type="text" class="form-control" id="inputTotalPpn" name="inputTotalPpn" disabled readonly @isset($data)
                                  value="{{ $data["totalPpn"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTotalPpnbm" class="form-label">Total PPnBM</label>
                              <input type="text" class="form-control" id="inputTotalPpnbm" name="inputTotalPpnbm" disabled readonly @isset($data)
                                  value="{{ $data["totalPpnbm"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTotalPph" class="form-label">Total PPh</label>
                              <input type="text" class="form-control" id="inputTotalPph" name="inputTotalPph" disabled readonly @isset($data)
                                  value="{{ $data["totalPph"] }}"
                                @endisset>
                            </div>
                            <div class="mb-2">
                              <label for="inputTotalTagihan" class="form-label">Total Tagihan</label>
                              <input type="text" class="form-control" id="inputTotalTagihan" name="inputTotalTagihan" disabled readonly @isset($data)
                                  value="{{ $data["totalTagihan"] }}"
                                @endisset>
                            </div>
                          </div>
                        </div>
                      </div>
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
                            <h5 class="fw-semibold" id="confirmTitle">PIBK</h5>
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
                        <div class="row mb-3">
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
                            <div class="row mb-2">
                              <label for="readNoKantong" class="col-form-label col-md-5 col-xxl-4">Nomor Kantong</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNoKantong"
                                  name="readNoKantong">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNoInvoice" class="col-form-label col-md-5 col-xxl-4">Nomor Invoice</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNoInvoice"
                                  name="readNoInvoice">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTglInvoice" class="col-form-label col-md-5 col-xxl-4">Tanggal Invoice</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTglInvoice"
                                  name="readTglInvoice">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                            <div class="row mb-2">
                              <h6 class="form-title">Detail Nilai Tukar</h6>
                            </div>
                            <div class="row mb-2">
                              <label for="readKodeValuta" class="col-form-label col-md-5 col-xxl-4">Mata Uang</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly class="form-control" id="readKodeValuta"
                                  name="readKodeValuta">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNilaiTukar" class="col-form-label col-md-5 col-xxl-4">Nilai
                                Tukar</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNilaiTukar"
                                  name="readNilaiTukar">
                              </div>
                            </div>
                          </div>
                          <div class="col-md col-xl-6 px-3 mb-3 mb-md-0">
                            <div class="row mb-2">
                              <h6 class="form-title">Detail Marketplace</h6>
                            </div>
                            <div class="row mb-2">
                              <label for="readKodeMarketplace" class="col-form-label col-md-5 col-xxl-4">Kode Marketplace</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly class="form-control" id="readKodeMarketplace"
                                  name="readKodeMarketplace">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readNamaMarketplace" class="col-form-label col-md-5 col-xxl-4">Nama Marketplace</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readNamaMarketplace"
                                  name="readNamaMarketplace">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <h6 class="form-title text-center">Detail Barang</h6>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
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
                        <div class="row">
                          <div class="col col-md col-xl-6 px-3 mb-3 mb-md-0">
                            <div class="row mb-2">
                              <h6 class="form-title">Detail Total Nilai/Berat</h6>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalBrutoBarang" class="col-form-label col-md-5 col-xxl-4">Total Bruto Barang</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTotalBrutoBarang"
                                  name="readTotalBrutoBarang">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalNettoBarang" class="col-form-label col-md-5 col-xxl-4">Total Netto Barang</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTotalNettoBarang"
                                  name="readTotalNettoBarang">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalFobBarang" class="col-form-label col-md-5 col-xxl-4">Total Fob Barang</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTotalFobBarang"
                                  name="readTotalFobBarang">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalAsuransiBarang" class="col-form-label col-md-5 col-xxl-4">Total Asuransi Barang</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTotalAsuransiBarang"
                                  name="readTotalAsuransiBarang">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalFreightBarang" class="col-form-label col-md-5 col-xxl-4">Total Freight Barang</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTotalFreightBarang"
                                  name="readTotalFreightBarang">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalCIFBarang" class="col-form-label col-md-5 col-xxl-4">Total CIF Barang</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control"
                                  id="readTotalCIFBarang" name="readTotalCIFBarang">
                              </div>
                            </div>
                          </div>
                          <div class="col col-md col-xl-6 px-3 mb-3 mb-md-0">
                            <div class="row mb-2">
                              <h6 class="form-title">Detail Total Tarif/Bea</h6>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalBm" class="col-form-label col-md-5 col-xxl-4">Total BM</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly class="form-control" id="readTotalBm"
                                  name="readTotalBm">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalBmad" class="col-form-label col-md-5 col-xxl-4">Total BMAD</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTotalBmad"
                                  name="readTotalBmad">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalBmtp" class="col-form-label col-md-5 col-xxl-4">Total BMTP</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTotalBmtp"
                                  name="readTotalBmtp">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalPpn" class="col-form-label col-md-5 col-xxl-4">Total PPn</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTotalPpn"
                                  name="readTotalPpn">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalPpnbm" class="col-form-label col-md-5 col-xxl-4">Total PPnBM</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control" id="readTotalPpnbm"
                                  name="readTotalPpnbm">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalPph" class="col-form-label col-md-5 col-xxl-4">Total PPh</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control"
                                  id="readTotalPph" name="readTotalPph">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <label for="readTotalTagihan" class="col-form-label col-md-5 col-xxl-4">Total Tagihan</label>
                              <div class="col-md-7 col-xxl-8">
                                <input disabled readonly type="text" class="form-control"
                                  id="readTotalTagihan" name="readTotalTagihan">
                              </div>
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

      // $("input").not("#inputNomorBarang").prop("disabled", true);
      // $("select").prop("disabled", true);

      function validateDate(element) {
        let date;
        try {
          date = $.datepicker.parseDate("yy-mm-dd", element.value);
          if(date) {
            $(".invalid-date").remove();
          }
        } catch (error) {
          $(element).addClass('input-error');
          if(!$(element).next().hasClass('invalid-date')) {
            $(element).after("<p class='small invalid-date' style='color: red'>Tanggal invalid</p>");
          }
          date = null;
        }
      }

      $("#inputFobBarang, #inputAsuransiBarang, #inputFreightBarang").change(function (e) {
        calculateNilai()
      });

      // $("").change(function (e) {
      //   calculateNilai()
      // });

      // $("").change(function (e) {
      //   calculateNilai()
      // });

      function calculateNilai() {
        let fob = isNaN(parseFloat($("#inputFobBarang").val())) ? 0 : parseFloat($("#inputFobBarang").val());
        console.log(fob);
        let asuransi = isNaN(parseFloat($("#inputAsuransiBarang").val())) ? 0 : parseFloat($("#inputAsuransiBarang").val());
        let freight = isNaN(parseFloat($("#inputFreightBarang").val())) ? 0 : parseFloat($("#inputFreightBarang").val());
        let cif = fob + asuransi + freight;
        $("#inputCIFBarang").val(cif);
      }

      $('#inputTglBC').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
      }).change(function (e) { 
        validateDate(this)
      });

      $('#inputTglIzinPemberitahu').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
      }).change(function (e) { 
        validateDate(this)
      });

      $('#inputTglMasterBLAWB').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
      }).change(function (e) { 
        validateDate(this)
      });

      $('#inputTglHouseBLAWB').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
      }).change(function (e) { 
        validateDate(this)
      });

      $("#btnSubmitId").click(function () {
        let noBarang = $("#inputNomorBarang").val()

        if(noBarang!=="") {
          getInitialJson(noBarang)
        } else {
          $("#inputNomorBarang").addClass('input-error')
        }
      })

      function getInitialJson(noBarang) {
        $.ajax({
          type: "post",
          url: "{{ route('addNewTransaction') }}",
          data: {
            noBarcode: noBarang,
            "_token": "{{ csrf_token() }}"
          },
          dataType: "json",
          beforeSend: function() {
            $("#preloader").show()
          },
          success: function(response) {
            $("#preloader").hide()
            console.log(response);
            if(response.status==1) {
              Swal.fire({
                title: 'Success!',
                text: response.message,
                icon: 'success'
              })
              .then(function() {
                let url = "{{ route('showForm', ':id') }}"
                url = url.replace(':id', response.transref)
                document.location.replace(url)
              })
            } else {
              Swal.fire({
                title: 'Failed!',
                text: response.message,
                icon: 'error'
              })
            }
          },
          error: function(xhr, status, error) {
            $("#preloader").hide()
            alert(xhr.responseText)
          }
        });
      }

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
          console.log(data)
          saveObject(data)
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

        let formBarang = $(".form-barang")

        let newRow = $('<tr>')
        newRow.append('<td><input type="checkbox" class="selectRow"></td>');
        newRow.append('<td><button type="button" class="btn btn-sm btn-outline-secondary btn-edit" data-id="">Edit</button></td>')
        newRow.append(`<td>${rowCount + 1}</td>`);
        formBarang.each(function () {
          // console.log($(this).val());
          newRow.append('<td>' + $(this).val() + '</td>');
        })
        newRow.append('</tr>')

        // let inputSeriBarang = $('#inputSeriBarang').val();
        // let inputHSCODE = $('#inputHSCODE').val();
        // let inputUraianBarang = $('#inputUraianBarang').val();
        // let inputNegaraKirim = $('#inputNegaraKirim').val();
        // let inputJumlahKemasan = $('#inputJumlahKemasan').val();
        // let selectJenisKemasan = $('#selectJenisKemasan').val();
        // let inputJumlahSatuan = $('#inputJumlahSatuan').val();
        // let selectJenisSatuan = $('#selectJenisSatuan').val();
        // let inputFobBarang = $('#inputFobBarang').val();
        // let inputAsuransiBarang = $('#inputAsuransiBarang').val();
        // let inputNettoBarang = $('#inputNettoBarang').val();
        // let inputFreightBarang = $('#inputFreightBarang').val();
        // let inputCIFBarang = $('#inputCIFBarang').val();
        // let inputJenisTarifBM = $('#inputJenisTarifBM').val();
        // let inputTarifBM = $('#inputTarifBM').val();
        // let inputNilaiBM = $('#inputNilaiBM').val();
        // let inputJenisTarifBMAD = $('#inputJenisTarifBMAD').val();
        // let inputTarifBMAD = $('#inputTarifBMAD').val();
        // let inputNilaiBMAD = $('#inputNilaiBMAD').val();
        // let inputJenisTarifBMTP = $('#inputJenisTarifBMTP').val();
        // let inputTarifBMTP = $('#inputTarifBMTP').val();
        // let inputNilaiBMTP = $('#inputNilaiBMTP').val();
        // let inputTarifPPN = $('#inputTarifPPN').val();
        // let inputNilaiPPNBarang = $('#inputNilaiPPNBarang').val();
        // let inputTarifPPNBM = $('#inputTarifPPNBM').val();
        // let inputNilaiPPNBMBarang = $('#inputNilaiPPNBMBarang').val();

        // let newRow = $('<tr>')
        // newRow.append('<td><input type="checkbox" class="selectRow"></td>');
        // newRow.append(`<td>${rowCount + 1}</td>`);
        // newRow.append('<td>' + inputSeriBarang + '</td>');
        // newRow.append('<td>' + inputHSCODE + '</td>');
        // newRow.append('<td>' + inputUraianBarang + '</td>');
        // newRow.append('<td>' + inputNegaraKirim + '</td>');
        // newRow.append('<td>' + inputJumlahKemasan + '</td>');
        // newRow.append('<td>' + selectJenisKemasan + '</td>');
        // newRow.append('<td>' + inputJumlahSatuan + '</td>');
        // newRow.append('<td>' + selectJenisSatuan + '</td>');
        // newRow.append('<td>' + inputFobBarang + '</td>');
        // newRow.append('<td>' + inputAsuransiBarang + '</td>');
        // newRow.append('<td>' + inputNettoBarang + '</td>');
        // newRow.append('<td>' + inputFreightBarang + '</td>');
        // newRow.append('<td>' + inputCIFBarang + '</td>');
        // newRow.append('<td>' + inputJenisTarifBM + '</td>');
        // newRow.append('<td>' + inputTarifBM + '</td>');
        // newRow.append('<td>' + inputNilaiBM + '</td>');
        // newRow.append('<td>' + inputJenisTarifBMAD + '</td>');
        // newRow.append('<td>' + inputTarifBMAD + '</td>');
        // newRow.append('<td>' + inputNilaiBMAD + '</td>');
        // newRow.append('<td>' + inputJenisTarifBMTP + '</td>');
        // newRow.append('<td>' + inputTarifBMTP + '</td>');
        // newRow.append('<td>' + inputNilaiBMTP + '</td>');
        // newRow.append('<td>' + inputTarifPPN + '</td>');
        // newRow.append('<td>' + inputNilaiPPNBarang + '</td>');
        // newRow.append('<td>' + inputTarifPPNBM + '</td>');
        // newRow.append('<td>' + inputNilaiPPNBMBarang + '</td>');
        // newRow.append('</tr>')
        
        $("#table-barang tbody").append(newRow);
        sumDataBarang();
        $('.form-barang').val('')
      })

      $("#table-barang").on('click', 'tbody tr .btn-edit', function (e) { 
        e.preventDefault();
        
        let row = $(this).parents('tr')
        let index = row.find('td:eq(2)').text()
        index = parseInt(index) - 1
        let cellContent = []
        row.find('td:gt(2)').each(function () {
          cellContent.push($(this).text())
        })
        let formBarang = $(".form-barang")
        let i=0;
        formBarang.each(function () {
          $(this).val(cellContent[i])
          i++;
        })

        $('#btn-save-item').attr('data-id', index);
        $('#btn-save-item').show();
      });

      $('#btn-save-item').click(function (e) { 
        e.preventDefault();

        let index = $(this).attr('data-id');
        let row = $('#table-barang tbody').find(`tr:eq(${index})`);
        // console.log(row);
        let formContent = []
        let formBarang = $(".form-barang")
        formBarang.each(function () {
          formContent.push($(this).val())
        })
        
        let i=0;
        row.find('td:gt(2)').each(function () {
          $(this).text(formContent[i])
          i++;
        })
        
        formBarang.val('');
        $('#btn-save-item').hide();
        callToast('Success', 'Item diubah', 2)
      });

      function callToast(title, body, type) {
        $("#liveToast").removeClass();
        $("#toast-header").removeClass();
        
        switch(type) {
          case 0: 
            $("#liveToast").addClass("toast text-bg-danger bg-gradient bg-opacity-75 border-0");
            $("#toast-header").addClass("toast-header text-bg-danger bg-gradient bg-opacity-75");
            break;
          case 1:
            $("#liveToast").addClass("toast text-bg-warning bg-gradient bg-opacity-75 border-0");
            $("#toast-header").addClass("toast-header text-bg-warning bg-gradient bg-opacity-75");
            break;
          case 2:
            $("#liveToast").addClass("toast text-bg-success bg-gradient bg-opacity-75 border-0");
            $("#toast-header").addClass("toast-header text-bg-success bg-gradient bg-opacity-75");
            break;
        }

        $("#toast-title").text(title)
        $("#liveToast .toast-body").text(body)

        const toastLiveExample = $("#liveToast")
        const toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
      }

      // $("#inputNomorBarang").focusout(function(e) {
      //   e.preventDefault()
      //   getProfilPemberitahu("010016202093000")
      // })

      function getProfilPemberitahu(npwp) {
        $.ajax({
          type: "get",
          url: "{{ route('getProfil') }}",
          data: {
            npwp: npwp
          },
          dataType: "json",
          beforeSend: function() {
            $("#preloader").show()
          },
          success: function (response) {
            $("#preloader").hide()
            if(response.status == 1) {
              callToast("Success", response.message, 2)
            } else {
              callToast("Failed", response.message, 1)
            }
          },
          error: function(xhr, status, error) {
            $("#preloader").hide()
            alert(xhr.responseText)
          }

        });
      }

      function sumDataBarang() {
        let sumFob=0, sumAsuransi=0, sumNetto=0, sumFreight=0, sumCif=0, sumBm=0, 
        sumBmad=0, sumBmtp=0, sumPpn=0, sumPpnbm=0, sumPph=0, totalTagihan=0;
        $("#table-barang tbody tr").each(function() {
          sumFob += isNaN(parseFloat($(this).find("td:eq(6)").text())) ? 0 : parseFloat($(this).find("td:eq(6)").text());
          sumAsuransi += isNaN(parseFloat($(this).find("td:eq(7)").text())) ? 0 : parseFloat($(this).find("td:eq(7)").text());
          sumNetto += isNaN(parseFloat($(this).find("td:eq(8)").text())) ? 0 : parseFloat($(this).find("td:eq(8)").text());
          sumFreight += isNaN(parseFloat($(this).find("td:eq(9)").text()))? 0 : parseFloat($(this).find("td:eq(9)").text());
          sumCif += isNaN(parseFloat($(this).find("td:eq(10)").text()))? 0 : parseFloat($(this).find("td:eq(10)").text());
          sumBm += isNaN(parseFloat($(this).find("td:eq(22)").text()))? 0 : parseFloat($(this).find("td:eq(22)").text());
          sumBmad += isNaN(parseFloat($(this).find("td:eq(25)").text()))? 0 : parseFloat($(this).find("td:eq(25)").text());
          sumBmtp += isNaN(parseFloat($(this).find("td:eq(28)").text()))? 0 : parseFloat($(this).find("td:eq(28)").text());
          sumPpn += isNaN(parseFloat($(this).find("td:eq(30)").text()))? 0 : parseFloat($(this).find("td:eq(30)").text());
          sumPpnbm += isNaN(parseFloat($(this).find("td:eq(32)").text()))? 0 : parseFloat($(this).find("td:eq(32)").text());
          sumPph += isNaN(parseFloat($(this).find("td:eq(34)").text()))? 0 : parseFloat($(this).find("td:eq(34)").text());
        })
        totalTagihan = sumBm+sumBmad+sumBmtp+sumPpn+sumPpnbm+sumPph;
        console.log(totalTagihan);
        // console.log(sumFob);
        // console.log(sumAsuransi);
        // console.log(sumNetto);
        // console.log(sumFreight);
        // console.log(sumCif);
        // console.log(sumBm);
        // console.log(sumBmad);
        // console.log(sumBmtp);
        // console.log(sumPpn);
        // console.log(sumPpnbm);
        // console.log(sumPph);

        $("#inputTotalFobBarang").val(sumFob);
        $("#inputTotalAsuransiBarang").val(sumAsuransi);
        $("#inputTotalNettoBarang").val(sumNetto);
        $("#inputTotalFreightBarang").val(sumFreight);
        $("#inputTotalCIFBarang").val(sumCif);
        $("#inputTotalBm").val(sumBm);
        $("#inputTotalBmad").val(sumBmad);
        $("#inputTotalBmtp").val(sumBmtp);
        $("#inputTotalPpn").val(sumPpn);
        $("#inputTotalPpnbm").val(sumPpnbm);
        $("#inputTotalPph").val(sumPph);
        $("#inputTotalTagihan").val(totalTagihan);
      }

      $("#btn-delete").click(function(e) {
        e.preventDefault();

        let checkedRows = $('#table-barang input:checked.selectRow').parent().parent()
        checkedRows.remove();
        updateIndex()
        sumDataBarang()
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
                row.kodeNegaraAsal = $(this).text();
                break;
              case 6:
                row.nettoBarang = $(this).text();
                break;
              case 7:
                row.fobBarang = $(this).text();
                break;
              case 8:
                row.asuransiBarang = $(this).text();
                break;
              case 9:
                row.freightBarang = $(this).text();
                break;
              case 10:
                row.cifBarang = $(this).text();
                break;
              case 11:
                row.jumlahKemasan = $(this).text();
                break;
              case 12:
                row.jenisKemasan = $(this).text();
                break;
              case 13:
                row.jumlahSatuan = $(this).text();
                break;
              case 14:
                row.kodeSatuan = $(this).text();
                break;
              case 15:
                row.hargaSatuan = $(this).text();
                break;
              case 16:
                row.nomorSkep = $(this).text();
                break;
              case 17:
                row.tglSkep = $(this).text();
                break;
              case 18:
                row.nomorImei1 = $(this).text();
                break;
              case 19:
                row.nomorImei2 = $(this).text();
                break;
              case 20:
                row.jenisTarifBm = $(this).text();
                break;
              case 21:
                row.tarifBm = $(this).text();
                break;
              case 22:
                row.nilaiBm = $(this).text();
                break;
              case 23:
                row.jenisTarifBmad = $(this).text();
                break;
              case 24:
                row.tarifBmad = $(this).text();
                break;
              case 25:
                row.nilaiBmad = $(this).text();
                break;
              case 26:
                row.jenisTarifBmtp = $(this).text();
                break;
              case 27:
                row.tarifBmtp = $(this).text();
                break;
              case 28:
                row.nilaiBmtp = $(this).text();
                break;
              case 29:
                row.tarifPpn = $(this).text();
                break;
              case 30:
                row.nilaiPpn = $(this).text();
                break;
              case 31:
                row.tarifPpnbm = $(this).text();
                break;
              case 32:
                row.nilaiPpnbm = $(this).text();
                break;
              case 33:
                row.tarifPph = $(this).text();
                break;
              case 34:
                row.nilaiPph = $(this).text();
                break;
            }
          });
          row.flagBebas = "0"
          table.push(row);
        });
        // console.log(table);

        return table;
      }

      function setConfirmationForm() {
        $("#confirmTitle").text(`PIBK ${$('#inputNomorBarang').val()}`);
        $("#readNomorBarang").val($('#inputNomorBarang').val());
        $("#readKantorSerah").val($("#selectKantorSerah option[value='" + $('#selectKantorSerah').val() + "']").text());
        $("#readKantorPabean").val($('#inputKantorPabean').val());
        $("#readPelabuhanMuat").val($("#selectPelabuhanMuat option[value='" + $('#selectPelabuhanMuat').val() + "']").text());
        $("#readPelabuhanBongkar").val($("#selectPelabuhanBongkar option[value='" + $('#selectPelabuhanBongkar').val() + "']").text());
        $("#readGudang").val($("#selectGudang option[value='" + $('#selectGudang').val() + "']").text());
        $("#readJenisAngkutan").val($("#selectJenisAngkutan option[value='" + $('#selectJenisAngkutan').val() + "']").text());
        $("#readNamaPengangkut").val($('#inputNamaPengangkut').val());
        $("#readNomorAngkutan").val($('#inputNomorAngkutan').val());
        $("#readNoBC").val($('#inputNoBC').val());
        $("#readTglBC").val($('#inputTglBC').val());
        $("#readNoPOSBC").val($('#inputNoPOSBC').val());
        $("#readNoSubPOSBC").val($('#inputNoSubPOSBC').val());
        $("#readNoSub2POSBC").val($('#inputNoSub2POSBC').val());
        $("#readJenisIDPemberitahu").val($("#selectJenisIDPemberitahu option[value='" + $('#selectJenisIDPemberitahu').val() + "']").text());
        $("#readNoIDPemberitahu").val($('#inputNoIDPemberitahu').val());
        $("#readNamaPemberitahu").val($('#inputNamaPemberitahu').val());
        $("#readAlamatPemberitahu").val($('#inputAlamatPemberitahu').val());
        $("#readNoIzinPemberitahu").val($('#inputNoIzinPemberitahu').val());
        $("#readTglIzinPemberitahu").val($('#inputTglIzinPemberitahu').val());
        $("#readJenisIDPenerima").val($("#selectJenisIDPenerima option[value='" + $('#selectJenisIDPenerima').val() + "']").text());
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
        $("#readNoKantong").val($('#inputNoKantong').val());
        $("#readNoInvoice").val($('#inputNoInvoice').val());
        $("#readTglInvoice").val($('#inputTglInvoice').val());
        $("#readKodeValuta").val($("#selectKodeValuta option[value='" + $('#selectKodeValuta').val() + "']").text());
        $("#readNilaiTukar").val($('#inputNilaiTukar').val());
        $("#readKodeMarketplace").val($('#inputKodeMarketplace').val());
        $("#readNamaMarketplace").val($('#inputNamaMarketplace').val());
        $("#table-barang-final").html($("#table-barang").html());
        $("#table-barang-final tr").each(function() {
          $(this).find("td:first").remove();
          $(this).find("td:first").remove();
        });
        $("#readTotalBrutoBarang").val($('#inputBrutoBarang').val());
        $("#readTotalNettoBarang").val($('#inputTotalNettoBarang').val());
        $("#readTotalFobBarang").val($('#inputTotalFobBarang').val());
        $("#readTotalAsuransiBarang").val($('#inputTotalAsuransiBarang').val());
        $("#readTotalFreightBarang").val($('#inputTotalFreightBarang').val());
        $("#readTotalCIFBarang").val($('#inputTotalCIFBarang').val());
        $("#readTotalBm").val($('#inputTotalBm').val());
        $("#readTotalBmad").val($('#inputTotalBmad').val());
        $("#readTotalBmtp").val($('#inputTotalBmtp').val());
        $("#readTotalPpn").val($('#inputTotalPpn').val());
        $("#readTotalPpnbm").val($('#inputTotalPpnbm').val());
        $("#readTotalPph").val($('#inputTotalPph').val());
        $("#readTotalTagihan").val($('#inputTotalTagihan').val());
      }

      function setObject(table) {
        body = {
          "bruto": $("input[name=inputBrutoBarang]").val(),
          "ndpbm": $("input[name=inputNilaiTukar]").val(),
          "netto": $("input[name=inputTotalNettoBarang]").val(),
          "barang": table,
          "posBC11": $("input[name=inputNoPOSBC]").val()+$("input[name=inputNoSubPOSBC]").val()+$("input[name=inputNoSub2POSBC]").val(),
          "totalBm": $("input[name=inputTotalBm]").val(),
          "cifTotal": $("input[name=inputTotalCIFBarang]").val(),
          "fobTotal": $("input[name=inputTotalFobBarang]").val(),
          "jenisAju": "2",
          "totalPph": $("input[name=inputTotalPph]").val(),
          "totalPpn": $("input[name=inputTotalPpn]").val(),
          "nomorBC11": $("input[name=inputNoBC]").val(),
          "totalBmad": $("input[name=inputTotalBmad]").val(),
          "totalBmtp": $("input[name=inputTotalBmtp]").val(),
          "kodeGudang": $("#selectGudang").val(),
          "kodeKantor": $("input[name=inputKantorPabean]").val(),
          "kodeValuta": $("#selectJenisIDPenerima").val(),
          "nomorHouse": $("input[name=inputNoHouseBLAWB]").val(),
          "totalPpnbm": $("input[name=inputTotalPpnbm").val(),
          "kodePelMuat": $("#selectPelabuhanMuat").val(),
          "nomorBarang": $("input[name=inputNomorBarang]").val(),
          "nomorFlight": $("input[name=inputNomorAngkutan]").val(),
          "nomorMaster": $("input[name=inputNoMasterBLAWB]").val(),
          "npwpBilling": $("input[name=inputNoIDPenerima]").val(),
          "tanggalBC11": $("input[name=inputTglBC]").val(),
          "freightTotal": $("input[name=inputTotalFreightBarang]").val(),
          "namaPenerima": $("input[name=inputNamaPenerima]").val(),
          "namaPengirim": $("input[name=inputNamaPengirim]").val(),
          "nomorInvoice": $("input[name=inputNoInvoice]").val(),
          "nomorKantong": $("input[name=inputNoKantong]").val(),
          "tanggalHouse": $("input[name=inputTglHouseBLAWB]").val(),
          "totalTagihan": $("input[name=inputTotalTagihan]").val(),
          "asuransiTotal": $("input[name=inputTotalAsuransiBarang]").val(),
          "kodeJenisPibk": "2",
          "tanggalMaster": $("input[name=inputTglMasterBLAWB]").val(),
          "alamatPenerima": $("input[name=inputAlamatPenerima]").val(),
          "alamatPengirim": $("input[name=inputAlamatPengirim]").val(),
          "kodeNegaraAsal": $("input[name=inputAsalNegara]").val(),
          "kodePelBongkar": $("#selectPelabuhanBongkar").val(),
          "namaPengangkut": $("input[name=inputNamaPengangkut]").val(),
          "nomorIdentitas": $("input[name=inputNoIDPenerima]").val(),
          "tanggalInvoice": $("input[name=inputTglInvoice]").val(),
          "kodeJenisAngkut": $("#selectJenisAngkutan").val(),
          "kodeMarketplace": $("input[name=inputKodeMarketplace]").val(),
          "namaMarketplace": $("input[name=inputNamaMarketplace]").val(),
          "npwpPemberitahu": $("input[name=inputNoIDPemberitahu]").val(),
          "kodeNegaraTujuan": $("input[name=inputNegaraTujuan]").val(),
          "nomorTelpPenerima": $("input[name=inputNoTeleponPenerima]").val(),
          "kodeJenisIdentitas": $("#selectJenisIDPenerima").val(),
          "kodeNegaraPengirim": $("input[name=inputAsalNegara]").val(),
        }

        return body;
      }

      function saveObject(data) {
        let pathArr = window.location.pathname.split('/')

        $.ajax({
          type: "post",
          url: "{{ route('saveObject') }}",
          data: {
            barcode: $("#inputNomorBarang").val(),
            uuid: pathArr[2],
            payload: data,
            "_token": "{{ csrf_token() }}"
          },
          dataType: "json",
          beforeSend: function() {
            $("#preloader").show()
          },
          success: function(response) {
            $("#preloader").hide()
            if(response.status == 1) {
              callToast("Success", response.message, 2)
              // Swal.fire({
              //   title: 'Success!',
              //   text: response.message,
              //   icon: 'success'
              // })
              console.log('object saved');
              console.log(response.data);
              setConfirmationForm();
            } else {
              callToast("Failed", response.message, 0)
              // Swal.fire({
              //   title: 'Failed!',
              //   text: response.message,
              //   icon: 'error'
              // })
            }
          },
          error: function(xhr, status, error) {
            $("#preloader").hide()
            alert(xhr.responseText)
          }
        });
      }

    });
  </script>
  {{-- <script>
    let addNewTransUrl = "{{ route('addNewTransaction') }}"
    let showFormUrl = "{{ route('showForm', ':id') }}"
    let saveObjectUrl = "{{ route('saveObject') }}"
  </script> --}}
  {{-- <script src="/assets/js/entry.js"></script> --}}
@endsection
