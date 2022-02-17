<?php include 'tools/navbar.php'; ?>
<?php include 'tools/sidebar/indexbar.php'; ?>

  <section class="content">
      <div class="container-fluid">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">IRCS Packing List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">IRCS Packing List</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-6">
              
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="row">
                  <div class="col-3">
                      <label for="">Date From:</label> <input type="date" id="datefrom" class="form-control"  autocomplete=off>
                  </div>
                  <div class="col-3">
                       <label for="">Date To:</label>  <input type="date" id="dateto" class="form-control"  autocomplete=off>
                  </div>
              </div>
    <!-- Main content -->
    <br>
       <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    <div class="row">
                      
            <table>
              <thead>
                 <tr>
                   <div class="col-sm-4">
                  <label for="">IP Address:</label> <input type="text" id="ip" class="form-control"  autocomplete=off>
                  </div>
                </tr>
                <tr>
                   <div class="col-sm-4">
                      <label for="">Line Name:</label> <input type="text" id="line" class="form-control" autocomplete=off>
         

                  </div>
                </tr>

                <tr>
                   <div class="col-sm-4">
                  <label for="">Lot:</label> <input type="text" id="lot" class="form-control"  autocomplete=off>
                  </div>
                </tr>

              </thead>
            </table>
          </div>
                </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <button class="btn btn-primary" id="searchReqBtn" onclick="search_packing()">Search <i class="fas fa-search"></i></button> 
                  </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-12">
                    <p style="text-align:right;">
                     <button class="btn btn-success" onclick="export_packing('packing_Export')">Export</button>
                    </p>
                  </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 420px; zoom:90%;">
                <table class="table table-head-fixed text-nowrap table-hover" id="packing_Export">
                 <thead style="text-align:center;">
                <th> # </th> 
                <th> Date Time</th>
                <th> Company Code</th>
                <th> Department</th>
                <th> Line Name</th>
                <th> Process</th>
                <th> Device ID</th>
                <th> IP Address</th>
                <th> Operator ID</th>
                <th> Parts Name</th>
                <th> Lot</th>
                <th> Serial</th>
                <th> Read Name</th>
                <th> Packing Box Card</th>
                <th> Packing Box Card Parts Name</th>
                <th> Packing Box Card Lot</th>
                <th> Packing Box Serial</th>
                <th> Packing Box Card Amount</th>
                <th> Packing Box Card Judgment</th>
                <th> Reset Supervisor ID</th>
                <th> Reset Supervisor Name</th>             
                </thead>
                <tbody id="packing_data" style="text-align:center;"></tbody>
                </table>
                   <div class="row">
                  <div class="col-6">
                    
                  </div>
                  <div class="col-6">
                      <input type="hidden" name="" id="masterlist">
   
                    <div class="spinner" id="spinner" style="display:none;">
                        
                        <div class="loader float-sm-center"></div>    
                    </div>
             
                  </div>

                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
</div>
</div>
</section>


<?php include 'tools/footer.php'; ?>
<?php include 'tools/javascript/index_script.php'; ?>