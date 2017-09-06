<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

 <script type="text/javascript">
$.ajax({
  type: 'POST',
  url: 'http://localhost/restmobile/test.php',
  beforeSend: function(xhr) {
    xhr.setRequestHeader("auth-key", "145885521jhs"); 
    // more as you need
  }
});
 </script>