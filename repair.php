<?php include 'tools/navbar.php'; ?>
<?php include 'tools/sidebar/repairbar.php'; ?>

  <section class="content">
      <div class="container-fluid">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">IRCS Repair List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">IRCS Repair List</li>
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
                      <span for="">Date From:</span> <input type="date" id="datefrom" class="form-control"  autocomplete=off>
                  </div>
                  <div class="col-3">
                       <span for="">Date To:</span>  <input type="date" id="dateto" class="form-control"  autocomplete=off>
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
                    <button class="btn btn-primary" id="searchReqBtn" onclick="search_repair()">Search <i class="fas fa-search"></i></button> 
                  </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-12">
                    <p style="text-align:right;">
                     <button class="btn btn-success" onclick="export_repair('repair_Export')">Export</button>
                    </p>
                  </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 420px; zoom:90%;">
                <table class="table table-head-fixed text-nowrap table-hover" id="repair_Export">
                 <thead style="text-align:center;">
               <tr>
                  <th colspan="24" style="border: 2px solid black;"></th>
                  <th colspan="24" style="border: 2px solid black;">Inspection 1</th>
                  <th colspan="24" style="border: 2px solid black;">Inspection 2</th>
                  <th colspan="24" style="border: 2px solid black;">Inspection 3</th>
                  <th colspan="24" style="border: 2px solid black;">Inspection 4</th>
                  <th colspan="24" style="border: 2px solid black;">Inspection 5</th>
                  <th colspan="24" style="border: 2px solid black;">Inspection 6 </th>
                  <th colspan="24" style="border: 2px solid black;">Inspection 7</th>
                  <th colspan="26" style="border: 2px solid black;">Inspection 8</th>
                  <th colspan="6" style="border: 2px solid black;"></th>
                  <th colspan="2" style="border: 2px solid black;">INFECTION </th>
                  <th colspan="10" style="border: 2px solid black;">Check INFECTION </th>
                  <th colspan="19" style="border: 2px solid black;">Inspection 9</th>

                </tr>
                <tr>
                  <th>REPAIR CARD NUMBER</th>
                    <th>REPAIR START DATE TIME</th>
                    <th>RPAIR FINISH DATE TIME</th>
                    <th>REPAIR DEVICE ID</th>
                    <th>OPERATOR ID</th>
                    <th>REPAIR JUDGMENT</th>
                    <th>DISCOVERY PROCESS</th>
                    <th>NG CONTENT</th>
                    <th>NG CONTENT DETAIL</th>
                    <th>REPAIR CONTENT</th>
                    <th>OUTBREAK PROCESS</th>
                    <th>OUTBREAK OPERATOR</th>
                    <th>REGIST DATE TIME</th>
                    <th>REGIST CAMPANY CODE</th>
                    <th>REGIST DEPARTMENT CODE</th>
                    <th>REGIST LINE NAME </th>
                    <th>REGIST PROCESS</th>
                    <th>REGIST DEVICE ID</th>
                    <th>IP ADDRESS</th>
                    <th>REGIST OPERATOR ID</th>
                    <th>PARTS NAME </th>
                    <th>LOT</th>
                    <th>SERIAL</th>
                  <th>READNAME </th>

                  <th>INSPECTION 1 PROCESS</th>
                    <th>INSPECTION 1 PERIOD</th>
                    <th>INSPECTION 1 OPERATOR ID</th>
                    <th>INSPECTION 1 IP ADDRESS</th>
                    <th>INSPECTION 1 START DATE TIME</th>
                    <th>INSPECTION 1 FINISH DATE TIME</th>
                    <th>INSPECTION 1 JUDGMENT</th>
                    <th>INSPECTION 1 READOP  1 NAME  </th>
                    <th>INSPECTION 1 READOP  1 NAME  J</th>
                    <th>INSPECTION 1 READOP  2 NAME  </th>
                    <th>INSPECTION 1 READOP  2 NAME  J</th>
                    <th>INSPECTION 1 READOP  3 NAME  </th>
                    <th>INSPECTION 1 READOP  3 NAME  J</th>
                    <th>INSPECTION 1 READOP  4 NAME  </th>
                    <th>INSPECTION 1 READOP  4 NAME  J</th>
                    <th>INSPECTION 1 SEAL RUBBER DETECT J</th>
                    <th>INSPECTION 1 F1 JUDGMENT</th>
                    <th>INSPECTION 1 F2 JUDGMENT</th>
                    <th>INSPECTION 1 F3 JUDGMENT</th>
                    <th>INSPECTION 1 F4 JUDGMENT</th>
                    <th>INSPECTION 1 F5 JUDGMENT</th>
                    <th>INSPECTION 1 F6  JUDGMENT</th>
                    <th>INSPECTION 1 PACKING CHECK CODE</th>
                  <th>INSPECTION 1 PACKING CHECK J</th>

                  <th>INSPECTION 2 PROCESS</th>
                    <th>INSPECTION 2 PERIOD</th>
                    <th>INSPECTION 2 OPERATOR ID</th>
                    <th>INSPECTION 2 IPADDRESS</th>
                    <th>INSPECTION 2 START DATE TIME</th>
                    <th>INSPECTION 2 FINISH DATE TIME</th>
                    <th>INSPECTION 2 JUDGMENT</th>
                    <th>INSPECTION 2 READOP  1 NAME  </th>
                    <th>INSPECTION 2 READOP  1 NAME  J</th>
                    <th>INSPECTION 2 READOP  2 NAME  </th>
                    <th>INSPECTION 2 READOP  2 NAME  J</th>
                    <th>INSPECTION 2 READOP  3 NAME  </th>
                    <th>INSPECTION 2 READOP  3 NAME  J</th>
                    <th>INSPECTION 2 READOP  4 NAME  </th>
                    <th>INSPECTION 2 READOP  4 NAME  J</th>
                    <th>INSPECTION 2 SEAL RUBBER DETECT J</th>
                    <th>INSPECTION 2 F1 JUDGMENT</th>
                    <th>INSPECTION 2 F2 JUDGMENT</th>
                    <th>INSPECTION 2 F3 JUDGMENT</th>
                    <th>INSPECTION 2 F4 JUDGMENT</th>
                    <th>INSPECTION 2 F5 JUDGMENT</th>
                    <th>INSPECTION 2 F6  JUDGMENT</th>
                    <th>INSPECTION 2 PACKING CHECK CODE</th>
                  <th>INSPECTION 2 PACKING CHECK J</th>

                  <th>INSPECTION 3 PROCESS</th>
                    <th>INSPECTION 3 PERIOD</th>
                    <th>INSPECTION 3 OPERATOR ID</th>
                    <th>INSPECTION 3 IP ADDRESS</th>
                    <th>INSPECTION 3 START DATE TIME</th>
                    <th>INSPECTION 3 FINIS HDATE TIME</th>
                    <th>INSPECTION 3 JUDGMENT</th>
                    <th>INSPECTION 3 READOP  1 NAME  </th>
                    <th>INSPECTION 3 READOP  1 NAME  J</th>
                    <th>INSPECTION 3 READOP  2 NAME  </th>
                    <th>INSPECTION 3 READOP  2 NAME  J</th>
                    <th>INSPECTION 3 READOP  3 NAME  </th>
                    <th>INSPECTION 3 READOP  3 NAME  J</th>
                    <th>INSPECTION 3 READOP  4 NAME  </th>
                    <th>INSPECTION 3 READOP  4 NAME  J</th>
                    <th>INSPECTION 3 SEAL RUBBER DETECT J</th>
                    <th>INSPECTION 3 F1 JUDGMENT</th>
                    <th>INSPECTION 3 F2 JUDGMENT</th>
                    <th>INSPECTION 3 F3 JUDGMENT</th>
                    <th>INSPECTION 3 F4 JUDGMENT</th>
                    <th>INSPECTION 3 F5 JUDGMENT</th>
                    <th>INSPECTION 3 F6  JUDGMENT</th>
                    <th>INSPECTION 3 PACKING CHECK CODE</th>
                  <th>INSPECTION 3 PACKING CHECK J</th>

                  <th>INSPECTION 4 PROCESS</th>
                    <th>INSPECTION 4 PERIOD</th>
                    <th>INSPECTION 4 OPERATOR ID</th>
                    <th>INSPECTION 4 IP ADDRESS</th>
                    <th>INSPECTION 4 START DATE TIME</th>
                    <th>INSPECTION 4 FINISH DATE TIME</th>
                    <th>INSPECTION 4 JUDGMENT</th>
                    <th>INSPECTION 4 READOP  1 NAME  </th>
                    <th>INSPECTION 4 READOP  1 NAME  J</th>
                    <th>INSPECTION 4 READOP  2 NAME  </th>
                    <th>INSPECTION 4 READOP  2 NAME  J</th>
                    <th>INSPECTION 4 READOP  3 NAME  </th>
                    <th>INSPECTION 4 READOP  3 NAME  J</th>
                    <th>INSPECTION 4 READOP  4 NAME  </th>
                    <th>INSPECTION 4 READOP  4 NAME  J</th>
                    <th>INSPECTION 4 SEAL RUBBER DETECT J</th>
                    <th>INSPECTION 4 F1 JUDGMENT</th>
                    <th>INSPECTION 4 F2 JUDGMENT</th>
                    <th>INSPECTION 4 F3 JUDGMENT</th>
                    <th>INSPECTION 4 F4 JUDGMENT</th>
                    <th>INSPECTION 4 F5 JUDGMENT</th>
                    <th>INSPECTION 4 F6  JUDGMENT</th>
                    <th>INSPECTION 4 PACKING CHECK CODE</th>
                  <th>INSPECTION 4 PACKING CHECK J</th>

                  <th>INSPECTION 5 PROCESS</th>
                    <th>INSPECTION 5 PERIOD</th>
                    <th>INSPECTION 5 OPERATOR ID</th>
                    <th>INSPECTION 5 IP ADDRESS</th>
                    <th>INSPECTION 5 START DATE TIME</th>
                    <th>INSPECTION 5 FINISH DATE TIME</th>
                    <th>INSPECTION 5 JUDGMENT</th>
                    <th>INSPECTION 5 READOP 1NAME </th>
                    <th>INSPECTION 5 READOP 1NAME J</th>
                    <th>INSPECTION 5 READOP 2NAME </th>
                    <th>INSPECTION 5 READOP 2NAME J</th>
                    <th>INSPECTION 5 READOP 3NAME </th>
                    <th>INSPECTION 5 READOP 3NAME J</th>
                    <th>INSPECTION 5 READOP 4NAME </th>
                    <th>INSPECTION 5 READOP 4NAME J</th>
                    <th>INSPECTION 5 SEAL RUBBER DETECT J</th>
                    <th>INSPECTION 5 F1 JUDGMENT</th>
                    <th>INSPECTION 5 F2 JUDGMENT</th>
                    <th>INSPECTION 5 F3 JUDGMENT</th>
                    <th>INSPECTION 5 F4 JUDGMENT</th>
                    <th>INSPECTION 5 F5 JUDGMENT</th>
                    <th>INSPECTION 5 F6  JUDGMENT</th>
                    <th>INSPECTION 5 PACKING CHECK CODE</th>
                  <th>INSPECTION 5 PACKING CHECK J</th>

                  <th>ININSPECTION 6  PROCESS</th>
                    <th>INSPECTION 6 PERIOD</th>
                    <th>INSPECTION 6 OPERATORID</th>
                    <th>INSPECTION 6 IPADDRESS</th>
                    <th>INSPECTION 6 START DATE TIME</th>
                    <th>INSPECTION 6 FINISH DATE TIME</th>
                    <th>INSPECTION 6 JUDGMENT</th>
                    <th>INSPECTION 6 READOP 1 NAME </th>
                    <th>INSPECTION 6 READOP 1 NAME J</th>
                    <th>INSPECTION 6 READOP 2 NAME </th>
                    <th>INSPECTION 6 READOP 2 NAME J</th>
                    <th>INSPECTION 6 READOP 3 NAME </th>
                    <th>INSPECTION 6 READOP 3 NAME J</th>
                    <th>INSPECTION 6 READOP 4 NAME </th>
                    <th>INSPECTION 6 READOP 4 NAME J</th>
                    <th>INSPECTION 6 SEAL RUBBER DETECT J</th>
                    <th>INSPECTION 6 F1 JUDGMENT</th>
                    <th>INSPECTION 6 F2 JUDGMENT</th>
                    <th>INSPECTION 6 F3 JUDGMENT</th>
                    <th>INSPECTION 6 F4 JUDGMENT</th>
                    <th>INSPECTION 6 F5 JUDGMENT</th>
                    <th>INSPECTION 6 F6 JUDGMENT</th>
                    <th>INSPECTION 6 PACKING CHECK CODE</th>
                  <th>INSPECTION 6 PACKING CHECK J</th>

                  <th>ININSPECTION 7 PROCESS</th>
                    <th>INSPECTION 7 PERIOD</th>
                    <th>INSPECTION 7 OPERATOR ID</th>
                    <th>INSPECTION 7 IP ADDRESS</th>
                    <th>INSPECTION 7 START DATE TIME</th>
                    <th>INSPECTION 7 FINISH DATE TIME</th>
                    <th>INSPECTION 7 JUDGMENT</th>
                    <th>INSPECTION 7 READOP 1 NAME </th>
                    <th>INSPECTION 7 READOP 1 NAME J</th>
                    <th>INSPECTION 7 READOP 2 NAME </th>
                    <th>INSPECTION 7 READOP 2 NAME J</th>
                    <th>INSPECTION 7 READOP 3 NAME </th>
                    <th>INSPECTION 7 READOP 3 NAME J</th>
                    <th>INSPECTION 7 READOP 4 NAME </th>
                    <th>INSPECTION 7 READOP 4 NAME J</th>
                    <th>INSPECTION 7 SEAL RUBBER DETECT J</th>
                    <th>INSPECTION 7 F1 JUDGMENT</th>
                    <th>INSPECTION 7 F2 JUDGMENT</th>
                    <th>INSPECTION 7 F3 JUDGMENT</th>
                    <th>INSPECTION 7 F4 JUDGMENT</th>
                    <th>INSPECTION 7 F5 JUDGMENT</th>
                    <th>INSPECTION 7 F6 JUDGMENT</th>
                    <th>INSPECTION 7 PACKING CHECK CODE</th>
                  <th>INSPECTION 7 PACKING CHECK J</th>
                    
                  <th>INSPECTION 8 PROCESS</th>
                    <th>INSPECTION 8 PERIOD</th>
                    <th>INSPECTION 8 OPERATOR ID</th>
                    <th>INSPECTION 8 IP ADDRESS</th>
                    <th>INSPECTION 8 START DATE TIME</th>
                    <th>INSPECTION 8 FINISH DATE TIME</th>
                    <th>INSPECTION 8 FINISH DATE</th>
                    <th>INSPECTION 8 FINISH TIME</th>
                    <th>INSPECTION 8 JUDGMENT</th>
                    <th>INSPECTION 8 READOP 1 NAME </th>
                    <th>INSPECTION 8 READOP 1 NAME J</th>
                    <th>INSPECTION 8 READOP 2 NAME </th>
                    <th>INSPECTION 8 READOP 2 NAME J</th>
                    <th>INSPECTION 8 READOP 3 NAME </th>
                    <th>INSPECTION 8 READOP 3 NAME J</th>
                    <th>INSPECTION 8 READOP 4 NAME </th>
                    <th>INSPECTION 8 READOP 4 NAME J</th>
                    <th>INSPECTION 8 SEAL RUBBER DETECT J</th>
                    <th>INSPECTION 8 F1 JUDGMENT</th>
                    <th>INSPECTION 8 F2 JUDGMENT</th>
                    <th>INSPECTION 8 F3 JUDGMENT</th>
                    <th>INSPECTION 8 F4 JUDGMENT</th>
                    <th>INSPECTION 8 F5 JUDGMENT</th>
                    <th>INSPECTION 8 F6 JUDGMENT</th>
                    <th>INSPECTION 8 PACKING CHECK CODE</th>
                  <th>INSPECTION 8 PACKING CHECK J</th>
                  
                  <th>LAST REPAIR CARD NUMBER</th>
                    <th>REPAIR RESULT</th>
                    <th>RESET SUPERVISOR ID</th>
                    <th>RESET SUPERVISOR NAME </th>
                    <th>NOW MODE</th>
                  <th>MSG CODE</th>
                  
                  <th>INFECTION  START DATE TIME</th>
                  <th>INFECTION  FINISH DATE TIME</th>
       
                  <th>CHECK INFECTION  SHIPPED</th>
                    <th>CHECK INFECTION COMPLETED</th>
                    <th>CHECK INFECTION INSPECTION</th>
                    <th>CHECK INFECTION ASSY</th>
                    <th>CHECK INFECTION SUB</th>
                    <th>CHECK INFECTION SHIKAKARI</th>
                    <th>CHECK INFECTION PARTS</th>
                    <th>CHECK INFECTION JUDGMENT</th>
                    <th>CHECK INFECTION SUPERVISOR ID</th>
                  <th>CHECK INFECTION SUPERVISOR NAME </th>

                  <th>INSPECTION 9 PROCESS</th>
                    <th>INSPECTION 9 PERIOD</th>
                    <th>INSPECTION 9 OPERATOR ID</th>
                    <th>INSPECTION 9 IP ADDRESS</th>
                    <th>INSPECTION 9 START DATE TIME</th>
                    <th>INSPECTION 9 FINISH DATET IME</th>
                    <th>INSPECTION 9 JUDGMENT</th>
                    <th>INSPECTION 9 READOP 1 NAME </th>
                    <th>INSPECTION 9 READOP 1 NAME J</th>
                    <th>INSPECTION 9 READOP 2 NAME </th>
                    <th>INSPECTION 9 READOP 2 NAME J</th>
                    <th>INSPECTION 9 READOP 3 NAME </th>
                    <th>INSPECTION 9 READOP 3 NAME J</th>
                    <th>INSPECTION 9 READOP 4 NAME </th>
                    <th>INSPECTION 9 READOP 4 NAME J</th>
                    <th>INSPECTION 9 SEAL RUBBER DETECT J</th>
                    <th>INSPECTION 9 F1 JUDGMENT</th>
                    <th>INSPECTION 9 F2 JUDGMENT</th>
                  <th>INSPECTION 9  F3 JUDGMENT</th>
                </tr>
                </thead>
                <tbody id="repair_data" style="text-align:center;"></tbody>
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
<?php include 'tools/javascript/repair_script.php'; ?>