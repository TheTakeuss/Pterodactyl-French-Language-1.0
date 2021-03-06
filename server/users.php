<?php

return [
    'permissions' => [
        'websocket_*' => 'Permet l\'accès au websocket pour ce serveur.',
        'control_console' => 'Permet à l\'utilisateur d\'envoyer des données à la console du serveur.',
        'control_start' => 'Permet à l\'utilisateur de démarrer le serveur.',
        'control_stop' => 'Permet à l\'utilisateur d\'arrêter le serveur.',
        'control_restart' => 'Permet à l\'utilisateur de redémarrer le serveur.',
        'control_kill' => 'Permet à l\'utilisateur de tuer le processus serveur.',
        'user_create' => 'Permet à l\'utilisateur de créer des sous-utilisateurs supplémentaires sur le serveur.',
        'user_read' => 'Permet à l\'utilisateur d\'afficher une liste de tous les sous-utilisateurs affectés au serveur.',
        'user_update' => 'Permet à l\'utilisateur de modifier les autorisations affectées à d\'autres sous-utilisateurs.',
        'user_delete' => 'Permet à l\' utilisateur de supprimer d\'autres sous-utilisateurs sur le serveur.',
        'file_create' => 'Permet à l\' utilisateur de créer de nouveaux fichiers et répertoires.',
        'file_read' => 'Permet à l\' utilisateur de voir les fichiers et dossiers associés à ce serveur, ainsi que leur contenu.',
        'file_update' => 'Permet à l\' utilisateur de modifier les fichiers et les dossiers associés au serveur.',
        'file_delete' => 'Permet à l\' utilisateur de supprimer des fichiers et des répertoires.',
        'file_archive' => 'Permet à l\' utilisateur to créer des archives et décompresser les archives existantes.',
        'file_sftp' => 'Permet à l\' utilisateur d\'effectuer les actions de fichier ci-dessus à l\'aide d\'un client SFTP. ',
        'allocation_read' => 'Permet à l\'utilisateur d\'afficher toutes les adresses IP et tous les ports affectés à un serveur.',
        'allocation_update' => 'Permet à l\'utilisateur de modifier l\'allocation de connexion par défaut à utiliser pour un serveur.',
        'database_create' => 'Permet à l\'utilisateur de créer des bases de données supplémentaires pour ce serveur.',
        'database_read' => 'Permet à l\'utilisateur d\'afficher toutes les bases de données associées à ce serveur, y compris les noms d\'utilisateur et les mots de passe des bases de données.',
        'database_update' => 'Permet à l\'utilisateur d\'apporter des modifications à une base de données. Si l\'utilisateur ne dispose pas de l\'autorisation "Voir le mot de passe", il ne pourra pas non plus modifier le mot de passe.',
        'database_delete' => 'Permet à l\'utilisateur Permet à un utilisateur de supprimer des bases de données pour ce serveur.',
        'database_view_password' => 'Permet à l\'utilisateur de consulter un mot de passe de la base de données dans le système.',
        'schedule_create' => 'Permet à l\' utilisateur de créer une nouvel planification.',
        'schedule_read' => 'Permet à l\' utilisateur d\'afficher les détails d\'une planification spécifique, y compris toutes les tâches affectées.Permet à un utilisateur de modifier un planning incluant toutes les tâches du planning. Cela permettra à l\'utilisateur de supprimer des tâches individuelles, mais pas de supprimer la planification elle-même.',
        'schedule_update' => 'Permet à l\' utilisateur de modifier un planning incluant toutes les tâches du planning. Cela permettra à l\'utilisateur de supprimer des tâches individuelles, mais pas de supprimer la planification elle-même.',
        'schedule_delete' => 'Permet à l\' utilisateur de supprimer une planification du serveur.',
    ],
];
