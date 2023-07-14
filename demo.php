<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <!-- Your HTML table -->
<table>
  <tr>
    <th>Category No</th>
    <th>Category Name</th>
    <th>Action</th>
  </tr>
  <?php
  $conn = mysqli_connect('localhost','admin','admin','online_laptop_shop');
  $sql = "Select * from category_details";
  $result = mysqli_query($conn,$sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
      <td>" . $row["category_no"] . "</td>
      <td>" . $row["category_name"] . "</td>
      <td>
        <form method='POST'>
          <input type='hidden' name='category_no' value='" . $row["category_no"] . "'>
          <input type='hidden' name='category_name' value='" . $row["category_name"] . "'>
          <button type='submit' name='edit' value='" . $row["category_no"] . "'>Edit</button>
          <button type='submit' name='delete' value='" . $row["category_no"] . "'>Delete</button>
        </form>
      </td>
    </tr>";
  }
  ?>
</table>

<!-- Your input fields -->
<form method="POST">
  <input type="text" name="category_no">
  <input type="text" name="tbname">
  <input type="submit" name="save" value="Save">
</form>

<?php
// Your PHP code to handle the form submission
if (isset($_POST['edit'])) 
{
  $category_id = $_POST['category_no'];
  $sql = "SELECT * FROM category_details WHERE category_no = $category_id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $category_name = $row["category_name"];
  echo "<script>
    window.onload = function() {
  document.getElementsByName('tbname')[0].value = '$category_name';
};
    document.getElementsByName('btnsubmit')[0].value = 'Update';
  </script>";
}
if (isset($_POST['delete'])) 
{
  $category_id = $_POST['category_no'];
  $sql = "DELETE FROM category_details WHERE category_no = $category_id";
  if ($conn->query($sql) === TRUE)
  {
    echo "Record deleted successfully";
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

</body>
</html>