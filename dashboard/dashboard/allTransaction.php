<?php 
session_start();
  $banner_text = "All Transaction List";
  include("./Header/header.php");

  // Connection
  include("../../Connection/config.php");

  $sql = "SELECT * FROM payment";
  $result = $conn->query($sql);
  $num = mysqli_num_rows($result);

  ?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Total Donated-Money Details</h4>
                  <p class="card-category">See All Transaction Here</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="transactionTable" >
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Mobile
                        </th>
                        <th>
                         Email
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Transaction Id
                        </th>
                      </thead>
                      <tbody>
                      <?php
if($num > 0){

while($row=  mysqli_fetch_array($result))
{
    ?>
<tr>
   <td><?php echo $row['pId']; ?></td>
   <td><?php echo $row['pName']; ?></td>
   <td><?php echo $row['pMobile']; ?></td>
   <td><?php echo $row['pEmail']; ?></td>
   <td><?php echo $row['pAmount'] ;?></td>
   <td><?php echo $row['pStatus'] ;?></td>
   <td><?php echo $row['pSId'] ;?></td>
</tr>
<?php
}
}
else{
  ?>
  <td><?php echo "No Transaction"; ?></td>

  <?php
}
?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 
    <?php 
  include("./Footer/footer.php");
  ?>