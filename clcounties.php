<?php

/**
 * Return a list of all the counties
 */

function clcounties_listcounties() {
  $counties = array(
    2090 => array( // Aisen del General Carlos Ibáñez del Campo
      'Aysén',
      'Chile Chico',
      'Cisnes',
      'Cochrane',
      'Coihaique',
      'Guaitecas',
      'Lago Verde',
      'O’Higgins',
      'Río Ibáñez',
      'Tortel',
    ),
    2091 => array( // Antofagasta
      'Antofagasta',
      'Calama',
      'María Elena',
      'Mejillones',
      'Ollagüe',
      'San Pedro de Atacama',
      'Sierra Gorda',
      'Taltal',
      'Tocopilla',
    ),
    2092 => array( // Araucanía
      'Angol',
      'Carahue',
      'Cholchol',
      'Collipulli',
      'Cunco',
      'Curacautín',
      'Curarrehue',
      'Ercilla',
      'Freire',
      'Galvarino',
      'Gorbea',
      'Lautaro',
      'Loncoche',
      'Lonquimay',
      'Los Sauces',
      'Lumaco',
      'Melipeuco',
      'Nueva Imperial',
      'Padre las Casas',
      'Perquenco',
      'Pitrufquén',
      'Pucón',
      'Purén',
      'Renaico',
      'Saavedra',
      'Temuco',
      'Teodoro Schmidt',
      'Toltén',
      'Traiguén',
      'Victoria',
      'Vilcún',
      'Villarrica',
    ),
    10183 => array( // Región de Arica y Parinacota
      'Arica',
      'Camarones',
      'General Lagos',
      'Putre',
    ),
    2093 => array( // Atacama
      'Alto del Carmen',
      'Caldera',
      'Chañaral',
      'Copiapó',
      'Diego de Almagro',
      'Freirina',
      'Huasco',
      'Tierra Amarilla',
      'Vallenar',
    ),
    2094 => array( // Bio-Bio
      'Alto Biobío',
      'Antuco',
      'Arauco',
      'Bulnes',
      'Cabrero',
      'Cañete',
      'Chiguayante',
      'Chillán',
      'Chillán Viejo',
      'Cobquecura',
      'Coelemu',
      'Coihueco',
      'Concepción',
      'Contulmo',
      'Coronel',
      'Curanilahue',
      'El Carmen',
      'Florida',
      'Hualpén',
      'Hualqui',
      'Laja',
      'Lebu',
      'Los Álamos',
      'Los Ángeles',
      'Lota',
      'Mulchén',
      'Nacimiento',
      'Negrete',
      'Ninhue',
      'Ñiquén',
      'Pemuco',
      'Penco',
      'Pinto',
      'Portezuelo',
      'Quilaco',
      'Quilleco',
      'Quillón',
      'Quirihue',
      'Ránquil',
      'San Carlos',
      'San Fabián',
      'San Ignacio',
      'San Nicolás',
      'San Pedro de la Paz',
      'San Rosendo',
      'Santa Bárbara',
      'Santa Juana',
      'Talcahuano',
      'Tirúa',
      'Tomé',
      'Treguaco',
      'Tucapel',
      'Yumbel',
      'Yungay',
    ),
    2095 => array( // Coquimbo
      'Andacollo',
      'Canela',
      'Combarbalá',
      'Coquimbo',
      'Illapel',
      'La Higuera',
      'La Serena',
      'Los Vilos',
      'Monte Patria',
      'Ovalle',
      'Paiguano',
      'Punitaqui',
      'Río Hurtado',
      'Salamanca',
      'Vicuña',
    ),
    2096 => array( // Libertador General Bernardo O'Higgins
      'Chépica',
      'Chimbarongo',
      'Codegua',
      'Coinco',
      'Coltauco',
      'Doñihue',
      'Graneros',
      'La Estrella',
      'Las Cabras',
      'Litueche',
      'Lolol',
      'Machalí',
      'Malloa',
      'Marchihue',
      'Mostazal',
      'Nancagua',
      'Navidad',
      'Olivar',
      'Palmilla',
      'Paredones',
      'Peralillo',
      'Peumo',
      'Pichidegua',
      'Pichilemu',
      'Placilla',
      'Pumanque',
      'Quinta de Tilcoco',
      'Rancagua',
      'Rengo',
      'Requínoa',
      'San Fernando',
      'San Vicente',
      'Santa Cruz',
    ),
    2097 => array( // Los Lagos
      'Ancud',
      'Calbuco',
      'Castro',
      'Chaitén',
      'Chonchi',
      'Cochamó',
      'Curaco de Vélez',
      'Dalcahue',
      'Fresia',
      'Frutillar',
      'Futaleufú',
      'Hualaihué',
      'Llanquihue',
      'Los Muermos',
      'Maullín',
      'Osorno',
      'Palena',
      'Puerto Montt',
      'Puerto Octay',
      'Puerto Varas',
      'Puqueldón',
      'Purranque',
      'Puyehue',
      'Queilén',
      'Quellón',
      'Quemchi',
      'Quinchao',
      'Río Negro',
      'San Juan de la Costa',
      'San Pablo',
    ),
    10182 => array( // Los Ríos
      'Corral',
      'Futrono',
      'La Unión',
      'Lago Ranco',
      'Lanco',
      'Los Lagos',
      'Máfil',
      'Mariquina',
      'Paillaco',
      'Panguipulli',
      'Río Bueno',
      'Valdivia',
    ),
    2098 => array( // Magallanes
      'Antártica',
      'Cabo de Hornos',
      'Laguna Blanca',
      'Natales',
      'Porvenir',
      'Primavera',
      'Punta Arenas',
      'Río Verde',
      'San Gregorio',
      'Timaukel',
      'Torres del Paine',
    ),
    2099 => array( // Maule
      'Cauquenes',
      'Chanco',
      'Colbún',
      'Constitución',
      'Curepto',
      'Curicó',
      'Empedrado',
      'Hualañé',
      'Licantén',
      'Linares',
      'Longaví',
      'Maule',
      'Molina',
      'Parral',
      'Pelarco',
      'Pelluhue',
      'Pencahue',
      'Rauco',
      'Retiro',
      'Río Claro',
      'Romeral',
      'Sagrada Familia',
      'San Clemente',
      'San Javier',
      'San Rafael',
      'Talca',
      'Teno',
      'Vichuquén',
      'Villa Alegre',
      'Yerbas Buenas',
    ),
    2100 => array( // Región Metropolitana de Santiago
      'Alhué',
      'Buin',
      'Calera de Tango',
      'Cerrillos',
      'Cerro Navia',
      'Colina',
      'Conchalí',
      'Curacaví',
      'El Bosque',
      'El Monte',
      'Estación Central',
      'Huechuraba',
      'Independencia',
      'Isla de Maipo',
      'La Cisterna',
      'La Florida',
      'La Granja',
      'La Pintana',
      'La Reina',
      'Lampa',
      'Las Condes',
      'Lo Barnechea',
      'Lo Espejo',
      'Lo Prado',
      'Macul',
      'Maipú',
      'María Pinto',
      'Melipilla',
      'Ñuñoa',
      'Padre Hurtado',
      'Paine',
      'Pedro Aguirre Cerda',
      'Peñaflor',
      'Peñalolén',
      'Pirque',
      'Providencia',
      'Pudahuel',
      'Puente Alto',
      'Quilicura',
      'Quinta Normal',
      'Recoleta',
      'Renca',
      'San Bernardo',
      'San Joaquín',
      'San José de Maipo',
      'San Miguel',
      'San Pedro',
      'San Ramón',
      'Santiago Centro',
      'Talagante',
      'Tiltil',
      'Vitacura',
    ),
    2101 => array( // Tarapacá
      'Alto Hospicio',
      'Camiña',
      'Colchane',
      'Huara',
      'Iquique',
      'Pica',
      'Pozo Almonte',
    ),
    2102 => array( // Valparaíso
      'Algarrobo',
      'Cabildo',
      'Calera',
      'Calle Larga',
      'Cartagena',
      'Casablanca',
      'Catemu',
      'Concón',
      'El Quisco',
      'El Tabo',
      'Hijuelas',
      'Isla de Pascua',
      'Juan Fernández',
      'La Cruz',
      'La Ligua',
      'Limache',
      'Llaillay',
      'Los Andes',
      'Nogales',
      'Olmué',
      'Panquehue',
      'Papudo',
      'Petorca',
      'Puchuncaví',
      'Putaendo',
      'Quillota',
      'Quilpué',
      'Quintero',
      'Rinconada',
      'San Antonio',
      'San Esteban',
      'San Felipe',
      'Santa María',
      'Santo Domingo',
      'Valparaíso',
      'Villa Alemana',
      'Viña del Mar',
      'Zapallar',
    ),
  );
  
  return $counties;
}

/**
 * Check and load counties
 */

function clcounties_loadcounties() {

  $counties = clcounties_listcounties();

  static $dao = NULL;
  if (!$dao) {
    $dao = new CRM_Core_DAO();
  }

  // go state-by-state to check existing counties

  foreach ($counties as $id => $state) {
    $check = "SELECT name FROM civicrm_county WHERE state_province_id = $id";
    $results = CRM_Core_DAO::executeQuery($check);
    $existing = array();
    while ($results->fetch()) {
      $existing[] = $results->name;
    }

    // identify counties needing to be loaded
    $add = array_diff($state, $existing);
    
    $insert = array();
    foreach ($add as $county) {
      $countye = $dao->escape($county);
      $insert[] = "('$countye', $id)";
    }
    
    // put it into queries of 50 counties each
    for($i = 0; $i < count($insert); $i = $i+50) {
      $inserts = array_slice($insert, $i, 50);
      $query = "INSERT INTO civicrm_county (name, state_province_id) VALUES ";
      $query .= implode(', ', $inserts);
      CRM_Core_DAO::executeQuery($query);
    }
  }
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function clcounties_civicrm_install() {
  clcounties_loadcounties();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function clcounties_civicrm_enable() {
  clcounties_loadcounties();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function clcounties_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  clcounties_loadcounties();
}
