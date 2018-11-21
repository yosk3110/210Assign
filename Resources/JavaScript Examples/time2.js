

//<!-- Cut-N-Paste JavaScript from ISN Toolbox 
 //    Copyright 1996, Infohiway, Inc.  Restricted use is hereby
 //   granted (commercial and personal OK) so long as this code
//  is not *directly* sold and the copyright notice is buried
 // somewhere deep in your HTML document.  A link to our site
 //  http://www.infohiway.com is always appreciated of course,
 //  but is absolutely and positively not necessary. ;-)   -->

today=new Date();
hrs=today.getHours();
min=today.getMinutes();
sec=today.getSeconds();
clckh=""+((hrs>12)?hrs-12:hrs); 
clckm=((min<10)?"0":"")+min;
clcks=((sec<10)?"0":"")+sec;
clck=(hrs>=12)?"p.m.":"a.m.";


// End Hiding -->


// <!-- Your body copy here and then incorporate
  //   this script to print the time to screen -->




document.write("<B>"+clckh+":"+clckm
+":"+clcks+" "+clck+"<B><P>");
// End Hiding -->
