<script type="text/javascript">
	$(document).ready(function(){


	});

	const search_packing =()=>{
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
                    method:'fetch_packing',
                    line_name:line_name,
                    lot:lot,
                    datefrom:datefrom,
                    dateto:dateto,
                    ip:ip
                },success:function(response){
                	// console.log(response);
                    $('#packing_data').html(response);
                    $('#spinner').fadeOut(function(){
                        
                    });
                }
		});
	}


</script>