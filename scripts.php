
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
    function modalClick(title){
      title = title+'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
      body = "<p style='text-align: justify;'>&emsp;&emsp;&emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur odio purus, imperdiet feugiat tempor sed, euismod sed sapien. Sed lacus nunc, porta ac lorem a, malesuada pretium tortor. Donec volutpat massa in mauris porttitor pretium. Vestibulum finibus congue semper. Mauris consequat ultrices arcu, non luctus arcu. Sed convallis vulputate elit non molestie. Cras fringilla sodales leo, quis ultrices magna dignissim consequat. Curabitur aliquet augue tincidunt magna condimentum ornare.</p>";

      document.getElementById('modal-title').innerHTML = title;
      document.getElementById('modal-body').innerHTML = body;
    }
    function Linkclick(link){
      document.getElementById('Da_link').href = link;
      document.getElementById('Da_link').click();
    }
  </script>
