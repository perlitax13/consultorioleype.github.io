<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <style>
        body {
            background: white;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            position: relative;
            padding-bottom:200px ;
        }

        #header {
            background-color: #f2f2f2;
            padding: 10px;
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            height: 100%;
            box-shadow: 0 0 20px rgba(138, 43, 226, 0.5);
            z-index: 1000;
        }

        .nav {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .nav li {
            margin-bottom: 10px;
        }

        .nav li a {
            display: block;
            color: black;
            text-decoration: none;
            padding: 10px;
            border-radius: 15px;
            box-shadow: 0 0 10px blue;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .nav li a:hover {
            background-color: #e6e6e6;
            box-shadow: 0 0 15px rgb(131, 131, 238);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 20px;
            padding-left: 220px; /* to leave space for the sidebar */
            padding-right: 20px;
            box-sizing: border-box;
        }

        .slider-wrapper {
            max-width: 100%;
            margin: 0 auto;
            margin-top: 50px;
        }

        .slider {
            display: flex;
            aspect-ratio: 16 / 9;
            overflow-x: hidden;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            box-shadow: 0 0.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
            border-radius: 1.3rem;
        }

        .slider img {
            flex: 1 0 100%;
            scroll-snap-align: start;
            object-fit: cover;
        }

        .slider-nav {
            display: flex;
            column-gap: 1rem;
            position: absolute;
            bottom: 2.5rem;
            left: 58%;
            transform: translateX(-50%);
            z-index: 1;
            top:50%;
          
        }

        .slider-nav a {
            width: 0.5rem;
            height: 0.5rem;
            border-radius: 50%;
            background-color: #ff2c2c;
            opacity: 0.75;
            transition: opacity ease 250ms;
            margin-top:50px;
            position: relative;
        }

        .slider-nav a:hover {
            opacity: 1;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .bt {
            border: 2px solid black;
            background-color: white;
            color: black;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            margin: 10px;
        }

        .bt:hover {
            border-color: blue;
            color: blue;
        }

        .bt a {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
        }

        .letra {
            border-color: blue;
            color: black;
        }

        .letra:hover {
            background-color: rgb(131, 131, 238);
            color: white;
        }

        .img {
            width: 100%;
            height: auto;
            margin: 0 auto;
            display: block;
            max-width: 750px;
            border-radius: 1.3rem;
            box-shadow: 0 0 30px blue;
        }
        
        .footer {
  position: absolute ;
  bottom: 0;
  left: 50px;
  width: 100%;

  background-color: #f2f2f2;
  padding: 20px;
  box-shadow: 0 0 20px rgba(138, 43, 226, 0.5);
  text-align: center;
  margin-top: 50px; /* ajusta el margen superior */
}


        .footer-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 900px;
            margin: 0 auto;
        }

        .footer .link {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .footer .link a {
            color: black;
            text-decoration: none;
            padding: 10px;
            border-radius: 15px;
            transition: background-color 0.3s ease;
            display: block;
            text-align: center;
            box-shadow: 0 0 10px blue;
            margin: 5px 0;
        }

        .footer .link a:hover {
            background-color: #e6e6e6;
            box-shadow: 0 0 15px rgb(131, 131, 238);
        }
        .io{
            color:red;
        }
       

    </style>
</head>
<body>
    <img src="" alt="">
    <div id="header">
        <ul class="nav">
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros <br>
            <li><a href="importante.php">Importante</a></li><br>
            <li><a href="index.php">Salida</a></li>
        </ul>
    </div>
    <div class="container">
        <img class="img" src="log.jpg" alt="">
        <section class="slider-wrapper">
            <div class="slider">
                <img id="slide-1" src="https://media.istockphoto.com/id/1468409945/es/foto/ni%C3%B1a-en-cl%C3%ADnica-dental.jpg?s=1024x1024&w=is&k=20&c=hZHtpxXjd6OISgJnLHljkG5ZVfgqD4aoM8pAsF5yLBo=" alt="">
                <img id="slide-2" src="https://media.istockphoto.com/id/1403038924/es/foto/feliz-padre-e-hija-mestizos-cepill%C3%A1ndose-los-dientes-juntos-en-un-ba%C3%B1o-de-casa-padre.jpg?s=1024x1024&w=is&k=20&c=XkeMAsfNsn6LnueT0MxPWwl436rmTG6A_LEGLk5jBQs=" alt="">
                <img id="slide-3" src="https://media.istockphoto.com/id/1388931724/es/foto/foto-de-una-mujer-joven-comprobando-sus-resultados-en-el-consultorio-del-dentista.jpg?s=1024x1024&w=is&k=20&c=v8cJ4j3Z-ltsxzd75brBRgKyRCPz0noi2tXN2qiXPoc=" alt="">
                <img id="slide-4" src="https://media.istockphoto.com/id/1536040336/es/foto/medicina-odontolog%C3%ADa.webp?b=1&s=170667a&w=0&k=20&c=QIhpBEHTeh07f2fUE9-2LBhV4HS3kgcznW5hmew_kGY=" alt="">
            </div>
        </section>
        <div class="slider-nav">
            <a href="#slide-1"></a>
            <a href="#slide-2"></a>
            <a href="#slide-3"></a>
            <a href="#slide-4"></a>
        </div>
        <center>
            <h1>Procesamiento de Datos</h1>
            <div class="button-container">
                <button class="bt letra"><a href="crudpac.php">Manejar Datos <br> del Paciente</a></button>
                <button class="bt letra"><a href="crudcon.php">Manejar Datos <br>de la Consulta</a></button>
                <button class="bt letra"><a href="crudci.php">Manejar Datos <br>de la Cita</a></button>
                <button class="bt letra"><a href="crudemp.php">Manejar Datos <br>del Empleado</a></button>
                <button class="bt letra"><a href="crudme.php">Manejar Datos <br> de los Medicamentos</a></button>
             
            </div>
            <div class="button-container">
                <button class="bt letra"><a href="crudvisi.php">Manejar Datos <br>del  Visitador medico</a></button>
                <button class="bt letra"><a href="crudex.php">Manejar Datos <br>del Examen</a></button>
                <button class="bt letra"><a href="cruddoc.php">Manejar Datos <br>del Doctor</a></button>
                <button class="bt letra"><a href="crudseg.php">Manejar Datos<br>del Seguro</a></button>
              <button class="bt letra"><a href="crudrec.php">Manejar Datos <br>de la Receta</a></button>
            </div>
          
            <div class="button-container">
                <button class="bt letra"><a href="una cita.html">Ver una Cita por <br> codigo de un paciente</a></button>
                <button class="bt letra"><a href="todas las citas.php">Ver Todas las Citas de los pacientes</a></button>
                <button class="bt letra"><a href="fechacita.html">Ver un Rango de Citas <br>por Fecha de un paciente</a></button>
                <button class="bt letra"><a href="un paciente.html"> Ver un Paciente por codigo</a></button>
                <button class="bt letra"><a href="por sexo.php">Ver Todos los Pacientes <br> ordenados por sexo</a></button>
            </div>
            <div class="button-container">
                <button class="bt letra"><a href="todas consultas.php">Ver todas las <br> consultas  de los pacientes</a></button>
                <button class="bt letra"><a href="rangoporfecha.html">Ver un rango<br>de consulta por fecha <br> de los pacientes</a></button>
                <button class="bt letra"><a href="rango.html">Ver un rango de<br>consultas<br>por codigo de un paciente</a></button>
                <button class="bt letra"><a href="unarec.html">Ver una receta<br>especifica de un paciente</a></button>
                <button class="bt letra"><a href="todasrecetas.php">Ver Todas las<br>recetas de los pacientes</a></button>
            </div>
        </center>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="link">
            <div class="footer">
        <p>&copy; 2024 LeyPe Todos los derechos reservados.</p>
        <p>Diseñado por Perla Montero #18 y Leisi morillo #21.</p>

    </div>

            </div>
           
        </div>
    </footer>
</body>
</html>



