<?php return array (
  'plugins.importexport.users.displayName' => 'Plugiciel XML des utilisateurs',
  'plugins.importexport.users.description' => 'Importation et exportation des utilisateurs',
  'plugins.importexport.users.cliUsage' => 'Utilisation: {$scriptName} {$pluginName} [command] ...
Commandes:
	import [xmlFileName] [sched_conf_path] [optional flags]
	export [xmlFileName] [sched_conf_path]
	export [xmlFileName] [sched_conf_path] [role_path1] [role_path2] ...

Indicateurs optionnels:
	continue_on_error: Si indiqué, n\'arrêtez pas l\'importation des utilisateurs si une erreur se produit

	send_notify: Si indiqué, envoyez des courriels d\'avis aux utilisateurs importés contenant leur nom d\'utilisateur et mots de passe

Exemples:
	Importez les utilisateurs dans mySchedConf de myImportFile.xml, en poursuivant même s\'il se produit une erreur:
	{$scriptName} {$pluginName} import myImportFile.xml mySchedConf continue_on_error

	Exportez tous les utilisateurs de mySchedConf:
	{$scriptName} {$pluginName} export myExportFile.xml mySchedConf

	Exportez tous les utilisateurs enregistrés comme évaluateurs, en parallèle avec leur rôle seulement:
	{$scriptName} {$pluginName} export myExportFile.xml mySchedConf reviewer',
  'plugins.importexport.users.import.importUsers' => 'Importation d\'utilisateurs',
  'plugins.importexport.users.import.instructions' => 'Choisir un fichier de données XML contenant l\'information de l\'utilisateur pour l\'importer dans cette conférence planifiée. Voyez l\'aide de la conférence planifiée pour les détails sur le format de ce fichier. Noter que si le fichier importé contient un ou plusieurs nom(s) d\'utilisateur ou adresse(s) de courriel qui existent déjà dans le système, les données pour ces utilisateurs ne seront pas importées et tous les nouveaux rôles à créer seront assignés aux utilisateurs existants.',
  'plugins.importexport.users.import.failedToImportUser' => 'L\'importation de l\'utilisateur à échouée',
  'plugins.importexport.users.import.failedToImportRole' => 'L\'assignation d\'un rôle à l\'utilisateur a échouée',
  'plugins.importexport.users.import.dataFile' => 'Fichier de données de l\'utilisateur',
  'plugins.importexport.users.import.sendNotify' => 'Envoyer un courriel d\'avis à chaque utilisateur importé contenant leur nom d\'utilisateur et leur mot de passe.',
  'plugins.importexport.users.import.continueOnError' => 'Continuer à importer les autres utilisateurs si un échec se produit.',
  'plugins.importexport.users.import.noFileError' => 'Aucun fichier n\'a été téléchargé!',
  'plugins.importexport.users.import.usersWereImported' => 'Les utilisateurs suivants ont été importés avec succès dans le système',
  'plugins.importexport.users.import.errorsOccurred' => 'Des erreurs se sont produites pendant l\'importation',
  'plugins.importexport.users.import.confirmUsers' => 'Confirmer qu\'il s\'agit bien des utilisateurs que vous souhaitez importer dans le système',
  'plugins.importexport.users.import.warning' => 'Avertissement',
  'plugins.importexport.users.import.encryptionMismatch' => 'Vous ne pouvez utiliser des mots de passe hachés avec {$importHash}; OCS est configuré pour utiliser {$ocsHash}. Si vous continuez, vous devrez réinitialiser les mots de passe des utilisateurs importés.',
  'plugins.importexport.users.unknownSchedConf' => 'Le chemin d\'accès spécifié pour la conférence planifié  "{$schedConfPath}" est inconnu.',
  'plugins.importexport.users.export.exportUsers' => 'Exporter les utilisateurs',
  'plugins.importexport.users.export.exportByRole' => 'Exporter par rôle',
  'plugins.importexport.users.export.exportAllUsers' => 'Tout exporter',
  'plugins.importexport.users.export.errorsOccurred' => 'Des erreurs se sont produites pendant l\'exportation',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Impossible d\'écrire dans le fichier "{$fileName}".',
); ?>