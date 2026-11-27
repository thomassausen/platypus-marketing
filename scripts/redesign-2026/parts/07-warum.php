<?php
use craft\elements\Asset;
use craft\elements\Entry;
use craft\elements\User;

// "Warum Platypus" page (texts from the customer's design export)

$katrin = asset('katrin-renatus.jpg', 'Katrin Renatus');

page('warum-platypus', 'Warum Platypus', [
    ['profileHero', [
        'image' => [$katrin->id],
        'subtitle' => 'Warum Platypus',
        'heading' => 'Katrin Renatus',
        'role' => 'Markenstrategin, Unternehmerin, Positionierungsexpertin · Gründerin von Platypus Strategieberatung, Hamburg',
        'lead' => 'Ich berate Inhaber und Partner von Personalberatungen beim Aufbau relevanter Positionierungen – und dabei, sie im Markt zu verankern.',
        'text' => '<p>Nahezu 30 Jahre Erfahrung in Markenführung und Marketing, mehr als zehn davon mit direktem Fokus auf Personalberatungen. 2015 gründete ich Platypus – zunächst als Agentur für Websites, Content Marketing und Social Media. Heute ist daraus eine spezialisierte Beratung für strategische Positionierung geworden.</p>',
        'stats' => rowsPair([['≈ 30', 'Jahre Markenführung'], ['10+', 'Jahre Personalberatungen'], ['2015', 'Gründung in Hamburg']]),
    ]],
    ['textQuote', [
        'subtitle' => 'Warum diese Spezialisierung?',
        'heading' => 'Wo die Positionierung geschärft war, hat alles Weitere besser funktioniert.',
        'text' => '<p>Die Website, die Inhalte, die Briefings mit den Auftraggebern. Den Ausschlag gab dann das KI-Zeitalter: Wer heute nicht austauschbar sein möchte, braucht eine klare Positionierung. Meine eigene Neupositionierung folgte deshalb genau der Logik, die Platypus heute seinen Kunden anbietet.</p>',
        'quote' => 'Jedes Unternehmen ist einzigartig – und genau diese Einzigartigkeit sollte auf den ersten Blick erkennbar sein.',
        'quoteBy' => 'Katrin Renatus',
    ]],
    ['statementCards', [
        'subtitle' => 'Wofür wir stehen',
        'heading' => 'Wir glauben an Beratungen mit klarem Profil.',
        'cards' => [
            ['label' => 'Purpose · Warum es uns gibt', 'title' => 'Herausfinden statt erfinden.', 'text' => 'Jede Beratung trägt schon in sich, was sie besonders macht: eine Fähigkeit, die sie auszeichnet, eine Persönlichkeit mit Haltung, klare Werte. Wir machen diese Stärke sichtbar – spitz genug, um aufzufallen, und relevant genug, um gefragt zu sein. Damit Ihr Telefon klingelt, wenn Kunden in Ihrer Nische die erste Wahl suchen.'],
            ['label' => 'Mission · Wie wir arbeiten', 'title' => 'Ihren Erfolgscode freilegen.', 'text' => 'Wer genau weiß, was sein Markt braucht, kann ihm genau das bieten. Deshalb schauen wir auf beides: auf Ihre Beratung, wie sie heute wirklich arbeitet, und auf die Erwartungen Ihrer Zielgruppe. Dabei verbinden wir Marktdaten mit Erfahrung. Daraus entstehen eine klare Positionierung, ein Profil mit Haltung und eine Ansprache, die glaubwürdig ist und ankommt.'],
            ['label' => 'Vision · Wohin wir wollen', 'title' => '', 'text' => 'Personalberatungen mit einem echten, klaren Profil – bekannt als Expertinnen und Experten in ihrer Nische, sodass die richtigen Kunden von sich aus auf sie zukommen.'],
        ],
    ]],
    ['valueList', [
        'subtitle' => 'Haltung',
        'heading' => 'Sechs Werte, an denen wir uns messen lassen.',
        'items' => rowsPair([
            ['Fundament zuerst', 'Eine starke Grundlage trägt alles, was folgt. Erst Stärken, Zielgruppe und Positionierung – dann Website, Texte und Social Media.'],
            ['Nachvollziehbar', 'Keine Empfehlung ohne Daten, Quellen oder nachvollziehbare Logik. So entscheiden Sie auf sicherem Boden.'],
            ['Klarheit', 'Jede Positionierung lässt sich in einem Satz sagen – so klar, dass Ihre Kunden sie verstehen und weitererzählen.'],
            ['Spezialisierung', 'Seit mehr als zehn Jahren arbeiten wir mit Personalberatungen und Executive-Search-Boutiquen. Wir wissen, wie Mandate entstehen.'],
            ['Umsetzbarkeit', 'Jede Strategie endet mit dem nächsten Schritt – mit konkreten Aufgaben und klaren Zuständigkeiten.'],
            ['Unabhängigkeit', 'Sie entscheiden, wie weit wir Sie begleiten. Alles, was wir übergeben, ist so aufgebaut, dass Ihr Team selbstständig weiterarbeitet.'],
        ]),
    ]],
    ['contrastTiles', [
        'subtitle' => 'Das Platypus-Prinzip',
        'heading' => 'Ihre Gegensätze sind Ihre Stärke.',
        'text' => '<p>Das Schnabeltier, auf Englisch Platypus, vereint Merkmale, die scheinbar aus ganz verschiedenen Tieren stammen. Genau diese Kombination sichert ihm seit Millionen Jahren das Überleben.</p><p>Nach dieser Logik schauen wir auf Ihre Beratung: Wir spüren die scheinbar widersprüchlichen Eigenschaften auf, die Sie unverwechselbar machen, und verdichten sie zu einer Kombination, die niemand sonst vorweisen kann. Zur Stärke wird sie, wenn Ihr Markt genau das erwartet.</p>',
        'tiles' => rowsPair([['Ein Säugetier,', 'das Eier legt.'], ['Taucht blind', 'und trifft zielsicher.'], ['Paddelt mit Schwimmhäuten', 'und gräbt mit Krallen.'], ['Sieht aus wie ein Kuscheltier', 'und ist giftig.']]),
        'bandLabel' => 'Fundiert statt beliebig',
        'bandText' => 'Wir entwickeln Positionierungen nicht aus dem Bauch heraus. Wir verdichten valide Marktdaten mit Fähigkeiten, Haltung und Werten – Schritt für Schritt zu einer Marktansprache, mit der Ihr Team im Alltag arbeiten kann.',
    ]],
    ['statementText', [
        'subtitle' => 'Was mir wichtig ist',
        'heading' => 'Je mehr KI übernimmt, desto mehr zählt, wer Sie sind.',
        'text' => '<p>Damit wird eine Frage entscheidend: Warum sollte ein Kunde gerade Sie anrufen? Eine klare Positionierung gibt darauf die Antwort. Ihre Kunden verstehen schneller, wofür Sie stehen, die richtigen Mandate finden leichter zu Ihnen, und jede Maßnahme in Marketing und Vertrieb zahlt auf dasselbe Ziel ein.</p><p>Hinter jeder Beratung stecken eine Haltung und eine Geschichte. Ich höre genau zu, frage nach und grabe tiefer, bis ich finde, was sie unverwechselbar macht. Am meisten Freude macht mir der Moment, in dem eine Positionierung das Unternehmen und die Menschen dahinter wirklich widerspiegelt.</p>',
    ]],
    ['contactSection', [
        'anchor' => 'kontakt',
        'subtitle' => 'Kontakt',
        'heading' => 'Bemerken Sie auch, wie KI Ihren Markt verändert?',
        'lead' => 'Dann ist jetzt ein guter Zeitpunkt, Ihre Positionierung zu schärfen. Im ersten Gespräch schauen wir gemeinsam, wo Sie heute stehen und welches Paket zu Ihnen passt. Vertraulich, persönlich und mit einer ehrlichen Einschätzung.',
        'customLink' => linkUrl(getenv('BOOKING_URL') ?: '#kontakt', 'Erstgespräch buchen'),
        'cardTitle' => 'Klingt gut – wann starten wir?',
        'cardIntro' => 'Sie sind hier richtig, wenn Sie',
        'points' => rowsText(['im KI-Zeitalter Mandate gewinnen,', 'neue Mitarbeitende für offene Stellen finden,', 'für Ihre Expertise im Markt bekannt sein', 'oder Ihre Marke positionieren möchten.']),
    ]],
]);
