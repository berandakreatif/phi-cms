<div>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>{{$pageTitle ?? 'Page'}}</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                      <a name="" id="" class="btn btn-outline-primary btn-sm" href="{{url('admin/settings/create')}}" role="button">Add Widget</a>
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="datatable table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>X</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

  </div>
  @push('styles')
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  @endpush
  @push('scripts')
  <!-- DataTables  & Plugins -->
  <script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="{{asset('backend')}}/plugins/jszip/jszip.min.js"></script>
  <script src="{{asset('backend')}}/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="{{asset('backend')}}/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script>
      $(function () {
        $('.datatable').DataTable({
          "responsive": true,
          "lengthChange": true,
          "paging": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
          "responsive": true,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
      });
    </script>
  @endpush
