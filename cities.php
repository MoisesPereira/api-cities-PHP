<?php
header('Content-Type: application/json; charset=utf-8');

/* Api em Json para retornar as siglas das cidades */


$estado = array(
	'Acre' => array(
			'Estado' => 'Acre',
			'Sigla' => 'AC',
			'Capital' => 'Rio Branco',
			'Regiao' => 'Norte'
		),
	'Alagoas' => array(
			'Estado' => 'Alagoas',
			'Sigla' => 'AL',
			'Capital' => 'Maceió',
			'Regiao' => 'Nordeste'			
		),
	'Amapa' => array(
			'Estado' => 'Amapá',
			'Sigla' => 'AP',
			'Capital' => 'Macapá',
			'Regiao' => 'Norte'			
		)
);

echo json_encode($estado);