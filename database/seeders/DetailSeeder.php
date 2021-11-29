<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//created and coded by Andriatama Bagaskara
class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            [
                'book_id' => 1,
                'author' => 'Victor Hugo',
                'publisher' => 'Wordsworth Classics',
                'year' => 1831,
                'description' => 'This extraordinary historical novel, set in Medieval Paris under the twin towers of its greatest structure and supreme symbol, the cathedral of Notre-Dame, is the haunting drama of Quasimodo, the hunchback; Esmeralda, the gypsy dancer; and Claude Frollo, the priest tortured by the specter of his own damnation. Shaped by a profound sense of tragic irony, it is a work that gives full play to Victor Hugo\'s brilliant historical imagination and his remarkable powers of description.'
            ],
            [
                'book_id' => 2,
                'author' => 'Charles Dickens',
                'publisher' => 'Wordsworth Classics',
                'year' => 1849,
                'description' => 'David Copperfield is the story of a young man\'s adventures on his journey from an unhappy and impoverished childhood to the discovery of his vocation as a successful novelist. Among the gloriously vivid cast of characters he encounters are his tyrannical stepfather, Mr Murdstone; his brilliant, but ultimately unworthy school-friend James Steerforth; his formidable aunt, Betsey Trotwood; the eternally humble, yet treacherous Uriah Heep; frivolous, enchanting Dora Spenlow; and the magnificently impecunious Wilkins Micawber, one of literature\'s great comic creations. In David Copperfield - the novel he described as his \'favourite child\' - Dickens drew revealingly on his own experiences to create one of the most exuberant and enduringly popular works, filled with tragedy and comedy in equal measure. This edition uses the text of the first volume publication of 1850, and includes updated suggestions for further reading, original illustrations by \'Phiz\', a revised chronology and expanded notes. In his new introduction, Jeremy Tambling discusses the novel\'s autobiographical elements, and its central themes of memory and identity.'
            ],
            [
                'book_id' => 3,
                'author' => 'John Green',
                'publisher' => 'Dutton Books',
                'year' => 2012,
                'description' => 'Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazel\'s story is about to be completely rewritten.'
            ],
            [
                'book_id' => 4,
                'author' => 'Jostein Gaarder',
                'publisher' => 'Aschehoug',
                'year' => 1991,
                'description' => 'Sophie\'s World (Norwegian: Sofies verden) is a 1991 novel by Norwegian writer Jostein Gaarder. It follows Sophie Amundsen, a Norwegian teenager, who is introduced to the history of philosophy as she is asked \"Who are you?\" in a letter from an unknown philosopher.'
            ],
            [
                'book_id' => 5,
                'author' => 'Franz Kafka',
                'publisher' => 'Kurt Wolff Verlag. Leipzig',
                'year' => 1915,
                'descriptioin' => 'As Gregor Samsa awoke one morning from uneasy dreams he found himself transformed in his bed into a gigantic insect. He was laying on his hard, as it were armor-plated, back and when he lifted his head a little he could see his domelike brown belly divided into stiff arched segments on top of which the bed quilt could hardly keep in position and was about to slide off completely. His numerous legs, which were pitifully thin compared to the rest of his bulk, waved helplessly before his eyes.'
            ],
            [
                'book_id' => 6,
                'author' => 'Franz Kafka',
                'publisher' => 'Verlag Die Schmiede. Berlin',
                'year' => 1925,
                'description' => 'Written in 1914 but not published until 1925, a year after Kafka\’s death, The Trial is the terrifying tale of Josef K., a respectable bank officer who is suddenly and inexplicably arrested and must defend himself against a charge about which he can get no information. Whether read as an existential tale, a parable, or a prophecy of the excesses of modern bureaucracy wedded to the madness of totalitarianism, The Trial has resonated with chilling truth for generations of readers.'
            ],
            [
                'book_id' => 7,
                'author' => 'Agatha Christie',
                'publisher' => 'William Collins & Sons',
                'year' => 1928,
                'description' => 'A mysterious woman, a legendary cursed jewel, and a night train from London to the French Riviera -- ingredients for the perfect romance or the perfect crime? When the train stops, the jewel is missing, and the woman is found dead in her compartment. It\'s the perfect mystery, filled with passion, greed, deceit, and confusion. Hercule Poirot is the perfect detective to solve it...'
            ],
            [
                'book_id' => 8,
                'author' => 'Sir Arthur Conan Doyle',
                'publisher' => 'George Newnes Ltd',
                'year' => 1905,
                'description' => 'The Return of Sherlock Holmes is a 1905 collection of 13 Sherlock Holmes stories, originally published in 1903–1904, by Arthur Conan Doyle. The stories were published in the Strand Magazine in Britain and Collier\'s in the United States.'
            ],
            [
                'book_id' => 9,
                'author' => 'H.P Lovecraft',
                'publisher' => 'Gutenberg Classics',
                'year' => 1926,
                'description' => 'One of the feature stories of the Cthulhu Mythos, H.P. Lovecraft\'s \'the Call of Cthulhu\' is a harrowing tale of the weakness of the human mind when confronted by powers and intelligences from beyond our world.'
            ],
            [
                'book_id' => 10,
                'author' => 'William Shakespeare',
                'publisher' => 'Old English Books',
                'year' => 1600,
                'description' => 'The Tragedy of Hamlet, Prince of Denmark, often shortened to Hamlet (/ˈhæmlɪt/), is a tragedy written by William Shakespeare sometime between 1599 and 1601. It is Shakespeare\'s longest play, with 29,551 words. Set in Denmark, the play depicts Prince Hamlet and his revenge against his uncle, Claudius, who has murdered Hamlet\'s father in order to seize his throne and marry Hamlet\'s mother.'
            ]
        ]);
    }
}
