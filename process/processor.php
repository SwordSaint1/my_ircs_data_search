<?php
include 'conn.php';
$method = $_POST['method'];

if ($method == 'fetch_packing') {
		 $line_name = strtoupper($_POST['line_name']);
		 $lot = $_POST['lot'];
		 $ip = $_POST['ip'];
		 $datefrom = $_POST['datefrom'];
		 $dateto = $_POST['dateto'];
		  $startd = new DateTime($datefrom);
		 $start_new = date_format($startd, "d-M-y");
	     $endd = new DateTime($dateto);
		 $end_new = date_format($endd, "d-M-y");
		$c = 0;
	    
		 $try = "SELECT REGISTLINENAME,REGISTCAMPANYCODE,IPADDRESS,REGISTDEPARTMENTCODE,REGISTPROCESS,REGISTDEVICEID,OPERATORID,PARTSNAME,LOT,SERIAL,READNAME,READPACKINGBOXCARD,PACKINGBOXCARDPARTSNAME,PACKINGBOXCARDLOT,PACKINGBOXCARDSERIAL,PACKINGBOXCARDAMOUNT,PACKINGBOXCARDJUDGMENT,RESETSUPERVISORID,RESETSUPERVISORNAME,
		 	TO_CHAR(REGISTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS REGISTDATETIME
		 FROM T_PACKINGSAV
		 WHERE REGISTLINENAME LIKE '$line_name%' 
		 AND LOT LIKE '$lot%' 
		 AND IPADDRESS LIKE '$ip%'
		 AND (REGISTDATETIME >='$start_new' AND REGISTDATETIME <= '$end_new')
		
		 ORDER BY REGISTLINENAME ASC";
	
		$stmt = oci_parse($conn, $try);
		oci_execute($stmt);
		while($row=oci_fetch_assoc($stmt)){
				$c++;
		 			echo '<tr>';
		 				echo '<td>'.$c.'</td>';
		 				echo '<td>'.$row['REGISTDATETIME'].'</td>';
				 		echo '<td>'.$row['REGISTCAMPANYCODE'].'</td>';
				 		echo '<td>'.$row['REGISTDEPARTMENTCODE'].'</td>';
				 		echo '<td>'.$row['REGISTLINENAME'].'</td>';
				 		echo '<td>'.$row['REGISTPROCESS'].'</td>';
				 		echo '<td>'.$row['REGISTDEVICEID'].'</td>';
				 		echo '<td>'.$row['IPADDRESS'].'</td>';
				 		echo '<td>'.$row['OPERATORID'].'</td>';
				 		echo '<td>'.$row['PARTSNAME'].'</td>';
				 		echo '<td>'.$row['LOT'].'</td>';
				 		echo '<td>'.$row['SERIAL'].'</td>';
				 		echo '<td>'.$row['READNAME'].'</td>';
				 		echo '<td>'.$row['READPACKINGBOXCARD'].'</td>';
				 		echo '<td>'.$row['PACKINGBOXCARDPARTSNAME'].'</td>';
				 		echo '<td>'.$row['PACKINGBOXCARDLOT'].'</td>';
				 		echo '<td>'.$row['PACKINGBOXCARDSERIAL'].'</td>';
				 		echo '<td>'.$row['PACKINGBOXCARDAMOUNT'].'</td>';
				 		echo '<td>'.$row['PACKINGBOXCARDJUDGMENT'].'</td>';
				 		echo '<td>'.$row['RESETSUPERVISORID'].'</td>';
				 		echo '<td>'.$row['RESETSUPERVISORNAME'].'</td>';
				 	echo '</tr>';
				 

				 				
		}
		
		ocifreestatement($stmt);
		}





if ($method == 'fetch_product') {
		 $line_name = strtoupper($_POST['line_name']);
		 $lot = $_POST['lot'];
		 $ip = $_POST['ip'];
		 $datefrom = $_POST['datefrom'];
		 $dateto = $_POST['dateto'];
		  $startd = new DateTime($datefrom);
		  $start_new = date_format($startd, "d-M-y h.i.s.u  A");
	     $endd = new DateTime($dateto);
		  $end_new = date_format($endd, "d-M-y h.i.s.u  A");
	
		 $try = "SELECT
REGISTLINENAME,REGISTDATETIME,REGISTCAMPANYCODE,REGISTPROCESS,REGISTDEVICEID,IPADDRESS,REGISTOPERATORID,PARTSNAME,LOT,SERIAL,READNAME,
INSPECTION1PERIOD,INSPECTION1OPERATORID,INSPECTION1IPADDRESS, TO_CHAR(INSPECTION1STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION1STARTDATETIME, TO_CHAR(INSPECTION1FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION1FINISHDATETIME ,INSPECTION1JUDGMENT,INSPECTION1PACKINGCHECKCODE,INSPECTION1PACKINGCHECKJ,
INSPECTION2PERIOD,INSPECTION2OPERATORID,INSPECTION2IPADDRESS,TO_CHAR(INSPECTION2STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION2STARTDATETIME, TO_CHAR(INSPECTION2FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION2FINISHDATETIME,INSPECTION2JUDGMENT,INSPECTION2PACKINGCHECKCODE,INSPECTION2PACKINGCHECKJ,
INSPECTION3PERIOD,INSPECTION3OPERATORID,INSPECTION3IPADDRESS, TO_CHAR(INSPECTION3STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION3STARTDATETIME, TO_CHAR(INSPECTION3FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION3FINISHDATETIME,INSPECTION3JUDGMENT,INSPECTION3PACKINGCHECKCODE,INSPECTION3PACKINGCHECKJ,
INSPECTION4PERIOD,INSPECTION4OPERATORID,INSPECTION4IPADDRESS, TO_CHAR(INSPECTION4STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION4STARTDATETIME, TO_CHAR(INSPECTION4FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION4FINISHDATETIME,INSPECTION4JUDGMENT,INSPECTION4PACKINGCHECKCODE,INSPECTION4PACKINGCHECKJ,
INSPECTION5PERIOD,INSPECTION5OPERATORID,INSPECTION5IPADDRESS, TO_CHAR(INSPECTION5STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION5STARTDATETIME, TO_CHAR(INSPECTION5FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION5FINISHDATETIME,INSPECTION5JUDGMENT,INSPECTION5PACKINGCHECKCODE,INSPECTION5PACKINGCHECKJ,
INSPECTION6PERIOD,INSPECTION6OPERATORID,INSPECTION6IPADDRESS, TO_CHAR(INSPECTION6STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION6STARTDATETIME, TO_CHAR(INSPECTION6FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION6FINISHDATETIME,INSPECTION6JUDGMENT,INSPECTION6PACKINGCHECKCODE,INSPECTION6PACKINGCHECKJ,
INSPECTION7PERIOD,INSPECTION7OPERATORID,INSPECTION7IPADDRESS, TO_CHAR(INSPECTION7STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION7STARTDATETIME,  TO_CHAR(INSPECTION7FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION7FINISHDATETIME,INSPECTION7JUDGMENT,INSPECTION7PACKINGCHECKCODE,INSPECTION7PACKINGCHECKJ,
INSPECTION8PERIOD,INSPECTION8OPERATORID,INSPECTION8IPADDRESS, TO_CHAR(INSPECTION8STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION8STARTDATETIME, TO_CHAR(INSPECTION8FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION8FINISHDATETIME,INSPECTION8JUDGMENT,INSPECTION8PACKINGCHECKCODE,INSPECTION8PACKINGCHECKJ,
INSPECTION9PERIOD,INSPECTION9OPERATORID,INSPECTION9IPADDRESS, TO_CHAR(INSPECTION9STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION9STARTDATETIME, TO_CHAR(INSPECTION9FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION9FINISHDATETIME,INSPECTION9JUDGMENT,INSPECTION9PACKINGCHECKCODE,INSPECTION9PACKINGCHECKJ,
INSPECTION10PERIOD,INSPECTION10OPERATORID,INSPECTION10IPADDRESS, TO_CHAR(INSPECTION10STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION10STARTDATETIME, TO_CHAR(INSPECTION10FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION10FINISHDATETIME,INSPECTION10JUDGMENT,INSPECTION10PACKINGCHECKCODE,INSPECTION10PACKINGCHECKJ
		 FROM T_PRODUCTSAV
		 WHERE REGISTLINENAME LIKE '$line_name%' 
		 AND LOT LIKE '$lot%' 
		 AND IPADDRESS LIKE '$ip%'
		 AND (REGISTDATETIME >='$start_new' AND REGISTDATETIME <= '$end_new')
	
		 ORDER BY REGISTLINENAME ASC";
	
		$stmt = oci_parse($conn, $try);
		oci_execute($stmt);
		while($row=oci_fetch_assoc($stmt)){
		
		 			echo '<tr>';
		 				
		 				echo '<td>'.$row['REGISTDATETIME'].'</td>';
				 		echo '<td>'.$row['REGISTCAMPANYCODE'].'</td>';
				 		echo '<td>'.$row['REGISTCAMPANYCODE'].'</td>';
				 		echo '<td>'.$row['REGISTLINENAME'].'</td>';
				 		echo '<td>'.$row['REGISTPROCESS'].'</td>';
				 		echo '<td>'.$row['REGISTDEVICEID'].'</td>';
				 		echo '<td>'.$row['IPADDRESS'].'</td>';
				 		echo '<td>'.$row['REGISTOPERATORID'].'</td>';
				 		echo '<td>'.$row['PARTSNAME'].'</td>';
				 		echo '<td>'.$row['LOT'].'</td>';
				 		echo '<td>'.$row['SERIAL'].'</td>';
				 		echo '<td>'.$row['READNAME'].'</td>';

				 		echo '<td>'.$row['INSPECTION1PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION1OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION1IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION1STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION1FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION1PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION1PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION2PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION2OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION2IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION2STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION2FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION2PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION2PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION3PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION3OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION3IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION3STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION3FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION3PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION3PACKINGCHECKJ'].'</td>';

						echo '<td>'.$row['INSPECTION4PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION4OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION4IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION4STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION4FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION4PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION4PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION5PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION5OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION5IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION5STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION5FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION5PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION5PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION6PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION6OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION6IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION6STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION6FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION6PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION6PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION7PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION7OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION7IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION7STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION7FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION7JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION7PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION7PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION8PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION8OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION8IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION8STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION8FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION8JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION8PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION8PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['LASTREPAIRCARDNUMBER'].'</td>';
				 		echo '<td>'.$row['REPAIRRESULT'].'</td>';
				 		echo '<td>'.$row['RESETSUPERVISORID'].'</td>';
				 		echo '<td>'.$row['RESETSUPERVISORNAME'].'</td>';
				 		echo '<td>'.$row['NOWMODE'].'</td>';
				 		echo '<td>'.$row['MSGCODE'].'</td>';
				 		echo '<td>'.$row['FINALINSPECTIONNAME'].'</td>';
				 		echo '<td>'.$row['FINALINSPECTIONJUDGMENT'].'</td>';

				 		echo '<td>'.$row['INSPECTION9PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION9OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION9IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION9STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION9FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION9JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION9PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION9PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION10PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION10OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION10IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION10STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION10FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION10JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION10PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION10PACKINGCHECKJ'].'</td>';

				 	echo '</tr>';
				 

				 				
		}
		
		ocifreestatement($stmt);
		}



if ($method == 'fetch_repair') {
		 $line_name = strtoupper($_POST['line_name']);
		 $lot = $_POST['lot'];
		 $ip = $_POST['ip'];
		 $datefrom = $_POST['datefrom'];
		 $dateto = $_POST['dateto'];
		  $startd = new DateTime($datefrom);
		 ECHO $start_new = date_format($startd, "d-M-y");
	     $endd = new DateTime($dateto);
		 ECHO $end_new = date_format($endd, "d-M-y");

	    
		 $try = "SELECT 
 REPAIRCARDNUMBER,REGISTLINENAME,LOT,IPADDRESS, TO_CHAR(REPAIRSTARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS REPAIRSTARTDATETIME, TO_CHAR(RPAIRFINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS RPAIRFINISHDATETIME,REPAIRDEVICEID,OPERATORID,REPAIRJUDGMENT,DISCOVERYPROCESS,NGCONTENT,NGCONTENTDETAIL,REPAIRCONTENT,OUTBREAKPROCESS,OUTBREAKOPERATOR, TO_CHAR(REGISTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS REGISTDATETIME,REGISTCAMPANYCODE,REGISTDEPARTMENTCODE,REGISTPROCESS,REGISTDEVICEID,IPADDRESS,REGISTOPERATORID,PARTSNAME,LOT,SERIAL,READNAME,
 INSPECTION1PROCESS,INSPECTION1PERIOD,INSPECTION1OPERATORID,INSPECTION1IPADDRESS, TO_CHAR(INSPECTION1STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION1STARTDATETIME, TO_CHAR(INSPECTION1FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION1FINISHDATETIME,INSPECTION1JUDGMENT,INSPECTION1READOP1NAME,INSPECTION1READOP1NAMEJ,INSPECTION1READOP2NAME,INSPECTION1READOP2NAMEJ,INSPECTION1READOP3NAME,INSPECTION1READOP3NAMEJ,INSPECTION1READOP4NAME,INSPECTION1READOP4NAMEJ,INSPECTION1SEALRUBBERDETECTJ,INSPECTION1F1JUDGMENT,INSPECTION1F2JUDGMENT,INSPECTION1F3JUDGMENT,INSPECTION1F4JUDGMENT,INSPECTION1F5JUDGMENT,INSPECTION1F6JUDGMENT,INSPECTION1PACKINGCHECKCODE,INSPECTION1PACKINGCHECKJ,
 INSPECTION2PROCESS,INSPECTION2PERIOD,INSPECTION2OPERATORID,INSPECTION2IPADDRESS, TO_CHAR(INSPECTION2STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION2STARTDATETIME, TO_CHAR(INSPECTION2FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION2FINISHDATETIME,INSPECTION2JUDGMENT,INSPECTION2READOP1NAME,INSPECTION2READOP1NAMEJ,INSPECTION2READOP2NAME,INSPECTION2READOP2NAMEJ,INSPECTION2READOP3NAME,INSPECTION2READOP3NAMEJ,INSPECTION2READOP4NAME,INSPECTION2READOP4NAMEJ,INSPECTION2SEALRUBBERDETECTJ,INSPECTION2F1JUDGMENT,INSPECTION2F2JUDGMENT,INSPECTION2F3JUDGMENT,INSPECTION2F4JUDGMENT,INSPECTION2F5JUDGMENT,INSPECTION2F6JUDGMENT,INSPECTION2PACKINGCHECKCODE,INSPECTION2PACKINGCHECKJ,
 INSPECTION3PROCESS,INSPECTION3PERIOD,INSPECTION3OPERATORID,INSPECTION3IPADDRESS, TO_CHAR(INSPECTION3STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION3STARTDATETIME, TO_CHAR(INSPECTION3FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION3FINISHDATETIME,INSPECTION3JUDGMENT,INSPECTION3READOP1NAME,INSPECTION3READOP1NAMEJ,INSPECTION3READOP2NAME,INSPECTION3READOP2NAMEJ,INSPECTION3READOP3NAME,INSPECTION3READOP3NAMEJ,INSPECTION3READOP4NAME,INSPECTION3READOP4NAMEJ,INSPECTION3SEALRUBBERDETECTJ,INSPECTION3F1JUDGMENT,INSPECTION3F2JUDGMENT,INSPECTION3F3JUDGMENT,INSPECTION3F4JUDGMENT,INSPECTION3F5JUDGMENT,INSPECTION3F6JUDGMENT,INSPECTION3PACKINGCHECKCODE,INSPECTION3PACKINGCHECKJ,
 INSPECTION4PROCESS,INSPECTION4PERIOD,INSPECTION4OPERATORID,INSPECTION4IPADDRESS, TO_CHAR(INSPECTION4STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION4STARTDATETIME, TO_CHAR(INSPECTION4FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION4FINISHDATETIME,INSPECTION4JUDGMENT,INSPECTION4READOP1NAME,INSPECTION4READOP1NAMEJ,INSPECTION4READOP2NAME,INSPECTION4READOP2NAMEJ,INSPECTION4READOP3NAME,INSPECTION4READOP3NAMEJ,INSPECTION4READOP4NAME,INSPECTION4READOP4NAMEJ,INSPECTION4SEALRUBBERDETECTJ,INSPECTION4F1JUDGMENT,INSPECTION4F2JUDGMENT,INSPECTION4F3JUDGMENT,INSPECTION4F4JUDGMENT,INSPECTION4F5JUDGMENT,INSPECTION4F6JUDGMENT,INSPECTION4PACKINGCHECKCODE,INSPECTION4PACKINGCHECKJ,
INSPECTION5PROCESS,INSPECTION5PERIOD,INSPECTION5OPERATORID,INSPECTION5IPADDRESS, TO_CHAR(INSPECTION5STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION5STARTDATETIME, TO_CHAR(INSPECTION5FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION5FINISHDATETIME,INSPECTION5JUDGMENT,INSPECTION5READOP1NAME,INSPECTION5READOP1NAMEJ,INSPECTION5READOP2NAME,INSPECTION5READOP2NAMEJ,INSPECTION5READOP3NAME,INSPECTION5READOP3NAMEJ,INSPECTION5READOP4NAME,INSPECTION5READOP4NAMEJ,INSPECTION5SEALRUBBERDETECTJ,INSPECTION5F1JUDGMENT,INSPECTION5F2JUDGMENT,INSPECTION5F3JUDGMENT,INSPECTION5F4JUDGMENT,INSPECTION5F5JUDGMENT,INSPECTION5F6JUDGMENT,INSPECTION5PACKINGCHECKCODE,INSPECTION5PACKINGCHECKJ,
INSPECTION6PROCESS,INSPECTION6PERIOD,INSPECTION6OPERATORID,INSPECTION6IPADDRESS, TO_CHAR(INSPECTION6STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION6STARTDATETIME, TO_CHAR(INSPECTION6FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION6FINISHDATETIME,INSPECTION6JUDGMENT,INSPECTION6READOP1NAME,INSPECTION6READOP1NAMEJ,INSPECTION6READOP2NAME,INSPECTION6READOP2NAMEJ,INSPECTION6READOP3NAME,INSPECTION6READOP3NAMEJ,INSPECTION6READOP4NAME,INSPECTION6READOP4NAMEJ,INSPECTION6SEALRUBBERDETECTJ,INSPECTION6F1JUDGMENT,INSPECTION6F2JUDGMENT,INSPECTION6F3JUDGMENT,INSPECTION6F4JUDGMENT,INSPECTION6F5JUDGMENT,INSPECTION6F6JUDGMENT,INSPECTION6PACKINGCHECKCODE,INSPECTION6PACKINGCHECKJ,
INSPECTION7PROCESS,INSPECTION7PERIOD,INSPECTION7OPERATORID,INSPECTION7IPADDRESS, TO_CHAR(INSPECTION7STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION7STARTDATETIME, TO_CHAR(INSPECTION7FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION7FINISHDATETIME,INSPECTION7JUDGMENT,INSPECTION7READOP1NAME,INSPECTION7READOP1NAMEJ,INSPECTION7READOP2NAME,INSPECTION7READOP2NAMEJ,INSPECTION7READOP3NAME,INSPECTION7READOP3NAMEJ,INSPECTION7READOP4NAME,INSPECTION7READOP4NAMEJ,INSPECTION7SEALRUBBERDETECTJ,INSPECTION7F1JUDGMENT,INSPECTION7F2JUDGMENT,INSPECTION7F3JUDGMENT,INSPECTION7F4JUDGMENT,INSPECTION7F5JUDGMENT,INSPECTION7F6JUDGMENT,INSPECTION7PACKINGCHECKCODE,INSPECTION7PACKINGCHECKJ,
INSPECTION8PROCESS,INSPECTION8PERIOD,INSPECTION8OPERATORID,INSPECTION8IPADDRESS, TO_CHAR(INSPECTION8STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION8STARTDATETIME, TO_CHAR(INSPECTION8FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION8FINISHDATETIME,INSPECTION8JUDGMENT,INSPECTION8READOP1NAME,INSPECTION8READOP1NAMEJ,INSPECTION8READOP2NAME,INSPECTION8READOP2NAMEJ,INSPECTION8READOP3NAME,INSPECTION8READOP3NAMEJ,INSPECTION8READOP4NAME,INSPECTION8READOP4NAMEJ,INSPECTION8SEALRUBBERDETECTJ,INSPECTION8F1JUDGMENT,INSPECTION8F2JUDGMENT,INSPECTION8F3JUDGMENT,INSPECTION8F4JUDGMENT,INSPECTION8F5JUDGMENT,INSPECTION8F6JUDGMENT,INSPECTION8PACKINGCHECKCODE,INSPECTION8PACKINGCHECKJ,

LASTREPAIRCARDNUMBER,REPAIRRESULT,RESETSUPERVISORID,RESETSUPERVISORNAME,NOWMODE,MSGCODE,
 TO_CHAR(INFECTIONSTARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INFECTIONSTARTDATETIME, TO_CHAR(INFECTIONFINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INFECTIONFINISHDATETIME,
CHECKINFECTIONSHIPPED,CHECKINFECTIONCOMPLETED,CHECKINFECTIONINSPECTION,CHECKINFECTIONASSY,CHECKINFECTIONSUB,CHECKINFECTIONSHIKAKARI,CHECKINFECTIONPARTS,CHECKINFECTIONJUDGMENT,CHECKINFECTIONSUPERVISORID,CHECKINFECTIONSUPERVISORNAME,

INSPECTION9PROCESS,INSPECTION9PERIOD,INSPECTION9OPERATORID,INSPECTION9IPADDRESS, TO_CHAR(INSPECTION9STARTDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION9STARTDATETIME, TO_CHAR(INSPECTION9FINISHDATETIME,'yyyy-MM-dd HH24:MI:SS') AS INSPECTION9FINISHDATETIME,INSPECTION9JUDGMENT,INSPECTION9READOP1NAME,INSPECTION9READOP1NAMEJ,INSPECTION9READOP2NAME,INSPECTION9READOP2NAMEJ,INSPECTION9READOP3NAME,INSPECTION9READOP3NAMEJ,INSPECTION9READOP4NAME,INSPECTION9READOP4NAMEJ,INSPECTION9SEALRUBBERDETECTJ,INSPECTION9F1JUDGMENT,INSPECTION9F2JUDGMENT,INSPECTION9F3JUDGMENT,INSPECTION9F4JUDGMENT,INSPECTION9F5JUDGMENT,INSPECTION9F6JUDGMENT,INSPECTION9PACKINGCHECKCODE,INSPECTION9PACKINGCHECKJ
		 FROM T_REPAIRSAV
		 WHERE REGISTLINENAME LIKE '$line_name%' 
		 AND LOT LIKE '$lot%' 
		 AND IPADDRESS LIKE '$ip%'
		 AND (REGISTDATETIME >='$start_new' AND REGISTDATETIME <= '$end_new')";
	
		$stmt = oci_parse($conn, $try);
		oci_execute($stmt);
		while($row=oci_fetch_assoc($stmt)){
		 			echo '<tr>';
		 				echo '<td>'.$row['REPAIRCARDNUMBER'].'</td>';
				 		echo '<td>'.$row['REPAIRSTARTDATETIME'].'</td>';
				 		echo '<td>'.$row['RPAIRFINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['REPAIRDEVICEID'].'</td>';
				 		echo '<td>'.$row['OPERATORID'].'</td>';
				 		echo '<td>'.$row['REPAIRJUDGMENT'].'</td>';
				 		echo '<td>'.$row['DISCOVERYPROCESS'].'</td>';
				 		echo '<td>'.$row['NGCONTENT'].'</td>';
				 		echo '<td>'.$row['NGCONTENTDETAIL'].'</td>';
				 		echo '<td>'.$row['REPAIRCONTENT'].'</td>';
				 		echo '<td>'.$row['OUTBREAKPROCESS'].'</td>';
				 		echo '<td>'.$row['OUTBREAKOPERATOR'].'</td>';
				 		echo '<td>'.$row['REGISTDATETIME'].'</td>';
				 		echo '<td>'.$row['REGISTCAMPANYCODE'].'</td>';
				 		echo '<td>'.$row['REGISTDEPARTMENTCODE'].'</td>';
				 		echo '<td>'.$row['REGISTLINENAME'].'</td>';
				 		echo '<td>'.$row['REGISTPROCESS'].'</td>';
				 		echo '<td>'.$row['REGISTDEVICEID'].'</td>';
				 		echo '<td>'.$row['IPADDRESS'].'</td>';
				 		echo '<td>'.$row['REGISTOPERATORID'].'</td>';
				 		echo '<td>'.$row['PARTSNAME'].'</td>';
				 		echo '<td>'.$row['LOT'].'</td>';
				 		echo '<td>'.$row['SERIAL'].'</td>';
				 		echo '<td>'.$row['READNAME'].'</td>';

				 		echo '<td>'.$row['INSPECTION1PROCESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION1PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION1OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION1IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION1STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION1FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION1READOP1NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION1READOP1NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION1READOP2NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION1READOP2NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION1READOP3NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION1READOP3NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION1READOP4NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION1READOP4NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION1SEALRUBBERDETECTJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION1F1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION1F2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION1F3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION1F4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION1F5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION1F6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION1PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION1PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION2PROCESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION2PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION2OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION2IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION2STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION2FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION2READOP1NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION2READOP1NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION2READOP2NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION2READOP2NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION2READOP3NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION2READOP3NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION2READOP4NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION2READOP4NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION2SEALRUBBERDETECTJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION2F1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION2F2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION2F3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION2F4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION2F5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION2F6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION2PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION2PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION3PROCESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION3PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION3OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION3IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION3STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION3FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION3READOP1NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION3READOP1NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION3READOP2NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION3READOP2NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION3READOP3NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION3READOP3NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION3READOP4NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION3READOP4NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION3SEALRUBBERDETECTJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION3F1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION3F2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION3F3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION3F4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION3F5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION3F6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION3PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION3PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION4PROCESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION4PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION4OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION4IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION4STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION4FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION4READOP1NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION4READOP1NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION4READOP2NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION4READOP2NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION4READOP3NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION4READOP3NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION4READOP4NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION4READOP4NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION4SEALRUBBERDETECTJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION4F1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION4F2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION4F3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION4F4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION4F5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION4F6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION4PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION4PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION5PROCESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION5PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION5OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION5IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION5STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION5FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION5READOP1NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION5READOP1NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION5READOP2NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION5READOP2NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION5READOP3NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION5READOP3NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION5READOP4NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION5READOP4NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION5SEALRUBBERDETECTJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION5F1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION5F2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION5F3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION5F4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION5F5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION5F6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION5PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION5PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION6PROCESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION6PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION6OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION6IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION6STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION6FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION6READOP1NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION6READOP1NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION6READOP2NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION6READOP2NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION6READOP3NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION6READOP3NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION6READOP4NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION6READOP4NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION6SEALRUBBERDETECTJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION6F1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION6F2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION6F3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION6F4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION6F5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION6F6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION6PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION6PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION7PROCESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION7PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION7OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION7IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION7STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION7FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION7JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION7READOP1NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION7READOP1NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION7READOP2NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION7READOP2NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION7READOP3NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION7READOP3NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION7READOP4NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION7READOP4NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION7SEALRUBBERDETECTJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION7F1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION7F2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION7F3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION7F4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION7F5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION7F6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION7PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION7PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['INSPECTION8PROCESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION8PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION8OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION8IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION8STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION8FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION8JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION8READOP1NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION8READOP1NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION8READOP2NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION8READOP2NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION8READOP3NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION8READOP3NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION8READOP4NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION8READOP4NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION8SEALRUBBERDETECTJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION8F1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION8F2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION8F3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION8F4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION8F5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION8F6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION8PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION8PACKINGCHECKJ'].'</td>';

				 		echo '<td>'.$row['LASTREPAIRCARDNUMBER'].'</td>';
				 		echo '<td>'.$row['REPAIRRESULT'].'</td>';
				 		echo '<td>'.$row['RESETSUPERVISORID'].'</td>';
				 		echo '<td>'.$row['RESETSUPERVISORNAME'].'</td>';
				 		echo '<td>'.$row['NOWMODE'].'</td>';
				 		echo '<td>'.$row['MSGCODE'].'</td>';

				 		echo '<td>'.$row['INFECTIONSTARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INFECTIONFINISHDATETIME'].'</td>';

				 		echo '<td>'.$row['CHECKINFECTIONSHIPPED'].'</td>';
				 		echo '<td>'.$row['CHECKINFECTIONCOMPLETED'].'</td>';
				 		echo '<td>'.$row['CHECKINFECTIONINSPECTION'].'</td>';
				 		echo '<td>'.$row['CHECKINFECTIONASSY'].'</td>';
				 		echo '<td>'.$row['CHECKINFECTIONSUB'].'</td>';
				 		echo '<td>'.$row['CHECKINFECTIONSHIKAKARI'].'</td>';
				 		echo '<td>'.$row['CHECKINFECTIONPARTS'].'</td>';
				 		echo '<td>'.$row['CHECKINFECTIONJUDGMENT'].'</td>';
				 		echo '<td>'.$row['CHECKINFECTIONSUPERVISORID'].'</td>';
				 		echo '<td>'.$row['CHECKINFECTIONSUPERVISORNAME'].'</td>';

				 		echo '<td>'.$row['INSPECTION9PROCESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION9PERIOD'].'</td>';
				 		echo '<td>'.$row['INSPECTION9OPERATORID'].'</td>';
				 		echo '<td>'.$row['INSPECTION9IPADDRESS'].'</td>';
				 		echo '<td>'.$row['INSPECTION9STARTDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION9FINISHDATETIME'].'</td>';
				 		echo '<td>'.$row['INSPECTION9JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION9READOP1NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION9READOP1NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION9READOP2NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION9READOP2NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION9READOP3NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION9READOP3NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION9READOP4NAME'].'</td>';
				 		echo '<td>'.$row['INSPECTION9READOP4NAMEJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION9SEALRUBBERDETECTJ'].'</td>';
				 		echo '<td>'.$row['INSPECTION9F1JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION9F2JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION9F3JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION9F4JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION9F5JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION9F6JUDGMENT'].'</td>';
				 		echo '<td>'.$row['INSPECTION9PACKINGCHECKCODE'].'</td>';
				 		echo '<td>'.$row['INSPECTION9PACKINGCHECKJ'].'</td>';


				 	echo '</tr>';
				

				 				
		}
		
		ocifreestatement($stmt);
		}


?>