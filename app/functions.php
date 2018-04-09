<?php

// General functions
$siteName = $db->query("SELECT sitename FROM arc_settings")->fetchColumn();

// Alert handler
$alerts = $db->query("SELECT alerts FROM arc_settings")->fetchColumn();
