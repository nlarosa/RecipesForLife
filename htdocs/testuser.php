<html>
<body>

<?php

  $conn = oci_connect("hr", "hr", "xe") 
     or die("<br>Couldn't connect");

  $query = "select user from dual";

  $stmt = oci_parse($conn, $query);
  oci_define_by_name($stmt, "USER", $u);
  oci_execute($stmt);
  oci_fetch($stmt);

  echo "The user is: $u";

  oci_close($conn);
?> 

</body>
</html>

