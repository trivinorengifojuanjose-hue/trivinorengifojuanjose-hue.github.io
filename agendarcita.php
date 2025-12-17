

<!DOCTYPE html>
<html>
<head>
    <title>Agendar cita</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
      <a href="index.php" id="atras-btn">atras</a>
    <div class="container">
        <h2>Agendar cita</h2>
        <img src="logo aplicacion.png" alt="Logo de Modistería" style="width:150px;height:200px;position: fixed;top:20px;left:20px;z-index:9999999">
        <form action="agendar_cita.php" method="post">
            <div class="form-group">
                <label for="Objeto">Objeto:</label>
                <input type="text" class="form-control" id="Objeto" name="Objeto" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
            </div>
        
                <div class="column">
                    <div class="select-box">

                        <select name="nacionalidad" required>
                            <option hidden>Modisteria</option>
                            <option>Modisteria Rengifo</option>
                            <option>Brasil</option>
                            <option>Venezuela</option>
                            <option>Ecuador</option>
                            <option>Peru</option>
                            <option>Chile</option>
                            <option>Argentina</option>
                            <option>Estados Unidos</option>
                        </select>
                    </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha y hora</label>
                <input type="datetime-local" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
            </div>
          
            <button type="submit" class="btn btn-primary">Agendar cita</button>
        </form>
    </div>
    <a href="administracion.php" id="atras-btn">atras</a>
    <style>    #atras-btn {
            position: fixed;
            bottom: 20px;
            right: 50px;
            background-color: coral;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
          }  #atras-btn:hover {
            background-color: #ff8c00;
          }</style>
    
</body>
</html>