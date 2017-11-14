<!DOCTYPE html>
<html lang="en">

  <head>

    <link rel="page icon" href="../res/img/beer.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Post Deal</title>

    <!-- bootstrap core css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet">
	  <!-- animate css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <!-- boostrap slider css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/css/bootstrap-slider.min.css" rel="stylesheet">
    <!-- boostrap combo-box css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-combobox/1.1.8/css/bootstrap-combobox.min.css" rel="stylesheet">
    	<!-- font awesome css-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- google lobster font -->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <!-- custom styles -->
    <link href="/res/styles/ColorScheme.css" rel="stylesheet">
    <link href="../res/styles/navigation_header.css" rel="stylesheet">
    <link href="../res/styles/post.css" rel="stylesheet">
    <!--css for dropdown color-->

  </head>

  <body>

    <!-- top navigation bar -->
    <?php $page='post'; include('navigation_header.php'); ?>

    <!-- page contents -->
    <div class="container-fluid" style="margin-bottom: 20px;">

      <h1 class="animated jello textBlue title-bar" style="text-align: center; font-size: 3em">Post A Deal&nbsp;<span  class="glyphicon glyphicon-map-marker textGold"></span></h1>

  
  			<!-- enter drink information form -->
  		  <div class="container-fluid formBox col-xs-12 col-md-5 animated bounceInLeft">
      		<fieldset>
        		<legend>Enter drink information</legend>
  			    <form data-toggle="validator" role="form" id="manualForm">
			          
                <!-- liquor type field -->
                <div class="form-group">
                  <label for="inputType" class="control-label" >Type of liquor:</label>
                  <select class="combobox form-control " id="inputType" name="inputType">
                    <option></option>
                    <option value="all">ALL</option>
                    <option value="beer">Beer</option>
                    <option value="brandy">Brandy</option>
                    <option value="gin">Gin</option>
                    <option value="liqueur">Liqueur</option>
                    <option value="rum">Rum</option>
                    <option value="tequila">Tequila</option>
                    <option value="vodka">Vodka</option>
                    <option value="whiskey">Whiskey</option>
                    <option value="wine">Wine</option>
                  </select>
                </div>
                
                <!-- brand field -->
                <div class="form-group">
                  <label for="inputBrand" class="control-label">Brand:</label>
                  <div class="input-group">
			            	<span class="mytext input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                    <input type="text" class="form-control typeahead" id="inputBrand" name="inputBrand" placeholder="Brand of liquor">
                  </div>
                </div>

                <!-- name field -->
                <div class="form-group">
                  <label for="inputName" class="control-label">Name of drink:</label>
                  <div class="input-group">
			            	<span class="mytext input-group-addon"><span class="glyphicon glyphicon-glass"></span></span>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Name of liquor">
                  </div>
                </div>
                
                <!-- price field -->
                <div class="form-group">
			          	<label for="inputPrice" class="control-label">Price:</label>
			            <div class="input-group">
			            	<span class="mytext input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
                		<input type="text" class="form-control" id="inputPrice" name="inputPrice" placeholder="Price of your bottle">
			          	</div>
			          </div>

			          <!-- location field -->
			          <div class="form-group">
                  <label for="inputLocation" class="control-label">Purchase location:</label>
                  <div class="input-group">
                    <span class="mytext input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                    <input type="text" class="form-control" id="inputLocation" name="inputLocation" placeholder="Where did you get it?">
                  </div>
                </div>
                
			        </form>
      			</fieldset>
    			</div>

		<div class="col-xs-12 col-md-2">
			<div class="container-fluid middleBox">
				<h2 class="textBlue">or</h2>
			</div>
		</div>

		<!-- enter drink upc form -->
				<div class="container-fluid formBox col-xs-12 col-md-5 animated bounceInRight">
    			<fieldset>
        			<legend>Enter drink UPC and price</legend>
        			
			        <form data-toggle="validator" role="form" id="upcForm">
			          
			          <!-- UPC field -->
			          <div class="form-group">
				        	<label for="inputUPC" class="control-label">UPC:</label>
				          <div class="input-group">
				            <span class="mytext input-group-addon"><span class="glyphicon glyphicon-barcode"></span></span>
	                	<input type="text" class="form-control" id="inputUPC" name="inputUPC" placeholder="Barcode on your bottle">
				          </div>
			          </div>
			          <div class="form-group">
				          <div class="form-group text-center">
	        					<p><a href="#">What is a UPC code?</a></p>
	        				</div>
        				</div>
        				
        				<!-- price field -->
        				<div class="form-group">
				          <label for="inputPriceUPC" class="control-label">Price:</label>
				          <div class="input-group">
				            <span class="mytext input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
	                	<input type="text" class="form-control" id="inputPriceUPC" name="inputPriceUPC" placeholder="Price of your bottle">
				          </div>
			          </div>
			          
			          <!-- location field -->
		          	<div class="form-group">
                  <label for="inputLocationUPC" class="control-label">Purchase location:</label>
                  <div class="input-group">
                    <span class="mytext input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                    <input type="text" class="form-control" id="inputLocationUPC" name="inputLocationUPC" placeholder="Where did you get it?">
                  </div>
                </div>
			        </form>
      			</fieldset>
    			</div>

		</div>
		

		  <!-- submit form button -->
        <div class="form-group">
        	<button class="btn btn-md btn-primary btn-block" id="submitButton" style="width:67%; margin-left:auto; margin-right:auto;" type="submit">Submit post&nbsp;<span class="glyphicon glyphicon-send"></span></button>
        </div>

        <!-- clear form button -->
        <div class="form-group">
            <button class="btn btn-md btn-primary btn-danger btn-block" id="clearButton" style="width:67%; margin-left:auto; margin-right:auto;" type="reset">Clear&nbsp;<span class="glyphicon glyphicon-trash"></span></button>
        </div>
    
    </div>

    <!-- footer -->
    <?php $page='post'; include('footer.php'); ?>

    <!-- jQuery core js -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- bootstrap core js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- validator js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
    <!-- boostrap combo-box js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-combobox/1.1.8/js/bootstrap-combobox.min.js"></script>
    <!-- google maps js api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJEWvn1C-4qZbAUdR-QwiBqe-BX1WDMA8&libraries=places&callback=initMap" async defer></script>
    <!-- post js -->
    <script type="text/javascript" src="js/post.js"></script>
    
    <!-- init combo-box script -->
    <script type="text/javascript">
      $(document).ready(function(){
        $('.combobox').combobox();
      });
    </script>
    
        
    <!-- google establishments (liquor stores) autocomplete js -->
    <script type="text/javascript">
    function initMap() {
        var input = document.getElementById('inputLocation');
        var options = {
          types: ['establishment']
        };

        var autocomplete = new google.maps.places.Autocomplete(input, options);
        autocomplete.setOptions({strictBounds: true});

      }
      
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    
    <script>
      $(document).ready(function(){
          $("#search").typeahead({
              name : 'sear',
              remote: {
                  url : 'connection.php?query=%QUERY'
              }
              
          });
      });
      </script>
    

  </body>

</html>
