function scroll_to_class(element_class, removed_height) {
  var scroll_to = $(element_class).offset().top - removed_height;
  if ($(window).scrollTop() != scroll_to) {
    $('html, body').stop().animate({
      scrollTop: scroll_to
    }, 0);
  }
}

$(document).ready(function () {

  // $("input").not("#inputNomorBarang").prop("disabled", true);
  // $("select").prop("disabled", true);

  function validateDate(element) {
    let date;
    try {
      date = $.datepicker.parseDate("yy-mm-dd", element.value);
      if (date) {
        $(".invalid-date").remove();
      }
    } catch (error) {
      $(element).addClass('input-error');
      if (!$(element).next().hasClass('invalid-date')) {
        $(element).after("<p class='small invalid-date' style='color: red'>Tanggal invalid</p>");
      }
      date = null;
    }
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

    if (noBarang !== "") {
      getInitialJson(noBarang)
    } else {
      $("#inputNomorBarang").addClass('input-error')
    }
  })

  function getInitialJson(noBarang) {
    $.ajax({
      type: "post",
      url: addNewTransUrl,
      data: {
        noBarang: noBarang,
        "_token": "{{ csrf_token() }}"
      },
      dataType: "json",
      success: function (response) {
        let url = showFormUrl
        url = url.replace(':id', noBarang)
        document.location.replace(url)
      },
      error: function (xhr, status, error) {
        alert(xhr.responseText)
      }
    });
  }

  $("#form-pibk fieldset:first").fadeIn('slow')

  $('#form-pibk input[type="text"], #form-pibk input[type="date"], #form-pibk select').on('focus', function () {
    $(this).removeClass('input-error');
  });

  $("#form-pibk .btn-next").click(function (e) {
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
      console.log(body);
      saveObject(body)
      parent_fieldset.fadeOut(400, function () {
        current_active_step.removeClass('active').addClass('activated').next().addClass('active')
        $(this).next().fadeIn()
        scroll_to_class($('#form-pibk'), 20)
      });
    }
  });

  $("#form-pibk .btn-previous").click(function (e) {
    e.preventDefault();

    let current_active_step = $(this).parents('#form-pibk').find('.step.active')

    $(this).parents('fieldset').fadeOut(400, function () {
      current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
      $(this).prev().fadeIn();
      scroll_to_class($('#form-pibk'), 20);
    })
  });

  $('#btn-save').on('click', function (e) {
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

  $('#btn-send').on('click', function (e) {
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

  $("#selectAll").click(function () {
    $(".selectRow").prop("checked", $(this).prop("checked"));
  });

  $(".selectRow").click(function () {
    if (!$(this).prop("checked")) {
      $("#selectAll").prop("checked", false);
    }

    if ($(this).prop("checked")) {
      let row = $(this).parent().parent();
      let content = row.find("td:eq(1)").text();
    }
  });

  $("#btn-add").click(function (e) {
    e.preventDefault();
    let rowCount = $("#table-barang tbody tr").length;

    let formBarang = $(".form-barang")

    let newRow = $('<tr>')
    newRow.append('<td><input type="checkbox" class="selectRow"></td>');
    newRow.append(`<td>${rowCount + 1}</td>`);
    formBarang.each(function () {
      console.log($(this).val());
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

    // Swal.fire({
    //   title: 'Success!',
    //   text: 'Insert success',
    //   icon: 'success'
    // });
  })

  function sumDataBarang() {
    let sumFob = 0, sumAsuransi = 0, sumNetto = 0, sumFreight = 0, sumCif = 0, sumBm = 0,
      sumBmad = 0, sumBmtp = 0, sumPpn = 0, sumPpnbm = 0, sumPph = 0, totalTagihan = 0;
    $("#table-barang tbody tr").each(function () {
      sumFob += isNaN(parseFloat($(this).find("td:eq(6)").text())) ? 0 : parseFloat($(this).find("td:eq(6)").text());
      sumAsuransi += isNaN(parseFloat($(this).find("td:eq(7)").text())) ? 0 : parseFloat($(this).find("td:eq(7)").text());
      sumNetto += isNaN(parseFloat($(this).find("td:eq(8)").text())) ? 0 : parseFloat($(this).find("td:eq(8)").text());
      sumFreight += isNaN(parseFloat($(this).find("td:eq(9)").text())) ? 0 : parseFloat($(this).find("td:eq(9)").text());
      sumCif += isNaN(parseFloat($(this).find("td:eq(10)").text())) ? 0 : parseFloat($(this).find("td:eq(10)").text());
      sumBm += isNaN(parseFloat($(this).find("td:eq(22)").text())) ? 0 : parseFloat($(this).find("td:eq(22)").text());
      sumBmad += isNaN(parseFloat($(this).find("td:eq(25)").text())) ? 0 : parseFloat($(this).find("td:eq(25)").text());
      sumBmtp += isNaN(parseFloat($(this).find("td:eq(28)").text())) ? 0 : parseFloat($(this).find("td:eq(28)").text());
      sumPpn += isNaN(parseFloat($(this).find("td:eq(30)").text())) ? 0 : parseFloat($(this).find("td:eq(30)").text());
      sumPpnbm += isNaN(parseFloat($(this).find("td:eq(32)").text())) ? 0 : parseFloat($(this).find("td:eq(32)").text());
      sumPph += isNaN(parseFloat($(this).find("td:eq(34)").text())) ? 0 : parseFloat($(this).find("td:eq(34)").text());
    })
    totalTagihan = sumBm + sumBmad + sumBmtp + sumPpn + sumPpnbm + sumPph;
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

  $("#btn-delete").click(function (e) {
    e.preventDefault();

    let checkedRows = $('#table-barang input:checked.selectRow').parent().parent()
    checkedRows.remove();
    updateIndex()
    sumDataBarang()
  });

  function updateIndex() {
    $('#table-barang tbody tr').each(function (index) {
      $(this).find('td:eq(1)').text(index + 1);
    })
  }

  function getTableBarangObject() {
    let table = [];
    $("#table-barang tbody tr").each(function () {
      let row = {};
      $(this).find("td").each(function (index) {
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
            row.fobBarang = $(this).text();
            break;
          case 7:
            row.asuransiBarang = $(this).text();
            break;
          case 8:
            row.nettoBarang = $(this).text();
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
    $("#table-barang-final").html($("#table-barang").html());
    $("#table-barang-final tr").each(function () {
      $(this).find("td:first").remove();
    });
    console.log($('#selectKodeValuta').val());
    $("#readKodeValuta").val($("#selectKodeValuta option[value='" + $('#selectKodeValuta').val() + "']").text());
    $("#readTotalFobBarang").val($('#inputTotalFobBarang').val());
    $("#readTotalAsuransiBarang").val($('#inputTotalAsuransiBarang').val());
    $("#readTotalNettoBarang").val($('#inputTotalNettoBarang').val());
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
      "bruto": "1",
      "ndpbm": "15000",
      "netto": $("input[name=inputTotalNettoBarang]").val(),
      "barang": table,
      "posBC11": $("input[name=inputNoPOSBC]").val(),
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
      "kodeKantor": $("#selectKantorSerah").val(),
      "kodeValuta": $("#selectJenisIDPenerima").val(),
      "nomorHouse": $("input[name=inputNoHouseBLAWB]").val(),
      "totalPpnbm": $("input[name=inputTotalPpnbm").val(),
      "kodePelMuat": $("#selectPelabuhanMuat").val(),
      "nomorBarang": $("input[name=inputNomorBarang]").val(),
      "nomorFlight": $("input[name=inputNomorAngkutan]").val(),
      "nomorMaster": $("input[name=inputNoMasterBLAWB]").val(),
      "npwpBilling": "010016202093000",
      "tanggalBC11": $("input[name=inputTglBC]").val(),
      "freightTotal": $("input[name=inputTotalFreightBarang]").val(),
      "namaPenerima": $("input[name=inputNamaPenerima]").val(),
      "namaPengirim": $("input[name=inputNamaPengirim]").val(),
      "nomorInvoice": "001",
      "nomorKantong": "ID2113926731280",
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
      "tanggalInvoice": "2022-07-01",
      "kodeJenisAngkut": $("#selectJenisAngkutan").val(),
      "kodeMarketplace": "-",
      "namaMarketplace": "-",
      "npwpPemberitahu": $("input[name=inputNoIDPemberitahu]").val(),
      "nomorTelpPenerima": $("input[name=inputNoTeleponPenerima]").val(),
      "kodeJenisIdentitas": $("#selectJenisIDPenerima").val(),
      "kodeNegaraPengirim": $("input[name=inputAsalNegara]").val(),
    }

    return body;
  }

  function saveObject(data) {
    $.ajax({
      type: "post",
      url: saveObjectUrl,
      data: data,
      dataType: "json",
      success: function (response) {
        console.log(response);
        console.log('object saved');
        setConfirmationForm();
      },
      error: function (xhr, status, error) {
        alert(xhr.responseText)
      }
    });
  }

});