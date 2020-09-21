<?php

/*
Template Name: Atención Ciudadana
*/

get_header();

?>

    <section>
        <div class="container-fluid">
            <div class="row title">
                <div class="col-12 col-md-4 col-lg-5 call order-1">
                    <div class="wrapper d-flex justify-content-start flex-column">
                        <a href="<?php echo home_url(esc_html('/')); ?>" class="small text-muted d-none d-md-block"> <?php echo pll__('Inicio'); ?> </a>
                        <h1 class="text-uppercase text-left font-weight-bold mt-md-5 mx-0 mx-md-1">
                            <?php echo get_field('titulo_atencion'); ?>
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-7 order-2 px-0 carousel-container">
                    <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_field('imagen_atencion')); ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4">
        <div class="container">
            <div class="row justify-content-md-center mx-2 mx-md-5">
                <div class="news-content col-12">
                    <div class="content-section mb-5">
                        <span class="content-header w-100"><?php echo get_field('titulo_form_atencion'); ?></span>
                        <hr class="content-separator w-50 mb-5">
                        <p class="content-text">
	                        <?php echo get_field('descripcion_form_atencion'); ?>
                        </p>
                        <p class="content-text">
                        <form id="atencion-form" class="aligan-form bordered-bottom py-4">
		                    <?php wp_nonce_field('atencion_ciudadana'); ?>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <label> <?php echo pll__('Tipo de envío'); ?> </label>
                                    <div class="material-radio">
                                        <input type="radio" id="typeIdentified" class="typeIdentified" value="identificado" name="radio-stacked">
                                        <label class="text-muted mb-2 custom-control-label" for="typeIdentified">
                                        <?php echo pll__('Identificado'); ?>  </label>
                                    </div>
                                    <div class="material-radio">
                                        <input type="radio" id="typeAnonymous" class="typeIdentified" value="anonimo" name="radio-stacked">
                                        <label class="text-muted custom-control-label" for="typeAnonymous">
                                            <?php echo pll__('Anónimo'); ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-12 col-md-6 mb-4 form-nombre">
                                    <label for="reportName"><?php echo pll__('Nombre*'); ?></label>
                                    <input type="text" id="reportPersonName" name="form-nombre" class="form-control"
                                           placeholder="<?php echo pll__('Nombre de la persona'); ?>">
                                </div>
                                <div class="col-12 col-md-6 mb-4 form-apellidos">
                                    <label for="reportFirstname"><?php echo pll__('Apellidos*'); ?></label>
                                    <input type="email" id="reportPersonFirstname" name="form-apellidos" class="form-control"
                                           placeholder="<?php echo pll__('Apellidos de la persona'); ?>">
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-12 col-md-6 mb-4 form-ci">
                                    <label for="reportPersonId"><?php echo pll__('Número de carné de identidad o pasaporte:'); ?></label>
                                    <input type="text" id="reportPersonId" name="form-ci" class="form-control"
                                           placeholder="98010265432">
                                </div>
                                <div class="col-12 col-md-6 mb-4 form-pais">
                                    <label for="reportPersonCountry"><?php echo pll__('País*'); ?></label>
                                    <select id="reportFirstname" name="form-pais" class="form-control">

                                        <option value="" id="pais-vacio">
                                            <?php echo pll__('Seleccione su país de residencia'); ?>
                                        </option>
                                        <option value="Afganistán" id="AF">
                                            Afganistán
                                        </option>
                                        <option value="Albania" id="AL">
                                            Albania
                                        </option>
                                        <option value="Alemania" id="DE">
                                            Alemania
                                        </option>
                                        <option value="Andorra" id="AD">
                                            Andorra
                                        </option>
                                        <option value="Angola" id="AO">
                                            Angola
                                        </option>
                                        <option value="Anguila" id="AI">
                                            Anguila
                                        </option>
                                        <option value="Antártida" id="AQ">
                                            Antártida
                                        </option>
                                        <option value="Antigua y Barbuda" id="AG">
                                            Antigua
                                            y
                                            Barbuda
                                        </option>
                                        <option value="Antillas holandesas" id="AN">
                                            Antillas
                                            holandesas
                                        </option>
                                        <option value="Arabia Saudí" id="SA">
                                            Arabia
                                            Saudí
                                        </option>
                                        <option value="Argelia" id="DZ">
                                            Argelia
                                        </option>
                                        <option value="Argentina" id="AR">
                                            Argentina
                                        </option>
                                        <option value="Armenia" id="AM">
                                            Armenia
                                        </option>
                                        <option value="Aruba" id="AW">
                                            Aruba
                                        </option>
                                        <option value="Australia" id="AU">
                                            Australia
                                        </option>
                                        <option value="Austria" id="AT">
                                            Austria
                                        </option>
                                        <option value="Azerbaiyán" id="AZ">
                                            Azerbaiyán
                                        </option>
                                        <option value="Bahamas" id="BS">
                                            Bahamas
                                        </option>
                                        <option value="Bahrein" id="BH">
                                            Bahrein
                                        </option>
                                        <option value="Bangladesh" id="BD">
                                            Bangladesh
                                        </option>
                                        <option value="Barbados" id="BB">
                                            Barbados
                                        </option>
                                        <option value="Bélgica" id="BE">
                                            Bélgica
                                        </option>
                                        <option value="Belice" id="BZ">
                                            Belice
                                        </option>
                                        <option value="Benín" id="BJ">
                                            Benín
                                        </option>
                                        <option value="Bermudas" id="BM">
                                            Bermudas
                                        </option>
                                        <option value="Bhután" id="BT">
                                            Bhután
                                        </option>
                                        <option value="Bielorrusia" id="BY">
                                            Bielorrusia
                                        </option>
                                        <option value="Birmania" id="MM">
                                            Birmania
                                        </option>
                                        <option value="Bolivia" id="BO">
                                            Bolivia
                                        </option>
                                        <option value="Bosnia y Herzegovina" id="BA">
                                            Bosnia y
                                            Herzegovina
                                        </option>
                                        <option value="Botsuana" id="BW">
                                            Botsuana
                                        </option>
                                        <option value="Brasil" id="BR">
                                            Brasil
                                        </option>
                                        <option value="Brunei" id="BN">
                                            Brunei
                                        </option>
                                        <option value="Bulgaria" id="BG">
                                            Bulgaria
                                        </option>
                                        <option value="Burkina Faso" id="BF">
                                            Burkina
                                            Faso
                                        </option>
                                        <option value="Burundi" id="BI">
                                            Burundi
                                        </option>
                                        <option value="Cabo Verde" id="CV">
                                            Cabo
                                            Verde
                                        </option>
                                        <option value="Camboya" id="KH">
                                            Camboya
                                        </option>
                                        <option value="Camerún" id="CM">
                                            Camerún
                                        </option>
                                        <option value="Canadá" id="CA">
                                            Canadá
                                        </option>
                                        <option value="Chad" id="TD">
                                            Chad
                                        </option>
                                        <option value="Chile" id="CL">
                                            Chile
                                        </option>
                                        <option value="China" id="CN">
                                            China
                                        </option>
                                        <option value="Chipre" id="CY">
                                            Chipre
                                        </option>
                                        <option value="Ciudad estado del Vaticano" id="VA">
                                            Ciudad
                                            estado
                                            del
                                            Vaticano
                                        </option>
                                        <option value="Colombia" id="CO">
                                            Colombia
                                        </option>
                                        <option value="Comores" id="KM">
                                            Comores
                                        </option>
                                        <option value="Congo" id="CG">
                                            Congo
                                        </option>
                                        <option value="Corea" id="KR">
                                            Corea
                                        </option>
                                        <option value="Corea del Norte" id="KP">
                                            Corea
                                            del
                                            Norte
                                        </option>
                                        <option value="Costa del Marfíl" id="CI">
                                            Costa
                                            del
                                            Marfíl
                                        </option>
                                        <option value="Costa Rica" id="CR">
                                            Costa
                                            Rica
                                        </option>
                                        <option value="Croacia" id="HR">
                                            Croacia
                                        </option>
                                        <option value="Cuba" selected="" id="CU">
                                            Cuba
                                        </option>
                                        <option value="Dinamarca" id="DK">
                                            Dinamarca
                                        </option>
                                        <option value="Djibouri" id="DJ">
                                            Djibouri
                                        </option>
                                        <option value="Dominica" id="DM">
                                            Dominica
                                        </option>
                                        <option value="Ecuador" id="EC">
                                            Ecuador
                                        </option>
                                        <option value="Egipto" id="EG">
                                            Egipto
                                        </option>
                                        <option value="El Salvador" id="SV">
                                            El
                                            Salvador
                                        </option>
                                        <option value="Emiratos Arabes Unidos" id="AE">
                                            Emiratos
                                            Arabes
                                            Unidos
                                        </option>
                                        <option value="Eritrea" id="ER">
                                            Eritrea
                                        </option>
                                        <option value="Eslovaquia" id="SK">
                                            Eslovaquia
                                        </option>
                                        <option value="Eslovenia" id="SI">
                                            Eslovenia
                                        </option>
                                        <option value="España" id="ES">
                                            España
                                        </option>
                                        <option value="Estados Unidos" id="US">
                                            Estados
                                            Unidos
                                        </option>
                                        <option value="Estonia" id="EE">
                                            Estonia
                                        </option>
                                        <option value="c" id="ET">
                                            Etiopía
                                        </option>
                                        <option value="Ex-República Yugoslava de Macedonia" id="MK">
                                            Ex-República
                                            Yugoslava
                                            de
                                            Macedonia
                                        </option>
                                        <option value="Filipinas" id="PH">
                                            Filipinas
                                        </option>
                                        <option value="Finlandia" id="FI">
                                            Finlandia
                                        </option>
                                        <option value="Francia" id="FR">
                                            Francia
                                        </option>
                                        <option value="Gabón" id="GA">
                                            Gabón
                                        </option>
                                        <option value="Gambia" id="GM">
                                            Gambia
                                        </option>
                                        <option value="Georgia" id="GE">
                                            Georgia
                                        </option>
                                        <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">
                                            Georgia
                                            del Sur
                                            y las
                                            islas
                                            Sandwich
                                            del Sur
                                        </option>
                                        <option value="Ghana" id="GH">
                                            Ghana
                                        </option>
                                        <option value="Gibraltar" id="GI">
                                            Gibraltar
                                        </option>
                                        <option value="Granada" id="GD">
                                            Granada
                                        </option>
                                        <option value="Grecia" id="GR">
                                            Grecia
                                        </option>
                                        <option value="Groenlandia" id="GL">
                                            Groenlandia
                                        </option>
                                        <option value="Guadalupe" id="GP">
                                            Guadalupe
                                        </option>
                                        <option value="Guam" id="GU">
                                            Guam
                                        </option>
                                        <option value="Guatemala" id="GT">
                                            Guatemala
                                        </option>
                                        <option value="Guayana" id="GY">
                                            Guayana
                                        </option>
                                        <option value="Guayana francesa" id="GF">
                                            Guayana
                                            francesa
                                        </option>
                                        <option value="Guinea" id="GN">
                                            Guinea
                                        </option>
                                        <option value="Guinea Ecuatorial" id="GQ">
                                            Guinea
                                            Ecuatorial
                                        </option>
                                        <option value="Guinea-Bissau" id="GW">
                                            Guinea-Bissau
                                        </option>
                                        <option value="Haití" id="HT">
                                            Haití
                                        </option>
                                        <option value="Holanda" id="NL">
                                            Holanda
                                        </option>
                                        <option value="Honduras" id="HN">
                                            Honduras
                                        </option>
                                        <option value="Hong Kong R. A. E" id="HK">
                                            Hong
                                            Kong R.
                                            A. E
                                        </option>
                                        <option value="Hungría" id="HU">
                                            Hungría
                                        </option>
                                        <option value="India" id="IN">
                                            India
                                        </option>
                                        <option value="Indonesia" id="ID">
                                            Indonesia
                                        </option>
                                        <option value="Irak" id="IQ">
                                            Irak
                                        </option>
                                        <option value="Irán" id="IR">
                                            Irán
                                        </option>
                                        <option value="Irlanda" id="IE">
                                            Irlanda
                                        </option>
                                        <option value="Isla Bouvet" id="BV">
                                            Isla
                                            Bouvet
                                        </option>
                                        <option value="Isla Christmas" id="CX">
                                            Isla
                                            Christmas
                                        </option>
                                        <option value="Isla Heard e Islas McDonald" id="HM">
                                            Isla
                                            Heard e
                                            Islas
                                            McDonald
                                        </option>
                                        <option value="Islandia" id="IS">
                                            Islandia
                                        </option>
                                        <option value="Islas Caimán" id="KY">
                                            Islas
                                            Caimán
                                        </option>
                                        <option value="Islas Cook" id="CK">
                                            Islas
                                            Cook
                                        </option>
                                        <option value="Islas de Cocos o Keeling" id="CC">
                                            Islas de
                                            Cocos o
                                            Keeling
                                        </option>
                                        <option value="Islas Faroe" id="FO">
                                            Islas
                                            Faroe
                                        </option>
                                        <option value="Islas Fiyi" id="FJ">
                                            Islas
                                            Fiyi
                                        </option>
                                        <option value="Islas Malvinas Islas Falkland" id="FK">
                                            Islas
                                            Malvinas
                                            Islas
                                            Falkland
                                        </option>
                                        <option value="Islas Marianas del norte" id="MP">
                                            Islas
                                            Marianas
                                            del
                                            norte
                                        </option>
                                        <option value="Islas Marshall" id="MH">
                                            Islas
                                            Marshall
                                        </option>
                                        <option value="Islas menores de Estados Unidos" id="UM">
                                            Islas
                                            menores
                                            de
                                            Estados
                                            Unidos
                                        </option>
                                        <option value="Islas Palau" id="PW">
                                            Islas
                                            Palau
                                        </option>
                                        <option value="Islas Salomón" d="SB">
                                            Islas
                                            Salomón
                                        </option>
                                        <option value="Islas Tokelau" id="TK">
                                            Islas
                                            Tokelau
                                        </option>
                                        <option value="Islas Turks y Caicos" id="TC">
                                            Islas
                                            Turks y
                                            Caicos
                                        </option>
                                        <option value="Islas Vírgenes EE.UU." id="VI">
                                            Islas
                                            Vírgenes
                                            EE.UU.
                                        </option>
                                        <option value="Islas Vírgenes Reino Unido" id="VG">
                                            Islas
                                            Vírgenes
                                            Reino
                                            Unido
                                        </option>
                                        <option value="Israel" id="IL">
                                            Israel
                                        </option>
                                        <option value="Italia" id="IT">
                                            Italia
                                        </option>
                                        <option value="Jamaica" id="JM">
                                            Jamaica
                                        </option>
                                        <option value="Japón" id="JP">
                                            Japón
                                        </option>
                                        <option value="Jordania" id="JO">
                                            Jordania
                                        </option>
                                        <option value="Kazajistán" id="KZ">
                                            Kazajistán
                                        </option>
                                        <option value="Kenia" id="KE">
                                            Kenia
                                        </option>
                                        <option value="Kirguizistán" id="KG">
                                            Kirguizistán
                                        </option>
                                        <option value="Kiribati" id="KI">
                                            Kiribati
                                        </option>
                                        <option value="Kuwait" id="KW">
                                            Kuwait
                                        </option>
                                        <option value="Laos" id="LA">
                                            Laos
                                        </option>
                                        <option value="Lesoto" id="LS">
                                            Lesoto
                                        </option>
                                        <option value="Letonia" id="LV">
                                            Letonia
                                        </option>
                                        <option value="Líbano" id="LB">
                                            Líbano
                                        </option>
                                        <option value="Liberia" id="LR">
                                            Liberia
                                        </option>
                                        <option value="Libia" id="LY">
                                            Libia
                                        </option>
                                        <option value="Liechtenstein" id="LI">
                                            Liechtenstein
                                        </option>
                                        <option value="Lituania" id="LT">
                                            Lituania
                                        </option>
                                        <option value="Luxemburgo" id="LU">
                                            Luxemburgo
                                        </option>
                                        <option value="Macao R. A. E" id="MO">
                                            Macao R.
                                            A. E
                                        </option>
                                        <option value="Madagascar" id="MG">
                                            Madagascar
                                        </option>
                                        <option value="Malasia" id="MY">
                                            Malasia
                                        </option>
                                        <option value="Malawi" id="MW">
                                            Malawi
                                        </option>
                                        <option value="Maldivas" id="MV">
                                            Maldivas
                                        </option>
                                        <option value="Malí" id="ML">
                                            Malí
                                        </option>
                                        <option value="Malta" id="MT">
                                            Malta
                                        </option>
                                        <option value="Marruecos" id="MA">
                                            Marruecos
                                        </option>
                                        <option value="Martinica" id="MQ">
                                            Martinica
                                        </option>
                                        <option value="Mauricio" id="MU">
                                            Mauricio
                                        </option>
                                        <option value="Mauritania" id="MR">
                                            Mauritania
                                        </option>
                                        <option value="Mayotte" id="YT">
                                            Mayotte
                                        </option>
                                        <option value="México" id="MX">
                                            México
                                        </option>
                                        <option value="Micronesia" id="FM">
                                            Micronesia
                                        </option>
                                        <option value="Moldavia" id="MD">
                                            Moldavia
                                        </option>
                                        <option value="Mónaco" id="MC">
                                            Mónaco
                                        </option>
                                        <option value="Mongolia" id="MN">
                                            Mongolia
                                        </option>
                                        <option value="Montserrat" id="MS">
                                            Montserrat
                                        </option>
                                        <option value="Mozambique" id="MZ">
                                            Mozambique
                                        </option>
                                        <option value="Namibia" id="NA">
                                            Namibia
                                        </option>
                                        <option value="Nauru" id="NR">
                                            Nauru
                                        </option>
                                        <option value="Nepal" id="NP">
                                            Nepal
                                        </option>
                                        <option value="Nicaragua" id="NI">
                                            Nicaragua
                                        </option>
                                        <option value="Níger" id="NE">
                                            Níger
                                        </option>
                                        <option value="Nigeria" id="NG">
                                            Nigeria
                                        </option>
                                        <option value="Niue" id="NU">
                                            Niue
                                        </option>
                                        <option value="Norfolk" id="NF">
                                            Norfolk
                                        </option>
                                        <option value="Noruega" id="NO">
                                            Noruega
                                        </option>
                                        <option value="Nueva Caledonia" id="NC">
                                            Nueva
                                            Caledonia
                                        </option>
                                        <option value="Nueva Zelanda" id="NZ">
                                            Nueva
                                            Zelanda
                                        </option>
                                        <option value="Omán" id="OM">
                                            Omán
                                        </option>
                                        <option value="Panamá" id="PA">
                                            Panamá
                                        </option>
                                        <option value="Papua Nueva Guinea" id="PG">
                                            Papua
                                            Nueva
                                            Guinea
                                        </option>
                                        <option value="Paquistán" id="PK">
                                            Paquistán
                                        </option>
                                        <option value="Paraguay" id="PY">
                                            Paraguay
                                        </option>
                                        <option value="Perú" id="PE">
                                            Perú
                                        </option>
                                        <option value="Pitcairn" id="PN">
                                            Pitcairn
                                        </option>
                                        <option value="Polinesia francesa" id="PF">
                                            Polinesia
                                            francesa
                                        </option>
                                        <option value="Polonia" id="PL">
                                            Polonia
                                        </option>
                                        <option value="Portugal" id="PT">
                                            Portugal
                                        </option>
                                        <option value="Puerto Rico" id="PR">
                                            Puerto
                                            Rico
                                        </option>
                                        <option value="Qatar" id="QA">
                                            Qatar
                                        </option>
                                        <option value="Reino Unido" id="UK">
                                            Reino
                                            Unido
                                        </option>
                                        <option value="República Centroafricana" id="CF">
                                            República
                                            Centroafricana
                                        </option>
                                        <option value="República Checa" id="CZ">
                                            República
                                            Checa
                                        </option>
                                        <option value="República de Sudáfrica" id="ZA">
                                            República
                                            de
                                            Sudáfrica
                                        </option>
                                        <option value="República Democrática del Congo Zaire" id="CD">
                                            República
                                            Democrática
                                            del
                                            Congo
                                            Zaire
                                        </option>
                                        <option value="República Dominicana" id="DO">
                                            República
                                            Dominicana
                                        </option>
                                        <option value="Reunión" id="RE">
                                            Reunión
                                        </option>
                                        <option value="Ruanda" id="RW">
                                            Ruanda
                                        </option>
                                        <option value="Rumania" id="RO">
                                            Rumania
                                        </option>
                                        <option value="Rusia" id="RU">
                                            Rusia
                                        </option>
                                        <option value="Samoa" id="WS">
                                            Samoa
                                        </option>
                                        <option value="Samoa occidental" id="AS">
                                            Samoa
                                            occidental
                                        </option>
                                        <option value="San Kitts y Nevis" id="KN">
                                            San
                                            Kitts y
                                            Nevis
                                        </option>
                                        <option value="San Marino" id="SM">
                                            San
                                            Marino
                                        </option>
                                        <option value="San Pierre y Miquelon" id="PM">
                                            San
                                            Pierre y
                                            Miquelon
                                        </option>
                                        <option value="San Vicente e Islas Granadinas" id="VC">
                                            San
                                            Vicente
                                            e Islas
                                            Granadinas
                                        </option>
                                        <option value="Santa Helena" id="SH">
                                            Santa
                                            Helena
                                        </option>
                                        <option value="Santa Lucía" id="LC">
                                            Santa
                                            Lucía
                                        </option>
                                        <option value="Santo Tomé y Príncipe" id="ST">
                                            Santo
                                            Tomé y
                                            Príncipe
                                        </option>
                                        <option value="Senegal" id="SN">
                                            Senegal
                                        </option>
                                        <option value="Serbia y Montenegro" id="YU">
                                            Serbia y
                                            Montenegro
                                        </option>
                                        <option value="Sychelles" id="SC">
                                            Seychelles
                                        </option>
                                        <option value="Sierra Leona" id="SL">
                                            Sierra
                                            Leona
                                        </option>
                                        <option value="Singapur" id="SG">
                                            Singapur
                                        </option>
                                        <option value="Siria" id="SY">
                                            Siria
                                        </option>
                                        <option value="Somalia" id="SO">
                                            Somalia
                                        </option>
                                        <option value="Sri Lanka" id="LK">
                                            Sri
                                            Lanka
                                        </option>
                                        <option value="Suazilandia" id="SZ">
                                            Suazilandia
                                        </option>
                                        <option value="Sudán" id="SD">
                                            Sudán
                                        </option>
                                        <option value="Suecia" id="SE">
                                            Suecia
                                        </option>
                                        <option value="Suiza" id="CH">
                                            Suiza
                                        </option>
                                        <option value="Surinam" id="SR">
                                            Surinam
                                        </option>
                                        <option value="Svalbard" id="SJ">
                                            Svalbard
                                        </option>
                                        <option value="Tailandia" id="TH">
                                            Tailandia
                                        </option>
                                        <option value="Taiwán" id="TW">
                                            Taiwán
                                        </option>
                                        <option value="Tanzania" id="TZ">
                                            Tanzania
                                        </option>
                                        <option value="Tayikistán" id="TJ">
                                            Tayikistán
                                        </option>
                                        <option value="Territorios británicos del océano Indico" id="IO">
                                            Territorios
                                            británicos
                                            del
                                            océano
                                            Indico
                                        </option>
                                        <option value="Territorios franceses del sur" id="TF">
                                            Territorios
                                            franceses
                                            del sur
                                        </option>
                                        <option value="Timor Oriental" id="TP">
                                            Timor
                                            Oriental
                                        </option>
                                        <option value="Togo" id="TG">
                                            Togo
                                        </option>
                                        <option value="Tonga" id="TO">
                                            Tonga
                                        </option>
                                        <option value="Trinidad y Tobago" id="TT">
                                            Trinidad
                                            y Tobago
                                        </option>
                                        <option value="Túnez" id="TN">
                                            Túnez
                                        </option>
                                        <option value="Turkmenistán" id="TM">
                                            Turkmenistán
                                        </option>
                                        <option value="Turquía" id="TR">
                                            Turquía
                                        </option>
                                        <option value="Tuvalu" id="TV">
                                            Tuvalu
                                        </option>
                                        <option value="Ucrania" id="UA">
                                            Ucrania
                                        </option>
                                        <option value="Uganda" id="UG">
                                            Uganda
                                        </option>
                                        <option value="Uruguay" id="UY">
                                            Uruguay
                                        </option>
                                        <option value="Uzbekistán" id="UZ">
                                            Uzbekistán
                                        </option>
                                        <option value="Vanuatu" id="VU">
                                            Vanuatu
                                        </option>
                                        <option value="Venezuela" id="VE">
                                            Venezuela
                                        </option>
                                        <option value="Vietnam" id="VN">
                                            Vietnam
                                        </option>
                                        <option value="Wallis y Futuna" id="WF">
                                            Wallis y
                                            Futuna
                                        </option>
                                        <option value="Yemen" id="YE">
                                            Yemen
                                        </option>
                                        <option value="Zambia" id="ZM">
                                            Zambia
                                        </option>
                                        <option value="Zimbabue" id="ZW">
                                            Zimbabue
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-12 col-md-6 mb-4 form-provincia">
                                    <label for="reportPersonProvince"><?php echo pll__('Provincia*'); ?></label>
                                    <select id="reportPersonProvince" name="form-provincia" class="form-control" >

                                        <option value="">
	                                        <?php echo pll__('Selecciona...'); ?>
                                        </option>
                                        <option value="Pinar del Río">Pinar del Río</option>
                                        <option value="Artemisa">Artemisa</option>
                                        <option selected="" value="La Habana">La Habana</option>
                                        <option value="Mayabeque">Mayabeque</option>
                                        <option value="Matanzas">Matanzas</option>
                                        <option value="Cienfuegos">Cienfuegos</option>
                                        <option value="Villa Clara">Villa Clara</option>
                                        <option value="Sancti Spíritus">Sancti Spíritus</option>
                                        <option value="Ciego de Ávila">Ciego de Ávila</option>
                                        <option value="Camagüey">Camagüey</option>
                                        <option value="Las Tunas">Las Tunas</option>
                                        <option value="Granma">Granma</option>
                                        <option value="Holguín">Holguín</option>
                                        <option value="Santiago de Cuba">Santiago de Cuba</option>
                                        <option value="Guantánamo">Guantánamo</option>
                                        <option value="Isla de la Juventud">Isla de la Juventud</option>

                                    </select>
                                </div>
                                <div class="col-12 col-md-6 mb-4 form-direccion">
                                    <label for="reportPersonAddress"><?php echo pll__('Dirección*'); ?></label>
                                    <input type="address" id="reportPersonAddress" name="form-direccion" class="form-control"
                                           placeholder="<?php echo pll__('Calle H e/ D y E, Vedado, Plaza de la Revolución'); ?>">
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-6 col-md-3 mb-4 form-telefono">
                                    <label for="reportPersonPhone"><?php echo pll__('Teléfono fijo'); ?></label>
                                    <input type="text" id="reportPersonPhone" name="form-telefono" class="form-control"
                                           placeholder="(53) 7 831 1234">
                                </div>
                                <div class="col-6 col-md-3 mb-4 form-celular">
                                    <label for="reportPersonMobile"><?php echo pll__('Teléfono celular'); ?></label>
                                    <input type="text" id="reportPersonMobile" name="form-celular" class="form-control"
                                           placeholder="(53) 5 912 3456">
                                </div>
                                <div class="col-12 col-md-6 mb-4 form-correo">
                                    <label for="reportPersonEmail"><?php echo pll__('Correo electrónico'); ?></label>
                                    <input type="email" id="reportPersonAddress" name="form-correo" class="form-control"
                                           placeholder="micorreo@gmail.com" >
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col-12 ">
                                    <label for="feedbackTxtarea"><?php echo pll__('Asunto*'); ?> </label>
                                    <textarea class="form-control" id="feedbackTxtarea" name="form-asunto" rows="5"
                                              placeholder="<?php echo pll__('Escriba aquí su asunto'); ?>" ></textarea>
                                </div>
                            </div>

                            <div class="form-row justify-content-between flex-md-row mt-5">
                                <div
                                        class="col-10 col-md-4 custom-file file-container d-flex justify-content-center align-items-center">
                                    <label class="d-flex align-items-center justify-content-between file-label mx-0"
                                           for="validatedCustomFile"><span class="aligan-file-label"> <?php echo pll__('Seleccionar archivo'); ?></span> <i class="icon icon-attachment"></i></label>
                                    <input type="file" succes-messages="<?php echo pll__('Se ha cargado el archivo.'); ?>" error-messages="<?php echo pll__('No se ha podido cargar el archivo.'); ?>" class="custom-file-input" id="validatedCustomFile" >
                                    <input type="hidden" name="form-adjunto" class="form-adjunto" value=""/>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                                <div class="col-2 col-md-2 d-flex justify-content-center align-items-center text-center"
                                     style="height: 42px;">
                                    <button
                                            style="font-size: 32px; margin-left: -20%; cursor: pointer; "
                                            class="btn bg-transparent upload-file">
                                        <i style="font-size: 32px;" class="icon icon-upload"></i>
                                    </button>
                                </div>

                                <div class="col-md-6">
                                    <div class="d-none target-button-text"><?php echo pll__('Enviar'); ?></div>
                                    <div class="d-none target-button-wait"><?php echo pll__('Espere...'); ?></div>
                                    <button type="submit"
                                            class="d-flex justify-content-center align-items-center btn btn-submit float-right shadow mt-3 mt-md-0">
                                        <span><?php echo pll__('Enviar'); ?></span>
                                        <i style="font-size: 24px;" class="icon icon-control-next"></i> </button>
                                </div>

                            </div>
                        </form>

                        <a href="<?php echo get_url_by_template('page-faqs.php'); ?>" class="btn btn-outline-success mt-3"> <?php echo pll__('Preguntas Frecuentes'); ?> </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container">
        <div class="row">
            <div class="col-md-4 d-none d-md-block">

            </div>
            <div class="col-12 col-md-7">
                <div class="vote-card custom-shadow align-self-center text-center">
                    <h6 class="vote-card-header"><?php echo pll__('¿Te resultó útil este contenido?'); ?></h6>
                    <?php echo do_shortcode('[ratemypost]'); ?>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();
