<!doctype html>
<html lang="en">
    <head>
        <title>Document</title>
        <?php include '../templates/assets.php'; ?>

    </head>
    <body>
        <?php include '../templates/header.php';?>

        <h1 id="letra">EJ:tablas</h1>
        <script src="cancion.js"></script>
        <p>ej: tabla con nombres y fondo</p>
        <div> 
        <table style="color: rgb(231, 27, 200);" "
            border="18"
            bgcolor="lightblue"
            width="60%"
            align="center"
            class="table-bordered"
        >
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Ciudad</th>
            </tr>
            <tr>
                <td>Ana</td>
                <td>20</td>
                <td>Bogotá</td>
            </tr>
            <tr>
                <td>Carlos</td>
                <td>25</td>
                <td>Medellín</td>
            </tr>
        </table>
        </div>
        <p>elementos adicionales</p>
               

        <table  style="color: rgb(14, 118, 237) "
            border="1"
            bgcolor="lightblue"
            width="70%"
            align="center" border="10"
            class="table-bordered"
            >
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Leche</td>
                    <td>2</td>
                    <td>$3.200</td>
                </tr>
                <tr>
                    <td>Pan</td>
                    <td>5</td>
                    <td>$4.000</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan="2">Total</td>
                    <td>$7.200</td>
                </tr>
            </tfoot>
            
        </table>
        <p>atributos</p>
        <tr>
            <th colspan="2">Celda que ocupa dos columnas</th>
        </tr>
        <p>
            no entender aun lo de border="1"y tambien lo de colspan y de rowspan
            que son atributos
        </p>
    </body>
</html>
