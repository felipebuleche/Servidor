<?php
$contactos = [];
if (($gestor = fopen("contactos.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        $contacto = [
            'nombre' => $datos[0],
            'apellido' => $datos[1],
            'telefono' => $datos[2]
        ];
        $contactos[] = $contacto;
    }
    fclose($gestor);
}

$agendaJSON = json_encode($contactos);


echo $agendaJSON;
?>
