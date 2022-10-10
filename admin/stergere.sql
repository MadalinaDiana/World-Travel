
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"worldtravel");
/*!40101 SET NAMES utf8 */;

#
# Procedure "stergere"
#

CREATE PROCEDURE `stergere`(IN Param varchar(30))
BEGIN
DELETE
FROM parteneri 
WHERE email=Param;
END;
