 $( function() {
    $( "#tabs" ).tabs();
  } );

 
      $(function($){
         $('#grafica').highcharts({
		 credits: {
        enabled: false
    },
             title:{text:'Grafica de mis conocimientos'},
             
             yAxis:{title:'Porcentaje %',plotLines:[{value:0,width:1,color:'#808080'}]},
             tooltip:{valueSuffix:'%'},
             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
             series:[{type: 'column',name: 'Html5',data: [80]}, 
              
             {type: 'column',name: 'CSS3',data: [70]}, 
			  {type: 'column',name: 'Bootstrap',data: [70]}, 
			   {type: 'column',name: 'Ajax',data: [40]},
               {type: 'column',name: 'Jquery',data: [50]}, 	
               {type: 'column',name: 'Postgresql',data: [50]},			   
               {type: 'column',name: 'Codeigniter',data: [50]},
               {type: 'column',name: 'Wordpress',data: [70]},
                 {type: 'column',name: 'Photoshop',data: [30]},
			   {type: 'column',name: 'Windows',data: [70]},
			   {type: 'column',name: 'Linux',data: [40]},
			   {type: 'column',name: 'Microsoft Office',data: [70]},
         {type: 'column',name: 'Ingles Técnico',data: [60]},
        
           ],
             plotOptions:{line:{dataLabels:{enabled:true}}}
         });
     });