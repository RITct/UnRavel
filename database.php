<?php
$result = mysqli_connect(getenv("OPENSHIFT_MYSQL_DB_HOST").":".getenv("OPENSHIFT_MYSQL_DB_PORT"),getenv("OPENSHIFT_MYSQL_DB_USERNAME"),getenv("OPENSHIFT_MYSQL_DB_PASSWORD"),getenv("OPENSHIFT_APP_NrjAME"));
if(mysqli_connect_error())
{
  
  echo "Database connection error...";
  exit();
}
?>
