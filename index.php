
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="javascript.js"></script>

    <script>
      function addSelect() {
        var Tdtec = document.getElementById("tec-soporte");
        var row = document.createElement("tr");
        var tdSelect = document.createElement("td");
        var label = document.createElement("label");
        label.innerHTML = "Seleccione otro color:";
        var newSelect = document.createElement("select");
        newSelect.id = "color2";
        newSelect.name = "color2";
        var options = document.getElementById("color").options;
        for (var i = 0; i < options.length; i++) {
          var option = document.createElement("option");
          option.value = options[i].value;
          option.text = options[i].text;
          newSelect.appendChild(option);
        }
        tdSelect.appendChild(label);
        tdSelect.appendChild(newSelect);
        row.appendChild(tdSelect);
        var button = document.createElement("button");
        button.innerHTML = "Agregar seleccionador";
        button.id = "add-button";
        button.setAttribute("onclick", "addSelect()");
        Tdtec.appendChild(row);
      }
    </script>
  </head>
  <body>
   
    <div class="letter">
      <div class="container">
        <table id="table-select">
          <tr>
            <th>FORMULARIO DE DESCARGO POR SOPORTE TECNICO DE LA UNIDAD DE SISTEMAS E INFORMATICA</th>
          </tr>
          <tr>
            <th>1. DATOS DEL EQUIPO</th>
          </tr>
          <tr>
            <td>
              <label for="nameUsu">NOMBRE DEL EQUIPO:</label>
              <input type="text" id="age" name="age">
              <br>
              <label for="nameUsu">WINDOWS QUE UTILIZA:</label>
              <input type="text" id="age" name="age">
              <br>
              <label for="nameUsu">WINDOWS QUE UTILIZA:</label>
              <input type="text" id="age" name="age">
              <br>
              <label for="nameUsu">DIRECCION IP DEL EQUIPO:</label>
              <input type="text" id="age" name="age">
              <br>
            </td>
          <tr>
            <th>1. DATOS PERSONALES</th>
          </tr>
          <tr>
            <td>
              <form>
                <label for="nameTec">NOMBRE DEL TECNICO:</label>
                <select id="names" name="names">
                  <option value="juan">Christian Diaz</option>
                  <option value="maria">SubOficial </option>
                  <option value="pedro">Sargento</option>
                  <option value="isabel">Adrian Rodriguez Zelada</option>
              </select>
                <br>
                <label for="nameUsu">NOMBRE DEL USUARIO:</label>
                <input type="text" id="age" name="age">
                <br>
                <label for="repartition">REPARTICION:</label>
                <select id="names" name="names">
                    <option value="juan">informatica</option>
                    <option value="maria">direccion general</option>
                    <option value="pedro">Pedro</option>
                    <option value="isabel">Isabel</option>
                </select>
                <br>
                <label for="piso">PISO:</label>
                <input type="number" id="age" name="age">
                <br>
                <p>Fecha actual: <span id="fecha"></span></p>
                <script>
                  var fecha = new Date();
                  document.getElementById("fecha").innerHTML = fecha;
                </script>
                <br>
                
            </form>
            </td>
          </tr>
          <tr>
            <th>SERVIVIO DE SOPORTE REALIZADO</th>
          </tr>
          <tr id="soporte">
            <td id="tec-soporte">
              <label for="color">Seleccionar Trabajo que requiere</label>
              <select id="color" name="color">
                <option value="red">Problemas de virus</option>
                <option value="blue">Instalacion de Sistema Operativo</option>
                <option value="green">Instalación de Controladores</option>
                <option value="red">Antivirus Corporativo</option>
                <option value="blue">Activación de Office</option>
                <option value="green">Activación de Sistema Operativo</option>
                <option value="red">DOMINIO</option>
                <option value="blue">HERMES</option>
                <option value="green">Problemas de conexion de impresoras</option>
                <option value="red">Reseteo de impresoras</option>
              </select>
              <br>
              <button id="add-button" onclick="addSelect()">Agregar seleccionador</button>
            </td>
          </tr>
          <tr id="redes">
            <td id="tec-redes">
              <label for="color">Seleccionar Trabajo que requiere</label>
              <select id="color" name="color">
                <option value="red">Cableado de RED</option>
                <option value="blue">Correo Corporativo</option>
                <option value="green">Sistema Reflexion</option>
                <option value="red">Cambio roseta p/RED</option>
                <option value="blue">Cambio RJ-45</option>
                <option value="green">Configuracion de VPN</option>
                <option value="red">Conexion INTERNET</option>
              </select>
              <br>
              <button id="add-button" onclick="addSelect()">Agregar seleccionador</button>
            </td>
          </tr>
          <tr>
            <td>Row 2, Cell 1</td>
            <p>Navegador: <span id="navegador"></span></p>
            <script>
              document.getElementById("navegador").innerHTML = navigator.userAgent;

            </script>
            <p>Nombre del equipo: 
              <?php 
              $nombre_equipo = php_uname('n'); 
              echo $nombre_equipo; ?>
            </p>
            <p>Procesador: 
              <?php 
                $procesador = PHP_OS; 
                echo $procesador; ?>
            </p>
            

          </tr>
          <tr>
            <td>Row 1, Cell 1</td>
          </tr>
          <tr>
            <td>Row 2, Cell 1</td>
          </tr>
        </table>
        
      </div>
      <input type="button" value="Imprimir" onclick="printForm()">
    </div>
    
  </body>
</html>
