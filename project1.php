<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/output.php">
  <label for="quantity">Quantity (between 1 and 5):</label>
  <input type="number" id="quantity" name="q" min="1" max="5">
  <input type="submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
