<?php 
session_start();
  $banner_text = " Cloth Donation List";
  include("./Header/header.php");

  // Connection
  include("../../Connection/config.php");

  $email = $_SESSION['email'];
  $sql = "SELECT * FROM cloth ";
  $result = $conn->query($sql);
  $num = mysqli_num_rows($result);

  ?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Donated-Cloth Details</h4>
                  <p class="card-category">See Your Cloth Donation List Here</p>
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
                          Address
                        </th>                        
                        <th>
                          Season
                        </th>
                        <th>
                          Sizes
                        </th>
                        <th>
                        No. of Item        
                    </th>
                     <th>
                        Ideal for                            
                    </th>
                      </thead>
                      <tbody>
                      <?php
if($num > 0){

while($row=  mysqli_fetch_array($result))
{
  $ideal = $row['cdIdealFor'] ;
  $season = $row['cdSeason'] ;
  $size = $row['cdAgeGrp'] ;
  $idealDecode = unserialize(base64_decode($ideal)); 
  $seasonDecode = unserialize(base64_decode($season)); 
  $sizeDecode = unserialize(base64_decode($size));
    ?>
<tr>
   <td><?php echo $row['cdId']; ?></td>
   <td><?php echo $row['cdName']; ?></td>
   <td><?php echo $row['cdMobile']; ?></td>
   <td><?php echo $row['cdEmail']; ?></td>
   <td><?php echo $row['cdAdd'] ;?></td>
   <td><?php foreach ($seasonDecode['0'] as $value) {
      echo "$value, ";
    };?></td>
    <td><?php foreach ($sizeDecode['0'] as $value) {
      echo "$value, ";
    };?></td>
   <td><?php echo $row['cdNoOfItem'] ;?></td>
   <td><?php foreach ($idealDecode['0'] as $value) {
      echo "$value, ";
    };?></td>
</tr>
<?php
}
}
else{
  ?>
  <td><?php echo "No Donation"; ?></td>

  <?php
}
?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Salary
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td>
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td>
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td>
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td>
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td>
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td>
                            $78,615
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
 
    <?php 
  include("./Footer/footer.php");
  ?>