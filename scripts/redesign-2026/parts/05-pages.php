<?php
use craft\elements\Asset;
use craft\elements\Entry;
use craft\elements\User;

$graphic = asset('core-intelligence-grafik.png', 'CORE.Intelligence! – Bereit für Klarheit?', 'Bereit für Klarheit? Drei Kreise: Unternehmensrealität, Marktrealität sowie Erfahrung und Urteilsvermögen. Schnittmengen: relevant, glaubwürdig, zukunftsfähig. In der Mitte: Positionierung, die ankommt.');

page('angebot', 'Angebot', [
    ['introHero', [
        'subtitle' => 'Angebot · Unsere Methode',
        'heading' => "Zahlen,\nDaten &\nErfahrung.",
        'lead' => 'Wie eine KI-gestützte Methode sichtbar macht, was Ihr Markt wirklich von Ihnen erwartet.',
        'text' => '<p>Ein einziges Interview ersetzt mehrtägige Workshops. Die firmeneigene Methodik verknüpft ein webbasiertes Tiefeninterview mit externen Markt-, Wettbewerbs- und Markenmodelldaten. Eine KI verdichtet das Material – die finale strategische Bewertung trifft bewusst ein Mensch.</p>',
        'buttons' => ['new1' => ['type' => 'button', 'enabled' => true, 'fields' => ['button' => linkUrl('#pakete', 'Zu den Paketen'), 'buttonStyle' => 'primary']]],
    ]],
    ['methodGraphic', [
        'subtitle' => 'CORE.Intelligence!',
        'heading' => 'Warum Ihre Beratung – *und nicht die des stärksten Mitbewerbers?*',
        'accentColor' => 'plum',
        'text' => '<p>CORE.Intelligence! hilft Ihnen, diese Frage souverän zu beantworten. Wir verbinden das, was Ihre Beratung ausmacht, mit aktuellen Markt-, Wettbewerbs- und Markendaten, die für Ihr Geschäft relevant sind. Eine KI verdichtet das Material. Die strategische Bewertung trifft bewusst ein Mensch.</p><p>So entsteht Ihre Positionierung schneller und präziser – mit drei bis vier Stunden Interview statt tagelanger Workshops. Und sie lässt sich direkt in eine klare, überzeugende Kommunikation übersetzen.</p>',
        'graphicLabel' => 'Unsere KI-gestützte Methode',
        'graphicTitle' => 'CORE.Intelligence!',
        'graphicText' => 'Wir stützen Positionierungsstrategien auf Zahlen, Daten und Urteilsvermögen und richten Ihr Beratungsunternehmen gezielt auf Ihren Markt aus. So entsteht das vollständige Bild statt nur der Innensicht: eine datenbasierte Analyse statt Eigenwahrnehmung und Interpretation.',
        'image' => [$graphic->id],
        'columns' => rowsPair([
            ['Unternehmensrealität', "Erfahrung\nKompetenzen\nArbeitsweise\nNutzen\nZielgruppe und Kundensegmente\nUnternehmenskultur, Werte und Haltung\nMarke, Markenpersönlichkeit und Erfolgsmuster\nWettbewerb\nHerausforderungen der Branche"],
            ['Marktrealität', "Markterwartung\nMarkt- und Wettbewerbsdynamik\nKunden- und Bedarfsentwicklung\nEinfluss von Technologie und KI\nRelevante Trends und Veränderungen\nStrategische Chancen- und Risikofelder\nKonsequenzen für Geschäftsmodell und Angebot\nAnforderungen an die künftige Positionierung"],
            ['Erfahrung und Urteilsvermögen', "Über 25 Jahre Erfahrung und Expertise in der Positionierungsarbeit\nProjekte in vielen Branchen\nFokus auf Beratungsunternehmen"],
        ]),
        'graphicResult' => 'Ergebnis: Business Context & strategische Orientierung',
    ]],
    ['iconCards', [
        'subtitle' => 'So arbeitet CORE.Intelligence!',
        'heading' => 'Interview, Marktdaten, Urteil – in dieser Reihenfolge.',
        'cards' => [
            ['icon' => 'chat', 'label' => '1 · Ausgangspunkt', 'title' => 'KI-gestütztes Interview', 'text' => 'Ein webbasiertes, adaptives Tiefeninterview mit rund 80 Fragen und einer Dauer von drei bis vier Stunden. Es ersetzt tagelange Workshops durch einen fokussierten Dialog – zu Zielgruppe, Wettbewerb, Werten und bisheriger Wahrnehmung.'],
            ['icon' => 'database', 'label' => '2 · Datenbasis', 'title' => '1.952 Datenpunkte aus 56 Quellen', 'text' => 'Ihre Antworten werden mit Markt-, Wettbewerbs- und Markenmodelldaten abgeglichen – darunter ifo, EZB, Interbrand, Deloitte, MIT und GfK. Eine KI-gestützte Auswertung verdichtet das Material.'],
            ['icon' => 'person', 'label' => '3 · Urteil', 'title' => 'Erfahrung entscheidet', 'text' => 'Die strategische Bewertung und Entscheidung bleibt ausdrücklich bei Katrin Renatus – ein bewusster Gegenentwurf zu rein automatisierten Positionierungstools.'],
        ],
    ]],
    ['processSteps', [
        'subtitle' => 'Ihr Projekt',
        'heading' => 'So läuft Ihr Projekt ab.',
        'lead' => 'Fünf Schritte, klar getaktet. Ihr eigener Zeitaufwand liegt vor allem beim Interview und bei den gemeinsamen Besprechungen.',
        'steps' => [
            ['title' => 'Auftakt', 'text' => 'Wir lernen uns kennen und klären Ziele, Ablauf und Ansprechpartner.', 'badge' => ''],
            ['title' => 'Tiefeninterview', 'text' => 'Sie beantworten online rund 80 Fragen – in drei bis vier Stunden, ganz in Ihrem Tempo.', 'badge' => ''],
            ['title' => 'Marktanalyse', 'text' => 'Wir gleichen Ihre Antworten mit Markt-, Wettbewerbs- und Markendaten aus 56 Quellen ab.', 'badge' => ''],
            ['title' => 'Ihre Entscheidung', 'text' => 'Katrin Renatus stellt Ihnen die Positionierung vor. Sie entscheiden, wir schärfen nach.', 'badge' => 'Sie'],
            ['title' => 'Ergebnis und Übergabe', 'text' => 'Sie erhalten alles dokumentiert – je nach Paket bis zur umsetzungsreifen Roadmap.', 'badge' => ''],
        ],
    ]],
    ['packageOverview', [
        'anchor' => 'pakete',
        'subtitle' => 'Angebot',
        'heading' => 'Drei Pakete. *Sie bestimmen, wie weit wir Sie begleiten.*',
        'lead' => 'Jedes Paket beginnt mit Klarheit über Ihre Positionierung. Danach entscheiden Sie, was wir zusätzlich für Sie erarbeiten – und was Ihr Team selbst übernimmt.',
        'graphicTitle' => 'Was Sie mit Platypus bekommen',
        'teamTitle' => 'Umsetzung',
        'teamSummary' => 'Ihr Team setzt um',
        'teamText' => 'Mit Ihren Mitarbeitenden oder Ihren Partnern – auf Grundlage dessen, was wir Ihnen übergeben.',
        'footnote' => 'Die Pakete bauen aufeinander auf: COMPASS enthält ORIGO, NEXUS enthält COMPASS.',
    ]],
    ['comparisonTable', [
        'heading' => 'Workshop oder CORE.Intelligence!?',
        'columnLeft' => 'Klassischer Workshop',
        'columnRight' => 'CORE.Intelligence!',
        'rows' => [
            ['label' => 'Grundlage', 'left' => 'Meinungen im Raum, Bauchgefühl', 'right' => 'Strukturiertes Interview, 1.952 Datenpunkte'],
            ['label' => 'Ihr Zeitaufwand', 'left' => 'Oft mehrere Tage', 'right' => '3–4 Stunden Interview'],
            ['label' => 'Leistungsumfang', 'left' => 'Oft offen, nach Aufwand', 'right' => '28 klar beschriebene Bausteine in drei Paketen'],
            ['label' => 'Entscheidung', 'left' => 'Konsens der Runde', 'right' => 'Daten grenzen ein, Erfahrung entscheidet'],
            ['label' => 'Ergebnis', 'left' => 'Ein Konzept', 'right' => 'Position, Botschaften und ein umsetzbarer Fahrplan'],
        ],
        'asideLabel' => 'Investition statt Preis',
        'asideHeading' => 'Ein verlorenes Mandat kostet häufig mehr als dieses Projekt.',
        'asideText' => 'Sie zahlen nicht für Stunden, sondern für eine belastbare Entscheidungsgrundlage, die Preisdruck beendet und Mandate zurückbringt.',
    ]],
]);

page('cases', 'Cases & Referenzen', [
    ['statHero', [
        'subtitle' => 'Cases & Referenzen',
        'heading' => 'Was eine Positionierung bewirkt, zeigen die Ergebnisse.',
        'lead' => 'Kaufen Sie nicht die Katze im Sack – überzeugen Sie sich von unserer Arbeit. Jede Fallstudie folgt demselben Aufbau: Ausgangslage, Herausforderung, Vorgehen, Ergebnis und was bleibt.',
        'stats' => rowsPair([['4', 'Fallbeispiele aus vier Branchen'], ['0 → 350', 'Newsletter-Kontakte'], ['34', 'Bewerbende in zwölf Monaten'], ['1', 'Branche statt fünf Zielgruppen']]),
    ]],
    ['caseList', [
        'subtitle' => 'Case Studies',
        'heading' => 'Positionierungen, die im Markt angekommen sind.',
        'lead' => 'Wir veröffentlichen, was belegt und von unseren Kundinnen und Kunden freigegeben ist – so diskret, wie es Ihre Branche verlangt.',
    ]],
]);
