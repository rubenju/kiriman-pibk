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
                      <h5 class="fw-semibold">PIBK {{ $data['nomorBarang'] }}</h5>
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
                          <input type="text" class="form-control" id="readNomorBarang" name="readNomorBarang"
                            value="{{ $data['nomorBarang'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readKantorSerah" class="col-form-label col-md-5 col-xxl-4">Kantor Serah</label>
                        <div class="col-md-7 col-xxl-8">
                            <select class="form-select" id="readKantorSerah">
                              <option value="XX" selected>[ Pilih Kantor Serah ]</option>
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
                            </select>
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readKantorPabean" class="col-form-label col-md-5 col-xxl-4">Kantor Pabean</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readKantorPabean" name="readKantorPabean"
                            value="{{ $data["kodeKantor"] }}">
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
                          <select class="form-select" id="readPelabuhanMuat" name="readPelabuhanMuat">
                            <option value="XX" selected>[ Pilih Pelabuhan Muat ]</option>  
                            <option value="IDPSB" @selected($data["kodePelMuat"] == "IDPSB")>Jakarta / Pos Pasar Baru</option>
                            <option value="IDCGK" @selected($data["kodePelMuat"] == "IDCGK")>Cengkareng / Soetta</option>
                            <option value="IDSUB" @selected($data["kodePelMuat"] == "IDSUB")>Surabaya / Juanda</option>
                            <option value="IDDPS" @selected($data["kodePelMuat"] == "IDDPS")>Denpasar / Ngurah Rai</option>
                            <option value="IDTPP" @selected($data["kodePelMuat"] == "IDTPP")>Jakarta / Tanjung Priok</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readPelabuhanBongkar" class="col-form-label col-md-5 col-xxl-4">Pelabuhan
                          Bongkar</label>
                        <div class="col-md-7 col-xxl-8">
                          <select class="form-select" id="readPelabuhanBongkar" name="readPelabuhanBongkar">
                            <option value="XX" selected>[ Pilih Pelabuhan Bongkar ]</option>
                            <option value="IDPSB" @selected($data["kodePelBongkar"] == "IDPSB")>Jakarta / Pos Pasar Baru</option>
                            <option value="IDCGK" @selected($data["kodePelBongkar"] == "IDCGK")>Cengkareng / Soetta</option>
                            <option value="IDSUB" @selected($data["kodePelBongkar"] == "IDSUB")>Surabaya / Juanda</option>
                            <option value="IDDPS" @selected($data["kodePelBongkar"] == "IDDPS")>Denpasar / Ngurah Rai</option>
                            <option value="IDTPP" @selected($data["kodePelBongkar"] == "IDTPP")>Jakarta / Tanjung Priok</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readGudang" class="col-form-label col-md-5 col-xxl-4">Gudang</label>
                        <div class="col-md-7 col-xxl-8">
                          <select class="form-select" id="readGudang" name="readGudang" @disabled(!isset($data))>
                            <option value="XX" selected>[ Pilih Gudang ]</option>
                            <option value="GD01" @selected($data["kodeGudang"] == "GD01")>Gudang TPS Spp Jakarta</option>
                            <option value="GD02" @selected($data["kodeGudang"] == "GD02")>Gudang TPS e-Commerce</option>
                            <option value="GPOS" @selected($data["kodeGudang"] == "GPOS")>Gudang TPS Spp Surabaya</option>
                            <option value="IPOS" @selected($data["kodeGudang"] == "IPOS")>Gudang TPS Spp Denpasar</option>
                          </select>
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
                          <select class="form-select" id="readJenisAngkutan" name="readJenisAngkutan">
                            <option value="XX" selected>[ Pilih Jenis Angkutan ]</option>
                              <option value="1" @selected($data["kodeJenisAngkut"] == "1")>1 - Laut</option>
                              <option value="2" @selected($data["kodeJenisAngkut"] == "2")>2 - Kereta Api</option>
                              <option value="3" @selected($data["kodeJenisAngkut"] == "3")>3 - Darat</option>
                              <option value="4" @selected($data["kodeJenisAngkut"] == "4")>4 - Udara</option>
                              <option value="5" @selected($data["kodeJenisAngkut"] == "5")>5 - Pos</option>
                              <option value="6" @selected($data["kodeJenisAngkut"] == "6")>6 - Multi Moda</option>
                              <option value="7" @selected($data["kodeJenisAngkut"] == "7")>7 - Instalasi</option>
                              <option value="8" @selected($data["kodeJenisAngkut"] == "8")>8 - Perairan</option>
                              <option value="9" @selected($data["kodeJenisAngkut"] == "9")>9 - Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNamaPengangkut" class="col-form-label col-md-5 col-xxl-4">Nama Pengangkut</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNamaPengangkut" name="readNamaPengangkut"
                            value="{{ $data['namaPengangkut'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNomorAngkutan" class="col-form-label col-md-5 col-xxl-4">Nomor
                          Angkutan/Penerbangan</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNomorAngkutan" name="readNomorAngkutan"
                            value="{{ $data['nomorFlight'] }}">
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
                          <input type="text" class="form-control" id="readNoBC" name="readNoBC"
                            value="{{ $data['nomorBC11'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTglBC" class="col-form-label col-md-5 col-xxl-4">Tanggal BC 1.1</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTglBC" name="readTglBC"
                            value="{{ $data['tanggalBC11'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoPOSBC" class="col-form-label col-md-5 col-xxl-4">Nomor POS BC 1.1</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoPOSBC" name="readNoPOSBC"
                            value="{{ $data['posBC11'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoSubPOSBC" class="col-form-label col-md-5 col-xxl-4">Nomor SubPOS BC
                          1.1</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoSubPOSBC" name="readNoSubPOSBC"
                            value="">
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
                          <select class="form-select" id="readJenisIDPemberitahu"
                                name="readJenisIDPemberitahu">
                                <option value="XX">[ Pilih Jenis Identitas ]</option>
                                  <option value="0">0 - NPWP 12 DIGIT</option>
                                  <option value="1">1 - NPWP 10 DIGIT</option>
                                  <option value="2">2 - PASPOR</option>
                                  <option value="3">3 - KTP</option>
                                  <option value="4">4 - LAINNYA</option>
                                  <option value="5" selected>5 - NPWP 15 DIGIT</option>
                              </select>
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoIDPemberitahu" class="col-form-label col-md-5 col-xxl-4">No. ID
                          Pemberitahu</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoIDPemberitahu"
                            name="readNoIDPemberitahu" value="{{ $data['npwpPemberitahu'] }}">
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
                          <select class="form-select" id="readJenisIDPenerima" name="readJenisIDPenerima" @disabled(!isset($data))>
                            <option value="XX">[ Pilih Jenis Identitas ]</option>
                              <option value="0" @selected($data["kodeJenisIdentitas"] == "0")>0 - NPWP 12 DIGIT</option>
                              <option value="1" @selected($data["kodeJenisIdentitas"] == "1")>1 - NPWP 10 DIGIT</option>
                              <option value="2" @selected($data["kodeJenisIdentitas"] == "2")>2 - PASPOR</option>
                              <option value="3" @selected($data["kodeJenisIdentitas"] == "3")>3 - KTP</option>
                              <option value="4" @selected($data["kodeJenisIdentitas"] == "4")>4 - LAINNYA</option>
                              <option value="5" @selected($data["kodeJenisIdentitas"] == "5")>5 - NPWP 15 DIGIT</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoIDPenerima" class="col-form-label col-md-5 col-xxl-4">No. ID
                          Penerima</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoIDPenerima" name="readNoIDPenerima"
                            value="{{ $data["nomorIdentitas"] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNamaPenerima" class="col-form-label col-md-5 col-xxl-4">Nama
                          Penerima</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNamaPenerima" name="readNamaPenerima"
                            value="{{ $data['namaPenerima'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readAlamatPenerima" class="col-form-label col-md-5 col-xxl-4">Alamat
                          Penerima</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readAlamatPenerima" name="readAlamatPenerima"
                            value="{{ $data['alamatPenerima'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoTeleponPenerima" class="col-form-label col-md-5 col-xxl-4">No. Telepon
                          Penerima</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoTeleponPenerima"
                            name="readNoTeleponPenerima" value="{{ $data['nomorTelpPenerima'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNegaraTujuan" class="col-form-label col-md-5 col-xxl-4">Negara
                          Tujuan</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNegaraTujuan" name="readNegaraTujuan"
                            value="{{ $data["kodeNegaraAsal"] }}">
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
                          <input type="text" class="form-control" id="readNamaPengirim" name="readNamaPengirim"
                            value="{{ $data['namaPengirim'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readAlamatPengirim" class="col-form-label col-md-5 col-xxl-4">Alamat
                          Pengirim</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readAlamatPengirim" name="readAlamatPengirim"
                            value="{{ $data['alamatPengirim'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readAsalNegara" class="col-form-label col-md-5 col-xxl-4">Asal Negara</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readAsalNegara" name="readAsalNegara"
                            value="{{ $data['kodeNegaraAsal'] }}">
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
                          <input type="text" class="form-control" id="readNoMasterBLAWB" name="readNoMasterBLAWB"
                            value="{{ $data['nomorMaster'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTglMasterBLAWB" class="col-form-label col-md-5 col-xxl-4">Tanggal Master
                          BLAWB</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTglMasterBLAWB" name="readTglMasterBLAWB"
                            value="{{ $data['tanggalMaster'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readNoHouseBLAWB" class="col-form-label col-md-5 col-xxl-4">Nomor House
                          BLAWB</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readNoHouseBLAWB" name="readNoHouseBLAWB"
                            value="{{ $data['nomorHouse'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTglHouseBLAWB" class="col-form-label col-md-5 col-xxl-4">Tanggal House
                          BLAWB</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTglHouseBLAWB" name="readTglHouseBLAWB"
                            value="{{ $data['tanggalHouse'] }}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row justify-content-center">
                    <h6 class="form-title text-center">Detail Barang</h6>
                  </div>
                  <div class="row mb-3">
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
                              <td>Fob Barang</td>
                              <td>Asuransi Barang</td>
                              <td>Netto Barang</td>
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
                            @php
                              $i = 1;
                            @endphp
                            @foreach ($data['barang'] as $data_barang)
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data_barang['seriBarang'] }}</td>
                                <td>{{ $data_barang['hsCode'] }}</td>
                                <td>{{ $data_barang['uraianBarang'] }}</td>
                                <td>{{ $data_barang['kodeNegaraAsal'] }}</td>
                                <td>{{ $data_barang['fobBarang'] }}</td>
                                <td>{{ $data_barang['asuransiBarang'] }}</td>
                                <td>{{ $data_barang['nettoBarang'] }}</td>
                                <td>{{ $data_barang['freightBarang'] }}</td>
                                <td>{{ $data_barang['cifBarang'] }}</td>
                                <td>{{ $data_barang['jumlahKemasan'] }}</td>
                                <td>{{ $data_barang['jenisKemasan'] }}</td>
                                <td>{{ $data_barang['jumlahSatuan'] }}</td>
                                <td>{{ $data_barang['kodeSatuan'] }}</td>
                                <td>{{ $data_barang['hargaSatuan'] }}</td>
                                <td>{{ $data_barang['nomorSkep'] }}</td>
                                <td>{{ $data_barang['tglSkep'] }}</td>
                                <td>{{ $data_barang['nomorImei1'] }}</td>
                                <td>{{ $data_barang['nomorImei2'] }}</td>
                                <td>{{ $data_barang['jenisTarifBm'] }}</td>
                                <td>{{ $data_barang['tarifBm'] }}</td>
                                <td>{{ $data_barang['nilaiBm'] }}</td>
                                <td>{{ $data_barang['jenisTarifBmad'] }}</td>
                                <td>{{ $data_barang['tarifBmad'] }}</td>
                                <td>{{ $data_barang['nilaiBmad'] }}</td>
                                <td>{{ $data_barang['jenisTarifBmtp'] }}</td>
                                <td>{{ $data_barang['tarifBmtp'] }}</td>
                                <td>{{ $data_barang['nilaiBmtp'] }}</td>
                                <td>{{ $data_barang['tarifPpn'] }}</td>
                                <td>{{ $data_barang['nilaiPpn'] }}</td>
                                <td>{{ $data_barang['tarifPpnbm'] }}</td>
                                <td>{{ $data_barang['nilaiPpnbm'] }}</td>
                                <td>{{ $data_barang['tarifPph'] }}</td>
                                <td>{{ $data_barang['nilaiPph'] }}</td>
                              </tr>
                            @endforeach
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
                        <label for="readKodeValuta" class="col-form-label col-md-5 col-xxl-4">Kurs</label>
                        <div class="col-md-7 col-xxl-8">
                          <input class="form-control" id="readKodeValuta" name="readKodeValuta"
                            value="{{ $data['kodeValuta'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalFobBarang" class="col-form-label col-md-5 col-xxl-4">Total Fob
                          Barang</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalFobBarang" name="readTotalFobBarang"
                            value="{{ $data['fobTotal'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalAsuransiBarang" class="col-form-label col-md-5 col-xxl-4">Total Asuransi
                          Barang</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalAsuransiBarang"
                            name="readTotalAsuransiBarang" value="{{ $data['asuransiTotal'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalNettoBarang" class="col-form-label col-md-5 col-xxl-4">Total Netto
                          Barang</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalNettoBarang"
                            name="readTotalNettoBarang" value="{{ $data['netto'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalFreightBarang" class="col-form-label col-md-5 col-xxl-4">Total Freight
                          Barang</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalFreightBarang"
                            name="readTotalFreightBarang" value="{{ $data['freightTotal'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalCIFBarang" class="col-form-label col-md-5 col-xxl-4">Total CIF
                          Barang</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalCIFBarang" name="readTotalCIFBarang"
                            value="{{ $data['cifTotal'] }}">
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
                          <input class="form-control" id="readTotalBm" name="readTotalBm"
                            value="{{ $data['totalBm'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalBmad" class="col-form-label col-md-5 col-xxl-4">Total BMAD</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalBmad" name="readTotalBmad"
                            value="{{ $data['totalBmad'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalBmtp" class="col-form-label col-md-5 col-xxl-4">Total BMTP</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalBmtp" name="readTotalBmtp"
                            value="{{ $data['totalBmtp'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalPpn" class="col-form-label col-md-5 col-xxl-4">Total PPn</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalPpn" name="readTotalPpn"
                            value="{{ $data['totalPpn'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalPpnbm" class="col-form-label col-md-5 col-xxl-4">Total PPnBM</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalPpnbm" name="readTotalPpnbm"
                            value="{{ $data['totalPpnbm'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalPph" class="col-form-label col-md-5 col-xxl-4">Total PPh</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalPph" name="readTotalPph"
                            value="{{ $data['totalPph'] }}">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <label for="readTotalTagihan" class="col-form-label col-md-5 col-xxl-4">Total Tagihan</label>
                        <div class="col-md-7 col-xxl-8">
                          <input type="text" class="form-control" id="readTotalTagihan" name="readTotalTagihan"
                            value="{{ $data['totalTagihan'] }}">
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="row mt-2 justify-content-center">
                  <div class="col text-center">
                    <a type="button" class="btn btn-style fw-bold" onclick="history.back()"><i
                        class="bi bi-arrow-left me-2"></i>Kembali</a>
                    <a type="button" class="btn btn-send fw-bold" href="send/{{ $data['nomorBarang'] }}"><i
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
    $(document).ready(function() {});
  </script>
@endpush
