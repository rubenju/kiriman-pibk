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
            <div class="row card-form box-style mt-4 py-3">
              <div class="col">
                <div class="row mb-3">
                  <h5 class="fw-bold">Daftar Pengajuan PIBK</h5>
                </div>
                <div class="row">
                  <h6 class="fw-bold">Select Date</h6>
                </div>
                <div class="row">
                  <div class="col-12 col-sm-3">
                    <label for="selectTglFrom" class="form-label">Form</label>
                    <input type="text" class="form-control" name="selectTglFrom" id="selectTglFrom"
                      placeholder="yyyy-mm-dd" autocomplete="off">
                  </div>
                  <div class="col-12 col-sm-3">
                    <label for="selectTglTo" class="form-label">To</label>
                    <input type="text" class="form-control" name="selectTglTo" id="selectTglTo"
                      placeholder="yyyy-mm-dd" autocomplete="off">
                  </div>
                  <div class="col-12 col-sm-3 mt-3 mt-md-0 align-self-end">
                    <x-button id="btnBrowseData"><i class="bi bi-cloud-arrow-down-fill me-2"></i>Browse Data</x-button>
                    {{-- <button type="button" class="btn btn-style" id="btnBrowseData"><i class="bi bi-cloud-arrow-down-fill me-2"></i>Browse Data</button> --}}
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="box-style p-2 my-3" id="browse-content">
                      <div class="table-responsive">
                        <table class="table border rounded-3 table-striped" id="table-data">
                          <thead class="fw-semibold">
                            <tr>
                              <td>No. Barang</td>
                              <td>Detail BC 1.1</td>
                              <td>No. ID Pemberitahu</td>
                              <td>No. Master BLAWB</td>
                              <td>Nama Pengirim</td>
                              <td>Alamat Pengirim</td>
                              <td>Nama Penerima</td>
                              <td>Alamat Penerima</td>
                              <td>Seri Barang</td>
                              <td>HSCODE</td>
                              <td>Status</td>
                              <td>Action</td>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
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
    $(document).ready(function() {
      $("#selectTglFrom").datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
      })

      $("#selectTglTo").datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
      })

      $("#selectTglFrom").on("change", function() {
        $("#selectTglTo").datepicker("option", "minDate", getDate(this));
      })

      $("#selectTglTo").on("change", function() {
        $("#selectTglFrom").datepicker("option", "maxDate", getDate(this));
      });

      function getDate(element) {
        let date;
        try {
          date = $.datepicker.parseDate("yy-mm-dd", element.value);
        } catch (error) {
          date = null;
        }

        return date;
      }

      $("#btnBrowseData").click(function(e) {
        e.preventDefault();

        $("#browse-content").show();

        $.ajax({
          type: "post",
          url: "{{ route('getData') }}",
          data: {
            tglAwal: $("#selectTglFrom").val(),
            tglAkhir: $("#selectTglTo").val(),
            "_token": "{{ csrf_token() }}"
          },
          beforeSend: function() {
            $("#preloader").show()
            $(".container-blur").addClass('active');
          },
          dataType: "json",
          success: function(response) {
            if (response.status == 1) {
              // Swal.fire({
              //   title: 'Success!',
              //   text: 'Data ditemukan',
              //   icon: 'success'
              // });
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
            $("#preloader").hide()
            $("#table-data").DataTable();
            $(".container-blur").removeClass('active');
          },
          error: function(xhr, status, error) {
            $("#preloader").hide()
            $(".container-blur").removeClass('active');
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
