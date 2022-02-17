<?php include 'tools/navbar.php'; ?>
<?php include 'tools/sidebar/productbar.php'; ?>

  <section class="content">
      <div class="container-fluid">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">IRCS Product List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">IRCS Product List</li>
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
                      <span for="">Date From:</span> <input type="datetime-local" id="datefrom" class="form-control"  autocomplete=off>
                  </div>
                  <div class="col-3">
                       <span for="">Date To:</span>  <input type="datetime-local" id="dateto" class="form-control"  autocomplete=off>
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
                  <span for="">IP Address:</span> <input type="text" id="ip" class="form-control"  autocomplete=off>
                  </div>
                </tr>
                <tr>
                   <div class="col-sm-4">
                   
                  <span for="">Line Name:</span>  <input type="text" id="line" class="form-control" autocomplete=off>

                  </div>
                </tr>

                <tr>
                   <div class="col-sm-4">
                  <span for="">Lot:</span> <input type="text" id="lot" class="form-control"  autocomplete=off>
                  </div>
                </tr>

              </thead>
            </table>
          </div>
                </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <button class="btn btn-primary" id="searchReqBtn" onclick="search_product()">Search <i class="fas fa-search"></i></button> 
                  </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-12">
                    <p style="text-align:right;">
                     <button class="btn btn-success" onclick="export_product('product_Export')">Export</button>
                    </p>
                  </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 420px; zoom:90%;">
                <table class="table table-head-fixed text-nowrap table-hover" id="product_Export">
                 <thead style="text-align:center;">
               <tr >
                  <th COLspan="12" style="border: 2px solid black;" > Register</th>
                  <th COLspan="8" style="border: 2px solid black;"> Inspection 1</th>
                  <th COLspan="8" style="border: 2px solid black;"> Inspection 2</th>
                  <th COLspan="8" style="border: 2px solid black;"> Inspection 3</th>
                  <th COLspan="8" style="border: 2px solid black;"> Inspection 4</th>
                  <th COLspan="8" style="border: 2px solid black;"> Inspection 5</th>
                  <th COLspan="8" style="border: 2px solid black;"> Inspection 6</th>
                  <th COLspan="8" style="border: 2px solid black;"> Inspection 7</th>
                  <th COLspan="8" style="border: 2px solid black;"> Inspection 8</th>
                  <th COLspan="8" style="border: 2px solid black;"> </th>
                  <th COLspan="8" style="border: 2px solid black;"> Inspection 9</th>
                  <th COLspan="6" style="border: 2px solid black;"> Inspection 10</th>
                </tr>
              </thead>
              <thead>
                <tr>
                  <!-- INSPECTION  -->
                  <th>Date Time</th>
                  <th>Company Code</th>
                  <th>Department</th>
                  <th>Line Name</th>
                  <th>Process</th>
                  <th>Device ID</th>
                  <th>IP Address</th>
                  <th>Operator ID</th>
                  <th>Parts Name</th>
                  <th>Lot</th>
                  <th>Serial</th>
                  <th>Read Name</th>
                  <!-- INSPECTION 1 -->
                  <th>Period</th>
                  <th>Operator ID</th>
                  <th>IP Address</th>
                  <th>Start Date/ Time</th>
                  <th>Finished Date/ Time</th>
                  <th>Judgement</th>
                  <th>Packing Check Code</th>
                  <th>Packing CheckJ</th>
                  <!-- INSPECTION 2 -->
                  <th>Period</th>
                  <th>Operator ID</th>
                  <th>IP Address</th>
                  <th>Start Date/ Time</th>
                  <th>Finished Date/ Time</th>
                  <th>Judgement</th>
                  <th>Packing Check Code</th>
                  <th>Packing CheckJ</th>
                  <!-- INSPECTION 3 -->
                  <th>Period</th>
                  <th>Operator ID</th>
                  <th>IP Address</th>
                  <th>Start Date/ Time</th>
                  <th>Finished Date/ Time</th>
                  <th>Judgement</th>
                  <th>Packing Check Code</th>
                  <th>Packing CheckJ</th>
                  <!-- INSPECTION 4 -->
                  <th>Period</th>
                  <th>Operator ID</th>
                  <th>IP Address</th>
                  <th>Start Date/ Time</th>
                  <th>Finished Date/ Time</th>
                  <th>Judgement</th>
                  <th>Packing Check Code</th>
                  <th>Packing CheckJ</th>
                  <!-- INSPECTION 5 -->
                  <th>Period</th>
                  <th>Operator ID</th>
                  <th>IP Address</th>
                  <th>Start Date/ Time</th>
                  <th>Finished Date/ Time</th>
                  <th>Judgement</th>
                  <th>Packing Check Code</th>
                  <th>Packing CheckJ</th>
                  <!-- INSPECTION 6 -->
                  <th>Period</th>
                  <th>Operator ID</th>
                  <th>IP Address</th>
                  <th>Start Date/ Time</th>
                  <th>Finished Date/ Time</th>
                  <th>Judgement</th>
                  <th>Packing Check Code</th>
                  <th>Packing CheckJ</th>
                  <!-- INSPECTION 7 -->
                  <th>Period</th>
                  <th>Operator ID</th>
                  <th>IP Address</th>
                  <th>Start Date/ Time</th>
                  <th>Finished Date/ Time</th>
                  <th>Judgement</th>
                  <th>Packing Check Code</th>
                  <th>Packing CheckJ</th>
                  <!-- INSPECTION 8 -->
                  <th>Period</th>
                  <th>Operator ID</th>
                  <th>IP Address</th>
                  <th>Start Date/ Time</th>
                  <th>Finished Date/ Time</th>
                  <th>Judgement</th>
                  <th>Packing Check Code</th>
                  <th>Packing CheckJ</th>
                  <!-- Repair  -->
                  <th>Last Repair Card Number</th>
                  <th>Repair Result</th>
                  <th>Reset Supervisor ID</th>
                  <th>Reset Supervisor Name</th>
                  <th>Now Mode</th>
                  <th>Message Code</th>
                  <th>Final Inspection Name</th>
                  <th>Final Inspection Judgement</th>
                  <!-- INSPECTION 9 -->
                  <th>Period</th>
                  <th>Operator ID</th>
                  <th>IP Address</th>
                  <th>Start Date/ Time</th>
                  <th>Finished Date/ Time</th>
                  <th>Judgement</th>
                  <th>Packing Check Code</th>
                  <th>Packing CheckJ</th>
                  <!-- INSPECTION 10 -->
                  <th>Period</th>
                  <th>Operator ID</th>
                  <th>IP Address</th>
                  <th>Start Date/ Time</th>
                  <th>Finished Date/ Time</th>
                  <th>Judgement</th>
                </tr>
                </thead>
                <tbody id="product_data" style="text-align:center;"></tbody>
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
<?php include 'tools/javascript/product_script.php'; ?>