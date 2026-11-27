<?php
use craft\elements\Asset;
use craft\elements\Entry;
use craft\elements\User;

$katrin = asset('katrin-renatus.jpg', 'Katrin Renatus');
$poster = asset('core-intelligence-clip.jpg', 'So arbeitet Platypus Strategieberatung');
$clip = asset('core-intelligence-clip.mp4', 'Clip: So arbeitet Platypus Strategieberatung');

// Packages
entryIn('packages', 'package', 'ORIGO', ['subtitle' => 'Paket 1 · Das Fundament', 'claim' => 'Profil entwickeln.', 'teaser' => 'Wissen, was der Markt von Ihnen erwartet – und eine zukunftsfähige Positionierung, die genau darauf antwortet.']);
entryIn('packages', 'package', 'COMPASS', ['subtitle' => 'Paket 2 · Die Ausrichtung', 'claim' => 'Marktposition steuern.', 'teaser' => 'Ihre Positionierung, übersetzt in strategische Leitplanken für Kommunikation, Marketing und Vertrieb.']);
entryIn('packages', 'package', 'NEXUS', ['subtitle' => 'Paket 3 · Wirksam im Alltag', 'claim' => 'Markt aktivieren.', 'teaser' => 'Ein umsetzungsreifer Fahrplan für die nächsten zwölf Monate. Sie entscheiden, was Ihr Team übernimmt und wo wir unterstützen.']);

// Cases
entryIn('cases', 'caseEntry', 'Vom No-Name zur vertrauten Fachinstanz.', ['subtitle' => 'Personalberatung', 'metric' => '0 → 350', 'metricCaption' => 'Newsletter-Kontakte', 'cardColor' => 'navy']);
entryIn('cases', 'caseEntry', 'Warum man eine erfolgreiche Positionierung nicht einfach kopieren kann.', ['teaserTitle' => 'Warum man eine Positionierung nicht kopieren kann.', 'subtitle' => 'Personalberatung · HSE', 'metric' => '1 Funktion', 'metricCaption' => 'statt einer ganzen Berufsgruppe', 'cardColor' => 'coral']);
entryIn('cases', 'caseEntry', 'Wenn die Kanzlei besser ist als ihr Ruf.', ['subtitle' => 'Steuerkanzlei', 'metric' => '5', 'metricCaption' => 'neue Mitarbeitende in zwölf Monaten', 'cardColor' => 'petrol']);
entryIn('cases', 'caseEntry', 'Für wen sind wir eigentlich da?', ['subtitle' => 'Beratung · Hotellerie', 'metric' => '1 Branche', 'metricCaption' => 'statt fünf Zielgruppen', 'cardColor' => 'plum']);

// Home page blocks
$blocks = [];
$add = function ($type, array $fields) use (&$blocks) {
    $blocks['new' . (count($blocks) + 1)] = ['type' => $type, 'enabled' => true, 'fields' => $fields];
};

$add('hero', [
    'subtitle' => 'Positionierung für Personal- und Beratungsunternehmen',
    'heading' => 'Im KI-Zeitalter Mandate gewinnen.',
    'lead' => 'Eine klare Positionierung schützt vor Austauschbarkeit und zeigt Ihren Kunden, warum sie gerade Sie brauchen.',
    'text' => '<p>Wir richten Ihre Positionierung gezielt auf Ihren Markt aus: unverwechselbar, relevant und auf Zahlen, Daten und Erfahrung gestützt. So entsteht ein Expertenprofil, das bei Mandanten und Talenten gleichermaßen ankommt. Am Ende halten Sie Ihre Roadmap mit sofort umsetzbaren Maßnahmen in den Händen – und entscheiden selbst, was Ihr Team übernimmt und wo wir Sie begleiten.</p>',
    'buttons' => [
        'new1' => ['type' => 'button', 'enabled' => true, 'fields' => ['button' => linkUrl('/warum-platypus#kontakt', 'Gespräch vereinbaren'), 'buttonStyle' => 'primary']],
        'new2' => ['type' => 'button', 'enabled' => true, 'fields' => ['button' => linkUrl('/angebot', 'Methode kennenlernen'), 'buttonStyle' => 'secondary']],
    ],
    'cardTitle' => 'Was Sie davon haben',
    'facts' => rowsMixed([['Raus aus der Austauschbarkeit'], ['Weniger Diskussionen über Honorare'], ['Ein Profil, das glaubwürdiger wirkt als jeder Bauchladen'], ['Mehr Empfehlungen'], ['Von Anfang an mit an Bord – statt Feuerwehreinsatz']]),
]);
$add('principles', [
    'subtitle' => 'Ausgangslage',
    'heading' => 'Warum sollte Ihr Kunde im Zeitalter von KI *gerade Sie anrufen?*',
    'accentColor' => 'plum',
    'text' => '<p>Den Suchprozess übernimmt zunehmend die KI, und Anbieter zeigen sich auf LinkedIn &amp; Co. für alle sichtbar. Wer klar sagen kann, wofür er steht, wird gewählt. Alle anderen werden verglichen.</p><p>Wir legen frei, was in Ihrer Beratung bereits angelegt ist – belegt mit Daten, geprüft mit Erfahrung.</p>',
    'itemLabel' => 'Prinzip',
    'cards' => rowsMixed([
        ['Daten statt Bauchgefühl', 'Jede Empfehlung hat eine Herkunft: Daten, Quellen oder eine nachvollziehbare Logik.'],
        ['Erst Fundament, dann Fassade', 'Erst Analyse und Positionierung, dann Kommunikation und Gestaltung.'],
        ['Ihr Team setzt um', 'Am Ende steht ein Fahrplan, den Ihr Team oder Ihre Agentur selbst gehen kann.'],
    ]),
]);
$add('methodTeaser', [
    'subtitle' => 'Unsere Methode',
    'heading' => 'Warum Ihre Beratung – und nicht die des stärksten Mitbewerbers?',
    'lead' => 'CORE.Intelligence! verbindet, was Ihre Beratung ausmacht, mit aktuellen Markt-, Wettbewerbs- und Markendaten. Die strategische Bewertung trifft bewusst ein Mensch.',
    'headLink' => linkUrl('/angebot', 'So funktioniert CORE.Intelligence!'),
    'video' => [$clip->id],
    'image' => [$poster->id],
    'listTitle' => 'Danach wissen Sie,',
    'points' => rowsMixed([
        'was der Markt von Ihrer Beratung und Ihrem Angebot erwartet,',
        'welche Positionierung zu Ihnen und Ihrem Markt passt,',
        'welche Leistungen und Kompetenzen Ihrer Zielgruppe besonders wichtig sind,',
        'wie Sie auftreten, damit Ihre Botschaften verstanden werden und wirken –',
        'und wie Suchmaschinen und KI-Systeme Ihre Positionierung richtig einordnen und weiterempfehlen.',
    ]),
]);
$add('packageTeaser', [
    'subtitle' => 'Unser Angebot',
    'heading' => 'Drei Pakete. Sie bestimmen, wie weit wir Sie begleiten.',
    'headLink' => linkUrl('/angebot#pakete', 'Pakete im Vergleich'),
]);
$add('numberedTiles', [
    'subtitle' => 'Warum Platypus',
    'heading' => 'Wir sind auf *(Personal-)Beratungen* spezialisiert und kennen Ihren Markt.',
    'accentColor' => 'coral',
    'text' => '<p>Wir begleiten Sie durch den gesamten Prozess, von der Analyse bis zum operativen Fahrplan. Unsere Methode macht uns schneller, präziser und effizienter.</p><p>Am Ende halten Sie eine Art Betriebsanleitung für Ihre gesamte Ansprache im Markt in den Händen:</p>',
    'tiles' => rowsMixed([
        ['Ihre Marktanforderung', 'Was der Markt in Vertrieb und Marketing von Ihnen erwartet.'],
        ['Business Context Szenario', 'Ihre Standortbestimmung in Marktumfeld und Wettbewerb.'],
        ['Markenfundament', 'Wer Sie sind, wofür Sie stehen und was Sie unterscheidet.'],
        ['Publikumsdefinition', 'Ihre Zielgruppen, ihre Fragen und ihre Erwartungen.'],
        ['Roadmap', 'Sofort umsetzbare Maßnahmen für Marketing und Vertrieb.'],
    ]),
]);
$add('principlePerson', [
    'subtitle' => 'Das Platypus-Prinzip',
    'kicker' => 'Scheinbarer Widerspruch als Erfolgsrezept',
    'heading' => 'Erst Fundament, dann Fassade.',
    'text' => '<p>Das Schnabeltier vereint Merkmale, die eigentlich nicht zusammenpassen – und ist gerade dadurch außergewöhnlich stabil. So arbeiten wir: Daten und Urteilskraft, strategische Tiefe und Umsetzbarkeit.</p>',
    'image' => [$katrin->id],
    'personName' => 'Katrin Renatus',
    'personRole' => 'Gründerin und Geschäftsführerin',
    'personText' => '<p>Platypus wurde 2015 in Hamburg gegründet. Katrin Renatus bringt nahezu 30 Jahre Erfahrung in Markenführung und Marketing mit – mehr als zehn davon mit Fokus auf Personalberatungen und Executive Search.</p><p>Aus einer Agentur für Websites und Content wurde eine spezialisierte Positionierungsberatung. Die eigene Neuausrichtung folgte derselben Logik, die wir heute anbieten: weg von der Austauschbarkeit, hin zu einer belegbaren Positionierung.</p>',
    'customLink' => linkUrl('/warum-platypus', 'Warum Platypus'),
]);
$add('caseTeaser', [
    'subtitle' => 'Cases',
    'heading' => 'Positionierungen, die angekommen sind.',
    'headLink' => linkUrl('/cases', 'Alle Fallbeispiele'),
]);
$add('newsTeaser', [
    'subtitle' => 'News',
    'heading' => 'Positionierung im KI-Zeitalter',
    'headLink' => linkUrl('/blog', 'Alle Beiträge'),
]);
$faq = [
    ['Was unterscheidet Platypus von anderen Positionierungsberatungen?', 'Viele arbeiten mit Workshops und Bauchgefühl. Wir arbeiten mit 1.952 Datenpunkten aus 56 Quellen – und Sie können jede Aussage im Ergebnis nachvollziehen. Dazu kommt die ausschließliche Spezialisierung auf Personal- und Executive-Search-Beratungen.'],
    ['Kann das nicht auch eine KI übernehmen?', 'KI ist fester Bestandteil unserer Methode – die Deutungshoheit behält der Mensch. Gerade weil generische KI-Tools austauschbare Ergebnisse liefern, braucht es jemanden, der das Besondere Ihrer Beratung erkennt.'],
    ['Wir hatten schon eine Positionierung, die in der Schublade verschwand.', 'Genau deshalb enden wir nicht beim Konzept. NEXUS mündet in einen Zwölf-Monats-Fahrplan, den Ihr Team selbst gehen kann.'],
    ['Was passiert, wenn Sie ausfallen?', 'Unser Ziel ist, Sie unabhängig zu machen – nicht, Sie abhängig zu halten. Jedes Ergebnis ist so aufgebaut, dass Ihr Team oder Ihre Agentur damit eigenständig weiterarbeiten kann.'],
    ['Gibt es Referenzen?', 'Ja. Vier Fallbeispiele zeigen, wie eine klare Positionierung im Markt wirkt – von der Personalberatung bis zur Steuerkanzlei. <a href="/cases">Zu den Cases</a>'],
    ['Lohnt sich die Investition?', 'Ein verlorenes Mandat kostet häufig mehr als ein Projekt. ORIGO ist bewusst als risikoarmer Einstieg geschnitten, um genau das zu prüfen.'],
];
$items = [];
foreach ($faq as $i => [$q, $a]) {
    $items['new' . ($i + 1)] = ['type' => 'faqItem', 'enabled' => true, 'fields' => ['question' => $q, 'answer' => "<p>$a</p>"]];
}
$add('faqSection', [
    'subtitle' => 'FAQ',
    'heading' => 'Ehrliche Antworten auf berechtigte Fragen.',
    'faqItems' => $items,
]);

$page = Entry::find()->section('pages')->slug('__home__')->status(null)->one() ?? throw new Exception('home page entry not found');
$page->setFieldValue('contentBuilder', $blocks);
save($page);
echo "home page: {$page->url}\n";
