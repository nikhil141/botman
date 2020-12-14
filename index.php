<?php 
include("header.php");
include_once("db_connect.php");
$limit = 8;
$sqlQuery = "SELECT * FROM users";
$result = mysqli_query($conn, $sqlQuery);
$totalRecords = mysqli_num_rows($result);
$totalPages = ceil($totalRecords/$limit);
?>
<title>Botman</title>
<script src="plugin/simple-bootstrap-paginator.js"></script>
<script src="js/pagination.js"></script>
<?php include('container.php');?>
<div class="container">	
	<div class="row">
		<h2></h2>
                <div class="col-lg-12">
                    <div class="col-lg-1">
            <a href="xl.php" onclick="download('xl.php'); return false;" target="_blank" class="btn btn-info">
              <i class="fas fa-print"></i> EXCEL
            </a>
          </div>
                    <div class="col-lg-1">
                        <a href="csv.php" target="_blank" class="btn btn-primary">
              <i class="fas fa-print"></i> CSV
            </a>
          </div>
                    <div class="col-lg-1">
                        <a href="pdf.php" target="_blank" class="btn btn-success btn-block">
              <i class="fas fa-print"></i> PDF
            </a>
          </div>
                    <div class="col-lg-7"></div>
                    <div class="col-lg-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add New Record</button>
          </div>
                </div>
                <br><br/>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
                                        <th>Visits</th>
                                        <th>Status</th>
                                        <th>Action</th>
				</tr>
			</thead>
			<tbody id="content">     
			</tbody>
		</table>   
		<div id="pagination"></div>    
		<input type="hidden" id="totalPages" value="<?php echo $totalPages; ?>">	
	</div>    
</div>
<!-- ADD RECORD MODAL -->
  <div class="modal fade" id="addModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" style="text-align: center;font-size: x-large;color:blanchedalmond;">Add New Record</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="insert.php" method="POST">
            <div class="form-group">
              <label for="title">User Name</label>
              <input type="text" name="username" class="form-control" placeholder="Enter User name" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Visit Number</label>
              <input type="text" name="visitnumber" id="visitnumber" class="form-control" placeholder="Enter Visit Number" maxlength="50"
                required>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="insertData">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


 <!-- UPDATE MODAL -->
  <div class="modal fade" id="updateModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title" style="text-align: center;font-size: x-large;color:black;">Edit Record</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="update.php" method="POST">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="title">User Name</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Enter User name" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Visit Number</label>
              <input type="text" name="visits" id="visits" class="form-control" placeholder="Enter Visit Number" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Status</label>
              <input type="text" name="status" id="status" class="form-control" placeholder="Enter Status" maxlength="1"
                required>
            </div>
            
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="updateData">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<script>
    $(document).ready(function () {
      $('#content').on('click','.update', function(){

        $('#updateModal').modal('show');

        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#id').val(data[0]);
        $('#username').val(data[1]);
        $('#visits').val(data[2]);
        $('#status').val(data[3]);
        });
        
    });
    function download(link){
      var popout;
      window.setTimeout(function(){
         popout.close();
      }, 500);
    }
  </script>
<?php include('footer.php');?>






