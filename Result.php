<!DOCTYPE html>
 <html>
 <head>
 	<title>Stack-Overflow Top 50</title>
   <script type='text/javascript' src='http://code.jquery.com/jquery-2.1.0.js'></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <script type='text/javascript' src="jqBarGraph.1.1.js"></script>

 </head>
 <body>
 <!--
<div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
<li><a href="http://www.jqueryscript.net/chart-graph/Animated-Bar-Diagram-Plugin-with-jQuery-barGraph.html">Download This Plugin</a></li>
<li><a href="http://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
-->
<div class="container">
<h1 style="margin-top:150px;" class="text-center">Stack-Overflow Top 50 Tags</h1>
<div class="row">
<!--
<div class="col-lg-6">
 <div id="chart-1"></div> 
</div><div class="col-lg-6">
 <div id="chart-2"></div> 
</div><div class="col-lg-6">
-->
 <div id="chart-3"></div> 
 <div id="try"></div>
</div>
 </div>
 
 
 
 
 <script >

 function display()
 {
 
 var obj;
	if (window.XMLHttpRequest)
	{
		obj=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		obj=new ActiveXObject("Microsoft.XMLHTTP");
	}
	obj.onreadystatechange=function()
	{
	arrayOfData1 = new Array();
	array= new Array();
		if (obj.readyState==4 && obj.status==200)
		{
			
			jason=obj.responseText;
			c = JSON.parse(jason);
			//document.getElementById("try").innerHTML=c[0][0];
			
			for (i = 0; i < c.length; i++)
			{
			//document.getElementById("try").innerHTML += c[i][0] + "<br>";
				var x = parseInt(c[i][1]);
				var y = parseInt(c[i][2]);
				var z = parseInt((y/x)*100);
			array[i]=new Array(x,y,z);
			
			if (c[i][0]=='c%23')
				{
				c[i][0]='c#';
				}
				
			arrayOfData1[i]=new Array(array[i],c[i][0]+'('+z+'%)');
			
			//document.getElementById("try").innerHTML += arrayOfData1[i][0]+"  "+arrayOfData1[i][1]+"<br>";
			
			}
			console.log(arrayOfData1);

			//for (i = 0; i < c.length/5; i++){
				//for (j = 0; j < c.length/5; j++){
					//for (k = 0; k < c.length/5; k++){
					//console.log(arrayOfData1[i][j][k]);
			//}
		//}
	//}

// 			 arrayOfData11 = new Array([[1231698,153189],"php"],
// [[1231698,153189],"javascript"],
// [[1147140,142615],"java"],
// [[1010969,110614],"c#"],
// [[1010969,110614],"c++"]

// );	
//alert(arrayOfData1[0][0]);
			$('#chart-3').jqBarGraph({data: arrayOfData1,
			colors: ['#3D0017','#6B0E1D','#AB2522'],
			legends: ['Total Asked Questions','Unanswered Questions'],
			legend: true,
			width: 5500,
			color: '#ffffff',
			type: 'multi',
			postfix: '',
			title: '<h3>Display Statistics of questions of Stack OverFlow</h3>'
			});
		}
	}
	
	obj.open("GET","encode_json.php",true);
	obj.send();

 }
 display();
    


$('#chart-1').jqBarGraph({ data: arrayOfData1 ,
                       colors: ['#006400','#00FF00','#e74c3c'], title: '<h3>Stacked Bar Graph</h3>'
});
arrayOfData2 = new Array(
[10.3,'Jan','#f3f3f3'],
   	 [15.2,'Feb','#f4f4f4'],
   	 [13.1,'Mar','#cccccc'],
   	 [16.3,'Apr','#333333'],
   	 [14.5,'May','#666666']
);	
$('#chart-2').jqBarGraph({ data: arrayOfData2, title: '<h3>Simple Bar Graph</h3>'
});

 </script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</script>
<hr>
<button id="myButton" class="" >Refresh Database</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
	alert("hi");
       var obj;
	if (window.XMLHttpRequest)
	{
		obj=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		obj=new ActiveXObject("Microsoft.XMLHTTP");
	}
	obj.onreadystatechange=function()
	{
	arrayOfData1 = new Array();
	array= new Array();
		if (obj.readyState==4 && obj.status==200)
		{
			if (obj.responseText)
			{
			location.reload(); 
			}
		}
		}
	
	obj.open("GET","renew.php",true);
	obj.send();
    };
</script>

 </body>
 </html>
  
  