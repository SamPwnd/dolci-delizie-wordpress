<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'morachef' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', 'root' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D/ai{BxPQ2J`v9H4 u4593+|I 80L|?nLt}<+XKe(7e#f2tlpLHwnZ_=!?EipB#y' );
define( 'SECURE_AUTH_KEY',  ',>x?ezlKyP_Wc{(jQsQ&V?D~oRk7 .oNkP~5ll5^_ie)tAen_epycMv]i:0L`!t@' );
define( 'LOGGED_IN_KEY',    'Gb+G40J#fA9E7b6C B+:Wa5gSE=&/mL]9s4leWH 51*Ca!zr0G`9SK ud 95pi+R' );
define( 'NONCE_KEY',        '63AzWl6H0$v<|^tH,/(=K?0wS^A7.)0&F,JJd3n^(nU7V+_9bO#eK~X;ccW9W6YX' );
define( 'AUTH_SALT',        'uNGgACNo!_y5 ro.8:Lvq8jl(*[Fq&O-K[/{7MAuW[8TA=FgK&by^KEY4gCsNu.a' );
define( 'SECURE_AUTH_SALT', 'lYVqLli,O$kzy1e7e99*G7p6}D7~2*E(}`O[Qsi{uUJ1kB}8J IdALBe(QMd)ny!' );
define( 'LOGGED_IN_SALT',   'dR_c@z0/X:^ro6YFLX!du2%(jnS,Y*2xY8%P3yw%gv7oK,9HHw5zN[Sk>p2jGP>B' );
define( 'NONCE_SALT',       'GVRn?y2[`&? V%<f8o`(,F)1f:Hgkq=w:ug*#]f:{T;/pNf|PF)rz6?)fV^9wIhO' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
