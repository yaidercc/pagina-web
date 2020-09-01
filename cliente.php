<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" type="png" href="img/icon.png" />
    <title>Inicio </title>
</head>
<body>
    <!--contenedor de la pagina-->
    <div class="contenedor">
        <!--cabecera de pagina-->
        <header class="header">
            <div class="contenedor-logo">
                <h1>calzados cris</h1>
            </div>
            <div class="navegacion">
                <a href="#" class="nombre"><i title="notificaciones" class="fas fa-user"> </i>yaider</a>
            </div>
            <div class="salir">
                <a href="#" class="cerrar" id="abrir">salir</a>
            </div>
        </header>

        <!--filtros-->
        <div class="filtros">
            <div class="nav">
                <a href="#">mujer <i class="fas fa-female"></i></a>
                <a href="#">hombre  <i class="fas fa-male"></i></a>
                <a href="#">mas comprados <i class="fas fa-cart-plus"></i></a>
                <a href="#">mas baratos <i class="fas fa-coins"></i></a>
            </div>
        </div>

        <!--contenido principal-->
        <main class="principal">
            <div class="cabeza-main">
                <h1 class="calzado">calzados para hombre y para mujer</h1>
                <a href="#" id="carrito" class="cart nn">
                    <span class="num_notifs">0</span>
                    <i class="fas fa-shopping-cart"></i>

                </a>
            </div>
           
            <!--contenedor productos-->
            <div class="container">
                <!--productos-->
                <div class="producto">
                    <img class="imagen" src="img/plataformas.jpg" height="100%" width="100%">
                    <div class="precio">
                        <h1>tenis nike</h1>
                        <p>para: hombre</p>
                        <h2>$ 350.000</h2>
                        <p><i class="fas fa-cart-plus"></i> 4</p>
                    </div>
                    <div class="botones">
                        <a href="#" class="car"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="sol v2">SOLICITAR</a>
                    </div>
                    
                </div>

                <div class="producto">
                    <img class="imagen" src="img/plataformas.jpg" height="100%" width="100%">
                    <div class="precio">
                        <h1>plataformas negras</h1>
                        <p>para: mujer</p>
                        <h2>$ 80.900</h2>
                        
                        <p><i class="fas fa-cart-plus"></i> 8</p>
                    </div>
                    <div class="botones">
                        <a href="#" class="car"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="sol v2">SOLICITAR</a>
                    </div>
                </div>
                <div class="producto">
                    <img class="imagen" src="img/adidas.jpg" height="100%" width="100%">
                    <div class="precio">
                        <h1>tenis adidas</h1>
                        <p>para: hombre</p>
                        <h2>$ 240.000</h2>
                        <p><i class="fas fa-cart-plus"></i> 8</p>
                    </div>
                    <div class="botones">
                        <a href="#" class="car" ><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="sol v2">SOLICITAR</a>
                    </div>
                </div>

                <div class="producto">
                    <img class="imagen" src="img/zapatos.png" height="100%" width="100%">
                    <div class="precio">
                        <h1>plataforms negras</h1>
                        <p>para: mujer</p>
                        <h2>$ 95.000</h2>
                        <p><i class="fas fa-cart-plus"></i> 8</p>
                    </div>
                    <div class="botones">
                        <a href="#" class="car" ><i class="fas fa-shopping-cart"></i></a>
                        <a href="vista_producto.php" class="sol v2">SOLICITAR</a>
                    </div>
                </div>
            </div>
            
        </main>
        
        <!--carrito-->
        <div class="overlay" id="carro">
            <div class="popup carro" id="productos">
                <a href="#" id="btn-cerrar-popup1" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <h1>carrito</h1>
                    <scroll-container> 
                        <form action="">
                            <scroll-page>
                                <div class="pendientes">
                                    <input type="hidden" name="idsc" value="<?php echo $mostrar['ID_COMPRA'] ?>">
                                    <p class="desc"><strong>NOMBRE COMPRADOR:</p>
                                    <p class="desc"><strong>NOMBRE PRODUCTO: </p>
                              
                                    <input type="submit" class="btn-submit" value="entregado"> 
                                </div>
                            </scroll-page>
                            <form action="">
                            <scroll-page>
                                <div class="pendientes">
                                    <input type="hidden" name="idsc" value="<?php echo $mostrar['ID_COMPRA'] ?>">
                                    <p class="desc"><strong>NOMBRE PRODUCTO: </p>
                                    <p class="desc"><strong>DIRECCION:</p>                            
                                    <input type="submit" class="btn-submit" value="entregado"> 
                                </div>
                            </scroll-page>
                            </form>
                    </scroll-container> 
                    
                    <input class="btn-submit" id="sks" type="submit" value="Vaciar">
            </div>
        </div>

       



        <!--pie de pagina-->
        <footer class="pie">
            <div class="redes">
                <a href="#" class="red" ><i class="fab fa-whatsapp-square"></i><span>3148582774</span></a>
                <a href="#" class="red"><i class="fab fa-facebook-square"></i><span>yaidercc.1</span></a>
                <a href="#" class="red"><i class="fab fa-instagram-square"></i><span>@yaidercc</span></a>
            </div>
        </footer>
    </div>

    <!--archivos y links-->
    <script src='main.js'></script> 
    <script src="https://kit.fontawesome.com/2efdabf6ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
</body>
</html>