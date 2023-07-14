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
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Manage Product</span>
          </a>
        </li>
        <li>
          <a href="admincompany.html">
            <i class='bx bx-box' ></i>
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
                <legend>Add Product</legend>
                <form style="width: 700px;" name="myForm" onsubmit="return validateForm()" method="post">
                  <table>
                    <tr>
                      <th><label >Select Category:</label></th>
                      <td>
                        <select name="category" id="com">
                          <option value="gaming">Gaming</option>
                          <option value="office">Office</option>
                          <option value="low end">Low end</option>
                          <option value="high end">High end</option>
                        </select>
                      </td>
                    </tr>    
                    <tr>
                      <th><label >Select Company:</label></th>
                      <td>
                        <select name="company" id="com">
                          <option value="volvo">HP</option>
                          <option value="saab">Asus</option>
                          <option value="mercedes">Dell</option>
                          <option value="audi">Microsoft</option>
                          <option value="audi">MSI</option>
                          <option value="audi">Gigabyte</option>
                          <option value="audi">Lenovo</option>
                          <option value="audi">Vaio</option>
                        </select>
                      </td>
                    </tr>  
                    <tr>
                      <th><label >Product Name:</label></th>
                      <td><input type="text" name="tbname" id="prname"/>
                    </tr>  
                    <tr>
                      <th><label >Product Details:</label></th>
                      <td><textarea rows="5" cols="10" name="tbdetails" id="prdetails"></textarea>
                    </tr>  
                    <tr>
                      <th><label >Product Price:</label></th>
                      <td><input type="number" name="tbprice" id="prprice"/>
                    </tr>
                    <tr>
                      <th><label >Upload Picture:</label></th>
                      <td><input type="file" name="fupic" id="prpic"/>
                    </tr>
                    <tr>
                      <td><input type="submit" name="btnsubmit" value="ADD" ></td>
                      <td><input type="reset" name="btnsubmit" value="Cancel"></td>
                    </tr>
                  </table>
                </form>
          </div>
      </div>
    </div>
    
    <h3 >Available Products</h3>
    <div class="home-content" style="width:6300px; padding-top: 20px;">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class='grid'>
              <table cellpadding="0" cellspacing="0">
                <tr>
                  <th class='static'>Product Name</th>
                  <th class='dynamic c1'>Product Company</th>
                  <th class='dynamic c2'>Product Category</th>
                  <th class='dynamic c3'>Product Price</th>
                  <th class='dynamic c4'>Operation</th>
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
    sidebarBtn.onclick = function() 
    {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active"))
      {
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
      }
      else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }

      var nameerror = document.getElementById('pnameerror');
      var detailerror = document.getElementById('pdetailserror');
      var priceerror = document.getElementById('ppriceerror');
      var picerror = document.getElementById('ppicerror');

      function validateForm ()
      {
        let x = document.forms["myForm"]["tbname"].value;
        if (x == "") 
        {
          alert("Name must be filled out");
          return false;
        }
        let y = document.forms["myForm"]["tbdetails"].value;
        if (y == "") 
        {
          alert("Details must be filled out");
          return false;
        }
        let z = document.forms["myForm"]["tbprice"].value;
        if (z == "") 
        {
          alert("Price must be filled out");
          return false;
        }
      }
 </script>

</body>
</html>

