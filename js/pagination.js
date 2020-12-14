$(document).ready(function(){
	var totalPage = parseInt($('#totalPages').val());	
	console.log("==totalPage=="+totalPage);
	var pag = $('#pagination').simplePaginator({
		totalPages: totalPage,
		maxButtonsVisible: 3,
		currentPage: 1,
		nextLabel: 'Next',
		prevLabel: 'Prev',
		clickCurrentPage: true,
		pageChange: function(page) {			
			$("#content").html('<tr><td colspan="6"><strong>loading...</strong></td></tr>');
            $.ajax({
				url:"load_data.php",
				method:"POST",
				dataType: "json",		
				data:{page:	page},
                                
				success:function(responseData){
					$('#content').html(responseData.html);
                                }
			});
		}
	});
});
 
