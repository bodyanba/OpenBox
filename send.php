<?

if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")){
  $to = 'contact@openboxcharity.com';
  $subject = 'Callback';
  $message = '
  <table>
    <tr>
      <td>name</td>
      <td>'.$_POST['name'].'</td>
    </tr>
    <tr>
      <td>email</td>
      <td>'.$_POST['email'].'</td>
    </tr>
    <tr>
      <td>company</td>
      <td>'.$_POST['company'].'</td>
    </tr>
    <tr>
      <td>phone</td>
      <td>'.$_POST['phone'].'</td>
    </tr>
    <tr>
      <td>dates</td>
      <td>'.$_POST['dates'].'</td>
    </tr>
    <tr>
      <td>times</td>
      <td>'.$_POST['times'].'</td>
    </tr>
    <tr>
      <td>comments</td>
      <td>'.$_POST['comments'].'</td>
    </tr>
  </table>
  ';
  $headers  = "Content-type: text/html; charset=utf-8 \r\n";
  $headers .= "From:" .$_SERVER['HTTP_HOST'];
  mail($to, $subject, $message, $headers);
}

?>

