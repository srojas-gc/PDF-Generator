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
                                Ofrecemos IT moderna como un servicio a trav??s de aplicaciones, datos, seguridad e infraestructura.
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
                                        <p style="color:white;margin-left:40px">{{$presupuesto->user->name}}</p>
                                    </td>
                                </tr>
                            </table>
                            
                            <p style="font-size:15px;text-align:center;font-weight:bold;margin-top:140px;margin-bottom:140px">                    
                                Propuesta enviada el 31/05/2021 <span style="font-style: italic">(v??lido hasta el 31/12/2021)</span>
                            </p>

                            <p style="color:#8f8f8f;font-size:10px;text-align:left;">                    
                            AVISO DE CONFIDENCIALIDAD: El contenido de esta Propuesta es informaci??n confidencial y de propiedad exclusiva de Rackspace. Su aceptaci??n de esta Propuesta y la revisi??n de su contenido constituye su reconocimiento de que los contenidos son informaci??n confidencial y de propiedad exclusiva de Rackspace y su acuerdo
                            de no divulgar la misma informaci??n a cualquier persona que no sea una persona de su organizaci??n que tenga la necesidad de conocer para evaluar una Posible
                            relaci??n comercial con Rackspace para servicios gestionados de hosting.
                            </p>                            
                        </div>

                        <div class="page-break"></div>

                        <img src="img/header-img2.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        <div style="width:130%;margin-left:-80px">                           

                            <p style="color:#00b3e3;font-size:30px;margin-top:10px;margin-bottom:0px">
                                Acerca de Rackspace
                            </p>
                            
                            <p style="font-size:12px;text-align:left;">                    
                                Rackspace es el socio elegido en un mundo de TI en constante cambio que ofrece experiencia certificada y servicios gestionados
                                integrados a trav??s de nubes p??blicas y privadas, hosting administrado y aplicaciones empresariales. Debido a que Rackspace se
                                asocia con los proveedores de tecnolog??a l??deres, inclu??dos Alibaba??, AWS, Google ???, Microsoft??, OpenStack??, Oracle?? SAP??,
                                VMware?? y Pivotal??, est?? en una posici??n ??nica para brindar asesoramiento imparcial sobre las tecnolog??as que mejor servir??n
                                las necesidades espec??ficas de cada cliente.
                            </p>

                            <p style="color:#00b3e3;font-size:20px;margin-top:-5px;margin-bottom:0px">
                                Expertos dedicados a su ??xito
                            </p>
                            
                            <p style="font-size:11px;text-align:left;">                    
                                Rackspace tiene la experiencia para respaldar sus cargas de trabajo a escala en todas las nubes p??blicas y privadas
                                l??deres, ya sean de AWS, Microsoft, OpenStack, VMware, Google o Alibaba.<br>
                                ??? Un l??der en alojamiento administrado en servidores dedicados, impulsando una r??pida innovaci??n en el ??rea de
                                contenedores y servidores de f??cil acceso que se pueden implementar instant??neamente y accesibles mediante API.<br>
                                ??? Alojar m??s de los 1.000 sitios de comercio electr??nico m??s importantes del mundo que cualquier otro proveedor de la nube.<br>
                                ??? Emplear equipos de expertos que se especializan en la gesti??n de infraestructura de nube, seguridad, plataformas
                                web y de comercio, bases de datos, contenedores, correo electr??nico y aplicaciones de colaboraci??n, recuperaci??n
                                de desastres y transformaci??n de TI.<br>
                                ??? Adherirse a una amplia gama de certificaciones y est??ndares de informaci??n y seguridad, incluida la norma ISO
                                27001; ISO 27002; PCI DSS; SSAE 16 SOC 1, SOC 2 y SOC 3; FedRAMP; FISMA; NIST 800-171 y DFARS.<br>
                                ??? Rackspace cofund?? OpenStack y es el operador l??der de las nubes p??blicas y privadas de OpenStack, superando un
                                hito sin precedentes de mil millones de horas de servidor administradas.<br>
                                ??? Servir a clientes de alto perfil del sector p??blico, incluidos clientes gubernamentales.
                            </p>

                            <p style="color:#00b3e3;font-size:20px;margin-top:-5px;margin-bottom:0px">
                                Servicios entregados a tu manera
                            </p>
                            
                            <p style="font-size:11px;text-align:left;">                    
                                Desde el dise??o de la nube y el desarrollo de c??digo hasta la asistencia de lanzamiento y la seguridad continua, Rackspace lo
                                ayuda a aprovechar al m??ximo sus inversiones en tecnolog??a.<br>
                                ??? SLA l??deres en la industria: descanse con una garant??a del 100% de tiempo de funcionamiento de la red y un 100% adicional de
                                la garant??a del tiempo de funcionamiento de la plataforma de producci??n (cuando compra servicios de aplicaci??n de Rackspace:
                                operaciones de la aplicaci??n)<br>
                                ??? Asesores de arquitectura: Rackspace ayuda a planificar, dise??ar y dise??ar su nube para su carga de trabajo<br>
                                ??? Asistencia de lanzamiento: Rackspace hace que su entorno funcione y funcione sin problemas y r??pidamente<br>
                                ??? Gu??a de seguridad: los expertos de Rackspace ayudan a identificar vulnerabilidades y permiten implementaciones m??s seguras<br>
                                ??? Asistencia de desarrollo de c??digo: Rackspace ayuda a garantizar que su c??digo aproveche nuestras interfaces al m??ximo.
                            </p>

                            <p style="color:#00b3e3;font-size:20px;margin-top:-5px;margin-bottom:0px">
                                Sobre Rackspace
                            </p>
                            
                            <p style="font-size:11px;text-align:left;">                    
                                Rackspace es su socio de confianza en todas las aplicaciones, datos, seguridad e infraestructura.<br>
                                ??? Un l??der en el Cuadrante M??gico de Gartner 2018 para Proveedores de Servicios Gestionados de Infraestructura de Nube
                                P??blica, en todo el mundo;<br>
                                ??? M??s de 3,000 expertos en la nube;<br>
                                ??? Proveedor de alojamiento para m??s de la mitad de los Fortune 100;<br>
                                ??? M??s de 20 a??os de experiencia en hosting;<br>
                                ??? Clientes en m??s de 150 pa??ses;<br>
                                ??? Centros de datos en los cinco continentes;<br>
                                ??? El proveedor de alojamiento n??mero uno para los 1.000 sitios web de comercio electr??nico de minoristas de Internet;<br>
                                ??? # 1 en implementaciones alojadas de Microsoft SharePoint??<br>
                                ??? N?? 1 en hospedar las nubes privadas de OpenStack??, con m??s de 350 implementaciones en producci??n y m??s de mil millones de
                                horas de servidor administradas<br>
                                ??? El l??der en soluciones de nube h??brida, creando soluciones especializadas de mejor ajuste.<br>
                                ??? Fundador, junto con la NASA, de OpenStack y operador de la nube p??blica m??s grande de OpenStack
                            </p>        

                        </div>

                        <div class="page-break"></div>

                        <img src="img/header-img3.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        <div style="width:130%;margin-left:-80px">                           

                            <p style="color:#00b3e3;font-size:19px;margin-top:10px;margin-bottom:0px">
                                Fanatical Experience ???
                            </p>
                            
                            <p style="font-size:11px;text-align:left;">                    
                                Expertos de su lado, haciendo lo que sea necesario para hacer bien el trabajo. Desde la primera consulta hasta las operaciones
                                diarias, Rackspace combina la potencia del servicio siempre activo con las mejores herramientas y la automatizaci??n de su clase
                                para ofrecer tecnolog??a cuando y como la necesite.
                            </p>

                            <p style="color:#00b3e3;font-size:19px;margin-top:-5px;margin-bottom:0px">
                                Elecci??n entre las tecnolog??as l??deres del mundo
                            </p>
                            
                            <p style="font-size:10px;text-align:left;">                    
                                Rackspace ofrece una opci??n entre las principales tecnolog??as y plataformas en la nube del mundo.<br>
                                ??? Nube privada: VMware, Microsoft, OpenStack<br>
                                ??? Nube p??blica: AWS, Microsoft Azure, Google Cloud Platform, Alibaba Cloud, OpenStack<br>
                                ??? Alojamiento dedicado: servidores de implementaci??n r??pida, servidores personalizables, servidores OnMetal accesibles a API<br>
                                ??? Administraci??n de contenido web y comercio electr??nico: Oracle Commerce, SAP Hybris, Sitecore Experience Platform y
                                Sitecore Experience Commerce,<br>
                                Adobe Experience Manager, Magento, WordPress y Drupal<br>
                                ??? Planificaci??n de recursos empresariales: SAP, Oracle, PeopleSoft ???, Oracle EBusiness Suite, Oracle Fusion Middleware ???<br>
                                ??? Inteligencia empresarial: Oracle, SAP, Microsoft, Tableau??, Informatica??<br>
                                ??? Alojamiento de correo electr??nico: Office 365, Google Apps for Work, Microsoft Exchange, correo electr??nico de Rackspace<br>
                                ??? Colaboraci??n y productividad: Office 365, Google Apps for Work, Microsoft SharePoint, Skype para empresas<br>
                                ??? Aplicaciones web y m??viles: SaaS & Mobile App Hosting, Hybrid Cloud, DevOps<br>
                                ??? <b>Database Services</b><br>
                                - Relacionado administrado: Microsoft SQL Server, MySQL, Oracle, PostgreSQL<br>
                                - Gestionado NoSQL: MongoDB, Redis, Cassandra<br>
                                - Big Data gestionado: Hadoop??, Elasticsearch<br>
                                ??? Seguridad administrada y asistencia de cumplimiento: Incapsula, Sophos, Alert Logic, Imperva, Vormetric, Duo<br>
                                ??? Stacks de tecnolog??a: OpenStack, AWS, Microsoft, VMware, Red Hat??<br>
                                ??? Plataformas: nube p??blica, nube privada, nube h??brida, servidores dedicados
                            </p>

                            <p style="color:#00b3e3;font-size:19px;margin-top:-5px;margin-bottom:0px">
                                Certificaciones de los empleados
                            </p>
                            
                            <p style="font-size:10px;text-align:left;">                    
                                ??? M??s de 165 certificaciones de Cisco, incluidas 122 CCNA y 44 CCNP<br>
                                ??? M??s de 2,500 certificaciones de Microsoft, incluidos MCITP, MCSA, MCSE y MCTS<br>
                                ??? M??s de 160 certificaciones RedHat, incluidas RHCE, RHCSA y RHCA<br>
                                ??? M??s de 145 certificaciones de VMware, incluidos 83+ VCP, VCAP y vExperts<br>
                                ??? M??s de 1,000 certificaciones t??cnicas de AWS, incluyendo 70+ Certificaciones profesionales y 15 + Maestros de AWS<br>
                                ??? 2,275+ Acreditaciones AWS<br>
                                ??? 65 AWS Solutions Architect y DevOps Professional Certifications<br>
                                ??? M??s de 200 certificaciones de Google Cloud Platform
                            </p>

                            <p style="color:#00b3e3;font-size:19px;margin-top:-5px;margin-bottom:0px">
                                Relaciones
                            </p>
                            
                            <p style="font-size:10px;text-align:left;">                    
                                ??? Socio de hosting del a??o de Microsoft en cinco ocasiones<br>
                                ??? Socio de primer nivel en la red VMware vCloud?? Air ???<br>
                                ??? VMware?? Hybrid Cloud Powered<br>
                                ??? Red Hat Premier Hosting Partner<br>
                                ??? MySQL Certified Hosting Partner<br>
                                ??? Microsoft Gold Certified<br>
                                ??? Sitecore Global Platinum Technology Partner<br>
                                ??? Estatus de socio consultor Premier en la red de socios de AWS (APN)<br>
                                ??? Designaci??n de socio de servicios gestionados auditados de AWS<br>
                                ??? Socio de la competencia DevOps de AWS<br>
                                ??? Socio de Competencia de Marketing y Comercio de AWS<br>
                                ??? Distribuidor autorizado de AWSAWS Public Sector Partner<br>
                                ??? Primer socio de servicios gestionados Premier para Google Cloud Platform<br>
                                ??? Primer socio certificado en Google de Ingenier??a de Confiabilidad del Cliente (CRE)
                            </p>
                        </div>

                        <div class="page-break"></div>

                        <img src="img/header-img4.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        <div style="width:130%;margin-left:-80px">                           

                            <p style="color:#00b3e3;font-size:36px;margin-top:25px;line-height:normal">
                                Proteja a su empresa de las amenazas
                                cibern??ticas avanzadas
                            </p>

                            <p style="color:#00b3e3;font-size:19px;margin-top:-5px;margin-bottom:0px">
                                Servicios de seguridad gestionados de Rackspace
                            </p>

                            <p style="font-size:11px;text-align:left;">                    
                                Nuestros profesionales experimentados, que utilizan tecnolog??a l??der en la industria, pueden ayudarlo a proteger eficazmente su
                                empresa contra amenazas, monitorear y administrar su infraestructura y cumplir con los mandatos de cumplimiento y riesgos de
                                TI. Desde servicios totalmente administrados hasta soluciones y herramientas de inicio r??pido, nuestras ofertas personalizadas
                                le permiten encontrar la soluci??n adecuada para su negocio en nubes p??blicas, privadas e h??bridas, al mismo tiempo que complementa
                                su experiencia, recursos y personal.
                            </p>

                            <p style="color:#00b3e3;font-size:19px;margin-top:-5px;margin-bottom:0px">
                                Servicios de seguridad gestionados
                            </p>
                            
                            <p style="font-size:11px;text-align:left;">                    
                                Nuestros servicios administrados toman la carga de encontrar, capacitar y mantener a un personal totalmente administrado y
                                CSOC fuera de sus hombros. Aprovechamos las mejores pr??cticas, d??cadas de experiencia en seguridad y detecci??n y respuesta
                                las 24 horas para asegurar su negocio y ayudarlo a mantener el cumplimiento. Nuestros servicios gestionados incluyen:<br>
                                ??? Detecci??n y respuesta proactiva: obtenga una protecci??n de red y host 24x7x365 respaldada por un equipo de expertos en
                                seguridad que pueden detectar r??pidamente eventos de seguridad y responder proactivamente para cerrarlos;<br>
                                ??? Asistencia de Cumplimiento: Acodada sobre la Detecci??n y Respuesta Proactiva de RMS, la Asistencia de Cumplimiento lo ayuda
                                a cumplir sus requisitos de cumplimiento de seguridad de la informaci??n a medida que se desarrolla su viaje ??nico a la nube;<br>
                                ??? Privacidad y protecci??n de datos: limite el acceso a datos confidenciales en su entorno para respaldar su programa de seguridad
                                general y satisfacer o eliminar la necesidad de controles de muchos reg??menes de cumplimiento, incluidos PCI DSS y HIPAA.
                            </p>

                            <p style="color:#00b3e3;font-size:19px;margin-top:-5px;margin-bottom:0px">
                                Soluciones de inicio r??pido
                            </p>
                            
                            <p style="font-size:11px;text-align:left;">                    
                                Nuestras soluciones de inicio r??pido est??n dise??adas para satisfacer necesidades de seguridad espec??ficas relacionadas con las
                                aplicaciones, las redes y el cumplimiento. Hemos eliminado el trabajo de averiguar qu?? tecnolog??as se necesitan y c??mo implementarlas
                                para problemas de seguridad comunes, lo que hace que sea r??pido y f??cil para usted comenzar a proteger su negocio. Nuestras
                                soluciones de inicio r??pido incluyen:<br>
                                ??? Inicio r??pido para la seguridad de la aplicaci??n: dise??ado para mantener sus aplicaciones web y su infraestructura de
                                aplicaciones cr??ticas a salvo de los ataques que los dispositivos de capa de red tradicionales no pueden bloquear o detectar;<br>
                                ??? Inicio r??pido para la protecci??n de la red: ayuda a proteger su pila de infraestructura completa (red, aplicaci??n, SO, DB) de
                                intrusiones maliciosas y acceso no autorizado al sistema;<br>
                                ??? Inicio r??pido para el cumplimiento: aumenta la visibilidad y lo ayuda a verificar los requisitos de diferentes reg??menes y
                                est??ndares de cumplimiento, incluidos PCI DSS, HITRUST y GDPR.
                            </p>

                            <p style="color:#00b3e3;font-size:19px;margin-top:-5px;margin-bottom:0px">
                                Herramientas gestionadas
                            </p>
                            
                            <p style="font-size:11px;text-align:left;">                    
                                Nuestras ofertas de herramientas administradas brindan la tecnolog??a necesaria para complementar su postura de seguridad
                                existente. Le ayudamos a acelerar la adopci??n de su tecnolog??a sin la carga de las adquisiciones, la incorporaci??n y el mantenimiento continuo a la vez que cumple con sus directivas comerciales y de cumplimiento. Nuestras herramientas gestionadas
                                incluyen:<br>
                                ??? Firewalls de aplicaciones web<br>
                                ??? Detecci??n de intrusi??n<br>
                                ??? Gesti??n de registro<br>
                                ??? Cifrado de datos y gesti??n de claves<br>
                                ??? Autenticaci??n multifactor<br>
                                ??? Exploraci??n de vulnerabilidades<br>
                                ??? Mitigaci??n DDoS
                            </p>        

                            <p style="color:#8f8f8f;font-size:10px;text-align:left;">                    
                                Para obtener m??s informaci??n, hable con el representante de su propuesta de ventas o visite https://www.rackspace.com/managed-securityservices
                            </p>
                        </div>

                        <div class="page-break"></div>

                        <img src="img/header-img5.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        <div style="width:130%;margin-left:-80px">                           

                            <p style="color:#00b3e3;font-size:36px;margin-top:25px;line-height:normal">
                                Solution overview
                            </p>

                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="5" style="font-weight:normal"><p>Nombre del servicio</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th rowspan="2"><p style="text-align:center">Cantidad</p></th>
                                        <th colspan="2"><p style="text-align:center">Costo por unidad</p></th>
                                        <th colspan="2"><p style="text-align:center">Totales</p></th>
                                    </tr>
                                    <tr class="center">
                                        <td>Setup</td>
                                        <td>Costo</td>
                                        <td>Setup</td>
                                        <td>Costo</td>
                                    </tr>
                                    <tr class="center">
                                        <td><p>1</p></td>
                                        <td><p>$220.00 USD</p></td>
                                        <td><p>$220.00 USD</p></td>
                                        <td><p>$220.00 USD</p></td>
                                        <td><p>$220.00 USD</p></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="serviceDetails">
                                            <ul>
                                                <li>Firewall: Cisco ASA 5555 X High Availability (Pair of Devices) QTY: 1</li>
                                                <li>1000 Mbps Connectivity</li>
                                                <li>4Gbps Aggregate, 1,000,000 Concurrent Connections and 50,000 Connections/Second</li>
                                                <li>Stateful packet inspection</li>
                                                <li>Includes 24??7 Monitoring, Rule Changes and Replacement Guarantee</li>
                                                <li>Two (2) AnyConnect SSL VPN Client to Site Licenses are included</li>
                                                <li>Standard deployment includes dual power supplies</li>
                                                <li>Included Cisco Defense Orchestrator</li>
                                                <li>Deployment Implementation: Deployment</li>
                                                <li>Deployment Method: Parallel Migration</li>
                                                <li>Support: Cisco ASA 5555 X Support</li>
                                                <li>Software Module: ASA Standard QTY: 1</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="serviceDetails">
                               <p style="margin-top:5px;text-align:center;font-size:14px;">Detalles del Servicio: <span style="font-weight:bold"> Nombre del servicio</span></p>
                            </div>
                            <!-- Fin del template -->
                    
                            <!-- Agregar bot??n para generar tablas adicionales vac??as (padding entre ellas: 40px) -->
                            <!-- De forma autom??tica, todo lo que se ingrese debe guardarse en local storage, por si se recarga la p??gina accidentalmente. Lo almacenado en local storage ser?? eliminado ??nicamente cuando la persona haga click en un bot??n que diga "Resetear presupuesto" -->
                    
                            <!-- Agregar bot??n para exportar las tablas a un PDF -->
                    
                            <table class="totals" style="margin-top:-10px">
                                <tbody style="text-align: left;" class="recurring">
                                    <tr class="top">
                                        <td colspan="2" style="border-top: none;font-size: 16px;">Costos recurrentes</td>
                                    </tr>
                                    <tr>
                                        <td>Costo mensual</td>
                                        <td>$2,266.81 USD</td>
                                    </tr>
                                    <tr class="top">
                                        <td colspan="2" style="border-top: none;font-size: 16px;">Costos de ??nica vez</td>
                                    </tr>
                                    <tr>
                                        <td>Setup</td>
                                        <td>$0.00 USD</td>
                                    </tr>
                                    <tr class="bottom">
                                        <td style="border-bottom: none;font-size: 16px;">Total por costos de ??nica vez</td>
                                        <td style="border-bottom: none;font-size: 16px;">$0.00 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="disclaimer">
                                <ul>
                                    <li>Los valores indicados no incluyen impuestos.</li>
                                    <li>El costo mensual puede variar si se superan los l??mites a los cuales se suscribe.</li>
                                </ul>
                            </div>
                            
                        </div>

                        <div class="page-break"></div>

                        <img src="img/img-footer.jpg" alt="Grupo CloudSpace" style="margin-left:-130px;width:150%;margin-top:-90px" />

                        <div class="container-img">
                            <center>
                            <img src="img/logoGC.jpg" alt="Grupo CloudSpace" style="width:350px;margin-top:55px" />
                            <center>
                        </div>

                        <p style="font-size:17px;text-align:center;margin-top:25px;margin-bottom:20px">                    
                            Av. del Libertador 2442, piso 4 Olivos, Buenos Aires 1636 ??? Argentina
                            <br>
                            +54 11 3220 1449
                        </p>
                        <p style=""> 
                        <p style="color:#8f8f8f;font-size:12px;text-align:center;margin-top:25px;margin-bottom:20px">                    
                            Cloudspace SRL.
                            <br>
                            Socio estrat??gico de negocios, Rackspace Inc.
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