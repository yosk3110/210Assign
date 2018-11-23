<HTML> 
<HEAD>
<TITLE>First PHP Script</TITLE>
</HEAD>
<BODY>
<?PHP
   define("GST",7);
   print("gst=" . GST . "<br>");
   print("gst=GST<br>");
   define("GST",9);
   print("gst=" . GST . "<br>");
?>
</BODY>
</HTML>
