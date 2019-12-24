<!DOCTYPE html>
<html>
<head>
	<title>Teste Envio para o pipe</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
<div class="col-md-12">
     <div class="container">
      <div class="col-sm-12">
        
        <!--row-->
        <div class="row">
            <div class="col-md-6 col-sm-offset-3" style="background-color: white;">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="footer-header">
                          <h2 style="text-align: center;">Teste</h2>
                      </div>
                  </div>
             </div>
                <form action="{{route('PipeController.salvar')}}" enctype="multipart/form-data" method="post" id="formTrabalhe">

                  {{csrf_field()}}
                  <h4>Dados</h4>
                    <br>

                <div class="row">
                      
                      <div class="col-md-6"><input required="required" type="text" placeholder="E-mail" value="" name="title" id="title" class="form-control"></div>
                      <div class="col-md-6"><input required="required" name="value" id="value" placeholder="VAlô" type="text" class="form-control"></div>
                      <div class="col-md-6"><input required="required" name="org_id" id="org_id" placeholder="org" type="text" class="form-control"></div>
                    <div class="col-md-12">
                      <label></label>
                    <input style="border-radius: 10px;" class="contact_button button btn btn-primary btn-block btn-lg" type="submit" onclick="JavaScript:timedRedirect()" name="submit" id="submit_deal" value="Enviar"/>
                    </div>
                    <div id="server-results">
                        <!-- For server results -->
                    </div>
                </div>
                    </form>
                    </div>
                
            </div>
        </div>
    </div>
</div>
   
    <script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>