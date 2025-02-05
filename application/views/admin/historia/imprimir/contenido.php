    <!-- Section 1 -->
    <table>
        <tr class="header green">
            <th class="center">ESTABLECIMIENTO</th>
            <th class="center">NOMBRE</th>
            <th class="center">APELLIDO</th>
            <th class="center">SEXO (M-F)</th>
            <th class="center">EDAD</th>
            <th class="center">Nº HISTORIA CLÍNICA</th>
        </tr>
        <tr>
            <td class="center"></td>
            <td class="center"><?= explode(" ", $historia->paciente)[1] ?></td>
            <td class="center"><?= explode(" ", $historia->paciente)[0] ?></td>
            <td class="center"><?= $historia->sexo[0] ?></td>
            <td class="center"><?= $historia->edad ?></td>
            <td class="center"><?= $historia->codi_pac ?></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="small center vertical-center green">MENOR DE 1 AÑO</td>
            <td class="center vertical-center yellow check"><?= $historia->edad < 1 ? "X" : "&nbsp;" ?></td>
            <td class="small center vertical-center green">1-4 AÑOS</td>
            <td class="center vertical-center yellow check"><?= $historia->edad >= 1 && $historia->edad < 4 ? "X" : "&nbsp;" ?></td>
            <td class="small center vertical-center green">5-9 AÑOS PROGRAMADO</td>
            <td class="center vertical-center green yellow check"><?= $historia->edad >= 5 && $historia->edad < 9 ? "X" : "&nbsp;" ?></td>
            <td class="small center vertical-center green">5-14 AÑOS NO PROGRAMADO</td>
            <td class="center vertical-center yellow check"><?= $historia->edad >= 5 && $historia->edad < 14 ? "X" : "&nbsp;" ?></td>
            <td class="small center vertical-center green">10-14 AÑOS PROGRAMADO</td>
            <td class="center vertical-center yellow check"><?= $historia->edad >= 10 && $historia->edad < 14 ? "X" : "&nbsp;" ?></td>
            <td class="small center vertical-center green">15-19 AÑOS</td>
            <td class="center vertical-center yellow check"><?= $historia->edad >= 15 && $historia->edad < 19 ? "X" : "&nbsp;" ?></td>
            <td class="small center vertical-center green">MAYOR DE 20 AÑOS</td>
            <td class="center vertical-center yellow check"><?= $historia->edad >= 20 ? "X" : "&nbsp;" ?></td>
            <td class="small center vertical-center green">EMBARAZADA</td>
            <td class="center vertical-center yellow check">&nbsp;</td>
        </tr>
    </table>

    <!-- Section 2 -->
    <table>
        <tr class="header">
            <th class="no-border">1 MOTIVO DE CONSULTA</th>
            <td class="no-border small right">ANOTAR LA CAUSA DEL PROBLEMA EN LA VERSIÓN DEL INFORMANTE</td>
        </tr>
        <tr>
            <td colspan="2"><?= $historia->motivo ?></td>
        </tr>
    </table>

    <!-- Section 3 -->
    <table>
        <tr class="header">
            <th class="no-border">2 ENFERMEDAD O PROBLEMA ACTUAL</th>
            <td class="smaller no-border right">REGISTRAR SÍNTOMAS: CRONOLOGÍA, LOCALIZACIÓN, CARACTERÍSTICAS, INTENSIDAD, CAUSA APARENTE, SÍNTOMAS ASOCIADOS,<br/>EVOLUCIÓN, ESTADO ACTUAL.</td>
        </tr>
        <tr>
            <td colspan="2"><?= $historia->enfermedad ?></td>
        </tr>
    </table>

    <!-- Section 4 -->
    <table>
        <tr class="header">
            <th colspan="20">3 ANTECEDENTES PERSONALES Y FAMILIARES</th>
        </tr>
        <tr>
            <td class="center green word-break vertical-center" style="width: 70px;">1. ALERGIA<br/>ANTIBIÓTICO</td>
            <td class="yellow check vertical-center"><?= $historia->alergia_antibiotico ? "X" : "&nbsp;" ?></td>
            <td class="center green word-break vertical-center" style="width: 70px;">2. ALERGIA<br/>ANESTESIA</td>
            <td class="yellow check vertical-center"><?= $historia->alergia_antibiotico ? "X" : "&nbsp;" ?></td>
            <td class="center green word-break vertical-center" style="width: 70px;">3. HEMO<br/>RRAGIAS</td>
            <td class="yellow check vertical-center"><?= $historia->alergia_antibiotico ? "X" : "&nbsp;" ?></td>
            <td class="center green word-break vertical-center" style="width: 70px;">4. VIH/SIDA</td>
            <td class="yellow check vertical-center"><?= $historia->alergia_antibiotico ? "X" : "&nbsp;" ?></td>
            <td class="center green word-break vertical-center" style="width: 70px;">5. TUBER<br/>CULOSIS</td>
            <td class="yellow check vertical-center"><?= $historia->alergia_antibiotico ? "X" : "&nbsp;" ?></td>
            <td class="center green word-break vertical-center" style="width: 70px;">6. ASMA</td>
            <td class="yellow check vertical-center"><?= $historia->alergia_antibiotico ? "X" : "&nbsp;" ?></td>
            <td class="center green word-break vertical-center" style="width: 70px;">7. DIABETES</td>
            <td class="yellow check vertical-center"><?= $historia->alergia_antibiotico ? "X" : "&nbsp;" ?></td>
            <td class="center green word-break vertical-center" style="width: 70px;">8. HIPER<br/>TENSIÓN</td>
            <td class="yellow check vertical-center"><?= $historia->alergia_antibiotico ? "X" : "&nbsp;" ?></td>
            <td class="center green word-break vertical-center" style="width: 70px;">9. ENF.<br/>CARDIACA</td>
            <td class="yellow check vertical-center"><?= $historia->alergia_antibiotico ? "X" : "&nbsp;" ?></td>
            <td class="center green word-break vertical-center" style="width: 70px;">10. OTRO</td>
            <td class="yellow check vertical-center"><?= $historia->alergia_antibiotico ? "X" : "&nbsp;" ?></td>
        </tr>
        <tr>
            <td colspan="20">
                <p><strong></strong></p>
                <p></p>
                <p><strong></strong></p>
                <p></p>
                <p><strong></strong></p>
                <p></p>
            </td>
        </tr>
    </table>

    <!-- Section 5 -->
    <table>
        <tr class="header">
            <th colspan="6">4 SIGNOS VITALES</th>
        </tr>
        <tr>
            <td>PRESIÓN ARTERIAL</td>
            <td>FRECUENCIA CARDIACA min.</td>
            <td>TEMPERATURA °C</td>
            <td>F. RESPIRAT. min.</td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <!-- Section 6 -->
    <table>
        <tr class="header">
            <th colspan="6">5 EXAMEN DEL SISTEMA ESTOMATOGNÁTICO</th>
        </tr>
        <tr>
            <td>1. LABIOS</td>
            <td>2. MEJILLAS</td>
            <td>3. MAXILAR SUPERIOR</td>
            <td>4. MAXILAR INFERIOR</td>
            <td>5. LENGUA</td>
            <td>6. PALADAR</td>
        </tr>
        <tr>
            <td>7. PISO</td>
            <td>8. CARRILLOS</td>
            <td>9. GLÁNDULAS SALIVALES</td>
            <td>10. ORO FARINGE</td>
            <td>11. A. T. M.</td>
            <td>12. GANGLIOS</td>
        </tr>
    </table>

    <!-- Section 7 -->
    <table>
        <tr class="header">
            <th colspan="6">6 ODONTOGRAMA</th>
        </tr>
        <tr>
            <td colspan="6" class="center blue">PINTAR CON: AZUL PARA TRATAMIENTO REALIZADO - ROJO PARA PATOLOGÍA ACTUAL MOVILIDAD Y RECESIÓN: MARCAR "X" (1, 2 ó 3), SI APLICA</td>
        </tr>
        <tr>
            <td colspan="6" class="center red">RECESIÓN</td>
        </tr>
        <tr>
            <td colspan="6" class="center red">MOVILIDAD</td>
        </tr>
    </table>

    <!-- Section 8 -->
    <table>
        <tr class="header purple">
            <th colspan="6">8 INDICADORES DE SALUD BUCAL</th>
        </tr>
        <tr class="green">
            <td>HIGIENE ORAL SIMPLIFICADA</td>
            <td>ENFERMEDAD PERIODONTAL</td>
            <td>MAL OCLUSIÓN</td>
            <td>FLUOROSIS</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="yellow">
            <td>PIEZAS DENTALES</td>
            <td>PLACA</td>
            <td>CÁLCULO</td>
            <td>GINGIVITIS</td>
            <td>ANGLE I</td>
            <td>LEVE</td>
        </tr>
        <tr class="orange">
            <td>TOTALES</td>
            <td>C</td>
            <td>P</td>
            <td>O</td>
            <td>TOTAL</td>
            <td>0</td>
        </tr>
    </table>

    <!-- Section 9 -->
    <table>
        <tr class="header">
            <th colspan="6">9 SIMBOLOGÍA DEL ODONTOGRAMA</th>
        </tr>
        <tr>
            <td>U U ═ rojo SELLANTE NECESARIO</td>
            <td>PÉRDIDA (OTRA CAUSA)</td>
            <td>PRÓTESIS TOTAL</td>
            <td>r ª azul SELLANTE REALIZADO</td>
            <td>ENDODONCIA</td>
            <td>CORONA</td>
        </tr>
        <tr>
            <td>X rojo EXTRACCIÓN INDICADA</td>
            <td>¨ ----- ¨ PRÓTESIS FIJA</td>
            <td>azul OBTURADO</td>
            <td>- X azul PÉRDIDA POR CARIES</td>
            <td>( ------- ) PRÓTESIS REMOVIBLE</td>
            <td>rojo CARIES</td>
        </tr>
    </table>

    <!-- Section 10 -->
    <table>
        <tr class="header">
            <th colspan="6">10 PLANES DE DIAGNÓSTICO, TERAPÉUTICO Y EDUCACIONAL</th>
        </tr>
        <tr>
            <td>BIOMETRIA</td>
            <td>QUIMICA SANGUINEA</td>
            <td>RAYOS - X</td>
            <td>OTROS</td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <!-- Section 11 -->
    <table>
        <tr class="header">
            <th colspan="6">11 DIAGNÓSTICO</th>
        </tr>
        <tr>
            <td>FECHA DE APERTURA</td>
            <td>FECHA DE CONTROL</td>
            <td>PROFESIONAL</td>
            <td>FIRMA</td>
            <td>NUMERO DE HOJA</td>
            <td></td>
        </tr>
    </table>

    <!-- Section 12 -->
    <table>
        <tr class="header purple">
            <th colspan="6">12 PROCEDIMIENTOS Y PRESCRIPCIONES</th>
        </tr>
        <tr class="green">
            <td>PROCEDIMIENTOS</td>
            <td>PRESCRIPCIONES</td>
            <td>CÓDIGO Y FIRMA</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="yellow">
            <td>CÓDIGO</td>
            <td>FIRMA</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="orange">
            <td>CÓDIGO</td>
            <td>FIRMA</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
