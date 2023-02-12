<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class browseController extends Controller
{
    public function show()
    {
        return view('section.browse', ["title" => "Browse Data"]);
    }

    public function getData(Request $request)
    {
        $tglAwal = $request->tglAwal;
        $tglAkhir = $request->tglAkhir;

        Http::fake([
            'asdf.com' => Http::response(["data" => [
                [
                    "noBarang" => "012756310372",
                    "detailBC" => "180190",
                    "idPemberitahu" => "010016202093000",
                    "noMaster" => "JPTKYIAA0978278",
                    "namaPengirim" => "Vladimir",
                    "almtPengirim" => "Moscow",
                    "namaPenerima" => "PT Pos Indonesia (Persero)",
                    "almtPenerima" => "Jl. Lapangan Banteng Utara no. 1 Jakarta Pusat",
                    "seriBarang" => "1",
                    "hsCode" => "320120320",
                    "status" => "1"
                ],
                [
                    "noBarang" => "012756310374",
                    "detailBC" => "180190",
                    "idPemberitahu" => "010016202093000",
                    "noMaster" => "JPTKYIAA0978278",
                    "namaPengirim" => "Vladimir",
                    "almtPengirim" => "Moscow",
                    "namaPenerima" => "PT Pos Indonesia (Persero)",
                    "almtPenerima" => "Jl. Lapangan Banteng Utara no. 1 Jakarta Pusat",
                    "seriBarang" => "1",
                    "hsCode" => "320120320",
                    "status" => "2"
                ],
                [
                    "noBarang" => "012756310376",
                    "detailBC" => "180190",
                    "idPemberitahu" => "010016202093000",
                    "noMaster" => "JPTKYIAA0978278",
                    "namaPengirim" => "Vladimir",
                    "almtPengirim" => "Moscow",
                    "namaPenerima" => "PT Pos Indonesia (Persero)",
                    "almtPenerima" => "Jl. Lapangan Banteng Utara no. 1 Jakarta Pusat",
                    "seriBarang" => "1",
                    "hsCode" => "320120320",
                    "status" => "3"
                ]
            ]], 200)
        ]);

        $url = 'asdf.com';

        try {
            $response = Http::post($url);
            $responseJson = json_decode($response, true);
            $all_data = $responseJson["data"];
            $rows = '';

            if (count($all_data) != 0) {
                foreach ($all_data as $data) {
                    $noBarang = $data["noBarang"];
                    $detailBC = $data["detailBC"];
                    $idPemberitahu = $data["idPemberitahu"];
                    $noMaster = $data["noMaster"];
                    $namaPengirim = $data["namaPengirim"];
                    $almtPengirim = $data["almtPengirim"];
                    $namaPenerima = $data["namaPenerima"];
                    $almtPenerima = $data["almtPenerima"];
                    $seriBarang = $data["seriBarang"];
                    $hsCode = $data["hsCode"];
                    $status = $data["status"];
                    $button = '';
                    if ($status == 1) {
                        $status = '<span style="color: #dc3545">Belum simpan final</span>';
                        $button .= '<a type="button" class="btn btn-sm m-1" href="entry/' . $noBarang . '"><i class="bi bi-pencil-square me-1"></i>Edit data</a>';
                        $button .= '<a type="button" class="btn btn-sm m-1" href="save/' . $noBarang . '"><i class="ri-save-2-line me-1"></i>Simpan final</a>';
                    } else if ($status == 2) {
                        $status = '<span style="color: #ffc107">Belum kirim data</span>';
                        $button .= '<a type="button" class="btn btn-sm m-1" href="detail/' . $noBarang . '"><i class="bi bi-eye me-1"></i>Lihat detail</a>';
                        $button .= '<a type="button" class="btn btn-sm m-1" href="send/' . $noBarang . '"><i class="ri-send-plane-fill me-1"></i>Kirim data</a>';
                    } else {
                        $status = '<span style="color: #198754">Sudah kirim data</span>';
                        $button .= '<a type="button" class="btn btn-sm m-1" href="detail/' . $noBarang . '"><i class="bi bi-eye me-1"></i>Lihat detail</a>';
                        $button .= '<a type="button" class="btn btn-sm m-1" href="status/' . $noBarang . '"><i class="bi bi-check2-square me-1"></i>Lihat status pengajuan</a>';
                    }
                    $rows .= '
                    <tr>
                        <td>' . $noBarang . '</td>
                        <td>' . $detailBC . '</td>
                        <td>' . $idPemberitahu . '</td>
                        <td>' . $noMaster . '</td>
                        <td>' . $namaPengirim . '</td>
                        <td>' . $almtPengirim . '</td>
                        <td>' . $namaPenerima . '</td>
                        <td>' . $almtPenerima . '</td>
                        <td>' . $seriBarang . '</td>
                        <td>' . $hsCode . '</td>
                        <td>' . $status . '</td>
                        <td>' . $button . '</td>
                    </tr>
                ';
                }

                return [
                    "data" => $rows,
                    "status" => 1
                ];
            } else {
                return [
                    "data" => "Data tidak ditemukan",
                    "status" => 0
                ];
            }
        } catch (ConnectionException $e) {
            return $e->getMessage();
        }
    }

    public function showDetail($id)
    {
        Http::fake([
            'asdf.com' => Http::response(["data" => [
                "bruto" => "1",
                "ndpbm" => "15000",
                "netto" => "2",
                "barang" => [
                    [
                        "hsCode" => "320120320",
                        "nilaiBm" => "0",
                        "tarifBm" => "20",
                        "tglSkep" => "2021-11-30",
                        "nilaiPph" => "0",
                        "nilaiPpn" => "0",
                        "tarifPph" => "7.5",
                        "tarifPpn" => "11",
                        "cifBarang" => "0",
                        "flagBebas" => "0",
                        "fobBarang" => "1",
                        "nilaiBmad" => "0",
                        "nilaiBmtp" => "0",
                        "nomorSkep" => "-",
                        "tarifBmad" => "20",
                        "tarifBmtp" => "0",
                        "kodeSatuan" => "PCE",
                        "nilaiPpnbm" => "0",
                        "nomorImei1" => "-",
                        "nomorImei2" => "-",
                        "seriBarang" => "1",
                        "tarifPpnbm" => "0",
                        "hargaSatuan" => "0",
                        "nettoBarang" => "1",
                        "jenisKemasan" => "PK",
                        "jenisTarifBm" => "1",
                        "jumlahSatuan" => "1",
                        "uraianBarang" => "B",
                        "freightBarang" => "0",
                        "jumlahKemasan" => "1",
                        "asuransiBarang" => "1",
                        "jenisTarifBmad" => "1",
                        "jenisTarifBmtp" => "1",
                        "kodeNegaraAsal" => "ID"
                    ],
                    [
                        "hsCode" => "320120327",
                        "nilaiBm" => "0",
                        "tarifBm" => "20",
                        "tglSkep" => "2021-11-30",
                        "nilaiPph" => "0",
                        "nilaiPpn" => "0",
                        "tarifPph" => "7.5",
                        "tarifPpn" => "11",
                        "cifBarang" => "0",
                        "flagBebas" => "0",
                        "fobBarang" => "1",
                        "nilaiBmad" => "0",
                        "nilaiBmtp" => "0",
                        "nomorSkep" => "-",
                        "tarifBmad" => "20",
                        "tarifBmtp" => "0",
                        "kodeSatuan" => "PCE",
                        "nilaiPpnbm" => "0",
                        "nomorImei1" => "-",
                        "nomorImei2" => "-",
                        "seriBarang" => "1",
                        "tarifPpnbm" => "0",
                        "hargaSatuan" => "0",
                        "nettoBarang" => "1",
                        "jenisKemasan" => "PK",
                        "jenisTarifBm" => "1",
                        "jumlahSatuan" => "1",
                        "uraianBarang" => "B",
                        "freightBarang" => "0",
                        "jumlahKemasan" => "1",
                        "asuransiBarang" => "1",
                        "jenisTarifBmad" => "1",
                        "jenisTarifBmtp" => "1",
                        "kodeNegaraAsal" => "ID"
                    ]
                ],
                "posBC11" => "002400000000",
                "totalBm" => "5600000",
                "cifTotal" => "0",
                "fobTotal" => "0",
                "jenisAju" => "2",
                "totalPph" => "2940000",
                "totalPpn" => "4312000",
                "nomorBC11" => "001677",
                "totalBmad" => "5600000",
                "totalBmtp" => "0",
                "kodeGudang" => "IPOS",
                "kodeKantor" => "28500",
                "kodeValuta" => "USD",
                "nomorHouse" => "",
                "totalPpnbm" => "0",
                "kodePelMuat" => "IDPSB",
                "nomorBarang" => "EE123456789JP",
                "nomorFlight" => "SQ0922",
                "nomorMaster" => "61841235401",
                "npwpBilling" => "010016202093000",
                "tanggalBC11" => "2022-07-01",
                "freightTotal" => "0",
                "namaPenerima" => "Ariansyah Nurhadi",
                "namaPengirim" => "Syarif Mahfud",
                "nomorInvoice" => "001",
                "nomorKantong" => "ID2113926731280",
                "tanggalHouse" => "2022-07-01",
                "totalTagihan" => "18452000",
                "asuransiTotal" => "0",
                "kodeJenisPibk" => "2",
                "tanggalMaster" => "2022-07-01",
                "alamatPenerima" => "",
                "alamatPengirim" => "",
                "kodeNegaraAsal" => "CN",
                "kodePelBongkar" => "IDSUB",
                "namaPengangkut" => "SINGAPORE AIRLINES",
                "nomorIdentitas" => "010016202093000",
                "tanggalInvoice" => "2022-07-01",
                "kodeJenisAngkut" => "4",
                "kodeMarketplace" => "-",
                "namaMarketplace" => "-",
                "npwpPemberitahu" => "010016202093000",
                "nomorTelpPenerima" => "0812929292929",
                "kodeJenisIdentitas" => "5",
                "kodeNegaraPengirim" => "CN"
            ]], 200)
        ]);

        $url = 'asdf.com';

        try {
            $response = Http::post($url, $id);
            $responseJson = json_decode($response, true);
            $data = $responseJson["data"];
            // dd($responseJson);

            return view('section.detail', [
                "title" => "Detail Data",
                "data" => $data
            ]);
        } catch (ConnectionException $e){
            return $e->getMessage();
        }
    }

    public function showDetail2($id)
    {
        return view('section.detail2', ["title" => "Detail Data"]);
    }

    public function editData($id)
    {
        return view('section.entry', ["title" => "Edit Data"]);
    }

    public function saveData($id)
    {
    }

    public function sendData($id)
    {
    }

    public function getStatus($id)
    {
    }
}
