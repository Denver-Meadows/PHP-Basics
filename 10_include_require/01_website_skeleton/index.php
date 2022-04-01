<!-- 
  This example is very close to EJS templating.  We created a header and included or required it on this file.
  Include is slightly different than require.
  Require means the file must be there and be displayed or there is a fatal error and the program will crash.
  Include will still run the other code on the page but not the file (if the file is not found.)
  Include_once will ensure a file is only included once
  -->

<?php include_once "partials/header.php"; ?>
<h3>Georgia, Tbilisi 5&#8451;</h3>
<h1>Welcome to my cool website</h1>
<?php include_once "partials/footer.php"; ?>
</body>
</html>