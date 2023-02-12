<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class entryController extends Controller
{
    public function show() {
        return view('section.entry', ["title" => "Entry Data"]);
    }

    public function show2() {
        return view('section.entry2', ["title" => "Entry Data"]);
    }

    public function show3() {
        $data = [
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
            "kodeGudang" => "IDPOS",
            "kodeKantor" => "11000",
            "kodeValuta" => "USD",
            "nomorHouse" => "",
            "totalPpnbm" => "0",
            "kodePelMuat" => "CN",
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
        ];

        return view('section.entry2', [
            "title" => "Entry Data",
            "data" => $data
        ]);
    }

    public function entry($id) {
        $data = [
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
            "kodeKantor" => "11000",
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
        ];

        return view('section.entry', [
            "title" => "Entry Data",
            "data" => $data
        ]);
    }
    
    public function addNewTransaction(Request $request) {
        $nomor_barang = $request->noBarang;
        
        // Http::fake([
        //     'asdf.com' => Http::response(["data" => [
        //         "bruto" => "1",
        //         "ndpbm" => "15000",
        //         "netto" => "2",
        //         "barang" => [
        //             [
        //                 "hsCode" => "320120320",
        //                 "nilaiBm" => "0",
        //                 "tarifBm" => "20",
        //                 "tglSkep" => "2021-11-30",
        //                 "nilaiPph" => "0",
        //                 "nilaiPpn" => "0",
        //                 "tarifPph" => "7.5",
        //                 "tarifPpn" => "11",
        //                 "cifBarang" => "0",
        //                 "flagBebas" => "0",
        //                 "fobBarang" => "1",
        //                 "nilaiBmad" => "0",
        //                 "nilaiBmtp" => "0",
        //                 "nomorSkep" => "-",
        //                 "tarifBmad" => "20",
        //                 "tarifBmtp" => "0",
        //                 "kodeSatuan" => "PCE",
        //                 "nilaiPpnbm" => "0",
        //                 "nomorImei1" => "-",
        //                 "nomorImei2" => "-",
        //                 "seriBarang" => "1",
        //                 "tarifPpnbm" => "0",
        //                 "hargaSatuan" => "0",
        //                 "nettoBarang" => "1",
        //                 "jenisKemasan" => "PK",
        //                 "jenisTarifBm" => "1",
        //                 "jumlahSatuan" => "1",
        //                 "uraianBarang" => "B",
        //                 "freightBarang" => "0",
        //                 "jumlahKemasan" => "1",
        //                 "asuransiBarang" => "1",
        //                 "jenisTarifBmad" => "1",
        //                 "jenisTarifBmtp" => "1",
        //                 "kodeNegaraAsal" => "ID"
        //             ],
        //             [
        //                 "hsCode" => "320120327",
        //                 "nilaiBm" => "0",
        //                 "tarifBm" => "20",
        //                 "tglSkep" => "2021-11-30",
        //                 "nilaiPph" => "0",
        //                 "nilaiPpn" => "0",
        //                 "tarifPph" => "7.5",
        //                 "tarifPpn" => "11",
        //                 "cifBarang" => "0",
        //                 "flagBebas" => "0",
        //                 "fobBarang" => "1",
        //                 "nilaiBmad" => "0",
        //                 "nilaiBmtp" => "0",
        //                 "nomorSkep" => "-",
        //                 "tarifBmad" => "20",
        //                 "tarifBmtp" => "0",
        //                 "kodeSatuan" => "PCE",
        //                 "nilaiPpnbm" => "0",
        //                 "nomorImei1" => "-",
        //                 "nomorImei2" => "-",
        //                 "seriBarang" => "1",
        //                 "tarifPpnbm" => "0",
        //                 "hargaSatuan" => "0",
        //                 "nettoBarang" => "1",
        //                 "jenisKemasan" => "PK",
        //                 "jenisTarifBm" => "1",
        //                 "jumlahSatuan" => "1",
        //                 "uraianBarang" => "B",
        //                 "freightBarang" => "0",
        //                 "jumlahKemasan" => "1",
        //                 "asuransiBarang" => "1",
        //                 "jenisTarifBmad" => "1",
        //                 "jenisTarifBmtp" => "1",
        //                 "kodeNegaraAsal" => "ID"
        //             ]
        //         ],
        //         "posBC11" => "002400000000",
        //         "totalBm" => "5600000",
        //         "cifTotal" => "0",
        //         "fobTotal" => "0",
        //         "jenisAju" => "2",
        //         "totalPph" => "2940000",
        //         "totalPpn" => "4312000",
        //         "nomorBC11" => "001677",
        //         "totalBmad" => "5600000",
        //         "totalBmtp" => "0",
        //         "kodeGudang" => "IDPOS",
        //         "kodeKantor" => "11000",
        //         "kodeValuta" => "USD",
        //         "nomorHouse" => "",
        //         "totalPpnbm" => "0",
        //         "kodePelMuat" => "CN",
        //         "nomorBarang" => "EE123456789JP",
        //         "nomorFlight" => "SQ0922",
        //         "nomorMaster" => "61841235401",
        //         "npwpBilling" => "010016202093000",
        //         "tanggalBC11" => "2022-07-01",
        //         "freightTotal" => "0",
        //         "namaPenerima" => "Ariansyah Nurhadi",
        //         "namaPengirim" => "Syarif Mahfud",
        //         "nomorInvoice" => "001",
        //         "nomorKantong" => "ID2113926731280",
        //         "tanggalHouse" => "2022-07-01",
        //         "totalTagihan" => "18452000",
        //         "asuransiTotal" => "0",
        //         "kodeJenisPibk" => "2",
        //         "tanggalMaster" => "2022-07-01",
        //         "alamatPenerima" => "",
        //         "alamatPengirim" => "",
        //         "kodeNegaraAsal" => "CN",
        //         "kodePelBongkar" => "IDSUB",
        //         "namaPengangkut" => "SINGAPORE AIRLINES",
        //         "nomorIdentitas" => "010016202093000",
        //         "tanggalInvoice" => "2022-07-01",
        //         "kodeJenisAngkut" => "4",
        //         "kodeMarketplace" => "-",
        //         "namaMarketplace" => "-",
        //         "npwpPemberitahu" => "010016202093000",
        //         "nomorTelpPenerima" => "0812929292929",
        //         "kodeJenisIdentitas" => "5",
        //         "kodeNegaraPengirim" => "CN"
        //     ]], 200)
        // ]);

        Http::fake([
            'asdf.com' => Http::response(['status' => 'success'])
        ]);

        $url = 'asdf.com';
        $response = Http::post($url);
        $responseJson = json_decode($response, true);
        // dd($responseJson["data"]);
        // echo('Kena');
        return $responseJson;
        // return view('section.entry2', [
        //     "title" => "Entry Data",
        //     "data" => $responseJson["data"]
        // ]);

        // return redirect()->route('showForm');
    }

    public function saveObject(Request $request) {
        $data = $request->data;
        // dd($data);
        
        Http::fake([
            'asdf.com' => Http::response(["data" => "ads"], 200)
        ]);

        $url = 'asdf.com';
        
        $body = [
            'username'=>'OVA000014',
            'password'=>'AAaa123$',
            'device_id'=> ''
        ];

        $headers = [
            'x-pos-user'=>"k3m1tr44n",
            'x-pos-password'=>"k3m1tr44nP445"
        ];

        // $response = Http::withHeaders($headers)->post($url, $body);
        $response = Http::post($url);
        // dd(json_decode($response, true));
        $responseJson = json_decode($response, true);
        return [
            "data" => $responseJson["data"],
            "status" => $response->status()
        ];
        
    }

    public function saveData() {

    }

    public function sendData() {

    }
}
