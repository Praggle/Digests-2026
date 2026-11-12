<?php
/**
 *
 * @package phpBB Extension - Digests
 * @copyright (c) 2021 Mark D. Hamill (mark@phpbbservices.com)
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(

	'PLURAL_RULE'											=> 1,

	'ACP_CAT_DIGESTS'										=> 'E-Mail-Zusammenfassungen',
	'ACP_DIGESTS_BALANCE_LOAD'								=> 'Last-Verteilung',
	'ACP_DIGESTS_BALANCE_LOAD_EXPLAIN'						=> 'Wenn in manchen Stunden zu viele E-Mail-Zusammenfassungen versendet werden, kann das zu Performance-Beeinträchtigungen führen. Hier kann deshalb eine ausgewogene Verteilung der Serverlast hergestellt werden. Die Tabelle stellt die Abonnementzahlen für jede <strong>überbelastete Stunde</strong> fettgedruckt dar. <em>Wöchentliche Abonnenten werden kursiv,</em> <strong>und monatliche Abonnenten fett</strong> dargestellt. Die Stundenangabe bezieht sich dabei auf die in den individuellen Grundeinstellungen ausgewählte Sendeuhrzeit. Die Ausführung dieser Funktion beeinflusst die individuell eingestellten Zeiten nicht mehr, als für eine ausgelichene Verteilung wirklich notwendig ist. Es werden nur die Stunden entzerrt, in denen die Abonnentenzahl die Durchschnittslast übersteigt. <em>Achtung</em>: Trotzdem sind damit möglicherweise nicht alle Abonnenten einverstanden.',
	'ACP_DIGESTS_BALANCE_OPTIONS'							=> 'Einstellungen der Last-Verteilung',
	'ACP_DIGESTS_CLEAR_CACHED_DIGESTS'						=> 'Zwischengespeicherte E-Mail-Zusammenfassungen und Berichte löschen',
	'ACP_DIGESTS_CLEAR_CACHED_DIGESTS_EXPLAIN'				=> 'Hier können zwischengespeicherte E-Mail-Zusammenfassungen im Verzeichnis /store/phpbbservices/digests gelöscht werden. Sie können durch den manuellen Mailer erzeugt werden, stellen aber auch ein potenzielles Sicherheitsrisiko dar. When es dort Dateien gibt, sollten sie gelöscht werden.<br><br>Insgesamt sind %1$d Dateien zwischengespeichert. File names: %2$s.<br><br>Alle dort erzeugten Berichtsstatistiken können ebenfalls gelöscht werden.',
	'ACP_DIGESTS_GENERAL_SETTINGS'							=> 'Allgemeine Konfiguration',
	'ACP_DIGESTS_GENERAL_SETTINGS_EXPLAIN'					=> 'Hier können allgemeine Grundeinstellungen vorgenommen werden.  Für einen stundengenauen Versand der E-Mails muss der phpBB-interne <strong><a href="https://www.phpbb.com/customise/db/extension/digests_extension/faq/2716">System Cron Dienst</a></strong> eingerichtet und aktiviert werden. Andernfalls werden die Zusammenfassungen der aktuellen und der vorhergehenden Stunden versandt, sobald es wieder Nutzer-Aktivitäten im Board gibt. Weitere Informationen darüber kann man den <a href="https://www.phpbb.com/customise/db/extension/digests_extension/faq">Digests-Extension-FAQ</a> im Forum von phpbb.com entnehmen.',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS'							=> 'Abonnements verwalten',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS_EXPLAIN'					=> 'Hier kann man sehen, wer welche Zusammenfassungen abonniert hat und deren individuelle Einstellungen ändern.<br><br>Mithilfe der Checkbox am Zeilenanfang können einzelne Nutzer mit der Standard-Konfiguration für der E-Mailversand aktiviert werden oder auch aus dem Verteiler rausgenommen werden. Dazu muss man unterhalb der Nutzerliste die entsprechende Auswahl vornehmen, dann "Nur markierte Elemente mit Standardeinstellungen abonnieren" oder "Nur markierte Elemente abbestellen" in der Dropdown-Liste "mit Auswahl" unten rechts auf der Seite auswählen und auf &rsquo;Absenden&rsquo; klicken.',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'				=> 'Massen-Abonnement',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'		=> 'Diese Option erlaubt es Administratoren, die Zustellung von E-Mail-Zusammenstellungen bequem für alle Forumsteilnehmer auf einmal zu aktivieren oder zu deaktivieren. Bei der Aktivierung werden die eingestellten Standardvorgaben verwendet. Wenn ein Nutzer bereits die Zusammenfassung abonniert hat, bleiben seine persönlichen Einstellungen erhalten. Für neue Nutzer werden dabei alle Themenbereiche, für die eine Leseberechtigung besteht, aktiviert. Eine Auswahl ist nicht möglich. <strong>Achtung:</strong> Diese Funktion kann leicht zur Verärgerung einzelner Nutzer führen und ist mit Vorsicht zu verwenden.',
	'ACP_DIGESTS_REPORTS'									=> 'Versandbericht',
	'ACP_DIGESTS_REPORTS_EXPLAIN'							=> 'Auf dieser Seite können E-Mail-Zusammenfassungen, die für verschiedene Zeitpunkte versandt wurden, sowie Leistungsinformationen angesehen werden. Durch Anklicken der Spaltenüberschrift, kann die Sortierung der Tabelle geändert werden. Durch Anklicken des jeweiligen Wertes von "versandt" oder "übersprungen" können weitere Details zum Versand oder zum Überspringen in Bezug auf die Abonnenten der betreffenden Stunde angezeigt werden.',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME'						=> 'Mailer zurücksetzen',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'				=> '',
	'ACP_DIGESTS_SETTINGS'									=> 'Zusammenfassungseinstellungen',
	'ACP_DIGESTS_TEST'										=> 'Manueller Test-Versand',
	'ACP_DIGESTS_TEST_EXPLAIN'								=> 'Diese Funktion ermöglicht den manuellen E-Mail-Versand zur Überprüfung der Grundeinstellungen oder auch zur Fehlersuche. Man kann mit dieser Funktion auch die abonnierten Zusammenfassungen für eine bestimmten Zeitpunkt (erneut) versenden. Dabei wird nur die angegebene Stunde simuliert und jegliche Nutzerdaten bleiben unberührt. <br><br> <strong>Abonnenten, die Zusammenfassungen für die angegebene Zeit erhalten könnten:</strong> %s',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS'						=> 'Benutzer-Standardeinstellungen',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS_EXPLAIN'				=> 'Mit diesen Einstellungen können Administratoren die Standardeinstellungen festlegen, die Benutzer sehen, wenn sie eine E-Mail-Zusammenfassung abonnieren.',

	'LOG_CONFIG_DIGESTS_BAD_DIGEST_TYPE'					=> '<strong>Hinweis: Abonnent %1$s hat als Zusammenfassungsart %2$s eingestellt. Sinnvoller wäre jedoch die &rsquo;Tägliche Zusammenfassung&rsquo;.</strong>',
	'LOG_CONFIG_DIGESTS_BAD_SEND_HOUR'						=> '<strong>Die Sendeuhrzeit von %1$s ist ungültig. Sie lautet %1$d. Der Wert muss immer >= 0 und < 24 sein.</strong>',
	'LOG_CONFIG_DIGESTS_BALANCE_LOAD'						=> '<strong>Umverteilung der Last erfolgreich abgeschlossen</strong>',
	'LOG_CONFIG_DIGESTS_BOARD_DISABLED'						=> '<strong>Der Digests-Mailer wurde aufgerufen, aber auch gleich wieder gestoppt, weil das Board deaktiviert ist</strong>',
	'LOG_CONFIG_DIGESTS_CACHE_CLEARED'						=> '<strong>Der store/ext/phpbbservices/digests-Ordner wurde geleert</strong>',
	'LOG_CONFIG_DIGESTS_CLEAR_REPORT'						=> '<strong>Statistik der gelöschten Versandübersichten</strong>',
	'LOG_CONFIG_DIGESTS_CLEAR_SPOOL_ERROR'					=> '<strong>Es konnten nicht alle Dateien aus dem store/ext/phpbbservices/digests-Ordner entfernt werden. Ursache könnten fehlende Datei-Rechte sein. Alle Dateien sollten &rsquo;publicly writeable&rsquo; sein (777 auf Unix-basierten Systemen).</strong>',
	'LOG_CONFIG_DIGESTS_CREATE_DIRECTORY_ERROR'				=> '<strong>Das Verzeichnis %s konnte nicht angelegt werden. Ursache könnten fehlende Dateirechte sein. Sie sollten auf &rsquo;publicly writeable&rsquo; sein (777 auf Unix-basierten Systemen).</strong>',
	'LOG_CONFIG_DIGESTS_CRITICAL_ERROR'						=> '<strong>Der Digest Mailer hat einen unerwarteten Fehler verursacht.<br>Error number: [%1$s]<br>Error: %2$s<br>Program: %3$s Line: %4$s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_POSTS_CURRENT_HOUR'			=> '<strong>Debug: Subscribers SQL posts query: Date UTC: %s Hour UTC: %s SQL = %s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_SHOULD_RUN'					=> '<strong>Debug: Should run: %s, digest can run after this time: %s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_SQL_CURRENT_HOUR'				=> '<strong>Debug: Subscribers SQL query: Date UTC: %s Hour UTC: %s SQL = %s</strong>',
	'LOG_CONFIG_DIGESTS_EDIT_SUBSCRIBERS'					=> '<strong>Abonnenten bearbeitet</strong>',
	'LOG_CONFIG_DIGESTS_EMAILING_FAILURE'					=> '<strong>E-Mail-Zusammenfassung vom %1$s, %2$d Uhr UTC konnte nicht versandt werden. Ausführungsdauer: %3$s von %4$d maximal erlaubten Sekunden. %5$s MB Speicher wurden verwendet. Insgesamt wurden %6$u E-Mail-Zusammenfassungen versandt, %7$u Zusammenfassungen wurden übersprungen und %8$u Stunden sind vergangen bevor der Mailer abgebrochen worden ist.</strong>',
	'LOG_CONFIG_DIGESTS_EMAILING_SUCCESS'					=> '<strong>Gesendete E-Mail-Zusammenfassungen vom %1$s, %2$d Uhr UTC. Ausführungsdauer: %3$s von %4$d maximal erlaubten Sekunden. %5$s MB Speicher wurden verwendet. Insgesamt wurden %6$u E-Mail-Zusammenfassungen versandt, %7$u Zusammenfassungen wurden übersprungen und %8$u Stunden sind vergangen.</strong>',
	'LOG_CONFIG_DIGESTS_EXCEPTION_ERROR'					=> '<strong>Folgende PHP try/catch exception ist aufgetreten: %s</strong>',
	'LOG_CONFIG_DIGESTS_FILE_CLOSE_ERROR'					=> '<strong>Die Datei %s kann nicht geschlossen werden</strong>',
	'LOG_CONFIG_DIGESTS_FILE_OPEN_ERROR'					=> '<strong>File Handler kann im Verzeichnis %s nicht geöffnet werden. Ursache könnten fehlende Datei-Rechte sein. Alle Dateien sollten &rsquo;publicly writeable&rsquo; sein (777 auf Unix-basierten Systemen).</strong>',
	'LOG_CONFIG_DIGESTS_FILE_WRITE_ERROR'					=> '<strong>Die Datei %s konnte nicht gespeichert werden. Ursache könnten fehlende Datei-Rechte sein. Alle Dateien sollten &rsquo;publicly writeable&rsquo; sein (777 auf Unix-basierten Systemen).</strong>',
	'LOG_CONFIG_DIGESTS_FILTER_ERROR'						=> '<strong>Der Digests-Mailer wurde mit ungültigem user_digest_filter_type = %1$s für %2$s aufgerufen</strong>',
	'LOG_CONFIG_DIGESTS_FORMAT_ERROR'						=> '<strong>Der Digests-Mailer wurde mit ungültigem user_digest_format %1$s für %2$s aufgerufen</strong>',
	'LOG_CONFIG_DIGESTS_GENERAL'							=> '<strong>Allgemeine Konfiguration der E-Mail-Zusammenstellung geändert</strong>',
	'LOG_CONFIG_DIGESTS_HOUR_RUN'							=> '<strong>E-Mail-Zusammenfassung für %1$s um %2$02d UTC gestartet.</strong>',
	'LOG_CONFIG_DIGESTS_INCONSISTENT_DATES'					=> '<strong>Außergewöhnlicher Fehler: Es wurden einzelne Stunden nicht abgearbeitet, weil die letzten Zusammenfassungen bereits erfolgreich versandt worden sind (timestamp %1$d), nachdem die Zeit für die Zusammenfassungserzeugung abgelaufen war (timestamp %2$d).</strong>',
	'LOG_CONFIG_DIGESTS_LOG_END'							=> '<strong>Digests-Mailer beendet. Insgesamt wurden %1$u E-Mail-Zusammenfassungen versandt und %2$u übersprungen.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD'						=> '<strong>E-Mail-Zusammenstellung für %1$s (%2$s) konnte nicht erfolgreich versandt werden</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD_NO_EMAIL'				=> '<strong>E-Mail-Zusammenstellung für %s konnte nicht erfolgreich versandt werden</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD'						=> array(
		1 => '<strong>Eine %1$s E-Mail-Zusammenstellung %2$s %3$s (%4$s) für den %5$s, %6$02d UTC mit %7$d Beitrag und %8$d Privaten Nachricht</strong>',
		2 => '<strong>Eine %1$s E-Mail-Zusammenstellung %2$s %3$s (%4$s) für den %5$s, %6$02d UTC mit %7$d Beiträgen und %8$d Privaten Nachrichten</strong>',
	),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_DISK'				=> '<strong>Es wurde eine E-Mail-Zusammenstellung im Ordner store/phpbbservices/digests/%s abgespeichert. Die Zusammenfassung wurde nicht per E-Mail versandt, sondern dort für Prüfzwecke hinterlegt.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_NO_EMAIL'			=> array(
		1 => '<strong>Eine %1$s E-Mail-Zusammenstellung %2$s %3$s (%4$s) für den %5$s, %6$02d UTC mit %7$d Beitrag und %8$d Privaten Nachricht</strong>',
		2 => '<strong>Eine %1$s E-Mail-Zusammenstellung %2$s %3$s (%4$s) für den %5$s, %6$02d UTC mit %7$d Beiträgen und %8$d Privaten Nachrichten</strong>',
	),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE'						=> '<strong>Die geplante E-Mail-Zusammenstellung für %1$s (%2$s) wurde nicht gesendet, weil es aufgrund von Nutzer-Einstellungen und möglichen Filtervorgaben nichts zu versenden gab.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE_NO_EMAIL'			=> '<strong>Die geplante E-Mail-Zusammenstellung für %s wurde nicht gesendet, weil es aufgrund von Nutzer-Einstellungen und möglichen Filtervorgaben nichts zu versenden gab.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_START'							=> '<strong>Digests-Mailer gestartet</strong>',
	'LOG_CONFIG_DIGESTS_MAILER_RAN_WITH_ERROR'				=> '<strong>Ein Fehler trat während der Verwendung des Digest-Mailers auf. Es können dennoch einige E-Mail-Zusammenfassungen erfolgreich erstellt worden sein.</strong>',
	'LOG_CONFIG_DIGESTS_MANUAL_RUN'							=> '<strong>Mailer manuell gestartet</strong>',
	'LOG_CONFIG_DIGESTS_MESSAGE'							=> '<strong>%s</strong>',	// Used for general debugging, otherwise hard to do in cron mode.
	'LOG_CONFIG_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'			=> '<strong>Eine Massenabonnementsoperation wurde erfolgreich durchgeführt.</strong>',
	'LOG_CONFIG_DIGESTS_NO_ALLOWED_FORUMS'					=> '<strong>Hinweis: Abonnent %s besitzt bisher keinerlei Forumsrechte. Die Zusammenfassungen werden deshalb leer bleiben, es sei denn es existieren verpflichtende Themenbereiche.</strong>',
	'LOG_CONFIG_DIGESTS_NO_BOOKMARKS'						=> '<strong>Hinweis: Abonnent %s hat &rsquo;Nur Lesezeichenthemen&rsquo; ausgewählt, aber noch keine eigenen Lesezeichen erstellt.</strong>',
	'LOG_CONFIG_DIGESTS_NO_RESOURCES'						=> '<strong>Mailer unerwartet abgebrochen. Die Systemressourcen reichen nicht aus, um weitere E-Mail-Zusammenfassungen erzeugen zu können. Der Fehler wurde beim Erstellen einer Zusammenfassung für “%1$s” für %2$d UTC ausgelöst. Möglicherweise muss die Hosting-Umgebung angepasst werden, um alle E-Mail-Zusammenfassungen zuverlässig versenden zu können.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_ERROR'					=> '<strong>Eine vom Administrator erzeugte Zusammenfassungungsbenachrichtigung könnte nicht an folgen adresse versendet werden: %s</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_SENT'					=> '<strong>Es wurde eine E-Mail an %1$s (%2$s) versandt, die besagt, dass die Zusammenfassungseinstellungen verändert wurden.</strong>',
	'LOG_CONFIG_DIGESTS_REGULAR_CRON_RUN'					=> '<strong>Mailer durch internen phpBB-Crondienst gestartet.</strong>',
	'LOG_CONFIG_DIGESTS_RESET_CRON_RUN_TIME'				=> '<strong>Letzter Versandzeitpunkt wurde zurückgesetzt.</strong>',
	'LOG_CONFIG_DIGESTS_RUN_TOO_SOON'						=> '<strong>Weniger als eine Stunde ist seit dem letzten Start des Zusammenfassungsversandes vergangen. Die Ausführung wurde deshalb abgebrochen.</strong>',
	'LOG_CONFIG_DIGESTS_SIMULATION_DATE_TIME'				=> '<strong>Ein Administrator hat E-Mail-Zusammenstellungen für %s Board-Zeit erzeugt.</strong>',
	'LOG_CONFIG_DIGESTS_SORT_BY_ERROR'						=> '<strong>Der Digest-Mailer mit ungültigem user_digest_sortby = %s für %s aufgerufen</strong>',
	'LOG_CONFIG_DIGESTS_SYSTEM_CRON_RUN'					=> '<strong>Mailer durch externen System-Cronjob gestartet.</strong>',
	'LOG_CONFIG_DIGESTS_TIMEZONE_ERROR'						=> '<strong>Die user_timezone "%1$s" für Nutzer "%2$s" ist fehlerhaft. Die Zeitzone lautet "%3$s". Bitte den Nutzer seine Zeitenzoneneinstellung im UCP zu korrigieren. Siehe dazu auch die Liste erlaubter Einstellungen unter http://php.net/manual/de/timezones.php.</strong>',
	'LOG_CONFIG_DIGESTS_USER_DEFAULTS'						=> '<strong>Standard-Nutzereinstellungen geändert</strong>',
));
