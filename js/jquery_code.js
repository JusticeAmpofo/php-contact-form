 $(document).ready(function(){
	        		//alert("Hello World jquery");


	        		$('#province').css('color','#0A2990');
					$('#province').change(function() {
					    var current = $('#province option').val();
					      if (current !== 'null') {
					          $('#province').css('color','black');
					      } else {
					          $('#province').css('color','#0A2990');
					      }
					   }); //Closes change function
					   
					$('#number').css('color','#0A2990');
					$('#number').change(function() {
					    var current = $('#number option').val();
					      if (current !== 'null') {
					          $('#number').css('color','black');
					      } else {
					          $('#number').css('color','#0A2990');
					      }
					   }); //Closes change function
					   
					$('#budget').css('color','#0A2990');
					$('#budget').change(function() {
					    var current = $('#budget option').val();
					      if (current !== 'null') {
					          $('#budget').css('color','black');
					      } else {
					          $('#budget').css('color','#0A2990');
					      }
					   }); //Closes change function



	        	}); //Closes document