<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Lietotājs',
      'action' => 'Darbība',
      'createdAt' => 'Datums',
      'target' => 'Mērķa adresāti',
      'targetType' => 'Mērķa adresātu tips',
      'authToken' => 'Autentifikācijas tokens',
      'ipAddress' => 'IP adrese',
      'authLogRecord' => 'Autentifikācijas reģistra ieraksts',
    ),
    'links' => 
    array (
      'authToken' => 'Autentifikācijas tokens',
      'authLogRecord' => 'Autentifikācijas reģistra ieraksts',
      'user' => 'Lietotājs',
      'target' => 'Mērķa adresāti',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Tikai mani',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Izlasīt',
        'update' => 'Atjaunināt',
        'delete' => 'Izdzēst',
        'create' => 'Izveidot',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Atļauts',
      'Disabled' => 'Nav atļauts',
      'System' => 'Sistēma',
      'Users' => 'Lietotāji',
      'Email' => 'E-pasts',
      'Data' => 'Dati',
      'Customization' => 'Pielāgošana',
      'Available Fields' => 'Pieejamie lauki',
      'Layout' => 'Izkārtojums',
      'Entity Manager' => 'Vienību pārvaldnieks',
      'Add Panel' => 'Pievienot paneli',
      'Add Field' => 'Pievienot lauku',
      'Settings' => 'Iestatījumi',
      'Scheduled Jobs' => 'Ieplānotie darbi',
      'Upgrade' => 'Atjaunināt',
      'Clear Cache' => 'Notīrīt kešatmiņu',
      'Rebuild' => 'Atkārtoti izveidot',
      'Teams' => 'Grupas',
      'Roles' => 'Lomas',
      'Portal' => 'Portāls',
      'Portals' => 'Portāli',
      'Portal Roles' => 'Lomas portālā',
      'Portal Users' => 'Portāla lietotāji',
      'API Users' => 'API lietotājs',
      'Outbound Emails' => 'Izejošie e-pasti',
      'Group Email Accounts' => 'Grupas e-pasta konti',
      'Personal Email Accounts' => 'Personiskie e-pasta konti',
      'Inbound Emails' => 'Ienākošie e-pasti',
      'Email Templates' => 'E-pastu veidnes',
      'Import' => 'Importēt',
      'Layout Manager' => 'Izkārtojuma pārvaldnieks',
      'User Interface' => 'Lietotāja saskarnes',
      'Auth Tokens' => 'Autentifikācijas tokeni',
      'Auth Log' => 'autentifikācijas reģistrs',
      'Authentication' => 'Autentifikācija',
      'Currency' => 'Valūta',
      'Integrations' => 'Integrācijas',
      'Extensions' => 'Paplašinājumi',
      'Upload' => 'Augšupielādēt',
      'Installing...' => 'Tiek instalēts...',
      'Upgrading...' => 'Tiek jaunināts...',
      'Upgraded successfully' => 'Jaunināšana veikta sekmīgi',
      'Installed successfully' => 'Instalēšana veikta sekmīgi',
      'Ready for upgrade' => 'Gatavs jaunināšanai',
      'Run Upgrade' => 'Izpildīt jaunināšanu',
      'Install' => 'Instalēt',
      'Ready for installation' => 'Gatavs instalēšanai',
      'Uninstalling...' => 'Notiek atinstalēšana...',
      'Uninstalled' => 'Atinstalēts',
      'Create Entity' => 'Izveidot vienību',
      'Edit Entity' => 'Rediģēt vienību',
      'Create Link' => 'Izveidot saiti',
      'Edit Link' => 'Rediģēt saiti',
      'Notifications' => 'Paziņojumi',
      'Jobs' => 'Darbi',
      'Reset to Default' => 'Atiestatīt noklusējumu',
      'Email Filters' => 'E-pastu filtri',
      'Action History' => 'Darbības vēsture',
      'Label Manager' => 'Etiķešu pārvaldnieks',
      'Template Manager' => 'Veidņu pārvaldnieks',
      'Lead Capture' => 'Potenciālā klienta tvērums',
      'Attachments' => 'Pielikumi',
      'System Requirements' => 'Sistēmas prasības',
      'PHP Settings' => 'PHP iestatījumi',
      'Database Settings' => 'Datubāzes iestatījumi',
      'Permissions' => 'Atļaujas',
      'Success' => 'Panākumi',
      'Fail' => 'Neveiksme',
      'is recommended' => 'ir ieteicams',
      'extension is missing' => 'trūkst pagarinājuma',
    ),
    'layouts' => 
    array (
      'list' => 'Saraksts',
      'detail' => 'Detalizējums',
      'listSmall' => 'Saraksts (īsais)',
      'detailSmall' => 'Detalizējums (īsais)',
      'detailPortal' => 'Detalizējums (portālam)',
      'detailSmallPortal' => 'Detalizējums (īsais, portālam)',
      'listSmallPortal' => 'Saraksts (īsais, portālam)',
      'listPortal' => 'Saraksts (portālam)',
      'relationshipsPortal' => 'Relāciju paneļi (portāls)',
      'filters' => 'Meklēt filtrus',
      'massUpdate' => 'Masveida atjauninājums',
      'relationships' => 'Relāciju paneļi',
      'sidePanelsDetail' => 'Sānu panelis (detalizējums)',
      'sidePanelsEdit' => 'Sānu panelis (rediģēšana)',
      'sidePanelsDetailSmall' => 'Sānu panelis (mazais detalizējums)',
      'sidePanelsEditSmall' => 'Sānu panelis (mazā rediģēšana)',
      'kanban' => '"Kanban"',
      'detailConvert' => 'Konvertēt potenciālo klientu',
      'listForAccount' => 'Saraksts (kontam)',
      'listForContact' => 'Saraksts (kontaktiem)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adrese',
      'array' => 'Masīvs',
      'foreign' => 'Ārējais',
      'duration' => 'Ilgums',
      'password' => 'Parole',
      'personName' => 'Personas vārds, uzvārds',
      'autoincrement' => 'Automātiskais palielinājums',
      'bool' => 'Būla',
      'currency' => 'Valūta',
      'currencyConverted' => 'Valūta (konvertēts)',
      'date' => 'Datums',
      'datetime' => 'Datums-laiks',
      'datetimeOptional' => 'Datums/Datums-laiks',
      'email' => 'E-pasts',
      'enum' => 'Uzskaitījums',
      'enumInt' => 'Uzskaitījuma vesels skaitlis',
      'enumFloat' => 'Uzskaitījuma peldošā komata skaitlis',
      'float' => 'Peldošā komata',
      'int' => 'Vesels skaitlis',
      'link' => 'Saite',
      'linkMultiple' => 'Saišu kopa',
      'linkParent' => 'Primārā saite',
      'phone' => 'Tālrunis',
      'text' => 'Teksts',
      'url' => 'Vietrādis URL',
      'varchar' => 'Mainīgā izmēra teksts',
      'file' => 'Fails',
      'image' => 'Attēls',
      'multiEnum' => 'Uzskaitījumu kopa',
      'attachmentMultiple' => 'Pielikumu kopa',
      'rangeInt' => 'Diapazona vesels skaitlis',
      'rangeFloat' => 'Diapazona peldošā komata skaitlis',
      'rangeCurrency' => 'Diapazona valūta',
      'wysiwyg' => 'Izvades pilna atbilstība',
      'map' => 'Kartējums',
      'number' => 'Numurs (automātiskais palielinājums)',
      'colorpicker' => 'Krāsu izvēle',
      'jsonArray' => '"Json" masīvs',
      'jsonObject' => '"Json" objekts',
    ),
    'fields' => 
    array (
      'type' => 'Tips',
      'name' => 'Nosaukums',
      'label' => 'Etiķete',
      'tooltipText' => 'Rīka padoma teksts',
      'required' => 'Obligāts',
      'default' => 'Noklusējuma',
      'maxLength' => 'Maks. garums',
      'options' => 'Opcijas',
      'after' => 'Pēc (lauka)',
      'before' => 'Pirms (lauka)',
      'link' => 'Saite',
      'field' => 'Lauks',
      'min' => 'Min.',
      'max' => 'Maks.',
      'translation' => 'Tulkojums',
      'previewSize' => 'Priekšskatījuma izmērs',
      'noEmptyString' => 'Tukša virknes vērtība nav atļauta',
      'defaultType' => 'Noklusējuma tips',
      'seeMoreDisabled' => 'Vairs neatļaut teksta izgriešanu',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Vienību saraksts',
      'isSorted' => 'Kārtots (pēc alfabēta)',
      'audited' => 'Auditēts',
      'trim' => 'Apgriezt',
      'height' => 'Augstums (pikseļos)',
      'minHeight' => 'Min. augstums (pikseļos)',
      'provider' => 'Pakalpojuma sniedzējs',
      'typeList' => 'Tipu saraksts',
      'rows' => 'Rindiņu skaits teksta apgabalā',
      'lengthOfCut' => 'Izgriezuma garums',
      'sourceList' => 'Avotu saraksts',
      'prefix' => 'Prefikss',
      'nextNumber' => 'Nākamais skaitlis',
      'padLength' => 'Tastatūras garums',
      'disableFormatting' => 'Izslēgt formatēšanu',
      'dynamicLogicVisible' => 'Nosacījumi, lai lauku padarītu redzamu',
      'dynamicLogicReadOnly' => 'Nosacījumi, lai lauku padarītu tikai lasāmu',
      'dynamicLogicRequired' => 'Nosacījumi, lai lauku padarītu obligātu',
      'dynamicLogicOptions' => 'Nosacījuma opcijas',
      'probabilityMap' => 'Posma varbūtība (%)',
      'readOnly' => 'Tikai lasāms',
      'maxFileSize' => 'Maks. Faila lielums (Mb)',
      'isPersonalData' => 'Ir personas dati',
      'useIframe' => 'Izmantot "Iframe"',
      'useNumericFormat' => 'Izmantot skaitlisko formātu',
      'strip' => 'Virkne',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Disable Inline Edit',
      'allowCustomOptions' => 'Allow Custom Options',
      'displayAsLabel' => 'Display as Label',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Tiks veikta "EspoCRM" jaunināšana, ieviešot versiju <strong>{version}</strong>. Jaunināšana nedaudz ieilgs, lūdzam jūsu pacietību.',
      'upgradeDone' => '"EspoCRM" jaunināšana ir veikta, ieviešot versiju <strong>{version}</strong>.',
      'upgradeBackup' => 'Pirms jaunināšanas iesakām "EspoCRM" failiem izveidot dublējumkopiju.',
      'thousandSeparatorEqualsDecimalMark' => 'Tūkstošu atdalīšanas simbolsa nedrīkst būt tāds pats kā decimāldaļu atdalītājs.',
      'userHasNoEmailAddress' => 'Lietotājam nav e-pasta adreses.',
      'selectEntityType' => 'Atlasīt vienību tipu kreisajā izvēlnē.',
      'selectUpgradePackage' => 'Atlasīt jauninājumu pakotni',
      'downloadUpgradePackage' => 'Lejupielādēt jauninājumu pakotni(-es) <a href="{url}">here</a>.',
      'selectLayout' => 'Kreisajā izvēlnē atlasīt nepieciešamo izkārtojumu un to rediģēt.',
      'selectExtensionPackage' => 'Atlasīt paplašinājumu pakotni',
      'extensionInstalled' => 'Paplašinājums {name} {version} tika instalēts.',
      'installExtension' => 'Paplašinājums {name} {version} ir gatavs instalēšanai.',
      'cronIsNotConfigured' => 'Ieplānotie darbi netiek izpildīti. Līdz ar to ienākošie e-pasti, paziņojumi un atgādinājumi nedarbojas. Sekojiet instrukcijai [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab), lai iestatītu uzdevumu plānotāja darbu.',
      'newVersionIsAvailable' => 'Ir pieejama "EspoCRM" jaunā versija {latestVersion}.',
      'newExtensionVersionIsAvailable' => 'Ir pieejama jauna {extensionName} versija {latestVersion}.',
      'uninstallConfirmation' => 'Vai tiešām vēlaties atinstalēt paplašinājumu?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Lietotnes sistēmas iestatījumi.',
      'scheduledJob' => 'Darbus, kurus izpildījis uzdevumu plānotājs.',
      'upgrade' => 'Jaunināt "EspoCRM" versiju.',
      'clearCache' => 'Notīrīt visu servera puses apstrādes kešatmiņu.',
      'rebuild' => 'Atkārtoti izveidot servera puses apstrādi un notīrīt kešatmiņu.',
      'users' => 'Lietotāju pārvaldība.',
      'teams' => 'Grupu pārvaldība.',
      'roles' => 'Lomas pārvaldība.',
      'portals' => 'Portālu pārvaldība.',
      'portalRoles' => 'Lomas portālam.',
      'portalUsers' => 'Portālu lietotāji.',
      'outboundEmails' => 'SMTP iestatījumi izejošajiem e-pastiem.',
      'groupEmailAccounts' => 'Grupas IMAP e-pasta konti. E-pastu importēšana un uz konkrētu lietu attiecināmie e-pasti.',
      'personalEmailAccounts' => 'Lietotāju e-pasta konti.',
      'emailTemplates' => 'Izejošo e-pastu veidnes.',
      'import' => 'Importēt datus no CSV faila.',
      'layoutManager' => 'Pielāgot izkārtojumus (sarakstu, detalizējumu, rediģēšanu, meklēšanu, masveida atjauninājumu).',
      'entityManager' => 'Izveidot un rediģēt pielāgotās vienības. Pārvaldīt laukus un relācijas.',
      'userInterface' => 'Konfigurēt lietotāja saskarni.',
      'authTokens' => 'Aktīvās autentifikācijas sesijas. IP adrese un pēdējās piekļuves datums.',
      'authentication' => 'Autentifikācijas iestatījumi.',
      'currency' => 'Valūtas iestatījumi un kursi.',
      'extensions' => 'Instalēt vai atinstalēt paplašinājumus.',
      'integrations' => 'Integrācija ar trešo pušu pakalpojumiem.',
      'notifications' => 'Lietotnes ziņapmaiņas un e-pasta ziņojumu iestatījumi.',
      'inboundEmails' => 'Ienākošo e-pastu iestatījumi.',
      'emailFilters' => 'E-pasta ziņojumsi, kas atbilst norādītajam filtram netiks importēti.',
      'actionHistory' => 'Lietotāja darbību reģistrs.',
      'labelManager' => 'Pielāgot lietotnes etiķetes.',
      'templateManager' => 'Pielāgojiet ziņojumu veidnes.',
      'authLog' => 'Pieteikšanās vēsture.',
      'leadCapture' => 'API ieraksts norāda uz pāreju no tīmekļa kontakta uz potenciālo klientu.',
      'attachments' => 'Visi failu pielikumi tiek uzglabāti sistēmā.',
      'systemRequirements' => 'Sistēmas prasības EspoCRM.',
      'apiUsers' => 'Atsevišķi lietotāji integrācijas nolūkos.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Ļoti mazs',
        'small' => 'Mazs',
        'medium' => 'Vidējs',
        'large' => 'Liels',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'UN',
      'or' => 'VAI',
      'not' => 'NAV',
    ),
    'systemRequirements' => 
    array (
      'requiredPhpVersion' => 'PHP versija',
      'requiredMysqlVersion' => 'MySQL versija',
      'requiredMariadbVersion' => 'MariaDB version',
      'host' => 'Saimniekdatora nosaukums',
      'dbname' => 'Datubāzes nosaukums',
      'user' => 'Lietotāja vārds',
      'writable' => 'Rakstiski',
      'readable' => 'Lasāmi',
    ),
    'templates' => 
    array (
      'accessInfo' => 'Piekļuves informācija',
      'accessInfoPortal' => 'Piekļuves informācija par portāliem',
      'assignment' => 'Uzdevums',
      'mention' => 'Pieminēt',
      'noteEmailRecieved' => 'Piezīme par saņemto e-pastu',
      'notePost' => 'Piezīme par Postu',
      'notePostNoParent' => 'Piezīme par ziņojumu (bez vecākiem)',
      'noteStatus' => 'Piezīme par statusa atjaunināšanu',
      'passwordChangeLink' => 'Paroles maiņas saite',
      'invitation' => 'Ielūgums',
      'reminder' => 'Atgādinājums',
    ),
  ),
  'ApiUser' => 
  array (
    'labels' => 
    array (
      'Create ApiUser' => 'Izveidot API lietotāju',
    ),
  ),
  'Attachment' => 
  array (
    'fields' => 
    array (
      'role' => 'Loma',
      'related' => 'Saistīts',
      'file' => 'Fails',
      'type' => 'Tips',
      'field' => 'Lauks',
      'sourceId' => 'Avota ID',
      'storage' => 'Krātuve',
      'size' => 'Lielums (baitos)',
    ),
    'options' => 
    array (
      'role' => 
      array (
        'Attachment' => 'Pielikums',
        'Inline Attachment' => 'Iekļautais pielikums',
        'Import File' => 'Importēt failu',
        'Export File' => 'Eksportēt failu',
        'Mail Merge' => 'E-pasta sapludināšana',
        'Mass Pdf' => 'Masveida PDF',
      ),
    ),
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Ievietot dokumentu',
    ),
    'presetFilters' => 
    array (
      'orphan' => 'Bārenis',
    ),
  ),
  'AuthLogRecord' => 
  array (
    'fields' => 
    array (
      'username' => 'Lietotājvārds',
      'ipAddress' => 'IP adrese',
      'requestTime' => 'Pieprasījuma laiks',
      'createdAt' => 'Pieprasīts ',
      'isDenied' => 'Noraidīts',
      'denialReason' => 'Noraidījuma iemesls',
      'portal' => 'Portāls',
      'user' => 'Lietotājs',
      'authToken' => 'Autentifikācijas tokens izveidots',
      'requestUrl' => 'Pieprasījuma vietrādis URL',
      'requestMethod' => 'Pieprasījuma metode',
      'authTokenIsActive' => 'Autentifikācijas tokens ir aktīvs',
      'authenticationMethod' => 'Authentication Method',
    ),
    'links' => 
    array (
      'authToken' => 'Autentifikācijas tokens ir izveidots',
      'user' => 'Lietotājs',
      'portal' => 'Portāls',
      'actionHistoryRecords' => 'Darbību vēsture',
    ),
    'presetFilters' => 
    array (
      'denied' => 'Noraidīts',
      'accepted' => 'Akceptēts',
    ),
    'options' => 
    array (
      'denialReason' => 
      array (
        'CREDENTIALS' => 'Nederīgi akreditācijas dati',
        'INACTIVE_USER' => 'Neaktīvs lietotājs',
        'IS_PORTAL_USER' => 'Portāla lietotājs',
        'IS_NOT_PORTAL_USER' => 'Nav portāla lietotājs',
        'USER_IS_NOT_IN_PORTAL' => 'Lietotājs nav saistīts ar portālu',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Lietotājs',
      'ipAddress' => 'IP adrese',
      'lastAccess' => 'Pēdējās piekļuves datums',
      'createdAt' => 'Pieteikšanās datums',
      'isActive' => 'Ir aktīvs',
      'portal' => 'Portāls',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Darbību vēsture',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktīvs',
      'inactive' => 'Neaktīvs',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Iestatīt kā aktīvu',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Iestatīt kā neaktīvu',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Amats',
      'dateFrom' => 'Datums no',
      'dateTo' => 'Datums līdz',
      'autorefreshInterval' => 'Autoatsvaidzes intervāls',
      'displayRecords' => 'Rādīt ierakstus',
      'isDoubleHeight' => 'Augstums 2x',
      'mode' => 'Režīms',
      'enabledScopeList' => 'Ko rādīt',
      'users' => 'Lietotāji',
      'entityType' => 'Vienību tips',
      'primaryFilter' => 'Primārais filtrs',
      'boolFilterList' => 'Papildu filtri',
      'sortBy' => 'Kārtot (lauks)',
      'sortDirection' => 'Kārtot (virziens)',
      'expandedLayout' => 'Izkārtojums',
      'dateFilter' => 'Datumu filtrs',
      'futureDays' => 'Nākamās X dienas',
      'useLastStage' => 'Grupas pēc jaunākā sasniegtā posma',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Nedēļa (dienas kārtība)',
        'basicWeek' => 'Nedēļa',
        'month' => 'Mēnesis',
        'basicDay' => 'Diena',
        'agendaDay' => 'Diena (dienas kārtība)',
        'timeline' => 'Laika grafiks',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Atlasīt vienības tipu minipaneļa opcijās.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Lauks',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Vienāds ar',
        'notEquals' => 'Nav vienāds ar',
        'greaterThan' => 'Lielāks nekā',
        'lessThan' => 'Mazāks nekā',
        'greaterThanOrEquals' => 'Lielāks vai vienāds ar',
        'lessThanOrEquals' => 'Mazāks vai Vienāds ar',
        'in' => 'Ietilpst',
        'notIn' => 'Nav',
        'inPast' => 'Pagātnē',
        'inFuture' => 'Ir nākotne',
        'isToday' => 'Ir šodiena',
        'isTrue' => 'Ir patiess',
        'isFalse' => 'Ir aplams',
        'isEmpty' => 'Ir tukšs',
        'isNotEmpty' => 'Nav tukšs',
        'contains' => 'Satur',
        'notContains' => 'Nesatur',
        'has' => 'Satur',
        'notHas' => 'Nesatur',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Nosaukums (tēma)',
      'parent' => 'Primārais objekts',
      'status' => 'Statuss',
      'dateSent' => 'Nosūtīšanas datums',
      'from' => 'No',
      'to' => 'Līdz',
      'cc' => 'Kopija (CC)',
      'bcc' => 'Diskrētā kopija (BCC)',
      'replyTo' => 'Atbildēt',
      'replyToString' => 'Atbildēt uz (virkni)',
      'personStringData' => 'Person String Data',
      'isHtml' => 'Ir HTML kodējumā',
      'body' => 'Pamatteksts',
      'bodyPlain' => 'Pamatteksts (vienkāršs)',
      'subject' => 'Tēma',
      'attachments' => 'Pielikumi',
      'selectTemplate' => 'Atlasīt veidni',
      'fromEmailAddress' => 'No adreses',
      'toEmailAddresses' => 'Uz e-pasta adresēm',
      'emailAddress' => 'E-pasta adrese',
      'deliveryDate' => 'Piegādes datums',
      'account' => 'Konts',
      'users' => 'Lietotāji',
      'replied' => 'Atbildēts',
      'replies' => 'Atbildes',
      'isRead' => 'Ir izlasīts',
      'isNotRead' => 'Nav izlasīts',
      'isImportant' => 'Svarīgs',
      'isReplied' => 'Ir atbildēts',
      'isNotReplied' => 'Nav atbildēts',
      'isUsers' => 'Attiecas uz lietotāju',
      'inTrash' => 'Atkritnē',
      'sentBy' => 'Kas nosūtīja',
      'folder' => 'Mape',
      'inboundEmails' => 'Grupas konti',
      'emailAccounts' => 'Personiskie konti',
      'hasAttachment' => 'Ar pielikumu',
      'assignedUsers' => 'Piešķirtie lietotāji',
      'ccEmailAddresses' => 'E-pasta kopija (CC) sūtāma uz',
      'bccEmailAddresses' => 'Diskrētā kopija (BCC) uz e-pasta adresēm',
      'replyToEmailAddresses' => 'Atbildēt uz e-pasta adresi',
      'messageId' => 'Ziņojuma ID',
      'messageIdInternal' => 'Ziņojuma ID (iekšējais)',
      'folderId' => 'Mapes ID',
      'fromName' => 'Kā vārdā',
      'fromString' => 'No virknes',
      'fromAddress' => 'From Address',
      'isSystem' => 'Ir sistēma',
    ),
    'links' => 
    array (
      'replied' => 'Atbildēts',
      'replies' => 'Atbildes',
      'inboundEmails' => 'Grupas konti',
      'emailAccounts' => 'Personiskie konti',
      'assignedUsers' => 'Piešķirtie lietotāji',
      'sentBy' => 'Kas nosūtīja',
      'attachments' => 'Pielikumi',
      'fromEmailAddress' => 'No e-pasta adreses',
      'toEmailAddresses' => 'Uz e-pasta adresi',
      'ccEmailAddresses' => 'E-pasta kopija (CC) sūtāma uz',
      'bccEmailAddresses' => 'Diskrētā kopija (BCC) sūtāma uz',
      'replyToEmailAddresses' => 'Atbildēt uz e-pasta adresi',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Melnraksts',
        'Sending' => 'Sūtīšana',
        'Sent' => 'Nosūtīts',
        'Archived' => 'Arhivēts',
        'Received' => 'Saņemts',
        'Failed' => 'Neizdevās',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Arhivēt e-pastu',
      'Archive Email' => 'Arhivēt e-pastu',
      'Compose' => 'Veidot',
      'Reply' => 'Atbildēt',
      'Reply to All' => 'Atbildēt visiem',
      'Forward' => 'Pārsūtīt',
      'Original message' => 'Oriģinālais ziņojums',
      'Forwarded message' => 'Pārsūtītie ziņojumi',
      'Email Accounts' => 'Personiskie e-pasta konti',
      'Inbound Emails' => 'Grupu e-pasta konti',
      'Email Templates' => 'E-pasta veidnes',
      'Send Test Email' => 'Nosūtīt testa e-pastu',
      'Send' => 'Nosūtīt',
      'Email Address' => 'E-pasta adrese',
      'Mark Read' => 'Atzīmēt kā izlasīto',
      'Sending...' => 'Notiek sūtīšana...',
      'Save Draft' => 'Saglabāt melnrakstu',
      'Mark all as read' => 'Atzīmēt visu kā izlasīto',
      'Show Plain Text' => 'Rādīt vienkāršu tekstu',
      'Mark as Important' => 'Atzīmēt kā svarīgu',
      'Unmark Importance' => 'Noņemt svarīguma atzīmi',
      'Move to Trash' => 'Pārvietot uz atkritni',
      'Retrieve from Trash' => 'Izgūt no atkritni',
      'Move to Folder' => 'Pārvietot uz mapi',
      'Filters' => 'Filtri',
      'Folders' => 'Mapes',
      'Create Lead' => 'Izveidot potenciālo klientu',
      'Create Contact' => 'Izveidot kontaktu',
      'Add to Contact' => 'Pievienot kontaktiem',
      'Add to Lead' => 'Pievienot potenciālajiem klientiem',
      'Create Task' => 'Izveidot uzdevumu',
      'Create Case' => 'Izveidot lietu',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'SMTP nav uzstādīts. {link}.',
      'testEmailSent' => 'Nosūtīts testa e-pasts',
      'emailSent' => 'Nosūtīts e-pasts',
      'savedAsDraft' => 'Saglabāts kā melnraksts',
      'confirmInsertTemplate' => 'E-pasta pamatteksts tiks zaudēts. Vai tiešām vēlaties ievietot veidni?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Nosūtīts',
      'archived' => 'Arhivēts',
      'inbox' => 'Iesūtne',
      'drafts' => 'Melnraksts',
      'trash' => 'Atkritne',
      'important' => 'Svarīgi',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Atzīmēt kā izlasīto',
      'markAsNotRead' => 'Atzīmēt kā neizlasīto',
      'markAsImportant' => 'Atzīmēt kā svarīgu',
      'markAsNotImportant' => 'Noņemt svarīguma atzīmi',
      'moveToTrash' => 'Pārvietot uz atkritni',
      'moveToFolder' => 'Pārvietot uz mapi',
      'retrieveFromTrash' => 'Izgūt no atkritnes',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nosaukums',
      'status' => 'Statuss',
      'host' => 'Resursdators',
      'username' => 'Lietotājvārds',
      'password' => 'Parole',
      'port' => 'Ports',
      'monitoredFolders' => 'Pārraudzītās mapes',
      'ssl' => 'SSL',
      'fetchSince' => 'Ienest, sākot ar',
      'emailAddress' => 'E-pasta adrese',
      'sentFolder' => 'Nosūtīto e-pastu mape',
      'storeSentEmails' => 'Uzkrāt nosūtītos e-pastus',
      'keepFetchedEmailsUnread' => 'Ienestos e-pastus norādīt kā neizlasītos',
      'emailFolder' => 'Ielikt mapē',
      'useImap' => 'Ienest e-pastus',
      'useSmtp' => 'Lietot SMTP',
      'smtpHost' => 'SMTP resursdators',
      'smtpPort' => 'SMTP port',
      'smtpAuth' => 'SMTP autentifikācija',
      'smtpSecurity' => 'SMTP drošība',
      'smtpUsername' => 'SMTP lietotājvārds',
      'smtpPassword' => 'SMTP parole',
    ),
    'links' => 
    array (
      'filters' => 'Filtri',
      'emails' => 'E-pasti',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktīvs',
        'Inactive' => 'Neaktīvs',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Izveidot e-pasta kontu',
      'IMAP' => 'IMAP',
      'Main' => 'Galvenais',
      'Test Connection' => 'Testa savienojums',
      'Send Test Email' => 'Nosūtīt testa e-pastu',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nevarēja savienoties ar IMAP serveri',
      'connectionIsOk' => 'Savienojums izveidots',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Vairākas mapes cita no citas jāatdala ar komatu.

Jūs varat pievienot "nosūtīto ziņojumu" mapi, lai sinhronizētu e-pastus, kas nosūtīti no ārējā e-pasta klienta.',
      'storeSentEmails' => 'Nosūtītie e-pasti tiks uzglabāti IMAP serverī. E-pasta adreses laukam jāatbilst adresei, no kurienes e-pasti tiks nosūtīti.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primārais',
      'Opted Out' => 'Neizvēlēties',
      'Invalid' => 'Nederīgs',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'No',
      'to' => 'Līdz',
      'subject' => 'Tēma',
      'bodyContains' => 'Pamatteksts satur',
      'action' => 'Darbība',
      'isGlobal' => 'Ir globāls',
      'emailFolder' => 'Mape',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Izveidot e-pasta filtru',
      'Emails' => 'E-pasti',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignorēt',
        'Move to Folder' => 'Ielikt mapē',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Dot filtriem aprakstošo nosaukumu.',
      'subject' => 'Lietot a aizstājējzīmi *:

teksts* - sākas ar tekstu,
*teksts* - satur tekstu,
*teksts -beidzas ar tekstu.',
      'bodyContains' => 'E-pasta pamatteksts satur jebkuru no norādītajiem vārdiem vai frāzēm',
      'from' => 'E-pasti tiek sūtīti no norādītās adreses. Ja nav nepieciešams, atstājiet neaizpildītu. Varat izmantot aizstājējzīmi *.',
      'to' => 'E-pasti tiek sūtīti uz norādīto adresi. Ja nav nepieciešams, atstājiet neaizpildītu. Varat izmantot aizstājējzīmi *.',
      'isGlobal' => 'Attiecina šo filtru uz visiem sistēmā ienākošajiem e-pastiem.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Izlaist paziņojumus',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Izveidot mapi',
      'Manage Folders' => 'Pārvaldīt mapes',
      'Emails' => 'E-pasti',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds/nosaukums',
      'status' => 'Statuss',
      'isHtml' => 'Ir HTML',
      'body' => 'Pamatteksts',
      'subject' => 'Tēma',
      'attachments' => 'Pielikumi',
      'insertField' => 'Ievietot lauku',
      'oneOff' => 'Pa vienam',
      'category' => 'Kategorija',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Izveidot e-pasta veidni',
      'Info' => 'Informācija',
      'Available placeholders' => 'Pieejamie vietturi',
    ),
    'messages' => 
    array (
      'infoText' => 'Pieejamie vietturi:

{optOutUrl} &#8211; vietrādis URL atrakstīšanās saitei;

{optOutLink} &#8211; atrakstīšanās saite.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Atzīmējiet, ja šo veidni izmantosiet tikai vienu reizi. Piem., masveida e-pastam.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Faktiskais',
    ),
    'placeholderTexts' => 
    array (
      'today' => 'Today\'s date',
      'now' => 'Current date & time',
      'currentYear' => 'Current Year',
      'optOutUrl' => 'vietrādis URL atrakstīšanās saitei',
      'optOutLink' => 'atrakstīšanās saite',
    ),
  ),
  'EmailTemplateCategory' => 
  array (
    'labels' => 
    array (
      'Create EmailTemplateCategory' => 'Izveidot kategoriju',
      'Manage Categories' => 'Pārvaldīt kategorijas',
      'EmailTemplates' => 'E-pasta veidnes',
    ),
    'fields' => 
    array (
      'order' => 'Secība',
      'childList' => 'Apakšsaraksts',
    ),
    'links' => 
    array (
      'emailTemplates' => 'E-pasta veidnes',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Lauki',
      'Relationships' => 'Relācijas',
      'Schedule' => 'Grafiks',
      'Log' => 'Reģistrs',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Nosaukums/vārds',
      'type' => 'Tips',
      'labelSingular' => 'Etiķete vienskaitlī',
      'labelPlural' => 'Etiķete daudzskaitlī',
      'stream' => 'Straumēšana',
      'label' => 'Etiķete',
      'linkType' => 'Saites tips',
      'entityForeign' => 'Ārējā vienība',
      'linkForeign' => 'Ārējā saite',
      'link' => 'Saite',
      'labelForeign' => 'Ārējā etiķete',
      'sortBy' => 'Noklusējuma pasūtījums (lauks)',
      'sortDirection' => 'Noklusējuma pasūtījums (virziens)',
      'relationName' => 'Vidējais tabulas nosaukums',
      'linkMultipleField' => 'Saites lauku kopa',
      'linkMultipleFieldForeign' => 'Ārējās saites lauku kopa',
      'disabled' => 'Nav atļauts',
      'textFilterFields' => 'Teksta filtra lauki',
      'audited' => 'Auditēts',
      'auditedForeign' => 'Ārējais auditētais',
      'statusField' => 'statusa lauks',
      'beforeSaveCustomScript' => 'Pirms pielāgotā skripta saglabāšanas',
      'color' => 'Krāsa',
      'kanbanViewMode' => '"Kanban" skatījums',
      'kanbanStatusIgnoreList' => 'Ignorētās grupas "Kanban" skatījumā',
      'iconClass' => 'Ikona',
      'fullTextSearch' => 'Pilna teksta meklēšana',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Nav',
        'Base' => 'Pamats',
        'Person' => 'Persona',
        'CategoryTree' => 'Kategoriju koks',
        'Event' => 'Notikums',
        'BasePlus' => 'Pamats un vēl',
        'Company' => 'Uzņēmums',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Daudzi pret daudziem',
        'oneToMany' => 'Viens pret daudziem',
        'manyToOne' => 'Daudzi pret vienu',
        'parentToChildren' => 'Primārais pret sekundāro',
        'childrenToParent' => 'Sekundārais pret primāro',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Augošā secībā',
        'desc' => 'Dilstošā secībā',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Vienība ir izveidota',
      'linkAlreadyExists' => 'Saišu nosaukumu konflikts.',
      'linkConflict' => 'Nosaukumu konflikts: saite vai lauks ar šādu nosaukumu jau pastāv.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Šī lauka atjauninājumi ir reģistrēti straumēšanā.',
      'textFilterFields' => 'Teksta meklēšanā lietotie lauki.',
      'stream' => 'Vai vienībai ir straumēšana.',
      'disabled' => 'Atzīmējiet, ka šī vienība jūsu sistēmā nav nepieciešama.',
      'linkAudited' => 'Saistītā ieraksta izveide un sasaistīšana ar esošu ierakstu tiks reģistrēta straumēšanā.',
      'linkMultipleField' => 'Lauku kopa sasaiste ir ērts veids, kā rediģēt relācijas . Nelietojiet to, ja iespējams liels saistīto ierakstu skaits.',
      'entityType' => 'Pamats un vēl - ietver paneļus aktivitātēm, vēsturei un uzdevumiem.

Notikums - pieejams kalendāra un aktivitāšu panelī.',
      'fullTextSearch' => 'Atkārtotas izveides izpildīšana ir obligāta.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Eksportēt visus laukus',
      'fieldList' => 'Lauku saraksts',
      'format' => 'Formāts',
    ),
    'options' => 
    array (
      'format' => 
      array (
        'csv' => 'CSV',
        'xlsx' => 'XLSX ("Excel")',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Nosaukums/vārds',
      'version' => 'Versija',
      'description' => 'Apraksts',
      'isInstalled' => 'Instalētie',
      'checkVersionUrl' => 'Vietrādis URL jauno versiju esamības pārbaudei',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Atinstalēt',
      'Install' => 'Instalēt',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Paplašinājums {name} jau ir atinstalēts',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Savienot',
      'Connected' => 'Savienots',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dinamiskā loģika',
      'Name' => 'Vārds/nosaukums',
      'Label' => 'Etiķete',
      'Type' => 'Tips',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Nav',
        'javascript: return this.dateTime.getNow(1);' => 'Tagad',
        'javascript: return this.dateTime.getNow(5);' => 'Tagad (5 m)',
        'javascript: return this.dateTime.getNow(15);' => 'Tagad (15 m)',
        'javascript: return this.dateTime.getNow(30);' => 'Tagad (30 m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 stunda',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 stundas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 diena',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 dienas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 dienas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 dienas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 dienas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 dienas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 nedēļa',
      ),
      'dateDefault' => 
      array (
        '' => 'Nav',
        'javascript: return this.dateTime.getToday();' => 'Šodien',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 diena',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 dienas',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 dienas',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 dienas',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 dienas',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 dienas',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 dienas',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 dienas',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 dienas',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 dienas',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 nedēļa',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 nedēļas',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 nedēļas',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mēnesis',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 mēneši',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 mēneši',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 mēneši',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 mēneši',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 mēneši',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 mēneši',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 mēneši',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 mēneši',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 mēneši',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 mēneši',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 gads',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Atjauninājumi tiks reģistrēti straumēšanā.',
      'required' => 'Lauks būs obligāts, to nedrīkst atstāt tukšu.',
      'default' => 'Pēc izveidošanas vērtība tiks iestatīta pēc noklusējuma.',
      'min' => 'Min. pieņemamā vērtība.',
      'max' => 'Maks. pieņemamā vērtība.',
      'seeMoreDisabled' => 'Neatzīmējot šo izvēli, gari teksti tiks īsināti.',
      'lengthOfCut' => 'Cik garš drīkst būt teksts pirms izgriešanas.',
      'maxLength' => 'Maks. pieņemamais teksta garums.',
      'before' => 'Datuma vērtībai jābūt pirms norādītā lauka datuma vērtības.',
      'after' => 'Datums vērtībai jābūt pēc norādītā lauka datuma vērtības.',
      'readOnly' => 'Lietotājs nevar norādīt lauka vērtību. Taču to iespējams aprēķināt pēc formulas.',
      'maxFileSize' => 'If tukšs vai 0, tad limita nav.',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Iela, mājas un dzīvokļa numurs',
        'city' => 'Pilsēta',
        'state' => 'Novads',
        'country' => 'Valsts',
        'postalCode' => 'Pasta indekss',
        'map' => 'Karte',
      ),
      'personName' => 
      array (
        'salutation' => 'Uzruna',
        'first' => 'Pirmais',
        'last' => 'Pēdējais',
      ),
      'currency' => 
      array (
        'converted' => '(Konvertēts)',
        'currency' => '(Valūta)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Datums',
      ),
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'E-pasts',
      'User' => 'Lietotājs',
      'Team' => 'Grupa',
      'Role' => 'Loma',
      'EmailTemplate' => 'E-pasta veidne',
      'EmailTemplateCategory' => 'E-pasta veidņu kategorijas',
      'EmailAccount' => 'Personiskais e-pasta konts',
      'EmailAccountScope' => 'Personiskais e-pasta konts',
      'OutboundEmail' => 'Izejošais e-pasts',
      'ScheduledJob' => 'Ieplānotais darbs',
      'ExternalAccount' => 'Ārējais konts',
      'Extension' => 'Paplašinājums',
      'Dashboard' => 'Infopanelis',
      'InboundEmail' => 'Grupas e-pasta konts',
      'Stream' => 'Straume',
      'Import' => 'Importēt',
      'Template' => 'Veidne',
      'Job' => 'Darbs',
      'EmailFilter' => 'E-pasta filtrs',
      'Portal' => 'Portāls',
      'PortalRole' => 'Loma portālā',
      'Attachment' => 'Pielikums',
      'EmailFolder' => 'E-pasta mape',
      'PortalUser' => 'Portāla lietotājs',
      'ApiUser' => 'API lietotājs',
      'ScheduledJobLogRecord' => 'Ieplānoo darbu reģistra ieraksts',
      'PasswordChangeRequest' => 'Paroles maiņas pieprasījums',
      'ActionHistoryRecord' => 'Darbību vēstures ieraksts',
      'AuthToken' => 'Autentifikācijas tokens',
      'UniqueId' => 'Unikālais ID',
      'LastViewed' => 'Pēdējo reizi skatīts',
      'Settings' => 'Iestatījumi',
      'FieldManager' => 'Lauks pārvaldnieks',
      'Integration' => 'Integrācija',
      'LayoutManager' => 'Izkārtojuma pārvaldnieks',
      'EntityManager' => 'Vienību pārvaldnieks',
      'Export' => 'Eksportēt',
      'DynamicLogic' => 'Dinamiskā loģika',
      'DashletOptions' => 'Minipaneļa opcijas',
      'Admin' => 'Administrators',
      'Global' => 'Globāls',
      'Preferences' => 'Preferences',
      'EmailAddress' => 'E-pasta adrese',
      'PhoneNumber' => 'Tālruņa numurs',
      'AuthLogRecord' => 'Autentifikācijas reģistra ieraksts',
      'AuthFailLogRecord' => 'Autentifikācijas faila reģistra ieraksts',
      'LeadCapture' => 'Potenciālā klienta tvēruma ieejas punkts',
      'LeadCaptureLogRecord' => 'Potenciālā klienta tvēruma reģistra ieraksts',
      'ArrayValue' => 'Masīva vērtība',
      'Account' => 'Konts',
      'Contact' => 'Kontakts',
      'Lead' => 'Potenciālais klients',
      'Target' => 'Mērķis',
      'Opportunity' => 'Iespēja',
      'Meeting' => 'Tikšanās',
      'Calendar' => 'Kalendārs',
      'Call' => 'Zvanīt',
      'Task' => 'Uzdevums',
      'Case' => 'Lieta',
      'Document' => 'Dokuments',
      'DocumentFolder' => 'Dokumentu mape',
      'Campaign' => 'Kampaņa',
      'TargetList' => 'Mērķa saraksts',
      'MassEmail' => 'Masveida e-pasts',
      'EmailQueueItem' => 'E-pasta rindas vienums',
      'CampaignTrackingUrl' => 'Sekojamais vietrādis URL',
      'Activities' => 'Aktivitātes',
      'KnowledgeBaseArticle' => 'Zināšanu bāzes raksts',
      'KnowledgeBaseCategory' => 'Zināšanu bāzes kategorija',
      'CampaignLogRecord' => 'Kampaņas reģistra ieraksts',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'E-pasti',
      'User' => 'Lietotāji',
      'Team' => 'Grupas',
      'Role' => 'Lomas',
      'EmailTemplate' => 'E-pasta veidnes',
      'EmailTemplateCategory' => 'E-pasta veidņu kategorijas',
      'EmailAccount' => 'Personiskie e-pasta konti',
      'EmailAccountScope' => 'Personiskie e-pasta konti',
      'OutboundEmail' => 'Izejošie e-pasti',
      'ScheduledJob' => 'Ieplānotie darbi',
      'ExternalAccount' => 'Ārējie konti',
      'Extension' => 'Paplašinājumi',
      'Dashboard' => 'Infopanelis',
      'InboundEmail' => 'Grupas e-pasta konti',
      'Stream' => 'Straume',
      'Import' => 'Importēt',
      'Template' => 'Veidnes',
      'Job' => 'Darbi',
      'EmailFilter' => 'E-pasta filtri',
      'Portal' => 'Portāli',
      'PortalRole' => 'Lomas portālos',
      'Attachment' => 'Pielikumi',
      'EmailFolder' => 'E-pasta mapes',
      'PortalUser' => 'Portāla lietotāji',
      'ApiUser' => 'API lietotājs',
      'ScheduledJobLogRecord' => 'Ieplānoto darbu reģistra ieraksti',
      'PasswordChangeRequest' => 'Parole maiņas pieprasījumi',
      'ActionHistoryRecord' => 'Darbību vēsture',
      'AuthToken' => 'Autentifikācijas tokeni',
      'UniqueId' => 'Unikālie ID',
      'LastViewed' => 'Pēdējo reizi skatīts',
      'AuthLogRecord' => 'Autentifikācijas reģistrs',
      'AuthFailLogRecord' => 'Autentifikācijas faila Reģistrs',
      'LeadCapture' => 'Potenciālā klienta tvērums',
      'LeadCaptureLogRecord' => 'Potenciālā klienta tvēruma reģistrs',
      'ArrayValue' => 'Masīva vērtības',
      'Account' => 'Konti',
      'Contact' => 'Kontakti',
      'Lead' => 'Potenciālais klients',
      'Target' => 'Mērķis',
      'Opportunity' => 'Iespējas',
      'Meeting' => 'Tikšanās',
      'Calendar' => 'Kalendārs',
      'Call' => 'Zvani',
      'Task' => 'Uzdevumi',
      'Case' => 'Lietas',
      'Document' => 'Dokumenti',
      'DocumentFolder' => 'Dokumentu mapes',
      'Campaign' => 'Kampaņas',
      'TargetList' => 'Mērķa saraksts',
      'MassEmail' => 'Masveida e-pasti',
      'EmailQueueItem' => 'E-pasta rindu vienumi',
      'CampaignTrackingUrl' => 'Sekojamie vietrāži URL',
      'Activities' => 'Aktivitātes',
      'KnowledgeBaseArticle' => 'Zināšanu bāze',
      'KnowledgeBaseCategory' => 'Zināšanu bāzes kategorijas',
      'CampaignLogRecord' => 'Kampaņas reģistra ieraksts',
    ),
    'labels' => 
    array (
      'Misc' => 'Dažādi',
      'Merge' => 'Sapludināt',
      'None' => 'Nav',
      'Home' => 'Sākums',
      'by' => 'Darbības veicējs',
      'Saved' => 'Saglabāts',
      'Error' => 'Kļūda',
      'Select' => 'Atlasīt',
      'Not valid' => 'Nav derīgs',
      'Please wait...' => 'Lūdzu, uzgaidiet...',
      'Please wait' => 'Lūdzu, uzgaidiet',
      'Loading...' => 'Notiek ielāde...',
      'Uploading...' => 'Notiek augšupielāde...',
      'Sending...' => 'Notiek sūtīšana...',
      'Merging...' => 'Notiek sapludināšana…',
      'Merged' => 'Sapludināts',
      'Removed' => 'Noņemts',
      'Posted' => 'Publicēts',
      'Linked' => 'Saistīts',
      'Unlinked' => 'Nesaistīts',
      'Done' => 'Gatavs',
      'Access denied' => 'Piekļuve liegta',
      'Not found' => 'Nav atrasts',
      'Access' => 'Piekļuve',
      'Are you sure?' => 'Vai tiešām?',
      'Record has been removed' => 'Ieraksts noņemts',
      'Wrong username/password' => 'Nepareizs lietotājvārds/parole',
      'Post cannot be empty' => 'Publicējums nedrīkst būt tukšs',
      'Removing...' => 'Notiek noņemšana...',
      'Unlinking...' => 'Notiek atsaistīšana...',
      'Posting...' => 'Notiek publicēšana...',
      'Username can not be empty!' => 'Lietotājvārds nedrīkst būt tukšs!',
      'Cache is not enabled' => 'Kešatmiņa nav iespējota',
      'Cache has been cleared' => 'Kešatmiņa notīrīta',
      'Rebuild has been done' => 'Atkārtota izveide ir veikta',
      'Return to Application' => 'Atgriezties lietotnē',
      'Saving...' => 'Notiek saglabāšana…',
      'Modified' => 'Pārveidots',
      'Created' => 'Izveidots',
      'Create' => 'Izveidot',
      'create' => 'izveidot',
      'Overview' => 'Apskats',
      'Details' => 'Detalizēts',
      'Add Field' => 'Pievienot lauku',
      'Add Dashlet' => 'Pievienot minipaneli',
      'Filter' => 'Filtrs',
      'Edit Dashboard' => 'Rediģēt infopaneli',
      'Add' => 'Pievienot',
      'Add Item' => 'Pievienot vienumu',
      'Reset' => 'Atiestatīt',
      'Menu' => 'Izvēlne',
      'More' => 'Vairāk',
      'Search' => 'Meklēt',
      'Only My' => 'Tikai manus',
      'Open' => 'Atvērt',
      'Admin' => 'Administrators',
      'About' => 'Par',
      'Refresh' => 'Atsvaidzināt',
      'Remove' => 'Noņemt',
      'Options' => 'Opcijas',
      'Username' => 'Lietotājvārds',
      'Password' => 'Parole',
      'Login' => 'Pieslēgties',
      'Log Out' => 'Iziet',
      'Preferences' => 'Preferences',
      'State' => 'Novads',
      'Street' => 'Iela, mājas, dzīvokļa nr.',
      'Country' => 'Valsts',
      'City' => 'Pilsēta',
      'PostalCode' => 'Pasta indekss',
      'Followed' => 'Tiek sekots',
      'Follow' => 'Sekot',
      'Followers' => 'Sekotāji',
      'Clear Local Cache' => 'Notīrīt lokālo kešatmiņu',
      'Actions' => 'Darbības',
      'Delete' => 'Izdzēst',
      'Update' => 'Atjaunināt',
      'Save' => 'Saglabāt',
      'Edit' => 'Rediģēt',
      'View' => 'Skatīt',
      'Cancel' => 'Atcelt',
      'Apply' => 'Lietot',
      'Unlink' => 'Atsaistīt',
      'Mass Update' => 'Masveida atjauninājums',
      'Export' => 'Eksportēt',
      'No Data' => 'Nav datu',
      'No Access' => 'Nav piekļuves',
      'All' => 'Visi',
      'Active' => 'Aktīvie',
      'Inactive' => 'Neaktīvie',
      'Write your comment here' => 'Šeit ierakstiet komentāru',
      'Post' => 'Publicējums',
      'Stream' => 'Straume',
      'Show more' => 'Rādīt vairāk',
      'Dashlet Options' => 'Minipaneļa opcijas',
      'Full Form' => 'Pilna forma',
      'Insert' => 'Ievietot',
      'Person' => 'Persona',
      'First Name' => 'Vārds',
      'Last Name' => 'Uzvārds',
      'Original' => 'Oriģinālais',
      'You' => 'Jūs',
      'you' => 'jūs',
      'change' => 'mainīt',
      'Change' => 'Mainīt',
      'Primary' => 'Primārais',
      'Save Filter' => 'Saglabāt filtru',
      'Administration' => 'Administrācija',
      'Run Import' => 'Izpildīt importēšanu',
      'Duplicate' => 'Dublēt',
      'Notifications' => 'Paziņojumi',
      'Mark all read' => 'Atzīmēt visus izlasītos',
      'See more' => 'Skatīt vairāk',
      'Today' => 'Šodiena',
      'Tomorrow' => 'Rītdiena',
      'Yesterday' => 'Vakardiena',
      'Submit' => 'Iesniegt',
      'Close' => 'Aizvērt',
      'Yes' => 'Jā',
      'No' => 'Nē',
      'Select All Results' => 'Atlasīt visus rezultātus',
      'Value' => 'Vērtība',
      'Current version' => 'Pašreizējā versija',
      'List View' => 'Skatīt saraksta veidā',
      'Tree View' => 'Skatīt koka veidā',
      'Unlink All' => 'Atsaistīt visus',
      'Total' => 'Kopā',
      'Print to PDF' => 'Izdrukāt kā PDF',
      'Default' => 'Noklusējuma',
      'Number' => 'Skaits',
      'From' => 'No',
      'To' => 'Līdz',
      'Create Post' => 'Izveidot publicējumu',
      'Previous Entry' => 'Iepriekšējais ieraksts',
      'Next Entry' => 'Nākamais ieraksts',
      'View List' => 'Skatīt sarakstu',
      'Attach File' => 'Pievienot failu',
      'Skip' => 'Izlaist',
      'Attribute' => 'Atribūts',
      'Function' => 'Funkcija',
      'Self-Assign' => 'Piešķiršana pašu starpā',
      'Self-Assigned' => 'Piešķirts pašu starpā',
      'Expand' => 'Izvērst',
      'Collapse' => 'Sakļaut',
      'New notifications' => 'Jaunie paziņojumi',
      'Manage Categories' => 'Pārvaldīt kategorijas',
      'Manage Folders' => 'Pārvaldīt mapes',
      'Convert to' => 'Konvertēt uz',
      'View Personal Data' => 'Skatīt personas datus',
      'Personal Data' => 'Personas dati',
      'Erase' => 'Dzēst',
      'Move Over' => 'Pāriet',
      'Create InboundEmail' => 'Izveidot ienākošo e-pastu',
      'Activities' => 'Aktivitātes',
      'History' => 'Vēsture',
      'Attendees' => 'Dalībnieki',
      'Schedule Meeting' => 'Ieplānot tikšanos',
      'Schedule Call' => 'Ieplānot zvanu',
      'Compose Email' => 'Veidot e-pastu',
      'Log Meeting' => 'Reģistrēt tikšanos',
      'Log Call' => 'Reģistrēt zvanu',
      'Archive Email' => 'Arhivēt e-pastu',
      'Create Task' => 'Izveidot uzdevumu',
      'Tasks' => 'Uzdevumi',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Lūdzu, uzgaidiet...',
      'posting' => 'Notiek publicēšana...',
      'loading' => 'Tiek ielādēts...',
      'saving' => 'Tiek saglabāts...',
      'confirmLeaveOutMessage' => 'Vai tiešām vēlaties aizvērt formu?',
      'notModified' => 'Jūs neveicāt izmaiņas ierakstā',
      'duplicate' => 'Iespējams, ka ieraksts, kuru vēlaties izveidot, jau pastāv',
      'dropToAttach' => 'Nometiet, lai pievienotu',
      'fieldIsRequired' => '{field} ir obligāts',
      'fieldShouldBeEmail' => '{field} jābūt derīgam e-pastam',
      'fieldShouldBeFloat' => '{field} jābūt derīgam peldošā komata skaitlim',
      'fieldShouldBeInt' => '{field} jābūt derīgam veselam skaitlim',
      'fieldShouldBeDate' => '{field} jābūt derīgam datumam',
      'fieldShouldBeDatetime' => '{field} jābūt derīgam datumam/laikam',
      'fieldShouldAfter' => '{field} jābūt pēc {otherField}',
      'fieldShouldBefore' => '{field} jābūt pirms {otherField}',
      'fieldShouldBeBetween' => '{field} jābūt starp {min} un {max}',
      'fieldShouldBeLess' => '{field} nedrīkst būt lielāks nekā {value}',
      'fieldShouldBeGreater' => '{field} nedrīkst būt lielāks nekā {value}',
      'fieldBadPasswordConfirm' => '{field} nav apstiprināts pareizi',
      'fieldMaxFileSizeError' => 'Fails nedrīkst pārsniegt {max} Mb',
      'fieldValueDuplicate' => 'Duplicate value',
      'fieldIsUploading' => 'Notiek augšupielāde',
      'resetPreferencesDone' => 'Atiestatītas noklusējuma preferences',
      'confirmation' => 'Vai tiešām?',
      'unlinkAllConfirmation' => 'Vai tiešām vēlaties atsaistīt visus saistītos ierakstus?',
      'resetPreferencesConfirmation' => 'Vai tiešām vēlaties atiestatīt noklusējuma preferences?',
      'removeRecordConfirmation' => 'Vai tiešām vēlaties noņemt ierakstu?',
      'unlinkRecordConfirmation' => 'Vai tiešām vēlaties saistīto ierakstu atsaistīt?',
      'removeSelectedRecordsConfirmation' => 'Vai tiešām vēlaties noņemt atlasītos ierakstus?',
      'massUpdateResult' => '{count} ieraksti tika atjaunināti',
      'massUpdateResultSingle' => '{count} ieraksts tika atjaunināts',
      'noRecordsUpdated' => 'Neviens ieraksts netika atjaunināts',
      'massRemoveResult' => '{count} ieraksti tika noņemti',
      'massRemoveResultSingle' => '{count} ieraksts tika noņemts',
      'noRecordsRemoved' => 'Neviens ieraksts netika noņemts',
      'clickToRefresh' => 'Noklikšķiniet, lai atsvaidzinātu',
      'streamPostInfo' => 'Ierakstiet <strong>@lietotājsvārds</strong>, lai publicējumā minētu lietotājus.

Pieejamā "Markdown" sintakse:
`<code>kods</code>`
```<code>vairākrindiņu kods</code>```
**<strong>stingrais teksts</strong>**
*<em>uzsvērts teksts</em>*
~~<del>izdzēsts teksts</del>~~
> citāta bloks
[saites teksts](vietrādis URL)',
      'writeYourCommentHere' => 'Šeit ierakstiet komentāru',
      'writeMessageToUser' => 'Uzrakstiet ziņojumu lietotājam {user}',
      'writeMessageToSelf' => 'Uzrakstiet ziņojumu savā straumēšanā',
      'typeAndPressEnter' => 'Padomi un taustiņš ENTER',
      'checkForNewNotifications' => 'Atzīmējiet, lai saņemtu jaunus ziņojumus',
      'checkForNewNotes' => 'Atzīmējiet, lai tiktu veikts straumēšanas atjauninājums',
      'internalPost' => 'Publicējums būs redzams tikai iekšējiem lietotājiem',
      'internalPostTitle' => 'Publicējumsi ir redzams tikai iekšējiem lietotājiem',
      'done' => 'Gatavs',
      'confirmMassFollow' => 'Vai tiešām vēlaties sekot atlasītajiem ierakstiem?',
      'confirmMassUnfollow' => 'Vai tiešām vēlaties pārtraukt sekošanu atlasītajiem ierakstiem?',
      'massFollowResult' => '{count} ierakstiem tagad tiek sekots',
      'massUnfollowResult' => '{count} ierakstiem tagad netiek sekots',
      'massFollowResultSingle' => '{count} ierakstam tagad tiek sekots',
      'massUnfollowResultSingle' => '{count} ierakstam tagad netiek sekots',
      'massFollowZeroResult' => 'Nav ierakstu, kuriem tiktu sekots',
      'massUnfollowZeroResult' => 'Nav ierakstu, kuriem sekošana tiktu atcelta',
      'erasePersonalDataConfirmation' => 'Atzīmētie lauki tiks neatgriezeniski dzēstu. Vai tiešām vēlaties turpināt?',
      'massPrintPdfMaxCountError' => 'Nevar izdrukāt vairāk kā {maxCount} ierakstus.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Tikai manējie',
      'followed' => 'Kuriem sekoju',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Kuriem sekoju',
      'all' => 'Visus',
    ),
    'massActions' => 
    array (
      'remove' => 'Noņemt',
      'merge' => 'Sapludināt',
      'massUpdate' => 'Atjaunināt masveidā',
      'export' => 'Eksportēt',
      'follow' => 'Sekot',
      'unfollow' => 'Atcelt sekošanu',
      'convertCurrency' => 'Konvertēt valūtu',
      'printPdf' => 'Izdrukāt PDF formātā',
    ),
    'fields' => 
    array (
      'name' => 'Nosaukums/vārds',
      'firstName' => 'Priekšvārds',
      'lastName' => 'Uzvārds',
      'salutationName' => 'Uzruna',
      'assignedUser' => 'Piešķirtais lietotājs',
      'assignedUsers' => 'Piešķirtie lietotāji',
      'emailAddress' => 'E-pasts',
      'emailAddressData' => 'E-pasta adreses dati',
      'emailAddressIsOptedOut' => 'E-pasta adrese ir neizvēlēta',
      'assignedUserName' => 'Piešķirtais lietotājvārds',
      'teams' => 'Grupas',
      'createdAt' => 'Kad izveidots',
      'modifiedAt' => 'Kad veiktas izmaiņas',
      'createdBy' => 'Kas izveidoja',
      'modifiedBy' => 'Kas veica izmaiņas',
      'description' => 'Apraksts',
      'address' => 'Adrese',
      'phoneNumber' => 'Tālrunis',
      'phoneNumberMobile' => 'Tālrunis (mobilais)',
      'phoneNumberHome' => 'Tālrunis (mājas)',
      'phoneNumberFax' => 'Tālrunis (fakss)',
      'phoneNumberOffice' => 'Tālrunis (birojā)',
      'phoneNumberOther' => 'Tālrunis (cits)',
      'phoneNumberData' => 'Tālruņa numura dati',
      'order' => 'Secība',
      'parent' => 'Primārais',
      'children' => 'Sekundārais',
      'id' => 'ID',
      'ids' => 'ID',
      'type' => 'Tips',
      'names' => 'Vārdi/nosaukumi',
      'types' => 'Types',
      'targetListIsOptedOut' => 'Ir neizvēlētas (mērķa saraksts)',
      'billingAddressCity' => 'Pilsēta',
      'billingAddressCountry' => 'Valsts',
      'billingAddressPostalCode' => 'Pasta indekss',
      'billingAddressState' => 'Novads',
      'billingAddressStreet' => 'Iela, mājas un dzīvokļa numurs',
      'billingAddressMap' => 'Karte',
      'addressCity' => 'Pilsēta',
      'addressStreet' => 'Iela, mājas un dzīvokļa numurs',
      'addressCountry' => 'Valsts',
      'addressState' => 'Novads',
      'addressPostalCode' => 'Pasta indekss',
      'addressMap' => 'Karte',
      'shippingAddressCity' => 'Pilsēta (piegādes)',
      'shippingAddressStreet' => 'Iela, mājas un dzīvokļa numurs (piegādei)',
      'shippingAddressCountry' => 'Valsts (piegādei)',
      'shippingAddressState' => 'Novads (piegādei)',
      'shippingAddressPostalCode' => 'Pasta indekss (piegādei)',
      'shippingAddressMap' => 'Karte (piegādei)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Piešķirtais lietotājs',
      'createdBy' => 'Kas izveidoja',
      'modifiedBy' => 'Kas veica izmaiņas',
      'team' => 'Grupas',
      'roles' => 'Lomas',
      'teams' => 'Grupas',
      'users' => 'Lietotāji',
      'parent' => 'Primārais',
      'children' => 'Sekundārais',
      'contacts' => 'Kontakti',
      'opportunities' => 'Iespējas',
      'leads' => 'Potenciālie klienti',
      'meetings' => 'Tikšanās',
      'calls' => 'Zvani',
      'tasks' => 'Uzdevumi',
      'emails' => 'E-pasti',
      'accounts' => 'Konti',
      'cases' => 'Lietas',
      'documents' => 'Dokumenti',
      'account' => 'Konts',
      'opportunity' => 'Iespēja',
      'contact' => 'Kontakts',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Straumēšana',
      'Emails' => 'Mana iesūtne',
      'Records' => 'Ierakstu saraksts',
      'Leads' => 'Mans potenciālais klients',
      'Opportunities' => 'Manas iespējas',
      'Tasks' => 'Mani uzdevumi',
      'Cases' => 'Manas lietas',
      'Calendar' => 'Kalendārs',
      'Calls' => 'Mani zvani',
      'Meetings' => 'Manas tikšanās',
      'OpportunitiesByStage' => 'Iespējas pēc posmiem',
      'OpportunitiesByLeadSource' => 'Iespējas pēc potenciālā klienta avota',
      'SalesByMonth' => 'Pārdošanas apjomi pa mēnešiem',
      'SalesPipeline' => 'Pārdošanas ceļš',
      'Activities' => 'Manas aktivitātes',
    ),
    'notificationMessages' => 
    array (
      'assign' => 'Jums tika piešķirts {entityType} {entity} ',
      'emailReceived' => 'Saņemts e-pasts no {from}',
      'entityRemoved' => '{user} noņēma {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} publicēja {entityType} {entity}',
      'attach' => '{user} pievienots {entityType} {entity}',
      'status' => '{user} atjaunināja {entityType} {entity} lauku {field}',
      'update' => '{user} atjaunināja {entityType} {entity}',
      'postTargetTeam' => '{user} publicēja grupā {mērķa}',
      'postTargetTeams' => '{user} publicēja grupās {mērķa}',
      'postTargetPortal' => '{user} publicēja portālā {mērķa}',
      'postTargetPortals' => '{user} publicēja portālos {mērķa}',
      'postTarget' => '{user} publicēja {mērķa}',
      'postTargetYou' => '{user} publicēja pie jums',
      'postTargetYouAndOthers' => '{user} publicēja {mērķa} un pie jums',
      'postTargetAll' => '{user} publicēja pie visiem',
      'postTargetSelf' => '{user} veica publicējumu pašu starpā',
      'postTargetSelfAndOthers' => '{user} veica publicējumu, kas domāts {target} un pašiem sev',
      'mentionInPost' => '{user} minēja {mentioned} {entityType} vienībā {entity}',
      'mentionYouInPost' => '{user} jūs pieminēja {entityType} vienībā {entity}',
      'mentionInPostTarget' => '{user} pieminēja {mentioned} publicējumā',
      'mentionYouInPostTarget' => '{user} jūs pieminēja publicējumā {mērķa}',
      'mentionYouInPostTargetAll' => '{user} jūs pieminēja publicējumā pie visiem',
      'mentionYouInPostTargetNoTarget' => '{user} jūs pieminēja publicējumā',
      'create' => '{user} izveidoja {entityType} {entity}',
      'createThis' => '{user} izveidoja šo {entityType}',
      'createAssignedThis' => '{user} izveidoja šo {entityType}, kas piešķirts {assignee}',
      'createAssigned' => '{user} izveidoja {entityType} vienību {entity}, kas piešķirta {assignee}',
      'createAssignedYou' => '{user} izveidoja {entityType} {entity}, kas tika piešķirts jums',
      'createAssignedThisSelf' => '{user} izveidoja {entityType}, kas tika piešķirts pašu starpā',
      'createAssignedSelf' => '{user} izveidoja {entityType} {entity}, kas tika piešķirts pašu starpā',
      'assign' => '{user} piešķīra {entityType} {entity} {assignee}',
      'assignThis' => '{user} piešķīra šo {entityType} {assignee}',
      'assignYou' => '{user} izveidoja {entityType} {entity}, kas domāts jums',
      'assignThisVoid' => '{user} atcēla šī {entityType} piešķiršanu',
      'assignVoid' => '{user} atcēla šīs {entityType} {entity} piešķiršanu',
      'assignThisSelf' => '{user} veica šī {entityType} piešķiršanu pašu starpā',
      'assignSelf' => '{user} veica šīs {entityType} {entity} piešķiršanu pašu starpā',
      'postThis' => '{user} publicēja',
      'attachThis' => '{user} pievienoja',
      'statusThis' => '{user} atjaunināja {field}',
      'updateThis' => '{user} atjaunināja šo {entityType}',
      'createRelatedThis' => '{user} izveidoja {relatsEntityType} {relatsEntity}, kas saistīts ar šo {entityType}',
      'createRelated' => '{user} creats {relatsEntityType} {relatsEntity}, kas saistīts ar {entityType} {entity}',
      'relate' => '{user} sasaistīja {relatsEntityType} {relatsEntity} ar {entityType} {entity}',
      'relateThis' => '{user} sasaistīja {relatsEntityType} {relatsEntity} ar šo {entityType}',
      'emailReceivedFromThis' => 'Saņemts e-pasts no {from}',
      'emailReceivedInitialFromThis' => 'Saņemts e-pasts no {from}, izveidota šī {entityType}',
      'emailReceivedThis' => 'Saņemts e-pasts',
      'emailReceivedInitialThis' => 'Saņemts e-pasts, izveidots šis {entityType}',
      'emailReceivedFrom' => 'Saņemts e-pasts no {from}, saistīts ar {entityType} {entity}',
      'emailReceivedFromInitial' => 'Saņemts e-pasts no {from}, izveidots {entityType} {entity}',
      'emailReceived' => 'Saņemts e-pasts, kas saistīts ar {entityType} {entity}',
      'emailReceivedInitial' => 'Saņemts e-pasts: izveidots {entityType} {entity}',
      'emailReceivedInitialFrom' => 'Saņemts e-pasts no {from}, izveidots {entityType} {entity}',
      'emailSent' => '{by} nosūtīja e-pastu, kas saistīts ar {entityType} {entity}',
      'emailSentThis' => '{by} nosūtīja e-pastu',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} veica publicējumu, kas domāts {target} un pašam sev',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} veica publicējumu, kas domāts {target} un pašai sev',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Janvāris',
        1 => 'Februāris',
        2 => 'Marts',
        3 => 'Aprīlis',
        4 => 'Maijs',
        5 => 'Jūnijs',
        6 => 'Jūlijs',
        7 => 'Augusts',
        8 => 'Septembris',
        9 => 'Oktobris',
        10 => 'Novembris',
        11 => 'Decembris',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'Mai',
        5 => 'Jūn',
        6 => 'Jūl',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Svētdiena',
        1 => 'Pirmdiena',
        2 => 'Otrdiena',
        3 => 'Trešdiena',
        4 => 'Ceturtdiena',
        5 => 'Piektdiena',
        6 => 'Sestdiena',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Svē',
        1 => 'Pir',
        2 => 'Otr',
        3 => 'Tre',
        4 => 'Cet',
        5 => 'Pie',
        6 => 'Ses',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Sv',
        1 => 'Pr',
        2 => 'Ot',
        3 => 'Tr',
        4 => 'Ce',
        5 => 'Pt',
        6 => 'St',
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
        'Mr.' => 'Kungs',
        'Mrs.' => 'Kundze',
        'Ms.' => 'Kundze',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikāņu',
        'az_AZ' => 'Azerbaidžāņu',
        'be_BY' => 'Baltkrievu',
        'bg_BG' => 'Bulgāru',
        'bn_IN' => 'Bengāļu',
        'bs_BA' => 'Bosniešu',
        'ca_ES' => 'Katalāņu',
        'cs_CZ' => 'Čehu',
        'cy_GB' => 'Velsiešu',
        'da_DK' => 'Dāņu',
        'de_DE' => 'Vācu',
        'el_GR' => 'Grieķu',
        'en_GB' => 'Angļu (AK)',
        'es_MX' => 'Spāņu (Meksika)',
        'en_US' => 'Angļu (ASV)',
        'es_ES' => 'Spāņu (Spānija)',
        'et_EE' => 'Igauņu',
        'eu_ES' => 'Basku',
        'fa_IR' => 'Persiešu',
        'fi_FI' => 'Somu',
        'fo_FO' => 'Farēru',
        'fr_CA' => 'Franču (Kanāda)',
        'fr_FR' => 'Franču (Francija)',
        'ga_IE' => 'Īru',
        'gl_ES' => 'Galisiešu',
        'gn_PY' => 'Gvaranu',
        'he_IL' => 'Ivrits',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Horvātu',
        'hu_HU' => 'Ungāru',
        'hy_AM' => 'Armēņu',
        'id_ID' => 'Indonēziešu',
        'is_IS' => 'Islandiešu',
        'it_IT' => 'Itāliešu',
        'ja_JP' => 'Japāņu',
        'ka_GE' => 'Gruzīnu',
        'km_KH' => 'Khmeru',
        'ko_KR' => 'Korejiešu',
        'ku_TR' => 'Kurdu',
        'lt_LT' => 'Lietuviešu',
        'lv_LV' => 'Latviešu',
        'mk_MK' => 'Maķedoniešu',
        'ml_IN' => 'Malajalu',
        'ms_MY' => 'Malajiešu',
        'nb_NO' => 'Norvēģu (bukmols)',
        'nn_NO' => 'Norvēģu (jaunnorvēģu)',
        'ne_NP' => 'Nepāliešu',
        'nl_NL' => 'Holandiešu',
        'pa_IN' => 'Pandžabu',
        'pl_PL' => 'Poļu',
        'ps_AF' => 'Puštu',
        'pt_BR' => 'Portugāļu (Brazīlija)',
        'pt_PT' => 'Portugāļu (Portugāle)',
        'ro_RO' => 'Rumāņu',
        'ru_RU' => 'Krievu',
        'sk_SK' => 'Slovāku',
        'sl_SI' => 'Slovēņu',
        'sq_AL' => 'Albāņu',
        'sr_RS' => 'Serbu',
        'sv_SE' => 'Zviedru',
        'sw_KE' => 'Svahili',
        'ta_IN' => 'Tamilu',
        'te_IN' => 'Telugu',
        'th_TH' => 'Taizemiešu',
        'tl_PH' => 'Tagalu',
        'tr_TR' => 'Turku',
        'uk_UA' => 'Ukraiņu',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vjetnamiešu',
        'zh_CN' => 'Vienkāršotā ķīniešu (Ķīna)',
        'zh_HK' => 'Tradicionālā ķīniešu (Hongkonga)',
        'zh_TW' => 'Tradicionālā ķīniešu (Taivāna)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Ieslēgts',
        'notOn' => 'Nav ieslēgts',
        'after' => 'Pēc',
        'before' => 'Pirms',
        'between' => 'Starp',
        'today' => 'Šodien',
        'past' => 'Iepriekš',
        'future' => 'Nākotnē',
        'currentMonth' => 'Šis mēnesis',
        'lastMonth' => 'Iepriekšējais mēnesis',
        'nextMonth' => 'Nākamais mēnesis',
        'currentQuarter' => 'Šis ceturksnis',
        'lastQuarter' => 'Iepriekšējais ceturksnis',
        'currentYear' => 'Šis gads',
        'lastYear' => 'Iepriekšējais gads',
        'lastSevenDays' => 'Pēdējās 7 dienas',
        'lastXDays' => 'Pēdējās X dienas',
        'nextXDays' => 'Nākamās X dienas',
        'ever' => 'Jebkad',
        'isEmpty' => 'Ir tukšs',
        'olderThanXDays' => 'Vecāks nekā X dienas',
        'afterXDays' => 'Pēc X dienām',
        'currentFiscalYear' => 'Kārtējais fiskālais gads',
        'lastFiscalYear' => 'Pēdējais fiskālais gads',
        'currentFiscalQuarter' => 'Pašreizējais fiskālais ceturksnis',
        'lastFiscalQuarter' => 'Pēdējais fiskālais ceturksnis',
      ),
      'searchRanges' => 
      array (
        'is' => 'Ir',
        'isEmpty' => 'Ir tukšs',
        'isNotEmpty' => 'Nav tukšs',
        'isOneOf' => 'Jebkurš no',
        'isFromTeams' => 'Nav grupa',
        'isNot' => 'Nav',
        'isNotOneOf' => 'Neviens no',
        'anyOf' => 'Jebkurš no',
        'noneOf' => 'Neviens no',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Vienāds ar',
        'like' => 'Ir līdzīgs (%)',
        'notLike' => 'Nav līdzīgs (%)',
        'startsWith' => 'Sākas ar',
        'endsWith' => 'Beidzas ar',
        'contains' => 'Satur',
        'notContains' => 'Nesatur',
        'isEmpty' => 'Ir tukšs',
        'isNotEmpty' => 'Nav tukšs',
        'notEquals' => 'Nav vienāds ar',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Vienāds ar',
        'notEquals' => 'Nav vienāds ar',
        'greaterThan' => 'Lielāks nekā',
        'lessThan' => 'Mazāks nekā',
        'greaterThanOrEquals' => 'Lielāks vai vienāds ar',
        'lessThanOrEquals' => 'Mazāks vai vienāds ar',
        'between' => 'Starp',
        'isEmpty' => 'Ir tukšs',
        'isNotEmpty' => 'Nav tukšs',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Nav',
        '0.5' => '30 sekundes',
        1 => '1 minūte',
        2 => '2 minūtes',
        5 => '5 minūtes',
        10 => '10 minūtes',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobilais',
        'Office' => 'Birojā',
        'Fax' => 'Fakss',
        'Home' => 'Sākums',
        'Other' => 'Cits',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Uznirstošs',
        'Email' => 'E-pasts',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Tulkojumu varat atrast šeit: https://github.com/HackerWins/summerpiezīme/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Treknrakstā',
          'italic' => 'Slīprakstā',
          'underline' => 'Pasvītrojums',
          'strike' => 'Pārsvītrojums',
          'clear' => 'Noņemt fonta stilu',
          'height' => 'Rindiņas augstums',
          'name' => 'Fontu saime',
          'size' => 'Fonta lielums',
        ),
        'image' => 
        array (
          'image' => 'Attēls',
          'insert' => 'ievietot attēlu',
          'resizeFull' => 'Mainīt izmērus uz pilnu',
          'resizeHalf' => 'Mainīt izmērus uz pusi',
          'resizeQuarter' => 'Mainīt izmērus uz ceturtdaļu',
          'floatLeft' => 'Virzīt uz kreiso pusi',
          'floatRight' => 'Virzīt uz labo pusi',
          'floatNone' => 'Nevirzīt ne uz vienu pusi',
          'dragImageHere' => 'Ievilkt attēlu šeit',
          'selectFromFiles' => 'Atlasīt no failiem',
          'url' => 'Attēla vietrādis URL',
          'remove' => 'Noņemt attēlu',
        ),
        'link' => 
        array (
          'link' => 'Saite',
          'insert' => 'Ievietot saiti',
          'unlink' => 'Atsaistīt',
          'edit' => 'Rediģēt',
          'textToDisplay' => 'Parādāmais teksts',
          'url' => 'Uz kādu vietrādi URL šai saitei jāved?',
          'openInNewWindow' => 'Atvērt jaunā logā',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video saite',
          'insert' => 'Ievietot video',
          'url' => 'Video vietrādis URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, vai DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabula',
        ),
        'hr' => 
        array (
          'insert' => 'Ievietot horizontālo robežsvītru',
        ),
        'style' => 
        array (
          'style' => 'Stils',
          'normal' => 'Normālais',
          'blockquote' => 'Citāta',
          'pre' => 'Koda',
          'h1' => 'Virsraksts 1',
          'h2' => 'Virsraksts 2',
          'h3' => 'Virsraksts 3',
          'h4' => 'Virsraksts 4',
          'h5' => 'Virsraksts 5',
          'h6' => 'Virsraksts 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Nekārtots saraksts',
          'ordered' => 'Kārtots saraksts',
        ),
        'options' => 
        array (
          'help' => 'Palīdzība',
          'fullscreen' => 'Pilnekrāna',
          'codeview' => 'Koda skatījums',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Rindkopa',
          'outdent' => 'Pārkaru atkāpe',
          'indent' => 'Atkāpe',
          'left' => 'Līdzināt pa kreisi',
          'center' => 'Līdzināt centrā',
          'right' => 'Līdzināt pa labi',
          'justify' => 'Taisnot visu',
        ),
        'color' => 
        array (
          'recent' => 'Nesen izmantot krāsa',
          'more' => 'Vairāk krāsu',
          'background' => 'Fona krāsa',
          'foreground' => 'Fonta krāsa',
          'transparent' => 'Caurspīdīgs',
          'setTransparent' => 'Iestatīt caurspīdīgu',
          'reset' => 'Atiestatīt',
          'resetToDefault' => 'Atiestatīt noklusējumu',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Klaviatūras saīsne',
          'close' => 'Aizvērt',
          'textFormatting' => 'Teksta formatēšana',
          'action' => 'Darbība',
          'paragraphFormatting' => 'Rindkopas formatēšana',
          'documentStyle' => 'Dokumenta stils',
        ),
        'history' => 
        array (
          'undo' => 'Atsaukt',
          'redo' => 'Atkārtot',
        ),
      ),
    ),
    'listViewModes' => 
    array (
      'list' => 'Saraksts',
      'kanban' => '"Kanban"',
    ),
    'themes' => 
    array (
      'Espo' => 'Klasiskais "Espo"',
      'EspoRtl' => '"RTL Espo"',
      'Sakura' => 'Klasiskais "Sakura"',
      'EspoVertical' => 'Vertikālais "Espo"',
      'SakuraVertical' => 'Vertikālais "Sakura"',
      'Violet' => 'Klasiskais violetais',
      'VioletVertical' => 'Vertikālais violetais',
      'Hazyblue' => 'Klasiskais pelēkzilais',
      'HazyblueVertical' => 'Vertikālais pelēkzilais',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Atcel importēto',
      'Return to Import' => 'Atgriezties pie importētā',
      'Run Import' => 'Izpildīt importēšanu',
      'Back' => 'Atpakaļ',
      'Field Mapping' => 'Lauka kartējums',
      'Default Values' => 'Noklusējuma vērtības',
      'Add Field' => 'Pievienot lauks',
      'Created' => 'Izveidots',
      'Updated' => 'Atjaunināts',
      'Result' => 'Rezultāts',
      'Show records' => 'Parādīt ierakstus',
      'Remove Duplicates' => 'Noņemt dublikātu',
      'importedCount' => 'Importēti (skaits)',
      'duplicateCount' => 'Dublēti (skaits)',
      'updatedCount' => 'Atjaunināti (skaits)',
      'Create Only' => 'Tikai izveidot',
      'Create and Update' => 'Izveidot un atjaunināt',
      'Update Only' => 'Tikai atjaunināt',
      'Update by' => 'Atjaunināšanu veica',
      'Set as Not Duplicate' => 'Iestatīt kā nedublēto',
      'File (CSV)' => 'Fails (CSV)',
      'First Row Value' => 'Pirmās rindas vērtība',
      'Skip' => 'Izlaist',
      'Header Row Value' => 'Virsraksta rindas vērtība',
      'Field' => 'Lauks',
      'What to Import?' => 'Ko importēt?',
      'Entity Type' => 'Vienību tips',
      'What to do?' => 'Ko darīt?',
      'Properties' => 'Rekvizīti',
      'Header Row' => 'Virsraksta rinda',
      'Person Name Format' => 'Personas vārda formāts',
      'John Smith' => 'Jānis Bērziņš',
      'Smith John' => 'Bērziņš Jānis',
      'Smith, John' => 'Bērziņš, Jānis',
      'Field Delimiter' => 'Lauka norobežotājs',
      'Date Format' => 'Datuma formāts',
      'Decimal Mark' => 'Decimālzīme',
      'Text Qualifier' => 'Teksta ierobežotājs',
      'Time Format' => 'Laika formāts',
      'Currency' => 'Valūta',
      'Preview' => 'Priekšskatījums',
      'Next' => 'Tālāk',
      'Step 1' => '1. solis',
      'Step 2' => '2. solis',
      'Double Quote' => 'Dubultpēdiņas',
      'Single Quote' => 'Vienpēdiņas',
      'Imported' => 'Importēts',
      'Duplicates' => 'Dublikāts',
      'Skip searching for duplicates' => 'Izlaist dublikātu meklēšanu',
      'Timezone' => 'Laika zona',
      'Remove Import Log' => 'Noņemt importēto ierakstu reģistru',
      'New Import' => 'Jauna importēšana',
      'Import Results' => 'Importēt rezultātus',
    ),
    'messages' => 
    array (
      'utf8' => 'Jābūt UTF-8 kodējumā',
      'duplicatesRemoved' => 'Dublikāts noņemts',
      'inIdle' => 'Izpildīt dīkstāves laikā (lielajiem datiem; ar uzdevumu plānotāja starpniecību)',
      'revert' => 'Šī izvēle neatgriezeniski noņems visus importētos ierakstus.',
      'removeDuplicates' => 'Šī izvēle neatgriezeniski noņems visus importētos ierakstus, kas atpazīti kā dublikāti.',
      'confirmRevert' => 'Šī izvēle neatgriezeniski noņems visus importētos ierakstus. Vai tiešām vēlaties turpināt?',
      'confirmRemoveDuplicates' => 'Šī izvēle neatgriezeniski noņems visus importētos ierakstus, kas būs atpazīti kā dublikāti. Vai tiešām vēlaties turpināt?',
      'confirmRemoveImportLog' => 'Šī izvēle noņems importēto ierakstu reģistru. Visi importētie ieraksti tiks saglabāti. Vai tiešām vēlaties atjaunot importētos rezultātus?',
      'removeImportLog' => 'Šī izvēle noņems importēto ierakstu reģistru. Visi importētie ieraksti tiks saglabāti. Izmantojiet šo izvēli, ja vēlaties pieļaut importēšanu.',
    ),
    'fields' => 
    array (
      'file' => 'Fails',
      'entityType' => 'Vienību tips',
      'imported' => 'Importētie ieraksti',
      'duplicates' => 'Dublētie ieraksti',
      'updated' => 'Atjauninātie ieraksti',
      'status' => 'Statuss',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Neizdevās',
        'In Process' => 'Procesā',
        'Complete' => 'Pabeigts',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds, uzvārds',
      'emailAddress' => 'E-pasta adrese',
      'team' => 'Mērķa adresātu grupa',
      'status' => 'Statuss',
      'assignToUser' => 'Piešķirt lietotājam',
      'host' => 'Resursdators',
      'username' => 'Lietotājvārds',
      'password' => 'Parole',
      'port' => 'Ports',
      'monitoredFolders' => 'Pārraudzītās mapes',
      'trashFolder' => 'Atkritnes mape',
      'ssl' => 'SSL',
      'createCase' => 'Izveidot lietu',
      'reply' => 'Automātiskā atbilde',
      'caseDistribution' => 'Lietu sadale',
      'replyEmailTemplate' => 'Atbildes e-pasta veidne',
      'replyFromAddress' => 'Atbildēt no adreses',
      'replyToAddress' => 'Atbildēt uz adresi',
      'replyFromName' => 'Atbildēt kā',
      'targetUserPosition' => 'Mērķa lietotāja amats',
      'fetchSince' => 'Ienest, sākot ar',
      'addAllTeamUsers' => 'Visiem grupas lietotājiem',
      'teams' => 'Grupas',
      'sentFolder' => 'Nosūtīto ziņojumu mape',
      'storeSentEmails' => 'Uzglabāt nosūtītos e-pastus',
      'useImap' => 'Ienest e-pastus',
      'useSmtp' => 'Lietot SMTP',
      'smtpHost' => 'SMTP resursdators',
      'smtpPort' => 'SMTP ports',
      'smtpAuth' => 'SMTP autentifikācija',
      'smtpSecurity' => 'SMTP drošība',
      'smtpUsername' => 'SMTP lietotājvārds',
      'smtpPassword' => 'SMTP parole',
      'fromName' => 'Kā vārdā',
      'smtpIsShared' => 'SMTP ir kopīgots',
      'smtpIsForMassEmail' => 'SMTP ir paredzēts masveida e-pastam',
    ),
    'tooltips' => 
    array (
      'reply' => 'Paziņot e-pasta nosūtītājiem, ka e-pasts ir saņemts.

Lai novērstu ieciklošanos, noteiktam lietotājam zināmā periodā iespējams nosūtīt tikai vienu e-pastu.',
      'createCase' => 'Automātiski izveidot lietu no ienākošajiem e-pastiem.',
      'replyToAddress' => 'Noteikt šīs pastkastes e-pasta adresi, lai atbildes ienāktu šeit.',
      'caseDistribution' => 'Norāda, kā lieta tiks piešķirta. Piešķirt tieši lietotājam vai piešķirt grupas ietvaros.',
      'assignToUser' => 'Kam tiks piešķirtas lietotāja lietas.',
      'team' => 'Kam tiks piešķirtas grupas lietas.',
      'teams' => 'Kam tiks piešķirti grupas e-pasti.',
      'targetUserPosition' => 'Lietotāji ar norādīto amatu tiks sadalīti ar lietām.',
      'addAllTeamUsers' => 'E-pasti būs redzami visu norādīto grupu lietotāju iesūtnēs.',
      'monitoredFolders' => 'Vairākas mapes cita no citas jāatdala ar komatu.',
      'smtpIsShared' => 'Ja būs atzīmēta šī izvēle, lietotāji varēs nosūtīt e-pastus, izmantojot šo SMTP. Pieejamību kontrolēs lomas ar grupas e-pasta konta atļaujas starpniecību.',
      'smtpIsForMassEmail' => 'Ja būs atzīmēta šī izvēle, masveida e-pastiem būs pieejams SMTP',
      'storeSentEmails' => 'Nosūtītie e-pasti tiks uzglabāti IMAP serverī.',
    ),
    'links' => 
    array (
      'filters' => 'Filtri',
      'emails' => 'E-pasti',
      'assignToUser' => 'Piešķirt lietotājam',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktīvs',
        'Inactive' => 'Neaktīvs',
      ),
      'caseDistribution' => 
      array (
        '' => 'Nav',
        'Direct-Assignment' => 'Tiešā piešķiršana',
        'Round-Robin' => 'Apļa sistēma',
        'Least-Busy' => 'Vismazāk aizņemtais',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Izveidot e-pasta kontu',
      'IMAP' => 'IMAP',
      'Actions' => 'Darbības',
      'Main' => 'Galvenais',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nav savienojuma ar IMAP serveri',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Atļauts',
      'clientId' => 'Klienta ID',
      'clientSecret' => 'Klienta noslēpums',
      'redirectUri' => 'Novirzīšanas URI',
      'apiKey' => 'API atslēga',
    ),
    'titles' => 
    array (
      'GoogleMaps' => '"Google Maps"',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Atlasīt integrāciju no izvēlnes.',
      'noIntegrations' => 'Neviena integrācija nav pieejama.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Iegūt "OAuth 2.0" akreditācijas datus no "Google" izstrādātāju konsoles.</b></p><p>Apmeklējiet <a href="https://console.developers.google.com/project">"Google" izstrādātāju konsoli</a>, lai iegūtu "OAuth 2.0" akreditācijas datus, piem., klienta ID un klienta noslēpumu, kas ir zināmi gan "Google", gan "EspoCRM" lietotnēm.</p>',
      'GoogleMaps' => '<p>Iegūt API atslēgu <a href="https://izstrādātājas.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'statuss',
      'executeTime' => 'Izpildīt',
      'executedAt' => 'Executed At',
      'startedAt' => 'Started At',
      'attempts' => 'Palikušie mēģinājumi',
      'failedAttempts' => 'Neizdevušies mēģinājumi',
      'serviceName' => 'Pakalpojums',
      'method' => 'Metode (novecojis)',
      'methodName' => 'Metode',
      'scheduledJob' => 'Ieplānotais darbs',
      'scheduledJobJob' => 'Ieplānotā darba nosaukums',
      'data' => 'Dati',
      'targetType' => 'Target Type',
      'targetId' => 'Target ID',
      'number' => 'Number',
      'queue' => 'Queue',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Tiek gaidīts',
        'Success' => 'Veiksmīgi izpildīts',
        'Running' => 'Tiek izpildīts',
        'Failed' => 'Neizdevās',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Platums (%)',
      'link' => 'Saite',
      'notSortable' => 'Nevar kārtot',
      'align' => 'Līdzināt',
      'panelName' => 'Paneļa nosaukums',
      'style' => 'Stils',
      'sticked' => 'Nostiprināts',
      'isLarge' => 'Liels šrifta izmērs',
      'dynamicLogicVisible' => 'Nosacījumi, lai panelis kļūtu redzams',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Pa kreisi',
        'right' => 'Pa labi',
      ),
      'style' => 
      array (
        'default' => 'Noklusējuma',
        'success' => 'Izpildīts',
        'danger' => 'Bīstamība',
        'info' => 'Informācija',
        'warning' => 'Brīdinājums',
        'primary' => 'Primārais',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'Jauns panelis',
      'Layout' => 'Izkārtojums',
    ),
  ),
  'LeadCapture' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds/nosaukums',
      'campaign' => 'Kampaņa',
      'isActive' => 'Ir aktīvs',
      'subscribeToTargetList' => 'Abonēt mērķa sarakstu',
      'subscribeContactToTargetList' => 'Abonēt kontaktu, ja tāds pastāv',
      'targetList' => 'Mērķa saraksts',
      'fieldList' => 'Lietderīgās slodzes lauki',
      'optInConfirmation' => 'Dubultā piekrišana',
      'optInConfirmationEmailTemplate' => 'Izvēlēšanās apstiprinājuma e-pasta veidne',
      'optInConfirmationLifetime' => 'Izvēlēšanās apstiprinājuma mūžs (stundās)',
      'optInConfirmationSuccessMessage' => 'Pēc izvēlēšanās apstiprinājuma rādāmais teksts',
      'leadSource' => 'Potenciālā klienta avots',
      'apiKey' => 'API atslēga',
      'targetTeam' => 'Mērķa adresātu grupa',
      'exampleRequestMethod' => 'Metode',
      'exampleRequestUrl' => 'Vietrādis URL',
      'exampleRequestPayload' => 'Lietderīgā slodze',
    ),
    'links' => 
    array (
      'targetList' => 'Mērķa adresātu saraksts',
      'campaign' => 'Kampaņa',
      'optInConfirmationEmailTemplate' => 'Izvēlēšanās apstiprinājuma e-pasta veidne',
      'targetTeam' => 'Mērķa adresātu grupa',
      'logRecords' => 'Reģistrs',
    ),
    'labels' => 
    array (
      'Create LeadCapture' => 'Izveidot ieejas punktu',
      'Generate New API Key' => 'Ģenerēt jaunu API atslēgu',
      'Request' => 'Pieprasīt',
      'Confirm Opt-In' => 'Apstiprināt izvēlēšanos',
    ),
    'messages' => 
    array (
      'generateApiKey' => 'Izveidot jaunu API atslēgu',
      'optInConfirmationExpired' => 'Izvēlēšanās apstiprinājuma saites derīgums ir beidzies.',
      'optInIsConfirmed' => 'Izvēlēšanās ir apstiprināta.',
    ),
    'tooltips' => 
    array (
      'optInConfirmationSuccessMessage' => 'Tiek atbalstīts "Markdown".',
    ),
  ),
  'LeadCaptureLogRecord' => 
  array (
    'fields' => 
    array (
      'number' => 'Skaits',
      'data' => 'Dati',
      'target' => 'Mērķa adresāti',
      'leadCapture' => 'Potenciālā klienta tvērums',
      'createdAt' => 'Ievadīšanas laiks',
      'isCreated' => 'Ir potenciālā klienta ieraksts, kas izveidots',
    ),
    'links' => 
    array (
      'leadCapture' => 'Potenciālā klienta tvērums',
      'target' => 'Mērķa adresāti',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Publicējums',
      'attachments' => 'Pielikumi',
      'targetType' => 'Mērķa',
      'teams' => 'Grupas',
      'users' => 'Lietotāji',
      'portals' => 'Portāli',
      'type' => 'Tips',
      'isGlobal' => 'Ir globāls',
      'isInternal' => 'Ir iekšējs (iekšējiem lietotājiem)',
      'related' => 'Saistīts',
      'createdByGender' => 'Izveidotāja dzimums',
      'data' => 'Dati',
      'number' => 'Numurs',
    ),
    'filters' => 
    array (
      'all' => 'Visi',
      'posts' => 'Publicējumi',
      'updates' => 'Atjauninājumi',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'man pašam',
        'users' => 'noteiktam (-iem) lietotājam(-iem)',
        'teams' => 'noteiktai (-ām) grupai (-ām)',
        'all' => 'visiem iekšējiem lietotājiem',
        'portals' => 'portāla lietotājiem',
      ),
      'type' => 
      array (
        'Post' => 'Publicējums',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Šeit ierakstiet ziņojumu',
    ),
    'links' => 
    array (
      'superParent' => 'Galvenais primārais elements',
      'related' => 'Saistīts',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'logo' => 'Logotips',
      'url' => 'Vietrādis URL',
      'portalRoles' => 'Lomas',
      'isActive' => 'Ir aktīvs',
      'isDefault' => 'Ir pēc noklusējuma',
      'tabList' => 'Ciļņu saraksts',
      'quickCreateList' => 'Ātrās izveides saraksts',
      'companyLogo' => 'Logotips',
      'theme' => 'Tēma',
      'language' => 'Valoda',
      'dashboardLayout' => 'Infopaneļa izkārtojums',
      'dateFormat' => 'Datuma formāts',
      'timeFormat' => 'Laika formāts',
      'timeZone' => 'Laika zona',
      'weekStart' => 'Pirmā nedēļas diena',
      'defaultCurrency' => 'Noklusējuma valūta',
      'customUrl' => 'Pielāgotais vietrādis URL',
      'customId' => 'Pielāgots ID',
    ),
    'links' => 
    array (
      'users' => 'Lietotāji',
      'portalRoles' => 'Lomas',
      'notes' => 'Piezīmes',
      'articles' => 'Zināšanu bāzes raksti',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Norādītais portāls tiks attiecināts uz visiem šī portāla lietotājiem.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Izveidot portālu',
      'User Interface' => 'Lietotāja saskarne',
      'General' => 'Vispārīgi',
      'Settings' => 'Iestatījumi',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Eksportēt atļauju',
      'massUpdatePermission' => 'Masu atjaunināšanas atļauja',
    ),
    'links' => 
    array (
      'users' => 'Lietotāji',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Nosaka, vai portāla lietotāji var eksportēt ierakstus.',
      'massUpdatePermission' => 'Nosaka, vai portāla lietotājiem ir iespēja veikt ierakstu masveida atjaunināšanu.',
    ),
    'labels' => 
    array (
      'Access' => 'Piekļuve',
      'Create PortalRole' => 'Izveidot lomu portālā',
      'Scope Level' => 'Tvēruma līmenis',
      'Field Level' => 'Lauka līmenis',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Izveidot portāla lietotāju',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Datuma formāts',
      'timeFormat' => 'Laika formāts',
      'timeZone' => 'Laika zona',
      'weekStart' => 'Pirmā nedēļas diena',
      'thousandSeparator' => 'Tūkstošu atdalītājs',
      'decimalMark' => 'Decimālzīme',
      'defaultCurrency' => 'Noklusējuma valūta',
      'currencyList' => 'Valūtu saraksts',
      'language' => 'Valoda',
      'smtpServer' => 'Serveris',
      'smtpPort' => 'Ports',
      'smtpAuth' => 'Autentifikācija',
      'smtpSecurity' => 'Drošība',
      'smtpUsername' => 'Lietotājvārds',
      'emailAddress' => 'E-pasts',
      'smtpPassword' => 'Parole',
      'smtpEmailAddress' => 'E-pasta adrese',
      'exportDelimiter' => 'Eksportēšanas norobežotājs',
      'receiveAssignmentEmailNotifications' => 'E-pasta paziņojumi pēc piešķiršanas',
      'receiveMentionEmailNotifications' => 'E-pasta paziņojumi par pieminējumiem publicējumos',
      'receiveStreamEmailNotifications' => 'E-pasta paziņojumi par publicējumiem un statusa atjauninājumiem',
      'autoFollowEntityTypeList' => 'Globāla automātiskā sekošana',
      'signature' => 'E-pasta paraksts',
      'dashboardTabList' => 'Ciļņu saraksts',
      'defaultReminders' => 'Noklusējuma atgādinājumi',
      'theme' => 'Tēma',
      'useCustomTabList' => 'Pielāgots ciļņu saraksts',
      'tabList' => 'Ciļņu saraksts',
      'emailReplyToAllByDefault' => 'E-pasta funkcija "atbildēt visiem" pēc noklusējuma',
      'dashboardLayout' => 'Infopaneļa izkārtojums',
      'emailReplyForceHtml' => 'E-pasta atbildes HTML formātā',
      'doNotFillAssignedUserIfNotRequired' => 'Izveidojot ierakstu, neveiciet iepriekšējo aizpildīšanu ziņām par piešķirto lietotāju',
      'followEntityOnStreamPost' => 'Pēc publicēšanas straumēšanā automātiski sekot ierakstam',
      'followCreatedEntities' => 'Automātiski sekot izveidotajiem ierakstiem',
      'followCreatedEntityTypeList' => 'Automātiski sekot izveidotajiem ierakstiem par noteiktiem vienību tipiem',
      'emailUseExternalClient' => 'Lietot ārējā e-pasta klientu',
      'scopeColorsDisabled' => 'Izslēgt tvēruma krāsas',
      'tabColorsDisabled' => 'Izslēgt ciļņa krāsas',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Svētdiena',
        1 => 'Pirmdiena',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Paziņojumi',
      'User Interface' => 'Lietotāja saskarne',
      'SMTP' => 'SMTP',
      'Misc' => 'Dažādi',
      'Locale' => 'Lokalizācija',
      'Reset Dashboard to Default' => 'Atjaunot infopaneļa noklusējuma iestatījumus',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Automātiski sekot VISIEM jaunajiem (jebkura lietotāja izveidotajiem) ierakstiem par noteiktiem atlasīto vienību tipiem. Šādi varēsiet skatīt informāciju straumēšanā un saņemt paziņojumus par visiem ierakstiem sistēmā.',
      'doNotFillAssignedUserIfNotRequired' => 'Izveidojot ierakstu, kā piešķirtie lietotāji netiks norādīti pašu lietotāji, izņemot gadījumus, kad šis lauks būs obligāti aizpildāms.',
      'followCreatedEntities' => 'Izveidojot jaunus ierakstus, tiem tiks automātiski sekots, pat ja tie būs piešķirti citam lietotājam.',
      'followCreatedEntityTypeList' => 'Izveidojot jaunus ierakstus no atlasītajiem vienību tipiem, tiem tiks automātiski sekots, pat ja tie būs piešķirti citam lietotājam.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds/nosaukums',
      'roles' => 'Lomas',
      'assignmentPermission' => 'Piešķiršanas atļauja',
      'userPermission' => 'Lietotāja atļauja',
      'portalPermission' => 'Portāla atļauja',
      'groupEmailAccountPermission' => 'Grupas e-pasta konta atļauja',
      'exportPermission' => 'Eksportēt atļauju',
      'massUpdatePermission' => 'Masu atjaunināšanas atļauja',
      'dataPrivacyPermission' => 'Datu privātuma atļauja',
    ),
    'links' => 
    array (
      'users' => 'Lietotāji',
      'teams' => 'Grupas',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Ļauj ierobežot iespēju piešķirt ierakstus un publicējamos ziņojumus citiem lietotājiem.

Visi - bez ierobežojumiem

Grupa - iespējams piešķirt un publicēt tikai pie grupas biedriem

Neviens - iespējams piešķirt un publicēt tikai pie sevis',
      'userPermission' => 'Ļauj ierobežot iespēju lietotājiem skatīt citu lietotāju darbības, kalendāru un straumēšanu.

Visi - iespējams skatīt visus

Grupa - iespējams skatīt tikai grupas biedru darbības

Neviens  - nav iespējams skatīt nevienam',
      'portalPermission' => 'Nosaka piekļuvi portāla informācijai, iespēju publicēt ziņojumus portāla lietotājiem.',
      'groupEmailAccountPermission' => 'Nosaka piekļuvi grupas e-pasta kontiem un iespēju nosūtīt e-pastus no grupas SMTP.',
      'exportPermission' => 'Nosaka, vai lietotāji var eksportēt ierakstus.',
      'massUpdatePermission' => 'Nosaka, vai lietotāji spēj veikt ierakstu masveida atjaunināšanu.',
      'dataPrivacyPermission' => 'Ļauj skatīt un dzēst personas datus.',
    ),
    'labels' => 
    array (
      'Access' => 'Piekļuve',
      'Create Role' => 'Izveidot lomu',
      'Scope Level' => 'Tvēruma līmenis',
      'Field Level' => 'Lauka līmenis',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nav iestatīts',
        'enabled' => 'atļauts',
        'disabled' => 'nav atļauts',
      ),
      'levelList' => 
      array (
        'all' => 'visi',
        'team' => 'grupa',
        'account' => 'konts',
        'contact' => 'kontakts',
        'own' => 'savs',
        'no' => 'nē',
        'yes' => 'jā',
        'not-set' => 'nav iestatīts',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Izlasīt',
      'edit' => 'Rediģēt',
      'delete' => 'Izdzēst',
      'stream' => 'Straumēt',
      'create' => 'Izveidot',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Visas piekļuves vadības izmaiņas stāsies spēkā pēc kešatmiņas notīrīšanas.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'status' => 'Statuss',
      'job' => 'Darbs',
      'scheduling' => 'Ieplānošana',
    ),
    'links' => 
    array (
      'log' => 'Reģistrs',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Izveidot ieplānoto darbu',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Tīrīšana',
        'CheckInboundEmails' => 'Pārbaudīt grupas e-pasta kontus',
        'CheckEmailAccounts' => 'Pārbaudīt personiskos e-pasta kontus',
        'SendEmailReminders' => 'Nosūtīt atgādinājumus pa e-pastu ',
        'AuthTokenControl' => 'Autentifikācijas tokenu vadība',
        'SendEmailNotifications' => 'Nosūtīt e-pasta paziņojumus',
        'CheckNewVersion' => 'Pārbaudīt, vai ir jauna versija',
        'ProcessMassEmail' => 'Nosūtīt masveida e-pastu',
        'ControlKnowledgeBaseArticleStatus' => 'Pārbaudīt zināšanu bāzes raksta statusu',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Piezīme: lai izpildītu "Espo" ieplānotos darbus, pievienojiet uzdevumu plānotāja ciļņa failam šo rindu: ',
        'mac' => 'Piezīme: lai izpildītu "Espo" ieplānotos darbus, pievienojiet uzdevumu plānotāja ciļņa failam šo rindu: ',
        'windows' => 'Piezīme: lai izpildītu "Espo" ieplānotos darbus, izmantojot "Windows" ieplānotos uzdevumus, izveidojiet pakešfailu ar šādām komandām:',
        'default' => 'Piezīme: pievienojiet uzdevumu plānotāja darbam (ieplānotajiem uzdevumiem) šo komandu:',
      ),
      'status' => 
      array (
        'Active' => 'Aktīvs',
        'Inactive' => 'Neaktīvs',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Uzdevumu plānotāja ciļņa notācija. Nosaka darbu izpildes biežumu.

*/5 * * * * - ik pēc 5 minūtēm

0 */2 * * * - ik pēc 2 stundām

30 1 * * * - vienu reizi dienā plkst. 01:30

0 0 1 * * - mēneša pirmajā dienā',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Statuss',
      'executionTime' => 'Izpildes laiks',
      'target' => 'Mērķis',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Izmantot kešatmiņu',
      'dateFormat' => 'Datuma formāts',
      'timeFormat' => 'Laika formāts',
      'timeZone' => 'Laika zona',
      'weekStart' => 'Nedēļas pirmā diena',
      'thousandSeparator' => 'Tūkstošu atdalītājs',
      'decimalMark' => 'Decimālzīme',
      'defaultCurrency' => 'Noklusējuma valūta',
      'baseCurrency' => 'Pamatvalūta',
      'currencyRates' => 'Kursu vērtības',
      'currencyList' => 'Valūtu saraksts',
      'language' => 'Valoda',
      'companyLogo' => 'Uzņēmuma logotips',
      'smtpServer' => 'Serveris',
      'smtpPort' => 'Ports',
      'smtpAuth' => 'Autentifikācija',
      'smtpSecurity' => 'Drošība',
      'smtpUsername' => 'Lietotājvārds',
      'emailAddress' => 'E-pasts',
      'smtpPassword' => 'Parole',
      'outboundEmailFromName' => 'Bez vārda',
      'outboundEmailFromAddress' => 'Bez adreses',
      'outboundEmailIsShared' => 'Ir kopīgots',
      'recordsPerPage' => 'Ierakstu skaits lappusē',
      'recordsPerPageSmall' => 'ierakstu skaits lappusē (mazais)',
      'tabList' => 'Ciļņu saraksts',
      'quickCreateList' => 'Ātrās izveides saraksts',
      'exportDelimiter' => 'Eksportēšanas norobežotājs',
      'globalSearchEntityList' => 'Globālais meklēšanas vienību saraksts',
      'authenticationMethod' => 'Autentifikācijas metode',
      'ldapHost' => 'Resursdators',
      'ldapPort' => 'Ports',
      'ldapAuth' => 'Autentifikācija',
      'ldapUsername' => 'Pilns lietotāja DN',
      'ldapPassword' => 'Parole',
      'ldapBindRequiresDn' => 'Sasaistei nepieciešams DN',
      'ldapBaseDn' => 'Pamata DN',
      'ldapAccountCanonicalForm' => 'Konta kanoniskā forma',
      'ldapAccountDomainName' => 'Konta domēna vārds',
      'ldapTryUsernameSplit' => 'Mēģiniet sadalīt lietotājvārdu',
      'ldapPortalUserLdapAuth' => 'Izmantojiet LDAP autentifikāciju portāla lietotājiem',
      'ldapCreateEspoUser' => 'Izveidot lietotāju "EspoCRM" sistēmā',
      'ldapSecurity' => 'Drošība',
      'ldapUserLoginFilter' => 'Lietotāja pieslēgšanās filtrs',
      'ldapAccountDomainNameShort' => 'Konts domēna vārda saīsinājums',
      'ldapOptReferrals' => 'Izmantot norādes',
      'ldapUserNameAttribute' => 'Lietotājvārda atribūts',
      'ldapUserObjectClass' => 'Lietotāja objekta klase',
      'ldapUserTitleAttribute' => 'Lietotāja amata atribūts',
      'ldapUserFirstNameAttribute' => 'Lietotāja priekšvārda atribūts',
      'ldapUserLastNameAttribute' => 'Lietotāja uzvārda atribūts',
      'ldapUserEmailAddressAttribute' => 'Lietotāja e-pasta adreses atribūts',
      'ldapUserTeams' => 'Lietotāja grupas',
      'ldapUserDefaultTeam' => 'Lietotāja noklusējuma grupa',
      'ldapUserPhoneNumberAttribute' => 'Lietotāja tālruņa numura atribūts',
      'ldapPortalUserPortals' => 'Portāla lietotāju noklusētie portāli',
      'ldapPortalUserRoles' => 'Noklusējuma lomas portāla lietotājam',
      'exportDisabled' => 'Vairs neatļaut eksportēšanu (atļaut tikai administratoriem)',
      'assignmentNotificationsEntityList' => 'Vienības, kurām jāpaziņo pēc piešķiršanas',
      'assignmentEmailNotifications' => 'Paziņojumi pēc piešķiršanas',
      'assignmentEmailNotificationsEntityList' => 'Piešķiršanas e-pasta paziņojumu tvērums',
      'streamEmailNotifications' => 'Paziņojumi iekšējiem lietotājiem par atjauninājumiem straumēšanā',
      'portalStreamEmailNotifications' => 'Paziņojumi portāla lietotājiem par atjauninājumiem straumēšanā',
      'streamEmailNotificationsEntityList' => 'Straumēšanas e-pasta paziņojumu tvērumi',
      'streamEmailNotificationsTypeList' => 'Kam paziņot',
      'b2cMode' => 'B2C režīms',
      'avatarsDisabled' => 'Vairs neatļaut avatārus',
      'followCreatedEntities' => 'Sekot izveidotajiem ierakstiem',
      'displayListViewRecordCount' => 'Rādīt kopskaitu (saraksta skatījumā)',
      'theme' => 'Tēma',
      'userThemesDisabled' => 'Vairs neatļaut lietotāja tēmas',
      'emailMessageMaxSize' => 'E-pasta maks. lielums (Mb)',
      'massEmailMaxPerHourCount' => 'Stundas laikā nosūtīto e-pastu maks. Skaits',
      'personalEmailMaxPortionSize' => 'Personiskajā kontā ienesamo e-pastu daļas maksimālais lielums',
      'inboundEmailMaxPortionSize' => 'Grupas kontā ienesamo e-pastu daļas maksimālais lielums',
      'maxEmailAccountCount' => 'Viena lietotāja personisko e-pasta kontu maksimālais skaits ',
      'authTokenLifetime' => 'Autentifikācijas tokena darbības laiks (stundās)',
      'authTokenMaxIdleTime' => 'Autentifikācijas tokena maksimālais dīkstāves laiks (stundās)',
      'dashboardLayout' => 'Infopaneļa izkārtojums (noklusējuma)',
      'siteUrl' => 'Vietnes URL',
      'addressPreview' => 'Adreses priekšskatījums',
      'addressFormat' => 'Adreses formāts',
      'notificationSoundsDisabled' => 'Izslēgt paziņojumu skaņas',
      'applicationName' => 'Lietotnes nosaukums',
      'calendarEntityList' => 'Kalendāra vienību saraksts',
      'mentionEmailNotifications' => 'Nosūtīt e-pasta paziņojumus par pieminējumiem publicējumos',
      'massEmailDisableMandatoryOptOutLink' => 'Izslēgt obligāto neizvēlēšanās saiti',
      'activitiesEntityList' => 'Aktivitāšu vienību saraksts',
      'historyEntityList' => 'Vēstures vienību saraksts',
      'currencyFormat' => 'Valūtas formāts',
      'currencyDecimalPlaces' => 'Valūtas ciparu skaits aiz komata',
      'aclStrictMode' => '"ACL Strict" režīms',
      'aclAllowDeleteCreated' => 'Ļaut noņemt izveidotos ierakstus',
      'adminNotifications' => 'Sistēmas paziņojumi administrēšanas panelī',
      'adminNotificationsNewVersion' => 'Rādīt paziņojumus, kad būs pieejami "EspoCRM" jaunā versija',
      'adminNotificationsNewExtensionVersion' => 'Rādīt paziņojumu, kad ir pieejamas jaunas paplašinājuma versijas',
      'textFilterUseContainsForVarchar' => 'Filtrējot mainīgā izmēra laukus, izmantot operatoru "contains" ("satur")',
      'authTokenPreventConcurrent' => 'Tikai viens autentifikācijas tokens vienam lietotājam',
      'scopeColorsDisabled' => 'Izslēgt tvēruma krāsas',
      'tabColorsDisabled' => 'Izslēgt ciļņa krāsas',
      'tabIconsDisabled' => 'Izslēgt ciļņa ikonas',
      'emailAddressIsOptedOutByDefault' => 'Atzīmēt jaunās e-pasta adreses kā neizvēlētās',
      'outboundEmailBccAddress' => 'Ārējo klientu adreses diskrētās kopijas (BCC) sūtīšanai',
      'cleanupDeletedRecords' => 'Notīrīt izdzēstos ierakstus',
      'addressCountryList' => 'Adreses vietņu automātiskās pabeigšanas saraksts',
      'addressCityList' => 'Address City Autocomplete List',
      'fiscalYearShift' => 'Fiskālā gada sākums',
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
        0 => 'Svētdiena',
        1 => 'Pirmdiena',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'Post' => 'Publicējumi',
        'Status' => 'Statuss atjauninājumi',
        'EmailReceived' => 'Saņemtie e-pasti',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Saraksta skatījumos sākotnēji parādāmo ierakstu skaits.',
      'recordsPerPageSmall' => 'Relāciju paneļos sākotnēji parādāmo ierakstu skaits.',
      'outboundEmailIsShared' => 'Ļaut lietotājiem nosūtīt e-pastus no šīs adreses.',
      'followCreatedEntities' => 'Lietotāji automātiski sekos ierakstiem, kurus tie būs izveidojuši.',
      'emailMessageMaxSize' => 'Visi ienākošie e-pasti, kas pārsniegs norādīto lielumu, tiks ienesti bez pamatteksta un pielikumiem.',
      'authTokenLifetime' => 'Definē tokena pastāvēšanas termiņu.
0 - beztermiņa.',
      'authTokenMaxIdleTime' => 'Definē tokena pastāvēšanas termiņu pēc pēdējās piekļuves.
0 - beztermiņa.',
      'userThemesDisabled' => 'Ja šī izvēle būs atzīmēta, lietotāji nevarēs atlasīt citu tēmu.',
      'ldapUsername' => 'Pilna sistēmas lietotāja DN, kas ļauj meklēt citus lietotājus. Piem., "CN=LDAP sistēmas lietotājs,OU=lietotāji,OU=espocrm, DC=tests,DC=lan".',
      'ldapPassword' => 'LDAP servera piekļuves parole',
      'ldapAuth' => 'LDAP servera piekļuves akreditācijas dati',
      'ldapUserNameAttribute' => 'Atribūts lietotāja identificēšanai. 
Piem., "Active Directory" vajadzībām izmanto "userPrincipalName" vai "sAMAccountName", "OpenLDAP" izmanto "uid".',
      'ldapUserObjectClass' => 'Objekta klases atribūts lietotāju meklēšanai. Piem., "Active Directory" izmanto "person", "Open LDAP" izmanto "inetOrgPerson".',
      'ldapAccountCanonicalForm' => 'Jūsu konta tips kanoniskajā formātā. Jums ir 4 opcijas:<br>- "Dn" - forma "CN=tester,OU=espocrm,DC=test, DC=lan".<br>- "Username" - "testētāja" forma.<br>- "Backslash" - formā "COMPANY\\tester".<br>- "Principal" - formā "tester@company.com".',
      'ldapBindRequiresDn' => 'Opcija, kas ļauj pārveidot lietotājvārdu DN formātā.',
      'ldapBaseDn' => 'Noklusējuma pamata DN, kuru izmanto lietotāju meklēšanai. Piem., "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Opcija lietotājvārda sadalīšanai ar domēna nosaukumu.',
      'ldapOptReferrals' => 'ja nepieciešams sekot atsaucēm par LDAP klientu.',
      'ldapPortalUserLdapAuth' => 'Atļaut portāla lietotājiem izmantot Espo autentifikācijas vietā LDAP autentifikāciju.',
      'ldapCreateEspoUser' => 'Šī opcija ļauj izveidot "EspoCRM" lietotāju no LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP atribūts, kuru izmanto, lai noteiktu lietotāja priekšvārdu. Piem., "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP atribūts, kuru izmanto, lai noteiktu lietotāja pēdējo reizi vārds. Piem., "sn".',
      'ldapUserTitleAttribute' => 'LDAP atribūts, kuru izmanto, lai noteiktu lietotāja amatu. Piem., "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP atribūts, kuru izmanto, lai noteiktu lietotāja e-pasta adresi. Piem., "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP atribūts, kuru izmanto, lai noteiktu lietotāja tālruņa numuru. Piem., "telephoneNumber".',
      'ldapUserLoginFilter' => 'Filtrs, kas ļauj ierobežot lietotāju iespējas izmantot "EspoCRM". Piem., "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'Domēna nosaukums, kuru izmanto autorizācijai LDAP serverī.',
      'ldapAccountDomainNameShort' => 'Īsais domēna nosaukums, kuru izmanto autorizācijai LDAP serverī.',
      'ldapUserTeams' => 'Grupas izveidotajam lietotājam. Plašāk skat. lietotājs profilā.',
      'ldapUserDefaultTeam' => 'Noklusējuma grupa izveidotajam lietotājam. Plašāk skat. lietotāja profilā.',
      'ldapPortalUserPortals' => 'Noklusējuma portāli izveidotā portāla lietotājam',
      'ldapPortalUserRoles' => 'Noklusējuma lomas izveidotā portāla lietotājam',
      'b2cMode' => 'Pēc noklusējuma "EspoCRM" ir B2B sistēma. Jūs varat pārslēgt uz B2C režīmu.',
      'currencyDecimalPlaces' => 'Ciparu skaits aiz komata. Atstājot šo izvēli tukšu, tiks rādīti visi cipari aiz komata, kuri nebūs tukši.',
      'aclStrictMode' => 'Atļauts: piekļuve tvērumiem tiks liegta, ja lomās nebūs norādīts citādi.

Nav atļauts: piekļuve tvērumiem tiks atļauta, ja lomās nebūs norādīts citādi.',
      'aclAllowDeleteCreated' => 'Lietotāji varēs noņemt ierakstus, kurus tie būs izveidojuši, pat ja tiem nebūs izdzēsta piekļuve.',
      'textFilterUseContainsForVarchar' => 'Ja nebūs atzīmēts, tiks izmantots operators "starts with". Jūs varat izmantot aizstājējzīmi "%".',
      'streamEmailNotificationsEntityList' => 'E-pasta paziņojumi par sekojamo ierakstu straumes atjauninājumiem. Lietotāji saņems e-pasta paziņojumus tikai par norādītajiem vienību tipiem.',
      'authTokenPreventConcurrent' => 'Lietotāji nevarēs pieslēgties sistēmai no vairākām ierīcēm vienlaicīgi.',
      'emailAddressIsOptedOutByDefault' => 'Izveidojot jaunu ierakstu, e-pasta adrese tiks atzīmēta kā  neizvēlētā.',
      'cleanupDeletedRecords' => 'Noņemtie ieraksti pēc brīža tiks izdzēsti no datu bāzes.',
      'jobRunInParallel' => 'Jobs will be executed in parallel processes.',
      'jobPoolConcurrencyNumber' => 'Max number of processes run simultaneously.',
      'jobMaxPortion' => 'Max number of jobs processed per one execution.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Max number of cron processes run simultaneously.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
    ),
    'labels' => 
    array (
      'System' => 'Sistēma',
      'Locale' => 'Lokalizācija',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfigurācija',
      'In-app Notifications' => 'Ziņapmaiņa lietotnē ',
      'Email Notifications' => 'E-pasta paziņojumi',
      'Currency Settings' => 'Valūtas iestatījumi',
      'Currency Rates' => 'Valūtas kursi',
      'Mass Email' => 'Masveida e-pasts',
      'Test Connection' => 'Testa savienojums',
      'Connecting' => 'Savienojas…',
      'Activities' => 'Aktivitātes',
      'Admin Notifications' => 'Administratora paziņojumi',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Savienojums sekmīgi izveidots.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'roles' => 'Lomas',
      'positionList' => 'Amatu saraksts',
    ),
    'links' => 
    array (
      'users' => 'Lietotāji',
      'notes' => 'Piezīmes',
      'roles' => 'Lomas',
      'inboundEmails' => 'Grupas e-pasta konti',
    ),
    'tooltips' => 
    array (
      'roles' => 'Piekļuves lomas. Šīs grupas lietotāji iegūs piekļuves kontroles līmeni no atlasītajām lomām.',
      'positionList' => 'Šajā grupā pieejamie amati. Piem., pārdevējs, pārvaldnieks.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Izveidot grupu',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'body' => 'Pamatteksts',
      'entityType' => 'Vienību tips',
      'header' => 'Virsraksts',
      'footer' => 'Kājene',
      'leftMargin' => 'Kreisā piemale',
      'topMargin' => 'Augšējā piemale',
      'rightMargin' => 'Labā piemale',
      'bottomMargin' => 'Apakšējā piemale',
      'printFooter' => 'Drukāt kājenes tekstu',
      'footerPosition' => 'Kājenes novietojums',
      'variables' => 'Pieejamie vietturi',
      'pageOrientation' => 'Lappuses orientācija',
      'pageFormat' => 'Papīra formāts',
      'fontFace' => 'Fonts',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Izveidot veidni',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => 'Portrets',
        'Landscape' => 'Ainava',
      ),
      'placeholders' => 
      array (
        'today' => 'Šodien (datums)',
        'now' => 'Tagad (datums-laiks)',
      ),
      'fontFace' => 
      array (
        'aealarabiya' => '"AlArabiya"',
        'aefurat' => '"Aefurat"',
        'cid0cs' => '"CID-0 cs"',
        'cid0ct' => '"CID-0 ct"',
        'cid0jp' => '"CID-0 jp"',
        'cid0kr' => '"CID-0 kr"',
        'courier' => '"Courier"',
        'dejavusans' => '"DejaVu Sans"',
        'dejavusanscondensed' => '"DejaVu Sans Condensed"',
        'dejavusansextralight' => '"DejaVu Sans ExtraLight"',
        'dejavusansmono' => '"DejaVu Sans Mono"',
        'dejavuserif' => '"DejaVu Serif"',
        'dejavuserifcondensed' => '"DejaVu Serif Condensed"',
        'freemono' => '"FreeMono"',
        'freesans' => '"FreeSans"',
        'freeserif' => '"FreeSerif"',
        'helvetica' => '"Helvetica"',
        'hysmyeongjostdmedium' => '"Hysmyeongjostd Medium"',
        'kozgopromedium' => '"Kozgo Pro Medium"',
        'kozminproregular' => '"Kozmin Pro Regular"',
        'msungstdlight' => '"Msung Std Light"',
        'pdfacourier' => '"PDFA Courier"',
        'pdfahelvetica' => '"PDFA Helvetica"',
        'pdfasymbol' => '"PDFA Symbol"',
        'pdfatimes' => '"PDFA Times"',
        'stsongstdlight' => '"STSong Std Light"',
        'symbol' => '"Symbol"',
        'times' => '"Times"',
      ),
    ),
    'tooltips' => 
    array (
      'footer' => 'Drukājot lappuses numuru, izmantot {pageNumber}.',
      'variables' => 'Kopēt un ielīmēt nepieciešamo vietturi virsrakstā, pamattekstā vai kājenē.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'userName' => 'Lietotājvārds',
      'title' => 'Nosaukums',
      'type' => 'Tips',
      'isAdmin' => 'Ir administrators',
      'defaultTeam' => 'Noklusējuma grupa',
      'emailAddress' => 'E-pasts',
      'phoneNumber' => 'Tālrunis',
      'roles' => 'Lomas',
      'portals' => 'Portāli',
      'portalRoles' => 'Lomas portālos',
      'teamRole' => 'Amats',
      'password' => 'Parole',
      'currentPassword' => 'Pašreizējā parole',
      'passwordConfirm' => 'Apstiprināt paroli',
      'newPassword' => 'Jaunā parole',
      'newPasswordConfirm' => 'Apstiprināt jauno paroli',
      'avatar' => 'Avatārs',
      'isActive' => 'Ir aktīvs',
      'isPortalUser' => 'Ir portāla lietotājs',
      'contact' => 'Kontakts',
      'accounts' => 'Konti',
      'account' => 'Konts (primārais)',
      'sendAccessInfo' => 'Nosūtīt e-pastu ar piekļuves informāciju lietotājam',
      'portal' => 'Portāls',
      'gender' => 'Dzimums',
      'position' => 'Amats grupā',
      'ipAddress' => 'IP adrese',
      'passwordPreview' => 'Paroles priekšskatījums',
      'isSuperAdmin' => 'Ir galvenais administrators',
      'lastAccess' => 'Pēdējā piekļuve',
      'apiKey' => 'API atslēga',
      'secretKey' => 'Secret Key',
      'authMethod' => 'Autentifikācijas metode',
      'acceptanceStatus' => 'Akcepta statuss',
      'acceptanceStatusMeetings' => 'Akcepta statuss (tikšanās)',
      'acceptanceStatusCalls' => 'Akcepta statuss (zvani)',
    ),
    'links' => 
    array (
      'defaultTeam' => 'Default Team',
      'teams' => 'Grupas',
      'roles' => 'Lomas',
      'notes' => 'Piezīmes',
      'portals' => 'Portāli',
      'portalRoles' => 'Lomas portālos',
      'contact' => 'Kontakts',
      'accounts' => 'Konti',
      'account' => 'Konts (primārais)',
      'tasks' => 'Uzdevumi',
      'targetLists' => 'Mērķa adresātu saraksts',
    ),
    'labels' => 
    array (
      'Create User' => 'Izveidot lietotāju',
      'Generate' => 'Ģenerēt',
      'Access' => 'Piekļuve',
      'Preferences' => 'Preferences',
      'Change Password' => 'Mainīt paroli',
      'Teams and Access Control' => 'Grupas un piekļuves kontrole',
      'Forgot Password?' => 'Vai aizmirsāt paroli?',
      'Password Change Request' => 'Paroles maiņas pieprasījums',
      'Email Address' => 'E-pasta adrese',
      'External Accounts' => 'Ārējie konti',
      'Email Accounts' => 'E-pasta konti',
      'Portal' => 'Portāls',
      'Create Portal User' => 'Izveidot portāla lietotāju',
      'Proceed w/o Contact' => 'Turpināt bez kontakta',
      'Generate New API Key' => 'Izveidot jaunu API atslēgu',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Visus šī lietotāja izveidotie ieraksti pēc noklusējuma tiks sasaistīti ar šo grupu.',
      'userName' => 'Ir atļauti burti a-z, cipari 0-9, punkti, defises, @-zīmes un pasvītras.',
      'isAdmin' => 'Administratori var piekļūt visam.',
      'isActive' => 'Ja nebūs atzīmēta šī izvēle, lietotājs nevarēs pieslēgties.',
      'teams' => 'Grupas, kurām lietotājs pieder. Piekļuves kontrole līmenis ir pārmantots no grupas lomas.',
      'roles' => 'Papildu piekļuves lomas. Izmantojiet šo izvēli, ja lietotājs nepieder nevienai grupai vai nepieciešams paaugstināt piekļuves kontroles līmeni vienīgi šim lietotājam.',
      'portalRoles' => 'Papildu lomas portālos. Izmantojiet šo izvēli, lai paplašinātu piekļuves kontroles līmeni vienīgi šim lietotājam.',
      'portals' => 'Portāli, kuriem šis lietotājs var piekļūt.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Parole tiks nosūtīta uz lietotāja e-pasta adresi.',
      'passwordChanged' => 'Parole ir nomainīta',
      'userCantBeEmpty' => 'Lietotājvārds nedrīkst būt tukšs',
      'wrongUsernamePasword' => 'Nepareizs lietotājvārds/parole',
      'emailAddressCantBeEmpty' => 'E-pasta adrese nedrīkst būt tukša',
      'userNameEmailAddressNotFound' => 'Lietotājvārds/e-pasta adrese nav atrasta',
      'forbidden' => 'Aizliegts, lūdzu, mēģiniet vēlāk',
      'uniqueLinkHasBeenSent' => 'Unikālais vietrādis URL nosūtīts uz norādīto e-pasta adresi.',
      'passwordChangedByRequest' => 'Parole nomainīta.',
      'setupSmtpBefore' => 'Lai sistēma varētu sūtīt paroli uz e-pastu, nepieciešams veikt <a href="{url}">SMTP iestatījumus</a>.',
      'userNameExists' => 'Šāds lietotājvārds jau pastāv',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Nav iestatīts',
        'Male' => 'Vīrietis',
        'Female' => 'Sieviete',
        'Neutral' => 'Neitrāls',
      ),
      'type' => 
      array (
        'regular' => 'Regulāra',
        'admin' => 'Administrators',
        'portal' => 'Portāls',
        'system' => 'Sistēma',
        'super-admin' => 'Super-Admin',
        'api' => 'API',
      ),
      'authMethod' => 
      array (
        'ApiKey' => 'API atslēga',
        'Hmac' => 'HMAC',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Tikai manai grupai',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktīvs',
      'activePortal' => 'Portāls ir aktīvs',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nosaukums/vārds',
      'emailAddress' => 'E-pasts',
      'website' => 'Vietne',
      'phoneNumber' => 'Tālrunis',
      'billingAddress' => 'Norēķinu adrese',
      'shippingAddress' => 'Piegādes adrese',
      'description' => 'Apraksts',
      'sicCode' => 'SIC kods',
      'industry' => 'Nozare',
      'type' => 'Tips',
      'contactRole' => 'Nosaukums/amats',
      'contactIsInactive' => 'Neaktīvs',
      'campaign' => 'Kampaņa',
      'targetLists' => 'Mērķa adresātu saraksti',
      'targetList' => 'Mērķa adresātu saraksts',
      'originalLead' => 'Oriģinālais potenciālā klienta ieraksts',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakti',
      'opportunities' => 'Iespējas',
      'cases' => 'Lietas',
      'documents' => 'Dokumenti',
      'meetingsPrimary' => 'Tikšanās (izvērsts)',
      'callsPrimary' => 'Zvani (izvērsts)',
      'tasksPrimary' => 'Uzdevumi (izvērsts)',
      'emailsPrimary' => 'E-pasti (izvērsts)',
      'targetLists' => 'Mērķa adresātu saraksti',
      'campaignLogRecords' => 'Kampaņu reģistri',
      'campaign' => 'Kampaņa',
      'portalUsers' => 'Portāla lietotāji',
      'originalLead' => 'Oriģinālais potenciālā klienta ieraksts',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Klients',
        'Investor' => 'Investors',
        'Partner' => 'Partneris',
        'Reseller' => 'Tālākpārdevējs',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Kosmiskā aviācija',
        'Agriculture' => 'Lauksaimniecība',
        'Advertising' => 'Reklāma',
        'Apparel & Accessories' => 'Apģērbs un aksesuāri',
        'Architecture' => 'Arhitektūra',
        'Automotive' => 'Automobiļi',
        'Banking' => 'Bankas',
        'Biotechnology' => 'Biotehnoloģijas',
        'Building Materials & Equipment' => 'Būvmateriāli un aprīkojums',
        'Chemical' => 'Ķīmiskie produkti',
        'Construction' => 'Būvniecība',
        'Computer' => 'Datori',
        'Defense' => 'Aizsardzība',
        'Creative' => 'Radošā joma',
        'Culture' => 'Kultūra',
        'Consulting' => 'Konsultēšana',
        'Education' => 'Izglītība',
        'Electronics' => 'Elektronika',
        'Electric Power' => 'Elektroenerģija',
        'Energy' => 'Enerģētika',
        'Entertainment & Leisure' => 'Izklaide',
        'Finance' => 'Finanses',
        'Food & Beverage' => 'Ēdināšana un dzērieni',
        'Grocery' => 'Pārtikas tirdzniecība',
        'Hospitality' => 'Viesmīlības nozare',
        'Healthcare' => 'Veselības aprūpe',
        'Insurance' => 'Apdrošināšana',
        'Legal' => 'Tieslietas',
        'Manufacturing' => 'Ražošana',
        'Mass Media' => 'Plašsaziņas līdzekļi',
        'Mining' => 'Kalnrūpniecība',
        'Music' => 'Mūzika',
        'Marketing' => 'Mārketings',
        'Publishing' => 'Izdevējdarbība',
        'Petroleum' => 'Naftas produkti',
        'Real Estate' => 'Nekustamais īpašums',
        'Retail' => 'Mazumtirdzniecība',
        'Shipping' => 'Piegāde',
        'Service' => 'Pakalpojumi',
        'Support' => 'Atbalsts',
        'Sports' => 'Sports',
        'Software' => 'Programmatūra',
        'Technology' => 'Tehnoloģijas',
        'Telecommunications' => 'Telekomunikācijas',
        'Television' => 'Televīzija',
        'Testing, Inspection & Certification' => 'Testēšana, pārbaudes un sertificēšana',
        'Transportation' => 'Transports',
        'Travel' => 'Ceļošana',
        'Venture Capital' => 'Riska kapitāls',
        'Wholesale' => 'Vairumtirdzniecība',
        'Water' => 'Ūdens',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Izveidot kontu',
      'Copy Billing' => 'Kopēt norēķinus',
      'Set Primary' => 'Iestatīt kā primāro',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Klienti',
      'partners' => 'Partneri',
      'recentlyCreated' => 'Nesen izveidots',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mēnesis',
      'week' => 'Nedēļa',
      'day' => 'Diena',
      'agendaWeek' => 'Nedēļa',
      'agendaDay' => 'Diena',
      'timeline' => 'Laika grafiks',
    ),
    'labels' => 
    array (
      'Today' => 'Šodien',
      'Create' => 'Izveidot',
      'Shared' => 'Kopīgots',
      'Add User' => 'Pievienot lietotāju',
      'current' => 'Pašreizējais',
      'time' => 'Laiks',
      'User List' => 'Lietotāju saraksts',
      'Manage Users' => 'Pārvaldīt lietotājus',
      'View Calendar' => 'Skatīt kalendāru',
      'Create Shared View' => 'Izveidot kopīgoto skatījumu',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'parent' => 'Primārais',
      'status' => 'Statuss',
      'dateStart' => 'Sākuma datums',
      'dateEnd' => 'Beigu datums',
      'direction' => 'Virziens',
      'duration' => 'Ilgums',
      'description' => 'Apraksts',
      'users' => 'Lietotāji',
      'contacts' => 'Kontakti',
      'leads' => 'Potenciālie klienti',
      'reminders' => 'Atgādinājumi',
      'account' => 'Konts',
      'acceptanceStatus' => 'Akcepta statuss',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Ieplānota',
        'Held' => 'Notikusi',
        'Not Held' => 'Nenotikusi',
      ),
      'direction' => 
      array (
        'Outbound' => 'Izejošais',
        'Inbound' => 'Ienākošais',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nav',
        'Accepted' => 'Pieņemts',
        'Declined' => 'Noraidīts',
        'Tentative' => 'Varbūtējs',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Iestatīt kā notikušu',
      'setNotHeld' => 'Iestatīt kā nenotikušu',
    ),
    'labels' => 
    array (
      'Create Call' => 'Izveidot visus',
      'Set Held' => 'Iestatīt kā notikušu',
      'Set Not Held' => 'Iestatīt kā nenotikušu',
      'Send Invitations' => 'Nosūtīt uzaicinājumus',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Plānota',
      'held' => 'Notikusi',
      'todays' => 'Šodien',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nosaukums',
      'description' => 'Apraksts',
      'status' => 'Statuss',
      'type' => 'Tips',
      'startDate' => 'Sākuma datums',
      'endDate' => 'Beigu datums',
      'targetLists' => 'Mērķa saraksts',
      'excludingTargetLists' => 'Neiekļaujamo lietotāju mērķa saraksts',
      'sentCount' => 'Nosūtīts',
      'openedCount' => 'Atvērts',
      'clickedCount' => 'Noklikšķināts',
      'optedOutCount' => 'Neizvēlēts',
      'bouncedCount' => 'Nepiegādāts',
      'optedInCount' => 'Izvēlēts',
      'hardBouncedCount' => 'Nepiegādāts, jo adrese nepastāv',
      'softBouncedCount' => 'Nepiegādāts, bet adrese pastāv ',
      'leadCreatedCount' => 'Potenciālie klienti izveidoti',
      'revenue' => 'Ieņēmumi',
      'revenueConverted' => 'Ieņēmumi (konvertēti)',
      'budget' => 'Budžets',
      'budgetConverted' => 'Budžets (konvertēts)',
      'budgetCurrency' => 'Budget Currency',
      'contactsTemplate' => 'Kontaktu veidne',
      'leadsTemplate' => 'Potenciālo klientu veidne',
      'accountsTemplate' => 'Kontu veidne',
      'usersTemplate' => 'Lietotāju veidne',
      'mailMergeOnlyWithAddress' => 'Izlaist ierakstus bez aizpildītas adreses',
    ),
    'links' => 
    array (
      'targetLists' => 'Mērķa saraksts',
      'excludingTargetLists' => 'Neiekļaujamo mērķa adresātu saraksts',
      'accounts' => 'Konti',
      'contacts' => 'Kontakti',
      'leads' => 'Potenciālais klients',
      'opportunities' => 'Iespējas',
      'campaignLogRecords' => 'Reģistrs',
      'massEmails' => 'Masveida e-pasti',
      'trackingUrls' => 'Sekojamie vietrāži URL',
      'contactsTemplate' => 'Kontaktu veidne',
      'leadsTemplate' => 'Potenciālo klientu veidne',
      'accountsTemplate' => 'Kontu veidne',
      'usersTemplate' => 'Lietotāju veidne',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-pasts',
        'Web' => 'Vietne',
        'Television' => 'Televīzija',
        'Radio' => 'Radio',
        'Newsletter' => 'Biļetens',
        'Mail' => 'Pasts',
      ),
      'status' => 
      array (
        'Planning' => 'Plānošana',
        'Active' => 'Aktīvs',
        'Inactive' => 'Neaktīvs',
        'Complete' => 'Pabeigts',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Izveidot kampaņu',
      'Target Lists' => 'Mērķa saraksts',
      'Statistics' => 'Statistika',
      'hard' => 'stingrā',
      'soft' => 'nestingrā',
      'Unsubscribe' => 'Atrakstīties',
      'Mass Emails' => 'Masveida e-pasti',
      'Email Templates' => 'E-pasta veidnes',
      'Unsubscribe again' => 'Atcelt abonēšanu vēlreiz',
      'Subscribe again' => 'Abonēt vēlreiz',
      'Create Target List' => 'Izveidot mērķa adresātu sarakstu',
      'Mail Merge' => 'E-pasta sapludināšana',
      'Generate Mail Merge PDF' => 'Izveidot e-pasta sapludināšanu PDF failā',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktīvs',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Jūsu e-pasts tika izņemts no sūtījumu adresātu saraksta.',
      'subscribedAgain' => 'Abonēšana veikta no jauna',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Mērķa adresāti, kuriem nav jāsaņem ziņojumi.',
      'excludingTargetLists' => 'Mērķa adresāti, kuriem nav jāsaņem ziņojumi.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Darbība',
      'actionDate' => 'Datums',
      'data' => 'Dati',
      'campaign' => 'Kampaņa',
      'parent' => 'Mērķa adresāti',
      'object' => 'Objekts',
      'application' => 'Lietotnes',
      'queueItem' => 'Ielikt vienumu rindā',
      'stringData' => 'Virknes dati',
      'stringAdditionalData' => 'Virknes papildu dati',
      'isTest' => 'Ir tests',
    ),
    'links' => 
    array (
      'queueItem' => 'Ielikt vienumu rindā',
      'parent' => 'Primārais elements',
      'object' => 'Objekts',
      'campaign' => 'Kampaņa',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Nosūtīts',
        'Opened' => 'Atvērts',
        'Opted Out' => 'Neizvēlētais',
        'Bounced' => 'Nepiegādāts',
        'Clicked' => 'Noklikšķināts',
        'Lead Created' => 'Potenciālais klients izveidots',
        'Opted In' => 'Izvēlēts',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Visi',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Nosūtītie',
      'opened' => 'Atvērtie',
      'optedOut' => 'Neizvēlētie',
      'optedIn' => 'Izvēlēts',
      'bounced' => 'Nepiegādātie',
      'clicked' => 'Noklikšķinātie',
      'leadCreated' => 'Potenciālais klients izveidots',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'Vietrādis URL',
      'urlToUse' => 'Vietrāža URL vietā ievietojamais kods',
      'campaign' => 'Kampaņa',
    ),
    'links' => 
    array (
      'campaign' => 'Kampaņa',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Izveidot sekošanas vietrādi URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds/nosaukums',
      'number' => 'Numurs',
      'status' => 'Statuss',
      'account' => 'Konts',
      'contact' => 'Kontakts',
      'contacts' => 'Kontakti',
      'priority' => 'Prioritāte',
      'type' => 'Tips',
      'description' => 'Apraksts',
      'inboundEmail' => 'Grupas e-pasta konts',
      'lead' => 'Potenciālais klients',
      'attachments' => 'Pielikumi',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Grupas e-pasta konts',
      'account' => 'Konts',
      'contact' => 'Kontakts (primārais)',
      'Contacts' => 'Kontakti',
      'meetings' => 'Tikšanās',
      'calls' => 'Zvani',
      'tasks' => 'Uzdevumi',
      'emails' => 'E-pasti',
      'articles' => 'Zināšanu bāzes raksti',
      'lead' => 'Potenciālie klienti',
      'attachments' => 'Pielikumi',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Jaunie',
        'Assigned' => 'Piešķirtie',
        'Pending' => 'Gaidīšanā',
        'Closed' => 'Aizvērtie',
        'Rejected' => 'Noraidītie',
        'Duplicate' => 'Dublēt',
      ),
      'priority' => 
      array (
        'Low' => 'Zema',
        'Normal' => 'Normāla',
        'High' => 'Augsta',
        'Urgent' => 'Steidzams',
      ),
      'type' => 
      array (
        'Question' => 'Jautājums',
        'Incident' => 'Incidents',
        'Problem' => 'Problēma',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Izveidot lietu',
      'Close' => 'Aizvērt',
      'Reject' => 'Noraidīt',
      'Closed' => 'Aizvērtie',
      'Rejected' => 'Noraidītie',
    ),
    'presetFilters' => 
    array (
      'open' => 'Atvērt',
      'closed' => 'Aizvērtie',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds, uzvārds',
      'emailAddress' => 'E-pasts',
      'title' => 'Galvenā konta sadaļa',
      'account' => 'Konts',
      'accounts' => 'Konti',
      'phoneNumber' => 'Tālrunis',
      'accountType' => 'Konts tips',
      'doNotCall' => 'Nezvanīt',
      'address' => 'Adrese',
      'opportunityRole' => 'Iespējas loma',
      'accountRole' => 'Amats',
      'description' => 'Apraksts',
      'campaign' => 'Kampaņa',
      'targetLists' => 'Mērķa adresātu saraksti',
      'targetList' => 'Mērķa adresātu saraksts',
      'portalUser' => 'Portāla lietotājs',
      'originalLead' => 'Potenciālā klienta oriģinālais ieraksts',
      'acceptanceStatus' => 'Akcepta statuss',
      'accountIsInactive' => 'Konts neaktīvs',
      'acceptanceStatusMeetings' => 'Akcepta statuss (tikšanās)',
      'acceptanceStatusCalls' => 'Akcepta statuss (zvani)',
    ),
    'links' => 
    array (
      'opportunities' => 'Iespējas',
      'cases' => 'Lietas',
      'targetLists' => 'Mērķa saraksts',
      'campaignLogRecords' => 'Kampaņas reģistrs',
      'campaign' => 'Kampaņa',
      'account' => 'Konts (primārais)',
      'accounts' => 'Konti',
      'casesPrimary' => 'Lietas (primārais)',
      'tasksPrimary' => 'Uzdevumi (izvērsts)',
      'portalUser' => 'Portāla lietotājs',
      'originalLead' => 'Potenciālā klienta oriģinālais ieraksts',
      'documents' => 'Dokumenti',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Izveidot kontaktu',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Nav--',
        'Decision Maker' => 'Lēmumu pieņēmējs',
        'Evaluator' => 'Vērtētājs',
        'Influencer' => 'Padomnieks',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portāla lietotāji',
      'notPortalUsers' => 'Nav portāla lietotāji',
      'accountActive' => 'Aktīvs',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Izveidot dokumentu',
      'Details' => 'Detalizējums',
    ),
    'fields' => 
    array (
      'name' => 'Vārds',
      'status' => 'Statuss',
      'file' => 'Fails',
      'type' => 'Tips',
      'publishDate' => 'Publicēšanas datums',
      'expirationDate' => 'Beigu datums',
      'description' => 'Apraksts',
      'accounts' => 'Konti',
      'folder' => 'Mape',
    ),
    'links' => 
    array (
      'accounts' => 'Konti',
      'opportunities' => 'Iespējas',
      'folder' => 'Mape',
      'leads' => 'Potenciālais klients',
      'contacts' => 'Kontakti',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktīvs',
        'Draft' => 'Melnraksts',
        'Expired' => 'Derīgums beidzies',
        'Canceled' => 'Atcelts',
      ),
      'type' => 
      array (
        '' => 'Nav',
        'Contract' => 'Līgums',
        'NDA' => 'NDA (konfidencialitātes līgums)',
        'EULA' => 'EULA',
        'License Agreement' => 'Licences līgums',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktīvs',
      'draft' => 'Melnraksts',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Izveidot dokumentu mapi',
      'Manage Categories' => 'Pārvaldīt mapes',
      'Documents' => 'Dokumenti',
    ),
    'links' => 
    array (
      'documents' => 'Dokumenti',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'status' => 'Statuss',
      'target' => 'Mērķa adresāts',
      'sentAt' => 'Datums nosūtīts',
      'attemptCount' => 'Mēģinājumi',
      'emailAddress' => 'E-pasta adrese',
      'massEmail' => 'Masveida e-pasts',
      'isTest' => 'Ir tests',
    ),
    'links' => 
    array (
      'target' => 'Mērķa adresāts',
      'massEmail' => 'Masveida e-pasts',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Gaidīšanā',
        'Sent' => 'Nosūtīts',
        'Failed' => 'Neizdevās',
        'Sending' => 'Tiek nosūtīts',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Gaidīšanā',
      'sent' => 'Nosūtīts',
      'failed' => 'Neizdevās',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Izveidot rakstu',
      'Any' => 'Jebkurš',
      'Send in Email' => 'Nosūtīt e-pastā',
      'Move Up' => 'Pārvietot uz augšu',
      'Move Down' => 'Pārvietot uz leju',
      'Move to Top' => 'Pārvietot uz sākumu',
      'Move to Bottom' => 'Pārvietot uz beigām',
    ),
    'fields' => 
    array (
      'name' => 'Vārds',
      'status' => 'Statuss',
      'type' => 'Tips',
      'attachments' => 'Pielikumi',
      'publishDate' => 'Publicēšanas datums',
      'expirationDate' => 'Beigu datums',
      'description' => 'Apraksts',
      'body' => 'Pamatteksts',
      'categories' => 'Kategorijas',
      'language' => 'Valoda',
      'portals' => 'Portāli',
    ),
    'links' => 
    array (
      'cases' => 'Lietas',
      'opportunities' => 'Iespējas',
      'categories' => 'Kategorijas',
      'portals' => 'Portāli',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'Pārskatīšanā',
        'Draft' => 'Melnraksts',
        'Archived' => 'Arhivēts',
        'Published' => 'Publicēts',
      ),
      'type' => 
      array (
        'Article' => 'Raksts',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Raksts būs pieejams tikai norādītajos portālos.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Publicēts',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Izveidot kategoriju',
      'Manage Categories' => 'Pārvaldīt kategorijas',
      'Articles' => 'Raksti',
    ),
    'links' => 
    array (
      'articles' => 'Raksti',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Konvertēts uz',
      'Create Lead' => 'Izveidot potenciālo klientu',
      'Convert' => 'Konvertēt',
      'convert' => 'Konvertēt',
    ),
    'fields' => 
    array (
      'name' => 'Vārds',
      'emailAddress' => 'E-pasts',
      'title' => 'Nosaukums',
      'website' => 'Vietne',
      'phoneNumber' => 'Tālrunis',
      'accountName' => 'Konta nosaukums',
      'doNotCall' => 'Nezvanīt',
      'address' => 'Adrese',
      'status' => 'statuss',
      'source' => 'Avots',
      'opportunityAmount' => 'Iespēju summa',
      'opportunityAmountConverted' => 'Iespēju summa (konvertēts)',
      'description' => 'Apraksts',
      'createdAccount' => 'Konts',
      'createdContact' => 'Kontakts',
      'createdOpportunity' => 'Iespēja',
      'campaign' => 'Kampaņa',
      'targetLists' => 'Mērķa adresātu saraksti',
      'targetList' => 'Mērķa adresātu saraksts',
      'industry' => 'Nozare',
      'acceptanceStatus' => 'Akcepta statuss',
      'opportunityAmountCurrency' => 'Iespēju summas valūta',
      'acceptanceStatusMeetings' => 'Akcepta statuss (tikšanās)',
      'acceptanceStatusCalls' => 'Akcepta statuss (zvani)',
    ),
    'links' => 
    array (
      'targetLists' => 'Mērķa adresātu saraksti',
      'campaignLogRecords' => 'Kampaņas reģistrs',
      'campaign' => 'Kampaņa',
      'createdAccount' => 'Konts',
      'createdContact' => 'Kontakts',
      'createdOpportunity' => 'Iespēja',
      'cases' => 'Lietas',
      'documents' => 'Dokumenti',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Jaunie',
        'Assigned' => 'Piešķirtie',
        'In Process' => 'Procesā',
        'Converted' => 'Konvertēts',
        'Recycled' => 'Nosūtīts uz atkritni',
        'Dead' => 'Norakstīts',
      ),
      'source' => 
      array (
        '' => 'Nav',
        'Call' => 'Zvanīt',
        'Email' => 'E-pasts',
        'Existing Customer' => 'Esošs klients',
        'Partner' => 'Partneris',
        'Public Relations' => 'Sabiedriskās attiecības',
        'Web Site' => 'Vietne',
        'Campaign' => 'Kampaņa',
        'Other' => 'Cits',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktīvs',
      'actual' => 'Faktiskais',
      'converted' => 'Konvertēts',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'status' => 'Statuss',
      'storeSentEmails' => 'Uzglabāt nosūtītos e-pastus',
      'startAt' => 'Datums no',
      'fromAddress' => 'No adreses',
      'fromName' => 'Sūtītāja vārds',
      'replyToAddress' => 'Atbildēt uz adresi',
      'replyToName' => 'Atbildēt vārdam',
      'campaign' => 'Kampaņa',
      'emailTemplate' => 'E-pasta veidne',
      'inboundEmail' => 'E-pasta konts',
      'targetLists' => 'Mērķa adresātu saraksts',
      'excludingTargetLists' => 'Neiekļaujamo mērķa adresātu saraksts',
      'optOutEntirely' => 'Neizvēlēties nevienu',
      'smtpAccount' => 'SMTP konts',
    ),
    'links' => 
    array (
      'targetLists' => 'Mērķa adresātu saraksts',
      'excludingTargetLists' => 'Neiekļaujamo mērķa adresātu saraksts',
      'queueItems' => 'Likt vienumus rindā',
      'campaign' => 'Kampaņa',
      'emailTemplate' => 'E-pasta veidne',
      'inboundEmail' => 'E-pasta konts',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Melnraksts',
        'Pending' => 'Gaidīšanā',
        'In Process' => 'Procesā',
        'Complete' => 'Pabeigts',
        'Canceled' => 'Atcelts',
        'Failed' => 'Neizdevās',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Izveidot masveida e-pastu',
      'Send Test' => 'Nosūtīt testu',
      'System SMTP' => 'Sistēmas SMTP',
      'system' => 'sistēma',
      'group' => 'grupa',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Atlasīt vismaz vienu mērķa adresātu.',
      'testSent' => 'Testa e-pastu(s) paredzēts nosūtīt',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Atrakstījušos saņēmēju e-pasta adreses tiks atzīmētas kā neizvēlētās un uz tām masveida e-pasti vairs netiks sūtīti.',
      'targetLists' => 'Mērķa adresāti, kam jāsaņem ziņojumi.',
      'excludingTargetLists' => 'Mērķa adresāti, kam nav jāsaņem ziņojumi.',
      'storeSentEmails' => 'E-pasti tiks uzglabāti CRM sistēmā.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Faktiskais',
      'complete' => 'Pabeigts',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'parent' => 'Primārais elements',
      'status' => 'statuss',
      'dateStart' => 'Datums no',
      'dateEnd' => 'Datums līdz',
      'duration' => 'Ilgums',
      'description' => 'Apraksts',
      'users' => 'Lietotāji',
      'contacts' => 'Kontakti',
      'leads' => 'Potenciālie klienti',
      'reminders' => 'Atgādinājumi',
      'account' => 'Konts',
      'acceptanceStatus' => 'Akcepta statuss',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Plānota',
        'Held' => 'Notikusi',
        'Not Held' => 'Nav notikusi',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Neviens',
        'Accepted' => 'Pieņemts',
        'Declined' => 'Noraidīts',
        'Tentative' => 'Varbūtējs',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Iestatīt kā notikušu',
      'setNotHeld' => 'Iestatīt kā nenotikušu',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Izveidot visus',
      'Set Held' => 'Iestatīt kā notikušu',
      'Set Not Held' => 'Iestatīt kā nenotikušu',
      'Send Invitations' => 'Nosūtīt uzaicinājumus',
      'on time' => 'laikā',
      'before' => 'pirms',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Plānota',
      'held' => 'Notikusi',
      'todays' => 'Šīsdienas',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Nekas netika nosūtīts',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'account' => 'Konts',
      'stage' => 'Posms',
      'amount' => 'Summa',
      'probability' => 'Varbūtība, %',
      'leadSource' => 'Potenciālo klientu avots',
      'doNotCall' => 'Nezvanīt',
      'closeDate' => 'Slēgšanas datums',
      'contacts' => 'Kontakti',
      'description' => 'Apraksts',
      'amountConverted' => 'Summa (konvertēta)',
      'amountWeightedConverted' => 'Summas īpatsvars',
      'campaign' => 'Kampaņa',
      'originalLead' => 'Potenciālā klienta oriģinālais ieraksts',
      'amountCurrency' => 'Summas valūta',
      'contactRole' => 'Kontaktpersonas loma',
      'lastStage' => 'Jaunākais posms',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakti',
      'documents' => 'Dokumenti',
      'campaign' => 'Kampaņa',
      'originalLead' => 'Potenciālā klienta oriģinālais ieraksts',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Paredzēšana',
        'Qualification' => 'Iespēju novērtēšana',
        'Proposal' => 'Piedāvājums',
        'Negotiation' => 'Saskaņošana',
        'Needs Analysis' => 'Nepieciešama analīze',
        'Value Proposition' => 'Vērtības piedāvājums',
        'Id. Decision Makers' => 'Id. Lēmumu pieņēmēji',
        'Perception Analysis' => 'Novērtējuma analīze',
        'Proposal/Price Quote' => 'Piedāvājums/Cenas piedāvājums',
        'Negotiation/Review' => 'Sarunas/Pārskatīšanā',
        'Closed Won' => 'Aizvērti iegūtie',
        'Closed Lost' => 'Aizvērti zaudētie',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Izveidot Iespēju',
    ),
    'presetFilters' => 
    array (
      'open' => 'Atvērt',
      'won' => 'Iegūtie',
      'lost' => 'Zaudētie',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'description' => 'Apraksts',
      'entryCount' => 'Ierakstu skaits',
      'optedOutCount' => 'Neizvēlētais adrešu skaits',
      'campaigns' => 'Kampaņas',
      'endDate' => 'Beigu datums',
      'targetLists' => 'Mērķa adresātu saraksts',
      'includingActionList' => 'Ieskaitot',
      'excludingActionList' => 'Neieskaitot',
      'targetStatus' => 'Mērķa adresāta statuss',
      'isOptedOut' => 'Nav izvēlēts',
    ),
    'links' => 
    array (
      'accounts' => 'Konti',
      'contacts' => 'Kontakti',
      'leads' => 'Potenciālie klienti',
      'campaigns' => 'Kampaņas',
      'massEmails' => 'Masveida e-pasti',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-pasts',
        'Web' => 'Vietne',
        'Television' => 'Televīzija',
        'Radio' => 'Radio',
        'Newsletter' => 'Biļetens',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Neizvēlēts ',
        'Listed' => 'Iekļauts sarakstā',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Izveidot mērķa adresātu sarakstu',
      'Opted Out' => 'Nav izvēlēts',
      'Cancel Opt-Out' => 'Atcelt neizvēlētos',
      'Opt-Out' => 'Neizvēlēties',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Vārds',
      'parent' => 'Primārais elements',
      'status' => 'Statuss',
      'dateStart' => 'Sākuma datums',
      'dateEnd' => 'Termiņš',
      'dateStartDate' => 'Sākuma datums (visa diena)',
      'dateEndDate' => 'Beigu datums (visa diena)',
      'priority' => 'Prioritāte',
      'description' => 'Apraksts',
      'isOverdue' => 'Nokavēts',
      'account' => 'Konts',
      'dateCompleted' => 'Pabeigšanas datums',
      'attachments' => 'Pielikumi',
      'reminders' => 'Atgādinājumi',
      'contact' => 'Kontakts',
    ),
    'links' => 
    array (
      'attachments' => 'Pielikumi',
      'account' => 'Konts',
      'contact' => 'Kontakts',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nav sākts',
        'Started' => 'Sākts',
        'Completed' => 'Pabeigts',
        'Canceled' => 'Atcelts',
        'Deferred' => 'Atlikts',
      ),
      'priority' => 
      array (
        'Low' => 'Zema',
        'Normal' => 'Normāla',
        'High' => 'Augsta',
        'Urgent' => 'Steidzams',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Izveidot uzdevumu',
      'Complete' => 'Pabeigts',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Faktiskais',
      'completed' => 'Pabeigts',
      'deferred' => 'Atlikts',
      'todays' => 'Šīsdienas',
      'overdue' => 'Nokavēts',
    ),
  ),
);
?>