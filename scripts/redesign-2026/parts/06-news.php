<?php
use craft\elements\Asset;
use craft\elements\Entry;
use craft\elements\User;

// Topics
$topics = [];
foreach ([
    ['Daten statt Bauchgefühl', '', 'petrol'],
    ['Positionierung im KI-Zeitalter', 'KI-Zeitalter', 'plum'],
    ['Diskretion C-Level', '', 'coral'],
] as [$title, $short, $color]) {
    $section = Craft::$app->entries->getSectionByHandle('topics');
    $t = Entry::find()->section('topics')->title($title)->one() ?? new Entry(['sectionId' => $section->id, 'typeId' => $section->getEntryTypes()[0]->id]);
    $t->title = $title;
    $t->setFieldValues(['shortLabel' => $short, 'topicColor' => $color]);
    $topics[$title] = save($t);
}

// Author profile: only when AUTHOR_USERNAME is given (e.g. Katrin's account)
$user = authorUser();
if (getenv('AUTHOR_USERNAME')) {
    $katrin = Asset::find()->filename('katrin-renatus.jpg')->one();
    $user->setFieldValues([
        'photo' => $katrin ? [$katrin->id] : [],
        'bio' => 'Gründerin von Platypus Strategieberatung. Berät Inhaber und Partner von Personalberatungen beim Aufbau relevanter Positionierungen.',
        'profileLink' => ['type' => 'url', 'value' => '/warum-platypus', 'label' => 'Mehr über Katrin'],
        'authorLabel' => 'Autorin',
    ]);
    save($user);
}

$venn = asset('innensicht-marktsicht.svg', 'Innensicht und Marktsicht', 'Zwei Kreise, Innensicht und Marktsicht, überschneiden sich. In der Schnittmenge steht: belegte Positionierung.');

$p1 = post('Warum eine Positionierung Belege braucht.', 'warum-eine-positionierung-belege-braucht', [
    'topic' => [$topics['Daten statt Bauchgefühl']->id],
    'series' => 'Positionierung im KI-Zeitalter',
    'blogSummary' => 'Bauchgefühl ist ein guter Anfang. Wie Markt-, Wettbewerbs- und Markendaten aus einer Vermutung eine Positionierung machen, die auch kritische Auftraggeber überzeugt.',
    'blogFeaturedImage' => [$venn->id],
    'keyPoints' => array_map(fn($t) => ['text' => $t], ['Die eigene Sicht ist der Rohstoff – aber sie unterscheidet kaum.', 'Daten zeigen, was der Markt erwartet und wo noch Raum ist.', 'Die Entscheidung trifft ein Mensch mit Erfahrung.']),
], '2026-11-20 09:00:00');

$html = '<p>Fragen Sie zehn Inhaber von Personalberatungen, was ihre Beratung besonders macht, hören Sie oft ähnliche Antworten: persönliche Betreuung, ein starkes Netzwerk, langjährige Erfahrung. Das stimmt meistens. Nur sagen es die Wettbewerber auch.</p>'
    . '<p>Eine Positionierung, die allein auf der eigenen Wahrnehmung beruht, hat deshalb ein Problem: Sie klingt richtig, unterscheidet aber kaum. Und sie lässt sich schwer verteidigen, wenn ein Auftraggeber nachfragt.</p>'
    . '<h2>Die Innensicht ist wertvoll – aber nur die halbe Wahrheit</h2>'
    . '<p>Niemand kennt Ihre Beratung so gut wie Sie. Ihre Erfahrung, Ihre Arbeitsweise, Ihre Erfolgsmuster sind der Rohstoff jeder guten Positionierung. Was die Innensicht nicht zeigt: wie der Markt Sie wahrnimmt, was Ihre Zielgruppe wirklich erwartet und wo Ihr Wettbewerb bereits steht.</p>'
    . nestedIn($p1, 'articleCompare', ['leftLabel' => 'Innensicht', 'leftText' => '„Wofür wir stehen wollen“', 'rightLabel' => 'Marktsicht', 'rightText' => '„Wofür man uns wählt“'])
    . '<p>Genau zwischen diesen beiden Sätzen liegt die Lücke, die eine Positionierung schließen muss.</p>'
    . nestedIn($p1, 'quote', ['text' => '<p>Wer nicht klar sagen kann, wofür er steht, wird verglichen – und nicht gewählt.</p>'])
    . '<h2>Was Daten leisten können</h2>'
    . '<p>Markt-, Wettbewerbs- und Markendaten machen sichtbar, was sonst Vermutung bleibt. Sie zeigen, welche Leistungen für Ihre Zielgruppe tatsächlich relevant sind, welche Versprechen im Markt bereits besetzt sind und wo es Raum für ein eigenes Profil gibt.</p>'
    . '<p>Bei Platypus verbinden wir dafür die Antworten aus einem Tiefeninterview mit Daten aus 56 anerkannten Quellen, darunter ifo, EZB, Bundesbank, Interbrand und Deloitte. Eine KI verdichtet das Material. So entsteht ein Bild, das manuell in dieser Tiefe kaum herzustellen wäre.</p>'
    . nestedIn($p1, 'articleStats', ['stats' => [['title' => '1.952', 'text' => 'Datenpunkte fließen in jede Analyse ein'], ['title' => '56', 'text' => 'anerkannte externe Quellen'], ['title' => '3–4 Std.', 'text' => 'Interview statt tagelanger Workshops']]])
    . nestedIn($p1, 'articleLists', ['columns' => [['title' => 'Daten liefern', 'text' => "was Ihre Zielgruppe erwartet\nwelche Versprechen bereits besetzt sind\nwo Raum für ein eigenes Profil ist"], ['title' => 'Der Mensch entscheidet', 'text' => "welche Positionierung zu Ihnen passt\nwelche Eigenschaft zur Stärke wird\nwie konsequent Sie sie vertreten"]]])
    . '<h2>Und was sie nicht leisten</h2>'
    . '<p>Daten grenzen den Lösungsraum ein. Sie entscheiden nicht, welche Positionierung zu Ihnen passt. Dafür braucht es Erfahrung und Urteilsvermögen – jemanden, der Ihre Branche kennt und erkennt, welche Ihrer Eigenschaften im Markt zur Stärke werden. Deshalb trifft bei uns die strategische Bewertung bewusst ein Mensch.</p>'
    . '<h2>Belege überzeugen auch Ihre Kunden</h2>'
    . '<p>Eine Positionierung mit Herkunft hat einen zweiten Vorteil: Sie lässt sich begründen. Im Erstgespräch, auf der Website, in jedem Angebot. Gerade Auftraggeber im C-Level-Segment schätzen es, wenn ein Versprechen nachvollziehbar ist. Das schafft Vertrauen, bevor das erste Mandat vergeben ist.</p>'
    . nestedIn($p1, 'articleTakeaway', ['statement' => 'Bauchgefühl bleibt ein guter Anfang. Mit Belegen wird daraus eine Positionierung, auf die Sie bauen können.', 'customLink' => ['type' => 'url', 'value' => '/angebot', 'label' => 'So funktioniert CORE.Intelligence!']]);
$p1->setFieldValue('blogContent', $html);
save($p1);
echo "post: {$p1->url}\n";

$p2 = post('Was Personalberatungen unersetzlich macht, wenn KI die Recherche übernimmt', 'was-personalberatungen-unersetzlich-macht', [
    'topic' => [$topics['Positionierung im KI-Zeitalter']->id],
    'blogSummary' => 'KI automatisiert klassische Rechercheaufgaben und entwertet austauschbare Leistungen. Was bleibt, sind Vertrauen, Urteilskraft und eine klare Position. Eine Einordnung für Inhaberinnen und Inhaber.',
], '2026-11-13 09:00:00', false);
$p3 = post('Sichtbar werden, ohne laut zu sein', 'sichtbar-werden-ohne-laut-zu-sein', [
    'topic' => [$topics['Diskretion C-Level']->id],
    'blogSummary' => 'Executive-Search-Boutiquen leben von Diskretion. Wie eine Positionierung Profil schafft, ohne Mandatsinformationen preiszugeben – und warum gerade das im C-Level-Segment überzeugt.',
], '2026-11-06 09:00:00', false);
echo "posts 2, 3: {$p2->url} {$p3->url}\n";
