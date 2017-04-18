<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPEncrypter</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="sweetalert/sweetalert.min.js"></script>
  </head>
  <body>
    <div class="container form-group form-group-lg vcenter form">
      <form class="form-horizontal" action="crypt.php" method="POST">
        <fieldset>
          <div class="form-group">
            <label for="text" class="col-lg-2 control-label">Text</label>
            <div class="col-lg-10">
              <input type="text" name="text" class="form-control input">
            </div>
          </div>
          <div class="form-group">
            <label for="text" class="col-lg-2 control-label">Key</label>
            <div class="col-lg-10">
              <input type="text" name="key" class="form-control input">
            </div>
          </div>
            <div class="form-group radios">
              <div class="col-lg-10">
                <div class="radio">
                  <label>
                    <input type="radio" name="action" id="optionsRadios1" value="encrypt" checked="">
                    <span class="radioLabel">Encrypt</span>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="action" id="optionsRadios2" value="decrypt">
                    <span class="radioLabel">Decrypt</span>
                  </label>
                </div>
              </div>
            </div>
            <input type="submit" class="btn-lg btn-primary submitBtn">
          </div>
        </fieldset>
      </form>
    </div>

    <script type="text/javascript">
    function getUrlVars() {
      var vars = {};
      var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
      });
        return vars;
      }

      var enMsg = getUrlVars()["enMsg"];
      var msg = getUrlVars()["msg"];
      if (typeof enMsg !== 'undefined') {
        swal({
          title: "Message encrypted!",
          text: "Your message is <b>" + enMsg + "</b>",
          html: true,
          type: "success"
        });
      }
      if (typeof msg !== 'undefined') {
        swal({
          title: "Message decrypted!",
          text: "Your message is <b>" + msg + "</b>",
          html: true,
          type: "success"
        });
      }
    </script>
  </body>
</html>
