<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grupo CloudSpace - Generar Presupuesto PDF</title>

        <link id="dark-scheme-icon" rel="icon" type="image/png" href="https://inner.grupocloudspace.com/images/grupo-cloudspace-favicon-white.png">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    </head>

    <style>
        .container-img{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page-break {
            page-break-after: always;
        }

        table {
				margin-left: auto;
				margin-right: auto;
				border-spacing: 0;
				border-collapse: collapse;
				width: 600px;
			}
			th, td {
				border: 1px solid #333;
				padding: 5px 6px;
				color: #333;
				font-size: 14px;
			}
			thead {
				background-color:#333;
				text-align: left;
			}
			thead th {
				color:#fafafa;
			}
			td.serviceDetails {
				height: 150px;
			}
			tr.center > td {
				text-align: center;
			}
			input {
				color: #333;
				text-align: center;
				padding: 3px 0;
				outline: none;
			}
			th input {
				color: #fff;
				background-color: transparent;
				border: 1px solid #aaa;
				padding: 5px;
				border-radius: 5px;
				width: 50%;
				text-align: left;
			}
			ul {
				padding-inline-start: 20px;
				padding: 10px 0;
			}
			li {
				margin-left: 30px;
				line-height: 1.5;
			}
			table.totals td:last-child:not(:first-child) {
				text-align: right;
			}
			table.totals td {
				border: none;
			}
			.disclaimer {
				text-align: left;
				font-size: 0.6em;
				color: #444;
			}

    </style>    

    <body>

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12" style="margin-top:50px">
                    {{-- @foreach($tasks as $task)
                        <p style="font-size:15px;text-align:center;">
                            {{$task->name}}
                        </p>
                    @endforeach --}}
                    <div>

                        <div class="container-img">
                            <img src="img/header.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                            
                        </div>

                        <div class="container-img">
                            <center>
                            <img src="img/logoGC.jpg" alt="Grupo CloudSpace" style="width:350px;margin-top:55px" />
                            <center>
                        </div>

                        <div class="page-break"></div>

                        <img src="img/header-img1.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        <div class="container-img">
                            <center>
                            <img src="img/logoGC.jpg" alt="Grupo CloudSpace" style="width:350px;margin-top:35px;margin-bottom:55px" />
                            <center>
                        </div>

                        <div style="width:130%;margin-left:-80px">
                            <p style="color:#8f8f8f;font-size:17px">
                                Propuesta Comercial
                            </p>

                            <p style="color:#00b3e3;font-size:36px;margin:0;line-height:normal">
                                Ofrecemos IT moderna como un servicio a través de aplicaciones, datos, seguridad e infraestructura.
                            </p>

                            <table style="width:100%;margin-top:50px">
                                <tr>
                                    <td style="border:none;background-color:#00b3e3;width:20%">

                                    </td>
                                    <td style="border:none;width:40%">
                                        <p style="margin-left:15px">Preparado para:</p>
                                    </td>
                                    <td style="border:none;background-color:#00b3e3;width:60%">
                                        <p style="color:white;margin-left:40px">Preparado por:</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:none;background-color:#00b3e3;width:20%">
                                        
                                    </td>
                                    <td style="border:none;width:40%">
                                        <p style="margin-left:15px">{{$presupuesto->name}}</p>
                                    </td>
                                    <td style="border:none;background-color:#00b3e3;width:60%">
                                        <p style="color:white;margin-left:40px">{{$presupuesto->nameCreador}}</p>
                                    </td>
                                </tr>
                            </table>
                            
                            <p style="font-size:15px;text-align:center;font-weight:bold;margin-top:140px;margin-bottom:140px">                    
                                Propuesta enviada el {{ date("d/m/Y", strtotime($presupuesto->fecha_emision)) }} <span style="font-style: italic">(válido hasta el {{date("d/m/Y", strtotime($presupuesto->valido_hasta))}})</span>
                            </p>

                            <p style="color:#8f8f8f;font-size:10px;text-align:left;">                    
                            AVISO DE CONFIDENCIALIDAD: El contenido de esta Propuesta es información confidencial y de propiedad exclusiva de Rackspace. Su aceptación de esta Propuesta y la revisión de su contenido constituye su reconocimiento de que los contenidos son información confidencial y de propiedad exclusiva de Rackspace y su acuerdo
                            de no divulgar la misma información a cualquier persona que no sea una persona de su organización que tenga la necesidad de conocer para evaluar una Posible
                            relación comercial con Rackspace para servicios gestionados de hosting.
                            </p>                            
                        </div>

                        <div class="page-break"></div>

                        @for ($i = 1; $i <= $presupuesto->ContentCant; $i++)
                            
                            @switch($i)

                                @case(1)                                    
                                    <img src="img/header-img2.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido1!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break
                                @case(2)                                    
                                    <img src="img/header-img3.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido2!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(3)                                    
                                    <img src="img/header-img4.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido3!!}
            
                                    </div> 
                                    <div class="page-break"></div>
                                    @break 
                                
                                @case(4)                                    
                                    <img src="img/header-img5.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido4!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(5)                                    
                                    <img src="img/header-img6.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido5!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(6)                                    
                                    <img src="img/header-img7.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido6!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(7)                                    
                                    <img src="img/header-img8.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido7!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(8)                                    
                                    <img src="img/header-img9.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido8!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(9)                                    
                                    <img src="img/header-img10.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido9!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break
                                @break

                                @case(10)                                    
                                    <img src="img/header-img11.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido10!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(11)                                    
                                    <img src="img/header-img12.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido11!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(12)                                    
                                    <img src="img/header-img13.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido12!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(13)                                    
                                    <img src="img/header-img14.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido13!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(14)                                    
                                    <img src="img/header-img15.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido14!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(15)                                    
                                    <img src="img/header-img16.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido15!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(16)                                    
                                    <img src="img/header-img17.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido16!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(17)                                    
                                    <img src="img/header-img18.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido17!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(18)                                    
                                    <img src="img/header-img19.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido18!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break
                                
                                @case(19)                                    
                                    <img src="img/header-img20.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido19!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break

                                @case(20)                                    
                                    <img src="img/header-img21.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />
                                    <div style="width:130%;margin-left:-80px">                         

                                        {!!$presupuesto->contenido20!!}
            
                                    </div>
                                    <div class="page-break"></div>
                                    @break
                                    
                            @endswitch

                        @endfor

                        {{-- <img src="img/header-img2.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        

                        <div class="page-break"></div>

                        <img src="img/header-img3.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        <div style="width:130%;margin-left:-80px">                           

                            {!!$presupuesto->contenido2!!}
                            
                        </div>

                        <div class="page-break"></div>

                        <img src="img/header-img4.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        <div style="width:130%;margin-left:-80px">                           

                            {!!$presupuesto->contenido3!!}
                            
                        </div>

                        <div class="page-break"></div>

                        <img src="img/header-img5.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        <div style="width:130%;margin-left:-80px">                           

                            {!!$presupuesto->contenido4!!}
                            
                        </div> --}}

                        {{-- <div class="page-break"></div> --}}

                        <img src="img/img-footer.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        <div class="container-img">
                            <center>
                            <img src="img/logoGC.jpg" alt="Grupo CloudSpace" style="width:350px;margin-top:55px" />
                            <center>
                        </div>

                        <p style="font-size:17px;text-align:center;margin-top:25px;margin-bottom:20px">                    
                            Av. del Libertador 2442, piso 4 Olivos, Buenos Aires 1636 • Argentina
                            <br>
                            +54 11 3220 1449
                        </p>
                        <p style=""> 
                        <p style="color:#8f8f8f;font-size:12px;text-align:center;margin-top:25px;margin-bottom:20px">                    
                            Cloudspace SRL.
                            <br>
                            Socio estratégico de negocios, Rackspace Inc.
                        </p>

                        <p style="text-align:center;margin-top:70px;">
                            <table style="width:100px;border:none" align="center">
                                <tr>                                
                                    <td style="border:none"><img src="img/f.png" alt="cloudspacesrl" style="" /></td>
                                    <td style="border:none"><span style="font-size:12px;margin-top:-15px">cloudspacesrl</span></td>
                                </tr>
                                <tr>                                
                                    <td style="border:none"><img src="img/instagram.png" alt="cloudspacesrl" style="" /></td>
                                    <td style="border:none"><span style="font-size:12px;margin-top:-15px">cloudspacesrl</span></td>
                                </tr>
                                <tr>                                
                                    <td style="border:none"><img src="img/linke.png" alt="cloudspacesrl" style="" /></td>
                                    <td style="border:none"><span style="font-size:12px;margin-top:-15px">cloudspacesrl</span></td>
                                </tr>
                                <tr>                                
                                    <td style="border:none"><img src="img/web.png" alt="cloudspacesrl" style="" /></td>
                                    <td style="border:none"><span style="font-size:12px;margin-top:-15px">cloudspace.com.ar</span></td>
                                </tr>  
                                <tr>                                
                                    <td style="border:none"><img src="img/mail.png" alt="cloudspacesrl" style="" /></td>
                                    <td style="border:none"><span style="font-size:12px;margin-top:-15px">info@cloudspace.com.ar</span></td>
                                </tr>                                  
                            </table> 

                        </p>

                        

                    </div>

                </div>

                <!-- <div class="col">
                
                </div> -->
                
            </div>
        </div>

        <script src="https://kit.fontawesome.com/f21afe3c83.js" crossorigin="anonymous"></script>
        
        <script type="text/php">
            if ( isset($pdf) ) {
                $pdf->page_script('
                    $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                    $pdf->text(550, 800, "$PAGE_NUM", $font, 10);
                ');
            }
        </script>
        
    </body>

</html>