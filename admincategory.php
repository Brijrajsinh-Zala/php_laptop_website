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
          <a href="adminside.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Manage Product</span>
          </a>
        </li>
        <li>
          <a href="admincompany.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Manage Company</span>
          </a>
        </li>
        <li>
          <a href="#" class="active">
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
                <legend>Add Category</legend>
                <form style="width: 700px;" name="myForm" onsubmit="return validateForm()" method="post">
                  <table>
                    <tr>
                      <th><label >Category Name:</label></th>
                      <td><input type="text" name="tbname" /></td>
                    </tr>  
                    <tr>
                      <td><input type="submit" name="btnsubmit" value="ADD"></td>
                      <td><input type="reset" name="btncancel" value="Cancel"></td>
                    </tr>
                  </table>
                </form>
          </div>
      </div>
    </div>
    <?php 
      $conn = mysqli_connect('localhost','admin','admin','online_laptop_shop');
      if (isset($_POST['tbname'])) 
      {
        $categoryname = $_POST['tbname'];
        if (empty($categoryname))
        {
          header("Location: admincategory.php");
          exit();
        }
        $sql = "INSERT INTO category_details (`category_no`, `category_name`) VALUES (NULL, '$categoryname');";
        if ($conn->query($sql) === TRUE)
        {
          echo "New record created successfully";
        } 
        else 
        {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }


      $sql = "SELECT * FROM category_details";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) 
      {
        echo "<h3 >Available Categories</h3>";
        echo "<div class='home-content' style='width:6300px; padding-top: 20px;'>";
        echo "<div class='overview-boxes'>";
        echo "<div class='box'>";
        echo "<div class='right-side'>";
        echo "<div class='grid'>";
        echo "<table cellpadding='0' cellspacing='0'>";
        echo "<tr>";
        echo "<th>Sr. no</th>";
        echo "<th>Category Name</th>";
        echo "<th>Operation</th>";
        echo "</tr>";
        while($row = $result->fetch_assoc()) 
        {
          echo "<tr><th>" . $row["category_no"] . "</th><th>" . $row["category_name"] . "</th><td><form method='POST'>
          <input type='hidden' name='category_no' value='" . $row["category_no"] . "'>
          <input type='hidden' name='category_name' value='" . $row["category_name"] . "'>
          <input type='button' name='btnedit' value='EDIT'><br>
          <input type='button' name='btndelete' value='Delete'></form></td></tr>";
        }
        echo "</table>";
      } 
      else 
      {
        echo "No records found";
      }
    ?>

  </section>

  <script type="text/javascript">
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
      }else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }

      function validateForm()
      {
        let x = document.forms["myForm"]["tbname"].value;
        if (x == "") 
        {
          alert("Name must be filled out");
          return false;
        }
      }
 </script>

</body>
</html>

