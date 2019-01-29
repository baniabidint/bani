<html>
  <head>
    <title>
      Form Pengisian
    </title>
  </head>
  <body>
    <div align='center'>
      <h1>
        <u>
          <font color="red">
            Selamat Datang Kawan
          </font>
        </u>
      </h1>
      <h2>
        Silahkan Mengisi Form Di Bawah Ini!
      </h2>
      <h2>
        111113035
      </h2>
    </div>
    <hr>
    <form action="proses.php" method="post">
      <table>
        <tr>
          <td>
            NIM 
          </td>
            <td colspan="7">
          <input type="text" name="nim" size="40">
        </td>
    </tr>
    <tr>
      <td>
        Name 
      </td>
      <td colspan="7">
        <input type="text" name="name" size="40">
      </td>
    </tr>
    <tr>
      <td>
        Addres
      </td>
      <td colspan="7">
        <input type="text" name="addres" size="40">
      </td>
    </tr>
    <tr>
      <td>
        Hobbies
      </td>
      <td>
        <textarea cols="40" rows="5" name="hobbies">
        </textarea>
      </td>
    </tr>
	<tr>
	<td>
        School
      </td>
      <td>
        <textarea cols="40" rows="5" name="school">
        </textarea>
      </td>
    </tr>
	<tr>
	<td>
        Skill
      </td>
      <td>
        <textarea cols="40" rows="5" name="Skill">
        </textarea>
      </td>
    </tr>
    <tr>
      <td>
        <input type="submit" name="proses" value="Kirim">
      </td>
      <td>
        <input type="reset" value="Reset">
      </td>
    </tr>
  </table>
</form>
</body>
</html>

