<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="Js/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="Css/reporte.css">
    <title>Reportes</title>
</head>

<body>
    <main id="pdf">
        <!-- Primer cuerpo || Encabezado -->
        <div class="encabezado_arriba borde contenedor">
            <div class="encabezado_titulo colorFondo flex">
                <div class="acta borde">
                    <p>ACTA</p>
                </div>
                <div class="tipoMovi borde">
                    <p>Tipo de Movimiento</p>
                </div>
            </div>
            <div class="encabezado-info  flex ">
                <div class="acta borde">#</div>
                <div class="tipoMovi borde"><strong>RETORNA DE PRESTAMO A LA OFICINA</strong> </div>
            </div>
            <div class="info_reporte colorFondo flex">
                <div class="sub_info borde">
                    <p> Ubicacion, Fecha, Hora y Destino del Movimiento</p>
                </div>
            </div>
        </div>

        <div class="encabezado_abajo contenedor borde flex">
            <div class="fecha_entrega borde ">
                <p class="separacion">Fecha Hora Entrega/Salida: </p>
            </div>
            <div class="fecha_recibido borde">
                <p class="separacion">Feccha Hora Recibido/Devolucion: </p>
            </div>
        </div>

        <!-- Segundo cuerpo || Informacion -->
        <div class="info_funcionario contenedor flex borde">
            <div class="func borde separacion">
                <p>Funcionario que Autoriza:</p>
            </div>

            <div class="func_name borde">
                <p><Strong> </Strong></p>
            </div>

            <div class="func_num borde">
                <p>C.C: </p>
            </div>

            <div class="func_entrega borde">
                <p>Funcionario que Entrega:</p>
            </div>

            <div class="func_name borde">
                <p> </p>
            </div>

            <div class="func_num borde">
                <p>C.C: </p>
            </div>
            
        </div>

        <div class="info_funcionario contenedor flex borde">
            <div class="func_recibe separacion borde">
                <p>Funcionario que Recibe: </p>
            </div>

            <div class="func_recibe_nombre borde">
                <p> </p>
            </div>

            <div class="document borde">
                <p>Documento</p>
            </div>

            <div class="func_num borde">
                <p>C.C: </p>
            </div>
        </div>

        <div class="info_funcionario contenedor flex borde">
            <div class="oficina separacion borde">
                <p>Oficina Destino/Origen: </p>
            </div>
            <div class="campo borde">
                <p> </p>
            </div>
            <div class="ubicacion borde">
                <p>Ubicacion: </p>
            </div>
            <div class="campo borde">
                <p> </p>
            </div>
        </div>

        <div class="info_funcionario contenedor flex borde">
            <div class="Ingreso separacion borde">
                <p>Motivo Ingreso/salida: </p>
            </div>
            <div class="campo borde">
                <p> </p>
            </div>
            <div class="jefaArea borde">
                <p><strong>Jefa de Area:</strong>  </p>
            </div>
        </div>

        <!-- Tercer cuerpo || Detalle de equipo -->
        <div class="titulo colorFondo contenedor borde">
            <p>Detalle de los Equipos</p>
        </div>

        <div class="contenedor borde flex">
            <div class="first separacion borde">  
                <p>Num</p>
            </div>
            <div class="Detalle-producto borde">
                <p>Descripcion</p>
            </div>
            <div class="Detalle-producto  borde">
                <p>Seria</p>
            </div>
            <div class="Detalle-producto borde">
                <p>Modelo</p>
            </div>
            <div class="Detalle-producto borde">
                <p>Obeservacion</p>
            </div>
        </div>

        <div class="contenedor borde flex">
            <div class="first separacion borde">  
                <p> </p>
            </div>
            <div class="Detalle-producto borde">
                <p> </p>
            </div>
            <div class="Detalle-producto  borde">
                <p> </p>
            </div>
            <div class="Detalle-producto borde">
                <p> </p>
            </div>
            <div class="Detalle-producto borde">
                <p> </p>
            </div>
        </div>

        <div class="contenedor borde flex">
            <div class="first separacion borde">  
                <p> </p>
            </div>
            <div class="Detalle-producto borde">
                <p> </p>
            </div>
            <div class="Detalle-producto  borde">
                <p> </p>
            </div>
            <div class="Detalle-producto borde">
                <p> </p>
            </div>
            <div class="Detalle-producto borde">
                <p> </p>
            </div>
        </div>

        <div class="contenedor borde flex">
            <div class="first separacion borde">  
                <p> </p>
            </div>
            <div class="Detalle-producto borde">
                <p> </p>
            </div>
            <div class="Detalle-producto  borde">
                <p> </p>
            </div>
            <div class="Detalle-producto borde">
                <p> </p>
            </div>
            <div class="Detalle-producto borde">
                <p> </p>
            </div>
        </div>

        <div class="marcado flex borde">
            <div class="parrafo borde">
                <p>Marque con X si adjunta evidencia fotografica de los equipos dad de baja</p>
            </div>
            <div class="marcacion borde"><p>si</p></div>
            <div class="marcacion borde"><p>no</p></div>
        </div>

        <!-- Cuarto cuerpo || Inventario -->
        <div class="titulo colorFondo contenedor borde">
            <p>Inventario de Recibido para Revision de Equipos</p>
        </div>

        <div class="contenedor borde flex">
            <div class="F-funcionario borde"></div>
            <div class="F-funcionario borde"></div>
            <div class="F-funcionario borde"></div>
        </div>

        <div class="firmas contenedor">
            <p>Observaciones Relacionadas</p>
            <p>Firma del jefe de área</p>
        </div>
    </main>

    <button id="btnCrearPdf">Click aquí</button>
    <script src="Js/jquery-1.12.0.min.js"></script>
    <script src="Js/main.js"></script>
</body>

</html>