<script type="text/javascript">
	$(document).ready(function(){


	});

	const search_packing =()=>{
		$('#spinner').css('display','block');
		var packing_line_name = document.getElementById('line').value;
		var packing_lot = document.getElementById('lot').value;
		var packing_datefrom = document.getElementById('datefrom').value;
		var packing_dateto = document.getElementById('dateto').value;
		var packing_ip = document.getElementById('ip').value;

        if (packing_datefrom == '') {
                swal('Information','Please Input Date From','info');
                 $('#spinner').fadeOut(function(){
                        
                    });
        }else if(packing_dateto == ''){
                  swal('Information','Please Input Date To','info');
                 $('#spinner').fadeOut(function(){
                        
                    });
        }else{
		$.ajax({
 				url: 'process/processor.php',
                type: 'POST',
                cache: false,
                data:{
                    method:'fetch_packing',
                    packing_line_name:packing_line_name,
                    packing_lot:packing_lot,
                    packing_datefrom:packing_datefrom,
                    packing_dateto:packing_dateto,
                    packing_ip:packing_ip
                },success:function(response){
                	console.log(response);
                    $('#packing_data').html(response);
                    $('#spinner').fadeOut(function(){
                        
                    });
                }
		});
	}
}

function export_packing(table_id, separator = ',') {
    // Select rows from table_id
    var rows = document.querySelectorAll('table#' + table_id + ' tr');
    // Construct csv
    var csv = [];
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll('td, th');
        for (var j = 0; j < cols.length; j++) {
            var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
            data = data.replace(/"/g, '""');
            // Push escaped string
            row.push('"' + data + '"');
        }
        csv.push(row.join(separator));
    }
    var csv_string = csv.join('\n');
    // Download it
    var filename = 'Packing_Backup_Data'+ '_' + new Date().toLocaleDateString() + '.csv';
    var link = document.createElement('a');
    link.style.display = 'none';
    link.setAttribute('target', '_blank');
    link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
    link.setAttribute('download', filename);
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>