<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class entryController extends Controller
{
    public function show()
    {
        return view('section.entry', ["title" => "Entry Data"]);
    }

    public function show2()
    {
        return view('section.entry2', ["title" => "Entry Data"]);
    }

    public function show3()
    {
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

    public function addNewTransaction(Request $request)
    {
        $noBarcode = $request->noBarcode;
        // dd($noBarcode);
        $body = [
            "barcode" => $noBarcode,
            "idpetugas" => "990399060",
            "idkantor" => "40115"
        ];

        Http::fake([
            'asdf.com' => Http::response([
                'respcode' => '000',
                'respmsg' => 'Insert data berhasil',
                'transref' => 'f6d03ee2-b9af-4e7f-a526-930550269080',
                'dataresponse' => [
                    [
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
                        "kodeNegaraTujuan" => "ID",
                        "nomorTelpPenerima" => "0812929292929",
                        "kodeJenisIdentitas" => "5",
                        "kodeNegaraPengirim" => "CN"
                    ]
                ]
            ], 200)
        ]);

        // $url = 'asdf.com';
        // $url = 'http://10.29.41.45:8280/akidev/1.0/ceisa40_pibk_insert';
        $url = getenv('URL_ENDPOINT') . "ceisa40_pibk_insert";

        try {
            $response = Http::post($url, $body);
            $responseJson = json_decode($response, true);
            // dd($responseJson);
            if ($responseJson["respcode"] === "000") {
                $request->session()->put('data', $responseJson["dataresponse"][0]);

                // session(['data' => $responseJson["dataresponse"][0]]);

                return [
                    "status" => 1,
                    "message" => $responseJson["respmsg"],
                    "transref" => $responseJson["transref"]
                    // "data" => $responseJson["dataresponse"]
                ];

                // return redirect("/entry/{$responseJson["transref"]}")->with('data', $responseJson);
                // return redirect()->route('showForm', ['id' => $responseJson["transref"]])->with('data', $responseJson);

            } else {
                return ["status" => 0];
            }
        } catch (ConnectionException $e) {
            return $e->getMessage();
        }

        return $responseJson;
    }

    public function entry($id)
    {
        $data = session('data');
        session()->forget('data');
        // dd($data);

        // dd($data["dataresponse"][0]["nomorBarang"]);
        return view('section.entry', [
            "title" => "Entry Data",
            "data" => $data
        ]);
    }

    public function replaceNullWithEmptyString($array)
    {
        return array_map(function ($value) {
            return is_null($value) ? '' : $value;
        }, $array);
    }

    public function saveObject(Request $request)
    {
        $barcode = $request->barcode;
        $uuid = $request->uuid;
        $id_kantor_serah = $request->idKantorSerah;
        // dd(entryController::replaceNullWithEmptyString($request->payload));
        $payload = [];
        array_push($payload, $request->payload);

        // dd($payload);
        // dd($data);

        Http::fake([
            'asdf.com' => Http::response([
                'respcode' => '000',
                'respmsg' => 'Update data berhasil',
                'transref' => 'f6d03ee2-b9af-4e7f-a526-930550269080',
                'dataresponse' => [
                    "resp_uuid" => "f6d03ee2-b9af-4e7f-a526-930550269080",
                    "resp_idkantor" => "10900",
                    "resp_idkantor_serah" => "16400",
                    "resp_barcode" => "EE0994893899ID",
                    "resp_kdstatus" => "XXX",
                    "payloads" => [
                        [
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
                            "kodeNegaraTujuan" => "ID",
                            "nomorTelpPenerima" => "0812929292929",
                            "kodeJenisIdentitas" => "5",
                            "kodeNegaraPengirim" => "CN"
                        ]
                    ]
                ]
            ], 200)
        ]);

        // $url = 'asdf.com';
        $url = getenv('URL_ENDPOINT') . "ceisa40_pibk_update";
        // dd($url);
        $body = [
            "barcode" => $barcode,
            "idpetugas" => "990399060",
            "idkantor" => "40115",
            "idkantor_serah" => $id_kantor_serah,
            "uuid" => $uuid,
            "payload" => $payload
        ];

        // dd($body);

        // $url = "http://10.29.41.45:8280/akidev/1.0/ceisa40_pibk_update";

        // $response = Http::withHeaders($headers)->post($url, $body);
        try {
            $response = Http::post($url, $body);
            $responseJson = json_decode($response, true);
            // dd($responseJson);
            if (isset($responseJson)) {
                if ($responseJson["respcode"] === "000") {
                    // dd($responseJson);
                    return [
                        "status" => 1,
                        "message" => $responseJson["respmsg"],
                        "transref" => $responseJson["transref"],
                        "data" => $responseJson["dataresponse"]["payloads"][0]
                    ];
                } else {
                    return [
                        "status" => 0,
                        "message" => $responseJson["respmsg"]
                    ];
                }
            } else {
                return [
                    "status" => 0,
                    "message" => "NULL"
                ];
            }
        } catch (ConnectionException $e) {
            return $e->getMessage();
        }
    }

    public function getProfilPemberitahu(Request $request)
    {
        $npwp = $request->npwp;

        $url = "https://apis-gw.beacukai.go.id/v2/sce-ws/profil/perusahaan/perusahaan-by-npwp?npwp={$npwp}";

        try {
            $response = Http::withHeaders([
                'beacukai-api-key' => '6222a75e-1dbb-493e-9461-27f721097e9c',
                'Origin' => 'https://portal.beacukai.go.id',
                'Host' => 'apis-gw.beacukai.go.id'
            ])->get($url);

            $responseJson = json_decode($response, true);
            // dd($responseJson);

            if (isset($responseJson["Exception"])) {
                return [
                    "status" => 0,
                    "message" => $responseJson["Exception"]
                ];
            } else {
                return ["status" => 1];
            }
        } catch (ConnectionException $e) {
            return $e->getMessage();
        }
    }

    public function saveData(Request $request)
    {
        $barcode = $request->barcode;
        $uuid = $request->uuid;
        $id_kantor_serah = $request->idKantorSerah;
        // dd(entryController::replaceNullWithEmptyString($request->payload));
        $payload = [];
        array_push($payload, $request->payload);

        // dd($payload);
        // dd($data);

        Http::fake([
            'asdf.com' => Http::response([
                'respcode' => '000',
                'respmsg' => 'Update data berhasil',
                'transref' => 'f6d03ee2-b9af-4e7f-a526-930550269080',
                'dataresponse' => [
                    "resp_uuid" => "f6d03ee2-b9af-4e7f-a526-930550269080",
                    "resp_idkantor" => "10900",
                    "resp_idkantor_serah" => "16400",
                    "resp_barcode" => "EE0994893899ID",
                    "resp_kdstatus" => "000",
                    "payloads" => [
                        [
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
                            "kodeNegaraTujuan" => "ID",
                            "nomorTelpPenerima" => "0812929292929",
                            "kodeJenisIdentitas" => "5",
                            "kodeNegaraPengirim" => "CN"
                        ]
                    ]
                ]
            ], 200)
        ]);

        // $url = 'asdf.com';
        $url = getenv('URL_ENDPOINT') . "ceisa40_pibk_update_final";
        // dd($url);
        $body = [
            "barcode" => $barcode,
            "idpetugas" => "990399060",
            "idkantor" => "10900",
            "idkantor_serah" => $id_kantor_serah,
            "uuid" => $uuid,
            "payload" => $payload
        ];

        // dd($body);

        // $url = "http://10.29.41.45:8280/akidev/1.0/ceisa40_pibk_update";

        // $response = Http::withHeaders($headers)->post($url, $body);
        try {
            $response = Http::post($url, $body);
            $responseJson = json_decode($response, true);
            // dd($responseJson);
            if (isset($responseJson)) {
                if ($responseJson["respcode"] === "000") {
                    // dd($responseJson);
                    return [
                        "status" => 1,
                        "message" => $responseJson["respmsg"],
                        "transref" => $responseJson["transref"],
                        "data" => $responseJson["dataresponse"]["payloads"][0]
                    ];
                } else {
                    return [
                        "status" => 0,
                        "message" => $responseJson["respmsg"]
                    ];
                }
            } else {
                return [
                    "status" => 0,
                    "message" => "NULL"
                ];
            }
        } catch (ConnectionException $e) {
            return $e->getMessage();
        }
    }

    public function sendData()
    {
    }
}
