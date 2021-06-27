<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formularios</title>
<link href="Formularios.css" rel="stylesheet" type="text/css">
</head>

<body>
	
<form id="form1" name="form1" method="post" action="formulario2.php">
  <table width="0" height="27" border="0" align="center">
    <tbody>
      <tr>
        <td><label for="textfield"><strong>Nombres</strong>:</label></td>
        <td><input name="nom" type="text" required="required" id="textfield"></td>
      </tr>
      <tr>
        <td><label for="textfield2"><strong>Apellidos</strong>: </label></td>
        <td><input name="ape" type="text" required="required" id="textfield2"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Enviar"></td>
      </tr>
    </tbody>
  </table>
</form>
<blockquote>
  <form id="form2" name="form2" method="post" action="formulario3.php">
    <table width="200" align="center">
      <tbody>
        <tr>
          <td align="center"><strong>
            <label for="number">Seno:</label>
          </strong></td>
          <td><input name="seno" type="number" id="number" value="0"></td>
        </tr>
        <tr>
          <td align="center"><strong>
            <label for="number2">Logaritmo:</label>
          </strong></td>
          <td><input name="logaritmo" type="number" id="number2" value="0"></td>
        </tr>
        <tr>
          <td align="center"><strong>
            <label for="select">Operacion:</label>
          </strong></td>
          <td><select name="select" id="select">
            <option value="log">Logaritmo</option>
            <option value="sin">Seno</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="submit2" id="submit2" value="Enviar"></td>
        </tr>
      </tbody>
    </table>
  </form>
</blockquote>
	<form id="form3" name="form3" method="post" action="formulario4.php">
	  <table width="200" align="center">
	    <tbody>
	      <tr>
	        <td><strong>
	          <label for="number3">Radio:</label>
	        </strong></td>
	        <td align="center"><input name="radio" type="number" required="required" id="number3"></td>
          </tr>
	      <tr>
	        <td><strong>
	          <label for="number4">Altura:</label>
	        </strong></td>
	        <td align="center"><input name="altura" type="number" required="required" id="number4"></td>
          </tr>
	      <tr>
	        <td colspan="2" align="center"><input type="submit" name="submit3" id="submit3" value="Enviar"></td>
          </tr>
        </tbody>
      </table>
	</form>
</body>
</html>