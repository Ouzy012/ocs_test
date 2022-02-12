<?php return array (
  'installer.additionalLocales' => 'Langues supplémentaires',
  'installer.administratorAccount' => 'Compte administrateur',
  'installer.administratorAccountInstructions' => 'Ce compte utilisateur deviendra l\'administrateur du site et aura le plein accès à tout le système. D\'autres comptes utilisateurs peuvent être créés après l\'installation.',
  'installer.checkNo' => '<span class="formError">NON</span>',
  'installer.checkYes' => 'Oui',
  'installer.clientCharset' => 'Jeu de caractères du client',
  'installer.clientCharsetInstructions' => 'L\'encodage à utiliser pour les données envoyées et reçues des navigateurs.',
  'installer.configFileError' => 'Le fichier de configuration <tt>config.inc.php</tt> n\'existe pas ou n\'est pas lisible.',
  'installer.connectionCharset' => 'Jeu de caractères pour la connexion',
  'installer.connectionCharsetInstructions' => 'L\'encodage à utiliser pour les données envoyées et reçues de la base de données. Cela devrait être le même que le jeu de caractères du client. Veuillez noter que cette fonctionnalité est prise en charge uniquement par MySQL >= 4.1.1 ou PostgreSQL >= 7.1. Sélectionnez « Sans objet » si votre serveur de base de données ne répond pas à ces exigences.',
  'installer.contentsOfConfigFile' => 'Contenu du fichier de configuration',
  'installer.createDatabase' => 'Créer une nouvelle base de données',
  'installer.createDatabaseInstructions' => 'Pour utiliser cette option, votre système de base de données doit prendre en charge la création d\'une base de données distante et votre compte utilisateur doit être muni des permissions appropriées pour créer de nouvelles bases de données. Si l\'installation ne réussit pas avec cette option sélectionnée, créer manuellement la base de données sur votre serveur et passer l\'installateur encore une fois avec cette option désactivée.',
  'installer.databaseCharset' => 'Jeu de caractères de la base de données',
  'installer.databaseCharsetInstructions' => 'L\'encodage à utiliser pour les données stockées dans la base de données. Veuillez noter que cette fonctionnalité est prise en charge uniquement par MySQL >= 4.1.1 ou PostgreSQL >= 7.1. Sélectionnez « Sans objet » si votre serveur de base de données ne répond pas à ces exigences.',
  'installer.databaseDriver' => 'Pilote de la base de données',
  'installer.databaseDriverInstructions' => '<strong>Les pilotes de bases de données qui sont listés entre crochets ne semblent pas avoir chargé l\'extension PHP requise et l\'installation risque donc d\'échouer s\'ils sont sélectionnés.</strong><br />Tous les pilotes de bases de données qui ne sont pas pris en charge, tel indiqué ci-dessus, sont listés uniquement à des fins académiques et ne fonctionneront vraisemblablement pas.',
  'installer.databaseHost' => 'Hébergeur',
  'installer.databaseHostInstructions' => 'Laisser le nom de l\'hébergeur vide pour se connecter à l\'aide de connecteurs logiciels de domaine au lieu de le faire par TCP/IP. Ce n\'est pas nécessaire avec MySQL, qui utilisera automatiquement des connecteurs logiciels si "localhost" a été saisi, mais c\'est obligatoire avec d\'autres serveurs de bases de données tel que PostgreSQL.',
  'installer.databaseName' => 'Nom de la base de données',
  'installer.databasePassword' => 'Mot de passe',
  'installer.databaseSettings' => 'Paramètres de la base de données',
  'installer.databaseUsername' => 'Nom d\'utilisateur',
  'installer.encryptionInstructions' => 'SHA1 est recommandé si votre système le prend en charge (nécessite PHP >= 4.3.0).',
  'installer.encryption' => 'Algorithme d\'encryptage des mots de passe',
  'installer.filesDir' => 'Répertoire pour les téléchargements',
  'installer.fileSettings' => 'Paramètres des fichiers',
  'installer.form.clientCharsetRequired' => 'Un jeu de caractères client doit être sélectionné.',
  'installer.form.databaseDriverRequired' => 'Un pilote de base de données doit être sélectionné.',
  'installer.form.databaseNameRequired' => 'Le nom de la base de données est obligatoire.',
  'installer.form.emailRequired' => 'Un courriel valide pour le compte administrateur est obligatoire.',
  'installer.form.encryptionRequired' => 'L\'algorithme à utiliser pour l\'encryptage des mots de passe des utilisateurs doit être sélectionné.',
  'installer.form.filesDirRequired' => 'Le répertoire à utiliser pour stocker les fichiers téléchargés est obligatoire.',
  'installer.form.localeRequired' => 'Une langue doit être sélectionnée.',
  'installer.form.passwordRequired' => 'Un mot de passe pour le compte administrateur est obligatoire.',
  'installer.form.passwordsDoNotMatch' => 'Les mots de passe de l\'administrateur ne correspondent pas.',
  'installer.form.separateMultiple' => 'Séparer les valeurs multiples par une virgule',
  'installer.form.usernameAlphaNumeric' => 'Le nom d\'utilisateur de l\'administrateur ne peut contenir que des caractères alphanumériques, traits de soulignement, et traits d\'union, et doit commencer et se terminer par un caractère alphanumérique.',
  'installer.form.usernameRequired' => 'Un nom d\'utilisateur pour le compte administrateur est obligatoire.',
  'installer.installationWrongPhp' => '<br/><strong>AVERTISSEMENT : Votre version actuelle de PHP ne satisfait pas aux exigences minimales d\'installation. Nous vous recommandons de faire la mise à jour vers une version plus récente de PHP.</strong>',
  'installer.installErrorsOccurred' => 'Des erreurs se sont produites pendant l\'installation',
  'installer.installerSQLStatements' => 'énoncés SQL pour l\'installation',
  'installer.installFileError' => 'Le fichier d\'installation <tt>dbscripts/xml/install.xml</tt> n\'existe pas ou n\'est pas lisible.',
  'installer.installFilesDirError' => 'Le répertoire précisé pour les fichiers téléchargés n\'existe pas ou n\'est pas disponible en écriture.',
  'installer.installParseDBFileError' => 'Erreur d\'analyse du fichier d\'installation de la base de données <tt>{$file}</tt>.',
  'installer.locale' => 'Langue',
  'installer.localeSettings' => 'Paramètres de langue',
  'installer.miscSettings' => 'Paramètres divers',
  'installer.oaiRepositoryIdInstructions' => 'Un identifiant unique utilisé pour identifier les enregistrements de métadonnées indexées à partir de ce site à l\'aide du protocole<a href="http://www.openarchives.org/" target="_blank">Open Archives Initiative</a> pour la collecte de métadonnées.',
  'installer.oaiRepositoryId' => 'Identifiant du dépôt OAI',
  'installer.publicFilesDirError' => 'Le répertoire des fichiers publics n\'existe pas ou n\'est pas disponible en écriture.',
  'installer.releaseNotes' => 'Instructions d\'utilisation',
  'installer.securitySettings' => 'Paramètres de sécurité',
  'installer.skipFilesDir' => 'Ne pas créer de sous-répertoire (utile uniquement pour l\'installation manuelle)',
  'installer.installParseEmailTemplatesFileError' => 'Une erreur s\'est produite lors de l\'analyse du fichier du modèle de courriel <tt>{$file}</tt>.',
  'installer.locale.maybeIncomplete' => 'Les langues sélectionnées peuvent être incomplètes.',
); ?>