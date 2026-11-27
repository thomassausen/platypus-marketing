<?php
use craft\elements\Asset;
use craft\elements\Entry;
use craft\elements\User;

// ---- Packages ---------------------------------------------------------------
$packages = [
    'ORIGO' => [
        'reach' => 'Klarheit',
        'heroClaim' => 'Klarheit darüber, wofür Ihre Beratung steht.',
        'lead' => 'ORIGO ist das Fundament jeder Positionierung. Wir finden heraus, was Ihre Beratung unverwechselbar macht, und prüfen es am Markt. Am Ende steht eine Positionierung, die Ihre Geschäftsführung verabschiedet hat.',
        'forWhom' => rowsText(['Sie wollen eine belastbare Positionierung, die auf Daten beruht.', 'Ihr Team oder Ihre Agentur kann Strategie und Umsetzung selbst übernehmen.', 'Sie möchten mit einem klaren ersten Schritt beginnen und danach in Ruhe entscheiden, wie weit Sie gehen.']),
        'result' => 'Eine belegte Positionierung mit Markenprofil und Kernbotschaft, verabschiedet von Ihrer Geschäftsführung.',
        'stageTitle' => 'Klarheit',
        'stageIntro' => 'Sie wissen, wofür Ihre Beratung steht – belegt mit Daten und abgestimmt mit Ihrer Geschäftsführung.',
        'packageServices' => serviceItems([
            ['Tiefeninterview', 'Wir erfassen strukturiert Ihre Geschichte, Leistungen, Expertise, Haltung, Kunden, Ziele und Belege und klären offene Fragen.', 'Eine geprüfte, vollständige Grundlage für alles Weitere.', 'Dokumentierte Antworten und Ergänzungen'],
            ['Zukunftsbild Ihrer Beratung', 'Wir verbinden Ihre Angaben mit Markt- und Zielgruppenwissen und beschreiben Ausgangslage, Zielbild, Marktrolle und Entwicklungsweg.', 'Ein nachvollziehbares Bild davon, wohin sich Ihre Beratung entwickeln kann.', 'Analysebericht und Szenario-Präsentation mit Ergebnisbesprechung'],
            ['Markt- und Wettbewerbsbild', 'Wir untersuchen Wettbewerber und Alternativen: Leistungen, Positionierung, Botschaften, Belege und Marktansprache.', 'Sie sehen, wo Sie sich abheben können.', 'Wettbewerbsmatrix und Zusammenfassung'],
            ['Profile Ihrer Zielgruppen', 'Wir beschreiben Ihre wichtigsten Zielgruppen und Entscheider mit ihren Erwartungen, Auswahlkriterien, Auslösern und Einwänden.', 'Sie wissen, wen Sie ansprechen und was diese Menschen erwarten.', 'Zielgruppen-Steckbriefe und Erwartungsmatrix'],
            ['Positionierungskonzept', 'Wir klären: für wen, bei welchem Problem, mit welchem Nutzen und mit welchem belegbaren Unterschied.', 'Eine abgestimmte Positionierung mit Zielkunden, Nutzenversprechen und Belegen.', 'Positionierungs-Präsentation und One-Pager'],
            ['Markenprofil und Kernbotschaft', 'Wir übersetzen die Positionierung in Markenprofil, Haltung, Werte, Markenversprechen und Kernbotschaft und verabschieden sie mit Ihrer Geschäftsführung.', 'Ein verabschiedetes Markenfundament.', 'Kompaktes Markendokument und Next-Steps-Workshop'],
        ]),
        'afterTitle' => 'Leitplanken, Roadmap und Umsetzung erarbeitet Ihr Team.',
        'afterText' => 'Ihre Positionierung ist die Grundlage für jede Entscheidung, die danach kommt. Wenn Sie dabei Begleitung möchten, baut COMPASS direkt auf ORIGO auf.',
        'stageName' => 'Klarheit',
        'stageSummary' => 'Wofür Ihre Beratung steht',
        'stageHighlights' => rowsText(['Markt- und Wettbewerbsbild', 'Profile Ihrer Zielgruppen', 'Positionierungskonzept', 'Markenprofil und Kernbotschaft']),
        'teamPart' => 'Leitplanken, Roadmap und Umsetzung übernimmt Ihr Team',
        'faqItems' => faqItems([
            ['Wie viel Zeit muss ich einplanen?', 'Für das Tiefeninterview drei bis vier Stunden, ganz in Ihrem Tempo. Dazu kommen die Ergebnisbesprechungen mit Katrin Renatus.'],
            ['Kann ich nach ORIGO noch erweitern?', 'Ja. COMPASS und NEXUS bauen auf ORIGO auf. Was Sie bereits erarbeitet haben, fließt direkt ein.'],
            ['Was, wenn wir schon eine Positionierung haben?', 'Dann prüfen wir sie am Markt. Oft ist mehr da, als sichtbar ist – ORIGO macht es belegbar.'],
        ]),
        'ctaTitle' => 'Ist ORIGO der richtige Einstieg für Sie?',
        'ctaText' => 'Im ersten Gespräch klären wir das gemeinsam. Vertraulich, persönlich und mit einer ehrlichen Einschätzung.',
    ],
    'COMPASS' => [
        'reach' => 'Klarheit + Leitplanken',
        'heroClaim' => 'Strategische Leitplanken für Marke, Marketing und Vertrieb.',
        'lead' => 'COMPASS macht aus Ihrer Positionierung klare Regeln für den Alltag: wie Ihre Marke spricht, wo Ihr Marketing Prioritäten setzt und wie Ihr Vertrieb argumentiert. So ziehen alle in dieselbe Richtung.',
        'forWhom' => rowsText(['Sie wollen Ihre Positionierung mit klaren Regeln für Marke, Marketing und Vertrieb absichern.', 'Mehrere Menschen sprechen für Ihre Beratung und sollen dasselbe sagen.', 'Ihr Team oder Ihre Partner können die detaillierte Planung und Umsetzung übernehmen.']),
        'result' => 'Klare Regeln, nach denen Ihre Marke spricht, Ihr Marketing Prioritäten setzt und Ihr Vertrieb argumentiert – samt Content- und Social-Media-Strategie.',
        'stageTitle' => 'Leitplanken',
        'stageIntro' => 'Klare Regeln, nach denen Ihre Marke spricht, Ihr Marketing Prioritäten setzt und Ihr Vertrieb argumentiert.',
        'packageServices' => serviceItems([
            ['Marken-Cockpit', 'Wir fassen Leitplanken, Botschaften je Zielgruppe, Nutzenargumente, Belege und Tonalität in einem Dokument zusammen.', 'Eine gemeinsame Grundlage für alle, die für Ihre Marke sprechen.', 'Marken-Cockpit als Präsentation und PDF'],
            ['Leitplanken für das Marketing', 'Wir legen Ziele, Prioritäten und Entscheidungsregeln für Themen, Maßnahmen und Budget fest – auch dafür, was Sie bewusst weglassen.', 'Ein fokussiertes Marketing mit klaren Prioritäten.', 'Leitplanken-Dokument mit Entscheidungscheckliste'],
            ['Leitplanken für den Vertrieb', 'Wir entwickeln Argumentation, Fragen für das Erstgespräch, Nutzenargumente, Belege und Antworten auf typische Einwände.', 'Ein Gesprächsleitfaden, der zu Ihren Botschaften passt.', 'Gesprächsleitfaden und Argumentationsmatrix'],
            ['Content-Strategie', 'Wir legen Ziele und Themenfelder fest und klären die Rolle von Blog und Newsletter.', 'Ein Themenrahmen mit Empfehlungen für Formate und Rhythmus.', 'Content-Strategie mit Themenfeldern und Formaten'],
            ['Social-Media-Strategie', 'Wir wählen die passenden Kanäle, vor allem LinkedIn, und stimmen Unternehmens- und Persönlichkeitsauftritte ab.', 'Eine klare Ausrichtung mit Kanalrollen, Formaten und Rhythmus.', 'Social-Media-Strategie mit Kanalübersicht'],
            ['Strategischer Jahresplan', 'Wir legen fest, welche Ziele, Themen und Kanäle im kommenden Jahr Vorrang haben.', 'Jahresschwerpunkte, an denen sich alle Maßnahmen ausrichten.', 'Jahresplan mit Quartalsschwerpunkten'],
            ['Briefing für Team und Partner', 'Wir erklären Strategie, Botschaften und Jahresplan und briefen Ihr Team und Ihre Partner.', 'Ein Team, das weiß, worauf es ankommt.', 'Briefing-Workshop und Unterlagenpaket'],
        ]),
        'afterTitle' => 'Roadmap und Umsetzung plant Ihr Team selbst.',
        'afterText' => 'Mit den Leitplanken und dem gebrieften Team haben Sie alles, um die nächsten Schritte eigenständig zu planen. Wenn Sie einen detaillierten Fahrplan möchten, baut NEXUS direkt auf COMPASS auf.',
        'stageName' => 'Leitplanken',
        'stageSummary' => 'Wie Marke, Marketing und Vertrieb entscheiden',
        'stageHighlights' => rowsText(['Marken-Cockpit', 'Leitplanken für Marketing und Vertrieb', 'Gesprächsleitfaden für den Vertrieb', 'Content- und Social-Media-Strategie', 'Briefing für Team und Partner']),
        'teamPart' => 'Roadmap und Umsetzung übernimmt Ihr Team',
        'faqItems' => faqItems([
            ['Was unterscheidet COMPASS von ORIGO?', 'ORIGO klärt, wofür Ihre Beratung steht. COMPASS legt zusätzlich fest, wie Marke, Marketing und Vertrieb danach entscheiden.'],
            ['Wer aus meinem Team sollte beteiligt sein?', 'Alle, die für Ihre Beratung sprechen oder Marketing und Vertrieb verantworten. Beim Briefing holen wir auch Ihre Partner ins Boot.'],
            ['Was ist der Unterschied zwischen Jahresplan und Roadmap?', 'Der Jahresplan in COMPASS legt die Schwerpunkte fest. Die Roadmap in NEXUS macht daraus konkrete Aufgaben, Termine und Zuständigkeiten.'],
        ]),
        'ctaTitle' => 'Ist COMPASS der richtige Weg für Sie?',
        'ctaText' => 'Im ersten Gespräch klären wir das gemeinsam. Vertraulich, persönlich und mit einer ehrlichen Einschätzung.',
    ],
    'NEXUS' => [
        'reach' => 'Bis zur Roadmap',
        'heroClaim' => 'Ein detaillierter, umsetzungsreifer Fahrplan für die nächsten zwölf Monate.',
        'lead' => 'NEXUS legt fest, was wann über welchen Kanal passiert – und gibt Ihrem Team alles an die Hand, um sofort loszulegen: Sprache, Redaktion, LinkedIn und Vertrieb, fertig geplant und sauber übergeben.',
        'forWhom' => rowsText(['Sie wollen Ihre Positionierung mit einem konkreten Plan in den Markt bringen.', 'Ihr Team soll wissen, was in den nächsten zwölf Monaten wann zu tun ist.', 'Sie möchten die Umsetzung selbst steuern, aber auf einer fertig durchdachten Grundlage.']),
        'result' => 'Ein Fahrplan, der festlegt, was wann über welchen Kanal passiert – mit Sprachleitfaden, Redaktions- und LinkedIn-System und Vertriebs-Playbook.',
        'stageTitle' => 'Umsetzungsreife Roadmap',
        'stageIntro' => 'Ein detaillierter Fahrplan für die nächsten zwölf Monate – mit allem, was Ihr Team braucht, um sofort loszulegen.',
        'packageServices' => serviceItems([
            ['Detaillierter 12-Monats-Fahrplan', 'Wir machen aus dem Jahresplan konkrete Aufgaben, Termine und Zuständigkeiten für Kanäle, Verantwortliche und Ressourcen.', 'Ihr Team weiß, was wann zu tun ist.', 'Umsetzungsboard und Maßnahmenplan'],
            ['Sprachleitfaden', 'Wir legen Tonalität, Wortwahl und Formulierungen für Ihre Kontaktpunkte fest – für Unternehmen und Expertinnen und Experten.', 'Ein wiedererkennbarer Auftritt in jedem Text.', 'Sprachleitfaden mit Textbeispielen'],
            ['Kanal- und Redaktionssystem', 'Wir verbinden Kontaktpunkte, Inhalte und Abläufe und planen die Redaktion: Input, Erstellung, Freigabe, Veröffentlichung.', 'Ein Redaktionsplan mit klaren Wegen und Zuständigkeiten.', 'Kanalarchitektur, Redaktionsplan und Content-Matrix'],
            ['Plan für Ihre Kontaktpunkte', 'Wir legen fest, wie die Positionierung auf Website, Profile, Präsentationen, Angebote und Gesprächsunterlagen übertragen wird.', 'Ein einheitlicher Auftritt an allen Stellen, an denen Kunden Ihnen begegnen.', 'Checkliste und Briefings für die Kontaktpunkte'],
            ['LinkedIn-Playbook', 'Wir legen Profile, Beitragsreihen, Formate, Freigaben und Routinen fest.', 'Ein LinkedIn-Auftritt, den Ihr Team selbstständig führt.', 'Playbook, Profilbriefing und Beitragsvorlagen'],
            ['Vertriebs-Playbook', 'Wir verbinden Marketing und Vertrieb: Kontaktanlässe, Qualifizierung, Gespräche, Nachfassen – entlang des Weges Ihrer Kunden.', 'Ein klarer Ablauf vom ersten Kontakt bis zum Mandat.', 'Vertriebs-Playbook, Customer-Journey-Map und Stakeholder-Map'],
            ['Plan für Expertenprofil und Sichtbarkeit', 'Wir entwickeln Ihr Expertenprofil, planen Fachartikel, Vorträge und PR-Themen und prüfen, wie gut Sie online und in KI-Assistenten gefunden werden.', 'Ein Programm für fachliche Sichtbarkeit mit klaren Prioritäten.', 'Expertenprofil, Themen- und Auftrittsplan, Sichtbarkeits-Check'],
            ['Kennzahlen und Übergabe', 'Wir legen fest, woran Sie Wirkung messen, und übergeben alles mit klaren Zuständigkeiten.', 'Ein dokumentiertes System, das Ihr Team selbst weiterführt.', 'Reporting-Vorlage, Unterlagenpaket und Verantwortungsmatrix'],
        ]),
        'afterTitle' => 'Ihr Team setzt den Fahrplan eigenständig um.',
        'afterText' => 'Alles, was wir übergeben, ist so aufgebaut, dass Ihr Team oder Ihre Partner ohne Umwege damit arbeiten können.',
        'stageName' => 'Roadmap',
        'stageSummary' => 'Was in den nächsten zwölf Monaten passiert',
        'stageHighlights' => rowsText(['Detaillierter 12-Monats-Fahrplan', 'Sprachleitfaden', 'Kanal- und Redaktionssystem', 'LinkedIn- und Vertriebs-Playbook', 'Plan für Expertenprofil und Sichtbarkeit']),
        'teamPart' => 'Ihr Team setzt um',
        'faqItems' => faqItems([
            ['Setzt Platypus den Fahrplan auch um?', 'Die Umsetzung liegt bei Ihrem Team oder Ihren Partnern. Wir sorgen dafür, dass der Fahrplan so konkret ist, dass alle sofort wissen, was zu tun ist.'],
            ['Was passiert bei der Übergabe?', 'Wir gehen gemeinsam durch, ob alles läuft, und klären Zuständigkeiten, Freigaben und Routinen. Sie erhalten alle Unterlagen dokumentiert.'],
            ['Brauche ich vorher ORIGO und COMPASS?', 'NEXUS enthält beide Pakete. Sie starten mit Klarheit, bekommen die Leitplanken und am Ende den Fahrplan – alles in einem Projekt.'],
        ]),
        'ctaTitle' => 'Bereit für einen Fahrplan, der trägt?',
        'ctaText' => 'Im ersten Gespräch klären wir, ob NEXUS zu Ihnen passt. Vertraulich, persönlich und mit einer ehrlichen Einschätzung.',
    ],
];
foreach ($packages as $title => $fields) {
    $e = Entry::find()->section('packages')->title($title)->one() ?? throw new Exception("package $title missing");
    $e->setFieldValues($fields);
    save($e);
}

// ---- Cases ------------------------------------------------------------------
