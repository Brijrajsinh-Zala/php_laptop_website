<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="adminside.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style type="text/css">
       tr,td,th,#com,input,textarea
       {
          border: 2px solid black;
          width:400px;
        }    
        img
        {
          height: 70px;
        }
     </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin Dashboard</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="adminside.html" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Manage Product</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' class="active"></i>
            <span class="links_name">Manage Company</span>
          </a>
        </li>
        <li>
          <a href="admincategory.html">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Manage Category</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Online Laptop Shop</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Hello Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content" style="width:6300px;">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
                <legend>Add Company</legend>
                <form style="width: 700px;" name="myForm" onsubmit="return validateForm()" method="post">
                  <table>
                    <tr>
                      <th><label >Company Name:</label></th>
                      <td><input type="text" name="tbname"/></td>
                    </tr>  
                    <tr>
                      <th><label >Company Details:</label></th>
                      <td><textarea rows="5" cols="10" name="txtdetails"></textarea></td>
                    </tr>  
                    <tr>
                      <th><label >Upload Logo:</label></th>
                      <td><input type="file" name="fupic"/></td>
                    </tr>
                    <tr>
                      <td><input type="submit" name="btnsubmit" value="ADD"></td>
                      <td><input type="reset" name="btnsubmit" value="Cancel"></td>
                    </tr>
                  </table>
                </form>
          </div>
      </div>
    </div>
    <h3 >Available Companies</h3>
    <div class="home-content" style="width:6300px; padding-top: 20px;">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class='grid'>
              <table cellpadding="0" cellspacing="0">
                <tr>
                  <th>Sr. no</th>
                  <th>Company Name</th>
                  <th>Company details</th>
                  <th>Logo</th>
                  <th>Operation</th>
                </tr>
                <tr>
                  <th>1</th>
                  <td >HP</td>
                  <td >A Powerfull Brand</td>
                  <th ><img src="img/bg-img/hp.jpg"></th>
                  <td ><input type="button" name="btnedit" value="EDIT"><br> 
                    <input type="button" name="btndelete" value="Delete"></td>
                </tr>
                <tr>
                  <th>2</th>
                  <td >ASUS</td>
                  <td >In search of Incredible</td>
                  <th ><img src="img/bg-img/asus.png"></th>
                  <td ><input type="button" name="btnedit" value="EDIT"><br> 
                    <input type="button" name="btndelete" value="Delete"></td>
                </tr>
                <tr>
                  <th>3</th>
                  <td >Dell</td>
                  <td >Believe In you</td>
                  <th ><img src="img/bg-img/dell.png"></th>
                  <td ><input type="button" name="btnedit" value="EDIT"><br> 
                    <input type="button" name="btndelete" value="Delete"></td>
                </tr>
                <tr>
                  <th>4</th>
                  <td >MSI</td>
                  <td >Lets experience the adventure</td>
                  <th ><img src="img/bg-img/msi.png"></th>
                  <td ><input type="button" name="btnedit" value="EDIT"><br> 
                    <input type="button" name="btndelete" value="Delete"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
      }else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }

      function validateForm ()
      {
        let x = document.forms["myForm"]["tbname"].value;
        if (x == "") 
        {
          alert("Name must be filled out");
          return false;
        }
        let y = document.forms["myForm"]["txtdetails"].value;
        if (y == "") 
        {
          alert("Details must be filled out");
          return false;
        }
        let z = document.forms["myForm"]["fupic"].value;
        if (z == "") 
        {
          alert("Please upload picture");
          return false;
        }
      }
 </script>

</body>
</html>

