<?php return array (
  'plugins.importexport.nlm.displayName' => 'Plugiciel d\'exportation NLM (XML)',
  'plugins.importexport.nlm.description' => 'Exporter les métadonnées du fichier en NLM Meeting Abstracts (XML) pour l\'indexation.',
  'plugins.importexport.nlm.export' => 'Exporter les données',
  'plugins.importexport.nlm.export.papers' => 'Exporter les communications',
  'plugins.importexport.nlm.export.selectPaper' => 'Sélectionner les communications à exporter.',
  'plugins.importexport.nlm.cliUsage' => 'Utilisation: 
{$scriptName} {$pluginName} [xmlFileName] [journal_path] communications [paperId1] [paperId2] ...',
  'plugins.importexport.nlm.cliError' => 'ERREUR:',
  'plugins.importexport.nlm.export.error.paperNotFound' => 'Aucune communication ne correspond à l\'ID de la communication "{$paperId}".',
  'plugins.importexport.nlm.export.error.unknownConference' => 'Chemin d\'accès spécifié pour la conférence inconnu {$conferencePath}',
  'plugins.importexport.nlm.export.error.couldNotWrite' => 'Écriture du fichier impossible "{$fileName}"',
); ?>