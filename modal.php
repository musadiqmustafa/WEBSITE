<!doctype html>
<html lang="en">
  <head>
  	<title>Modal 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet">
	
		<link rel="stylesheet" href="css_modal/">
		<link rel="stylesheet" href="css_modal//flaticon.css">
		<link rel="stylesheet" href="css_modal//style.css">
  </head>
  <body>
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button id="close" type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="ion-ios-close"></span>
          </button>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 d-flex">
            <div class="modal-body p-5 img d-flex" style="background-image: url(images_modal/hello2.jpg);">
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="modal-body p-5 d-flex align-items-center">
              <div class="text w-100 text-center py-5">
                <h2 class="mb-0">50<span>%</span> Off</h2>
                <h4 class="mb-4">Unleash the full potential of your budget with our cost-effective pricing plan</h4>
                <form action="#" class="code-form"></form>
                <a href="pp.php" class="btn btn-primary d-block py-3">Pricing Plans</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="js_modal/jquery.min.js"></script>
  <script src="js_modal/popper.js"></script>
  <script src="js_modal/bootstrap.min.js"></script>
  <script src="js_modal/main.js"></script>
</body>

  <script>
$( document ).ready(function() {
	setTimeout(function(){
		$('#exampleModalCenter').modal('show');


}, 2500); 
});
document.getElementById("close").onclick = function() {
    $('#exampleModalCenter').modal('hide');
};

   


  </script>
</html>