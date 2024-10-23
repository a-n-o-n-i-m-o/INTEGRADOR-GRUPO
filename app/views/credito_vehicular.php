<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Solicitud de Crédito Vehicular</title>
    <link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style_credito_vehicular.css">
</head>
<body>
    <header>
        <div class="header-logo">
            <img src="logo.png" alt="Logo">
            <h1>Solicitud de Crédito Vehicular</h1>
        </div>
    </header>
    
    <main class="main-container">
        <section class="form-section">
            <form id="credit-form">
                <h2>Datos Personales</h2>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>
                <div class="form-group">
                    <label for="dni">DNI:</label>
                    <input type="text" id="dni" name="dni" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="sueldo">Sueldo:</label>
                    <input type="number" id="sueldo" name="sueldo" required>
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" required>
                </div>
                
                <h2>Información de Crédito Vehicular</h2>
                <div class="form-group">
                    <label for="marca-modelo">Marca y Modelo:</label>
                    <input type="text" id="marca-modelo" name="marca-modelo" required>
                </div>
                <div class="form-group">
                    <label for="monto-vehiculo">Monto del Vehículo:</label>
                    <input type="number" id="monto-vehiculo" name="monto-vehiculo" required>
                </div>
                <div class="form-group">
                    <label for="cuota-inicial">Cuota Inicial:</label>
                    <input type="number" id="cuota-inicial" name="cuota-inicial" required>
                </div>
                <div class="form-group">
                    <label for="plazo-creditos">Plazo de Créditos (Meses):</label>
                    <input type="number" id="plazo-creditos" name="plazo-creditos" required>
                </div>
                <div class="form-group">
                    <label for="seguro">Seguro:</label>
                    <input type="text" id="seguro" name="seguro" required>
                </div>
                <div class="form-group">
                    <label for="tea">TEA (No se puede modificar):</label>
                    <input type="text" id="tea" name="tea" value="X%" readonly>
                </div>
                <div class="form-group">
                    <label for="plazo-credito">Plazo de Crédito:</label>
                    <input type="text" id="plazo-credito" name="plazo-credito" required>
                </div>

                <button type="submit" class="submit-button">Enviar Solicitud</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Tu Empresa</p>
    </footer>
</body>
</html>
