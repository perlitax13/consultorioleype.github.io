<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body {
     background: white;                         
    background-attachment: fixed;
    background-size: cover;
    position: relative;
                                    
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f2f2f2;
}

.container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    max-width: px;
}

img {
    max-width: 300px;
    margin-right: 50px;
}

.linea {
    flex-grow: 1;
}

.form-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}



body::before {
    content: "";
    position: absolute;
    top: ; 
    left: 50;
    width: 100%;
    height:%;
    background-color: rgba(0, 0, 0, 0.5); /* Color negro con 50% de opacidad */
    z-index: -1; /* Colocar la capa detrás del contenido */
}

.form-container, .btn {
    position: relative; /* Asegurar que el formulario y el botón estén por encima de la capa transparente */
    z-index: 1; /* Colocar el formulario y el botón por encima de la capa transparente */
}



    button{
        border:  rgb(98, 98, 217) solid 10px;
}

    
 .form-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 30px;
    background-color: #f2f2f2;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(255, 105, 180, 0.5);
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
    font-family: 'Arial', sans-serif;
}

.input {
    width: 100%;
    height: 400%;
    padding: 12px;
    margin-bottom: 15px;
    box-sizing: border-box;
    border: none;
    border-radius: 15px;
    background-color: #fff;
    box-shadow: 0 0 10px  rgb(98, 98, 217);
    font-family: 'Arial', sans-serif;
}

.btn {
    background-color: rgb(98, 98, 217);
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    box-shadow: 0 0 10px rgba(255, 105, 180, 0.5);
}

.btn:hover {
    background-color:black;
    box-shadow: 0 0 15px rgb(98, 98, 217);
}

a {
    color: blue;
    text-decoration: none;
    font-family: 'Arial', sans-serif;
    font-size: 14px;
}

a:hover {
    color: black;
}
</style>
</head>

<body>
    <div></div>
   
    <button>   <div class="linea">
        <form action="controlador.php" method='post'>
            <h2>BIENVENIDO/A</h2>
            <?php
            include("conexion.php");
            include("controlador.php");
            ?>
              <input type="text" class="input" name="usuario" placeholder="Nombre Usuario"><br>
    
            

              <input type="password" name="clave"placeholder="Contraseña"><br>
 
<br><br>

<input  name="ingresar" type="submit" class="btn" value="INICIAR SESION">

         </form>   </button>
  
    </div>
</body>
</html>