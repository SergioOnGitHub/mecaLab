<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet" type="text/css"/>

    <title>Document</title>
</head>
<body>
    <div class="logistics">
    <section class="sidebar">
        <div>
            <img src="images/tecLogo.png" alt="Cortadora" height="50" >
        </div>
        <div><a class="sidebar-item">Dashboard</a></div>
        <div><a class="sidebar-item">Registrar Usuarios</a></div>
        <div><a class="sidebar-item">Máquinas</a></div>
    </section>
    <section class="main-content">
        <h1>Dashboard</h1>
        <div class="logistics">
            
            <div class="logistic-display">
                <div class="losgistic-display-item">
                    <p>Máquinas en uso</p>
                    <p>12/16</p>
                </div>
                
                <div class="logistic-display-image">
                    <img src="images/peopleIcon.png" alt="peopleIcon" height="40" >
                </div>
            </div>

            <div class="logistic-display">
                <div class="losgistic-display-item">
                    <p>Máquinas en uso</p>
                    <p>12/16</p>
                </div>
                
                <div class="logistic-display-image">
                    <img src="images/peopleIcon.png" alt="peopleIcon" height="40" >
                </div>
            </div>

            <div class="logistic-display">
                <div class="losgistic-display-item">
                    <p>Máquinas en uso</p>
                    <p>12/16</p>
                </div>
                
                <div class="logistic-display-image">
                    <img src="images/peopleIcon.png" alt="peopleIcon" height="40" >
                </div>
            </div>

            <div class="logistic-display">
                <div class="losgistic-display-item">
                    <p>Máquinas en uso</p>
                    <p>12/16</p>
                </div>
                
                <div class="logistic-display-image">
                    <img src="images/peopleIcon.png" alt="peopleIcon" height="40" >
                </div>
            </div>


        </div>

        <div> 
            <!-- Formulario para agregar máquina -->
    <form action="insertar.php" method="post">
        <label for="nombre">Nombre de la máquina:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="ubicacion">Ubicación:</label>
        <input type="text" id="ubicacion" name="ubicacion" required>
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" required>
        <button type="submit">Agregar Máquina</button>
    </form>
        </div>

        <div class="users">
            <h1>Máquinas Registradas</h1>
            <table class="users-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>ubicacion</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                </thead>

                <tbody>
                    <?php include './mostrar.php'?>
                </tbody>
            </table>
            
        </div>
      </section> 
    </div>
</body>
</html>
