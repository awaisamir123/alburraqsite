<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'User',
      'action' => 'Action',
      'createdAt' => 'Date',
      'target' => 'Target',
      'targetType' => 'Target Type',
      'authToken' => 'Auth Token',
      'ipAddress' => 'IP Address',
      'authLogRecord' => 'Auth Log Record',
    ),
    'links' => 
    array (
      'authToken' => 'Auth Token',
      'authLogRecord' => 'Auth Log Record',
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
        'update' => 'Update',
        'delete' => 'Delete',
        'create' => 'Create',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Bật',
      'Disabled' => 'Tắt',
      'System' => 'Hệ thống',
      'Users' => 'Người dùng',
      'Email' => 'Email',
      'Data' => 'Dữ liệu',
      'Customization' => 'Tùy chỉnh',
      'Available Fields' => 'Trường hiện có',
      'Layout' => 'Giao diện',
      'Entity Manager' => 'Entity Manager',
      'Add Panel' => 'Thêm bảng điều khiển',
      'Add Field' => 'Thêm trường',
      'Settings' => 'Cái đặt',
      'Scheduled Jobs' => 'Công việc đã lên lịch',
      'Upgrade' => 'Nâng cấp',
      'Clear Cache' => 'Xóa Cache',
      'Rebuild' => 'Dựng lại',
      'Teams' => 'Nhóm',
      'Roles' => 'Vai trò',
      'Portal' => 'Portal',
      'Portals' => 'Portals',
      'Portal Roles' => 'Portal Roles',
      'Portal Users' => 'Portal Users',
      'API Users' => 'API Users',
      'Outbound Emails' => 'Email đã gửi',
      'Group Email Accounts' => 'Group Email Accounts',
      'Personal Email Accounts' => 'Personal Email Accounts',
      'Inbound Emails' => 'Email đã nhận',
      'Email Templates' => 'Mẫu email',
      'Import' => 'Nhập',
      'Layout Manager' => 'Quản lý giao diện',
      'User Interface' => 'Giao diện người dùng',
      'Auth Tokens' => 'Auth Tokens',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Xác thực',
      'Currency' => 'Currency',
      'Integrations' => 'Integrations',
      'Extensions' => 'Extensions',
      'Upload' => 'Upload',
      'Installing...' => 'Installing...',
      'Upgrading...' => 'Upgrading...',
      'Upgraded successfully' => 'Upgraded successfully',
      'Installed successfully' => 'Installed successfully',
      'Ready for upgrade' => 'Ready for upgrade',
      'Run Upgrade' => 'Run Upgrade',
      'Install' => 'Install',
      'Ready for installation' => 'Ready for installation',
      'Uninstalling...' => 'Uninstalling...',
      'Uninstalled' => 'Uninstalled',
      'Create Entity' => 'Create Entity',
      'Edit Entity' => 'Edit Entity',
      'Create Link' => 'Create Link',
      'Edit Link' => 'Edit Link',
      'Notifications' => 'Notifications',
      'Jobs' => 'Jobs',
      'Reset to Default' => 'Reset to Default',
      'Email Filters' => 'Email Filters',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Template Manager' => 'Template Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
      'System Requirements' => 'System Requirements',
      'PHP Settings' => 'PHP Settings',
      'Database Settings' => 'Database Settings',
      'Permissions' => 'Permissions',
      'Success' => 'Success',
      'Fail' => 'Fail',
      'is recommended' => 'is recommended',
      'extension is missing' => 'extension is missing',
      'Field Manager' => 'Quản lý trường',
    ),
    'layouts' => 
    array (
      'list' => 'Đanh sách',
      'detail' => 'Chi tiết',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Bộ lọc tìm kiếm',
      'massUpdate' => 'Cập nhật',
      'relationships' => 'Quan hệ',
      'sidePanelsDetail' => 'Side Panels (Detail)',
      'sidePanelsEdit' => 'Side Panels (Edit)',
      'sidePanelsDetailSmall' => 'Side Panels (Detail Small)',
      'sidePanelsEditSmall' => 'Side Panels (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Convert Lead',
      'listForAccount' => 'List (for Account)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Địa chỉ',
      'array' => 'Mảng',
      'foreign' => 'Nước ngoài',
      'duration' => 'Thời gian',
      'password' => 'Mật khẩu',
      'personName' => 'Person Name',
      'autoincrement' => 'Tự động tăng',
      'bool' => 'Bool',
      'currency' => 'Tiền tệ',
      'currencyConverted' => 'Currency (Converted)',
      'date' => 'Thời gian',
      'datetime' => 'Thời gian',
      'datetimeOptional' => 'Date/Date-Time',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Đường dẫn',
      'linkMultiple' => 'Đa đường dẫn',
      'linkParent' => 'Đường dẫn gốc',
      'phone' => 'Điện thoại',
      'text' => 'Text',
      'url' => 'Đường dẫn',
      'varchar' => 'Varchar',
      'file' => 'File',
      'image' => 'Ảnh',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Attachment Multiple',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Range Currency',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Map',
      'number' => 'Number (auto-increment)',
      'colorpicker' => 'Color Picker',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
      'parsonName' => 'Tên',
      'multienim' => 'Multienum',
    ),
    'fields' => 
    array (
      'type' => 'Loại',
      'name' => 'Tên',
      'label' => 'Thẻ',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Yêu cầu',
      'default' => 'Mặc định',
      'maxLength' => 'Chiều dài tối đa',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Đường dẫn',
      'field' => 'Trường',
      'min' => 'Tối thiểu',
      'max' => 'Tối đa',
      'translation' => 'Dịch',
      'previewSize' => 'Kích thước cũ',
      'noEmptyString' => 'Empty string value is not allowed',
      'defaultType' => 'Default Type',
      'seeMoreDisabled' => 'Disable Text Cut',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Entity List',
      'isSorted' => 'Is Sorted (alphabetically)',
      'audited' => 'Audited',
      'trim' => 'Trim',
      'height' => 'Height (px)',
      'minHeight' => 'Min Height (px)',
      'provider' => 'Provider',
      'typeList' => 'Type List',
      'rows' => 'Number of rows of textarea',
      'lengthOfCut' => 'Length of cut',
      'sourceList' => 'Source List',
      'prefix' => 'Prefix',
      'nextNumber' => 'Next Number',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Disable Formatting',
      'dynamicLogicVisible' => 'Conditions making field visible',
      'dynamicLogicReadOnly' => 'Conditions making field read-only',
      'dynamicLogicRequired' => 'Conditions making field required',
      'dynamicLogicOptions' => 'Conditional options',
      'probabilityMap' => 'Stage Probabilities (%)',
      'readOnly' => 'Read-only',
      'maxFileSize' => 'Max File Size (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Disable Inline Edit',
      'allowCustomOptions' => 'Allow Custom Options',
      'displayAsLabel' => 'Display as Label',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Your EspoCRM will be upgraded to version <strong>{version}</strong>. This can take some time.',
      'upgradeDone' => 'Your EspoCRM has been upgraded to version <strong>{version}</strong>. Refresh your browser window.',
      'upgradeBackup' => 'We recommend you to make backup of your EspoCRM files and data before upgrade.',
      'thousandSeparatorEqualsDecimalMark' => 'Dấu phân cách không thể giống nhau',
      'userHasNoEmailAddress' => 'Người dùng chưa có địa chỉ email',
      'selectEntityType' => 'Chọn loại ở menu bên trái',
      'selectUpgradePackage' => 'Chọn gói nâng cấp',
      'downloadUpgradePackage' => 'Download upgrade package(s) <a href="{url}">here</a>.',
      'selectLayout' => 'Chọn giao diện cần sửa bên trái',
      'selectExtensionPackage' => 'Select extension package',
      'extensionInstalled' => 'Extension {name} {version} has been installed.',
      'installExtension' => 'Extension {name} {version} is ready for an installation.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
    ),
    'descriptions' => 
    array (
      'settings' => 'System settings of application.',
      'scheduledJob' => 'Công việc tự động tiến hành',
      'upgrade' => 'Nâng cấp hệ thống EspoCRM',
      'clearCache' => 'Xóa dữ liệu cache.',
      'rebuild' => 'Xóa dữ liệu và tải lại hệ thống',
      'users' => 'Quản lý người dùng.',
      'teams' => 'Quản lý nhóm.',
      'roles' => 'Quản lý vai trò.',
      'portals' => 'Portals management.',
      'portalRoles' => 'Roles for portal.',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'Tùy chỉnh SMTP để gửi email.',
      'groupEmailAccounts' => 'Group IMAP email accounts. Email import and Email-to-Case.',
      'personalEmailAccounts' => 'Users email accounts.',
      'emailTemplates' => 'Mẫu email gửi đi',
      'import' => 'Nhập dữ liệu từ tệp CSV',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'entityManager' => 'Create and edit custom entities. Manage fields and relationships.',
      'userInterface' => 'Chỉnh sửa giao diện.',
      'authTokens' => 'Kích hoạt quản lý phiên làm việc. Địa chỉ IP và ngày truy cập.',
      'authentication' => 'Cài đặt xác thực truy cập',
      'currency' => 'Currency settings and rates.',
      'extensions' => 'Install or uninstall extensions.',
      'integrations' => 'Integration with third-party services.',
      'notifications' => 'In-app and email notification settings.',
      'inboundEmails' => 'Nhóm tài khoản email IMAP. Nhập email và Email-to-Case.',
      'emailFilters' => 'Email messages that match the specified filter won\'t be imported.',
      'actionHistory' => 'Log of user actions.',
      'labelManager' => 'Customize application labels.',
      'templateManager' => 'Customize message templates.',
      'authLog' => 'Login history.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
      'systemRequirements' => 'System Requirements for EspoCRM.',
      'apiUsers' => 'Separate users for integration purposes.',
      'fieldManager' => 'Tạo trường mới hoặc sửa trường đã tồn tại',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Cực nhỏ',
        'small' => 'Nhỏ',
        'medium' => 'Trung bình',
        'large' => 'Lớn',
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
      'role' => 'Role',
      'related' => 'Related',
      'file' => 'File',
      'type' => 'Type',
      'field' => 'Field',
      'sourceId' => 'Source ID',
      'storage' => 'Storage',
      'size' => 'Size (bytes)',
    ),
    'options' => 
    array (
      'role' => 
      array (
        'Attachment' => 'Attachment',
        'Inline Attachment' => 'Inline Attachment',
        'Import File' => 'Import File',
        'Export File' => 'Export File',
        'Mail Merge' => 'Mail Merge',
        'Mass Pdf' => 'Mass Pdf',
      ),
    ),
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Insert Document',
    ),
    'presetFilters' => 
    array (
      'orphan' => 'Orphan',
    ),
  ),
  'AuthLogRecord' => 
  array (
    'fields' => 
    array (
      'username' => 'Username',
      'ipAddress' => 'IP Address',
      'requestTime' => 'Request Time',
      'createdAt' => 'Requested At',
      'isDenied' => 'Is Denied',
      'denialReason' => 'Denial Reason',
      'portal' => 'Portal',
      'user' => 'User',
      'authToken' => 'Auth Token Created',
      'requestUrl' => 'Request URL',
      'requestMethod' => 'Request Method',
      'authTokenIsActive' => 'Auth Token is Active',
      'authenticationMethod' => 'Authentication Method',
    ),
    'links' => 
    array (
      'authToken' => 'Auth Token Created',
      'user' => 'User',
      'portal' => 'Portal',
      'actionHistoryRecords' => 'Action History',
    ),
    'presetFilters' => 
    array (
      'denied' => 'Denied',
      'accepted' => 'Accepted',
    ),
    'options' => 
    array (
      'denialReason' => 
      array (
        'CREDENTIALS' => 'Invalid credentials',
        'INACTIVE_USER' => 'Inactive user',
        'IS_PORTAL_USER' => 'Portal user',
        'IS_NOT_PORTAL_USER' => 'Not a portal user',
        'USER_IS_NOT_IN_PORTAL' => 'User is not related to the portal',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Người dùng',
      'ipAddress' => 'Địa chỉ IP',
      'lastAccess' => 'Thời gian truy cập cuối',
      'createdAt' => 'Thời gian đăng nhập',
      'isActive' => 'Is Active',
      'portal' => 'Portal',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Action History',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'inactive' => 'Inactive',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Set Inactive',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Set Inactive',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Title',
      'dateFrom' => 'Date From',
      'dateTo' => 'Date To',
      'autorefreshInterval' => 'Auto-refresh Interval',
      'displayRecords' => 'Display Records',
      'isDoubleHeight' => 'Height 2x',
      'mode' => 'Mode',
      'enabledScopeList' => 'What to display',
      'users' => 'Users',
      'entityType' => 'Entity Type',
      'primaryFilter' => 'Primary Filter',
      'boolFilterList' => 'Additional Filters',
      'sortBy' => 'Order (field)',
      'sortDirection' => 'Order (direction)',
      'expandedLayout' => 'Layout',
      'dateFilter' => 'Date Filter',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Week (agenda)',
        'basicWeek' => 'Week',
        'month' => 'Month',
        'basicDay' => 'Day',
        'agendaDay' => 'Day (agenda)',
        'timeline' => 'Timeline',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Select Entity Type in dashlet options.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Field',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Equals',
        'notEquals' => 'Not Equals',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than Or Equals',
        'lessThanOrEquals' => 'Less Than Or Equals',
        'in' => 'In',
        'notIn' => 'Not In',
        'inPast' => 'In Past',
        'inFuture' => 'Is Future',
        'isToday' => 'Is Today',
        'isTrue' => 'Is True',
        'isFalse' => 'Is False',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'contains' => 'Contains',
        'notContains' => 'Not Contains',
        'has' => 'Contains',
        'notHas' => 'Not Contains',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Chủ đề',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateSent' => 'Ngày gửi',
      'from' => 'Từ',
      'to' => 'Tới',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Reply To',
      'replyToString' => 'Reply To (String)',
      'personStringData' => 'Person String Data',
      'isHtml' => 'Chỉ Html',
      'body' => 'Nội dung',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Chủ đề',
      'attachments' => 'Đính kèm',
      'selectTemplate' => 'Chọn mẫu',
      'fromEmailAddress' => 'Địa chỉ gửi',
      'toEmailAddresses' => 'Địa chỉ nhận',
      'emailAddress' => 'Địa chỉ email',
      'deliveryDate' => 'Delivery Date',
      'account' => 'Account',
      'users' => 'Users',
      'replied' => 'Replied',
      'replies' => 'Replies',
      'isRead' => 'Is Read',
      'isNotRead' => 'Is Not Read',
      'isImportant' => 'Is Important',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Is User\'s',
      'inTrash' => 'In Trash',
      'sentBy' => 'Sent By',
      'folder' => 'Folder',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'hasAttachment' => 'Has Attachment',
      'assignedUsers' => 'Assigned Users',
      'ccEmailAddresses' => 'CC Email Addresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'messageId' => 'Message Id',
      'messageIdInternal' => 'Message Id (Internal)',
      'folderId' => 'Folder Id',
      'fromName' => 'From Name',
      'fromString' => 'From String',
      'fromAddress' => 'From Address',
      'isSystem' => 'Is System',
    ),
    'links' => 
    array (
      'replied' => 'Replied',
      'replies' => 'Replies',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
      'attachments' => 'Attachments',
      'fromEmailAddress' => 'From Email Address',
      'toEmailAddresses' => 'To EmailAddresses',
      'ccEmailAddresses' => 'CC EmailAddresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Draft',
        'Sending' => 'Sending',
        'Sent' => 'Sent',
        'Archived' => 'Archived',
        'Received' => 'Received',
        'Failed' => 'Failed',
      ),
      'Draft' => 'Nháp',
      'Sending' => 'Đang gửi',
      'Sent' => 'Đã gửi',
      'Archived' => 'Lưu trữ',
    ),
    'labels' => 
    array (
      'Create Email' => 'Email lưu trữ',
      'Archive Email' => 'Archive Email',
      'Compose' => 'Soạn',
      'Reply' => 'Reply',
      'Reply to All' => 'Reply to All',
      'Forward' => 'Forward',
      'Original message' => 'Original message',
      'Forwarded message' => 'Forwarded message',
      'Email Accounts' => 'Personal Email Accounts',
      'Inbound Emails' => 'Group Email Accounts',
      'Email Templates' => 'Email Templates',
      'Send Test Email' => 'Send Test Email',
      'Send' => 'Send',
      'Email Address' => 'Email Address',
      'Mark Read' => 'Mark Read',
      'Sending...' => 'Sending...',
      'Save Draft' => 'Save Draft',
      'Mark all as read' => 'Mark all as read',
      'Show Plain Text' => 'Show Plain Text',
      'Mark as Important' => 'Mark as Important',
      'Unmark Importance' => 'Unmark Importance',
      'Move to Trash' => 'Move to Trash',
      'Retrieve from Trash' => 'Retrieve from Trash',
      'Move to Folder' => 'Move to Folder',
      'Filters' => 'Filters',
      'Folders' => 'Folders',
      'Create Lead' => 'Create Lead',
      'Create Contact' => 'Create Contact',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Create Task',
      'Create Case' => 'Create Case',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'No SMTP setup. {link}.',
      'testEmailSent' => 'Test email has been sent',
      'emailSent' => 'Email has been sent',
      'savedAsDraft' => 'Saved as draft',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Đã gửi',
      'archived' => 'Lưu trữ',
      'inbox' => 'Inbox',
      'drafts' => 'Drafts',
      'trash' => 'Trash',
      'important' => 'Important',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Mark as Read',
      'markAsNotRead' => 'Mark as Not Read',
      'markAsImportant' => 'Mark as Important',
      'markAsNotImportant' => 'Unmark Importance',
      'moveToTrash' => 'Move to Trash',
      'moveToFolder' => 'Move to Folder',
      'retrieveFromTrash' => 'Retrieve from Trash',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Password',
      'port' => 'Port',
      'monitoredFolders' => 'Monitored Folders',
      'ssl' => 'SSL',
      'fetchSince' => 'Fetch Since',
      'emailAddress' => 'Email Address',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'emailFolder' => 'Put in Folder',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Security',
      'smtpUsername' => 'SMTP Username',
      'smtpPassword' => 'SMTP Password',
    ),
    'links' => 
    array (
      'filters' => 'Filters',
      'emails' => 'Emails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Create Email Account',
      'IMAP' => 'IMAP',
      'Main' => 'Main',
      'Test Connection' => 'Test Connection',
      'Send Test Email' => 'Send Test Email',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Could not connect to IMAP server',
      'connectionIsOk' => 'Connection is Ok',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Multiple folders should be separated by comma.

You can add a \'Sent\' folder to sync emails sent from an external email client.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server. Email Address field should match the address emails will be sent from.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Chính',
      'Opted Out' => 'Chọn ra',
      'Invalid' => 'Không hợp lệ',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'From',
      'to' => 'To',
      'subject' => 'Subject',
      'bodyContains' => 'Body Contains',
      'action' => 'Action',
      'isGlobal' => 'Is Global',
      'emailFolder' => 'Folder',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Create Email Filter',
      'Emails' => 'Emails',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignore',
        'Move to Folder' => 'Put in Folder',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Give the filter a descriptive name.',
      'subject' => 'Use a wildcard *:

text* - starts with text,
*text* - contains text,
*text - ends with text.',
      'bodyContains' => 'Body of the email contains any of the specified words or phrases.',
      'from' => 'Emails being sent from the specified address. Leave empty if not needed. You can use wildcard *.',
      'to' => 'Emails being sent to the specified address. Leave empty if not needed. You can use wildcard *.',
      'isGlobal' => 'Applies this filter to all emails incoming to system.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Skip Notifications',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Create Folder',
      'Manage Folders' => 'Manage Folders',
      'Emails' => 'Emails',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'status' => 'Trạng thái',
      'isHtml' => 'Chỉ Html',
      'body' => 'Nội dung',
      'subject' => 'Chủ đề',
      'attachments' => 'Đính kèm',
      'insertField' => '',
      'oneOff' => 'One-off',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Tạo mẫu email',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'Available placeholders:

{optOutUrl} &#8211; URL for an unsubsbribe link;

{optOutLink} &#8211; an unsubscribe link.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Check if you are going to use this template only once. E.g. for Mass Email.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
    ),
    'placeholderTexts' => 
    array (
      'today' => 'Today\'s date',
      'now' => 'Current date & time',
      'currentYear' => 'Current Year',
      'optOutUrl' => 'URL for an unsubsbribe link',
      'optOutLink' => 'an unsubscribe link',
    ),
  ),
  'EmailTemplateCategory' => 
  array (
    'labels' => 
    array (
      'Create EmailTemplateCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'EmailTemplates' => 'Email Templates',
    ),
    'fields' => 
    array (
      'order' => 'Order',
      'childList' => 'Child List',
    ),
    'links' => 
    array (
      'emailTemplates' => 'Email Templates',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Fields',
      'Relationships' => 'Relationships',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'type' => 'Type',
      'labelSingular' => 'Label Singular',
      'labelPlural' => 'Label Plural',
      'stream' => 'Stream',
      'label' => 'Label',
      'linkType' => 'Link Type',
      'entityForeign' => 'Foreign Entity',
      'linkForeign' => 'Foreign Link',
      'link' => 'Link',
      'labelForeign' => 'Foreign Label',
      'sortBy' => 'Default Order (field)',
      'sortDirection' => 'Default Order (direction)',
      'relationName' => 'Middle Table Name',
      'linkMultipleField' => 'Link Multiple Field',
      'linkMultipleFieldForeign' => 'Foreign Link Multiple Field',
      'disabled' => 'Disabled',
      'textFilterFields' => 'Text Filter Fields',
      'audited' => 'Audited',
      'auditedForeign' => 'Foreign Audited',
      'statusField' => 'Status Field',
      'beforeSaveCustomScript' => 'Before Save Custom Script',
      'color' => 'Color',
      'kanbanViewMode' => 'Kanban View',
      'kanbanStatusIgnoreList' => 'Ignored groups in Kanban view',
      'iconClass' => 'Icon',
      'fullTextSearch' => 'Full-Text Search',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'None',
        'Base' => 'Base',
        'Person' => 'Person',
        'CategoryTree' => 'Category Tree',
        'Event' => 'Event',
        'BasePlus' => 'Base Plus',
        'Company' => 'Company',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Many-to-Many',
        'oneToMany' => 'One-to-Many',
        'manyToOne' => 'Many-to-One',
        'parentToChildren' => 'Parent-to-Children',
        'childrenToParent' => 'Children-to-Parent',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Ascending',
        'desc' => 'Descending',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entity has been created',
      'linkAlreadyExists' => 'Link name conflict.',
      'linkConflict' => 'Name conflict: link or field with the same name already exists.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Updates of this field are logged in stream.',
      'textFilterFields' => 'Fields used by text search.',
      'stream' => 'Whether entity has a Stream.',
      'disabled' => 'Check if you don\'t need this entity in your system.',
      'linkAudited' => 'Creating related record and linking with existing record will be logged in Stream.',
      'linkMultipleField' => 'Link Multiple field provides a handy way to edit relations. Don\'t use it if you can have a large number of related records.',
      'entityType' => 'Base Plus - has Activities, History and Tasks panels.

Event - available in Calendar and Activities panel.',
      'fullTextSearch' => 'Running rebuild is required.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Export all fields',
      'fieldList' => 'Field List',
      'format' => 'Format',
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
      'name' => 'Name',
      'version' => 'Version',
      'description' => 'Description',
      'isInstalled' => 'Installed',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Uninstall',
      'Install' => 'Install',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Extension {name} has been uninstalled',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Connect',
      'Connected' => 'Connected',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dynamic Logic',
      'Name' => 'Name',
      'Label' => 'Label',
      'Type' => 'Type',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'None',
        'javascript: return this.dateTime.getNow(1);' => 'Now',
        'javascript: return this.dateTime.getNow(5);' => 'Now (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Now (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Now (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hour',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 day',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 week',
      ),
      'dateDefault' => 
      array (
        '' => 'None',
        'javascript: return this.dateTime.getToday();' => 'Today',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 day',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 week',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 month',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 year',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Updates will be logged in stream.',
      'required' => 'Field will be mandatory. Can\'t be left empty.',
      'default' => 'Value will be set by default upon creating.',
      'min' => 'Min acceptable value.',
      'max' => 'Max acceptable value.',
      'seeMoreDisabled' => 'If not checked then long texts will be shortened.',
      'lengthOfCut' => 'How long text can be before it will be cut.',
      'maxLength' => 'Max acceptable length of text.',
      'before' => 'The date value should be before the date value of the specified field.',
      'after' => 'The date value should be after the date value of the specified field.',
      'readOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.',
      'maxFileSize' => 'If empty or 0 then no limit.',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Street',
        'city' => 'City',
        'state' => 'State',
        'country' => 'Country',
        'postalCode' => 'Postal Code',
        'map' => 'Map',
      ),
      'personName' => 
      array (
        'salutation' => 'Salutation',
        'first' => 'First',
        'last' => 'Last',
      ),
      'currency' => 
      array (
        'converted' => '(Converted)',
        'currency' => '(Currency)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Date',
      ),
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'Người dùng',
      'Team' => 'Nhóm',
      'Role' => 'Vai trò',
      'EmailTemplate' => 'Mẫu email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Personal Email Account',
      'EmailAccountScope' => 'Personal Email Account',
      'OutboundEmail' => 'Email đã gửi',
      'ScheduledJob' => 'Công việc đã lên lịch',
      'ExternalAccount' => 'External Account',
      'Extension' => 'Extension',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Email tới',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Template' => 'Template',
      'Job' => 'Job',
      'EmailFilter' => 'Email Filter',
      'Portal' => 'Portal',
      'PortalRole' => 'Portal Role',
      'Attachment' => 'Attachment',
      'EmailFolder' => 'Email Folder',
      'PortalUser' => 'Portal User',
      'ApiUser' => 'API User',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Password Change Request',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Unique ID',
      'LastViewed' => 'Last Viewed',
      'Settings' => 'Settings',
      'FieldManager' => 'Field Manager',
      'Integration' => 'Integration',
      'LayoutManager' => 'Layout Manager',
      'EntityManager' => 'Entity Manager',
      'Export' => 'Export',
      'DynamicLogic' => 'Dynamic Logic',
      'DashletOptions' => 'Dashlet Options',
      'Admin' => 'Admin',
      'Global' => 'Global',
      'Preferences' => 'Preferences',
      'EmailAddress' => 'Email Address',
      'PhoneNumber' => 'Phone Number',
      'AuthLogRecord' => 'Auth Log Record',
      'AuthFailLogRecord' => 'Auth Fail Log Record',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'Account' => 'Tài khoản',
      'Contact' => 'Liên hệ',
      'Lead' => 'Chỉ dẫn',
      'Target' => 'Mục tiêu',
      'Opportunity' => 'Cơ hội',
      'Meeting' => 'Buổi gặp',
      'Calendar' => 'Lịch',
      'Call' => 'Gọi',
      'Task' => 'Nhiệm vụ',
      'Case' => 'Trường hợp',
      'Document' => 'Document',
      'DocumentFolder' => 'Document Folder',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
      'MassEmail' => 'Mass Email',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base Article',
      'KnowledgeBaseCategory' => 'Knowledge Base Category',
      'CampaignLogRecord' => 'Campaign Log Record',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Địa chỉ email',
      'User' => 'Người dùng',
      'Team' => 'Nhóm',
      'Role' => 'Vai trò',
      'EmailTemplate' => 'Mẫu email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Personal Email Accounts',
      'EmailAccountScope' => 'Personal Email Accounts',
      'OutboundEmail' => 'Email đã gửi',
      'ScheduledJob' => 'Công việc đã lên lịch',
      'ExternalAccount' => 'External Accounts',
      'Extension' => 'Extensions',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Email đã nhận',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Template' => 'Templates',
      'Job' => 'Jobs',
      'EmailFilter' => 'Email Filters',
      'Portal' => 'Portals',
      'PortalRole' => 'Portal Roles',
      'Attachment' => 'Attachments',
      'EmailFolder' => 'Email Folders',
      'PortalUser' => 'Portal Users',
      'ApiUser' => 'API Users',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Password Change Requests',
      'ActionHistoryRecord' => 'Action History',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Unique IDs',
      'LastViewed' => 'Last Viewed',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Tài khoản',
      'Contact' => 'Sổ liên lạc',
      'Lead' => 'Trưởng nhóm',
      'Target' => 'Mục tiêu',
      'Opportunity' => 'Cơ hội',
      'Meeting' => 'Hẹn gặp',
      'Calendar' => 'Lịch',
      'Call' => 'Cuộc gọi',
      'Task' => 'Nhiệm vụ',
      'Case' => 'Trường hợp',
      'Document' => 'Documents',
      'DocumentFolder' => 'Document Folders',
      'Campaign' => 'Campaigns',
      'TargetList' => 'Target Lists',
      'MassEmail' => 'Mass Emails',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base',
      'KnowledgeBaseCategory' => 'Knowledge Base Categories',
      'CampaignLogRecord' => 'Campaign Log Records',
    ),
    'labels' => 
    array (
      'Misc' => 'Khác',
      'Merge' => 'Gộp',
      'None' => 'Trống',
      'Home' => 'Home',
      'by' => 'bởi',
      'Saved' => 'Đã lưu',
      'Error' => 'Lỗi',
      'Select' => 'Chọn',
      'Not valid' => 'Không phù hợp',
      'Please wait...' => 'Vui lòng đợi...',
      'Please wait' => 'Vui lòng đợi',
      'Loading...' => 'Đang tải...',
      'Uploading...' => 'Đang tải lên...',
      'Sending...' => 'Đang gửi...',
      'Merging...' => 'Merging...',
      'Merged' => 'Merged',
      'Removed' => 'Đã xóa',
      'Posted' => 'Đã đăng',
      'Linked' => 'Đã liên kết',
      'Unlinked' => 'Đã bỏ liên kết',
      'Done' => 'Done',
      'Access denied' => 'Từ chối truy cập',
      'Not found' => 'Not found',
      'Access' => 'Truy cập',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'bản ghi đã được xóa',
      'Wrong username/password' => 'Sai tên truy cập và mật khẩu',
      'Post cannot be empty' => 'Nội dung không được để trống',
      'Removing...' => 'Đang xóa...',
      'Unlinking...' => 'Đang bỏ liên kết...',
      'Posting...' => 'Đang gửi...',
      'Username can not be empty!' => 'Tên đăng nhập không được để trống!',
      'Cache is not enabled' => 'Cache không được bật',
      'Cache has been cleared' => 'Cache đã được xóa',
      'Rebuild has been done' => 'Tải lại thành công',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Đang lưu...',
      'Modified' => 'Đã sửa',
      'Created' => 'Đã tạo',
      'Create' => 'Tạo',
      'create' => 'tạo',
      'Overview' => 'Sơ lược',
      'Details' => 'Chi tiết',
      'Add Field' => 'Add Field',
      'Add Dashlet' => 'Thêm module',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Edit Dashboard',
      'Add' => 'Thêm',
      'Add Item' => 'Add Item',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Thêm nữa',
      'Search' => 'Tìm kiếm',
      'Only My' => 'Chỉ',
      'Open' => 'Mở',
      'Admin' => 'Admin',
      'About' => 'Thông tin',
      'Refresh' => 'Tải lại',
      'Remove' => 'Xóa',
      'Options' => 'Tùy chọn',
      'Username' => 'Tên đăng nhập',
      'Password' => 'Mật khẩu',
      'Login' => 'Đăng nhập',
      'Log Out' => 'Đăng xuất',
      'Preferences' => 'Tùy chỉnh',
      'State' => 'Thành phố',
      'Street' => 'Đường',
      'Country' => 'Quốc gia',
      'City' => 'Quận - huyện',
      'PostalCode' => 'Mã bưu điện',
      'Followed' => 'Đã theo dõi',
      'Follow' => 'Theo dõi',
      'Followers' => 'Followers',
      'Clear Local Cache' => 'Clear Local Cache',
      'Actions' => 'Hoạt động',
      'Delete' => 'Xóa',
      'Update' => 'Cập nhật',
      'Save' => 'Lưu',
      'Edit' => 'Sửa',
      'View' => 'View',
      'Cancel' => 'Bỏ qua',
      'Apply' => 'Apply',
      'Unlink' => 'Xóa liên kết',
      'Mass Update' => 'Cập nhật',
      'Export' => 'Xuất',
      'No Data' => 'Không có dữ liệu',
      'No Access' => 'No Access',
      'All' => 'Tất cả',
      'Active' => 'Đang hoạt động',
      'Inactive' => 'Chưa hoạt động',
      'Write your comment here' => 'Viết lời nhắn tại đây',
      'Post' => 'Gửi',
      'Stream' => 'Luồng',
      'Show more' => 'Xem thêm',
      'Dashlet Options' => 'Tùy chọn module',
      'Full Form' => 'Đầy đủ',
      'Insert' => 'Chèn',
      'Person' => 'Cá nhân',
      'First Name' => 'Tên',
      'Last Name' => 'Họ',
      'Original' => 'Gốc',
      'You' => 'Bạn',
      'you' => 'bạn',
      'change' => 'thay đổi',
      'Change' => 'Change',
      'Primary' => 'Chính',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Administration',
      'Run Import' => 'Bắt đầu nhập',
      'Duplicate' => 'Trùng',
      'Notifications' => 'Thông báo',
      'Mark all read' => 'Mark all read',
      'See more' => 'See more',
      'Today' => 'Today',
      'Tomorrow' => 'Tomorrow',
      'Yesterday' => 'Yesterday',
      'Submit' => 'Submit',
      'Close' => 'Close',
      'Yes' => 'Yes',
      'No' => 'No',
      'Select All Results' => 'Select All Results',
      'Value' => 'Value',
      'Current version' => 'Current version',
      'List View' => 'List View',
      'Tree View' => 'Tree View',
      'Unlink All' => 'Unlink All',
      'Total' => 'Total',
      'Print to PDF' => 'Print to PDF',
      'Default' => 'Default',
      'Number' => 'Number',
      'From' => 'From',
      'To' => 'To',
      'Create Post' => 'Create Post',
      'Previous Entry' => 'Previous Entry',
      'Next Entry' => 'Next Entry',
      'View List' => 'View List',
      'Attach File' => 'Attach File',
      'Skip' => 'Skip',
      'Attribute' => 'Attribute',
      'Function' => 'Function',
      'Self-Assign' => 'Self-Assign',
      'Self-Assigned' => 'Self-Assigned',
      'Expand' => 'Expand',
      'Collapse' => 'Collapse',
      'New notifications' => 'New notifications',
      'Manage Categories' => 'Manage Categories',
      'Manage Folders' => 'Manage Folders',
      'Convert to' => 'Convert to',
      'View Personal Data' => 'View Personal Data',
      'Personal Data' => 'Personal Data',
      'Erase' => 'Erase',
      'Move Over' => 'Move Over',
      'Create InboundEmail' => 'Tạo email đến',
      'Activities' => 'Hành động',
      'History' => 'Lịch sử',
      'Attendees' => 'Người dự',
      'Schedule Meeting' => 'Lên lịch hẹn',
      'Schedule Call' => 'Lên lịch gọi',
      'Compose Email' => 'Tạo email',
      'Log Meeting' => 'Log cuộc hẹn',
      'Log Call' => 'Log cuộc gọi',
      'Archive Email' => 'Email lưu trữ',
      'Create Task' => 'Tạo nhiệm vụ',
      'Tasks' => 'Nhiệm vụ',
      'Add Filter' => 'Thêm bộ lọc',
      'Save Filters' => 'Lưu bộ lọc',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Please wait...',
      'posting' => 'Posting...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'Bạn chưa sửa bản ghi',
      'duplicate' => 'Bản ghi được tạo bị trùng',
      'dropToAttach' => 'Drop to attach',
      'fieldIsRequired' => '{field} là bắt buộc',
      'fieldShouldBeEmail' => 'Kiểm tra lại {field}',
      'fieldShouldBeFloat' => 'Kiểm tra lại {field}',
      'fieldShouldBeInt' => 'Kiểm tra lại {field}',
      'fieldShouldBeDate' => 'Kiểm tra lại {field}',
      'fieldShouldBeDatetime' => 'Kiểm tra lại {field}',
      'fieldShouldAfter' => '{field} cần đặt sau {otherField}',
      'fieldShouldBefore' => '{field} cần đặt trước {otherField}',
      'fieldShouldBeBetween' => '{field} cần đặt giữa {min} và {max}',
      'fieldShouldBeLess' => '{field} cần nhỏ hơn {value}',
      'fieldShouldBeGreater' => '{field} cần lớn hơn {value}',
      'fieldBadPasswordConfirm' => '{field} không hợp lệ',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldValueDuplicate' => 'Duplicate value',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Preferences has been reset to defaults',
      'confirmation' => 'Are you sure?',
      'unlinkAllConfirmation' => 'Are you sure you want to unlink all related records?',
      'resetPreferencesConfirmation' => 'Are you sure you want to reset preferences to defaults?',
      'removeRecordConfirmation' => 'Are you sure you want to remove the record?',
      'unlinkRecordConfirmation' => 'Are you sure you want to unlink the related record?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected records?',
      'massUpdateResult' => '{count} records have been updated',
      'massUpdateResultSingle' => '{count} record has been updated',
      'noRecordsUpdated' => 'No records were updated',
      'massRemoveResult' => '{count} records have been removed',
      'massRemoveResultSingle' => '{count} record has been removed',
      'noRecordsRemoved' => 'No records were removed',
      'clickToRefresh' => 'Click to refresh',
      'streamPostInfo' => 'Type <strong>@username</strong> to mention users in the post.

Available markdown syntax:
`<code>code</code>`
```<code>multiline code</code>```
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~~<del>deleted text</del>~~
> blockquote
[link text](url)',
      'writeYourCommentHere' => 'Viết lời nhắn tại đây',
      'writeMessageToUser' => 'Write a message to {user}',
      'writeMessageToSelf' => 'Write a message on your stream',
      'typeAndPressEnter' => 'Type & press enter',
      'checkForNewNotifications' => 'Check for new notifications',
      'checkForNewNotes' => 'Check for stream updates',
      'internalPost' => 'Post will be seen only by internal users',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Done',
      'confirmMassFollow' => 'Are you sure you want to follow selected records?',
      'confirmMassUnfollow' => 'Are you sure you want to unfollow selected records?',
      'massFollowResult' => '{count} records now are followed',
      'massUnfollowResult' => '{count} records now are not followed',
      'massFollowResultSingle' => '{count} record now is followed',
      'massUnfollowResultSingle' => '{count} record now is not followed',
      'massFollowZeroResult' => 'Nothing got followed',
      'massUnfollowZeroResult' => 'Nothing got unfollowed',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Chỉ',
      'followed' => 'Followed',
      'open' => 'Mở',
      'active' => 'Đang hoạt động',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Followed',
      'all' => 'All',
    ),
    'massActions' => 
    array (
      'remove' => 'Remove',
      'merge' => 'Merge',
      'massUpdate' => 'Mass Update',
      'export' => 'Export',
      'follow' => 'Follow',
      'unfollow' => 'Unfollow',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Tên',
      'firstName' => 'Tên',
      'lastName' => 'Họ',
      'salutationName' => 'Chào đón',
      'assignedUser' => 'Phân công',
      'assignedUsers' => 'Assigned Users',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Thành viên được phân công',
      'teams' => 'Nhóm',
      'createdAt' => 'Tạo lúc',
      'modifiedAt' => 'Sửa lúc',
      'createdBy' => 'Tạo bởi',
      'modifiedBy' => 'Sửa bởi',
      'description' => 'Description',
      'address' => 'Address',
      'phoneNumber' => 'Phone',
      'phoneNumberMobile' => 'Phone (Mobile)',
      'phoneNumberHome' => 'Phone (Home)',
      'phoneNumberFax' => 'Phone (Fax)',
      'phoneNumberOffice' => 'Phone (Office)',
      'phoneNumberOther' => 'Phone (Other)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Order',
      'parent' => 'Parent',
      'children' => 'Children',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'types' => 'Types',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Quận - huyện',
      'billingAddressCountry' => 'Quốc gia',
      'billingAddressPostalCode' => 'Mã bưu điện',
      'billingAddressState' => 'Thành phố',
      'billingAddressStreet' => 'Đường',
      'billingAddressMap' => 'Map',
      'addressCity' => 'Quận - huyện',
      'addressStreet' => 'Đường',
      'addressCountry' => 'Quốc gia',
      'addressState' => 'Thành phố',
      'addressPostalCode' => 'Mã bưu điện',
      'addressMap' => 'Map',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
      'shippingAddressMap' => 'Map (Shipping)',
      'title' => 'Tiêu đề',
      'dateFrom' => 'Từ ngày',
      'dateTo' => 'Tới ngày',
      'autorefreshInterval' => 'Tự động tải lại sau',
      'displayRecords' => 'Xem bản ghi',
    ),
    'links' => 
    array (
      'assignedUser' => 'Assigned User',
      'createdBy' => 'Created By',
      'modifiedBy' => 'Modified By',
      'team' => 'Team',
      'roles' => 'Roles',
      'teams' => 'Nhóm',
      'users' => 'Người dùng',
      'parent' => 'Parent',
      'children' => 'Children',
      'contacts' => 'Sổ liên lạc',
      'opportunities' => 'Cơ hội',
      'leads' => 'Trưởng nhóm',
      'meetings' => 'Hẹn gặp',
      'calls' => 'Cuộc gọi',
      'tasks' => 'Nhiệm vụ',
      'emails' => 'Địa chỉ email',
      'accounts' => 'Accounts',
      'cases' => 'Cases',
      'documents' => 'Documents',
      'account' => 'Account',
      'opportunity' => 'Opportunity',
      'contact' => 'Contact',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Luồng',
      'Emails' => 'My Inbox',
      'Records' => 'Record List',
      'Leads' => 'Chỉ dẫn của tôi',
      'Opportunities' => 'Cơ hội của tôi',
      'Tasks' => 'Nhiệm vụ của tôi',
      'Cases' => 'Công việc của tôi',
      'Calendar' => 'Lịch',
      'Calls' => 'My Calls',
      'Meetings' => 'My Meetings',
      'OpportunitiesByStage' => 'Chia mức cơ hội',
      'OpportunitiesByLeadSource' => 'Phân chia cơ hội theo người chỉ dẫn',
      'SalesByMonth' => 'Doanh thu hàng tháng',
      'SalesPipeline' => 'Doanh thu đường ống',
      'Activities' => 'My Activities',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'Email received from {from}',
      'entityRemoved' => '{user} removed {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} đăng {entityType} {entity}',
      'attach' => '{user} đính kèm ở {entityType} {entity}',
      'status' => '{user} cập nhật {field} ở {entityType} {entity}',
      'update' => '{user} cập nhật {entityType} {entity}',
      'postTargetTeam' => '{user} posted to team {target}',
      'postTargetTeams' => '{user} posted to teams {target}',
      'postTargetPortal' => '{user} posted to portal {target}',
      'postTargetPortals' => '{user} posted to portals {target}',
      'postTarget' => '{user} posted to {target}',
      'postTargetYou' => '{user} posted to you',
      'postTargetYouAndOthers' => '{user} posted to {target} and you',
      'postTargetAll' => '{user} posted to all',
      'postTargetSelf' => '{user} self-posted',
      'postTargetSelfAndOthers' => '{user} posted to {target} and themself',
      'mentionInPost' => '{user} mentioned {mentioned} in {entityType} {entity}',
      'mentionYouInPost' => '{user} mentioned you in {entityType} {entity}',
      'mentionInPostTarget' => '{user} mentioned {mentioned} in post',
      'mentionYouInPostTarget' => '{user} mentioned you in post to {target}',
      'mentionYouInPostTargetAll' => '{user} mentioned you in post to all',
      'mentionYouInPostTargetNoTarget' => '{user} mentioned you in post',
      'create' => '{user} tạo {entityType} {entity}',
      'createThis' => '{user} tạo {entityType}',
      'createAssignedThis' => '{user} tạo {entityType} phân công cho {assignee}',
      'createAssigned' => '{user} tạo {entityType} {entity} phân công cho {assignee}',
      'createAssignedYou' => '{user} created {entityType} {entity} assigned to you',
      'createAssignedThisSelf' => '{user} created this {entityType} self-assigned',
      'createAssignedSelf' => '{user} created {entityType} {entity} self-assigned',
      'assign' => '{user} phân công {entityType} {entity} cho {assignee}',
      'assignThis' => '{user} phân công {entityType} cho {assignee}',
      'assignYou' => '{user} assigned {entityType} {entity} to you',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} self-assigned this {entityType}',
      'assignSelf' => '{user} self-assigned {entityType} {entity}',
      'postThis' => '{user} đã đăng',
      'attachThis' => '{user} đã đính kèm',
      'statusThis' => '{user} đã cập nhật {field}',
      'updateThis' => '{user} cập nhật {entityType}',
      'createRelatedThis' => '{user} created {relatedEntityType} {relatedEntity} linked to this {entityType}',
      'createRelated' => '{user} created {relatedEntityType} {relatedEntity} linked to {entityType} {entity}',
      'relate' => '{user} linked {relatedEntityType} {relatedEntity} with {entityType} {entity}',
      'relateThis' => '{user} linked {relatedEntityType} {relatedEntity} with this {entityType}',
      'emailReceivedFromThis' => 'Email received from {from}',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => '{entity} đã được nhận',
      'emailReceivedInitialThis' => 'Email received, this {entityType} created',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => '{entity} đã được nhận bởi {entityType} {entity}',
      'emailReceivedInitial' => 'Email received: {entityType} {entity} created',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} sent email related to {entityType} {entity}',
      'emailSentThis' => '{by} sent email',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} posted to {target} and himself',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} posted to {target} and herself',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'January',
        1 => 'February',
        2 => 'March',
        3 => 'April',
        4 => 'May',
        5 => 'June',
        6 => 'July',
        7 => 'August',
        8 => 'September',
        9 => 'October',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Sun',
        1 => 'Mon',
        2 => 'Tue',
        3 => 'Wed',
        4 => 'Thu',
        5 => 'Fri',
        6 => 'Sat',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Su',
        1 => 'Mo',
        2 => 'Tu',
        3 => 'We',
        4 => 'Th',
        5 => 'Fr',
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
        'Mr.' => 'Ông.',
        'Mrs.' => 'Bà.',
        'Ms.' => 'Ms.',
        'Dr.' => 'Ông.',
        'Drs.' => 'Bà.',
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
        'es_MX' => 'Spanish (Mexico)',
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
        'on' => 'On',
        'notOn' => 'Not On',
        'after' => 'After',
        'before' => 'Before',
        'between' => 'Between',
        'today' => 'Today',
        'past' => 'Past',
        'future' => 'Future',
        'currentMonth' => 'Current Month',
        'lastMonth' => 'Last Month',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Current Quarter',
        'lastQuarter' => 'Last Quarter',
        'currentYear' => 'Current Year',
        'lastYear' => 'Last Year',
        'lastSevenDays' => 'Last 7 Days',
        'lastXDays' => 'Last X Days',
        'nextXDays' => 'Next X Days',
        'ever' => 'Ever',
        'isEmpty' => 'Is Empty',
        'olderThanXDays' => 'Older Than X Days',
        'afterXDays' => 'After X Days',
        'currentFiscalYear' => 'Current Fiscal Year',
        'lastFiscalYear' => 'Last Fiscal Year',
        'currentFiscalQuarter' => 'Current Fiscal Quarter',
        'lastFiscalQuarter' => 'Last Fiscal Quarter',
      ),
      'searchRanges' => 
      array (
        'is' => 'Is',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Is From Team',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Equals',
        'like' => 'Is Like (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Starts With',
        'endsWith' => 'Ends With',
        'contains' => 'Contains',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Equals',
        'notEquals' => 'Not Equals',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than or Equals',
        'lessThanOrEquals' => 'Less Than or Equals',
        'between' => 'Between',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Trống',
        '0.5' => '30 seconds',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobile',
        'Office' => 'Office',
        'Fax' => 'Fax',
        'Home' => 'Home',
        'Other' => 'Khác',
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
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Đậm',
          'italic' => 'Nghiêng',
          'underline' => 'Gạch chân',
          'strike' => 'Gạch giữa',
          'clear' => 'Xóa định dạng',
          'height' => 'Kích thước dòng',
          'name' => 'Font chữ',
          'size' => 'Kích thước',
        ),
        'image' => 
        array (
          'image' => 'Ảnh',
          'insert' => 'Chèn ảnh',
          'resizeFull' => 'Ảnh đầy đủ',
          'resizeHalf' => 'Giảm nửa kích thước',
          'resizeQuarter' => 'Giảm 1/4 kích thước',
          'floatLeft' => 'Căn trái',
          'floatRight' => 'Căn phải',
          'floatNone' => 'Không căn lề',
          'dragImageHere' => 'Thả ảnh vào đây',
          'selectFromFiles' => 'Chọn từ thư mục',
          'url' => 'Đường dẫn ảnh',
          'remove' => 'Xóa ảnh',
        ),
        'link' => 
        array (
          'link' => 'Đường dẫn',
          'insert' => 'Chèn đường dẫn',
          'unlink' => 'Xóa liên kết',
          'edit' => 'Sửa',
          'textToDisplay' => 'Chữ hiển thị',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Mở trong cửa sổ mới',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Đường dẫn video',
          'insert' => 'Chèn Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Bảng',
        ),
        'hr' => 
        array (
          'insert' => 'Thêm dòng ngang',
        ),
        'style' => 
        array (
          'style' => 'Kiểu',
          'normal' => 'Bình thường',
          'blockquote' => 'Trích dẫn',
          'pre' => 'Code',
          'h1' => 'Tiêu đề 1',
          'h2' => 'Tiêu đề 2',
          'h3' => 'Tiêu đềTiêu đề 3',
          'h4' => 'Tiêu đề 4',
          'h5' => 'Tiêu đề 5',
          'h6' => 'Tiêu đề 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Liệt kê',
          'ordered' => 'Danh sách',
        ),
        'options' => 
        array (
          'help' => 'Trợ giúp',
          'fullscreen' => 'Đầy màn hình',
          'codeview' => 'Hiển thị dạng code',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Đoạn văn bản',
          'outdent' => 'Bỏ lùi đầu dòng',
          'indent' => 'Lùi đầu dòng',
          'left' => 'Căn lề trái',
          'center' => 'Căn lề giữa',
          'right' => 'Căn lề phải',
          'justify' => 'Căn lề 2 bên',
        ),
        'color' => 
        array (
          'recent' => 'Màu đã dùng',
          'more' => 'Thêm màu',
          'background' => 'Màu nền',
          'foreground' => 'Màu chữ',
          'transparent' => 'Trong suốt',
          'setTransparent' => 'Chỉnh độ trong suốt',
          'reset' => 'Reset',
          'resetToDefault' => 'Đặt lại mặc định',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Phím tắt',
          'close' => 'Đóng',
          'textFormatting' => 'Định dạng chữ',
          'action' => 'Hành động',
          'paragraphFormatting' => 'Định dạng đoạn văn bản',
          'documentStyle' => 'Kiểu văn bản',
        ),
        'history' => 
        array (
          'undo' => 'Quay lui',
          'redo' => 'Tiến lên',
        ),
      ),
    ),
    'listViewModes' => 
    array (
      'list' => 'List',
      'kanban' => 'Kanban',
    ),
    'themes' => 
    array (
      'Espo' => 'Classic Espo',
      'EspoRtl' => 'RTL Espo',
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
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Return to Import',
      'Run Import' => 'Run Import',
      'Back' => 'Back',
      'Field Mapping' => 'Field Mapping',
      'Default Values' => 'Default Values',
      'Add Field' => 'Add Field',
      'Created' => 'Created',
      'Updated' => 'Updated',
      'Result' => 'Result',
      'Show records' => 'Show records',
      'Remove Duplicates' => 'Remove Duplicates',
      'importedCount' => 'Imported (count)',
      'duplicateCount' => 'Duplicates (count)',
      'updatedCount' => 'Updated (count)',
      'Create Only' => 'Create Only',
      'Create and Update' => 'Create & Update',
      'Update Only' => 'Update Only',
      'Update by' => 'Update by',
      'Set as Not Duplicate' => 'Set as Not Duplicate',
      'File (CSV)' => 'File (CSV)',
      'First Row Value' => 'First Row Value',
      'Skip' => 'Skip',
      'Header Row Value' => 'Header Row Value',
      'Field' => 'Field',
      'What to Import?' => 'What to Import?',
      'Entity Type' => 'Entity Type',
      'What to do?' => 'What to do?',
      'Properties' => 'Properties',
      'Header Row' => 'Header Row',
      'Person Name Format' => 'Person Name Format',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Field Delimiter',
      'Date Format' => 'Date Format',
      'Decimal Mark' => 'Decimal Mark',
      'Text Qualifier' => 'Text Qualifier',
      'Time Format' => 'Time Format',
      'Currency' => 'Currency',
      'Preview' => 'Preview',
      'Next' => 'Next',
      'Step 1' => 'Step 1',
      'Step 2' => 'Step 2',
      'Double Quote' => 'Double Quote',
      'Single Quote' => 'Single Quote',
      'Imported' => 'Imported',
      'Duplicates' => 'Duplicates',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Should be UTF-8 encoded',
      'duplicatesRemoved' => 'Duplicates removed',
      'inIdle' => 'Execute in idle (for big data; via cron)',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You wan\'t be able to revert import results. Are you sure you?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.',
    ),
    'fields' => 
    array (
      'file' => 'File',
      'entityType' => 'Entity Type',
      'imported' => 'Imported Records',
      'duplicates' => 'Duplicate Records',
      'updated' => 'Updated Records',
      'status' => 'Status',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Failed',
        'In Process' => 'In Process',
        'Complete' => 'Complete',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email Address',
      'team' => 'Nhóm',
      'status' => 'Trạng thái',
      'assignToUser' => 'Chỉ định',
      'host' => 'Máy chủ',
      'username' => 'Tên đăng nhập',
      'password' => 'Mật khẩu',
      'port' => 'Cổng',
      'monitoredFolders' => 'Thư mục được theo dõi',
      'trashFolder' => 'Thùng rác',
      'ssl' => 'SSL',
      'createCase' => 'Tạo trường hợp',
      'reply' => 'Trả lời',
      'caseDistribution' => 'Trường hợp phân phối',
      'replyEmailTemplate' => 'Mẫu email trả lời',
      'replyFromAddress' => 'Địa chỉ email trả lời',
      'replyToAddress' => 'Reply To Address',
      'replyFromName' => 'Tên người gửi',
      'targetUserPosition' => 'Target User Position',
      'fetchSince' => 'Fetch Since',
      'addAllTeamUsers' => 'For all team users',
      'teams' => 'Teams',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Security',
      'smtpUsername' => 'SMTP Username',
      'smtpPassword' => 'SMTP Password',
      'fromName' => 'From Name',
      'smtpIsShared' => 'SMTP Is Shared',
      'smtpIsForMassEmail' => 'SMTP Is for Mass Email',
    ),
    'tooltips' => 
    array (
      'reply' => 'Notify email senders that their emails has been received.

 Only one email will be sent to a particular recipient during some period of time to prevent looping.',
      'createCase' => 'Automatically create case from incoming emails.',
      'replyToAddress' => 'Specify email address of this mailbox to make responses come here.',
      'caseDistribution' => 'How cases will be assigned to. Assigned directly to the user or among the team.',
      'assignToUser' => 'User cases will be assigned to.',
      'team' => 'Team cases will be assigned to.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Users with specified position will be distributed with cases.',
      'addAllTeamUsers' => 'Emails will be appearing in Inbox of all users of specified teams.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' => 
    array (
      'filters' => 'Filters',
      'emails' => 'Emails',
      'assignToUser' => 'Assign to User',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Chưa hoạt động',
      ),
      'caseDistribution' => 
      array (
        '' => 'None',
        'Direct-Assignment' => 'Direct-Assignment',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Tạo email đến',
      'IMAP' => 'IMAP',
      'Actions' => 'Hoạt động',
      'Main' => 'Chính',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Không thể kết nối với máy chủ IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Enabled',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirect URI',
      'apiKey' => 'API Key',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Select an integration from menu.',
      'noIntegrations' => 'No Integrations is available.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Obtain OAuth 2.0 credentials from the Google Developers Console.</b></p><p>Visit <a href="https://console.developers.google.com/project">Google Developers Console</a> to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.</p>',
      'GoogleMaps' => '<p>Obtain API key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Execute At',
      'executedAt' => 'Executed At',
      'startedAt' => 'Started At',
      'attempts' => 'Attempts Left',
      'failedAttempts' => 'Failed Attempts',
      'serviceName' => 'Service',
      'method' => 'Method (deprecated)',
      'methodName' => 'Method',
      'scheduledJob' => 'Scheduled Job',
      'scheduledJobJob' => 'Scheduled Job Name',
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
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Running' => 'Running',
        'Failed' => 'Failed',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Width (%)',
      'link' => 'Link',
      'notSortable' => 'Not Sortable',
      'align' => 'Align',
      'panelName' => 'Panel Name',
      'style' => 'Style',
      'sticked' => 'Sticked',
      'isLarge' => 'Large font size',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Left',
        'right' => 'Right',
      ),
      'style' => 
      array (
        'default' => 'Default',
        'success' => 'Success',
        'danger' => 'Danger',
        'info' => 'Info',
        'warning' => 'Warning',
        'primary' => 'Primary',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'New panel',
      'Layout' => 'Layout',
    ),
  ),
  'LeadCapture' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'campaign' => 'Campaign',
      'isActive' => 'Is Active',
      'subscribeToTargetList' => 'Subscribe to Target List',
      'subscribeContactToTargetList' => 'Subscribe Contact if exists',
      'targetList' => 'Target List',
      'fieldList' => 'Payload Fields',
      'optInConfirmation' => 'Double Opt-In',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'optInConfirmationLifetime' => 'Opt-in confirmation lifetime (hours)',
      'optInConfirmationSuccessMessage' => 'Text to show after opt-in confirmation',
      'leadSource' => 'Lead Source',
      'apiKey' => 'API Key',
      'targetTeam' => 'Target Team',
      'exampleRequestMethod' => 'Method',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Payload',
    ),
    'links' => 
    array (
      'targetList' => 'Target List',
      'campaign' => 'Campaign',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'targetTeam' => 'Target Team',
      'logRecords' => 'Log',
    ),
    'labels' => 
    array (
      'Create LeadCapture' => 'Create Entry Point',
      'Generate New API Key' => 'Generate New API Key',
      'Request' => 'Request',
      'Confirm Opt-In' => 'Confirm Opt-In',
    ),
    'messages' => 
    array (
      'generateApiKey' => 'Create new API Key',
      'optInConfirmationExpired' => 'Opt-in confirmation link is expired.',
      'optInIsConfirmed' => 'Opt-in is confirmed.',
    ),
    'tooltips' => 
    array (
      'optInConfirmationSuccessMessage' => 'Markdown is supported.',
    ),
  ),
  'LeadCaptureLogRecord' => 
  array (
    'fields' => 
    array (
      'number' => 'Number',
      'data' => 'Data',
      'target' => 'Target',
      'leadCapture' => 'Lead Capture',
      'createdAt' => 'Entered At',
      'isCreated' => 'Is Lead Created',
    ),
    'links' => 
    array (
      'leadCapture' => 'Lead Capture',
      'target' => 'Target',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Gửi',
      'attachments' => 'Đính kèm',
      'targetType' => 'Target',
      'teams' => 'Teams',
      'users' => 'Users',
      'portals' => 'Portals',
      'type' => 'Type',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'related' => 'Related',
      'createdByGender' => 'Created By Gender',
      'data' => 'Data',
      'number' => 'Number',
    ),
    'filters' => 
    array (
      'all' => 'All',
      'posts' => 'Posts',
      'updates' => 'Updates',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'to myself',
        'users' => 'to particular user(s)',
        'teams' => 'to particular team(s)',
        'all' => 'to all internal users',
        'portals' => 'to portal users',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Write your message here',
    ),
    'links' => 
    array (
      'superParent' => 'Super Parent',
      'related' => 'Related',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roles',
      'isActive' => 'Is Active',
      'isDefault' => 'Is Default',
      'tabList' => 'Tab List',
      'quickCreateList' => 'Quick Create List',
      'companyLogo' => 'Logo',
      'theme' => 'Theme',
      'language' => 'Language',
      'dashboardLayout' => 'Dashboard Layout',
      'dateFormat' => 'Date Format',
      'timeFormat' => 'Time Format',
      'timeZone' => 'Time Zone',
      'weekStart' => 'First Day of Week',
      'defaultCurrency' => 'Default Currency',
      'customUrl' => 'Custom URL',
      'customId' => 'Custom ID',
    ),
    'links' => 
    array (
      'users' => 'Users',
      'portalRoles' => 'Roles',
      'notes' => 'Notes',
      'articles' => 'Knowledge Base Articles',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Specified Portal Roles will be applied to all users of this portal.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Create Portal',
      'User Interface' => 'User Interface',
      'General' => 'General',
      'Settings' => 'Settings',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Export Permission',
      'massUpdatePermission' => 'Mass Update Permission',
    ),
    'links' => 
    array (
      'users' => 'Users',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
      'massUpdatePermission' => 'Defines whether portal users have an ability to do mass update of records.',
    ),
    'labels' => 
    array (
      'Access' => 'Access',
      'Create PortalRole' => 'Create Portal Role',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Create Portal User',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Định dạng ngày',
      'timeFormat' => 'Định dạng thời gian',
      'timeZone' => 'Múi giờ',
      'weekStart' => 'Ngày đầu tiên của tuần',
      'thousandSeparator' => 'Dấu phân cách hàng nghìn',
      'decimalMark' => 'Dấu phân cách thập phân',
      'defaultCurrency' => 'Tiền tệ mặc định',
      'currencyList' => 'Danh sách tiền tệ',
      'language' => 'Ngôn ngữ',
      'smtpServer' => 'Máy chủ',
      'smtpPort' => 'Cổng',
      'smtpAuth' => 'Truy cập',
      'smtpSecurity' => 'Bảo mật',
      'smtpUsername' => 'Tên đăng nhập',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mật khẩu',
      'smtpEmailAddress' => 'Địa chỉ email',
      'exportDelimiter' => 'Xuất dấu phân cách',
      'receiveAssignmentEmailNotifications' => 'Email notifications upon assignment',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'autoFollowEntityTypeList' => 'Global Auto-Follow',
      'signature' => 'Email Signature',
      'dashboardTabList' => 'Tab List',
      'defaultReminders' => 'Default Reminders',
      'theme' => 'Theme',
      'useCustomTabList' => 'Custom Tab List',
      'tabList' => 'Tab List',
      'emailReplyToAllByDefault' => 'Email Reply to all by default',
      'dashboardLayout' => 'Dashboard Layout',
      'emailReplyForceHtml' => 'Email Reply in HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Do not pre-fill assigned user on record creation',
      'followEntityOnStreamPost' => 'Auto-follow record after posting in Stream',
      'followCreatedEntities' => 'Auto-follow created records',
      'followCreatedEntityTypeList' => 'Auto-follow created records of specific entity types',
      'emailUseExternalClient' => 'Use an external email client',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Chủ nhật',
        1 => 'Thứ 2',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notifications',
      'User Interface' => 'User Interface',
      'SMTP' => 'SMTP',
      'Misc' => 'Misc',
      'Locale' => 'Locale',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Automatically follow ALL new records (created by any user) of the selected entity types. To be able to see information in the stream and receive notifications about all records in the system.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'roles' => 'Vai trò',
      'assignmentPermission' => 'Assignment Permission',
      'userPermission' => 'User Permission',
      'portalPermission' => 'Portal Permission',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'massUpdatePermission' => 'Mass Update Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Người dùng',
      'teams' => 'Nhóm',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Allows to restrict an ability to assign records and post messages to other users.

all - no restriction

team - can assign and post only to teammates

no - can assign and post only to self',
      'userPermission' => 'Allows to restrict an ability for users to view activities, calendar and stream of other users.

all - can view all

team - can view activities of teammates only

no - can\'t view',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'massUpdatePermission' => 'Defines whether users have an ability to do mass update of records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Truy cập',
      'Create Role' => 'Tạo vai trò',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'chưa đặt',
        'enabled' => 'kích hoạt',
        'disabled' => 'tắt',
      ),
      'levelList' => 
      array (
        'all' => 'tất cả',
        'team' => 'nhóm',
        'account' => 'account',
        'contact' => 'contact',
        'own' => 'sở hữu',
        'no' => 'không',
        'yes' => 'yes',
        'not-set' => 'not-set',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Đọc',
      'edit' => 'Sửa',
      'delete' => 'Xóa',
      'stream' => 'Stream',
      'create' => 'Create',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'All changes in an access control will be applied after cache is cleared.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'status' => 'Trạng thái',
      'job' => 'Công việc',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Nhật ký',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Lên lịch công việc',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Dọn dẹp',
        'CheckInboundEmails' => 'Kiểm tra hộp thư đến',
        'CheckEmailAccounts' => 'Check Personal Email Accounts',
        'SendEmailReminders' => 'Send Email Reminders',
        'AuthTokenControl' => 'Auth Token Control',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Send Mass Emails',
        'ControlKnowledgeBaseArticleStatus' => 'Control Knowledge Base Article Status',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Note: Add this line to the crontab file to run Espo Scheduled Jobs:',
        'mac' => 'Note: Add this line to the crontab file to run Espo Scheduled Jobs:',
        'windows' => 'Note: Create a batch file with the following commands to run Espo Scheduled Jobs using Windows Scheduled Tasks:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Chưa hoạt động',
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
      'status' => 'Trạng thái',
      'executionTime' => 'Thời gian hoạt động',
      'target' => 'Target',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Dùng Cache',
      'dateFormat' => 'Định dạng ngày',
      'timeFormat' => 'Định dạng thời gian',
      'timeZone' => 'Múi giờ',
      'weekStart' => 'Ngày đầu tiên của tuần',
      'thousandSeparator' => 'Dấu phân cách hàng nghìn',
      'decimalMark' => 'Dấu phân cách thập phân',
      'defaultCurrency' => 'Tiền tệ mặc định',
      'baseCurrency' => 'Base Currency',
      'currencyRates' => 'Rate Values',
      'currencyList' => 'Danh sách tiền tệ',
      'language' => 'Ngôn ngữ',
      'companyLogo' => 'Logo công ty',
      'smtpServer' => 'Máy chủ',
      'smtpPort' => 'Cổng',
      'smtpAuth' => 'Truy cập',
      'smtpSecurity' => 'Bảo mật',
      'smtpUsername' => 'Tên đăng nhập',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mật khẩu',
      'outboundEmailFromName' => 'tên người gửi',
      'outboundEmailFromAddress' => 'Địa chỉ gửi',
      'outboundEmailIsShared' => 'Được chia sẻ',
      'recordsPerPage' => 'Số bản ghi trên mỗi trang',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Danh sách Tab',
      'quickCreateList' => 'Tạo nhanh danh sách',
      'exportDelimiter' => 'Xuất dấu phân cách',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Phương thức xác thực',
      'ldapHost' => 'Máy chủ',
      'ldapPort' => 'Cổng',
      'ldapAuth' => 'Truy cập',
      'ldapUsername' => 'Tên đăng nhập',
      'ldapPassword' => 'Mật khẩu',
      'ldapBindRequiresDn' => 'Yêu cầu Dn',
      'ldapBaseDn' => 'Dn gốc',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Tên miền tài khoản',
      'ldapTryUsernameSplit' => 'Thử lại',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Tạo người dùng',
      'ldapSecurity' => 'Bảo mật',
      'ldapUserLoginFilter' => 'Bộ lọc đăng nhập',
      'ldapAccountDomainNameShort' => 'Tên miền tài khoản',
      'ldapOptReferrals' => 'Được giới thiệu',
      'ldapUserNameAttribute' => 'Username Attribute',
      'ldapUserObjectClass' => 'User ObjectClass',
      'ldapUserTitleAttribute' => 'User Title Attribute',
      'ldapUserFirstNameAttribute' => 'User First Name Attribute',
      'ldapUserLastNameAttribute' => 'User Last Name Attribute',
      'ldapUserEmailAddressAttribute' => 'User Email Address Attribute',
      'ldapUserTeams' => 'User Teams',
      'ldapUserDefaultTeam' => 'User Default Team',
      'ldapUserPhoneNumberAttribute' => 'User Phone Number Attribute',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Disable Export (only admin is allowed)',
      'assignmentNotificationsEntityList' => 'Entities to notify about upon assignment',
      'assignmentEmailNotifications' => 'Notifications upon assignment',
      'assignmentEmailNotificationsEntityList' => 'Assignment email notifications scopes',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'B2C Mode',
      'avatarsDisabled' => 'Disable Avatars',
      'followCreatedEntities' => 'Follow created records',
      'displayListViewRecordCount' => 'Display Total Count (on List View)',
      'theme' => 'Theme',
      'userThemesDisabled' => 'Disable User Themes',
      'emailMessageMaxSize' => 'Email Max Size (Mb)',
      'massEmailMaxPerHourCount' => 'Max number of emails sent per hour',
      'personalEmailMaxPortionSize' => 'Max email portion size for personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for group account fetching',
      'maxEmailAccountCount' => 'Max number of personal email accounts per user',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'Site URL',
      'addressPreview' => 'Address Preview',
      'addressFormat' => 'Address Format',
      'notificationSoundsDisabled' => 'Disable Notification Sounds',
      'applicationName' => 'Application Name',
      'calendarEntityList' => 'Calendar Entity List',
      'mentionEmailNotifications' => 'Send email notifications about mentions in posts',
      'massEmailDisableMandatoryOptOutLink' => 'Disable mandatory opt-out link',
      'activitiesEntityList' => 'Activities Entity List',
      'historyEntityList' => 'History Entity List',
      'currencyFormat' => 'Currency Format',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclStrictMode' => 'ACL Strict Mode',
      'aclAllowDeleteCreated' => 'Allow to remove created records',
      'adminNotifications' => 'System notifications in administration panel',
      'adminNotificationsNewVersion' => 'Show notification when new EspoCRM version is available',
      'adminNotificationsNewExtensionVersion' => 'Show notification when new versions of extensions are available',
      'textFilterUseContainsForVarchar' => 'Use \'contains\' operator when filtering varchar fields',
      'authTokenPreventConcurrent' => 'Only one auth token per user',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors',
      'tabIconsDisabled' => 'Disable tab icons',
      'emailAddressIsOptedOutByDefault' => 'Mark new email addresses as opted-out',
      'outboundEmailBccAddress' => 'BCC address for external clients',
      'cleanupDeletedRecords' => 'Clean up deleted records',
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
        0 => 'Chủ nhật',
        1 => 'Thứ 2',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'Post' => 'Posts',
        'Status' => 'Status updates',
        'EmailReceived' => 'Received emails',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Number of records initially displayed in list views.',
      'recordsPerPageSmall' => 'Number of records initially displayed in relationship panels.',
      'outboundEmailIsShared' => 'Allow users to send emails from this address.',
      'followCreatedEntities' => 'Users will automatically follow records they created.',
      'emailMessageMaxSize' => 'All inbound emails exceeding a specified size will be fetched w/o body and attachments.',
      'authTokenLifetime' => 'Defines how long tokens can exist.
0 - means no expiration.',
      'authTokenMaxIdleTime' => 'Defines how long since the last access tokens can exist.
0 - means no expiration.',
      'userThemesDisabled' => 'If checked then users won\'t be able to select another theme.',
      'ldapUsername' => 'The full system user DN which allows to search other users. E.g. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'The password to access to LDAP server.',
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
      'ldapUserTeams' => 'Teams for created user. For more, see user profile.',
      'ldapUserDefaultTeam' => 'Default team for created user. For more, see user profile.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'By default EspoCRM is adapted for B2B. You can switch it to B2C.',
      'currencyDecimalPlaces' => 'Number of decimal places. If empty then all nonempty decimal places will be displayed.',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
      'aclAllowDeleteCreated' => 'Users will be able to remove records they created even if they don\'t have a delete access.',
      'textFilterUseContainsForVarchar' => 'If not checked then \'starts with\' operator is used. You can use the wildcard \'%\'.',
      'streamEmailNotificationsEntityList' => 'Email notifications about stream updates of followed records. Users will receive email notifications only for specified entity types.',
      'authTokenPreventConcurrent' => 'Users won\'t be able to be logged in on multiple devices simultaneously.',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email addess will be marked as opted-out.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
      'jobRunInParallel' => 'Jobs will be executed in parallel processes.',
      'jobPoolConcurrencyNumber' => 'Max number of processes run simultaneously.',
      'jobMaxPortion' => 'Max number of jobs processed per one execution.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Max number of cron processes run simultaneously.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
    ),
    'labels' => 
    array (
      'System' => 'Hệ thống',
      'Locale' => 'Bản địa hóa',
      'SMTP' => 'SMTP',
      'Configuration' => 'Tùy chỉnh',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Currency Settings',
      'Currency Rates' => 'Currency Rates',
      'Mass Email' => 'Mass Email',
      'Test Connection' => 'Test Connection',
      'Connecting' => 'Connecting...',
      'Activities' => 'Activities',
      'Admin Notifications' => 'Admin Notifications',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'The connection successfully established.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'roles' => 'Vai trò',
      'positionList' => 'Position List',
    ),
    'links' => 
    array (
      'users' => 'Người dùng',
      'notes' => 'Notes',
      'roles' => 'Roles',
      'inboundEmails' => 'Group Email Accounts',
    ),
    'tooltips' => 
    array (
      'roles' => 'Access Roles. Users of this team obtain access control level from selected roles.',
      'positionList' => 'Available positions in this team. E.g. Salesperson, Manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Tạo nhóm',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'body' => 'Body',
      'entityType' => 'Entity Type',
      'header' => 'Header',
      'footer' => 'Footer',
      'leftMargin' => 'Left Margin',
      'topMargin' => 'Top Margin',
      'rightMargin' => 'Right Margin',
      'bottomMargin' => 'Bottom Margin',
      'printFooter' => 'Print Footer',
      'footerPosition' => 'Footer Position',
      'variables' => 'Available Placeholders',
      'pageOrientation' => 'Page Orientation',
      'pageFormat' => 'Paper Format',
      'fontFace' => 'Font',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Create Template',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => 'Portrait',
        'Landscape' => 'Landscape',
      ),
      'placeholders' => 
      array (
        'today' => 'Today (date)',
        'now' => 'Now (date-time)',
      ),
      'fontFace' => 
      array (
        'aealarabiya' => 'AlArabiya',
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
        'pdfasymbol' => 'PDFA Symbol',
        'pdfatimes' => 'PDFA Times',
        'stsongstdlight' => 'STSong Std Light',
        'symbol' => 'Symbol',
        'times' => 'Times',
      ),
    ),
    'tooltips' => 
    array (
      'footer' => 'Use {pageNumber} to print page number.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'userName' => 'Tên người dùng',
      'title' => 'Tiêu đề',
      'type' => 'Type',
      'isAdmin' => 'Tài khoản Admin',
      'defaultTeam' => 'Nhóm mặc định',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Điện thoại',
      'roles' => 'Vai trò',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'teamRole' => 'Position',
      'password' => 'Mật khẩu',
      'currentPassword' => 'Current Password',
      'passwordConfirm' => 'Xác thực mật khẩu',
      'newPassword' => 'Mật khẩu mới',
      'newPasswordConfirm' => 'Confirm New Password',
      'avatar' => 'Avatar',
      'isActive' => 'Is Active',
      'isPortalUser' => 'Is Portal User',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'sendAccessInfo' => 'Send Email with Access Info to User',
      'portal' => 'Portal',
      'gender' => 'Gender',
      'position' => 'Position in Team',
      'ipAddress' => 'IP Address',
      'passwordPreview' => 'Password Preview',
      'isSuperAdmin' => 'Is Super Admin',
      'lastAccess' => 'Last Access',
      'apiKey' => 'API Key',
      'secretKey' => 'Secret Key',
      'authMethod' => 'Authentication Method',
      'acceptanceStatus' => 'Acceptance Status',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'defaultTeam' => 'Default Team',
      'teams' => 'Nhóm',
      'roles' => 'Vai trò',
      'notes' => 'Notes',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'tasks' => 'Tasks',
      'targetLists' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Create User' => 'Tạo người dùng',
      'Generate' => 'Tạo',
      'Access' => 'Truy cập',
      'Preferences' => 'Tùy chỉnh',
      'Change Password' => 'Đổi mật khẩu',
      'Teams and Access Control' => 'Teams and Access Control',
      'Forgot Password?' => 'Forgot Password?',
      'Password Change Request' => 'Password Change Request',
      'Email Address' => 'Email Address',
      'External Accounts' => 'External Accounts',
      'Email Accounts' => 'Email Accounts',
      'Portal' => 'Portal',
      'Create Portal User' => 'Create Portal User',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
      'Generate New API Key' => 'Generate New API Key',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'All records created by this user will be related to this team by default.',
      'userName' => 'Letters a-z, numbers 0-9, dots, hyphens, @-signs and underscores are allowed.',
      'isAdmin' => 'Admin user can access everything.',
      'isActive' => 'If unchecked then user won\'t be able to login.',
      'teams' => 'Teams which this user belongs to. Access control level is inherited from team\'s roles.',
      'roles' => 'Additional access roles. Use it if user doesn\'t belong to any team or you need to extend access control level exclusively for this user.',
      'portalRoles' => 'Additional portal roles. Use it to extend access control level exclusively for this user.',
      'portals' => 'Portals which this user has access to.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Mật khẩu sẽ được gửi tới email tài khoản',
      'passwordChanged' => 'Mật khẩu đã được đổi',
      'userCantBeEmpty' => 'Username can not be empty',
      'wrongUsernamePasword' => 'Wrong username/password',
      'emailAddressCantBeEmpty' => 'Email Address can not be empty',
      'userNameEmailAddressNotFound' => 'Username/Email Address not found',
      'forbidden' => 'Forbidden, please try later',
      'uniqueLinkHasBeenSent' => 'The unique URL has been sent to the specified email address.',
      'passwordChangedByRequest' => 'Password has been changed.',
      'setupSmtpBefore' => 'You need to setup <a href="{url}">SMTP settings</a> to make the system be able to send password in email.',
      'userNameExists' => 'User Name already exists',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Not Set',
        'Male' => 'Male',
        'Female' => 'Female',
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
      'onlyMyTeam' => 'Only My Team',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'activePortal' => 'Portal Active',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'website' => 'Website',
      'phoneNumber' => 'Điện thoại',
      'billingAddress' => 'Địa chủ thanh toán',
      'shippingAddress' => 'Địa chỉ vận chuyển',
      'description' => 'Mô tả',
      'sicCode' => 'Mã Sic',
      'industry' => 'Industry',
      'type' => 'Loại',
      'contactRole' => 'Vai trò',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'originalLead' => 'Original Lead',
    ),
    'links' => 
    array (
      'contacts' => 'Sổ liên lạc',
      'opportunities' => 'Cơ hội',
      'cases' => 'Trường hợp',
      'documents' => 'Documents',
      'meetingsPrimary' => 'Meetings (expanded)',
      'callsPrimary' => 'Calls (expanded)',
      'tasksPrimary' => 'Tasks (expanded)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'portalUsers' => 'Portal Users',
      'originalLead' => 'Original Lead',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Khách hàng',
        'Investor' => 'Nhà đầu tư',
        'Partner' => 'Đối tác',
        'Reseller' => 'Đại lý',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Architecture' => 'Architecture',
        'Automotive' => 'Automotive',
        'Banking' => 'Ngân hàng',
        'Biotechnology' => 'Biotechnology',
        'Building Materials & Equipment' => 'Building Materials & Equipment',
        'Chemical' => 'Chemical',
        'Construction' => 'Construction',
        'Computer' => 'Computer',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'Giáo dục',
        'Electronics' => 'Điện máy',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Tín dụng',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Bảo hiểm',
        'Legal' => 'Legal',
        'Manufacturing' => 'Manufacturing',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Mining',
        'Music' => 'Music',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publishing',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Real Estate',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Service',
        'Support' => 'Support',
        'Sports' => 'Sports',
        'Software' => 'Software',
        'Technology' => 'Technology',
        'Telecommunications' => 'Telecommunications',
        'Television' => 'Television',
        'Testing, Inspection & Certification' => 'Testing, Inspection & Certification',
        'Transportation' => 'Transportation',
        'Travel' => 'Travel',
        'Venture Capital' => 'Venture Capital',
        'Wholesale' => 'Wholesale',
        'Water' => 'Water',
        'Apparel' => 'May mặc',
        'Computer Software' => 'Phần mềm',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Tạo tài khoản',
      'Copy Billing' => 'Copy Billing',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Customers',
      'partners' => 'Partners',
      'recentlyCreated' => 'Recently Created',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Tháng',
      'week' => 'Tuần',
      'day' => 'Ngày',
      'agendaWeek' => 'Tuần',
      'agendaDay' => 'Ngày',
      'timeline' => 'Timeline',
    ),
    'labels' => 
    array (
      'Today' => 'Today',
      'Create' => 'Tạo',
      'Shared' => 'Shared',
      'Add User' => 'Add User',
      'current' => 'current',
      'time' => 'time',
      'User List' => 'User List',
      'Manage Users' => 'Manage Users',
      'View Calendar' => 'View Calendar',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Ngày kết thúc',
      'direction' => 'Hướng',
      'duration' => 'Thời gian',
      'description' => 'Mô tả',
      'users' => 'Người dùng',
      'contacts' => 'Sổ liên lạc',
      'leads' => 'Trưởng nhóm',
      'reminders' => 'Reminders',
      'account' => 'Account',
      'acceptanceStatus' => 'Acceptance Status',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Đã lên kế hoạch',
        'Held' => 'Đã được tổ chức',
        'Not Held' => 'Chưa được tổ chức',
      ),
      'direction' => 
      array (
        'Outbound' => 'Ra ngoài',
        'Inbound' => 'Vào trong',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Accepted',
        'Declined' => 'Declined',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Call' => 'Tạo cuộc gọi',
      'Set Held' => 'Tổ chức',
      'Set Not Held' => 'Không tổ chức',
      'Send Invitations' => 'Gửi giấy mời',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Đã lên kế hoạch',
      'held' => 'Đã được tổ chức',
      'todays' => 'Hôm nay',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Description',
      'status' => 'Status',
      'type' => 'Type',
      'startDate' => 'Start Date',
      'endDate' => 'End Date',
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'sentCount' => 'Sent',
      'openedCount' => 'Opened',
      'clickedCount' => 'Clicked',
      'optedOutCount' => 'Opted Out',
      'bouncedCount' => 'Bounced',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Leads Created',
      'revenue' => 'Revenue',
      'revenueConverted' => 'Revenue (converted)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (converted)',
      'budgetCurrency' => 'Budget Currency',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'accounts' => 'Accounts',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'opportunities' => 'Opportunities',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Mass Emails',
      'trackingUrls' => 'Tracking URLs',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Television',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Planning',
        'Active' => 'Active',
        'Inactive' => 'Inactive',
        'Complete' => 'Complete',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Create Campaign',
      'Target Lists' => 'Target Lists',
      'Statistics' => 'Statistics',
      'hard' => 'hard',
      'soft' => 'soft',
      'Unsubscribe' => 'Unsubscribe',
      'Mass Emails' => 'Mass Emails',
      'Email Templates' => 'Email Templates',
      'Unsubscribe again' => 'Unsubscribe again',
      'Subscribe again' => 'Subscribe again',
      'Create Target List' => 'Create Target List',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'You have been unsubscribed from our mailing list.',
      'subscribedAgain' => 'You are subscribed again.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Action',
      'actionDate' => 'Date',
      'data' => 'Data',
      'campaign' => 'Campaign',
      'parent' => 'Target',
      'object' => 'Object',
      'application' => 'Application',
      'queueItem' => 'Queue Item',
      'stringData' => 'String Data',
      'stringAdditionalData' => 'String Additional Data',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Queue Item',
      'parent' => 'Parent',
      'object' => 'Object',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Sent',
        'Opened' => 'Opened',
        'Opted Out' => 'Opted Out',
        'Bounced' => 'Bounced',
        'Clicked' => 'Clicked',
        'Lead Created' => 'Lead Created',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'All',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Sent',
      'opened' => 'Opened',
      'optedOut' => 'Opted Out',
      'optedIn' => 'Opted In',
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
      'urlToUse' => 'Code to insert instead of URL',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'campaign' => 'Campaign',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Create Tracking URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'number' => 'Số',
      'status' => 'Trạng thái',
      'account' => 'Tài khoản',
      'contact' => 'Liên hệ',
      'contacts' => 'Contacts',
      'priority' => 'Ưu tiên',
      'type' => 'Loại',
      'description' => 'Mô tả',
      'inboundEmail' => 'Group Email Account',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Group Email Account',
      'account' => 'Account',
      'contact' => 'Contact (Primary)',
      'Contacts' => 'Contacts',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'Emails',
      'articles' => 'Knowledge Base Articles',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Mới',
        'Assigned' => 'Chỉ định',
        'Pending' => 'Đang chờ',
        'Closed' => 'Đã đóng',
        'Rejected' => 'Đã từ chối',
        'Duplicate' => 'Trùng',
      ),
      'priority' => 
      array (
        'Low' => 'Thấp',
        'Normal' => 'Bình thường',
        'High' => 'Cao',
        'Urgent' => 'Gấp',
      ),
      'type' => 
      array (
        'Question' => 'Câu hỏi',
        'Incident' => 'Sự cố',
        'Problem' => 'Có vấn đề',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Tạo trường hợp',
      'Close' => 'Close',
      'Reject' => 'Reject',
      'Closed' => 'Closed',
      'Rejected' => 'Rejected',
    ),
    'presetFilters' => 
    array (
      'open' => 'Mở',
      'closed' => 'Đã đóng',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'title' => 'Tiêu đề',
      'account' => 'Tài khoản',
      'accounts' => 'Tài khoản',
      'phoneNumber' => 'Điện thoại',
      'accountType' => 'Loại tài khoản',
      'doNotCall' => 'Không gọi',
      'address' => 'Địa chỉ',
      'opportunityRole' => 'Vai trò cơ hội',
      'accountRole' => 'Vai trò',
      'description' => 'Mô tả',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'portalUser' => 'Portal User',
      'originalLead' => 'Original Lead',
      'acceptanceStatus' => 'Acceptance Status',
      'accountIsInactive' => 'Account Inactive',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'opportunities' => 'Cơ hội',
      'cases' => 'Trường hợp',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'account' => 'Account (Primary)',
      'accounts' => 'Accounts',
      'casesPrimary' => 'Cases (Primary)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Portal User',
      'originalLead' => 'Original Lead',
      'documents' => 'Documents',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Tạo liên hệ',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Trống--',
        'Decision Maker' => 'Tạo quyết định',
        'Evaluator' => 'Đánh giá',
        'Influencer' => 'Phụ thuộc',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portal Users',
      'notPortalUsers' => 'Not Portal Users',
      'accountActive' => 'Active',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Create Document',
      'Details' => 'Details',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'file' => 'File',
      'type' => 'Type',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Description',
      'accounts' => 'Accounts',
      'folder' => 'Folder',
    ),
    'links' => 
    array (
      'accounts' => 'Accounts',
      'opportunities' => 'Opportunities',
      'folder' => 'Folder',
      'leads' => 'Leads',
      'contacts' => 'Contacts',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Active',
        'Draft' => 'Draft',
        'Expired' => 'Expired',
        'Canceled' => 'Canceled',
      ),
      'type' => 
      array (
        '' => 'None',
        'Contract' => 'Contract',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'License Agreement',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'draft' => 'Draft',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Create Document Folder',
      'Manage Categories' => 'Manage Folders',
      'Documents' => 'Documents',
    ),
    'links' => 
    array (
      'documents' => 'Documents',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'target' => 'Target',
      'sentAt' => 'Date Sent',
      'attemptCount' => 'Attempts',
      'emailAddress' => 'Email Address',
      'massEmail' => 'Mass Email',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'target' => 'Target',
      'massEmail' => 'Mass Email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pending',
        'Sent' => 'Sent',
        'Failed' => 'Failed',
        'Sending' => 'Sending',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Pending',
      'sent' => 'Sent',
      'failed' => 'Failed',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Create Article',
      'Any' => 'Any',
      'Send in Email' => 'Send in Email',
      'Move Up' => 'Move Up',
      'Move Down' => 'Move Down',
      'Move to Top' => 'Move to Top',
      'Move to Bottom' => 'Move to Bottom',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'type' => 'Type',
      'attachments' => 'Attachments',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Description',
      'body' => 'Body',
      'categories' => 'Categories',
      'language' => 'Language',
      'portals' => 'Portals',
    ),
    'links' => 
    array (
      'cases' => 'Cases',
      'opportunities' => 'Opportunities',
      'categories' => 'Categories',
      'portals' => 'Portals',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'In Review',
        'Draft' => 'Draft',
        'Archived' => 'Archived',
        'Published' => 'Published',
      ),
      'type' => 
      array (
        'Article' => 'Article',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Article will be available only in specified portals.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Published',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'Articles' => 'Articles',
    ),
    'links' => 
    array (
      'articles' => 'Articles',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Đã chuyển đổi sang',
      'Create Lead' => 'Tạo chỉ dẫn',
      'Convert' => 'Chuyển đổi',
      'convert' => 'chuyển đổi',
    ),
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'title' => 'Tiêu đề',
      'website' => 'Website',
      'phoneNumber' => 'Điện thoại',
      'accountName' => 'Tên tài khoản',
      'doNotCall' => 'Không gọi',
      'address' => 'Địa chỉ',
      'status' => 'Trạng thái',
      'source' => 'Nguồn',
      'opportunityAmount' => 'Trị giá',
      'opportunityAmountConverted' => 'Opportunity Amount (converted)',
      'description' => 'Mô tả',
      'createdAccount' => 'Tài khoản',
      'createdContact' => 'Liên hệ',
      'createdOpportunity' => 'Cơ hội',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'industry' => 'Industry',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunity',
      'cases' => 'Cases',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Mới',
        'Assigned' => 'Chỉ định',
        'In Process' => 'Đang tiến hành',
        'Converted' => 'Đã chuyển đổi',
        'Recycled' => 'Thùng rác',
        'Dead' => 'Chết',
      ),
      'source' => 
      array (
        '' => 'None',
        'Call' => 'Gọi',
        'Email' => 'Email',
        'Existing Customer' => 'Khách hàng hiện có',
        'Partner' => 'Đối tác',
        'Public Relations' => 'Khách hàng công khai',
        'Web Site' => 'Web Site',
        'Campaign' => 'Chiến dịch',
        'Other' => 'Khác',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Đang hoạt động',
      'actual' => 'Actual',
      'converted' => 'Converted',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'storeSentEmails' => 'Store Sent Emails',
      'startAt' => 'Date Start',
      'fromAddress' => 'From Address',
      'fromName' => 'From Name',
      'replyToAddress' => 'Reply-to Address',
      'replyToName' => 'Reply-to Name',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'optOutEntirely' => 'Opt-Out Entirely',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'queueItems' => 'Queue Items',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Draft',
        'Pending' => 'Pending',
        'In Process' => 'In Process',
        'Complete' => 'Complete',
        'Canceled' => 'Canceled',
        'Failed' => 'Failed',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Create Mass Email',
      'Send Test' => 'Send Test',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Select at least one target.',
      'testSent' => 'Test email(s) supposed to be sent',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Email addresses of recipients that unsubscribed will be marked as opted out and they will not receive any mass emails anymore.',
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
      'storeSentEmails' => 'Emails will be stored in CRM.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'complete' => 'Complete',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Ngày kết thúc',
      'duration' => 'Thời gian',
      'description' => 'Mô tả',
      'users' => 'Người dùng',
      'contacts' => 'Sổ liên lạc',
      'leads' => 'Trưởng nhóm',
      'reminders' => 'Reminders',
      'account' => 'Account',
      'acceptanceStatus' => 'Acceptance Status',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Đã lên kế hoạch',
        'Held' => 'Đã được tổ chức',
        'Not Held' => 'Chưa được tổ chức',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Accepted',
        'Declined' => 'Declined',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Tạo buổi hẹn',
      'Set Held' => 'Tổ chức',
      'Set Not Held' => 'Không tổ chức',
      'Send Invitations' => 'Gửi giấy mời',
      'on time' => 'on time',
      'before' => 'before',
      'Saved as Held' => 'Lưu là đã tổ chức',
      'Saved as Not Held' => 'Lưu là chưa tổ chức',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Đã lên kế hoạch',
      'held' => 'Đã được tổ chức',
      'todays' => 'Hôm nay',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Nothing were sent',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'account' => 'Tài khoản',
      'stage' => 'Mức',
      'amount' => 'Tổng',
      'probability' => 'Xác suất, %',
      'leadSource' => 'Nguồn dẫn',
      'doNotCall' => 'Không gọi',
      'closeDate' => 'Ngày kết thúc',
      'contacts' => 'Sổ liên lạc',
      'description' => 'Mô tả',
      'amountConverted' => 'Amount (converted)',
      'amountWeightedConverted' => 'Amount Weighted',
      'campaign' => 'Campaign',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Sổ liên lạc',
      'documents' => 'Documents',
      'campaign' => 'Campaign',
      'originalLead' => 'Original Lead',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Khảo sát',
        'Qualification' => 'Trình độ chuyên môn',
        'Proposal' => 'Giá đặt ra',
        'Negotiation' => 'Đàm phán',
        'Needs Analysis' => 'Phân tích nhu cầu',
        'Value Proposition' => 'Đề xuất giá trị',
        'Id. Decision Makers' => 'Id. Người tạo quyết định',
        'Perception Analysis' => 'Phân tích khả năng',
        'Proposal/Price Quote' => 'Giá đặt ra',
        'Negotiation/Review' => 'Đàm phán / đánh giá',
        'Closed Won' => 'Thắng thầu',
        'Closed Lost' => 'Thua thầu',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Tạo cơ hội',
    ),
    'presetFilters' => 
    array (
      'open' => 'Mở',
      'won' => 'Thắng',
      'lost' => 'Lost',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Description',
      'entryCount' => 'Entry Count',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Campaigns',
      'endDate' => 'End Date',
      'targetLists' => 'Target Lists',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Accounts',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'campaigns' => 'Campaigns',
      'massEmails' => 'Mass Emails',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Television',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Create Target List',
      'Opted Out' => 'Opted Out',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
      'Opt-Out' => 'Opt-Out',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Hạn',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Ưu tiên',
      'description' => 'Mô tả',
      'isOverdue' => 'Đã quá hạn',
      'account' => 'Account',
      'dateCompleted' => 'Date Completed',
      'attachments' => 'Attachments',
      'reminders' => 'Reminders',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Attachments',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Chưa bắt đầu',
        'Started' => 'Đã bắt đầu',
        'Completed' => 'Hoàn thành',
        'Canceled' => 'Hủy',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Thấp',
        'Normal' => 'Bình thường',
        'High' => 'Cao',
        'Urgent' => 'Gấp',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Tạo nhiệm vụ',
      'Complete' => 'Complete',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'completed' => 'Hoàn thành',
      'deferred' => 'Deferred',
      'todays' => 'Hôm nay',
      'overdue' => 'Quá hạn',
      'active' => 'Đang hoạt động',
    ),
  ),
);
?>