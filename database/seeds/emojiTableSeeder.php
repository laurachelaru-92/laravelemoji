<?php

use App\Emoji;
use Eastwest\Json\Json;
use Illuminate\Database\Seeder;

class emojiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emoji  = '[{
                    "slug": "grinning-face",
                    "character": "😀",
                    "unicodeName": "grinning face",
                    "codePoint": "1F600",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "grinning-face-with-big-eyes",
                    "character": "😃",
                    "unicodeName": "grinning face with big eyes",
                    "codePoint": "1F603",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "grinning-face-with-smiling-eyes",
                    "character": "😄",
                    "unicodeName": "grinning face with smiling eyes",
                    "codePoint": "1F604",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "beaming-face-with-smiling-eyes",
                    "character": "😁",
                    "unicodeName": "beaming face with smiling eyes",
                    "codePoint": "1F601",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "grinning-squinting-face",
                    "character": "😆",
                    "unicodeName": "grinning squinting face",
                    "codePoint": "1F606",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "grinning-face-with-sweat",
                    "character": "😅",
                    "unicodeName": "grinning face with sweat",
                    "codePoint": "1F605",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "rolling-on-the-floor-laughing",
                    "character": "🤣",
                    "unicodeName": "rolling on the floor laughing",
                    "codePoint": "1F923",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "face-with-tears-of-joy",
                    "character": "😂",
                    "unicodeName": "face with tears of joy",
                    "codePoint": "1F602",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "slightly-smiling-face",
                    "character": "🙂",
                    "unicodeName": "slightly smiling face",
                    "codePoint": "1F642",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "upside-down-face",
                    "character": "🙃",
                    "unicodeName": "upside-down face",
                    "codePoint": "1F643",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "winking-face",
                    "character": "😉",
                    "unicodeName": "winking face",
                    "codePoint": "1F609",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "smiling-face-with-smiling-eyes",
                    "character": "😊",
                    "unicodeName": "smiling face with smiling eyes",
                    "codePoint": "1F60A",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "smiling-face-with-halo",
                    "character": "😇",
                    "unicodeName": "smiling face with halo",
                    "codePoint": "1F607",
                    "group": "smileys-emotion",
                    "subGroup": "face-smiling"
                },
                {
                    "slug": "smiling-face-with-hearts",
                    "character": "🥰",
                    "unicodeName": "smiling face with hearts",
                    "codePoint": "1F970",
                    "group": "smileys-emotion",
                    "subGroup": "face-affection"
                },
                {
                    "slug": "smiling-face-with-heart-eyes",
                    "character": "😍",
                    "unicodeName": "smiling face with heart-eyes",
                    "codePoint": "1F60D",
                    "group": "smileys-emotion",
                    "subGroup": "face-affection"
                },
                {
                    "slug": "star-struck",
                    "character": "🤩",
                    "unicodeName": "star-struck",
                    "codePoint": "1F929",
                    "group": "smileys-emotion",
                    "subGroup": "face-affection"
                },
                {
                    "slug": "face-blowing-a-kiss",
                    "character": "😘",
                    "unicodeName": "face blowing a kiss",
                    "codePoint": "1F618",
                    "group": "smileys-emotion",
                    "subGroup": "face-affection"
                },
                {
                    "slug": "kissing-face",
                    "character": "😗",
                    "unicodeName": "kissing face",
                    "codePoint": "1F617",
                    "group": "smileys-emotion",
                    "subGroup": "face-affection"
                },
                {
                    "slug": "smiling-face",
                    "character": "☺️",
                    "unicodeName": "smiling face",
                    "codePoint": "263A FE0F",
                    "group": "smileys-emotion",
                    "subGroup": "face-affection"
                },
                {
                    "slug": "kissing-face-with-closed-eyes",
                    "character": "😚",
                    "unicodeName": "kissing face with closed eyes",
                    "codePoint": "1F61A",
                    "group": "smileys-emotion",
                    "subGroup": "face-affection"
                },
                {
                    "slug": "kissing-face-with-smiling-eyes",
                    "character": "😙",
                    "unicodeName": "kissing face with smiling eyes",
                    "codePoint": "1F619",
                    "group": "smileys-emotion",
                    "subGroup": "face-affection"
                },
                {
                    "slug": "face-savoring-food",
                    "character": "😋",
                    "unicodeName": "face savoring food",
                    "codePoint": "1F60B",
                    "group": "smileys-emotion",
                    "subGroup": "face-tongue"
                },
                {
                    "slug": "face-with-tongue",
                    "character": "😛",
                    "unicodeName": "face with tongue",
                    "codePoint": "1F61B",
                    "group": "smileys-emotion",
                    "subGroup": "face-tongue"
                },
                {
                    "slug": "winking-face-with-tongue",
                    "character": "😜",
                    "unicodeName": "winking face with tongue",
                    "codePoint": "1F61C",
                    "group": "smileys-emotion",
                    "subGroup": "face-tongue"
                },
                {
                    "slug": "zany-face",
                    "character": "🤪",
                    "unicodeName": "zany face",
                    "codePoint": "1F92A",
                    "group": "smileys-emotion",
                    "subGroup": "face-tongue"
                },
                {
                    "slug": "squinting-face-with-tongue",
                    "character": "😝",
                    "unicodeName": "squinting face with tongue",
                    "codePoint": "1F61D",
                    "group": "smileys-emotion",
                    "subGroup": "face-tongue"
                },
                {
                    "slug": "money-mouth-face",
                    "character": "🤑",
                    "unicodeName": "money-mouth face",
                    "codePoint": "1F911",
                    "group": "smileys-emotion",
                    "subGroup": "face-tongue"
                },
                {
                    "slug": "hugging-face",
                    "character": "🤗",
                    "unicodeName": "hugging face",
                    "codePoint": "1F917",
                    "group": "smileys-emotion",
                    "subGroup": "face-hand"
                },
                {
                    "slug": "face-with-hand-over-mouth",
                    "character": "🤭",
                    "unicodeName": "face with hand over mouth",
                    "codePoint": "1F92D",
                    "group": "smileys-emotion",
                    "subGroup": "face-hand"
                },
                {
                    "slug": "shushing-face",
                    "character": "🤫",
                    "unicodeName": "shushing face",
                    "codePoint": "1F92B",
                    "group": "smileys-emotion",
                    "subGroup": "face-hand"
                },
                {
                    "slug": "thinking-face",
                    "character": "🤔",
                    "unicodeName": "thinking face",
                    "codePoint": "1F914",
                    "group": "smileys-emotion",
                    "subGroup": "face-hand"
                },
                {
                    "slug": "zipper-mouth-face",
                    "character": "🤐",
                    "unicodeName": "zipper-mouth face",
                    "codePoint": "1F910",
                    "group": "smileys-emotion",
                    "subGroup": "face-neutral-skeptical"
                },
                {
                    "slug": "face-with-raised-eyebrow",
                    "character": "🤨",
                    "unicodeName": "face with raised eyebrow",
                    "codePoint": "1F928",
                    "group": "smileys-emotion",
                    "subGroup": "face-neutral-skeptical"
                },
                {
                    "slug": "neutral-face",
                    "character": "😐",
                    "unicodeName": "neutral face",
                    "codePoint": "1F610",
                    "group": "smileys-emotion",
                    "subGroup": "face-neutral-skeptical"
                },
                {
                    "slug": "expressionless-face",
                    "character": "😑",
                    "unicodeName": "expressionless face",
                    "codePoint": "1F611",
                    "group": "smileys-emotion",
                    "subGroup": "face-neutral-skeptical"
                },
                {
                    "slug": "face-without-mouth",
                    "character": "😶",
                    "unicodeName": "face without mouth",
                    "codePoint": "1F636",
                    "group": "smileys-emotion",
                    "subGroup": "face-neutral-skeptical"
                },
                {
                    "slug": "smirking-face",
                    "character": "😏",
                    "unicodeName": "smirking face",
                    "codePoint": "1F60F",
                    "group": "smileys-emotion",
                    "subGroup": "face-neutral-skeptical"
                },
                {
                    "slug": "unamused-face",
                    "character": "😒",
                    "unicodeName": "unamused face",
                    "codePoint": "1F612",
                    "group": "smileys-emotion",
                    "subGroup": "face-neutral-skeptical"
                },
                {
                    "slug": "face-with-rolling-eyes",
                    "character": "🙄",
                    "unicodeName": "face with rolling eyes",
                    "codePoint": "1F644",
                    "group": "smileys-emotion",
                    "subGroup": "face-neutral-skeptical"
                },
                {
                    "slug": "grimacing-face",
                    "character": "😬",
                    "unicodeName": "grimacing face",
                    "codePoint": "1F62C",
                    "group": "smileys-emotion",
                    "subGroup": "face-neutral-skeptical"
                },
                {
                    "slug": "lying-face",
                    "character": "🤥",
                    "unicodeName": "lying face",
                    "codePoint": "1F925",
                    "group": "smileys-emotion",
                    "subGroup": "face-neutral-skeptical"
                },
                {
                    "slug": "relieved-face",
                    "character": "😌",
                    "unicodeName": "relieved face",
                    "codePoint": "1F60C",
                    "group": "smileys-emotion",
                    "subGroup": "face-sleepy"
                },
                {
                    "slug": "pensive-face",
                    "character": "😔",
                    "unicodeName": "pensive face",
                    "codePoint": "1F614",
                    "group": "smileys-emotion",
                    "subGroup": "face-sleepy"
                },
                {
                    "slug": "sleepy-face",
                    "character": "😪",
                    "unicodeName": "sleepy face",
                    "codePoint": "1F62A",
                    "group": "smileys-emotion",
                    "subGroup": "face-sleepy"
                },
                {
                    "slug": "drooling-face",
                    "character": "🤤",
                    "unicodeName": "drooling face",
                    "codePoint": "1F924",
                    "group": "smileys-emotion",
                    "subGroup": "face-sleepy"
                },
                {
                    "slug": "sleeping-face",
                    "character": "😴",
                    "unicodeName": "sleeping face",
                    "codePoint": "1F634",
                    "group": "smileys-emotion",
                    "subGroup": "face-sleepy"
                },
                {
                    "slug": "face-with-medical-mask",
                    "character": "😷",
                    "unicodeName": "face with medical mask",
                    "codePoint": "1F637",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "face-with-thermometer",
                    "character": "🤒",
                    "unicodeName": "face with thermometer",
                    "codePoint": "1F912",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "face-with-head-bandage",
                    "character": "🤕",
                    "unicodeName": "face with head-bandage",
                    "codePoint": "1F915",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "nauseated-face",
                    "character": "🤢",
                    "unicodeName": "nauseated face",
                    "codePoint": "1F922",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "face-vomiting",
                    "character": "🤮",
                    "unicodeName": "face vomiting",
                    "codePoint": "1F92E",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "sneezing-face",
                    "character": "🤧",
                    "unicodeName": "sneezing face",
                    "codePoint": "1F927",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "hot-face",
                    "character": "🥵",
                    "unicodeName": "hot face",
                    "codePoint": "1F975",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "cold-face",
                    "character": "🥶",
                    "unicodeName": "cold face",
                    "codePoint": "1F976",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "woozy-face",
                    "character": "🥴",
                    "unicodeName": "woozy face",
                    "codePoint": "1F974",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "dizzy-face",
                    "character": "😵",
                    "unicodeName": "dizzy face",
                    "codePoint": "1F635",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "exploding-head",
                    "character": "🤯",
                    "unicodeName": "exploding head",
                    "codePoint": "1F92F",
                    "group": "smileys-emotion",
                    "subGroup": "face-unwell"
                },
                {
                    "slug": "cowboy-hat-face",
                    "character": "🤠",
                    "unicodeName": "cowboy hat face",
                    "codePoint": "1F920",
                    "group": "smileys-emotion",
                    "subGroup": "face-hat"
                },
                {
                    "slug": "partying-face",
                    "character": "🥳",
                    "unicodeName": "partying face",
                    "codePoint": "1F973",
                    "group": "smileys-emotion",
                    "subGroup": "face-hat"
                },
                {
                    "slug": "smiling-face-with-sunglasses",
                    "character": "😎",
                    "unicodeName": "smiling face with sunglasses",
                    "codePoint": "1F60E",
                    "group": "smileys-emotion",
                    "subGroup": "face-glasses"
                },
                {
                    "slug": "nerd-face",
                    "character": "🤓",
                    "unicodeName": "nerd face",
                    "codePoint": "1F913",
                    "group": "smileys-emotion",
                    "subGroup": "face-glasses"
                },
                {
                    "slug": "face-with-monocle",
                    "character": "🧐",
                    "unicodeName": "face with monocle",
                    "codePoint": "1F9D0",
                    "group": "smileys-emotion",
                    "subGroup": "face-glasses"
                },
                {
                    "slug": "confused-face",
                    "character": "😕",
                    "unicodeName": "confused face",
                    "codePoint": "1F615",
                    "group": "smileys-emotion",
                    "subGroup": "face-concerned"
                },
                {
                    "slug": "worried-face",
                    "character": "😟",
                    "unicodeName": "worried face",
                    "codePoint": "1F61F",
                    "group": "smileys-emotion",
                    "subGroup": "face-concerned"
                },
                {
                    "slug": "slightly-frowning-face",
                    "character": "🙁",
                    "unicodeName": "slightly frowning face",
                    "codePoint": "1F641",
                    "group": "smileys-emotion",
                    "subGroup": "face-concerned"
                },
                {
                    "slug": "frowning-face",
                    "character": "☹️",
                    "unicodeName": "frowning face",
                    "codePoint": "2639 FE0F",
                    "group": "smileys-emotion",
                    "subGroup": "face-concerned"
                },
                {
                    "slug": "face-with-open-mouth",
                    "character": "😮",
                    "unicodeName": "face with open mouth",
                    "codePoint": "1F62E",
                    "group": "smileys-emotion",
                    "subGroup": "face-concerned"
                }]';

            $emojiArray = Json::decode($emoji, true);

            foreach ($emojiArray as $emoji) {
                $emojiNew = new Emoji;
                $emojiNew->fill($emoji);
                $emojiNew->save();
            }

    }
}
