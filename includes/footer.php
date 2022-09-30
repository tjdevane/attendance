  <div id="footer" class="p-3 bg-primary text-white fixed-bottom">
    <p class="text-center">Copyright &copy; IT Conference Attendance System <?php echo date('Y'); ?></p>
  </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
  $( function() {
  	// the # references the id attribute
    $( "#dob" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "-100:+0",
      dateFormat: "yy-mm-dd"
    });
  } );
  </script>
</body>
</html>