<?php return array (
  'plugins.generic.translator.name' => 'Plugiciel de traduction',
  'plugins.generic.translator.description' => 'Ce plugiciel permet l\'entretien en ligne des fichiers de traduction.',
  'plugins.generic.translator.longdescription' => 'Cette zone permet à l\'administrateur du site de créer, modifier et vérifier les traductions OCS. Elle s\'applique à l\'ensemble du site et ne devrait pas être utilisée pour personnaliser une conférence en particulier. Si vous corrigez ou créez une traduction, veuillez la soumettre au Public Knowledge Project pour qu\'elle puisse être distribuée dans des versions futures.',
  'plugins.generic.translator.localeDescription' => 'Cette page liste toutes les composantes d\'une traduction OCS et permet au traducteur de modifier chacune d\'entre elles. Une traduction complète devrait inclure les traductions de toutes les composantes.',
  'plugins.generic.translator.localeName' => 'Nom de la langue',
  'plugins.generic.translator.localeKey' => 'Clé',
  'plugins.generic.translator.localeKeyValue' => 'Valeur',
  'plugins.generic.translator.translate' => 'Traduire',
  'plugins.generic.translator.availableLocales' => 'Langues disponibles',
  'plugins.generic.translator.check' => 'Vérifier',
  'plugins.generic.translator.errors' => 'Erreurs de langue',
  'plugins.generic.translator.errors.LOCALE_ERROR_MISSING_KEY.title' => 'Clés manquantes',
  'plugins.generic.translator.errors.LOCALE_ERROR_EXTRA_KEY.title' => 'Clés supplémentaires',
  'plugins.generic.translator.errors.LOCALE_ERROR_DIFFERING_PARAMS.title' => 'Listes de paramètres divergents',
  'plugins.generic.translator.errors.LOCALE_ERROR_MISSING_FILE.title' => 'Fichiers de langues manquants',
  'plugins.generic.translator.errors.EMAIL_ERROR_MISSING_EMAIL.title' => 'Courriels manquants',
  'plugins.generic.translator.errors.EMAIL_ERROR_EXTRA_EMAIL.title' => 'Courriels supp.',
  'plugins.generic.translator.errors.EMAIL_ERROR_DIFFERING_PARAMS.title' => 'Listes de paramètres de courriels divergents',
  'plugins.generic.translator.errors.LOCALE_ERROR_MISSING_KEY.message' => 'La clé "{$key}" est absente de "{$filename}". La version anglaise a été fournie par défaut.',
  'plugins.generic.translator.errors.LOCALE_ERROR_EXTRA_KEY.message' => 'La clé "{$key}" n\'est plus utilisée et peut être supprimée de "{$filename}".',
  'plugins.generic.translator.errors.LOCALE_ERROR_DIFFERING_PARAMS.message' => 'La clé de langue "{$key}" dans "{$filename}" diffère de la langue de référence dans son utilisation des paramètres. Veuillez vérifier qu\'elle contient tous les paramètres pertinents. Le(s)  paramètre(s) qui ne correspond(ent) pas est(sont) :',
  'plugins.generic.translator.errors.LOCALE_ERROR_MISSING_FILE.message' => 'Le fichier de la langue "{$filename}" est absent ou illisible.',
  'plugins.generic.translator.errors.EMAIL_ERROR_MISSING_EMAIL.message' => 'Le message "{$key}" ne se trouve pas dans la traduction.',
  'plugins.generic.translator.errors.EMAIL_ERROR_EXTRA_EMAIL.message' => 'Le message "{$key}" n\'est plus utilisé et peut être supprimé.',
  'plugins.generic.translator.errors.EMAIL_ERROR_DIFFERING_PARAMS.message' => 'Le message "{$key}" diffère de la langue de référence dans son utilisation des paramètres. Veuillez vérifier qu\'il contient tous les paramètres pertinents. Le ou les paramètres qui ne correspondent pas sont :',
  'plugins.generic.translator.locale' => 'Langue {$locale}',
  'plugins.generic.translator.localeFiles' => 'Fichiers de langue',
  'plugins.generic.translator.miscFiles' => 'Fichiers divers',
  'plugins.generic.translator.emails' => 'Modèles de courriel',
  'plugins.generic.translator.file.filename' => 'Nom de fichier',
  'plugins.generic.translator.file.edit' => 'Modification {$filename}',
  'plugins.generic.translator.email.edit' => 'Modification {$emailKey}',
  'plugins.generic.translator.file.reference' => 'Version de référence',
  'plugins.generic.translator.file.translation' => 'Traduction',
  'plugins.generic.translator.email.reference' => 'Version de référence',
  'plugins.generic.translator.email.translation' => 'Traduction',
  'plugins.generic.translator.file.reset' => 'Réinitialiser',
  'plugins.generic.translator.file.resetToReference' => 'Réinitialiser à la version référence',
  'plugins.generic.translator.email.reset' => 'Réinitialiser',
  'plugins.generic.translator.email.resetToReference' => 'Réinitialiser à la version de référence',
  'plugins.generic.translator.file.resetConfirm' => 'Êtes-vous certain de vouloir réinitialiser le contenu du fichier?',
  'plugins.generic.translator.email.resetConfirm' => 'Êtes-vous certain de vouloir réinitialiser le contenu du courriel?',
  'plugins.generic.translator.file.doesNotExistNote' => '* Ce fichier n\'a pas encore été traduit.',
  'plugins.generic.translator.file.confirmCreate' => 'Le fichier "{$filename}" sera créé en utilisant la version anglaise. Vous devrez traduire toutes les chaînes de caractères du fichier. Voulez-vous continuer?',
  'plugins.generic.translator.email.description' => 'Dans les champs suivants, traduiser le titre, le corps et la description du modèle de courriel. La description est à l\'usage du gestionnaire de conférence seulement.',
  'plugins.generic.translator.confirmDelete' => 'Êtes-vous certain de vouloir supprimer cet élément? Cette action est irréversible.',
  'plugins.generic.translator.deleteKey' => 'Supprimer cette clé',
  'plugins.generic.translator.deleteEmail' => 'Supprimer ce courriel',
  'plugins.generic.translator.saveBeforeContinuing' => 'Assurez-vous d\'enregistrer tous les changements effectués sur cette page avant de continuer ou ils seront perdus. Voulez-vous continuer? Si c\'est le cas, tout changement non enregistré sera perdu.',
  'plugins.generic.translator.localeKey.description' => 'Saisir une clé de langue complète pour fins de recherche.',
  'plugins.generic.translator.enabled' => 'Le plugiciel de traduction a été activé.',
  'plugins.generic.translator.disabled' => 'Le plugiciel de traduction a été désactivé.',
  'plugins.generic.translator.tarMissing' => 'La fonctionnalité d\'exportation de ce plugiciel a été désactivée parce que le fichier binaire tar configuré ne peut pas être trouvé sur ce système. Veuillez vous assurer que vous avez installé le programme tar et, à partir de là, configurer le chemin vers le fichier binaire tar dans la section [cli] de config.inc.php.',
  'plugins.generic.translator.fileNotWriteable' => 'Ce fichier de langue n\'est pas disponible en écriture par le serveur. Tous les changements que vous ferez ne seront pas enregistrés.',
  'plugins.generic.translator.filesNotWriteable' => 'Ces fichiers de langue ne sont pas disponibles en écriture par le serveur. Tous les changements que vous ferez à ces fichiers ne seront pas enregistrés.',
); ?>