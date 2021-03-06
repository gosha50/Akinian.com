<?php

return array(
  'title' => 'Deutsch',
  'direction' => 'ltr',
  'author' => 'Bastian Allgeier <bastian@getkirby.com>',
  'version' => '1.0.1',
  'data' => array(

    // global
    'cancel' => 'Abbrechen',
    'add' => 'Hinzufügen',
    'save' => 'Speichern',
    'saved' => 'Gespeichert!',
    'change' => 'Ändern',
    'delete' => 'Löschen',
    'insert' => 'Einfügen',
    'ok' => 'Ok',

    // options (sidebar)
    'options.show' => 'Optionen einblenden',
    'options.hide' => 'Optionen ausblenden',

    // installation
    'installation' => 'Installation',
    'installation.check.headline' => 'Kirby Panel Installation',
    'installation.check.text' => 'Kirby hat die folgenden Probleme festgestellt…',
    'installation.check.retry' => 'Wiederholen',
    'installation.check.error' => 'Es gibt einige Probleme!',
    'installation.check.error.accounts' => '/site/accounts ist nicht beschreibbar',
    'installation.check.error.avatars' => '/assets/avatars ist nicht beschreibbar',
    'installation.check.error.blueprints' => 'Bitte lege den Ordner /site/blueprints an',
    'installation.check.error.content' => '/content und alle Inhalte müssen beschreibbar sein.',
    'installation.check.error.thumbs' => '/thumbs muss vorhanden und beschreibbar sein.',
    'installation.signup.username.label' => 'Erstelle den ersten Benutzer',
    'installation.signup.username.placeholder' => 'Benutzername',
    'installation.signup.email.label' => 'Email',
    'installation.signup.email.placeholder' => 'mail@beispiel.de',
    'installation.signup.language.label' => 'Sprache',
    'installation.signup.password.label' => 'Passwort',
    'installation.signup.button' => 'Erstellen',

    // login
    'login' => 'Anmelden',
    'login.welcome' => 'Bitte melde dich mit deinem neuen Account an',
    'login.username.label' => 'Benutzername',
    'login.password.label' => 'Passwort',
    'login.error' => 'Ungültiger Benutzername oder Passwort',
    'login.button' => 'Anmelden',

    // logout
    'logout' => 'Abmelden',

    // dashboard
    'dashboard' => 'Übersicht',
    'dashboard.index.pages.title' => 'Seiten',
    'dashboard.index.pages.edit' => 'Bearbeiten',
    'dashboard.index.pages.add' => 'Hinzufügen',
    'dashboard.index.site.title' => 'Seite',
    'dashboard.index.account.title' => 'Dein Account',
    'dashboard.index.account.edit' => 'Bearbeiten',
    'dashboard.index.metatags.title' => 'Einstellungen',
    'dashboard.index.metatags.edit' => 'Bearbeiten',
    'dashboard.index.history.title' => 'Deine letzten Änderungen',
    'dashboard.index.history.text' => 'Sobald du die ersten Änderungen an Seiten vornimmst, werden sie hier aufgelistet, um jeder Zeit schnell darauf zugreifen zu können.',
    'dashboard.index.license.title' => 'Kirby Lizenz',

    // metatags
    'metatags' => 'Einstellungen',
    'metatags.info' => 'Kirby Information',
    'metatags.license' => 'Kirby Lizenz',
    'metatags.version.toolkit' => 'Toolkit Version',
    'metatags.version.kirby' => 'Kirby Version',
    'metatags.version.panel' => 'Panel Version',
    'metatags.back' => 'Zurück zur Übersicht',
    'metatags.files' => 'Globale Dateien',

    // pages
    'pages.show.settings' => 'Seiteneinstellungen',
    'pages.show.preview' => 'Seite öffnen',
    'pages.show.changeurl' => 'URL ändern',
    'pages.show.invisible' => 'Status: unsichtbar',
    'pages.show.visible' => 'Status: sichtbar',
    'pages.show.changes.text' => 'Du hast ungespeicherte Änderungen!',
    'pages.show.changes.button' => 'Verwerfen',
    'pages.show.delete' => 'Seite löschen',
    'pages.show.subpages.title' => 'Seiten',
    'pages.show.subpages.add' => 'Hinzufügen',
    'pages.show.subpages.edit' => 'Bearbeiten',
    'pages.show.subpages.empty' => 'Diese Seite hat keine Unterseiten',
    'pages.show.files.title' => 'Dateien',
    'pages.show.files.add' => 'Hinzufügen',
    'pages.show.files.edit' => 'Bearbeiten',
    'pages.show.files.empty' => 'Diese Seite hat keine Dateien',
    'pages.show.error.permissions.title' => 'Die Seite ist nicht beschreibbar',
    'pages.show.error.permissions.text' => 'Bitte überprüfe die Schreibrechte für /content und alle Inhalte',
    'pages.show.error.permissions.retry' => 'Wiederholen',
    'pages.show.error.notitle.title' => 'Das Blueprint hat kein Titelfeld',
    'pages.show.error.notitle.text' => 'Bitte füge ein Titelfeld ein und versuche es erneut',
    'pages.show.error.notitle.retry' => 'Wiederholen',
    'pages.show.error.form'  => 'Bitte fülle alle Felder vollständig und korrekt aus',
    'pages.add.title.label' => 'Eine neue Seite hinzufügen',
    'pages.add.title.placeholder' => 'Titel',
    'pages.add.url.label' => 'URL-Anhang',
    'pages.add.url.enter' => '(URL eingeben)',
    'pages.add.url.close' => 'Schließen',
    'pages.add.url.help' => 'Format: Kleinbuchstaben a-z, 0-9 und Bindestriche',
    'pages.add.template.label' => 'Vorlage',
    'pages.add.error.title' => 'Der Titel fehlt',
    'pages.add.error.template' => 'Die Vorlage fehlt',
    'pages.add.error.max.headline' => 'Keine weiteren Unterseiten zugelassen',
    'pages.add.error.max.text' => 'Die maximale Anzahl an Unterseiten für die aktuelle Seite ist erreicht.',
    'pages.url.uid.label' => 'URL-Anhang',
    'pages.url.uid.label.option' => 'Aus Titel erzeugen',
    'pages.url.error.exists' => 'Eine Seite mit dem selben Anhang besteht bereits.',
    'pages.url.error.move' => 'Die URL konnte nicht geändert werden',
    'pages.toggle.publish' => 'Willst du den Status der Seite wirklich in **sichtbar** umändern?',
    'pages.toggle.hide' => 'Willst du den Status der Seite wirklich in **unsichtbar** umändern?',
    'pages.delete.headline' => 'Willst du diese Seite wirklich löschen?',
    'pages.delete.error.home.headline' => 'Die Startseite kann nicht gelöscht werden',
    'pages.delete.error.home.text' => 'Du versuchst die Startseite zu löschen. Das ist nicht möglich und würde zu ungewollten Fehlern führen.',
    'pages.delete.error.error.headline' => 'Die Fehlerseite kann nicht gelöscht werden',
    'pages.delete.error.error.text' => 'Du versuchst die Fehlerseite zu löschen. Das ist nicht möglich und würde zu ungewollten Fehlern führen.',
    'pages.delete.error.children.headline' => 'Die Seite kann nicht gelöscht werden',
    'pages.delete.error.children.text' => 'Die Seite hat Unterseiten und kann daher nicht gelöscht werden. Bitte entferne zuerst alle Unterseiten.',
    'pages.delete.error.blocked.headline' => 'Die Seite kann nicht gelöscht werden',
    'pages.delete.error.blocked.text' => 'Die Seite ist blockiert und kann daher nicht gelöscht werden.',
    'pages.search.help' => 'Durchsuche alle Seiten nach URL-Pfad. Du kannst dich durch Ergebnisse mit den Pfeiltasten bewegen und per Enter zur ausgewählten Seite springen.',
    'pages.search.noresults' => 'Es gibt leider keine Seiten zu deiner Suche. Bitte versuche es mit einem anderen Pfad.',
    'pages.error.missing' => 'Die Seite konnte nicht gefunden werden',

    // subpages
    'subpages' => 'Seiten',
    'subpages.index.headline' => 'Seiten in',
    'subpages.index.back' => 'Zurück',
    'subpages.index.add' => 'Neue Seite anlegen',
    'subpages.index.add.first.text' => 'Diese Seite hat noch keine Unterseiten',
    'subpages.index.add.first.button' => 'Lege die erste Seite an',
    'subpages.index.visible' => 'Sichtbare Seiten',
    'subpages.index.visible.help' => 'Ziehe unsichtbare Seiten hierher, um sie zu sortieren/sichtbar zu machen',
    'subpages.index.invisible' => 'Unsichtbare Seiten',
    'subpages.index.invisible.help' => 'Ziehe sichtbare Seiten hierher, um sie unsichtbar zu machen',
    'subpages.error.missing' => 'Die Seite konnte nicht gefunden werden.',

    // files
    'files' => 'Dateien',
    'files.index.headline' => 'Dateien für',
    'files.index.back' => 'Zurück',
    'files.index.upload' => 'Neue Datei hochladen',
    'files.index.upload.first.text' => 'Diese Seite hat noch keine Dateien',
    'files.index.upload.first.button' => 'Lade die erste Datei hoch',
    'files.index.edit' => 'Bearbeiten',
    'files.index.delete' => 'Löschen',
    'files.show.name.label' => 'Dateiname',
    'files.show.info.label' => 'Typ / Größe / Abmessungen',
    'files.show.link.label' => 'Öffentlicher Link',
    'files.show.open' => 'Anzeigen/Download',
    'files.show.back' => 'Zurück',
    'files.show.replace' => 'Ersetzen',
    'files.show.delete' => 'Löschen',
    'files.show.error.rename' => 'Die Datei konnte nicht umbenannt werden',
    'files.show.error.form' => 'Bitte fülle alle Felder vollständig aus',
    'files.upload.drop' => 'Ziehe Dateien hierher…',
    'files.upload.click' => '…oder klicke, um Dateien hochzuladen',
    'files.replace.drop' => 'Ziehe eine Datei hierher…',
    'files.replace.click' => '…oder klicke, um die Datei zu ersetzen',
    'files.replace.error.type' => 'Die hochgeladene Datei muss den selben Dateityp haben',
    'files.delete.headline' => 'Willst du diese Datei wirklich löschen?',
    'files.error.missing.page' => 'Die Seite konnte nicht gefunden werden',
    'files.error.missing.file' => 'Die Datei konnte nicht gefunden werden',

    // users
    'users' => 'Benutzer',
    'users.index.headline' => 'Alle Benutzer',
    'users.index.add' => 'Neuen Benutzer anlegen',
    'users.index.edit' => 'Bearbeiten',
    'users.index.delete' => 'Löschen',
    'users.form.username.label' => 'Benutzername',
    'users.form.username.placeholder' => 'Dein Benutzername',
    'users.form.username.help' => 'Format: Kleinbuchstaben a-z, 0-9 und Bindestriche',
    'users.form.username.readonly' => 'Der Benutzername kann nicht geändert werden',
    'users.form.firstname.label' => 'Vorname',
    'users.form.lastname.label' => 'Nachname',
    'users.form.email.label' => 'Email',
    'users.form.email.placeholder' => 'mail@beispiel.de',
    'users.form.password.label' => 'Passwort',
    'users.form.password.confirm.label' => 'Passwort bestätigen',
    'users.form.password.new.label' => 'Neues Passwort',
    'users.form.password.new.confirm.label' => 'Neues Passwort bestätigen',
    'users.form.password.new.help' => 'Leer lassen, um das aktuelle Passwort zu behalten',
    'users.form.language.label' => 'Sprache',
    'users.form.role.label' => 'Rolle',
    'users.form.options.headline' => 'Accounteinstellungen',
    'users.form.options.message' => 'Email schicken',
    'users.form.options.delete' => 'Account löschen',
    'users.form.avatar.headline' => 'Profilbild',
    'users.form.avatar.upload' => 'Profilbild hochladen',
    'users.form.avatar.replace' => 'Profilbild ersetzen',
    'users.form.avatar.delete' => 'Profilbild löschen',
    'users.form.back' => 'Zurück zur Benutzerübersicht',
    'users.form.error.password.confirm' => 'Bitte bestätige das Passwort',
    'users.form.error.update' => 'Der Benutzer konnte nicht gespeichert werden',
    'users.form.error.create' => 'Der Benutzer konnte nicht erstellt werden',
    'users.form.error.permissions.title' => 'Der accounts Ordner ist nicht beschreibbar',
    'users.form.error.permissions.text' => 'Bitte stelle sicher, dass /site/accounts besteht und beschreibbar ist.',
    'users.delete.headline' => 'Willst du diesen Benutzer wirklich löschen?',
    'users.delete.error' => 'Der Benutzer konnte nicht gelöscht werden',
    'users.avatar.drop' => 'Ziehe ein Profilbild hierher…',
    'users.avatar.click' => '…oder klicke, um ein Profilbild hochzuladen',
    'users.avatar.error.type' => 'Es sind nur JPG, PNG und GIF Dateien erlaubt.',
    'users.avatar.error.folder.headline' => 'Der Profilbild Ordner ist nicht beschreibbar',
    'users.avatar.error.folder.text' => 'Bitte erstelle den Ordner <strong>/assets/avatars</strong> und stelle sicher, dass er beschreibbar ist.',
    'users.avatar.delete.error' => 'Das Profilbild konnte nicht gelöscht werden',
    'users.avatar.delete.success' => 'Das Profilbild wurde gelöscht',
    'users.error.missing' => 'Der Benutzer wurde nicht gefunden',

    // form fields
    'fields.required' => 'Pflichtfeld',
    'fields.date.label' => 'Datum',
    'fields.date.months' => array(
      0 => 'Januar',
      1 => 'Februar',
      2 => 'März',
      3 => 'April',
      4 => 'Mai',
      5 => 'Juni',
      6 => 'Juli',
      7 => 'August',
      8 => 'September',
      9 => 'Oktober',
      10 => 'November',
      11 => 'Dezember',
    ),
    'fields.date.weekdays' => array(
      0 => 'Sonntag',
      1 => 'Montag',
      2 => 'Dienstag',
      3 => 'Mittwoch',
      4 => 'Donnerstag',
      5 => 'Freitag',
      6 => 'Samstag',
    ),
    'fields.date.weekdays.short' => array(
      0 => 'So',
      1 => 'Mo',
      2 => 'Di',
      3 => 'Mi',
      4 => 'Do',
      5 => 'Fr',
      6 => 'Sa',
    ),
    'fields.email.label' => 'Email',
    'fields.email.placeholder' => 'mail@beispiel.de',
    'fields.number.label' => 'Nummer',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'Seite',
    'fields.page.placeholder' => 'pfad/zur/seite',
    'fields.password.label' => 'Passwort',
    'fields.structure.add' => 'Hinzufügen',
    'fields.structure.add.first' => 'Füge den ersten Eintrag hinzu',
    'fields.structure.empty' => 'Es bestehen keine Einträge.',
    'fields.structure.cancel' => 'Abbrechen',
    'fields.structure.save' => 'Ok',
    'fields.structure.edit' => 'Bearbeiten',
    'fields.structure.delete' => 'Löschen',
    'fields.tags.label' => 'Tags',
    'fields.tel.label' => 'Telefon',
    'fields.textarea.buttons.bold.label' => 'Fetter Text',
    'fields.textarea.buttons.bold.text' => 'Fetter Text',
    'fields.textarea.buttons.italic.label' => 'Kursiver Text',
    'fields.textarea.buttons.italic.text' => 'Kursiver Text',
    'fields.textarea.buttons.link.label' => 'Link',
    'fields.textarea.buttons.email.label' => 'Email',
    'fields.textarea.buttons.image.label' => 'Bild',
    'fields.textarea.buttons.file.label' => 'Datei',
    'fields.toggle.yes' => 'Ja',
    'fields.toggle.no' => 'Nein',
    'fields.toggle.on' => 'An',
    'fields.toggle.off' => 'Aus',

    // textarea overlays
    'editor.link.url.label' => 'URL einfügen',
    'editor.link.text.label' => 'Linktext',
    'editor.link.text.help' => 'Der Linktext ist optional',
    'editor.email.address.label' => 'Email Adresse einfügen',
    'editor.email.address.placeholder' => 'mail@beispiel.de',
    'editor.email.text.label' => 'Linktext',
    'editor.email.text.help' => 'Der Linktext ist optional',
    'editor.file.empty' => 'Diese Seite hat keine Dateien',
    'editor.image.empty' => 'Diese Seite hat keine Bilder',

    // error page
    'error' => 'Fehler',
    'error.headline' => 'Fehler',
  ),
);
