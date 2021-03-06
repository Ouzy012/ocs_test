<?php return array (
  'plugins.importexport.native.displayName' => 'Plugiciel XML des communications',
  'plugins.importexport.native.description' => 'Importation et exportation de communications',
  'plugins.importexport.native.cliUsage' => 'Utilisation: {$scriptName} {$pluginName} [command] ...
Commandes:
	import [xmlFileName] [conference_path] [sched_conf_path] [user_name] ...
	export [xmlFileName] [conference_path] [sched_conf_path] papers [paperId1] [paperId2] ...
	export [xmlFileName] [conference_path] [sched_conf_path] paper [paperId]

Des paramètres supplémentaires sont nécessaires pour importer les données tel que démontré ci-après, tout dépendant du noeud racine du document XML.

Si le noeud racine est <paper> ou <papers>, des paramètres supplémentaires sont nécessaires.
Les formats suivants sont acceptés:

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_id [trackId]

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_name [trackName]

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_abbrev [trackAbbrev]',
  'plugins.importexport.native.export' => 'Exporter les données',
  'plugins.importexport.native.export.tracks' => 'Exporter les sections',
  'plugins.importexport.native.export.papers' => 'Exporter les communications',
  'plugins.importexport.native.selectPaper' => 'Sélectionner une communication',
  'plugins.importexport.native.import.papers' => 'Importer les communications',
  'plugins.importexport.native.import.papers.description' => 'Le fichier que vous importez contient une ou plusieurs communications. Vous devez choisir une section dans laquelle importer ces communications; si vous ne souhaitez pas toutes les importer dans la même session, vous pouvez soit les séparer dans des fichiers XML distincts, soit les déplacer dans la session appropriée suite à l\'importation.',
  'plugins.importexport.native.import' => 'Importation des données',
  'plugins.importexport.native.import.description' => 'Ce plugiciel supporte l\'importation de données basé sur la DTD "native.dtd". Les noeuds racines supportés sont &lt;paper&gt; et &lt;papers&gt;.',
  'plugins.importexport.native.import.error' => 'Erreur d\'importation',
  'plugins.importexport.native.import.error.description' => 'Une ou plusieurs erreurs se sont produites pendant l\'importation. Veuillez vous assurer que le format du fichier importé correspond bien à la norme. Le description détaillées des erreurs d\'importation sont listés ci-bas.',
  'plugins.importexport.native.cliError' => 'ERREUR:',
  'plugins.importexport.native.error.unknownUser' => 'L\'utilisateur spécifié, "{$userName}", n\'existe pas.',
  'plugins.importexport.native.error.unknownConference' => 'Le chemin d\'accès spécifié pour la conférence ou la conférence planifiée, "{$conferencePath}" ou "{$schedConfPath}" (respectivement), n\'existe pas.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'Impossible d\'écrire dans le fichier "{$fileName}".',
  'plugins.importexport.native.export.error.trackNotFound' => 'Aucune session ne correspond à celle spécifiée "{$trackIdentifier}".',
  'plugins.importexport.native.export.error.paperNotFound' => 'Aucune communication ne correspond à l\'ID de la communication spécifié"{$paperId}".',
  'plugins.importexport.native.import.error.unsupportedRoot' => 'Ce plugiciel ne supporte pas le noeud racine "{$rootName}". Veuillez vous assurer que le fichier est bien formé et essayer de nouveau.',
  'plugins.importexport.native.import.error.invalidBooleanValue' => 'Une valeur booléenen invalide "{$value}" a été spécifiée. Veuillez utiliser "true" ou "false".',
  'plugins.importexport.native.import.error.invalidDate' => 'Une date invalide "{$value}" a été spécifiée.',
  'plugins.importexport.native.import.error.unknownEncoding' => 'Les données ont été incorporées à l\'aide d\'un type d\'encodage inconnu "{$type}".',
  'plugins.importexport.native.import.error.couldNotWriteFile' => 'Impossible d\'enregistrer une copie locale de "{$originalName}".',
  'plugins.importexport.native.import.error.illegalUrl' => 'L\'adresse URL spécifiée "{$url}" était illégale. Les importations soumises par l\'intermédiaire du Web supportent uniquement les méthodes http, https, ftp, ou ftps.',
  'plugins.importexport.native.import.error.unknownSuppFileType' => 'Un fichier supplémentaire de type inconnu "{$suppFileType}" a été spécifié.',
  'plugins.importexport.native.import.error.couldNotCopy' => 'Une adresse URL spécifiée "{$url}" n\'a pu être copiée dans un fichier local.',
  'plugins.importexport.native.import.error.paperTitleLocaleUnsupported' => 'Un titre de communication ("{$paperTitle}") a été fourni dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperAbstractLocaleUnsupported' => 'Un résumé de communication a été fourni pour la communication "{$paperTitle}" dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.galleyLabelMissing' => 'La communication "{$paperTitle}" dans la section "{$trackTitle}" ne contenait pas d\'étiquette d\'épreuve.',
  'plugins.importexport.native.import.error.suppFileMissing' => 'La communication "{$paperTitle}" dans la section "{$trackTitle}" ne contenait pas de fichier supplémentaire.',
  'plugins.importexport.native.import.error.galleyFileMissing' => 'La communication "{$paperTitle}" dans la section "{$trackTitle}" ne contenait pas de fichier d\'épreuve.',
  'plugins.importexport.native.import.error.trackTitleLocaleUnsupported' => 'Un titre de section ("{$trackTitle}") a été fourni dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.trackAbbrevLocaleUnsupported' => 'L\'abréviation d\'une section ("{$trackAbbrev}") a été fournie dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.trackIdentifyTypeLocaleUnsupported' => 'Un type identifiant la section ("{$trackIdentifyType}") a été fourni dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.trackPolicyLocaleUnsupported' => 'Une politique de section ("{$trackPolicy}") a été fournie dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.trackTitleMismatch' => 'Le titre de section "{$track1Title}" et le titre de section "{$track2Title}" correspondent aux différentes sections de conférence existantes.',
  'plugins.importexport.native.import.error.trackTitleMatch' => 'Le titre de section "{$trackTitle}" correspond à une section de conférence existante, mais un autre titre de cette section ne correspond pas avec un autre titre de la section de conférence existante.',
  'plugins.importexport.native.import.error.trackAbbrevMismatch' => 'L\'abréviation de la section "{$track1Abbrev}" et l\'abréviation de la section "{$track2Abbrev}" correspondent aux différentes sections de conférence existantes.',
  'plugins.importexport.native.import.error.trackAbbrevMatch' => 'L\'abréviation de la section "{$trackAbbrev}" correspond à une section de conférence existante, mais une autre abréviation de cette section ne correspond pas avec une autre abréviation de la section de conférence existante.',
  'plugins.importexport.native.import.error.paperDisciplineLocaleUnsupported' => 'Une discipline a été fournie pour la communication "{$paperTitle}" dans une langue("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperTypeLocaleUnsupported' => 'Un type de communication a été fourni pour cette communication "{$paperTitle}" dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSubjectLocaleUnsupported' => 'Un sujet a été fourni pour cette communication "{$paperTitle}" dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSubjectClassLocaleUnsupported' => 'Une classication sujet a été fournie pour cette communication "{$paperTitle}" dans une langue("{$locale}") que cette communication ne supporte pas.',
  'plugins.importexport.native.import.error.paperCoverageGeoLocaleUnsupported' => 'Une couverture géographique a été fournie pour cette communication "{$paperTitle}" dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperCoverageChronLocaleUnsupported' => 'Une couverture chronologique a été fournie pour cette communication "{$paperTitle}" dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperCoverageSampleLocaleUnsupported' => 'Un échantillon représentatif a été fourni pour la communication "{$paperTitle}" dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSponsorLocaleUnsupported' => 'Un commanditaire a été fourni pour cette communication "{$paperTitle}" dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperAuthorCompetingInterestsLocaleUnsupported' => 'Un conflit d\'intérêt a été fourni pour l\'auteur "{$authorFullName}" pour la communication "{$paperTitle}" dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperAuthorBiographyLocaleUnsupported' => 'Une note biographique a été fournie pour cet auteur "{$authorFullName}" de la communication "{$paperTitle}" dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.galleyLocaleUnsupported' => 'Une épreuve de la communication "{$paperTitle}" a été fournie dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSuppFileTitleLocaleUnsupported' => 'Un titre de fichier supplémentaire ("{$suppFileTitle}") de la communication "{$paperTitle}" a été fourni dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSuppFileCreatorLocaleUnsupported' => 'Un créateur du fichier supplémentaire "{$suppFileTitle}" de la communication "{$paperTitle}" a été fourni dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSuppFileSubjectLocaleUnsupported' => 'Un sujet du fichier supplémentaire "{$suppFileTitle}" de la communication "{$paperTitle}" a été fourni dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSuppFileTypeOtherLocaleUnsupported' => 'Un type personnalisé du fichier supplémentaire "{$suppFileTitle}" de la communication "{$paperTitle}" a été fourni dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSuppFileDescriptionLocaleUnsupported' => 'Une description du fichiers supplémentaire "{$suppFileTitle}" de la communication "{$paperTitle}" a été founie dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSuppFilePublisherLocaleUnsupported' => 'Un éditeur de ce fichier supplémentaire "{$suppFileTitle}" de la communication "{$paperTitle}" a été fourni dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSuppFileSponsorLocaleUnsupported' => 'Un commanditaire du fichier supplémentaire "{$suppFileTitle}" de la communication "{$paperTitle}" a été fourni dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.error.paperSuppFileSourceLocaleUnsupported' => 'Une source du fichier supplémentaire "{$suppFileTitle}" de la communication "{$paperTitle}" a été fournie dans une langue ("{$locale}") que cette conférence ne supporte pas.',
  'plugins.importexport.native.import.success' => 'Importation effectuée avec succès',
  'plugins.importexport.native.import.success.description' => 'L\'importation a été effectuée avec succès. Les éléments importés avec succès sont listés ci-bas.',
  'plugins.importexport.native.error.uploadFailed' => 'Le téléchargement a échoué; prière de vous assurer que les téléchargements sont permis sur votre serveur et que le fichier n\'est pas trop volumineux pour votre configuration PHP et serveur Web.',
); ?>