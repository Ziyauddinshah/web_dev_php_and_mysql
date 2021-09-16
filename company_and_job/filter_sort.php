<?php
session_start();
include('connection.php');
if(isset($_POST['action']))
{
  // if(isset($_POST['organisation']))
  // {
    $search_for=$_POST['action'];
    if($search_for=="organisation" or $search_for=="" )
    {
      $location=$_POST['location_text'];
      // $location = mysqli_real_escape_string($con, $_POST['location_text']);
      $query="SELECT * from organisation where companyaddress LIKE '%$location%'";
      $qrun2=mysqli_query($con,$query);
      // $row=mysqli_num_rows()
      $output='';
      if(mysqli_num_rows($qrun2)>0)
      {
        $output.='<h3>Organisations</h3>';
        while($row=mysqli_fetch_array($qrun2))
        {
          $output.='
            <div class="col-sm-12 organisation">
              <h2>'.$row['companyname'].'</h2> 
              <span>Ratings:</span>
              <div>
                <span>Total Vacancies:'.$row['noofvacancies'].'</span>
                <span>||</span>
                <span>Totlal Employee:'.$row['noofemployee'].'</span>
              </div>
              <div><h4 ><b>Vacancies Type: </b><span style="color:red;">'.$row['vacanciestype'].'</span></h4></div>
              <hr style="border-top: 1px solid #001a00;">
              <div>
                <p>this is description section of company</p>
                <div>
                  <span>Email:'.$row['companyemail'].'</span><br>
                  <span>Mobile: '.$row['companymob'].'</span><br>
                  <span>Address: '.$row['companyaddress'].'</span>
                </div>
                <a type="submit" class="btn btn-sm" href="#" style="background-color: #80ffaa">Know More <span style="color:blue">>></span></a>
              </div>
            </div>
            <hr style="border-top: 1.5px solid #001a00;">';
        }
      }
      else
      {
        $output="Not found";
      }
      echo $output;
    }
    else
    {
      $location=$_POST['location_text'];
      $query="SELECT * from searcher where searcheraddress LIKE '%$location%'";
      $qrun2=mysqli_query($con,$query);
      // $row=mysqli_num_rows()
      $output='';
      if(mysqli_num_rows($qrun2)>0)
      {
        $output.='<h3>Searcher</h3>';
        while($row1=mysqli_fetch_array($qrun2))
        {
          $output.='<div class="col-sm-12 ">
                      <h2>'.$row1['searchername'].'</h2>
                      <label for="red">Future Add:</label>
                      <input type="checkbox" name="favcolor" id="red" value="red" checked> 
                      <!-- <span type="checkbox">Future Add:</span> -->
                      <div>
                        <span>Available Time: '.$row1['availabletime'].'</span>
                        <span>||</span>
                        <!-- <span>Totlal Employee: .$row1["noofemployee"].</span> -->
                      </div>
                      <div><h4 ><b>Job Type: </b><span style="color:red;">'.$row1['jobtype'].'</span></h4></div>
                      <hr style="border-top: 1px solid #001a00;">
                      <div>
                        <p>this is description section of company</p>
                        <div>
                          <span>Email: '.$row1['searcheremail'].'</span><br>
                          <span>Mobile: '.$row1['searchermob'].'</span><br>
                          <span>Address: '.$row1['searcheraddress'].'</span>
                        </div>
                        <a type="submit" class="btn btn-sm" href="#" style="background-color: #80ffaa">Know More <span style="color:blue">>></span></a>
                      </div>
                    </div>
                    <hr style="border-top: 1.5px solid #001a00;">';
        }
      }
      else
      {
        $output="Not found";
      }
      echo $output;
    }
  // }
}

// if($_POST['searcher'])
// {
//   if(isset($_POST['location_text']))
//   {
//     $location=$_POST['location_text'];
//     $query="SELECT * from organisation where companyaddress LIKE '%$location%'";
//     $qrun2=mysqli_query($con,$query);
//     // $row=mysqli_num_rows()
//     $output='';
//     if(mysqli_num_rows($qrun2)>0)
//     {
//       $output.='<h3>Organisations</h3>';
//       while($row=mysqli_fetch_array($qrun2))
//       {
//         $output.='
//         <div class="col-sm-12 organisation">
//                       <h2>'.$row['companyname'].'</h2> 
//                       <span>Ratings:</span>
//                       <div>
//                         <span>Total Vacancies:'.$row['noofvacancies'].'</span>
//                         <span>||</span>
//                         <span>Totlal Employee:'.$row['noofemployee'].'</span>
//                       </div>
//                       <div><h4 ><b>Vacancies Type: </b><span style="color:red;">'.$row['vacanciestype'].'</span></h4></div>
//                       <hr style="border-top: 1px solid #001a00;">
//                       <div>
//                         <p>this is description section of company</p>
//                         <div>
//                           <span>Email:'.$row['companyemail'].'</span><br>
//                           <span>Mobile: '.$row['companymob'].'</span><br>
//                           <span>Address: '.$row['companyaddress'].'</span>
//                         </div>
//                         <a type="submit" class="btn btn-sm" href="#" style="background-color: #80ffaa">Know More <span style="color:blue">>></span></a>
//                       </div>
//                     </div>
//                     <hr style="border-top: 1.5px solid #001a00;">';
//       }
//     }
//     else
//     {
//       $output="Not found";
//     }
//     echo $output;
//   }
// }

mysqli_close($con);
?>