
<!DOCTYPE html>
<html lang="es" class="fonts-loaded">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <title>CONSTRUCTOR HTML</title>

  <!-- ///////////////////////////////////////// -->
  <!-- CSS                                       -->
  <!-- ///////////////////////////////////////// -->

  <!-- Tools -->
  {{ HTML::style('css/foundation.css') }}
  {{ HTML::style('css/colorbox.css') }}


  <!-- CSS Core -->
  {{ HTML::style('css/app.css') }}

  <link rel="stylesheet" type="text/css" href="https://rawgit.com/bgrins/spectrum/master/spectrum.css">


  

</head>
<body>
  
  <?php
    function generaRutas($carpeta){
      $path = public_path();
      $directorio = opendir( $path . "/plantillas/" .$carpeta."/"); 
      //$directorio = opendir("plantillas/".$carpeta."/"); 
      $filenames = array();
      while ($archivo = readdir($directorio)) 
      {
        if (!is_dir($archivo))
        {
          //echo "<option value='../../plantillas/".$carpeta."/". $archivo . "'>" . $archivo . "</option>";
          $filenames[] = $archivo;
        }
      };
      sort($filenames);
      
      foreach ($filenames as $filename) {
        //echo $filename;
        echo "<option value='../../plantillas/".$carpeta."/". $filename . "'>" . $filename . "</option>";
      }

    }
  ?>
  <div class="veladura" style="display:none;">
    <p>Procesando emailing</p>
  </div>
  
  <div class="container">
    
    <div class="logout">
      <a href="{{ route('empresa.show', $empresa->id) }}"></a>
    </div>

    <div class="folder">
    <!-- ///////////////////////////////////////// -->
    <!-- CREAR FOLDER                              -->
    <!-- ///////////////////////////////////////// -->

      <div class="folder__middle">
        <form action="motor.php" method="post" id='frm-emailing'>
          <h2 style=" color: #959595;">{{$empresa->nombre_empresa}}</h2>
          <h6><strong>Remember the shortcode</strong></h6>
          <h6 class="recuerda-shortcode">
            <span>First Name</span>: [first_name]<br>
            <span>Last Name</span>:&nbsp;[last_name]<br>
            <span>Full Name</span>:&nbsp;&nbsp;[full_name]<br>
            <span>Email</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[email]
          </h6>
          <br><br>
          <div class="recuerda-shortcode">
            <input type="text" name="namefile" id="namefile" class="folder__input text" placeholder="Nombre de Emailing ..." />
          <a href="javascript:;" class="btn-new noTab">Nuevo HTML</a>
          <textarea name="contenido" id="input" cols="30" rows="10" style='display:none;'></textarea>
          <br>
          <br>
          </div>
        </form>
      </div>

    </div><!-- / .folder -->

    <div class="construct">
    <!-- ///////////////////////////////////////// -->
    <!-- CONSTRUCTOR HTML                          -->
    <!-- ///////////////////////////////////////// -->

      <div class="construct__title">
        <span>Constructor Emailing</span>
        <!-- <input type="submit" value="Generar HTML" class='btn-generator'> -->
        <a href="#" class="btn-picker-color noTab"><input type="text" id="paletaBBVA" style=""></a>
        <a href="#" class="btn-generator noTab">Generar HTML</a>
      </div><!-- / .construct__title -->
      
      <div class="scrollbar-outer blue">
        <div class="construct__panel ">
          <div class="panel">
            <span class="panel__title">
            HEADER
            </span>
            

            
            <select class="jsSelect panel__option" name="valores[]" id="header-select" data-id='#header'>
              <option value="">...</option>
              <?php
                generaRutas("header");
              ?>
            </select>
          </div><!-- / .panel -->

          <div class="panel panel--cuerpo">
            <span class="panel__title">
            CUERPO
            </span>

            <select class="panel__option" name="valores[]" id="">            
              <?php
                generaRutas("cuerpo");
              ?>
            </select>
            <button class='btn-agregar' data-id='#cuerpo'>+</button>
          </div><!-- / .panel -->

          <div class="panel">
            <span class="panel__title">
            LEGALES
            </span>
            <select class="jsSelect panel__option" name="valores[]" id="" data-id='#legales'>
              <option value="">...</option>
              <?php
                generaRutas("legales");
              ?>
            </select>
          </div><!-- / .panel -->

          <div class="panel">
            <span class="panel__title">
            FOOTER
            </span>
            <select class="jsSelect panel__option" name="valores[]" id="" data-id='#footer'>
              <option value="">...</option>
              <?php
                generaRutas("footer");
              ?>
            </select>
          </div><!-- / .panel --> 
        </div><!-- / .construct__panel -->
      </div>

      <div class="copy">
        <img src="http://ess.pe/wp-content/uploads/2016/05/logo.png" alt="Elemental Studio" style="width: 84px;margin-top: 4px;">
      </div>
    </div><!-- / .construct -->

    <div class="preview">
    <!-- ///////////////////////////////////////// -->
    <!-- VISUALIZADOR HTML                         -->
    <!-- ///////////////////////////////////////// -->
      <div class="scrollbar-outer gray" id="doc" contenteditable='true' data-replace="{{ URL::to('replace') }}" data-image="{{ URL::to('image') }}" data-business="{{ route('empresa.show', $empresa->id) }}"> 
        <div class="preview__panel" id="device" data-device="laptop" >
          <!-- CENTERED -->
          <table cellpadding="0" cellspacing="0" border="0" width="100%">
            <tr>
              <td style="font-size:0px">&nbsp;</td>
              <td width="610" align="center" style="font-size:0px;" id="view-content">

              <!-- BEGIN CONTAINER -->
              <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 10px; font-family: Verdana, Helvetica, sans-serif;" id="emailing">
                <tr><!-- HEADER -->
                  <td id="header">
                  </td>
                </tr>

                <tr><!-- CUERPO -->
                  <td id="cuerpo">
                    <table cellpadding="0" cellspacing="0" class="contenedor" align="center">
                    </table>
                  </td>
                </tr>

                <tr><!-- CIERRE -->
                  <td id="cierre">
                  </td>
                </tr>

                <tr><!-- APP disponible -->
                  <td id="disponible">
                  </td>
                </tr>

                <tr>
                  <td style="padding: 0 5px;">
                    <hr style="border-top:1px solid #696969; border-bottom:0px; margin:5px 0;">
                  </td>
                </tr>

                <tr><!-- CLAQUETA -->
                  <td id="claqueta">
                  </td>
                </tr>

                <tr><!-- LEGALES -->
                  <td id="legales">
                  </td>
                </tr>

                <tr><!-- DICLAIMER -->
                  <td id="diclaimer">
                  </td>
                </tr>

                <tr><!-- FOOTER -->
                  <td id="footer">
                  </td>
                </tr>
              </table>

              </td>
              <td style="font-size:0px">&nbsp;</td>
            </tr>
          </table>            
        </div><!-- / .preview__panel -->
      </div>

      <div class="toolbar" contenteditable='false'>
        <ul class="device-mode">
          <li><a href="#" class="laptop"></a></li>
          <li><a href="#" class="iphone4"></a></li>
          <li><a href="#" class="iphone5"></a></li>
        </ul>        
      </div>
    </div><!-- / .preview -->   

    <div style='display:none;'>
    <!-- ///////////////////////////////////////// -->
    <!-- MODALES                                   -->
    <!-- ///////////////////////////////////////// -->
      <div id="uploadImage" class="modal">
        <form action="upload-image.php" method="post" enctype="multipart/form-data">
            <span class="modal__title">
              Seleccione una imagen para subir:
            </span>
            <input type="file" onchange="previewFile()"><br>
            <!-- <input type="file" name="files" id="files"> -->
            <span class="modal__note">
              Agregar enlace ( No olvidar http:// ) 
            </span>
            <input type="text" name='linkImage' id='linkImage' placeholder='http://'>
            <a href="javascript:;" class='btn-upload'>Aceptar</a>
            <div class="progress"></div>
            <!-- <input type="submit" value="Upload Image" name="submit"> -->
        </form>
      </div>

      <div id="changeLink" class="modal">
        <span class="modal__title">Ingrese Link:</span>
        <input type="text" name='inputLink' id='inputLink' class='large' value='http://'>
        <a href="#" class='btn-changeLink'>aceptar</a>
      </div>

      
    </div>



  </div><!-- / .container -->



  <div class="scripts">

    <!-- ///////////////////////////////////////// -->
    <!-- JS                                        -->
    <!-- ///////////////////////////////////////// -->

    <!-- jQuery (necessary JavaScript Library) -->    
    {{ HTML::script('js/vendor/jquery.min.js') }}

    <!-- Tools -->
    {{ HTML::script('js/foundation.js') }}
    {{ HTML::script('js/jquery.colorbox-min.js') }}
    {{ HTML::script('js/jquery.alphanumeric.js') }}

    {{ HTML::script('js/jquery.easing.js') }}
    
    {{ HTML::script('js/zip/dist/jszip.js') }}
    {{ HTML::script('js/zip/vendor/FileSaver.js') }}

    {{ HTML::script('js/spectrum.js') }}



    <!-- JS Core -->
    {{ HTML::script('js/app.js') }}


    <!-- JS others -->
    <script type="text/javascript">
      
      

    </script>


  </div><!-- / .scripts -->  
</body>
</html>