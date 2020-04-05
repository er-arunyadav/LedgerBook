  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
    	changeMonth: true,
        changeYear: true,
    });
  } );

  $( function() {
    $( ".date" ).datepicker({
        changeMonth: true,
        changeYear: true,
    });
  } );

$(document).ready(function() {


 
 // Sparkline
 
var DrawSparkline = function() {
      
  		var debit =  <?php echo debit();?>;
        

        var linePoints = [0, 1, 3, 2, 1, 1, 4, 1, 2, 0, 3, 1, 3, 4, 1, 0, 2, 3, 6, 3, 4, 2, 7, 5, 2, 4, 1, 2, 6, 13, 4, 2];
        var barPoints = debit;
        $('#sparkline-line').sparkline(barPoints, {
            type: 'line',
            width: '100%',
            height: '40',
            chartRangeMax: 13,
            lineColor: '#ffb74d',
            fillColor: 'rgba(255,183,77,0.3)',
            highlightLineColor: 'rgba(0,0,0,0)',
            highlightSpotColor: 'rgba(0,0,0,.2)',
            tooltip: false
        });

        var credit =  <?php echo credit();?>;
        var barParent = $('#sparkline-bar').closest('.card');
        var barPoints = credit;
        var barWidth = 6;
        $('#sparkline-bar').sparkline(barPoints, {
            type: 'bar',
            height: '40px',
            width: '100%',
            barWidth: barWidth,
            barSpacing: (barParent.width() - (barPoints.length * barWidth)) / barPoints.length,
            barColor: 'rgba(0,0,0,.07)',
            tooltipFormat: ' <span style="color: #ccc">&#9679;</span> @{{value}}</span>'
        });


        var barParent2 = $('#sparkline-bar-2').closest('.card');
        var barPoints2 = [2, 0, 1, 5, 6, 8, 4, 1, 2, 0, 1, 3, 2, 2, 3, 1, 0, 2, 6, 9, 10, 6, 4, 2, 3, 2, 1, 2, 6, 4, 4, 2];
        var barWidth2 = 6;
        $('#sparkline-bar-2').sparkline(barPoints2, {
            type: 'bar',
            height: '40px',
            width: '100%',
            barWidth: barWidth2,
            barSpacing: (barParent2.width() - (barPoints2.length * barWidth2)) / barPoints2.length,
            barColor: 'rgba(82,175,80,.15)',
            tooltipFormat: ' <span style="color: #ccc">&#9679;</span> @{{value}}</span>'
        });
        
    };
    
 DrawSparkline();  



});
  </script
