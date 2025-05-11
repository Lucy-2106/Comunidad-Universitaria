<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Portal de Acceso</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      text-align: center;
      padding: 50px;
    }
    h1 {
      color: #333;
    }
    .menu {
      display: flex;
      flex-direction: column;
      gap: 20px;
      max-width: 300px;
      margin: auto;
    }
    a {
      display: block;
      padding: 15px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }
    a:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <h1>Bienvenido al Portal</h1>
  <div class="menu">
    <a href="comunidad.php">Gestión de Comunidad</a>
    <a href="empleado.php">Gestión de Empleados</a>
    <a href="estudiante.php">Gestión de Estudiantes</a>
  </div>

</body>
</html>
