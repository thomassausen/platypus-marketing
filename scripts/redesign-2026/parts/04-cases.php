<?php
use craft\elements\Asset;
use craft\elements\Entry;
use craft\elements\User;

$cases = [
    'Vom No-Name zur vertrauten Fachinstanz.' => [
        'subtitle' => 'Personalberatung · Berufsgruppe',
        'heroColor' => 'navy',
        'lead' => 'Wie ein Personalberater mit einer klaren Spezialisierung Vertrauen aufbaute, wo zuvor Skepsis herrschte.',
        'keyLabel' => 'qualifizierte Newsletter-Kontakte – aus dem Stand',
        'before' => 'Unbekannter Berater, skeptische Zielgruppe',
        'after' => 'Vertraute Fachinstanz seiner Berufsgruppe',
        'intro' => 'Eine Spezialisierung ist zunächst eine interne Entscheidung. Zur Positionierung wird sie erst, wenn der Markt sie klar wahrnimmt – wenn sich ein festes Bild davon verankert, wofür das Unternehmen steht, welchen Nutzen es bringt und worin es sich von anderen unterscheidet.',
        'stats' => rowsPair([['0 → 350', 'qualifizierte Newsletter-Kontakte'], ['260+', 'Follower auf LinkedIn'], ['≈ 90 %', 'davon aus der Zielgruppe der Kandidaten']]),
        'caseSections' => nested([
            caseSection('Ausgangslage', 'Eine Spezialisierung ohne Marktgedächtnis.', ['Ein langjährig aktiver Personalberater entschied sich im Rahmen einer Neuausrichtung, sich auf eine einzelne Berufsgruppe zu spezialisieren. Bestärkt wurde er durch eine kurze Marktanalyse, die akuten Bedarf signalisierte.', 'Der Name war schnell gefunden, doch der Markt kannte ihn nicht. Es fehlten eine klare Positionierung und eine Strategie, mit der sich die Spezialisierung nach außen vermitteln ließ.']),
            caseSection('Herausforderung', 'Skepsis gegenüber Personalberatungen.', ['Die meisten der anspruchsvollen Kandidaten hatten sich nie über einen Personalberater beworben, sondern wurden berufen. Dieser Form der Zusammenarbeit standen sie skeptisch gegenüber: Personalberater galten häufig als reine CV-Verteiler ohne echtes Verständnis für Branche und Aufgabengebiet.', 'Der Berater war also unbekannt, und die Rolle des Personalberaters hatte in der Zielgruppe ein schwaches Image. Es fehlte an Vertrauen – und Vertrauen entsteht durch Expertise, die man sieht.']),
            caseSection('Vorgehen mit Platypus', 'Erst die Positionierung. Dann ein Auftritt aus einem Guss.', [], [
                ['Positionierung', 'Die Spezialisierung als Marktposition herausgearbeitet und die Zielgruppen klar definiert – damit jede Kommunikation dieselbe Frage beantwortet: Für wen ist der Berater da, und welches Problem löst er?'],
                ['Markenentwicklung', 'Eine eigenständige Marke mit unverwechselbarem Auftritt, eigener Sprache und Haltung.'],
                ['Konsequente Kommunikation', 'Website, Anzeigen, Messeauftritte, Pressearbeit, Social Media, Newsletter und Content Marketing folgen einer einheitlichen Linie.'],
                ['Fachkompetenz als Vertrauensbeweis', 'Fachbeiträge in Blog, Newsletter und Presse zeigen, dass der Berater Branche, Aufgaben und Herausforderungen kennt.'],
                ['Expertise als Hebel', 'Eigene Gehaltsreports für die Berufsgruppe liefern Marktdaten, die sonst kaum verfügbar sind. Der Berater wurde zur Quelle, nicht nur zum Vermittler.'],
            ], 'band'),
            caseSection('Ergebnis', 'Vom CV-Verteiler zum professionellen Vertrauten.', [], [
                ['Reichweite', 'Der Newsletter wuchs von 0 auf 350 qualifizierte Kontakte. Auf LinkedIn folgen über 260 Menschen, rund 90 % davon Kandidaten aus der Zielgruppe – über verschiedene Karrierestufen und Funktionen hinweg.'],
                ['Anerkennung', 'Auf Kongressen und Messen wird der Berater heute gezielt begrüßt, auch im anspruchsvollen Umfeld seiner Mandanten – und gern für ein persönliches Anliegen zur Seite gezogen.'],
                ['Imagewandel', 'Die skeptischen Kandidaten akzeptieren zunehmend den Kontakt mit Personalberatern. Der Berater gilt als selbstverständlicher Teil der Branche.'],
                ['Vom Verteiler zum Vertrauten', 'Er gibt Tipps für den Karriereweg und vermittelt passende Positionen.'],
                ['Akzeptanz bei Unternehmen', 'Die Gehaltsreports stärken das Vertrauen der Kunden und machen ihn zum Ansprechpartner für Marktfragen.'],
            ], 'result'),
        ], 'caseSection'),
        'endLabel' => 'Was bleibt',
        'endHeading' => 'Positionierung ist ein langfristiges Projekt.',
        'endText' => 'Wer über Jahre konsequent denselben Kern kommuniziert, eigene Marktdaten liefert und die Probleme seiner Zielgruppe kennt, wird zur ersten Adresse für sein Fachgebiet.',
        'summary' => 'Ein erfahrener Personalberater spezialisierte sich auf eine einzelne Berufsgruppe – mit neuem Namen, den niemand kannte, und einer Zielgruppe, die Personalberatern misstraute. Mit klarer Positionierung, eigener Marke und konsequenter Kommunikation wurde er zur ersten Adresse für sein Fachgebiet.',
        'overviewFacts' => rowsPair([['Ausgangslage', 'Neue Spezialisierung, neuer Name – im Markt unbekannt'], ['Herausforderung', 'Kandidaten sahen Personalberater als reine CV-Verteiler'], ['Vorgehen', 'Positionierung, eigene Marke, Kommunikation über alle Kanäle, eigene Gehaltsreports'], ['Ergebnis', 'Vom CV-Verteiler zum vertrauten Ansprechpartner – für Kandidaten und Unternehmen']]),
    ],
    'Warum man eine Positionierung nicht kopieren kann.' => [
        'newTitle' => 'Warum man eine erfolgreiche Positionierung nicht einfach kopieren kann.',
        'teaserTitle' => 'Warum man eine Positionierung nicht kopieren kann.',
        'subtitle' => 'Personalberatung · HSE',
        'heroColor' => 'navyDeep',
        'lead' => 'Wie eine Personalberatung entschied, sich innerhalb einer Berufsgruppe auf eine einzige Funktion zu konzentrieren.',
        'keyLabel' => 'statt einer ganzen Berufsgruppe',
        'before' => 'Die gesamte HSE-Berufsgruppe',
        'after' => 'Die Adresse für Leitende HSE-Manager',
        'intro' => 'Positionierung ist eine Frage von Fokus und Spezialisierung. Erfolg entsteht dort, wo klar ist, wofür man steht, für wen man da ist und welche Probleme man wie löst.',
        'glance' => rowsPair([['Mandant', 'Eine Personalberatung, die Führungskräfte im HSE-Umfeld (Health, Safety, Environment) besetzt'], ['Ausgangslage', 'Wachsender Bedarf an Sicherheitsingenieuren, aber eine sehr große, heterogene Zielgruppe'], ['Entscheidung', 'Spezialisierung auf die Funktion der Leitenden HSE-Manager'], ['Ergebnis', 'Schnell Markttransparenz, gute Kontakte zu passenden Kandidaten, Sparringspartner auf Augenhöhe für Kandidaten und Kunden']]),
        'caseSections' => nested([
            caseSection('Ausgangslage', 'Eine Strategie, die sich nicht eins zu eins übertragen ließ.', ['In einem früheren Projekt hatte die Spezialisierung auf eine Berufsgruppe sehr gut funktioniert: Das Berufsfeld war überschaubar, eng vernetzt, mit eigenen Themen, Kongressen und Verbänden. Unser Mandant wollte dieselbe Logik übernehmen.', 'Eine kurze Analyse zeigte, dass sich der Markt für Health, Safety & Environment stark entwickelte. HSE galt zunehmend als Beitrag zum Unternehmenserfolg, die Vision Zero rückte in der Geschäftsführung nach oben. Das Potenzial schien groß – der Mandant setzte auf die Berufsgruppe.']),
            caseSection('Herausforderung', 'Eine Zielgruppe, zu breit für eine glaubwürdige Ansprache.', ['Die Idee ging nicht auf. Die Zielgruppe umfasste nahezu das gesamte HSE-Umfeld – unterschiedliche Fachdisziplinen, Hierarchieebenen und Branchen. Die Ansprache blieb bei Kandidaten wie Kunden ungenau und damit wenig glaubwürdig. Eine Abgrenzung zu anderen Anbietern war kaum möglich.']),
            caseSection('Die Entscheidung', 'Spitzer, tiefer, spezialisierter.', ['Die Antwort war Fokussierung auf die Funktion der Leitenden HSE-Manager. Eine Führungsrolle lässt sich präzise beschreiben: welche Verantwortung sie trägt, welche Kompetenz sie verlangt und woran man Erfolg misst. Eine breite Berufsgruppe lässt sich so nicht beschreiben.', 'Die Positionierung in einem Satz: Wir sind die Adresse für Leitende HSE-Manager, die Sicherheit als wirtschaftlichen und kulturellen Hebel gestalten – und für Unternehmen, die genau diese Führungskompetenz suchen.']),
            caseSection('Die Umsetzung', 'Eine Botschaft über alle Kanäle.', ['Kernbotschaft: Arbeitssicherheit ist eine Investition in Wirtschaftlichkeit, Kultur und Zukunftsfähigkeit.'], [
                ['Kooperationen, die das Thema weiterdenken', 'Ein Partner aus der Veränderungsberatung lud zum Podcast ein: Welche Kompetenzen braucht eine HSE-Führungskraft, um Veränderung voranzutreiben? Damit wurde sichtbar, was die Positionierung verspricht.'],
                ['Präsenz dort, wo die Zielgruppe ist', 'Ein eigener Stand auf einer internationalen Fachmesse für Arbeitsschutz machte die Positionierung im persönlichen Gespräch greifbar.'],
                ['Integrierte Kommunikation', 'Social Media, Pressearbeit und Kooperationskampagnen griffen dieselbe Kernaussage auf – ein wiedererkennbarer Auftritt für Unternehmen und Kandidaten.'],
            ], 'band'),
        ], 'caseSection'),
        'endLabel' => 'Fazit',
        'endHeading' => 'Verzicht auf Breite zugunsten von Tiefe.',
        'endText' => 'Die Positionierung sagt klar, wofür die Personalberatung steht, für wen sie da ist und welches Problem sie löst – und überzeugt Unternehmen und Führungskräfte gleichermaßen.',
        'lessons' => rowsText(['Erfolg ist kontextabhängig. Eine Positionierung muss zum Markt passen, nicht zu einer fremden Erfolgsgeschichte.', 'Spezialisierung wird durch Tiefe belegt: Markttransparenz, Netzwerk und Verständnis der Aufgaben.', 'Kooperationen erweitern das Spielfeld und übertragen Glaubwürdigkeit.', 'Klarheit schlägt Breite. Wenn jeder Kanal dieselbe Frage beantwortet, wird eine Marke erinnerbar.']),
        'summary' => 'Wie eine Personalberatung sich innerhalb einer Berufsgruppe auf eine einzige Funktion konzentrierte – die Leitenden HSE-Manager.',
    ],
    'Wenn die Kanzlei besser ist als ihr Ruf.' => [
        'subtitle' => 'Steuerkanzlei · Employer Branding',
        'heroColor' => 'petrol',
        'lead' => 'Wie wir die gelebte Kultur einer Steuerkanzlei sichtbar gemacht, eine Social-Media-Strategie für Bewerbende aufgebaut und das Ziel nach zwölf Monaten erreicht haben.',
        'keyLabel' => 'neue Mitarbeitende in zwölf Monaten',
        'before' => 'Starke Kultur, nach außen unsichtbar',
        'after' => 'Ein Arbeitgeber, den Bewerbende sehen',
        'intro' => 'Viele Kanzleien suchen Personal. Nur wenige wissen, warum Menschen gern bei ihnen arbeiten. Dieser Fall zeigt: Die beste Arbeitgebermarke existiert oft schon im Haus – nur nicht dort, wo Bewerbende sie sehen.',
        'glance' => rowsPair([['Kunde', 'Steuerberater mit eigener Kanzlei und eigenem Team'], ['Ausgangslage', 'Dringender Bedarf an qualifizierten Mitarbeitenden, bisherige Maßnahmen ohne Wirkung, Website-Relaunch steht an'], ['Entscheidung', 'Employer Branding auf die echte Kultur gründen und gezielt an Bewerbende richten'], ['Unser Auftrag', 'Arbeitgeberpositionierung, Website-Relaunch und Social-Media-Strategie'], ['Ergebnis', 'Personalbedarf nach zwölf Monaten gedeckt']]),
        'caseSections' => nested([
            caseSection('Ausgangslage', 'Viel versucht, wenig bewegt.', ['Qualifizierte Bewerbungen blieben aus. Stellenanzeigen waren geschaltet, verschiedene Wege ausprobiert – der Erfolg blieb überschaubar.', 'Gleichzeitig stand der Relaunch der Website an. Damit lag die Frage nahe, wie sich die Kanzlei künftig präsentiert: gegenüber Mandanten, aber auch gegenüber Menschen, die bei ihr arbeiten wollen.']),
            caseSection('Herausforderung', 'Die Kultur war da, aber unsichtbar.', ['Im ersten Workshop zeigte sich schnell, welches Pfund die Kanzlei besitzt: Die Mitarbeitenden identifizierten sich mit dem Haus und engagierten sich weit über ihre Aufgaben hinaus. Der Umgang war respektvoll, höflich und herzlich. Geburtstage wurden mit kleinen Ritualen gefeiert – mit einem Ständchen und selbst gebackenem Kuchen.', 'Außerhalb des Büros war davon nichts zu sehen. Die Website zeigte eine solide Dienstleisterin, aber keinen Ort, an dem man gern arbeitet.']),
            caseSection('Der Workshop', 'Persönlichkeit statt Hochglanz.', ['Die Aufgabe war nicht, eine Kultur zu erfinden, sondern die bestehende so zu beschreiben, dass Außenstehende sie erkennen. Daraus entstand eine klare Arbeitgeberpositionierung: Hier arbeiten Menschen mit Fachkompetenz, die sich gegenseitig den Rücken stärken und dabei Spaß haben.'], [
                ['Was die Kanzlei ausmacht', 'Verlässlichkeit, Wertschätzung im Umgang und ein gemeinsames Verständnis von Qualität.'],
                ['Wie das im Alltag aussieht', 'Rituale, Hilfsbereitschaft und der Humor, der den Büroalltag leicht macht.'],
                ['Für wen das relevant ist', 'Menschen, die fachlich gut sind und ein Umfeld suchen, in dem sie sich wohlfühlen.'],
            ]),
            caseSection('Unser Vorgehen', 'Sichtbar dort, wo Bewerbende suchen.', [], [
                ['Website entlang der Positionierung', 'Der Relaunch greift die Kultur auf. Da die Website vor allem Mandanten überzeugen sollte, blieb für den Arbeitgeberaspekt nur begrenzt Raum.'],
                ['Social Media für Bewerbende', 'Echte Momente aus dem Alltag statt inszenierter Bildwelten – nahbar und glaubwürdig.'],
                ['Bewerbungsprozess mit Zuordnung', 'Jede Bewerbung ließ sich einer Kampagne zuordnen. So war jederzeit klar, welche Maßnahme wirkt.'],
            ], 'band'),
            caseSection('Ergebnis', 'Fünf neue Mitarbeitende in zwölf Monaten.', ['Innerhalb von zwölf Monaten bewarben sich 34 Personen, fünf neue Mitarbeitende wurden eingestellt – drei davon nachweislich über Website und Social Media. Der Personalbedarf war gedeckt.', 'Die Maßnahmen hatten sich damit erfolgreich überflüssig gemacht, die Social-Media-Aktivitäten wurden heruntergefahren. Die Kanzlei hat dafür etwas Wertvolles gewonnen: eine Mannschaft, die passt.'], [
                ['34', 'Bewerbende in zwölf Monaten'], ['5', 'neue Mitarbeitende eingestellt'], ['3', 'davon nachweislich über Website und Social Media'],
            ], 'result'),
        ], 'caseSection'),
        'quote' => 'Vorher haben wir nur selten Bewerbungen bekommen, und nur selten solche, die wirklich zu uns passen. Heute liefern Website und Social Media regelmäßig interessante Bewerbungen. Seit Platypus den Kanal aufgesetzt hat, können wir ihn selbst pflegen – und das tun wir auch, mit großem Spaß im Team.',
        'quoteBy' => 'Gründer und Partner der Kanzlei',
        'endLabel' => 'Fazit',
        'endHeading' => 'Die Kanzlei musste nicht neu erfunden werden. Sie musste nur sichtbar werden.',
        'endText' => 'Von der Hotelberatung über die Steuerkanzlei bis zur Personalberatung zeigt sich dasselbe Muster: Eine klare Positionierung macht aus gelebter Qualität wahrgenommene Qualität. Diese Erfahrung bringt Platypus heute in die Arbeit mit Personalberatungen ein.',
        'lessons' => rowsText(['Employer Branding funktioniert am besten, wenn es nichts erfindet. Die Kultur muss vorhanden sein, bevor man sie kommuniziert.', 'Wer Bewerbende erreichen will, muss dort sichtbar sein, wo sie suchen.', 'Ein Prozess, der Bewerbungen einer Kampagne zuordnet, macht aus Bauchgefühl eine Entscheidungsgrundlage.']),
        'summary' => '34 Bewerbende und fünf neue Mitarbeitende in zwölf Monaten – weil die gelebte Kultur endlich sichtbar wurde.',
    ],
    'Für wen sind wir eigentlich da?' => [
        'subtitle' => 'Beratung · Hotellerie',
        'heroColor' => 'plum',
        'lead' => 'Wie eine Expertin für Gästebegeisterung nach der Corona-Krise zu ihrer Branche zurückfand – und warum eine klare Positionierung auch wirtschaftlich den Unterschied macht.',
        'keyLabel' => 'statt fünf Zielgruppen – und eine Botschaft, die sitzt',
        'before' => 'Breit aufgestellt, Botschaft verwässert',
        'after' => 'Expertin für Gästebegeisterung in der Hotellerie',
        'intro' => 'Vor zwanzig Jahren begann alles mit einer einfachen Frage: Wie können Hotels ihren Service verbessern? Der Bedarf war da, das Geschäft wuchs Schritt für Schritt, und der Name der Beraterin wurde in der Branche zum Begriff für Servicequalität.',
        'glance' => rowsPair([['Beraterin', 'Gründerin eines kleinen Unternehmens für Training und Coaching in Servicequalität und Gästebegeisterung'], ['Zielgruppe', 'Ursprünglich Hotelinhaber und Hoteldirektoren'], ['Ausgangslage', 'Lockdown, Auftragsrückgang, neue Branchen, verwässerte Botschaft'], ['Unser Auftrag', 'Klärung der Positionierung und Umsetzung auf allen Kanälen'], ['Ergebnis', 'Rückkehr zur Hotellerie, einheitlicher Auftritt, bessere Auffindbarkeit']]),
        'caseSections' => nested([
            caseSection('Ausgangslage', 'Ein gewachsenes Geschäft unter Druck.', ['Über die Jahre bildete sich die Beraterin gezielt weiter und ließ sich im Training und Coaching für Mitarbeitende und Führungskräfte zertifizieren. Ihre Leistungen wuchsen mit den Anforderungen der Branche, ihr Ruf ebenso.', 'Dann kam Corona. Viele Hotels stellten Aufträge zurück. Um das Geschäft zu stabilisieren, erschloss die Beraterin neue Kundensegmente: Versicherungen, Banken, Arztpraxen und Kliniken. Die Rechnung ging auf – um den Preis einer Positionierung, die zunehmend an Schärfe verlor.']),
            caseSection('Herausforderung', 'Wer für alle spricht, wird von keinem gefunden.', ['Mit jeder neuen Kundengruppe musste die Beraterin ihre Sprache wechseln. Die Website erhielt zwei Rubriken, die Botschaften wurden allgemeiner. Die Folgen zeigten sich deutlich:'], [
                ['Anfragen blieben aus', 'Als die Hotellerie nach Corona wieder anzog, kamen die gewohnten Anfragen über die Website nicht mehr.'],
                ['Ranking verloren', 'Im Suchmaschinen-Ranking fiel die Website weit zurück.'],
                ['Für KI unsichtbar', 'KI-gestützte Suchen konnten die Beraterin keiner eindeutigen Branche zuordnen.'],
                ['Pitch ohne Halt', 'Im Elevator Pitch geriet sie ins Stocken: Für wen war sie eigentlich die Expertin?'],
            ]),
            caseSection('Das Positionierungsgespräch', 'Drei Fragen, eine eindeutige Antwort.', ['Im Workshop stellten wir unter anderem drei Fragen: Welche Branche liegt Ihnen am meisten am Herzen? Wo ist der Bedarf am größten? Bei welcher Arbeit haben Sie die meiste Freude?', 'Die Antwort war eindeutig: die Hotellerie. Hier liegen die Wurzeln der Beraterin, hier kennt sie Probleme und Sprache. Und seit der Pandemie fällt es Hotels schwer, Personal zu finden und zu halten. Wer Mitarbeitende für den Service begeistert, stärkt die Personalbindung – und damit die Wirtschaftlichkeit.']),
            caseSection('Unser Vorgehen', 'Konsequent zurück zu den Wurzeln.', [], [
                ['Eine Zielgruppe', 'Die Hotellerie wurde zur einzigen Zielgruppe. Die Beraterin tritt seither als Expertin für Gästebegeisterung in der Hotellerie auf.'],
                ['Ein Auftritt über alle Kanäle', 'Website, Social Media, Newsletter und Messeauftritte transportieren dieselbe Aussage.'],
                ['Ein Elevator Pitch, der sitzt', 'Der Vorstellungssatz entstand im Positionierungsgespräch und wird seitdem einheitlich verwendet.'],
                ['Klare Grenzen', 'Fragt eine Klinik an, wird das Anliegen selbstverständlich bearbeitet. Website und Kommunikation richten sich aber ausschließlich an Hotels.'],
            ], 'band'),
            caseSection('Ergebnis', 'Bekannt in der Branche, für die sie arbeiten möchte.', ['Die Website spricht die Sprache der Hoteldirektionen, und auch KI-gestützte Suchen ordnen die Beraterin inzwischen eindeutig der Hotellerie zu.'], [], 'result'),
        ], 'caseSection'),
        'quote' => 'Als ich mich für eine klare Positionierung entschieden habe, war das ein echter Verzicht. Dank Platypus habe ich gelernt, wie aus diesem Verzicht ein Vorteil wird. Heute weiß die Hotellerie sofort, wofür ich stehe.',
        'quoteBy' => 'Die Beraterin',
        'internalNote' => 'Platzhalter: konkrete Zahlen ergänzen, sofern belegbar (z. B. Website-Anfragen vor und nach der Neupositionierung, Ranking, Anteil der Hotelaufträge) – und ggf. ein Zitat einer Hoteldirektion.',
        'endLabel' => 'Fazit',
        'endHeading' => 'Nichts Neues erfunden – sondern zum Ausgangspunkt zurückgefunden.',
        'endText' => 'Sie kennt die Hotellerie, und die Hotellerie kennt sie. Genau das macht sie für ihre Zielgruppe zur ersten Wahl.',
        'lessons' => rowsText(['Eine breite Aufstellung wirkt in Krisenzeiten vernünftig – sie kostet aber Sichtbarkeit.', 'Die Festlegung auf eine Branche ist zunächst ein Verzicht. Wirtschaftlich zahlt sie sich aus, weil die Anfragen besser passen.', 'Kanäle spielen nur zusammen, wenn klar ist, welche Geschichte sie erzählen. Die Positionierung ist die Grundlage für Website, Pitch und Newsletter – nicht deren Ergebnis.']),
        'summary' => 'Wie eine Expertin für Gästebegeisterung nach der Corona-Krise zu ihrer Branche zurückfand – und warum sich der Verzicht auf Breite auszahlt.',
    ],
];
foreach ($cases as $title => $fields) {
    $e = Entry::find()->section('cases')->title($title)->one()
        ?? Entry::find()->section('cases')->title($fields['newTitle'] ?? '')->one()
        ?? throw new Exception("case $title missing");
    if (isset($fields['newTitle'])) { $e->title = $fields['newTitle']; unset($fields['newTitle']); }
    $e->setFieldValues($fields);
    save($e);
}
