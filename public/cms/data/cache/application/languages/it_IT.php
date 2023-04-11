<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'User',
      'action' => 'Action',
      'createdAt' => 'Data',
      'target' => 'Target',
      'targetType' => 'Target Type',
      'authToken' => 'Token di autenticazione',
      'ipAddress' => 'IP Address',
      'authLogRecord' => 'Record di log auth',
    ),
    'links' => 
    array (
      'authToken' => 'Token di autenticazione',
      'authLogRecord' => 'Record di log auth',
      'user' => 'User',
      'target' => 'Target',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Only My',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Read',
        'update' => 'Aggiorna',
        'delete' => 'Elimina',
        'create' => 'Crea',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Abilitato',
      'Disabled' => 'Disabilitato',
      'System' => 'Sistema',
      'Users' => 'Utenti',
      'Email' => 'Email',
      'Data' => 'Dati',
      'Customization' => 'Personalizzazione',
      'Available Fields' => 'Campi disponibili',
      'Layout' => 'Layout',
      'Entity Manager' => 'Gestione Entità',
      'Add Panel' => 'Aggiungi pannello',
      'Add Field' => 'Aggiungi campo',
      'Settings' => 'Impostazioni',
      'Scheduled Jobs' => 'Jobs pianificati',
      'Upgrade' => 'Aggiornamento',
      'Clear Cache' => 'Svuota cache',
      'Rebuild' => 'Ricostruisci',
      'Teams' => 'Teams',
      'Roles' => 'Ruoli',
      'Portal' => 'Portale',
      'Portals' => 'Portali',
      'Portal Roles' => 'Ruoli portale',
      'Portal Users' => 'Utenti portale',
      'API Users' => 'API Utenti',
      'Outbound Emails' => 'Email in uscita',
      'Group Email Accounts' => 'Gruppi accounts email',
      'Personal Email Accounts' => 'Account email personale',
      'Inbound Emails' => 'Email in arrivo',
      'Email Templates' => 'Modelli Email',
      'Import' => 'Importa',
      'Layout Manager' => 'Gestore Layout',
      'User Interface' => 'Interfaccia Utente',
      'Auth Tokens' => 'Tokens di autenticazione',
      'Auth Log' => 'Auth log',
      'Authentication' => 'Autenticazione',
      'Currency' => 'Valuta',
      'Integrations' => 'Integrazioni',
      'Extensions' => 'Estensioni',
      'Upload' => 'Caricamento',
      'Installing...' => 'Installazione...',
      'Upgrading...' => 'Aggiornamento...',
      'Upgraded successfully' => 'Aggiornamento completato',
      'Installed successfully' => 'Installazione completata',
      'Ready for upgrade' => 'Pronto per l\'aggiornamento',
      'Run Upgrade' => 'Esegui aggiornamento',
      'Install' => 'Installa',
      'Ready for installation' => 'Pronto per l\'installazione',
      'Uninstalling...' => 'Disinstallazione...',
      'Uninstalled' => 'Non installato',
      'Create Entity' => 'Crea Entità',
      'Edit Entity' => 'Modifica Entità',
      'Create Link' => 'Crea Link',
      'Edit Link' => 'Modifica Link',
      'Notifications' => 'Notifiche',
      'Jobs' => 'Compiti',
      'Reset to Default' => 'Ripristina alle condizioni di default',
      'Email Filters' => 'Filtri email',
      'Action History' => 'Storico azioni',
      'Label Manager' => 'Gestione etichetta',
      'Template Manager' => 'Template Manager',
      'Lead Capture' => 'Cattura Lead',
      'Attachments' => 'Allegati',
      'System Requirements' => 'System Requirements',
      'PHP Settings' => 'Impostazioni PHP',
      'Database Settings' => 'Impostazioni Database',
      'Permissions' => 'Permessi',
      'Success' => 'Successo',
      'Fail' => 'Fallito',
      'is recommended' => 'E\' raccomandato',
      'extension is missing' => 'extension is missing',
    ),
    'layouts' => 
    array (
      'list' => 'Elenco',
      'detail' => 'Dettaglio',
      'listSmall' => 'Elenco (ridotto)',
      'detailSmall' => 'Dettaglio (ridotto)',
      'detailPortal' => 'Dettaglio (Portale)',
      'detailSmallPortal' => 'Dettaglio (Piccolo, Portale)',
      'listSmallPortal' => 'Lista (Piccolo, Portale)',
      'listPortal' => 'Lista (Portale)',
      'relationshipsPortal' => 'Pannello relazioni (Portale)',
      'filters' => 'Filtri di ricerca',
      'massUpdate' => 'Aggiornamento massivo',
      'relationships' => 'Pannelli relazioni',
      'sidePanelsDetail' => 'Pannelli laterali (dettaglio)',
      'sidePanelsEdit' => 'Pannelli laterali (modifica)',
      'sidePanelsDetailSmall' => 'Pannelli laterali (dettaglio ridotto)',
      'sidePanelsEditSmall' => 'Pannelli laterali (modifica ridotto)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Converti Lead',
      'listForAccount' => 'Elenco (per Account)',
      'listForContact' => 'Lista (per contatto)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Indirizzi',
      'array' => 'Array',
      'foreign' => 'Esterna',
      'duration' => 'Durata',
      'password' => 'Password',
      'personName' => 'Nome persona',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Boolean',
      'currency' => 'Valuta',
      'currencyConverted' => 'Valuta (convertita)',
      'date' => 'Data',
      'datetime' => 'Data-Ora',
      'datetimeOptional' => 'Data/Data-ora',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiplo',
      'linkParent' => 'Link Parent',
      'phone' => 'Telefono',
      'text' => 'Testo',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'File',
      'image' => 'Immagine',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Multi Allegato',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Range Currency',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Mappa',
      'number' => 'Numero',
      'colorpicker' => 'Scelta colore',
      'jsonArray' => 'Array Json',
      'jsonObject' => 'Oggetto Json',
    ),
    'fields' => 
    array (
      'type' => 'Tipo',
      'name' => 'Nome',
      'label' => 'Etichetta',
      'tooltipText' => 'Testo suggerimento',
      'required' => 'Richiesto',
      'default' => 'Default',
      'maxLength' => 'Lunghezza Massima',
      'options' => 'Opzioni',
      'after' => 'Dopo (campo)',
      'before' => 'Prima (campo)',
      'link' => 'Link',
      'field' => 'Campo',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Traduzione',
      'previewSize' => 'Anteprima dimensione',
      'noEmptyString' => 'Una stringa vuota non è consentita',
      'defaultType' => 'Tipo di Default',
      'seeMoreDisabled' => 'Disabilitare Taglio Testo',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Elenco Entità',
      'isSorted' => 'Ordinato (alfabeticamente)',
      'audited' => 'Sottoposto a Revisione Contabile',
      'trim' => 'Trim',
      'height' => 'Altezza (px)',
      'minHeight' => 'Altezza min. (px)',
      'provider' => 'Provider',
      'typeList' => 'Elenco Tipi',
      'rows' => 'Numero di righe dell\'area Testuale',
      'lengthOfCut' => 'Lunghezza del taglio',
      'sourceList' => 'Elenco Sorgenti',
      'prefix' => 'Prefisso',
      'nextNumber' => 'Prossimo Numero',
      'padLength' => 'Lunghezza Pad',
      'disableFormatting' => 'Disabilita formattazione',
      'dynamicLogicVisible' => 'Condizioni per rendere il campo visibile',
      'dynamicLogicReadOnly' => 'Condizioni per rendere il campo di sola lettura',
      'dynamicLogicRequired' => 'Condizioni per rendere il campo obbligatorio',
      'dynamicLogicOptions' => 'Opzioni condizionali',
      'probabilityMap' => 'Probabilità della fase (%)',
      'readOnly' => 'Sola lettura',
      'maxFileSize' => 'Dimensione massima del file (Mb)',
      'isPersonalData' => 'Sono dati personali',
      'useIframe' => 'Usa iframe',
      'useNumericFormat' => 'Usa formato numerico',
      'strip' => 'striscia',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Disable Inline Edit',
      'allowCustomOptions' => 'Allow Custom Options',
      'displayAsLabel' => 'Display as Label',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM verrà aggiornato alla versione <strong>{version}</strong>. Si raccomanda un pò di pazienza perché questo richiede tempo.',
      'upgradeDone' => 'EspoCRM è stato aggiornato alla versione <strong>{version}</strong>.',
      'upgradeBackup' => 'Si raccomanda di eseguire un backup dei file e dei dati di EspoCRM prima di eseguire l\'aggiornamento.',
      'thousandSeparatorEqualsDecimalMark' => 'Il separatore delle migliaia non può essere uguale al separatore decimale.',
      'userHasNoEmailAddress' => 'L\'utente non ha un indirizzo email.',
      'selectEntityType' => 'Scegli il tipo di entità dal menu di sinistra.',
      'selectUpgradePackage' => 'Seleziona il pacchetto di aggiornamento',
      'downloadUpgradePackage' => 'Scarica il pacchetto di aggiornamento <a href="{url}">da qui</a>.',
      'selectLayout' => 'Scegli il layout dal menu di sinistra e modificalo.',
      'selectExtensionPackage' => 'Seleziona pacchetto di estensioni',
      'extensionInstalled' => 'L\'estensione {name} {version} è stata installata',
      'installExtension' => 'L\'estensione {name} {version} è pronto per essere installata',
      'cronIsNotConfigured' => 'I lavori pianificati non sono in esecuzione. Pertanto, le e-mail in entrata, le notifiche e i promemoria non funzionano. Seguire le [istruzioni] (https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) per impostare il cron job.',
      'newVersionIsAvailable' => 'Una nuova versione di EspoCRM {latestVersion} è disponibile.',
      'newExtensionVersionIsAvailable' => 'Nuova {extensionName} versione {latestVersion} è disponibile.
',
      'uninstallConfirmation' => 'Sei sicuro di voler disinstallare l\'estensione?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Impostazioni di sistema dell\'applicazione.',
      'scheduledJob' => 'Jobs eseguiti da Cron.',
      'upgrade' => 'Aggiorna EspoCRM.',
      'clearCache' => 'Pulisci la cache del backend.',
      'rebuild' => 'Ricostruisci backend e pulisci cache.',
      'users' => 'Gestione utenti.',
      'teams' => 'Gestione teams.',
      'roles' => 'Gestione ruoli.',
      'portals' => 'Portals management.',
      'portalRoles' => 'Roles for portal.',
      'portalUsers' => 'Utenti del portale.',
      'outboundEmails' => 'Impostazioni SMTP per le email in uscita.',
      'groupEmailAccounts' => 'Group IMAP email accounts. Email import and Email-to-Case.',
      'personalEmailAccounts' => 'Account di posta elettronica .',
      'emailTemplates' => 'Modelli per email di uscita.',
      'import' => 'Importa dati da file CSV.',
      'layoutManager' => 'Personalizza layouts (elenco, dettaglio, modifica, ricerca, aggiornamenti massivi).',
      'entityManager' => 'Crea e modifica entità personalizzate. Gestisci campi e relazioni.',
      'userInterface' => 'Configura Interfaccia.',
      'authTokens' => 'Sessioni autorizzate attive. indirizzo IP e data di ultimo accesso .',
      'authentication' => 'Impostazioni di autenticazione.',
      'currency' => 'Impostazioni di Valuta e tassi .',
      'extensions' => 'Installa o Disinstalla le estensioni.',
      'integrations' => 'Integrazione con servizi di terze parti.',
      'notifications' => 'Impostazioni delle notifiche via email ed in-app.',
      'inboundEmails' => 'Impostazioni per le email in arrivo.',
      'emailFilters' => 'I messaggi email che corrispondono al filtro specificato non verranno importati.',
      'actionHistory' => 'Registro delle azioni utente.',
      'labelManager' => 'Personalizza etichette dell\'applicazione',
      'templateManager' => 'Customize message templates.',
      'authLog' => 'Cronologia login.',
      'leadCapture' => 'Punti di ingresso API per Web-to-Lead.',
      'attachments' => 'Tutti gli allegati di file memorizzati nel sistema.',
      'systemRequirements' => 'System Requirements for EspoCRM.',
      'apiUsers' => 'Separate users for integration purposes.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Small',
        'small' => 'Small',
        'medium' => 'Medium',
        'large' => 'Large',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'AND',
      'or' => 'OR',
      'not' => 'NOT',
    ),
    'systemRequirements' => 
    array (
      'requiredPhpVersion' => 'PHP Version',
      'requiredMysqlVersion' => 'MySQL Version',
      'requiredMariadbVersion' => 'MariaDB version',
      'host' => 'Host Name',
      'dbname' => 'Database Name',
      'user' => 'User Name',
      'writable' => 'Writable',
      'readable' => 'Readable',
    ),
    'templates' => 
    array (
      'accessInfo' => 'Access Info',
      'accessInfoPortal' => 'Access Info for Portals',
      'assignment' => 'Assignment',
      'mention' => 'Mention',
      'noteEmailRecieved' => 'Note about Recieved Email',
      'notePost' => 'Note about Post',
      'notePostNoParent' => 'Note about Post (no Parent)',
      'noteStatus' => 'Note about Status Update',
      'passwordChangeLink' => 'Password Change Link',
      'invitation' => 'Invitation',
      'reminder' => 'Reminder',
    ),
  ),
  'ApiUser' => 
  array (
    'labels' => 
    array (
      'Create ApiUser' => 'Create API User',
    ),
  ),
  'Attachment' => 
  array (
    'fields' => 
    array (
      'role' => 'Ruolo',
      'related' => 'Collegato',
      'file' => 'File',
      'type' => 'Tipo',
      'field' => 'Campo',
      'sourceId' => 'Sorgente ID',
      'storage' => 'Memorizzazione',
      'size' => 'Dimensione (byte)',
    ),
    'options' => 
    array (
      'role' => 
      array (
        'Attachment' => 'Allegato',
        'Inline Attachment' => 'Allegato in linea',
        'Import File' => 'Importa file',
        'Export File' => 'Esporta',
        'Mail Merge' => 'Stampa unione',
        'Mass Pdf' => 'PDF di massa',
      ),
    ),
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Inserisci documento',
    ),
    'presetFilters' => 
    array (
      'orphan' => 'Orfano',
    ),
  ),
  'AuthLogRecord' => 
  array (
    'fields' => 
    array (
      'username' => 'Nome utente',
      'ipAddress' => 'Indirizzo IP',
      'requestTime' => 'Orario richiesta',
      'createdAt' => 'Richiesto a',
      'isDenied' => 'Viene negato',
      'denialReason' => 'Negazione ragione',
      'portal' => 'Portale',
      'user' => 'Utente',
      'authToken' => 'Token autorizzazione creato',
      'requestUrl' => 'Url di richiesta',
      'requestMethod' => 'Metodo di richiesta',
      'authTokenIsActive' => 'Il token di autorizzazione è attivo',
      'authenticationMethod' => 'Authentication Method',
    ),
    'links' => 
    array (
      'authToken' => 'Token di autorizzazione creato',
      'user' => 'Utente',
      'portal' => 'Portale',
      'actionHistoryRecords' => 'Cronologia delle azioni',
    ),
    'presetFilters' => 
    array (
      'denied' => 'Negato',
      'accepted' => 'Accettato',
    ),
    'options' => 
    array (
      'denialReason' => 
      array (
        'CREDENTIALS' => 'Credenziali non valide',
        'INACTIVE_USER' => 'Utente non attivo',
        'IS_PORTAL_USER' => 'Utente del portale',
        'IS_NOT_PORTAL_USER' => 'Non è un utente del portale',
        'USER_IS_NOT_IN_PORTAL' => 'L\'utente non è appartenente al portale',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Utente',
      'ipAddress' => 'indirizzi IP',
      'lastAccess' => 'Data ultimo accesso',
      'createdAt' => 'Data accesso',
      'isActive' => 'Attivo',
      'portal' => 'Portale',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Storico azioni',
    ),
    'presetFilters' => 
    array (
      'active' => 'Attivo',
      'inactive' => 'Inattivo',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Imposta come inattivo',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Imposta come inattivo',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Titolo',
      'dateFrom' => 'Data da',
      'dateTo' => 'Data a',
      'autorefreshInterval' => 'Intervallo di Aggiornamento automatico',
      'displayRecords' => 'Visualizzare i record',
      'isDoubleHeight' => 'Altezza 2x',
      'mode' => 'Modo',
      'enabledScopeList' => 'Cose da visualizzare',
      'users' => 'Utenti',
      'entityType' => 'Tipo di entità',
      'primaryFilter' => 'Filtro primario',
      'boolFilterList' => 'Filtri ulteriori',
      'sortBy' => 'Ordina (campo)',
      'sortDirection' => 'Ordina (direzione)',
      'expandedLayout' => 'Layout',
      'dateFilter' => 'Filtro data',
      'futureDays' => 'Prossimi X giorni',
      'useLastStage' => 'Gruppo per ultimo stadio raggiunto',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Settimana (agenda)',
        'basicWeek' => 'Settimana',
        'month' => 'Mese',
        'basicDay' => 'Giorno',
        'agendaDay' => 'Giorno (agenda)',
        'timeline' => 'Sequenza Temporale',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Seleziona il tipo di entità nelle opzioni del dashlet.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Campo',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Uguale',
        'notEquals' => 'Non uguale',
        'greaterThan' => 'Maggiore di',
        'lessThan' => 'Minore di',
        'greaterThanOrEquals' => 'Maggiore o uguale',
        'lessThanOrEquals' => 'Minore di o uguale a',
        'in' => 'In',
        'notIn' => 'Non in',
        'inPast' => 'Nel passato',
        'inFuture' => 'Futuro',
        'isToday' => 'Oggi',
        'isTrue' => 'Vero',
        'isFalse' => 'Falso',
        'isEmpty' => 'Vuoto',
        'isNotEmpty' => 'Non vuoto',
        'contains' => 'Contiene',
        'notContains' => 'Non contiene',
        'has' => 'Contiene',
        'notHas' => 'Non contiene',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome (Soggetto)',
      'parent' => 'Genitore',
      'status' => 'Stato',
      'dateSent' => 'Data invio',
      'from' => 'Da',
      'to' => 'A',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Rispondi a',
      'replyToString' => 'Rispondi da (String)',
      'personStringData' => 'Person String Data',
      'isHtml' => 'È Html',
      'body' => 'Corpo',
      'bodyPlain' => 'Corpo (semplice)',
      'subject' => 'Soggetto',
      'attachments' => 'Allegato',
      'selectTemplate' => 'Seleziona Modello',
      'fromEmailAddress' => 'Indirizzo mittente',
      'toEmailAddresses' => 'A Email Destinatario',
      'emailAddress' => 'Indirizzo email',
      'deliveryDate' => 'Data di consegna',
      'account' => 'Account',
      'users' => 'Utenti',
      'replied' => 'Risposta',
      'replies' => 'Risposte',
      'isRead' => 'Letto',
      'isNotRead' => 'Non letto',
      'isImportant' => 'Importante',
      'isReplied' => 'Risposto',
      'isNotReplied' => 'Non Risposto',
      'isUsers' => 'Utente',
      'inTrash' => 'Nel Cestino',
      'sentBy' => 'Inviato da',
      'folder' => 'Cartella',
      'inboundEmails' => 'Gruppo di Account',
      'emailAccounts' => 'Account Personale',
      'hasAttachment' => 'Ha allegato',
      'assignedUsers' => 'Utenti assegnati',
      'ccEmailAddresses' => 'Indirizzo email CC',
      'bccEmailAddresses' => 'CCN Email Destinatario',
      'replyToEmailAddresses' => 'Rispondi-A Indirizzo email',
      'messageId' => 'ID messaggio',
      'messageIdInternal' => 'ID messaggio (Interno)',
      'folderId' => 'ID Cartella',
      'fromName' => 'DA Nome',
      'fromString' => 'DA Stringa',
      'fromAddress' => 'From Address',
      'isSystem' => 'È Sistema',
    ),
    'links' => 
    array (
      'replied' => 'Risposto',
      'replies' => 'Risposte',
      'inboundEmails' => 'Gruppi di Account',
      'emailAccounts' => 'Account Personali',
      'assignedUsers' => 'Utenti assegnati',
      'sentBy' => 'Inviato da',
      'attachments' => 'Allegati',
      'fromEmailAddress' => 'Indirizzo email mittente',
      'toEmailAddresses' => 'A Indirizzi email',
      'ccEmailAddresses' => 'CC Indirizzi Email',
      'bccEmailAddresses' => 'CCN Indirizzi email',
      'replyToEmailAddresses' => 'Risposta-A Indirizzo Email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Bozza',
        'Sending' => 'Invio',
        'Sent' => 'Inviato',
        'Archived' => 'Archiviato',
        'Received' => 'Ricevuto',
        'Failed' => 'Fallito',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Archivio email',
      'Archive Email' => 'Archivio email',
      'Compose' => 'Comporre',
      'Reply' => 'Rispondi',
      'Reply to All' => 'Rispondi a tutti',
      'Forward' => 'Inoltrare',
      'Original message' => 'Messaggio originale',
      'Forwarded message' => 'Messaggio inoltrato',
      'Email Accounts' => 'Accounts email personali',
      'Inbound Emails' => 'Gruppo di accounts email',
      'Email Templates' => 'Modelli email',
      'Send Test Email' => 'Invia mail di prova',
      'Send' => 'Invio',
      'Email Address' => 'Indirizzo email',
      'Mark Read' => 'Contrassegna come letto',
      'Sending...' => 'Invio...',
      'Save Draft' => 'Salva Bozza',
      'Mark all as read' => 'Contrassegna tutti come letto',
      'Show Plain Text' => 'Visualizza testo normale',
      'Mark as Important' => 'Contrassegna come Importante',
      'Unmark Importance' => 'Deselezione come Importante',
      'Move to Trash' => 'Sposta nel Cestino',
      'Retrieve from Trash' => 'Ripristina da Cestino',
      'Move to Folder' => 'Sposta nella Cartella',
      'Filters' => 'Filtri',
      'Folders' => 'Cartelle',
      'Create Lead' => 'Crea Lead',
      'Create Contact' => 'Crea Contatto',
      'Add to Contact' => 'Aggiungi al contatto',
      'Add to Lead' => 'Aggiungi all\'iniziativa',
      'Create Task' => 'Crea Compito',
      'Create Case' => 'Crea Caso',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Nessun setup per l\'SMTP. {link}.',
      'testEmailSent' => 'L\'email di prova è stata inviata',
      'emailSent' => 'L\'email è stata inviata',
      'savedAsDraft' => 'Salvato come bozza.',
      'confirmInsertTemplate' => 'Il corpo dell\'email andrà perso. Sei sicuro di voler inserire il modello?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Inviato',
      'archived' => 'Archiviato',
      'inbox' => 'Inbox',
      'drafts' => 'Bozze',
      'trash' => 'Cestino',
      'important' => 'Importante',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Contrassegna come Letto',
      'markAsNotRead' => 'Contrassegna come non Letto',
      'markAsImportant' => 'Contrassegna come Importante',
      'markAsNotImportant' => 'Deseleziona come Importante',
      'moveToTrash' => 'Sposta nel Cestino',
      'moveToFolder' => 'Sposta nella Cartella',
      'retrieveFromTrash' => 'Recupera dal Cestino',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Password',
      'port' => 'Porta',
      'monitoredFolders' => 'Cartelle Monitorate',
      'ssl' => 'SSL',
      'fetchSince' => 'Da Raggiungere',
      'emailAddress' => 'Indirizzo email',
      'sentFolder' => 'Cartella Inviate',
      'storeSentEmails' => 'Emailinviate',
      'keepFetchedEmailsUnread' => 'Mantieni le email non lette',
      'emailFolder' => 'Sposta nella Cartella',
      'useImap' => 'Scarica email',
      'useSmtp' => 'Usa SMTP',
      'smtpHost' => 'Host SMTP',
      'smtpPort' => 'Porta SMTP',
      'smtpAuth' => 'Autenticazione SMTP',
      'smtpSecurity' => 'Sicurezza SMTP',
      'smtpUsername' => 'Nome utente SMTP',
      'smtpPassword' => 'Password SMTP',
    ),
    'links' => 
    array (
      'filters' => 'Filtri',
      'emails' => 'Emails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Crea Account email',
      'IMAP' => 'IMAP',
      'Main' => 'Principale',
      'Test Connection' => 'Test della connessione',
      'Send Test Email' => 'Invia email di prova',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Impossibile connettersi al server IMAP',
      'connectionIsOk' => 'La Connessione è Ok',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Cartelle multiple devono essere separate dalla virgola.

È possibile aggiungere una cartella "Inviata" per sincronizzare le email inviate da un client di posta elettronica esterno.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server. Email Address field should match the address emails will be sent from.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primario',
      'Opted Out' => 'Rinuncia',
      'Invalid' => 'Non valido',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Da',
      'to' => 'A',
      'subject' => 'Soggetto',
      'bodyContains' => 'Contenuto del Corpo',
      'action' => 'Azione',
      'isGlobal' => 'Globale',
      'emailFolder' => 'Cartella',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Crea un filtro per le email',
      'Emails' => 'Emails',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignora',
        'Move to Folder' => 'Sposta nella Cartella',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Dai al filtro un nome descrittivo.',
      'subject' => 'Utilizzo del carattere jolly *:

testo* - inizia con il testo,
*testo* - contiene il testo,
*testo - termina con il testo.',
      'bodyContains' => 'Il corpo del messaggio contiene una delle parole, o frasi, specificate',
      'from' => 'Messaggi di posta elettronica inviati dall\'indirizzo specificato. Lascia vuoto se non necessario. È possibile utilizzare caratteri jolly *.',
      'to' => 'Messaggi di posta elettronica inviati all\'indirizzo specificato . Lascia vuoto se non necessario . È possibile utilizzare caratteri jolly *.',
      'isGlobal' => 'Applica questo filtro a tutte le email in arrivo al sistema.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Salta Notifica',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Crea Cartella',
      'Manage Folders' => 'Gestione Cartelle',
      'Emails' => 'Emails',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'isHtml' => 'Is Html',
      'body' => 'Corpo',
      'subject' => 'Soggetto',
      'attachments' => 'Allegato',
      'insertField' => 'Inserisci Campo',
      'oneOff' => 'One-off',
      'category' => 'Categoria',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Crea Modello email',
      'Info' => 'Info',
      'Available placeholders' => 'Segnaposto disponibili',
    ),
    'messages' => 
    array (
      'infoText' => 'Segna posti disponibili:

{optOutUrl} &#8211; URL per link di cancellazione;

{optOutLink} &#8211; un link di cancellazione.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Controllare se avete intenzione di utilizzare questo modello una sola volta. Per esempio. per Email Massive.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Attuale',
    ),
    'placeholderTexts' => 
    array (
      'today' => 'Today\'s date',
      'now' => 'Current date & time',
      'currentYear' => 'Current Year',
      'optOutUrl' => 'URL per un link di cancellazione dell\'iscrizione',
      'optOutLink' => 'un link di cancellazione dell\'iscrizione',
    ),
  ),
  'EmailTemplateCategory' => 
  array (
    'labels' => 
    array (
      'Create EmailTemplateCategory' => 'Crea categoria',
      'Manage Categories' => 'Gestisci categoria',
      'EmailTemplates' => 'Modelli email',
    ),
    'fields' => 
    array (
      'order' => 'Ordina',
      'childList' => 'Elenco child',
    ),
    'links' => 
    array (
      'emailTemplates' => 'Modelli email',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Campi',
      'Relationships' => 'Relazioni',
      'Schedule' => 'Programma',
      'Log' => 'Log',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'type' => 'Tipo',
      'labelSingular' => 'Etichetta Singola',
      'labelPlural' => 'Etichetta Multipla',
      'stream' => 'Flusso attività',
      'label' => 'Etichetta',
      'linkType' => 'Link Type',
      'entityForeign' => 'Entità esterna',
      'linkForeign' => 'Collegamento Esterno',
      'link' => 'Link',
      'labelForeign' => 'Label Esterna',
      'sortBy' => 'Impostazione predefinita ( campo)',
      'sortDirection' => 'Impostazione predefinita ( indirizzo)',
      'relationName' => 'Tab Secono Nome',
      'linkMultipleField' => 'Collegamento Multiplo ai Campi',
      'linkMultipleFieldForeign' => 'Collegamento Esterno Link Multiplo ai Campi',
      'disabled' => 'Disabilitato',
      'textFilterFields' => 'Filtro testuale Campi',
      'audited' => 'Controllato',
      'auditedForeign' => 'Controllato esternamente',
      'statusField' => 'Campo di stato',
      'beforeSaveCustomScript' => 'Prima di salvare lo script personalizzato',
      'color' => 'Colore',
      'kanbanViewMode' => 'Vista Kanban',
      'kanbanStatusIgnoreList' => 'Gruppi ignorati in vista Kanban',
      'iconClass' => 'Icona',
      'fullTextSearch' => 'Ricerca tutto il testo',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Nessun',
        'Base' => 'Base',
        'Person' => 'Persone',
        'CategoryTree' => 'Albero delle Categorie',
        'Event' => 'Evento',
        'BasePlus' => 'Base Plus',
        'Company' => 'Compagnia',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Molti-a-Molti',
        'oneToMany' => 'Uno-a-Molti',
        'manyToOne' => 'Molti-a-Uno',
        'parentToChildren' => 'Padre-a-Figlio',
        'childrenToParent' => 'Figlio-a-Padre',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Ascendente',
        'desc' => 'Discendente',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'L\'Entità è stata creata',
      'linkAlreadyExists' => 'Nome del link errato.',
      'linkConflict' => 'Nome conflitto : link o campo con lo stesso nome già esistente',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Gli aggiornamenti a questo campo verranno registrati nel flusso attività.',
      'textFilterFields' => 'Campi utilizzati dalla ricerca testuale.',
      'stream' => 'Se l\'entità ha un flusso attività.',
      'disabled' => 'Spunta, se non hai bisogno di questa entità nel tuo sistema.',
      'linkAudited' => 'La creazione di record correlati ed il collegamento con il record esistente verranno registrati nelle attività.',
      'linkMultipleField' => 'Collegare un campo multiplo è una via pratica per modificare le relazioni. Non utilizzarlo se prevedi un elevato numero di record correlati.',
      'entityType' => 'Base Plus - dispone di pannelli Attività, Storia e Compiti.

Evento - disponibile nei pannelli Calendario ed Attività.',
      'fullTextSearch' => 'È necessario eseguire la ricostruzione.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Esporta tutti i campi',
      'fieldList' => 'Elenco campi',
      'format' => 'Formato',
    ),
    'options' => 
    array (
      'format' => 
      array (
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'version' => 'Versione',
      'description' => 'Descrizione',
      'isInstalled' => 'Installato',
      'checkVersionUrl' => 'Un URL per controllare le nuove versioni',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Disinstallato',
      'Install' => 'Installa',
    ),
    'messages' => 
    array (
      'uninstalled' => 'L\'Estensione {nome} è stata disinstallata',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Connettersi',
      'Connected' => 'Connesso',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Logica dinamica',
      'Name' => 'Nome',
      'Label' => 'Etichetta',
      'Type' => 'Tipo',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Nessun',
        'javascript: return this.dateTime.getNow(1);' => 'Ora',
        'javascript: return this.dateTime.getNow(5);' => 'Ora (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Ora (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Ora (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 ora',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 giorno',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 giorni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 giorni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 giorni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 giorni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 giorni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 settimana',
      ),
      'dateDefault' => 
      array (
        '' => 'Nessun',
        'javascript: return this.dateTime.getToday();' => 'Oggi',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 giorno',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 giorni',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 settimana',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 settimane',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 settimane',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mese',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 mesi',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 anno',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Gli aggiornamenti verranno registrati nel flusso attivita.',
      'required' => 'Il campo sarà obbligatorio. Non potrà essere vuoto.',
      'default' => 'Sarà impostato al valore di default durante la creazione.',
      'min' => 'Valore minimo accettabile.',
      'max' => 'Valore massimo accettabile.',
      'seeMoreDisabled' => 'Se non selezionato, i testi lunghi saranno tagliati.',
      'lengthOfCut' => 'Lunghezza del testo prima del taglio.',
      'maxLength' => 'Lunghezza massima accettabile del testo.',
      'before' => 'Il valore della data deve essere precedente al valore della data del campo specificato.',
      'after' => 'Il valore della data deve essere successivo al valore della data del campo specificato.',
      'readOnly' => 'Il valore del campo non può essere specificato dall\'utente. Ma può essere calcolato da una formula.',
      'maxFileSize' => 'Se vuoto o 0 allora nessun limite.',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Via',
        'city' => 'Città',
        'state' => 'Provincia',
        'country' => 'Nazione',
        'postalCode' => 'Codice postale',
        'map' => 'Mappa',
      ),
      'personName' => 
      array (
        'salutation' => 'Saluto',
        'first' => 'Primo',
        'last' => 'Ultimo',
      ),
      'currency' => 
      array (
        'converted' => '(Convertito)',
        'currency' => '(Valuta)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Data',
      ),
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'Utente',
      'Team' => 'Team',
      'Role' => 'Ruolo',
      'EmailTemplate' => 'Modello email',
      'EmailTemplateCategory' => 'Categorie Modelli email',
      'EmailAccount' => 'Account email personale',
      'EmailAccountScope' => 'Account email personale',
      'OutboundEmail' => 'Email in uscita',
      'ScheduledJob' => 'Job Schedulato',
      'ExternalAccount' => 'External Account',
      'Extension' => 'Estensione',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Gruppo Account Email',
      'Stream' => 'Flusso attività',
      'Import' => 'Importa',
      'Template' => 'Modello',
      'Job' => 'Job',
      'EmailFilter' => 'Filtri Email',
      'Portal' => 'Portale',
      'PortalRole' => 'Ruolo Portale',
      'Attachment' => 'Allegato',
      'EmailFolder' => 'Casella Email',
      'PortalUser' => 'Utente portale',
      'ApiUser' => 'API User',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Richiesta di cambio password',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Token di autenticazione',
      'UniqueId' => 'ID univoco',
      'LastViewed' => 'Ultima visualizzazione',
      'Settings' => 'Impostazioni',
      'FieldManager' => 'Gestione campo',
      'Integration' => 'Integrazione',
      'LayoutManager' => 'Gestione layout',
      'EntityManager' => 'Gestione entità',
      'Export' => 'Esporta',
      'DynamicLogic' => 'Logica dinamica',
      'DashletOptions' => 'Opzioni dashlet',
      'Admin' => 'Admin',
      'Global' => 'Globale',
      'Preferences' => 'Preferenze',
      'EmailAddress' => 'Indirizzo email',
      'PhoneNumber' => 'Numero di telefono',
      'AuthLogRecord' => 'Autorizzazione log record',
      'AuthFailLogRecord' => 'Autorizzazione log record fallita',
      'LeadCapture' => 'Punto di ingresso cattura lead',
      'LeadCaptureLogRecord' => 'Record del registro di acquisizione lead',
      'ArrayValue' => 'Valore di matrice',
      'Account' => 'Account',
      'Contact' => 'Contatti',
      'Lead' => 'Lead',
      'Target' => 'Target',
      'Opportunity' => 'Opportunità',
      'Meeting' => 'Riunione',
      'Calendar' => 'Calendario',
      'Call' => 'Chiamata',
      'Task' => 'Compito',
      'Case' => 'Casi',
      'Document' => 'Document',
      'DocumentFolder' => 'Cartella Documenti',
      'Campaign' => 'Campagna',
      'TargetList' => 'Lista di destinazione',
      'MassEmail' => 'Email Massima',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Attivià',
      'KnowledgeBaseArticle' => 'Consocenza di Base degli Aticolo ',
      'KnowledgeBaseCategory' => 'Consocenza di Basec della Categoria ',
      'CampaignLogRecord' => 'Campaign Log Record',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Email',
      'User' => 'Utenti',
      'Team' => 'Teams',
      'Role' => 'Ruoli',
      'EmailTemplate' => 'Modelli Email',
      'EmailTemplateCategory' => 'Categorie Modeli Email',
      'EmailAccount' => 'Account email personale',
      'EmailAccountScope' => 'Account email personale',
      'OutboundEmail' => 'Email in uscita',
      'ScheduledJob' => 'Jobs schedulati',
      'ExternalAccount' => 'Account Esterni',
      'Extension' => 'Estensioni',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Gruppo account email',
      'Stream' => 'Flusso attività',
      'Import' => 'Importa',
      'Template' => 'Modelli',
      'Job' => 'Jobs',
      'EmailFilter' => 'Filtri email',
      'Portal' => 'Portali',
      'PortalRole' => 'Ruoli Portale',
      'Attachment' => 'Allegato',
      'EmailFolder' => 'Caselle Email',
      'PortalUser' => 'Utenti portale',
      'ApiUser' => 'API Users',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Richiesta di cambio password',
      'ActionHistoryRecord' => 'Storico azioni',
      'AuthToken' => 'Tokens di autenticazione',
      'UniqueId' => 'ID univoci',
      'LastViewed' => 'Ultima visualizzazione',
      'AuthLogRecord' => 'Auth log',
      'AuthFailLogRecord' => 'Auth Fail log',
      'LeadCapture' => 'Cattura Lead',
      'LeadCaptureLogRecord' => 'Log di cattura lead',
      'ArrayValue' => 'Valori di matrice',
      'Account' => 'Account',
      'Contact' => 'Contatti',
      'Lead' => 'Leads',
      'Target' => 'Targets',
      'Opportunity' => 'Opportunita\'',
      'Meeting' => 'Riunioni',
      'Calendar' => 'Calendario',
      'Call' => 'Chiamate',
      'Task' => 'Compiti',
      'Case' => 'Casi',
      'Document' => 'Documenti',
      'DocumentFolder' => 'Cartella Documenti',
      'Campaign' => 'Campagna',
      'TargetList' => 'Liste di destinazione',
      'MassEmail' => 'Email Massive',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Attivià',
      'KnowledgeBaseArticle' => 'Conoscenza di Base',
      'KnowledgeBaseCategory' => 'Conoscenza di Base Categorie',
      'CampaignLogRecord' => 'Campaign Log Records',
    ),
    'labels' => 
    array (
      'Misc' => 'Varie',
      'Merge' => 'Unire',
      'None' => 'Nessun',
      'Home' => 'Home',
      'by' => 'di',
      'Saved' => 'Salvato',
      'Error' => 'Errore',
      'Select' => 'Selezionare',
      'Not valid' => 'Non valido',
      'Please wait...' => 'Attendere...',
      'Please wait' => 'Attendere',
      'Loading...' => 'Caricamento in corso...',
      'Uploading...' => 'Caricamento...',
      'Sending...' => 'Invio...',
      'Merging...' => 'Merging...',
      'Merged' => 'Merged',
      'Removed' => 'Rimosso',
      'Posted' => 'Postato',
      'Linked' => 'Connesso',
      'Unlinked' => 'Non Connesso',
      'Done' => 'Fatto',
      'Access denied' => 'Accesso negato',
      'Not found' => 'Non trovato',
      'Access' => 'Accesso',
      'Are you sure?' => 'Sei sicuro?',
      'Record has been removed' => 'Il Record è stato rimosso',
      'Wrong username/password' => 'I dati forniti non sono corretti',
      'Post cannot be empty' => 'Il Post puo\' essere vuoto',
      'Removing...' => 'Cancellazione...',
      'Unlinking...' => 'Disconnessione...',
      'Posting...' => 'Posting...',
      'Username can not be empty!' => 'L\'Username non può essere vuota!',
      'Cache is not enabled' => 'Cache non abilitata',
      'Cache has been cleared' => 'Cache gia\' liberata',
      'Rebuild has been done' => 'Rebuild gia\' concluso',
      'Return to Application' => 'Ritorna all\'applicazione',
      'Saving...' => 'Salvataggio...',
      'Modified' => 'Modificato',
      'Created' => 'Creato',
      'Create' => 'Creare',
      'create' => 'creare',
      'Overview' => 'Panoramica',
      'Details' => 'Dettagli',
      'Add Field' => 'Aggiungi Campo',
      'Add Dashlet' => 'Aggiungi Dashlet',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Edit Dashboard',
      'Add' => 'Aggiungi',
      'Add Item' => 'Add Item',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Altro',
      'Search' => 'Cerca',
      'Only My' => 'Solo il mio',
      'Open' => 'Aperto',
      'Admin' => 'Admministratore',
      'About' => 'A riguardo',
      'Refresh' => 'Ricaricare',
      'Remove' => 'Eliminare',
      'Options' => 'Opzioni',
      'Username' => 'Username',
      'Password' => 'Password',
      'Login' => 'Login',
      'Log Out' => 'Log Out',
      'Preferences' => 'Preferenze',
      'State' => 'Provincia',
      'Street' => 'Strada',
      'Country' => 'Nazione',
      'City' => 'Citta\'',
      'PostalCode' => 'Codici Postale',
      'Followed' => 'Seguire',
      'Follow' => 'Segui',
      'Followers' => 'Followers',
      'Clear Local Cache' => 'Cancella la Cache locale',
      'Actions' => 'Azioni',
      'Delete' => 'Cancellare',
      'Update' => 'Aggiorna',
      'Save' => 'Salva',
      'Edit' => 'Modificare',
      'View' => 'View',
      'Cancel' => 'Annulla',
      'Apply' => 'Applicare',
      'Unlink' => 'Scollegare',
      'Mass Update' => 'Aggiornamento Massivo',
      'Export' => 'Esporta',
      'No Data' => 'Nessun Dato',
      'No Access' => 'No Access',
      'All' => 'Tutti',
      'Active' => 'Attivo',
      'Inactive' => 'Inattivo',
      'Write your comment here' => 'Scrivi il tuo commento qui',
      'Post' => 'Post',
      'Stream' => 'Flusso attività',
      'Show more' => 'Mostra altro',
      'Dashlet Options' => 'Opzioni Dashlet',
      'Full Form' => 'Modulo Completo',
      'Insert' => 'Inserire',
      'Person' => 'Persone',
      'First Name' => 'Nome',
      'Last Name' => 'Cognome',
      'Original' => 'Originale',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'modificare',
      'Change' => 'Change',
      'Primary' => 'Primario',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Amministrazione',
      'Run Import' => 'Avvia Importazione',
      'Duplicate' => 'Duplicato',
      'Notifications' => 'Notifica',
      'Mark all read' => 'Contrassegna tutti come letto',
      'See more' => 'Vedi altro',
      'Today' => 'Oggi',
      'Tomorrow' => 'Domani',
      'Yesterday' => 'Ieri',
      'Submit' => 'Invio',
      'Close' => 'Chiuso',
      'Yes' => 'Yes',
      'No' => 'No',
      'Select All Results' => 'Seleziona tutti i risultati',
      'Value' => 'Valore',
      'Current version' => 'Versione in uso',
      'List View' => 'Vista elenco',
      'Tree View' => 'Visualizzazione ad Albero',
      'Unlink All' => 'Scollegare tutti',
      'Total' => 'Totale',
      'Print to PDF' => 'Stampa in PDF',
      'Default' => 'Default',
      'Number' => 'Numero',
      'From' => 'Da',
      'To' => 'A',
      'Create Post' => 'Crea Post',
      'Previous Entry' => 'Anteprima Accesso',
      'Next Entry' => 'Prossimo Accesso',
      'View List' => 'Visualizza elenco',
      'Attach File' => 'Allega File',
      'Skip' => 'Salta',
      'Attribute' => 'Attributo',
      'Function' => 'Funzione',
      'Self-Assign' => 'Autoassegna',
      'Self-Assigned' => 'Autoassegnato',
      'Expand' => 'Espandi',
      'Collapse' => 'Comprimi',
      'New notifications' => 'Nuove Notifiche',
      'Manage Categories' => 'Gestisci Categorie',
      'Manage Folders' => 'Gestisci Cartelle',
      'Convert to' => 'Convertire in',
      'View Personal Data' => 'Visualizzare i dati personali',
      'Personal Data' => 'Dati personali',
      'Erase' => 'Cancellare',
      'Move Over' => 'Spostarsi',
      'Create InboundEmail' => 'Creare Email in entrata',
      'Activities' => 'Attivià',
      'History' => 'History',
      'Attendees' => 'Partecipanti',
      'Schedule Meeting' => 'Pianifica Riunione',
      'Schedule Call' => 'Pianifica chiamata',
      'Compose Email' => 'Componi email',
      'Log Meeting' => 'Registro Riunione',
      'Log Call' => 'Registro chiamata',
      'Archive Email' => 'Archivio Email',
      'Create Task' => 'Crea Compito',
      'Tasks' => 'Compiti',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Attendere...',
      'posting' => 'Spedizione...',
      'loading' => 'Caricamento...',
      'saving' => 'Salvataggio...',
      'confirmLeaveOutMessage' => 'Sei sicuro di volere lasciare il form?',
      'notModified' => 'Non hai modificato il record',
      'duplicate' => 'Il record che si sta creando sembra essere un duplicato',
      'dropToAttach' => 'Rilascia per allegare',
      'fieldIsRequired' => '{field} è richiesto',
      'fieldShouldBeEmail' => '{field} deve essere un indirizzo email valido',
      'fieldShouldBeFloat' => '{field} deve essere un numero decimale',
      'fieldShouldBeInt' => '{field} deve essere un intero valido',
      'fieldShouldBeDate' => '{field} deve essere una data valida',
      'fieldShouldBeDatetime' => '{field} deve essere una data/ora valida',
      'fieldShouldAfter' => '{field} deve essere dopo {otherField}',
      'fieldShouldBefore' => '{field} deve essere prima {otherField}',
      'fieldShouldBeBetween' => '{field} deve essere compreso tra {min} e {max}',
      'fieldShouldBeLess' => '{field} deve essere minore di {value}',
      'fieldShouldBeGreater' => '{field} deve essere maggiore di {value}',
      'fieldBadPasswordConfirm' => '{field} non confermato correttamente',
      'fieldMaxFileSizeError' => 'Il file non dovrebbe superare {max} Mb',
      'fieldValueDuplicate' => 'Duplicate value',
      'fieldIsUploading' => 'Caricamento in corso',
      'resetPreferencesDone' => 'Le preferenze sono state ripristinate alle impostazioni predefinite',
      'confirmation' => 'Sei sicuro?',
      'unlinkAllConfirmation' => 'Sei sicuro di scollegare tutti i record correlati?',
      'resetPreferencesConfirmation' => 'Sei sicuro di voler ripristinare le preferenze ai valori predefiniti?',
      'removeRecordConfirmation' => 'Sei sicuro di voler rimuovere il record?',
      'unlinkRecordConfirmation' => 'Sei sicuro di voler scollegare il record correlato?',
      'removeSelectedRecordsConfirmation' => 'Sei sicuro di voler rimuovere i record selezionati?',
      'massUpdateResult' => '{count} record sono stati aggiornati',
      'massUpdateResultSingle' => 'Records aggiornati: {count}',
      'noRecordsUpdated' => 'Nessun record sono stati aggiornati',
      'massRemoveResult' => '{count} record sono stati rimossi',
      'massRemoveResultSingle' => 'Records rimossi: {count}',
      'noRecordsRemoved' => 'Nessun record è stato rimosso',
      'clickToRefresh' => 'Clicca per aggiornare',
      'streamPostInfo' => 'Type <strong>@username</strong> to mention users in the post.

Available markdown syntax:
`<code>code</code>`
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~<del>deleted text</del>~
> blockquote
[text](url)',
      'writeYourCommentHere' => 'Scrivi il tuo commento qui',
      'writeMessageToUser' => 'Scrivi un messaggio a {user}',
      'writeMessageToSelf' => 'Scrivi un messaggio nel tuo flusso attività',
      'typeAndPressEnter' => 'Digita e Schiaccia Invio',
      'checkForNewNotifications' => 'Verifica la presenza di nuove notifiche',
      'checkForNewNotes' => 'Controlla aggiornamenti nel flusso attività',
      'internalPost' => 'Il Messaggio sarà visto solo da utenti interni',
      'internalPostTitle' => 'Il messaggio è visto solo dagli utenti interni',
      'done' => 'Fatto',
      'confirmMassFollow' => 'Vuoi veramente seguire i record selezionati?',
      'confirmMassUnfollow' => 'Vuoi veramente non seguire più i record selezionati?',
      'massFollowResult' => 'Ora sono seguiti {count} records',
      'massUnfollowResult' => 'Ora non sono più seguiti {count} records',
      'massFollowResultSingle' => 'Ora è seguito {count} record',
      'massUnfollowResultSingle' => 'Ora non è più seguito {count} record',
      'massFollowZeroResult' => 'Nulla è stato seguito',
      'massUnfollowZeroResult' => 'Nulla è stato non più seguito',
      'erasePersonalDataConfirmation' => 'I campi controllati verranno cancellati in modo permanente. Sei sicuro?',
      'massPrintPdfMaxCountError' => 'Impossibile stampare più record {maxCount}.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Solo il mio',
      'followed' => 'Seguire',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Seguire',
      'all' => 'Tutti',
    ),
    'massActions' => 
    array (
      'remove' => 'Eliminare',
      'merge' => 'Unire',
      'massUpdate' => 'Aggiornamento Massivo',
      'export' => 'Esporta',
      'follow' => 'Segui',
      'unfollow' => 'Non seguire',
      'convertCurrency' => 'Converti valuta',
      'printPdf' => 'Stampa in PDF',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'firstName' => 'Nome',
      'lastName' => 'Cognome',
      'salutationName' => 'Saluto',
      'assignedUser' => 'Utente assegnato',
      'assignedUsers' => 'Utenti assegnati',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Dati dell\'indirizzo e-mail',
      'emailAddressIsOptedOut' => 'L\'indirizzo email è stato cancellato',
      'assignedUserName' => 'Nome utente assegnato',
      'teams' => 'Team',
      'createdAt' => 'Creato il',
      'modifiedAt' => 'Modificato il',
      'createdBy' => 'Creato da',
      'modifiedBy' => 'Modificato da',
      'description' => 'Descrizione',
      'address' => 'Indirizzi',
      'phoneNumber' => 'Telefono',
      'phoneNumberMobile' => 'Telefono (Mobile)',
      'phoneNumberHome' => 'Telefono (Home)',
      'phoneNumberFax' => 'Telefono (Fax)',
      'phoneNumberOffice' => 'Telefono (Office)',
      'phoneNumberOther' => 'Telefono (Other)',
      'phoneNumberData' => 'Dati del numero di telefono',
      'order' => 'Ordine',
      'parent' => 'Genitore',
      'children' => 'Children',
      'id' => 'ID',
      'ids' => 'ID',
      'type' => 'Tipo',
      'names' => 'Nomi',
      'types' => 'Types',
      'targetListIsOptedOut' => 'È stato cancellato (lista target)',
      'billingAddressCity' => 'Citta\'',
      'billingAddressCountry' => 'Nazione',
      'billingAddressPostalCode' => 'Codice Postale',
      'billingAddressState' => 'Provincia',
      'billingAddressStreet' => 'Strada',
      'billingAddressMap' => 'Map',
      'addressCity' => 'Citta\'',
      'addressStreet' => 'Strada',
      'addressCountry' => 'Nazione',
      'addressState' => 'Provincia',
      'addressPostalCode' => 'Codice Postale',
      'addressMap' => 'Map',
      'shippingAddressCity' => 'Citta\' (Spedizione)',
      'shippingAddressStreet' => 'Strada (Spedizione)',
      'shippingAddressCountry' => 'Nazione (Spedizione)',
      'shippingAddressState' => 'Stato (Spedizione)',
      'shippingAddressPostalCode' => 'Codice Postale (Spedizione)',
      'shippingAddressMap' => 'Mappa (Spedizione)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Utente assegnato',
      'createdBy' => 'Creato da',
      'modifiedBy' => 'Modificato da',
      'team' => 'Team',
      'roles' => 'Ruoli',
      'teams' => 'Teams',
      'users' => 'Utenti',
      'parent' => 'Genitore',
      'children' => 'Children',
      'contacts' => 'Contatti',
      'opportunities' => 'Opportunita\'',
      'leads' => 'Leads',
      'meetings' => 'Riunioni',
      'calls' => 'Chiamate',
      'tasks' => 'Compiti',
      'emails' => 'Email',
      'accounts' => 'Account',
      'cases' => 'Casi',
      'documents' => 'Documenti',
      'account' => 'Account',
      'opportunity' => 'Opportunità',
      'contact' => 'Contatti',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Flusso attività',
      'Emails' => 'My Inbox',
      'Records' => 'Elenco records',
      'Leads' => 'I miei Lead',
      'Opportunities' => 'Le mie Opportunità',
      'Tasks' => 'I miei Compiti',
      'Cases' => 'I miei Casi',
      'Calendar' => 'Calendario',
      'Calls' => 'Le mie Chiamate',
      'Meetings' => 'Le mie Riunioni',
      'OpportunitiesByStage' => 'Opportunità di stage',
      'OpportunitiesByLeadSource' => 'Opportunities by Lead Source',
      'SalesByMonth' => 'Vendite per Mese',
      'SalesPipeline' => 'Canale di Vendita',
      'Activities' => 'le mie Attività',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} è stato assegnato a te',
      'emailReceived' => 'Email ricevuta da {from}',
      'entityRemoved' => '{user} ha rimosso {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} ha pubblicato {entityType} {entity}',
      'attach' => '{user} ha allegato a {entityType} {entity}',
      'status' => '{user} ha aggiornato {field} di {entityType} {entity}',
      'update' => '{user} ha aggiornato {entityType} {entity}',
      'postTargetTeam' => '{user} ha pubblicato al team {target}',
      'postTargetTeams' => '{user} ha pubblicato ai team {target}',
      'postTargetPortal' => '{user} ha postato sul portale {target}',
      'postTargetPortals' => '{user} ha postato sui portali {target}',
      'postTarget' => '{user} ha postato a {target}',
      'postTargetYou' => '{user} ha postato a te',
      'postTargetYouAndOthers' => '{user} ha postato a {target} e a te',
      'postTargetAll' => '{user} ha postato a tutti',
      'postTargetSelf' => '{user} auto-pubblicato',
      'postTargetSelfAndOthers' => '{user} ha pubblicato a {target}',
      'mentionInPost' => '{user} menzionato {mentioned} in {entityType} {entity}',
      'mentionYouInPost' => '{user} ti ha menzionato in {entityType} {entity}',
      'mentionInPostTarget' => '{user} ha menzionato {mentioned} in un post',
      'mentionYouInPostTarget' => '{user} ti ha menzionato in un post riguardante {target}',
      'mentionYouInPostTargetAll' => '{user} ti ha menzionato in un post visibile a tutti',
      'mentionYouInPostTargetNoTarget' => '{user} ti ha menzionato in un post',
      'create' => '{user} creato {entityType} {entity}',
      'createThis' => '{user} ha creato {entityType}',
      'createAssignedThis' => '{user} ha creato {entity} assegnandolo a {assignee}',
      'createAssigned' => '{user} ha creato {entityType} {entity} assegnato a {assignee}',
      'createAssignedYou' => '{user} ha creato {entityType} {entity} e lo ha assegnato a te',
      'createAssignedThisSelf' => '{user} ha creato questo {entityType} e lo ha auto-assegnato',
      'createAssignedSelf' => '{user} ha creato {entityType} {entity} e lo ha auto-assegnato',
      'assign' => '{user} ha assegnato {entityType} {entity} a {assignee}',
      'assignThis' => '{user} ha assegnato {entityType} a {assignee}',
      'assignYou' => '{user} ha assegnato {entityType} {entity} a te',
      'assignThisVoid' => '{user} ha revocato questo {entityType}',
      'assignVoid' => '{user} ha revocato {entityType} {entity}',
      'assignThisSelf' => '{user} ha auto-assegnato {entityType}',
      'assignSelf' => '{user} ha auto-assegnato {entityType} {entity}',
      'postThis' => '{user} pubblicato',
      'attachThis' => '{user} ha allegato',
      'statusThis' => '{user} ha aggiornato {field}',
      'updateThis' => '{user} ha aggiornato {entityType}',
      'createRelatedThis' => '{user} ha creato {relatedEntityType} {relatedEntity} correlato al {entityType}',
      'createRelated' => '{user} ha creato {relatedEntityType} {relatedEntity} correlato al {entityType} {entity}',
      'relate' => '{user} si è collegato a {relatedEntityType} {relatedEntity} con {entityType} {entity}',
      'relateThis' => '{user} si è collegato a {relatedEntityType} {relatedEntity} con {entityType}',
      'emailReceivedFromThis' => 'Email ricevuta da {from}',
      'emailReceivedInitialFromThis' => 'Email ricevuta da {from}, {entityType} è stato creato',
      'emailReceivedThis' => 'Email ricevuta',
      'emailReceivedInitialThis' => 'Email ricevuta,{entityType} è stato creato',
      'emailReceivedFrom' => 'Email ricevuta da {from}, collegata con {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email ricevuta da {from}, {entityType} {entity} creata',
      'emailReceived' => 'Email ricevute in relazione a {entityType} {entity}',
      'emailReceivedInitial' => 'Email ricevuta: {entityType} {entity} creato',
      'emailReceivedInitialFrom' => 'Email ricevuta da {from}, {entityType} {entity} creata',
      'emailSent' => '{by} email inviata relativa a {entityType} {entity}',
      'emailSentThis' => '{by} email inviata',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} ha postato a {target} e se stesso',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} ha postato a {target} e se stessa',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Gennaio',
        1 => 'Febbario',
        2 => 'Marzo',
        3 => 'Aprile',
        4 => 'Maggio',
        5 => 'Giugno',
        6 => 'Luglio',
        7 => 'Agosto',
        8 => 'Settembre',
        9 => 'Ottobre',
        10 => 'Novembre',
        11 => 'Dicembre',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Gen',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'Mag',
        5 => 'Giu',
        6 => 'Lug',
        7 => 'Ago',
        8 => 'Set',
        9 => 'Ott',
        10 => 'Nov',
        11 => 'Dic',
      ),
      'dayNames' => 
      array (
        0 => 'Domenica',
        1 => 'Lunedi',
        2 => 'Martedi',
        3 => 'Mercoledi',
        4 => 'Giovedi',
        5 => 'Venerdi',
        6 => 'Sabato',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Dom',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mer',
        4 => 'Gio',
        5 => 'Ven',
        6 => 'Sab',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Do',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Me',
        4 => 'Gi',
        5 => 'Ve',
        6 => 'Sa',
      ),
    ),
    'durationUnits' => 
    array (
      'd' => 'd',
      'h' => 'h',
      'm' => 'm',
      's' => 's',
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Mr.',
        'Mrs.' => 'Mrs.',
        'Ms.' => 'Ms.',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spagnolo (Messico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Attivo',
        'notOn' => 'Non attivo',
        'after' => 'Dopo',
        'before' => 'Prima',
        'between' => 'Fra',
        'today' => 'Oggi',
        'past' => 'Past',
        'future' => 'Futuro',
        'currentMonth' => 'Mese in corso',
        'lastMonth' => 'Ultimo mese',
        'nextMonth' => 'Prossimo Mese',
        'currentQuarter' => 'Trimestre in corso',
        'lastQuarter' => 'Ultimo trimestre',
        'currentYear' => 'Anno in corso',
        'lastYear' => 'Ultimo anno',
        'lastSevenDays' => 'Ultimi 7 giorni',
        'lastXDays' => 'Ultimi X giorni',
        'nextXDays' => 'Successivi X giorni',
        'ever' => 'Mai',
        'isEmpty' => 'Vuoto',
        'olderThanXDays' => 'Più vecchio di X giorni',
        'afterXDays' => 'Dopo X giorni',
        'currentFiscalYear' => 'Current Fiscal Year',
        'lastFiscalYear' => 'Last Fiscal Year',
        'currentFiscalQuarter' => 'Current Fiscal Quarter',
        'lastFiscalQuarter' => 'Last Fiscal Quarter',
      ),
      'searchRanges' => 
      array (
        'is' => 'È',
        'isEmpty' => 'È Vuoto',
        'isNotEmpty' => 'Non è Vuoto',
        'isOneOf' => 'Qualsiasi di',
        'isFromTeams' => 'È del Team',
        'isNot' => 'Non è',
        'isNotOneOf' => 'Nessuno di',
        'anyOf' => 'Qualsiasi di',
        'noneOf' => 'Nessuno di',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Uguale',
        'like' => 'È come (%)',
        'notLike' => 'Is not like (%)',
        'startsWith' => 'Inzia Con',
        'endsWith' => 'Finsice con',
        'contains' => 'Contiene',
        'notContains' => 'Non contiene',
        'isEmpty' => 'È Vuoto',
        'isNotEmpty' => 'Non è Vuoto',
        'notEquals' => 'Non uguale',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Uguale',
        'notEquals' => 'Diverso',
        'greaterThan' => 'Maggiore di',
        'lessThan' => 'Minore di',
        'greaterThanOrEquals' => 'Maggiore-Uguale a ',
        'lessThanOrEquals' => 'Minore di o uguale a',
        'between' => 'Fra',
        'isEmpty' => 'È vuoto',
        'isNotEmpty' => 'Non vuoto',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Nessun',
        '0.5' => '30 secondi',
        1 => '1 minuto',
        2 => '2 minuti',
        5 => '5 minuti',
        10 => '10 minuti',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobile',
        'Office' => 'Ufficio',
        'Fax' => 'Fax',
        'Home' => 'Casa',
        'Other' => 'Altro',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'Email',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Potete torvare qui la traduzione: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Grassetto',
          'italic' => 'Corsivo',
          'underline' => 'Sottolineato',
          'strike' => 'Barrare',
          'clear' => 'Rimuovere Stile del Carattere',
          'height' => 'Altezza linea',
          'name' => 'Tipo di Font',
          'size' => 'Dimensione Font',
        ),
        'image' => 
        array (
          'image' => 'Immagine',
          'insert' => 'Inserisci Immagini',
          'resizeFull' => 'Ridimensione Completa',
          'resizeHalf' => 'Ridimensiona a metà',
          'resizeQuarter' => 'Ridimensione un Quarto',
          'floatLeft' => 'Float a Sinistra',
          'floatRight' => 'Float a Destra',
          'floatNone' => 'Nessun Float',
          'dragImageHere' => 'Trascinare un\'immagine qui',
          'selectFromFiles' => 'Seleziona da File',
          'url' => 'URL dell\'Immagine',
          'remove' => 'Rimuovi l\'Immagine',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Inserisci link',
          'unlink' => 'Scollegare',
          'edit' => 'Modificare',
          'textToDisplay' => 'Testo da mostrare',
          'url' => 'A quale URL deve far riferimento questo link?',
          'openInNewWindow' => 'Apri in una nuova finestra',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Inserisici Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Table',
        ),
        'hr' => 
        array (
          'insert' => 'Inserire regola orizzontale',
        ),
        'style' => 
        array (
          'style' => 'Stile',
          'normal' => 'Normale',
          'blockquote' => 'Quote',
          'pre' => 'Codice',
          'h1' => 'Intestazione 1',
          'h2' => 'Intestazione 2',
          'h3' => 'Intestazione 3',
          'h4' => 'Intestazione 4',
          'h5' => 'Intestazione 5',
          'h6' => 'Intestazione 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Elenco non ordinato',
          'ordered' => 'Elenco ordinato',
        ),
        'options' => 
        array (
          'help' => 'Aiuto',
          'fullscreen' => 'Schermo intero',
          'codeview' => 'Codice visibile',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragrafo',
          'outdent' => 'Rientro a sinistra',
          'indent' => 'Rientro a destra',
          'left' => 'Allinea a sinistra',
          'center' => 'Allinea al centror',
          'right' => 'Allinea a destra',
          'justify' => 'Autorizza tutto',
        ),
        'color' => 
        array (
          'recent' => 'Ultimo Colore',
          'more' => 'Altri Colori',
          'background' => 'Colore di sfondo',
          'foreground' => 'Colore del testo',
          'transparent' => 'Trasparente',
          'setTransparent' => 'imposta trasparente',
          'reset' => 'Reset',
          'resetToDefault' => 'Riportare alle condizioni originali',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Tasti rapidi',
          'close' => 'Chiuso',
          'textFormatting' => 'Formattazione testo',
          'action' => 'Azione',
          'paragraphFormatting' => 'Fomrattazione paragrafo',
          'documentStyle' => 'Stile documento',
        ),
        'history' => 
        array (
          'undo' => 'Annulla',
          'redo' => 'Ripeti azione',
        ),
      ),
    ),
    'listViewModes' => 
    array (
      'list' => 'Lista',
      'kanban' => 'Kanban',
    ),
    'themes' => 
    array (
      'Espo' => 'Classic espo',
      'EspoRtl' => 'RTL Espo
',
      'Sakura' => 'Classic Sakura',
      'EspoVertical' => 'Vertical Espo',
      'SakuraVertical' => 'Vertical Sakura',
      'Violet' => 'Classic Violet',
      'VioletVertical' => 'Vertical Violet',
      'Hazyblue' => 'Classic Hazyblue',
      'HazyblueVertical' => 'Vertical Hazyblue',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Ripristina Import',
      'Return to Import' => 'Ritorna a Import',
      'Run Import' => 'Esegui Import',
      'Back' => 'indietro',
      'Field Mapping' => 'Mapping Campo',
      'Default Values' => 'Valore di default',
      'Add Field' => 'Aggiungi Campo',
      'Created' => 'Creato',
      'Updated' => 'Aggiornato',
      'Result' => 'Risultato',
      'Show records' => 'Mostra i Record',
      'Remove Duplicates' => 'Rimuovi Duplicati',
      'importedCount' => 'Importato (count)',
      'duplicateCount' => 'Duplicato (count)',
      'updatedCount' => 'Aggiornato (conto)',
      'Create Only' => 'Crea Solo',
      'Create and Update' => 'Crea & Aggiorna',
      'Update Only' => 'Aggiorna solo',
      'Update by' => 'Aggiorna da',
      'Set as Not Duplicate' => 'Imposta come non duplicati',
      'File (CSV)' => 'File (CSV)',
      'First Row Value' => 'Primo valore di riga',
      'Skip' => 'Salta',
      'Header Row Value' => 'Intestazione Riga',
      'Field' => 'Campo',
      'What to Import?' => 'Cosa Importare?',
      'Entity Type' => 'Tipo di entità',
      'What to do?' => 'Cosa fare?',
      'Properties' => 'Proprietà',
      'Header Row' => 'Intestazione Riga',
      'Person Name Format' => 'Persona Nome Formato',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Delimitatore di campo',
      'Date Format' => 'Formato Data',
      'Decimal Mark' => 'Marcatore Decimali',
      'Text Qualifier' => 'Qualificatore di Testo',
      'Time Format' => 'Formato Ora',
      'Currency' => 'Valuta',
      'Preview' => 'Anteprima',
      'Next' => 'Avanti',
      'Step 1' => 'Step 1',
      'Step 2' => 'Step 2',
      'Double Quote' => 'Virgolette',
      'Single Quote' => 'Apici',
      'Imported' => 'Importato',
      'Duplicates' => 'Duplicati',
      'Skip searching for duplicates' => 'Salta la ricerca per duplicati',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Rimuovi Log di Import',
      'New Import' => 'Nuova importazione',
      'Import Results' => 'Importazione dei risultati',
    ),
    'messages' => 
    array (
      'utf8' => 'Dovrebbe avere codifica UTF-8',
      'duplicatesRemoved' => 'Duplicati rimossi',
      'inIdle' => 'Esegui quando inattivo (per grandi dati, via cron)',
      'revert' => 'Questa Operazione Rimuoverà Tutti I Record Importati Definitivamente',
      'removeDuplicates' => 'Questa Operazione rimuoverà tutti i record importati riconosciuti come duplicati',
      'confirmRevert' => 'Questa operazione rimuoverà tutti i record importati definitivamente. Sei sicuro?',
      'confirmRemoveDuplicates' => 'Questo rimuoverà permanentemente tutti i record importati che sono stati riconosciuti come duplicati. Sei sicuro?',
      'confirmRemoveImportLog' => 'Questo rimuoverà il registro di importazione. Tutti i record importati verranno mantenuti. Non è possibile ripristinare i risultati dell\'importazione. Sei sicuro?',
      'removeImportLog' => 'Questo rimuoverà il registro di importazione. Tutti i record importati verranno mantenuti. Usalo se sei sicuro che l\'importazione va bene.',
    ),
    'fields' => 
    array (
      'file' => 'File',
      'entityType' => 'Tipo di entità',
      'imported' => 'Record Importati',
      'duplicates' => 'Record Duplicati',
      'updated' => 'Record Aggiornati',
      'status' => 'Stato',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Fallito',
        'In Process' => 'In corso',
        'Complete' => 'Completo',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'Indirizzo Email',
      'team' => 'Team',
      'status' => 'Stato',
      'assignToUser' => 'Assegna a utente',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Password',
      'port' => 'Porta',
      'monitoredFolders' => 'Cartelle Monitorate',
      'trashFolder' => 'Cestino',
      'ssl' => 'SSL',
      'createCase' => 'Crea Caso',
      'reply' => 'Risposta automatica',
      'caseDistribution' => 'Caso di Distribuzione',
      'replyEmailTemplate' => 'Modello Email di Risposta ',
      'replyFromAddress' => 'Replica da (indirizzo)',
      'replyToAddress' => 'Replica a (indirizzo)',
      'replyFromName' => 'Replica da (nome)',
      'targetUserPosition' => 'Obiettivo posizione utente',
      'fetchSince' => 'Portare Dal',
      'addAllTeamUsers' => 'Per tutti gli utenti del team',
      'teams' => 'Teams',
      'sentFolder' => 'Cartella inviate',
      'storeSentEmails' => 'Memorizza email inviate',
      'useImap' => 'Scarica email',
      'useSmtp' => 'Usa SMTP',
      'smtpHost' => 'HOST SMTP',
      'smtpPort' => 'Porta SMTP',
      'smtpAuth' => 'Autorizzazione SMTP',
      'smtpSecurity' => 'Sicurezza SMTP',
      'smtpUsername' => 'Username SMTP',
      'smtpPassword' => 'Password SMTP',
      'fromName' => 'DA Nome',
      'smtpIsShared' => 'SMTP è condiviso',
      'smtpIsForMassEmail' => 'SMTP è per le mail di massa',
    ),
    'tooltips' => 
    array (
      'reply' => 'Notifica ai mittenti che le loro email sono state ricevute.

Verrà inviata una sola email per destinatario, in un determinato periodo di tempo, per evitare loops.',
      'createCase' => 'Creazione automatica di un Caso all\'arrivo di una email.',
      'replyToAddress' => 'Indicare l\'indirizzo email di questo account di posta, per indirizzare qui le risposte.',
      'caseDistribution' => 'Come verranno assegnati i Casi . Assegnato direttamente all\'utente o all\'interno del team.',
      'assignToUser' => 'Assegnatari dei processi utente.',
      'team' => 'Assegnatari dei processi dei teams.',
      'teams' => 'Assegnatari delle email dei teams.',
      'targetUserPosition' => 'Gli utenti con posizione specifica verranno distribuiti con i casi.',
      'addAllTeamUsers' => 'I Messaggi di posta elettronica vengono visualizzati nella cartella di Posta in arrivo di tutti gli utenti di un gruppo specifico.',
      'monitoredFolders' => 'Se più cartelle, devono essere separate da virgola',
      'smtpIsShared' => 'Se selezionato, gli utenti saranno in grado di inviare e-mail utilizzando questo SMTP. La disponibilità è controllata dai ruoli tramite l\'autorizzazione dell\'account e-mail di gruppo.',
      'smtpIsForMassEmail' => 'Se selezionato, SMTP sarà disponibile per l\'e-mail di massa.',
      'storeSentEmails' => 'Le email inviate saranno memorizzate sul server IMAP',
    ),
    'links' => 
    array (
      'filters' => 'Filtri',
      'emails' => 'Email',
      'assignToUser' => 'Assegna all\'utente',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
      ),
      'caseDistribution' => 
      array (
        '' => 'Nessun',
        'Direct-Assignment' => 'Assegnazione diretta',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Crea un Account Email',
      'IMAP' => 'IMAP',
      'Actions' => 'Azioni',
      'Main' => 'Main',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Impossibile connettersi al server IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Abilitato',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Reindirizzare URI',
      'apiKey' => 'API Key',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Selezionare una integrazione dal menù.',
      'noIntegrations' => 'Nessuna integrazioni è disponibile .',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Ottenere OAuth 2.0 credenziali da Google Developers Console .</b></p><p>Visit <a href="https://console.developers.google.com/project">Google Developers Console</a> to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.</p>',
      'GoogleMaps' => '<p>Ottinei chiave API <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Stato',
      'executeTime' => 'Esegui a',
      'executedAt' => 'Executed At',
      'startedAt' => 'Started At',
      'attempts' => 'Tentativi Left',
      'failedAttempts' => 'Tentativo fallito',
      'serviceName' => 'Servizio',
      'method' => 'Metodo',
      'methodName' => 'Metodo',
      'scheduledJob' => 'Job Schedulato',
      'scheduledJobJob' => 'Nome lavoro programmato',
      'data' => 'Data',
      'targetType' => 'Target Type',
      'targetId' => 'Target ID',
      'number' => 'Number',
      'queue' => 'Queue',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'In attesa',
        'Success' => 'Successo',
        'Running' => 'In esecuzione',
        'Failed' => 'Fallito',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Larghezza (%)',
      'link' => 'Link',
      'notSortable' => 'Non Ordinabile',
      'align' => 'Allinea',
      'panelName' => 'Nome del pannello',
      'style' => 'Stile',
      'sticked' => 'Fissato',
      'isLarge' => 'Misura carattere grande',
      'dynamicLogicVisible' => 'Condizioni che rendono visibile il pannello',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Sinistra',
        'right' => 'Destra',
      ),
      'style' => 
      array (
        'default' => 'Default',
        'success' => 'Successo',
        'danger' => 'Pericolo',
        'info' => 'Info',
        'warning' => 'Avvertimento',
        'primary' => 'Primario',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'Nuovo Pannello',
      'Layout' => 'Struttura',
    ),
  ),
  'LeadCapture' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'campaign' => 'MailChimp: ID campagna',
      'isActive' => 'È Attivo',
      'subscribeToTargetList' => 'Iscriviti alla lista di destinazione',
      'subscribeContactToTargetList' => 'Iscriviti contatto se esiste',
      'targetList' => 'Lista target',
      'fieldList' => 'Campi Carico utile',
      'optInConfirmation' => 'Doppia registrazione',
      'optInConfirmationEmailTemplate' => 'Modello email di conferma registrazione',
      'optInConfirmationLifetime' => 'Durata conferma registrazione durata (ore)',
      'optInConfirmationSuccessMessage' => 'Testo da far vedere dopo la conferma di registrazione',
      'leadSource' => 'Sorgente lead',
      'apiKey' => 'Chiave API',
      'targetTeam' => 'Team Target',
      'exampleRequestMethod' => 'Metodo',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Carico utile',
    ),
    'links' => 
    array (
      'targetList' => 'LIsta target',
      'campaign' => 'Campagna',
      'optInConfirmationEmailTemplate' => 'Modello email conferma registrazione',
      'targetTeam' => 'Team target',
      'logRecords' => 'Log',
    ),
    'labels' => 
    array (
      'Create LeadCapture' => 'Crea punto d\'ingresso',
      'Generate New API Key' => 'Genera una nuova chiave API',
      'Request' => 'Richiesta',
      'Confirm Opt-In' => 'L\'iscrizione è confermata.',
    ),
    'messages' => 
    array (
      'generateApiKey' => 'Creare nuova API Key',
      'optInConfirmationExpired' => 'Link di conferma iscrizione è scaduto.',
      'optInIsConfirmed' => 'L\'iscrizione è confermata.',
    ),
    'tooltips' => 
    array (
      'optInConfirmationSuccessMessage' => 'Markdown è supportata.',
    ),
  ),
  'LeadCaptureLogRecord' => 
  array (
    'fields' => 
    array (
      'number' => 'Numero',
      'data' => 'Dati',
      'target' => 'Target',
      'leadCapture' => 'Cattura Lead',
      'createdAt' => 'Entrato in',
      'isCreated' => 'Lead Creato',
    ),
    'links' => 
    array (
      'leadCapture' => 'Cattura Lead',
      'target' => 'Destinazione',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Inviare',
      'attachments' => 'Allegato',
      'targetType' => 'Target',
      'teams' => 'Teams',
      'users' => 'Utenti',
      'portals' => 'Portali',
      'type' => 'Tipo',
      'isGlobal' => 'Globale',
      'isInternal' => 'Interno (per utenti interni)',
      'related' => 'Correlato',
      'createdByGender' => 'Creato da genere',
      'data' => 'Dati',
      'number' => 'Numero',
    ),
    'filters' => 
    array (
      'all' => 'Tutti',
      'posts' => 'Messaggi',
      'updates' => 'Aggiornamenti',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'a me stesso',
        'users' => 'a utente particolare',
        'teams' => 'a team particolare',
        'all' => 'a tutti gli utenti interni',
        'portals' => 'agli utenti del portale',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Scrivi il tuo messaggio qui',
    ),
    'links' => 
    array (
      'superParent' => 'Super genitore',
      'related' => 'Relativo',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Ruoli',
      'isActive' => 'Attivo',
      'isDefault' => 'Default',
      'tabList' => 'Elenco schede',
      'quickCreateList' => 'Elenco creazione rapida',
      'companyLogo' => 'Logo',
      'theme' => 'Tema',
      'language' => 'Lingua',
      'dashboardLayout' => 'Dashboard Layout',
      'dateFormat' => 'Formato Data',
      'timeFormat' => 'Formato Ora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primo giorno della Settimana',
      'defaultCurrency' => 'Valuta di default',
      'customUrl' => 'Custom URL',
      'customId' => 'Custom ID',
    ),
    'links' => 
    array (
      'users' => 'Utenti',
      'portalRoles' => 'Ruoli',
      'notes' => 'Notes',
      'articles' => 'Consocenza di Base degli Articoli',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'I Ruoli specificati verranno applicati a tutti gli utenti di questo portale .',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Crea Portale',
      'User Interface' => 'Interfaccia Utente',
      'General' => 'Generale',
      'Settings' => 'Impostazioni',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Esporta Permessi',
      'massUpdatePermission' => 'Mass Update Permission',
    ),
    'links' => 
    array (
      'users' => 'Utenti',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Definisce se gli utenti del portale hanno la possibilità di esportare record.',
      'massUpdatePermission' => 'Defines whether portal users have an ability to do mass update of records.',
    ),
    'labels' => 
    array (
      'Access' => 'Accesso',
      'Create PortalRole' => 'Crea Ruolo',
      'Scope Level' => 'Livello Ambito',
      'Field Level' => 'Livello del Campo',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Crea utente portale',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Formato Data',
      'timeFormat' => 'Formato Ora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primo giorno della Settimana',
      'thousandSeparator' => 'Separatore delle migliaia',
      'decimalMark' => 'Marcatore dei Decimali',
      'defaultCurrency' => 'Valuta di default',
      'currencyList' => 'Elenco Valute',
      'language' => 'Lingua',
      'smtpServer' => 'Server',
      'smtpPort' => 'Porta',
      'smtpAuth' => 'Autenticato',
      'smtpSecurity' => 'Sicurezza',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Password',
      'smtpEmailAddress' => 'Indirizzo Email',
      'exportDelimiter' => 'Delimitatore esportazione',
      'receiveAssignmentEmailNotifications' => 'Notifiche via email al momento dell\' assegnazione',
      'receiveMentionEmailNotifications' => 'Notifiche via email in caso di menzioni nei post',
      'receiveStreamEmailNotifications' => 'Notifiche via email per i messaggi e gli aggiornamenti di stato',
      'autoFollowEntityTypeList' => 'Global Auto-Follow',
      'signature' => 'Firma Email',
      'dashboardTabList' => 'Elenco schede',
      'defaultReminders' => 'Promemoria di Defaul',
      'theme' => 'Tema',
      'useCustomTabList' => 'Elenco schede personalizzate',
      'tabList' => 'Elenco schede',
      'emailReplyToAllByDefault' => 'Email Reply to all by default',
      'dashboardLayout' => 'Layout panoramica',
      'emailReplyForceHtml' => 'Email di risposta in HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Do not pre-fill assigned user on record creation',
      'followEntityOnStreamPost' => 'Auto-follow record after posting in Stream',
      'followCreatedEntities' => 'Auto-follow created records',
      'followCreatedEntityTypeList' => 'Auto-follow created records of specific entity types',
      'emailUseExternalClient' => 'Utilizzare un client di posta elettronica esterno',
      'scopeColorsDisabled' => 'Disabilita campo colori',
      'tabColorsDisabled' => 'Disabilita tabella colori',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Domenica',
        1 => 'Lunedi',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notifica',
      'User Interface' => 'Interfaccia Utente',
      'SMTP' => 'SMTP',
      'Misc' => 'Varie',
      'Locale' => 'Locale',
      'Reset Dashboard to Default' => 'Reimposta dashboard su predefinito',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Automatically follow ALL new records (created by any user) of the selected entity types. To be able to see information in the stream and receive notifications about all records in the system.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'Quando si creano nuovi record, verranno automaticamente seguiti anche se assegnati a un altro utente.',
      'followCreatedEntityTypeList' => 'Quando si creano nuovi record di tipi di entità selezionati, questi verranno seguiti automaticamente anche se assegnati a un altro utente.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'roles' => 'Ruoli',
      'assignmentPermission' => 'Assegnazione permessi',
      'userPermission' => 'Autorizzazioni Utente',
      'portalPermission' => 'Autorizzazione Portale',
      'groupEmailAccountPermission' => 'Permesso account email di gruppo',
      'exportPermission' => 'Esporta Permessi',
      'massUpdatePermission' => 'Mass Update Permission',
      'dataPrivacyPermission' => 'Autorizzazione privacy dati',
    ),
    'links' => 
    array (
      'users' => 'Utenti',
      'teams' => 'Teams',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Permette di limitare la possibilità di assegnare record ed inviare messaggi ad altri utenti 

tutto - nessuna restrizione

team - può assegnare e postare solo al proprio team

no - può assegnare e postare solo a sé stesso',
      'userPermission' => 'Permette di limitare agli utenti la possibilità di visualizzare le attività, il calendario ed il flusso attività, di altri utenti

tutto - tutto visualizzabile

team - visualizzabili le sole attività del proprio team

no - nulla di visualizzabile',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Definisce un accesso agli account di posta elettronica di gruppo, una possibilità di inviare e-mail dal gruppo SMTP.',
      'exportPermission' => 'Definisce se gli utenti hanno la possibilità di esportare record.',
      'massUpdatePermission' => 'Defines whether users have an ability to do mass update of records.',
      'dataPrivacyPermission' => 'Consente di visualizzare e cancellare i dati personali.',
    ),
    'labels' => 
    array (
      'Access' => 'Accesso',
      'Create Role' => 'Crea Ruolo',
      'Scope Level' => 'Livello Ambito',
      'Field Level' => 'FLivello Campo',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'non impostato',
        'enabled' => 'abilitato',
        'disabled' => 'disabilitato',
      ),
      'levelList' => 
      array (
        'all' => 'tutti',
        'team' => 'team',
        'account' => 'account',
        'contact' => 'contatto',
        'own' => 'proprio',
        'no' => 'no',
        'yes' => 'si',
        'not-set' => 'non impostato',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Visualizzazione',
      'edit' => 'Modificare',
      'delete' => 'Cancellare',
      'stream' => 'Flusso attività',
      'create' => 'Creare',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Verranno applicate tutte le modifiche del controllo di accesso dopo la cancellazione della cache.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'job' => 'Job',
      'scheduling' => 'Programmazione',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Crea un Job schedulato',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Pulire',
        'CheckInboundEmails' => 'Controllare Gruppo Account di posta elettronica',
        'CheckEmailAccounts' => 'Controllare account email personale',
        'SendEmailReminders' => 'Inviare promemoria via email',
        'AuthTokenControl' => 'Controllo token di autenticazione',
        'SendEmailNotifications' => 'Invia notifiche email',
        'CheckNewVersion' => 'Controlla nuove versioni',
        'ProcessMassEmail' => 'Send Mass Emails',
        'ControlKnowledgeBaseArticleStatus' => 'Controllo dello stato di conoscenza di base',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Nota: aggiungi questa riga al file crontab per eseguire le attività pianificate di EspoCRM:',
        'mac' => 'Nota: aggiungi questa riga al file crontab per eseguire le attività pianificate di EspoCRM:',
        'windows' => 'Nota: crea un file batch con i seguenti comandi per eseguire le attività pianificate di EspoCRM utilizzando Operazioni pianificate di Windows:',
        'default' => 'Nota: Aggiungi questo comando a Cron Job (Operazioni pianificate):',
      ),
      'status' => 
      array (
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Crontab notation. Defines frequency of job runs.

*/5 * * * * - every 5 minutes

0 */2 * * * - every 2 hours

30 1 * * * - at 01:30 once a day

0 0 1 * * - on the first day of the month',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Stato',
      'executionTime' => 'Ora di Esecuzione',
      'target' => 'Target',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Usa Cache',
      'dateFormat' => 'Formato Data',
      'timeFormat' => 'Formato Ora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primo giorno della Settimana',
      'thousandSeparator' => 'Separatore delle migliaia',
      'decimalMark' => 'Decimal Mark',
      'defaultCurrency' => 'Valuta di default',
      'baseCurrency' => 'Valuta di Base',
      'currencyRates' => 'Rapporti di cambio',
      'currencyList' => 'Elenco Valute',
      'language' => 'Lingua',
      'companyLogo' => 'Logo della Compagnia',
      'smtpServer' => 'Server',
      'smtpPort' => 'Porta',
      'smtpAuth' => 'Autenticazione',
      'smtpSecurity' => 'Sicurezza',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Password',
      'outboundEmailFromName' => 'Nome mittente',
      'outboundEmailFromAddress' => 'Indirizzo mittente',
      'outboundEmailIsShared' => 'Condivisa',
      'recordsPerPage' => 'Elementi per pagina',
      'recordsPerPageSmall' => 'Elementi per pagina (ridotto)',
      'tabList' => 'Elenco schede',
      'quickCreateList' => 'Elenco creazione rapida',
      'exportDelimiter' => 'Delimitatore esportazione',
      'globalSearchEntityList' => 'Ricerca globale entità - Elenco',
      'authenticationMethod' => 'Metodo di autenticazione',
      'ldapHost' => 'Host',
      'ldapPort' => 'Porta',
      'ldapAuth' => 'Autenticazione',
      'ldapUsername' => 'Full User DN',
      'ldapPassword' => 'Password',
      'ldapBindRequiresDn' => 'Bind Requires DN',
      'ldapBaseDn' => 'Base DN',
      'ldapAccountCanonicalForm' => 'Account Form',
      'ldapAccountDomainName' => 'Account Nome di Dominio',
      'ldapTryUsernameSplit' => 'Prova Divisione Username',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Crea Utente in EspoCRM',
      'ldapSecurity' => 'Sicurezza',
      'ldapUserLoginFilter' => 'Filtro Accessi Utente',
      'ldapAccountDomainNameShort' => 'Account Nome di Dominio abbreviato',
      'ldapOptReferrals' => 'Opt Referenti',
      'ldapUserNameAttribute' => 'Attributo di nome utente',
      'ldapUserObjectClass' => 'ObjectClass utente',
      'ldapUserTitleAttribute' => 'Attributo titolo dell\'utente',
      'ldapUserFirstNameAttribute' => 'Attributo nome dell\'utente',
      'ldapUserLastNameAttribute' => 'Attributo cognome dell\'utente',
      'ldapUserEmailAddressAttribute' => 'Attributo indirizzo email dell\'utente',
      'ldapUserTeams' => 'Teams utente',
      'ldapUserDefaultTeam' => 'Team di default dell\'utente',
      'ldapUserPhoneNumberAttribute' => 'Attributo numero di telefono dell\'utente',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Disabilita Esporta (sarà consentito solo all\'admin)',
      'assignmentNotificationsEntityList' => 'Entità da notificare al momento dell\'assegnazione',
      'assignmentEmailNotifications' => 'Notifiche al momento dell\'assegnazione.',
      'assignmentEmailNotificationsEntityList' => 'Ambiti di notifica assegnazione email',
      'streamEmailNotifications' => 'Notifica gli aggiornamenti nel flusso attività per gli utenti interni',
      'portalStreamEmailNotifications' => 'Notifica gli aggiornamenti nel flusso attività per gli utenti del portale',
      'streamEmailNotificationsEntityList' => 'Notifiche email flusso scopi',
      'streamEmailNotificationsTypeList' => 'Cosa notificare',
      'b2cMode' => 'B2C Mode',
      'avatarsDisabled' => 'Disabilita Avatars',
      'followCreatedEntities' => 'Follow created records',
      'displayListViewRecordCount' => 'Mostra totale trovati (in vista elenco)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Disabilita scelta tema agli utenti',
      'emailMessageMaxSize' => 'Dimensione massima email (Mb)',
      'massEmailMaxPerHourCount' => 'Numero massimo di messaggi di posta elettronica inviati per ora.',
      'personalEmailMaxPortionSize' => 'Dimensione della quota per account email personale',
      'inboundEmailMaxPortionSize' => 'Dimensione della quota per gruppo di account email',
      'maxEmailAccountCount' => 'Numero massimo di account email personali per utente',
      'authTokenLifetime' => 'Vita del token di autenticazione (ore)',
      'authTokenMaxIdleTime' => 'Inattività massima del token di autenticazione (ore)',
      'dashboardLayout' => 'Layout della Panoramica (default)',
      'siteUrl' => 'URL del sito',
      'addressPreview' => 'Anteprima Indirizzo',
      'addressFormat' => 'Formato Indirizzo',
      'notificationSoundsDisabled' => 'Disabilita notifiche sonore',
      'applicationName' => 'Nome dell\'applicazione',
      'calendarEntityList' => 'Elenco calendario delle entità',
      'mentionEmailNotifications' => 'Notifica via email in caso di menzioni nei posts',
      'massEmailDisableMandatoryOptOutLink' => 'Disabilita il link obbligatorio di cancellazione dell\'iscrizione',
      'activitiesEntityList' => 'Elenco attività delle entità',
      'historyEntityList' => 'Elenco storico delle entità',
      'currencyFormat' => 'Formato Valuta',
      'currencyDecimalPlaces' => 'Numero di cifre decimali',
      'aclStrictMode' => 'ACL modalità strict',
      'aclAllowDeleteCreated' => 'Allow to remove created records',
      'adminNotifications' => 'Notifiche di sistema nel pannello di amministrazione',
      'adminNotificationsNewVersion' => 'Mostra notifica quando è disponibile la nuova versione di EspoCRM',
      'adminNotificationsNewExtensionVersion' => 'Mostra notifica quando sono disponibili nuove versioni di estensioni',
      'textFilterUseContainsForVarchar' => 'Utilizzare l\'operatore \' Contains \' quando si filtrano i campi varchar',
      'authTokenPreventConcurrent' => 'Solo un token auth per utente',
      'scopeColorsDisabled' => 'Disabilita campo colori',
      'tabColorsDisabled' => 'Disabilita tabella colori',
      'tabIconsDisabled' => 'Disabilita tabella icone',
      'emailAddressIsOptedOutByDefault' => 'Contrassegni i nuovi indirizzi del email come cancellati dall\'iscrizione',
      'outboundEmailBccAddress' => 'CCN indirizzi per client esterni',
      'cleanupDeletedRecords' => 'Pulire i record eliminati',
      'addressCountryList' => 'Address Country Autocomplete List',
      'addressCityList' => 'Address City Autocomplete List',
      'fiscalYearShift' => 'Fiscal Year Start',
      'jobRunInParallel' => 'Jobs Run in Parallel',
      'jobMaxPortion' => 'Jobs Max Portion',
      'jobPoolConcurrencyNumber' => 'Jobs Pool Concurrency Number',
      'daemonInterval' => 'Daemon Interval',
      'daemonMaxProcessNumber' => 'Daemon Max Process Number',
      'daemonProcessTimeout' => 'Daemon Process Timeout',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Domenica',
        1 => 'Lunedi',
      ),
      'currencyFormat' => 
      array (
        1 => '10 EUR',
        2 => '€ 10',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'Post' => 'Articoli',
        'Status' => 'Aggiornamenti di stato',
        'EmailReceived' => 'E-mail ricevute',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Numero di records inizialmente mostrati in vista elenco .',
      'recordsPerPageSmall' => 'Numero di record inizialmente visualizzata in pannello di relazione.',
      'outboundEmailIsShared' => 'Allow users to send emails from this address.',
      'followCreatedEntities' => 'Gli utenti potranno seguire automaticamente i record che hanno creato .',
      'emailMessageMaxSize' => 'Tutte le email in entrata che superano una dimensione specificata verranno prelevati senza corpo e allegati .',
      'authTokenLifetime' => 'Definisce la vita di un token
0 - nessuna scadenza.',
      'authTokenMaxIdleTime' => 'Definisice la vita di un token dall\'ultimo accesso.
0 - nessuna scadenza.',
      'userThemesDisabled' => 'Se selezionato, gli utenti non saranno in grado di selezionare un altro tema. ',
      'ldapUsername' => 'The full system user DN which allows to search other users. E.g. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'La password di accesso al server LDAP.',
      'ldapAuth' => 'Access credentials for the LDAP server.',
      'ldapUserNameAttribute' => 'The attribute to identify the user. 
E.g. "userPrincipalName" or "sAMAccountName" for Active Directory, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass attribute for searching users. E.g. "person" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:<br>- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - the form \'tester\'.<br>- \'Backslash\' - the form \'COMPANY\\tester\'.<br>- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'The option to format the username in the DN form.',
      'ldapBaseDn' => 'The default base DN used for searching users. E.g. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'The option to split a username with the domain.',
      'ldapOptReferrals' => 'if referrals should be followed to the LDAP client.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'This option allows EspoCRM to create a user from the LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP attribute which is used to determine the user first name. E.g. "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP attribute which is used to determine the user last name. E.g. "sn".',
      'ldapUserTitleAttribute' => 'LDAP attribute which is used to determine the user title. E.g. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP attribute which is used to determine the user email address. E.g. "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribute which is used to determine the user phone number. E.g. "telephoneNumber".',
      'ldapUserLoginFilter' => 'The filter which allows to restrict users who able to use EspoCRM. E.g. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'The domain which is used for authorization to LDAP server.',
      'ldapAccountDomainNameShort' => 'The short domain which is used for authorization to LDAP server.',
      'ldapUserTeams' => 'Teams per l\'utente creato. Per ulteriori informazioni, vedere il profilo utente.',
      'ldapUserDefaultTeam' => 'Team predefinito per l\'utente creato. Per ulteriori informazioni, vedi il profilo utente.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'Per default, EspoCRM è adattato per B2B. Ma puoi passare a B2C.',
      'currencyDecimalPlaces' => 'Numero di cifre decimali. Se vuoto, verranno visualizzate tutti le cifre decimali.',
      'aclStrictMode' => 'Abilitato: l\'accesso agli ambiti sarà negato se non specificato nei ruoli.

Disabilitato: l\'accesso agli ambiti sarà consentito se non specificato nei ruoli.',
      'aclAllowDeleteCreated' => 'Users will be able to remove records they created even if they don\'t have a delete access.',
      'textFilterUseContainsForVarchar' => 'Se non selezionata, viene utilizzato l\'operatore \' inizia con \'. È possibile utilizzare il carattere jolly \'%\'.',
      'streamEmailNotificationsEntityList' => 'Notifiche e-mail sugli aggiornamenti di flusso dei record seguiti. Gli utenti riceveranno notifiche e-mail solo per i tipi di entità specificati.',
      'authTokenPreventConcurrent' => 'Gli utenti non potranno essere collegati simultaneamente su più dispositivi.',
      'emailAddressIsOptedOutByDefault' => 'Quando si crea un nuovo record di email addess sarà contrassegnato come opt-out.',
      'cleanupDeletedRecords' => 'I record rimossi verranno eliminati dal database dopo un po\' di tempo.',
      'jobRunInParallel' => 'Jobs will be executed in parallel processes.',
      'jobPoolConcurrencyNumber' => 'Max number of processes run simultaneously.',
      'jobMaxPortion' => 'Max number of jobs processed per one execution.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Max number of cron processes run simultaneously.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
    ),
    'labels' => 
    array (
      'System' => 'Sistema',
      'Locale' => 'Locale',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configurazione',
      'In-app Notifications' => 'Notifica In-app ',
      'Email Notifications' => 'Notifica Email ',
      'Currency Settings' => 'Impostazioni di Valuta',
      'Currency Rates' => 'Tasso di Cambio',
      'Mass Email' => 'Email Massiva',
      'Test Connection' => 'Prova della connessione',
      'Connecting' => 'Connessione...',
      'Activities' => 'Attività',
      'Admin Notifications' => 'Notifiche di amministratore',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'La connessione è stata stabilita con successo',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'roles' => 'Ruoli',
      'positionList' => 'Elenco posizioni',
    ),
    'links' => 
    array (
      'users' => 'Utenti',
      'notes' => 'Note',
      'roles' => 'Ruoli',
      'inboundEmails' => 'Gruppo email accounts',
    ),
    'tooltips' => 
    array (
      'roles' => 'Ruoli di accesso . Gli utenti di questo team hanno ottenuto il livello di controllo per i ruoli selezionati .',
      'positionList' => 'Posizioni disponibili in questa squadra. E.g. Venditore, Manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Crea Team',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'body' => 'Corpo',
      'entityType' => 'Tipo di entità',
      'header' => 'Intestazione',
      'footer' => 'Piè di pagina',
      'leftMargin' => 'Margine Sinistro',
      'topMargin' => 'Marigne Superiore',
      'rightMargin' => 'Margine Destro',
      'bottomMargin' => 'Margine Inferiore',
      'printFooter' => 'Stampa piè di Pagina',
      'footerPosition' => 'Posizione piè  di pagina',
      'variables' => 'Segnaposto disponibili',
      'pageOrientation' => 'Orientamento pagina',
      'pageFormat' => 'Formato carta',
      'fontFace' => 'Font',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Crea Modello',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => 'Ritratto',
        'Landscape' => 'Paesaggio',
      ),
      'placeholders' => 
      array (
        'today' => 'Oggi (Data)',
        'now' => 'Ora (data-ora)',
      ),
      'fontFace' => 
      array (
        'aealarabiya' => 'Al Arabiya',
        'aefurat' => 'Aefurat',
        'cid0cs' => 'CID-0 cs',
        'cid0ct' => 'CID-0 ct',
        'cid0jp' => 'CID-0 jp',
        'cid0kr' => 'CID-0 kr',
        'courier' => 'Courier',
        'dejavusans' => 'DejaVu Sans',
        'dejavusanscondensed' => 'DejaVu Sans Condensed',
        'dejavusansextralight' => 'DejaVu Sans ExtraLight',
        'dejavusansmono' => 'DejaVu Sans Mono',
        'dejavuserif' => 'DejaVu Serif',
        'dejavuserifcondensed' => 'DejaVu Serif Condensed',
        'freemono' => 'FreeMono',
        'freesans' => 'FreeSans',
        'freeserif' => 'FreeSerif',
        'helvetica' => 'Helvetica',
        'hysmyeongjostdmedium' => 'Hysmyeongjostd Medium',
        'kozgopromedium' => 'Kozgo Pro Medium',
        'kozminproregular' => 'Kozmin Pro Regular',
        'msungstdlight' => 'Msung Std Light',
        'pdfacourier' => 'PDFA Courier',
        'pdfahelvetica' => 'PDFA Helvetica',
        'pdfasymbol' => 'Simbolo PDFA',
        'pdfatimes' => 'PDFA Times',
        'stsongstdlight' => 'STSong STD Light',
        'symbol' => 'Simbolo',
        'times' => 'Tempi',
      ),
    ),
    'tooltips' => 
    array (
      'footer' => 'Utilizzare {pageNumber} per stampare il numero di pagina .',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'userName' => 'Nome Utente',
      'title' => 'Titolo',
      'type' => 'Type',
      'isAdmin' => 'Is Admin',
      'defaultTeam' => 'Default Team',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefono',
      'roles' => 'Ruoli',
      'portals' => 'Portali',
      'portalRoles' => 'Ruoli Portale',
      'teamRole' => 'Posizione',
      'password' => 'Password',
      'currentPassword' => 'Password attuale',
      'passwordConfirm' => 'Conferma password',
      'newPassword' => 'Nuova password',
      'newPasswordConfirm' => 'Conferma la nuova password',
      'avatar' => 'Avatar',
      'isActive' => 'È Attivo',
      'isPortalUser' => 'È il portale per l\'utente',
      'contact' => 'Contatti',
      'accounts' => 'Accounts',
      'account' => 'Account (Primario)',
      'sendAccessInfo' => 'Invia email all\'utente con i dati di accesso',
      'portal' => 'Portale',
      'gender' => 'Genere',
      'position' => 'Posizione nel team',
      'ipAddress' => 'Indirizzo IP',
      'passwordPreview' => 'Mostra password',
      'isSuperAdmin' => 'è Super Amministratore',
      'lastAccess' => 'Ultimo accesso',
      'apiKey' => 'API Key',
      'secretKey' => 'Secret Key',
      'authMethod' => 'Authentication Method',
      'acceptanceStatus' => 'Stato accettazione',
      'acceptanceStatusMeetings' => 'Stato accettazione (riunioni)',
      'acceptanceStatusCalls' => 'Stato accettazione (chiamate)',
    ),
    'links' => 
    array (
      'defaultTeam' => 'Default Team',
      'teams' => 'Team',
      'roles' => 'Ruoli',
      'notes' => 'Note',
      'portals' => 'Portali',
      'portalRoles' => 'Ruoli Portale',
      'contact' => 'Contatti',
      'accounts' => 'Accounts',
      'account' => 'Account (Primario}',
      'tasks' => 'Compiti',
      'targetLists' => 'Liste di destinazione',
    ),
    'labels' => 
    array (
      'Create User' => 'Crea Utente',
      'Generate' => 'Generare',
      'Access' => 'Accesso',
      'Preferences' => 'Preferenze',
      'Change Password' => 'Cambia password',
      'Teams and Access Control' => 'Controllo Teams e Accessi',
      'Forgot Password?' => 'Password dimenticata?',
      'Password Change Request' => 'Richiesta di cambio password',
      'Email Address' => 'Indirizzo Email',
      'External Accounts' => 'Account Esterni',
      'Email Accounts' => 'Email Accounts',
      'Portal' => 'Portale',
      'Create Portal User' => 'Crea Utente Portale',
      'Proceed w/o Contact' => 'Procedi senza contatto',
      'Generate New API Key' => 'Generate New API Key',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Tutti i record creati da questo utente saranno inseriti di default in questo Team.',
      'userName' => 'Lettere a-z, numeri 0-9, puntini, trattini, @ e sottolineature sono permessi.',
      'isAdmin' => 'L\'utente Admin può accedere a tutto.',
      'isActive' => 'Se non verificato , l\'utente non sarà in grado di effettuare il login .',
      'teams' => 'Team a cui appartiene l\'utente. Il livello di controllo di accesso viene ereditato dai ruoli del team.',
      'roles' => 'Ruoli di accesso aggiuntivi. Usalo se l\'utente non appartiene ad alcun gruppo o è necessario estendere il livello di controllo di accesso in esclusiva per questo utente.',
      'portalRoles' => 'Ulteriori ruoli portale . Usalo per estendere il livello di controllo di accesso esclusivamente per questo utente .',
      'portals' => 'Portali a cui l\'utente ha accesso.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'La password verrà inviata all\'indirizzo email dell\'utente.',
      'passwordChanged' => 'La password è stata modificata',
      'userCantBeEmpty' => 'Il Nome utente non può essere vuoto',
      'wrongUsernamePasword' => 'I dati forniti non sono corretti',
      'emailAddressCantBeEmpty' => 'L\'indirizzo Email non può essere vuoto',
      'userNameEmailAddressNotFound' => 'Username/Indirizzo Email non trovato',
      'forbidden' => 'Vietato , riprova piu tardi',
      'uniqueLinkHasBeenSent' => 'L\' URL univoco è stato inviato all\'indirizzo di posta elettronica specificato .',
      'passwordChangedByRequest' => 'La password è stata modificata.',
      'setupSmtpBefore' => 'È necessario attivare le <a href="{url}">Impostazioni SMTP</a> perchè il sistema sia in grado di mandare le password via email.',
      'userNameExists' => 'Nome utente già esistente',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Non impostato',
        'Male' => 'Maschio',
        'Female' => 'Femmina',
        'Neutral' => 'Neutral',
      ),
      'type' => 
      array (
        'regular' => 'Regular',
        'admin' => 'Admin',
        'portal' => 'Portal',
        'system' => 'System',
        'super-admin' => 'Super-Admin',
        'api' => 'API',
      ),
      'authMethod' => 
      array (
        'ApiKey' => 'API Key',
        'Hmac' => 'HMAC',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Solo per il mio Team',
    ),
    'presetFilters' => 
    array (
      'active' => 'Attivo',
      'activePortal' => 'Portale Attivo',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'Email',
      'website' => 'Sito Web',
      'phoneNumber' => 'Telefono',
      'billingAddress' => 'Indirizzo di Fatturazione',
      'shippingAddress' => 'Indirizzo di Spedizione',
      'description' => 'Descrizione',
      'sicCode' => 'Sic Code',
      'industry' => 'Azienda',
      'type' => 'Tipo',
      'contactRole' => 'Titolo',
      'contactIsInactive' => 'Inattivo',
      'campaign' => 'Campagna',
      'targetLists' => 'Liste di destinazione',
      'targetList' => 'Lista di destinazione',
      'originalLead' => 'Iniziativa originale',
    ),
    'links' => 
    array (
      'contacts' => 'Contatti',
      'opportunities' => 'Opportunita\'',
      'cases' => 'Casi',
      'documents' => 'Documenti',
      'meetingsPrimary' => 'Riunioni (ampliato)',
      'callsPrimary' => 'Chiamate (ampliato)',
      'tasksPrimary' => 'Compiti (ampliato)',
      'emailsPrimary' => 'Emails (ampliato)',
      'targetLists' => 'Liste di destinazione',
      'campaignLogRecords' => 'Log Campagna',
      'campaign' => 'Campagna',
      'portalUsers' => 'Utenti portale',
      'originalLead' => 'Iniziativa originale',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Cliente',
        'Investor' => 'Invetitore',
        'Partner' => 'Partner',
        'Reseller' => 'Rivenditore',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospaziale',
        'Agriculture' => 'Agricultura',
        'Advertising' => 'Pubblicità',
        'Apparel & Accessories' => 'Abbigliamento e Accessori',
        'Architecture' => 'Architettura',
        'Automotive' => 'Settore Automobilistico',
        'Banking' => 'Bancario',
        'Biotechnology' => 'Biotecnologie',
        'Building Materials & Equipment' => 'Materiali da costruzione e attrezzature',
        'Chemical' => 'Chimico',
        'Construction' => 'Costruzioni',
        'Computer' => 'Computer',
        'Defense' => 'Difesa',
        'Creative' => 'Creatività',
        'Culture' => 'Cultura',
        'Consulting' => 'Consulenza',
        'Education' => 'Insegnante',
        'Electronics' => 'Elettronica',
        'Electric Power' => 'Energia elettrica',
        'Energy' => 'Energia',
        'Entertainment & Leisure' => 'Intrattenimento e tempo libero',
        'Finance' => 'Finanza',
        'Food & Beverage' => 'Prodotti alimentari e bevande',
        'Grocery' => 'Drogheria',
        'Hospitality' => 'Ospitalità',
        'Healthcare' => 'Assistenza sanitaria',
        'Insurance' => 'Assicurazioni',
        'Legal' => 'Legale',
        'Manufacturing' => 'Manifatturiero',
        'Mass Media' => 'Mass media',
        'Mining' => 'Miniere',
        'Music' => 'Musica',
        'Marketing' => 'Marketing',
        'Publishing' => 'Editoriale',
        'Petroleum' => 'Petrolio',
        'Real Estate' => 'Immobiliare',
        'Retail' => 'Vendita al dettaglio',
        'Shipping' => 'Spedizioni',
        'Service' => 'Servizi',
        'Support' => 'Supporto',
        'Sports' => 'Sport',
        'Software' => 'Software',
        'Technology' => 'Technologia',
        'Telecommunications' => 'Telecommunicazioni',
        'Television' => 'Televisione',
        'Testing, Inspection & Certification' => 'Test, ispezione e certificazione',
        'Transportation' => 'Trasporti',
        'Travel' => 'Viaggio',
        'Venture Capital' => 'Capitale di rischio',
        'Wholesale' => 'Vendita all\'ingrosso',
        'Water' => 'Acqua',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Crea Account',
      'Copy Billing' => 'Copia di Fatturazione',
      'Set Primary' => 'Imposta primario',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Clienti',
      'partners' => 'Partner',
      'recentlyCreated' => 'Recentemente creato',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mese',
      'week' => 'Settimana',
      'day' => 'Giorno',
      'agendaWeek' => 'Settimana',
      'agendaDay' => 'Giorno',
      'timeline' => 'Sequenza temporale',
    ),
    'labels' => 
    array (
      'Today' => 'Oggi',
      'Create' => 'Creare',
      'Shared' => 'Diviso',
      'Add User' => 'Aggiungi Utente',
      'current' => 'attuale',
      'time' => 'ora',
      'User List' => 'Elenco utenti',
      'Manage Users' => 'Gestione Utenti',
      'View Calendar' => 'Mostra calendario',
      'Create Shared View' => 'Crea vista condivisa',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'parent' => 'Genitore',
      'status' => 'Stato',
      'dateStart' => 'Data inizio',
      'dateEnd' => 'Data termine',
      'direction' => 'Direzione',
      'duration' => 'Durata',
      'description' => 'Descrizione',
      'users' => 'Utenti',
      'contacts' => 'Contatti',
      'leads' => 'Leads',
      'reminders' => 'Promemoria',
      'account' => 'Account',
      'acceptanceStatus' => 'Stato accettazione',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Pianificato',
        'Held' => 'Tenere',
        'Not Held' => 'Lasciare',
      ),
      'direction' => 
      array (
        'Outbound' => 'in Uscita',
        'Inbound' => 'in Ingresso',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nessun',
        'Accepted' => 'Accettato',
        'Declined' => 'Rifiutato',
        'Tentative' => 'Provvisorio',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Trattenuto',
      'setNotHeld' => 'Non Trattenuto',
    ),
    'labels' => 
    array (
      'Create Call' => 'Crea chiamata',
      'Set Held' => 'Trattenuto',
      'Set Not Held' => 'Non Trattenuto',
      'Send Invitations' => 'Inviare inviti',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Pianificato',
      'held' => 'Held',
      'todays' => 'Today\'s',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'description' => 'Descrizione',
      'status' => 'Stato',
      'type' => 'Tipo',
      'startDate' => 'Data inizio',
      'endDate' => 'Data termine',
      'targetLists' => 'Liste di destinazione',
      'excludingTargetLists' => 'Esclusioni da liste di destinazione',
      'sentCount' => 'Inviato',
      'openedCount' => 'Aperto',
      'clickedCount' => 'Cliccato',
      'optedOutCount' => 'Rinuncia',
      'bouncedCount' => 'Bounced',
      'optedInCount' => 'Iscritto',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Leads Created',
      'revenue' => 'Entrata',
      'revenueConverted' => 'Entrata (convertita)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (convertito)',
      'budgetCurrency' => 'Budget Currency',
      'contactsTemplate' => 'Modello contatti',
      'leadsTemplate' => 'Modello Leads',
      'accountsTemplate' => 'Modello di account',
      'usersTemplate' => 'Modello utenti',
      'mailMergeOnlyWithAddress' => 'Salta record senza indirizzo',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste di destinazione',
      'excludingTargetLists' => 'Esclusioni da liste di destinazione',
      'accounts' => 'Account',
      'contacts' => 'Contatti',
      'leads' => 'Leads',
      'opportunities' => 'Opportunita\'',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Email Massiva',
      'trackingUrls' => 'Tracking URLs',
      'contactsTemplate' => 'Modello contatti',
      'leadsTemplate' => 'Modello Leads',
      'accountsTemplate' => 'Modello di account',
      'usersTemplate' => 'Modello utenti',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Televisione',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Pianificazione',
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
        'Complete' => 'Completo',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Create Campaign',
      'Target Lists' => 'Liste di destinazione',
      'Statistics' => 'Statistiche',
      'hard' => 'duro',
      'soft' => 'leggeto',
      'Unsubscribe' => 'Annulla l\'iscrizione',
      'Mass Emails' => 'Email Massive',
      'Email Templates' => 'Modelli Email',
      'Unsubscribe again' => 'Unsubscribe again',
      'Subscribe again' => 'Subscribe again',
      'Create Target List' => 'Elenco crea target',
      'Mail Merge' => 'Stampa unione',
      'Generate Mail Merge PDF' => 'Genera Stampa unione pdf',
    ),
    'presetFilters' => 
    array (
      'active' => 'Attivo',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Sei stato rimosso dalla nostra mailing list.',
      'subscribedAgain' => 'You are subscribed again.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Obiettivi che devono ricevere i messaggi .',
      'excludingTargetLists' => 'Obiettivi che non dovrebbe ricevere messaggi.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Azione',
      'actionDate' => 'Data',
      'data' => 'Data',
      'campaign' => 'Campagnia',
      'parent' => 'Target',
      'object' => 'Oggetto',
      'application' => 'Applicazione',
      'queueItem' => 'Queue Item',
      'stringData' => 'String Data',
      'stringAdditionalData' => 'String Additional Data',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Queue Item',
      'parent' => 'Genitore',
      'object' => 'Object',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Inviato',
        'Opened' => 'Aperto',
        'Opted Out' => 'Rinuncia',
        'Bounced' => 'Bounced',
        'Clicked' => 'Cliccato',
        'Lead Created' => 'Lead Created',
        'Opted In' => 'Iscritto',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Tutti',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Inviato',
      'opened' => 'Aperto',
      'optedOut' => 'Rinuncia',
      'optedIn' => 'Iscritto',
      'bounced' => 'Bounced',
      'clicked' => 'Clicked',
      'leadCreated' => 'Lead Created',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Codice da inserire al posto dell\' URL',
      'campaign' => 'Campagnia',
    ),
    'links' => 
    array (
      'campaign' => 'Campagnia',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Creazione URL di monitoraggio',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'number' => 'Numero',
      'status' => 'Stato',
      'account' => 'Account',
      'contact' => 'Contatti',
      'contacts' => 'Contatti',
      'priority' => 'Priorita\'',
      'type' => 'Tipo',
      'description' => 'Descrizione',
      'inboundEmail' => 'Gruppo di account email',
      'lead' => 'Lead',
      'attachments' => 'Allegati',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Gruppo di account email',
      'account' => 'Account',
      'contact' => 'Contatto (Primario)',
      'Contacts' => 'Contatti',
      'meetings' => 'Riunioni',
      'calls' => 'Chiamate',
      'tasks' => 'Compiti',
      'emails' => 'Email',
      'articles' => 'Knowledge Base Articles',
      'lead' => 'Lead',
      'attachments' => 'Allegati',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nuovo',
        'Assigned' => 'Assegnato',
        'Pending' => 'In attesa',
        'Closed' => 'Chiuso',
        'Rejected' => 'Rigettato',
        'Duplicate' => 'Duplicato',
      ),
      'priority' => 
      array (
        'Low' => 'Basso',
        'Normal' => 'Normale',
        'High' => 'Alto',
        'Urgent' => 'Urgente',
      ),
      'type' => 
      array (
        'Question' => 'Domande',
        'Incident' => 'Incidente',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Crea Caso',
      'Close' => 'Chiuso',
      'Reject' => 'Rigettato',
      'Closed' => 'Chiuso',
      'Rejected' => 'Rigettato',
    ),
    'presetFilters' => 
    array (
      'open' => 'Aperto',
      'closed' => 'Chiuso',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'Email',
      'title' => 'Primary Account Title',
      'account' => 'Account',
      'accounts' => 'Account',
      'phoneNumber' => 'Telefono',
      'accountType' => 'Tipo di Account',
      'doNotCall' => 'Non chiamare',
      'address' => 'Indirizzi',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Titolo',
      'description' => 'Descrizione',
      'campaign' => 'Campaign',
      'targetLists' => 'Liste di destinazione',
      'targetList' => 'Lista di destinazione',
      'portalUser' => 'Portal User',
      'originalLead' => 'Original Lead',
      'acceptanceStatus' => 'Stato accettazione',
      'accountIsInactive' => 'Account inattivo',
      'acceptanceStatusMeetings' => 'Stato accettazione (riunioni)',
      'acceptanceStatusCalls' => 'Stato accettazione (chiamate)',
    ),
    'links' => 
    array (
      'opportunities' => 'Opportunita\'',
      'cases' => 'Casi',
      'targetLists' => 'Liste di destinazione',
      'campaignLogRecords' => 'Log Campagna',
      'campaign' => 'Campagna',
      'account' => 'Account (Primario)',
      'accounts' => 'Account',
      'casesPrimary' => 'Casi (Primario)',
      'tasksPrimary' => 'Attività (espanso)',
      'portalUser' => 'Portale Utente',
      'originalLead' => 'Original Lead',
      'documents' => 'Documenti',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Crea Contatto',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Nessun--',
        'Decision Maker' => 'Responsabile',
        'Evaluator' => 'Valutatore',
        'Influencer' => 'Influencer',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portale Utenti',
      'notPortalUsers' => 'Nessun Portale Utenti',
      'accountActive' => 'Attivo',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Crea documento',
      'Details' => 'Dettagli',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'file' => 'File',
      'type' => 'Tipo',
      'publishDate' => 'Data di pubblicazione',
      'expirationDate' => 'Data di scadenza',
      'description' => 'Descrizione',
      'accounts' => 'Accounts',
      'folder' => 'Cartella',
    ),
    'links' => 
    array (
      'accounts' => 'Account',
      'opportunities' => 'Opportunita\'',
      'folder' => 'Cartella',
      'leads' => 'Leads',
      'contacts' => 'Contatti',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Attivo',
        'Draft' => 'Bozza',
        'Expired' => 'Scaduto',
        'Canceled' => 'Cancellato',
      ),
      'type' => 
      array (
        '' => 'Nessun',
        'Contract' => 'Contratto',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Contratto di licenza',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Attivo',
      'draft' => 'Bozza',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Crea cartella Documenti',
      'Manage Categories' => 'Gestione cartelle',
      'Documents' => 'Documenti',
    ),
    'links' => 
    array (
      'documents' => 'Documenti',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'target' => 'Target',
      'sentAt' => 'Data invio',
      'attemptCount' => 'Prove',
      'emailAddress' => 'Indirizzo Email',
      'massEmail' => 'Email Massiva',
      'isTest' => 'è un test',
    ),
    'links' => 
    array (
      'target' => 'Target',
      'massEmail' => 'Email Massiva',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'In attesa',
        'Sent' => 'Inviato',
        'Failed' => 'Fallito',
        'Sending' => 'Invio',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'In attesa',
      'sent' => 'Inviato',
      'failed' => 'Fallito',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Crea Articolo',
      'Any' => 'Tutto',
      'Send in Email' => 'Spedisci via Email',
      'Move Up' => 'Sposta in Alto',
      'Move Down' => 'Sposta in Basso',
      'Move to Top' => 'Sposta in alto',
      'Move to Bottom' => 'Sposta in basso',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'type' => 'Tipo',
      'attachments' => 'Allegato',
      'publishDate' => 'Data di pubblicazione',
      'expirationDate' => 'Data di Scadenza',
      'description' => 'Descrizione',
      'body' => 'Corpo',
      'categories' => 'Categorie',
      'language' => 'Lingua',
      'portals' => 'Portali',
    ),
    'links' => 
    array (
      'cases' => 'Casi',
      'opportunities' => 'Opportunita\'',
      'categories' => 'Categorie',
      'portals' => 'Portali',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'In Revisione',
        'Draft' => 'Bozza',
        'Archived' => 'Archiviato',
        'Published' => 'Pubblicato',
      ),
      'type' => 
      array (
        'Article' => 'Articolo',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'L\'articolo sarà disponibile solo nei portali specificati.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Pubblicato',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Crea  Categoria',
      'Manage Categories' => 'Gestione categorie',
      'Articles' => 'Articoli',
    ),
    'links' => 
    array (
      'articles' => 'Articoli',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Convertito in',
      'Create Lead' => 'Crea Lead',
      'Convert' => 'Convertire',
      'convert' => 'convertire',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'Email',
      'title' => 'Titolo',
      'website' => 'Sito Web',
      'phoneNumber' => 'Telefono',
      'accountName' => 'Nome utente',
      'doNotCall' => 'Non chiamare',
      'address' => 'Indirizzi',
      'status' => 'Stato',
      'source' => 'Provenienza',
      'opportunityAmount' => 'Opportunity Amount',
      'opportunityAmountConverted' => 'Opportunity Amount (converted)',
      'description' => 'Descrizione',
      'createdAccount' => 'Account',
      'createdContact' => 'Contatti',
      'createdOpportunity' => 'Opportunità',
      'campaign' => 'Campagnia',
      'targetLists' => 'Liste di destinazione',
      'targetList' => 'Lista di destinazione',
      'industry' => 'Settore',
      'acceptanceStatus' => 'Stato accettazione',
      'opportunityAmountCurrency' => 'Valuta dell\'importo della proposta',
      'acceptanceStatusMeetings' => 'Stato accettazione (riunioni)',
      'acceptanceStatusCalls' => 'Stato accettazione (chiamate)',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste di destinazione',
      'campaignLogRecords' => 'Log Campagna',
      'campaign' => 'Campagna',
      'createdAccount' => 'Account',
      'createdContact' => 'Contatti',
      'createdOpportunity' => 'Opportunità',
      'cases' => 'Casi',
      'documents' => 'Documenti',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nuovo',
        'Assigned' => 'Assegnato',
        'In Process' => 'In corso',
        'Converted' => 'Convertito',
        'Recycled' => 'Recuperato',
        'Dead' => 'Fuori uso',
      ),
      'source' => 
      array (
        '' => 'Nessun',
        'Call' => 'Chiamata',
        'Email' => 'Email',
        'Existing Customer' => 'Cliente esistente',
        'Partner' => 'Partner',
        'Public Relations' => 'Pubbliche Relazioni',
        'Web Site' => 'Sito Web',
        'Campaign' => 'Campagna',
        'Other' => 'Altro',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Attivo',
      'actual' => 'Attuale',
      'converted' => 'Convertito',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Stato',
      'storeSentEmails' => 'Archiviare Email Inviate',
      'startAt' => 'Data inizio',
      'fromAddress' => 'Indirizzo mittente',
      'fromName' => 'Dal nome',
      'replyToAddress' => 'Rispondi aa Indirizzo',
      'replyToName' => 'Rispondi a Nome',
      'campaign' => 'Campagna',
      'emailTemplate' => 'Modello Email',
      'inboundEmail' => 'Email Account',
      'targetLists' => 'Liste di destinazione',
      'excludingTargetLists' => 'Escludi Liste di Destinazione',
      'optOutEntirely' => 'Opt-Out Entirely',
      'smtpAccount' => 'Account SMTP',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste di Destinazione',
      'excludingTargetLists' => 'Excluding Target Lists',
      'queueItems' => 'Queue Items',
      'campaign' => 'Campagna',
      'emailTemplate' => 'Modello Email',
      'inboundEmail' => 'Email Account',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Bozza',
        'Pending' => 'In attesa',
        'In Process' => 'In corso',
        'Complete' => 'Completo',
        'Canceled' => 'Cancellato',
        'Failed' => 'Fallito',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Crea Email Massive',
      'Send Test' => 'Invia Test',
      'System SMTP' => 'Sistema SMTP',
      'system' => 'Sistema',
      'group' => 'Gruppo',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Selezionare almeno un destinatario.',
      'testSent' => 'L\'Email di prova dovrebbe essere stata inviata',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Gli indirizzi email dei destinatari che hanno cancellato l\'iscrizione verranno contrassegnati come disabilitati e non riceveranno più alcuna email.',
      'targetLists' => 'Destinatari che devono ricevere i messaggi.',
      'excludingTargetLists' => 'Destinatari che non devono ricevere i messaggi.',
      'storeSentEmails' => 'Le email verranno salvate nel CRM',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Attuale',
      'complete' => 'Completo',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'parent' => 'Genitore',
      'status' => 'Stato',
      'dateStart' => 'Data inizio',
      'dateEnd' => 'Data termine',
      'duration' => 'Durata',
      'description' => 'Descrizione',
      'users' => 'Utenti',
      'contacts' => 'Contatti',
      'leads' => 'Iniziative',
      'reminders' => 'Promemoria',
      'account' => 'Account',
      'acceptanceStatus' => 'Stato accettazione',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Pianificato',
        'Held' => 'Trattenuto',
        'Not Held' => 'Non trattenuto',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nessun',
        'Accepted' => 'Accettato',
        'Declined' => 'Declinato',
        'Tentative' => 'Tentativo',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Trattenuto',
      'setNotHeld' => 'Non trattenuto',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Crea Riunione',
      'Set Held' => 'Trattenuto',
      'Set Not Held' => 'Non trattenuto',
      'Send Invitations' => 'Inviare inviti',
      'on time' => 'puntuale',
      'before' => 'prima',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Pianificato',
      'held' => 'Trattenuto',
      'todays' => 'Di oggi',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Nulla è stato inviato',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'account' => 'Account',
      'stage' => 'Stage',
      'amount' => 'Importo',
      'probability' => 'Probabilità, %',
      'leadSource' => 'Sorgente Lead',
      'doNotCall' => 'Non chiamare',
      'closeDate' => 'Data di chiusura',
      'contacts' => 'Contatti',
      'description' => 'Descrizione',
      'amountConverted' => 'Importo (convertito)',
      'amountWeightedConverted' => 'Importo Ponderato',
      'campaign' => 'Campagna',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Valuta dell\'importo',
      'contactRole' => 'Ruolo contatto',
      'lastStage' => 'Ultimo Stadio',
    ),
    'links' => 
    array (
      'contacts' => 'Contatti',
      'documents' => 'Documentsi',
      'campaign' => 'Campagna',
      'originalLead' => 'Original Lead',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualifica',
        'Proposal' => 'Proposta',
        'Negotiation' => 'Negoziazione',
        'Needs Analysis' => 'Necessita di analisi',
        'Value Proposition' => 'Proposta di Valore',
        'Id. Decision Makers' => 'Id. Responsabile',
        'Perception Analysis' => 'Percezione dell\'Analisi',
        'Proposal/Price Quote' => 'Proposta / Preventivo',
        'Negotiation/Review' => 'Negoziazione/Revisione',
        'Closed Won' => 'Chiuso Positivamente',
        'Closed Lost' => 'Chiuso Negativamente',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Crea Opportunità',
    ),
    'presetFilters' => 
    array (
      'open' => 'Aperto',
      'won' => 'Vinto',
      'lost' => 'Perso',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'description' => 'Descrizione',
      'entryCount' => 'Contatore iniziale',
      'optedOutCount' => 'Conteggio cancellazioni',
      'campaigns' => 'Campagne',
      'endDate' => 'Data termine',
      'targetLists' => 'Lista di destinazione',
      'includingActionList' => 'Include',
      'excludingActionList' => 'Esclude',
      'targetStatus' => 'Stato target',
      'isOptedOut' => 'È stato cancellato',
    ),
    'links' => 
    array (
      'accounts' => 'Account',
      'contacts' => 'Contatti',
      'leads' => 'Leads',
      'campaigns' => 'Campagne',
      'massEmails' => 'Mailing massivo',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Televisione',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Cancellato iscrizione',
        'Listed' => 'Elencato',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Crea lista di destinazione',
      'Opted Out' => 'Rinunciato',
      'Cancel Opt-Out' => 'Cancella rinuncia',
      'Opt-Out' => 'Rinuncia',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'parent' => 'Genitore',
      'status' => 'Stato',
      'dateStart' => 'Data inizio',
      'dateEnd' => 'Data di scadenza',
      'dateStartDate' => 'Data inizio (tutto il giorno)',
      'dateEndDate' => 'Data termine (tutto il giorno)',
      'priority' => 'Priorita\'',
      'description' => 'Descrizione',
      'isOverdue' => 'In ritardo',
      'account' => 'Account',
      'dateCompleted' => 'Completato in data',
      'attachments' => 'Allegati',
      'reminders' => 'Promemoria',
      'contact' => 'Contatto',
    ),
    'links' => 
    array (
      'attachments' => 'Allegato',
      'account' => 'Account',
      'contact' => 'Contatto',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Non iniziato',
        'Started' => 'Iniziato',
        'Completed' => 'Completato',
        'Canceled' => 'Cancellato',
        'Deferred' => 'Prorogare',
      ),
      'priority' => 
      array (
        'Low' => 'Basso',
        'Normal' => 'Normale',
        'High' => 'Alto',
        'Urgent' => 'Urgente',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Crea Compito',
      'Complete' => 'Completo',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Attuale',
      'completed' => 'Completato',
      'deferred' => 'Prorogare',
      'todays' => 'Di oggi',
      'overdue' => 'Scaduto',
    ),
  ),
);
?>