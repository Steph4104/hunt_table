<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hunt Event!</title>
  </head>
  <body>
    <h1>Hunt Event</h1>
<form action='result.php' method='GET' >
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="number" id='result' name='result' class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

    <table class="table table-bordered">
  <tbody>
    <tr>
      <td><button id='btn1' type='button' value='1'>1</button></th>
      <td><button id='btn2' type='button' value='2'>2</button></th>
      <td><button id='btn3' type='button' value='3'>3</button></th>
    </tr>
    <tr>
      <td><button id='btn4' type='button' value='4'>4</button></td>
      <td><button id='btn5' type='button' value='5'>5</button></td>
      <td><button id='btn6' type='button' value='6'>6</button></td>
    </tr>
    <tr>
      <td><button id='btn7' type='button' value='7'>7</button></td>
      <td><button id='btn8' type='button' value='8'>8</button></td>
      <td><button id='btn9' type='button' value='9'>9</button></td>
    </tr>
    <tr>
      <td><button id='btn0' type='button' value='0'>0</button></th>
      <td><button id="go" type='submit'>GO!</button></td>
      <td><button id='erase' type='button'><-</button></td>
    </tr>
  </tbody>
</table>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
$(document).ready(function () {
jQuery(':button').click(function () {
    var firstvalue = $('#result').val();
    if (this.id == 'btn1') {
        // alert('Button 1 was clicked');
        var secondvalue = firstvalue + 1;
        $('#result').val(secondvalue);
    }    if (this.id == 'btn2') {
            // alert('Button 1 was clicked');
            var secondvalue = firstvalue + 2;
            $('#result').val(secondvalue);
        }    if (this.id == 'btn3') {
                // alert('Button 1 was clicked');
                var secondvalue = firstvalue + 3;
                $('#result').val(secondvalue);
            }    if (this.id == 'btn4') {
                    // alert('Button 1 was clicked');
                    var secondvalue = firstvalue + 4;
                    $('#result').val(secondvalue);
                }
                if (this.id == 'btn5') {
                    // alert('Button 1 was clicked');
                    var secondvalue = firstvalue + 5;
                    $('#result').val(secondvalue);
                }
                if (this.id == 'btn6') {
                    // alert('Button 1 was clicked');
                    var secondvalue = firstvalue + 6;
                    $('#result').val(secondvalue);
                }
                if (this.id == 'btn7') {
                    // alert('Button 1 was clicked');
                    var secondvalue = firstvalue + 7;
                    $('#result').val(secondvalue);
                }
                if (this.id == 'btn8') {
                    // alert('Button 1 was clicked');
                    var secondvalue = firstvalue + 8;
                    $('#result').val(secondvalue);
                }
                if (this.id == 'btn9') {
                    // alert('Button 1 was clicked');
                    var secondvalue = firstvalue + 9;
                    $('#result').val(secondvalue);
                }
                if (this.id == 'btn0') {
                    // alert('Button 1 was clicked');
                    var secondvalue = firstvalue + 0;
                    $('#result').val(secondvalue);
                }
    else if (this.id == 'erase') {
        // alert('Button erase was clicked');
        $('#result').val(firstvalue.slice(0,-1));

    }
    else if (this.id == 'go') {
        // alert('Button go was clicked');
        // $('#result').val(firstvalue.slice(0,-1));

    }
});
});
</script>
  </body>
</html>
