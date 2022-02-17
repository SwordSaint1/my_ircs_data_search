<script type="text/javascript">
	$(document).ready(function(){


	});

		const search_product =()=>{
		$('#spinner').css('display','block');
		var line_name = document.getElementById('line').value;
		var lot = document.getElementById('lot').value;
		var datefrom = document.getElementById('datefrom').value;
		var dateto = document.getElementById('dateto').value;
		var ip = document.getElementById('ip').value;
		$.ajax({
 				url: 'process/processor.php',
                type: 'POST',
                cache: false,
                data:{
                    method:'fetch_product',
                    line_name:line_name,
                    lot:lot,
                    datefrom:datefrom,
                    dateto:dateto,
                    ip:ip
                },success:function(response){
                	// console.log(response);
                    $('#product_data').html(response);
                    $('#spinner').fadeOut(function(){
                        
                    });
                }
		});
	}

function export_product(table_id, separator = ',') {
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
    var filename = 'Product_Backup_Data'+ '_' + new Date().toLocaleDateString() + '.csv';
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